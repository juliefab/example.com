<?php
require '../core/processContactForm.php';


    $content = <<<EOT
        <h1 id = "header" class="header">Contact Julie </h1>
        {$message}
          <form method="post">
            <div>
              <label for="firstName">First Name</label><br>
              <input type="text" name="first_name" id="firstName">
              <div class="text-error">{$valid->error('first_name')}</div>
            </div>

            <div>
              <label for="lastName" id="lastName">Last Name</label><br>
              <input type="text" name="last_name">
               <div class="text-error">{$valid->error('last_name')}</div>
            </div>

            <div>
              <label for="email" id="email">Email</label><br>
              <input type="text" name="email">
               <div class="text-error">{$valid->error('email')}</div>
            </div>

            <div>
              <label for="subject" id="subject">Subject</label><br>
              <input type="text" name="subject">
               <div class="text-error">{$valid->error('subject')}</div>
            </div>

            <div>
              <label for="message" id="message">Message</label><br>
              <textarea name="message"></textarea>
               <div class="text-error"">{$valid->error('message')}</div>
            </div>

            <input type="submit">
      </form>
EOT;

require '../core/layout.php';
