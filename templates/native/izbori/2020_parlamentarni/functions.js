// Load main functions...

// Initialize WOW.js animations
jQuery(document).ready( function() {
    new WOW().init();
    var myVar = setInterval(myTimer, 1000);
    var counter = 5;
    var stranke = ['restart', 'hdz', 'domovinski', 'most', 'mozemo', 'reformisti', 'simp', 'petrina', 'kerum', 'dosta'];

    function updateData(data) {
        var data_object = JSON.parse(data);
        //console.log(data_object);
        $('.restart-line').html('<span>'+data_object.total.restart.mandati+'</span> Restart');
        $('.hdz-line').html('HDZ <span>'+data_object.total.hdz.mandati+'</span>');
        stranke.forEach(function(item, index, array) {
            $('.total-results .'+item+' .mandati').html(data_object.total[item].mandati);
            $('.total-results .'+item+' .postotak').html(data_object.total[item].postotak+'%');
            $('.total-results .'+item).css('order', 100-data_object.total[item].mandati);
            $('.result-line .'+item).css('width', Number.parseFloat(data_object.total[item].mandati/151).toFixed(4)*100+'%');

            for (let index = 1; index < 11; index++) {
                if (Number(data_object[index][item].postotak) < 3) {
                    $('.result-table-'+index+' .'+item).css('display', 'none');
                }
                else {
                    $('.result-table-'+index+' .'+item).css('display', 'flex');
                }
                $('.result-table-'+index+' .'+item+' .mandati').html(data_object[index][item].mandati);
                $('.result-table-'+index+' .'+item+' .postotak').html(data_object[index][item].postotak+'%');
                $('.result-table-'+index+' .'+item).css('order', 100-data_object[index][item].mandati);
            }
        })
    }

    function myTimer() {
        counter--;
        if (counter == 0) {
            var ispis = '<img src="https://www.telegram.hr/wp-content/uploads/2020/07/loader_circle.gif">Pokušavamo ažurirati podatke.';
            document.getElementById("refresh-counter").innerHTML = ispis;
            counter = 15;
            $.ajax({
                type: 'GET',
                url: 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/izbori/2020_parlamentarni/data/',
                success: function(data) {
                    if (data != '') {
                        updateData(data);
                    } else {
                        $("#notification").fadeIn(500);
                        $("#notification").delay(5000).fadeOut(500);
                    }
                },
                error: function(data) {
                    $("#notification").fadeIn(500);
                    $("#notification").delay(5000).fadeOut(500);
                }
            });
        }
        else {
            var ispis = 'Podaci ažurirani prije 0 minuta. Osviježiti ćemo podatke za '+counter+' sekundi.';
            document.getElementById("refresh-counter").innerHTML = ispis;
        }
        
    } 
});