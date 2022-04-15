<?php
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'any' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );
remove_theme_support('comments');
remove_theme_support('html5', ['comment-list', 'comment-form']);
remove_theme_support('comment-list');
remove_theme_support('comment-form');
remove_theme_support('comments');