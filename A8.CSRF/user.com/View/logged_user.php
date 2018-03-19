<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	  <title>Whitesquare</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	  <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>CSRF</title>
  </head>
  <body>
    <div id="wrapper">
      <h1> HELLO, <?=$q?>
        <?if ($CSRFhash != "0"){
            echo('<input type="hidden" name="token" value="' . $CSRFhash . '">');
          }
        ?>
      <script>
        function redir(){
          if(document.getElementsByName("token")[0] != undefined){
            document.location.replace('http://user.com/?remember_me=false&token=' + document.getElementsByName("token")[0].value);
          }
          else {
            document.location.replace("http://user.com/?remember_me=false");
          }
        }
      </script>
      <input type="button" onclick="redir()" value="Log out">
	  </div>
    <footer>
      <p>
        Vulnerable Page <br>
        Copyright &copy; 2017
      </p>
    </footer>
  </body>
  </html>
