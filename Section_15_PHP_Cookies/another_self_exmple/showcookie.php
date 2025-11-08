<?php


if (isset($_COOKIE["username"])) {
    echo "The value is this:" . $_COOKIE["username"];
} else {
    echo "Cookies is not Found !";
}
