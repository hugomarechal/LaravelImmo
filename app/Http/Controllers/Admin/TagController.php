<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagFormRequest;
use App\Models\Tag;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tags.index', [
            'tags' => Tag::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tag = new Tag();

        return view('admin.tags.form', [
            'tag' => $tag
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagFormRequest $request)
    {
        $tag = Tag::create($request->validated());
        return to_route('admin.tags.index')->with('success', 'Le tag a été créé');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.form', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagFormRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return to_route('admin.tags.index')->with('success', 'Le tag a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return to_route('admin.tags.index')->with('success', 'Le tag a été supprimé');

    }
}
