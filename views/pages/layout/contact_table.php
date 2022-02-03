<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Lead</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
              
              
</div>

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="example1" class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th width="100">Status</th>
                    <th width="100">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $key => $value) {?>
                            <tr>
                              <td><?php echo $value['id']?></td>
                              <td><?php echo $value['name']?></td>
                              <td><?php echo $value['email']?></td>
                              <td><?php echo $value['phone']?></td>
                              <td><?php echo $value['message']?></td>
                              <td>
                                <?php echo $value['status']; ?>
                              <!-- <php
                              $option = array('Pending','Open','Intereseted','Not-Intereseted','Close');
                              echo "<select>";
                              foreach($option as $option){
                                echo "<option value='$option'>$option</option>";
                              }
                              echo "</select>";
                              ?> -->
                            </td>
                              <td><a href="#" onclick="showEditForm(<?php echo $value['id'];?>)" class="btn btn-primary">Edit</a></td>                    
                            </tr>
                        <?php
                        }?>
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form id="editForm">
                    <div class="modal-body">
                      <input type="hidden" name="id" id="editid">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Name:</label>
                          <input type="text" class="form-control" name="name" id="editname" required>
                          
      
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-form-label">Email:</label>
                          <input type="text" class="form-control" name="email" id="editemail" required>
                          
                        </div>
                        <div class="form-group">
                          <label for="phone" class="col-form-label">Phone:</label>
                          <input type="text" class="form-control" name="phone" id="editphone" required>
                        </div>
                        <div class="form-group">
                          <label for="message" class="col-form-label">Message:</label>
                          <textarea class="form-control" name="message" id="editmessage" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="status" class="col-form-label">Status:</label>
                        <select class="form-control" name="status" id="editstatus">
                          <option value="Pending">Pending</option>
                          <option value="Open">Open</Option>
                          <option value="Intrested">Intrested</option>
                          <option value="Notintrested">Not-Intrested</option>
                          <option value="Close">Close</option>
                        </select>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
 <!-- this row will not appear when printing -->
              <div class="row no-print">
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/dist/js/demo.js"></script>
<script type="text/javascript">

function showEditForm(id){
 $.ajax({
  url: "<?php echo base_url("DashboardController/getEditModel/"); ?>",
  method: "POST",
  data:{id:id},
  dataType:"json",
  success:function(response)
  {
    $('#editid').val(response.id);
    $('#editname').val(response.name);
    $('#editemail').val(response.email);
    $('#editphone').val(response.phone);
    $('#editstatus').val(response.status);
    $('#editmessage').val(response.message);
    $('#editModal').modal({
      backdrop:"static",
      keyboard:false
    });
  }
 })
}

$("#editForm").submit(function(event){
  event.preventDefault();
  $.ajax({
    url: "<?php echo base_url("DashboardController/updateContactModal");?>",
    data: $("#editForm").serialize(),
    method:"POST",
    async: false,
    dataType: 'json',
    success:function(response){
      $('#editModal').modal('hide');
      $('#editForm')[0].reset();
      if (response==1) {
      alert("Record Updated Successfully");
      }
      else
      {
        alert("Update Failed");
      }
      $('#example1').DataTable().ajax.reload();
    },
    error:function()
    {
      alert("Something went wrong");
    }
  })
})
</script>
</body>
</html>
