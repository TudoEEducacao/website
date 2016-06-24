class BarraLateral{

        getName(){
            return "BARRALATERAL";
        }

        show(position, x, y){



            var div = document.createElement("div");

            var nav = document.createElement ("nav");
            var div1 = document.createElement ("div");
            var div2 = document.createElement ("div");
            var ul = document.createElement ("ul");
            var li1 = document.createElement ("li");
            var a1 = document.createElement("a");
            var i1 = document.createElement ("i");
            var li2 = document.createElement ("li");
            var a2 = document.createElement ("a");
            var i2 = document.createElement ("i");
            var li3 = document.createElement ("li");
            var a3 = document.createElement ("a");
            var i3 = document.createElement ("i");
            var li4 = document.createElement ("li");
            var a4 = document.createElement ("a");
            var i4 = document.createElement ("i");

            div.appendChild(nav);
            nav.appendChild(div1);
            div1.appendChild(div2);
            nav.appendChild(ul);
            ul.appendChild(li1);
            li1.appendChild(a1);
            a1.appendChild(i1);

            ul.appendChild(li2);
            li2.appendChild(a2);
            a2.appendChild(i2);

            ul.appendChild(li3);
            li3.appendChild(a3);
            a3.appendChild(i3);

            ul.appendChild(li4);
            li4.appendChild(a4);
            a4.appendChild(i4);

            document.body.appendChild(div);


            nav.className = "nav";
            div1.className = "burger";
            div2.className = "burger__patty";
            ul.className ="nav__list";
            li1.className ="nav__item";
            a1.className ="nav__link c-blue";
            a1.setAttribute ('href', "#1");
            i1.className ="fa fa-home";
            li2.className ="nav__item";
            a2.className ="nav__link c-yellow scrolly";
            a2.setAttribute ('href', "#2");
            i2.className ="fa fa-pencil-square-o";
            li3.className ="nav__item";
            a3.className ="nav__link c-red";
            a3.setAttribute ('href', "#3");
            i3.className ="fa fa-search";
            li4.className ="nav__item";
            a4.className ="nav__link c-green";
            a4.setAttribute ('href', "home.php?acao=logof");
            i4.className ="fa fa-power-off";

           /* div.style.position = position;
            div.style.left = x;
            div.style.top = y;*/




           /* var s = document.createElement ('script');
            s.setAttribute ('src', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');
            var s2 = document.createElement ('script');
            s2.setAttribute ('src', "BarraLateral/js/indexpainel.js");

            document.body.appendChild(s);
            document.body.appendChild(s2);*/

            nav.style.position = position;
             nav.style.left = x;
             nav.style.top = y;
        }
}
