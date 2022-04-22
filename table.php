<!DOCTYPE html>
<html lang="es">
    <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    
    </head>
    <?php 
    require_once "./usuarios.php";
    $usuarios = new usuarios();
    $users = $usuarios->getUsuarios();
    //echo "<pre>".print_r($users,true)."</pre>";

    
    
    ?>

    



    <body class="container mt-5 p-5">
    <div class="row text-center" style="background-color: #cecece">
    <div class="col-md-6"> 
        <strong>Registrar Empleado</strong>
    </div>
    <div class="col-md-6"> 
        <strong>Lista de Empleados  </strong>
    </div>
    </div>
    <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="body">
        <div class="row clearfix">

            <div class="col-sm-5">
            <!--- Formulario para registrar Cliente --->
                <form name="form-data" action="usuarios.php" method="POST">
                <input name="accion" type="hidden" value="altaempleado">

                <div class="row">
                <div class="col-md-12">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required='true' autofocus>
                </div>
                <div class="col-md-12 mt-2">
                    <label for="email" class="form-label">Puesto</label>
                    <input  type="text" class="form-control" name="puesto" required='true'>
                </div>
                <div class="col-md-12 mt-2">
                    <label for="celular" class="form-label">Ubicacion</label>
                    <input   type="text" class="form-control" name="ubicacion" required='true'>
                </div>
                </div>
                <div class="row justify-content-start text-center mt-5">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" id="btnEnviar">
                            Registrar Empleado
                        </button>
                    </div>
                </div>
                </form>

            </div>  
            <div class="col-sm-7">
              <div class="row">
                <div class="col-md-12 p-2">


                <div class="table-responsive">
        
   

                <table class="table" id="tableUser" >
                    <thead>
                        <tr class="table-primary">
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($users as $empleado){
                                //echo "<pre>".print_r($empleado,true)."</pre>";

                            
                        ?>
                        <tr>
                        <th scope="row"><?php echo $empleado[0] ?></th>
                        <td><?php echo $empleado[1] ?></td>
                        <td><?php echo $empleado[2] ?></td>
                        <td><?php echo $empleado[3] ?></td>
                        <td>
                                    <button class="btn btn-primary mr-1" data-bs-toggle="modal" data-bs-target="#modal-actualizar<?php echo $empleado[0]; ?>"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger mr-1" data-bs-toggle="modal" data-bs-target="#modal-borrar<?php echo $empleado[0]; ?>" ><i class="fas fa-trash"></i></button>
                                    
                        </td>
                        </tr>
                            <?php include './modaleditar.php'; ?>
                            <?php include './modaleliminar.php'; ?>
                        
                        <?php
                            
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </body>
    <script>
       
        $('#tableUser').DataTable( {
        
        });
    </script>
</html>