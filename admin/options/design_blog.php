<?php
/*********************************************************************************************
 *
 *  Blog settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'dashicons dashicons-grid-view',
    'title'     => __('Blog Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'blog_archive',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Blog Archive Page Settings</h3>',
        ),
        array (
            'id' => 'blog_archive_layout',
            'type' => 'select',
            'options' => array (
                'list' => 'List',
                'grid' => 'Grid',
                'Timeline' => 'Timeline',
            ),
            'title' => __('Blog Archive Layout','redux-framework-demo'),
            'subtitle'  => __('Layout for the blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select the layout for the blog archive page.','redux-framework-demo'),
            'default' => 'list',
            'hint' => array(
                'title'   => __('Blog Archive Layout','redux-framework-demo'),
                'content' => __('Blog Archive Layout','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_grid_columns',
            'type' => 'select',
            'options' => array (
                2 => '2',
                3 => '3',
                4 => '4',
            ),
            'title' => __('Grid Layout number of Columns','redux-framework-demo'),
            'subtitle'  => __('Grid Layout number of Columns.', 'redux-framework-demo'),
            'desc' => __('Select whether to display the grid layout in 2, 3 or 4 columns.','redux-framework-demo'),
            'default' => '3',
            'required' => array('blog_archive_layout','equals','Grid'),
            'hint' => array(
                'title'   => __('Grid Layout # of Columns','redux-framework-demo'),
                'content' => __('Grid Layout # of Columns','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_content_length',
            'type' => 'select',
            'options' => array (
                'Excerpt' => 'Excerpt',
                'Full Content' => 'Full Content',
            ),
            'title' => __('Excerpt or Full Blog Content','redux-framework-demo'),
            'subtitle'  => __('Display Excerpt or Full Blog Content on Blog pages.', 'redux-framework-demo'),
            'desc' => __('Choose from list','redux-framework-demo'),
            'default' => 'Excerpt',
            'hint' => array(
                'title'   => __('Excerpt or Full Blog Content','redux-framework-demo'),
                'content' => __('Excerpt or Full Blog Content','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_excerpt_length',
            'type' => 'text',
            'title' => __('Excerpt Length','redux-framework-demo'),
            'subtitle'  => __('Number of words you want to show in the post excerpts.', 'redux-framework-demo'),
            'desc' => __('Enter the number of words.','redux-framework-demo'),
            'default' => '55',
            'required' => array('blog_archive_content_length','equals','Excerpt'),
            'hint' => array(
                'title'   => __('Excerpt Length','redux-framework-demo'),
                'content' => __('Excerpt Length','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_featured_image_enable',
            'type' => 'switch',
            'title' => __('Featured Image On Blog Archive Page','redux-framework-demo'),
            'subtitle'  => __('Enables Featured Image On Blog Archive Page.', 'redux-framework-demo'),
            'desc' => __('YES to display featured images on blog archive page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Featured Image On Blog Archive Page','redux-framework-demo'),
                'content' => __('Featured Image On Blog Archive Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_read_more_enable',
            'type' => 'switch',
            'title' => __('Enable Read More Link On Blog Archive Page','redux-framework-demo'),
            'subtitle'  => __('Enables Read More Link On Blog Archive Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Read More Link on blog archive page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Read More Link On Blog Archive Page','redux-framework-demo'),
                'content' => __('Show Read More Link On Blog Archive Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_read_more_text',
            'type' => 'text',
            'title' => __('Read More Text','redux-framework-demo'),
            'desc' => __('Enter the text.','redux-framework-demo'),
            'default' => 'Read More..',
            'required' => array('blog_archive_read_more_enable','equals','1'),
            'hint' => array(
                'title'   => __('Read More Text','redux-framework-demo'),
                'content' => __('Read More Text','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_date_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Date On Blog Archive Page','redux-framework-demo'),
            'subtitle'  => __('Enables Date On Blog Archive Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Date on blog archive page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Date On Blog Archive Page','redux-framework-demo'),
                'content' => __('Show Date On Blog Archive Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_date_format',
            'type' => 'text',
            'title' => __('Date Format On Blog Archive Page','redux-framework-demo'),
            'subtitle'  => __('Select Blog Archive Date Format - Month,Year.', 'redux-framework-demo'),
            'desc' => __('<a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date and Time</a>','redux-framework-demo'),
            'default' => 'm, Y',
            'required' => array('blog_archive_date_meta_enable','equals','1'),
            'hint' => array(
                'title'   => __('Blog Archive Page Date Format','redux-framework-demo'),
                'content' => __('Blog Archive Page Date Format','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_author_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Author Meta On Blog Archive Page','redux-framework-demo'),
            'subtitle'  => __('Enables Author Meta On Blog Archive Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Author on blog archive page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Author Meta On Blog Archive Page','redux-framework-demo'),
                'content' => __('Show Author Meta On Blog Archive Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_categories_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Category Meta On Blog Archive Page','redux-framework-demo'),
            'subtitle'  => __('Enables Category Meta On Blog Archive Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Category on blog archive page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Category Meta On Blog Archive Page','redux-framework-demo'),
                'content' => __('Show Category Meta On Blog Archive Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_tags_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Tags Meta On Blog Archive Page','redux-framework-demo'),
            'subtitle'  => __('Enables Tags Meta On Blog Archive Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Tags on blog archive page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Tags Meta On Blog Archive Page','redux-framework-demo'),
                'content' => __('Show Tags Meta On Blog Archive Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Blog Single Page Settings</h3>',
        ),
        array (
            'id' => 'blog_single_featured_image_enable',
            'type' => 'switch',
            'title' => __('Featured Image On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Enables Featured Image On Blog Single Page.', 'redux-framework-demo'),
            'desc' => __('YES to display featured images on blog Single page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Featured Image On Blog Single Page','redux-framework-demo'),
                'content' => __('Featured Image On Blog Single Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_date_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Date On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Enables Date On Blog Single Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Date on blog Single page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Date On Blog Single Page','redux-framework-demo'),
                'content' => __('Show Date On Blog Single Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_date_format',
            'type' => 'text',
            'title' => __('Date Format On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Select Blog Single Date Format - Month,Year.', 'redux-framework-demo'),
            'desc' => __('<a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date and Time</a>','redux-framework-demo'),
            'default' => 'm, Y',
            'required' => array('blog_single_date_meta_enable','equals','1'),
            'hint' => array(
                'title'   => __('Blog Single Page Date Format','redux-framework-demo'),
                'content' => __('Blog Single Page Date Format','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_author_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Author Meta On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Enables Author Meta On Blog Single Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Author on blog Single page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Author Meta On Blog Single Page','redux-framework-demo'),
                'content' => __('Show Author Meta On Blog Single Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_categories_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Category Meta On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Enables Category Meta On Blog Single Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Category on blog Single page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Category Meta On Blog Single Page','redux-framework-demo'),
                'content' => __('Show Category Meta On Blog Single Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_tags_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Tags Meta On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Enables Tags Meta On Blog Single Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Tags on blog Single page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Tags Meta On Blog Single Page','redux-framework-demo'),
                'content' => __('Show Tags Meta On Blog Single Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_comments_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Comments On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Enables Comments On Blog Single Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Comments on blog Single page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Comments On Blog Single Page','redux-framework-demo'),
                'content' => __('Show Comments On Blog Single Page','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_social_icons_enable',
            'type' => 'switch',
            'title' => __('Enable Social Icons On Blog Single Page','redux-framework-demo'),
            'subtitle'  => __('Enables Social Icons On Blog Single Page.', 'redux-framework-demo'),
            'desc' => __('YES to display Social Icons on blog Single page.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('Show Social Icons On Blog Single Page','redux-framework-demo'),
                'content' => __('Show Social Icons On Blog Single Page','redux-framework-demo'),
            )
        ),
    )
);