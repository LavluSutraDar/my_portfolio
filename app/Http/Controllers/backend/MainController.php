<?php

namespace App\Http\Controllers\backend;

use App\Models\Home;
//use Nette\Utils\Image;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\HomestoreRequest;
use Illuminate\Support\Facades\Redirect;

//use Intervention\Image\Facades\Image;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.home_index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HomestoreRequest $request)
    {


        $data = array(
            'name' => $request->name,
            'title' => $request->title,
            'sub_title' => $request->subtitle,
            'image' => $request->image,
            'resume' => $request->resume,
        );

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $image_name = time()  . '.' . $extension;
        //     $file->move(public_path('backend/home-image/'), $image_name);
        //     $data['image'] = $image_name;
        // }
        // Home::create($data);

        //IMAGE UPLOAD SECTION
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image_name = time()  . '.' . $extension;
            $image = Image::make($file);
            //RESIZE IMAGE
            $image->resize(600, 360)->save(public_path('backend/home-image/') . $image_name);
            $data['image'] = $image_name;
        }

        //resume upload section
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $resume = time()  . '.' . $extension;
            $file->move(public_path('backend/home-pdf/'), $resume);
            $data['resume'] = $resume;
        }
        Home::create($data);
        $notifacation = [
            'message' => 'Category Created Successfully',
            'alert-type' => 'info',
        ];
         return back()->with($notifacation);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
