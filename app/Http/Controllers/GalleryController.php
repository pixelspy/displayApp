<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function viewGalleryList() {
        
        $galleries = Gallery::all();
        return view('gallery.gallery')->with('galleries', $galleries);
    }

    public function saveGallery(Request $request) {
        $gallery = new Gallery;

        // save a new gallery

        $gallery->name = $request->input('gallery_name');
        $gallery->created_by = 1;
        $gallery->published = 1;
        $gallery->save();
        
        return redirect()->back();
    }

    public function viewGalleryPics($id) {
        $gallery = Gallery::find($id);

        return view(gallery.view)->with('gallery', $gallery);

    }

    public function doImageUpload(Request $request) {

    }
}


