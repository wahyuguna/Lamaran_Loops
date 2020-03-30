<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\comments;
use App\posts;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['comments'] = user::select(DB::raw('users.*,comments.comment,posts.title'))
                ->join('posts', 'posts.user_id', '=', 'users.id')
                ->join('comments','comments.post_id','=','posts.id')
                ->get();

        // dd($data);
        return view('user.user-list',$data);
    }

    public function Guestcomments()
    {
        $email = user::pluck('email')->all();
        $data['guest'] = comments::whereNotIn('email', $email)->get();
        // dd($data);

        return view('user.guest-comment',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data['post_id'] = $request->post_id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['website'] = $request->website;
        $data['comment'] = $request->comment;

        $create = comments::create($data);

        if ($create) {
            return redirect()->back()->with('message','Create Comment Success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data['post'] = posts::where('slug',$slug)->first();
        $data['comment'] = comments::where('post_id',$data['post']->id)->get();
        // dd($data);

        return view('coment',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
