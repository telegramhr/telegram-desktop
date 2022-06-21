<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/energia_naturalis/uhvati_sunce/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/tools/dajmi/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/energia_naturalis/uhvati_sunce/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/tools/dajmi/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>html2canvas.min.js"></script>
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<body>
    <div class="main-container flex relative">
        <div class="full flex relative">
            <div class="container flex relative">
                <h1 class="full center-text">Daj mi...</h1>
                <div class="full flex relative">
                    <div class="third flex-responsive flex relative">
                        <div class="full flex relative">
                            <input type="radio" id="modric" name="overlay" checked><label class="clickable animate" for="modric">Modrićku</label>
                        </div>
                        <div class="full flex relative">
                            <input type="radio" id="redzepovic" name="overlay"><label class="clickable animate" for="redzepovic">Redžepovića</label>
                        </div>
                    </div>
                    <div class="third flex-responsive center relative">
                        <h2 class="full center-text">Na ovo:</h2>
                        <div class="full file-upload clickable">
                            <div class="file-select">
                                <div class="file-select-button" id="fileName">Odaberi datoteku</div>
                                <div class="file-select-name" id="noFile">Datoteka će biti dodana u template</div> 
                                <input type="file" name="chooseFile" id="chooseFile">
                            </div>
                        </div>
                    </div>
                    <div class="third flex-responsive center relative">
                        <button onclick="save_image();" id="saveimagebutton" class="full animate clickable btn">Hitno!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="full flex relative">
            <div id="img-render">
                <img src="img/grey_placeholder.png" width="2664" height="1680" id="img-deliver">
                <img src="img/tg_dajmi_overlay_modric.png" width="2664" height="1680" id="img-overlay">
            </div>
        </div>
    </div>
    <script>
        var native_path = "<?php echo $native_path; ?>";
        var img_data;
        var counter = 1;
        var filename = "tg_naslovna.jpg";
        function update_date(date) {
            var yyyy = date.getFullYear().toString();
            var mm = (date.getMonth()+1).toString();
            var dd  = date.getDate().toString();
            var mmChars = mm.split('');
            var ddChars = dd.split('');
            var converted_date = yyyy + '_' + (mmChars[1]?mm:"0"+mmChars[0]) + '_' + (ddChars[1]?dd:"0"+ddChars[0]) + '_' + counter;
            counter++;
            filename = "tg_naslovna_kolumna_"+converted_date+".jpg";
        }
        function getRandomInt(max) {
            return Math.floor(Math.random() * max);
        }
        function update_canvas() {
            html2canvas(document.querySelector("#img-render"), {scale: 1}).then(function(canvas) {
                img_data = canvas.toDataURL('image/jpeg', 0.7);
            });
        }
        async function save_image() {
            update_canvas();
            update_date(new Date());
            $("#saveimagebutton").text("...");
            setTimeout(() => {
                var a  = document.createElement('a');
                a.href = img_data;
                a.download = filename;
                a.click();
                switch (getRandomInt(4)) {
                    case 0:
                        $("#saveimagebutton").text("Hitno!");
                        break;
                    case 1:
                        $("#saveimagebutton").text("Odmah!");
                        break;
                    case 2:
                        $("#saveimagebutton").text("Brzo!");
                        break;
                    case 3:
                        $("#saveimagebutton").text("Što prije!");
                        break;
                    default:
                        $("#saveimagebutton").text("Hitno!");
                        break;
                }
                
            }, 2000)
        }
        document.querySelector("#modric").addEventListener('change', function() {
            document.querySelector("#img-overlay").src=native_path+"img/tg_dajmi_overlay_modric.png";
        });
        document.querySelector("#redzepovic").addEventListener('change', function() {
            document.querySelector("#img-overlay").src=native_path+"img/tg_dajmi_overlay_redzepovic.png";
        });
        document.getElementById('chooseFile').addEventListener('change', readURL, true);
        function readURL(){
            var file = document.getElementById("chooseFile").files[0];
            var reader = new FileReader();
            reader.onloadend = function(){
                document.getElementById('img-deliver').src= reader.result;

            }
            if(file){
                reader.readAsDataURL(file);
                }else{
            }
        }

    </script>
    <?php wp_footer(); ?>
</body>

</html>