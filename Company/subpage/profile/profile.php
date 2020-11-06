<?php
    session_start();
?>

        <h2>Profile <?php echo $_SESSION["user_detail"]; ?></h2>
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post">
              <div class="form-row">
                
                <div class="row">		
                        <div class="col-md-12">
                          <label>Perfer Name:</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Perfer Name" value="<?php echo $_SESSION["user_detail"].GetPerName(); ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validate"></div>
                        </div>        

                        <div class="col-md-12">
                          <label>Phone:</label>
                          <input type="text" name="name" class="form-control" id="phone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validate"></div>
                        </div>  

                        <div class="col-md-12" style = "margin-top: 4px;">
                          <label>Eamil:</label>
                          <input type="text" name="name" class="form-control" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validate"></div>
                        </div>  
                    </div>
              </div>

              <div class="text-center" style = "margin-top: 4px;"><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
          </div>

        </div>