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
    <h2 style="color:green;">Active Gym Members</h2>
  </div>

  <div>
    <?php if ($this->session->flashdata('newMember')): ?>
      <script>Snackbar.show({text:'<b style="font-size:16px;">New member has been added</b>'});</script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('inactivated')): ?>
      <script>Snackbar.show({text:'<b style="font-size:16px;">Member Inactivated Successfully</b>'});</script>
    <?php endif; ?>

    <?php if($this->session->flashdata('feeAdded')): ?>
      <script>Snackbar.show({text:'<b style="font-size:16px;">Fee added successfully</b>'});</script>
    <?php endif; ?>

  </div>

  <div class="row p-a">
    <div class="col-sm-5">
      <select class="input-sm form-control w-sm inline v-middle">
        <option value="0">Bulk action</option>
        <option value="1">Inactivate selected</option>
        <option value="3">Export</option>
      </select>
      <button class="btn btn-sm white">Apply</button>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-3">
      <div class="input-group input-group-sm">
        <button type="button" id="Inavtivated" name="Inavtivated" onclick="window.location.href='<?=BASE_URL?>index.php?/members/getInactiveMembers'">Show Inavtivated Members</button>
        <input type="text" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn b-a white" type="button">Go!</button>
        </span>
      </div>
    </div>

  </div>
  <div class="table-responsive">
    <table class="table table-striped b-t">
      <thead>
        <tr>
          <th style="width:20px;">
            <label class="ui-check m-0">
              <input type="checkbox"><i></i>
            </label>
          </th>
          <th>ID</th>
          <th>Name</th>
          <th>Weight</th>
          <th>Mobile Number</th>
          <th>Joining Date</th>
          <th>Plan</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

          <?php
          if( !empty($results) ) {
            foreach($results->result() as $row) {
              echo '<tr>';
              echo '<td> <label class="ui-check m-0"> <input type="checkbox" name="post[]"> <i class="dark-white"> </i> </label> </td>';
              echo '<td>'.$row->id.'</td>';
              echo '<td>'.$row->name.'</td>';
              echo '<td>'.$row->weight.'</td>';
              echo '<td>'.$row->mobile_number.'</td>';
              echo '<td>'.$row->join_date.'</td>';
              echo '<td>'.$row->plan.'</td>';
              // echo '<td style="width:200px;"><a href="' .base_url(). 'index.php?/members/inactivate_member/' .$row->id. '"><i class="fa fa-times text-danger"><span class="tooltiptext">Inactivate member</span></i></a></td>';
              echo '<td style="width:200px;">
              <i class="fa fa-times text-danger" data-toggle="modal" data-target="#inactiveReason" data-id='.$row->id.'><span class="tooltiptext">Inactivate member</span></i>
              <i class="fa fa-money text-success" data-toggle="modal" data-target="#addFee" data-id='.$row->id.'><span class="tooltiptext">Add Fee</span></i>
              </td>';
              echo '</tr>';
            }
          }
          ?>

      </tbody>
    </table>
  </div>
  <footer class="dker p-a">
    <div class="row">
      <div class="col-sm-4 text-center">
        <small class="text-muted inline m-t-sm m-b-sm ">showing 20-30 of 50 items</small>
      </div>
      <!-- <div class="col-sm-4 text-right text-center-xs"> -->
        <ul class="pagination pagination-sm m-0">
          <!-- <li><a href><i class="fa fa-chevron-left"></i></a></li> -->
          <li class="active"><?php echo $this->pagination->create_links(); ?></li>
          <!-- <li><a href><i class="fa fa-chevron-right"></i></a></li> -->

          <!-- <li class="active"><a href></a></li> -->
          <!-- <li><a href>2</a></li>
          <li><a href>3</a></li>
          <li><a href>4</a></li>
          <li><a href>5</a></li> -->
        </ul>
      </div>
    </div>
  </footer>
</div>

<!-- Pop up Model for inactivate member-->
<div id="inactiveReason" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inactivate Member</h4>
      </div>
      <div class="modal-body">
        <b><p style="font-size: 20px;">Are you sure to inactivate?</p></b>
      </div>
      <div class="modal-body">
          <form id="inactivateForm" action="index.php?/members/inactivate_member/" method="post">
            <input type="hidden" name="member_id" id="member_id" value="">
            <label for="reason">What is the reason for leaving of member?</label><br>
            <input type="textarea" name="reason" required>
      </div>
        <div class="modal-footer">
          <button type="submit"  value="submit"class="btn btn-default">Inactivate</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
      <!-- </form> -->
    </div>

  </div>
</div>

<!-- Pop up Model for add fee-->
<div id="addFee" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Member's Fee</h4>
      </div>
      <div class="modal-body">
          <form id="addFeeForm" action="index.php?/members/addFee/" method="post">
            <input type="hidden" name="member_id" id="member_id" value="">
            <label for="amount">Enter amount</label><br>
            <input type="number" name="amount" required>
            <hr>
            <div>
              <label for="date">Date</label><br>
              <input type="date" name="dateAdded">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit"  value="submit"class="btn btn-default">Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

<!-- ############ LAYOUT END-->
<script>
$(document).ready(function(){
  $('#inactiveReason').on('shown.bs.modal', function (e){
    var opener			=	e.relatedTarget;
    var member_id 	= $(opener).attr('data-id');
    $('#inactivateForm').find('[name="member_id"]').val(member_id);
  });

  $('#addFee').on('shown.bs.modal', function (e){
    var opener			=	e.relatedTarget;
    var member_id 	= $(opener).attr('data-id');
    $('#addFeeForm').find('[name="member_id"]').val(member_id);
  });
});
</script>

</body>
</html>
