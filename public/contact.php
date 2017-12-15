<?php

$validEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";

$data = $_POST;
$errors =[];

foreach($data as $key => $value){
    echo "{$key} = {$value}<br><br>";

    //Use a switch statement to change your behavior based upon the form field
switch($key){
    case 'email':
      if(preg_match($validEmail, $value)!==1){
          $errors[$key] = "Invalid email";
      }

    break;

    default:
      if(empty($value)){
          $errors[$key] = "Invalid {$key}";
      }
    break;
}

}

var_dump($errors);

 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="UTF-8">
       <title>Contact</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <style>

       </style>
    </head>
    <body>
        <nav>
      <a href="index.html">Home</a> | <a href="contact.php">Contact</a> | <a href="resume.html">Resume</a>
    </nav>

          <h1>Contact Julie Finch</h1>
          <form method="post">
            <div>
              <label for="firstName">First Name</label><br>
              <input type="text" name="first_name" id="firstName">
            </div>

            <div>
              <label for="lastName" id="lastName">Last Name</label><br>
              <input type="text" name="last_name">
            </div>

            <div>
              <label for="email" id="email">Email</label><br>
              <input type="text" name="email">
            </div>

            <div>
              <label for="subject" id="subject">Subject</label><br>
              <input type="text" name="subject">
            </div>

            <div>
              <label for="message" id="message">Message</label><br>
              <textarea name="message"></textarea>
            </div>

            <input type="submit">

          </form>
        </body>
      </html>

    </body>
</html>
