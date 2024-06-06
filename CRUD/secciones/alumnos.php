<?php 
    include('../configuraciones/bd.php');
    $conexionesBD=BD::crearInstancia();
    //print_r($_POST);
    //primera query
    $consulta = $conexionesBD->prepare("SELECT * FROM alumnos");
    $consulta->execute();
    $listaAlumnos=$consulta->fetchAll();
     //print_r($listaAlumnos);

    //validacion
    $id=isset($_POST['id'])?$_POST['id']:'';
    $nombre=isset($_POST['nombre'])?$_POST['nombre']: '';
    $apellido=isset($_POST['apellidos'])?$_POST['apellidos']: '';
    $accion=isset($_POST['accion'])?$_POST['accion']:'';
    $cursos=isset($_POST['cursos'])?$_POST['cursos']: '';

    foreach($listaAlumnos as $clave =>$alumno){
        $sql="SELECT * FROM CURSOS WHERE ID IN (SELECT ID_CURSO FROM ALUMNOS_CURSOS WHERE ID_ALUMNO =:idAlumno)";
        $consulta = $conexionesBD->prepare($sql);
        $consulta-> bindParam(':idAlumno',$alumno['id'] );
        $consulta->execute();
        $cursoAlumno = $consulta->fetchAll();
        $listaAlumnos[$clave]['cursos'] = $cursoAlumno;
    }
   
   // print_r($listaAlumnos);
    
    $consulta = $conexionesBD->prepare("SELECT * FROM cursos");
    $consulta->execute();
    $cursos=$consulta->fetchAll();
    
    
  
     if($accion != ''){
    
        switch($accion){
            case 'agregar':
           
                $sql="INSERT INTO alumnos (id, nombre_alumno, apellido ) VALUES (NULL, :nombre_alumno, :apellido)";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':nombre_alumno',$nombre );
                $consulta-> bindParam(':apellido',$apellido );
                $consulta->execute();

                //recuoera el id insertado
                $idAlumno =$conexionesBD->lastInsertId();

                foreach($cursos as $curso){
      
                    $sql="INSERT INTO alumnos_cursos (id, id_curso, id_alumno ) VALUES (NULL, :id_curso, :id_alumno)";
                    $consulta = $conexionesBD->prepare($sql);
                    $consulta-> bindParam(':id_curso',$curso['id']);
                    $consulta-> bindParam(':id_alumno',$idAlumno);
                    $consulta->execute();
                }

               // echo $sql;
            break;
            case 'editar':
                $sql="UPDATE alumnos SET nombre_alumno=:nombre_alumno, apellido=:apellido WHERE id=:id";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':id',$id );
                $consulta-> bindParam(':nombre_alumno',$nombre );
                $consulta-> bindParam(':apellido',$apellido );
                $consulta->execute();

                if(isset($cursos)){
                    $sql="DELETE FROM alumnos_cursos WHERE id_alumno=:id_alumno";
                    $consulta = $conexionesBD->prepare($sql);
                    $consulta-> bindParam(':id_alumno',$id );
                    $consulta->execute();

                    foreach($cursos as $curso){
                        $sql="INSERT INTO alumnos_cursos (id, id_curso, id_alumno ) VALUES (NULL, :id_curso, :id_alumno)";
                        $consulta = $conexionesBD->prepare($sql);
                        $consulta-> bindParam(':id_curso',$curso['id']);
                        $consulta-> bindParam(':id_alumno',$id);
                        $consulta->execute();

                    }
                    $arregloCursos[]=$curso['id'];

                }
                //echo $sql;
            break;
            case 'borrar':
                $sql="DELETE FROM ALUMNOS WHERE id=:id";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':id',$id );
                $consulta->execute();
                //echo $sql;
            break;
            case 'Seleccionar':
                $sql="SELECT * FROM ALUMNOS WHERE id=:id";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':id',$id );
                $consulta->execute();
                $alumno= $consulta->fetch(PDO::FETCH_ASSOC);
        
                $nombre= $alumno['nombre_alumno'];
                $apellido= $alumno['apellido'];

                $sql="SELECT cursos.id FROM alumnos_cursos 
                INNER JOIN CURSOS ON CURSOS.ID = ALUMNOS_CURSOS.ID_CURSO 
                WHERE ALUMNOS_CURSOS.ID_ALUMNO =:idAlumno";
                $consulta = $conexionesBD->prepare($sql);
                $consulta-> bindParam(':idAlumno',$id );
                $consulta->execute();
                $cursosAlumno= $consulta->fetchAll(PDO::FETCH_ASSOC);
                

                foreach($cursosAlumno as $curso){

                    $arregloCursos[]=$curso['id'];
                    
                }
            
                //echo $sql;
            break;
        }
    
    }
?>