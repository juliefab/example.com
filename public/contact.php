<?php require '../core/processContactForm.php' ?>

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
            <?php echo $message ?>


          <form method="post">
            <div>
              <label for="firstName">First Name</label><br>
              <input type="text" name="first_name" id="firstName">
              <div style="color: #ff0000;"><?php echo $valid->error('first_name'); ?></div>
            </div>

            <div>
              <label for="lastName" id="lastName">Last Name</label><br>
              <input type="text" name="last_name">
               <div style="color: #ff0000;"><?php echo $valid->error('last_name'); ?></div>
            </div>

            <div>
              <label for="email" id="email">Email</label><br>
              <input type="text" name="email">
               <div style="color: #ff0000;"><?php echo $valid->error('email'); ?></div>
            </div>

            <div>
              <label for="subject" id="subject">Subject</label><br>
              <input type="text" name="subject">
               <div style="color: #ff0000;"><?php echo $valid->error('subject'); ?></div>
            </div>

            <div>
              <label for="message" id="message">Message</label><br>
              <textarea name="message"></textarea>
               <div style="color: #ff0000;"><?php echo $valid->error('message'); ?></div>
            </div>

            <input type="submit">

          </form>
        </body>
      </html>

    </body>
</html>
