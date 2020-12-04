$(document).ready(function () {

    $("#title").text("Curso de formação em JQuery");
    $("#title").after("<p id='paragrafo'>...</p>");
    $("#paragrafo").html("<b> 3ºPTGPSI </b>");
    $("input[type=text]").val("Curso de JQuery");
    $("input[type=button]").val("Do something...");
    $("input[type=button]").click(function () { 
        $("#title").append(" - AERP");
        $("#paragrafo").prepend("<b>Turma: </b>");
        $("#paragrafo").before("<h5>Data: 23-10-2020</h5>");
        $("#title").addClass("test-primary");
        $("h5").addClass("text-success");
        $("#remove").remove();
        $("#disciplina").val("RC");

    });

    $("#disciplina").change(function () { 
        alert($("#disciplina option:selected").text());
    });
});