<!DOCTYPE html>
<html>
<head>
    <title>Crud Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
   <h1>Edit student Details</h1>

   <div>
    @if($errors->any())
    <ul>
        @foreach($$errors->all() as $error)

        <li>{{$$error}}</li>

        @endforeach
    </ul>
    @endif
   </div>

   <form method="post" action="{{route('student.update',['student'=>$student])}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="studname" class="form-label">Student Name </label>
        <input type="text" name="studname" placeholder="name" value="{{$student->studname}}" class="form-control"/>
    </div>
    <div class="mb-3">
        <label for="course" class="form-label">Course </label>
        <input type="text" name="course" placeholder="course" value="{{$student->course}}" class="form-control"/>
    </div>
    <div class="mb-3">
        <label for="fee" class="form-label">Fee Balance </label>
        <input type="text" name="fee" placeholder="fees balance" value="{{$student->fee}}" class="form-control"/>
    </div>
    <div>
        <input type="submit" value="Edit Student Details" class="btn btn-primary"/>
    </div>
   </form>
    </div>
</body>
</html>