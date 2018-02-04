<?php
/**
 * Created by PhpStorm.
 * User: eduardopaludo
 * Date: 2/4/18
 * Time: 6:20 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerPhoto extends Model
{
    protected $fillable = ['url', 'partner_id'];
    protected $appends = ['full_url'];

    protected function getFullUrlAttribute(){
        if($this->attributes['url']){
            return 'https://s3-'.env('AWS_DEFAULT_REGION').'.amazonaws.com/'.env('AWS_BUCKET').'/partner_photo/'.$this->attributes['url'];
        }else {
            return null;
        }
    }
}