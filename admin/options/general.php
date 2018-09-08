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
            'id' => 'site_layout',
            'type' => 'select',
            'title' =>  __('Layout', 'redux-framework-demo'),
            'subtitle'  => __('Layout', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'default'   => 'wide',
            'options'  => array(
                'boxed' => __('Boxed','redux-framework-demo'),
                'wide' => __('Wide','redux-framework-demo'),
            ),
            'hint' => array(
                'title'   => __('Layout','redux-framework-demo'),
                'content' => __('Choose site Layout','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'site_width',
            'type' => 'text',
            'title' =>  __('Site Width', 'redux-framework-demo'),
            'subtitle'  => __('Site Width', 'redux-framework-demo'),
            'desc' => __('Site Width like 100% or 1170px', 'redux-framework-demo'),
            'default'   => '1170px',
            'hint' => array(
                'title'   => __('Site Width','redux-framework-demo'),
                'content' => __('Site Width','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'color_scheme',
            'type' => 'select',
            'title' =>  __('Select Color Scheme', 'redux-framework-demo'),
            'subtitle'  => __('Select Color Scheme', 'redux-framework-demo'),
            'desc' => __('Select Color Scheme', 'redux-framework-demo'),
            'options' => array(
                'default' => __('Default','redux-framework-demo'),
                'red' => __('Red','redux-framework-demo'),               
                'green' => __('Green','redux-framework-demo'),               
                'blue' => __('Blue','redux-framework-demo'),               
                ),
            'default' => 'default',
            'hint' => array(
                'title'   => __('','redux-framework-demo'),
                'content' => __('','redux-framework-demo'),
            )
        ),
    )
);