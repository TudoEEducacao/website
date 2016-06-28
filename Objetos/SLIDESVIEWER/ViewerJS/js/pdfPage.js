class PDFViewer {

    getName(){
        return "PDFVIEWER";
    }

    show(position, x, y){
		var div   = document.createElement('div');
        var frame = document.createElement('iframe');
		div.appendChild(frame);
		document.body.appendChild(div);
        
        //frame.setAttribute(allowfullscreen, '');
        //frame.setAttribute(webkitallowfullscreen, '');

		frame.src   = "Sistema.pdf";
		frame.setAttribute('height', '800');
		frame.setAttribute('width', '100%');
		frame.setAttribute('allowfullscreen','');
		frame.setAttribute('webkitallowfullscreen','');
        //div1.style.position = position;
        //div1.style.left = x;
        //div1.style.top = y;
    }

}


