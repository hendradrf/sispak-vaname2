<?php
session_start();
session_destroy();

echo "<script type='text/javascript'> window.location='m_index.php'; </script> ";
?>