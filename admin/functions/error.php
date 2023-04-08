<?php
if (isset($_GET['error']) && $_GET['error']=='data' ){
    echo "<h2 style='color: red'> Melumatlari Doldurun</h2>";
}

if (isset($_GET['success']) &&  $_GET['success']==true ){
    echo "<h2 style='color: green'> Melumatlar elave edildi</h2>";
}

if (isset($_GET['error']) && $_GET['error']=='file' ){
    echo "<h2 style='color: red'> Fayl Xetasi</h2>";
}