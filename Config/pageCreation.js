

//document.load("database.php");

class pageCreation {

//var _styleOutraCoisa;

	constructor () {

	}

	requestDBData() {
		return ["BUTTON", "input"];
	}

	showPage(data) {
		//let _style;
		//var data = this.requestDBData();
		
		//for(var i = 0; i < data.length; i++) {
		//    var el = document.createElement(String(data[i]));
		//    var t = document.createTextNode(String(data[i]));
		//    
		 /*   el.appendChild(t);
		    document.body.appendChild(el);
		    var obj = this.requeststyleFromDB();

		    if(i !== 0){ //o id será atribuído pelo banco de dados
		    	obj.id = 'editor'+i; //o id será atribuído pelo banco de dados
		    } else{ //o id será atribuído pelo banco de dados
		    	obj.id = 'editor'; //o id será atribuído pelo banco de dados
		    }//o id será atribuído pelo banco de dados

		    this.setObjstyle(el, obj);
		}
		initSample();*/
		var obj = ObjectFactory(data);
		obj.show("fixed","100px","100px");
	}

	requeststyleFromDB() {			 
		return {
			id : "",
			position : "fixed",
			right : "200px",
			left : "200px",
			text : "texto",
		};
	}

	setObjstyle(obj, estilo) {
		
		obj.id = estilo.id;
		
	    document.getElementById(obj.id).style.position = estilo.position;
	    document.getElementById(obj.id).style.left = estilo.left;
	    document.getElementById(obj.id).style.top = estilo.right;
	}
}
