<?php return [
    // Global settings
    '*' => [
        // If `devMode` is on, use webpack-dev-server to all for HMR (hot module reloading)
        'useDevServer' => false,
        // The JavaScript entry from the manifest.json to inject on Twig error pages
        'errorEntry' => 'main.js',
        // Manifest file names
        'manifest' => [
            'legacy' => 'mix-manifest.json',
            'modern' => 'mix-manifest.json',
        ],
        // Public server config
        'server' => [
            'manifestPath' => '@webroot/',
            'publicPath' => '/',
        ],
        // webpack-dev-server config
        'devServer' => [
            'manifestPath' => '@devServer',
            'publicPath' => '@devServer',
        ],
        // Local files config
        'localFiles' => [
            'basePath' => '@webroot/',
            'criticalPrefix' => 'dist/criticalcss/',
            'criticalSuffix' => '_critical.min.css',
        ],
    ],
    // Live (production) environment
    'production' => [
        'useDevServer' => false,
    ],
    // Staging (pre-production) environment
    'staging' => [],
    // Local (development) environment
    'dev' => [
        // If `devMode` is on, use webpack-dev-server to all for HMR (hot module reloading)
        'useDevServer' => false,
    ],
];
