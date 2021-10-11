
//offenbar vom 19.10.2006 - dunkte Horbart am zwölfti zwölfti zwotusigsachs

// wenn Fenster geladen lass Funktion laufen...

window.onload=function() {
	//Referenz auf <body>
	position_ermitteln=function(ereignis) {
		mausX = ereignis.clientX;
		mausY = ereignis.clientY;
		//alert("hallo");
	}

	ziehen=function(ereignis)  {
		//alert (window["Bewegungselement"].style.left);
		var kastenX=parseInt(window["Bewegungselement"].style.left.slice(0,-2));
		var kastenY=parseInt(window["Bewegungselement"].style.top.slice(0,-2));
		//alert("ziehen");
		var mausX_alt=mausX;
		var mausY_alt=mausY;
		
		position_ermitteln(ereignis);
		
		window["Bewegungselement"].style.left = kastenX + mausX - mausX_alt+"px";
		window["Bewegungselement"].style.top= kastenY+mausY-mausY_alt+"px";
		document.getElementById("Feld1").value=window["Bewegungselement"].style.left;
		document.getElementById("Feld0").value=window["Bewegungselement"].style.top;
	}
	
	stopp=function()  {
		document.onmousemove=null;
		document.onmouseup=null;
		//alert("stopp");
	}
	
	ziehen_vorbereiten=function(ereignis) {
		//IE braucht was anderes
		Bewegungselement=divElement;
		position_ermitteln(ereignis);
		document.onmousemove=ziehen;
		document.onmouseup=stopp;
	}

	var divsErzeugen=function () {
		DivNamen = new Array("Name1","Name2");

		for (i in DivNamen) {
				
				
		   Platzhalter=document.createElement("div");
			Platzhalter.id=DivNamen[i]; 
			Platzhalter.innerHTML=DivNamen[i];
			document.body.appendChild(Platzhalter);
			//eval(DivNamen[i]+"=Platzhalter;");
			Platzhalter.id=DivNamen[i];
			Platzhalter.className="infodiv";
			Platzhalter.style.left=100+50*i+"px";
			Platzhalter.style.top=50+50*i+"px";
			Funktionsname="ziehen_vorbereiten_"+DivNamen[i];
			nochwas="ziehen_vorbereiten_"+DivNamen[i];
			alert(Funktionsname);
			bodyElement.appendChild(Platzhalter);
			window[DivNamen[i]]=Platzhalter;


				
				window[Funktionsname]=function(ereignis)  {
					//alert(this.id);
				//~ window["ziehen_vorbereiten_"+DivNamen[i]]=function(ereignis)  {
				 position_ermitteln(ereignis);
				Bewegungselement=window[this.id];
				document.onmousemove=ziehen;
				document.onmouseup=stopp;
				}
				//window[DivNamen[i]].onmousedown=window[Funktionsname];
				window[DivNamen[i]].onmousedown=window[Funktionsname];


				//~ //alert (window["Bewegungselement"].style.left);
				//~ var kastenX=parseInt(window[DivNamen[i]].style.left.slice(0,-2));
				//~ var kastenY=parseInt(window[DivNamen[i]].style.top.slice(0,-2));
				//~ //alert("ziehen");
				//~ var mausX_alt=mausX;
				//~ var mausY_alt=mausY;
				//~ position_ermitteln(ereignis);
				//~ window[DivNamen[i]].style.left = kastenX + mausX - mausX_alt+"px";
				//~ window[DivNamen[i]].style.top= kastenY+mausY-mausY_alt+"px";
				//~ document.getElementById("Feld1").value=window[DivNamen[i]].style.left;
				//~ document.getElementById("Feld0").value=window[DivNamen[i]].style.top;
			//~ }

		
			}

		//geht
		//alert(document.getElementById("Name1").innerHTML);
		//not defined
		//alert(Name2.innerHTML);
	}

	var bodyElement=document.getElementsByTagName('body')[0];
	//<div>
	var	infoDiv=bodyElement.appendChild(document.createElement("div"));
	infoDiv.style.border="5px solid maroon";

	inputFelder = new Array("Angabe_oben","Angabe_links");
	for (i in inputFelder) {
		infoDiv.appendChild(document.createElement("label").appendChild(document.createTextNode(inputFelder[i])));
		inputFelder[i]=document.createElement("input");
		inputFelder[i].setAttribute("id","Feld"+i,"false");
		inputFelder[i].value="NN";
		infoDiv.appendChild(inputFelder[i]);
	//buttons Eventhandler onclick eine Funktion verpassen
	}
	

	//buttons Eventhandler onclick eine Funktion verpassen
	mausX=null;
	mausY=null;
	
	var divElement=document.createElement("div");
	//<div id="infodiv">
	divElement.appendChild(document.createTextNode("packmich mit der Maus und schiebmich"));
	divElement.setAttribute("id","infodiv","false");
	divElement.style.left="300px";
	divElement.style.top="150px";
	bodyElement.appendChild(divElement);
	divElement.onmousedown=window["ziehen_vorbereiten"];
	
	testfunction = function (hallo) {
	alert(hallo);
	}	

	//geht beides 20.12.2006
	//~ window.testfunction("testytesty");
	//~ window.["testfunction"]("testytesty");
	divsErzeugen();
	
//	document.onmousedown=alert(document.onmousedown.clientX);
}

	