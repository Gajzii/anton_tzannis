<div class="modal" id="productsPopupModal">
        <div class="products-popup" id="productsPopup">
            <div class="products-popup-heading">
                <button type="button" class="products-close-popup goldtext" onclick="closeForm()">&#10006;</button>
                <h3 class="goldtext center">$product_name</h3>
            </div>

            <div class="products-slideshow">
                <?php if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>


                <button class="slideshow-arrow-left goldtext" onclick="plusDivs(-1)">&#10094;</button>
                <button class="slideshow-arrow-right goldtext" onclick="plusDivs(1)">&#10095;</button>
            </div>
        </div>
    </div>