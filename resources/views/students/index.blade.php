<!DOCTYPE html>
<html>
<head>
    <title>Crud Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
   <h1>Student</h1>
   @if(session()->has('success'))
   <div class="alert alert-success" role="alert">
    {{session('success')}}
   </div>
   @endif
   <a href="{{route('student.create')}}" class="btn btn-primary text-white">ADD NEW STUDENT</a>
   <div class="container mt-5">
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Course Taken</th>
            <th>Fee Balance</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->studname}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->fee}}</td>
            <td>
                <a href="{{route('student.edit', ['student' => $student])}}" class="btn btn-primary text-white">EDIT</a>
            </td>
            <td>
                <form method="post" action="{{route('student.destroy',['student'=>$student])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger text-white"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>    
   </div>
    </div>
</body>
</html>

