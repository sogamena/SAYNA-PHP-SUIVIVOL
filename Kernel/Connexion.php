<?php
    namespace Kernel;
    use \Config\DB;
    class Connexion{
        private static $pdo;
        private function __construct(){
           
        }
        public static function get(){
            if(!isset(self::$pdo)){
                try{
                    //Création de l'objet PDO
                    self::$pdo = new \PDO('mysql:host='.DB::HOST.';dbname='.DB::NAME,DB::USERNAME, DB::PASSWORD);
            
                    //Configuration des options de PDO
                    self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
                    //Vous étes maintenant connecté sur la base de donnés
                    //....Votre cod pour exécuter des requêtes et
            
                }catch (\PDOException $e) {
                    // En cas d'erreur de connexion, affichage du message d'erreur
                    echo 'Erreur de connexion : ' .$e->getMessage();
                }
            }
            return self::$pdo;
        }
        public static function query($query){
            return self::get()->query($query)->fetchAll();
        }

        // public static function query($query, $class, $params=[]){
        //     $stmt = self::get()->prepare($query);
        //     $stmt ->execute($params);
        //     return $stmt->fetchAll();
        // }
    }

    
?>