@include('admin_pannel/admin_components/sidebar') 

<section class="home">
    <div class="text">
        <div class="container-fluid ml-5">
            <div class="row mt-4 ml-3">
                <div class="col-4">
        	       <p>| Add Project</p>
                </div>
                <div class="col-7">
                    <a href="{{ route('project') }}">
                        <button class="btn btn-danger p-2 pl-5 pr-5 float-right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline>
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            Back
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @if(session('done') || session('error')) 
            @if(session('done'))   
            <div class="alert_popup ml-5" style="width: 1200px!important;">            
                <div class="alert col-11 alert-warning alert-dismissible fade show mb-4 ml-5" role="alert">
                    <p>{{session('done')}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @else
            <div class="alert_popup ml-5" style="width: 1200px!important;">            
                <div class="alert col-11 alert-danger alert-dismissible fade show mb-4 ml-5" role="alert">
                    <p>{{session('error')}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif
        @endif

    	<div class="form-containt">
            @if(empty($project))  
            	<form action="{{ route('addProject') }}" enctype="multipart/form-data" method="post" class="form-group">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-4 ml-5">     
                            <label>Project Name:</label>
                		    <input type="text" placeholder="Enter Project Name" name="projectName" class="form-control">
                            <span class="text-danger">
                                @if($errors->has('projectName'))
                                        @foreach($errors->get('projectName') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-2 col-4 mb-3">
                            <label for="">Project Image:</label>
                            <input type="file" name="projectImage" class="form-control">
                            <span class="text-danger">
                                    @if($errors->has('projectImage'))
                                            @foreach($errors->get('projectImage') as $error)
                                                {{$error}}                                          
                                            @endforeach
                                    @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 ml-5">
                            <label for="">Enter Project Link:</label>
                            <input type="text" name="projectLink" placeholder="Enter Project Link" class="form-control">
                            <span class="text-danger">
                                @if($errors->has('projectLink'))
                                        @foreach($errors->get('projectLink') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-2 col-4">
                            <label for="">Status:</label><br>
                            <input type="radio" class="" name="projectStatus" value="Publish" checked>
                            <label for="">Publish</label>
                            <input type="radio" class="" name="projectStatus" value="Draft">
                            <label for="">Draft</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-7 mb-3">
                            <label>Enter Project Discription</label>
                            <textarea class="form-control" rows="4" name="projectDescription" placeholder="Enter Project Descrption"></textarea>
                            <span class="text-danger">
                                @if($errors->has('projectDescription'))
                                        @foreach($errors->get('projectDescription') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>  
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-6 ml-5 mb-3">
                            <button class="btn btn-success ml-5 pl-5 pr-5">Submit</button>
                            <button class="btn btn-primary ml-5 pl-5 pr-5" type="reset">Clear</button>
                        </div>
                    </div>
                </form>
            @else
                <form action="{{ route('updateProject') }}" enctype="multipart/form-data" method="post" class="form-group">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-4 ml-5">     
                            <label>Project Name:</label>
                            <input type="hidden" name="db_id" value="{{$project->id}}">
                            <input type="text" placeholder="Enter Project Name" name="projectName" class="form-control" value="{{$project->project_name}}">
                            <span class="text-danger">
                                @if($errors->has('projectName'))
                                        @foreach($errors->get('projectName') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-2 col-4 mb-3">
                            <label for="">Project Image:</label>
                            <input type="file" class="form-control" name="projectImage">
                            <h6>{{$project->project_image}}</h6>
                            <span class="text-danger">
                                    @if($errors->has('projectImage'))
                                            @foreach($errors->get('projectImage') as $error)
                                                {{$error}}                                          
                                            @endforeach
                                    @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 ml-5">
                            <label for="">Enter Project Link:</label>
                            <input type="text" name="projectLink" placeholder="Enter Project Link" class="form-control" value="{{$project->project_link}}">
                            <span class="text-danger">
                                @if($errors->has('projectLink'))
                                        @foreach($errors->get('projectLink') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-2 col-4">
                            @if($project->project_status == 'Publish')
                                <label for="">Status:</label><br>
                                <input type="radio" class="" name="projectStatus" value="Publish" checked>
                                <label for="">Publish</label>
                                <input type="radio" class="" name="projectStatus" value="Draft">
                                <label for="">Draft</label>
                            @else
                                <label for="">Status:</label><br>
                                <input type="radio" class="" name="projectStatus" value="Publish">
                                <label for="">Publish</label>
                                <input type="radio" class="" name="projectStatus" checked value="Draft">
                                <label for="">Draft</label>
                            @endif
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-7 mb-3">
                            <label>Enter Project Discription</label>
                            <textarea class="form-control" rows="4" name="projectDescription" placeholder="Enter Project Descrption">{{$project->project_description}}</textarea>
                            <span class="text-danger">
                                @if($errors->has('projectDescription'))
                                        @foreach($errors->get('projectDescription') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>  
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-6 ml-5 mb-3">
                            <button class="btn btn-success ml-5 pl-5 pr-5">Save</button>
                            <button class="btn btn-primary ml-5 pl-5 pr-5" type="reset">Close</button>
                        </div>
                    </div>
                </form>
                @endif
    	</div>
    </div>
</section>


@include('admin_pannel/admin_components/footer') 
