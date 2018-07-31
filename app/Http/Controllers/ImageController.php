<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public function destroy($id)
    {
        //
        $image = \App\Image::find($id);
        $image->delete();
        session()->flash(
            'message', 'Picture has been  deleted.'
        );
        return back();
    }

}
