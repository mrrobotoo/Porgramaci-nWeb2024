<?php 
    include('../configuraciones/bd.php');
    $conexionesBD=BD::crearInstancia();
    //print_r($_POST);
   

    $id=isset($_POST['id'])?$_POST['id']:'';
    $nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']: '';
    $accion=isset($_POST['accion'])?$_POST['accion']:'';

    if($accion != ''){
        switch($accion){
            case 'agregar':
               // $sql="INSERT INTO cursos (id, nombre_curso) VALUES (NULL, '$nombre_curso')";
                $sql="INSERT INTO CURSOS (id, nombre_curso) VALUES (NULL, :nombre_curso)";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':nombre_curso',$nombre_curso );
                $consulta->execute();
               // echo $sql;
            break;
            case 'editar':
                $sql="UPDATE CURSOS SET nombre_curso=:nombre_curso WHERE id=:id";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':id',$id );
                $consulta-> bindParam(':nombre_curso',$nombre_curso );
                $consulta->execute();
                //echo $sql;
            break;
            case 'borrar':
                $sql="DELETE FROM CURSOS WHERE id=:id";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':id',$id );
                $consulta->execute();
                //echo $sql;
            break;
            case 'Seleccionar':
                $sql="SELECT * FROM CURSOS WHERE id=:id";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':id',$id );
                $consulta->execute();
                $curso= $consulta->fetch(PDO::FETCH_ASSOC);
                //print_r($curso);
                $nombre_curso= $curso['nombre_curso'];

                //echo $sql;
            break;
        }
    
    }

    $consulta = $conexionesBD->prepare("SELECT * FROM CURSOS");
    $consulta->execute();
    $listaCursos=$consulta->fetchAll();
    //print_r($listaCursos);

?>
