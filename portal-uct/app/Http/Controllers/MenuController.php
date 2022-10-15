<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class MenuController extends Controller {
    
    public function index() {
        //Declaracion de varaibles a partir de la informacion de la sesion
        // $n_rut = session('rut_nro');
        // $n_dv  = session('dv_nro'); 

        //Pregunta si existe la sesion, sino avanza
        if(!session()->has('rut_nro')) {
            return view('inicio');
        } else {
            // Inicializamos variables que tomara la consulta
            $n_rut = session('rut_nro');
            $n_dv  = session('dv_nro'); 
            $nom_com = session('nom_com');
            $tel = $_POST['telef1'];
            $email = $_POST['email'];
            $oficina = $_POST['oficina'];
            $visi_esquema_completo = $_POST['visi_esquema_completo'];

            if($visi_esquema_completo == "NN"){
                $visi_esquema_completo = '';
            }
            
            // Accedemos a la base de datos y generamos la consulta para determinar si el usuario en funcionario de planta
            // mediante esta información se activa o se desactiva la opción de ingresar número de oficina
            $query_uct = DB::select("SET NOCOUNT ON; exec TRAZA.dbo.confirma_registro @pers_rut_nro = ?, @pers_dv = ?, @pers_email = ?, @pers_fono_per = ?, @pers_esquema_completo = ?, @pers_extra1 = ?", [$n_rut,$n_dv,$email,$tel,$visi_esquema_completo,$oficina]);
            return view('qr',[
                "n_com" => $nom_com,]);
        }
    }

}