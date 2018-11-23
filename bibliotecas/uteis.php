<?php

function ehPost() {
	$_SERVER["REQUEST_METHOD"] = mysqli_real_escape_string(conn(), $_SERVER["REQUEST_METHOD"]);
    return $_SERVER["REQUEST_METHOD"] == "POST";
}