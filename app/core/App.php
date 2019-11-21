<?php
// routing

class App
{
    private $controller = 'Err';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $this->directToController();
    }


    public function directToController()
    {
        $url = $this->getParseUrl();
        if (isset($url[0])) {
            if (file_exists('../app/controller/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        require_once '../app/controller/' . $this->controller . '.php';
        $this->controller = ucfirst($this->controller);
        $this->controller = new $this->controller;
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->controller->{$this->method}($_REQUEST);
    }

    protected function getParseUrl()
    {
        if (isset($_REQUEST['url'])) {
            return $url = explode('/', filter_var(rtrim($_REQUEST['url']), FILTER_SANITIZE_URL));
        }
    }
}