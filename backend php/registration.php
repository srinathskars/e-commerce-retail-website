<?PHP
if(isset($_POST['submit']))
 {
   $name=$_POST['name'];
   $college=$_POST['college'];
   $email=$_POST['email'];
   $phone=$_POST['mobile'];
   $password=$_POST['password'];
   $rpassword=$_POST['rpassword'];
 
   if($password===$rpassword)
   { 
     include('connection.php');
     
     $sql0="select * from participants where email='$email'";
     $result0=mysqli_query($con,$sql0) or die(mysqli_error($con));
     $count0=mysqli_num_rows($result0);
     
     if($count0>0)
     { $error="Entry Exists!!!";
     }
     else
     { 
     $sql3="select * from login where email='$email'";
     $result3=mysqli_query($con,$sql3) or die(mysqli_error($con));
     $count1=mysqli_num_rows($result3);
     
     if($count1>0)
     { $error="Entry Exists!!!";
      }
     else
     {
     
     $sql1="insert into participants(name,college,email,phone) values('$name','$college','$email',$phone)";
     $result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
     
     $sql2="insert into login(email,password) values('$email','$password')";
     $result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
     
     if($result1 && $result2)
      { $error="Registration Successful";
      }
      else
      { $error="Registrattion unsuccessful";
      }
    }
   }
  }
    else
     {
       $error="passwords doesn't match";
     }
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
  <center><h2>REGISTRATION FORM</h2>
  <span><h4 style="Color:red"><?PHP echo $error; ?></h4></span>
  <div class="col-md-6 right-side">
  <form action="" method="post">
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="text" id="name" name="name" required/>
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">
  <span class="input__label-content input__label-content--hoshi">Name</span>
  </label>
  </span>
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="text" id="college" name="college" required/>
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="college">
  <span class="input__label-content input__label-content--hoshi">College</span>
  </label>
  </span>
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="email" id="email" name="email" required />
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
  <span class="input__label-content input__label-content--hoshi">E-mail</span>
  </label>
  </span>
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="tel" id="mobile" name="mobile" required />
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="mobile">
  <span class="input__label-content input__label-content--hoshi">Mobile No.</span>
  </label>
  </span>
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="password" id="password" name="password" required />
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
  <span class="input__label-content input__label-content--hoshi">Password</span>
  </label>
  </span>
  <span class="input input--hoshi">
  <input class="input__field input__field--hoshi" type="password" id="password1" name="rpassword" required />
  <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password1">
  <span class="input__label-content input__label-content--hoshi">Retype Password</span>
  </label>
  </span>
  <div class="cta">
  <button class="btn btn-primary pull-left" name="submit">
  REGISTER NOW!!!
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
 