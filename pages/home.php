      <div class="col-md-9">
          <div class="panel panel-default animated zoomIn">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">School Portal Overview</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-4">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-user"></span> <?php echo $oua[0]['total']; ?></h2>
                  <h4>Student</h4>
                </div>
              </div>
              <div class="col-md-4 dash-box">
                <div class="well">
                  <h2><span class="glyphicon glyphicon-user"></span> <?php echo $out[0]['total']; ?></h2>
                  <h4>Teacher</h4>
                </div>
              </div>
              <div class="col-md-4 dash-box">
                <div class="well">
                  <h2><span class="glyphicon glyphicon-user"></span> <?php echo $ous[0]['total']; ?></h2>
                  <h4>Admin</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="panel panel-default animated zoomIn">
            <!-- Default panel contents -->
            <div class="panel-heading main-color-bg">Overall Users</div>
            <div class="panel-body">
              <!-- Table -->
            <?php include('pages/tabs/home-tab.php'); ?>

           </div>
        </div>
      </div>
          
      <style>

/* Style the tab */
.tab {
overflow: hidden;
border: 1px solid #ccc;
background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
background-color: inherit;
float: left;
border: none;
outline: none;
cursor: pointer;
padding: 14px 16px;
transition: 0.3s;
font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
display: none;
padding: 6px 12px;
border: 1px solid #ccc;
border-top: none;
}


</style>