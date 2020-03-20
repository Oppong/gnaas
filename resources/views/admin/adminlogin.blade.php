
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>
</head>
<body>

        
<form class="mt-4" action="/sends" method="post">

@csrf

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="smith asante" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" placeholder="smithasante@email.com" class="form-control">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" class="form-control">
    </div>


    <input type="submit" name="">
</form>
<br>
@if($errors->any())

<div class="alert alert-danger">
<ul>
  @foreach($errors->all() as $error)

      <li> {{ $error}}</li>

  @endforeach
</ul>

</div>

@endif
    
</body>
</html>
