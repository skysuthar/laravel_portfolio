@include('admin_pannel/admin_components/sidebar') 
<section class="home">
    <div class="text">
        <div class="row">
            <div class="col mt-5">
                <a href="{{ route('createService.create') }}">
                    <button class="btn btn-secondary p-2 pl-4 pr-4 float-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Add Service
                    </button>
                </a>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table dt-table-hover table-striped" id="zero-config" style="width: 100%;">
                <thead>
                  <tr>
                    <th> SR.No </th>
                    <th> Name </th>
                    <th> Image </th>
                    <th> Description </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                    
                 @foreach($service as $service)
                  <tr>
                    <th> Width </th>
                    <td>{{$service->service_name}}</td>
                    <td><img src='{{asset("root/serviceImages/$service->service_images")}}' height="60px" width="60px"></td>
                    <td>@php 
                            echo strlen($service->service_description) >= 170 ? substr($service->service_description, 0,170):$service->service_description;
                        @endphp
                    </td>
                    <td>{{$service->service_status}}</td>
                    <td>
                        <div class="leave-action text-start d-flex">
                            <a href="{{ route('editService',$service->id) }}" class="eye">
                                <i class="far fa-edit  text-primary" data-placement="top" title="" data-original-title="view" aria-label="view" style="width: 25px; height: 25px; border-radius: 50%; padding-top:5px; padding-left: 5px; margin-right: 10px; background-color: #fff; box-shadow: 0px 4px 10px #888; font-size: 16px;"></i>
                            </a>
                            <a href="javascript:void(0);" data-target="#accept" data-toggle="modal" class="approve ml-1 delete" data-id="{{$service->id}}">
                                <i class="far fa-trash-alt text-danger" style="width: 25px; height: 25px; border-radius: 50%; padding-top:5px; padding-left: 4.5px;  margin-right: 10px; background-color: #fff; box-shadow: 0px 4px 10px #888; font-size: 16px;"></i>
                            </a>
                        </div>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('deleteService') }}" method="post">
        {{csrf_field()}}
          <div class="modal-body">
            <input type="hidden" name="db_id" id="db_id">
            Are You Want To Delete This Service?
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary pl-5 pr-5" type="submit">Sure</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </form>
    </div>
  </div>
</div>
@include('admin_pannel/admin_components/footer') 
<script>
    $(".delete").on('click',function(){
        var data_id = $(this).data('id');
        $("#db_id").val(data_id);
    })
</script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>