<?php

namespace App\Http\Controllers;

use App\Models\bookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return view('bookrent.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bookModel  $bookModel
     * @return \Illuminate\Http\Response
     */
    public function show(bookModel $bookModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bookModel  $bookModel
     * @return \Illuminate\Http\Response
     */
    public function edit(bookModel $bookModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bookModel  $bookModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bookModel $bookModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bookModel  $bookModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(bookModel $bookModel)
    {
        //
    }
}
