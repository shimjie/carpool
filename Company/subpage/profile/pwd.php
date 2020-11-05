<style>
.pwd-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.pwd-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.pwd-form-1 h3{
    text-align: center;
    color: #333;
}
.pwd-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.pwd-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.pwd-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}
</style>

<div class="container pwd-container">
            <div class="row">
                <div class="col-md-6 pwd-form-1">
                    <h3>Change Password</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="New Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Renter New Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>