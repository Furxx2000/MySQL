<?php
session_start();

unset($_SESSION['account']);

header('Location: 20210412_session_login.php');
