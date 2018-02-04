<?php
/**
 * Created by PhpStorm.
 * User: eduardopaludo
 * Date: 2/4/18
 * Time: 6:17 PM
 */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiControllerTrait;
use App\PartnerPhoto;
use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;


class PartnerPhotosController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $rules = [
        'url' => 'required',
        'partner_id' => 'required',
    ];

    protected $messages = [
        'required' => ':attribute é obrigatório',
    ];

    public function __construct(PartnerPhoto $model){
        $this->model = $model;
    }

    public function index(Request $request, $id){
        $results = $this->model
            ->where('partner_id', $id)
            ->get();

        return response()->json($results);
    }
}