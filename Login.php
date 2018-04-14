<!-- <?php
 include "backend/Model/login_system.php";
 if ($error != ""){
       echo "<script type='text/javascript'>alert('This User does not exist');</script>";
 }
 ?> -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/gmailicon.png"  type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/loginpage.css">

    <title>Login page</title>

  </head>
  <body>
    <div class="container-fluid main-button">
      <center>

        <button type="button" class="btn btn-primary loging-button" data-toggle="modal" data-target="#exampleModal">Sign in</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="exampleModalLabel">Enter Sign in Information</h4>
                    </div>
                  <form method="POST" action="backend/Model/login_system.php">
                    <div class="modal-body">
                      
                        <div class="form-group">
                          <label for="recipient-name" class="control-label">Email:</label>
                          <input type="text" class="form-control" id="recipient-name" name="email" placeholder="Email" >
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="control-label">Password:</label>
                          <input type="text" class="form-control" id="recipient-name" name="password" Placeholder="Password" >
                        </div>
          
                    </div>
                    <div class="modal-footer">
                      <select name="prevelege">
                        <option>SELECT Prevelege</option>
                        <option value="students">Student</option>
                        <option value="staff">Staff</option>
                      </select>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
      </center>
    </div>

    </body>

 <script>
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })
  // loading state button
  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>
