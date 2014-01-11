<?php
$route = require('route.config.php');

return array_merge($route, array(
    'controllers' => array(
        'Directface\Frontend\Controller\Admin' => 'Directface\Frontend\Controller\AdminController'
    )
));