@extends('adminlte::page')

@section('title', __('Edit Services Section'))

@section('content_header')
    <h1>{{__('Edit Services Section')}}</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <br />
                        @if (session('flash_message'))
                        <ul class="alert alert-success">
                            {{session('flash_message')}}
                        </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/services-section/' . $servicessection->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.services-section.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
