<?php defined('BASEPATH') OR exit('No script is directly allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "includes/header.php"; ?>
</head>
<body>
<?php include "includes/main_layout.php"; ?>
<!-- ############ PAGE START-->

<div class="box">
  <div class="box-header">
    <h3>Table with elements</h3>
  </div>
  <div class="row p-a">
    <div class="col-sm-5">
      <select class="input-sm form-control w-sm inline v-middle">
        <option value="0">Bulk action</option>
        <option value="1">Delete selected</option>
        <option value="2">Bulk edit</option>
        <option value="3">Export</option>
      </select>
      <button class="btn btn-sm white">Apply</button>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-3">
      <div class="input-group input-group-sm">
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
          <th>Name</th>
          <th>Weight</th>
          <th>Mobile Number</th>
          <th>Joining Date</th>
          <th>Plan</th>
          <th style="width:50px;"></th>
        </tr>
      </thead>
      <tbody>

          <?php
          if( !empty($results) ) {
            foreach($results as $row) {
              echo '<tr>';
              echo '<td> <label class="ui-check m-0"> <input type="checkbox" name="post[]"> <i class="dark-white"> </i> </label> </td>';
              echo '<td>'.$row->fname.'</td>';
              echo '<td>'.$row->weight.'</td>';
              echo '<td>'.$row->mobile_number.'</td>';
              echo '<td>'.$row->join_date.'</td>';
              echo '<td>'.$row->plan.'</td>';
              echo '<td>
                <a href ui-toggle-class>
                <i class="fa fa-check text-success none"></i>
                <i class="fa fa-times text-danger inline"></i></a>
              </td>';
              echo '</tr>';
            }
          }
          ?>

        <!-- <tr>
          <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
          <td>Formasa</td>
          <td>8c</td>
          <td>Jul 22, 2013</td>
          <td>
            <a href ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
          </td>
        </tr>
        <tr>
          <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
          <td>Avatar system</td>
          <td>15c</td>
          <td>Jul 15, 2013</td>
          <td>
            <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
          </td>
        </tr>
        <tr>
          <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
          <td>Throwdown</td>
          <td>4c</td>
          <td>Jul 11, 2013</td>
          <td>
            <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
          </td>
        </tr>
        <tr>
          <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
          <td>Idrawfast</td>
          <td>4c</td>
          <td>Jul 7, 2013</td>
          <td>
            <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
          </td>
        </tr>
        <tr>
          <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
          <td>Formasa</td>
          <td>8c</td>
          <td>Jul 3, 2013</td>
          <td>
            <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
          </td>
        </tr>
        <tr>
          <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
          <td>Avatar system</td>
          <td>15c</td>
          <td>Jul 2, 2013</td>
          <td>
            <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
          </td>
        </tr>
        <tr>
          <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
          <td>Videodown</td>
          <td>4c</td>
          <td>Jul 1, 2013</td>
          <td>
            <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
          </td>
        </tr> -->
      </tbody>
    </table>
  </div>
  <footer class="dker p-a">
    <div class="row">
      <div class="col-sm-4 hidden-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm white">Apply</button>
      </div>
      <div class="col-sm-4 text-center">
        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
      </div>
      <div class="col-sm-4 text-right text-center-xs">
        <ul class="pagination pagination-sm m-0">
          <li><a href><i class="fa fa-chevron-left"></i></a></li>
          <li class="active"><a href>1</a></li>
          <li><a href>2</a></li>
          <li><a href>3</a></li>
          <li><a href>4</a></li>
          <li><a href>5</a></li>
          <li><a href><i class="fa fa-chevron-right"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>

<!-- ############ PAGE END-->



<!-- ############ LAYOUT END-->
<?php include "includes/scripts.php"; ?>
</body>
</html>
