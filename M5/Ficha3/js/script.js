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
