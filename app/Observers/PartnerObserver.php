<?php
/**
 * Created by PhpStorm.
 * User: eduardopaludo
 * Date: 2/4/18
 * Time: 6:58 PM
 */

namespace App\Observers;


use App\Partner;

class PartnerObserver
{
    use UploadObserverTrait;

    protected $field = 'photo';
    protected $path = 'partner/';

    public function creating(Partner $model){
        $this->sendFile($model);
    }

    public function deleting(Partner $model){
        $this->removeFile($model);
    }

    public function updating(Partner $model){
        $this->updateFile($model);
    }
}