<?php
require "database.php";

$category_id = $_POST['category_id'];
$query = "DELETE FROM categories
WHERE categoryID = $category_id;";

$result = $db -> query($query);


require "category_list.php";