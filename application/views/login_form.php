<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    	<link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


    <div class="container-fluid">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu a senha?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

               		<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuário">                                        
                            </div>
                                
            		    <div style="margin-bottom: 25px" class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input id="login-password" type="password" class="form-control" name="password" placeholder="Senha">
			    </div>
                                
			    <div class="input-group">
				<div class="checkbox">
				    <label>
					<input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
				    </label>
			    	</div>
	    		    </div>

			    <div style="margin-top:10px" class="form-group">
				<div class="col-sm-12 controls">
		    		    <a id="btn-login" href="#" class="btn btn-success">Login</a>
			    	</div>
			    </div>
            		</form>
                    </div>                     
    		</div>  
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

	<!-- Bootstrap core JavaScript -->
	<script src="assets/js/jquery-1.7.1.min.js"></script>
	<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
