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
            'id' => 'header_show_navigation',
            'type' => 'switch',
            'title' =>  __('Show Naviagtion', 'redux-framework-demo'),
            'subtitle'  => __('Enable Navigation on header', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('header_show_navigation_class'),
            'hint' => array(
                'title'   => __('Show Navigation','redux-framework-demo'),
                'content' => __('Navigation is the main\/primary menu on your website header. Choose <strong>YES<\/strong> to show Navigation on the header, Choose <strong>NO<\/strong> to remove it. Default value is <strong>YES<\/strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_100_width',
            'type' => 'switch',
            'title' =>  __('100% Main Menu Width', 'redux-framework-demo'),
            'subtitle'  => __('Enable 100% width on main menu', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('100% Main Menu Width','redux-framework-demo'),
                'content' => __('This option Enables\/Disables <strong>100% width<\/strong> on main menu.','redux-framework-demo'),
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
            'subtitle'  => __('Layout for the Main Menu.', 'redux-framework-demo'),
            'desc' => __('Select the layout for the Main Menu.','redux-framework-demo'),
            'default' => 'horizontal',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Main Menu Layout','redux-framework-demo'),
                'content' => __('Main Menu Layout','redux-framework-demo'),
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
            'subtitle'  => __('Postion for the Main Menu.', 'redux-framework-demo'),
            'desc' => __('Select the Postion for the Main Menu.','redux-framework-demo'),
            'default' => 'outside',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Main Menu Postion','redux-framework-demo'),
                'content' => __('Main Menu Postion','redux-framework-demo'),
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
            'subtitle'  => __('Animation for the Main Menu.', 'redux-framework-demo'),
            'desc' => __('Select the Animation for the Main Menu.','redux-framework-demo'),
            'default' => '',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Main Menu Animation','redux-framework-demo'),
                'content' => __('Main Menu Animation','redux-framework-demo'),
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
            'subtitle'  => __('Alignment for the Main Menu.', 'redux-framework-demo'),
            'desc' => __('Select the Alignment for the Main Menu.','redux-framework-demo'),
            'default' => 'left',
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Main Menu Alignment','redux-framework-demo'),
                'content' => __('Main Menu Alignment','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'main_nav_height',
            'type' => 'slider',
            'min' => 30,
            'max' => 200,
            'step' => 1,
            'title' => __('Main Menu Height','redux-framework-demo'),
            'subtitle'  => __('Height for the Main Menu.', 'redux-framework-demo'),
            'desc' => __('Select the Height for the Main Menu.','redux-framework-demo'),
            'default' => 50,
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('Main Menu Height','redux-framework-demo'),
                'content' => __('Main Menu Height','redux-framework-demo'),
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
            'subtitle'  => __('Set Yes to Customize Main Menu', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('header_show_navigation','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'main_nav_background_color',
            'type'     => 'color',
            'title'    => __('Main Menu Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for Main Menu.', 'redux-framework-demo'),
            'default'  => '#FFFFFF',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),        
        array(
            'id'       => 'main_nav_link_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a Link color for Main Menu.', 'redux-framework-demo'),
            'default'  => '#545454',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'main_nav_link_hover_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link Hover Color', 'redux-framework-demo'), 
            'default'  => '#1570a6',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'main_nav_link_hover_background_color',
            'type'     => 'color',
            'title'    => __('Main Menu Link Hover Background Color', 'redux-framework-demo'), 
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
            'subtitle' => __('Submenu Background Color', 'redux-framework-demo'),
            'default'  => '#f2f2f2',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ), 
        array(
            'id'       => 'submenu_link_color',
            'type'     => 'color',
            'title'    => __('Submenu Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Submenu Link Color', 'redux-framework-demo'),
            'default'  => '#1570a6',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ), 
        array(
            'id'       => 'submenu_link_hover_color',
            'type'     => 'color',
            'title'    => __('Submenu Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Submenu Link Hover Color', 'redux-framework-demo'),
            'default'  => '#1570a6',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'submenu_link_background_hover_color',
            'type'     => 'color',
            'title'    => __('Submenu Link Hover Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Submenu Link Hover Background Color', 'redux-framework-demo'),
            'default'  => '#d2d2d2',
            'validate' => 'color',
            'required' => array('main_nav_customize_enable','equals','1'),
        ),
    )
);