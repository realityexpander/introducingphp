<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Get and post</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <p>
    <label for="name">Name:</label>

    <input type="text" name="name" id="name" value="<?= $_POST ? $_POST['name'] : "" ?>" >
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $_POST ? $_POST['email'] : "" ?>">
  </p>
  <p>
    <label for="file">file:</label>
    <?= $_POST ? $_POST['file'] : "" ?>
    <input type="file" name="file" id="file">
  </p>
  <p>
    <label for="comments">Comments:</label>
    <textarea name="comments" id="comments"><?= $_POST ? $_POST['comments'] . " and": "" ?></textarea>
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>
<pre>
    <?php
    print_r($_SERVER);

    if ($_GET) {
        echo 'Content of the $_GET array:<br>';
        print_r($_GET);
    } elseif ($_POST) {
        echo 'Content of the $_POST array:<br>';
        print_r($_POST);
    } else {
      echo "empty GET and POST";
    }
    ?>
</pre>
</body>
</html>