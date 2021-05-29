function validatePowerPass() {
    var pass = document.getElementById("password").value;
    var power = 0;

    if ((pass.length >= 4) && (pass.length <= 7)) {
        power += 10;
    } else if (pass.length > 7) {
        power += 25;
    }

    if ((pass.length >= 5) && (pass.match(/[a-z]+/))) {
        power += 10;
    }

    if ((pass.length >= 6) && (pass.match(/[A-Z]+/))) {
        power += 20;
    }

    if ((pass.length >= 7) && (pass.match(/[!@#$%&*]+/))) {
        power += 25;
    }

    showPower(power);
}

function showPower(power) {

    if (power <= 15) {
        document.getElementById("powerError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-white text-xs leading-none py-1 text-center text-red-500" style="width: 100%">utilize letras maiúsculas e caracters especiais</div></div>';
    } else if (power < 30) {
        document.getElementById("powerError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-red-500 text-xs leading-none py-1 text-center text-white" style="width: 25%">fraca</div></div>';
    } else if ((power >= 30) && (power < 50)) {
        document.getElementById("powerError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-yellow-500 text-xs leading-none py-1 text-center text-white" style="width: 50%">média</div></div>';
    } else if ((power >= 50) && (power < 70)) {
        document.getElementById("powerError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-green-500 text-xs leading-none py-1 text-center text-white" style="width: 75%">forte</div></div>';
    } else if (power >= 70) {
        document.getElementById("powerError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" style="width: 100%">amazing password</div></div>';
    }


}

function validateConfirmPowerPass() {
    var pass2 = document.getElementById("confirm_password").value;
    var power2 = 0;

    if ((pass2.length >= 4) && (pass2.length <= 7)) {
        power2 += 10;
    } else if (pass2.length > 7) {
        power2 += 25;
    }

    if ((pass2.length >= 5) && (pass2.match(/[a-z]+/))) {
        power2 += 10;
    }

    if ((pass2.length >= 6) && (pass2.match(/[A-Z]+/))) {
        power2 += 20;
    }

    if ((pass2.length >= 7) && (pass2.match(/[!@#$%&*]+/))) {
        power2 += 25;
    }

    showConfirmPower(power2);
}

function showConfirmPower(power2) {

    if (power2 <= 15) {
        document.getElementById("powerConfirmError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-white text-xs leading-none py-1 text-center text-red-500" style="width: 100%">utilize letras maiúsculas e caracters especiais</div></div>';
    } else if (power2 < 30) {
        document.getElementById("powerConfirmError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-red-500 text-xs leading-none py-1 text-center text-white" style="width: 25%">fraca</div></div>';
    } else if ((power2 >= 30) && (power2 < 50)) {
        document.getElementById("powerConfirmError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-yellow-500 text-xs leading-none py-1 text-center text-white" style="width: 50%">média</div></div>';
    } else if ((power2 >= 50) && (power2 < 70)) {
        document.getElementById("powerConfirmError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-green-500 text-xs leading-none py-1 text-center text-white" style="width: 75%">forte</div></div>';
    } else if (power2 >= 70) {
        document.getElementById("powerConfirmError").innerHTML = '<div class="mt-2 shadow w-full bg-grey-light"><div class="bg-blue-500 text-xs leading-none py-1 text-center text-white" style="width: 100%">amazing password</div></div>';
    }


}