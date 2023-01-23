<?php

$conn = mysqli_connect("localhost", "root", "", "syte");
$sql = "SELECT *FROM `Users`";
   $result = $conn->query($sql); 
   //ыаааааааа
   // В цикле перебираем все записи таблицы и выводим их
   while ($row = $result->fetch_assoc())
   {
 echo '<table border="1">
 <form action="del.php" method ="post">
<tr><td>name</td>
<td>age</td>
</tr>
<tr><td> '.$row['name'].'</td>
<td>'.$row['age'].'</td></tr>
<br>
<button><a href="del.php">delete</a></buttom>
<br>
</table>';

   }
    echo '<button><a href="del.php">delete</a></buttom>'; 
 mysqli_close($conn);
?>
 <table>
    <?php foreach ($name as $age) {
      <tr>
         <td><?= $name['id']?></td>
    }
    }
 </table>