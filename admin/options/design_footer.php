<?php

/*********************************************************************************************
 *
 *  Footer settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'el-icon-fork',
    'title'     => __('Footer', 'redux-framework-demo'),
    'fields'    => array(
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
    )
);