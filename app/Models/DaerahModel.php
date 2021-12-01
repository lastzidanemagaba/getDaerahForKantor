<?php namespace App\Models;

use CodeIgniter\Model;

class DaerahModel extends Model
{
    protected $table = 'wilayah_2020';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['nama'];
}
