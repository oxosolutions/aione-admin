<?php 
/*
             *
              *
              *
              * New Tab Page Title Bar
              *
              *
              * */

//////////////////////////////////////////////////////////////////////
$this->sections[] = array(
    'icon'      => 'el-icon-file',
    'title'     => __('Page Title Bar', 'redux-framework-demo'),
    //'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Page Title Bar Options</h3>',
        ),
		array (
            'id' => 'page_title_bar',
            'type' => 'select',
            'title' => __('Page Title Bar','redux-framework-demo'),
            'subtitle'  => __('Choose content of Page Title Bar.', 'redux-framework-demo'),
            'desc' => __('Check the box to show the page title bar. This is a global option for every page or post, and this can be overridden by individual page/post options.','redux-framework-demo'),
            'options' => array (
                'bar_and_content' => 'Show Bar and Content',
                'content_only' => 'Show Content Only',
				'hide' => 'Hide'
            ),
			'default' => 'bar_and_content',
			'hint' => array(
                'title'   => __('Page Title Bar','redux-framework-demo'),
                'content' => __('Page Title Bar','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'page_title_bar_text',
            'type' => 'select',
            'title' => __('Page Title Bar Text','redux-framework-demo'),
            'subtitle'  => __('Enables Page Title Bar Text.', 'redux-framework-demo'),
            'desc' => __('Choose to show or hide the page title bar text.','redux-framework-demo'),
            'options' => array (
                'yes' => 'Show',
                'no' => 'Hide',
            ),
			'default' => 'yes',
            'required' =>  array('page_title_bar','not','hide'),
			'hint' => array(
                'title'   => __('Page Title Bar Text','redux-framework-demo'),
                'content' => __('Page Title Bar Text','redux-framework-demo'),
            )
        ), 
		array (
            'id' => 'page_title_100_width',
            'type' => 'switch',
            'title' => __('100% Page Title Width','redux-framework-demo'),
            'subtitle'  => __('Set 100% Page Title Width.', 'redux-framework-demo'),
            'desc' => __('Yes to set the page title content to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'required' =>  array('page_title_bar','not','hide'),
            'hint' => array(
                'title'   => __('100% Page Title Width','redux-framework-demo'),
                'content' => '100% Page Title Width........'
            )
        ),
        array (
            'id' => 'page_title_height',
            'type' => 'text',
            'title' => __('Page Title Bar Height','redux-framework-demo'),
            'subtitle'  => __('Choose Page Title Bar Height.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '87px',
            'required' =>  array('page_title_bar','not','hide'),
            'hint' => array(
                'title'   => __('Page Title Bar Height','redux-framework-demo'),
                'content' => __('Page Title Bar Height','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'page_title_mobile_height',
            'type' => 'text',
            'title' => __('Page Title Bar Mobile Height','redux-framework-demo'),
            'subtitle'  => __('Choose Page Title Bar Mobile Height.', 'redux-framework-demo'),
            'desc' => __('In pixels, eg: 10px','redux-framework-demo'),
            'default' => '70px',
            'required' =>  array('page_title_bar','not','hide'),
            'hint' => array(
                'title'   => __('Page Title Bar Mobile Height','redux-framework-demo'),
                'content' => __('Page Title Bar Mobile Height','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'page_title_alignment',
            'type' => 'select',
            'title' => __('Page Title Bar Text Alignment','redux-framework-demo'),
            'subtitle'  => __('Choose Page Title Bar Text Alignment', 'redux-framework-demo'),
            'desc' => __('Choose the title and subhead text alignment','redux-framework-demo'),
            'options' => array (
                'center' => 'Center',
                'left' => 'Left',
                'right' => 'Right',
            ),
            'default' => 'left',
            'required' =>  array('page_title_bar','not','hide'),
            'hint' => array(
                'title'   => __('Page Title Bar Text Alignment','redux-framework-demo'),
                'content' => __('Choose the title and subhead text alignment','redux-framework-demo'),
            )
        ),
        /*array (
            'id' => 'page_title_bg',
            'type' => 'media',
            'title' => __('Page Title Bar Background','redux-framework-demo'),
            'subtitle'  => __('Page Title Bar Background.', 'redux-framework-demo'),
            'desc' => __('Select an image or insert an image url to use for the page title bar background.','redux-framework-demo'),
            'default' => array (
                'url' => AIONE_PLUGIN_URL.'/assets/images/page_title_bg.png',
            ),
            'url' => true,
            'hint' => array(
                'title'   => __('Page Title Bar Background','redux-framework-demo'),
                'content' => __('Page Title Bar Background','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_bg_retina',
            'type' => 'media',
            'title' => __('Page Title Bar Background (Retina Version @2x)','redux-framework-demo'),
            'subtitle'  => __('Page Title Bar Background (Retina Version @2x).', 'redux-framework-demo'),
            'desc' => __('Select an image or insert an image url to use for the retina page title bar background.','redux-framework-demo'),
            'url' => true,
            'hint' => array(
                'title'   => __('Page Title Bar Background (Retina Version @2x)','redux-framework-demo'),
                'content' => __('Page Title Bar Background (Retina Version @2x)','redux-framework-demo'),
            )
        ),*/
        array (

            'id' => 'page_title_bg_full',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('100% Background Image','redux-framework-demo'),
            'subtitle'  => __('Enable 100% Background Image.', 'redux-framework-demo'),
            'desc' => __('YES this box to have the page title bar background image display at 100% in width and height and scale according to the browser size.','redux-framework-demo'),
            'required' =>  array('page_title_bar','not','hide'),
            'hint' => array(
            'title'   => __('100% Background Image','redux-framework-demo'),
            'content' => __('100% Background Image','redux-framework-demo'),
        )
        ),
        array (
            'id' => 'page_title_bg_parallax',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Parallax Background Image','redux-framework-demo'),
            'subtitle'  => __('Enable Parallax Background Image.', 'redux-framework-demo'),
            'desc' => __('YES to enable parallax background image when scrolling.','redux-framework-demo'),
            'required' =>  array('page_title_bar','not','hide'),
            'hint' => array(
                'title'   => __('Parallax Background Image','redux-framework-demo'),
                'content' => __('Parallax Background Image','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'page_title_fading',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Fading Animation','redux-framework-demo'),
            'subtitle'  => __('Enable Fading Animation.', 'redux-framework-demo'),
            'desc' => __('YES to have the page title text fade on scroll.','redux-framework-demo'),
            'required' =>  array('page_title_bar','not','hide'),
            'hint' => array(
                'title'   => __('Fading Animation','redux-framework-demo'),
                'content' => __('Fading Animation','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_info',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Breadcrumb Options</h3>',
        ),
        array (
            'id' => 'page_title_bar_bs',
            'options' => array (
			    'none' => 'None',
                'Breadcrumbs' => 'Breadcrumbs',
                'Search Box' => 'Search Box',
            ),
            'type' => 'select',
            'title' => __('Breadcrumbs/Search Box','redux-framework-demo'),
            'subtitle'  => __('Choose Breadcrumbs/Search Box', 'redux-framework-demo'),
            'desc' => __('Choose to display breadcrumbs, search box or none in the page title bar.','redux-framework-demo'),
            'default' => 'Breadcrumbs',
            'hint' => array(
                'title'   => __('Breadcrumbs/Search Box','redux-framework-demo'),
                'content' => __('Breadcrumbs/Search Box','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'breadcrumb_mobile',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' => __('Breadcrumbs on Mobile Devices','redux-framework-demo'),
            'subtitle'  => __('Enable Breadcrumbs on Mobile Devices.', 'redux-framework-demo'),
            'desc' => __('YES to display breadcrumbs on mobile devices.','redux-framework-demo'),
            'required' =>  array('page_title_bar_bs','not','none'),
            'hint' => array(
                'title'   => __('Breadcrumbs on Mobile Devices','redux-framework-demo'),
                'content' => __('Breadcrumbs on Mobile Devices','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'breacrumb_prefix',
            'type' => 'text',
            'title' => __('Breadcrumb Menu Prefix','redux-framework-demo'),
            'subtitle'  => __('Choose Breadcrumb Menu Prefix.', 'redux-framework-demo'),
            'desc' => __('The text before the breadcrumb menu.','redux-framework-demo'),
            'required' =>  array('page_title_bar_bs','not','none'),
            'hint' => array(
                'title'   => __('Breadcrumb Menu Prefix','redux-framework-demo'),
                'content' => __('Breadcrumb Menu Prefix','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'breadcrumb_separator',
            'type' => 'text',
            'title' => __('Breadcrumb Menu Separator','redux-framework-demo'),
            'subtitle'  => __('Choose Breadcrumb Menu Separator', 'redux-framework-demo'),
            'desc' => __('Choose a separator between the single breadcrumbs.','redux-framework-demo'),
			'default' => '/',
            'required' =>  array('page_title_bar_bs','not','none'),
            'hint' => array(
                'title'   => __('Breadcrumb Menu Separator','redux-framework-demo'),
                'content' => __('Breadcrumb Menu Separator','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'breadcrumb_show_post_type_archive',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Show Custom Post Type Archives on Breadcrumbs','redux-framework-demo'),
            'subtitle'  => __('Enable Custom Post Type Archives on Breadcrumbs', 'redux-framework-demo'),
            'desc' => __('YES to display custom post type archives in the breadcrumb path.','redux-framework-demo'),
            'required' =>  array('page_title_bar_bs','not','none'),
            'hint' => array(
                'title'   => __('Show Custom Post Type Archives on Breadcrumbs','redux-framework-demo'),
                'content' => __('Show Custom Post Type Archives on Breadcrumbs','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'breadcrumb_show_categories',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'title' => __('Show Post Categories on Breadcrumbs','redux-framework-demo'),
            'subtitle'  => __('Enable Post Categories on Breadcrumbs', 'redux-framework-demo'),
            'desc' => __('YES to display the post categories in the breadcrumb path.','redux-framework-demo'),
            'required' =>  array('page_title_bar_bs','not','none'),
            'hint' => array(
                'title'   => __('Show Post Categories on Breadcrumbs','redux-framework-demo'),
                'content' => __('Show Post Categories on Breadcrumbs','redux-framework-demo'),
            )
        )
    )

);
?>