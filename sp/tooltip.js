// JavaScript Document
jQuery(function($){
	$(".has_tooltip").mouseover(function(event){
		
		var tooltip_text = new Array(); // regular array (add an optional integer
		tooltip_text["Elementary"]="This course is a solid foundation that builds students' language and confidence. It has a perfectly balanced syllabus with an in-depth treatment of grammar and integrated skills throughout.";       // argument to control array's size)
		tooltip_text["Pre-Intermediate"]="This course follows on from the foundations laid in elementary. Students' understanding of English is widened, and their abilities to use the language for communicative purposes are extended.";
		tooltip_text["Intermediate"]="This course succeeds pre-intermediate and has a varied balance of grammar, vocabulary, pronunciation and skills work to cater for students' growing confidence in English. Their communicative abilities will be further tested and improved upon, as will their understanding of lexis and everyday phrases.";
		tooltip_text["Upper_Intermediate"]="This course is for students who are becoming more independent users of English and it consolidates grammar while introducing new lexis and phrases. There is an emphasis placed on improving practical communication skills and authentic materials are used to further bridge the gap from student to independent user of English. Pronunciation work is also included, with the aim to eliminate any problem sounds or phonetic difficulties.";       // argument to control array's size)
		tooltip_text["Advanced"]="This course is students who are in the process of mastering their use of English to become fully independent and effective users across a wide variety of communicative contexts and mediums. Authentic materials are regularly used and students are constantly challenged with new lexis and communicative tasks while work continues on clear and precise pronunciation of English sounds.";
		tooltip_text["IELTS"]="IELTS has fast become the exam for entry in graduate and post –graduate study on a global scale. This course provides first-class preparation for the IELTS exam and enables students to achieve the results they need for further study through English.";
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

