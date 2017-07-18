<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/component/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/articles.php');

$link = getConnection(LANGUAGE_ID);

$article = articles_last($link);

include_once($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/home.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');