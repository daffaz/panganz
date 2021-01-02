<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table      = 'tbl_kontak';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['namaDepan', 'namaBelakang', 'email', 'nomorTelepon', 'acara'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
