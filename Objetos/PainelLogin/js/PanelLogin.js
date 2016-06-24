
  class PainelLogin{

    constructor () {

    }
    getName(){
        return "PAINELLOGIN";
    }

    show(position, x, y){
        var div_container = document.createElement("div");
        var div_card1 = document.createElement("div");
        var div_card2 = document.createElement("div");
        var h1_class = document.createElement("h");
        var form1_class = document.createElement("form");
        var div_inputContainer1 = document.createElement("div");
        var input1_class = document.createElement("input");
        var label1_class = document.createElement("label");
        var div_bar1 = document.createElement("div");
        var div_inputContainer2 = document.createElement("div");
        var input2_class = document.createElement("input");
        var label2_class = document.createElement("label");
        var div_bar2 = document.createElement("div");
        var div_buttonContainer1 = document.createElement("div");
        var button1_class = document.createElement("button");
        var span1_class = document.createElement("span");
        var div_footer = document.createElement("div");
        var a1_class = document.createElement("a");

        div_container.appendChild(div_card1);
        div_container.appendChild(div_card2);

        div_card2.appendChild(h1_class);
        div_card2.appendChild(form1_class);

        form1_class.appendChild(div_inputContainer1);
        div_inputContainer1.appendChild(input1_class);
        div_inputContainer1.appendChild(label1_class);
        div_inputContainer1.appendChild(div_bar1);

        form1_class.appendChild(div_inputContainer2);
        div_inputContainer2.appendChild(input2_class);
        div_inputContainer2.appendChild(label2_class);
        div_inputContainer2.appendChild(div_bar2);

        form1_class.appendChild(div_buttonContainer1);
        div_buttonContainer1.appendChild(button1_class);
        button1_class.appendChild(span1_class);

        form1_class.appendChild(div_footer);
        div_footer.appendChild(a1_class);

        document.body.appendChild(div_container);

        div_container.style.position = position;
        div_container.style.left = x;
        div_container.style.top = y;

        div_container.id = "container";
        div_container.className = 'container';

        div_card1.id = "card";
        div_card1.className = 'card';

        div_card2.id = "card";
        div_card2.className = 'card';

        h1_class.id = "h1Class";
        h1_class.className = "title";
        h1_class.innerHTML = "Login";

        form1_class.id = "form1Class1";
        form1_class.setAttribute('action',"index.php?acao=login");
        form1_class.setAttribute('method',"post");

        div_inputContainer1.id = "inputContainer";
        div_inputContainer1.className = "input-container";

        input1_class.type = "text";
        input1_class.id = "Usuario";
        input1_class.name = "Usuario";
        input1_class.required = "required";

        label1_class.for = "Username";
        label1_class.innerHTML = "Usuario";

        div_bar1.id = "bar";
        div_bar1.className = "bar";

        div_inputContainer2.id = "inputContainer";
        div_inputContainer2.className = "input-container";

        input2_class.type = "password";
        input2_class.id = "Senha";
        input2_class.name = "Senha";
        input2_class.required = "required";

        label2_class.for = "Password";
        label2_class.innerHTML = "Senha";

        div_bar2.id = "bar";
        div_bar2.className = "bar";

        div_buttonContainer1.id = "buttoncontainer";
        div_buttonContainer1.className = "button-container";

        button1_class.type = "submit";

        span1_class.innerHTML = "LOGAR";

        div_footer.id = "footer";
        div_footer.className = "footer";

        a1_class.href = "#";
        a1_class.innerHTML = "Esqueceu sua senha?";
  }
}