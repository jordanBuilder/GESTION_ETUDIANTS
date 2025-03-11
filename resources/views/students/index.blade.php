@extends('base')
@section('content')
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">Identifiant</th>
            <th scope="col">Last name</th>
            <th scope="col">First name</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>
            <th scope="col">Age</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->firstname}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phonenumber}}</td>
            <td>{{$student->age}}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">More</button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Edit</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Delete</a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection