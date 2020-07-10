@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Nome</th>
                              <th>Email</th>
                              <th>Criado em</th>
                              <th>Atualizado em</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($usuarios as $usuario)
                              <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->created_at}}</td>
                                <td>{{$usuario->updated_at}}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                    <!-- {{$usuarios}} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
