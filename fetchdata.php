<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "infdata");
 $query = "SELECT * FROM tbl_posts ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
  <h3>'.$row["title"].'</h3>
  <p>'.$row["describtion"].'</p>
  <p class="text-muted" align="right">'.$row["date"].'</p>
  <hr />
  ';
 }
}
?>