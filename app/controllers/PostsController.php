<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

    }



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id_blog)
	{
		return View::make('posts.create')->with('id_blog',$id_blog);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id_blog)
	{
		$blog = Blog::find($id_blog);
        $file = Input::file('file');
        $input = Input::all();
        $uploadPath = public_path('uploads'."/".strtolower(md5(Auth::User()->id)));
        $filename = $file->getClientOriginalName();
        $path = '/uploads'."/".strtolower(md5(Auth::User()->id))."/".$filename;
        $mime = $file->getClientMimeType();
        $sizeKo = $file->getClientSize();

        $post = new Post();
        $post->id_user = Auth::user()->id;
        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->filename = $filename;
        $post->path = $path;
        $post->size = $sizeKo;
        $post->type = $mime;
        $blog->posts()->save($post);
        $post->save();
        $file->move($uploadPath, $filename);
        return Redirect::to('blogs/display/' . $id_blog);
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

        $post = Post::findOrFail($id);
        $blog_id = $post->id_blog;
        $post->delete();
        return Redirect::to('blogs/display/' . $blog_id);
	}


}
