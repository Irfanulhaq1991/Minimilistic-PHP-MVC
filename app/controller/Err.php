<?php


class Err extends Controller
{

    public function index($params = [])
    {
        $this->renderView('err',$params);
//        print_r('<h1>'.'Error, '.$params['url'].'  Pag not Found'.'</h1>');
    }

}