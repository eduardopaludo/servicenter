<?php
/**
 * Created by PhpStorm.
 * User: eduardopaludo
 * Date: 2/4/18
 * Time: 5:52 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name', 'description'];
}