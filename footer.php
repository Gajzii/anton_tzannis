<footer>
    <div id="footer-background">

        <div class="footer-flex-row">
            <div class="footer-flex-col">
                <!-- ADRESS -->
                <div class="icons">
                    <iconify-icon class="icon" icon="mdi:map-marker"></iconify-icon>
                    <h4>Adresse</h4>
                </div>
                <a class="footer-text" target="_blank" href="https://goo.gl/maps/ZbdRa6aoySkK1iWF9">Nørregade 53
                    <br>8000 Aarhus C</a>
                <!-- CONTACT -->
                <div class="icons">
                    <iconify-icon class="icon" icon="material-symbols:phone-enabled" flip="horizontal"></iconify-icon>
                    <h4>Kontakt</h4>
                </div>
                <a class="footer-text" href="tel:+4586188277">+45 86188277</a>
            </div>
            <!-- OPENING HOURS -->
            <div class="footer-flex-row">
                <div class="flex-col">
                    <div class="icons">
                        <iconify-icon class="icon" icon="material-symbols:calendar-month"></iconify-icon>
                        <h4>Åbningstider</h4>
                    </div>
                    <div class="flex-col">
                        <table>
                            <tr class="opening-hours-text">
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
                            <tr class="opening-hours-text">
                                <th>09.00</th>
                                <th>12.00</th>
                                <th>09.00</th>
                                <th>12.00</th>
                                <th>09.00</th>
                                <th>08.00</th>
                                <th> Lukket</th>
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
                                <th></th>
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
                                <th></th>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>




</footer>

<?php wp_footer(); ?>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . 'script.js', array( 'jquery' ), 1.1, true); ?>
</body>

</html>