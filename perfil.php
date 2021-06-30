<!DOCTYPE html>
<?php
    include('inc/header.php');
    include_once('inc/funciones.php');
?>

            <?php

            // Nuevos datos
            if ($_POST['user'] != null) {
                
                $v_user = $_POST['user'];
                $v_pass = $_POST['pass'];
                $v_email = $_POST['email'];
                $v_fec_nacimiento = $_POST['fec_nacimiento'];
                $v_telefono = $_POST['telefono'];
                $v_direccion= $_POST['direccion'];
                $v_localidad = $_POST['localidad'];;
                $v_cp = $_POST['cp'];

                $sql = "UPDATE sitio SET user = '$v_user', pass = '$v_pass', email = '$v_email', telefono = '$v_telefono', direccion = '$v_direccion', localidad = '$v_localidad', cp = '$v_cp' WHERE id = 1;";

                $result = mysqli_query($enlace, $sql);
            }

            $sql =  "SELECT * FROM sitio";
            $result = mysqli_query($enlace, $sql);
            $a_sitio = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $vv_usuario = $a_sitio['user'];
            $vv_contrasena = $a_sitio['pass'];
            $vv_email = $a_sitio['email'];
            $vv_fec_nacimiento = $a_sitio['fec_nacimiento'];
            $vv_telefono = $a_sitio['telefono'];
            $vv_direccion = $a_sitio['direccion'];
            $vv_localidad = $a_sitio['localidad'];
            $vv_cp = $a_sitio['cp'];
            ?>


<main class="container p-4 bg-white">
    <header class="row container thumb">
        <div class="col-sm-12 px-0">
            <h1 class="titindex">Perfil</h1>
        </div>
    </header>

    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <h2 class="italica mb-3">Acá podés editar tus datos de usuario.</h2>

                        <table>
                            <form action="" method="post">
                                <tr>
                                    <td height = "50"> <b>Modificar nombre de usuario:</b> </td>
                                    <td height = "50"> <input type="text" name="user" value="<?php echo $vv_usuario; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td>
                                </tr>
                                <tr>
                                    <td height = "50"> <b>Modificar contraseña:</b> </td> 
                                    <td height = "50"> <input type="text" name="pass" value="<?php echo $vv_contrasena; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                                </tr>
                                <tr>
                                    <td height = "50"> <b>Modificar email:</b> </td> 
                                    <td height = "50"> <input type="text" name="email" value="<?php echo $vv_email; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                                </tr>
                                <tr>
                                    <td height = "50"> <b>Modificar fecha de nacimiento:</b> </td> 
                                    <td height = "50"> <input type="text" name="fec_nacimiento" value="<?php echo $vv_fec_nacimiento; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                                </tr>
                                <tr>
                                    <td height = "50"> <b>Modificar teléfono:</b> </td> 
                                    <td height = "50"> <input type="text" name="telefono" value="<?php echo $vv_telefono; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                                </tr>
                                <tr>
                                    <td height = "50"> <b>Modificar dirección:</b> </td> 
                                    <td height = "50"> <input type="text" name="direccion" value="<?php echo $vv_direccion; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                                </tr>
                                <tr>
                                    <td height = "50"> <b>Modificar localidad:</b> </td> 
                                    <td height = "50"> <input type="text" name="horario" value="<?php echo $vv_localidad; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                                </tr>
                                <tr>
                                    <td height = "50"> <b>Modificar código postal:</b> </td> 
                                    <td height = "50"> <input type="text" name="email" value="<?php echo $vv_cp; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                                </tr>
                                <tr>
                                    <td colspan=2 style="text-align: center;"> <input type="submit" name="submit" value="Guardar" class="btn btn-primary"> </td>
                                </tr>
                            </form>
                        </table>
        </div>
    </div>
</main>

<?php include('inc/footer.php'); ?>

</html>
