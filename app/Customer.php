<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
    protected $primaryKey='Id_Customer';
    protected $fillable=['Nama_Customer','Alamat_Customer']; 
}
