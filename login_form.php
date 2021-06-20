<!DOCTYPE html>
<html lang="en">
<form action="login_proses.php" method="POST">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>
    <div class="container my-4">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Please Login</div>                          
                    <div style="padding-top:30px" class="panel-body" >                        
                        <form id="loginform" class="form-horizontal" action="" method="post" role="form">       
                            <!-- Username -->
                            <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="i_username"  placeholder="username"> </div>
                                        
                            <!-- Password -->
                            <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="i_password" placeholder="password"></div>

                            <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                            <input type="submit" name="b_login" class="btn btn-success" value="Login"/> </div>
                        </form>
                    </div>                     
                </div>  
            </div>
        </div>
    </body>
</form>
</html>
