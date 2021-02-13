<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\UserModel;

class UserController extends Controller
{
    //
    function index(){
        return UserModel::index();

    }
    function getById($id){
        return UserModel::obtenerPorId($id);

    }

    function getUserProfile($id){
        return UserModel::obtenerUsuarioProfile($id);

    }

    function create(Request $request){
        if($request->isMethod('post')){

            $rules = ["username" => "required","password" => "required","email" => "required"];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails()){
                return $validator->errors();

            }else{
                $data['username'] = request('username');
                $data['password'] = request('password');
                $data['email'] = request('email');

                UserModel::crear($data);
            }
        }else{

        }

    }

    function update(Request $request, $id){
        if($request->isMethod('put')){
            $rules = [
                "username" => "required",
                "active" => "required",
                "email" => "required",
                "rol_id" => "required"];

                $validator = Validator::make($request->all(),$rules);
                if($validator->fails()){
                    return $validator->errors();


                }else{
                    if($id === null){
                        return "id nulo";
                    }else{
                        $data['username'] = request('username');
                        $data['active'] = request('active');
                        $data['email'] = request('email');
                        $data['rol_id'] = request('rol_id');

                        return UserModel::editar($data,$id);



                    }
                }


        }else{
        }

    }

    function delete($id){

        return UserModel::eliminar($id);

    }
}
