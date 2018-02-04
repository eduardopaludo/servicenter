<?php
/**
 * Created by PhpStorm.
 * User: eduardopaludo
 * Date: 2/4/18
 * Time: 5:55 PM
 */

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\ApiControllerTrait;
use App\Partner;
use Laravel\Lumen\Routing\Controller;

class PartnersController extends Controller
{
    use ApiControllerTrait;

    protected $model;

    protected $rules = [
        'name' => 'required|min:3',
        'description' => 'required',
    ];

    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de pelo menos :min caracteres',
    ];

    protected $relationships = ["address"];

    public function __construct(Partner $model)
    {
        $this->model = $model;
    }
}