<?php
    namespace Kernel;

    class Model{

        protected static string $table;
    
        public static function all(){
            $query = 'select aeroports.nomaeroports, aeroports.ville, pays.nompays from aeroports JOIN pays where aeroports.pays_id=pays.id';
            return Connexion::query($query);
        }

        public static function find($id){
            $query = 'select * from '.self::getTable().' where id=:id';
            $result = Connexion::query($query,get_called_class(),['id'=>$id]);

            if(isset($result[0])){
                return $result[0];
            }else{
                return null;
            }
        }

        public static function getTable(){
            $class = get_called_class();
            return $class::$table;
        }
    }
?>