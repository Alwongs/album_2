<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::where('user_id', Auth::id())->orderBy('title', 'ASC')->get();

        return view('albums.index',['albums' => $albums]);
    }

    public function create()
    {
        return view('albums.create');
    }

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

    public function show(Album $album)
    {
        if ($album->user_id != Auth::id()) {
            return view('errors.404');
        }

        $albums = Album::where('user_id', $album->user_id)->orderBy('title', 'DESC')->get();  

        return view('albums.show', compact('album', 'albums'));
    }

    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        // TODO: to improve request validation. permit not unique title when updating, 
        $data = $request->all();  
        $album->update($data);

        return redirect()->route('albums.index');
    }

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
