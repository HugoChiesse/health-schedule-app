@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/fieldset.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Sistema de Marcação de Consulta</h1>
            <br>
            @include('site.pages.home._partials._form')
            <br>

            <div class="container">

                <div class="list-card row">
                    <div class="card col-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <img class="card-img rounded-circle">
                                </div>

                                <div class="col-9">
                                    <span class="card-title" style="font-size: 1em; font-weight: bolder"></span>
                                    <p class="card-text text-muted"></p>

                                    <div class="especialidadeID"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/specialties.js') }}"></script>
@endpush
