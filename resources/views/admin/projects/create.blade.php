@extends('layouts.app')

@section('content')
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
    <div class="d-flex align-items-center">
        <h2 class="fs-4 text-secondary my-4">Crea Nuovo Progetto</h2>
    </div>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label" for="start_date">Data inizio Progetto</label>
            <input type="date" id="start_date" name="start_date">

            <label class="form-label ms-3" for="end_date">Data fine Progetto</label>
            <input type="date" id="end_date" name="end_date">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Salva</button>
    </form>
</div>
@endsection