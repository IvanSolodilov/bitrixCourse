<?php
use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

/**
 * @global CMain $APPLICATION
 */

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/events.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/events.js');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<header class="events-header">
    <a class="events-header__logo" href="<?= SITE_DIR ?>events/">Мероприятия</a>
    <p class="events-header__slogan"><?= $APPLICATION->ShowProperty('slogan', 'Записывайтесь на мероприятия')?></p>
</header>
<main class="events-main">
    <h1><?php $APPLICATION->ShowTitle(false); ?></h1>
