<?php
        $koneksi = mysqli_connect("localhost","root", "", "donasi"); 

        function query( $query ){
            global $koneksi;
            $result = mysqli_query($koneksi, $query);
            $wadah = [];
            while( $baju = mysqli_fetch_assoc($result)) {
                $wadah[] =$baju;
            }
            return $wadah;
        }

        function tambah( $data){
            global $koneksi;
            $nama = htmlspecialchars($data["donatur"]);
            $donatur_id = htmlspecialchars($data["donatur_id"]);
            $paket = htmlspecialchars($data["paket"]);
            $kategori = htmlspecialchars($data["kategori"]);
            $nominal = htmlspecialchars($data["nominal"]);
        }

        function dataID($id){
            global $koneksi;
            $donasi = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM donasi WHERE id = $id LIMIT 1 "),MYSQLI_ASSOC);
            return $donasi;
        }
