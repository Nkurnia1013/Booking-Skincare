<?php

/**
 *
 */

namespace app;

use \Crud as Crud;

class Admin
{

    public function Home()
    {
        $data = [
            'judul' => 'Home',
            'path' => 'Home',
            'link' => 'Home',
            'icon' => 'fa-home',

            'warna' => 'primary',

        ];
        return $data;
    }
    public function Perawatan($Request, $Session)
    {
        $data = [
            'judul' => 'Daftar Perawatan',
            'path' => 'Admin/Perawatan',
            'link' => 'Data-Perawatan',

        ];
        //Fungsi::fields('perawatan', new Crud);
        $fields1 = '[
                {"name":"id_perawatan","label":"ID Perawatan","type":"text","max":"15","pnj":12,"val":null,"red":"readonly","input":true,"up":true,"tb":true},
                {"name":"nama_perawatan","label":"Nama Perawatan","type":"text","max":"30","pnj":12,"val":null,"red":"","input":true,"up":true,"tb":true},
                {"name":"jenis_perawatan","label":"Jenis Perawatan","type":"text","max":"25","pnj":12,"val":null,"red":"","input":true,"up":true,"tb":true},
                {"name":"harga","label":"Harga","type":"number","max":null,"pnj":12,"val":null,"red":"","input":true,"up":true,"tb":true},
                {"name":"gambar","label":"Gambar","type":"text","max":"65535","pnj":12,"val":null,"red":"","input":true,"up":true,"tb":true},
                {"name":"desk","label":"Deskripsi","type":"textarea","max":"65535","pnj":12,"val":null,"red":"","input":true,"up":true,"tb":true}
                ]';
        $data['form'] = json_decode($fields1, true);
        $data['form'][0]['val'] = "Pn-" . uniqid();
        $data['data'] = collect(Crud::table('perawatan')->select()->get());

        return $data;
    }
    public function Pengguna($Request, $Session)
    {
        $data = [
            'judul' => 'Data ',
            'path' => 'Admin/Pengguna',
            'link' => 'Daftar',

        ];
        // Fungsi::fields('pengguna', $Crud);
        if ($Request->jenis == 'Pelanggan') {
            $data['judul'] = 'Data Pelanggan';
            $data['link'] = 'Data-Pelanggan';
        }
        if ($Request->jenis == 'Admin') {
            $data['judul'] = 'Data Admin';
            $data['link'] = 'Data-Admin';

        }
        $fields1 = '[
                {"name":"idpengguna","label":"ID Pengguna","type":"text","max":"15","pnj":12,"val":null,"red":"readonly","input":true,"up":true,"tb":true},
                {"name":"nama","label":"Nama Lengkap","type":"text","max":"30","pnj":8,"val":null,"red":"","input":true,"up":true,"tb":true},
                {"name":"jk","label":"Jenis Kelamin","type":"text","max":"10","pnj":4,"val":null,"red":"","input":true,"up":true,"tb":true},
                {"name":"alamat","label":"Alamat","type":"text","max":"40","pnj":12,"val":null,"red":"","input":true,"up":true,"tb":true}
                ]';
        $data['user.form'] = json_decode($fields1, true);
        $fields1 = '[
                {"name":"no_hp","label":"No HP","type":"text","max":"12","pnj":6,"val":null,"red":"","input":true,"up":true,"tb":true},

                {"name":"email","label":"Email","type":"email","max":"35","pnj":6,"val":null,"red":"","input":true,"up":true,"tb":true},
                {"name":"username","label":"Username","type":"text","max":"15","pnj":12,"val":null,"red":"required ","input":true,"up":true,"tb":true},
                {"name":"password","label":"Password","type":"password","max":"15","pnj":12,"val":null,"red":"required ","input":true,"up":true,"tb":false}
                ]';
        $data['user.form2'] = json_decode($fields1, true);

        $data['user.form'][0]['val'] = "P-" . uniqid();
        $data['data'] = collect(Crud::table('perawatan')->select()->get());

        return $data;
    }

}
