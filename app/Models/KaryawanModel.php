<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Karyawan';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['id','nama','status','alamat'];
  
}