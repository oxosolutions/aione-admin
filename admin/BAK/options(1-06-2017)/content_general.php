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
            'id' => 'google_analytics',
            'type' => 'textarea',
            'title' =>__('Tracking Code','redux-framework-demo'),
            'subtitle'  => __('Tracking Code.', 'redux-framework-demo'),
            'desc' =>__('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme. Please put code inside script tags.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Tracking Code','redux-framework-demo'),
                'content' => __('Tracking Code','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'space_head',
            'type' => 'textarea',
            'title' =>__('Space before &lt;/head&gt;','redux-framework-demo'),
            'subtitle'  => __('Space before </head>.', 'redux-framework-demo'),
            'desc' =>__('Add code before the </head> tag.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Space before </head>','redux-framework-demo'),
                'content' => __('Space before </head>','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'space_body',
            'type' => 'textarea',
            'title' =>__('Space before &lt;/body&gt;','redux-framework-demo'),
            'subtitle'  => __('Space before </body>.', 'redux-framework-demo'),
            'desc' =>__('Add code before the </body> tag.','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Space before </body>','redux-framework-demo'),
                'content' => __('Space before </body>','redux-framework-demo'),
            )
        ),
    ),
);
/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-skype',
    'title'     => __('Custom CSS Code', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array(
            'id'        => 'custom_css',
            'type'      => 'ace_editor',
            'title'     => __('Custom CSS Code', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom CSS code here.', 'redux-framework-demo'),
            'mode'      => 'css',
            //'validate'  => 'css',
            'theme'     => 'monokai',
            'desc'      => __('','redux-framework-demo'),
            'default'   => "",
            'hint' => array(
            'title'   => __('Custom CSS Code','redux-framework-demo'),
             'content' => __('Custom CSS Code','redux-framework-demo'),
        )
        ),
		array(
            'id'        => 'custom_css_mobile',
            'type'      => 'ace_editor',
            'title'     => __('Custom CSS Code For Mobile', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom CSS responsive code for mobile here.', 'redux-framework-demo'),
            'mode'      => 'css',
            //'validate'  => 'css',
            'theme'     => 'monokai',
            'desc'      => __('','redux-framework-demo'),
            'default'   => "",
            'hint' => array(
            'title'   => __('Custom CSS Code For Mobile','redux-framework-demo'),
             'content' => __('Custom CSS Code For Mobile','redux-framework-demo'),
        )
        ),
		array(
            'id'        => 'custom_css_tablet',
            'type'      => 'ace_editor',
            'title'     => __('Custom CSS Code For Tablet', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom CSS responsive code for tablet here.', 'redux-framework-demo'),
            'mode'      => 'css',
            //'validate'  => 'css',
            'theme'     => 'monokai',
            'desc'      => __('','redux-framework-demo'),
            'default'   => "",
            'hint' => array(
            'title'   => __('Custom CSS Code For Tablet','redux-framework-demo'),
             'content' => __('Custom CSS Code For Tablet','redux-framework-demo'),
        )
        ),
		array(
            'id'        => 'custom_css_phablet',
            'type'      => 'ace_editor',
            'title'     => __('Custom CSS Code For Phablet', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom CSS responsive code for phablet here.', 'redux-framework-demo'),
            'mode'      => 'css',
            //'validate'  => 'css',
            'theme'     => 'monokai',
            'desc'      => __('a smartphone having a screen which is intermediate in size between that of a typical smartphone and a tablet computer.','redux-framework-demo'),
            'default'   => "",
            'hint' => array(
            'title'   => __('Custom CSS Code For Phablet','redux-framework-demo'),
             'content' => __('Custom CSS Code For Phablet','redux-framework-demo'),
        )
        ),
        /*array(
            'id'        => 'custom_js',
            'type'      => 'ace_editor',
            'title'     => __('Custom JS Code', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom Javascript code here.', 'redux-framework-demo'),
            'mode'      => 'js',
            'validate'  => 'js',
            'theme'     => 'monokai',
            'desc'      => __('Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.','redux-framework-demo'),
            'default'   => "",
            'hint' => array(
            'title'   => __('Custom JS Code','redux-framework-demo'),
            'content' => __('Custom JS Code','redux-framework-demo'),
            )
        )*/

    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-skype',
    'title'     => __('Custom JS Code', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
        array(
            'id'        => 'custom_js',
            'type'      => 'ace_editor',
            'title'     => __('Custom JS Code', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom Javascript code here.', 'redux-framework-demo'),
            'mode'      => 'js',
            'validate'  => 'js',
            'theme'     => 'monokai',
            'desc'      => __('Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.','redux-framework-demo'),
            'default'   => "",
            'hint' => array(
            'title'   => __('Custom JS Code','redux-framework-demo'),
            'content' => __('Custom JS Code','redux-framework-demo'),
            )
        )

    )
);


/*********************************************************************************************
 *
 *  Content settings
 *
 *********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-file',
    'title'     => __('Content settings', 'redux-framework-demo'),
    'fields'    => array(
        
        
        
    ),
);
/*********************************************************************************************
 *
 *  Content Above Footer settings
 *
 *********************************************************************************************/
$this->sections[] = array(
	'icon'      => 'el-icon-skype',
    'title'     => __('Pagebottom Content', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'show_pagebottom_content',
            'type' => 'switch',
            'title' =>  __('Show Pagebottom Content', 'redux-framework-demo'),
            'subtitle'  => __('Enable the content above footer.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Pagebottom Content','redux-framework-demo'),
                'content' => __('Enable the content above footer.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'pagebottom_content_100_width',
            'type' => 'switch',
            'title' => __('Pagebottom Content 100% Width','redux-framework-demo'),
            'subtitle'  => __('Pagebottom Content 100% Width.', 'redux-framework-demo'),
            'desc' => __('Yes to set Pagebottom Content width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'hint' => array(
                'title'   => __('100% Width','redux-framework-demo'),
                'content' => __('Yes to set Pagebottom Content width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'pagebottom_content',
            'type' => 'textarea',
            'title' =>__('Enter content placed above footer','redux-framework-demo'),
            'subtitle'  => __('Enter your custom content that shown in all pages above footer.', 'redux-framework-demo'),
            'desc' =>__('Add custom content place above footer','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enter content placed above footer','redux-framework-demo'),
                'content' => __('Enter content placed above footer','redux-framework-demo'),
            )
        )
    )
);

/*********************************************************************************************
 *
 *  Content Above Main settings
 *
 *********************************************************************************************/
$this->sections[] = array(
	'icon'      => 'el-icon-skype',
    'title'     => __('PageTop Content', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'show_pagetop_content',
            'type' => 'switch',
            'title' =>  __('Show Pagetop Content', 'redux-framework-demo'),
            'subtitle'  => __('Enable the Pagetop Content.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Pagetop Content','redux-framework-demo'),
                'content' => __('Enable the Pagetop Content.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'pagetop_content_100_width',
            'type' => 'switch',
            'title' => __('PageTop Content 100% Width','redux-framework-demo'),
            'subtitle'  => __('PageTop Content 100% Width.', 'redux-framework-demo'),
            'desc' => __('Yes to set PageTop Content container width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default' => false,
            'hint' => array(
                'title'   => __('PageTop Content 100% Width','redux-framework-demo'),
                'content' => __('Yes to set Content PageTop Content width to 100% of the browser width. Uncheck to follow site width. Only works with wide layout mode.','redux-framework-demo'),
            )
        ),
        array (
            'id' => 'pagetop_content',
            'type' => 'textarea',
            'title' =>__('Enter content placed above main container','redux-framework-demo'),
            'subtitle'  => __('Enter your custom content that shown in all pages above main container.', 'redux-framework-demo'),
            'desc' =>__('Add custom content place above main container','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enter content placed above main container','redux-framework-demo'),
                'content' => __('Enter content placed above main container','redux-framework-demo'),
            )
        )
    )
);

/*********************************************************************************************
 *
 *  Content Above page settings
 *
 *********************************************************************************************/
$this->sections[] = array(
	'icon'      => 'el-icon-skype',
    'title'     => __('Content Top', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'show_content_top',
            'type' => 'switch',
            'title' =>  __('Show Content Top', 'redux-framework-demo'),
            'subtitle'  => __('Enable the content top.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Content Top','redux-framework-demo'),
                'content' => __('Enable the content top.','redux-framework-demo'),
            )
        ),
		
        array (
            'id' => 'content_top',
            'type' => 'textarea',
            'title' =>__('Enter content placed above main content container','redux-framework-demo'),
            'subtitle'  => __('Enter your custom content that shown in all pages above main content container.', 'redux-framework-demo'),
            'desc' =>__('Add custom content place above main content container','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enter content placed above main content container','redux-framework-demo'),
                'content' => __('Enter content placed above main content container','redux-framework-demo'),
            )
        )
    )
);

/*********************************************************************************************
 *
 *  Content Below page settings
 *
 *********************************************************************************************/
$this->sections[] = array(
	'icon'      => 'el-icon-skype',
    'title'     => __('Content Bottom', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
		
        array (
            'id' => 'show_content_bottom',
            'type' => 'switch',
            'title' =>  __('Show Content Bottom', 'redux-framework-demo'),
            'subtitle'  => __('Enable the content bottom.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Content Below Bottom','redux-framework-demo'),
                'content' => __('Enable the content bottom.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'content_bottom',
            'type' => 'textarea',
            'title' =>__('Enter content placed below main content container','redux-framework-demo'),
            'subtitle'  => __('Enter your custom content that shown in all pages below main content container.', 'redux-framework-demo'),
            'desc' =>__('Add custom content place below page container','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enter content placed below main content container','redux-framework-demo'),
                'content' => __('Enter content placed below main content container','redux-framework-demo'),
            )
        )
    )
);

/*********************************************************************************************
 *
 *  Content Above Sidebar1 settings
 *
 *********************************************************************************************/
$this->sections[] = array(
	'icon'      => 'el-icon-skype',
    'title'     => __('Sidebar1 Top Content', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
	
		array (
            'id' => 'show_sidebar1_top_content',
            'type' => 'switch',
            'title' =>  __('Show Sidebar1 Top Content', 'redux-framework-demo'),
            'subtitle'  => __('Enable the content above sidebar1.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Sidebar1 Top Content','redux-framework-demo'),
                'content' => __('Enable the content above sidebar1.','redux-framework-demo'),
            )
        ),
		
        array (
            'id' => 'sidebar1_top_content',
            'type' => 'textarea',
            'title' =>__('Enter content placed above sidebar1 container','redux-framework-demo'),
            'subtitle'  => __('Enter your custom content that shown in all pages above sidebar1 container.', 'redux-framework-demo'),
            'desc' =>__('Add custom content place above sidebar1 container','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enter content placed above sidebar1 container','redux-framework-demo'),
                'content' => __('Enter content placed above sidebar1 container','redux-framework-demo'),
            )
        )
    )
);


/*********************************************************************************************
 *
 *  Content Above Sidebar2 settings
 *
 *********************************************************************************************/
$this->sections[] = array(
	'icon'      => 'el-icon-skype',
    'title'     => __('Sidebar2 Top Content', 'redux-framework-demo'),
    'subsection' => true,
    'fields'    => array(
		
        array (
            'id' => 'show_sidebar2_top_content',
            'type' => 'switch',
            'title' =>  __('Show Content Above Sidebar2', 'redux-framework-demo'),
            'subtitle'  => __('Enable the content above sidebar2.', 'redux-framework-demo'),
            'desc' => __('Default value is <strong>YES</strong>.', 'redux-framework-demo'),
            'on' => __('YES', 'redux-framework-demo'),
            'off' => __('NO ', 'redux-framework-demo'),
            'default'   => true,
            'hint' => array(
                'title'   => __('Show Content Above Sidebar2','redux-framework-demo'),
                'content' => __('Enable the content above sidebar2.','redux-framework-demo'),
            )
        ),
		array (
            'id' => 'sidebar2_top_content',
            'type' => 'textarea',
            'title' =>__('Enter content placed above sidebar2 container','redux-framework-demo'),
            'subtitle'  => __('Enter your custom content that shown in all pages above sidebar2 container.', 'redux-framework-demo'),
            'desc' =>__('Add custom content place above sidebar2 container','redux-framework-demo'),
            'hint' => array(
                'title'   => __('Enter content placed above sidebar2 container','redux-framework-demo'),
                'content' => __('Enter content placed above sidebar2 container','redux-framework-demo'),
            )
        )
    )
);



?>