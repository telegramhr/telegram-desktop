var whitelistDays = [
    4, 7, 8, 9, 10, 11, 14, 15, 16, 17, 18, 20, 21, 22, 23, 24, 25, 28, 29
];

var dayMap = {
    'dan-4': {
        'dan-text': 'dan 1.',
        'naslov-text': 'Želim sve najbolje onoj koja me šminka i informira o svim beauty novitetima',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/prvi-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/prvi-dan/animacija.gif',
        'uvod-text': 'Prijateljice su uvijek tu jedna za drugu. Savjetuju se oko odabira parfema, zajedno se šminkaju prije izlaska i odlaze u beauty shopping. Prate sve novitete iz svijeta ljepote, pa uče jedna drugu kako pravilno nacrtati obrve ili iscrtati usne, koji puder najbolje odgovara kojem tipu kože ili kako uvrstiti hijaluronski serum u svoju postojeću skincare rutinu. I ti imaš tu jednu prijateljicu, sestru, sestričnu, kolegicu koja s tobom dijeli sve make-up tajne.',
        'ostalo-text': 'Zato Douglas dariva upravo tebe i nju bogatim poklon paketom koji čine tri fantastična brenda: <a href="https://www.douglas.hr/Proizvod/benefit-cosmetics-bring-your-own-beauty-set-limited-edition/36903" target="_blank">Benefit</a>, <a href="https://www.douglas.hr/Proizvod/zoeva-radiant-gaze-pallete/37181" target="_blank">Zoeva</a> i <a href="https://www.douglas.hr/Proizvod/too-faced-lip-injection-extreme-cinnamon-bear-lip-plumper/37036" target="_blank">Too Faced</a> koji će vam biti dovoljni da zasjate ovih blagdana. Što poklon paket uključuje? Posebno će vas oduševiti revolucionarna formula Lip Injection Extreme koja omogućuje trenutačno i dugotrajno povećanje usana uz koju će blagdanski poljupci biti još slađi. Za zavodljive poglede pobrinut će se nagrađivana They’re Real! Maskara za produljivanje trepavica, a vašem će licu slavljenički izgled dati i gel za obrve Gimme Brow+, Hoola bronzer za prirodan "osunčani ten" te mini pakiranje The POREfessional. Za završni chic touch tu je limitirano izdanje ZOEVA Share Your Radiance Eyeshadow Palette koja ima sve što vam je potrebno za stvaranje očaravajućeg izgleda očiju i raskošni party look.'
    },
    'dan-7': {
        'dan-text': 'dan 2.',
        'naslov-text': 'Želim sve najbolje onoj koja svojim osmijehom ruši sve granice',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/drugi-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/drugi-dan/animacija.gif',
        'uvod-text': 'Ova je godina prepuna izazova, a najveći je izazov ostati hrabar, snažan, nasmijan i svoj u svemu što nam je 2020. servirala. Kad nam svakodnevica pokaže zube, tu uskaču naši najmiliji. Oni su naš oslonac, rame za plakanje, naš putokaz u teškim vremenima, oni svojim osmijehom unose radost u naš život. I često ne znamo kako bismo im to vratili. A najmanje što zaslužuju je medalja za prijateljstvo.',
        'ostalo-text': 'To su prepoznali u <a href="https://argentum.hr/?gclid=Cj0KCQiA2af-BRDzARIsAIVQUOcy9f4AJEFYOJIFkxJKHZHET58MIog8cBKLTbz1G01yKJoFrWKIc08aAoXGEALw_wcB&utm_source=Super1&utm_medium=web&utm_campaign=ChristmaS1" target="_blank">Argentumu</a> koji na svom web shopu već sada osigurava do 50 posto blagdanskog popusta, a prekrasan izbor nakita možete pogledati ovdje. Odlučili su vam pomoći da ovih blagdana nagradite svoju heroinu, a upravo je nakit najbolji dar koji će joj izmamiti osmijeh na lice.',
    },
    'dan-8': {
        'dan-text': 'dan 3.',
        'naslov-text': 'Svojoj najdražoj stilistici želim supermodnu 2021.!',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/treci-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/treci-dan/animacija.gif',
        'uvod-text': 'Svi imamo onu jednu najbolju prijateljicu bez koje ni ne pomišljamo na shopping. Ona može satima s nama pregledavati nove kolekcije, nema problem ako kupimo isti komad odjeće, čeka nas ispred kabine dok isprobavamo nove komade, uvijek je tu ako se treba vratiti u trgovinu i donijeti nam manji ili veći broj. Ona ZNA što nam dobro stoji i pristaje li novi komad našem stilu i osobnosti. I kupujemo tek kad ONA potvrdi da je to-to!',
        'ostalo-text': 'I vi sigurno imate tu jednu, neprocjenjivu osobu u svom životu u čije modne savjete vjerujete, zar ne? Sad kada ste sto posto sigurni tko je to, dobro je znati da je <a href="https://www.reserved.com/hr/hr/" target="_blank">Reserved</a> pripremio savršen dar kojim ćete joj se zahvaliti za sve lijepe trenutke koje ste proveli skupa - poklon bon u vrijednosti od 500 kuna. Kao sjajan uvod u vašu novu shopping avanturu, ali i sjajan oproštaj s ovom ludom 2020. svakako je nova Nova RESERVED kolekcija <a href="https://www.reserved.com/hr/hr/woman/editorials/dinner" target="_blank">“Christmas Dinner”</a>. Jedinstvena, bezvremenska, a istovremeno izuzetno udobna kolekcija savršen je izbor za stylish božićnu večeru kod kuće. Kolekcija nadahnuta blagdanima u novonormalnom ozračju daje osjećaj druge kože, ona za koju kažemo da je ne bismo skidali glavni je Reservedov odgovor na trend “ostani kod kuće”. Mekani i udobni baršun koji se ne gužva daje osjećaj ugode tijekom dana, a zahvaljujući sjajnoj strukturi savršeno se uklapa i za večernje blagdanske prilike. Komadi iz kolekcije hrabri su i jednostavni, kreirani kako bismo se osjećali posebno za božićnu večeru bez obzira na situaciju i broj ljudi koji nas okružuje!',
    },
    'dan-9': {
        'dan-text': 'dan 4.',
        'naslov-text': 'Želim sve najbolje onoj koja me poznaje u dušu',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/cetiri-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/cetiri-dan/animacija.gif',
        'uvod-text': 'Uvijek postoji onaj netko tko te poznaje u dušu i malim znakovima pažnje pokazuje koliko te voli. Poznaje sva tvoja raspoloženja i za svako ima neki tajni trik da te razveseli. To je ona osoba koja je u društvu i mama, tata, savjetnik i prijatelj. Ona uvijek poklanja najbolje darove jer sluša i uvijek je prisutna',
        'ostalo-text': 'I stručni tim Anzotice zna koliko je važno slušati što nam naša koža govori kako bi mogli stvorili proizvode koji će odgovoriti na sve njezine potrebe. A kako biste se na najbolji način zahvalili onoj koja vas poznaje u dušu, pripremili su divne poklon pakete. <a href="https://www.anzotica-cosmetics.hr/luxea-poklon-paket" target="_blank">Luxea poklon paket</a> sastoji se od Luxea parfumirane esencije, 2u1 proizvoda koji je idealan spoj parfema i njege kože. Njegovu baršunastu teksturu koja njeguje i hidratizira kožu krasi zavodljiva kombinacija mirisa naranče i bergamota te jasmina, ruže i pačulija. Tu je i Luxea luksuzna 5u1 zlatna maska za lice koja trenutno revitalizira, dubinski čisti i hidratizira kožu. Pripremili su i <a href="https://www.anzotica-cosmetics.hr/moja-oaza-poklon-paket-2" target="_blank">poklon paket Moja Oaza</a> koji se sastoji od Kreme za lice Kolagen&Ceramidi koja koži pruža cjelodnevnu zaštitu, dubinski je hrani i hidratizira. Mislili su i na meke poljupce,osobito važne u ovo doba godine, pa su u poklon paket uvrstili i Balzam za usne Kokos sačinjen od moćnih sastojaka koji nježnu kožu usana štite od hladnoće, vjetra i sunca.',
    },
    'dan-10': {
        'dan-text': 'dan 5.',
        'naslov-text': 'Želim sve divno onoj koja nas inspirira svojim djelima',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/peti-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/peti-dan/animacija.gif',
        'uvod-text': 'Izazovna 2020. godina otkrila je puno toga o nama, o osobnosti, ljepoti, miru… A upravo je <a href="https://www.instagram.com/zaks_hrvatska/?utm_source=Super1&utm_medium=web&utm_campaign=ChristmaS1" target="_blank">Zaks brend</a> koji nose elegantne, snažne, karizmatične žene koje čine razliku i koje svojim pojavom privlače pažnju i na punoj ulici. Zato želimo da svaki sudionik nagradnog natječaja predstavi onu koja svijet inspirira svojim djelima i koja je zaslužila 5 minuta sjaja i sjajni poklon iz Zaksa.',
        'ostalo-text': 'Za ovu prigodu izdvojili su divne komade svog prepoznatljivog tradicijskog nakita u modernom ruhu koji je već nekoliko sezona must have komad svake fashionistice. Kako im je to uspjelo? Njihovi majstori zlatari tradicijskim detaljima ugradili su dašak suvremenog dizajna i dobili neodoljive trendi Konavoke, romantične Šibenske botune i ženstvene Rećine, a neke od spomenutih komada sada su i na blagdanskom popustu od 50 posto.',
    },
    'dan-11': {
        'dan-text': 'dan 6.',
        'naslov-text': 'Želim sve najbolje mom superchefu koji za blagdane sprema najbolje specijalitete',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sest-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sest-dan/animacija.gif',
        'uvod-text': 'Iako smo se ove godine više družili virtualno nego uživo te smo godišnjice, rođendane i diplome slavili preko video poziva, više no ikada družili smo se s ukućanima. Više smo razgovarali, tješili se i hrabrili, igrali se i stvarali. Omiljena igra u izolaciji bila nam je kuhanje. Usavršavali smo svoje kulinarske vještine, no ipak nismo uspjeli nadmašiti baku, mamu, tatu, strica, prijatelja ili prijateljicu koji u našoj obitelji i društvu nose titulu superchefa. Da, svi imamo onu jednu osobu koja će se hrabro upustiti u nove kulinarske avanture i bez imalo straha isprobati nove, egzotične recepte.',
        'ostalo-text': 'Zato uz Lidl želimo predstaviti onu osobu koja svojim jelima, bez obzira na prigodu za koju kuha, očara svako nepce - onu kojoj želimo sve najbolje začine u životu. Naime, u Lidlu znaju da je hrana glavni sastojak svake dobre zabave. Zato je blagdansko veselje u Lidlu krenulo već 2.11. i to s bogatom ponudom <a href="https://www.lidl.hr/hr/c/blagdansko-veselje-moze-poceti/c2734/w1" target="_blank">Deluxe</a> i <a href="https://www.lidl.hr/hr/c/slatko-blagdansko-veselje-moze-poceti/c2735/w1" target="_blank">Favorina</a> proizvoda, koja svaki tjedan donosi nešto novo. Deluxe na vaše stolove donosi brojne delikatese od kojih se posebno izdvajaju Prosciutto Crudo, datulje sa špekom, maslac od tartufa, namaz od Leccino maslina s inćunima i kaparima…Tu su i noviteti za ljubitelje morskih okusa koji mogu birati između morskih plodova i hobotnice u umaku. Uz deserte koje Deluxe nudi, poput torte od krušaka i čokolade, idealan izbor za ljubitelje slatke blagdanske čarolije nudi Favorina – nezaobilazni adventski kalendari, čokoladne kugle, razne praline i karamele samo su neki od mnoštva proizvoda kojima će biti teško odoljeti.',
    },
    'dan-14': {
        'dan-text': 'dan 7.',
        'naslov-text': 'Imaš svog zelenog prijatelja? Zaželi mu su sve najbolje u novoj!',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sedmi-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sedmi-dan/animacija.gif',
        'uvod-text': 'Gotovo svatko od nas u društvu ima barem jednog zaljubljenika u prirodu koji pazi da nakon svakog izleta u šumi ne ostavi ništa osim otiska svojih stopa. Njegov je dom poput malog botaničkog vrta, uživa u uzgoju bilja, redovito vježba, pazi na prehranu pa bira isključivo eko hranu te se trudi živjeti prema zero waste principima. Kupuje isključivo proizvode koji se mogu reciklirati i s posebnom pažnjom razvrsava svoj otpad jer zna da ako činimo dobro Planeti, činimo dobro i sebi. ',
        'ostalo-text': 'Upravo je to moto tvrtke <a href="https://www.biobio.hr/?utm_source=super1.telegram.hr&utm_medium=clanak&utm_campaign=Kompostabilna_ambalaza_prosinac_2020" target="_blank">bio&bio</a> koja njeguje isti pogled na život. Budući da je zagađenje plastikom rastući problem, te da se njezine čestice sve učestalije nalaze u našoj hrani, vodi, ljudima i životinjama, uveli su važnu inovaciju - bio&bio lanac trgovina ekološkim proizvodima od lipnja ove godine čak 111 ekoproizvoda pakira u kompostabilnu ambalažu te su prva robna marka na našem tržištu koja se odlučila na ovaj potez. Kompostabilna ambalaža je načinjena od celuloznih vlakana te se u potpunosti razgrađuje i postaje dijelom okoliša, kao prirodni otpad. Čak je i naljepnica na pakiranju kompostabilna, a to znači da ambalažu nakon korištenja možete odložiti u kantu za organski otpad. Proizvode je lako prepoznati po certifikatu kompostabilne ambalaže na naljepnici, ali i po šuškavoj teksturi. Iako je ovakvo pakiranje znantno skuplje, cijena proizvoda je za kupce ostala ista. Ovo će zasigurno oduševiti i vašeg zelenog prijatelja jer je bio&bio za ovu prigodu pripremio dva poklon paketa ekološkog suhog voća i orašastih plodova kako biste zajedno mogli dati svoj doprinos za čišći Planet. ',
    },
    'dan-15': {
        'dan-text': 'dan 8.',
        'naslov-text': 'Zaželite sve najbolje svojoj skin loverici',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/osam-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/osam-dan/animacija.gif',
        'uvod-text': 'Svaka od nas ima u društvu onu jednu prijateljicu koja vječito brine o svojoj koži i zna dati najbolji savjet za njegu prema tipu kože. U svakom društvu imamo skin care lovericu koja prati sve moguće trendove i njezina koža uvijek blista te je uzor svima. Ona zna da je briga o koži put do ljepšeg i zdravijeg izgleda.',
        'ostalo-text': 'Isto kao i Eucerin koji prati trendove, ali i postavlja nove. Prirodno i inovativno. Njihov <a href="https://www.eucerin.hr/proizvodi/aquaphor/obnavljajuca-njega-u-spreju" target="_blank">Eucerin Aquaphor</a> kožu na tijelu učinit će zdravom, mekom, umiriti iritacije i potaknuti obnavljanje, čak i na teško dostupnim mjestima. Eucerin® Aquaphor obnavljajuća njega u spreju posebno je dizajnirana za tretiranje većih područja na tijelu. Aktivni sastojci, pantenol i glicerin, koji već skoro 100 godina pomažu u njezi i regeneraciji kože također su ključni u novoj Eucerin Aquaphor obnavljajućoj njezi u spreju koja pruža intenzivnu hidrataciju suhoj, ispucaloj i nadraženoj koži. Eucerin se pridružio našoj čaroliji darivanja kako bi uljepšao blagdane vašoj skin loverici. Jedni što trebate učiniti je - igrati se s nama!',
    },
    'dan-16': {
        'dan-text': 'dan 9.',
        'naslov-text': 'Želim sve najbolje onoj koja nam zasladi svake blagdane',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/deveti-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/deveti-dan/animacija.gif',
        'uvod-text': 'Kada dođu posebni trenuci u životu vrijedi ih zasladiti ukusnim slasticama, a u društvu svi imamo baku, mamu, prijateljicu ili prijatelja koji pripremi onaj kolač previše, koji se teško odbija jer je preeefin. U ovom danu želimo naglasiti važnost tih ljudi u našim životima, onih koji svoju ljubav prema slasticama podijele s nama i stvaraju najslađe uspomene koje se zauvijek pamte.',
        'ostalo-text': 'Odbrojavanje dana do Božića bit će slađe uz <a href="https://www.podravka.hr/brand/dolcela/" target="_blank">Dolcela</a> Raspucance, Gingerbread keksiće ili Truffles kuglice, ukusne recepte i aromatizirane šećere jer vaša slastičarka u duši čaroliju stvara, a Dolcela pomaže. Za sve one koji žele prožeti dom aromatičnim mirisima božićnih kolača tu su mali pomagači koji uvijek uskaču kad treba, dovodeći slastice do potpunog savršenstva. Dolcela vanilin šećer i prašak za pecivo učinit će kolače ukusnijima, a tijesta prhkijima. Uz aromatizirane šećere Rum, Cimet, Limun, Naranča ili Menta svaki kolač ili desert pruža sasvim novi doživljaj okusa. Igrajte se s nama i uz Dolcelu stvorite svoju blagdansku čaroliju!',
    },
    'dan-17': {
        'dan-text': 'dan 10.',
        'naslov-text': 'Želim sve najbolje onoj koja zakuha najzabavnije trenutke u ekipi ',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/tenth-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/tenth-dan/animacija.gif',
        'uvod-text': 'Ta osoba je najveći frajer i frajerica u društvu, uvijek ima spremne fore za svakog u društvu, a pri tom kod te osobe nitko ne ostane gladan. U ovom danu želimo zahvaliti glavom frajeru ili frajerici u društvu bez kojeg niti jedno druženje ne bi bilo isto.',
        'ostalo-text': 'A bez <a href="https://vegeta-natur.hr" target="_blank">Vegete Natur</a>, nijedno jelo nije isto. Ovaj univerzalni dodatak jelima nudi rješenje za svaku kulinarsku avanturu. Bez obzira na to igrate li na sigurno ili u kuhinji uživate u improvizaciji, Vegeta Natur je prirodno rješenje svih problema. Donosi prirodu u svaku kuhinju, bez obzira na to koristite li je u tekućem ili dehidriranom obliku. Vegeta Natur univerzalni je dodatak jelima kojeg karakterizira bogatstvo više vrsta povrća, esencija začina ljupčaca i morska sol iz Jadrana, bez dodanih pojačivača okusa. Prirodno se slaže sa svim vrstama mesa i povrća, a i vas će, prirodno, inspirirati za nove kulinarske kreacije.',
    },
    'dan-18': {
        'dan-text': 'dan 11.',
        'naslov-text': 'Želim sve najbolje onoj osobi uz čije me kuhano vino ili kompot vežu najljepše blagdanske uspomene',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/jedanaest-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/jedanaest-dan/animacija.gif',
        'uvod-text': 'Postoji ona jedna osoba koja poznaje sva cool mjesta u gradu, državi i u svijetu. To je ona osoba koja točno zna što ćete raditi cijeli dan ako ste negdje na izletu. Čak i u vrijeme pandemije upravo ona ima najbolje ideje što vidjeti, kamo prošetati, koji vidikovac posjetiti. Ipak, kako nećemo još neko vrijeme putovati i klopati vani, on ili ona uvijek za nas pripremi dobar ugođaj kod sebe doma. Zato joj trebamo zahvaliti i zaželjeti sve najbolje jer je slatki začin svakog druženja.',
        'ostalo-text': 'Upravo su Vegeta Maestro začini pravo rješenje kad nam ponestane inspiracije, oni su tajni sastojak nezaboravnih blagdanskih pića uz koja ćemo nazdravljati za neka bolja, sretnija vremena. Posebno se ističu <a href="https://www.podravka.hr/proizvod/cimet-mljeveni/" target="_blank">Vegeta Maestro Cimet</a> kojim, osim kolača i keksiju, možete začiniti tople napitke i kompote. Njegov nezamjenjivi, slatkasti okus i običan će dan pretvoriti u blagdan. Hladnije dane započnite šalicom toplog čaja s dodatkom <a href="https://www.podravka.hr/proizvod/dumbir-mljeveni/" target="_blank">Vegeta Maestro Đumbira</a> koji ima moć ugrijati svako srce. Tu su i <a href="https://www.podravka.hr/proizvod/klincic-cijeli/" target="_blank">Vegeta Natur Klinčići</a> i <a href="https://www.podravka.hr/proizvod/muskatni-orascic-mljeveni/" target="_blank">Vegeta Maestro Muškatni oraščić</a>, nezaobilazni sastojci mirisnog kuhanog vina uz koje ćete zajedno stvarati najljepše blagdanske uspomene u toplini svoga doma.',
    },
    'dan-20': {
        'dan-text': 'dan 12.',
        'naslov-text': 'Želim sve najbolje onoj koja me podsjeća koliko sam jaka',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/dvanaesti-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/dvanaesti-dan/animacija.gif',
        'uvod-text': 'Iako je godina bila poprilično nemilosrdna, moramo joj zahvaliti, moramo se okrenuti i zahvaliti onima koji su s nama prošli sve najbolje i najgore trenutke.',
        'ostalo-text': 'U ovom danu želimo zahvaliti onoj osobi koja je za nas spremna učiniti sve, podsjetiti nas koliko smo jaki kada smo najslabiji, onoj koja i bez šminke i bez frizure dolazi gdje treba i pomaže u nevolji. Upravo je neustrašiva, neovisna, svoja žena vječna inspiracija frizeru Davorinu Puriću koji se priključio našoj blagdanskog čaroliji darivanja. Upravo je potpuni makeover u rukama stilista iz salona <a href="https://www.instagram.com/davorhairandsoul/?hl=hr" target="_blank">Davor Hair & Soul</a> u Gundulićevoj 20 najbolji način da joj se odužite za podršku u 2020. ',
    },
    'dan-21': {
        'dan-text': 'dan 13.',
        'naslov-text': 'Želim sve najbolje onoj koja ima brzo rješenje za sve',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/trinaesti-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/trinaesti-dan/animacija.gif',
        'uvod-text': 'Znate one trenutke u kojima ne niste sigurni da ćete donijeti pravu odluku, situacije u kojima zapnete i ne znate kako dalje? I onda vam ne preostaje ništa drugo nego u pomoć zvati svog Supermena ili Čudesnu ženu koji uvijek imaju brzo rješenje za sve - u stanju su organizirati party iznenađenja i ludo putovanje u zadnji tren, ali i dok vi padate u nesvijest od gladi izbaciti ručak za manje od pola sata. Ma, nema ništa bolje od sjajnih, brzih rješenja, zar ne? Zato u ovom danu želimo zahvaliti našim superjunacima za sve one spasonosne trenutke u kojima smo se mogli na njih osloniti.',
        'ostalo-text': 'I u Podravci znaju koliko je brzina u životu bitna pa su uspjeli do savršenstva dovesti i svoja brza, domaća jela. Tako i <a href="https://www.podravka.hr/proizvod/bogata-juha-s-5-zitarica/" target="_blank">Podravka Bogata juha s 5 žitarica</a>, Bogata juha s vrganjima i heljdom i Bogata juha s ječmom i povrćem idu ukorak sa željama potrošača – donose prirodnost, ali i modernost. Bogate su žitaricama i povrćem te pružaju ukusan i zasitan obrok istovremeno njegujući tradicionalne navike u prehrani te vraćajući popularnost nutritivno vrijednim žitaricama: heljdi, piru i zobi. Gotove su u samo 20-ak minuta. Idealno su predjelo u bogatoj jesensko – zimskoj trpezi, ali svojom raskošnom konzistencijom mogu biti i glavno jelo!',
    },
    'dan-22': {
        'dan-text': 'dan 14.',
        'naslov-text': 'Želim sve najbolje onoj koja pripremi najbolju sarmu u obitelji',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/cetrnaesti-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/cetrnaesti-dan/animacija.gif',
        'uvod-text': 'Kad je u pitanju sarma, tu nema puno priče - svatko od zna tko priprema najbolju na svijetu. Ta sarma asocira nas na ugodna blagdanska druženja s obitelji, odvodi nas u neka sretnija, bezbrižna vremena. I svatko od nas ima baku, mamu, tetu ili strica čijoj sarmi nema premca. Budući da ove godine možda nećete imati priliku jesti svoju omiljenu sarmu, ne brinite!',
        'ostalo-text': 'Podravka se pridružila našem blagdanskom darivanju i ima rješenje, i to već punih 45 godina - zaželite li se fine domaće sarme tu je <a href="https://www.podravka.hr/proizvod/fant-mjesavina-za-punjenu-papriku-i-sarmu/" target="_blank">Fant za punjenu papriku i sarmu</a>. Osim mesa, riže i kiselog kupusa neće vam ništa više trebati, uz Fant sarma uspijeva iz prve!',
    },
    'dan-23': {
        'dan-text': 'dan 15.',
        'naslov-text': 'Želim sve najbolje onoj koja nikad ne odustaje od svojih ciljeva',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/petnaesti-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/petnaesti-dan/animacija.gif',
        'uvod-text': 'Ova je godina stavila na kušnju mnoge naše želje i ciljeve. Puno toga što smo zamislili nismo ostvarili. Ali uvijek postoji ona osoba koja bez obzira na sve živi svoje snove i ostvaruje svoje ciljeve. U ovom danu želimo sve najbolje onoj osobi u našoj blizini koja nas inspirira da radimo i živimo više. U ovom danu želimo sve najbolje onoj osobi koja je inspiracija da možemo ostvariti sve.',
        'ostalo-text': 'Zato se našoj blagdanskoj čaroliji darivanja pridružila ekipa iz Prahir Fine Jewellery jer oni znaju koliko je inspiracija važna u životu. Kao idealan dar vašoj dozi inspiracije odabrali su nakit svog novog branda <a href="https://www.instagram.com/de.llure/" target="_blank">De\'llure.</a> Kolekcija je inspirirana glamurom svjetskih metropola pretočenim u male umjetnine od čelika, srebra i zlata, obogaćene poludragim kamenjem u nijansama zelenog, sivog, ružičastog i crvenog. Osnovna premisa ovog nakita je jednostavnost pri čemu se svi artikli mogu nositi odvojeno ili zajedno. Vječni sjaj zlatne nikad nije tako dobro izgledao u kombinaciji sa smaragdno zelenim, tirkizno plavim i nježno rozim tonovima koji se međusobno isprepliću stvarajući auru mističnosti i glamura, dok nježne linije daju notu profinjenosti i elegancije.',
    },
    'dan-24': {
        'dan-text': 'dan 16.',
        'naslov-text': 'Želim sve najbolje onoj koja uvijek zna što pokloniti prijateljima ',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sesnaesti-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sesnaesti-dan/animacija.gif',
        'uvod-text': 'U društvu imamo onu osobu koja uvijek zna što pokloniti za blagdane i rođendane, onu koja osmisli najcool poklone o kojima se duuugo priča. Pravo je vrijeme da joj se zahvalimo i zaželimo sve najbolje te osiguramo jedan predivan poklon paket za kraj 2020.',
        'ostalo-text': 'Tu nam pomažu vilenjaci iz <a href="https://www.lerbolario.hr/hr/" target="_blank">L’Erbolaria</a> koji su kao poslasticu za kraj ove, nimalo omiljene godine, predstavili dvije nove mirisne linije. Riječ je o linijama stvorenima u čast dva plemenita metala - zlata i srebra - L\'Erbolario Silver Bouquet te L\'Erblolario Golden Bouquet. Ove dvije mirisne kombinacije savršen su dar za one čiji pokloni svaki puta osvoje vaše srce. Kako bi proslavili čistoću plemenitog metala, <a href="https://www.instagram.com/lerbolario_hrvatska/?hl=hr" target="_blank">L\'Erbolario</a> fitokozmetički laboratoriji stvorili su mirisnu liniju Silver Bouquet. Riječ je o pravom mirisnom buketu s ekstraktima biljaka čiji listovi odlikuju srebrnaste nijanse, a bogati su aktivnim sastojcima koji vlaže, toniraju i štite kožu, čak i onu najosjetljiviju. Ako ste se pak zapitali kako miriše zlato, iz laboratorija odgovaraju - hladno, baš kao što zamišljamo metal ili toplije kako zamišljamo njegov sjaj. Kako bi odali počast i vječnom sjaju zlata, stvorili su liniju Golden Bouquet za koju su odabrali cvijeće zlatne boje: žuti iris, zlatnicu (solidago), jaglac te ovaj veličanstveni buket spojili s jednako bogatim i vrijednim sastojkom za kožu, čarobnim tekućim zlatom – bagremovim medom.',
    },
    'dan-25': {
        'dan-text': 'dan 17.',
        'naslov-text': 'Svaki zajednički trenutak je dar',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sedamnaesti-dan/logo.svg',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/sedamnaesti-dan/animacija.gif',
        'uvod-text': 'Ove godine svaki trenutak proveden s našim voljenima dragocjen je dar. Danas želimo sve najbolje onima s kojima bismo željeli provesti blagdane, ali uslijed pandemije nažalost, s njima fizički ne možemo biti.',
        'ostalo-text': 'Kako biste barem nakratko zaustavili vrijeme i stvorili nezaboravne uspomene, pobrinut će se <a href="https://www.youtube.com/channel/UCX-apdL-qpU-xqTx-eSuAVQ" target="_blank">Lancôme</a> koji zna da su blagdani najčarobnije doba godine. Lancôme vas poziva da pokažete ljubav, jer najljepši su trenuci upravo oni koje provodimo zajedno. Stoga, uz lijepe želje vašim najmilijima, uđite u bajkoviti i blistavi svijet koji odiše srećom i širite radost uz čarobni La Vie Est Belle, miris sreće i radosne ženstvenosti. Kroz cijelu kolekciju protkana je magnolija, simbol novih početaka i sreće - baš ono što nam treba na kraju ove godine.',
    },
    'dan-28': {
        'dan-text': 'dan 18.',
        'naslov-text': 'Želim sve najbolje onoj koja priprema moja najdraža jela',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/osamnaesti-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/osamnaesti-dan/animacija.gif',
        'uvod-text': 'Uvijek postoji ona osoba koja zna što najviše voliš jesti, koja tvoje omiljeno jelo priprema s posebnim trudom i s puno ljubavi. Vrijeme je da joj se zahvališ i zaželiš joj najljepše kulinarske želje za kraj 2020.',
        'ostalo-text': 'A kako bi vas i dalje uveseljavala svojim kulinarskim igrarijama, u naše blagdansko darivanje uključio se i Delimano uz čiji je <a href="https://www.delimano.hr/set-mini-maxi-fivestar-legend?med=text_nativ&cex=20277850&src=hr_seasonal_christmas_text_nativ_br_super1&referrer=Super1_text_nativ_20277850&utm_source=Super1_ext&utm_medium=Native_Adv_class&utm_campaign=seasonal_christmas&utm_content=CR_DEL_Super1_Native_Xmas_2020_Giveaway_br_20277850" target="_blank">Mini Maxi FiveStar Legend set</a> kuhanje igra u kojoj svi uživaju. Zahvaljujući neprianjajućem premazu priprema omiljenih jela pravi je užitak. Ove tave mogu se koristiti za pripremu omleta, povrća i mesa uz samo kap ulja. Otporne su na ogrebotine i prikladne za korištenje na svim vrstama štednjaka. Igrajte se s nama i nek\' vam je u slast!',
    },
    'dan-29': {
        'dan-text': 'dan 19.',
        'naslov-text': 'Želim sve najbolje našim najmlađim članovima obitelji',
        'logo-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/devetnaesti-dan/logo.png',
        'animacija-url': 'https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/christmas1/img/devetnaesti-dan/animacija.gif',
        'uvod-text': 'Ova je godina izazov za sve nas pa tako i za naše najmlađe. Iako je lijepo biti sa svojom obitelji više nego ikada, neki nemaju sreće biti u sretnoj i skladnoj obitelji koja pruža osjećaj sigurnosti. Mentalno zdravlje djece sve je više ugroženo i o njemu trebamo brinuti. U idućoj godini više no ikad, morat ćemo brinuti o svom i mentalnom zdravlju djece.',
        'ostalo-text': 'Zato je tu Hrabri telefon, da sasluša, da podrži i da mu najmlađi vjeruju. Mogu mu darovati svoje povjerenje i obratiti mu se. Sve linije su anonimne, besplatne i povjerljive. Mališani mogu zvati svakim radnim danom od 9 do 20 sati na broj 116 111. Odrasli koji su zabrinuti za neko dijete mogu se javiti na broj 0800-0800. Hrabrom telefonu možete i pisati na e-mail:savjet@hrabritelefon.hr ili chatati na web stranici Hrabrog telefona. Kako biste podržali rad Hrabrog telefona i za kraj ove nimalo nam drage godine pokušali barem malo poboljšati svijet, uključite se u jednu zanimljivu akciju. Naime, Hrabri telefon kreirao je majice sa znakom mede koji je zaštitni znak udruge. Kupnjom majice kratkih rukava donirate 40, a kupnjom majica dugih rukava 50 kuna za rad linija Hrabrog telefona. Kupnjom podržavate rad udruge na mentalnom zdravlju djece koje je uslijed pandemije postalo društveni problem koji moramo odmah početi rješavati, zajedno. Majice možete kupiti <a href="https://modnakatedra.com/kreatori/hrabritelefon/" target="_blank">ovdje.</a>',
    },
};

var winnerMap = {
    'dan-4': {
        'pobjednik-ime': 'Ana-Petra Kovač',
        'pobjednik-text': 'Volimo kozmetiku i uvijek nam treba svašta, a muževi kažu da nam je bujna ta „mašta“. Prirodna ljepota nam je u prvome planu, s malo make-upa uspješno sakrijemo svaku manu. Malo ruža na usne stavimo, a time i sve prisutne bez daha ostavimo. Ako ne popravljamo ruž barem nekoliko puta dnevno, izgledamo i osjećamo se nekako bijedno. Uvijek ga nosimo u torbi – to je naša tajna, obnavljamo ga kroz dan i razlika je značajna. Zbog toga bi stvarno bilo super da osvojimo proizvode ove, i s time ispunimo svoje dugo snivane snove. Benefit, Zoeva i Too Faced proizvodi san su svake žene, možda ovaj put Super1 razveseli moju frendicu i mene. Lijepe želje, draga moja prijateljice, nek ostanu za kraj, puno ljubavi, sreće i da istakneš svoj sjaj, takve želje želim da ti se ostvare, znaj!',
    },
    'dan-7':  {
        'pobjednik-ime': 'Sanja Kruljac',
        'pobjednik-text': 'Najljepši trenutak s mojom prijateljicom je bio kad je na dan potresa u zg već imala skuhanu kavu u to nedeljno jutro i prije nego je istrčala van prelila je kavu u termosicu i na dvorištu smo je zajedno pile i grijale se s njom i to nam je ublažilo šok od potresa,zagrijalo srca i nasmijalo nas i zato joj želim sve najbolje i zahvaljujem što smo ne samo najbolje prijateljice nego i susjede.',
    },
    'dan-8': {
        'pobjednik-ime': 'Tihana Vučić',
        'pobjednik-text': 'Sjećaš se moje pretilosti i svih tužnih nakupljenih kila?,vidi debelu,ide balvan, ha ha ha,uz takve povike suze nisam krila. Jedino ti si tu za mene oduvijek riječ i zagrljaj ohrabrenja bila, svi drugi vidjeli bi vanjsku"manu", umjesto da me upoznaju, moju osobnost i unutarnju ljudsku stranu. Želim ti za samopuzdanje koje imam danas reci hvala,jer bez tebe nikad osoba koja voli i prihvaća svoje mane nebi postala. Najljepši shopping s tobom je bio onaj koji nikad neću zaboraviti,u drugom srednje,noseći torbu preko ramena na čičak su ti se uhvatile čipkaste gaće s kojima si skoro izašla iz dućana,tad se oglasio alarm,a mi pocrvenile od srama, ispale smo zamalo kradljivice bez da smo znale. Volim te moja Đoza ♥️',
    },
    'dan-9': {
        'pobjednik-ime': 'Katarina Bošnjak',
        'pobjednik-text': '2020 godina pokazala mi je novu dimenziju prijateljstva, sve za što sam mislila da se nikada neće promjeniti doslovno je promjenilo polaritet u nekim situacijama i to u sekundi, ali to nisi bila i ti. Usprkos kilometrima, usprkos životnim problemima pa čak i zdravstvenim problemima bila si tu kada sam te najviše trebala bez da sam te ikada morala to i zatražiti.smijeh, suze, pomoć, različitost, iskrenost dala si mi cijeli paket sebe..Volim te prijateljice moja, i osim želje za zdravljem i srećom u Novoj godini, potpisujem ti i garanciju ovjerenu kod samog Boga, da ćeš UVIJEK moći računati na mene-u dobru i zlu kak se veli, a ja se mogu samo zahvaljivati da imam u životu čovjeka i dušu poput Tebe. Lav ju pupita moja!',
    },
    'dan-10': {
        'pobjednik-ime': 'Antonija Milić',
        'pobjednik-text': 'Stara sam i u mirovini, a moja kćer uz svoj rad u bolnici i svoju obitelj od 3.mjeseca ove godine brine da ostanemo zdravi, donosi hranu, lijekove, šopa nas vitaminima, pazi da nam ništa ne fali<br>....i samo me srce boli što zbog straha da nas ne zarazi ne skida masku. Želim joj kao i cijelom svijetu da ova korona konačno prođe i da skine masku da opet vidim njen osmijeh.',
    },
    'dan-11': {
        'pobjednik-ime': 'Ana Marija Pšeničnik',
        'pobjednik-text': 'Ljubav sigurno ide kroz želudac, a mene savršeno hrani moj dragi. Ne volim kuhati, pogotovo ne ništa komplicirano dok moj partner obožava, eksperimentira bez oklijevanja, čak i kad je hladnjak prazan od malo namirnica stvori poslasticu, brz je i učinkovit u pripremanju, on potpuno izražava svoju kreativnost u kuhinji i na kraju jelo uvijek raskošno servira ili ukrasi s malo začinskog bilja. Kad ima više vremena, tanjuri izgledaju kao umjetničke instalacije. Otkad se on brine o našoj prehrani i očarava me svojim specijalitetima, moje se zdravlje znatno poboljšalo, a koža je zablistala. Zahvaljujem mu što me svojom pažnjom ispunjava blaženstvom za stolom. Odužit ću mu se za blagdane ispečenim keksima i kolačima te tortom koju voli.',
    },
    'dan-14': {
        'pobjednik-ime': 'Tea Trezić',
        'pobjednik-text': 'Moja cimerica Petra koja me upoznala s povrćem i začinima koje do suživota s njom nisam koristila poput pastrnjaka, korabice i komarača. Od toga, ali i od mnogo drugog povrća svakodnevno nam sprema preukusne krem juhe jer pazi na naše zdravlje, cijedi nam limune da nam ojača imunitet i kuha biljne čajeve što je bitno u ovo zimsko doba. Balansirana prehrana s krem juhama i konzumiranje puno tekućine iznimno je bitna za moje zdravlje pošto imam psorijazu. Otkako sam uvrstila brojne zdrave navike u svoj život, koža mi je neprepoznatljiva! Hvala ti cimo što mi kuhaš, paziš me i maziš i činiš taj naš suživot slađim- bez slatkiša, s puno krem juha!! ',
    },
    'dan-15': {
        'pobjednik-ime': 'Josipa Broz Boroja',
        'pobjednik-text': 'Hvala jednoj jeleni koju ne poznajem osobno, ali ju svakodnevno viđam i pratim na društvenim mrežama i koja mi je prenijela toliko znanja o njezi kože pa sam " ona jedna u društvu koja vječito brine o svojoj koži i zna dati najbolji savjet za njegu" zapravo ja :) ',
    },
    'dan-16': {
        'pobjednik-ime': 'Monika Sulejmanović',
        'pobjednik-text': 'Sestrice draga! Neka ti ovi blagdani budu ugodni i dragi, i neka uz tvoje Dolcela slastice, ponovno se slavi. Dugo u noć opet ćeš nam ispričati bajkovitu priču, kako tvoje spretne ruke spravljaju limun pitu i najukusniju mađaricu. Uživat ćemo u svakom trenutku provedenom zajedno, i ovih blagdana, biti kao jedno. Od srca ti šaljem najljepše želje, sjeti se mene i voljene Dolcele',
    },
    'dan-17': {
        'pobjednik-ime': 'Lana Blažević',
        'pobjednik-text': 'Moj frend Luka sipa fore vješto, sve nas nasmije i radi to često. Malo je i smotan, naše je veselje, u društvu naše stalno ispunjava želje. Na nama je red, ekipa je iz snova, Luka Sretan Bozić i Godina Nova. Još puno smijeha želimo, neka se veselimo. Fore nikad nemoj ti bacati prestati, samo budi pozitivan i brige će nestati.',
    },
    'dan-18': {
        'pobjednik-ime': 'Maša Marić',
        'pobjednik-text': 'Ja nikad nisam baš voljela kuhano vino dok nisam upoznala svoju prijateljicu Irinu na studiju u inozemstvu. Obje smo bile usamljene i u kulturnom šoku, i činjenica što smo mogle razumjeti par riječi iz naših međusobnih jezika nam se činila kao sudbina. Pozivale smo jedna drugu na večere tradicionalne ruske i hrvatske hrane i stvorile svoju grupicu prijatelja. Jedna od najljepših večeri koje su mi ostali u sjećanju je bila pred sam Božić - svi smo pričali o cijenama autobusnih i tramvajskih karata i ja sam se zgražala nam temperaturama u sibirskom gradu iz kojeg moja prijateljica potječe. Za opuštanje ja sam odlučila napraviti kuhano vino. Prvo sam morala nazvati mamu koja mi je dala detaljne upute i onda mi držala fige da će mi vino zapravo i uspjeti. Kao rezervu sam imala kuhano vino iz dućana, za koje sam se nadala da ga neću trebati. Irina je, kao dobri duh, sa sobom isto donijela piće - kompot, jer se tako u Rusiji naziva odlična vrsta pića a ne, kao u Hrvatskoj, voće iz konzerve. U jednome trenutku smo ih odlučili pomiješati, i ostatak večeri je samo proletio. Irini, koja ove godine ne može biti doma za Božić, želim da ga ipak provede u društvu ljudi koji je vole, s puno kompota i kuhanog vina!',
    },
    'dan-20': {
        'pobjednik-ime': 'Paula Zoričić',
        'pobjednik-text': 'Ovaj poklon bon poklonila bih svojoj najboljoj prijateljici kojoj je ovo i više nego potrebno. Toliko je zauzeta pomaganjem drugima i poslom da nije išla kod frizera punih 3 godine. Nikad nema vremena za sebe, ali čim ja trebam pomoć uvijek je tu za mene. Zadnje čega se mogu sjetiti je kad je imala ispite i nije spavala danima jer je učila. Mene je ostavio dečko, ali nisam joj htjela reći da mi je teško da ju ne mučim, ali ona je bez da sam išta rekla znala da mi treba netko i pojavila mi se pred vratima s kantom sladoleda i čipsom, upalila mi glupu komediju na televiziji i pričala sa mnom cijelu noć. To nije ni prvi ni zadnji put da je bila pravi nesebični heroj i zato mislim da bi joj jedan dan za nju i makeover bio savršena nagrada.',
    },
    'dan-21': {
        'pobjednik-ime': 'Hanna Klapka',
        'pobjednik-text': 'Ova godina je bila teška za sve nas, puna izazova i boli. Iskreno teško mi je izabrati jednu osobu koju bih voljela razveseliti ukoliko osvojim neki od poklona jer da nije bilo mojih bližnjih ja ne znam u kojem bi stanju danas bila jer nakon potresa moj život jednostavno više nije isti. Ali kada razmišljam o tome definitivno mama. Moja mama je žena zmaj, moja mama je snaga po svakoj definiciji te riječi. Ona je žena koja je kroz život pošla sva vrata pakla a idalje stoji na nogama, da nje nije bilo ja sam sigurna da vrlo vjerojatno danas nebi bila ovdje. Nakon kobnog događaja u 03. mjesecu ove godine ja sam potonula potpuno, potres je bio moj trigger, a ona uz jako puno svojih problema je bila ta koja je noćima bila budna do 05:00-06:00 ujutro i "čuvala" mene i seku od potresa da bi mi mirnije spavale, išla je samnom u kupaonu da se mogu otuširati, doslovno me hranila i ako treba i presvlačila. Ja sam inače hrabra osoba i nemam nikakvih problema i ja sam ta koja podiže i mamu,tatu,baku i seku ali ovaj put je ona preuzela ulogu mog superheroja iako se i ona boji naravno jer svi mi imamo strah. Tolike sate je provela razgovarajući samnom, smirivajući me, jednostavno bila je moje ruke, noge, usta, um, moje sve. Smatram da zaslužuje sve a malo toga joj nažalost ove godine mogu priuštiti jer je otac ostao bez posla zbog covida. Zato mama iako ovo možda nikada nećeš vidjeti. Volim te i hvala ti za to što smo za sada preživjeli ovu 2020. godinu i što si me dizala kada si i sama bila na dnu. Tvoja Hanna.',
    },
    'dan-22': {
        'pobjednik-ime': 'Rosa Matika',
        'pobjednik-text': 'Sjećanjee...<br>Od kad moja malenkost na nogama stoji<br>Žudnja za sarmom postoji.🙊<br>U jutro Božićno kad zamiriše<br>Jasno je da ju želim najviše.😉<br>Stojim iznad lonca<br>Kao lopov neki<br>Očekujem ručak meni tako daleki.<br>Pristavim tanjure<br>I svijeće upalim.<br>Veselo pjevušim kao ptičica 🐦<br>Omiljena stiže mi sarmica!<br>No izdržati nisam mogla ja,<br>Pa sam Lopovica postala.<br>Uzela sam jednu i baš mi je sjela,<br>Ali mi je njena stroga riječ prisjela.<br>Znala im je točan broj,<br>Ajme meni joj.<br>Osramotila sam se malo, a njoj je situacija smiješna bila,<br>Zato je moja susjedica ovaj paket zaslužila.'
    },
    'dan-23': {
        'pobjednik-ime': 'Biljana Baranašić',
        'pobjednik-text': 'Draga Marijana! Svaki dan gledam (i učim!) tvoju strpljivost i smirenost, blagi ton kad nešto objašnjavaš i po deseti put (premda znam da si često "na rubu", ali nikad ga nisi prešla) i svakim danom ti se sve više divim. Ti pojmu ljudskost daješ jednu novu dimenziju, a meni priliku da se potrudim biti kao ti. Želim ti da ti se sve želje ispune i da nam ostaneš takva kakva jesi, jer da je više takvih ljudi, svijet bi bio predivno mjesto!'
    },
    'dan-24': {
        'pobjednik-ime': 'Đuli Sinozic',
        'pobjednik-text': 'Lijepo je pored sebe imati osobe koja znaju slušati i koje ne čekaju jedva da prestanemo pričati kako bi one nešto rekle. Takva je osoba ona, jer očigledno je da me cijele godine sluša i pomno prati moje želje kad svaki put točno pogodi s poklonom. Uvijek lijepo omotan, profinjen i s uvijek prigodnom porukom. O kojoj god da se prigodi radi, moja draga ima smisla za odabir. Čime li će me ove godine iznenaditi? Ona je svakako zaslužila posebno iznenađenje od mene. Želim vesele i opuštene blagdane u društvu najdražih.',
    },
    'dan-25': {
        'pobjednik-ime': 'Nikolina Udiljak',
        'pobjednik-text': 'Godine rada u Jedinici intenzivnog liječenja, preko 20,učinile su danak na njenoj koži, zglobovima, a o kralješnici da i ne govorim. Danonoćne smjene, svakodnevna buka respiratora i alarma ju ponekad toliko iscrpe, da iz noćne smjene ne može ni zaspati. Prati jr Čest osjećaj hladnoće, neispavanosti Svakodnevni susret sa smrti, suzama obitelji, bespomoći nije ju ubila. Svaki put se digne kao oraoo, kao gonjena srna ranjena. I dalje sa toliko empatije, strpljenja i ljubavi brino o najtežim bolesnicima, koji potpuno ovise o njoj u svim segmentima života i životnih procesa. Ni nesretni Covid nas ju uništio. Ujedinio nas je pokazao koliko svaka od nas ima vaznu ulogu u zdravstvenom sustavu. I nakon dugih godina dalje voli svoj poziv, radno mjesto, kokegd, alarme, respiratore, mikroorganizme, noći, hladnoću... Zar ne moja Mitar Marija. I baš zbog svega navedenog želim da ovaj Božić budes slobodna i provedes ga par dana sa nama. Daleko id posla i radnih obaveza. Dođi da te ugostimo i razmazimo, i da se osječaš kao kraljuce, relaksirans i opuštens. Sa ovih par dana biti češ kao da si spojena na punjač... Za dalje, za svaki novi dan i svaku noć..',
    },
    'dan-28': {
        'pobjednik-ime': 'Kristina Kušić',
        'pobjednik-text': 'Želim zaželjeti sve najljepše i najdivnije želje za Božić i Novu godinu osobi koja mi priprema jela za koja ja ni ne znam da će mi postati najdraža, mojoj najboljoj prijateljici Mihaeli. Ona obožava kuhati, i stalno priprema nešto novo. Ona mi uvijek kaže da sam njezin pokusni kunić, ali ja imam potpuno povjerenje u njen ukus i to koliko me dobro poznaje. Za vrijeme karantene, kad se nismo mogle viđati, ona bi mi samo došla na prozor, dodala kutiju pužića s cimetom ili kolača s kokosom, mahnula i otišla. To mi je tada bio najuzbudljiviji dio dana, i nikad nisam znala što će me taj dan dočekati u kutiji. Jedva čekam da se opet otvore restorani pa da se tamo družimo uz čašu vina kao nekada, a planiram i pozvati ju na večeru koju ću ja skuhati kao iznenađenje da joj se odužim za sve ;)',
    },
    'dan-29': {
        'pobjednik-ime': 'Kulaš Branka',
        'pobjednik-text': 'Ove godine moje dijete skromne želje ima<br>još vjeruje u čarolije staroga Djeda.<br>Želja joj je da budu blagdani bijeli.<br>Da sanjke jedne male joj Djedica ponese<br>i u vreći mnogo slatkiša donese.<br>Samo da znaš najviše čokoladne lizalice voli,<br>iako je zubić od puno čokolade ponekad zaboli.<br>I zadnje, ako ti vreća s poklonima nije puno teška,<br>ponesi i stvari da zajedno napravite snješka.<br>Da mu ne bude hladno šal, rukavice i kapicu<br>i molim te za njegov nos ne zaboravi mrkvicu.<br>Hvala ti dragi Djede znam da ćeš sigurno doći,<br>s keksima i toplim mlijekom pokraj peći moja curica čekati će te oko ponoći.',
    },
}

var formQuestionMap = {
    'dan-4': 'Bez kojeg make-up proizvoda ti i tvoja prijateljica ne izlazite iz kuće? Zaželi najiskreniju želju onoj s kojom otkrivaš sve beauty novitete.',
    'dan-7': 'Opiši najljepši trenutak s onom koja te uvijek inspirira. Zaželi joj najdivniju želju za Božić 2020.',
    'dan-8': 'Opišite nam najbolji shopping koji ste doživjeli s prijateljicom, kolegicom, sestričnom… Zaželite najiskreniju želju onoj bez koje shopping nije avantura.',
    'dan-9': 'Opiši najljepši trenutak s osobom koja te najbolje poznaje. Zaželi joj najiskreniju želju za ovaj Božić.',
    'dan-10': 'Opiši osobu koja je u tvojoj blizini u ovoj godini učinila neko dobro djelo. Zaželi sve najbolje onoj koja je svojim djelima ove godine učinila razliku!',
    'dan-11': 'Zaželite sve najbolje onom/onoj zbog kojih nikad niste ostali praznog želuca i ljubavi.',
    'dan-14': 'Opišite najbolji zdravi savjet koji vam je dao vaš zeleni prijatelj. Zaželite mu najiskreniju želju za Božić i pokažite koliko ste zahvalni što ga imate uz sebe.',
    'dan-15': 'Zaželi najbolje onoj koja brine za svoju i tvoju kožu i koja uvijek zna najnovije skin care proizvode bez kojih ne možete.',
    'dan-16': 'Zaželite sve najbolje osobi čije slastice bude najljepše blagdanske uspomene.',
    'dan-17': 'Opiši najveću frajericu ili frajera u svom društvu koji svako druženje začini svojim forama i idejama. Zaželite sve najbolje onoj osobi bez koje druženja nikad ne bi bila ista! ',
    'dan-18': 'Zaželite sve najbolje onoj osobi koja uvijek zna kako od običnog kuhanog vina ili kompota napraviti najukusnije božićno piće.',
    'dan-20': 'Prisjetite se situacije u kojoj vas je vaša heroina pazila kad je najviše trebalo. ',
    'dan-21': 'Prisjetite se omiljene zgode s onom ili onim tko sprema najbolju sarmu',
    'dan-22': 'Prisjetite se omiljene zgode s onom ili onim tko sprema najbolju sarmu',
    'dan-23': 'Opiši osobu koja te inspirira u tvojoj blizini. Zaželi sve najbolje svojoj dnevnoj dozi inspiracije.',
    'dan-24': 'Opiši najbolji dar koji si dobila i od koga. Zaželi sve najbolje onoj koja uvijek zna što pokloniti od srca',
    'dan-25': 'Zaželi sve najbolje onoj osobi s kojom bi volio/ljela proslaviti blagdane.',
    'dan-28': 'Zaželi najljepšu želju onoj osobi koja za tebe priprema tvoja najdraža jela',
    'dan-29': 'Zaželi najiskreniju želju najmlađim članovima svoje obitelji',
};

var checkDates = function (year, month, day) {
    if (year > 2020) {
        whitelistDays.forEach(function (day) {
            var button = document.getElementById('dan-' + day);
            button.classList.add("otvoren");
        });
    }

    if (year === 2020 && month === 12) {
        whitelistDays.forEach(function (whitelistDay) {
            if (day >= whitelistDay) {

                var button = document.getElementById('dan-' + whitelistDay);
                button.classList.add("otvoren");
            }
        });
    }
};

var clickReveal = function (dayMap) {
    whitelistDays.forEach(function (day) {
        var button = document.getElementById('dan-' + day);

        button.addEventListener('click', function (event) {
            var data = dayMap['dan-' + day];
            var dataWinners = winnerMap['dan-' + day];
            var dataIds = Object.keys(data);
            var dataWinnersIds = Object.keys(dataWinners);

            dataWinnersIds.forEach(function(dataId) {
                var wrapper = document.getElementById('winner-wrapper');
                var element = document.getElementById(dataId);

                if (dataWinners[dataId]) {
                    wrapper.classList.remove("d-none");
                    element.innerHTML = dataWinners[dataId];
                } else {
                    wrapper.classList.add("d-none");
                    element.innerHTML = dataWinners[dataId];
                }
            });
            
            dataIds.forEach(function (dataId) {
                var element = document.getElementById(dataId);

                if (dataId.indexOf('url') >= 0) {
                    element.src = data[dataId];
                } else {
                    element.innerHTML = data[dataId];
                }

                if (event.screenX > 0) {
                    document.getElementById('dan').scrollIntoView({behavior: 'smooth'});
                }
            });
        });
    });
};

var initializeLastDay = function (year, month, day) {
    var pastDays = [];

    if (year > 2020) {
        pastDays = whitelistDays;
    }

    if (year === 2020 && month === 12) {
        pastDays = whitelistDays.filter(function (whitelistDay) {
            if (day >= whitelistDay) {
                return whitelistDays;
            }
        });
    }

    var lastDay = pastDays.pop()
    
    if (lastDay) {
        document.getElementById('pitanje-text').innerHTML = formQuestionMap['dan-' + lastDay];
        document.getElementById('dan-' + lastDay).click();
    }
};

var submitForm = function() {
    var successMessage = 'Hvala na prijavi!'
    var form = document.getElementById('forma-element');
    var url = 'https://script.google.com/macros/s/AKfycbzeDANj4K7uEdEKM2UYTTMoXx0xy4p3DZPdMYPojNj5kPmYNXNg/exec';
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();

        var name = document.getElementById('ime');
        var email = document.getElementById('e-mail');
        var address = document.getElementById('adresa');
        var answer = document.getElementById('pitanje');
        var gdpr = document.getElementById('invalidCheck');
        var question = document.getElementById('pitanje-text');

        var body = {
            imePrezime: name.value,
            email: email.value,
            adresa: address.value,
            nagradnoPitanje: question.textContent,
            odgovor: answer.value,
            gdpr: gdpr.checked
        }

        jQuery.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: body
          }).success(function () {
            var parentElement = document.getElementById('forma-wrapper');
            var successElement = document.createElement('div');

            parentElement.removeChild(form);

            successElement.innerHTML = successMessage;
            successElement.classList.add("uspjeh");
            
            parentElement.appendChild(successElement);
          });
    })
};

var now = new Date();
var year = now.getFullYear();
var month = now.getMonth() + 1;
var day = now.getDate();

checkDates(year, month, day);
clickReveal(dayMap);
initializeLastDay(year, month, day);
submitForm();
