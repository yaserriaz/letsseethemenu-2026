<?php
/**
 * Environment + public base URL for <base href>.
 * Local XAMPP: http://localhost/letsseethemenu-2026/
 * Staging:     https://staging.letsseethemenu.com/
 */
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$is_local = (bool) preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/i', $host);

if ($is_local) {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $doc_root = isset($_SERVER['DOCUMENT_ROOT'])
        ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']) ?: $_SERVER['DOCUMENT_ROOT'])
        : '';
    $app_root = str_replace('\\', '/', realpath(dirname(__DIR__)) ?: dirname(__DIR__));
    $rel = '';
    if ($doc_root !== '' && strpos($app_root, $doc_root) === 0) {
        $rel = substr($app_root, strlen($doc_root));
    }
    $rel = '/' . trim(str_replace('\\', '/', $rel), '/');
    if ($rel === '/') {
        $rel = '';
    }
    $sitepath = $scheme . '://' . $host . $rel . '/';
} else {
    // Use actual hostname — works for staging, production, and any future domain
    $sitepath = 'https://' . $host . '/';
}
