<?php
session_start();
session_destroy();
echo "<script>
window.location='../Frontend/login.php';
</script>";
?>