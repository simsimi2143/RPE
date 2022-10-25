<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function index(Request $request){
        $rut_nro = $_POST["rut"];
        $rut_dv  = $_POST["dv"];


        //Inicia la sesion y trae los datos desde el formulario inicial
        if($rut_nro != ''){
            session(['rut_nro' => $_POST['rut']]);
            session(['dv_nro' => $_POST['dv']]);
        }
        //Declaracion de varaibles a partir de la informacion de la sesion
        $n_rut = session('rut_nro');
        /* It's a method to get the value of the input field named `dv_nro` */
        $n_dv  = session('dv_nro'); 

        /* It's a method to get the value of the input field named `rut_nro` */
        $request->input('rut_nro');

        //Pregunta si existe la sesion, sino avanza
        if(!session()->has('rut_nro')) {
            return view('inicio');
        } else {
            request()->validate([
                'rut'=>'required_without:pasaporte|digits:8',
                'dv' =>'required_without:p|digits:1'
            ]);
        
    
            //Obtencion de varaibles ingresadas


            //Pregunta si existe la persona en la UCT
            $query_uct = DB::select("exec TRAZA.dbo.buscar_persona_rutdv @rut_nro = ?, @dv = ?", [$n_rut, $n_dv]);

            //Pregunta si la persona existe en el registro
            $query_registro = DB::select("exec TRAZA.dbo.existe_registro @rut_nro = ?", [$n_rut]);

            //Pregunta si el cargo de la persona es funcionario de planta
            $query_cargo = DB::select("exec TRAZA.dbo.planta_identificar @rut_nro = ?", [$n_rut]);

            //Extrae 1 o 0 segun la consulta registro
            $obj = $query_registro[0]->pers_existe;

            //arma el rut con el digito verificador
            $a_rut_nro = $n_rut."-".$n_dv;
            session(['a_rut_nro' => $a_rut_nro]);

            //Define las variables para el cargo en caso de ser de la UCT
            if ($query_cargo==[]){
                $cargo = 0;
                session(['cargo' => $cargo]);
            } else{
                $cargo = $query_cargo[0]->pers_origen;
                session(['cargo' => $cargo]);
            }
            


            //Redirecionamiento a las paginas segun las consultas anteriores
            if ($query_uct == []){
                // Si no existe en la vista_personas es vacio retorna al registro
                // return $n_rut.'-'.$n_dv;
                return view('registro', [
                    "n_rut" => $a_rut_nro]);
            }
            else{
                //Si existe la persona en la vista_personas
                $pnom = $query_uct[0]->pers_nombres;
                $pap = $query_uct[0]->pers_paterno;
                $pam = $query_uct[0]->pers_materno;
                $nom_com = $pnom." ".$pap." ".$pam;

                if ($obj == 0){
                    // 0 = no existe registro de confirmación del rut


                    //Se guarda en la variable de sesion el nombre completo
                    session(['nom_com' => $nom_com]);
                    $is_nom = session('nom_com');

                    //retorna la vista y envia los datos necesarios de la vista confirma
                    return view('confirma',[
                        "n_rut" => $a_rut_nro,
                        /* It's a method to get the value of the input field named `n_com` */
                        "n_com" => $nom_com,
                        "carg"  => $cargo
                    ]);
                }
                else{
                    // 1 o más = si existe registro de confirmación del rut
                    session(['nom_com' => $nom_com]);
                    return view('qr',[
                        "n_com" => $nom_com]);
                }
            }
        }
    }

}