<?php

namespace App\Http\Controllers\backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rules\Unique;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts= About::all();
        return view('backend.about.about_index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.about_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutStoreRequest $request)
    {
        $data =[
            'name'=>$request->name,
            'profile' => $request->profile,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image_name = uniqid()  . '.' . $extension;

            $image = Image::make($file);
            //RESIZE IMAGE
            $image->resize(600, 360)->save(public_path('backend/about-image/') . $image_name);
            $data['image'] = $image_name;
        }
         
       About::create($data);

        $notifacation = [
            'message' => 'Created Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notifacation);
        
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
        $about = About::find($id);
        return view('backend.about.about_edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, string $id)
    {
        $update_data = [
            'name' => $request->edit_name,
            'profile' => $request->edit_profile,
            'email' => $request->edit_email,
            'phone' => $request->edit_phone,
            'description' => $request->edit_description,
        ];


        //BIG IMAGE
        if ($request->hasFile('image')) {

            if ($request->old_edit_image) {
                File::delete(public_path('backend/about-image/' . $request->old_edit_image));
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $update_image_name = uniqid() . '.' . $extension;

            $image = Image::make($file);

            //RESIZE IMAGE
            $image->resize(600, 360)->save(public_path('backend/about-image/') . $update_image_name);

            $update_data['image'] = $update_image_name;
        }

        $notifacation = [
            'message' => 'Update Successfully',
            'alert-type' => 'success',
        ];
        About::where('id', $id)->update($update_data);
        return redirect()->route('about.index')->with($notifacation);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::find($id);

        if($about->image){
            File::delete(public_path('backend/about-image/'. $about->image));
        }

        $about->delete();

        $notifacation = [
            'message' => 'Delete Successfully',
            'alert-type' => 'success',
        ];
        return Redirect()->back()->with($notifacation);
    }
}
