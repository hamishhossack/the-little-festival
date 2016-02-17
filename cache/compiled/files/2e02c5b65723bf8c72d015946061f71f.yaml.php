<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/hamishhossack/Sites/tlf/user/config/plugins/email.yaml',
    'modified' => 1455745974,
    'data' => [
        'enabled' => true,
        'from' => 'team@thelittlefestival.co.uk',
        'to' => 'hamishhossack@hotmail.co.uk',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
