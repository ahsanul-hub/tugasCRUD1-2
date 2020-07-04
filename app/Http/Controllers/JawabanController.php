<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\JawabanModel;

class JawabanController extends Controller
{
    public function store($pertanyaan_id, Request $request){
        
        $data = $request->all();
        unset($data['_token']);
        JawabanModel::save($data);
        return redirect('/pertanyaan');
    }
}
