<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => 'active',
            ],
            'karyawan' => [
                'title' => 'karyawan',
                'link' => base_url() . '/karyawan',
                'icon' => 'fa-solid fa-users',
                'aktif' => '',
            ],
            'pelanggan' => [
                'title' => 'pelanggan',
                'link' => base_url() .'/pelanggan',
                'icon' => 'fa-solid fa-address-card',
                'aktif' => '',
            ],
            'obat' => [
                'title' => 'obat',
                'link' => base_url() . '/obat',
                'icon' => 'fa-solid fa-list',
                'aktif' => '',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6 ">
                            <h1 class="m-0">Beranda</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div>';    
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Welcome to my Apotik";
        $data['selamat_datang'] = "Selamat datang di aplikasi Apotik";
        return view('template/content',$data);
    }
}