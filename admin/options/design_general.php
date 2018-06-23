<?php

/*********************************************************************************************
 *
 *  General settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-file',
    'title'     => __('General Settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'site_layout',
            'type' => 'select',
            'title' =>  __('Layout', 'redux-framework-demo'),
            'subtitle'  => __('Layout', 'redux-framework-demo'),
            'desc' => __('', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array(''),
            'required' => array(),
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
            'compiler' => array(''),
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('Site Width','redux-framework-demo'),
                'content' => __('Site Width','redux-framework-demo'),
            )
        ),
    )
);