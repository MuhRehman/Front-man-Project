$(document).ready(function() {
	//SVG
	// svg4everybody();

	//DROPDOWN
	$('[data-toggle=dropdown]').on("click", function () {
		$('.dropdown').not($(this).parent()).removeClass('dropdown-on');
		$(this).parent('.dropdown').toggleClass('dropdown-on');
		return false;
	});

	$(".dropdown__input").on("focus", function () {
		$(".dropdown").not($(this).parent()).removeClass("dropdown-on");
		$(this).parent(".dropdown").toggleClass("dropdown-on");
		return false;
	});

	$('html').on("click", function (e) {
		$('.dropdown').removeClass('dropdown-on');
	});

	$('.dropdown').on("click", function (e) {
		e.stopPropagation();
	});

	$('.js-dropdown-out .dropdown__trigger').on("click", function () {
		var x = $(this).offset();
		var menu = $(this).data('menu');

		$(menu).addClass('on');
		$(menu).css({top: x.top - 100, left: x.left + 32});
	});

	$(document).mouseup(function (e) {
		var container = $('.dropdown__menu--out');

		if (!container.is(e.target) && container.has(e.target).length === 0) {
			container.removeClass('on');
		}
	});

	//toolset
	$('.tool-select').on("click", function () {
		$(this).parents('.dropdown').siblings().removeClass('active');
		$(this).parents('.dropdown').toggleClass('active');
	});

	//form
	$('.dropdown--input input').on("focus", function () {
		$('.dropdown').not($(this).parents()).removeClass('dropdown-on');
		$(this).parent().closest('.dropdown').toggleClass('dropdown-on');
		return false;
	});


	//COLLAPSE
	$('[data-collapse]').click(function (e) {
		var collapseTarget = $(this).data('collapse');

		$(this).toggleClass('active');
		$(collapseTarget).toggleClass('active');
		$(collapseTarget).stop().slideToggle();
	});

	$('.collapse-trigger:not([data-collapse])').click(function (e) {
		$(this).next('.collapse').stop().slideToggle(200, 'linear');
		$(this).toggleClass('active');
	});

	$('[data-primaryText]').click(function () {
		var primaryText = $(this).attr('data-primaryText');
		var altText = $(this).attr('data-altText');

		$(this).find('span').text($(this).find('span').text() == primaryText ? altText : primaryText);
	});


	//SWITCH
	$('.toggle').on("click", function () {
		$(this).toggleClass('on');
	});
	$('.toggle + label').on("click", function () {
		$(this).siblings('.toggle').toggleClass('on');
	});


	//STEPPER
	$('.stepper').each(function () {
		var stepper = $(this),
			input = stepper.find('span'),
			btnDown = input.prev('button'),
			btnUp = input.next('button'),
			value = input.text();

		if (value >= 99) {
			btnUp.prop('disabled', true);
		} else if (value <= 1) {
			btnDown.prop('disabled', true);
		}

		btnUp.on("click", function () {
			var oldValue = parseFloat(input.text()),
				stepper = $(this).parents('.stepper'),
				btnDown = $(this).siblings('button');
			
			if (oldValue > 98) {
				var newVal = oldValue;
				$(this).prop('disabled', true);
			} else {
				var newVal = oldValue + 1;
				$(this).prop('disabled', false);
			}

			if (newVal > 1) {
				btnDown.prop('disabled', false);
			}
			
			input.text(newVal);
		});
		
		btnDown.on("click", function () {
			var oldValue = parseFloat(input.text()),
				stepper = $(this).parents('.stepper'),
				btnUp = $(this).siblings('button');
			
			if (oldValue < 2) {
				var newVal = oldValue;
				$(this).prop('disabled', true);
			} else {
				var newVal = oldValue - 1;
				$(this).prop('disabled', false);
			}

			if (newVal < 99) {
				btnUp.prop('disabled', false);
			}

			input.text(newVal);
		});
	});


	//CAROUSEL
	$('.js-carousel').slick({
		dots: true,
		infinite: true,
		prevArrow:
			"<a href='#!' class='slick-arrow slick-arrow--prev'><svg role='img' class='icon icon-mono icon-angle-left'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-left'></use></svg></a>",
		nextArrow:
			"<a href='#!' class='slick-arrow slick-arrow--next'><svg role='img' class='icon icon-mono icon-angle-right'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-right'></use></svg></a>",
	});

	function modalCarousel() {
		$('.js-carousel-modal').slick({
			dots: true,
			infinite: true,
			prevArrow:
				"<a href='#!' class='slick-arrow slick-arrow--prev'><svg role='img' class='icon icon-mono icon-angle-left'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-left'></use></svg></a>",
			nextArrow:
				"<a href='#!' class='slick-arrow slick-arrow--next'><svg role='img' class='icon icon-mono icon-angle-right'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-right'></use></svg></a>",
		});

		$(".js-carousel-strip-modal").slick({
			dots: false,
			infinite: true,
			slidesToScroll: 1,
			prevArrow:
				"<a href='#!' class='slick-arrow slick-arrow--prev'><svg role='img' class='icon icon-mono icon-angle-left'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-left'></use></svg></a>",
			nextArrow:
				"<a href='#!' class='slick-arrow slick-arrow--next'><svg role='img' class='icon icon-mono icon-angle-right'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-right'></use></svg></a>",
		});
	}

	$('.js-carousel-strip').slick({
		dots: false,
		infinite: true,
		slidesToScroll: 1,
		prevArrow:
			"<a href='#!' class='slick-arrow slick-arrow--prev'><svg role='img' class='icon icon-mono icon-angle-left'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-left'></use></svg></a>",
		nextArrow:
			"<a href='#!' class='slick-arrow slick-arrow--next'><svg role='img' class='icon icon-mono icon-angle-right'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-right'></use></svg></a>",
	});

	$('.js-carousel-plugins').slick({
		dots: false,
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		prevArrow:
			"<a href='#!' class='slick-arrow slick-arrow--prev'><svg role='img' class='icon icon-mono icon-angle-left'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-left'></use></svg></a>",
		nextArrow:
			"<a href='#!' class='slick-arrow slick-arrow--next'><svg role='img' class='icon icon-mono icon-angle-right'><use xlink:href='icons/mono/icons-mono.svg#icon-angle-right'></use></svg></a>",
	});


	//CHECKABLE
	$('.checkable input').on("change", function () {
		if ($(this).is(':checked')) {
			$(this).parents('.checkable').addClass('checked');
		} else {
			$(this).parents('.checkable').removeClass('checked');
		}
	});


	//HERO NAVIGATION
	$(window).on("load scroll", function () {
		if ($(document).scrollTop() > 0) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
	});


	//MODAL
	$('a.modal-trigger').click(function() {
		var target = $(this).attr('href');

		$('body').addClass('modal-on');
		$(target).fadeIn().addClass('show');
		modalCarousel();
	});
	$('button.modal-trigger').click(function() {
		var target = $(this).data('target');
		
		$('body').addClass('modal-on');
		$(target).fadeIn().addClass('show');
		modalCarousel();
	});

	$('.modal__close').click(function() {
		$('body').removeClass('modal-on');
		$('.modal.show').fadeOut().removeClass('show');
	});

	$(document).on('keydown', function (e) {
		if (e.keyCode === 27) { // ESC
			$('body').removeClass('modal-on');
			$('.modal.show').fadeOut().removeClass('show');
		}
	});

	$(document).mouseup(function(e) {
		var container = $('.modal__content');

		if (!container.is(e.target) && container.has(e.target).length === 0) {
			$('body').removeClass('modal-on');
			$('.modal.show').fadeOut().removeClass('show');
		}
	});


	//PAGE CARD
	$('.page-card__thumb').on("click", function () {
		$(this).parents('.page-card').toggleClass('selected');
	});
	$('.rename-trigger').on("click", function () {
		$(this).parents('.page-card').find('.rename-field').toggleClass('opacity-0 opacity-100 invisible visible');
		$(this).parents('.page-card').find('.rename-field').find('input').focus();
	});
	$('.rename-field input').on("blur", function () {
		$(this).parents('.rename-field').toggleClass('opacity-0 opacity-100 invisible visible');
	});


	//SELECTABLE
	$('.selectable').on("click", function () {
		$(this).toggleClass('active');
	});


	//RANGE
	$('input[type=range]:not([class])').each(function (e) {
		var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
		var percent = val * 100;

		$(this).css('background-image',
			'-webkit-gradient(linear, left top, right top, ' +
			'color-stop(' + percent + '%, #6775F8), ' +
			'color-stop(' + percent + '%, #ededed)' +
			')');

		$(this).css('background-image',
			'-moz-linear-gradient(left center, #6775F8 0%, #6775F8 ' + percent + '%, #ededed ' + percent + '%, #ededed 100%)');
	});

	$('input[type=range]:not([class])').on("mousemove", function (e) {
		var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
		var percent = val * 100;

		$(this).css('background-image',
			'-webkit-gradient(linear, left top, right top, ' +
			'color-stop(' + percent + '%, #6775F8), ' +
			'color-stop(' + percent + '%, #ededed)' +
			')');

		$(this).css('background-image',
			'-moz-linear-gradient(left center, #6775F8 0%, #6775F8 ' + percent + '%, #ededed ' + percent + '%, #ededed 100%)');
	});

	$('.dark input[type=range]:not([class])').each(function (e) {
		var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
		var percent = val * 100;

		$(this).css('background-image',
			'-webkit-gradient(linear, left top, right top, ' +
			'color-stop(' + percent + '%, #6775F8), ' +
			'color-stop(' + percent + '%, #243568)' +
			')');

		$(this).css('background-image',
			'-moz-linear-gradient(left center, #6775F8 0%, #6775F8 ' + percent + '%, #243568 ' + percent + '%, #243568 100%)');
	});

	$('.dark input[type=range]:not([class])').on("mousemove", function (e) {
		var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
		var percent = val * 100;

		$(this).css('background-image',
			'-webkit-gradient(linear, left top, right top, ' +
			'color-stop(' + percent + '%, #6775F8), ' +
			'color-stop(' + percent + '%, #243568)' +
			')');

		$(this).css('background-image',
			'-moz-linear-gradient(left center, #6775F8 0%, #6775F8 ' + percent + '%, #243568 ' + percent + '%, #243568 100%)');
	});


	//TOGGLE CLASS
	$('[data-toggleClass').on("click", function () {
		var theClass = $(this).attr('data-toggleClass');
		$('body').toggleClass(theClass);
	});
	//TOGGLE SELF
	$('[data-toggleSelf').on("click", function () {
		var theClass = $(this).attr('data-toggleSelf');
		$(this).toggleClass(theClass);

		if ($(this).hasClass('hide')) {
			$(this).parents('.layeritem').toggleClass('hide');
		}
	});


	//TABS
	$('.tab').on("click", function (e) {
		e.preventDefault();
		var tabTarget = $(this).attr('href');

		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		$('.tab-panel').removeClass('show');

		$(tabTarget).addClass('show');
	});


	//SUBPANELS
	$('[data-panel]').on("click", function () {
		var target = $(this).data('panel');
		
		$('#assets-' + target).toggleClass('show');
		$('#inspector-' + target).toggleClass('show');

		// $('.page').toggleClass(target + '-on');
	});
	
	$('.assets-back').on("click", function () {
		$(this).parents('.assets').removeClass('show');
	});





	// //TEST
	// $(window).on("load", function () {
	// 	// $("body").addClass("modal-on");
	// 	$('#modal-workspace-upgrade').fadeIn().addClass("show");
	// 	modalCarousel();
	// });
});