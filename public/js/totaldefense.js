$(document).on( "mobileinit", function() {
	$.mobile.ajaxEnabled = false;
});

//$(document).on("pagecreate", "#td-page-1", function( event ) {
//	$('#swipeDelete li').swipeDelete({
//		btnTheme: 'e',
//		btnLabel: 'Delete',
//		btnClass: 'aSwipeButton',
//		click: function(e){
//			e.preventDefault();
//			var url = $(e.target).attr('href');
//			$(this).parents('li').slideUp();
//			$.post(url, function(data) {
//				console.log(data);
//			});
//		}
//	});
//});

$(document).on('pageinit', function() 
	    { 
//			alert("ABC");
//			$('.date-input').date({ dateFormat: "dd.mm.yy" });
			$('.clockpicker').clockpicker();
			
//			$("#table-custom-2").tablesorter(); 
	    } 
	); 

$(document).on('pagebeforecreate', function() 
	    { 
//			alert("ABC");
			$('.date-input').date({ dateFormat: "dd.mm.yy" });
			$('.date-input').date({ defaultDate: +1 });
			$('.date-input').date({ firstDay: 1 });
			$('.date-input').datepicker({ showButtonPanel: true });
	    }); 

$(document).on('pageinit', '#td-castletype-update-1', function( event ) {
    calcPopulation();
    
    $("input[name='Type']").bind( "change", function(event, ui) {
    	$('#type2a').prop('checked', false);
		$('#type2b').prop('checked', false);
		$('#type2c').prop('checked', false);
    	switch($(this).val())
        {
	        case 'Off': $('#type2a').prop('checked', true); break;
	        case 'Def': $('#type2b').prop('checked', true); break;
	        case 'Mix': $('#type2c').prop('checked', true); break;
        }
    	$('#type2a').checkboxradio().checkboxradio('refresh');
		$('#type2b').checkboxradio().checkboxradio('refresh');
		$('#type2c').checkboxradio().checkboxradio('refresh');
    });
    
    $("input[name='Type2']").bind( "change", function(event, ui) {
    	$('#type1a').prop('checked', false);
		$('#type1b').prop('checked', false);
		$('#type1c').prop('checked', false);
    	switch($(this).val())
        {
	        case 'Off': $('#type1a').prop('checked', true); break;
	        case 'Def': $('#type1b').prop('checked', true); break;
	        case 'Mix': $('#type1c').prop('checked', true); break;
        }
    	$('#type1a').checkboxradio().checkboxradio('refresh');
		$('#type1b').checkboxradio().checkboxradio('refresh');
		$('#type1c').checkboxradio().checkboxradio('refresh');
    });
    
    $('#name1').bind( "change", function(event, ui) {
    	$('#name2').val( $(this).val() );
    });
    
    $('#name2').bind( "change", function(event, ui) {
    	$('#name1').val( $(this).val() );
    });
    
});


function updatePopulation(building, update) {
//	alert('udatePopulation');
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

function calcPopulation(forschung_trigger) {
//	alert('calcPopulation');
	forschung_trigger = typeof forschung_trigger !== 'undefined' ? forschung_trigger : 'not_relevant';
	
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
	wehranlage[1]  = 0;
	wehranlage[2]  = 1;
	wehranlage[3]  = 2;
	wehranlage[4]  = 4;
	wehranlage[5]  = 6;
	wehranlage[6]  = 9;
	wehranlage[7]  = 12;
	wehranlage[8]  = 16;
	wehranlage[9]  = 20;
	wehranlage[10] = 25;
	wehranlage[11] = 30;
	wehranlage[12] = 36;
	wehranlage[13] = 42;
	wehranlage[14] = 49;
	wehranlage[15] = 56;
	wehranlage[16] = 64;
	wehranlage[17] = 72;
	wehranlage[18] = 81;
	wehranlage[19] = 90;
	wehranlage[20] = 100;
	
	var markt = new Array();
	markt[1]  = 0;
	markt[2]  = 1;
	markt[3]  = 3;
	markt[4]  = 6;
	markt[5]  = 10;
	markt[6]  = 15;
	markt[7]  = 21;
	markt[8]  = 28;

// Maximales Bevölkerungslimit; Bevölkerungskosten beim Bauernhof immer 0.
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

    var ix_bergfried   = document.getElementById('bergfried').value;
    var ix_zeughaus    = document.getElementById('zeughaus').value;
    var ix_taverne     = document.getElementById('taverne').value;
    var ix_bibliothek  = document.getElementById('bibliothek').value;
    var ix_wehranlage  = document.getElementById('wehranlage').value;
    var ix_markt       = document.getElementById('markt').value;
    var ix_bauernhof   = document.getElementById('bauernhof').value;
    var ix_holzfaeller = document.getElementById('holzfaeller').value;
    var ix_steinbruch  = document.getElementById('steinbruch').value;
    var ix_erzmine     = document.getElementById('erzmine').value;
    
    forschung = 0;
    forschung = forschung + checkForschung(forschung_trigger, 'langbogen', 1);
    forschung = forschung + checkForschung(forschung_trigger, 'steigbuegel', 2);
    forschung = forschung + checkForschung(forschung_trigger, 'waffenschmied', 3);
    forschung = forschung + checkForschung(forschung_trigger, 'ruestungsschmied', 3);
    forschung = forschung + checkForschung(forschung_trigger, 'bierpruefer', 3);
    forschung = forschung + checkForschung(forschung_trigger, 'schwertschmied', 4);
    forschung = forschung + checkForschung(forschung_trigger, 'eisenhaertung', 4);
    forschung = forschung + checkForschung(forschung_trigger, 'armbrust', 5);
    forschung = forschung + checkForschung(forschung_trigger, 'giftpfeile', 6);
    forschung = forschung + checkForschung(forschung_trigger, 'pferdezucht', 6);
    forschung = forschung + checkForschung(forschung_trigger, 'waffenherstellung', 7);
    forschung = forschung + checkForschung(forschung_trigger, 'pferdepanzerung', 7);
    forschung = forschung + checkForschung(forschung_trigger, 'schubkarren', 8);
    forschung = forschung + checkForschung(forschung_trigger, 'brandpfeile', 8);
    forschung = forschung + checkForschung(forschung_trigger, 'hufschmied', 9);
    forschung = forschung + checkForschung(forschung_trigger, 'umgebungskarte', 10);
    forschung = forschung + checkForschung(forschung_trigger, 'zisterne', 10);
    
    var population = bauernhof[ix_bauernhof] 
    			   - bergfried[ix_bergfried] 
    			   - zeughaus[ix_zeughaus] 
    			   - taverne[ix_taverne]
			       - bibliothek[ix_bibliothek]
			       - wehranlage[ix_wehranlage]
			       - markt[ix_markt]
			       - holzfaeller[ix_holzfaeller]
			       - steinbruch[ix_steinbruch]
			       - erzmine[ix_erzmine]
    			   - forschung;
//    alert(population);
    document.getElementById('maxpopulation1').value = population;
    document.getElementById('maxpopulation2').value = population;
    
    calcFreePopulation();
}

function checkForschung(forschung_trigger, forschung, update) 
{
	var tmp = document.getElementById(forschung + '-chk');
	var hasClassOn = tmp.classList.contains('ui-checkbox-on');
	var hasClassOff = tmp.classList.contains('ui-checkbox-off');
  
	if(forschung_trigger == forschung) {
//		Es wurde auf eine Forschung geklickt, aber das System hat die Klasse noch nicht geändert.
		if(hasClassOn == true) {
			return 0;			
		}
		else {
			return update;			
		}
	}
	else
	{
//		Allgemeine Kalkulation, ohne das eine Forschung angeklickt, also geändert wurde.
		if(hasClassOn == true) 
		{
			return update;			
		}
		else if(hasClassOff == true) 
		{
			return 0;
		}
		else if(document.getElementById(forschung).value == 1)
//		Beim pageinit sind die Klassen noch nicht gesetzt. Dann wird der Wert vom Server ausgewertet.
		{
			return update;
		}
		else
		{
			return 0;			
		}
	}
}

function calcFreePopulation() 
{
//	alert('calcFreePopulation');
	var maxpopulation = document.getElementById('maxpopulation1').value;
	
	var total_st_val   = document.getElementById('total-st').value;
    var total_sk_val   = document.getElementById('total-sk').value;
    var total_bs_val   = document.getElementById('total-bs').value;
    var total_as_val   = document.getElementById('total-as').value;
    var total_pr_val   = document.getElementById('total-pr').value * 2;
    var total_lr_val   = document.getElementById('total-lr').value * 2;
    var total_hk_val   = document.getElementById('total-hk').value;
    var total_ok_val   = document.getElementById('total-ok').value * 3;
    var mission_st_val = document.getElementById('mission-st').value;
    var mission_sk_val = document.getElementById('mission-sk').value;
    var mission_bs_val = document.getElementById('mission-bs').value;
    var mission_as_val = document.getElementById('mission-as').value;
    var mission_pr_val = document.getElementById('mission-pr').value * 2;
    var mission_lr_val = document.getElementById('mission-lr').value * 2;

    var freePopulation = maxpopulation
    				   - total_st_val - total_sk_val - total_bs_val - total_as_val - total_pr_val - total_lr_val - total_hk_val - total_ok_val
    				   - mission_st_val - mission_sk_val - mission_bs_val - mission_as_val - mission_pr_val - mission_lr_val;
    
    document.getElementById('freepopulation').value = freePopulation;
}
