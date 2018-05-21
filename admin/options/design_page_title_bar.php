<?php

/*********************************************************************************************
 *
 *  Page Title Bar
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-file',
    'title'     => __('Page Title Bar', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'page_title_bar',
            'type' => 'switch',
            'title' =>  __('Enable Page Title Bar', 'redux-framework-demo'),
            'subtitle'  => __('Enable Page Title Bar', 'redux-framework-demo'),
            'desc' => __('Yes to show Page Title Bar', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'compiler' => array(''),
            'required' => array(),
            'hint' => array(
                'title'   => __('Page Title Bar','redux-framework-demo'),
                'content' => __('Choose Yes to show Page Title Bar','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_100_width',
            'type' => 'switch',
            'title' =>  __('100% Page Title Width', 'redux-framework-demo'),
            'subtitle'  => __('Set 100% Page Title Width', 'redux-framework-demo'),
            'desc' => __('Yes to set the page title content to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(''),
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('100% Page Title Width','redux-framework-demo'),
                'content' => __('100% Page Title Width','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_bar_enable_title',
            'type' => 'switch',
            'title' =>  __('Show Title on Page Title Bar', 'redux-framework-demo'),
            'subtitle'  => __('Show Title on Page Title Bar', 'redux-framework-demo'),
            'desc' => __('Yes to show Page Title', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(''),
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('Page Title','redux-framework-demo'),
                'content' => __('Choose Yes to show Page Title','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'page_title_bar_enable_description',
            'type' => 'switch',
            'title' =>  __('Show Description on Page Title Bar', 'redux-framework-demo'),
            'subtitle'  => __('Show Description on Page Title Bar', 'redux-framework-demo'),
            'desc' => __('Yes to show Page Description', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => false,
            'compiler' => array(''),
            'required' => array('page_title_bar','equals','1'),
            'hint' => array(
                'title'   => __('Page Title Description','redux-framework-demo'),
                'content' => __('Choose Yes to show Page Title Description','redux-framework-demo'),
            )
        ),
    )
);