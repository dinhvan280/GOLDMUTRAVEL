$(function() {
/* 	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}

	var accordion = new Accordion($('#accordion'), false); */

	/* luan-nc ADDED */
	$(document).on("click", "#accordion .link", function() {
		let parent = $(this).parent();
		if (parent.hasClass("open")) {
			$("#accordion li").removeClass("open");
			$(this).siblings(".submenu").slideUp();
		} else {
			$("#accordion li").removeClass("open");
			$("#accordion .submenu").slideUp();
			parent.addClass("open");
			$(this).siblings(".submenu").slideDown();
		}
	});
});
