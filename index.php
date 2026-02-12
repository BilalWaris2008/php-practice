    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php
      $fullname = "Ahmed Ali";
      $email = "ahmed@gmail.com";
      $number = "123456789";
      $password = "ahmedali123#";
      
    //   echo $fullname;
    //   echo "<br>";
    //   echo $email;
    //   echo "<br>";
    //   echo $number;
    //   echo "<br>";
    //   echo $password;
     
    // $value1 = 50;
    // $value2 = 150;

    // echo $value1 + $value2;
    // echo "<br>";
    // echo $value1 - $value2;
    // echo "<br>";
    // echo $value1 * $value2;
    // echo "<br>";
    // echo $value1 / $value2;

    // Condition Statements(if/else)
//     $marks = 80;

//    if($marks>=70){
//     echo "Grade A";
//    }
//    else{
//     echo"Grade B";
//    }

     ?>

        <div class="outer-box">
            <div class="inner-box">
                <header class="signup-header">
                    <h1>Signup</h1>
                    <p>It just takes 30 seconds</p>
                </header>

                <main class="signup-body">
                    <form action="#">
                        <p>
                            <label for="fullname">Fullname</label>
                            <input type="text" id="fullname">
                            <div class="error" id="error-fullname"></div>
                        </p>
                        <p>
                            <label for="email">Your Email</label>
                            <input type="email" id="email">
                            <div class="error" id="error-email"></div>
                        </p>
                        <p>
                            <label for="password">Your Password</label>
                            <input type="password" id="password">
                            <div class="error" id="error-password"></div>
                        </p>
                        <p>
                            <input onclick="createAccount()" type="submit" id="submit" value="Create Account">
                        </p>
                    </form>
                </main>

                <footer class="signup-footer">
                    <p>Already have an account? <a href="#">Login</a></p>
                </footer>
            </div>
            <div class="circle c1"></div>
            <div class="circle c2"></div>
        </div>
    </body>
    <script src="script.js"></script>

    </html>