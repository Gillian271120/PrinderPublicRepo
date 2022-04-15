<?php
return [
    'CakeDC/Auth.permissions' => [
        [
            'plugin' => 'DebugKit',
            'controller' => '*',
            'action' => '*',
            'byPassAuth' => false,
        ],
        [
            'plugin' => 'CakeDC/Users',
            'controller' => 'Users',
            'action' => 'login',
            'byPassAuth' => true,
        ],
        [
            'plugin' => false,
            'controller' => 'Pages',
            'action' => 'home',
        ],
    ]
];
