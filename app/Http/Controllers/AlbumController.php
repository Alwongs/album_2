<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::where('user_id', Auth::id())->orderBy('title', 'ASC')->get();

        return view('albums.index',['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = $request->all();
        $album['user_id'] = Auth::id();

        try {
            Album::create($album);
        } catch(\Illuminate\Database\QueryException $ex){
            return back()->withErrors(['error' => $ex->getMessage()]);
        }   
        
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        if ($album->user_id != Auth::id()) {
            return view('errors.404');
        }

        $albums = Album::where('user_id', $album->user_id)->orderBy('title', 'ASC')->get();       

        return view('albums.show', compact('album', 'albums'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        // TODO: to improve request validation. permit not unique title when updating, 
        $data = $request->all();  
        $album->update($data);

        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        foreach($album->photos as $photo) {

            $photoPath = 'images/photos/' . $photo->image;
            $previewPath = 'images/previews/' . $photo->image;

            if (File::exists(Storage::path($photoPath))) {
                Storage::delete($photoPath);
            }
            if (File::exists(Storage::path($previewPath))) {
                Storage::delete($previewPath);
            }

        }



        $album->delete();
        return redirect()->back();
    }
}
