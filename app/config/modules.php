<?php
return array(
    'modules' => array(
        'Framework',
        'Application',
        'UserModule',
    ),
    'module_listener_options' => array(
        'module_paths'      => array('./modules', './vendor'),
        'routingEnabled'    => true
    ), 
);