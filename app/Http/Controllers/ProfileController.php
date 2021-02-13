<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\ProfileModel;

class ProfileController extends Controller
{
    //

    function index(){
        return ProfileModel::index();

    }

    function getByUserId($id){
        return ProfileModel::obtenerPorUsuarioId($id);

    }

    function create(Request $request){
        if($request->isMethod('post')){

            $rules = [
                "nombre" => "required",
                "apellidos" => "required",
                "cell_phone_number" => "required",
                "phone_number" => "required",
                "edad" => "required",

            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails()){

            }else{
                $data['nombre'] = request('nombre');
                $data['apellidos'] = request('apellidos');
                $data['cell_phone_number'] = request('cell_phone_number');
                $data['phone_number'] = request('phone_number');
                $data['edad'] = request('edad');

                ProfileModel::crear($data);



            }

        }else{

        }

    }


    function delete($id){
        return ProfileModel::eliminar($id);
    }

}
