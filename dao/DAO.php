<?php
    require_once "Conexao.php";
    class dao{
        public $conn;
        public function _construct(){
            $this->conn = Conexao::conectar();
        }
        function inserir($tabela, $listaObjetos){
            $tuplas = array();
            $toBind = array();
            $colunas = array_keys($listaObjetos[0]);
            foreach ($listaObjetos as $indice=>$valor){
                $parametros=array();
                foreach ($linha as $coluna=>$valor){
                    $parametro = ":".$coluna . $indice;
                    $parametros=$parametro;
                    $toBind[$parametro]=$valor;
                }
            $tuplas[]="(".implode(",", $parametros).")";
            }
        $sql = "INSERT INTO `$tabela` (" . implode("," , $colunas).") VALUES".implode (",",$tuplas);
        $stmt = $this->conn->prepare($sql);
        foreach ($toBind as $parametro => $valor){
            $stmt->bindValue($parametro, $valor);
        }
        return $stmt->execute();
        }
        function buscarTodos($tabela){
            
        }
    }    
?>