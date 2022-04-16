<?php
return [
    'Users' => [
        // table used to manage users
        'table' => \App\Model\Table\UsersTable::class,
        'Email' => [
            // determines if the user should include email
            'required' => false,
            // determines if registration workflow includes email validation
            'validate' => false,
        ],
        'Tos' => [
            // determines if the user should include tos accepted
            'required' => false,
        ],
    ],
];

