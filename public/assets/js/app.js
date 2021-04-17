// console.log("Deu certo");

// criando função auto-envocada para nao compartilhar o cod de forma global 

(function() {
    const menuToggle = document.querySelector('.menu-toggle');

    menuToggle.onclick = function(e) {
        const body = document.querySelector('body');
        body.classList.toggle('hide-sidebar');
    }
})();


function activateClock() {
    const activeClock = document.querySelector('[active-clock]')
    if (!activeClock) return

    function addOneSecond(hours, minutes, seconds) {
        const date = new Date()
        date.setHours(parseInt(hours))
        date.setMinutes(parseInt(minutes))
        date.setSeconds(parseInt(seconds) + 1)

        const hour = `${date.getHours()}`.padStart(2, 0)
        const minute = `${date.getMinutes()}`.padStart(2, 0)
        const second = `${date.getSeconds()}`.padStart(2, 0)

        return `${hour}:${minute}:${second}`
    }

    setInterval(function() {
        // '07:27:19' => ['07', '27', '19']
        const parts = activeClock.innerHTML.split(':')
        activeClock.innerHTML = addOneSecond(...parts)
    }, 1000)
}

activateClock()

// sem a função compartilhando o cod em escopo global 
// consegue pegar a const menuToggle no console

// const menuToggle = document.querySelector('.menu-toggle');

// menuToggle.onclick = function(e) {
//     const body = document.querySelector('body');
//     body.classList.toggle('hide-sidebar');
// }