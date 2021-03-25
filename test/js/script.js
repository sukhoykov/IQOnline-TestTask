$(document).ready(function(){
  $("#datepicker").datepicker({
    showButtonPanel: true,
    changeMonth: true,
    changeYear: true
  });

  $( ".slider1" ).slider({
    value:100,
      min: 1000,
      max: 3000000,
      step: 1,
      slide: function( event, ui ) {
        $( "#amount1" ).val(ui.value);
      }
    });
    $( "#amount1" ).val($( ".slider1" ).slider( "value" ) );

    $( ".slider2" ).slider({
      value:100,
        min: 1000,
        max: 3000000,
        step: 1,
        slide: function( event, ui ) {
          $( "#amount2" ).val(ui.value);
        }
      });
      $( "#amount2" ).val($( ".slider2" ).slider( "value" ) );
})