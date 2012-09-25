
<table>
  <tr>
    <td>User Name</td><td>Password</td><td>Delete Action</td>
  </tr>
<?php
  foreach($data as $item){
      echo '<tr>';
      echo '<td><a href = "/users/edit/'.$item['User']['id'].'">'.$item['User']['username'].'</a></td><td>'.$item['User']['password'].'</td><td><a href = "/users/delete/'.$item['User']['id'].'">Delete</a></td>';
      echo '</tr>';
  }
?>