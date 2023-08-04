<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class obat extends BaseController
{
    public function index()
    {
        $menu = [
            'berenda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => '',
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
                'aktif' => 'active',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">Obat</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="' . base_url() .'">Beranda</a></li>
                                <li class="breadcrumb-item active">obat</li>
                            </ol>
                        </div>';    
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Data obat";
            return view('obat/content', $data);
    
    }
}