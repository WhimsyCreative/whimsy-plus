<?php

// include the custom post type class
include_once( WHIMSY_EXTEND_INC . 'post-types.php' );


// create a Portfolio custom post type
$project = new CPT( array(
    'post_type_name' => 'portfolio',
    'singular' => 'Project',
    'plural' => 'Portfolio',
    'slug' => 'project'
    ),
    array(
    'supports' => array('title', 'excerpt', 'revisions', 'editor', 'thumbnail', 'comments')
) );


// create a genre taxonomy
$project->register_taxonomy('type');


// define the columns to appear on the admin edit screen
$project->columns(array(
    'cb' => '<input type="checkbox" />',
    'title' => __('Title'),
    'type' => __('Type'),
    'date' => __('Date')
));

// make rating and price columns sortable
$project->sortable(array(
    'link' => array('link', true)
));


// use "pages" icon for post type
$project->menu_icon("dashicons-portfolio");