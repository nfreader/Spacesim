<?php

//Production safe defaults
//DO NOT EDIT THIS FILE!

$settings = [];

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

$settings['app'] = [
  'name' => 'Spacesim',
  'timezone' => 'UTC',
  'version' => VERSION
];

$settings['modules'] = [
  // 'register' => true
  'discord_auth' => true,
];

$settings['twig'] = [
  'paths' => [
    __DIR__ . '/../views',
  ],
  'options' => [
    'debug' => false,
    'cache_enabled' => true,
    'cache_path' => $settings['temp'] . '/twig',
  ],
];

// Error handler
$settings['error'] = [
  'display_error_details' => false,
  'log_errors' => true,
  'log_error_details' => true,
];

$settings['database'] = [
  'method'     => 'mysql',
  'host'       => '127.0.0.1',
  'port'       => 3306,
  'database'   => 'spacesim',
  'username'   => 'root',
  'password'   => '',
  'prefix'     => '',
  'flags'      => [
    PDO::ATTR_PERSISTENT               => TRUE,
    PDO::ATTR_ERRMODE                  => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE       => PDO::FETCH_OBJ,
    PDO::ATTR_STRINGIFY_FETCHES        => FALSE,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => TRUE,
    PDO::MYSQL_ATTR_COMPRESS           => TRUE
  ]
];

$settings['auth'] = [
  'discord' => [
    'OAUTH2_CLIENT_ID' => '',
    'OAUTH2_CLIENT_SECRET' => '',
    'authorizeURL' => 'https://discord.com/api/oauth2/authorize',
    'tokenURL' => 'https://discord.com/api/oauth2/token',
    'apiURLBase' => 'https://discord.com/api/users/@me'
  ]
];

$settings['session'] = [
  'name' => 'ssim',
  'cache_expire' => 0,
];

$settings['permissions'] = [
  'ADMIN' => (1 << 0),
  'GALAXY' => (1 << 1),
  'GOVERNMENTS' => (1 << 2),
  'COMMODITIES' => (1 << 3),
  'OUTFITS' => (1 << 4),
  'SHIPS' => (1 << 5),
];

return $settings;
