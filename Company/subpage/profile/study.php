<link href="assets/css/profile.css" rel="stylesheet">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<label class="checkbox-inline" style="float:right;">
  <input type="checkbox" checked data-toggle="toggle">
</label>

<div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                
                <div class="row">		
                        <div class="col-md-12">
                            <label>Basic multiselect:</label><br>
                            <select type="text" class="multiselect" multiple="multiple" role="multiselect">          
                                <option value="0" >IT</option>
                                <option value="1">Education</option>
                                <option value="2">Arts</option>
                                <option value="3">Engineering</option>
                            </select> 
                        </div>        

                        <div class="col-md-12">
                            <label>Degree:</label><br>
                            <select class="selectpicker">
                                <option>Bachlor Current University Student</option>
                                <option>Bachlor Graduator</option>
                                <option>Master Current University Student</option>
                                <option>Master Graduator</option>
                            </select>
                        </div>  

                        <div class="col-md-12" style = "margin-top: 4px;">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Online Introduce Link" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>  

                        <div class="col-md-12" style = "margin-top: 4px;">
                            <textarea class="form-control" name="description" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description"></textarea>
                            <div class="validate"></div>
                        </div>  
                    </div>
              </div>

              <div class="text-center" style = "margin-top: 4px;"><button class="btn btn-primary" type="submit">Save</button></div>
            </form>
          </div>

        </div>

    <script src="assets/js/profile-study.js"></script>