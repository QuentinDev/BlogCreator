<?php

class BlogsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $blogs = Blog::paginate(6);
        return View::make('blogs.index',compact('blogs','posts'));
	}

    public function getBlogs($id_blog)
    {
        $blog = Blog::with('posts')->find($id_blog);
        return View::make('blogs.show',compact('blog'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('blogs.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $user = User::find(Auth::user()->id);

		$input = Input::all();
        $blog = new Blog();
        $blog->title = $input['title'];
        $blog->save();
        $user->blogs()->save($blog);
        return Redirect::to('/');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $blog = Blog::findOrFail($id);
        return View::make('blogs.show')->with('blog', $blog);
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
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return Redirect::to('/');
	}


}
