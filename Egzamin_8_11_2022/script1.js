

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

function czyNieJestPuste()
 {
    if(isNaN(podstawaPotegi) || isNaN(wykladnikPotegi))
    {
        document.getElementById("wynik").innerHTML ='Prosze uzupelnic obie liczby';
        return false;
    }else{
        return true;
    }
 }

btnDodawania.addEventListener('click' , () => {
    console.log("dodawanie");
    if(czyNieJestPuste())
    {
        getValues();
        wynik = podstawaPotegi + wykladnikPotegi;
        document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
    }
})

btnOdejmowania.addEventListener('click' , () => {
    console.log("odejmowanie");
    if(czyNieJestPuste())
    {
        getValues();
        wynik = podstawaPotegi - wykladnikPotegi;
        document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
    }
})

btnMnozenia.addEventListener('click' , () => {
    console.log("mnoezenie");
    if(czyNieJestPuste())
    {
        getValues();
        wynik = podstawaPotegi * wykladnikPotegi;
        document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
    }
})

btnDzielenia.addEventListener('click' , () => {
    console.log("dzielenie");
    if(czyNieJestPuste())
    {
        getValues();
        if(wykladnikPotegi == 0)
        {
            document.getElementById("wynik").innerHTML ='nie wolno dzielic przez zero'; 
        }else{
            wynik = podstawaPotegi / wykladnikPotegi;
            document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
        }
    }
})


