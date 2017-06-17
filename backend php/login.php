<?PHP
session_start();
if(isset($_POST['submit']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   $sql1="select * from login where email='$email' and password='$password'";
   $result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
   $row1=mysqli_fetch_row($result1);
   $role=$row1[2];
   
   if($row1[2]==0)
   { header('Location:question.php');}
   if($row1[2]==1)
   { header('Location:admin.php');}
 }
 ?>
 <!doctype html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title></title>
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/set1.css">
  
  <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>  
  <div class="col-md-6 right-side">
  <form action="" method="post">
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="text" id="email" name="email" required/>
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
  <span class="input__label-content input__label-content--hoshi">Email</span>
  </label>
  </span>
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="password" id="password" name="password" required/>
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
  <span class="input__label-content input__label-content--hoshi">Password</span>
  </label>
  </span>
  <div class="cta">
  <button class="btn btn-primary pull-left" name="submit">
  LOGIN NOW!!!
  </button>
  </form>
  </div>
  </div>
  </center>
<!-- Scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/classie.js"></script>
  <script>
  (function() {
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
  (function() {
  // Make sure we trim BOM and NBSP
  var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
  String.prototype.trim = function() {
  return this.replace(rtrim, '');
  };
  })();
  }
  
  [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
  // in case the input is already filled..
  if( inputEl.value.trim() !== '' ) {
  classie.add( inputEl.parentNode, 'input--filled' );
  }
  
  // events:
  inputEl.addEventListener( 'focus', onInputFocus );
  inputEl.addEventListener( 'blur', onInputBlur );
  } );
  
  function onInputFocus( ev ) {
  classie.add( ev.target.parentNode, 'input--filled' );
  }
  
  function onInputBlur( ev ) {
  if( ev.target.value.trim() === '' ) {
  classie.remove( ev.target.parentNode, 'input--filled' );
  }
  }
  })();
  </script>
  </body>
  </html>
   