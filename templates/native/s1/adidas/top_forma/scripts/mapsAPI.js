function initMap() {

        var jarun = {lat: 45.786689, lng: 15.914608};
        var bundek = {lat: 45.785464, lng: 15.987217};
        var sljeme = {lat: 45.899953, lng: 15.947756};
        var maksimir = {lat: 45.828794, lng: 16.021130};
        var nasip = {lat: 45.789376, lng: 15.992079};
        var split = {lat: 43.507794, lng: 16.438234};
        var dubrovnik = {lat: 42.641588, lng: 18.104906};
        var zadar = {lat: 44.117234, lng: 15.220057};
        var varazdin = {lat: 46.316226, lng: 16.362294};
        // Nove
        var marjan = {lat: 43.513921, lng: 16.416390};
        var medulin = {lat: 44.814286, lng: 13.931954};
        var osijek = {lat: 45.563099, lng: 18.693604};
        var risnjak = {lat: 45.432407, lng: 14.638632};
        var dugiotok = {lat: 43.967740, lng: 15.088575};
        var pasman = {lat: 43.950383, lng: 15.372398};

        var map = new google.maps.Map(document.getElementById('mapEmbed'), {
          scrollwheel: false,
          zoom: 15,
          center: marjan,
          styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f7ece6"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]
        });

        var markerJarun = new google.maps.Marker({
            position: jarun,
            map: map,
            title: 'Jarun'
        });
        var markerBundek = new google.maps.Marker({
            position: bundek,
            map: map,
            title: 'Bundek'
        });
        var markerSljeme = new google.maps.Marker({
            position: sljeme,
            map: map,
            title: 'Sljeme'
        });
        var markerMaksimir = new google.maps.Marker({
            position: maksimir,
            map: map,
            title: 'Maksimir'
        });
        var markerNasip = new google.maps.Marker({
            position: nasip,
            map: map,
            title: 'Savski nasip'
        });
        var markerSplit = new google.maps.Marker({
            position: split,
            map: map,
            title: 'Splitska riva'
        });
        var markerDubrovnik = new google.maps.Marker({
            position: dubrovnik,
            map: map,
            title: 'Dubrovačka riva'
        });
        var markerZadar = new google.maps.Marker({
            position: zadar,
            map: map,
            title: 'Zadarska riva'
        });
        var markerVarazdin = new google.maps.Marker({
            position: varazdin,
            map: map,
            title: 'Varaždinsko jezero'
        });

        // Nove
        var markerMarjan = new google.maps.Marker({
          position: marjan,
          map: map,
          title: 'Marjan'
        });
    
        var markerMedulin = new google.maps.Marker({
          position: medulin,
          map: map,
          title: 'Medulin'
        });

        var markerOsijek = new google.maps.Marker({
          position: osijek,
          map: map,
          title: 'Osijek'
        });

        var markerRisnjak = new google.maps.Marker({
          position: risnjak,
          map: map,
          title: 'Risnjak'
        });

        var markerDugiotok = new google.maps.Marker({
          position: dugiotok,
          map: map,
          title: 'Dugi Otok'
        });
        var markerPasman = new google.maps.Marker({
          position: pasman,
          map: map,
          title: 'Pašman'
        });


        var contentJarun = '<div class="mapsInfo"><h4>Jarun</h4><p>Vrsta staze: cesta/asfalt<br/>Teren: ravan<br/>Duljina: 6.5 km<br/>Savršeno za: dužinske treninge, intervalne treninge</p></div>';
        var infoJarun = new google.maps.InfoWindow({
            content: contentJarun
        });
        var contentBundek = '<div class="mapsInfo"><h4>Bundek</h4><p>Vrsta staze: cesta/asfalt<br/>Teren: ravan<br/>Duljina: 1.6km (krug)<br/>Savršeno za: intervalne treninge</p></div>';
        var infoBundek = new google.maps.InfoWindow({
            content: contentBundek
        });
        var contentSljeme = '<div class="mapsInfo"><h4>Sljeme</h4><p>Vrsta staze: šumska staza<br/>Teren: strmo<br/>Duljina: 11km<br/>Savršeno za: dužinske treninge, brdske treninge</p></div>';
        var infoSljeme = new google.maps.InfoWindow({
            content: contentSljeme
        });
        var contentMaksimir = '<div class="mapsInfo"><h4>Maksimir</h4><p>Vrsta staze: šumska staza i cesta<br/>Teren: umjeren<br/>Duljina: 5km<br/>Savršeno za: tempo, dužinski trening</p></div>';
        var infoMaksimir = new google.maps.InfoWindow({
            content: contentMaksimir
        });
        var contentNasip = '<div class="mapsInfo"><h4>Savski nasip</h4><p>Vrsta staze: šljunčana staza<br/>Teren: ravan<br/>Duljina: 4.5 km (mali krug) ili 9 km (veliki krug)<br/>Savršeno za: fartlek trening, dužinski trening</p></div>';
        var infoNasip = new google.maps.InfoWindow({
            content: contentNasip
        });
        var contentSplit = '<div class="mapsInfo"><h4>Split riva</h4><p>Vrsta staze: cesta<br/>Teren: ravan<br/>Duljina: 16km<br/>Savršeno za: dužinski trening</p></div>';
        var infoSplit = new google.maps.InfoWindow({
            content: contentSplit
        });
        var contentDubrovnik = '<div class="mapsInfo"><h4>Dubrovačka riva</h4><p>Vrsta staze: cesta<br/>Teren: ravan<br/>Duljina: 4.5km<br/>Savršeno za: tempo, dužinski trening</p></div>';
        var infoDubrovnik = new google.maps.InfoWindow({
            content: contentDubrovnik
        });
        var contentZadar = '<div class="mapsInfo"><h4>Zadarska riva</h4><p>Vrsta staze: cesta<br/>Teren: ravan<br/>Duljina: 20km<br/>Savršeno za: dužinski trening</p></div>';
        var infoZadar = new google.maps.InfoWindow({
            content: contentZadar
        });
        var contentVarazdin = '<div class="mapsInfo"><h4>Varaždisko jezero</h4><p>Vrsta staze: cesta<br/>Teren: ravan<br/>Duljina: 20km<br/>Savršeno za: fartlek trening, dužinski trening</p></div>';
        var infoVarazdin = new google.maps.InfoWindow({
            content: contentVarazdin
        });

        // Nove
        var contentMarjan = '<div class="mapsInfo"><h4>Marjan</h4><p>Vrsta staze: betonirane staze<br/>Teren: raznolik<br/>Duljina: 17 km<br/>Savršeno za: dužinske treninge, rekreativno trčanje</p></div>';
        var infoMarjan = new google.maps.InfoWindow({
            content: contentMarjan
        });
        var contentMedulin = '<div class="mapsInfo"><h4>Medulin</h4><p>Vrsta staze: cesta/asfalt<br/>Teren: raznolik<br/>Duljina: 14 km<br/>Savršeno za: dužinske treninge</p></div>';
        var infoMedulin = new google.maps.InfoWindow({
            content: contentMedulin
        });
        var contentOsijek = '<div class="mapsInfo"><h4>Osijek, uz rijeku Dravu</h4><p>Vrsta staze: cesta<br/>Teren: raznolik<br/>Duljina: 3,5 km<br/>Savršeno za: rekreativno trčanje</p></div>';
        var infoOsijek = new google.maps.InfoWindow({
            content: contentOsijek
        });
        var contentRisnjak = '<div class="mapsInfo"><h4>Nacionalni park Risnjak</h4><p>Vrsta staze: prirodne staze<br/>Teren: raznolik, kružnog oblika<br/>Duljina: 4,5 km<br/>Savršeno za: rekreativno trčanje</p></div>';
        var infoRisnjak = new google.maps.InfoWindow({
            content: contentRisnjak
        });
        var contentDugiotok = '<div class="mapsInfo"><h4>Dugi otok</h4><p>Vrste staza: prirodne staze, brdske staze, obilježene staze<br/>Teren: raznolik<br/>Duljina: 15 km<br/>Savršeno za: dužinske treninge, rekreativno trčanje</p></div>';
        var infoDugiotok = new google.maps.InfoWindow({
            content: contentDugiotok
        });
        var contentPasman = '<div class="mapsInfo"><h4>Pašman</h4><p>Vrste staza: oštri kamenjar<br/>Teren: idealno za škraping<br/>Duljina: 16km<br/>Savršeno za: ljubitelje ekstremnog trčanja</p></div>';
        var infoPasman = new google.maps.InfoWindow({
            content: contentPasman
        });
    

        $("#jarun").click(function(){
            map.setCenter(jarun);
            infoJarun.open(map, markerJarun);
        })
        $("#bundek").click(function(){
            map.setCenter(bundek);
            infoBundek.open(map, markerBundek);
        });
        $("#sljeme").click(function(){
            map.setCenter(sljeme);
            infoSljeme.open(map, markerSljeme);
        });
        $("#maksimir").click(function(){
            map.setCenter(maksimir);
            infoMaksimir.open(map, markerMaksimir);
        });
        $("#nasip").click(function(){
            map.setCenter(nasip);
            infoNasip.open(map, markerNasip);
        });
        $("#split").click(function(){
            map.setCenter(split);
            infoSplit.open(map, markerSplit);
        });
        $("#dubrovnik").click(function(){
            map.setCenter(dubrovnik);
            infoDubrovnik.open(map, markerDubrovnik);
        });
        $("#zadar").click(function(){
            map.setCenter(zadar);
            infoZadar.open(map, markerZadar);
        });
        $("#varazdin").click(function(){
            map.setCenter(varazdin);
            infoVarazdin.open(map, markerVarazdin);
        });
        $("#mapEmbed").click(function(){
            map.setOptions({ scrollwheel: true });
        });
        // Nove
        $("#marjan").click(function(){
            map.setCenter(marjan);
            infoMarjan.open(map, markerMarjan);
        })
        $("#medulin").click(function(){
            map.setCenter(medulin);
            infoMedulin.open(map, markerMedulin);
        });
        $("#osijek").click(function(){
            map.setCenter(osijek);
            infoOsijek.open(map, markerOsijek);
        });
        $("#risnjak").click(function(){
            map.setCenter(risnjak);
            infoRisnjak.open(map, markerRisnjak);
        });
        $("#dugiotok").click(function(){
            map.setCenter(dugiotok);
            infoDugiotok.open(map, markerDugiotok);
        });
        $("#pasman").click(function(){
            map.setCenter(pasman);
            infoPasman.open(map, markerPasman);
        });

}
