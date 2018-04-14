<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/gmailicon.png"  type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/homepagecss.css">
    <title>Home page</title>
  </head>
  <body>
    <div class="container-fluid wholepage">

        <div class="row">
            <div class="col-md-8">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">

                <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
              </ul>
            </div>
            <div class="col-md-4">
                <form method="POST" action="connection.php" class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" name="names" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" name="search" class="btn btn-default">Find</button>
                </form>
            </div>
        </div>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
        <div class="row">
            <div  class="col-md-3">
                <img src="images/prof.jpg" class="img-responsive" alt="Responsive image">
            </div>
            <div  class="col-md-3">
                <table style="font-size:20px;" >
                    <tr><td><span class="glyphicon glyphicon-user"></span></td><td></td><td>Nsabimana Innocent</td></tr>
                    <!-- <tr><td><p>personal information</p></td></tr> -->
                    <tr><td></td><td></td><td></td></tr>
                    <tr><td><span class="glyphicon glyphicon-envelope"></span></td><td></td><td>nsabimanainnocent1@gmail.com</td></tr>
                    <tr><td></td><td></td><td></td></tr>
                    <tr><td><span class="glyphicon glyphicon-earphone"></span></td><td></td><td>0787456028</td></tr>
                </table>
            </div>
            <div class="col-md-6">
                <div class="card bg-info card1">
                    <h2>School Fees Payment Amount</h2>
                    <table class="table table-condensed">
                        <theader>
                            <tr><td>Academic year</td><td>First term</td><td>Second Term</td><td>Third term</td><td>Total Amount</td><td>Debt</td></tr>
                        </theader>
                        <tbody>
                            <tr><td>Senior 4</td><td>55000</td><td>55000</td><td>55000</td><td>160000</td><td>0</td></tr>
                            <tr><td>Senior 5</td><td>55000</td><td>55000</td><td>55000</td><td>160000</td><td>0</td></tr>
                            <tr><td>Senior 6</td><td>55000</td><td>55000</td><td>55000</td><td>160000</td><td>0</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
    <!--      Beggining of information tab page-->

        <div role="tabpanel" class="tab-pane" id="information">
            <div class= "row">
                <div class="col-md-12">
                    <div class="card bg-info card1">
                        <h2>Results of Student Payment</h2>
                        <table class="table table-condensed">
                        <theader>
                            <tr><td>Academic year</td><td>First term</td><td>Second Term</td><td>Third term</td><td>Total Amount</td><td>Debt</td></tr>
                        </theader>
                            <tbody>
                                <tr><td>Senior 4</td><td>55000</td><td>55000</td><td>55000</td><td>160000</td><td>0</td></tr>
                                <tr><td>Senior 5</td><td>55000</td><td>55000</td><td>55000</td><td>160000</td><td>0</td></tr>
                                <tr><td>Senior 6</td><td>55000</td><td>55000</td><td>55000</td><td>160000</td><td>0</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="settings">
            <div class = "row">
              <h3> Updating profile picture </h3>
                <div class="col-md-3 update_pic">
                  <img src="images/prof.jpg" class="img-responsive" alt="Responsive image">

                  <div class="file-loading">
                    <input id="input-700" name="kartik-input-700[]" type="file" multiple>
                  </div>

                  <!-- <div class="containter">
                    <img src="" alt="">
                    <div class="button">Update picture</div>
                  </div> -->
                </div>
                <div class="col-md-9">
                  <!-- <div class="container update_info"> -->
                  <div class="card bg-info card2">
                    <h2>Account Reset</h2>
                    <h3>Personal Information</h3>
                    <form>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="name" type="text" class="form-control" name="email" placeholder="User Name" style="width: 40%;">
                      </div>

                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Email" style="width: 40%;">
                        </div>

                      <h3>Password Reset</h3>
                       <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id ="password" type="text" class="form-control" name="passord" placeholder="Old Password" style="width: 40%;">
                        <input id ="password" type="text" class="form-control" name="passord" placeholder="New Password" style="width: 40%;">
                      </div>
                      <br>
                      <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-pencil" arial-hidden = "true"></span>Udate
                      </button>

                    </form>

                  </div>
                </div>

        </div>
    </div>
</div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted"> & copy Innocent Nsabimana| All rights are reserved </p>
      </div>
    </footer>

  <script src="jquery-3.2.1.min.js"></script>
  <script>
 $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
  </script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).on("ready", function() {
    $("#input-700").fileinput({
        uploadUrl: "/file-upload-single/1",
        maxFileCount: 5
    });
});
</script>
  </body>
</html>
