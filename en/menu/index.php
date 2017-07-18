<?



require_once($_SERVER['DOCUMENT_ROOT'] . '/template/include/base.php');

require_once($_SERVER['DOCUMENT_ROOT'] . '/component/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/Product.php');

$link = getConnection(LANGUAGE_ID);
$productCategory = product_all($link);

include_once('views/several-categories.php');