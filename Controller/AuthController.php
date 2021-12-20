<?php

class AuthController
{
    private $model;

    /**
     *Function ini adalah konstruktor yang berguna menginisialisasi objek auth model 
     */
    public function __construct()
    {
        $this->model = new AuthModel();
    }

    /**
     * Function index berfungsi untuk mengatur tampilan awal
     */
    public function index()
    {
        require_once("View/Auth/index.php");
    }
    public function loginUser()
    {
        require_once("View/Auth/Login.php");
    }

    public function authUser()
    {
        $id = $_POST['id_user'];
        $password = $_POST['pass_user'];
        $data = $this->model->prosesAuthUser($id, $password);
        if ($data) {
            $_SESSION['role'] = 'user';
            $_SESSION['user'] = $data;
            header("location: index.php?page=user&aksi=view&pesan=Berhasil Login");
        } else {
            header("location: index.php?page=auth&aksi=loginUser&pesan=Password atau ID Salah");
        }
    }

    public function daftarUser()
    {
        require_once("View/Auth/SignUp.php");
    }

    public function logout()
    {
        session_destroy();
        header("location: index.php?page=auth&aksi=view&pesan=Berhasil-Logout");
    }
}
