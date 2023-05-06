<?php
if (isset($_SESSION['error'])) {
    ?>
    <div class="alert alert-danger py-1"><?php echo $_SESSION['error']; ?></div>
    <?php
    unset($_SESSION['error']);
}
?>