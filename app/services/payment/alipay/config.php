<?php
return [
    'code' => 'alipay',
    'desc' => Yii::t('app', 'alipay_desc'),
    'is_cod' => '0',
    'is_online' => '1',
    'author' => 'ECTouch',
    'website' => 'http://www.alipay.com',
    'version' => '2.0.0',
    'config' => [
        ['name' => 'alipay_account', 'type' => 'text', 'value' => ''],
        ['name' => 'alipay_key', 'type' => 'text', 'value' => ''],
        ['name' => 'alipay_partner', 'type' => 'text', 'value' => '']
    ],
];