<?php

class AuthModel
{

    /**
     * Function untuk cek dari database berdasarkan
     * @param String $id berisi id
     * @param String $password berisi password
     */
    public function prosesAuthUser($id, $password)
    {
        $sql = "select * from user where id_user='$id' and pass_user='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesStoreUser($id, $password, $nama)
    {
        $sql = "INSERT INTO user (id_user, pass_user, nama_user) VALUES('$id', '$password', '$nama')";
        return koneksi()->query($sql);
    }
}
