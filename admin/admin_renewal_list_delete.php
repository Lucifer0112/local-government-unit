<?php 
    include('../admin/assets/config/dbconn.php');

    if(isset($_POST['deletesend']))
    {
        $unique = $_POST['deletesend'];

        $sql = "DELETE FROM renewal WHERE id = $unique ";
        $result = mysqli_query($conn, $sql);
    }
?>