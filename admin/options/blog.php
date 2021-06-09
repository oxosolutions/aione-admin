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
                'grid' => 'Grid',
                'list' => 'List',
                'timeline' => 'Timeline',
            ),
            'title' => __('Blog Archive Layout','redux-framework-demo'),
            'subtitle'  => __('Layout for the blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select the layout from dropdown as <strong>List</strong>, <strong>Grid</strong> or <strong>Timeline</strong>. Default <strong>List</strong> is selected.','redux-framework-demo'),
            'default' => 'grid',
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
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                5 => '5',
            ),
            'title' => __('Grid Layout number of Columns','redux-framework-demo'),
            'subtitle'  => __('Grid Layout number of Columns.', 'redux-framework-demo'),
            'desc' => __('Select whether to display the grid layout in 2, 3, 4 or 5 columns.','redux-framework-demo'),
            'default' => '2',
            'required' => array('blog_archive_layout','equals','grid'),
            'hint' => array(
                'title'   => __('Grid Layout # of Columns','redux-framework-demo'),
                'content' => __('Grid Layout # of Columns','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_left_sidebar_enable',
            'type' => 'switch',
            'title' => __('Left Sidebar','redux-framework-demo'),
            'subtitle'  => __('Enable the Left Sidebar on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the left sidebar and <strong>NO</strong> to hide the left sidebar. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'hint' => array(
                'title'   => __('What is left sidebar?','redux-framework-demo'),
                'content' => __('A left sidebar is a user interface element that displays a list of choices. It typically appears as a column to the left vertical of the main content.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_right_sidebar_enable',
            'type' => 'switch',
            'title' => __('Right Sidebar','redux-framework-demo'),
            'subtitle'  => __('Enable the Right Sidebar on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the right sidebar and <strong>NO</strong> to hide the right sidebar. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is right sidebar?','redux-framework-demo'),
                'content' => __('A right sidebar is a user interface element that displays a list of choices. It typically appears as a column to the right vertical of the main content.','redux-framework-demo'),
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
            'default' => true
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
            'title' => __('Author Meta','redux-framework-demo'),
            'subtitle'  => __('Enable author meta on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the author meta on blog archive page and <strong>NO</strong> to hide the author meta on blog archive page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is author meta?','redux-framework-demo'),
                'content' => __('Meta elements are typically used to specify page description, keywords, author of the document, last modified, and other metadata. The metadata can be used by browsers (how to display content or reload page), search engines (keywords), or other web services.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_categories_meta_enable',
            'type' => 'switch',
            'title' => __('Category Meta','redux-framework-demo'),
            'subtitle'  => __('Enable category meta on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the category meta on blog archive page and <strong>NO</strong> to hide the category meta on blog archive page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is meta category?','redux-framework-demo'),
                'content' => __('Meta category allow you to add category meta tags and title for category. It adds input fields to the category and other term administration interface to enter the meta values. It provides functions to retrive / create / update / delete the category and terms meta. It can be used to add meta to custom taxonomies (terms).','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_tags_meta_enable',
            'type' => 'switch',
            'title' => __('Meta Tags','redux-framework-demo'),
            'subtitle'  => __('Enable meta tags on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the meta tags on blog archive page and <strong>NO</strong> to hide the meta tags on blog archive page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'hint' => array(
                'title'   => __('What is Meta Tags?','redux-framework-demo'),
                'content' => __('Meta tags are snippets of text that describe a page’s content; the meta tags don’t appear on the page itself, but only in the page’s code.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_archive_social_icons_enable',
            'type' => 'switch',
            'title' => __('Social Icons','redux-framework-demo'),
            'subtitle'  => __('Enable social icons on blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the social icons on blog single page and <strong>NO</strong> to hide the social icons on blog archive page. Default value is <strong>NO</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'hint' => array(
                'title'   => __('What are Social Icons?','redux-framework-demo'),
                'content' => __(' The social icons displays small graphics linked to your social media accounts, in any widget area of your theme.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Blog Single Page" to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'blog_single_left_sidebar_enable',
            'type' => 'switch',
            'title' => __('Left Sidebar','redux-framework-demo'),
            'subtitle'  => __('Enable the Left Sidebar on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the left sidebar and <strong>NO</strong> to hide the left sidebar. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'hint' => array(
                'title'   => __('What is left sidebar?','redux-framework-demo'),
                'content' => __('A left sidebar is a user interface element that displays a list of choices. It typically appears as a column to the left vertical of the main content.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_right_sidebar_enable',
            'type' => 'switch',
            'title' => __('Right Sidebar','redux-framework-demo'),
            'subtitle'  => __('Enable the Right Sidebar on blog archive page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the right sidebar and <strong>NO</strong> to hide the right sidebar. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is right sidebar?','redux-framework-demo'),
                'content' => __('A right sidebar is a user interface element that displays a list of choices. It typically appears as a column to the right vertical of the main content.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_featured_image_enable',
            'type' => 'switch',
            'title' => __('Featured Image','redux-framework-demo'),
            'subtitle'  => __('Enable featured image On blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the featured image on blog single page and <strong>NO</strong> to hide the featured image on blog single page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is Featured Image?','redux-framework-demo'),
                'content' => __('A featured image is one that was set using the special menu option in the post editor in your Dashboard. This image is not necessarily inserted into the post (representative image for posts, pages, or custom post types); rather, it’s attached to the post to then be used as your theme or a plugin dictates.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_date_meta_enable',
            'type' => 'switch',
            'title' => __('Enable Date','redux-framework-demo'),
            'subtitle'  => __('Enable date On blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the date on blog single page and <strong>NO</strong> to hide the date on blog single page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true
        ),
        array (
            'id' => 'blog_single_date_format',
            'type' => 'text',
            'title' => __('Date Format','redux-framework-demo'),
            'subtitle'  => __('Date format on blog single page.', 'redux-framework-demo'),
            'desc' => __('m describe the numeric value for the month, Y describes the year in 4 digits. for e.g. m, Y -  11, 2018 <a href=\'http://codex.wordpress.org/Formatting_Date_and_Time\'>Formatting Date and Time</a>','redux-framework-demo'),
            'default' => 'm, Y',
            'required' => array('blog_single_date_meta_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is date format?','redux-framework-demo'),
                'content' => __('Date format is a standard way to express a numeric calendar date that eliminates ambiguity.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_author_meta_enable',
            'type' => 'switch',
            'title' => __('Author Meta','redux-framework-demo'),
            'subtitle'  => __('Enable author meta On blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the author meta on blog single page and <strong>NO</strong> to hide the author meta on blog single page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is author meta?','redux-framework-demo'),
                'content' => __('Meta elements are typically used to specify page description, keywords, author of the document, last modified, and other metadata. The metadata can be used by browsers (how to display content or reload page), search engines (keywords), or other web services.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_categories_meta_enable',
            'type' => 'switch',
            'title' => __('Category Meta','redux-framework-demo'),
            'subtitle'  => __('Enable category meta on blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the category meta on blog single page and <strong>NO</strong> to hide the category meta on blog single page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is meta category?','redux-framework-demo'),
                'content' => __('Meta category allow you to add category meta tags and title for category. It adds input fields to the category and other term administration interface to enter the meta values. It provides functions to retrive / create / update / delete the category and terms meta. It can be used to add meta to custom taxonomies (terms).','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_tags_meta_enable',
            'type' => 'switch',
            'title' => __('Meta Tags','redux-framework-demo'),
            'subtitle'  => __('Enable meta tags on blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the meta tags on blog single page and <strong>NO</strong> to hide the tags meta on blog single page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is meta tags?','redux-framework-demo'),
                'content' => __('Meta tags are snippets of text that describe a page’s content; the meta tags don’t appear on the page itself, but only in the page’s code.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_comments_meta_enable',
            'type' => 'switch',
            'title' => __('Comments','redux-framework-demo'),
            'subtitle'  => __('Enable comments on blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the comments on blog single page and <strong>NO</strong> to hide the comments on blog single page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What is comments?','redux-framework-demo'),
                'content' => __('Comments is an essential procedure for interaction between blogs, bloggers and blog readers. It is an action wherein visitors or blog readers leave a comment to a blog post or article, reply to readers’ comments, or the author himself answers or replies to visitors questions and comments.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'blog_single_social_icons_enable',
            'type' => 'switch',
            'title' => __('Social Icons','redux-framework-demo'),
            'subtitle'  => __('Enable social icons on blog single page.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the social icons on blog single page and <strong>NO</strong> to hide the social icons on blog single page. Default value is <strong>YES</strong>.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'hint' => array(
                'title'   => __('What are Social Icons?','redux-framework-demo'),
                'content' => __(' The social icons displays small graphics linked to your social media accounts, in any widget area of your theme.','redux-framework-demo'),
            )
        ),
    )
);