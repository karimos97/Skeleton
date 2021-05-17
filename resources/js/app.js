require('./bootstrap');

// custom select2
$('#kt_datatable_search_status').select2();
$('#kt_datatable_search_type').select2();

var KTBootstrapDatepicker = function () {

    var arrows;
    if (KTUtil.isRTL()) {
     arrows = {
      leftArrow: '<i class="la la-angle-right"></i>',
      rightArrow: '<i class="la la-angle-left"></i>'
     }
    } else {
     arrows = {
      leftArrow: '<i class="la la-angle-left"></i>',
      rightArrow: '<i class="la la-angle-right"></i>'
     }
    }


     // enable clear button
     $('.date-p').datepicker({
      rtl: KTUtil.isRTL(),
      todayBtn: "linked",
      clearBtn: true,
      todayHighlight: true,
      templates: arrows
     });


    }

    return {
     // public functions
     init: function() {
      demos();
     }
    };
   }();

   jQuery(document).ready(function() {
    KTBootstrapDatepicker.init();
   });

