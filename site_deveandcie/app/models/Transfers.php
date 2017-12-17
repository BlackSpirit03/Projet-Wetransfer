<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
	public $timestamps = true;
    protected $table = 'transfers';
    protected $primaryKey = 'id_transfer'; 
    protected $fillable = [
        'real_name', 'file_name', 'exp_mail', 'dest_mail', 'dest_message'
    ];

}
