@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Show Category Details
                    <a href="{{ url('category') }}" class="btn btn-secondary float-end">Back</a>
                </h5>
            </div>
            <div class="card-body">


                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                       <p>{{ $category->name }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                         <p>{{ $category->description }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <p>{{ $category->status == '1' ? 'Checked' : 'Hidden' }}</p>
                    </div>


        </div>
    </div>
</div>

@endsection
