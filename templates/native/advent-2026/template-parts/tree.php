<section class="stage tree" id="tree" aria-labelledby="treeTitle">
    <div class="hero-copy">
        <p class="eyebrow">Borko &amp; Presshaus</p>
        <h1 id="treeTitle">Christmas<br>Unlocked</h1>
        <p class="hand">Svaki dan nova priča,<br>ideja i inspiracija.</p>
        <p class="intro">Od malih poklona do velikih zimskih planova. Otključaj prosinac na svim Presshaus portalima.</p>
    </div>
    <div class="tree-scene">
        <div class="note">Klikni na kuglicu<br>i otkrij novu priču</div>
        <div id="ornaments"></div>
        <div class="tree-chat">
            <div class="speech">Hej, ja sam Borko!<br>Što ti treba za<br>ljepši prosinac?</div>
            <button class="pill" id="askHero" type="button" aria-controls="chat" aria-expanded="false">Pitaj Borka ↗</button>
        </div>
        <?php include __DIR__ . '/chat.php'; ?>
    </div>
</section>
<div class="categories" id="categories" role="group" aria-label="Kategorije"></div>
