@extends('etudiants.layout')
@section('content')
    <div class="container" width=100%>
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Liste des etudiants</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/etudiants/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" width=100%>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Age</th>
                                        <th>Genre</th>
                                        <th>Email</th>
                                        <th>Tel</th>
                                        <th>Adresse</th>
                                        <th>filiere</th>
                                        <th>classe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($etudiants as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->genre }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->tel }}</td>
                                        <td>{{ $item->adresse }}</td>
                                        <td>{{ $item->filiere }}</td>
                                        <td>{{ $item->classe }}</td>
 
                                        <td>
                                            <a href="{{ url('/etudiants/' . $item->id) }}" title="View categorie"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/etudiants/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/etudiants' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete etudiant" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection