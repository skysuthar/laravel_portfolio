@include('admin_pannel/admin_components/sidebar') 

<section class="home">
    <div class="text">
        <div class="container-fluid ml-5">
            <div class="row mt-4 ml-3">
                <div class="col-4">
        	       <p>| Add Blog</p>
                </div>
                <div class="col-7">
                    <a href="{{ route('showBlog') }}">
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
    	<div class="form-containt">
            @if(empty($blog)) 
            	<form action="{{ route('addBlog') }}" enctype="multipart/form-data" method="post" class="form-group">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-4 ml-5">     
                            <label>Blog Name:</label>
                		    <input type="text" placeholder="Enter Blog Name" name="blogName" class="form-control">
                            <span class="text-danger">
                                @if($errors->has('blogName'))
                                        @foreach($errors->get('blogName') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-2 col-4 mb-3">
                            <label for="">Image:</label>
                            <input type="file" name="blogImage" class="form-control">
                            <span class="text-danger">
                                    @if($errors->has('blogImage'))
                                            @foreach($errors->get('blogImage') as $error)
                                                {{$error}}                                          
                                            @endforeach
                                    @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 ml-5">
                            <label for="">Status:</label><br>
                            <input type="radio" class="" name="blogStatus" value="Publish" checked>
                            <label for="">Publish</label>
                            <input type="radio" class="" name="blogStatus" value="Draft">
                            <label for="">Draft</label>
                        </div>
                        <div class="col-4 offset-2">
                            <label for="">About Blog:</label>
                            <input type="text" name="blogAbout" placeholder="Enter sort description" class="form-control">
                            <span class="text-danger">
                                @if($errors->has('blogAbout'))
                                    @foreach($errors->get('blogAbout') as $error)
                                        {{$error}}                                          
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 ml-5 mr-5 mb-3">
                            <label>Blog Discription</label>
                            <textarea class="form-control" rows="15" name="blogDescription" placeholder="Enter Blog Descrption"></textarea>
                            <span class="text-danger">
                                @if($errors->has('blogDescription'))
                                        @foreach($errors->get('blogDescription') as $error)
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
                <form action="{{ route('updateBlog') }}" enctype="multipart/form-data" method="post" class="form-group">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-4 ml-5">     
                            <label>Blog Name:</label>
                            <input type="hidden" name="db_id" value="{{$blog->id}}">
                            <input type="text" placeholder="Enter Blog Name" name="blogName" class="form-control" value="{{$blog->blog_name}}">
                            <span class="text-danger">
                                @if($errors->has('blogName'))
                                        @foreach($errors->get('blogName') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-2 col-4 mb-3">
                            <label for="">Image:</label>
                            <input type="file" name="blogImage" class="form-control">
                            <h6>{{$blog->blog_image}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 ml-5">
                            @if($blog->blog_status == 'Publish')
                                <label for="">Status:</label><br>
                                <input type="radio" class="" name="blogStatus" value="Publish" checked>
                                <label for="">Publish</label>
                                <input type="radio" class="" name="blogStatus" value="Draft">
                                <label for="">Draft</label>
                            @else
                                <label for="">Status:</label><br>
                                <input type="radio" class="" name="blogStatus" value="Publish">
                                <label for="">Publish</label>
                                <input type="radio" class="" name="blogStatus" checked value="Draft">
                                <label for="">Draft</label>
                            @endif
                        </div>
                        <div class="col-4 offset-2">
                            <label for="">About Blog:</label>
                            <input type="text" name="blogAbout" placeholder="Enter sort description" class="form-control" value="{{$blog->blog_about}}">
                            <span class="text-danger">
                                @if($errors->has('blogAbout'))
                                    @foreach($errors->get('blogAbout') as $error)
                                        {{$error}}                                          
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 ml-5 mr-5 mb-3">
                            <label>Blog Discription</label>
                            <textarea class="form-control" rows="15" name="blogDescription" placeholder="Enter Blog Descrption">{{$blog->blog_description}}</textarea>
                            <span class="text-danger">
                                @if($errors->has('blogDescription'))
                                        @foreach($errors->get('blogDescription') as $error)
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
            @endif
    	</div>
    </div>
</section>


@include('admin_pannel/admin_components/footer') 
