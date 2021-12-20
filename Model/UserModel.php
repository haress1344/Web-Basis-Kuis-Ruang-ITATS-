<?php
class UserModel
{
    /**
     * @param integer $idUser berisi id user
     * Function get berfungsi untuk mengambil seluruh data pada id User dari database
     */
    public function get($idUser)
    {
        $sql = "SELECT * from user WHERE id=$idUser";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}
