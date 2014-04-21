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

	$( document ).on('#show-popup', function() {
		alert(1);
		var value = ($this).attr('value');
		if(value > 0) {		
			$("#import").popup("open");
		}
	});

});

function updatePopulation(building, update) {
    var value = document.getElementById(building).value;
    
    switch(building)
    {
    case 'bergfried'   : max = 10; break;
    case 'zeughaus'    : max = 30; break;
    case 'taverne'     : max = 10; break;
    case 'bibliothek'  : max = 10; break;
    case 'wehranlage'  : max = 20; break;
    case 'markt'       : max =  8; break;
    case 'bauernhof'   : max = 30; break;
    case 'holzfaeller' : max = 30; break;
    case 'holzlager'   : max = 20; break;
    case 'steinbruch'  : max = 30; break;
    case 'steinlager'  : max = 20; break;
    case 'erzmine'     : max = 30; break;
    case 'erzlager'    : max = 20; break;
    }
    
    value = parseInt(value) + parseInt(update);
    if(value < 1) {
    	value = 1;    	
    } else if (value > max) {
    	value = max;
    }
    document.getElementById(building).value = value;
    
    calcPopulation();
}

function calcPopulation() {
	var bergfried = new Array();
	bergfried[1]  = 0;
	bergfried[2]  = 1;
	bergfried[3]  = 3;
	bergfried[4]  = 6;
	bergfried[5]  = 10;
	bergfried[6]  = 15;
	bergfried[7]  = 21;
	bergfried[8]  = 28;
	bergfried[9]  = 36;
	bergfried[10] = 45;

	var zeughaus = new Array();
	zeughaus[1]  = 0;
	zeughaus[2]  = 1;
	zeughaus[3]  = 2;
	zeughaus[4]  = 3;
	zeughaus[5]  = 4;
	zeughaus[6]  = 6;
	zeughaus[7]  = 8;
	zeughaus[8]  = 10;
	zeughaus[9]  = 12;
	zeughaus[10] = 15;
	zeughaus[11] = 18;
	zeughaus[12] = 21;
	zeughaus[13] = 24;
	zeughaus[14] = 28;
	zeughaus[15] = 32;
	zeughaus[16] = 36;
	zeughaus[17] = 40;
	zeughaus[18] = 45;
	zeughaus[19] = 50;
	zeughaus[20] = 55;
	zeughaus[21] = 60;
	zeughaus[22] = 66;
	zeughaus[23] = 72;
	zeughaus[24] = 78;
	zeughaus[25] = 84;
	zeughaus[26] = 91;
	zeughaus[27] = 98;
	zeughaus[28] = 105;
	zeughaus[29] = 112;
	zeughaus[30] = 120;

	var taverne = new Array();
	taverne[1]  = 0;
	taverne[2]  = 1;
	taverne[3]  = 3;
	taverne[4]  = 6;
	taverne[5]  = 10;
	taverne[6]  = 15;
	taverne[7]  = 21;
	taverne[8]  = 28;
	taverne[9]  = 36;
	taverne[10] = 45;

	var bibliothek = new Array();
	bibliothek[1]  = 0;
	bibliothek[2]  = 2;
	bibliothek[3]  = 6;
	bibliothek[4]  = 13;
	bibliothek[5]  = 23;
	bibliothek[6]  = 37;
	bibliothek[7]  = 55;
	bibliothek[8]  = 78;
	bibliothek[9]  = 106;
	bibliothek[10] = 140;

	var wehranlage = new Array();
	zeughaus[1]  = 0;
	zeughaus[2]  = 1;
	zeughaus[3]  = 2;
	zeughaus[4]  = 3;
	zeughaus[5]  = 4;
	zeughaus[6]  = 5;
	zeughaus[7]  = 6;
	zeughaus[8]  = 7;
	zeughaus[9]  = 8;
	zeughaus[10] = 9;
	zeughaus[11] = 10;
	zeughaus[12] = 11;
	zeughaus[13] = 12;
	zeughaus[14] = 13;
	zeughaus[15] = 14;
	zeughaus[16] = 15;
	zeughaus[17] = 16;
	zeughaus[18] = 17;
	zeughaus[19] = 18;
	zeughaus[20] = 19;
	
	var markt = new Array();
	markt[1]  = 0;
	markt[2]  = 1;
	markt[3]  = 4;
	markt[4]  = 10;
	markt[5]  = 20;
	markt[6]  = 35;
	markt[7]  = 56;
	markt[8]  = 84;

// Maximales Bevšlkerungslimit; Bevšlkerungskosten beim Bauernhof immer 0.
	var bauernhof = new Array();
	bauernhof[1]  = 40;
	bauernhof[2]  = 52;
	bauernhof[3]  = 67;
	bauernhof[4]  = 86;
	bauernhof[5]  = 109;
	bauernhof[6]  = 137;
	bauernhof[7]  = 171;
	bauernhof[8]  = 210;
	bauernhof[9]  = 256;
	bauernhof[10] = 310;
	bauernhof[11] = 372;
	bauernhof[12] = 443;
	bauernhof[13] = 523;
	bauernhof[14] = 612;
	bauernhof[15] = 710;
	bauernhof[16] = 817;
	bauernhof[17] = 931;
	bauernhof[18] = 1061;
	bauernhof[19] = 1210;
	bauernhof[20] = 1379;
	bauernhof[21] = 1572;
	bauernhof[22] = 1792;
	bauernhof[23] = 2043;
	bauernhof[24] = 2329;
	bauernhof[25] = 2655;
	bauernhof[26] = 3027;
	bauernhof[27] = 3451;
	bauernhof[28] = 3900;
	bauernhof[29] = 4407;
	bauernhof[30] = 5000;

	var holzfaeller = new Array();
	holzfaeller[1]  = 0;
	holzfaeller[2]  = 1;
	holzfaeller[3]  = 2;
	holzfaeller[4]  = 3;
	holzfaeller[5]  = 4;
	holzfaeller[6]  = 6;
	holzfaeller[7]  = 8;
	holzfaeller[8]  = 10;
	holzfaeller[9]  = 12;
	holzfaeller[10] = 15;
	holzfaeller[11] = 18;
	holzfaeller[12] = 21;
	holzfaeller[13] = 24;
	holzfaeller[14] = 28;
	holzfaeller[15] = 32;
	holzfaeller[16] = 36;
	holzfaeller[17] = 40;
	holzfaeller[18] = 45;
	holzfaeller[19] = 50;
	holzfaeller[20] = 55;
	holzfaeller[21] = 60;
	holzfaeller[22] = 66;
	holzfaeller[23] = 72;
	holzfaeller[24] = 78;
	holzfaeller[25] = 84;
	holzfaeller[26] = 91;
	holzfaeller[27] = 98;
	holzfaeller[28] = 105;
	holzfaeller[29] = 112;
	holzfaeller[30] = 120;
	
	var holzlager = new Array();
	holzlager[1]  = 0;
	holzlager[2]  = 1;
	holzlager[3]  = 2;
	holzlager[4]  = 3;
	holzlager[5]  = 4;
	holzlager[6]  = 5;
	holzlager[7]  = 6;
	holzlager[8]  = 7;
	holzlager[9]  = 8;
	holzlager[10] = 9;
	holzlager[11] = 10;
	holzlager[12] = 11;
	holzlager[13] = 12;
	holzlager[14] = 13;
	holzlager[15] = 14;
	holzlager[16] = 15;
	holzlager[17] = 16;
	holzlager[18] = 17;
	holzlager[19] = 18;
	holzlager[20] = 19;

	var steinbruch = new Array();
	steinbruch[1]  = 0;
	steinbruch[2]  = 1;
	steinbruch[3]  = 2;
	steinbruch[4]  = 3;
	steinbruch[5]  = 4;
	steinbruch[6]  = 6;
	steinbruch[7]  = 8;
	steinbruch[8]  = 10;
	steinbruch[9]  = 12;
	steinbruch[10] = 15;
	steinbruch[11] = 18;
	steinbruch[12] = 21;
	steinbruch[13] = 24;
	steinbruch[14] = 28;
	steinbruch[15] = 32;
	steinbruch[16] = 36;
	steinbruch[17] = 40;
	steinbruch[18] = 45;
	steinbruch[19] = 50;
	steinbruch[20] = 55;
	steinbruch[21] = 60;
	steinbruch[22] = 66;
	steinbruch[23] = 72;
	steinbruch[24] = 78;
	steinbruch[25] = 84;
	steinbruch[26] = 91;
	steinbruch[27] = 98;
	steinbruch[28] = 105;
	steinbruch[29] = 112;
	steinbruch[30] = 120;
	
	var steinlager = new Array();
	steinlager[1]  = 0;
	steinlager[2]  = 1;
	steinlager[3]  = 2;
	steinlager[4]  = 3;
	steinlager[5]  = 4;
	steinlager[6]  = 5;
	steinlager[7]  = 6;
	steinlager[8]  = 7;
	steinlager[9]  = 8;
	steinlager[10] = 9;
	steinlager[11] = 10;
	steinlager[12] = 11;
	steinlager[13] = 12;
	steinlager[14] = 13;
	steinlager[15] = 14;
	steinlager[16] = 15;
	steinlager[17] = 16;
	steinlager[18] = 17;
	steinlager[19] = 18;
	steinlager[20] = 19;

	var erzmine = new Array();
	erzmine[1]  = 0;
	erzmine[2]  = 1;
	erzmine[3]  = 2;
	erzmine[4]  = 3;
	erzmine[5]  = 4;
	erzmine[6]  = 6;
	erzmine[7]  = 8;
	erzmine[8]  = 10;
	erzmine[9]  = 12;
	erzmine[10] = 15;
	erzmine[11] = 18;
	erzmine[12] = 21;
	erzmine[13] = 24;
	erzmine[14] = 28;
	erzmine[15] = 32;
	erzmine[16] = 36;
	erzmine[17] = 40;
	erzmine[18] = 45;
	erzmine[19] = 50;
	erzmine[20] = 55;
	erzmine[21] = 60;
	erzmine[22] = 66;
	erzmine[23] = 72;
	erzmine[24] = 78;
	erzmine[25] = 84;
	erzmine[26] = 91;
	erzmine[27] = 98;
	erzmine[28] = 105;
	erzmine[29] = 112;
	erzmine[30] = 120;
	
	var erzlager = new Array();
	erzlager[1]  = 0;
	erzlager[2]  = 1;
	erzlager[3]  = 2;
	erzlager[4]  = 3;
	erzlager[5]  = 4;
	erzlager[6]  = 5;
	erzlager[7]  = 6;
	erzlager[8]  = 7;
	erzlager[9]  = 8;
	erzlager[10] = 9;
	erzlager[11] = 10;
	erzlager[12] = 11;
	erzlager[13] = 12;
	erzlager[14] = 13;
	erzlager[15] = 14;
	erzlager[16] = 15;
	erzlager[17] = 16;
	erzlager[18] = 17;
	erzlager[19] = 18;
	erzlager[20] = 19;

    var ix_bergfried   = document.getElementById('bergfried').value;
    var ix_zeughaus    = document.getElementById('zeughaus').value;
    var ix_taverne     = document.getElementById('taverne').value;
    var ix_bibliothek  = document.getElementById('bibliothek').value;
    var ix_wehranlage  = document.getElementById('wehranlage').value;
    var ix_markt       = document.getElementById('markt').value;
    var ix_bauernhof   = document.getElementById('bauernhof').value;
    var ix_holzfaeller = document.getElementById('holzfaeller').value;
    var ix_holzlager   = document.getElementById('holzlager').value;
    var ix_steinbruch  = document.getElementById('steinbruch').value;
    var ix_steinlager  = document.getElementById('steinlager').value;
    var ix_erzmine     = document.getElementById('erzmine').value;
    var ix_erzlager    = document.getElementById('erzlager').value;
    
    forschung = 0;
    forschung = forschung + checkForschung('langbogen', 3);
    alert(forschung);
    forschung = forschung - checkForschung('dreifelderwirtschaft', 3);
    alert(forschung);
    forschung = forschung + checkForschung('kummet', 3);
    alert(forschung);
    forschung = forschung + checkForschung('vorratskeller', 3);
    forschung = forschung + checkForschung('steigbuegel', 3);
    forschung = forschung + checkForschung('waffenschmied', 3);
    forschung = forschung + checkForschung('ruestungsschmied', 3);
    forschung = forschung + checkForschung('bierpruefer', 3);
    forschung = forschung + checkForschung('schwertschmied', 3);
    forschung = forschung + checkForschung('eisenhaertung', 3);
    forschung = forschung + checkForschung('armbrust', 3);
    forschung = forschung + checkForschung('giftpfeile', 3);
    forschung = forschung + checkForschung('pferdezucht', 3);
    forschung = forschung + checkForschung('waffenherstellung', 3);
    forschung = forschung + checkForschung('pferdepanzerung', 3);
    forschung = forschung + checkForschung('schubkarren', 3);
    forschung = forschung + checkForschung('brandpfeile', 3);
    forschung = forschung + checkForschung('hufschmied', 3);
    forschung = forschung + checkForschung('umgebungskarte', 3);
    forschung = forschung + checkForschung('zisterne', 3);
    
    population = bauernhof[ix_bauernhof] 
    			 - bergfried[ix_bergfried] 
    			 - zeughaus[ix_zeughaus] 
    			 - taverne[ix_taverne]
			     - bibliothek[ix_bibliothek]
			     - wehranlage[ix_wehranlage]
			     - markt[ix_markt]
			     - holzfaeller[ix_holzfaeller]
			     - holzlager[ix_holzlager]
			     - steinbruch[ix_steinbruch]
			     - steinlager[ix_steinlager]
			     - erzmine[ix_erzmine]
			     - erzlager[ix_erzlager]
    			 - forschung;
    alert(forschung);
    document.getElementById('maxpopulation').value = population;
}
    
function checkForschung(forschung, update) 
{
	var tmp = document.getElementById(forschung + '-chk');
	var hasClass = tmp.classList.contains('ui-checkbox-on');
  
	if(hasClass == true) {
		return update;
	}
	return 0;
}
  
  
//  value = parseInt(value) + parseInt(update);
//  if(value < 1) {
//  	value = 1;    	
//  } else if (value > max) {
//  	value = max;
//  }
//  document.getElementById(building).value = value;
//  
//  var population = calcPopulation();
//  document.getElementById('maxpopulation').value = population;
//  alert(population);
//}


/* Funktioniert. …ffnet aber immer
$(document).on('pagebeforeshow', '#totaldefense-page', function(){       
	$( "#menue-panel" ).panel( "open"); });
*/
