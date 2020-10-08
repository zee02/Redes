function getData() {
    let data = new Date();
    document.getElementById("data").innerHTML = data.toLocaleString();
    
}

function getHours() {
    let hora = new Date();
    document.getElementById("hora").innerHTML = hora.toLocaleString();
    setTimeout(getHours,1000)
}

function bemvindo() {
    var nome = prompt("Qual é o teu nome?");
    document.getElementById("mensagem").innerHTML = "Bem Vindo " + nome;
}


