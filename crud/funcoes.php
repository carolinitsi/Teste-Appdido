<?php

function fazconexao(){
    $stringDeConexao = 'mysql:host=localhost;charset=utf8;dbname=bancoappdido;';
    $usuario = 'root';
    $senha = '';
    try{
        $link = new PDO($stringDeConexao,$usuario,$senha);
         $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $link;
        } 
    catch(PDOException $ex){
    die($ex->getMessage());
    }

}

function fazConsulta($sql,$tipo,$parametros=array(),&$id=-1){
    try {
        $conexaoBD = fazConexao();
        $consulta = $conexaoBD->prepare($sql);
        
        if (count($parametros) > 0) { 
            for($i=0;$i<count($parametros); $i++){
                $consulta->bindParam($i+1,$parametros[$i]);
            }
        }
        $consulta->execute();
        if ($id == 0) {
            $id = $conexaoBD->lastInsertId();
        }
        if($tipo=='query')
        {
        	return($consulta);
        }
        elseif($tipo == 'fetchAll')
        {
        	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        }
        elseif($tipo == 'fetch')
        {
			$resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        }
        return($resultado);
    }
    catch (PDOException $e) {
    	var_dump($e);
        return false;
    }
}

function ConsultaSelect($sql,$parametros=array()){
    try {
        $conexaoBD = fazConexao();
        $consulta = $conexaoBD->prepare($sql);
        if (sizeof($parametros) > 0) { 
           $result = $consulta->execute($parametros);
        } 
        else{
            $result = $consulta->execute();
        }  
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return($resultado);
    }
    catch (PDOException $e) {
        return($e);
    }
}
?>