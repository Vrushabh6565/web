<?php
    $bname = $_GET['bname'];
    $read = $_GET['read'];
    $conn = mysqli_connect('localhost', 'root', '', 'book_list');
    if($read == 0) {
    $sql = 'UPDATE book_table SET read="1" where bname='.$bname.'';
    mysqli_query($conn, $sql);
    }
    else if($read == 1) {
        $sql = 'UPDATE book_table SET read="0" where bname='.$bname.'';
    }
?>