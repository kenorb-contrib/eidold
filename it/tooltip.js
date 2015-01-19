// JavaScript Document
jQuery(function($){
	$(".has_tooltip").mouseover(function(event){
		
		var tooltip_text = new Array(); // regular array (add an optional integer
		tooltip_text["Elementary"]="Questo corso è strutturato per costruire solide basi linguistiche e prendere confidenza con la lingua inglese. Il programma di studio è perfettamente bilanciato tra l'approfondimento della grammatica e lo sviluppo della lingua parlata.";       // argument to control array's size)
		tooltip_text["Pre-Intermediate"]="Questo corso approfondisce ulteriormente le conoscenze dell'inglese di base. Gli studenti migliorano le loro competenze e la loro abilità nella comunicazione orale.";
		tooltip_text["Intermediate"]="Il corso sviluppa ulteriormente le conoscenze acquisite durante il Pre-Intermediate. Il piano di studi è bilanciato tra grammatica, vocabolario, pronuncia, per sviluppare nello studente competenze necessarie ad essere autonomo nel linguaggio scritto e parlato. Le lezioni sono focalizzate sullo sviluppo di abilità comunicative e di comprensione del lessico e delle frasi più comuni.";
		tooltip_text["Upper_Intermediate"]="Il corso si rivolge a studenti che stanno diventando autonomi nell'uso dell'inglese ed è finalizzato al consolidamento della grammatica, anche grazie all'introduzione di nuovi vocaboli e frasi tipiche. Le lezioni sono focalizzate sull'esercizio pratico dell'inglese parlato e vengono utilizzati diversi materiali di studio per permettere allo studente di colmare il divario che lo separa dalla piena indipendenza nell'utilizzo dell'inglese. Una parte del lavoro è relativo alla pronuncia, con l'obiettivo di eliminare qualsiasi difficoltà legata alla fonetica.";       // argument to control array's size)
		tooltip_text["Advanced"]="Il corso si rivolge agli studenti che stanno perfezionando l'uso dell'inglese, per diventare pienamente autonomi e gestire con efficacia qualsiasi contesto e situazione comunicativa. Vengono utilizzati diversi materiali di studio e gli studenti si confrontano costantemente con nuove sfide lessicali e comunicative, con particolare attenzione alla chiarezza e alla precisione della pronuncia inglese.";
		tooltip_text["IELTS"]="IELTS è diventata una delle certificazioni richieste per l'accesso ai corsi universitari di primo e secondo livello. Questo corso fornisce un elevato standard di preparazione in vista del superamento dell'esame IELTS e mette in condizione gli studenti di raggiungere importanti obiettivi linguistici anche per il proseguo della carriera scolastica";
		tooltip_text["CAE"]="CAE";       // argument to control array's size)
		tooltip_text["FCE"]="FCE";
		
		var x = event.pageX;
		var y = event.pageY;
		var id = $(this).attr('id');
		var offset = $(this).offset();
		$('#tooltip_box').children('#tooltip_p').html(tooltip_text[id]);
		$('#tooltip_box').css("left",offset.left+300).css("top",offset.top);
		//$('#tooltip_box').css("left",x+30).css("top",y);
 		$('#tooltip_box').show();
		
	});
	$(".has_tooltip").mouseout(function(){
		$('#tooltip_box').hide();
	});

});

