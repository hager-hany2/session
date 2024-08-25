<?php

include_once  './helpers/ConnectToDB.php';

function insertComplaint($name,$email,$phone,$complaint){
    $conn = contactToDB();
    $sql = 'INSERT INTO complaints (username,email,phone,complaint) VALUES(:username,:email,:phone,:complaint)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username',$name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':complaint',$complaint);
    $stmt->execute();
}
function get_complaints($where=''){
    $conn = contactToDB();
    $data = $conn -> query("SELECT * FROM complaints ".$where);
    return $data -> fetchAll();
}
?>