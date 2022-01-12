<?php 
  include 'inc/dbconnection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Terapanth</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <!-- MDBootstrap Datatables  -->
<link href="css/addons/datatables2.min.css" rel="stylesheet">
</head>
<body>

  <!-- Start your project here-->
  <div class="row" text-align="right">
  <a href="table.php"><button class="btn btn-primary"><i class="fas fa-magic mr-1"></i> Table View</button></a>
</div>
  <div class="container-fluid mt-4 pt-4">
  <div class="row">
    <div class="col-lg-12">
  <div style="height: 100vh">
 
 
    <?php
      $query_data = "SELECT * FROM `reg_users` order by `name`";
      $res_users = mysqli_query($link, $query_data);
      while($row_users = mysqli_fetch_assoc($res_users)){ ?>

          <div style="border-radius: 20px;" class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-3 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

          <img src="img/user_image.png" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-9 mb-4 mb-lg-0">

          <h3 class="font-weight-bold"><?php echo $row_users['name'] ?></h3>

          <p class="font-weight-bold"><td><?php echo $row_users['firm_name'] ?></td></p>

          <p class="text-muted">Present Address:<td><?php echo $row_users['present_address'] ?></td> </p>

          <p><?php echo $row_users['phone1'] ?>
            &nbsp; &nbsp;<?php echo $row_users['phone2'] ?></p>
          <p></p>

          <a class="font-weight-bold" href="#" >Detailed View<i class="fas fa-angle-right ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
      
     

      <?php }
    ?>
     <td></td>
      <td><?php echo $row_users['DOB'] ?></td>
      <td><?php echo $row_users['blood_group'] ?></td>
      <td><?php echo $row_users['gotra'] ?></td>
      <td><?php echo $row_users['spouse'] ?></td>
      <td><?php echo $row_users['marriage_date'] ?></td>
      
      <td><?php echo $row_users['business'] ?></td>
      <td><?php echo $row_users['permanent_address'] ?></td>
      
      <td><?php echo $row_users['business_address'] ?></td>
      
      <td><?php echo $row_users['email'] ?></td>
  </div>
</div>
</div>
</div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables2.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function () {
  $('#dt-filter-select').dataTable({

    initComplete: function () {
      this.api().columns().every( function () {
          var column = this;
          var select = $('<select  class="browser-default custom-select form-control-sm"><option value="" selected>Search</option></select>')
              .appendTo( $(column.footer()).empty() )
              .on( 'change', function () {
                  var val = $.fn.dataTable.util.escapeRegex(
                      $(this).val()
                  );

                  column
                      .search( val ? '^'+val+'$' : '', true, false )
                      .draw();
              } );

          column.data().unique().sort().each( function ( d, j ) {
              select.append( '<option value="'+d+'">'+d+'</option>' )
          } );
      } );
  }
  });
});
</script>

</body>
</html>
