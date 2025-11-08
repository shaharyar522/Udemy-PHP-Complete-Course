<?php

//matlab jo cookies set kya tah us ko read kr k dehkaya hian.

if (isset($_COOKIE['username'])) {
    echo " Hello " . $_COOKIE['username'];
} else {
    echo "Hello guest";
}
