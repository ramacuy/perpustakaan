<?php
include("config/koneksi.php");
session_destroy();
header("location:login.php");