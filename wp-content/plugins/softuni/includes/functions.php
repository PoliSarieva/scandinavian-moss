<?php
//File for generic functions


// /**
//  * Custom Shortcode to show the title by ID
//  * 
//  * @return void
//  */

//  function show_post_title_by_id( $atts ) {

//     $shortcode_atts = shortcode_atts(array(
//         'id' => 0,
//     ), $atts );

//     $title = '';

//     if ( ! empty ( $shortcode_atts['id'] ) ) {
//         $title = get_the_title( $shortcode_atts['id'] );
//     }

//     return $title;
//  }
//  add_shortcode( 'show_post_title' , 'show_post_title_by_id' );

 /**
  * Function that handles the AJAX call and add a like to the post
  *
  *@return void
  */

 function moss_like() {
    if ( empty( $_POST['like'] ) ) {
        return;
    }

    $post_id = esc_attr( $_POST['like'] );

    $likes_number = get_post_meta( $post_id, 'likes', true );

    if ( empty( $likes_number ) ) {
        $likes_number = 0;
    }

    update_post_meta( $post_id, 'likes', $likes_number + 1 );
    }

    add_action( 'wp_ajax_nopriv_moss_like', 'moss_like' );
    add_action( 'wp_ajax_moss_like', 'moss_like' );