<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Crud in CI</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Codeigniter Crud Operation</h1>

<style>


.button {
        border: none;
        color: white;
        padding: 10px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 2px 1px;
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
    }
    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }
    .button2 {
        background-color: white;
        color: black;
        border: 2px solid #fd0707;
    }
    .button2:hover {
        background-color: #ff042d;
        color: white;
    }




</style>

    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/addname') ?>" class="btn btn-primary">Add a Name & email</a>
	</div>
  
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>User Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Created At</th>
             <th>Update At</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['name']; ?></td>
             <td><?php echo $user['email']; ?></td>
             <td><?php $createdate= date_create($user['created_at']); echo date_format($createdate,"dS/F/Y g:i:s A"); ?></td>
             <td><?php if ($user['update_at']=='') {echo "Not Yet Updated";}else{$updatedate= date_create($user['update_at']); echo date_format($updatedate,"dS/F/Y g:i:s A");} ?></td>
             <td>
              <a href="<?php echo base_url('editnames/'.$user['id']);?>" class="button button1">Edit</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="button button2">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>