<?php

session_start();
session_unset();
session_destroy();
echo "Our session is destroyed!";

?>