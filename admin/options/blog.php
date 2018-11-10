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
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Blog" to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'blog_archive_layout',
            'type' => 'select',
            'options' => array (
                'list' => 'List',
                'grid' => 'Grid',
                'timeline' => 'Timeline',
            ),
            'title' => __('Blog Archive Layout','redux-framework-demo'),
            'subtitle'  => __('Layout for the blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select the layout from dropdown as <strong>List</strong>, <strong>Grid</strong> or <strong>Timeline</strong>. Default <strong>List</strong> is selected.','redux-framework-demo'),
            'default' => 'list',
            'hint' => array(
                'title'   => __('What is blog archive layout?','redux-framework-demo'),
                'content' => __('Blog archive layout means how the blog content display in the browser i.e list wise,
				grid wise or timeline wise.','redux-framework-demo'),
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
            'required' => array('blog_archive_layout','equals','grid'),
            'hint' => array(
                'title'   => __('Grid Layout # of Columns','redux-framework-demo'),
                'content' => __('Grid Layout # of Columns','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_excerpt',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Show Excerpt','redux-framework-demo'),
            'subtitle'  => __('Enable the excerpt.', 'redux-framework-demo'),
			 'desc' => __('Select <strong>YES</strong> to display the excerpt and <strong>NO</strong> to hide the excerpt. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'hint' => array(
                'title'   => __('What is excerpt?','redux-framework-demo'),
                'content' => __('An excerpt term is used for article summary with a link to the whole entry. To create excerpts for a darlic post is by entering the summary of an article in excerpt field on post edit screen. ','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_excerpt_length',
            'type' => 'text',
            'title' => __('Excerpt Length','redux-framework-demo'),
			'subtitle'  => __('Define the excerpt length.', 'redux-framework-demo'),
            'desc' => __('Enter the number of words.','redux-framework-demo'),
            'default' => '55',
            'required' => array('blog_archive_excerpt','equals','1')
        ),
        array (
            'id' => 'blog_archive_featured_image_enable',
            'type' => 'switch',
            'title' => __('Featured Image','redux-framework-demo'),
            'subtitle'  => __('Enable the featured image on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the featured image and <strong>NO</strong> to hide the featured image. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is featured image?','redux-framework-demo'),
                'content' => __('A featured image represents the contents, mood, or theme of a post or page. Posts and pages can have a single featured image, which many themes and tools can use to enhance the presentation of your site.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_title_enable',
            'type' => 'switch',
            'title' => __('Title','redux-framework-demo'),
            'subtitle'  => __('Enable the title on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the blog archive title and <strong>NO</strong> to hide the blog archive title. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is blog archive title?','redux-framework-demo'),
                'content' => __('Blog archive titles are the first part of your blog post that your readers will see and the part that’s responsible for getting them to click through and read the rest.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_title_link_enable',
            'type' => 'switch',
            'title' => __('Title Link','redux-framework-demo'),
            'subtitle'  => __('Enable the title link on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the blog archive page and <strong>NO</strong> to hide the blog archive page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'required' => array('blog_archive_title_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is title link on blog archive page ?','redux-framework-demo'),
                'content' => __('Title Link on blog archive page link to another page of  same blog or another blog or link to another web page.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_read_more_enable',
            'type' => 'switch',
            'title' => __('Read More Link','redux-framework-demo'),
            'subtitle'  => __('Enable the read more link on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to enable the read more link on blog archive page and <strong>NO</strong> to hide the read more link on blog archive page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is read more link ?','redux-framework-demo'),
                'content' => __('Read More link is a simple way to keep longer posts from cluttering up your blog page, giving you more control over how much content is displayed to visitors.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_read_more_text',
            'type' => 'text',
            'title' => __('Read More Text','redux-framework-demo'),
            'desc' => __('Enter the text.','redux-framework-demo'),
            'default' => 'Read More..',
            'required' => array('blog_archive_read_more_enable','equals','1'),
        ),
        array (
            'id' => 'blog_archive_date_meta_enable',
            'type' => 'switch',
            'title' => __('Show Date','redux-framework-demo'),
            'subtitle'  => __('Enable the date on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the date on blog archive page and <strong>NO</strong> to hide the date on blog archive page. Default value is <strong>YES</strong>.','redux-framework-demo'),
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
            'title' => __('Date Format','redux-framework-demo'),
            'subtitle'  => __('Date format on blog archive page.', 'redux-framework-demo'),
            'desc' => __('F describe the full name for the month, j describes the day of the month and Y describes the year in 4 digits. for e.g. F j, Y - November 6, 2018 <a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date and Time</a>','redux-framework-demo'),
            'default' => 'F j, Y',
            'required' => array('blog_archive_date_meta_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is date format?','redux-framework-demo'),
                'content' => __('Date format is a standard way to express a numeric calendar date that eliminates ambiguity.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_author_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Author Meta','redux-framework-demo'),
            'subtitle'  => __('Enables author meta on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the author meta on blog archive page and <strong>NO</strong> to hide the author meta on blog archive page. Default value is <strong>YES</strong>.','redux-framework-demo'),
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
            'default' => false,
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