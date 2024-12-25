@extends('layouts.app')

@section('content')
    <h1>Edit Service</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Service Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $service->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            @if($service->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" width="100">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Service</button>
    </form>
@endsection
