// Load main functions...

jQuery(document).ready(function () {
    $("#converter-kune").change(function() {
        $("#converter-euri").val(parseFloat(parseFloat($("#converter-kune").val())/7.53450).toFixed(2));
    })
    $("#converter-euri").change(function() {
        $("#converter-kune").val(parseFloat(parseFloat($("#converter-euri").val())*7.53450).toFixed(2));
    })

});