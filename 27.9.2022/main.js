document.addEventListener('DOMContentLoaded', function () {

    const linijka = this.getElementById('line');
    const button = document.querySelector('button')


button.addEventListener('click', function() {

    linijka.classList.toggle('red');

})

   

})