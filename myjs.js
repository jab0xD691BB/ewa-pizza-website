var preis = 0.00;
var piz = null;

class Pizzen{
    constructor(){
        this.pizzen = new Array();
    }

    addPizza(p, pr){
        this.pizzen[p] = pr;
    }

    getPreis(p){
        return this.pizzen[p];
    }
}


function init() {
    "use strict";

    var imgPizza = document.getElementsByTagName("img");
    for (var i = 0; i < imgPizza.length; i++) {
        imgPizza[i].addEventListener("click", pizzaClick);
    }

    piz = new Pizzen();
    var divs = document.getElementsByTagName("section")[0].getElementsByTagName("div");
    for(var i = 0; i < divs.length; i++){
        var pPreis = divs[i].getElementsByTagName("p")[0];
        var pname = pPreis.id;
        var preis = pPreis.getAttribute("data-preis");
        piz.addPizza(pname, preis);
    }

    
}

function pizzaClick() {
    "use strict";
    let select = document.getElementsByTagName("select")[0];

    switch (event.target.id) {
        case "imgMargherita":
            console.log("Margherita");
            select.appendChild(newOption("Margherita"));
            preis += parseFloat(document.getElementById("Margherita").getAttribute("data-preis"));
            break;
        case "imgSalami":
            console.log("Salami");
            select.appendChild(newOption("Salami"));
            preis += parseFloat(document.getElementById("Salami").getAttribute("data-preis"));
            break;
        case "imgHawaii":
            console.log("Hawaii");
            select.appendChild(newOption("Hawaii"));
            preis += parseFloat(document.getElementById("Hawaii").getAttribute("data-preis"));

            break;
        case "imgFunghi":
            console.log("Funghi");
            select.appendChild(newOption("Funghi"));
            preis += parseFloat(document.getElementById("Funghi").getAttribute("data-preis"));

            break;
        case "imgProsciutto":
            console.log("Prosciutto");
            select.appendChild(newOption("Prosciutto"));
            preis += parseFloat(document.getElementById("Prosciutto").getAttribute("data-preis"));
            break;
    }


    let newPreis = document.createTextNode(preis);
    let divPreis = document.getElementById("pPreis");
    divPreis.firstChild.nodeValue = preis.toFixed(2) + "€";

}

function newOption(pName) {
    "use strict";

    let newOption = document.createElement("option");
    newOption.text = pName;
    newOption.value = pName;
    newOption.selected = true;

    return newOption;
}

function deleteAll() {
    "use strict";

    let selectedOpt = document.getElementsByTagName("select")[0].getElementsByTagName("option");

    while (selectedOpt.length != 0) {
        selectedOpt[0].remove()
    }

    document.getElementById("pPreis").firstChild.nodeValue = "";
    preis = 0;
}

function deleteFew() {
    "use strict";

    let selectedOpt = document.getElementsByTagName("select")[0].getElementsByTagName("option");
    let divPreis = document.getElementById("pPreis");


    for (var i = 0; i < selectedOpt.length; i++) {
        if (selectedOpt[i].selected) {
            preis -= piz.getPreis(selectedOpt[i].value)
            selectedOpt[i].remove();
            console.log("remove " + i);
            i--;
        }
    }

    if(preis >= 0){
        document.getElementById("pPreis").firstChild.nodeValue = preis.toFixed(2) + "€";
        preis = 0;
    }else{
        document.getElementById("pPreis").firstChild.nodeValue = "";
    }
    
}







