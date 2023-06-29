<?php

namespace App\Http\Controllers\backend;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\HomestoreRequest;
use App\Http\Requests\HomeUpdateRequest;
use Illuminate\Support\Facades\Redirect;

//use Intervention\Image\Facades\Image;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();
        return view('backend.home.home_view', compact('homes'));
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
            'message' => 'Created Successfully',
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
        $data = Home::find($id);
        return view('backend.home.home_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomeUpdateRequest $request, string $id)
    {
        $data = array(
            'name' => $request->edit_name,
            'title' => $request->edit_title,
            'sub_title' => $request->edit_subtitle,
        );
        

        if ($request->hasFile('image')) {

            if ($request->old_image) {
                File::delete(public_path('backend/home-image/' . $request->old_image));
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $update_image_name = time()  . '.' . $extension;

            $image = Image::make($file);

            //RESIZE IMAGE
            $image->resize(600, 360)->save(public_path('backend/home-image/') . $update_image_name);

            $data['image'] = $update_image_name;
        }

        //resume Update section
        if ($request->hasFile('resume')) {

            if ($request->edit_resume) {
                File::delete(public_path('backend/home-pdf/' . $request->edit_resume));
            }

            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();

            $resume = time()  . '.' . $extension;
            $file->move(public_path('backend/home-pdf/'), $resume);
            $data['resume'] = $resume;
        }

        $notifacation = [
            'message' => 'Update Successfully',
            'alert-type' => 'success',
        ];

        Home::where('id', $id)->update($data);
        
        return redirect()->back()->with($notifacation);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Home::find($id);
        if ($product->image) {
            File::delete(public_path('backend/home-image/' . $product->image));
        }
        $product->delete();
        
        $notifacation = [
            'message' => 'Delete Successfully',
            'alert-type' => 'success',
        ];
        return Redirect()->back()->with($notifacation);
    }
}
