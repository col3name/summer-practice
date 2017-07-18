
<?

include_once($_SERVER['DOCUMENT_ROOT'] . '/template/php/SiteLanguage.class.php');
define("INCLUDE_PATH", $_SERVER["DOCUMENT_ROOT"] . '/template/');

$lang = new SiteLanguage();
$lang->setupLanguage();

include_once( $_SERVER["DOCUMENT_ROOT"] . '/template/'  . 'lang' . SITE_DIR . 'constants.php');

function includeFile($_file) {
    include_once("include/" . $_file . ".php");
}

function getMessage($message) {
    global $MESSAGES;
    return $MESSAGES[$message];
}

function getUserText($text) {
    echo file_get_contents(INCLUDE_PATH . 'lang' . SITE_DIR . 'texts/' . $text . '.php');
}

?>