<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use DB;

class ReviewsController extends Controller
{
    public function index(){
        $data['comments'] = Comments::from('comments')
                        ->join('users', 'users.id', '=', 'comments.userid')
                        ->select(DB::raw("CONCAT(users.first_name,' ',users.last_name) as full_name"), 'comments.comments', 'comments.created_at', 'comments.id')
                        ->orderBy('comments.id', 'desc')
                        ->get();

        return view('review', $data);
    }
}
