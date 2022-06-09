@extends('admin.adminmain')
 @section('title',"Welcome Note")
 @section('stylesheets')

 	  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

 @endsection

 @section('content')

      <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Welcome Notes</h1>
          <p class="mb-4"> 
          	<!-- <a target="_blank" href="https://datatables.net">official DataTables documentation</a>. -->
          </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Welcome Notes</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Active</th>
                              
                      <th>Added On</th>
                   
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Active</th>
                              
                      <th>Added On</th>
                     
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($welcome as $welcomes)
                  <tr>
                    <td><img src="{{asset('/images/welcome/'.$welcomes->image)}}" alt="Park" style="width:25%"></td>
                     <td>{{$welcomes->title}}</td>
                     <td>{{$welcomes->message}}</td>
                     <td>{{$welcomes->created_at}}</td>
                     <td>{{$welcomes->active}}</td>
                      <td><a href="{{route('welcome_notes.edit',$welcomes->note_id)}}"  class="btn"><i class="fas fa-pen"></i></a>
                          <a href="{{route('welcome_notes.show',$welcomes->note_id)}}" data-toggle="tooltip" title="banner Details" class="btn">
                          <i class="fas fa-eye"></i> </a> 
                          <button class="formConfirm" data-form="#frmDelete-{{$welcomes->note_id}}" data-title="Delete banner" data-message="Are you sure, you want to delete?" >
                          <i title="Delete" style="margin-right: 0;" class="fas fa-trash" aria-hidden="true"></i>

                          </button>


                                  {!! Form::open(array(
                                      'url' => route('admin.welcome_notes.delete', array($welcomes->note_id)),
                                      'method' => 'get',
                                      'style' => 'display:none',
                                      'id' => 'frmDelete-'.$welcomes->note_id
                                  ))
                              !!}
                              {!! Form::submit('Submit') !!}
                              {!! Form::close() !!}
                     </td>
                   
                    
                  </tr>
                  @endforeach 
                
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

                      
<div class="modal fade" id="formConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="frm_title">Delete</h4>
      </div>
      <div class="modal-body" id="frm_body">Are you sure, you want to delete ?</div>
      <div class="modal-footer">
        <button style='margin-left:10px;' type="button" class="btn btn-danger col-sm-2 pull-right" id="frm_submit">Confirm</button>
        <button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">Cancel</button>
      </div>
    </div>
  </div>
</div>              
                     



 @endsection

 @section('scripts')

   <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function(){

     
  $('.formConfirm').on('click', function(e) {
    //alert();
        e.preventDefault();
        var el = $(this);
        //alert(el);
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        
        $('#formConfirm')
        .find('#frm_body').html(msg)
        .end().find('#frm_title').html(title)
        .end().modal('show');
        
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
  });
  $('#formConfirm').on('click', '#frm_submit', function(e) {
        var note_id = $(this).attr('data-form');
        //alert(id);
        $(note_id).submit();
  });
});

</script>
 @endsection
 