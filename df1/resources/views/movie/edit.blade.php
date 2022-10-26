@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Movie</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('m_update', $movie) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="input-group mb-3">
                                <span class="input-group-text">Title</span>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $movie->title) }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Price</span>
                                <input type="text" name="price" class="form-control"
                                    value="{{ old('price', $movie->price) }}">
                            </div>
                            {{-- @if ($movie->photo)
                                <div class="image">
                                    <img src="{{ $movie->photo }}" alt="photo">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="delete-photo"
                                            name="delete_photo">
                                        <label class="form-check-label" for="delete-photo">
                                            Delete photo
                                        </label>
                                    </div>
                                </div>
                            @endif --}}
                            <div class="input-group mb-3">
                                <span class="input-group-text">Photo</span>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <select class="form-select mb-3" name="category_id">
                                <option selected value="0">Choose category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == old('categpry_id', $movie->categpry_id)) selected @endif>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary mt-4">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
