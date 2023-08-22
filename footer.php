<footer id="footer-background">
    <div class="footer-center">
        <div class="footer-flex-row">
            <div class="footer-flex-col">
                <!-- ADRESS -->
                <div>
                    <div class="icons">
                        <iconify-icon class="icon" icon="mdi:map-marker"></iconify-icon>
                        <h5>Adresse</h5>
                    </div>
                    <a target="_blank" href="https://goo.gl/maps/ZbdRa6aoySkK1iWF9">Nørregade 53
                        <br>8000 Aarhus C</a>
                </div>
                <!-- CONTACT -->
                <div>
                    <div class="icons">
                        <iconify-icon class="icon" icon="material-symbols:phone-enabled" flip="horizontal">
                        </iconify-icon>
                        <h5>Kontakt</h5>
                    </div>
                    <a href="tel:+4586188277">+45 86188277</a>
                </div>
            </div>
            <!-- OPENING HOURS -->
            <div class="footer-flex-row">
                <div class="flex-col">
                    <div class="icons">
                        <iconify-icon class="icon" icon="material-symbols:calendar-month"></iconify-icon>
                        <h5>Åbningstider</h5>
                    </div>
                    <div class="flex-row">
                        <table>
                            <tr class="opening-hours-text left-alignment">
                                <th>Mandag:</th>
                                <th>Tirsdag:</th>
                                <th>Onsdag:</th>
                                <th>Torsdag:</th>
                                <th>Fredag:</th>
                                <th>Lørdag:</th>
                                <th>Søndag:</th>
                            </tr>
                        </table>
                        <table>
                            <tr class="opening-hours-text left-alignment">
                                <th>09.00</th>
                                <th>12.00</th>
                                <th>09.00</th>
                                <th>12.00</th>
                                <th>09.00</th>
                                <th>08.00</th>
                                <th>Lukket</th>
                            </tr>
                        </table>
                        <table>
                            <tr class="opening-hours-text">
                                <th> - </th>
                                <th> - </th>
                                <th> - </th>
                                <th> - </th>
                                <th> - </th>
                                <th> - </th>
                            </tr>
                        </table>
                        <table>
                            <tr class="opening-hours-text">
                                <th>17.30</th>
                                <th>17.30</th>
                                <th>17.30</th>
                                <th>18.00</th>
                                <th>18.00</th>
                                <th>18.00</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
<img class="footer-logo"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/antontzannis-logo-red.png" />
        <p class="copyright">©2023 m.wennerwald og c.nørgaard | Frisør Anton Tzannis.</p>
    </div>

</footer>

<?php wp_footer(); ?>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . 'script.js', array( 'jquery' ), 1.1, true); ?>
</body>

</html>
<!-- HVOR SKAL REFERANCEN VÆRE? -->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>