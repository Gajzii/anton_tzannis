<div class="modal" id="productsPopupModal">
    <div class="products-popup" id="productsPopup">
        <div class="products-popup-heading">
            <button type="button" class="products-close-popup goldtext" onclick="closeForm()">&#10006;</button>
            <h3 class="goldtext center"><?= $product_name; ?></h3>
        </div>

        <div class="products-slideshow">

            <?php if($images): ?>

            <?php foreach( $images as $image ): ?>
            <img class="productsSlideImg" src="<?php echo $image['url']; ?>" />
            <?php endforeach; ?>


            <button class="slideshow-arrow-left goldtext" onclick="plusDivs(-1)">&#10094;</button>
            <button class="slideshow-arrow-right goldtext" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>
</div>
<?php endif; ?>