<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => array(
        'Application',
        'Market',
        'Search',
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array('config/autoload/{,*.}{global,local}.php'),
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_cache_enabled' => false,
        'config_cache_key' => '1',
        'module_map_cache_enabled' => false,
        'module_map_cache_key' => '1',
        'cache_dir' => 'data/cache/module',
        'check_dependencies' => true
    )
);
