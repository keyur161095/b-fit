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
    <h2>Active Gym Members</h2>
  </div>

  <div >
  <p style ="color: green; text-align: center; font-weight: 600; font-size:22px;"><?php echo $this->session->flashdata('member'); ?></p>
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
        <button type="button" id="Inavtivated" name="Inavtivated">Show Inavtivated Members</button>
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
              echo '<td style="width:200px;"><i class="fa fa-times text-danger" data-toggle="modal" data-target="#inactiveReason" data-id='.$row->id.'><span class="tooltiptext">Inactivate member</span></i></td>';
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

<!-- Pop up-->

<div id="inactiveReason" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inactivate Member</h4>
      </div>
      <div class="modal-body">
        <b><p style="font-size: 20px;">Are you sure to inactivate ?</p></b>
      </div>
      <div class="modal-body">
          <?php $attributes = array('id' => '42', 'method' => 'post'); ?>
          <?php echo form_open(base_url().'index.php?/members/inactivate_member/',$attributes); ?>
            <input type="text" name="member_id" id="member_idd" value="">
            <label for="reason">Please keep a note of reason for leaving.</label><br>
            <input type="textarea" name="reason">

      </div>

        <div class="modal-footer">
          <button type="submit"  value="submit"class="btn btn-default">Inactivate</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      <!-- </form> -->
    </div>

  </div>
</div>

<!-- ############ PAGE END-->

<!-- ############ LAYOUT END-->
<script>
document.getElementById("#member_idd").value = "42";

$('#inactiveReason').on('click' .text-danger, function (){
  // var opener			=	e.relatedTarget;
  // var member_id 		= $(opener).attr('data-id');
  $('#member_id').find('[name="member_id"]').val(42);
});
</script>

<?php include "includes/all_scripts.php"; ?>
</body>
</html>
