@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit Category
                    <a href="{{ url('category') }}" class="btn btn-secondary float-end">Back</a>
                </h5>
            </div>
            <div class="card-body">
                <form action= "{{ route('category.update',$category->id) }}"  method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input
                        type="text"
                         name="name"
                          class="form-control"
                           id="name"
                           value="{{ $category->name }}"
                           placeholder="Enter Category Name"
                           />
                           @error('name')
                            <small class="text-danger">{{ $message }}</small>
                           @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea
                         name="description"
                          class="form-control"
                           id="description"
                           rows="3"
                           value="{{!! $category->description !!}}"
                           placeholder="Enter description"
                           >{{ $category->description }}</textarea>
                           @error('description')
                            <small class="text-danger">{{ $message }}</small>
                           @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="checkbox" id="status" {{$category->status === 1 ? 'checked':''}}/>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</buton>
                        </div>
                        <a href="{{ url('category') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
