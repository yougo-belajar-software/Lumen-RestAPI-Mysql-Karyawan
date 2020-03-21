<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function create(Request $request) {
        $movie = Movie::create($request->all());

        $res['status'] = 201;
        $res['message'] = 'Created';
        $res['result'] = $movie;
        return response($res);
    }

    public function showReview($id) {
        $review = Movie::with([
            'reviews'
        ])->findOrFail($id);

        // $review = DB::table('reviews')
        //                   ->join('users', 'reviews.users_id', '=', 'users.id')
        //                   ->join('movies', 'reviews.movies_id', '=', 'movies.id')
        //                   ->select('reviews.*', 'users.name', 'users.profile_picture', 'movies.title')
        //                   ->orderBy('created_at', 'desc')
        //                   ->get()
        //                   ->where('movies_id', '=', $id);

        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['results'] = $review;
        return response($res);
    }

    public function showOne($id) {
        $movie = Movie::findOrFail($id);

        $total_reviews = Review::where('movies_id', $id)->count();

        $average_rating = Review::where('movies_id', $id)->avg('rating');

        // $total_reviews = DB::table('reviews')
        //                          ->where('movies_id', '=', $id)
        //                          ->count();

        // $average_rating = DB::table('reviews')
        //                           ->where('movies_id', '=', $id)
        //                           ->avg('rating');

        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['total_reviews'] = $total_reviews;
        $res['average_rating'] = $average_rating;
        $res['result'] = $movie;
        return response($res);
    }

    public function showAll() {
        $movie = Movie::all();

        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['results'] = $movie;
        return response($res);
    }

    public function update(Request $request, $id) {
        $movie = Movie::findOrFail($id);

        $movie->update($request->all());

        $res['status'] = 200;
        $res['message'] = 'Updated';
        $res['result'] = $movie;
        return response($res);
    }

    public function delete($id) {
        $movie = Movie::findOrFail($id);

        $movie->delete();

        $res['status'] = 200;
        $res['message'] = 'Deleted';
        return response($res);
    }
}
