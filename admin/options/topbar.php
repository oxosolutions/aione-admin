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
            'raw' => '<h3 style=\'margin: 0;\'>Top Bar Settings</h3>',
        ),
        array (
            'id' => 'show_top_bar',
            'type' => 'switch',
            'title' =>  __('Show Top Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable the top bar on header.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'compiler' => array('show_top_bar_class'),
            'hint' => array(
                'title'   => __('Show Top Bar','redux-framework-demo'),
                'content' => __('Top Bar is an area in header(above logo) you can use to show menu,date,contact no.,email,login/register buttons etc. Choose <strong>YES</strong> to show top bar on the header, Choose <strong>NO</strong> to remove it. Default value is <strong>YES</strong>.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'top_bar_100_width',
            'type' => 'switch',
            'title' =>  __('100% Top bar width', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to set the top bar to 100% of the browser width. Only works with wide layout mode.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array('top_bar_100_width_class'),
            'required' => array('show_top_bar','equals','1'),
            'hint' => array(
                'title'   => __('100% Top Bar Width','redux-framework-demo'),
                'content' => __('Select Yes to set the topbar to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'top_bar_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Top Bar', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to Customize Top Bar', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('show_top_bar','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'top_bar_background_color',
            'type'     => 'color',
            'title'    => __('Top Bar Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for topbar (default: #fff).', 'redux-framework-demo'),
            'default'  => '#FFFFFF',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_text_color',
            'type'     => 'color',
            'title'    => __('Top Bar Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a text color for topbar (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_link_color',
            'type'     => 'color',
            'title'    => __('Top Bar Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link color for topbar (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'top_bar_link_hover_color',
            'type'     => 'color',
            'title'    => __('Top Bar Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link hover color for topbar (default: #333).', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('top_bar_customize_enable','equals','1'),   
        ),
    )
);