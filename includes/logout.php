<?php

session_start();
session_unset();
session_destroy();
header("location:../htmlPages/index_blog.php");