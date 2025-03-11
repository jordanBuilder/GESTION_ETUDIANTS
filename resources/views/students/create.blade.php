@extends('base')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="w-60 mx-auto p-4">
        <h1 class="mb-5 title-border">AJOUTER UN NOUVEAU ETUDIANT</h1>
        <form method="POST" action="{{route('students.store')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-start">Nom Etudiant</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doe" name="firstname">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-start">Prenom Etudiant</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John" name="lastname">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-start">Age Etudiant</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="18" name="age">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-start">Numero Etudiant (+228)</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="71766232" name="phonenumber">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-start">Email Etudiant</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            <div>
                <button type="submit" class="btn btn-success p-3">Soumettre</button>
            </div>
        </form>
    </div>
</div>
@endsection