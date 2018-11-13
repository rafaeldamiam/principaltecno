<?php
function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "principaltecno");
    if (!$cnx) die('Deu errado a conexão!');
    return $cnx;
}