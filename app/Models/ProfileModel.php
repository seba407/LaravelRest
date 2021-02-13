<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ProfileModel extends Model
{
    use HasFactory;

    protected $table = 'profile';

    public static function index(){
        $profile = DB::table('profile')->get();

        return $profile;
    }

    public static function obtenerPorUsuarioId($id){
        $profile = DB::table('profile')->where('usuario_id',$id)->get();
        return $profile;


    }

    public static function crear($profile){
        DB::table('profile')->insert($profile);
    }


    public static function eliminar($id){
        DB::delete('DELETE FROM profile WHERE id = ?',[$id]);

    }



}
