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

                     
                      <!-- <div class="panel-body">                   
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-9">
                            <input type="date" name="date" class="form-control" value="{{$welcome->date}}" max="{{date('Y-m-d')}}" data-required="true" placeholder="Date"  disabled>   
                          </div>
                        </div> -->
                         <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Message</label>
                          <div class="col-sm-9">
                            <!-- <input type="text" name="description" class="form-control"  data-required="true" placeholder="Description" required> -->  
                            <textarea id="summernote" name="message" class="form-control" disabled>{{$welcome->message}}</textarea> 
                          </div>
                        </div>
                        <div class="panel-body">                   
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Active</label>
                          <div class="col-sm-9">
                          {!!Form::select('active', array('1' => 'Y', '0' => 'N'),$welcome->active , ['disabled' => 'disabled'])!!}
                        </div>
                        </div> 
                    
                <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                          <label class="col-sm-3 control-label">Image</label>
                </div>
                    <div class="form-group">
                            <div class="col-sm-9">
                            <img src="{{asset('/images/welcome/'.$welcome->image)}}" alt="Park" style="width:30%">
                    </div>
                </div>
                <footer class="panel-footer text-right bg-light lter">
                       
                        
                        <a href="{{url('/admin/welcome_notes/')}}" class="btn btn-danger">Back</a>
                </footer>
    

                </div>

                     {{Form::close()}}
                      
                      
          

</section>
</section>
</section>



 @endsection


 @section('scripts')

 @endsection
