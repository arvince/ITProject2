

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HRIS Log in</title>
 <link href="{{ URL::asset('/logssets/css/login.css') }}" id="theme" rel="stylesheet">
  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
                
                <img src="{{ URL::asset('/logssets/img/download.png') }}">
			</div>

			<div class="login-form">
                <form action="" method="POST">
                    <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="ID number" id="uid">
                    </div>

                    <div class="control-group">
                    <input type="password" class="login-field" value="" placeholder="password" id="pwd">
                    </div>

                    <input type="submit" class="btn btn-primary btn-large btn-block" value="login">
                    <a class="login-link" href="#">Forgot your password?</a>
                </form>
			</div>
		</div>
	</div>
      
</body>
  
  
</body>
</html>
