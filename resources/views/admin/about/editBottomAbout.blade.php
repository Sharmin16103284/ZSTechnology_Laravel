@extends('admin.layout')
 
@section('content')


                    <div class="page-wrapper">
                        <div class="row">
                                 <div class="col-md-12">
                            {{-- second part --}}
                            <form action="{{route('updateBottomAbout')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                                @csrf
    
                                    <div class="card-body">
                                        <h4 class="card-title">Bott0m part</h4>
    
                                        <div class="form-group row">
                                            <label for="sheadline" class="col-sm-3 text-right control-label col-form-label">Second Headline</label>
                                            <div class="col-sm-9">
                                                <input name="sheadline" type="text" class="form-control" id="sheadline" value="{{$seccondedits->sheadline}}">
                                            </div>
                                        </div>
     
                                        <div class="form-group row">
                                            <label for="text" class="col-sm-3 text-right control-label col-form-label">Text</label>
                                            <div class="col-sm-9">
                                                <input name="text" type="text" class="form-control" id="text" value="{{$seccondedits->text}}">
                                            </div>
                                        </div>
    
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button name="submit" type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>



						</div>
                    </div>
                    </div>
                    </div>
                    

@endsection