<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">

      <title><?php echo $meta['title']; ?></title>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <?php if(!empty($meta['description'])): ?>
      <meta name="description" content="<?php echo $meta['description']; ?>">
      <?php endif; ?>
      <?php if(!empty($meta['keywords'])): ?>
      <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
      <?php endif; ?>

      <link rel="author" href="humans.txt">

      <link rel="stylesheet" type="text/css" href="dist/css/main.css">
  </head>
  <body>

    <div id="Wrapper">
        <nav class="top-nav">
            <a class="pull-left" href="/">Site Logo</a>
            <ul class="nav-inline pull-right" role="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar" class="col">
              <div id="AboutMe">
                <div class="header">Hello, I am Julie</div>
                <img src="https://secure.gravatar.com/avatar/56ee8085b411424990d09ef2965ac152?size=200" alt="My Avatar" class="img-circle">
              </div>
            </div>
        </div>

        <div id="Footer">
            <small>&copy; 2017 - MyAwesomeSite.com</small>
            <ul role="navigation">
                <li><a href="terms.html">Terms</a></li>
                <li><a href="privacy.html">Privacy</a></li>
            </ul>
        </div>
    </div>

  </body>

</html>
