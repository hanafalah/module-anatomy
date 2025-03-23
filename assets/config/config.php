<?php

use Hanafalah\ModuleAnatomy\{
    Models,
    Schemas,
    Contracts
};

return [
    'contracts'    => [
        'anatomy'        => Contracts\Anatomy::class,
        'module_anatomy' => Contracts\ModuleAnatomy::class
    ],
    'examinations' => [
        'Anatomy' => [
            'schema' => Schemas\Anatomy::class
        ]
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts'
    ],
    'database' => [
        'models' => [
            'Anatomy' => Models\Anatomy::class
        ]
    ]
];
