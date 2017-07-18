<?
class SiteLanguage {
    private $langs =  array("ru", "en");

    public function setupLanguage() {
        foreach ($this->langs as $lang) {
            $urlMatch = stripos($_SERVER["REQUEST_URI"], "/" . $lang . "/") === 0;
            $requestMatch = $_REQUEST["lang"] === $lang;

            if ($urlMatch || $requestMatch) {
                $this->set($lang);
                return;
            }
        }

        $this->setDefault();
    }

    private function setDefault() {
        define("LANGUAGE_ID", "ru");
        define("SITE_DIR", "/ru/");
    }
    
    private function set($lang) {
        define("LANGUAGE_ID", $lang);
        define("SITE_DIR", "/" . $lang . "/");
    }
}