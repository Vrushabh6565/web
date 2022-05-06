<?php
    $bname = $_POST['bname'];
    $cat = $_POST['cat'];
    $year = $_POST['year'];

    $conn = mysqli_connect('localhost', 'root', '', 'book_list');
    if($conn) {
        $sql = "INSERT INTO book_table values ("$bname","$cat","$year", "0")";
        mysqli_query($conn, $sql);
    }
?>