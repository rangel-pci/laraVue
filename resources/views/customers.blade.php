@extends('layouts.master')
@section('title', 'Clientes')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div id="app" class="container shadow-sm p-3 bg-white rounded">
                    <router-view />
                </div>
            </div>
        </div>
    </div>

@endsection
