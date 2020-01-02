<html xmlns="http://www.w3.org/1999/html">

<head>

    <h1>
        how to desplay
    </h1>
</head>
<body>

<?php
    $hostname="localhost";
    $dbname="banehirc_musicplay";
    $Username="banehirc_musicplay";
    $password="";
    //4tO26sFCyiXwBn53
$dbconnection =new PDO("mysql:host::host=$hostname;dbname=$dbname",$Username,$password);
$row=$dbconnection->prepare("select * from music");
$row->execute();
$data=array();
foreach ($row as $result){
    $jsonformar['id']=$result['id'];
    $jsonformar['name']=$result['name'];
    $jsonformar['artist']=$result['artist'];
    $jsonformar['picture']=$result['picture'];
    $jsonformar['link_128']=$result['link_128'];
    array_push($data,$jsonformar);

}
echo json_encode($data);
?>
</center>
</body>
</html>









