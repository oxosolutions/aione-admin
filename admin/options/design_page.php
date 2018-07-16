<?php

/*********************************************************************************************
 *
 *  Page settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'el el-path',
    'title'     => __('Page Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'page_100_width',
            'type' => 'switch',
            'title' =>  __('100% Page width', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to set the Page to 100% of the browser width. Only works with wide layout mode.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_100_width_class'),
            'hint' => array(
                'title'   => __('100% Page Width','redux-framework-demo'),
                'content' => __('Select Yes to set the Page to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_top_area_enable',
            'type' => 'switch',
            'title' =>  __('Enable Page Top Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable Page Top Area', 'redux-framework-demo'),
            'desc' => __('Yes to enable page top area', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_top_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Page Top Area','redux-framework-demo'),
                'content' => __('Choose Yes to show page top area','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_top_area_100_width',
            'type' => 'switch',
            'title' =>  __('100% Page Top Area width', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to set the Page Top Area to 100% of the browser width. Only works with wide layout mode.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_top_area_100_width_class'),
            'required' => array('page_top_area_enable','equals','1'),
            'hint' => array(
                'title'   => __('100% Page Top Area Width','redux-framework-demo'),
                'content' => __('Select Yes to set the Page Top Area to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_bottom_area_enable',
            'type' => 'switch',
            'title' =>  __('Enable Page Bottom Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable Page Bottom Area', 'redux-framework-demo'),
            'desc' => __('Yes to enable page bottom area', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_bottom_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Page Bottom Area','redux-framework-demo'),
                'content' => __('Choose Yes to show page bottom area','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_bottom_area_100_width',
            'type' => 'switch',
            'title' =>  __('100% Page bottom Area width', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to set the Page bottom Area to 100% of the browser width. Only works with wide layout mode.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('page_bottom_area_100_width_class'),
            'required' => array('page_bottom_area_enable','equals','1'),
            'hint' => array(
                'title'   => __('100% Page bottom Area Width','redux-framework-demo'),
                'content' => __('Select Yes to set the Page bottom Area to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'sidebar_left_enable',
            'type' => 'switch',
            'title' =>  __('Enable Left Sidebar', 'redux-framework-demo'),
            'subtitle'  => __('Enable Left Sidebar', 'redux-framework-demo'),
            'desc' => __('Yes to enable left sidebar', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('sidebar_left'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Left Sidebar','redux-framework-demo'),
                'content' => __('Choose Yes to show left Sidebar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'sidebar_right_enable',
            'type' => 'switch',
            'title' =>  __('Enable Right Sidebar', 'redux-framework-demo'),
            'subtitle'  => __('Enable Right Sidebar', 'redux-framework-demo'),
            'desc' => __('Yes to enable right sidebar', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('sidebar_right'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Right Sidebar','redux-framework-demo'),
                'content' => __('Choose Yes to show right Sidebar','redux-framework-demo'),
            )
        ),

        array (
            'id' => 'sidebar_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Sidebar', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to Customize Sidebar', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'sidebar_background_color',
            'type'     => 'color',
            'title'    => __('Sidebar Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for Sidebar.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_heading_color',
            'type'     => 'color',
            'title'    => __('Sidebar Heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a Heading color for Sidebar', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_text_color',
            'type'     => 'color',
            'title'    => __('Sidebar Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a text color for Sidebar', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_link_color',
            'type'     => 'color',
            'title'    => __('Sidebar Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link color for Sidebar.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'sidebar_link_hover_color',
            'type'     => 'color',
            'title'    => __('Sidebar Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link hover color for Sidebar.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('sidebar_customize_enable','equals','1'),   
        ),
        array (
            'id' => 'content_top_area_enable',
            'type' => 'switch',
            'title' =>  __('Enable Content Top Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable Content Top Area', 'redux-framework-demo'),
            'desc' => __('Yes to enable content top area', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('content_top_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Content Top Area','redux-framework-demo'),
                'content' => __('Content Top Area','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'content_bottom_area_enable',
            'type' => 'switch',
            'title' =>  __('Enable Content Bottom Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable Content Bottom Area', 'redux-framework-demo'),
            'desc' => __('Yes to enable content bottom area', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('content_bottom_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Content Bottom Area','redux-framework-demo'),
                'content' => __('Content Bottom Area','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Page', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to Customize Page', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'page_background_color',
            'type'     => 'color',
            'title'    => __('Page Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for Page.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_heading_color',
            'type'     => 'color',
            'title'    => __('Page heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a heading color for Page', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_text_color',
            'type'     => 'color',
            'title'    => __('Page Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a text color for Page', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_link_color',
            'type'     => 'color',
            'title'    => __('Page Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link color for Page.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'page_link_hover_color',
            'type'     => 'color',
            'title'    => __('Page Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link hover color for Page.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('page_customize_enable','equals','1'),   
        ),
    )
);