<?php

namespace App\Http\Controllers;

use App\Models\createproject;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CreateprojectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = createproject::all();
        return view('admin_pannel.project',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin_pannel.showProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $request->validate([
            'projectName' => 'required',
            'projectImage' => 'required',
            'projectLink' => 'required',
            'projectDescription' => 'required',
        ],
        [
            'projectName.required' => "This field is required*",
            'projectImage.required' => "This field is required*",
            'projectLink.required' => "This field is required*",
            'projectDescription.required' => "This field is required*",
        ]);
    
        $project = new createproject();
        $project->project_name = $request->projectName;
        $project->project_link = $request->projectLink;
        $project->project_description = $request->projectDescription;
        $project->project_status = $request->projectStatus;

        $path = public_path('root/projectImages/');
        $fileName = $request->file('projectImage')->getClientOriginalName();
        if(!File::isDirectory($path))
        {
            File::makeDirectory($path, 0777, true, true);
            $request->file('projectImage')->move($path, $fileName);
        }else{
            $request->file('projectImage')->move($path, $fileName);
        }
        $project->project_image = $fileName;

        if($project->save()){
            $request->session()->flash('done','Project added succesfully');
            return redirect()->back();
        }else{
            $request->session()->flash('erroe','Something went wrong');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\createproject  $createproject
     * @return \Illuminate\Http\Response
     */
    public function show(createproject $createproject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\createproject  $createproject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = createproject::where(['id'=>$id])->first();
        return view('admin_pannel.showProject',compact('project'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\createproject  $createproject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'projectName' => 'required',
            'projectLink' => 'required',
            'projectDescription' => 'required',
        ],
        [
            'projectName.required' => "This field is required*",
            'projectLink.required' => "This field is required*",
            'projectDescription.required' => "This field is required*",
        ]);
        $project = createproject::where(['id' => $request->db_id])->first();
        $project->project_name = $request->projectName;
        $project->project_link = $request->projectLink;
        $project->project_description = $request->projectDescription;
        $project->project_status = $request->projectStatus;
        if(!empty($request->file('projectImage'))){
            $path = public_path('root/projectImages/');
            $fileName = $request->file('projectImage')->getClientOriginalName();
            $request->file('projectImage')->move($path, $fileName);
            $project->project_image = $fileName;
        }
        if($project->save()){
            $request->session()->flash('done','Project Updated succesfully');
            return redirect()->back();
        }else{
            $request->session()->flash('erroe','Something went wrong');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\createproject  $createproject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project = createproject::where(['id' => $request->db_id])->delete();
        $request->session()->flash('done','Project Deleted Succesfully');
        return redirect()->back();
    }
}
