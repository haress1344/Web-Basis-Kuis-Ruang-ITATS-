<?php


require_once("koneksi.php");

/**
 * Memanggil Model
 */
require_once("Model/AuthModel.php");
require_once("Model/UserModel.php");


/**
 * Memanggil Controller
 */
require_once("Controller/AuthController.php");
require_once("Controller/UserController.php");


if (isset($_GET['page']) && isset($_GET['aksi'])) {

    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new AuthController();
        if ($aksi == 'view') {
            $auth->index();
        } else if ($aksi == 'loginUser') {
            $auth->loginUser();
        } else if ($aksi == 'authUser') {
            $auth->authUser();
        } else if ($aksi == 'daftarUser') {
            $auth->daftarUser();
        } else if ($aksi == 'logout') {
            $auth->logout();
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "user") {
        require_once("View/Auth/User.php");

        if ($_SESSION['role'] == 'user') {
            $user = new UserController();
            if ($aksi == 'view') {
                $user->index();
            } else {
                echo "Method Not Found";
            }
        } else {
            header("location: index.php?page=auth&aksi=loginUser");
        }
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}
