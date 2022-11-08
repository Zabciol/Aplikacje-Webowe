var podstawaPotegi;
var wykladnikPotegi;
var wynik;

const btnPotegowanie = document.getElementById("potegowanie");


btnPotegowanie.addEventListener('click' , () => {
    console.log("klik");
    
        podstawaPotegi =parseInt( document.getElementById("liczba1").value);
        wykladnikPotegi =parseInt( document.getElementById("liczba2").value);

        console.log(podstawaPotegi)
        console.log(wykladnikPotegi)

        if(isNaN(podstawaPotegi) ||isNaN(wykladnikPotegi))
        {

        document.getElementById("wynik").innerHTML ='Wprowadz podstawe i wykladnik potegi';

        }else if(podstawaPotegi != null && wykladnikPotegi != null)
        {   
            if(wykladnikPotegi < 0)
            {
                document.getElementById("wynik").innerHTML ='Wykładnik potegi musi byc dodatni';
            }else{
            wynik = Math.pow(podstawaPotegi, wykladnikPotegi);
            document.getElementById("wynik").innerHTML ='wynik to:  ' + wynik;
            }
        }
})
