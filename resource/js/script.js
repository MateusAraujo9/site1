var app = angular.module("meuApp", ["ngRoute"]);
app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {templateUrl: "home.html"})
        .when("/sobre", {templateUrl: "sobre.html"})
        .when("/ideias", {templateUrl: "ideias.php"})
        .when("/academicos", {templateUrl: "academicos.html"})
        .when("/cadastro", {templateUrl: "cadastro.html"})
        .when("/cadIdeia", {templateUrl: "cadIdeia.html"})
});


function trocaCor(elemento) {
    var remover = document.getElementsByClassName("check");
    remover.item(0).classList.remove("check");


    elemento.className = "check";
}

function login(statusLogin){
    var login = document.getElementById("login");
    var cadastro = document.getElementById("cadastro");

    if (statusLogin){
        login.setAttribute("style", "display: none");
        cadastro.setAttribute("style", "display: none");
    } else{
        login.setAttribute("style", "display: inline");
        cadastro.setAttribute("style", "display: inline");
    }
}

function validar(dom,tipo){
    switch(tipo){
        case'num':var regex=/[A-Za-z- -*+.,=´~^`[}çÇ\]{ÂÃÁâãáÊÉêéÎÌîíÔÕÓôõóÛÚûú!@#$%¨ïöäëïÄËÏÖÜ¬&*°ªº]/g;break;
        case'text':var regex=/\d/g;break;
    }
    dom.value=dom.value.replace(regex,"");
}