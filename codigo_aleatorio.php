
    <?php 

    include "../database/conexion.php";
    if (isset($_POST['crear_partida'])){
    $n = substr(md5(Rand()), 0, 6);
    $consulta = mysqli_query($conn,"INSERT INTO codigo(numero) VALUE ('$n')");
    echo "<script>alert('Su código es: $n')</script>";
    echo "<script>window.location='inicio.php'</script>";
    }else{
        if (isset($_POST['unirse_partida'])) {
            echo "<script>window.location='unirse.php'</script>";
        }

    }

