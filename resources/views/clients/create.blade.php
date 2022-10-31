@extends('blank')

@section('page-title', 'Ajouter un client')
@section('page-description', 'Vous allez ajouter un client')

@section('main-content')
<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg">
            <input class="form-control" placeholder="Nom" name="nom" type="text" >
        </div>
        <div class="col-lg " >
        <input class="form-control" placeholder="Description du client" name="description" type="text">
    </div>
    </div><!-- col -->
    <div class="row">
        <div class="col-lg mg-t-15 " >
        <button type="submit" class="btn btn-primary">Create client</button>
    </div>
    </div>

    
</form>
@endsection