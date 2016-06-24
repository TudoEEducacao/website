<?php
require 'config.php';

class database {

    public $conn;

    public function __construct() {
        $this->conn = NULL;
    }

    public function __destruct() {
        $this->conn = NULL;

    }  

    public function openConnection() {
                
                $con = mysqli_connect(config::$server_name,config::$username,config::$password,config::$db_name); 

                if(mysqli_connect_errno())
                {
                    echo "Falha ao Conectar";
                }
                return $con;
    }     

    public function sendQuery ($sql) {
        try {
                $this->conn->exec($sql);

                echo "Query Executed";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
    }

    public function registerUser ($nome, $tel, $nasc, $endereco, $atua, $email, $login, $senha) {
        
        $sql = mysqli_query($this->openConnection(),"INSERT INTO PROFESSOR (NOME, LOGIN, SENHA,NIVEL) VALUES ('".$nome."', '".$login."', '".$senha."',1)");

        $sql2 = mysqli_query($this->openConnection(),"SELECT * FROM PROFESSOR WHERE LOGIN ='".$login."'");
         $data=mysqli_fetch_array($sql2);
            $data["IDPROFESSOR"];
            $sql3 = mysqli_query($this->openConnection(),"INSERT INTO DADOS (IDPROFFK, telefone, email, ENDERECO, datanascimento) VALUES ('".$data["IDPROFESSOR"]."','".$tel."', '".$email."', '".$endereco."', '".$nasc."')");

        $sql4 = mysqli_query($this->openConnection(),"SELECT * FROM DADOS WHERE IDPROFFK ='".$data["IDPROFESSOR"]."'");
         $data=mysqli_fetch_array($sql4);
            $data["IDDADOS"];
            $sql3 = mysqli_query($this->openConnection(),"INSERT INTO DADOSAREAINT (IDDADOSFK,IDAREASINTFK) VALUES ('".$data["IDDADOS"]."',1)");
    }

    public function getLastInsertedID () {
        return $this->conn->lastInsertId();
    }

    public function loginUser ($usuario, $senha) {
        
        SESSION_start();
        
        $sql = mysqli_query($this->openConnection(),"SELECT * FROM PROFESSOR WHERE LOGIN ='".$usuario."' && SENHA = '".$senha."'");
        

        if(mysqli_num_rows($sql) == 1)
        {
            
            $data=mysqli_fetch_array($sql);
            
                
                
                $_SESSION["IDsecao"] = $data["IDPROFESSOR"];
                
                header("Location: home.php");
            
        }

        
    }

    public function registrarQuestao($Enuciado, $resposta, $ID, $AREA){
        

        $sql = mysqli_query($this->openConnection(),"INSERT INTO ENUCIADOS (ENUCIADOS) VALUES ('".$Enuciado."')");
        $sql2 = mysqli_query($this->openConnection(),"SELECT * FROM ENUCIADOS WHERE ENUCIADOS ='".$Enuciado."'");
        $data=mysqli_fetch_array($sql2);

        $sql5 = mysqli_query($this->openConnection(),"INSERT INTO QUESTOES (ENUCIADOSFK, IDPROFFK, IDAREASINTFK) VALUES ('".$data["IDENUCIADOS"]."','".$ID."','".$AREA."')");
        $sql3 = mysqli_query($this->openConnection(),"SELECT * FROM QUESTOES as Q inner join ENUCIADOS as E on Q.ENUCIADOSFK = E.IDENUCIADOS inner join PROFESSOR as P on Q.IDPROFFK = P.IDPROFESSOR WHERE IDPROFFK ='".$ID."' AND ENUCIADOS = '".$Enuciado."'");
        //echo "SELECT * FROM QUESTOES as Q inner join ENUCIADOS as E on Q.ENUCIADOSFK = E.IDENUCIADOS inner join PROFESSOR as P on Q.IDPROFFK = P.IDPROFESSOR WHERE IDPROFFK ='".$ID."' AND ENUCIADOS = '".$Enuciado."'";
        $data1=mysqli_fetch_array($sql3);
        
        $sql6 = mysqli_query($this->openConnection(),"INSERT INTO RESPOSTAS (RESPOSTAS, IDQUESTOESFK) VALUES ('".$resposta."','".$data1["IDQUESTOES"]."')");
        
    

    }
}
?>

