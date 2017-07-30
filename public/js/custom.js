/* Custom jQuery Hierarchy */
/*
	1.PRE LOADER 
	2.MMENU
	3.STICKY
	4.STICKY AFTER SECTION - WAYPOINT
	5.TOGGLE DROPDOWN
	6.SCROLL NAVIGATION
	9.FULL SCREEN
	10.BACKGROUND IMAGE
	11.PARALLAX BACKGROUND
	12.HEADER HEIGHT ON DATA-ATTRIBUTES
	13.TOGGLE MENU ICONS
	14.PRETTYPHOTO LIGHTBOX
	15.PROGRESS BAR
	16.Animation
	17.COLUMN MATCH HEIGHT
	18.NUMBER COUNTER
	20.OWL SLIDER
	21.Background Video 
	23.ALL CHARTS
	24.FORMS

*/


(function($){
	"use strict"; 	
	var rtime;
	var timeout = false;
	var delta = 200;
	$(window).on('load', function() {
		 /* PrettyPhoto */
		var prettyPhoto =  $("a[rel^='prettyPhoto'], a[data-rel^='prettyPhoto']");
		 if(prettyPhoto.length != 0 ) { 
			prettyPhoto.prettyPhoto({hook: 'data-rel', social_tools: false, deeplinking: false});
		}
		/* ToolTip */
		var toolTip = $('[data-toggle="tooltip"]');
		var popOver = $('[data-toggle="popover"]');
		toolTip.tooltip();
		popOver.popover();
		
		/* PRE LOADER */	
		var btoTop = $('#back-to-top');
		if (btoTop.length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					btoTop.addClass('show');
				} else {
					btoTop.removeClass('show');
				}
			};
			backToTop();
			$(window).on('scroll', function () {
				backToTop();
			});
			btoTop.on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
		}
		var loadIn = $(".loader-inner");
		var pageLoad = $("#pageloader");
		loadIn.delay(200).fadeOut();
		pageLoad.delay(200).fadeOut("slow")
		
		/* CHARTS */
		
		var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "#1ABC9C",
					pointStrokeColor : "#fff",
					data : [10,20,40,70,100,90,40]
				},
				{
					fillColor : "rgba(52, 73, 94,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [70,30,60,40,50,30,60]
				},
				{
					fillColor : "rgba(26, 188, 156,0.5)",
					strokeColor : "#1ABC9C",
					pointColor : "#fff",
					pointStrokeColor : "#333",
					data : [10,40,100,70,30,80,50]
				}
			]
		};
		
		var barChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "rgba(26, 188, 156,0.5)",
					strokeColor : "#1ABC9C",
					data : [50,70,90,60,70,40,50]
				},
				{
					fillColor : "rgba(52, 73, 94,0.5)",
					strokeColor : "#1ABC9C",
					data : [10,40,100,70,30,80,50]
				}
			]
		};
		var radarChartData = {
			labels : ["Html5","Css3","Jquery","Wordpress","Joomla","Drupal","Design"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "rgba(26, 188, 156,0.5)",
					strokeColor : "#1ABC9C",
					pointColor : "#1ABC9C",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
		};
		var pieChartData = [
			{
				value: 90,
				color:"#1ABC9C"
			},
			{
				value : 30,
				color : "#333"
			},
			{
				value : 60,
				color : "#E74C3C"
			},
			{
				value : 100,
				color : "#E67E22"
			},
			{
				value : 20,
				color : "#16B6EA"
			}
		];
		var polarAreaChartData = [
			{
				value : 60,
				color: "#1ABC9C"
			},
			{
				value : 70,
				color: "#f5f5f5"
			},
			{
				value : 60,
				color: "#E74C3C"
			},
			{
				value : 30,
				color: "#E67E22"
			},
			{
				value : 50,
				color: "#16B6EA"
			},
			{
				value : 20,
				color: "#333"
			}
		];
		var doughnutChartData = [
			{
				value: 30,
				color:"#1ABC9C"
			},
			{
				value : 50,
				color : "#f5f5f5"
			},
			{
				value : 100,
				color : "#E74C3C"
			},
			{
				value : 40,
				color : "#E67E22"
			},
			{
				value : 120,
				color : "#16B6EA"
			}
		];
		function showLineChart(){
			var ctx = document.getElementById("lineChartmist").getContext("2d");
			 new Chart(ctx).Line(lineChartData, {	responsive: true	});
		}
		function showBarChart(){
			var ctx = document.getElementById("barChartmist").getContext("2d");
			new Chart(ctx).Bar(barChartData, {	responsive: true	});
		}
		function showRadarChart(){
			var ctx = document.getElementById("radarChartmist").getContext("2d");
			new Chart(ctx).Radar(radarChartData, {	responsive: true	});
		}
		function showPolarAreaChart(){
			var ctx = document.getElementById("polarAreaChartmist").getContext("2d");
			new Chart(ctx).PolarArea(polarAreaChartData, {	responsive: true	});
		}
		function showPieChart(){
			var ctx = document.getElementById("pieChartmist").getContext("2d");
			new Chart(ctx).Pie(pieChartData,{	responsive: true	});
		}
		function showDoughnutChart(){
			var ctx = document.getElementById("doughnutChartmist").getContext("2d");
			new Chart(ctx).Doughnut(doughnutChartData,{	responsive: true	});
		}
		var lChart = $('#lineChart');
		var bChart = $('#barChart');
		var rChart = $('#radarChart');
		var pChart = $('#polarAreaChart');
		var pieChart = $('#pieChart');
		var vardChart = $('#doughnutChart');
		lChart.appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showLineChart,300); },{accX: 0, accY: -155},'easeInCubic');
		bChart.appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showBarChart,300); },{accX: 0, accY: -155},'easeInCubic');
		rChart.appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showRadarChart,300); },{accX: 0, accY: -155},'easeInCubic');
		pChart.appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showPolarAreaChart,300); },{accX: 0, accY: -155},'easeInCubic');
		pieChart.appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showPieChart,300); },{accX: 0, accY: -155},'easeInCubic');
		vardChart.appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart,300); },{accX: 0, accY: -155},'easeInCubic');

	});	
	
	
	
	"use strict"; 	
	/* Menu */
	var navMenu = $('#nav-menu');
	if (navMenu.length) {	
		navMenu.mmenu({
			searchfield : true,
			counters : true
			/* RTL */
			/*  "offCanvas": {
				"position": "right"
			 }  */
		}, 
		{
		   // configuration
		   clone: true
		});	
	}
	/* STICKY */
	var stickyMenu = $('#sticker-default');
	if (stickyMenu.length) {
		stickyMenu.sticky({
			topSpacing:0
		});
	 }	
	 
	 /* WAYPOINT */
	 var stickyBar = $('.sticky-navigation');
	 if (stickyBar.length) {	
		var menu = $('#sticker');
		$(window).scroll(function () {
			var y = $(this).scrollTop();
			var z = $('.content-wrapper').offset().top + 80;
			if (y >= z) {
				menu.removeClass('not-visible-nav').addClass('visible-nav');
				menu.addClass('is-sticky');
			}
			else{
				menu.removeClass('visible-nav').addClass('not-visible-nav');
				menu.removeClass('is-sticky');
			}
		});
	}
	
	/* TOGGLE DROPDOWN */
	var dropToggle = $('.hover-dropdown .dropdown-toggle');
	dropToggle.on('click', function(event) {
		//window.location.href = link.attr("href");
	});
	dropToggle.on('click', function(event) {
		event.preventDefault(); 
		event.stopPropagation(); 
		$(this).parent().siblings().removeClass('open');
		$(this).parent().toggleClass('open');
	});
	
	/* Scroll NAVIGATION */
	var stiKer = $('#sticker');
	if (stiKer.length) {
		var scrollA = $('.scroll a');
		scrollA.on('click', function(event) {
			var $anchor = $(this);
			var headerH = stiKer.innerHeight();
				$('html, body').stop().animate({					
					scrollTop : $($anchor.attr('href')).offset().top  - headerH + "px"
				}, 1200, 'easeInOutExpo');
			event.preventDefault();
		});
		/* Active When Scroll */
		$('body').scrollspy({ 
			target: '#nav-menu',
			offset: 95
		})
		/* Responsive Auto Close */
		var onPageNav = $('.one-page .nav li a');
		onPageNav.on(function () {
			 $('.navbar-collapse').removeClass('in');
		});
		
	}
	var pScroll = $('.page-scroll');
	if (pScroll.length) {
	/* Smooth Scroll Links */
	var pScrollA = $('.page-scroll a')
		pScrollA.on('click', function(event) {
			var $anchor = $(this);
			var headerH = $('#sticker').innerHeight();
				jQuery('html, body').stop().animate({					
					scrollTop : $($anchor.attr('href')).offset().top  - 80 + "px"
				}, 1200, 'easeInOutExpo');
			event.preventDefault();
		});
	}
	
	/* Drop Down */
	var  navBar = $('.navbar');
	if (navBar.length) {
	var navBarDrop = $('.navbar .dropdown');
		navBarDrop.hover(function () {
			$(this).find('.dropdown-menu').first().stop(true, true).slideDown(450);
		}, function () {
			$(this).find('.dropdown-menu').first().stop(true, true).slideUp(350)
		});
	}
	
	/* FullScreen */
	
	if ($(window).width() > 1025) {
		var fullScreen = $('.full-screen');
		fullScreen.css({ 'height': $(window).height() });
			$(window).on('resize', function() {
			fullScreen.css({ 'height': $(window).height() });
		});
	}
	
	/* BACKGROUND IMAGE */
	
	var pageSection = $('[data-background]');
	pageSection.each(function(indx){
		if ($(this).attr("data-background")){
			$(this).css("background-image", "url(" + $(this).data("background") + ")");
		}
	});
	var dataBG = $('[data-bgcolor]');
	dataBG.css('background', function () {
		return $(this).data('bgcolor')
	});
	
	/* PARALLAX BG */
	var parallaxBG = $('.parallax-bg');
	if(parallaxBG.length != 0 && !navigator.userAgent.match(/iPad|iPhone|Android/i)){	
		$.stellar({
			horizontalScrolling: false,
			verticalScrolling: true,
			verticalOffset: 0,
			horizontalOffset: 0,
			responsive: true,
			scrollProperty: 'scroll',
			parallaxElements: false,
	  });
	}
	/* Toggle Search */
	$(document).on( 'click', '#header-top-bar .search-icon', function( e ) {	
		e.preventDefault();																  	
		$("#header-top-bar .toggle-search").toggleClass("show-form");
		$("#header-top-bar .search-icon span").toggleClass("fa-times");
		$("#search-form").focus();
	});
	$(document).on( 'click', '.header-main .search-icon', function( e ) {	
		e.preventDefault();													   
		$(".header-main .toggle-search").toggleClass("show-form");
		$(".header-main .search-icon span").toggleClass("fa-times");
	});
	$(document).on( 'click', '.navbar-toggle', function( e ) {
		e.preventDefault();													
		$(this).toggleClass('toggle-close');
	});
	$(document).on( 'click', '#menu-toggle,.close-toggle', function( e ) {
		e.preventDefault();												  	
		$("#page-wrapper").toggleClass("toggled");
		$("body").toggleClass("side_container_opened");
	});
	$(document).on( 'click', '.mm-slideout', function( e ) {
	   if( $('html.mm-opened').length && $('.rev_slider_wrapper').length ){
		$('.rev_slider_wrapper').animate({left: "0"}, 300);
	   }
	  });
	/* TOGGLE EXTRA NAV */
	$(document).on( 'click', '.header-toggle-icon', function( e ) {
		e.preventDefault();													
		var id = $(this).attr( "id" );
		var res = id.split("-"); 
		var id1='#extra-'+res[1]+'-'+res[0];
		$(id1).toggleClass("toggled");
		$("#search-form").focus();
		$("body").toggleClass("extra-toggle");
	});
	/*CLOSE*/
	$(document).on( 'click', '#extra-nav .toggle-close', function( e ) {
		e.preventDefault();											   
		var id = $(this).attr( "id" );
		var res = id.replace("close-",''); 
		var id1='#extra-'+res;
		$(id1).toggleClass("toggled");
		 $('body').removeClass('extra-toggle');
	});
	/*  HEADER HEIGHT ON DATA-ATTRIBUTES  */
	var hdr = $("header").attr('data-height');
	var headerMainCSS = $(".header-main .navbar-brand ,.header-main .navbar-nav > li > a,.header-main .navbar-nav > li .extra-menu-item,.header-toggle-content,.header-main .navbar-toggle ");
	headerMainCSS.css({'line-height': hdr, 'height': hdr});
	
	/*			TOGGLE MENU ICONS    */
	var iScrollPos = 0;
	 $(window).scroll(function () {
		 var iCurScrollPos = $(this).scrollTop();
		 if (iCurScrollPos > iScrollPos) {
			var stickyWarp = $("#sticker-sticky-wrapper");
			 if(stickyWarp.hasClass("is-sticky")){
				var shdr = $("header").attr('data-sheight');
				var isSticky = $(".is-sticky .navbar-brand ,.is-sticky .navbar-nav > li > a,.is-sticky .navbar-nav > li .extra-menu-item,.is-sticky .header-toggle-content,.is-sticky .header-main .navbar-toggle");
				isSticky.css({'line-height': shdr, 'height': shdr});
			}
		 } else {
			var hdr = $("header").attr('data-height');
			headerMainCSS.css({'line-height': hdr, 'height': hdr});
		 }
		 iScrollPos = iCurScrollPos;
	 });
	 
	/* ProgressBar */
	var progressBar = $('.progress-bar');
	if (progressBar.length) {
		progressBar.each(function() {
			$(this).appear(function(){
			 var datavl = $(this).attr('data-percentage');
			 $(this).animate({ "width" : datavl + "%"}, '1200');
			 $(this).find('span').fadeIn(4000);
			 $(this).css('background', $(this).attr('data-bg'));
			})
		});
		var proGress= $('.progress');
		proGress.each(function() {
			var dathgt = $(this).attr('data-height');
			$(this).css({'line-height': dathgt + "px", 'height': dathgt});
		});
	}
	
	/* Animation */
	  var dataAni = $('[data-animation]');
	  dataAni.each(function() {
		var element = $(this);
		element.addClass('animated');
		element.appear(function() {
			var delay = ( element.data('delay') ? element.data('delay') : 1 );
			if( delay > 1 ) element.css('animation-delay', delay + 'ms');				
			element.addClass( element.data('animation') );
			setTimeout(function() {
				element.addClass('visible');
			}, delay);
		});
	});
	
	/* Number counter */
	var numCount= $('.number-counter');
	if (numCount.length) {
		numCount.appear(function(){
			var datacount = $(this).attr('data-count');
			$(this).find('.counter').delay(6000).countTo({
				from: 10,
				to: datacount,
				speed: 3000,
				refreshInterval: 50,
			});
		});
	}	
		
	/* OWL Slider */
	
	var owlSlider = $('.owl-carousel');
	if (owlSlider.length) {		    
		  owlSlider.each(function (index) {
			var autoplay = $(this).data('autoplay');
			var timeout = $(this).data('delay');
			var slidemargin = $(this).data('margin');
			var slidepadding = $(this).data('stagepadding');
			var items = $(this).data('items');
			var animationin = $(this).data('animatein');
			var animationout = $(this).data('animateout');
			var itemheight = $(this).data('autoheight');
			var itemwidth = $(this).data('autowidth');
			var itemmerge = $(this).data('merge');
			var navigation = $(this).data('nav');
			var pagination = $(this).data('dots');
			var infinateloop = $(this).data('loop');
			var itemsdesktop = $(this).data('desktop');
			var itemsdesktopsmall = $(this).data('desktopsmall');
			var itemstablet = $(this).data('tablet');
			var itemsmobile = $(this).data('mobile');
			$(this).on('initialized.owl.carousel changed.owl.carousel',function(property){
				var current = property.item.index;
				$(property.target).find(".owl-item").eq(current).find(".animated").each(function(){
					var elem = $(this);
					var animation = elem.data('animate');
					if ( elem.hasClass('visible') ) {
						elem.removeClass( animation + ' visible');
					}
					if ( !elem.hasClass('visible') ) {
						var animationDelay = elem.data('animation-delay');
						if ( animationDelay ) {			
							setTimeout(function(){
							 elem.addClass( animation + " visible" );
							}, animationDelay);				
						} else {
							elem.addClass( animation + " visible" );
						}
					}
				});					
			}).owlCarousel({ 
				/* rtl:true,-- FOR RTL */ 
				autoplay: autoplay,
				autoplayTimeout:timeout,
				items : items,
				margin:slidemargin,
				autoHeight:itemheight,
				animateIn: animationin,
				animateOut: animationout,
				autoWidth:itemwidth,
				stagePadding:slidepadding,
				merge:itemmerge,
				nav:navigation,
				dots:pagination,
				loop:infinateloop,
				responsive:{
					479:{
						items:itemsmobile,
					},
					768:{
						items:itemstablet,
					},
					980:{
						items:itemsdesktopsmall,
					},
					1199:{
						items:itemsdesktop,
					}
				}
			});
		});
	}  
	
	
	/* Form */
	/* Contact */	
	var myForm = $("#bootstrap-form");	
	if (myForm .length > 0) {
		myForm.bootstrapValidator({
				container: 'tooltip',
				feedbackIcons: {
					valid: 'fa fa-check',
					warning: 'fa fa-user',
					invalid: 'fa fa-times',
					validating: 'fa fa-refresh'
				},
				fields: {
					contact_name: {
						validators: {
							notEmpty: {
								message: ''
							}
						}
					},
					contact_email: {
						validators: {
							notEmpty: {
								message: ''
							},
							emailAddress: {
								message: ''
							}
						}
					},
					contact_phone: {
						validators: {
							notEmpty: {
								message: ''
							}
						}
					},
					contact_message: {
						validators: {
							notEmpty: {
								message: ''
							}
						}
					},
				}
			})
			.on('success.form.bv', function(e) {
				e.preventDefault();
				var $form = $(e.target),
					validator = $form.data('bootstrapValidator'),
					submitButton = validator.getSubmitButton();
				var form_data = $('#contactform').serialize();
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: "php/contact-form.php",
					data: form_data,
					success: function(msg) {
						$('.form-message').html(msg.data);
						$('.form-message').show();
						submitButton.removeAttr("disabled");
						resetForm($('#contactform'));
					},
					error: function(msg) {}
				});
				return false;
			});
	}
   var subForm = $("#subscribe-form");	
	/* Subscribe */	
	if (subForm.length > 0) {
            subForm.bootstrapValidator({
                    container: 'tooltip',
                    feedbackIcons: {
                        valid: 'fa fa-check',
                        warning: 'fa fa-user',
                        invalid: 'fa fa-times',
                        validating: 'fa fa-refresh'
                    },
                    fields: {
                        subscribe_email: {
                            validators: {
                                notEmpty: {
                                    message: 'Email is required. Please enter email.'
                                },
                                emailAddress: {
                                    message: 'Please enter a correct email address.'
                                }
                            }
                        },
                    }
                })
                .on('success.form.bv', function(e) {
                    e.preventDefault();
                    var $form = $(e.target),
                        validator = $form.data('bootstrapValidator'),
                        submitButton = validator.getSubmitButton();
                    var form_data = $('#subscribe_form').serialize();
                    $.ajax({
                        type: "POST",
                        dataType: 'json',
                        url: "php/subscription.php",
                        data: form_data,
                        success: function(msg) {
                            $('.form-message1').html(msg.data);
                            $('.form-message1').show();
                            submitButton.removeAttr("disabled");
                            resetForm($('#subscribe_form'));
                        },
                        error: function(msg) {}
                    });
                    return false;
                });
        }
    function resetForm($form) {
		$form.find(
				'input:text, input:password, input, input:file, select, textarea'
			)
			.val('');
		$form.find('input:radio, input:checkbox')
			.removeAttr('checked')
			.removeAttr('selected');
		$form.find('button[type=submit]')
			.attr("disabled", "disabled");
	}
	 
	
})(jQuery);