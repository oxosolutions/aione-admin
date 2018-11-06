<?php

/*********************************************************************************************
 *
 *  Slider settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    // 'icon'      => 'dashicons dashicons-slides',
    'icon'      => plugins_url( 'assets/images/s-new.svg', __FILE__ ),
    'title'     => __('Slider Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'slider_enable',
            'type' => 'switch',
            'title' =>  __('Show Slider', 'redux-framework-demo'),
            'subtitle'  => __('Enable the slider', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to display the slider and <strong>NO</strong> to hide the slider. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 0,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('What is slider?','redux-framework-demo'),
                'content' => __('A slider is a term that refers to a slideshow on a website. An example of a slider can be a revolving carousel that displays products or photos.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'slider_100_width',
            'type' => 'switch',
            'title' =>  __('Slider Wide Layout', 'redux-framework-demo'),
            'subtitle'  => __('Set the slider to 100% of browser width.', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to set the slider to 100% width of browser and <strong>NO</strong> to take default width. Default value is <strong>NO</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array('slider_widget_100_width_class'),
            'required' => array('slider_enable','equals','1'),
            'hint' => array(
                'title'   => __('What is slider wide layout?','redux-framework-demo'),
                'content' => __('Slider wide layout means, the slider area exactly equal to the explicit width of the browser.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'select_slider',
            'type' => 'select',
            'title' =>  __('Select Slider', 'redux-framework-demo'),
            'subtitle'  => __('Select the slider new or existing.', 'redux-framework-demo'),
            'desc' => __('Select the slider from dropdown. Default no slider selected.', 'redux-framework-demo'),
            'compiler' => array(''),
            'required' => array('slider_enable','equals','1'),
            'data' => 'posts',
            'args' => array(
                'post_type' => 'aione-slider', 
                'posts_per_page' => '-1', 
                'orderby' => 'date', 
                'order' => 'DESC', 
                ),

        ),
    )    
);