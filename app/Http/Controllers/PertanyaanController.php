<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\PertanyaanModel;
class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaans = PertanyaanModel::get_all();
        
        return view('pertanyaan', compact('pertanyaans'));
    }

    public function create(){
        return view('form_pertanyaan');
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data['_token']);
        PertanyaanModel::save($data);
        return redirect('/pertanyaan');
    }
}
?>