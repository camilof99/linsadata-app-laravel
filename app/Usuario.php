<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\DB;

class Usuario extends Authenticatable
{
    //
    use Notifiable;

    /*public function loginAuth($datos){

/*$users = DB::select('select * from usuarios where email = ?', [$datos['email']]);

        if(empty($users)){
            return false;
        }else{
            return true;
        }/ return true;
    }*/
}
