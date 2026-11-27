<aside class="chat" id="chat" aria-label="Razgovor s Borkom">
    <div class="chat-head">
        <span style="font-size:30px" aria-hidden="true">✧</span>
        <div><strong>Borko</strong><small>TVOJ BLAGDANSKI POMOĆNIK · DEMO</small></div>
        <button class="close" id="closeChat" type="button" aria-label="Zatvori razgovor">×</button>
    </div>
    <div class="messages" id="messages" aria-live="polite">
        <div class="bubble">Hej! Ja sam Borko. Znam ponešto o poklonima, finim zalogajima i zimskim izletima. Što tražimo? 🎄</div>
    </div>
    <div class="suggestions">
        <button type="button" data-query="Poklon za nekoga tko voli kuhati">Poklon za kuhara</button>
        <button type="button" data-query="Jednostavan recept za kekse">Božićni keksi</button>
        <button type="button" data-query="Kamo na advent s djecom">Izlet s djecom</button>
        <button type="button" data-query="Kako urediti mali stan">Mali stan</button>
    </div>
    <form id="chatForm">
        <input id="question" placeholder="Pitaj me nešto o blagdanima…" autocomplete="off" aria-label="Pitanje Borku" maxlength="500">
        <button class="send" aria-label="Pošalji pitanje">↑</button>
    </form>
    <div class="chat-disclaimer">Demo razgovor s oglednim preporukama.</div>
</aside>
