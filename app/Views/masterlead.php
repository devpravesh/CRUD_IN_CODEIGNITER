<?php
echo view('sidebar');
?>
<link rel="stylesheet" href="css/bootstrap.min.css">

<style>
    .form-controller {
        position: fixed;
    }

    #input-field {
        margin-left: 5%;
    }
</style>
<section style="padding-left: 10%;">
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
                background-color: #ffffff;
            }
            div.scroll {
                margin:4px, 4px;
                padding:4px;
                background-color: white;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
            }

            .lbl {
                padding-left: 10px;
                font-size: large;
                text-align: right;
                width: 100px;
                white-space: nowrap;
            }
            td{
                padding-left: 20px;
                padding-bottom: 15px;
            }

            .fld {
                width: 100%;
                height: 30px;
                padding-right: 20px;
            }

         
        </style>
        </head>

            <div class="scroll">
                <div class="row my-3">
                    <div class="col">
                        <div class="col">
                        <table class="mt-3 pt-5 ">
                            <tr>
                                <td class="lbl"><label for="Ownername">Owner:</label></td>
                                <td><select class="fld rounded" id="name" name="Owner" id="">
                                        <option Selected Disabled disabled value="non">Select</option>
                                        <option value="prashik">Prashik</option>
                                        <option value="pravesh">Pravesh</option>
                                    </select></td>

                            </tr>
                            <tr>
                                <td class="lbl"><label for="fname">First name:</label></td>
                                <td><input class="fld rounded" id="fname" type="text"></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="title">Title:</label></td>
                                <td><input class="fld rounded" id="name" type="text"></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="phone">Phone:</label></td>
                                <td><input class="fld rounded" id="phone" type="text"></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="city">Mobile:</label></td>
                                <td><input class="fld rounded" id="mobile" maxlength="12" type="number"></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="inq">Enquiry Recd. On:</label></td>
                                <td><input class="fld rounded" id="inq" type="datetime-local"></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="inq">Old E Date:</label></td>
                                <td><input class="fld rounded" id="inq" type="date"></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="inq">Lead source:</label></td>
                                <td><select class="fld rounded" id="name" name="Owner" id="">
                                        <option Selected Disabled value="non">Select</option>
                                        <option value="internet">Internet</option>
                                        <option value="SM">Socialmedia</option>
                                    </select></td></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="inq">Campaigns:</label></td>
                                <td><select class="fld rounded" id="name" name="Owner" id="">
                                        <option Selected Disabled value="non">Select</option>
                                        <option value="internet">Internet</option>
                                        <option value="SM">Socialmedia</option>
                                    </select></td></td>
                            </tr>
                            <tr>
                                <td class="lbl"><label for="inq">Category:</label></td>
                                <td><select class="fld rounded" id="name" name="Owner" id="">
                                        <option Selected Disabled value="non">Select</option>
                                        <option value="internet">Internet</option>
                                        <option value="SM">Socialmedia</option>
                                    </select></td></td>
                            </tr>
                        </table>
                    </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <div class="col">
                                <table class="mt-3 pt-5 ">
                                    <tr>
                                        <td class="lbl"><label for="name">Last Name:</label></td>
                                        <td><input class="fld rounded" id="name" type="text"></td>

                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="email">Email:</label></td>

                                        <td><input class="fld rounded" id="email" type="email"></td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="dob">Lead Status:</label></td>
                                        <td><select class="fld rounded" id="name" name="Owner" id="">
                                                <option Selected Disabled value="non">Select</option>
                                                <option value="prashik">Any</option>
                                                <option value="pravesh">Pravesh</option>
                                            </select></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="addr">Current Stage:</label></td>
                                        <td><select class="fld rounded" id="name" name="Owner" id="">
                                                <option Selected Disabled value="non">Select</option>
                                                <option value="Any">Any</option>
                                                <option value="pravesh">Pravesh</option>
                                            </select></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="mobile">Assign To design Partner:</label></td>
                                        <td><select class="fld rounded" id="name" name="Owner" id="">
                                                <option Selected Disabled value="non">Select</option>
                                                <option value="Any">Any</option>
                                                <option value="pravesh">Pravesh</option>
                                            </select></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="inq">Lead Value:</label></td>
                                        <td><select class="fld rounded" id="name" name="Owner" id="">
                                                <option Selected Disabled value="non">Select</option>
                                                <option value="Any">Any</option>
                                                <option value="pravesh">Pravesh</option>
                                            </select></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="inq">Quote Ex. Date:</label></td>
                                        <td><input class="fld rounded" id="inq" type="date"></td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="inq">Quote Remark:</label></td>
                                        <td><textarea class="fld rounded" name="quote remark" id="" cols="40" rows="1"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="inq">Layout File:</label></td>
                                        <td><input class="fld rounded" id="inq" type="file"></td>
                                    </tr>
                                    <tr>
                                        <td class="lbl"><label for="inq">Layout Recd. Date:</label></td>
                                        <td><input class="fld rounded" id="inq" type="date"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <!--<div class="col">
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
                </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </section>