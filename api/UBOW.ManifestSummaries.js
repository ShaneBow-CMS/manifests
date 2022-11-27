;( function( window ){
	const defaults = {
		url: '/api/manifest/summaries/',
		per_page: 12,
		extra: {otype: 0},
	//	col_class: "col-xs-6 col-sm-4",
		ar: '16x9',
		meta: "all",
		verb: "Read",
		container: '<ul class="manifests center clearfix"></ul>',
		onClick: (idMani, oType) => console.log('clicked manifest:', idManifest),
		uid: 0,
		};

	class ManifestSummaries extends UBOW.PagedList {
		constructor(el, options) {
			let opts = $.extend({}, defaults, options);
			super(el, opts);
			const my = this;
			my.$list.on('click', 'li', function(e){
				e.preventDefault();
				const id = $(this).attr('mani');
				const otype = parseInt($(this).attr('otype'));
				UBOW.flashSuccess('Clicked manifest: id = ' + id);
				my.opts.onClick(id, otype);
				});
			}

		rendered($item, item, $list) {
			var img = new Image();
			img.onload = function() { $item.find('img').attr('src', this.src); }
			img.src = '/uploads/' + item.banner;
			}

		renderPage(items, paging) {
			const my = this;

			super.renderPage(items, paging);
	//		my.$list.alignElementsSameHeight();
			}

		markup(sum) {
			const my = this;

			return `
				<li mani="${sum.id}" otype="${sum.otype}">
				 <a href="#" title="${sum.title}">
				  <div class="ar ar${my.opts.ar}">
				   <img alt="${sum.title}" src="${UBOW.imgSrc(sum.mid,sum.mtype)}">
				  </div>
			 	  <h3>${sum.title}</h3>
				 </a>
				</li>`;
			}

		reset(opts) {
			this.opts = $.extend({}, this.opts, opts);
			this.show();
			}

		}

	UBOW.ManifestSummaries = ManifestSummaries;
	})( window );
