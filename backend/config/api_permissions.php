<?php

return [
    'CakeDC/Auth.api_permissions' => [
            [
                'role' => '*',
                'service' => 'auth',
                'action' => ['jwt_login', 'register'],
                'bypassAuth' => true,
            ],
            [
                'role' => '*',
                'service' => '*',
                'action' => '*',
                'method' => '*',
            ],
    ]
];
