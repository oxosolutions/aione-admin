<?php
/*********************************************************************************************
 *
 *  Main Menu settings
 *
 *********************************************************************************************/

$this->sections[] = array(
    'icon'      => 'dashicons dashicons-admin-generic',
    'title'     => __('SEO', 'redux-framework-demo'),
    'fields'    => array(
	
	    array (
            'id' => 'Contact Info',
            'icon' => false,
            'type' => 'info',
            'style' => 'default',
            'raw' => '<h3 style=\'margin: 0;\'>Contact Info</h3>',
        ),
        array (
            'id' => 'seo_contact_name',
            'type' => 'text',
            'title' => __('Contact Name','redux-framework-demo'),
            'subtitle'  => __('Enter Contact Name', 'redux-framework-demo'),
            'desc' => __('e.g. Customer Service','redux-framework-demo'),
            'default' => 'Customer Service',
        ),
        array (
            'id' => 'seo_contact_number',
            'type' => 'text',
            'title' => __('Contact Number','redux-framework-demo'),
            'subtitle'  => __('Enter Contact Number', 'redux-framework-demo'),
            'desc' => __('e.g. +91-999999999','redux-framework-demo'),
            'default' => '',
        ),
    )
);