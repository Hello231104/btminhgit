<?php
session_start();
session_destroy(); // Hủy toàn bộ session
header("Location: index.php");
exit();