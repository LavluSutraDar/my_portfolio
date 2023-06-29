<?php

namespace App\Http\Controllers\backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesStoreRequest;
use App\Http\Requests\ServicesUpdateRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.services.service_index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.service_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesStoreRequest $request)
    {
        $data = [
            'icon'=>$request->icon,
            'title'=>$request->title,
            'description'=>$request->description,

        ];
        Service::create($data);

        $notifacation = [
            'message' => 'Data Created Successfully',
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
        $data = Service::find($id);
        return view('backend.services.service_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesUpdateRequest $request, string $id)
    {
        $data = [
            'icon' => $request->edit_icon,
            'title' => $request->edit_title,
            'description' => $request->edit_description,

        ];
        $notifacation = [
            'message' => 'Update Successfully',
            'alert-type' => 'success',
        ];

        Service::where('id', $id)->update($data);

        return redirect()->route('services.index')->with($notifacation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        $notifacation = [
            'message' => 'Delete Successfully',
            'alert-type' => 'success',
        ];
        return Redirect()->back()->with($notifacation);
    }
}
