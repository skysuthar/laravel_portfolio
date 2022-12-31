@include('admin_pannel/admin_components/sidebar') 

<section class="home">
    <div class="text">
        <div class="container-fluid ml-5">
            <div class="row mt-4 ml-3">
                <div class="col-xl-4 col-sm-12">
                   <h5>| Add Service</h5>
                </div>
                <div class="col-xl-7 col-sm-12">
                    <a href="{{ route('showBlog') }}">
                        <button class="btn btn-danger float-right mr-4 mb-3 float-xl-right">
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
            @if(empty($service)) 
                <form action="{{ route('addService.store') }}" enctype="multipart/form-data" method="post" class="form-group">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-4 ml-5">     
                            <label>Service Name:</label>
                            <input type="text" placeholder="Enter Service Name" name="serviceName" class="form-control">
                            <span class="text-danger">
                                @if($errors->has('serviceName'))
                                        @foreach($errors->get('serviceName') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-2 col-4 mb-3">
                            <label for="">Image:</label>
                            <input type="file" name="serviceImage" class="form-control">
                            <span class="text-danger">
                                    @if($errors->has('serviceImage'))
                                            @foreach($errors->get('serviceImage') as $error)
                                                {{$error}}                                          
                                            @endforeach
                                    @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 ml-5">
                            <label for="">Status:</label><br>
                            <input type="radio" class="" name="serviceStatus" value="Active" checked>
                            <label for="">Active</label>
                            <input type="radio" class="" name="serviceStatus" value="Deactive">
                            <label for="">Deactive</label>
                        </div>
                        <div class="col-4 offset-2">
                            <label for="">About Service:</label>
                            <input type="text" name="serviceAbout" placeholder="Enter sort description" class="form-control">
                            <span class="text-danger">
                                @if($errors->has('serviceAbout'))
                                    @foreach($errors->get('serviceAbout') as $error)
                                        {{$error}}                                          
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 ml-5 mr-5 mb-3">
                            <label>Serivce Discription</label>
                            <textarea class="form-control" rows="5" name="serviceDescription" placeholder="Enter Service Descrption"></textarea>   
                            <span class="text-danger">
                                @if($errors->has('serviceDescription'))
                                        @foreach($errors->get('serviceDescription') as $error)
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
                <form action="{{ route('updateService') }}" enctype="multipart/form-data" method="post" class="form-group">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-xl-4 col-sm-10 col-11 ml-xl-5 ml-sm-3 ml-3">     
                            <label>Service Name:</label>
                            <input type="hidden" name="db_id" value="{{$service->id}}">
                            <input type="text" placeholder="Enter Service Name" name="serviceName" class="form-control" value="{{ $service->service_name }}">
                            <span class="text-danger">
                                @if($errors->has('serviceName'))
                                        @foreach($errors->get('serviceName') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="offset-0 offset-xl-2 col-xl-2 col-xl-4 col-sm-10 col-11 ml-3 ml-sm-3 mb-3">
                            <label for="">Image:</label>
                            <input type="file" name="serviceImage" class="form-control">
                            <h6>{{$service->service_images}}</h6>
                            <span class="text-danger">
                                    @if($errors->has('serviceImage'))
                                            @foreach($errors->get('serviceImage') as $error)
                                                {{$error}}                                          
                                            @endforeach
                                    @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 ml-3 ml-sm-3 ml-xl-5">

                            @if($service->service_status == 'Active')

                                <label for="">Status:</label><br>
                                <input type="radio" class="" name="serviceStatus" value="Active" checked>
                                <label for="">Active</label>
                                <br class="d-xl-none d-lg-none d-md-none d-block d-sm-block">
                                <input type="radio" class="" name="serviceStatus" value="Deactive">
                                <label for="">Deactive</label>
                            @else

                                <label for="">Status:</label><br>
                                <input type="radio" class="" name="serviceStatus" value="Active">
                                <label for="">Active</label>
                                <br class="d-xl-none d-lg-none d-md-none d-block d-sm-block">
                                <input type="radio" class="" name="serviceStatus" value="Deactive" checked>
                                <label for="">Deactive</label>

                            @endif
                        </div>
                        <div class="col-xl-4 col-11 col-sm-10 offset-xl-2 col-sm-12 offset-0 ml-3 ml-sm-3">
                            <label for="">About Service:</label>
                            <input type="text" name="serviceAbout" placeholder="Enter sort description" class="form-control" value="{{ $service->service_about }}">
                            <span class="text-danger">
                                @if($errors->has('serviceAbout'))
                                    @foreach($errors->get('serviceAbout') as $error)
                                        {{$error}}                                          
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 ml-5 mr-5 mb-3">
                            <label>Serivce Discription</label>
                            <textarea class="form-control" rows="8" name="serviceDescription" placeholder="Enter Service Descrption">{{ $service->service_description }}</textarea>
                            <span class="text-danger">
                                @if($errors->has('serviceDescription'))
                                        @foreach($errors->get('serviceDescription') as $error)
                                            {{$error}}                                          
                                        @endforeach
                                @endif
                            </span>
                        </div>  
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3 ml-5 ml-xl-0 ml-lg-0 ml-md-0">
                            <button class="btn btn-success float-xl-right float-lg-right float-md-right pl-5 pr-5">Submit</button>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3  ml-5 ml-xl-0 ml-lg-0 ml-md-0">
                            <button class="btn btn-primary pl-5 pr-5" type="reset">Clear</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
</section>


@include('admin_pannel/admin_components/footer') 
