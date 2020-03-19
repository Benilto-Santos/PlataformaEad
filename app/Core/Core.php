<?php

namespace App\Core;

use App\Controller\HomeController;

class Core
{
    private $url;
    private $currentController;
    private $currentAction;
    private $parans = [];
    private $c;

    public function run()
    {
        $this->url = "/";
        if (isset($_GET["url"]) && !empty($_GET["url"])) :
            $this->url .= filter_input(INPUT_GET, "url");
        endif;

        if (!empty($this->url) && $this->url !== "/") :
            $this->url = explode("/", $this->url);
            array_shift($this->url);

            $this->currentController = $this->url[0] . "Controller";
            array_shift($this->url);

            if (isset($this->url[0]) && !empty($this->url[0])) :
                $this->currentAction = $this->url[0];
                array_shift($this->url);
            else :
                $this->currentAction = "index";
            endif;

            if (count($this->url) > 0) :
                $this->parans =  $this->url;
            endif;

        else :
            $this->currentController = "HomeController";
            $this->currentAction = "index";
        endif;

        $this->c = new $this->currentController();
        call_user_func_array(array($this->c, $this->currentAction), $this->parans);
    }
}
