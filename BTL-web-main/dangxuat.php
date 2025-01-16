<?php
session_start();
session_destroy(); // Hủy toàn bộ session
header("Location: header.php");
exit();