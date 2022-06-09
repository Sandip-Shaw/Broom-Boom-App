@extends('admin.adminmain')
 @section('title',"Welcome Notes")
 @section('stylesheets')

 @endsection

 @section('content')
<section id="content">
<section class="vbox">
<section class="scrollable padder">

 			<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="{{url('/admin/welcome_notes/')}}"><i class="fa fa-home"></i>Home</a></li>>
                <li><a href="">Welcome Notes</a></li>
                <!-- <li><a href=""></a></li> -->
            </ul>

                       <header class="panel-heading">
                        <span class="h4">Welcome Notes</span>
                      </header>

                      {{Form::model($welcome,['route' => ['welcome_notes.update',$welcome->note_id],'method'=>'PUT','files' => true, 'class'=>'form-horizontal course-form','data-parsley-validate'])}}
                      <!-- <div class="panel-body">                   
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="date" class="form-control"value="{{$welcome->date}}" max="{{date('Y-m-d')}}" data-required="true" placeholder="Date" required>   
                          </div>
                        </div> -->

                        <div class="panel-body">                   
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                               <input type="text" name="title" class="form-control" value="{{$welcome->title}}" data-required="true" placeholder="Title" required>  
   
                            </div>
                          </div>
                      <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Message</label>
                            <div class="col-sm-9">
                            <!-- <input type="text" name="description" class="form-control"  data-required="true" placeholder="Description" required> -->  
                            <textarea id="summernote" name="message" class="form-control">{{$welcome->message}}</textarea> 
                            </div>
                        </div>

                        <div class="panel-body">                   
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Active</label>
                                <div class="col-sm-9">
                              {!!Form::select('active', array('1' => 'Y', '0' => 'N'),$welcome->active)!!}
                              </div>
                            </div>
                        </div> 
                    
                <!-- <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                          <label class="col-sm-3 control-label">Image</label>
                </div>
                    <div class="form-group">
                            <div class="col-sm-9">
                            <img src="{{asset('/images/welcome/'.$welcome->image)}}" alt="Park" style="width:30%">
                    </div>
                </div>
                <footer class="panel-footer text-right bg-light lter">
                       
                        <a href="{{route('welcome_notes.edit',$welcome->note_id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('/admin/welcome_notes/')}}" class="btn btn-danger">Back</a>
                </footer> -->
    
                <div class="form-group">
                          <label class="col-sm-3 control-label">Images(Min Dimension:800x600)</label>
                          <div class="col-sm-9">

                              <div class="input_fields_wrap">
                                  
                                  
                                    <div style="margin-bottom:10px;">
                                         <input type="file" name="image_name" class="GalleryImage" id="img0"/> &nbsp 
                                    </div>
                                    @if(isset($welcome))
                                    <img src="{{asset('/images/welcome/'.$welcome->image)}}" width="500">
                                    @endif

                             </div>      
                       </div>
                     </div>



                  <footer class="panel-footer text-right bg-light lter">
                       
                          <input type="submit" class="btn btn-success btn-s-xs" value="Submit"/>

                        <a href="{{url('/admin/welcome_notes')}}" class="btn btn-danger">Cancel</a>
                 </footer>


                     
                </div>

                     {{Form::close()}}
                      
                      
          

</section>
</section>
</section>



 @endsection


 @section('scripts')

 @endsection
