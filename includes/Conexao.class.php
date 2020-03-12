<?php

class Conexao{
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;
    
    // BD LOCAL
    public function __construct(){
        $this->servidor = "localhost";
        $this->banco = "dash_partnership";
        $this->usuario = "root";
        $this->senha = "";
    }

    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $ex) {
			echo $ex->getMessage();
        }
    }
    
}

?>
