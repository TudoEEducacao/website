class Editor {

    getName(){
        return "EDITOR";
    }

    show(position, x, y){
        var div1 = document.createElement("div");
        var div = document.createElement("div");
        div1.appendChild(div);
        document.body.appendChild(div1);
        div.id   = "editor";

       initSample();

            div1.style.position = position;
            div1.style.left = x;
            div1.style.top = y;
    }

}