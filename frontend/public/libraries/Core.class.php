<?php

/******************************
 * url = View
 * Core class
 * routing class
 *****************************/

class Core
{

    private $view = 'pages/index';

    public function __construct()
    {
        require_once './libraries/Controllers.class.php';

        $url = $this->getUrl();
        if (isset($url)) {
            if (file_exists('./views/' . ucwords($url) . '.php')) {
                $this->view = ucwords($url);
                unset($url);
            }
        }
        //require the controller
        require_once './views/' . $this->view . '.php';
    }

    public function getUrl()
    {

        if (isset($_GET['url'])) {

            $url = $_GET['url'];
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = rtrim($url, '/');
            // $url = explode('/', $url);


            return $url;
        }
    }
}
