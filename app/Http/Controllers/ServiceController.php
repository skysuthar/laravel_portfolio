<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = service::all();
        return view('admin_pannel.showService',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_pannel.createService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('serviceImage')->getClientOriginalName());
        $request->validate([
            'serviceName' => 'required',
            'serviceImage' => 'required',
            'serviceAbout' => 'required',
            'serviceDescription' => 'required',
        ],
        [
            'serviceName.required' => "This field is required*",
            'serviceImage.required' => "This field is required*",
            'serviceAbout.required' => "This field is required*",
            'serviceDescription.required' => "This field is required*",
        ]);

        $model = new service();
        $model->service_name = $request->serviceName;
        $model->service_description = $request->serviceDescription;
        $model->service_about = $request->serviceAbout;
        $model->service_status = $request->serviceStatus;

        $path = public_path('root/serviceImages/');
        $fileName = $request->file('serviceImage')->getClientOriginalName();
        if(!File::isDirectory($path))
        {
            File::makeDirectory($path, 0777, true, true);
            $request->file('serviceImage')->move($path, $fileName);
        }else{
            $request->file('serviceImage')->move($path, $fileName);
        }
        // dd($fileName);
        $model->service_images = $fileName;

        if($model->save()){
            $request->session()->flash('done','Project added succesfully');
            return redirect('showService');
        }else{
            $request->session()->flash('erroe','Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\serivce  $serivce
     * @return \Illuminate\Http\Response
     */
    public function show(serivce $serivce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serivce  $serivce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = service::where(['id' => $id])->first();
        return view('admin_pannel.createService',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serivce  $serivce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->post());
        $request->validate([
            'serviceName' => 'required',
            'serviceAbout' => 'required',
            'serviceDescription' => 'required',
        ],
        [
            'serviceName.required' => "This field is required*",
            'serviceAbout.required' => "This field is required*",
            'serviceDescription.required' => "This field is required*",
        ]);

        $model = service::where(['id' => $request->db_id])->first();
        $model->service_name = $request->serviceName;
        $model->service_description = $request->serviceDescription;
        $model->service_about = $request->serviceAbout;
        $model->service_status = $request->serviceStatus;

        if(!empty($request->file('serviceImage'))){
            $path = public_path('root/serviceImages/');
            $fileName = $request->file('serviceImage')->getClientOriginalName();
            $request->file('serviceImage')->move($path, $fileName);
            $model->service_images = $fileName;
        }

        if($model->save()){
            $request->session()->flash('done','Service Updated succesfully');
            return redirect('showService');
        }else{
            $request->session()->flash('erroe','Something went wrong');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serivce  $serivce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        service::where(['id' => $request->db_id])->delete();
        $request->session()->flash('done','Service Deleted succesfully');
        return redirect()->back();

    }
}
