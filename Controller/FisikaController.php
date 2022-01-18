<?php
class FisikaController
{

    private $model;

    public function __construct()
    {
        $this->model = new FisikaModel();
    }


    public function index()
    {

        require_once("View/KontenFisika/FisikaIndex.php");
    }
    public function soal_besaranPokok()
    {

        $data = $this->model->get();
        extract($data);
        require_once("View/KontenFisika/BesaranPokok.php");
    }

}
