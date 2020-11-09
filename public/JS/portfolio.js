


// Text typing animation 

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};


TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('presentation-txt');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    document.body.appendChild(css);
};

// END Typing animation


// START CLOCK SCRIPT


$('.timer_init').each(function updateClock() {
    var today = new Date();
    var hour = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    var timer = hour + ":" + min + ":" + sec;
    $(this).html("<p class='time_actual'>"+timer+"</p>");
})

function initClock() {
    updateClock();
    window.setInterval("updateClock()", 1);
  }


d = new Date();
d.getHours();
d.getMinutes();
setInterval(function () {
  document.getElementById("clock").innerHTML = "<span id=\"actual_time\">" + d.getHours() + "<span id=\"dot_clock\">:</span>" + d.getMinutes() + "</span>";
  d.setTime(d.getTime() + 1000);
}, 1000);
/* Ajax */

const weatherBg = {
    "Rain": "pluie",
    "Clouds": "nuageux", 
    "Snow": "neige",
    "mist": "vent",
    "Drizzle": "jsp",
}

async function main(withIp = true) {

    let city;
    let from

    if(withIp) {

    const ip = await fetch('https://api.ipify.org?format=json')
        .then(results => (results.json()))
        .then(json => json.ip);

    const lat = await fetch('https://freegeoip.app/json/' + ip)
        .then(results => results.json())
        .then(json => json.latitude);
    
    const long = await fetch('https://freegeoip.app/json/' + ip)
        .then(results => results.json())
        .then(json => json.longitude);

    city = await fetch('https://geocode.xyz/' + lat + ',' + long + '?json=1')
                .then(results => results.json())
                .then(json => json.city);
    } else {
        city = document.querySelector('#city').textContent;
    }

    const weather = await fetch("https://api.openweathermap.org/data/2.5/weather?q=" + city + "&appid=e82f2a8f84a2fb63f383ed9f650584c5&lang=fr&units=metric")
                    .then(results => results.json())
                    .then(json => json);

    
    weatherInfos(weather)
    
}

function weatherInfos(data) {
    const name = data.name;
    const temperature = data.main.temp;
    const conditions = data.weather[0].main;
    const country = data.sys.country;

    document.querySelector('#city').textContent = name;
    document.querySelector('#temperature').textContent = Math.round(temperature);
    document.querySelector('#conditions').textContent = weatherBg[conditions];

    console.log(conditions);

    document.getElementById('country-bg').className = country.toLowerCase();
    document.getElementById('weather').className = conditions.toLowerCase();

}

const city = document.querySelector('#city');

    city.addEventListener('click', () => {
        city.contentEditable = true;
    });

    city.addEventListener('keydown', (e) => {
        if (e.isComposing || e.keyCode === 13) {
            e.preventDefault();
            city.contentEditable = false;
            main(false);
        }
    });

main();