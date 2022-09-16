@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/fieldset.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Sistema de Marcação de Consulta</h1>
            <br>

            <div class="col-12">
                <div class="msg"></div>
            </div>

            <div class="container">

                <form name="form_schedule" id="form_schedule">
                    @include('site.pages.home._partials._form_schedule')
                </form>

                <div class="link_return"></div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/form_schedule.js') }}"></script>
@endpush
