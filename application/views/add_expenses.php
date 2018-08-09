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
    <?php if($this->session->flashdata('AddExpense')): ?>
      <script>Snackbar.show({text:'<b style="font-size:16px;">New expense added successfully</b>'});</script>
    <?php endif; ?>
  </div>
  <div class="col-md-6">
    <div class="box">

      <div class="box-divider m-0"></div>
      <div class="box-body">

        <!-- <form role="form"> -->
        <?php $attributes = array('method' => 'post', 'id' => 'expenseForm'); ?>
        <?php echo form_open(BASE_URL.'index.php?/expenses/submit_expense', $attributes); ?>
          <div class="form-group">
            <label for="ex-type">Expense for</label>
            <input type="text" class="form-control" id="ex-type" name="expenseType" placeholder="What is this expense for?" required>
          </div>
          <div class="form-group">
            <label for="ex-amount">Amount</label>
            <input type="number" class="form-control" id="ex-amount" name="expenseAmount" placeholder="Amount of expense" required>
          </div>

          <div class="form-group">
            <label for="ex-date">Date</label>
            <input type="date" class="form-control" id="ex-date" name="date" required>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Attachment</label>
            <input type="file" id="exampleInputFile" class="form-control">
            <p class="help-block">Upload bill here (Image or PDF)</p>
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
