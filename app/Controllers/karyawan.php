<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;
class karyawan extends BaseController
{
    protected $pm;
    private $menu;
    private $rules;
    public function __construct()
    {
        $this->pm = new KaryawanModel();

        $this->menu =[
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
                'aktif' => 'active',
            ],
            'pelanggan' => [
                'title' => 'pelanggan',
                'link' => base_url() .'/pelanggan',
                'icon' => 'fa-solid fa-address-card',
                'aktif' => '',
            ],
            'obat' => [
                'title' => 'Obat',
                'link' => base_url() . '/obat',
                'icon' => 'fa-solid fa-list',
                'aktif' => '',
            ],
        ];
        
        $this->rules = [
            'nama' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong',
                ]
            ],
            'status' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'Status tidak boleh kosong',
                ]
            ],
            'alamat' => [
                'rules' =>'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong',
                ]
            ],
            
        ];
    }
    public function index()
    {
        
        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">Karyawan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="' . base_url() .'">Beranda</a></li>
                                <li class="breadcrumb-item active">karyawan</li>
                            </ol>
                        </div>';    
        $data['menu'] = $this->menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Data karyawan";

        $query = $this->pm->find();
        $data['data_karyawan'] = $query;
        return view('karyawan/content', $data);
    }
    
    public function tambah()
    {
        $breadcrumb = '<div class="col-sm-6">
                        <h1 class="m-0">karyawan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="' .base_url() .'">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="'.base_url().'">karyawan</a></li>
                            <li class="breadcrumb-item active">Tambah karyawan</li>
                        </ol>
                    </div>';
        $data['menu'] = $this->menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = 'Tambah karyawan';
        $data['action'] = base_url().'/karyawan/simpan';
        return view('karyawan/input', $data);
    }
    
    public function simpan()
    {
        $breadcrumb ='<div class="col-sm-6">
                            <h1 class="m-0">karyawan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="'.base_url().'">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="'.base_url().'">karyawan</a></li>
                                <li class="breadcrumb-item active">Tambah karyawan</li>
                            </ol>
                        </div>';
            $data['menu'] = $this->menu;
            $data['breadcrumb'] = $breadcrumb;
            $data['title_card'] = 'Tambah karyawan';
            $data['action'] = base_url().'/karyawan/simpan';
        if (strtolower($this->request->getMethod()) !=='POST') {
            
            return view('karyawan/input', $data);
        }
        
        if (!$this->validate($this->rules)) {
            return view('karyawan/input', $data);
        }

        
        $dt = $this->request->getPost();
        
        $simpan = $this->pm->insert($dt);
        dd($simpan);
    }
    
}