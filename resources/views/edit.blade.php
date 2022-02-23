<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Update User details</h2>
  <div class="col-md-6 mt-6">
  <form action="/editAction" method="post">
    @csrf
    <input type="hidden" name="id" value={{$sdata['id']}}>
    <div class="mb-3 mt-3">
      <label for="firstname">First name:</label>
      <input type="text" value="{{$sdata['firstname']}}" class="form-control" id="email" placeholder="Enter First Name" name="firstname">
    </div>
    <div class="mb-3 mt-3">
        <label for="lastname">Last name:</label>
        <input type="text" value="{{$sdata['lastname']}}" class="form-control" id="last" placeholder="Enter Last Name" name="lastname">
      </div>
      <div class="mb-3 mt-3">
        <label for="emainame">Email:</label>
        <input type="email" value="{{$sdata['email']}}" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</body>
</html>
