<h2 class="post-comments__head">COMMENTS (<?php echo get_comments_number(); ?>)</h2>
<?php
    $form_args = array(
        'id_form'           => '',
        'class_form'        => 'post-comments__comment-form',
        'id_submit'         => '',
        'class_submit'      => 'post-comments__submit-comment',
        'name_submit'       => '',
        'title_reply'       => '',
        'title_reply_to'    => '',
        'cancel_reply_link' => '',
        'label_submit'      => __( 'Post' ),
        'format'            => 'xhtml',

        'comment_field' =>  '<textarea class="post-comments__comment-field" cols="45" rows="8" aria-required="true">' .
        '</textarea>',

        'must_log_in' => '',

        'logged_in_as' => '',

        'comment_notes_before' => '',

        'comment_notes_after' => '',

        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    );

    comment_form($form_args);
    
    //Get only the approved comments 
    $args = array(
        'status' => 'approve',
        'post_id' => get_the_ID()
    );

    // The comment query
    $comments_query = new WP_Comment_Query;
    $comments = $comments_query->query( $args );

    // Comment Loop
    if ( $comments ) {
        foreach ( $comments as $comment ) {
            $author_img = get_avatar( $comment, 32, '', '', array( "class" => "comment__avatar" ) );
?>
    <div class="post-comments__comment">
        <?php echo $author_img; ?>
        <div class="comment__container">
            <h4 class="comment__author"><?php echo $comment->comment_author; ?></h4>
            <p class="comment__content"><?php echo $comment->comment_content; ?></p>
        </div>
    </div>    
<?php
        }
    } else {
        echo '<p class="comment__content">No comments found.</p>';
    }
?>