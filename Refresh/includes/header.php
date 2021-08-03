<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a <?php if(!isset($_SESSION['rest_id'])){ ?>href="index.php" <?php } ?> class="navbar-brand">TreatBook</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <?php
                    if(isset($_SESSION['id'])){?>
                        <div id="myNa" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <?php if(!isset($_SESSION['rest_id'])){ ?>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-comment"></span> Contact Us</a></li>
                        <?php }else{ ?>
                        <li><a href="slot_manage.php"><span class="glyphicon glyphicon-sort"></span> Slot Manage</a></li>
                        <li><a href="rest_menu.php"><span class="glyphicon glyphicon-cutlery"></span> Menu</a></li>
                        <li><a href="order_rest.php"><span class="glyphicon glyphicon-import"></span> Bookings</a></li>
                        <?php } ?>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
                <?php }
                    else{
                ?>   
                    <div id="myNav" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                         
                    </ul>
                </div>
                    <?php } ?>
            </div>
        </nav>

<div id="mymodal" class="modal fade banner" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content banner_content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">TreatBook</h3>
              </div>
              <div class="modal-body">
                  <form method="post" action="#">
                      <div class="form-group">
                          <input class="form-control" id='email' name="email" type="email" placeholder="Email" required="true">
                      </div>
                      <div class="form-group">
                          <input class="form-control" id='password' name="password" type="password" placeholder="Password" required="true">
                      </div>
                      <button type="button" id="login_button" name="login_button" class="btn btn-danger color_fade">Login</button>
                  </form>
              </div>
              <div class="modal-footer">
                  <h6><a href="#">Forgot Password?</a> || Don't have an account yet? <a href="signup.php" id="login_reg">Register</a></h6>
                </div>
            </div>

            </div>
        </div>
<script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var email = $('#email').val();  
           var password = $('#password').val();
           if(email != '' && password != '')
           {  
                $.ajax({  
                     url:"login_script.php",  
                     method:"POST",  
                     data: {email:email, password:password},
                     success:function(data, status, xhr)
                     {  
                          /*console.log(data);
                          if(data=="No_email"){
                              alert(data);
                          }else if(data=="No_pass"){
                              alert(data);
                          }else{*/
                          $('#loginModal').hide();  
                          location.reload();
                      
                     }
                 });
                     
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });
});
</script>
