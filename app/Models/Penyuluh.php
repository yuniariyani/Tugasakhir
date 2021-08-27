<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyuluh extends Model
{
    protected $table = "penyuluh";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','nama_penyuluh','nohp','nip'];

}
