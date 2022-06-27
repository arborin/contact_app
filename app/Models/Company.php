<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = ['name', 'address', 'email', 'website'];


}


$data = [
    "name" => "nika kobaidze",
    "address"=>"Company address",
    "email"=>"n.kobaidze@gmai.com",
    "website"=>"http://top.ge"
];
