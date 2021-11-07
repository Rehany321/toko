<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'table_barang';
    protected $primaryKey = 'id';
    public $incrementing = false;
    // protected $keyType = 'string';

    public $timstamps = false;

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    // protected $connection = 'toko';

}
