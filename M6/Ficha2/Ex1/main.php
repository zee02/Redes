<?php
session_start();
echo "Bem vindo " . $_SESSION['user'] . " !" . " <a href='Ex1.php'>Clica aqui</a> para saires. ";
