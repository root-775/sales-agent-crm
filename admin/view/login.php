<?php
if (isset($_POST['login'])) {
    $result = $this->obj->agentLogin(ucwords(strtolower(($_POST['email']))), $_POST['password']);

    if (isset($_SESSION["admin_u_id"])) {

        echo '<script>alert("congratulations Login successful :)");</script>';
        header('location: index.php?controller=admin&function=home ');
    } else {

        echo '<script>alert("Please Try Agin");</script>';
        // header('location: / ');
    }
}




?>




<style>


.panel-body{
    padding:10px 0px 20px 0px;
  opacity: 0.8;
  background-color: #645552;
  box-shadow: 0px 2px 12px #2B2320;
  color:#fff;
  margin-top:250px;
  border:2px solid #161211;
  border-radius: 10px;
}

.form-horizontal h1{
  text-align: center;
  letter-spacing: 1px;
  border-bottom: 2px solid #372C2A;
  padding-bottom: 10px;
  font-family: "Roboto, HelveticaNeue", Arial, sans-serif;
  font-size:16px;
  font-weight: bolder;
  background-color: #5C4E4B;
}

.form-group{
  margin-bottom:0px;

}

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;

} 

.login-btn .btn{
  background-color: #5B2C1A;
  color:#fff;
  border:2px solid #1F1A17;
  letter-spacing: 1px;
  border-image-source:linear-gradient(45deg,#372C2A,#372C2A);
  border-image-slice:30%;
  border-image-width:1;
  border-image-repeat:stretch;
  background-image: linear-gradient(to right, #552E1F 0%, #7F6D69  51%, #542A1C  100%)
 
 }

.login-btn .btn:hover, .login-btn .btn:active {

 color:#fff;
 border: 1px solid #5C4E4B;

} 

 ::placeholder { 
  color:#6F6259 !important;
  opacity: 1;
}

.email{
     border-bottom:1px solid #372C2A !important;
     border:0px;
     text-align: center;
     border-bottom-left-radius: 0px ;
     border-bottom-right-radius: 0px ;
     border-top-left-radius: 6px ;
     border-top-right-radius: 6px ;
     background-color: #2A201E;
     margin-top: 20px;
     font-size:14px;
     letter-spacing: 0.5px;
 }

   .pass{
  border-top-left-radius: 0px ;
  border-top-right-radius: 0px ;
  border-bottom-left-radius: 6px ;
  border-bottom-right-radius: 6px ;
  border-top:1px solid #372C2A !important;
  border:0px;
  background-color: #2A201E;
  text-align: center;
  margin-bottom: 20px;
  font-size:14px;
  letter-spacing: 0.5px;
 }

.logo img{
     width:100px;
     display: block;
     margin-left: auto;
     margin-right: auto;
     width: 50%;
     margin-bottom: 20px;
 }
body{
    background-color: #ffffff;
}
</style>

    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="panel-body" style="margin-top: 112px;">
                    

                    <form class="form-horizontal" method="post" action="">
                        <h1>Admin Login</h1>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control email" name="email" value=""
                                    placeholder="USERNAME" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password-field" type="password" class="form-control pass" name="password" placeholder="Password">
                            </div>
                        </div>


                        <div class="login-btn ">
                            <div class="col-md-12">
                                <button type="submit" name="login" value="agentLogin" class="btn form-control">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


























<!-- <div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <h3><samp class="text-primary">RRAI CRM </samp> Admin Login</h3>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h4 class="font-weight-bold"></h4>
                </div>
            </div>
            <form method="POST" action="">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Enter Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Enter Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" name="login" value="agentLogin" class="btn btn-primary">Login</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>
</div> -->