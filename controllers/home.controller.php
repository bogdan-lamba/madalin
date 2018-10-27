<?php

$sql="SELECT * FROM articole INNER JOIN useri on articole.id_user=useri.id";

$result=mysqli_query($con1, $sql);

while($row=mysqli_fetch_assoc($result)){
    $articles[]=[
        'title' => $row['titlu'],
        'data' => $row['data_postare'],
        'autor' => $row['nume'],
        'body' => $row['body']
    ];
}


require 'views/articol.view.php';
