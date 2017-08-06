<?php

// Deactivates the circular reference collector for improved performance:
gc_disable();

/**
 * Bootstrap your tests here: WordPress, WPMock, etc...
 */

// First we need to load the composer autoloader so we can use WP Mock
require_once __DIR__ . '/vendor/autoload.php';

// Now call the bootstrap method of WP Mock
WP_Mock::bootstrap();
