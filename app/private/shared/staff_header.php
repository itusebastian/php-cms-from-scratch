<?php
if (!isset($page_title)) {
  $page_title = 'PHP CMS from Scratch';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo h($page_title); ?></title>
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
</head>

<body>
  <header>
    <h1>Welcome to PHP CMS from Scratch</h1>
  </header>

  <navigation>
    <ul>
      <li><a href="<?php echo url_for('/staff'); ?>">Menu</a></li>
    </ul>
  </navigation>