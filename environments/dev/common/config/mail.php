<?php

return [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',            
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'noreplythanhle@gmail.com',
                'password' => '!@#noreply!@#',
                'port' => '465',
                'encryption' => 'tls',
            ],
            'useFileTransport' => false,
    ];
