<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function movieList(){
        $movies = Movie::paginate(4);
        return view('home', ['movies'=>$movies]);
    }

    public function addMovie(){
        $genres = Genre::all();
        return view('add-movie', ['genres'=>$genres]);
    }

    public function storeMovie(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:30',
            'photo'=>'required|image|max:5000',
            'publish_date' => 'required|date|before_or_equal:today',
            'description'=>'required|max:50',
            'genre' => 'required'
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->photo = $request->photo->store('images','public');
        $movie->publish_date = $request->publish_date;
        $movie->description = $request->description;
        $movie->genre_id = $request->genre;
        $movie->save();

        return redirect()->back()->with('success', 'Movie sucessfully added');
    }

    public function deleteMovie(Movie $movie){
        Storage::disk('public')->delete($movie->photo);
        $movie->delete();
        return redirect()->back()->with('success','Movie sucessfully deleted');
    }

}
