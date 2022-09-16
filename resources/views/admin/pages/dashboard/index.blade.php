@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Aniversário</th>
                                    <th scope="col">CPF</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registers as $register)
                                    <tr>
                                        <th scope="row">{{ $register->id }}</th>
                                        <td>{{ $register->name }}</td>
                                        <td>{{ Carbon\Carbon::parse($register->birthdate)->format('d/m/Y') }}</td>
                                        <td>{{ $register->cpf }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
