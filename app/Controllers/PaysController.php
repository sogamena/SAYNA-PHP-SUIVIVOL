<?php
    namespace app\Controllers;

    class PaysController extends \Kernel\Controller{
        public function index(){
            $pays = \app\Models\Pays::all();
            return new \Kernel\View('pays/pays.php',['pays'=>$pays]);
        }


        public function vols(){ 
            $aeroports = \app\Models\Aeroports::all();
            return new \Kernel\View('vols/index.php',['aeroports'=>$aeroports]);
        }
        // public function edit(){
        //     $tany = ['pays'=>$pays];
        //     $pays = \app\Models\Pays::find($_GET[$tany]);
        //     var_dump($pays);
        // }
    }
?>