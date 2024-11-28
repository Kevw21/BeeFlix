@extends('layout')
@section('content')
    @session('success')
        <div class="alert alert-success">Data sucessfully saved</div>
    @endsession
    <form action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select form-select-lg" name="genre" id="genre">
                <option value="" disabled selected>--Select a genre--</option>
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}"  @selected(old('genre')==$genre->id)>{{$genre->name}}</option>
            @endforeach
            </select>
            @error('genre')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control" placeholder="" {{old('photo')}}/>
            @error('photo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}"/>
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{old('description')}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publish_date" class="form-label">Publish Date</label>
            <input type="date" class="form-control" name="publish_date" id="publish_date" value="{{old('publish_date')}}"/>
            @error('publish_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <input class="btn btn-primary mb-2" type="submit" value="submit new movie">
        <br>
        <a href="{{ route('home.index') }}" class="btn btn-danger">Back</a>
    </form>
@endsection
