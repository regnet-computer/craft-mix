<?php
return [
    'sources' => [
        // A unique handle that you can reference in your templates.
        'optimized' => [
            // The imgix source domain.
            'domain' => getenv('IMGIX_SOURCE_DOMAIN'),

            // Optionally specify a subfolder path to prefix generated URLs.
            'subfolder' => 'assets/images',

            // The private Imgix key used to sign images.
            // Get this from the source details screen in Imgix.com
            'key' => '12345',

            // Define any default parameters here:
            'defaultParams' => [
                'auto' => 'compress,format',
                'step' => '100',
            ],
        ],
    ],
];
