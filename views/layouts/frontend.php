<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter 3</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
    
</head>
<body>
    <div class="app">
        <?=$this->include('layouts/inc/navbar.php')?>
        <?=$this->rendersection('content')?>
</div>

<script src="<?= base_url('assets/js/jquery-3.5.1.js');?>"></script>
<script src="<?= base_url('assets/js/popper.min.js');?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>


<!-- DataTables CON Link-->
<script src="//cdn.datatables.net/1.10.23/css/dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css"></script>

<script>
    $(document).ready(function(){
        $('#mydatatable').DataTable();
    });
    </script>
    
<!--
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        $(document).ready(function () {
            <? //if(session()->getFlashdata('status)) { ?>
                alertify.set('notifier','position','top-right');
                alertify.success("<?= session()->getFlashdata('status')?>");
                <?php //} ?>
        
        });
    </script> -->
    
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script>
        $(document).ready(function(){
            <?php //if(session()->getFlash('status')) {?>
          swal({
              title:<"<?//= session()->getFlashdata('status')?>",
              text:<"<?//= session()->getFlashdata('status_text')?>",
              icon:<"<?//= session()->getFlashdata('status_icon')?>",
              button: "OK",
          });
          <?php //} ?>

       });
    </script>-->
    <?= $this->renderSection('script')?>    
</body>
</html>