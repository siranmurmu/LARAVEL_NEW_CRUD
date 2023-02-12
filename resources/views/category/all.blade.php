<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>All Category</h1>
<a href="{{ route('add.category') }}">Add Category</a>
<table>
	<thead>
		<tr>
			<th>Category Name</th>
			<th>Category Image</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $key => $item)
		<tr>
			<td>{{ $item->category_name }}</td>
			<td><img src="{{ asset($item->category_image) }}" style="width:50px;height: 50px;"></td>
			<td><a href="{{ route('edit.category', $item->id) }}">Edit</a></td>
			<td><a href="{{ route('delete.category', $item->id) }}" onclick="return confirm('Are You Sure ?')">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>