<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Registration Form</h5>
        </div>
        <div class="card-body">
          <form action="{{url('edited',$student->id)}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="{{$student->Name}}">
            </div>
            <div class="form-group">
              <label for="phoneNumber">Phone Number</label>
              <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" name="phone" value="{{$student->Phone}}">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email"  value="{{$student->Email}}">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" class="form-control" id="age" placeholder="Enter your age" name="age" value="{{$student->Age}}">
            </div>
            <div class="form-group">
              <label for="rollNumber">Roll Number</label>
              <input type="text" class="form-control" id="rollNumber" placeholder="Enter your roll number" name="rollnum" value="{{$student->Rollnum}}">
            </div>
            <div class="form-group">
              <label for="class">Class</label>
              <select class="form-control" id="class" name="class" value="{{$student->Class}}">
                <option value="">Select your class</option>
                <option value="1">YERA I</option>
                <option value="2">YERA II</option>
                <option value="3">YERA III</option>
                <!-- Add more options as needed -->
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
