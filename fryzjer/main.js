function coWyswietlic() {
    var opcje = document.getElementsByTagName("input");
    var cena = 0;

    if (opcje[0].checked)
        cena = 25;
    else if (opcje[1].checked)
        cena = 30;
    else if (opcje[2].checked)
        cena = 40;
    else if (opcje[3].checked)
        cena = 50;

    console.log(cena);
    document.getElementById("wynik").innerText = "Cena strzyżenia: " + cena;
}