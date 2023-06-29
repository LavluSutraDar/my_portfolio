<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioStoreRequest;
use App\Http\Requests\portfolioUpdateRequest;
use App\Models\Portfolio;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;




class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolis = Portfolio::all();
        return view('backend.portfolio.portfolio_index', compact('portfolis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolio.portfolio_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioStoreRequest $request)
    {
        $data = [
            'title'=>$request->title,
            'sub_title' => $request->sub_title,
            'category' => $request->category,
            'client' => $request->client,
            'description' => $request->description,
        ];

        if ($request->hasFile('small_image')) {

            $file = $request->file('small_image');
            $extension = $file->getClientOriginalExtension();
            $small_image_name = time()  . '.' . $extension;

            $small_image = Image::make($file);

            //RESIZE IMAGE
            $small_image->resize(600, 360)->save(public_path('backend/portfolio-image/') . $small_image_name);

            $data['small_image'] = $small_image_name;
        }

        //BIG IMAGE
        if ($request->hasFile('big_image')) {

            $file = $request->file('big_image');
            $extension = $file->getClientOriginalExtension();
            $big_image_name = time().uniqid() . '.' . $extension;

            $big_image = Image::make($file);

            //RESIZE IMAGE
            $big_image->resize(600, 360)->save(public_path('backend/portfolio-image/') . $big_image_name);

            $data['big_image'] = $big_image_name;
        }

        Portfolio::create($data);
        $notifacation = [
            'message' => ' Created Successfully',
            'alert-type' => 'success',
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
        $portfolio = Portfolio::find($id);
        return view('backend.portfolio.portfolio_edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(portfolioUpdateRequest $request, string $id)
    {
        $data = [
            'title' => $request->edit_title,
            'sub_title' => $request->edit_sub_title,
            'category' => $request->edit_category,
            'client' => $request->edit_client,
            'description' => $request->edit_description,
        ];

        //SMALL IMAGE 
         if($request->hasFile('small_image')) {

            if ($request->old_edit_small_image) {
                File::delete(public_path('backend/portfolio-image/' . $request->old_edit_small_image));
            }

            $file = $request->file('small_image');
            $extension = $file->getClientOriginalExtension();
            $update_small_image_name = time()  . '.' . $extension;

            $small_image = Image::make($file);

            //RESIZE IMAGE
            $small_image->resize(600, 360)->save(public_path('backend/portfolio-image/') . $update_small_image_name);

            $data['small_image'] = $update_small_image_name;
        }

        //BIG IMAGE
        if($request->hasFile('big_image')) {

            if ($request->old_edit_big_image) {
                File::delete(public_path('backend/portfolio-image/' . $request->old_edit_big_image));
            }

            $file = $request->file('big_image');
            $extension = $file->getClientOriginalExtension();
            $update_small_image_name = time(). uniqid()  . '.' . $extension;

            $big_image = Image::make($file);

            //RESIZE IMAGE
            $big_image->resize(600, 360)->save(public_path('backend/portfolio-image/') . $update_small_image_name);

            $data['big_image'] = $update_small_image_name;
        }

            $notifacation = [
                'message' => 'Update Successfully',
                'alert-type' => 'success',
            ];
            Portfolio::where('id', $id)->update($data);
            return redirect()->route('portfolio.index')->with($notifacation);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::find($id);

        if($portfolio->small_image){
            File::delete(public_path('backend/portfolio-image/'. $portfolio->small_image));
        }

        if($portfolio->big_image){
            File::delete(public_path('backend/portfolio-image/'. $portfolio->big_image));
        }

        $portfolio->delete();

        $notifacation = [
            'message' => 'Delete Successfully',
            'alert-type' => 'success',
        ];
        return Redirect()->back()->with($notifacation);


    }
}
