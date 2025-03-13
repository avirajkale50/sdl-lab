<?php
// layout.php

// Start the session
session_start();

// Include the header
include 'header.php';
?>

<div class="container">
    <?php
    // Content will be injected here
    if (isset($content)) {
        echo $content;
    }
    ?>
</div>

<?php
// Include the footer
include 'footer.php';
?>