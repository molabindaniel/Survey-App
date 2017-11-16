<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="assets/images/users/A.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div><center><h2><strong>Login</strong></h2></center></div>
                <div class="login-body">
                    <div class="login-title"><h5><strong>Please enter your basic credentials</strong><h5></div>
                    <form action="login.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name = "username" placeholder="Username" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name = "password" placeholder="Password" required />
                        </div>
                    </div>
					<div class="form-group">
                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                            <h5><label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Remember me</label><h5>
                        </div>
                    </div>
                    <div class="form-group">
                       <div class="col-md-6">
                            <button class="btn btn-info btn-block" name = "submit" href="Signup.php">Login</button>
                        </div>	
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017-2018 
                    </div>
                   
                </div>
            </div>
            
        </div>
        
    </body>
</html>









