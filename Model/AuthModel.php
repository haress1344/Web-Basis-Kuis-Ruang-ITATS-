<?php

class AuthModel
{

    /**
     * Function untuk cek dari database berdasarkan
     * @param String $npm berisi npm
     * @param String $password berisi password
     */
    public function prosesAuthUser($id, $password)
    {
        $sql = "select * from user where id_user='$id' and pass_user='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}
