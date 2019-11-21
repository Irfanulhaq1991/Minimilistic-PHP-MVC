<?php


class Home extends Controller
{

    public function index($params = []){
       $this->renderView('login',$params);
    }

    public function login($params = [])
    {
//        print_r($params);
    }

}