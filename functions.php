<?php 

// theme scripts file link
require_once('inc/theme_scripts.php');

// theme default tag 
require_once('inc/theme-default.php');

// bs4navwalker file
require_once('inc/bs4navwalker.php');

// sidebar widgets
require_once('inc/widgets.php');

// theme options
require_once('inc/theme-options.php');

//plugin activation
require_once('inc/plugin-activation.php');

// TGMA 
require_once('inc/class-tgm-plugin-activation.php');


function cleaningcompany_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input class="form-control" placeholder="'
        /* Replace 'halim' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            .( 'Name' )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" class="form-control" placeholder="Email"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder="Website" class="form-control" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}
add_filter( 'comment_form_default_fields', 'cleaningcompany_comment_placeholders' );

function placeholder_comment_form_field($fields) {
    $replace_comment =('Message');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' .( 'Message' ) .
    '</label><textarea class="form-control" id="comment" name="comment" cols="45" rows="6" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field', 20 );