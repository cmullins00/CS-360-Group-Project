<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<a href = "logout.php?">Logout</a>

<div class="container">
 <div class="row">
   <div class="col-md-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>ID</th>
         <th>Username</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Password</th>
         <th>Create Datetime</th>
         <th>Delete</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $id=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['username']??''; ?></td>
      <td><?php echo $data['firstname']??''; ?></td>
      <td><?php echo $data['lastname']??''; ?></td>
      <td><?php echo $data['Email']??''; ?></td>
      <td><?php echo $data['Password']??''; ?></td>
      <td><?php echo $data['create_datetime']??''; ?></td> 
      <td><a href = "delete.php?$var=$result['id']">Delete</td>
     </tr>
     <?php
      $id++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>