<?php
  ob_start();

$db = mysqli_connect("localhost","root","","ct");
if(isset($_POST['submit']))
{

     $name=$_POST['full_name'];
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $password=$_POST['password'];

     $query="INSERT INTO `student_reg` (`id`,`name`, `phone_no`, `email`, `password`) VALUES (NULL, '$name', '$phone', '$email', '$password')";
     
     $result=mysqli_query($db, $query);
     if($result)
     {
     echo "<script>alert('Data saved successfully');</script>";
     }
     else
     {
     echo "<script>alert('something went wrong');</script>";
     }
}
?>

 <!--Student SignUp Modal -->
 <div class="modal fade" id="signup-modal-student" tabindex="-1" role="dialog" aria-labelledby="signup-modal-studentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student Registration Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Student modal body-->
        <div class="modal-body">
          <form id="signup-form-student" class="form" role="form" method="post" action="">
              <div class="input-group form-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-user"></i>
                      </span>
                  </div>
                  <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
              </div>

              <div class="input-group form-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-phone-alt"></i>
                      </span>
                  </div>
                  <input type="tel" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
              </div>

              <div class="input-group form-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-envelope"></i>
                      </span>
                  </div>
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>

              <div class="input-group form-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                      </span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
              </div>    
              <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-block btn-primary">Create Account</button>
              </div>
          </form>
          </div>
      </div>
    </div>
  </div>
