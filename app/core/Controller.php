<?php


abstract class Controller
{
    protected function index($params = [])
    {
            print_r("base controller");
    }

    protected function renderView($view, $dataParams = [])
    {
            require_once '../app/view/'.$view.'.phtml';
    }

}