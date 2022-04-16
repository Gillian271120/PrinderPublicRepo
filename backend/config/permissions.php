<?php
return [
    'CakeDC/Auth.permissions' => [
        [
            'plugin' => 'DebugKit',
            'controller' => '*',
            'action' => '*',
            'bypassAuth' => true,
        ],
        [
            'plugin' => 'CakeDC/Users',
            'controller' => 'Users',
            'action' => 'login',
            'bypassAuth' => true,
        ],
        [
            'plugin' => false,
            'controller' => 'Pages',
            'action' => 'home',
        ],
    ]
];
