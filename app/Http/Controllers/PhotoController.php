<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('photos.index',['photos' => $photos]);
    }

    public function create(Request $request)
    {
        $album = Album::find($request->input('album_id'));
        return view('photos.create', ['album' => $album]);
    }

    public function store(Request $request)
    {
        // dd($request);
        if (!$request->title) {
            abort(404, 'Ошибка сохранения');
        }

        if ($request->hasFile('image')) {
            $data = $request->all();

            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image'));
            $extention = $request->file('image')->getClientOriginalExtension();
            $newImageName = now()->format('Ymd_His') . '-' . mt_rand(1, 1000000) . '.' . $extention;
    
            if (!File::exists(Storage::path('images/photos'))) {
                Storage::makeDirectory('images/photos');
            }     
            if (!File::exists(Storage::path('images/previews'))) {
                Storage::makeDirectory('images/previews');
            }            
            
            $image->scale(height: 1080);
            $image->save(Storage::path('images/photos/') . $newImageName);
            $image->scale(height: 200);
            $image->save(Storage::path('images/previews/') . $newImageName);

            $data['image'] = $newImageName;
            $data['user_id'] = Auth::id();

            Photo::create($data);
        }

        return redirect()->route('albums.show', $data['album_id']);
    }

    public function show(Photo $photo)
    {
        if (Auth::id() !== $photo->user_id) {
            abort(403, 'Доступ запрещён');
        }
        
        return view('photos.show', compact('photo')); 
    }

    public function showPreview(Photo $photo)
    {
        if (Auth::id() != $photo->user_id) {
            abort(403);
        }
        
        $path = storage_path('app/private/images/previews/' . $photo->image);
        
        return response()->file($path);
    }    

    public function showOriginal(Photo $photo)
    {
        if (Auth::id() !== $photo->user_id) {
            abort(403);
        }
        
        $path = storage_path('app/private/images/photos/' . $photo->image);
        
        if (!file_exists($path)) {
            abort(404, 'Файл не найден');
        }
        
        return response()->file($path);
    }    

    public function edit(Photo $photo)
    {
        //
    }

    public function update(Request $request, Photo $photo)
    {
        //
    }

    public function destroy(Photo $photo)
    {
        $photoPath = 'images/photos/' . $photo->image;
        $previewPath = 'images/previews/' . $photo->image;

        if (File::exists(Storage::path($photoPath))) {
            Storage::delete($photoPath);
        }
        if (File::exists(Storage::path($previewPath))) {
            Storage::delete($previewPath);
        }

        $photo->delete();
        return redirect()->route('albums.show', $photo->album_id);
    }

  
}
