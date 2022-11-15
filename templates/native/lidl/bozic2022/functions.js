// Load main functions...

jQuery(document).ready(function () {
    AOS.init({
        duration: 750,
        delay: 500
    });

    $('#uvjeti').change(function () {
        $('#submit-application').prop("disabled", !this.checked);
    });

    // Countdown
    var countDownDate = new Date("Dec 25, 2022 00:00:01").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        var day_1 = Math.floor((days%100)/10);
        var day_2 = Math.floor(days%10);

        var hour_1 = Math.floor(hours/10);
        var hour_2 = Math.floor(hours%10);

        var min_1 = Math.floor(minutes/10);
        var min_2 = Math.floor(minutes%10);

        var sec_1 = Math.floor(seconds/10);
        var sec_2 = Math.floor(seconds%10);

        document.getElementById("cd-day-1").innerHTML = day_1;
        document.getElementById("cd-day-2").innerHTML = day_2;

        document.getElementById("cd-hour-1").innerHTML = hour_1;
        document.getElementById("cd-hour-2").innerHTML = hour_2;

        document.getElementById("cd-min-1").innerHTML = min_1;
        document.getElementById("cd-min-2").innerHTML = min_2;

        document.getElementById("cd-sec-1").innerHTML = sec_1;
        document.getElementById("cd-sec-2").innerHTML = sec_2;

        if (distance < 0) {
            clearInterval(x);
        }
    }, 1000);

    // Snow by Radu Micu (https://codepen.io/radum/pen/AqgObM)

    var particleCount = 200;
    var particleMax   = 1000;
    var sky           = document.querySelector('.sky');
    var canvas        = document.createElement('canvas');
    var ctx           = canvas.getContext('2d');
    var width         = sky.clientWidth;
    var height        = sky.clientHeight;
    var i             = 0;
    var active        = false;
    var snowflakes    = [];
    var snowflake;

    canvas.style.position = 'absolute';
    canvas.style.left = canvas.style.top = '0';

    var Snowflake = function () {
    this.x = 0;
    this.y = 0;
    this.vy = 0;
    this.vx = 0;
    this.r = 0;

    this.reset();
    };

    Snowflake.prototype.reset = function() {
    this.x = Math.random() * width;
    this.y = Math.random() * -height;
    this.vy = 1 + Math.random() * 3;
    this.vx = 0.5 - Math.random();
    this.r = 1 + Math.random() * 2;
    this.o = 0.5 + Math.random() * 0.5;
    };

    function generateSnowFlakes() {
        snowflakes = [];
        for (i = 0; i < particleMax; i++) {
            snowflake = new Snowflake();
            snowflake.reset();
            snowflakes.push(snowflake);
        }
    }

    generateSnowFlakes();

    function update() {
    ctx.clearRect(0, 0, width, height);

    if (!active) {      
        return;
    }

    for (i = 0; i < particleCount; i++) {
        snowflake = snowflakes[i];
        snowflake.y += snowflake.vy;
        snowflake.x += snowflake.vx;

        ctx.globalAlpha = snowflake.o;
        ctx.beginPath();
        ctx.arc(snowflake.x, snowflake.y, snowflake.r, 0, Math.PI * 2, false);
        ctx.closePath();
        ctx.fill();

        if (snowflake.y > height) {
        snowflake.reset();
        }
    }

    requestAnimFrame(update);
    }

    function onResize() {
    width = sky.clientWidth;
    height = sky.clientHeight;
    canvas.width = width;
    canvas.height = height;
    ctx.fillStyle = '#FFF';

    var wasActive = active;
    active = width > 200;

    if (!wasActive && active) {
        requestAnimFrame(update);
    }
    }

    // shim layer with setTimeout fallback
    window.requestAnimFrame = (function() {
    return  window.requestAnimationFrame       ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame    ||
            function( callback ){
                window.setTimeout(callback, 1000 / 60);
            };
    })();

    onResize();
    window.addEventListener('resize', onResize, false);

    sky.appendChild(canvas);

    /* 
    
    Copyright (c) 2022 by Radu Micu (https://codepen.io/radum/pen/AqgObM)

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

    */
});