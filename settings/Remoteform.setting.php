<?php

/**
 * Settings used by remoteform.
 */

return array(
  'remoteform_cors_urls' => array(
    'group_name' => 'Remote Form',
    'group' => 'remoteform',
    'name' => 'remoteform_cors_urls',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'textarea',
    'html_attributes' => array('rows' => 5, 'cols' => 50),
    'default' => array(),
    'add' => '5.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => "Allow forms to be submitted from the following locations. Please list full URL (including https://), one per line",
    'description' => 'Remote URLs that are allowed to submit data.',
    'help_text' => 'List the URLs of web sites that are allowed to submit data to CiviCRM via the Remote Form extension',
	),
);