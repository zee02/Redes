function calculavalor() {
  let ndias = document.getElementById("nDias");

  let resultado = document.getElementById("resultado");

  let segmento = document.getElementsByName("segmento");

  let extras = document.getElementsByName("extras");

  let opcion = document.getElementById("opcoes");

  let marca = document.getElementById("marca");

  let valormarca = marca.options[marca.selectedIndex].text;

  let segtext;

  let extra = "";

  let seg;

  let nextra = 0;

  for (let i = 0; i < segmento.length; i++) {
    if (segmento[i].checked) {
      seg = 5 * i;
      segtext = segmento[i].value;
    }
  }

  resultado.value = ndias.value * 25 + seg * ndias.value;

  extras.forEach((element) => {
    if (element.checked) {
      nextra += 15;
    
      
      extra += element.value + "," + " ";

    }
  });

  resultado.value = ndias.value * 25 + seg * ndias.value + nextra + "€";

  opcion.innerHTML =
    "<br/>" +
    "Marca: " +
    valormarca +
    "<br/>" +
    "NºDias: " +
    ndias.value +
    "<br/>" +
    "Segmento: " +
    segtext +
    "<br/>" +
    "Extras: " +
    extra;
}
