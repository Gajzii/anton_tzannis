<?php
    $monday = get_field('opening_monday', 'options');
    $tuesday = get_field('opening_tuesday', 'options');
    $wednesday = get_field('opening_wednesday', 'options');
    $thursday = get_field('opening_thursday', 'options');
    $friday = get_field('opening_friday', 'options');
    $saturday = get_field('opening_saturday', 'options');
    $sunday = get_field('opening_sunday', 'options');
?>

<div class="opening-hours-section opening-hours-section-left">
    <div class="opening-hours-section opening-hours-section-right" id="opening-hours-section">
        <div class="opening-hours-section-inside">
            <h2 class="goldtext">Åbningstider</h2>
            <div class="opening-hours-container">
                <div class="monday">
                    <p class="opening-hours-days">Mandag</p>
                    <p><?= $monday; ?></p>
                </div>
                <div class="tuesday">
                    <p class="opening-hours-days">Tirsdag</p>
                    <p><?= $tuesday; ?></p>
                </div>
                <div class="wednesday">
                    <p class="opening-hours-days">Onsdag</p>
                    <p><?= $wednesday; ?></p>
                </div>
                <div class="thursday">
                    <p class="opening-hours-days">Torsdag</p>
                    <p><?= $thursday; ?></p>
                </div>
                <div class="friday">
                    <p class="opening-hours-days">Fredag</p>
                    <p><?= $friday; ?></p>
                </div>
                <div class="saturday">
                    <p class="opening-hours-days">Lørdag</p>
                    <p><?= $saturday; ?></p>
                </div>
                <div class="sunday">
                    <p class="opening-hours-days">Søndag</p>
                    <p><?= $sunday; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>