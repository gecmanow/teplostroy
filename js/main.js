// calculate the position of the element in relation to the left of the browser //
function leftPosition(target) {
    var left = 0;
    if(target.offsetParent) {
        while(1) {
            left += target.offsetLeft;
            if(!target.offsetParent) {
                break;
            }
            target = target.offsetParent;
        }
    } else if(target.x) {
        left += target.x;
    }
    return left;
}
// calculate the position of the element in relation to the top of the browser window //
function topPosition(target) {
    var top = 0;
    if(target.offsetParent) {
        while(1) {
            top += target.offsetTop;
            if(!target.offsetParent) {
                break;
            }
            target = target.offsetParent;
        }
    } else if(target.y) {
        top += target.y;
    }
    return top;
}
// preload the arrow //
if(document.images) {
    arrow = new Image(7,80);
    arrow.src = "images/msg_arrow.gif";
}

let multiButton = document.getElementById('callback_multi-button');
let multiButtonDrop = document.getElementById('callback_dropdown');
let multiButtonDropItemTelegram = document.getElementById('callback_dropdown-item_telegram');
let multiButtonDropItemWhatsapp = document.getElementById('callback_dropdown-item_whatsapp');
let multiButtonDropItemPhone = document.getElementById('callback_dropdown-item_phone');
let multiButtonTelegramIcon = document.getElementById('callback_telegram-icon');
let multiButtonWhatsappIcon = document.getElementById('callback_whatsapp-icon');
let multiButtonTelegramText = document.getElementById('callback_telegram-text');
let multiButtonWhatsappText = document.getElementById('callback_whatsapp-text');
let multiButtonPhoneText = document.getElementById('callback_phone-text');
let multiButtonPhoneIcon = document.getElementById('callback_phone-icon');
let multiButtonDropPhoneText = document.getElementById('callback_phone-text-mobile');
let multiButtonDropPhoneIcon = document.getElementById('callback_phone-icon-mobile');
let go = true;
let arrD = ["fa fa-phone", "fab fa-telegram-plane", "fab fa-whatsapp"], i = -1;

//interval = setInterval(change(), 1200);

if (document.documentElement.clientWidth > 768) {
    change();
    multiButton.addEventListener('mouseover', function () {
        multiButtonDrop.classList.remove('callback_stop');
        multiButtonPhoneText.classList.remove('callback_stop');
        go = false;
        clearInterval(interval);
        multiButtonPhoneIcon.className = 'fa fa-phone';
    });
    multiButton.addEventListener('mouseout', function () {
        multiButtonDrop.classList.add('callback_stop');
        multiButtonPhoneText.classList.add('callback_stop');
        go = true;
        change();
    });
} else {
    change();
    document.getElementById('callback_dropdown-item_phone-link').addEventListener('click', function (event) {
        event.preventDefault();
    });
    multiButton.addEventListener('click', function () {
        if((multiButtonDrop.classList.contains('callback_stop'))) {
            multiButtonDrop.classList.remove('callback_stop');
            multiButtonDropItemPhone.classList.remove('callback_stop');
            go = false;
            clearInterval(interval);
            multiButtonPhoneIcon.className = 'fa fa-phone';
        } else {
            multiButtonDrop.classList.add('callback_stop');
            multiButtonDropItemPhone.classList.add('callback_stop');
            go = true;
            change();
        }
    });
}

multiButtonDropItemTelegram.addEventListener('mouseover', function () {
    multiButtonTelegramIcon.style.boxShadow = '0 0 5px rgba(0,0,0,0.5)';
    multiButtonTelegramText.style.boxShadow = '0 0 5px rgba(0,0,0,0.5)';
});
multiButtonDropItemTelegram.addEventListener('mouseout', function () {
    multiButtonTelegramIcon.style.boxShadow = 'none';
    multiButtonTelegramText.style.boxShadow = 'none';
});
multiButtonDropItemWhatsapp.addEventListener('mouseover', function () {
    multiButtonWhatsappIcon.style.boxShadow = '0 0 5px rgba(0,0,0,0.5)';
    multiButtonWhatsappText.style.boxShadow = '0 0 5px rgba(0,0,0,0.5)';
});
multiButtonDropItemWhatsapp.addEventListener('mouseout', function () {
    multiButtonWhatsappIcon.style.boxShadow = 'none';
    multiButtonWhatsappText.style.boxShadow = 'none';
});
multiButtonDropItemPhone.addEventListener('mouseover', function () {
    multiButtonDropPhoneIcon.style.boxShadow = '0 0 5px rgba(0,0,0,0.5)';
    multiButtonDropPhoneText.style.boxShadow = '0 0 5px rgba(0,0,0,0.5)';
});
multiButtonDropItemPhone.addEventListener('mouseout', function () {
    multiButtonDropPhoneIcon.style.boxShadow = 'none';
    multiButtonDropPhoneText.style.boxShadow = 'none';
});

function change() {

    let multiButtonPhoneIcon = document.getElementById('callback_phone-icon');
    let arrD = ["fa fa-phone", "fab fa-telegram-plane", "fab fa-whatsapp"], i = -1;

    interval = setInterval(function () {
        multiButtonPhoneIcon.className = arrD[i = ++i == arrD.length ? 0 : i];
    }, 1200)
}

const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 60;
const ALERT_THRESHOLD = 20;

const COLOR_CODES = {
    info: {
        color: "green"
    },
    warning: {
        color: "orange",
        threshold: WARNING_THRESHOLD
    },
    alert: {
        color: "red",
        threshold: ALERT_THRESHOLD
    }
};

const TIME_LIMIT = 300;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;
let timer = document.getElementById("timer");

if(timer) {
timer.innerHTML = `
    <div class="base-timer">
      <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <g class="base-timer__circle">
          <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
          <path
            id="base-timer-path-remaining"
            stroke-dasharray="283"
            class="base-timer__path-remaining ${remainingPathColor}"
            d="
              M 50, 50
              m -45, 0
              a 45,45 0 1,0 90,0
              a 45,45 0 1,0 -90,0
            "
          ></path>
        </g>
      </svg>
      <span id="base-timer-label" class="base-timer__label">${formatTime(
        timeLeft
    )}</span>
    </div>`;

    startTimer();
}

function onTimesUp() {
    clearInterval(timerInterval);
}

function startTimer() {
    timerInterval = setInterval(() => {
        timePassed = timePassed += 1;
        timeLeft = TIME_LIMIT - timePassed;
        document.getElementById("base-timer-label").innerHTML = formatTime(
            timeLeft
        );
        setCircleDasharray();
        setRemainingPathColor(timeLeft);

        if (timeLeft === 0) {
            onTimesUp();
        }
    }, 1000);
}

function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
        seconds = `0${seconds}`;
    }

    return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
    const { alert, warning, info } = COLOR_CODES;
    if (timeLeft <= alert.threshold) {
        document
            .getElementById("base-timer-path-remaining")
            .classList.remove(warning.color);
        document
            .getElementById("base-timer-path-remaining")
            .classList.add(alert.color);
    } else if (timeLeft <= warning.threshold) {
        document
            .getElementById("base-timer-path-remaining")
            .classList.remove(info.color);
        document
            .getElementById("base-timer-path-remaining")
            .classList.add(warning.color);
    }
}

function calculateTimeFraction() {
    const rawTimeFraction = timeLeft / TIME_LIMIT;
    return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
    const circleDasharray = `${(
        calculateTimeFraction() * FULL_DASH_ARRAY
    ).toFixed(0)} 283`;
    document
        .getElementById("base-timer-path-remaining")
        .setAttribute("stroke-dasharray", circleDasharray);
}



