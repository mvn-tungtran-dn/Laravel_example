<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$blogs = Blog::all();
		return view('index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);

		Blog::create($request->all());

		return redirect()->route('blogs.index')
			->with('success', 'Blog created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function show(Blog $blog) {
		return view('show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Blog $blog) {
		return view('edit', compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Blog $blog) {
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);

		$blog->update($request->all());

		return redirect()->route('blogs.index')
			->with('success', 'Blog updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Blog $blog) {
		$blog->delete();

		return redirect()->route('blogs.index')
			->with('success', 'Blogs deleted successfully');
	}
}
