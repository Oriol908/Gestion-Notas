<?php
class UserDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }
    public function modificarNota($id,$mates,$fisica,$programacion){
        $query= "UPDATE `tbl_notas` SET `nota` = ? WHERE `id_alumnos` = ? AND nombre_asignatura LIKE 'mates';";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindParam(1,$mates);
        $sentencia->bindParam(2,$id);
        $sentencia->execute();
        $query1= "UPDATE `tbl_notas` SET `nota` = ? WHERE `id_alumnos` = ? AND nombre_asignatura LIKE 'fisica';";
        $sentencia1=$this->pdo->prepare($query1);
        $sentencia1->bindParam(1,$fisica);
        $sentencia1->bindParam(2,$id);
        $sentencia1->execute();
        $query2= "UPDATE `tbl_notas` SET `nota` = ? WHERE `id_alumnos` = ? AND nombre_asignatura LIKE 'programacion';";
        $sentencia2=$this->pdo->prepare($query2);
        $sentencia2->bindParam(1,$programacion);
        $sentencia2->bindParam(2,$id);
        $sentencia2->execute();
    }

    public function eliminarUsuario($id){
        $query= "DELETE FROM `tbl_alumnos` WHERE `tbl_alumnos`.`id_alumno` = {$id}";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
    }

    public function filtro(){
		$query="SELECT * FROM tbl_alumnos WHERE nombre LIKE '%{$_POST['nombre']}%' AND apellido1 LIKE '%{$_POST['apellido1']}%'";
		$sentencia=$this->pdo->prepare($query);
        $sentencia->execute();

		$lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);

		foreach ($lista_alumno as $alumno) {
			$id=$alumno["id_alumno"]." ";
            echo "<td>{$alumno['nombre']}</td>";
            echo " ";
            echo "<td>{$alumno['apellido1']}</td>";
            echo " ";
            echo "<td>{$alumno['apellido2']}</td></tr>";
            echo "<br>";
    	}
   	}

    public function getlistaUsuarios(){
        $query = "SELECT * FROM tbl_alumnos";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function login($user){
        $query = "SELECT * FROM tbl_administrador WHERE email=? AND passwd=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmail();
        $psswd=$user->getPasswd();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        echo "$numRow";
        if(!empty($numRow) && $numRow==1){
            $user->setID($result['id_administrador']);

            //Creamos la sesión
            session_start();
            $_SESSION['admin']=$user;
            return true;
        }else {
            return false;
        }
    }
}
?>