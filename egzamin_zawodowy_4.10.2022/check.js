document.addEventListener('DOMContentLoaded', function () {

const buttonCheck = this.getElementById('check');

var answer;



buttonCheck.addEventListener('click', function() {

    const password = this.getElementById('password');

    var lenght = password.lenght;

    if(password != null)
    {
    for(i=0; i < lenght; i++ )
    {
        if(password.charCodeAt(i)>=48 && password.charCodeAt(i) <=57)
        {
            if(lenght => 7)
            {
                document.getElementById('answer').innerHTML =  "Dobre";
               
            } else if(lenght => 4)
            {
                document.getElementById('answer').innerHTML = '<p> Średnie </p>';
            }
        }else
        document.getElementById('answer').innerHTML = '<p> Słabe </p>';
        
    }
    }//else
    //answer='Wpisz hasło'

    //return answer;
} )

})