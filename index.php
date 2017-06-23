<?php 
require 'classes/database.php';

$database = new Database;

$database->query('SELECT * FROM posts WHERE id = :id');
$database->bind(':id', 1);
$rows = $database->resultset();
?>
<h1>Add Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<label>Post Title</label><br />
	<input type="text" name="title" placeholder="Add a Title..." /><br /><br />
	<label>Post Body</label><br />
	<textarea name="body"></textarea><br /><br />
	<input type="submit" name="submit" value="Submit" />
</form>
<h1>Posts</h1>
<div>
<?php foreach($rows as $row) : ?>
	<div>
		<h3><?php echo $row['title']; ?></h3>
		<p><?php echo $row['body']; ?></p>
		</div>
<?php endforeach; ?>
</div>