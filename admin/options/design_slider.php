<?php

/*********************************************************************************************
 *
 *  Slider settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    // 'icon'      => 'dashicons dashicons-slides',
    'icon'      => plugins_url( 'assets/images/slider-new.svg', __FILE__ ),
    'title'     => __('Slider Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'slider_enable',
            'type' => 'switch',
            'title' =>  __('Show Slider on Page', 'redux-framework-demo'),
            'subtitle'  => __('Show Slider on Page', 'redux-framework-demo'),
            'desc' => __('Yes to show slider', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('Slider','redux-framework-demo'),
                'content' => __('Choose Yes to show Slider','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'slider_100_width',
            'type' => 'switch',
            'title' =>  __('100% Slider Width', 'redux-framework-demo'),
            'subtitle'  => __('Enables 100% Slider Width.', 'redux-framework-demo'),
            'desc' => __('YES to set 100% slider width', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array('slider_widget_100_width_class'),
            'required' => array('slider_enable','equals','1'),
            'hint' => array(
                'title'   => __('100% Slider Width','redux-framework-demo'),
                'content' => __('Choose Yes to set 100% slider width','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'select_slider',
            'type' => 'select',
            'title' =>  __('Select Slider', 'redux-framework-demo'),
            'subtitle'  => __('Select Slider', 'redux-framework-demo'),
            'desc' => __('Select Slider', 'redux-framework-demo'),
            'compiler' => array(''),
            'required' => array('slider_enable','equals','1'),
            'data' => 'posts',
            'args' => array(
                'post_type' => 'aione-slider', 
                'posts_per_page' => '-1', 
                'orderby' => 'date', 
                'order' => 'DESC', 
                ),
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
    )    
);