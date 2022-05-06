<?php
    $conn = mysqli_connect('localhost', 'root', '', 'book_list');
    $sql = 'SELECT * FROM book_table WHERE cat="<write any book category>"';
    $result = mysqli_query($conn, $sql);
    while($a = mysqli_fetch_assoc($result)) {
            echo "<a href='toggle.php?bname=".$a['bname']."&read=".$a['read']."'>".$a['bname']." ".$a['cat']." ".$a['year']." ".$a['read']."</a> <a href='delete.php?bname=".$a['bname'].">delete book</a>";
    }
?>