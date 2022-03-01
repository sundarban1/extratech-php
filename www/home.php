<?php
include 'inc/db_config.php';
include 'inc/header.php';


$sql = $conn->query("SELECT * FROM users WHERE status = 'active'");

$users = $sql->fetchAll();

?>
<div class="container">

  <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
    <a class="navbar-brand" href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">

          <a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>User lists </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php?id=7"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout1.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="alert alert-success alert-dismissible mt-3" id="flash-msg" style="display: none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Success !</strong> You are Logged In Successfully !
  </div>
  <div class="card ">
    <div class="card-header">
      <h3><i class="fas fa-users mr-2"></i>User list <span class="float-right">Welcome! <strong>
            <span class="badge badge-lg badge-secondary text-white">
              Sundar</span>

          </strong></span></h3>
    </div>
    <div class="card-body pr-2 pl-2">

      <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> entries</label></div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="example_info">
              <thead>
                <tr role="row">
                  <th class="text-center sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL: activate to sort column descending" style="width: 17px;">SL</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 38px;">Name</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 66px;">Username</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Email address: activate to sort column ascending" style="width: 133px;">Email address</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 60px;">Mobile</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 43px;">Status</th>
                  <th class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Created: activate to sort column ascending" style="width: 96px;">Created</th>
                  <th width="25%" class="text-center sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 118px;">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php

                foreach ($users as $user) {
                ?>

                  <tr class="text-center odd" role="row">

                    <td class="sorting_1"><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['username']; ?> <br>
                      <span class="badge badge-lg badge-info text-white">Admin</span>
                    </td>
                    <td><?php echo $user['email'];?></td>

                    <td><span class="badge badge-lg badge-secondary text-white"><?php echo $user['mobile']; ?></span></td>
                    <td>
                      <span class="badge badge-lg badge-danger text-white"><?php echo $user['status']; ?></span>

                    </td>
                    <td><span class="badge badge-lg badge-secondary text-white"><?php echo $user['created_at']; ?></span></td>

                    <td>
                      <a class="btn btn-success btn-sm" href="profile.php?id=21">View</a>
                      <a class="btn btn-info btn-sm " href="profile.php?id=21">Edit</a>
                      <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                               btn-sm " href="?remove=21">Remove</a>

                      <a onclick="return confirm('Are you sure To Active ?')" class="btn btn-secondary
                                     btn-sm " href="?active=21">Active</a>
                    </td>
                  </tr>

                <?php }
                ?>
              </tbody>

            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div>
          </div>
          <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item next disabled" id="example_next"><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'inc/footer.php';

  ?>