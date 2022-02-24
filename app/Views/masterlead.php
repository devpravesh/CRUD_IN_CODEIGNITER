<?php
echo view('sidebar');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<style>
    .form-controller {
        position: fixed;
    }

    #input-field {
        margin-left: 5%;
    }
</style>
<section style="padding-left: 15%;">
    <h3 style="font-weight: bold;">Lead Information</h3>
    <form action="" method="post" class="form-controller">

        <!--  <label> Title:</label>
    <input type="text" name="name" id="input-field"  placeholder="Enter Name"><br>
    <label > Mobile:</label>
    <input type="text" name="mobile" id="input-field" placeholder="Mobile Number"> <br>
    <label> Enquery Receved On:</label>
    <input type="datetime-local" id="input-field" name="enq Rec date">
 
    
</form> -->


        <style type="text/css">
            body {
                background-color: #9efffc;
            }

            .lbl {
                padding-left: 10px;
                font-weight: bold;
                font-size: large;
                text-align: right;
                width: 100px;
                white-space: nowrap;
            }

            .fld {
                width: 100%;
                height: 30px;
                padding-right: 20px;
            }

            .frm {
                display: inline-;
            }
        </style>
        </head>

        <body>


            <div class="container-fluid border bg-dark text-white rounded">
                <div class="row my-3">
                    <div class="row">
                    <table class="col mt-3 pt-5 ">
                        <tr>
                            <td class="lbl"><label for="name">Name:</label></td>
                            <td><input class="fld rounded" id="name" type="text"></td>

                        </tr>
                        <tr>
                            <td class="lbl"><label for="email">Email:</label></td>
                            <td><input class="fld rounded" id="email" type="text"></td>
                        </tr>
                        <tr>
                            <td class="lbl"><label for="dob">Date of birth:</label></td>
                            <td><input class="fld rounded" id="dob" type="datetime-local"></td>
                        </tr>
                        <tr>
                            <td class="lbl"><label for="addr">Address:</label></td>
                            <td><input class="fld rounded" id="addr" type="text"></td>
                        </tr>
                        <tr>
                            <td class="lbl"><label for="city">City:</label></td>
                            <td><input class="fld rounded" id="city" type="text"></td>
                        </tr>
                        <tr>
                            <td class="lbl"><label for="ctry">Country:</label></td>
                            <td><input class="fld rounded" id="ctry" type="text"></td>
                        </tr>
                    </table>
                </div>
                <div class="row"></div>
                <table class="col mt-3 pt-5 ">
                    <tr>
                        <td class="lbl"><label for="name">Name:</label></td>
                        <td><input class="fld rounded" id="name" type="text"></td>

                    </tr>
                    <tr>
                        <td class="lbl"><label for="email">Email:</label></td>
                        <td><input class="fld rounded" id="email" type="text"></td>
                    </tr>
                    <tr>
                        <td class="lbl"><label for="dob">Date of birth:</label></td>
                        <td><input class="fld rounded" id="dob" type="datetime-local"></td>
                    </tr>
                    <tr>
                        <td class="lbl"><label for="addr">Address:</label></td>
                        <td><input class="fld rounded" id="addr" type="text"></td>
                    </tr>
                    <tr>
                        <td class="lbl"><label for="city">City:</label></td>
                        <td><input class="fld rounded" id="city" type="text"></td>
                    </tr>
                    <tr>
                        <td class="lbl"><label for="ctry">Country:</label></td>
                        <td><input class="fld rounded" id="ctry" type="text"></td>
                    </tr>
                </table>
                <!-- <h1 class="jumbotron text-dark my-2">My First Bootstrap Page</h1>
                    <p>This is some text.</p>
                </div>
                <div class="col">
                    <h1>My First Bootstrap Page</h1>
                    <p>This is some text.</p>
                    <h1>My First Bootstrap Page</h1>
                    <p>This is some text.</p>
                </div>

            </div>
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
            </div> -->
            </div>
        </body>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>