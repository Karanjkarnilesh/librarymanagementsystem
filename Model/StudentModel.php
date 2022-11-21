<?php
include ('Connection/conn_db.php');
class StudentModel extends BaseModel{

public function __construct()
{
    $this->conn=$conn;    
}
public funuction get($id)
{
    if($id){
$sql="SELECT * FROM `student` WHERE `id`='$id' ";
    }
    $sql="SELECT * FROM `student`";
    $data=queryexe($sql, $conn);
}
public funuction add($data)
{
    $sql="INSERT INTO `student`() VALUES()";
    $data=queryexe($sql, $conn)  
    
}
public funuction edit($id,$data)
{
    $sql="UPDATE `student` SET";
    $data=queryexe($sql, $conn)  
}
public funuction delete($id)
{
$sql="DELETE FROM `student` WHERE `id`='$id'"; 
$data=queryexe($sql, $conn)   
}

public function queryexe($sql,$conn)
{
$result=mysqli_query($sql,$conn);
if(mysqli_num_rows($result)>0)
{
    $data=mysqli_fetch_array($result);
    return $data;
}else
{
    return mysqli_num_rows($result);
}
}

}
