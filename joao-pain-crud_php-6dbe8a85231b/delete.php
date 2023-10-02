<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `cadastro_usuario` WHERE ID = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php?msg=Registro excluído com sucesso");
}
else {
    echo "falha: " . mysqli_error($conn);
}
?>