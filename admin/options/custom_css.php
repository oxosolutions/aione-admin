<?php

/*********************************************************************************************
 *
 *  Custom CSS
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'dashicons dashicons-media-code',
    'title'     => __('Custom CSS Code', 'redux-framework-demo'),
    //'subsection' => true,
    'fields'    => array(
        array(
            'id'        => 'custom_css',
            'type'      => 'ace_editor',
            'title'     => __('Custom CSS Code', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom CSS code here.', 'redux-framework-demo'),
            'mode'      => 'css',
            'full_width' => true,
            //'validate'  => 'css',
            'theme'     => 'monokai',
            'options'   => array('minLines'=> 32),
            'desc'      => __('','redux-framework-demo'),
            'default'   => "
/************************************************
/* LAYOUT
/************************************************/
.layout-header-top{}

/************************************************
/* TOPBAR
/************************************************/
.aione-topbar {}
.aione-topbar .widget .widgettitle{}

/************************************************
/* HEADER
/************************************************/
.aione-header{}
.aione-header .aione-header-title {}

/************************************************/
/* LOGO
/************************************************/
.aione-header-logo{}
.aione-header-logo a{}
.aione-header-logo > a > img{}

/************************************************/
/* SITE TITLE
/************************************************/

.aione-header-title .site-title{}
/************************************************/
/* SITE TAGLINE
/************************************************/
.aione-header-title .site-title .site-description{}

/************************************************/
/* HEADER BANNER
/************************************************/
.aione-header-banner{}
.aione-header-banner .widget{}

/************************************************
/* PRIMARY MENU
/************************************************/

.aione-wrapper.layout-header-top .primary-nav {
}
.aione-nav.horizontal>ul>li {

}
.primary-nav .aione-nav > ul > li > a {

}
.primary-nav .aione-nav > ul > li > a:hover, 
.primary-nav .aione-nav > ul > li.current-menu-item > a, 
.primary-nav .aione-nav > ul > li.current-menu-item > a:hover, 
.primary-nav .aione-nav > ul > li.current-menu-parent > a, 
.primary-nav .aione-nav > ul > li.current-menu-parent > a:hover, 
.primary-nav .aione-nav > ul > li.current-page-ancestor > a, 
.primary-nav .aione-nav > ul > li.current-page-ancestor > a:hover {

}

/************************************************
/*  PAGETOP
/************************************************/
.aione-pagetop{}
.aione-pagetop .widget{}
.aione-pagetop .widgettitle{}

/************************************************
/* PAGE TITLE
/************************************************/
.aione-pagetitle {}
.aione-pagetitle > .wrapper {}
.aione-pagetitle .title {}
.aione-pagetitle .description {}
.aione-pagetitle a {}
.aione-pagetitle a:hover {}

/************************************************
/* SIDEBAR LEFT
/************************************************/
.aione-sidebar.aione-sidebar-left{}
.aione-sidebar .widget{}
.aione-sidebar .widgettitle{}

/************************************************
/* SIDEBAR RIGHT
/************************************************/
.aione-sidebar.aione-sidebar-right{}
.aione-sidebar-right .widget{}
.aione-sidebar-right .widget .widgettitle{}
.aione-sidebar .widget ul>li{}
.aione-sidebar .widget_nav_menu ul>li{}

/************************************************
/* PAGE CONTENT
/************************************************/
.aione-page-content{}
.aione-page-content .aione-contenttop{}
.aione-page-content .aione-contenttop .widget{}

/************************************************
/* CONTENT BOTTOM
/************************************************/
.aione-contentbottom{}
.aione-contentbottom .wrapper{}
.aione-contentbottom .wrapper h3{}

/************************************************
/* FOOTER
/************************************************/
.aione-footer{}
.aione-footer .widget{} 
.aione-footer .widget  .widgettitle{}

/************************************************
/* COPYRIGHT
/************************************************/
.aione-copyright{}
.aione-copyright .aione-copyright-left{}
.aione-copyright .aione-copyright-left .widget{}
.aione-copyright .widget .widgettitle{}
.aione-copyright .aione-copyright-right{}

/************************************************
/* POWERED BY
/************************************************/
.aione-powered-by{}
.aione-powered-by a{}

/************************************************
/* TYPOGRAPHY
/************************************************/
h1, h2, h3, h4, h5, h6,p,label{}

            ",
            'hint' => array(
                'title'   => __('Custom CSS Code','redux-framework-demo'),
                'content' => __('Custom CSS Code','redux-framework-demo'),
            )
        ),
    )
);

/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-edit',
    'title'     => __('Custom JS Code', 'redux-framework-demo'),
    //'subsection' => true,

    'fields'    => array(
        array(
            'id'        => 'custom_js',
            'type'      => 'ace_editor',
            'title'     => __('Custom JS Code', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom Javascript code here.', 'redux-framework-demo'),
            'mode'      => 'javascript',
            'full_width' => true,
            //'validate'  => 'js',
            'theme'     => 'monokai',
            'desc'      => __('','redux-framework-demo'),
            'default'   => "",
            'options'   => array('minLines'=> 32),
            'hint' => array(
                'title'   => __('Custom JS Code','redux-framework-demo'),
                'content' => __('Custom JS Code','redux-framework-demo'),
            )
        )

    )
);


/*********************************************************************************************/
$this->sections[] = array(
    'icon'      => 'el-icon-edit',
    'title'     => __('Insert Code', 'redux-framework-demo'),
    //'subsection' => true,

    'fields'    => array(
        array(
            'id'        => 'code_head',
            'type'      => 'ace_editor',
            'title'     => __('Insert Code to Head', 'redux-framework-demo'),
            'subtitle'  => __('Write your code here to head.', 'redux-framework-demo'),
            'mode'      => 'html',
            'full_width' => true,
            //'validate'  => 'js',
            'theme'     => 'monokai',
            'desc'      => __('','redux-framework-demo'),
            'default'   => "",
            'options'   => array('minLines'=> 15),
            'hint' => array(
                'title'   => __('Custom JS Code','redux-framework-demo'),
                'content' => __('Custom JS Code','redux-framework-demo'),
            )
        ),
        array(
            'id'        => 'code_body_start',
            'type'      => 'ace_editor',
            'title'     => __('Insert Code to Body Start', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom code to Body Start here', 'redux-framework-demo'),
            'mode'      => 'html',
            'full_width' => true,
            //'validate'  => 'js',
            'theme'     => 'monokai',
            'desc'      => __('','redux-framework-demo'),
            'default'   => "",
            'options'   => array('minLines'=> 15),
            'hint' => array(
            'title'   => __('Insert Code to Body Start','redux-framework-demo'),
            'content' => __('Insert Code to Body Start','redux-framework-demo'),
            )
        ),
        array(
            'id'        => 'code_body_end',
            'type'      => 'ace_editor',
            'title'     => __('Insert Code to Body End', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom code to Body End here', 'redux-framework-demo'),
            'mode'      => 'html',
            'full_width' => true,
            //'validate'  => 'js',
            'theme'     => 'monokai',
            'desc'      => __('','redux-framework-demo'),
            'default'   => "",
            'options'   => array('minLines'=> 15),
            'hint' => array(
            'title'   => __('Insert Code to Body End','redux-framework-demo'),
            'content' => __('Insert Code to Body End','redux-framework-demo'),
            )
        )

    )
);