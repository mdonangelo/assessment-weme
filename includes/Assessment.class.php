<?php

include_once "Conexao.class.php";

class Assessment {
    
    private $con;
    private $id;
    private $nome;
    private $empresa;
    private $email;
    private $cargo;
    private $leadership;
    private $peopleAndOperations;
    private $structure;
    private $dataAnalytics;
    private $technology;
    private $ambidexterity;
    private $resultadoFinal;
    private $envio;

    public function __construct(){
        $this->con = new Conexao();
    }
    
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    
    public function selecionarPeloId($dado){
        try{
            $this->id = $dado;
            $cst = $this->con->conectar()->prepare("SELECT * FROM `assessment` WHERE `id` = :id;");
            $cst->bindParam(":id", $this->id, PDO::PARAM_INT);
            $cst->execute();
            return $cst->fetch();
        } catch (PDOException $e) {
            return 'error '.$e->getMessage();
        }
    }

    public function selecionaTodos(){
        try{
            $cst = $this->con->conectar()->prepare("SELECT * FROM `assessment` ORDER BY `envio` DESC;");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $e) {
            return 'error '.$e->getMessage();
        }
    }

    public function inserir($dados, $resultado){
        try{
            $this->nome = $dados['nome'];
            $this->empresa = $dados['empresa'];
            $this->email = $dados['email'];
            $this->cargo = $dados['cargo'];
            $this->leadership = $dados['leadership'];
            $this->peopleAndOperations = $dados['peopleAndOperations'];
            $this->structure = $dados['structure'];
            $this->dataAnalytics = $dados['dataAnalytics'];
            $this->technology = $dados['technology'];
            $this->ambidexterity = $dados['ambidexterity'];
            $this->resultadoFinal = $resultado;
            $this->envio = date('Y-m-d H:i:s', time());

            $cst = $this->con->conectar()->prepare("INSERT INTO `assessment` (`nome`, `empresa`, `email`, `cargo`, `leadership`, `peopleAndOperations`, `structure`, `dataAnalytics`, `technology`, `ambidexterity`, `resultadoFinal`, `envio`) VALUES (:nome, :empresa, :email, :cargo, :leadership, :peopleAndOperations, :structure, :dataAnalytics, :technology, :ambidexterity, :resultadoFinal, :envio);");

            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":empresa", $this->empresa, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            $cst->bindParam(":cargo", $this->cargo, PDO::PARAM_STR);
            $cst->bindParam(":leadership", $this->leadership, PDO::PARAM_INT);
            $cst->bindParam(":peopleAndOperations", $this->peopleAndOperations, PDO::PARAM_INT);
            $cst->bindParam(":structure", $this->structure, PDO::PARAM_INT);
            $cst->bindParam(":dataAnalytics", $this->dataAnalytics, PDO::PARAM_INT);
            $cst->bindParam(":technology", $this->technology, PDO::PARAM_INT);
            $cst->bindParam(":ambidexterity", $this->ambidexterity, PDO::PARAM_INT);
            $cst->bindParam(":resultadoFinal", $this->resultadoFinal, PDO::PARAM_STR);
            $cst->bindParam(":envio", $this->envio, PDO::PARAM_STR);
            
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $e) {
            return 'error '.$e->getMessage();
        }
    }
    
    public function atualizar($dados){
        try{
            
            $this->nome = $dados['nome'];
            $this->empresa = $dados['empresa'];
            $this->email = $dados['email'];
            $this->cargo = $dados['cargo'];
            $this->leadership = $dados['leadership'];
            $this->peopleAndOperations = $dados['peopleAndOperations'];
            $this->structure = $dados['structure'];
            $this->dataAnalytics = $dados['dataAnalytics'];
            $this->technology = $dados['technology'];
            $this->ambidexterity = $dados['ambidexterity'];
            $this->resultadoFinal = $resultado;


            $cst = $this->con->conectar()->prepare("UPDATE `assessment` SET  `nome` = :nome, `empresa` = :empresa, `email` = :email, `cargo` = :cargo, `leadership` = :leadership, `peopleAndOperations` = :peopleAndOperations, `structure` = :structure, `dataAnalytics` = :dataAnalytics, `technology` = :technology, `ambidexterity` = :ambidexterity, `resultadoFinal` = :resultadoFinal WHERE `id` = :id;");
            
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":empresa", $this->empresa, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            $cst->bindParam(":cargo", $this->cargo, PDO::PARAM_STR);
            $cst->bindParam(":leadership", $this->leadership, PDO::PARAM_INT);
            $cst->bindParam(":peopleAndOperations", $this->peopleAndOperations, PDO::PARAM_INT);
            $cst->bindParam(":structure", $this->structure, PDO::PARAM_INT);
            $cst->bindParam(":dataAnalytics", $this->dataAnalytics, PDO::PARAM_INT);
            $cst->bindParam(":technology", $this->technology, PDO::PARAM_INT);
            $cst->bindParam(":ambidexterity", $this->ambidexterity, PDO::PARAM_INT);
            $cst->bindParam(":resultadoFinal", $this->resultadoFinal, PDO::PARAM_INT);

            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $e) {
            return 'error '.$e->getMessage();
        }
    }
    
    public function deletar($dado){
        try{
            $this->id = $dado;
            $cst = $this->con->conectar()->prepare("DELETE FROM `assessment` WHERE `id` = :id;");
            $cst->bindParam(":id", $this->id, PDO::PARAM_INT);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $e) {
            return 'error'.$e->getMessage();
        }
    }
}

?>
