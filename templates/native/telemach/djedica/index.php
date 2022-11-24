<!DOCTYPE html>
<html lang="hr">
<?php
$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/telemach/djedica/';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>
    <!-- use this logic to embed all the files from project -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/lidl/bozic2022/font/rawline.css?ver=1.10" type="text/css" />
  <style>
    html {
        font-family: 'rawline', sans-serif;
    }
    h1 {
        font-family: 'Berkshire Swash', cursive;
    }
  </style>
</head>
<body>
<div class="relative">
    <img src="<?php echo $native_path ?>img/djedica1.png">
  <div class="container md:mx-auto px-4  border-4 border-slate-300" >
  <h1 class="text-5xl text-center py-4">Milijun djedica</h1>
  <h2 class="text-xl text-center">Učiniti nešto za druge najljepši je dar</h2>
    <p class="py-2">
      U svojoj blizini sigurno imaš osobu koja dugo sanja o nekoj želji, ali nikako da je ostvari. Mama koja želi proputovati svijet, ali nikako da napravi plan. Tata koji u donjoj ladici stola skriva pjesme, ali nikako da ih pokaže svijetu. Brat koji sanja o dizajnu video igrica, ali nikako da se javi game studiju. Prijateljica koja je talent za crtanje, ali nikako da se ohrabri pokazati svoj rad drugima.
    </p><p class="py-2">
      Ovih blagdana Telegram i Telemach udružuju snage kako bi tebi pomogla dok ti pomažeš drugima. Podijeli s nama želju koju želiš ostvariti, za koga i zašto, a mi ćemo se pobrinuti da u tome uspiješ. Zajedno stvaramo milijun djedica.
    </p><p class="py-2">
      Učiniti nešto za druge najljepši je dar. Dopusti da mi darujemo tebe, dok ti daruješ svoje bližnje.
    </p><p class="py-2">
      Sve što trebaš napraviti je snimiti kratki video do 30 sekundi svojim mobitelom u kojemu nam pojašnjavaš koga želiš razveseliti, čime to planiraš napraviti i zašto ti je do toga i te osobe stalo. S tim nam se videom javi na WhatsApp i pošalji svoje ime i prezime, kontakt i mjesto stanovanja.
    </p><p class="py-2">
      Nagradni natječaj traje do 06.12. kada ćemo odabrati pet stranih dobitnika kojima će Telegram i Telemach pomoći u ostvarenju želja njihovih bližnjih. <a href="https://www.telegram.hr/preview/1350838" target="_blank" class="text-red-400">Pravila natječaja pročitaj ovdje</a>.
    </p>
    <p class="py-2">
      Vodi me na WhatsApp:
    </p>
    <p class="flex content-center justify-center">
    <a href="https://wa.me/qr/SSP33NNB7C45K1" target="_blank" class="block">
      <img src="<?php echo $native_path ?>img/frame.png">
    </a>
    </p>
    <p class="py-2">
      Ako si na kompu, skeniraj mobitelom QR kod.
      Ako si već na mobitelu, klikni na QR kod.
    </p>
  </div>
</div>
  <footer class="container md:mx-auto mt-16">
      <div class="flex content-center justify-center gap-10">
        <img src="https://telemach.hr/img/bg/telemach-logo-1.svg" alt="telemach logo">
        <img src="https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/lidl/bozic2022/img/tg_studio.png" alt="tg studio">
      </div>
      <div class="p-4">
        <p class="text-center text-gray-400">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Telemach i po najvišim uredničkim standardima Telegram Media Grupe.</p>
      </div>
  </footer>

<!-- this is required to load all the analytics and other scripts -->
<?php wp_footer(); ?>
</body>
</html>
