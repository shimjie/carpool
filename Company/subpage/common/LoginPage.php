<link href="assets/css/login.css" rel="stylesheet">

<div class="form-toggle loginpageclosebtn visible"></div>

<!-- Form-->
<div class="form">
    <div class="form-toggle registerclosebtn"></div>
    <div class="form-panel one">
        <div class="form-header">
            <h1>Account Login</h1>
        </div>
        <div class="form-content">
            <form>
                <div class="form-group"><label for="username">Username</label><input type="text" id="log-username" name="log-username" required="required" /></div>
                <div class="form-group"><label for="password">Password</label><input type="password" id="log-password" name="log-password" required="required" /></div>
                <div class="form-group"><label class="form-remember"><input type="checkbox"/>Remember Me</label><a class="form-recovery" href="#">Forgot Password?</a></div>
                <div class="form-group"><button id = "login" type="submit">Log In</button></div>
            </form>
        </div>
    </div>
    <div class="form-panel two">
        <div class="form-header">
            <h1>Register Account</h1>
        </div>
        <div class="form-content">
            <form >
                <div class="form-group"><label for="username">Username</label><input type="text" id="reg-username" name="reg-username" required="required" /></div>
                <div class="form-group"><label for="password">Password</label><input type="password" id="reg-password" name="reg-password" required="required" /></div>
                <div class="form-group"><label for="cpassword">Confirm Password</label><input type="password" id="cpassword" name="cpassword" required="required" /></div>
                <div class="form-group"><label for="number">Phone</label><input type="phone" id="phone" name="phone" required="required" /></div>
                <div class="form-group"><label for="email">Email Address</label><input type="email" id="email" name="email" required="required" /></div>
                <div class="form-group"><button id = "register" type="submit">Registe</button></div>
            </form>
        </div>
    </div>
</div>


<script src="assets/js/login.js"></script>