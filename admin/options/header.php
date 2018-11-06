<?php
/*********************************************************************************************
 *
 *  Header settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    //'icon'      => 'assets/images/header-layout.svg',
    'icon'      => plugins_url( 'assets/images/header.svg', __FILE__ ),
    'title'     => __('Header Settings', 'redux-framework-demo'),
    'fields'    => array(
        //Accordion No Working We need to test it
        /*
        array(
            'id'        => 'opt-accordion-begin-1',
            'type'      => 'accordion',
            'title'     => 'Topbar Settings',
            'subtitle'  => 'Click to expand',
            'position'  => 'start',
        ),
        */
        /*
        array(
            'id'        => 'opt-accordion-end-1',
            'type'      => 'accordion',
            'position'  => 'end'
        ),
        */
        array (
            'id' => 'header_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Header" to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'header_enable',
            'type' => 'switch',
            'title' =>  __('Show Header', 'redux-framework-demo'),
            'subtitle'  => __('Enable the header', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the header and <strong>NO</strong> to hide the header. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
			'compiler' => array('show_header_class'),
            'hint' => array(
                'title'   => __('What is header?','redux-framework-demo'),
                'content' => __('A website header sits at the top of each page. It is part of a consistent user experience that all good websites share. The design of a header may differ from site to site. Common features of header include logo/identity, navigation (main menu), page title, search, shoping cart (ecommerce sites), login/logout, user profile link, notifications (if applicable) etc.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_100_width',
            'type' => 'switch',
            'title' =>  __('Header Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the header to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the header to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_100_width_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is header wide layout?','redux-framework-demo'),
                'content' => __('Header wide layout means, the header area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_position',
            'type' => 'select',
            'title' =>  __('Header Position', 'redux-framework-demo'),
            'subtitle'  => __('Set the header position', 'redux-framework-demo'),
            'desc' => __('Select the header position as <strong>Top</strong>, <strong>Left</strong> or <strong>Right</strong> by selecting dropdown. Default value is <strong>Top</strong>.', 'redux-framework-demo'),
            'default' => 'top',
            'required' => array('header_enable','equals','1'),
            'options' => array(
                'top' => 'Top',                 
                'left' => 'Left',                 
                'right' => 'Right',                 
                ),
            'hint' => array(
                'title'   => __('What is header positioning?','redux-framework-demo'),
                'content' => __('Header positioning allows you to control where the header appears on each page of your document.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_logo',
            'type' => 'switch',
            'title' =>  __('Show Logo', 'redux-framework-demo'),
            'subtitle'  => __('Enable the logo on header.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the logo and <strong>NO</strong> to hide the logo. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_show_logo_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is logo?','redux-framework-demo'),
                'content' => __('Logos are symbols made up of text and images that help to identify your brands that you want to show on your website header.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_logo',
            'type' => 'media',
            'title' =>  __(' Logo', 'redux-framework-demo'),
            'subtitle'  => __('Select logo image.', 'redux-framework-demo'),
            'desc' => __('Select logo image by click on <strong>Upload</strong> button and simply remove the logo by click on <strong>Remove</strong> button.', 'redux-framework-demo'),
            'default' => array (
                'url' => AIONE_PLUGIN_URL. '/assets/images/logo.png',
            ),
            'url' => true,
            'hint' => array(
                'title'   => __('What is logo image?','redux-framework-demo'),
                'content' => 'A logo image is a pictorial mark (sometimes called a brand marks or logo symbol) is an icon—or graphic-based design which represents your brand that you want to show on your website header.'
            ),
            'compiler' => array('header_logo_class'),
            'required' => array('header_enable','equals','1'),
        ),
        array (
            'id' => 'header_show_site_title',
            'type' => 'switch',
            'title' =>  __('Show Site Title', 'redux-framework-demo'),
            'subtitle'  => __('Enable the site title on header.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to show site title and <strong>NO</strong> to hide title. Default value is <strong>YES</strong>. You can change the title of your website in <a href="'.admin_url( 'options-general.php').'" target="_blank">General Settings</a>', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('header_show_site_title_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is site title?','redux-framework-demo'),
                'content' => __('Site title is the name of your website representing your business brand or a brief description of the organization or any other title you want to show on your website header.','redux-framework-demo'),
            )
        ),
        array ( 
            'id' => 'header_show_tagline',
            'type' => 'switch',
            'title' =>  __('Show Tagline', 'redux-framework-demo'),
            'subtitle'  => __('Enable the tagline on header.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to show the tagline and <strong>NO</strong> to hide the tagline. Default value is <strong>YES</strong>. You can change the tagline of your website in <a href="'.admin_url( 'options-general.php').'" target="_blank">General Settings</a>', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('header_show_tagline_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is tagline?','redux-framework-demo'),
                'content' => __('A tagline is one phrase (sometimes two) that provides clarity, entertainment, or emphasis to help highlight a brands mission, purpose, or culture.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_show_banner',
            'type' => 'switch',
            'title' =>  __('Show Banner', 'redux-framework-demo'),
            'subtitle'  => __('Enable banner on header', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to show the banner and <strong>NO</strong> to hide the banner. Default value is <strong>NO</strong>. You can add banner to the header at <a href="'.admin_url( 'widgets.php').'" target="_blank">Widgets</a>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_show_banner_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is banner?','redux-framework-demo'),
                'content' => __('A banner is an advertisement displayed into a web page. The advertisement consists of an image or a multimedia object (usually created using Flash). Thus, banner can be static or animated, depending on the technology used to make them.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_transparent',
            'type' => 'switch',
            'title' =>  __('Show Transparent Header', 'redux-framework-demo'),
            'subtitle'  => __('Enable transparent header.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to show the transparent header and <strong>NO</strong> to hide the transparent header. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('header_transparent_class'),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is transparent header?','redux-framework-demo'),
                'content' => __('Transparent header set your primary header background to transparent that will look more attractive.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'header_sticky',
            'type' => 'switch',
            'title' =>  __('Show Sticky Header', 'redux-framework-demo'),
            'subtitle'  => __('Enable a fixed header when scrolling.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to show the sticky header and <strong>NO</strong> to hide the sticky header. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array(''),
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is sticky header?','redux-framework-demo'),
                'content' => __('Sticky header a term used to describe a fixed header on a webpage that remains visible and in the same position as the user scrolls down and moves about a site. Sticky header makes your header visible at all times.','redux-framework-demo'),
            )
        ),
        
        array (
            'id' => 'header_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Header', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the header design.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of header. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('header_enable','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the header?','redux-framework-demo'),
                'content' => __('Customize header means you can change the properties of header, for example change header background color, header text color, header link color, header link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'header_background_color',
            'type'     => 'color',
            'title'    => __('Header Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for header.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for background transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#FFFFFF',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'header_text_color',
            'type'     => 'color',
            'title'    => __('Header Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for header.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'header_link_color',
            'type'     => 'color',
            'title'    => __('Header Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for header.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'header_link_hover_color',
            'type'     => 'color',
            'title'    => __('Header Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for header.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('header_customize_enable','equals','1'),
        ),
    )
   
);

