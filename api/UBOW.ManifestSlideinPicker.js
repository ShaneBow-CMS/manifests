;( function( window ){
	const defaults = {
		per_page: 24,
		extra: {otype: TD.OTYPE.PASSAGE.value, admin:1},
		onClick: (idManifest) => console.error('Mani picker onClick not specified'),
		};

	class ManifestSlideinPicker {
		constructor(title, options) {
			const my = this;
			my.opts = $.extend({}, defaults, options);
			my.opts.onClick = (idMani) => {
				options.onClick(idMani);
				my.$cb.prop('checked',false);;
				};
			$(`<label for="toggle-mani">${title}</label>`)
				.appendTo($('#page-toolbar'))
				.addClass('btn btn-xs');
			let $el = $('<div></div>').appendTo('body');
			my.$cb = $('<input type="checkbox" id="toggle-mani">')
				.appendTo($el).css({position:'absolute',top:'-100px'});
			$el = $('<aside></aside>').appendTo($el);
			new UBOW.ManifestSummaries($el, my.opts);
			}
		}
	UBOW.ManifestSlideinPicker = ManifestSlideinPicker;
	})( window );
