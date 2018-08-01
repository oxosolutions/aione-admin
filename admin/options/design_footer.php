<?php

/*********************************************************************************************
 *
 *  Footer settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    // 'icon'      => 'dashicons dashicons-image-rotate-left',
    'icon'      => plugins_url( 'assets/images/f-new.svg', __FILE__ ),
    'title'     => __('Footer', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'footer_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>Footer Settings</h3>',
        ),
        array (
            'id' => 'footer_widgets',
            'type' => 'switch',
            'title' =>  __('Footer Widgets', 'redux-framework-demo'),
            'subtitle'  => __('Enable Footer Widgets', 'redux-framework-demo'),
            'desc' => __('YES to display footer widgets', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('Footer Widgets','redux-framework-demo'),
                'content' => __('Footer Widgets','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_100_width',
            'type' => 'switch',
            'title' =>  __('100% Footer Width', 'redux-framework-demo'),
            'subtitle'  => __('Enables 100% Footer Width', 'redux-framework-demo'),
            'desc' => __('Check this box to set footer width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array('footer_widget_100_width_class'),
            'required' => array('footer_widgets','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Footer', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to Customize Footer', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('footer_widgets','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'footer_background_color',
            'type'     => 'color',
            'title'    => __('Footer Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for Footer.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_heading_color',
            'type'     => 'color',
            'title'    => __('Footer Heading Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a Heading color for Footer.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_text_color',
            'type'     => 'color',
            'title'    => __('Footer Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a text color for Footer', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_link_color',
            'type'     => 'color',
            'title'    => __('Footer Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link color for Footer.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_link_hover_color',
            'type'     => 'color',
            'title'    => __('Footer Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link hover color for Footer.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('footer_customize_enable','equals','1'),   
        ),
        array (
            'id' => 'footer_copyright_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>Footer Copyright Settings</h3>',
        ),
        array (
            'id' => 'footer_copyright',
            'type' => 'switch',
            'title' =>  __('Copyright Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enables Copyright Bar', 'redux-framework-demo'),
            'desc' => __('YES to display the copyright bar', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('Copyright Bar','redux-framework-demo'),
                'content' => __('Copyright Bar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_copyright_100_width',
            'type' => 'switch',
            'title' =>  __('100% Copyright Bar Width', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to set the copyright bar to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.', 'redux-framework-demo'),
            'desc' => __('YES to set 100% copyright bar width', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array('copyright_bar_100_width_class'),
            'required' => array('footer_copyright','equals','1'),
            'hint' => array(
                'title'   => __('100% Copyright Bar Width','redux-framework-demo'),
                'content' => __('Select Yes to set the copyright bar to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'footer_copyright_customize_enable',
            'type' => 'switch',
            'title' =>  __('Customize Footer Copyright', 'redux-framework-demo'),
            'subtitle'  => __('Set Yes to Customize Footer Copyright', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'required' => array('footer_copyright','equals','1'),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
        array(
            'id'       => 'footer_copyright_background_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Background Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a background color for Footer Copyright.', 'redux-framework-demo'),
            'default'  => '#333',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_copyright_text_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Text Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a text color for Footer Copyright', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_copyright_link_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Link Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link color for Footer Copyright.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),
        ),
        array(
            'id'       => 'footer_copyright_link_hover_color',
            'type'     => 'color',
            'title'    => __('Footer Copyright Link Hover Color', 'redux-framework-demo'), 
            'subtitle' => __('Pick a link hover color for Footer Copyright.', 'redux-framework-demo'),
            'default'  => '#fff',
            'validate' => 'color',
            'required' => array('footer_copyright_customize_enable','equals','1'),   
        ),
        
    )
);