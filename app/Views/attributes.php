<?php
echo view('sidebar')
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="attributes.css">
<link rel="stylesheet" href="model.css">
<section style="padding-left: 0%;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <center>
        <h1 class="display-5">
            Add Lead Attributes
        </h1>
    </center>
    </head>

    <body>
        <!-- <h1>Popup/Modal Windows without JavaScript</h1> -->
        <div class="box">
            <a class="button text-dark" href="#popup1">Let me Pop up</a>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content container pt-3 my-3">
                    <form method="post" name="myform" onsubmit="myfunction();" action="<?= site_url('submit-attributes') ?>">
                        <thead>
                            <tr>
                                <th>Options</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($users) : ?>
                                <h4 for="inq">Lead source:</h4>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?php echo $user['countvalue']; ?></td>

                                        <!-- <div class="wrap">
                                            <div class="row pt-1 my-2">
                                                <td> -->

                                        </td><a href="<?php echo base_url('editlead/' . $user['id']); ?>" class="button button1">Edit</a></td>
                                        <td><a href="<?php echo base_url('deletelead/' . $user['id']); ?>" class="button button2">Delete</a></td>
                                    </tr>
                <!-- </div>
            </div> -->
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
    <input type="text" name="countvalue" class="pt-2 my-2">
    <button class="btn add-btn" id="demo" type="submit">Add Attributes</button>
    </form>
    <!-- <script src="model.js"></script> -->
        </div>
        </div>
        </div>

        <script>
            function myfunction() {
                let x = document.forms['myform']['countvalue'].value;
                if (x == '') {
                    alert('Attributes must be filled out');
                    return false;
                } else {
                    alert("Attributes Added Successfully");
                }
            }
        </script>

</section>