<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id_post)
	{
        $post = Post::with('comments')->find($id_post);
        return View::make('comments.create',compact('post'))->with('id_post',$id_post);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id_post)
	{
        $post = Post::find($id_post);
        $input = Input::all();
        $comment = new Comment();
        $comment->content = $input['content'];
        $comment->username = Auth::user()->username;
        $comment->id_user = Auth::user()->id;
        $post->comments()->save($comment);
        $comment->save();
        return Redirect::to('comments/create/' . $id_post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return Redirect::to('/');
	}


}
