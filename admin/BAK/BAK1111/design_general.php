<?php

/*********************************************************************************************
 *
 *  General settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el el-cogs',
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
            'subtitle'  => __('Allow webpages to be viewed in response to the size of the screen', 'redux-framework-demo'),
            'desc' =>__('YES to Allow the responsive design features. If left unchecked then the fixed layout is used.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Responsive Design','redux-framework-demo'),
                'content' => __('Allow webpages to be viewed in response to the size of the screen','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'ipad_potrait',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' =>__('Use Fixed Layout for iPad Portrait','redux-framework-demo'),
            'subtitle'  => __('Allow Fixed Layout to be viewed in iPad Portrait', 'redux-framework-demo'),
            'desc' =>__('YES to Allow the fixed layout for the iPad in portrait view.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Use Fixed Layout for iPad Portrait','redux-framework-demo'),
                'content' => __('Allow Fixed Layout to be viewed in iPad Portrait','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'mobile_zoom',
            'type' => 'switch',
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => true,
            'title' =>__('Enable Zoom on mobile devices','redux-framework-demo'),
            'desc' =>__('YES to Enable pinch to zoom on mobile devices.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enable Zoom on mobile devices','redux-framework-demo'),
                'content' => __('Enable Zoom on mobile devices','redux-framework-demo'),
            )
        ),
    ),
);
?>