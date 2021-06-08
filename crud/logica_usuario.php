<?php
 Session_start();
 include_once("funcoes.php");


#CADASTRAR

if(isset($_REQUEST['cadastrar'])){

    $cidade = $_REQUEST['nova_cidade'];
    $estado = $_REQUEST['estado']; 

   
            $query = "INSERT into cidades (cidade, estado) values (?,?)";
            $array = array($cidade, $estado);
            $usuario=fazConsulta($query,'query',$array);
            if($usuario)
            {
                $_SESSION['mensagem'] = "Cidade cadastrada!";
                header('location:../cadastrarcidade.php');
        
            }
            else
            {
                $_SESSION['mensagem'] = "Ops, não foi possível efetuar o cadastro!
                                        Verifique se essa cidade já foi cadastrada.";
                header('location:../cadastrarcidade.php');
            }
        }  
?>