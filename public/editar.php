<?php
  include("../infra/db/connect.php");

    $id = $_GET["id"];
    echo $id;

    $sql = "SELECT * FROM usuario WHERE id = $id";


   ?>


