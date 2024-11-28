@extends('layout')
@section('content')


    <div class="row d-flex justify-content-center mb-3">
        <div class="card" style="width: 45%; border: 0;">
            <img class="card-img-top" src="{{asset('storage/images/popcorn.jpg')}}" alt="popcorn" width="300px" height="auto">
            <div class="card-body">
                <a href="{{ route('movie.add') }}" class="btn btn-dark btn-lg btn-block d-flex justify-content-center">add new movie</a>
            </div>
        </div>
    </div>

    <div class="row g-4 d-flex justify-content-evenly">
        @foreach ($movies as $movie)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100" style="width: 18rem;">
                    <!-- Card Image -->
                    <div style="height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/'.$movie->photo) }}" class="card-img-top w-100 h-100" alt="..." style="object-fit: cover;">
                    </div>

                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-subtitle mb-2 text-body-secondary fw-bold">{{ $movie->genre->name }}</p>
                        <p class="card-text">{{ $movie->description }}</p>
                        <p class="card-text">{{ $movie->publish_date->format('d-m-Y') }}</p>

                        <!-- Delete Button -->
                        <form action="{{ route('movie.delete', $movie) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3" style="width: 100%;">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        {{$movies->links()}}
    </div>


@endsection

