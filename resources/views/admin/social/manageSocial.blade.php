 <!-- admin/manageAbout.blade.php -->

 @extends('admin.layout')

 @section('content')
 
      <div class="page-wrapper">
            <div class="card">
                             
                         <div class="card">
                             <div class="card-body">
                                 <h5 class="card-title">Manage Testimonial</h5>
                                 <div class="table-responsive">
                                     <table id="zero_config" class="table table-striped table-bordered">
                                         <thead>
                                             <tr>
                                                 <th>Id</th>
                                                 <th>Facebook</th>
                                                <th>Twitter</th>
                                                <th>Email</th>
                                                <th>Linkedin</th>
                                                 <th>Action</th>
                                             </tr>
                                         </thead> 
                                         <tbody>
                                  
                                             @foreach($sociallists as $sociallist)
                                             <tr>
                                                 <td scope="row">{{$sociallist->id}}</td>
                                                 <td>{{$sociallist->fb}}</td>
                                                <td>{{$sociallist->twitter}}</td>
                                                <td>{{$sociallist->email}}</td>
                                                <td>{{$sociallist->linkedin}}</td>
                                                 <td>
                                                     <a href="{{url('/deleteSocial/')}}/{{$sociallist->id}}">
                                                         <span><i class="fa fa-trash"></i></span>
                                                     </a>
 
                                                 </td>
                                             </tr> 
                                             @endforeach
                             
                                         </tbody>
                                         <tfoot>
                                             <tr>
                                                 <th>Id</th>
                                                 <th>Facebook</th>
                                                <th>Twitter</th>
                                                <th>Email</th>
                                                <th>Linkedin</th>
                                                 <th>Action</th>
                                             </tr>
                                         </tfoot>
                                     </table>
                                 </div>
 
                             </div>
                         </div>
 
      </div>
 
 
 @endsection