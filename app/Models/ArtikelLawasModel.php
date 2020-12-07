<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelLawasModel extends Model
{
    protected $table      = 'tbl_artikel_lawas';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['judul', 'organisasi', 'nama', 'tanggal', 'berita', 'gambar', 'berita2'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
