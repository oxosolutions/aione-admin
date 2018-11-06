<?php

/*********************************************************************************************
 *
 *  Page Title Bar
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'dashicons dashicons-editor-insertmore',
    'title'     => __('Page Title Bar', 'redux-framework-demo'),
    'fields'    => array(
	     array (
            'id' => 'pagetitle_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Page Title Bar." to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'page_title_bar',
            'type' => 'switch',
            'title' =>  __('Show Page Title Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable page title bar', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the page title bar and <strong>NO</strong> to hide the page title bar. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is page title bar?','redux-framework-demo'),
                'content' => __('The Page title bar is the horizontal bar that sits directly below the menu/header and contains the page title text, as well as breadcrumbs, or the search box.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_100_width',
            'type' => 'switch',
            'title' =>  __('Page Title Bar Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the page title bar to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the page title bar to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array(''),
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('What is page title bar wide layout?','redux-framework-demo'),
                'content' => __('Page title bar wide layout means, the title bar area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_bar_enable_title',
            'type' => 'switch',
            'title' =>  __('Show Title', 'redux-framework-demo'),
            'subtitle'  => __('Show title on page title bar', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to show the title on page title bar and <strong>NO</strong> to hide the title on page title bar. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array(''),
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('What is page title?','redux-framework-demo'),
                'content' => __('A page title, or title tag, is the main text that describes a web page and appears at the top of a browser window.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_bar_enable_description',
            'type' => 'switch',
            'title' =>  __('Show Description', 'redux-framework-demo'),
            'subtitle'  => __('Show description on page title bar', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to show the description on page title bar and <strong>NO</strong> to hide the decription on page title bar. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array(''),
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('What is page title description?','redux-framework-demo'),
                'content' => __('The title description of a web page is meant to be an accurate and concise description of a page content i.e describes what a web page is about.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_bar_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Page Title Bar', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the page title bar design.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of page title bar. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the page title bar?','redux-framework-demo'),
                'content' => __('Customize page title bar means you can change the properties of title bar, for example change title bar background color, title bar text color, title bar link color, title bar link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'page_title_bar_background_color',
            'type'     => 'color',
            'title'    => __('Page Title Bar Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for page title bar.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for title bar background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('page_title_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_title_bar_text_color',
            'type'     => 'color',
            'title'    => __('Page Title Bar Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for page title bar.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for title bar text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('page_title_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_title_bar_link_color',
            'type'     => 'color',
            'title'    => __('Page Title Bar Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for page title bar.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for title bar link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('page_title_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_title_bar_link_hover_color',
            'type'     => 'color',
            'title'    => __('Page Title Bar Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for page title bar.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for title bar link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('page_title_bar_customize_enable','equals','1'),   
        ),
    )
);