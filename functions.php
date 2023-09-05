function ijab_category_image_single_product() {
    $terms = get_the_terms( $post->ID, 'product_cat' );
    foreach ( $terms as $term ){
        $category_name = $term->name;
        $category_thumbnail = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
        $image = wp_get_attachment_url($category_thumbnail);
        echo '<a href="'.get_term_link($term->term_id).'"><img src="'.$image.'" alt="'.$category_name.'"></a>';
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'ijab_category_image_single_product' );
