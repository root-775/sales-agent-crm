<?php 
session_start();
session_destroy();
header('location: index.php?controller=author&function=login');
?>

<script>
    window.location.href = "index.php?controller=author&function=login";
</script>