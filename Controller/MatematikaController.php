<?php
class MatematikaController
{

    private $model;

    public function __construct()
    {
        $this->model = new MatematikaModel();
    }


    public function index()
    {

        require_once("View/KontenMatematika/MatematikaIndex.php");
    }
    public function soal_lingkaran()
    {

        $data = $this->model->get();
        extract($data);
        require_once("View/KontenMatematika/Lingkaran.php");
    }

}
