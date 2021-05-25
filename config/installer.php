<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server Requirements
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel server requirements, you can add as many
    | as your application require, we check if the extension is enabled
    | by looping through the array and run "extension_loaded" on it.
    |
    */
    'core' => [
        'minPhpVersion' => '7.2.5',
    ],
    'final' => [
        'key' => true,
        'publish' => false,
    ],
    'requirements' => [
        'php' => [
            'bcmath',
            'ctype',
            'fileinfo',
            'JSON',
            'mbstring',
            'openssl',
            'pdo',
            'tokenizer',
            'xml',
            'cURL',
        ],
        'apache' => [
            'mod_rewrite',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Folders Permissions
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel folders permissions, if your application
    | requires more permissions just add them to the array list bellow.
    |
    */
    'permissions' => [
        'storage/framework/'     => '775',
        'storage/logs/'          => '775',
        'bootstrap/cache/'       => '775',
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment Form Wizard Validation Rules & Messages
    |--------------------------------------------------------------------------
    |
    | This are the default form field validation rules. Available Rules:
    | https://laravel.com/docs/validation#available-validation-rules
    |
    */
    'environment' => [
        'form' => [
            'rules' => [
                'app_name'              => 'required|string|max:50',
                'environment'           => 'required|string|max:50',
                'environment_custom'    => 'required_if:environment,other|max:50',
                'app_debug'             => 'required|string',
                'log_level'             => 'required|string|max:50',
                'log_channel'           => 'required|string|max:50',
                'app_url'               => 'required|url',
                'database_connection'   => 'required|string|max:50',
                'database_hostname'     => 'required|string|max:50',
                'database_port'         => 'required|numeric',
                'database_name'         => 'required|string|max:50',
                'database_username'     => 'required|string|max:50',
                'database_password'     => 'nullable|string|max:50',
                'broadcast_driver'      => 'required|string|max:50',
                'cache_driver'          => 'required|string|max:50',
                'session_driver'        => 'required|string|max:50',
                'queue_driver'          => 'required|string|max:50',
                'redis_hostname'        => 'required|string|max:50',
                'redis_password'        => 'string|max:50',
                'redis_port'            => 'required|numeric',
                'mail_driver'           => 'required|string|max:50',
                'mail_host'             => 'required|string|max:50',
                'mail_port'             => 'required|string|max:50',
                'mail_username'         => 'string|max:50',
                'mail_password'         => 'required|string|max:50',
                'mail_encryption'       => 'required|string|max:50',
                'mail_from_address'     => 'string|max:50',
                'mail_from_name'        => 'string|max:50',
                'pusher_app_id'         => 'max:50',
                'pusher_app_key'        => 'max:50',
                'pusher_app_secret'     => 'max:50',
                'pusher_app_cluster'    => 'max:50',
                'aws_access_key_id'     => 'max:255',
                'aws_secret_access_key' => 'max:255',
                'aws_default_region'   => 'max:50',
                'aws_bucket'            => 'max:255',
            ],
        ],
    ],

    /*
     |--------------------------------------------------------------------------
     | Main settings
     |--------------------------------------------------------------------------
     |
     |  These settings are saved to .env files.
     |  Down below you can specify what settings you want to save.
     |
     */
    'settings' => [
        'environment' => [
            'title' => 'installer::installer_messages.environment.wizard.tabs.environment',
            'fields' => [
                'app-name' => [
                    'envKey' => 'APP_NAME',
                    'type' => 'text',
                    'default' => 'Laravel',
                    'rule' => 'required|string|max:50',
                    'label' => 'installer::installer_messages.environment.wizard.form.app_name_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.app_name_placeholder',
                ],
                'app-env' => [
                    'envKey' => 'APP_ENV',
                    'type' => 'select',
                    'default' => 'local',
                    'rule' => 'required|string|in:local,development,qa,production',
                    'label' => 'installer::installer_messages.environment.wizard.form.app_environment_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.app_environment_placeholder',
                    'options' => [
                        'local' => 'installer::installer_messages.environment.wizard.form.app_environment_label_local',
                        'development' => 'installer::installer_messages.environment.wizard.form.app_environment_label_development',
                        'qa' => 'installer::installer_messages.environment.wizard.form.app_environment_label_qa',
                        'production' => 'installer::installer_messages.environment.wizard.form.app_environment_label_production',
                    ],
                ],
                'app-debug' => [
                    'envKey' => 'APP_DEBUG',
                    'type' => 'radio',
                    'default' => 'true',
                    'rule' => 'required|string|in:true,false',
                    'label' => 'installer::installer_messages.environment.wizard.form.app_debug_label',
                    'options' => [
                        'true' => 'installer::installer_messages.environment.wizard.form.app_debug_label_true',
                        'false' => 'installer::installer_messages.environment.wizard.form.app_debug_label_false',
                    ],
                ],
                'app-url' => [
                    'envKey' => 'APP_URL',
                    'type' => 'text',
                    'default' => 'http://localhost',
                    'rule' => 'required|string|max:255',
                    'label' => 'installer::installer_messages.environment.wizard.form.app_url_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.app_url_placeholder',
                ],
                'log-channel' => [
                    'envKey' => 'LOG_CHANNEL',
                    'type' => 'select',
                    'default' => 'stack',
                    'rule' => 'required|string|in:custom,daily,errorlog,monolog,null,papertrail,single,slack,stack,syslog',
                    'label' => 'installer::installer_messages.environment.wizard.form.log_channel_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.log_channel_placeholder',
                    'options' => [
                        'custom' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.custom',
                        'daily' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.daily',
                        'errorlog' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.errorlog',
                        'monolog' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.monolog',
                        'null' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.null',
                        'papertrail' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.papertrail',
                        'single' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.single',
                        'slack' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.slack',
                        'stack' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.stack',
                        'syslog' => 'installer::installer_messages.environment.wizard.form.app_tabs.channels.syslog',
                    ],
                ],
                'log-level' => [
                    'envKey' => 'LOG_LEVEL',
                    'type' => 'select',
                    'default' => 'debug',
                    'rule' => 'required|string|in:debug,info,notice,warning,error,critical,alert,emergency',
                    'label' => 'installer::installer_messages.environment.wizard.form.log_level_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.log_level_placeholder',
                    'options' => [
                        'debug' => 'installer::installer_messages.environment.wizard.form.log_level_label_debug',
                        'info' => 'installer::installer_messages.environment.wizard.form.log_level_label_info',
                        'notice' => 'installer::installer_messages.environment.wizard.form.log_level_label_notice',
                        'warning' => 'installer::installer_messages.environment.wizard.form.log_level_label_warning',
                        'error' => 'installer::installer_messages.environment.wizard.form.log_level_label_error',
                        'critical' => 'installer::installer_messages.environment.wizard.form.log_level_label_critical',
                        'alert' => 'installer::installer_messages.environment.wizard.form.log_level_label_alert',
                        'emergency' => 'installer::installer_messages.environment.wizard.form.log_level_label_emergency',
                    ],
                ],
            ],
        ],
        'database' => [
            'title' => 'installer::installer_messages.environment.wizard.tabs.database',
            'fields' => [
                'db-connection' => [
                    'envKey' => 'DB_CONNECTION',
                    'type' => 'select',
                    'default' => 'mysql',
                    'rule' => 'required|string|in:mysql,sqlite,pgsql,sqlsrv',
                    'label' => 'installer::installer_messages.environment.wizard.form.db_connection_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.db_connection_placeholder',
                    'options' => [
                        'mysql' => 'installer::installer_messages.environment.wizard.form.db_connection_label_mysql',
                        'sqlite' => 'installer::installer_messages.environment.wizard.form.db_connection_label_sqlite',
                        'pgsql' => 'installer::installer_messages.environment.wizard.form.db_connection_label_pgsql',
                        'sqlsrv' => 'installer::installer_messages.environment.wizard.form.db_connection_label_sqlsrv',
                    ],
                ],
                'db-host' => [
                    'envKey' => 'DB_HOST',
                    'type' => 'text',
                    'default' => '127.0.0.1',
                    'rule' => 'required|string|max:50',
                    'label' => 'installer::installer_messages.environment.wizard.form.db_host_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.db_host_placeholder',
                ],
                'db-port' => [
                    'envKey' => 'DB_PORT',
                    'type' => 'number',
                    'default' => '3306',
                    'rule' => 'required|string|max:6',
                    'label' => 'installer::installer_messages.environment.wizard.form.db_port_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.db_port_placeholder',
                ],
                'db-database' => [
                    'envKey' => 'DB_DATABASE',
                    'type' => 'text',
                    'rule' => 'required|string|max:50',
                    'label' => 'installer::installer_messages.environment.wizard.form.db_name_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.db_name_placeholder',
                ],
                'db-username' => [
                    'envKey' => 'DB_USERNAME',
                    'type' => 'text',
                    'rule' => 'required|string|max:50',
                    'label' => 'installer::installer_messages.environment.wizard.form.db_username_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.db_username_placeholder',
                ],
                'db-password' => [
                    'envKey' => 'DB_PASSWORD',
                    'type' => 'password',
                    'rule' => 'required|string|max:50',
                    'label' => 'installer::installer_messages.environment.wizard.form.db_password_label',
                    'placeholder' => 'installer::installer_messages.environment.wizard.form.db_password_placeholder',
                ],
            ],
        ],
        'application' => [
            'title' => 'installer::installer_messages.environment.wizard.tabs.application',
            'fields' => [
                'accordion-1' => [
                    'installer::installer_messages.environment.wizard.form.app_tabs.broadcasting_title' => [
                        'broadcast-driver' => [
                            'envKey' => 'BROADCAST_DRIVER',
                            'type' => 'select',
                            'default' => 'log',
                            'more-info' => 'https://laravel.com/docs/broadcasting',
                            'rule' => 'required|string|in:log,pusher,ably,redis,null',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.broadcast_driver_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.broadcast_driver_placeholder',
                            'options' => [
                                'log' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.log',
                                'pusher' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.pusher',
                                'ably' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.ably',
                                'redis' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.redis',
                                'null' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.null',
                            ],
                        ],
                        'cache-driver' => [
                            'envKey' => 'CACHE_DRIVER',
                            'type' => 'select',
                            'default' => 'file',
                            'more-info' => 'https://laravel.com/docs/cache',
                            'rule' => 'required|string|in:file,apc,array,database,memcached,redis,dynamodb,octane,null',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.cache_driver_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.cache_driver_placeholder',
                            'options' => [
                                'file' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.file',
                                'apc' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.apc',
                                'array' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.array',
                                'database' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.database',
                                'memcached' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.memcached',
                                'redis' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.redis',
                                'dynamodb' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.dynamodb',
                                'octane' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.octane',
                                'null' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.null',
                            ],
                        ],
                        'queue-connection' => [
                            'envKey' => 'QUEUE_CONNECTION',
                            'type' => 'select',
                            'default' => 'sync',
                            'more-info' => 'https://laravel.com/docs/queues',
                            'rule' => 'required|string|in:sync,database,beanstalkd,sqs,redis,null',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.queue_connection_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.queue_connection_placeholder',
                            'options' => [
                                'sync' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.sync',
                                'database' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.database',
                                'beanstalkd' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.beanstalkd',
                                'sqs' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.sqs',
                                'redis' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.redis',
                                'null' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.null',
                            ],
                        ],
                        'session-driver' => [
                            'envKey' => 'SESSION_DRIVER',
                            'type' => 'select',
                            'default' => 'file',
                            'more-info' => 'https://laravel.com/docs/session',
                            'rule' => 'required|string|in:file,cookie,apc,array,database,memcached,redis,dynamodb',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.session_driver_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.session_driver_placeholder',
                            'options' => [
                                'file' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.file',
                                'cookie' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.cookie',
                                'apc' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.apc',
                                'array' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.array',
                                'database' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.database',
                                'memcached' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.memcached',
                                'redis' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.redis',
                                'dynamodb' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.dynamodb',
                            ],
                        ],
                        'session-lifetime' => [
                            'envKey' => 'SESSION_LIFETIME',
                            'type' => 'number',
                            'default' => '120',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.session_lifetime_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.session_lifetime_placeholder',
                        ],
                        'memcached-host' => [
                            'envKey' => 'MEMCACHED_HOST',
                            'type' => 'text',
                            'default' => '127.0.0.1',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.memcached_host_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.memcached_host_placeholder',
                        ],
                    ],
                ],
                'accordion-2' => [
                    'installer::installer_messages.environment.wizard.form.app_tabs.redis_label' => [
                        'redis-host' => [
                            'envKey' => 'REDIS_HOST',
                            'type' => 'text',
                            'default' => '127.0.0.1',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.redis_host_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.redis_host_placeholder',
                        ],
                        'redis-password' => [
                            'envKey' => 'REDIS_PASSWORD',
                            'type' => 'password',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.redis_password_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.redis_password_placeholder',
                        ],
                        'redis-port' => [
                            'envKey' => 'REDIS_PORT',
                            'type' => 'number',
                            'default' => '6379',
                            'rule' => 'required|string|max:6',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.redis_port_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.redis_port_placeholder',
                        ],
                    ],
                ],
                'accordion-3' => [
                    'installer::installer_messages.environment.wizard.form.app_tabs.mail_label' => [
                        'mail-driver' => [
                            'envKey' => 'MAIL_MAILER',
                            'type' => 'select',
                            'default' => 'smtp',
                            'rule' => 'required|string|in:smtp,sendmail,mailgun,ses,postmark,log,array',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_driver_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_driver_placeholder',
                            'options' => [
                                'smtp' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.smtp',
                                'sendmail' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.sendmail',
                                'mailgun' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.mailgun',
                                'ses' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.ses',
                                'postmark' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.postmark',
                                'log' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.log',
                                'array' => 'installer::installer_messages.environment.wizard.form.app_tabs.drivers.array',
                            ],
                        ],
                        'mail-host' => [
                            'envKey' => 'MAIL_HOST',
                            'type' => 'text',
                            'default' => 'mailhog',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_host_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_host_placeholder',
                        ],
                        'mail-port' => [
                            'envKey' => 'MAIL_PORT',
                            'type' => 'number',
                            'default' => '1025',
                            'rule' => 'required|string|max:6',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_port_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_port_placeholder',
                        ],
                        'mail-username' => [
                            'envKey' => 'MAIL_USERNAME',
                            'type' => 'text',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_username_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_username_placeholder',
                        ],
                        'mail-password' => [
                            'envKey' => 'MAIL_PASSWORD',
                            'type' => 'password',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_password_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_password_placeholder',
                        ],
                        'mail-encryption' => [
                            'envKey' => 'MAIL_ENCRYPTION',
                            'type' => 'select',
                            'rule' => 'required|string|in:tls,ssl,starttls',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_driver_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_driver_placeholder',
                            'options' => [
                                'tls' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_encryption.tls',
                                'ssl' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_encryption.ssl',
                                'starttls' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_encryption.starttls',
                            ],
                        ],
                        'mail-from-address' => [
                            'envKey' => 'MAIL_FROM_ADDRESS',
                            'type' => 'text',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_from_address_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_from_address_placeholder',
                        ],
                        'mail-from-name' => [
                            'envKey' => 'MAIL_FROM_NAME',
                            'type' => 'text',
                            'rule' => 'required|string|max:50',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_from_name_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.mail_from_name_placeholder',
                        ],
                    ],
                ],
                'accordion-4' => [
                    'installer::installer_messages.environment.wizard.form.app_tabs.pusher_label' => [
                        'pusher-app-id' => [
                            'envKey' => 'PUSHER_APP_ID',
                            'type' => 'text',
                            'rule' => 'nullable|string|max:255',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_id_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_id_placeholder',
                        ],
                        'pusher-app-key' => [
                            'envKey' => 'PUSHER_APP_KEY',
                            'type' => 'text',
                            'rule' => 'nullable|string|max:255',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_key_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_key_placeholder',
                        ],
                        'pusher-app-secret' => [
                            'envKey' => 'PUSHER_APP_SECRET',
                            'type' => 'text',
                            'rule' => 'nullable|string|max:255',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_secret_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_secret_placeholder',
                        ],
                        'pusher-cluster' => [
                            'envKey' => 'PUSHER_APP_CLUSTER',
                            'type' => 'select',
                            'default' => 'mt1',
                            'rule' => 'required|string|in:mt1,us2,us3,eu,ap1,ap2,ap3,ap4',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_cluster_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_app_cluster_placeholder',
                            'options' => [
                                'mt1' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.mt1',
                                'us2' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.us2',
                                'us3' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.us3',
                                'eu' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.eu',
                                'ap1' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.ap1',
                                'ap2' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.ap2',
                                'ap3' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.ap3',
                                'ap4' => 'installer::installer_messages.environment.wizard.form.app_tabs.pusher_clusters.ap4',
                            ],
                        ],
                    ],
                ],
                'accordion-5' => [
                    'installer::installer_messages.environment.wizard.form.app_tabs.aws_label' => [
                        'aws-access-key-id' => [
                            'envKey' => 'AWS_ACCESS_KEY_ID',
                            'type' => 'text',
                            'rule' => 'nullable|string|max:255',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_access_key_id_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_access_key_id_placeholder',
                        ],
                        'aws-secret-access-key' => [
                            'envKey' => 'AWS_SECRET_ACCESS_KEY',
                            'type' => 'text',
                            'rule' => 'nullable|string|max:255',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_secret_access_key_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_secret_access_key_placeholder',
                        ],
                        'aws-default-region' => [
                            'envKey' => 'AWS_DEFAULT_REGION',
                            'type' => 'select',
                            'default' => 'us-east-1',
                            'more-info' => 'https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions',
                            'rule' => 'required|string|in:us-east-2,us-east-1,us-west-1,us-west-2,af-south-1,ap-east-1,ap-south-1,ap-northeast-3,ap-northeast-2,ap-southeast-1,ap-southeast-2,ap-northeast-1,ca-central-1,eu-central-1,eu-west-1,eu-west-2,eu-south-1,eu-west-3,eu-north-1,me-south-1,sa-east-1',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_default_region_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_default_region_placeholder',
                            'options' => [
                                'us-east-2' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.us-east-2',
                                'us-east-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.us-east-1',
                                'us-west-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.us-west-1',
                                'us-west-2' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.us-west-2',
                                'af-south-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.af-south-1',
                                'ap-east-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ap-east-1',
                                'ap-south-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ap-south-1',
                                'ap-northeast-3' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ap-northeast-3',
                                'ap-northeast-2' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ap-northeast-2',
                                'ap-southeast-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ap-southeast-1',
                                'ap-southeast-2' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ap-southeast-2',
                                'ap-northeast-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ap-northeast-1',
                                'ca-central-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.ca-central-1',
                                'eu-central-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.eu-central-1',
                                'eu-west-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.eu-west-1',
                                'eu-west-2' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.eu-west-2',
                                'eu-south-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.eu-south-1',
                                'eu-west-3' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.eu-west-3',
                                'eu-north-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.eu-north-1',
                                'me-south-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.me-south-1',
                                'sa-east-1' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_regions.sa-east-1',
                            ],
                        ],
                        'aws-bucket' => [
                            'envKey' => 'AWS_BUCKET',
                            'type' => 'text',
                            'rule' => 'nullable|string|max:255',
                            'label' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_bucket_label',
                            'placeholder' => 'installer::installer_messages.environment.wizard.form.app_tabs.aws_bucket_placeholder',
                        ],
                    ],
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Installed Middleware Options
    |--------------------------------------------------------------------------
    | Different available status switch configuration for the
    | canInstall middleware located in `canInstall.php`.
    |
    */
    'installed' => [
        'redirectOptions' => [
            'route' => [
                'name' => 'welcome',
                'data' => [],
            ],
            'abort' => [
                'type' => '404',
            ],
            'dump' => [
                'data' => 'Dumping a not found message.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Selected Installed Middleware Option
    |--------------------------------------------------------------------------
    | The selected option fo what happens when an installer instance has been
    | Default output is to `/resources/views/error/404.blade.php` if none.
    | The available middleware options include:
    | route, abort, dump, 404, default, ''
    |
    */
    'installedAlreadyAction' => '',

    /*
    |--------------------------------------------------------------------------
    | Updater Enabled
    |--------------------------------------------------------------------------
    | Can the application run the '/update' route with the migrations.
    | The default option is set to False if none is present.
    | Boolean value
    |
    */
    'updaterEnabled' => 'true',

];
