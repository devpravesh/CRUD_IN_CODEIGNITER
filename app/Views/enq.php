<?php
echo view('sidebar');
if (isset($_POST["input_name"]) && is_array($_POST["input_name"])){ 

  echo '<pre>';
  print_r($_POST["input_name"]);
  echo '</pre>';

  $input_name = $_POST["input_name"]; 
  foreach($input_name as $field_value){
    // your insert query goes here...
  }
  exit;
}
?>
<section style="padding-left: 20%;">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
    .input-box {
      margin: 15px 0;
    }

    .input-box input {
      padding: 5px 10px;
      border-radius: 2px;
      border: 1px solid #999;
    }

    .btn {
      cursor: pointer;
      padding: 5px 10px;
      border-radius: 2px;
      border: 1px solid #17a2b8;
      color: #fff;
      background-color: #17a2b8;
    }

    .btn:hover {
      background-color: #138496;
      border-color: #117a8b;
    }

    .btn:focus {
      outline: 0;
    }

    .input-box a {
      color: red;
      font-size: 13px;
      text-decoration: none;
    }

    .input-box a:hover {
      text-decoration: underline;
    }
  </style>

  <h4>Dynamically add or remove input fields</h4>

  <form method="post" action="">
    <div class="wrapper">
      <div class="input-box">
        <input type="text" name="input_name[]">
        <button class="btn add-btn">Add More</button>
      </div>
    </div>
    <input type="submit" class="btn" value="Submit"/>
  </form>

  <script type="text/javascript">
    $(document).ready(function () {

      // allowed maximum input fields
      var max_input = 5;

      // initialize the counter for textbox
      var x = 1;

      // handle click event on Add More button
      $('.add-btn').click(function (e) {
        e.preventDefault();
        if (x < max_input) { // validate the condition
          x++; // increment the counter
          $('.wrapper').append(`
            <div class="input-box">
              <input type="text" name="input_name[]"/>
              <a href="#" class="remove-lnk">Remove</a>
            </div>
          `); // add input field
        }
      });

      // handle click event of the remove link
      $('.wrapper').on("click", ".remove-lnk", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();  // remove input field
        x--; // decrement the counter
      })
    });
  </script>
  </section>

