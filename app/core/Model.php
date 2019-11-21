<?php
require_once '../app/config/Container.php';

class Model
{
    protected $db;
    public function __construct()
    {
        $this->db = Container::getDb();
    }
}