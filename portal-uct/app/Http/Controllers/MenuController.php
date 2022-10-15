<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class MenuController extends Controller {
    
    public function index() {
        // Preguntamos si la sesión existente está activa
        // ya que de esta forma procedemos a tomar los valores adquiridos de la vista anterior 
        // y así tomarlos en esta para trabajarlos.
        if(!session()->has('rut_nro')) {
            return view('inicio');
        } else {
            // Inicializamos las variables de nuestro stored procedure
            // las cuales almacenarán los datos que se van a registrar en la BD 
            $n_rut = session('rut_nro');
            $n_dv  = session('dv_nro');
            $visi_nombres = $_POST['visi_nombres'];
            $visi_paterno = $_POST['visi_paterno'];
            $visi_materno = $_POST['visi_materno'];
            $nom_com = $visi_nombres.' '.$visi_paterno.' '.$visi_materno;
            $visi_fecha_nac = $_POST['visi_fecha_nac'];

            // condicional para sexo_nombre
            $sexo_codigo = $_POST['sexo_codigo'];
            $visi_fono_per = $_POST['visi_fono_per'];
            $visi_email = $_POST['visi_email'];
            $visi_esquema_completo = $_POST['visi_esquema_completo'];
            $visi_cargo = "VISITA";
            $visi_extra1 = '';
            $visi_extra2 = '';
            $visi_extra3 = '';
            $usuario_mod = $n_rut;

            if($visi_esquema_completo == "NN"){
                $visi_esquema_completo = '';
            }


            // Condicional para cuando se selecciona un radio se defina si la persona es femenina o masculino
            if($sexo_codigo == 1) {
                $sexo_nombre = "Masculino";
            } else if($sexo_codigo == 2) {
                $sexo_nombre = "Femenino";
            } else if($sexo_codigo == 3) {
                $sexo_nombre = "Otro";
            } else if($sexo_codigo == 0) {
                $sexo_nombre = '';
            } else {
                $sexo_nombre = '';
            }

            // Realizamos nuestra consulta mediante el stored procedure, además se le asigna un formato a la fecha de nacimiento 
            // para no generar conflicto en el registro, cabe destacar que el llamado de esta consulta debe ser en el mismo 
            // orden que en el de nuestro stored procedure 
            $query_uct = DB::select("SET NOCOUNT ON; SET DATEFORMAT ymd; exec TRAZA.dbo.ingresa_visita @visi_rut_nro = ?, @visi_dv = ?, @visi_paterno = ?, 
            @visi_materno = ?, @visi_nombres = ?, @visi_email = ?, @visi_fono_per = ?, @sexo_codigo = ?, @sexo_nombre = ?, @visi_fecha_nac = ?, 
            @visi_cargo = ?, @visi_esquema_completo = ?, @visi_extra1 = ?, @visi_extra2 = ?, @visi_extra3 = ?, @usuario_mod = ?", [$n_rut, $n_dv, 
            $visi_paterno, $visi_materno, $visi_nombres, $visi_email, $visi_fono_per, $sexo_codigo, $sexo_nombre, $visi_fecha_nac, $visi_cargo,
            $visi_esquema_completo, $visi_extra1, $visi_extra2, $visi_extra3, $usuario_mod]);


            // validamos los datos de la sesion
            if ($query_uct != [] || $query_uct='' || empty($query_uct)){
                // Si no existe en la vista_personas es vacio retorna al registro
                session(['nom_com' => $nom_com]);
                $is_nom = session('nom_com');
                return view('qr',[
                    "n_com" => $nom_com,]);
            }
            else{
                return view('registro');
            }
        }
    }
}