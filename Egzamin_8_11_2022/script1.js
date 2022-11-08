

var podstawaPotegi;
var wykladnikPotegi;
var wynik;

const btnDodawania = document.getElementById("dodawanie");
const btnOdejmowania = document.getElementById("odejmowanie");
const btnMnozenia = document.getElementById("mnozenie");
const btnDzielenia = document.getElementById("dzielenie");

 function getValues()
{
    podstawaPotegi =parseInt( document.getElementById("liczba1").value);
    wykladnikPotegi =parseInt( document.getElementById("liczba2").value);
}

function czyPuste()
 {
    if(isNaN(podstawaPotegi) || isNaN(wykladnikPotegi))
    {
        document.getElementById("wynik").innerHTML ='Prosze uzupelnic obie liczby'
        return true;
    }else{
        return false;
    }
 }


btnDodawania.addEventListener('click' , () => {
    console.log("dodawanie");
    if(czyPuste() == false){
        getValues();
        wynik = podstawaPotegi + wykladnikPotegi;
        document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
    }
})

btnOdejmowania.addEventListener('click' , () => {
    console.log("odejmowanie");
    

    if(czyPuste() == false){
        getValues();
        wynik = podstawaPotegi - wykladnikPotegi;
        document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
    }
})

btnMnozenia.addEventListener('click' , () => {
    console.log("mnoezenie");
    if(czyPuste() == false){
        getValues();
        wynik = podstawaPotegi * wykladnikPotegi;
        document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
    }
})

btnDzielenia.addEventListener('click' , () => {
    console.log("dzielenie");
    if(czyPuste() == false){
        getValues();

        if(wykladnikPotegi == 0)
        {
            document.getElementById("wynik").innerHTML ='nie wolno dzielicprzez zero'; 
        }else{
            wynik = podstawaPotegi / wykladnikPotegi;
            document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
        }
    }
})


