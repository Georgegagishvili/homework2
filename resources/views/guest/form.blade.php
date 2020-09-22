<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
	<title></title>
</head>
<body style = "background-color:#ececec">
	<div class="container card" style = "margin-top:5%">
		<form action="{{ route('testpost') }}" method="POST">
			@csrf

		  <div class="form-group">
		    <label style = 'margin-top:1%'>First Name</label>
		    <input type="text" class="form-control"name="name" placeholder="name">	    
		  </div>

		  <div class="form-group">
		    <label>Last Name</label>
		    <input type="text" class="form-control" name="surname" placeholder="surname">
		  </div>		  

		  <div class="form-group">
		    <label>E-Mail</label>
		    <input type="email" class="form-control"  name="email" placeholder="ex. someone@mail.ge">
		  </div>		  

		  <div class="form-group">
		    <label>Birthday</label>
		    <input type="date" class="form-control" name="birthday">
		  </div>

		  <div class="form-group">
			 <label for="exampleFormControlTextarea1">Biography</label>
			 <textarea class="form-control" rows="3" name = 'biography'></textarea>
		  </div>

		  <button style ='margin-bottom: 1%' type="submit" class="btn btn-primary">Submit</button>
		  
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>