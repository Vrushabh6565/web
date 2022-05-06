<?php
    $bname = $_GET['bname'];
    $conn = mysqli_connect('localhost', 'root', '', 'book_list');
    $sql = 'DELETE book_table where bname='.$bname.'';
    mysqli_query($conn, $sql);
?>