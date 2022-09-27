document.addEventListener('DOMContentLoaded', function () {

    const linijka = this.getElementById('line');
    const button = this.getElementById('textBtn')
    const light = this.getElementById('light')
    const buttonLight = this.getElementById('lightBtn')

    button.addEventListener('click', function() {

        linijka.classList.toggle('red');

    })

    buttonLight.addEventListener('click', function() {

        light.classList.toggle('lightOFF');
        light.classList.toggle('lightON');

    })
})
