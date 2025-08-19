<?php require_once('../../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // Default to 1 if no ID is provided

echo $id;

?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a>
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a>