<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Marketing Campaign</h3>

<div class="container">
@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
  <form method="POST" action="{{url('/')}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name">

    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email Address">
	
	 <label for="lname">Phone Number</label>
    <input type="text" id="customer_phone" name="customer_phone" placeholder="Your Phone Number">

   


    <button type="submit" class="login_submit">submit</button>
  </form>
</div>

</body>
</html>
