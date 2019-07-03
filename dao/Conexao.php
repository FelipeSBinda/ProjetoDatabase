<?php
    class Conexao{
        static function conectar(){
            try{
                $conn = new PDO("mysql:host=localhost;dbname=db_projeto","root","");
                $conn->setAtribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
?>