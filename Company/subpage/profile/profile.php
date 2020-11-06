<?php
    session_start();
    include "../../model/user_detail.php";
?>

        <h2>Profile</h2>
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
              <form>
              <div class="form-row">
                
                <div class="row">		
                        <div class="col-md-12">
                          <label>Perfer Name:</label>
                          <input type="text" name="name" class="form-control" id="pro-name" placeholder="Your Perfer Name" value="<?php echo unserialize($_SESSION["user_detail"])->GetPerName(); ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validate"></div>
                        </div>        

                        <div class="col-md-12">
                          <label>Phone:</label>
                          <input type="text" name="name" class="form-control" id="pro-phone" placeholder="Phone" value="<?php echo unserialize($_SESSION["user_detail"])->GetPhone(); ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validate"></div>
                        </div>  

                        <div class="col-md-12" style = "margin-top: 4px;">
                          <label>Eamil:</label>
                          <input type="text" name="name" class="form-control" id="pro-email" placeholder="Email" value="<?php echo unserialize($_SESSION["user_detail"])->GetEmail(); ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validate"></div>
                        </div>  
                    </div>
                </div>

                <div class="text-center" style = "margin-top: 4px;"><button class="btn btn-primary" onclick="ProfileAccess()">save</button></div>
            </form>
          </div>

        </div>
