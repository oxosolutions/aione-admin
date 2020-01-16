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
            'default'   => "",
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


?>