<?php echo view('sidebar');?>
        <section class="content" style="padding-left: 15%">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Of Projects</h3>
                            <button class="btn btn-default btn-primary pull-right active" id="myBtn" >Add New Project</button>
                            <!--<div class="box-tools">

                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">

                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>-->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Site</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <style>
                                        .button {
                                            border: none;
                                            color: white;
                                            padding: 5px 15px;
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
                                    </style>
                                    
                                <tbody>
                                    <?php if ($users) : ?>
                                        <?php foreach ($users as $user) : ?>
                                            <tr>
                                                <td><?php echo $user['project_id']; ?></td>
                                                <td><?php echo $user['cname']; ?></td>
                                                <td><?php echo $user['cemail']; ?></td>
                                                <td><?php echo $user['cphone']; ?></td>
                                                <td><?php echo $user['site']; ?></td>
                                                <td><a href="" class="button button1">Edit</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                          
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        


</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->

<style>
/* body {font-family: Arial, Helvetica, sans-serif;} */

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 85%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.container {
      max-width: 500px;
    }

.error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
</style>
</head>
<body>

<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button> -->

<!-- The Modal -->
<div id="myModal" class="modal" style="padding-left: 15.1%">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container mt-5">
    <form method="post" id="addname" name="addname" 
    action="<?= site_url('/submit-project') ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="cphone" class="form-control">
      </div>
      <div class="form-group">
        <label>Site</label>
        <input type="text" name="site" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Add Project</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>