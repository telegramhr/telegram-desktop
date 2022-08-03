// Load main functions...

jQuery(document).ready(function () {
    // Countdown
    var countDownDate = new Date("Jan 1, 2023 00:00:01").getTime();
    var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    var day_1 = Math.floor(days/100);
    var day_2 = Math.floor((days%100)/10);
    var day_3 = Math.floor(days%10);

    var hour_1 = Math.floor(hours/10);
    var hour_2 = Math.floor(hours%10);

    var min_1 = Math.floor(minutes/10);
    var min_2 = Math.floor(minutes%10);

    var sec_1 = Math.floor(seconds/10);
    var sec_2 = Math.floor(seconds%10);

    document.getElementById("cd-day-1").innerHTML = day_1;
    document.getElementById("cd-day-2").innerHTML = day_2;
    document.getElementById("cd-day-3").innerHTML = day_3;

    document.getElementById("cd-hour-1").innerHTML = hour_1;
    document.getElementById("cd-hour-2").innerHTML = hour_2;

    document.getElementById("cd-min-1").innerHTML = min_1;
    document.getElementById("cd-min-2").innerHTML = min_2;

    document.getElementById("cd-sec-1").innerHTML = sec_1;
    document.getElementById("cd-sec-2").innerHTML = sec_2;

    //document.getElementById("its-the-final-countdownnn").innerHTML = days + " dana, " + hours + " sati, " + minutes + " minuta i " + seconds + " sekundi.";
    if (distance < 0) {
        clearInterval(x);
        //document.getElementById("its-the-final-countdownnn").innerHTML = "0 dana. Euro je službena valuta u Hrvatskoj sada!";
    }
    }, 1000);

    $("#converter-kune").change(function() {
        $("#converter-euri").val(parseFloat(parseFloat($("#converter-kune").val())/7.53450).toFixed(2));
    })
    $("#converter-euri").change(function() {
        $("#converter-kune").val(parseFloat(parseFloat($("#converter-euri").val())*7.53450).toFixed(2));
    })

});