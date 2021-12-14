<?php


require_once("koneksi.php");

/**
 * Memanggil Model
 */
require_once("Model/AuthModel.php");


/**
 * Memanggil Controller
 */
require_once("Controller/AuthController.php");


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
        } else {
            echo "Method Not Found";
        }
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}
