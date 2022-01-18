<?php
class MatematikaModel
{
    
    public function get()
    {
        $sql = "SELECT * from soal_matematika";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function jawaban_benar($idSoal){
        $sql = "SELECT jawaban_benar FROM soal_matematika WHERE id=$idSoal";
        $query = koneksi()->query($sql);
        return $query;
    }
}
