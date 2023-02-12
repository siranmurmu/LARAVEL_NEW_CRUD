<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Edit Category</h1>
<form method="post" action="{{ route('update.category') }}" enctype="multipart/form-data">
	@csrf

	<input type="hidden" name="id" value="{{ $category->id }}">
	<input type="hidden" name="old_image" value="{{ $category->category_image }}">

	Category Name:
	<input type="text" name="category_name" value="{{ $category->category_name }}"><br><br>
	Category Image:
	<input type="file" name="category_image"><br><br>
	<img src="{{ asset($category->category_image) }}" style="width:50px;height:50px;"><br>
	Category Status:
	<select name="category_status">
		<option value="1" {{ $category->category_status == 1 ? 'selected':'' }} >Active</option>
		<option value="0" {{ $category->category_status == 0 ? 'selected':'' }}>Inactive</option>
	</select>
	<input type="submit" name="" value="Update">
</form>
</body>
</html>