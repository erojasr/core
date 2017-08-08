<?php
/**
 * Created by PhpStorm.
 * User: eduardo.rojas
 * Date: 2017-08-08
 * Time: 1:54 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Meetups extends Model
{
    protected $table = 'meetups';
    protected $primaryKey = 'pk_meetup';
    protected $fillable = ['pk_meetup','title','description','location','date','image_url'];
    protected $hidden = ['created_at','updated_at'];
}