<?php
// ---------- for debug..
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// ---------- passed $variables..
$date = date('d/m/Y H:i:s');
$langs = ['fr', 'en', 'ja'];
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// ---------- "if", "then", "else"..
// languages set in browser
if (in_array($lang, $langs)) {
    $_ = require_once __DIR__ . "/i18n/{$lang}.php";
} else {
    $_ = require_once __DIR__ . "/i18n/en.php";
}

//---------- DB Connection..
// $dbconn = pg_connect('host=' . $_ENV['host'] . ' dbname=' . $_ENV['dbname'] . ' user=' . $_ENV['user'] . ' password=' . $_ENV['password'] . '')
//     or die('Error.'); 

//---------- base structure..?>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <link rel="stylesheet" href="/assets/UI/style.css">
</head>