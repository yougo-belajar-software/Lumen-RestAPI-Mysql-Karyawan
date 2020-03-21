<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReviewController extends Controller
{
    public function create(Request $request) {
        $review = Review::create([
            'users_id' => $request['users_id'],
            'movies_id' => $request['movies_id'],
            'rating' => $request['rating'],
            'review_text' => $request['review_text'],
            'review_date' => Carbon::now()->format('Y-m-d'),
        ]);

        $res['status'] = 201;
        $res['message'] = 'Created';
        $res['result'] = $review;
        return response($res);
    }

    public function showOne($id) {
        $review = Review::with([
            'movie', 'user'
        ])->findOrFail($id);

        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['result'] = $review;
        return response($res);
    }

    public function showAll() {
        $review = Review::with([
            'movie', 'user'
        ])->orderBy('created_at', 'desc')->get();

        $total_reviews = Review::count();

        $res['status'] = 200;
        $res['message'] = 'Success';
        $res['total_reviews'] = $total_reviews;
        $res['results'] = $review;
        return response($res);
    }

    public function update($id, Request $request) {
        $review = Review::findOrFail($id);

        $review->update($request->all());

        $res['status'] = 200;
        $res['message'] = 'Updated';
        $res['result'] = $review;
        return response($res);
    }

    public function delete($id) {
        $review = Review::findOrFail($id);

        $review->delete();

        $res['status'] = 200;
        $res['message'] = 'Deleted';
        return response($res);
    }
}
