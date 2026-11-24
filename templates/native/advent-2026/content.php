<?php
$advent = require __DIR__ . '/inc/data.php';
$assets = $native_path . '/assets/unlock';
?>
<div class="unlock-december"
    style="--img-tree:url('<?php echo esc_url($assets . '/naslovna-bor-borko.webp'); ?>');--img-map:url('<?php echo esc_url($assets . '/adventski-vodic.webp'); ?>')">
    <?php include __DIR__ . '/template-parts/header.php'; ?>
    <main>
        <?php include __DIR__ . '/template-parts/tree.php'; ?>
        <?php include __DIR__ . '/template-parts/stories.php'; ?>
        <?php include __DIR__ . '/template-parts/guide.php'; ?>
    </main>
    <?php include __DIR__ . '/template-parts/footer.php'; ?>
    <dialog id="detail">
        <button class="close" id="closeDetail" aria-label="Zatvori prozor">×</button>
        <div id="detailBody"></div>
    </dialog>
</div>
<script type="application/json" id="advent-data"><?php echo wp_json_encode($advent, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?></script>
