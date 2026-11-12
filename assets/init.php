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

$commit = ['hash' => trim(file_get_contents(__DIR__ . '/commit.txt')),];

//---------- base structure.. ?>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <title><?php echo htmlspecialchars($_['title']); ?></title>
    <meta charset="UTF-8"/>
    <meta name="application-name" content="clst04.moe"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description"
    content="I'm 22 years-old and I love cats. meow."/>
    <meta property="og:title" content="Celeste's website! (yep, again)"/>
    <meta property="og:description"
    content="I'm 22 years-old and I love cats. meow."/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:locale:alternate" content="fr_FR"/>
    <meta property="og:locale:alternate" content="ja_JP"/>
    <meta property="og:site_name" content="clst04.moe"/>
    <meta property="og:url" content="https://clst04.moe/"/>

    <meta name="twitter:title" content="Celeste's website! (yep, again)"/>
    <meta name="twitter:description" content="I'm 22 years-old and I love cats. meow."/>
    <meta name="twitter:site" content="@CELESTZEROKATRE"/>
    <meta name="twitter:card" content="summary_large_image"/>

    <meta name="theme-color" content="#FFAADD"/>
    <link rel="stylesheet" href="/assets/UI/style.css"/>
</head>