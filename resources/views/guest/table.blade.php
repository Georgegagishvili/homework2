<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
	<title></title>
	<style type="text/css">
		table,td,tr,th{
			border:2px solid black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table class = 'table'> 
		<thead class = 'thead-dark'>
			<tr>
				<th scope = 'row'>#</th>
				<th scope = 'col'>Name</th>
				<th scope = 'col'>Surname</th>
				<th scope = 'col'>E-mail</th>
				<th scope = 'col'>Birthday</th>
				<th scope = 'col'>Biography</th>
			</tr>
		</thead>
		</tr>
		@foreach ($newdata as $data)
			<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $data['name']}}</td>
				<td>{{ $data['surname']}}</td>
				<td>{{ $data['email']}}</td>
				<td>{{ $data['birthday']}}</td>
				<td>{{ $data['biography']}}</td>
			</tr>
		@endforeach

	</table>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>