<?php

/*********************************************************************************************
 *
 *  Custom CSS
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'el-icon-css',
    'title'     => __('Custom CSS Code', 'redux-framework-demo'),
    //'subsection' => true,
    'fields'    => array(
        array(
            'id'        => 'custom_css',
            'type'      => 'ace_editor',
            'title'     => __('Custom CSS Code', 'redux-framework-demo'),
            'subtitle'  => __('Write your Custom CSS code here.', 'redux-framework-demo'),
            'mode'      => 'css',
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


?>