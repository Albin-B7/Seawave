<?php
if (!isset($_GET['p'])) {
    echo 'Usage: makehash.php?p=yourpassword';
    exit;
}
echo password_hash($_GET['p'], PASSWORD_DEFAULT);
