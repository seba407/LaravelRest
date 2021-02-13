<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';

    public static function index(){
        $users = DB::table('user')->get();

        return $users;
    }

    public static function obtenerPorId($id){
        $user = DB::table('user')->join('rol','user.rol_id','=','rol.id')->where('user.id',$id)->get();
        return $user;

    }

    public static function obtenerUsuarioProfile($id){
        $user = DB::table('user')->join('profile','user.id','=','profile.usuario_id')->where('user.id',$id)->get();
        return $user;
    }

    public static function crear($user){

        DB::table('user')->insert($user);

    }

    public static function editar($user,$id){
        $respuesta = DB::table('user')->where('id',$id)->update([$user]);

        return $respuesta;

    }

    public static function eliminar($id){
        DB::delete('DELETE FROM user WHERE id = ?',[$id]);

    }






}
