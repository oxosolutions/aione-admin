<?php
/*********************************************************************************************
*
*  Topbar Settings
*
**********************************************************************************************/
$this->sections[] = array(
    'icon'      => plugins_url( 'assets/images/header.svg', __FILE__ ),
    'title'     => __('Topbar Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'top_bar_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Topbar" to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'show_top_bar',
            'type' => 'switch',
            'title' =>  __('Show Topbar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the topbar on header.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the topbar on header and <strong>NO</strong> to hide the topbar from header. Default value is <strong>YES</strong>. You can add content to the topbar at <a href="'.admin_url( 'widgets.php').'" target="_blank">Widgets</a>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('show_top_bar_class'),
            'hint' => array(
                'title'   => __('What is topbar?','redux-framework-demo'),
                'content' => __('Topbar is most commonly displayed as horizontal list of links at the top of the each website. It includes contact numbers, email address, social media icons, language switchers etc.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'top_bar_100_width',
            'type' => 'switch',
            'title' =>  __('Topbar Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the topbar to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the topbar to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('top_bar_100_width_class'),
            'required' => array('show_top_bar','equals','1'),
            'hint' => array(
                'title'   => __('What is topbar wide layout?','redux-framework-demo'),
                'content' => __('Topbar wide layout means, the topbar area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'top_bar_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Topbar', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the topbar design.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of topbar. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('show_top_bar','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the topbar?','redux-framework-demo'),
                'content' => __('Customize Topbar means you can change the properties of topbar, for example change topbar background color, topbar text color, topbar Link color, topbar link hover color according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'top_bar_background_color',
            'type'     => 'color',
            'title'    => __('Topbar Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for topbar.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for background transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#FFFFFF',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_text_color',
            'type'     => 'color',
            'title'    => __('Topbar Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a text color for topbar.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for text color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_link_color',
            'type'     => 'color',
            'title'    => __('Topbar Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for topbar.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_link_hover_color',
            'type'     => 'color',
            'title'    => __('Topbar Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for topbar.', 'redux-framework-demo'),
			'desc' => __('Default color is #333333 (black). Mark tick for link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),   
        ),
    )
);