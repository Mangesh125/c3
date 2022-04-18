<?php
$rno=$_POST['rno'];
$name=$_POST['name'];
$per=$_POST['per'];
$dob=$_POST['bday'];
$mail=$_POST['mail'];

//echo $rno."<br>".$name."<br>".$per."<br>".$dob."<br>".$mail;
$conn=pg_connect("host=192.166668.16.1 port=5432 dbname= user= password=");
if(!$conn){
    echo "Error during connection";
}
else{
    $sql="Insert into student values($rno,$name,$per,$dob.$mail);";
    $result1=pg_query($conn,$sql);
    if(!$result1){
        echo "An error occured\n";
        exit;
    }
    else{
        echo "Record inserted successfully!";
    }

    $sql2="Select * from student;";
    $result2=pg_query($conn,$sql2);
    if(!$result2){
        echo "An error occured\n";
        exit;
    }
   while($row=pg_fetch_assoc($result2)){
       echo $row['rno'];
       echo $row['name'];
       echo $row['per'];
       echo $row['dob'];
       echo $row['mail'];
   }

}
?>