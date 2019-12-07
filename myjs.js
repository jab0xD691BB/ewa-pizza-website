var preis = 0.00;
var piz = null;
var select = document.getElementsByTagName("select")[0];
var preisText = document.getElementById("pPreis").firstChild.nodeValue;

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

//init wird vom body aufgerufen, pizza objekte werden angelegt

function init() {
    "use strict";

    var imgPizza = document.getElementsByTagName("img");
    for (let i = 0; i < imgPizza.length; i++) {
        imgPizza[i].addEventListener("click", pizzaClick);
    }

    var inputAdresse = document.getElementById("inputAdr");

    inputAdresse.addEventListener("change", checkBeforeSubmit);


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

    switch (event.target.id) {
        case "imgMargherita":
            select.appendChild(newOption("Margherita"));
            preis += parseFloat(piz.getPreis("Margherita"));
            break;
        case "imgSalami":
            select.appendChild(newOption("Salami"));
            preis += parseFloat(piz.getPreis("Salami"));
            break;
        case "imgHawaii":
            select.appendChild(newOption("Hawaii"));
            preis += parseFloat(piz.getPreis("Hawaii"));
            break;
        case "imgFunghi":
            select.appendChild(newOption("Funghi"));
            preis += parseFloat(piz.getPreis("Funghi"));
            break;
        case "imgProsciutto":
            select.appendChild(newOption("Prosciutto"));
            preis += parseFloat(piz.getPreis("Prosciutto"));
            break;
    }

    
    preisText = preis.toFixed(2) + "€";

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

    let selectedOpt = select[0].getElementsByTagName("option");

    while (selectedOpt.length != 0) {
        selectedOpt[0].remove()
    }

    preisText = "";
    preis = 0;
}

function deleteFew() {
    "use strict";

    let selectedOpt = select[0].getElementsByTagName("option");
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
        preisText = preis.toFixed(2) + "€";
        preis = 0;
    }else{
        preisText = "";
    }
    
}

function checkBeforeSubmit(){
    let text = inputAdresse.value;
    if(text.length > 1 && select.getElementsByTagName("option") > 0){
        document.getElementById("bestellButton").disabled = false;
    }
}






