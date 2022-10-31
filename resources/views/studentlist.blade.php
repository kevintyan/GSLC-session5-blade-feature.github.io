@extends('index')

@section('container')

<h2 class="mt-5">Student List:</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Course</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{ $student->id }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->phone_number }}</td>
            <td>{{ $student->course }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>

@endsection
