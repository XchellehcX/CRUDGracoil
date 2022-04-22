<?php

require_once "./config.php";

class usuarios{
	public $id;
	public $nombre;
	public $puesto;
	public $ubicacion;
    private $conectarmysql;

	
	 public function __construct(){
        $this->conectarmysql = new conexion();
        
       

	 }

	    public function altausuario($nombre,$puesto,$ubicacion){

	 	    $insert = "INSERT INTO `usuarios` (`idUser`, `Nombre`, `Puesto`, `Ubicacion`) VALUES (NULL,?,?,?);";
            $consulta = $this->conectarmysql->mysqly->prepare($insert);
            $consulta->bind_param("sss",$nombre,$puesto,$ubicacion);
            if($consulta->execute()){
            //$this->iduser= mysqli_insert_id($this->conectarmysql->mysqly);
            //echo 'Se inserto el registro exitoso con id: '. mysqli_insert_id($this->conectarmysql->mysqly); 
            }else{
                echo 'Fallo el registro error: '. mysqli_error($this->conectarmysql->mysqly);
            }
        
        }

        public function getUsuarios(){
            $sql = "select * from usuarios";
            $usuarios = [];
            
            if ($resultado = $this->conectarmysql->mysqly->query($sql)){
                
                while($usuario = $resultado->fetch_row()){
                    array_push($usuarios, $usuario);
                }
            }

            //terminar conexion
            $this->conectarmysql->desconet();

            return $usuarios;
        }
        public function editarempleado($id,$nombre,$puesto,$ubicacion){

            $insert = "UPDATE `usuarios` SET `Nombre` = ?, `Puesto` = ?, `Ubicacion` = ? WHERE `usuarios`.`idUser` = ?;";
           $consulta = $this->conectarmysql->mysqly->prepare($insert);
       

           $consulta->bind_param("sssi",$nombre,$puesto,$ubicacion,$id);


           if($consulta->execute()){
           //$this->iduser= mysqli_insert_id($this->conectarmysql->mysqly);
           //echo 'Se inserto el registro exitoso con id: '. mysqli_insert_id($this->conectarmysql->mysqly); 
           }else{
               echo 'Fallo el registro error: '. mysqli_error($this->conectarmysql->mysqly);
           }
       
        }
        public function eliminarempleado($id){

            $insert = "DELETE FROM usuarios WHERE `usuarios`.`idUser` = ?;";
            $consulta = $this->conectarmysql->mysqly->prepare($insert);
            $consulta->bind_param("i",$id);
            if($consulta->execute()){
            
            }else{
               echo 'Fallo el registro error: '. mysqli_error($this->conectarmysql->mysqly);
            }
       
        }



        
     //echo "<pre>".print_r($_POST,true)."</pre>";
    }

    /* 
        Empiezan acciones POST 
    */
        if(isset($_POST['accion'])){
            if($_POST['accion'] == 'altaempleado'){
                
                $nombre = $_POST['nombre'];
                $puesto = $_POST['puesto'];
                $ubicacion = $_POST['ubicacion'];

                $newprod = new usuarios();
                $newprod->altausuario($nombre,$puesto,$ubicacion);
                header('Location: http://127.0.0.1/crudgracoil/table.php' );    
            }
        }

        if(isset($_POST['accion'])){
            if($_POST['accion'] == 'editarempleado'){
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $puesto = $_POST['puesto'];
                $ubicacion = $_POST['ubicacion'];

                $newprod = new usuarios();
                $newprod->editarempleado($id,$nombre,$puesto,$ubicacion);
                header('Location: http://127.0.0.1/crudgracoil/table.php' );    
            }
        }
        if(isset($_POST['accion'])){
            if($_POST['accion'] == 'deleteempleado'){
                $id = $_POST['id'];
                $newprod = new usuarios();
                $newprod->eliminarempleado($id);
                header('Location: http://127.0.0.1/crudgracoil/table.php' );    
            }
        }

    
?>