<?php
namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Bbs extends Model
{
   protected $fillable = ['name','comment']; // 追記したところ
}