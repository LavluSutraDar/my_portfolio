<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContuctStoreRequest;
use App\Models\Contuct;

class ContuctController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contucts = Contuct::all();
        return view('backend.contuct.contuct_index', compact('contucts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContuctStoreRequest $request)
    {
        $contuct_data = [
            'name'=>$request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        Contuct::create($contuct_data);

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
