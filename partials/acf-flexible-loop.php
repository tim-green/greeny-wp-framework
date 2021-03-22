<?php
/*
  ACF Flexible Content - The Actual Loop
*/


// ID of the current item in the WordPress Loop
$id = get_the_ID();

// check if the flexible content field has rows of data
if ( have_rows( 'page_builder', $id ) ) :

    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'page_builder', $id ) ) : the_row();

        get_template_part( 'partials/flexible-layouts/' . get_row_layout() );

    endwhile;

elseif ( get_the_content() ) :

    // no layouts found

endif;
?>