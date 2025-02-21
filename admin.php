<!DOCTYPE html>
<?php
    include('inc/header.php');
    include_once('inc/funciones.php');
    include('inc/connect.php');
?>

<main class="container p-4 bg-white">
    <header class="row container thumb">
        <div class="col-sm-12 px-0">
            <h1 class="titindex">Editar sitio</h1>
        </div>
    </header>

    <?php

        // Nuevos datos
        if ($_POST['subtitulo'] != null) {

            $n_subtit = $_POST['subtitulo'];
            $n_fb = $_POST['fb'];
            $n_ig = $_POST['ig'];
            $n_tel = $_POST['telefono'];
            $n_dir= $_POST['direccion'];
            $n_hs = $_POST['horario'];;
            $n_mail = $_POST['email'];

            $sql = "UPDATE sitio SET subtitulo = '$n_subtit', facebook = '$n_fb', instagram = '$n_ig', telefono = '$n_tel', direccion = '$n_dir', horario = '$n_hs', email_contacto = '$n_mail' WHERE id = 1;";

            $result = mysqli_query($enlace, $sql);
        }

        // Previsualizacion de datos de la BD
        $sql =  "SELECT * FROM sitio";
        $result = mysqli_query($enlace, $sql);
        $a_sitio = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $subtitulo = $a_sitio['subtitulo'];
        $facebook = $a_sitio['facebook'];
        $instagram = $a_sitio['instagram'];
        $telefono = $a_sitio['telefono'];
        $direccion = $a_sitio['direccion'];
        $horario = $a_sitio['horario'];
        $email = $a_sitio['email_contacto'];
    ?>

    <div class="container p-4 bg-white">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <h2 class="italica mb-3">Acá podes editar aspectos del sitio</h2>

            <table>
                <form action="" method="post">
                    <tr>
                        <td height = "50"> <b>Elegí un subtitulo:</b> </td>
                        <td height = "50"> <input type="text" name="subtitulo" value="<?php echo $subtitulo; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td>
                    </tr>
                    <tr>
                        <td height = "50"> <b>Link a facebook:</b> </td> 
                        <td height = "50"> <input type="text" name="fb" value="<?php echo $facebook; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                    </tr>
                    <tr>
                        <td height = "50"> <b>Link a Instagram:</b> </td> 
                        <td height = "50"> <input type="text" name="ig" value="<?php echo $instagram; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                    </tr>
                    <tr>
                        <td height = "50"> <b>Teléfono:</b> </td> 
                        <td height = "50"> <input type="text" name="telefono" value="<?php echo $telefono; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                    </tr>
                    <tr>
                        <td height = "50"> <b>Dirección:</b> </td> 
                        <td height = "50"> <input type="text" name="direccion" value="<?php echo $direccion; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                    </tr>
                    <tr>
                        <td height = "50"> <b>Horario:</b> </td> 
                        <td height = "50"> <input type="text" name="horario" value="<?php echo $horario; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                    </tr>
                    <tr>
                        <td height = "50"> <b>Email:</b> </td> 
                        <td height = "50"> <input type="text" name="email" value="<?php echo $email; ?>" required class="rounded-pill border-0 colorform py-1 px-2" autocomplete="off"> </td> 
                    </tr>
                    <tr>
                        <td colspan=2 style="text-align: center;"> <input type="submit" name="submit" value="Guardar" class="btn btn-primary"> </td>
                    </tr>
                </form>
            </table>

</main>

<?php include('inc/footer.php'); ?>

</html>