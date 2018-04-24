<?php session_start(); ob_start(); require_once('mysqli_connect.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @font-face{
                font-family: 'Roboto Condensed';
                src: url('RobotoCondensed-Regular.ttf');
            }
            
            body 
            {
                /*background-image: linear-gradient(to top, #ebbba7 0%, #cfc7f8 100%);*/    
                font-family: 'Roboto Condensed';
               /* background-image: url('UI-plain.png'); */
				/* background-repeat: no-repeat; */
				/* background-position: center; */
				background-color: #ece5e0;
                z-index: 0;
                width: 100%;
                height: auto;
            }

            fieldset
            {
                border: 2px solid gray;
                width: 60%;
                height: 60%;
                padding: 1em;
                font-family:'Roboto Condensed';
                font-size: 15px;
            }
            
            fieldset legend
            {
                border: 2px solid black;
                padding: 15px;
            }
            
            fieldset, fieldset legend{
                background: rgba(255, 255, 255, 0.4);
            }

            p
            {
                margin-left: 10cm;
                margin-right: 10cm;
            }
            
            .submit{
                letter-spacing: 1px;
                margin-top: -2px;
                border: none;
                background-color: orange;
                color: white;
                padding: 10px 2px 10px 2px;
                font-family: 'Roboto Condensed';
                transition-duration: 0.4s;
                cursor: pointer;
            }
            
            .submit:hover{
                color: white;
                background-color: steelblue;
            }
            
            input[type=text], select {
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 2px;
            }
        </style>
        <meta charset="UTF-8">
        <title> LOGOUT </title>
    </head>
    <body>

       <?php 
	   
			session_start();
				if(session_destroy()) // Destroying All Sessions
				{
				header("Location: index.php"); // Redirecting To Home Page
				}
			
			
				
			?>

		</form>
    </body>
    <!--2NIpGQzTom7IpiTl-->
</html>