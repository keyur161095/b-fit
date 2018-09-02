<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "includes/header.php"; ?>
</head>
<body>
<?php include "includes/main_layout.php"; ?>
<!-- ############ PAGE START-->

<div class="box" style = "margin-left: 14px;">
  <div class="box-header">
    <h2>Add New Expense</h2>
  </div>
  <div>
    <!-- Div for flashdata -->
  </div>
  <div class="col-md-6">
    <div class="box">

      <div class="box-divider m-0"></div>
      <div class="box-body">

        <!-- <form role="form"> -->
        <?php $attributes = array('method' => 'post', 'id' => 'addFeeForm'); ?>

        <?php echo form_open_multipart(BASE_URL.'index.php?/fees/addFee', $attributes); ?>
        <div class="form-group">
          <label for="single-prepend-text">Fees for</label>
          <div class="input-group select2-bootstrap-prepend">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                <span class="fa fa-search"></span>
              </button>
            </span>
            <select id="single-prepend-text" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
          </div>
        </div>

          <div class="form-group">
            <label for="ex-amount">Amount</label>
            <input type="number" class="form-control" id="ex-amount" name="expenseAmount" placeholder="Enter amount" required>
          </div>

          <div class="form-group">
            <label for="ex-date">Date</label>
            <input type="date" class="form-control" id="ex-date" name="date" required>
          </div>

          <button type="submit" class="btn white m-b">Submit</button>
        <?php echo form_close(); ?>
        <!-- </form> -->
      </div>
    </div>
  </div>

<!-- ############ PAGE END-->
<!-- ############ LAYOUT END-->
</body>
</html>
