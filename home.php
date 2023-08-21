<?php include('connection/SessionController.php'); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SCHOOL PORTAL</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css">
  <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-alpine.css">
  <link rel="stylesheet" href="css/home.css">
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css">


</head>
<body>
<!-- partial:index.partial.html -->
<head>
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  </head>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">SCHOOL PORTAL</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Dashboard</a></li>
          <li><a href="#">Request Documents</a></li>
          <li><a href="#">Enrollment</a></li>
          <li><a href="#">Announcement</a></li>
          <li><a href="#">Lost & Found</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="#">Log out</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!--header-->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ">
          <h2><span class="glyphicon glyphicon-cog" id="gear"></span> Dashboard</h2>
        </div>
        <div class="col-md-2 ">
          <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a type="button" data-toggle="modal" data-target="#addPage">Add page</a></li>
              <li><a href="#">Add post</a></li>
              <li><a href="#">Add user</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Breadcrumb-->
  <section id="breadcrumb" >
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Home</li>
      </ol>
    </div>
  </section>

  <!--main section-->
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated zoomIn">
            <a href="home.php?VIEW=HOME&SESSION=1" class="list-group-item active  main-color-bg">
                  <span class="glyphicon glyphicon-cog"></span> Dashboard
              </a>
            <a href="home.php?VIEW=REQUEST&SESSION=1" class="list-group-item"><span class="badge"><?php echo $tr[0]["total"]; ?></span><span class="glyphicon glyphicon-list-alt"></span> Request Documents</a>
            <a href="" class="list-group-item"><span class="badge"></span><span class="glyphicon glyphicon-pencil"></span> Enrollment</a>
            <a href="home.php?VIEW=ANNOUNCEMENT&SESSION=1" class="list-group-item"><span class="badge"><?php echo $ta[0]["total"]; ?></span><span class="glyphicon glyphicon-user"></span> Announcement</a>
            <a href="home.php?VIEW=LOST&SESSION=1" class="list-group-item"><span class="badge"><?php echo $tl[0]["total"]; ?></span><span class="glyphicon glyphicon-user"></span> Lost & Found</a>
          </div>
        </div>
          
           <?php 
           
           if(!empty($_GET['VIEW'])){ 
            
               if($_GET['VIEW'] == 'HOME')
               {
                 include('pages/home.php'); 
               }
               else if($_GET['VIEW'] == 'DETAILS')
               {
                 include('pages/details.php'); 
               }
               else if($_GET['VIEW'] == 'REQUEST')
               {
                 include('pages/request.php'); 
               }
               else if($_GET['VIEW'] == 'ANNOUNCEMENT')
               {
                 include('pages/announcement.php'); 
               }
               else if($_GET['VIEW'] == 'LOST')
               {
                 include('pages/lost.php'); 
               }
               else
               {

               }
            
           } 
            
           ?>






        </div>
      </div>
  </section>

  <!-- footer -->
  <footer id="footer">
    
    </footer>



  <!-- Model -->
  <!-- Add page -->
  <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add page</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Page Title</label>
              <input type="text" class="form-control" placeholder="Page Title">
            </div>
            <div class="form-group">
              <label>Page Body</label>
              <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
            </div>
            <div class="checkbox">
              <label>
          <input type="checkbox"> Published
        </label>
            </div>
            <div class="form-group">
              <label>Meta Tags</label>
              <input type="text" class="form-control" placeholder="Add Some Tags...">
            </div>
            <div class="form-group">
              <label>Meta Description</label>
              <input type="text" class="form-control" placeholder="Add Meta Description...">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise@30.0.6/dist/ag-grid-enterprise.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
<script src="js/home-aggrid.js"></script>
<script src="js/home.js"></script>
<script src="js/tabs.js"></script>
<?php if(!empty($_GET['VIEW'])) { ?>
<?php if($_GET['VIEW'] == 'DETAILS'){ ?>    
<script src="js/specific_qr.js"></script>
<script>
var gridStat = <?php echo json_encode($subjectGrid); ?>;
</script>
<script src="js/detail-subject-aggrid.js"></script>
<script>
var gridAttend = <?php echo json_encode($schoolAttendance); ?>;
</script>
<script src="js/detail-attendance-aggrid.js"></script>
<script>
var gridWhere = <?php echo json_encode($studentWhereabouts); ?>;
</script>
<script src="js/detail-whereabouts-aggrid.js"></script>
<script src="js/calendar-event.js"></script>
<?php } else if($_GET['VIEW'] == 'REQUEST'){ ?>
<script src="js/request-request-aggrid.js"></script>
<?php } else if($_GET['VIEW'] == 'ANNOUNCEMENT'){?>
<script src="js/announce-announce-aggrid.js"></script>
<?php } else if($_GET['VIEW'] == 'LOST'){?>
<script src="js/lost-lost-aggrid.js"></script>
<?php } ?> 
<?php } ?>


</body>
</html>
