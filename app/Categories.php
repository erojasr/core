<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model{

 protected $table = 'categories';
 protected $primaryKey = 'id';
 protected $fillable = ['id','category_name','description','icon','parent'];
 protected $hidden = ['created_at','updated_at'];
 
}