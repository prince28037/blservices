
(function($) {

  "use strict";
	/*=======================================================
    // Vertical Center Welcome
    ======================================================*/
    setInterval(function () {
        var widnowHeight = $(window).height();
        var introHeight = $(".loaf-login").height();
        var paddingTop = widnowHeight - introHeight;
        $(".loaf-login").css({
            'padding-top': Math.round(paddingTop / 2) + 'px',
            'padding-bottom': Math.round(paddingTop / 2) + 'px'
        });
		}, 10);

    /*--========================
    // nice scroll
    =========================-*/

    $("body, .loaf-sm-notification").niceScroll({
	   cursorwidth:"3px"
	 });

    $('[data-tooltip="tooltip"]').tooltip();

    /*--============================
	user icon toggle class
	============================--*/
	  $(".user-icon").on('click', function(){
	    $(".user-dropdown").toggleClass('new-user');
	    $(".loaf-notification").removeClass('loaf-vissible');
	  });
	  $(".user-dropdown ul li a").on('click', function(){
	    $(".user-dropdown").removeClass('new-user');
	  });

	  
	  
	/*--============================
	user icon toggle class
	============================--*/
	  $(".notification").on('click', function(){
	    $(".loaf-notification").toggleClass('loaf-vissible');
	     $(".user-dropdown").removeClass('new-user');
	  });
	  $(".loaf-sm-notification li a").on('click', function(){
	    $(".loaf-notification").removeClass('loaf-vissible');

	  });



	/*--====================
    modal hide with custom js
    ===========================--*/

    $(".modal-hide").click(function(){
    	$(".model-that-hide").modal("hide");
    })


    /*--============================
	sidebar plus icon toggle class
	============================--*/
	 $(".panel-default a").on('click', function(){
	    $(this).toggleClass('click-color');
	});

	/*--=================
    bootstrap select
    =================--*/
    $('.get-select-picker').selectpicker({});

  

	/*--========================
	slidebar call js
	========================--*/
	$('.slide-drawer-menu').on('click', function(e) {
		e.preventDefault();
		$('body').toggleClass('nav-open');
	});

	$('.slide-drawer-menu').on('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('slide-drawer');
	});


	// dataTables call
 	$('#example').DataTable({
    	responsive: true,
    	"searching": true,
    	"lengthChange": false,
    	"pageLength": 100,
    	"ordering":true,
    	"language": {
		    "paginate": {
		      "previous": "<i class='fas fa-angle-double-left'></i>",
		      "next": "<i class='fas fa-angle-double-right'></i>"
		    }
		}
    });

    $('#example2').DataTable({
    	responsive: true,
    	"searching": false,
    	"lengthChange": false,
    	"pageLength": 100,
    	"ordering":false,
    	"language": {
		    "paginate": {
		      "previous": "<i class='fas fa-angle-double-left'></i>",
		      "next": "<i class='fas fa-angle-double-right'></i>"
		    }
		}
    });


    /*=======================================
	Datepicker init
	=========================================*/

  	$('.date-pickerdate').datetimepicker({
	    format: "DD/MM/YYYY",
        useCurrent: false,
	    icons: {
	      up: 'fa fa-angle-up',
	      down: 'fa fa-angle-down',
	      previous: 'fa fa-angle-left',
	      next: 'fa fa-angle-right',
	    }
	})

})(window.jQuery);


$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
