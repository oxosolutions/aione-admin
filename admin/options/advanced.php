<?php
/*********************************************************************************************
 *
 *  Main Menu settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'dashicons dashicons-admin-generic',
    'title'     => __('Advanced', 'redux-framework-demo'),
    'fields'    => array(
	
	    array (
            'id' => 'advanced_settings',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>Advanced Settings</h3>',
        ),
        array (
            'id' => 'advanced_use_cdn',
            'type' => 'switch',
            'title' =>  __('Use CDN', 'redux-framework-demo'),
            'subtitle'  => __('Load CSS and JS from CDN', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to load CSS and JS from CDN and <strong>NO</strong> load CSS and JS from same domain. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'hint' => array(
                'title'   => __('What is CDN?','redux-framework-demo'),
                'content' => __('A CDN is content delivery network','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'advanced_load_css_bottom',
            'type' => 'switch',
            'title' =>  __('Load CSS in Footer', 'redux-framework-demo'),
            'subtitle'  => __('Load CSS at end of page', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to load CSS in footer and <strong>NO</strong> to load CSS in Head. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'hint' => array(
                'title'   => __('Why is CSS in Footer?','redux-framework-demo'),
                'content' => __('To optimize website loading speed. Some essential CSS is still loaded in head.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'advanced_load_js_bottom',
            'type' => 'switch',
            'title' =>  __('Load JS in Footer', 'redux-framework-demo'),
            'subtitle'  => __('Load JS at end of page', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to load JS in footer and <strong>NO</strong> to load JS in Head. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'hint' => array(
                'title'   => __('Why is JS in Footer?','redux-framework-demo'),
                'content' => __('To optimize website loading speed','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'advanced_deffer_js',
            'type' => 'switch',
            'title' =>  __('Deffer JS', 'redux-framework-demo'),
            'subtitle'  => __('Deffer load JS', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to Deffer load JS and <strong>NO</strong> load JS normally. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'required' => array('advanced_use_cdn','equals','1'),
            'hint' => array(
                'title'   => __('What is Deffering js?','redux-framework-demo'),
                'content' => __('deffer load render blocking js','redux-framework-demo'),
            )
        ),

        array (
            'id' => 'advanced_async_js',
            'type' => 'switch',
            'title' =>  __('Async JS', 'redux-framework-demo'),
            'subtitle'  => __('load JS asynchronously', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to load JS asynchronouslyand <strong>NO</strong> load JS normally. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'required' => array('advanced_use_cdn','equals','1'),
            'hint' => array(
                'title'   => __('What is Async js?','redux-framework-demo'),
                'content' => __('Loading JS asynchronously','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'show_preloader',
            'type' => 'switch',
            'title' =>  __('Show Preloader', 'redux-framework-demo'),
            'subtitle'  => __('Enable Website Preloader', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to enable website preloader and <strong>NO</strong> disable website preloader. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'hint' => array(
                'title'   => __('What is Website Preloader?','redux-framework-demo'),
                'content' => __('Website Preloader shows a loading screen until entire website is loaded','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'preloader_theme',
            'type' => 'select',
            'title' =>  __('Preloader Theme', 'redux-framework-demo'),
            'subtitle'  => __('Select preloader theme', 'redux-framework-demo'),
            'desc' => __('Select the preloader theme as <strong>Top</strong>, <strong>Left</strong> or <strong>Right</strong> by selecting dropdown. Default value is <strong>None</strong>.', 'redux-framework-demo'),
            'default' => 'top',
            'required' => array('show_preloader','equals','1'),
            'options' => array(
                'none' => 'None',                 
                'circular-dots' => 'Circular Dots',              
                ),
            'hint' => array(
                'title'   => __('What is header positioning?','redux-framework-demo'),
                'content' => __('Header positioning allows you to control where the header appears on each page of your document.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'show_scroll_progress',
            'type' => 'switch',
            'title' =>  __('Show Scroll Progress', 'redux-framework-demo'),
            'subtitle'  => __('Enable Scroll Progress', 'redux-framework-demo'),
            'desc' => __('Select <strong>YES</strong> to enable scroll progress and <strong>NO</strong> disable scroll progress. Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => 1,
            'hint' => array(
                'title'   => __('What is Scroll Progress?','redux-framework-demo'),
                'content' => __('Scroll Progress shows a progress bar to show scroll value','redux-framework-demo'),
            )
        ),
		
    )
);