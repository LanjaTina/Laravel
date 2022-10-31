@extends('blank')

@section('page-title', 'Liste des clients')
@section('page-description', 'Vous pouvez ajouter un client')

@section('main-content')
<div class="br-pagebody">
  <div class="br-section-wrapper">
    <a href="{{route('clients.create')}}" class="btn btn-info float-right">Ajouter</a>
      <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table mg-b-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
@foreach($clients as $client)
            <tr>
                <th scope="row">{{$client -> id}}</th>
                <td>{{$client -> nom}}</td>
                <td>{{$client -> description}}</td>
                <td>
                  <a href="#" class="btn btn-warning btn-sm">Modifier</a>
                </td>
                <td>
                  <form method="POST" action="{{route('clients.destroy', $client->id)}}" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn-danger btn-sm">Supprimer</button>
                  </form>
                </td>
            </tr>
@endforeach
        </tbody>
      </table>
    </div><!-- bd -->
  </div>
</div>
</div>
@endsection