<?php

/*********************************************************************************************
 *
 *  General settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-file',
    'title'     => __('General settings', 'redux-framework-demo'),
    'fields'    => array(
        array (
            'id' => 'responsive',
            'icon' => true,
            'type' => 'info',
            'raw' => '<h3 style=\'margin: 0;\'>Responsive Options</h3>',
        ),
        array (
            'id' => 'responsive',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' =>__('Responsive Design','redux-framework-demo'),
            'subtitle'  => __('Responsive Design.', 'redux-framework-demo'),
            'desc' =>__('YES to use the responsive design features. If left unchecked then the fixed layout is used.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Responsive Design','redux-framework-demo'),
                'content' => __('Responsive Design','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'ipad_potrait',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' =>__('Use Fixed Layout for iPad Portrait','redux-framework-demo'),
            'subtitle'  => __('Use Fixed Layout for iPad Portrait.', 'redux-framework-demo'),
            'desc' =>__('YES to use the fixed layout for the iPad in portrait view.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Use Fixed Layout for iPad Portrait','redux-framework-demo'),
                'content' => __('Use Fixed Layout for iPad Portrait','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'mobile_zoom',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' =>__('Enable Zoom on mobile devices','redux-framework-demo'),
            'desc' =>__('Enable to allow pinch to zoom on mobile devices.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enable Zoom on mobile devices','redux-framework-demo'),
                'content' => __('Enable Zoom on mobile devices','redux-framework-demo'),
            )
        ),
    ),
);
?>