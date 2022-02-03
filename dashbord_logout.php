<?php 

session_start();

session_destroy();

?>

<script>
    alert("Successfully Logged Out");
    location='index.php';
</script>
