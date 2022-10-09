@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <form action="{{ route('m_index') }}" method="get">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-select" name="meh_id">
                                        @foreach ($mechanics as $mechanic)
                                            <option value="{{ $mechanic->id }}">{{ $mechanic->name }}
                                                {{ $mechanic->surname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary m-1">Sort</button>
                            <a href="{{ route('m_index') }}" class="btn btn-secondary m-1">Reset</a>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <h2>Movies in garage</h2>
                    <ul class="list-group">
                        @forelse($movies as $movie)
                            <li class="list-group-item">
                                <div class="posts-list">
                                    <div class="content">
                                        <h3>{{ $movie->maker }} {{ $movie->make_year }}</h3>
                                        <h2><span class="btn"> License plate: </span>{{ $movie->plate }}</h2>
                                        <h2><span class="btn"> Mechanic working: </span><a
                                                href="{{ route('m_show', $movie->getMechanic->id) }}">{{ $movie->getMechanic->name }}
                                                {{ $movie->getMechanic->surname }}</a></h2>
                                        @if ($movie->photo)
                                            <h3>With photo</h3>
                                        @endif
                                    </div>
                                    <div class="buttons">
                                        <a href="{{ route('m_show', $movie) }}" type="button" class="btn btn-info">Show
                                            info</a>
                                        <a href="{{ route('m_edit', $movie) }}" type="button" class="btn btn-warning">Edit
                                            info</a>
                                        <form action="{{ route('m_delete', $movie) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="list-group-item">No mechanics found</li>
                        @endforelse
                    </ul>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
