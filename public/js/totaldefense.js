//$(document).on( "mobileinit", function() {
//	$.mobile.ajaxEnabled = false;
//});

//$( document ).on( "mobileinit", function() {
//	$.extend( $.mobile , {
//		ajaxEnabled: false
//	});
//});

$( document ).on( "pageinit", "#totaldefense-page", function() {
    $( document ).on( "swipeleft swiperight", "#totaldefense-page", function( e ) {
    	if ( e.type === "swiperight" ) {
            $( "#menue-panel" ).panel( "open" );
    	} else if ( e.type === "swipeleft" ) {
            $( "#menue-panel" ).panel( "close" );
        }
    });
});

$(":jqmData(role='page'):last").on("pageshow", function(event) {
    $("#import", $(this)).popup("open");
  });

/* Funktioniert. …ffnet aber immer
$(document).on('pagebeforeshow', '#totaldefense-page', function(){       
	$( "#menue-panel" ).panel( "open"); });
*/

/*
$( document ).click("#bergfried-minus", function() {
	alert(1);
	var value = document.getElementById("#bergfried").attr('value');
	alert(value);
});
*/