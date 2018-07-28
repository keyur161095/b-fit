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
<?php echo validation_errors(); ?>
<?php form_open('index.php?/Members/submit'); ?>

<form ui-jp="parsley" action="index.php/Members/submit" method="post">
  <div class="box">
    <div class="box-header">
      <h2 style="margin-top: 10px;">Add New Member</h2>
    </div>
    <div class="box-body">

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Name <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="text" name="name" data-parsley-type="alphanum" class="form-control" placeholder="Name of new member" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Join Date <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="date" name="join_date" class="form-control" placeholder="Date of joinig" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Plan <span style="color: red;">*<span style="font-size: 10px;">  Required</span></span></label>
        <div class="col-sm-9">
          <select required class="form-control c-select m-y" name="plan" required>
              <option value="">Please choose</option>
              <option value="1">1 Month</option>
              <option value="3">3 Month</option>
              <option value="6">6 Month</option>
              <option value="9">9 Month</option>
              <option value="1">1 Year</option>
              <option value="x">Other</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Email</label>
        <div class="col-sm-9">
          <input type="email" name="email" class="form-control" required placeholder="Email address">
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Contact <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="number" name="contact" data-parsley-type="digits" class="form-control" placeholder="Enter a mobile number" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Weight <span style="color: red;">*<span style="font-size: 10px;"> Required</span></span></label>
        <div class="col-sm-9">
          <input type="number" name="weight" data-parsley-type="digits" class="form-control" placeholder="Enter weight of new member" required>
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Address</label>
        <div class="col-sm-9">
          <input type="text" name="address" data-parsley-type="alphanum" class="form-control" placeholder="Enter address of new member">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Birth Date</label>
        <div class="col-sm-9">
          <input type="date" name="birth_date" class="form-control" placeholder="Date of birth">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Notes</label>
        <div class="col-sm-9">
          <input type="textarea" name="notes" data-parsley-type="alphanum" class="form-control" placeholder="Any special request, Custom plan etc">
        </div>
      </div>

    </div>
    <div class="dker p-a text-right">
      <button type="submit" value="submit" class="btn info">Add</button>
    </div>
  </div>
</form>
<?php echo form_close();?>

<!-- ############ PAGE END-->

<!-- ############ main_layout END-->
  </div>
<?php include "includes/scripts.php"; ?>
</body>
</html>
