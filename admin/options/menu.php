<?php
/*********************************************************************************************
 *
 *  Main Menu settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'dashicons dashicons-menu',
    'title'     => __('Main Menu', 'redux-framework-demo'),
    'fields'    => array(
	
	    array (
            'id' => 'header_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "Main Menu" to suit your own  needs.</h3>',
        ),
		
        array (
            'id' => 'header_show_navigation',
            'type' => 'switch',
            'title' =>  __('Show Naviagtion', 'redux-framework-demo'),
            'subtitle'  => __('Enable the navigation.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the navigation and <strong>NO</strong> to hide the navigation. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('header_show_navigation_class'),
            'hint' => array(
                'title'   => __('What is navigation?','redux-framework-demo'),
                'content' => __('A navigation is a section of a graphical user interface intended to aid visitors in accessing information. Navigation is the main primary menu on your website header.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_100_width',
            'type' => 'switch',
            'title' =>  __('Main Menu Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the main menu to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the main menu to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('What is main menu wide layout?','redux-framework-demo'),
                'content' => __('Main menu wide layout means, the main menu area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_layout',
            'type' => 'select',
            'options' => array (
                'horizontal' => 'Horizontal',
                'vertical' => 'Vertical',
            ),
            'title' => __('Main Menu Layout','redux-framework-demo'),
            'subtitle'  => __('Set the layout for the main menu.', 'redux-framework-demo'),
            'desc' => __('Select the main menu layout as <strong>Horizontal</strong> or <strong>Vertical</strong> by selecting dropdown. Default value is <strong>Horizontal</strong>.','redux-framework-demo'),
            'default' => 'horizontal',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('What is main menu layout?','redux-framework-demo'),
                'content' => __('Main menu layout allows you to control where the main menu appears i.e horizontal or vertical on each page of your document.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_position',
            'type' => 'select',
            'options' => array (
                'inside' => 'Inside Header',
                'outside' => 'Outside Header',
            ),
            'title' => __('Main Menu Postion','redux-framework-demo'),
            'subtitle'  => __('Set the postion for main menu.', 'redux-framework-demo'),
            'desc' => __('Select the main menu position as <strong>Inside Header</strong> or <strong>Outside Header</strong> by selecting dropdown. Default value is <strong>Inside Header</strong>.','redux-framework-demo'),
            'default' => 'inside',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('What is main menu position?','redux-framework-demo'),
                'content' => __('Main menu positioning allows you to control where the main appears i.e inside header or outside header on each page of your document.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_animation',
            'type' => 'select',
            'options' => array (
                '' => 'Select Animation',
                'underline-left' => 'Underline Left',
                'underline-right' => 'Underline Right',
                'underline-up' => 'Underline Up',
                'underline-down' => 'Underline Down',
                'topline-left' => 'Topline Left',
                'topline-right' => 'Topline Right',
                'topline-up' => 'Topline Up',
                'topline-down' => 'Topline Down',
                'slide-up' => 'Slide Up',
                'slide-down' => 'Slide Down',
                'slide-left' => 'Slide Left',
                'slide-right' => 'Slide Right',
                //'rotate-left' => 'Rotate Left',
                //'rotate-up' => 'Rotate Up',
                'dual-line' => 'Dual Line',
                //'effect-14' => 'Effect 14',
                //'effect-21' => 'Effect 21'
            ),
            'title' => __('Main Menu Animation','redux-framework-demo'),
            'subtitle'  => __('Set animation for the main menu.', 'redux-framework-demo'),
            'desc' => __('Select the animation for the main menu by selecting dropdown. Default no animation is selected.','redux-framework-demo'),
            'default' => '',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('What is main menu animation?','redux-framework-demo'),
                'content' => __('Main menu animation allows you to add the animation effects to the menus to make it more attractive.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_alignment',
            'type' => 'button_set',
            'multi'    => false,
            'options' => array (
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
            'title' => __('Main Menu Alignment','redux-framework-demo'),
            'subtitle'  => __('Set alignment for the main menu.', 'redux-framework-demo'),
            'desc' => __('Select the alignment for the main menu as <strong>Left</strong>, <strong>Center<strong> or<strong> Right</strong>.','redux-framework-demo'),
            'default' => 'right',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('What is main menu alignment?','redux-framework-demo'),
                'content' => __('Main menu alignment allows you to control where the menu appears on each page of your website.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_height',
            'type' => 'slider',
            'min' => 20,
            'max' => 200,
            'step' => 1,
            'title' => __('Main Menu Height','redux-framework-demo'),
            'subtitle'  => __('Set height for the main menu.', 'redux-framework-demo'),
            'desc' => __('Set the height for the main menu by entering the value in the textbox or by increasing or decreasing the slidebar. Default height value is <strong>50</strong>.','redux-framework-demo'),
            'default' => 50,
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('What is main menu height?','redux-framework-demo'),
                'content' => __('Main menu height allows you to control the main menu height by increasing or decresing according to the requirement.','redux-framework-demo'),
            )
        ),
        /*
        array (
            'id' => 'main_nav_show_home_icon',
            'type' => 'switch',
            'title' =>  __('Show Home Icon', 'redux-framework-demo'),
            'subtitle'  => __('Enable home icon on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_home_icon'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Home Icon','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Home Icon<\/strong> on main menu. Choose <strong>YES<\/strong> to home icon on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_show_home_link',
            'type' => 'switch',
            'title' =>  __('Show Home Link', 'redux-framework-demo'),
            'subtitle'  => __('Enable home link on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_home_link'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Home link','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Home link<\/strong> on main menu. Choose <strong>YES<\/strong> to home link on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_show_description',
            'type' => 'switch',
            'title' =>  __('Show Menu Description', 'redux-framework-demo'),
            'subtitle'  => __('Enable menu description on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_description'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Menu Description','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Description<\/strong> on main menu. Choose <strong>YES<\/strong> to show description on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>NO<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_search_icon',
            'type' => 'switch',
            'title' =>  __('Show Search Icon in Main Menu', 'redux-framework-demo'),
            'subtitle'  => __('Enable Search on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_search_icon'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Show Search Icon in Main Menu','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>Search Icon<\/strong> on main menu. Choose <strong>YES<\/strong> to show Search Icon on main menu, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_display_dropdown_indicator',
            'type' => 'switch',
            'title' =>  __('Dropdown Menu Indicator', 'redux-framework-demo'),
            'subtitle'  => __('Enable arrow indicators next to parent level menu items', 'redux-framework-demo'),
            'desc' => __('Check the box to enable arrow indicators next to parent level menu items', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('main_nav_show_dropdown_indicator'),
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Dropdown Menu Indicator','redux-framework-demo'),
                'content' => __('Enable arrow indicators next to parent level menu items','redux-framework-demo'),
            )
        ),
        */
        array (
            'id' => 'main_nav_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Main Menu', 'redux-framework-demo'),
            'subtitle'  => __('Personalize the main menu design.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> for more options to customize the style of main menu. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('How to customize the main menu?','redux-framework-demo'),
                'content' => __('Customize main menu means you can change the properties of main menu, for example change main menu background color, main menu link color, main menu link hover color, main menu link hover background color and many more according to the requirement of user.','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'main_nav_background_color',
            'type'     => 'color',
            'title'    => __('Main Menu Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a background color for main menu.', 'redux-framework-demo'),
			'desc' => __('Default color is #FFFFFF (white). Mark tick for background transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#FFFFFF',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),        
        array(
            'id'       => 'main_nav_link_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for main menu.', 'redux-framework-demo'),
			'desc' => __('Default color is #545454 (dark grey). Mark tick for link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#545454',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'main_nav_link_hover_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link Hover Color', 'redux-framework-demo'),
            'subtitle' => __('Select a link hover color for main menu.', 'redux-framework-demo'),
			'desc' => __('Default color is #1570a6 (blue). Mark tick for link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),			
            'default'  => '#1570a6',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'main_nav_link_hover_background_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link Hover Background Color', 'redux-framework-demo'),
            'subtitle' => __('Select a link hover background color for main menu.', 'redux-framework-demo'),
			'desc' => __('Default color is #f2f2f2 (white smoke). Mark tick for link hover background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),			
            'default'  => '#f2f2f2',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        /*
        array(
            'id'       => 'main_nav_link_active_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link active Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a Link active color for Main Menu.', 'redux-framework-demo'),
            'default'  => '#168dc5',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'main_nav_link_active_hover_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link active Hover Color', 'redux-framework-demo'), 
            'default'  => '#1570a6',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'main_nav_link_active_background_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link active background Color', 'redux-framework-demo'), 
            'default'  => '#f2f2f2',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ), 
        */
        array(
            'id'       => 'submenu_background_color',
            'type'     => 'color',
            'title'    => __('Submenu Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a  background color for submenu.', 'redux-framework-demo'),
			'desc' => __('Default color is #f2f2f2 (white smoke). Mark tick for submenu background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#f2f2f2',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ), 
        array(
            'id'       => 'submenu_link_color',
            'type'     => 'color',
            'title'    => __('Submenu Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link color for submenu.', 'redux-framework-demo'),
			'desc' => __('Default color is #1570a6 (blue). Mark tick for link color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#1570a6',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ), 
        array(
            'id'       => 'submenu_link_hover_color',
            'type'     => 'color',
            'title'    => __('Submenu Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Select a link hover color for submenu.', 'redux-framework-demo'),
			'desc' => __('Default color is #1570a6 (blue). Mark tick for link hover color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#1570a6',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'submenu_link_background_hover_color',
            'type'     => 'color',
            'title'    => __('Submenu Link Hover Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Select link hover background color for submenu.', 'redux-framework-demo'),
			'desc' => __('Default color is #d2d2d2 (light grey). Mark tick for link hover background color transparent. <a href="https://tools.darlic.com/colors.php"> Click here</a> for color codes.', 'redux-framework-demo'),
            'default'  => '#d2d2d2',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
    )
);