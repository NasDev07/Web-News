@extends('layouts.admin_template')
@section('title', 'Add')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Add Categori</h4>

        <div class="row">
            @include('notif')
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Tanbah Categori</h5>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Input Usrname" aria-describedby="defaultFormControlHelp">
                                @error('name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    placeholder="Input slug" aria-describedby="defaultFormControlHelp">
                                @error('slug')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mt-3">
                                <input type="submit" value="Save" id="save" name="save" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
