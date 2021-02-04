<?php
   include "koneksi.php";

   $e = $_POST['e'];
   if (empty($e)) {
      mysqli_query("INSERT INTO user VALUES ('$_POST[username]', '$_POST[password]', '$_POST[nip]')");
   } else {
      mysqli_query("UPDATE user SET password = '$_POST[password]', level = '$_POST[level]' WHERE username = '$_POST[username]'");
   }

  $q = mysqli_query($con,"SELECT * FROM user");
  echo '<form action="index2.php" method="POST"><input type="submit" 
  value="Tambah User"></form>';
  echo "<table border='1'>
    <th>Username</th> 
    <th>Password</th> 
    <th>NIP</th>
    <th>aksi</th>";

  while ($hasil = mysqli_fetch_array($q))
    echo "<tr><td>$hasil[username]</td>
              <td>$hasil[password]</td>
              <td>$hasil[nip]</td>
              <td>
              <a href='index2.php?username=$hasil[username]&e=1'>Edit</a>
              </td>
          </tr>";
  echo "</table>";

