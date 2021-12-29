<?php

namespace App\Models;

use CodeIgniter\Model;

class Book extends Model
{
    protected $DBGroup          = 'perpus';
    protected $table            = 'bookModel';
    protected $primaryKey       = 'judulbuku';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'pengarang', 'tahunterbit'];

}