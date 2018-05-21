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
            'id' => 'page_top_area_enable',
            'type' => 'switch',
            'title' =>  __('Enable Page Top Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable Page Top Area', 'redux-framework-demo'),
            'desc' => __('Yes to enable page top area', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array('page_top_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Page Top Area','redux-framework-demo'),
                'content' => __('Choose Yes to show page top area','redux-framework-demo'),
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
            'default'   => true,
            'compiler' => array('page_bottom_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Page Bottom Area','redux-framework-demo'),
                'content' => __('Choose Yes to show page bottom area','redux-framework-demo'),
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
            'default'   => false,
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
            'default'   => true,
            'compiler' => array('sidebar_right'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Right Sidebar','redux-framework-demo'),
                'content' => __('Choose Yes to show right Sidebar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'content_top_area_enable',
            'type' => 'switch',
            'title' =>  __('Enable Content Top Area', 'redux-framework-demo'),
            'subtitle'  => __('Enable Content Top Area', 'redux-framework-demo'),
            'desc' => __('Yes to enable content top area', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
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
            'default'   => true,
            'compiler' => array('content_bottom_area'),
            'required' => array(),
            'hint' => array(
                'title'   => __('Content Bottom Area','redux-framework-demo'),
                'content' => __('Content Bottom Area','redux-framework-demo'),
            )
        ),
    )
);