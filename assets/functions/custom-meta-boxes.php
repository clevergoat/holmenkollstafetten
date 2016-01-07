<?php 

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Sponsorlenke', 'textdomain' ),
        'post_types' => 'sponsors',
        'fields'     => array(
            array(
                'id'   => 'url',
                'name' => __( 'URL', 'textdomain' ),
                'type' => 'url',
            ),
        ),
    );

    $meta_boxes[] = array(
        'title'      => __( 'Etappetittel', 'textdomain' ),
        'post_types' => 'etapper',
        'fields'     => array(
            array(
                'id'   => 'url',
                'name' => __( 'URL', 'textdomain' ),
                'type' => 'url',
            ),
        ),
    );
    return $meta_boxes;
}