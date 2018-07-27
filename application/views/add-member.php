<?php defined('BASEPATH') OR exit('No script is directly allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "includes/header.php"; ?>
</head>
<body>
  <!-- ############ main_layout START-->
<?php include "includes/main_layout.php"; ?>
<!-- ############ PAGE START-->

<form ui-jp="parsley">
  <div class="box">
    <div class="box-header">
      <h2 style="margin-top: 10px;">Add New Member</h2>
    </div>
    <div class="box-body">

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Name <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="text" data-parsley-type="alphanum" class="form-control" placeholder="Name of new member" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Join Date <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="date" class="form-control" placeholder="Date of joinig" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" required placeholder="email">
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Contact <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="number" data-parsley-type="digits" class="form-control" placeholder="Enter a mobile number" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Weight <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="number" data-parsley-type="digits" class="form-control" placeholder="Enter weight of new member" required>
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Address</label>
        <div class="col-sm-9">
          <input type="text" data-parsley-type="alphanum" class="form-control" placeholder="Enter address of new member">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Birth Date</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" placeholder="Date of birth">
        </div>
      </div>
    </div>
    <div class="dker p-a text-right">
      <button type="submit" class="btn info">Add</button>
    </div>
  </div>
</form>

<!-- ############ PAGE END-->

    </div>
  </div>

<!-- ############ main_layout END-->
  </div>
<?php include "includes/scripts.php"; ?>
</body>
</html>
