<?php function ti_custom_javascript() {
    ?>
        <script>
          // your javscript code goes here
function onClickMenu() {
  document.getElementById("menu").classList.toggle("change");

  document.querySelector(".nav_list").classList.toggle("change");}
        </script>
    <?php
}
add_action('wp_head', 'ti_custom_javascript'); 
?>