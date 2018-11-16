<?php

/*********************************************************************************************
 *
 *  General settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'dashicons dashicons-admin-generic',
    'title'     => __('General Settings', 'redux-framework-demo'),
    'fields'    => array(
	    array (
            'id' => 'general_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>You can tailor the experience of using "General Settings" to suit your own  needs.</h3>',
        ),
        array (
            'id' => 'site_layout',
            'type' => 'select',
            'title' =>  __('Layout', 'redux-framework-demo'),
            'subtitle'  => __('Select the layout.', 'redux-framework-demo'),
            'desc' => __('Select the layout setting as <strong>Boxed</strong> or <strong>Wide</strong> by selecting dropdown. Default value is <strong>Wide</strong>.', 'redux-framework-demo'),
            'default'   => 'wide',
            'options'  => array(
                'boxed' => __('Boxed','redux-framework-demo'),
                'wide' => __('Wide','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'site_width',
            'type' => 'text',
            'title' =>  __('Site Width', 'redux-framework-demo'),
            'subtitle'  => __('Set the site width.', 'redux-framework-demo'),
            'desc' => __('Set the site width by entering the value in the textbox like 100% or 1170px.', 'redux-framework-demo'),
            'default'   => '1170px'
        ),
        array (
            'id' => 'color_scheme',
            'type' => 'select',
            'title' =>  __('Color Scheme', 'redux-framework-demo'),
            'subtitle'  => __('Select the color scheme.', 'redux-framework-demo'),
            'desc' => __('Select the color scheme as <strong>Red</strong>, <strong>Green</strong> or <strong>Blue</strong> by selecting dropdown. Default value is <strong>Default</strong>.', 'redux-framework-demo'),
            'options' => array(
                'default' => __('Default','redux-framework-demo'),
                'red' => __('Red','redux-framework-demo'),               
                'green' => __('Green','redux-framework-demo'),               
                'blue' => __('Blue','redux-framework-demo'),               
                ),
            'default' => 'default'
        ),
    )
);