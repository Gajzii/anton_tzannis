<?php
    $monday = get_field('opening_monday', 'options');
    $tuesday = get_field('opening_tuesday', 'options');
    $wednesday = get_field('opening_wednesday', 'options');
    $thursday = get_field('opening_thursday', 'options');
    $friday = get_field('opening_friday', 'options');
    $saturday = get_field('opening_saturday', 'options');
    $sunday = get_field('opening_sunday', 'options');
?>

<div class="opening-hours-section page-margin" id="opening-hours-section">
    <!-- <h2 class="goldtext">Åbningstider</h2> -->
    <div class="opening-hours-container">
        <div class="monday">
            <h2 class="opening-hours-days goldtext">Mandag</h2>
            <p><?= $monday; ?></p>
        </div>
        <div class="tuesday">
            <h2 class="opening-hours-days goldtext">Tirsdag</h2>
            <p><?= $tuesday; ?></p>
        </div>
        <div class="wednesday">
            <h2 class="opening-hours-days goldtext">Onsdag</h2>
            <p><?= $wednesday; ?></p>
        </div>
        <div class="thursday">
            <h2 class="opening-hours-days goldtext">Torsdag</h2>
            <p><?= $thursday; ?></p>
        </div>
        <div class="friday">
            <h2 class="opening-hours-days goldtext">Fredag</h2>
            <p><?= $friday; ?></p>
        </div>
        <div class="saturday">
            <h2 class="opening-hours-days goldtext">Lørdag</h2>
            <p><?= $saturday; ?></p>
        </div>
        <div class="sunday">
            <h2 class="opening-hours-days goldtext">Søndag</h2>
            <p><?= $sunday; ?></p>
        </div>
    </div>
</div>
</div>
</div>