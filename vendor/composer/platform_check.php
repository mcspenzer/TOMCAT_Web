<?php

// platform_check.php @generated by Composer

$issues = array();

if (!(PHP_VERSION_ID >= 50308)) {
    $issues[] = 'Your Composer dependencies require a PHP version ">= 5.3.8". You are running ' . PHP_VERSION  .  '.';
}

$missingExtensions = array();
extension_loaded('hash') || $missingExtensions[] = 'hash';

if ($missingExtensions) {
    $issues[] = 'Your Composer dependencies require the following PHP extensions to be installed: ' . implode(', ', $missingExtensions);
}

if ($issues) {
    echo 'Composer detected issues in your platform:' . "\n\n" . implode("\n", $issues);
    exit(104);
}
