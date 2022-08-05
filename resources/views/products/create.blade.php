@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Product</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">


            <form method="post" action="/save-product" enctype="multipart/form-data">
                @csrf
            <div class="card-body">

                <div class="row">
                    @include('products.form-2')
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    Guardar
                </button>
                <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
            </div>

            </form>

        </div>
    </div>
@endsection
