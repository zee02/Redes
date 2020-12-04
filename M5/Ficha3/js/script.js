function ex1() {
  let valor1 = document.getElementById("txtvalor1");
  let valor2 = document.getElementById("txtvalor2");
  let total = document.getElementById("txttotal");

  total.value = Number(valor1.value) + Number(valor2.value);
}

function ex2Adiciona() {
  let disc = document.getElementById("lista1");
  let valordisc = disc.options[disc.selectedIndex];

  let lista2 = document.getElementById("lista2");

  lista2.add(valordisc);

  lista2.selectedIndex = -1;
}

function ex2Remove() {
  let disc = document.getElementById("lista2");
  let valordisc = disc.options[disc.selectedIndex];

  let lista2 = document.getElementById("lista1");

  lista1.add(valordisc);

  lista2.selectedIndex = -1;
}

function changePic1() {
  document.getElementById("Img").src = "imagens/smile2.png";
}
function changePic2(){
  document.getElementById("Img").src = "imagens/smile1.png";
}

function normal() {  
  let frase = document.getElementsByClassName("negrito");
  for (let i = 0; i < frase.length; i++) {

    frase[i].classList.toggle('normal');
    
  }
}
  function addNames(){
    let item = document.getElementById("item");
    let lista = document.getElementById("listaIng");

    let imagem = document.createElement("img");
    imagem.src =  "imagens/lixo.png";
    imagem.alt = "";

    let li = document.createElement("li");
    li.innerHTML = item.value;

    imagem.onclick = function() {
      lista.removeChild(li);
    }

    li.appendChild(imagem);
    lista.appendChild(li);


}

function ex6() {
  let nome = document.getElementById("inputNome");

  let morada = document.getElementById("inputMorada");

  let sexo = document.getElementsByName("gridRadios");


  let pais = document.getElementById("selectPais");

  let valorpais = pais.options[pais.selectedIndex].text;

  let opcion = document.getElementById("opcoes");

  let hobbie = document.getElementsByName("hobbies");
  let sextext;
  let sex, hobbie2 = "";

  for (let i = 0; i < sexo.length; i++) {
    if (sexo[i].checked) {
      sex = 5 * i;
      sextext = sexo[i].value;
    }
  }


  hobbie.forEach((element) => {
    if (element.checked) {

      hobbie2 += element.value + "," + " ";

    }
  });


  opcion.innerHTML =
    "<br/>" +
    "Nome: " +
    nome.value +
    "<br/>" +
    "Morada: " +
    morada.value +
    "<br/>" +
    "Sexo: " +
    sextext +
    "<br/>" +
    "País: " +
    valorpais +
    "<br/>" +
    "Hobbie: " +
    hobbie2;
}








