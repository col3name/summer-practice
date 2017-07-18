<?

include_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/component/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/articles.php');

$link = getConnection(LANGUAGE_ID);
$article = articles_get($link, $_GET['id']);

include_once('views/article.php');
?>