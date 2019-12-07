<?php
 $usernameExists = 0;
 $sql = 'SELECT username FROM student3 WHERE username = :username';
 $stmt = $conn->prepare($sql);
 $stmt->bindValue(':username',$_POST['username']);
 $stmt->execute();

 if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // row(s) returned
    $usernameExists = 1;
    echo "string";
 } else {
    // no row returned
    $usernameExists = 0;
    echo "ho";
 
 }
 $stmt->closeCursor();
?>