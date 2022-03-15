<?php
require "database.php";

$added_category = $_POST['added_category_name'];
$query = "INSERT INTO categories (categoryName)
VALUES ('$added_category');";

$result = $db -> query($query);

require "category_list.php";