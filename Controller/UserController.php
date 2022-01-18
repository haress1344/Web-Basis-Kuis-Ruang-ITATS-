<?php
class UserController
{
    private $model;

    /**
     * Function ini adalah konstruktor yang berguna menginisialisasi objek aslab model
     */
    public function __construct()
    {
        $this->model = new UserModel();
    }

    /**
     * functio index digunakan untuk mengatur tampilan awal
     */
    public function index()
    {
        $idUser = $_SESSION['user']['id'];
        $data = $this->model->get($idUser);
        extract($data);
        require_once("View/Auth/User.php");
    }
}