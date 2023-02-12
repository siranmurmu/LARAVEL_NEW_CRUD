<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Category Add</h1>
<form method="post" action="{{ route('store.category') }}" enctype="multipart/form-data">
	@csrf
	Category Name:
	<input type="text" name="category_name"><br><br>
	Category Image:
	<input type="file" name="category_image"><br><br>
	Status:
	<select name="category_status">
		<option value="1">Active</option>
		<option value="0">Inactive</option>
	</select>
	<input type="submit" name="" value="Add">
	
</form>
</body>
</html>