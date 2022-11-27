/**
* ManifestEditor.20220902.js
*
* Form to create or update a manifest db entry
*
* Requires ~~forms/bit-flags/FlagsInput.1.js
*
* Copyright 2021, ShaneBow, All Rights Reserved
* http://www.shanebow.com
*
* 20211114 rts created
* 20220902 rts markup included
***********************************************************/
;( function( window ){
	const defaults = {
		urlPost: '/api/manifest/post',
		urlLoad: '/api/manifest/get',
		varsLoad: () => { return{}}, // often the font
		imgDiv: 'form.manifest .imgPick', // for Media Picker
		btnPickImg: 'form.manifest .imgPick',
		imgChanged: ($img) => {}, // $img has attrs: src, mid, title, alt
		isValid: () => true,
		getExtra: () => {}, // usually send payload
		onReset: () => {}, // create new manifest
		onLoaded: (manifest) => {}, // form already populated, can use manifest
		onSaved: (id) => {UBOW.flashSuccess(`Manifest saved, id: ${id}`)},
		otypes: null, // if supplied, creates select
		flags: {
			pub: {name:"Publish", value:128},
			feat:{name:"Feature", value:64},
			},
		access: {
			free: {name:"Free", value:0},
			memb: {name:"Members", value:1},
			subs: {name:"Subscribers", value:2},
			prod: {name:"Product", value:4},
			bund: {name:"Bundled", value:8}, // only available as part of another product
			},
		};
	class ManifestEditor extends UBOW.Form {
		static HTML = `
			<form class="panel panel-default manifest">
			 <div class="panel-heading">
			  <b>Manifest</b>
			  <a class="btn btn-xs btn-primary pull-right new">
			    <i class="fa fa-plus" style="color:#fff"></i></a>
			 </div>

			 <div class="panel-body">
			  <input name="id" type="hidden" value="0" />

			  <div class="form-border ar ar16x9 mb-10 imgPick">
			   <img mid="0" src="/uploads/0.jpg" />
			  </div>

			  <div class="form-group">
			   <label>Ord/Title</label>
			   <div class="input-group">
			    <input name="ord" class="form-control" style="width:25%;border-right: none">
			    <input name="title" class="form-control" placeholder="Dataset name" style="width:75%">
			   </div>
			  </div>

			  <div class="form-group otype">
			   <label>Object Type</label>
			  </div>

			  <div class="form-group access">
			   <label>Access</label>
			   <select name="access" class="form-control"></select>
			  </div>

			  <div class="form-group">
			   <label class="control-label">Flags</label>
			   <div class="form-border flags"></div>
			  </div>

			  <div class="form-group">
			   <label class="control-label">Desc</label>
			   <textarea name="desc" rows="4" class="form-control"></textarea>
			  </div>

			  <div class="form-group">
			   <a href="#dlg-tags-picker" data-toggle="modal" class="no-pad pull-right">
			    <i class="icon-file-plus"></i>
			   </a>      
			   <label class="control-label">Tags</label>
			   <div id="tagged-as" class="row tagcloud pull-right"></div>
			  </div>

			  <div class="form-group">
			   <label class="control-label">Owner</label>
			   <input name="owner" class="form-control" />
			  </div>

			 </div>
			 <div class="panel-footer right">
			  <button type="submit" class="btn btn-primary btn-outline">Submit</button>
			 </div>
			</form>`;

		constructor(sel, opts) { // @TODO - should take selector not jQuery
			super($(ManifestEditor.HTML).appendTo($(sel))); //	 my.$frm
//			super('form.manifest'); //	 my.$frm
			const my = this;
			my.settings = {...defaults, ...opts};
			if (my.settings.imgDiv != defaults.imgDiv)
				$(defaults.imgDiv).remove();
			let $otype = 'name="otype" class="form-control"';
			if (my.settings.otypes) {
				$otype = $(`<select ${$otype} />`);
				$.each(my.settings.otypes, (i, otype) => {
					$otype.append(
						`<option value="${otype.value}">${otype.name}</option>`)
					});
				}
			else
				$otype = $(`<input ${$otype} />`);
			my.$frm.find('.otype').append($otype);

			let $access = my.$frm.find('[name=access]');
			$.each(my.settings.access, (i, acc) => {
				$access.append(
					`<option value="${acc.value}">${acc.name}</option>`)
				});

			my.imgPicker = new MediaPicker(my.settings.imgDiv, {
				btn:my.settings.btnPickImg,
				verbose:!1,
				onChange: my.settings.imgChanged,
				});

			// handle check button clicks (i.e. flags)
			my.flags = new UBOW.FlagsInput(my.$frm.find('.flags'), my.settings.flags);

			my.$frm.on('click', '.btn.new', function(e) {
				e.preventDefault();
				my.clear();
				my.settings.onReset();
				});

			my.$frm.on('submit', function(e) {
				e.preventDefault();
				if (!my.settings.isValid())
					return;

				const $id = my.$frm.find('[name=id]');
				let id = $id.val();
				let extra = my.settings.getExtra() || {};
				extra.flags = my.flags.get();
				//	extra.tags = my.tagsPicker.csvIDs();
				extra.mid = my.imgPicker.csvIDs();

				UBOW.ajaxForm(my.$frm, my.settings.urlPost, extra, function(msg,id){
					$id.val(id);
					my.settings.onSaved(id);
					});
				});

			my.clear();
			}

		clear() {
			const my = this;
			super.clear();
			//	"my.imgPicker.reset()" doesn't exist, so...
			var $img = $(my.settings.imgDiv + ' img');
			if ($img) {
				$img.attr('mid', 0);
				$img.attr('src', '/uploads/0.jpg');
				// we could reset 'title', 'alt' attrs also???
				}
			my.flags.clear();
			my.settings.otype && my.set('otype', my.settings.otype);
			}

		load(id) {
			const my = this;
			let vars = my.settings.varsLoad();
			vars.id = id;
			UBOW.ajax(my.settings.urlLoad, vars,(err,dat,msg) => {
				if (err) return UBOW.flashError(`Unable to load manifest ${id}: ${msg}`);
				my.populate(dat);
				my.flags.set(dat.flags);
				var $img = $(my.settings.imgDiv + ' img');
				if ($img) {
					$img.attr('mid', dat.mid);
					$img.attr('src', UBOW.imgSrc(dat.mid, dat.mtype));
				// 'title', 'alt' ???
					}
				my.settings.onLoaded(dat);
				});
			}
	/*****
		populate(manifest) {
			const my = this;
			my.$frm.find('[name=title]').val(manifest.title);
			}
	*****/
		}

	UBOW.ManifestEditor = ManifestEditor;
	})( window );
