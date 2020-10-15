function uppercase(str) {
  var frase = prompt("Insere uma frase");

  function titleCase(str) {
    var splitStr = str.toLowerCase().split(" ");
    for (var i = 0; i < splitStr.length; i++) {
      splitStr[i] =
        splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
    }

    return splitStr.join(" ");
  }
  document.write(titleCase(frase));
}

function orderna() {
  var frase = prompt("Insere uma frase");

  var sortedString = frase.split("").sort().join("");

  document.write(sortedString);
}

function calcularidade() {
  var anos = new Date(prompt("Insere data"));
  var ageDifMs = Date.now() - anos.getTime();
  var ageDate = new Date(ageDifMs);
  document.write(Math.abs(ageDate.getUTCFullYear() - 1970));
}

function mes() {
  var data = new Date(prompt("Insere data"));
  var monthName = new Intl.DateTimeFormat("en-US", { month: "long" }).format;
  var longName = monthName(data);

  document.write(longName);
}

function remove() {
  var names = ["Ze", "Chico", "Ze", "Luis", "Afonso", "Ze", "Miguel"];
  var uniqueNames = [];
  $.each(names, function (i, el) {
    if ($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
  });
  document.write(uniqueNames);
}

function muda() {
  document.getElementById("text").style.cssText ="background-color: blue; color: white; font-size: 35px";
}

function pass() {
  var password = document.getElementById("txtPassword").value;
  var user = document.getElementById("txtLogin").value;
  var label = document.getElementById("lblValidar");

  var passcerta = "admin";
  var usercerto = "admin";
  if (password == passcerta && user == usercerto) {
    label.innerHTML = "Acertou a password";
  } else label.innerHTML = "Errou a password";
}

function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Lisboa"){
		var optionArray = ["|","Oeiras|oeiras","Mafra|mafra","Sintra|sintra"];
	} else if(s1.value == "Porto"){
		var optionArray = ["|","Maia|maia","Gaia|gaia","Matosinhos|matosinhos"];
	} else if(s1.value == "Braga"){
		var optionArray = ["|","Vila Verde|vila verda","Guimarães|guimarães", "Vizela|vizela"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
