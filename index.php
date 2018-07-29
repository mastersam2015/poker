<?
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width">
<script src="jquery.js"></script>

<script language="JavaScript">
<!--
var zmienna;
var player1=0;
var player2=0;
var ready;
var nazwa1;
var nazwa2;
var licznik=0;
function przeciwnik(){
//--------------------------------sety------------------------------
			var jeden;
			var dwa;
			var trzy;
			var cztery;
			var piec;
			
		var karta1;
		var karta2;
		var karta3;
		var karta4;
		var karta5;
		var sets;
		var set;
		var dziesiec=0;
		var dziewiec=0;
		var jopek=0;
		var dama=0;
		var krol=0;
		var as=0;
		var i;
		


			
			
			jeden=$("#p1k").val();
			dwa=$("#p2k").val();
			trzy=$("#p3k").val();
			cztery=$("#p4k").val();
			piec=$("#p5k").val();
			//as
			if(jeden=="1"){karta1="a";}
			if(jeden=="7"){karta1="a";}
			if(jeden=="13"){karta1="a";}
			if(jeden=="19"){karta1="a";}
			
			if(dwa=="1"){karta2="a";}
			if(dwa=="7"){karta2="a";}
			if(dwa=="13"){karta2="a";}
			if(dwa=="19"){karta2="a";}
			
			if(trzy=="1"){karta3="a";}
			if(trzy=="7"){karta3="a";}
			if(trzy=="13"){karta3="a";}
			if(trzy=="19"){karta3="a";}
			
			if(cztery=="1"){karta4="a";}
			if(cztery=="7"){karta4="a";}
			if(cztery=="13"){karta4="a";}
			if(cztery=="19"){karta4="a";}
			
			
			if(piec=="1"){karta5="a";}
			if(piec=="7"){karta5="a";}
			if(piec=="13"){karta5="a";}
			if(piec=="19"){karta5="a";}
			
			//dziewiec
			
			if(jeden=="2"){karta1="9";}
			if(jeden=="8"){karta1="9";}
			if(jeden=="14"){karta1="9";}
			if(jeden=="20"){karta1="9";}
			
			if(dwa=="2"){karta2="9";}
			if(dwa=="8"){karta2="9";}
			if(dwa=="14"){karta2="9";}
			if(dwa=="20"){karta2="9";}
			
			if(trzy=="2"){karta3="9";}
			if(trzy=="8"){karta3="9";}
			if(trzy=="14"){karta3="9";}
			if(trzy=="20"){karta3="9";}
			
			if(cztery=="2"){karta4="9";}
			if(cztery=="8"){karta4="9";}
			if(cztery=="14"){karta4="9";}
			if(cztery=="20"){karta4="9";}
			
			
			if(piec=="2"){karta5="9";}
			if(piec=="8"){karta5="9";}
			if(piec=="14"){karta5="9";}
			if(piec=="20"){karta5="9";}
			
			//dziesiec
			
			
			if(jeden=="3"){karta1="0";}
			if(jeden=="9"){karta1="0";}
			if(jeden=="15"){karta1="0";}
			if(jeden=="21"){karta1="0";}
			
			if(dwa=="3"){karta2="0";}
			if(dwa=="9"){karta2="0";}
			if(dwa=="15"){karta2="0";}
			if(dwa=="21"){karta2="0";}
			
			if(trzy=="3"){karta3="0";}
			if(trzy=="9"){karta3="0";}
			if(trzy=="15"){karta3="0";}
			if(trzy=="21"){karta3="0";}
			
			if(cztery=="3"){karta4="0";}
			if(cztery=="9"){karta4="0";}
			if(cztery=="15"){karta4="0";}
			if(cztery=="21"){karta4="0";}
			
			
			if(piec=="3"){karta5="0";}
			if(piec=="9"){karta5="0";}
			if(piec=="15"){karta5="0";}
			if(piec=="21"){karta5="0";}
			
			//jopekczerwo
			
			if(jeden=="4"){karta1="j";}
			if(jeden=="10"){karta1="j";}
			if(jeden=="16"){karta1="j";}
			if(jeden=="22"){karta1="j";}
			
			if(dwa=="4"){karta2="j";}
			if(dwa=="10"){karta2="j";}
			if(dwa=="16"){karta2="j";}
			if(dwa=="22"){karta2="j";}
			
			if(trzy=="4"){karta3="j";}
			if(trzy=="10"){karta3="j";}
			if(trzy=="16"){karta3="j";}
			if(trzy=="22"){karta3="j";}
			
			if(cztery=="4"){karta4="j";}
			if(cztery=="10"){karta4="j";}
			if(cztery=="16"){karta4="j";}
			if(cztery=="22"){karta4="j";}
			
			
			if(piec=="4"){karta5="j";}
			if(piec=="10"){karta5="j";}
			if(piec=="16"){karta5="j";}
			if(piec=="22"){karta5="j";}
			
			//dama


			if(jeden=="5"){karta1="d";}
			if(jeden=="11"){karta1="d";}
			if(jeden=="17"){karta1="d";}
			if(jeden=="23"){karta1="d";}
			
			if(dwa=="5"){karta2="d";}
			if(dwa=="11"){karta2="d";}
			if(dwa=="17"){karta2="d";}
			if(dwa=="23"){karta2="d";}
			
			if(trzy=="5"){karta3="d";}
			if(trzy=="11"){karta3="d";}
			if(trzy=="17"){karta3="d";}
			if(trzy=="23"){karta3="d";}
			
			if(cztery=="5"){karta4="d";}
			if(cztery=="11"){karta4="d";}
			if(cztery=="17"){karta4="d";}
			if(cztery=="23"){karta4="d";}
			
			
			if(piec=="5"){karta5="d";}
			if(piec=="11"){karta5="d";}
			if(piec=="17"){karta5="d";}
			if(piec=="23"){karta5="d";}			
			
			//krol
			
			
			if(jeden=="6"){karta1="k";}
			if(jeden=="12"){karta1="k";}
			if(jeden=="18"){karta1="k";}
			if(jeden=="24"){karta1="k";}
			
			if(dwa=="6"){karta2="k";}
			if(dwa=="12"){karta2="k";}
			if(dwa=="18"){karta2="k";}
			if(dwa=="24"){karta2="k";}
			
			if(trzy=="6"){karta3="k";}
			if(trzy=="12"){karta3="k";}
			if(trzy=="18"){karta3="k";}
			if(trzy=="24"){karta3="k";}
			
			if(cztery=="6"){karta4="k";}
			if(cztery=="12"){karta4="k";}
			if(cztery=="18"){karta4="k";}
			if(cztery=="24"){karta4="k";}


			
			
			if(piec=="6"){karta5="k";}
			if(piec=="12"){karta5="k";}
			if(piec=="18"){karta5="k";}
			if(piec=="24"){karta5="k";}
			
			//alert(jeden+"j");
			//alert(dwa+"d");
			//alert(trzy+"t");
			//alert(cztery+"tr");
			//alert(piec+"p");
			
			sets=karta1+karta2+karta3+karta4+karta5;
			for(i=0;i<6;i++){
			if(sets[i]=="a"){
			as=as+1;
			}
			if(sets[i]=="9"){
			dziewiec=dziewiec+1;
			}
			if(sets[i]=="0"){
			dziesiec=dziesiec+1;
			}
			if(sets[i]=="j"){
			jopek=jopek+1;
			}
			if(sets[i]=="d"){
			dama=dama+1;
			}
			if(sets[i]=="k"){
			krol=krol+1;
			}
			}
			//parka
			
			//alert(sets);
			/*
			alert(dziewiec+"9");
			alert(dziesiec+"10");
			alert(jopek+"j");
			alert(dama+"d");
			alert(krol+"k");
			alert(as+"as");
			*/
			if(dziewiec==2){set="1";nazwa2="parka";}
			if(dziesiec==2){set="2";nazwa2="parka";}
			if(jopek==2){set="3";nazwa2="parka";}
			if(dama==2){set="4";nazwa2="parka";}
			if(krol==2){set="5";nazwa2="parka";}
			if(as==2){set="6";nazwa2="parka";}
			
			
				//dwie parki

			if(dziewiec==2&&dziesiec==2){set="7";nazwa2="dwie parki";}
			if(dama==2&&dziewiec==2){set="9";nazwa2="dwie parki";}
			if(krol==2&&dziewiec==2){set="10";nazwa2="dwie parki";}
			if(jopek==2&&dziewiec==2){set="8";nazwa2="dwie parki";}
			if(as==2&&dziewiec==2){set="11";nazwa2="dwie parki";}
			if(dziesiec==2&&jopek==2){set="12";nazwa2="dwie parki";}
			if(dziesiec==2&&dama==2){set="13";nazwa2="dwie parki";}
			if(dziesiec==2&&krol==2){set="14";nazwa2="dwie parki";}
			if(dziesiec==2&&as==2){set="15";nazwa2="dwie parki";}
			if(jopek==2&&dama==2){set="16";nazwa2="dwie parki";}
			if(jopek==2&&krol==2){set="17";nazwa2="dwie parki";}
			if(jopek==2&&as==2){set="18";nazwa2="dwie parki";}
			if(dama==2&&krol==2){set="19";nazwa2="dwie parki";}
			if(dama==2&&as==2){set="20";nazwa2="dwie parki";}
			if(krol==2&&as==2){set="21";nazwa2="dwie parki";}
			
			
			//strit maly
			if(dziewiec==1&&dziesiec==1&&jopek==1&&dama==1&&krol==1){set="22";nazwa2="strit maly";}
			
			
			
				//strit duzy
			
			if(dziesiec==1&&jopek==1&&dama==1&&krol==1&&as==1){set="23";nazwa1="strit duzy";}
			
			
				//trojka
			
			if(dziewiec==3){set="24";nazwa2="trojka";}
			if(dziesiec==3){set="25";nazwa2="trojka";}
			if(jopek==3){set="26";nazwa2="trojka";}
			if(dama==3){set="27";nazwa2="trojka";}
			if(krol==3){set="28";nazwa2="trojka";}
			if(as==3){set="29";nazwa2="trojka";}
			
					//full
			if((krol==3)&&(dama==2)){set="47";nazwa2="full";}
			if((krol==2)&&(dama==3)){set="52";nazwa2="full";}
			if((as==3)&&(krol==2)){set="60";nazwa2="full";}
			if((as==2)&&(krol==3)){set="58";nazwa2="full";}
			if((as==3)&&(dama==2)){set="48";nazwa2="full";}
			if((dama==3)&&(as==2)){set="57";nazwa2="full";}
			if((jopek==3)&&(as==2)){set="56";nazwa2="full";}
			if((jopek==2)&&(as==3)){set="6";nazwa2="full";}
			if((jopek==3)&&(krol==2)){set="51";nazwa2="full";}
			if((krol==3)&&(jopek==2)){set="43";nazwa2="full";}
			if((as==3)&&(jopek==2)){set="44";nazwa2="full";}
			if((jopek==3)&&(dama==2)){set="47";nazwa2="full";}
			if((dama==3)&&(jopek==2)){set="42";nazwa2="full";}
			if((dziesiec==3)&&(as==2)){set="55";nazwa2="full";}
			if((as==3)&&(dziesiec==2)){set="39";nazwa2="full";}
			if((dziewiec==3)&&(as==2)){set="54";nazwa2="full";}
			if((krol==3)&&(dziesiec==2)){set="38";nazwa2="full";}
			if((dziesiec==3)&&(dama==2)){set="46";nazwa2="full";}
			if((dama==3)&&(dziesiec==2)){set="37";nazwa2="full";}
			if((dziesiec==3)&&(jopek==2)){set="41";nazwa2="full";}
			if((jopek==3)&&(dziesiec==2)){set="36";nazwa2="full";}
			if((krol==3)&&(dziewiec==2)){set="33";nazwa2="full";}
			if((dziewiec==3)&&(krol==2)){set="49";nazwa2="full";}
			if((dziesiec==3)&&(krol==2)){set="50";nazwa2="full";}
			if((dziewiec==3)&&(dama==2)){set="45";nazwa2="full";}
			if((dama==3)&&(dziewiec==2)){set="32";nazwa2="full";}
			if((dziewiec==3)&&(jopek==2)){set="40";nazwa2="full";}
			if((jopek==3)&&(dziewiec==2)){set="31";nazwa2="full";}
			if((dziewiec==3)&&(dziesiec==2)){set="35";nazwa2="full";}
			if((dziesiec==3)&&(dziewiec==2)){set="30";nazwa2="full";}
			if((as==3)&&(dziewiec==2)){set="34";nazwa2="full";}
			
			//kareta----------
			
			if(krol==4){set="65";nazwa2="kareta";}
			if(dama==4){set="64";nazwa2="kareta";}
			if(jopek==4){set="63";nazwa2="kareta";}
			if(dziesiec==4){set="62";nazwa2="kareta";}
			if(dziewiec==4){set="61";nazwa2="kareta";}
			if(as==4){set="66";nazwa2="kareta";}
			
	
			player2=set;
		
	//alert(player2);		
		
			
			//alert(sets+"set");
			

}


function karta(num,ob){
num=parseInt(num);
if(num!=0){
if(ob=="o1"){
$("#zapis1").val(num);
}

if(ob=="o2"){
$("#zapis2").val(num);
}

if(ob=="o3"){
$("#zapis3").val(num);
}

if(ob=="o4"){
$("#zapis4").val(num);
}


if(ob=="o5"){
$("#zapis5").val(num);
}
}


if(num!=0){
if(ob=="p1"){
$("#p1k").val(num);
}

if(ob=="p2"){
$("#p2k").val(num);
}

if(ob=="p3"){
$("#p3k").val(num);
}

if(ob=="p4"){
$("#p4k").val(num);
}


if(ob=="p5"){
$("#p5k").val(num);
}
}

if (num==1){
$("#"+ob).attr('src', 'aswino.jpg');
}

if (num==2){
$("#"+ob).attr('src', 'dziewiecwino.jpg');
}
if (num==3){
$("#"+ob).attr('src', 'dziesiecwino.jpg');
}
if (num==4){
$("#"+ob).attr('src', 'jopekwino.jpg');
}
if (num==5){
$("#"+ob).attr('src', 'damawino.jpg');
}
if (num==6){
$("#"+ob).attr('src', 'krolwino.jpg');
}
if (num==7){
$("#"+ob).attr('src', 'asrzaledz.jpg');
}
if (num==8){
$("#"+ob).attr('src', 'dziewiecrzaledz.jpg');
}
if (num==9){
$("#"+ob).attr('src', 'dziesiecrzaledz.jpg');
}
if (num==10){
$("#"+ob).attr('src', 'jopekrzaledz.jpg');
}
if (num==11){
$("#"+ob).attr('src', 'damarzaledz.jpg');
}
if (num==12){
$("#"+ob).attr('src', 'krolrzaledz.jpg');
}
if (num==13){
$("#"+ob).attr('src', 'asdzwon.jpg');
}
if (num==14){
$("#"+ob).attr('src', 'dziewiecdzwon.jpg');
}
if (num==15){
$("#"+ob).attr('src', 'dziesiecdzwon.jpg');
}
if (num==16){
$("#"+ob).attr('src', 'jopekdzwon.jpg');
}
if (num==17){
$("#"+ob).attr('src', 'damadzwon.jpg');
}
if (num==18){
$("#"+ob).attr('src', 'kroldzwon.jpg');
}
if (num==19){
$("#"+ob).attr('src', 'asczerwo.jpg');
}
if (num==20){
$("#"+ob).attr('src', 'dziewiecczerwo.jpg');
}
if (num==21){
$("#"+ob).attr('src', 'dziesiecczerwo.jpg');
}
if (num==22){
$("#"+ob).attr('src', 'jopekczerwo.jpg');
}
if (num==23){
$("#"+ob).attr('src', 'damaczerwo.jpg');
}
if (num==24){
$("#"+ob).attr('src', 'krolczerwo.jpg');
}
//alert('www');
}
function check(){




last_update = new Date().getTime();
$.get("player2r.php", { lastfetch : last_update },  function(data) {
zmienna=data;
});


tablica=zmienna.split(',');
karta(tablica[0],'p1');
karta(tablica[1],'p2');
karta(tablica[2],'p3');
karta(tablica[3],'p4');
karta(tablica[4],'p5');

}

function reflesh(){






if($("#wym").val()==1){
if ($("#k1").val()=="-1"){
$.ajax(
            {
                type: 'GET',
                url: 'pop.php',
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                    $('#k1').val(jsonData);
                }
            });


}else{

karta($("#k1").val(),"o1");

}



if ($("#k2").val()=="-1"){
$.ajax(
            {
                type: 'GET',
                url: 'pop.php',
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                    $('#k2').val(jsonData);
                }
            });


}else{

karta($("#k2").val(),"o2");

}


if ($("#k3").val()=="-1"){
$.ajax(
            {
                type: 'GET',
                url: 'pop.php',
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                    $('#k3').val(jsonData);
                }
            });


}else{

karta($("#k3").val(),"o3");

}



if ($("#k4").val()=="-1"){
$.ajax(
            {
                type: 'GET',
                url: 'pop.php',
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                    $('#k4').val(jsonData);
                }
            });
}else{

karta($("#k4").val(),"o4");

}

			
			
if ($("#k5").val()=="-1"){
$.ajax(
            {
                type: 'GET',
                url: 'pop.php',
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                    $('#k5').val(jsonData);
                }
            });


}else{

karta($("#k5").val(),"o5");

}
			
			
}
//alert('www');



$.ajax(
            {
                type: 'GET',
                url: 'player1.php?q1='+$('#zapis1').val()+'&q2='+$('#zapis2').val()+'&q3='+$('#zapis3').val()+'&q4='+$('#zapis4').val()+'&q5='+$('#zapis5').val(),
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                    $('#k5').val(jsonData);
                }
            });
			
					
$.ajax(
            {
                type: 'GET',
                url: 'stul1.php?q='+$('#stul').val(),
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                   
                }
            });	
			
			
$.ajax(
            {
                type: 'GET',
                url: 'stul2.php',
                dataType: 'json',
                success: function(jsonData)
                {
				//num = $.parseJSON(jsonData.d);
                    $('#stul2').val(jsonData);
                }
            });
			$.ajax(
            {
                type: 'GET',
                url: 'ready.php?go=4',
                dataType: 'json',
                success: function(jsonData)
                {
				var read;
				ready=jsonData;
				if (ready==1){read="ready";}
				$('#ready').val(read);
                }
            });
			
			//alert(ready);
			
					if (ready==1&&$('#cos').val()==1){
			licznik++;
			check();
			przeciwnik();
			if (licznik==3){
			
			
			//alert('part done');
			
			
			//alert('wynik player1:' + player1+'wynik player2:'+player2);
		if (player1==undefined){player1=0;}
			if (player2==undefined){player2=0;}
			//alert(nazwa1 +'vs'+nazwa2 );
			if (parseInt(player1)>parseInt(player2)){
			
			window.location.href ='win1.php?q1='+nazwa1+'&q2='+nazwa2+'&bank='+$('#bank').val()+'&stul='+$('#stul').val()+'&stul2='+$('#stul2').val();
			//alert('www1');
			
			}
			if (parseInt(player1)<parseInt(player2)){
			window.location.href ='lose1.php?q1='+nazwa1+'&q2='+nazwa2+'&bank='+$('#bank').val()+'&stul='+$('#stul').val()+'&stul2='+$('#stul2').val();
			//alert('www2');
			}
			
			//alert(player1);
		
			//alert(player1);
			//alert(player2);
			}

			

			}
			
}



function zapiszstul(){//--------------------------------sety------------------------------
			var jeden;
			var dwa;
			var trzy;
			var cztery;
			var piec;
			
		var karta1;
		var karta2;
		var karta3;
		var karta4;
		var karta5;
		var sets;
		var set;
		var dziesiec=0;
		var dziewiec=0;
		var jopek=0;
		var dama=0;
		var krol=0;
		var as=0;
		var i;
		


			jeden=$("#zapis1").val();
			dwa=$("#zapis2").val();
			trzy=$("#zapis3").val();
			cztery=$("#zapis4").val();
			piec=$("#zapis5").val();
			
			
			kjeden=$("#p1k").val();
			kdwa=$("#p2k").val();
			ktrz=$("#p3k").val();
			kcztery=$("#p4k").val();
			kpiec=$("#p5k").val();
			//as
//as
			if(jeden=="1"){karta1="a";}
			if(jeden=="7"){karta1="a";}
			if(jeden=="13"){karta1="a";}
			if(jeden=="19"){karta1="a";}
			
			if(dwa=="1"){karta2="a";}
			if(dwa=="7"){karta2="a";}
			if(dwa=="13"){karta2="a";}
			if(dwa=="19"){karta2="a";}
			
			if(trzy=="1"){karta3="a";}
			if(trzy=="7"){karta3="a";}
			if(trzy=="13"){karta3="a";}
			if(trzy=="19"){karta3="a";}
			
			if(cztery=="1"){karta4="a";}
			if(cztery=="7"){karta4="a";}
			if(cztery=="13"){karta4="a";}
			if(cztery=="19"){karta4="a";}
			
			
			if(piec=="1"){karta5="a";}
			if(piec=="7"){karta5="a";}
			if(piec=="13"){karta5="a";}
			if(piec=="19"){karta5="a";}
			
			//dziewiec
			
			if(jeden=="2"){karta1="9";}
			if(jeden=="8"){karta1="9";}
			if(jeden=="14"){karta1="9";}
			if(jeden=="20"){karta1="9";}
			
			if(dwa=="2"){karta2="9";}
			if(dwa=="8"){karta2="9";}
			if(dwa=="14"){karta2="9";}
			if(dwa=="20"){karta2="9";}
			
			if(trzy=="2"){karta3="9";}
			if(trzy=="8"){karta3="9";}
			if(trzy=="14"){karta3="9";}
			if(trzy=="20"){karta3="9";}
			
			if(cztery=="2"){karta4="9";}
			if(cztery=="8"){karta4="9";}
			if(cztery=="14"){karta4="9";}
			if(cztery=="20"){karta4="9";}
			
			
			if(piec=="2"){karta5="9";}
			if(piec=="8"){karta5="9";}
			if(piec=="14"){karta5="9";}
			if(piec=="20"){karta5="9";}
			
			//dziesiec
			
			
			if(jeden=="3"){karta1="0";}
			if(jeden=="9"){karta1="0";}
			if(jeden=="15"){karta1="0";}
			if(jeden=="21"){karta1="0";}
			
			if(dwa=="3"){karta2="0";}
			if(dwa=="9"){karta2="0";}
			if(dwa=="15"){karta2="0";}
			if(dwa=="21"){karta2="0";}
			
			if(trzy=="3"){karta3="0";}
			if(trzy=="9"){karta3="0";}
			if(trzy=="15"){karta3="0";}
			if(trzy=="21"){karta3="0";}
			
			if(cztery=="3"){karta4="0";}
			if(cztery=="9"){karta4="0";}
			if(cztery=="15"){karta4="0";}
			if(cztery=="21"){karta4="0";}
			
			
			if(piec=="3"){karta5="0";}
			if(piec=="9"){karta5="0";}
			if(piec=="15"){karta5="0";}
			if(piec=="21"){karta5="0";}
			
			//jopekczerwo
			
			if(jeden=="4"){karta1="j";}
			if(jeden=="10"){karta1="j";}
			if(jeden=="16"){karta1="j";}
			if(jeden=="22"){karta1="j";}
			
			if(dwa=="4"){karta2="j";}
			if(dwa=="10"){karta2="j";}
			if(dwa=="16"){karta2="j";}
			if(dwa=="22"){karta2="j";}
			
			if(trzy=="4"){karta3="j";}
			if(trzy=="10"){karta3="j";}
			if(trzy=="16"){karta3="j";}
			if(trzy=="22"){karta3="j";}
			
			if(cztery=="4"){karta4="j";}
			if(cztery=="10"){karta4="j";}
			if(cztery=="16"){karta4="j";}
			if(cztery=="22"){karta4="j";}
			
			
			if(piec=="4"){karta5="j";}
			if(piec=="10"){karta5="j";}
			if(piec=="16"){karta5="j";}
			if(piec=="22"){karta5="j";}
			
			//dama


			if(jeden=="5"){karta1="d";}
			if(jeden=="11"){karta1="d";}
			if(jeden=="17"){karta1="d";}
			if(jeden=="23"){karta1="d";}
			
			if(dwa=="5"){karta2="d";}
			if(dwa=="11"){karta2="d";}
			if(dwa=="17"){karta2="d";}
			if(dwa=="23"){karta2="d";}
			
			if(trzy=="5"){karta3="d";}
			if(trzy=="11"){karta3="d";}
			if(trzy=="17"){karta3="d";}
			if(trzy=="23"){karta3="d";}
			
			if(cztery=="5"){karta4="d";}
			if(cztery=="11"){karta4="d";}
			if(cztery=="17"){karta4="d";}
			if(cztery=="23"){karta4="d";}
			
			
			if(piec=="5"){karta5="d";}
			if(piec=="11"){karta5="d";}
			if(piec=="17"){karta5="d";}
			if(piec=="23"){karta5="d";}			
			
			//krol
			
			
			if(jeden=="6"){karta1="k";}
			if(jeden=="12"){karta1="k";}
			if(jeden=="18"){karta1="k";}
			if(jeden=="24"){karta1="k";}
			
			if(dwa=="6"){karta2="k";}
			if(dwa=="12"){karta2="k";}
			if(dwa=="18"){karta2="k";}
			if(dwa=="24"){karta2="k";}
			
			if(trzy=="6"){karta3="k";}
			if(trzy=="12"){karta3="k";}
			if(trzy=="18"){karta3="k";}
			if(trzy=="24"){karta3="k";}
			
			if(cztery=="6"){karta4="k";}
			if(cztery=="12"){karta4="k";}
			if(cztery=="18"){karta4="k";}
			if(cztery=="24"){karta4="k";}


			
			
			if(piec=="6"){karta5="k";}
			if(piec=="12"){karta5="k";}
			if(piec=="18"){karta5="k";}
			if(piec=="24"){karta5="k";}
			//alert(jeden+"j");
			//alert(dwa+"d");
			//alert(trzy+"t");
			//alert(cztery+"tr");
			//alert(piec+"p");
			
			sets=karta1+karta2+karta3+karta4+karta5;
			for(i=0;i<6;i++){
			if(sets[i]=="a"){
			as=as+1;
			}
			if(sets[i]=="9"){
			dziewiec=dziewiec+1;
			}
			if(sets[i]=="0"){
			dziesiec=dziesiec+1;
			}
			if(sets[i]=="j"){
			jopek=jopek+1;
			}
			if(sets[i]=="d"){
			dama=dama+1;
			}
			if(sets[i]=="k"){
			krol=krol+1;
			}
			}
			//parka
			
			//alert(sets);
			/*
			alert(dziewiec+"9");
			alert(dziesiec+"10");
			alert(jopek+"j");
			alert(dama+"d");
			alert(krol+"k");
			alert(as+"as");
			*/
						if(dziewiec==2){set="1";nazwa1="parka";}
			if(dziesiec==2){set="2";nazwa1="parka";}
			if(jopek==2){set="3";nazwa1="parka";}
			if(dama==2){set="4";nazwa1="parka";}
			if(krol==2){set="5";nazwa1="parka";}
			if(as==2){set="6";nazwa1="parka";}
			
			
				//dwie parki

			if(dziewiec==2&&dziesiec==2){set="7";nazwa1="dwie parki";}
			if(dama==2&&dziewiec==2){set="9";nazwa1="dwie parki";}
			if(krol==2&&dziewiec==2){set="10";nazwa1="dwie parki";}
			if(jopek==2&&dziewiec==2){set="8";nazwa1="dwie parki";}
			if(as==2&&dziewiec==2){set="11";nazwa1="dwie parki";}
			if(dziesiec==2&&jopek==2){set="12";nazwa1="dwie parki";}
			if(dziesiec==2&&dama==2){set="13";nazwa1="dwie parki";}
			if(dziesiec==2&&krol==2){set="14";nazwa1="dwie parki";}
			if(dziesiec==2&&as==2){set="15";nazwa1="dwie parki";}
			if(jopek==2&&dama==2){set="16";nazwa1="dwie parki";}
			if(jopek==2&&krol==2){set="17";nazwa1="dwie parki";}
			if(jopek==2&&as==2){set="18";nazwa1="dwie parki";}
			if(dama==2&&krol==2){set="19";nazwa1="dwie parki";}
			if(dama==2&&as==2){set="20";nazwa1="dwie parki";}
			if(krol==2&&as==2){set="21";nazwa1="dwie parki";}
			
			
			//strit maly
			if(dziewiec==1&&dziesiec==1&&jopek==1&&dama==1&&krol==1){set="22";nazwa1="strit maly";}
			
			
			
				//strit duzy
			
			if(dziesiec==1&&jopek==1&&dama==1&&krol==1&&as==1){set="23";nazwa1="strit duzy";}
			
			
				//trojka
			
			if(dziewiec==3){set="24";nazwa1="trojka";}
			if(dziesiec==3){set="25";nazwa1="trojka";}
			if(jopek==3){set="26";nazwa1="trojka";}
			if(dama==3){set="27";nazwa1="trojka";}
			if(krol==3){set="28";nazwa1="trojka";}
			if(as==3){set="29";nazwa1="trojka";}
			
					//full
			if((krol==3)&&(dama==2)){set="47";nazwa1="full";}
			if((krol==2)&&(dama==3)){set="52";nazwa1="full";}
			if((as==3)&&(krol==2)){set="60";nazwa1="full";}
			if((as==2)&&(krol==3)){set="58";nazwa1="full";}
			if((as==3)&&(dama==2)){set="48";nazwa1="full";}
			if((dama==3)&&(as==2)){set="57";nazwa1="full";}
			if((jopek==3)&&(as==2)){set="56";nazwa1="full";}
			if((jopek==2)&&(as==3)){set="6";nazwa1="full";}
			if((jopek==3)&&(krol==2)){set="51";nazwa1="full";}
			if((krol==3)&&(jopek==2)){set="43";nazwa1="full";}
			if((as==3)&&(jopek==2)){set="44";nazwa1="full";}
			if((jopek==3)&&(dama==2)){set="47";nazwa1="full";}
			if((dama==3)&&(jopek==2)){set="42";nazwa1="full";}
			if((dziesiec==3)&&(as==2)){set="55";nazwa1="full";}
			if((as==3)&&(dziesiec==2)){set="39";nazwa1="full";}
			if((dziewiec==3)&&(as==2)){set="54";nazwa1="full";}
			if((krol==3)&&(dziesiec==2)){set="38";nazwa1="full";}
			if((dziesiec==3)&&(dama==2)){set="46";nazwa1="full";}
			if((dama==3)&&(dziesiec==2)){set="37";nazwa1="full";}
			if((dziesiec==3)&&(jopek==2)){set="41";nazwa1="full";}
			if((jopek==3)&&(dziesiec==2)){set="36";nazwa1="full";}
			if((krol==3)&&(dziewiec==2)){set="33";nazwa1="full";}
			if((dziewiec==3)&&(krol==2)){set="49";nazwa1="full";}
			if((dziesiec==3)&&(krol==2)){set="50";nazwa1="full";}
			if((dziewiec==3)&&(dama==2)){set="45";nazwa1="full";}
			if((dama==3)&&(dziewiec==2)){set="32";nazwa1="full";}
			if((dziewiec==3)&&(jopek==2)){set="40";nazwa1="full";}
			if((jopek==3)&&(dziewiec==2)){set="31";nazwa1="full";}
			if((dziewiec==3)&&(dziesiec==2)){set="35";nazwa1="full";}
			if((dziesiec==3)&&(dziewiec==2)){set="30";nazwa1="full";}
			if((as==3)&&(dziewiec==2)){set="34";nazwa1="full";}
			
			//kareta----------
			
			if(krol==4){set="65";nazwa1="kareta";}
			if(dama==4){set="64";nazwa1="kareta";}
			if(jopek==4){set="63";nazwa1="kareta";}
			if(dziesiec==4){set="62";nazwa1="kareta";}
			if(dziewiec==4){set="61";nazwa1="kareta";}
			if(as==4){set="66";nazwa1="kareta";}
			
	
			
		player1=set;
			
		//alert(set+"player 1");
			
			//alert(sets+"set");
			
		
		
			
			
			
			
			
			
			







		$.ajax(
            {
                type: 'GET',
                url: 'ready.php?go=2',
                dataType: 'json',
                success: function(jsonData)
                {
				
                }
            });
			

$('#cos').val('1');
}
setInterval(reflesh, 1000);
-->



</script>
<center>
<div style="width:100%;height:100%;background: #000000 url('tlo.jpg') no-repeat">
<table>
<tr><td>

<img id="p1" src="talia.jpg" width="80" >
</td><td>

<img id="p2" src="talia.jpg" width="80" >
</td><td>
<img id="p3" src="talia.jpg" width="80" >

</td><td>
<img id="p4" src="talia.jpg" width="80" >

</td><td>
<img id="p5" src="talia.jpg" width="80" >

</td></tr></table>
<div style="display:none;"><img id="00" src="talia.jpg" width="80" ></div>



<table style="margin-top:100px;"><tr><td>
<div id="de1" onclick="if($('#k1').val()==0){$('#k1').val('-1');}$('#de1').css('margin-top','-50px');" ><img id="o1" src="talia.jpg" width="80" > </div>

</td><td>
<div id="de2" onclick="if($('#k2').val()==0){$('#k2').val('-1');}$('#de2').css('margin-top','-50px');" ><img id="o2" src="talia.jpg" width="80" > </div>

</td><td>
<div id="de3" onclick="if($('#k3').val()==0){$('#k3').val('-1');}$('#de3').css('margin-top','-50px');" ><img id="o3" src="talia.jpg" width="80" > </div>

</td><td>
<div id="de4" onclick="if($('#k4').val()==0){$('#k4').val('-1');}$('#de4').css('margin-top','-50px');" ><img id="o4" src="talia.jpg" width="80" > </div>

</td><td>

<div id="de5" onclick="if($('#k5').val()==0){$('#k5').val('-1');}$('#de5').css('margin-top','-50px');" ><img id="o5" src="talia.jpg" width="80" > </div>
</td></tr></table>

<input type="hidden" value="0" id="k1">
<input type="hidden" value="0" id="k2">
<input type="hidden" value="0" id="k3">
<input type="hidden" value="0" id="k4">
<input type="hidden" value="0" id="k5">

<input type="hidden" value="0" id="zapis1">
<input type="hidden" value="0" id="zapis2">
<input type="hidden" value="0" id="zapis3">
<input type="hidden" value="0" id="zapis4">
<input type="hidden" value="0" id="zapis5">

<input type="hidden" value="0" id="p1k">
<input type="hidden" value="0" id="p2k">
<input type="hidden" value="0" id="p3k">
<input type="hidden" value="0" id="p4k">
<input type="hidden" value="0" id="p5k">

<input type="hidden" value="1" id="wym">

<input type="hidden" value="1" id="start">
<input type="hidden" value="0" id="check">
<input type="hidden" value="0" id="cos">
<input type="button" value="ok" onclick="$('#wym').val('2');zapiszstul();$('#check').val('2');">

<br><br>
<select id="stawka">
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
  <option value="50">50</option>
  <option value="60">60</option>
  <option value="70">70</option>
  <option value="80">80</option>
  <option value="90">90</option>
  <option value="100">100</option>
</select>
<input type="button" id="pay" value="pay" onclick="if($('#bank').val()>0){if($('#stul').val()==''){$('#stul').val(0)}$('#bank').val($('#bank').val()-$('#stawka').val());$('#stul').val(parseInt($('#stul').val())+parseInt($('#stawka').val()));}"><br><br>
<table><tr><td bgcolor="#ffffff">
bank:</td><td><input type="text" id="bank"></td></tr><tr><td bgcolor="#ffffff">
declared cash:</td><td><input type="text" id="stul"></td></tr><tr><td bgcolor="#ffffff">
enemy cash:</td><td><input type="text" id="stul2"></td></tr><tr><td bgcolor="#ffffff">
ready:</td><td><input type="text" id="ready"></td></tr></table>
<script language="JavaScript">
<!--
last_update = new Date().getTime();

$.get("talia.php", { lastfetch : last_update },  function(data) {

});
$('#k1').val('0');
$('#k2').val('0');
$('#k3').val('0');
$('#k4').val('0');
$('#k5').val('0');
$('#wym').val('1');

$('#test5').val('0');

<?
$tekst="";
$plik = fopen('talia.txt','w');
fputs($plik, $tekst);
fclose($plik);
$z=1;
$p=1;
$talia=",";
while($z==1){
$zm=rand(1,24);
$por=",".$zm.",";
if (strstr($talia,$por)){
}else{
$talia.=$zm.",";
$p++;


}
if ($p==24){
$z=0;
}
}

$tekst=$talia;
$plik = fopen('talia.txt','w');
fputs($plik, $tekst);
fclose($plik);

//---------------------pop

echo "karta('4','00');";

$plik = fopen('talia.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

$talia=explode(",", $tekst);
$karta=array();
for($i=0;$i<=5;$i++){
$karta=array_pop($talia);
if (empty($karta)){
$karta=array_pop($talia);

}
$p=$i+1;
echo "karta(".$karta.",'o".$p."');";
}
/*
echo "karta('1','o1');";
echo "karta('7','o2');";
echo "karta('13','o3');";
echo "karta('19','o4');";
echo "karta('4','o5');";
*/
$tekst=implode(",", $talia);
$plik2 = fopen('talia.txt','w');
fputs($plik2, $tekst);
fclose($plik2);
//var_dump($talia);

//var_dump($talia);
//header('Content-Type: application/json');
//echo json_encode($karta);

//----------------------------------------------bank



$plik = fopen('konto1.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
if($tekst4<0){
echo "alert('game over');";
$tekst4=1000;
}
echo "$('#stul').val('10');";
$tekst4=$tekst4-10;
echo "$('#bank').val('".$tekst4."');";
//echo "alert('".$tekst4."');";
$plik = fopen('konto1.txt','w');
fputs($plik, $tekst4);
fclose($plik);


$o6="";
$plik2 = fopen('r.txt','w');
fputs($plik2, $o6);
fclose($plik2);
$o6="";
$plik2 = fopen('r2.txt','w');
fputs($plik2, $o6);
fclose($plik2);
?>


-->
</script><br><br>
<div style="background: #000000"><a href="tutorial.html"><font color="ffffff">tutorial</font></a></div>
</div>