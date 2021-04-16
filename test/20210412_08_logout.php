<?php
session_start();

unset($_SESSION['account']);

header('Location: 20210412_06_login.php');
