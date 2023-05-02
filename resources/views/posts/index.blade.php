@extends ('layouts.app')

@section('content')
    <div class="form-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col form-1 section-description wow fadeIn">
                    <h2>All Baptismal Candidate</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>List of Baptismal Candidates Who Have Completed The Process.</p>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-8 offset-md-1 form-1-box wow fadeInUp">
                        <!-- User's Credentials  -->
                            @if(count($posts) > 0)
                                @foreach($posts as $post)
                                    <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2"></legend>
                                        <div class="well">
                                            <h3><a href="/posts/{{$post->id}}">{{$post -> baptName }}, {{$post -> famName }}</a> </h3>
                                            <p> Baptized on: {{$post -> baptDate }} <b>at:</b> {{$post -> placeBapt }}</p>  
                                        </div>
                                        <div class="row">
                                        <div class="col-md-2 offset-md-0 form-1-box wow fadeInUp">
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
                                        </div>
                                        <div class="col-md-3 offset-md-2 form-1-box wow fadeInUp">
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </div>
                                        {{-- <div class="col-md-2 offset-md-0 form-1-box wow fadeInUp">
                                            <a href="/export_pdf" class="btn btn-dark">Print to PDF</a>
                                        </div> --}}
                                    </fieldset>
                                @endforeach  
                    </div>                              
                </div>


                <div class="row">
                    <div class="col-md-8 offset-md-1 form-1-box wow fadeInUp">   
                        <fieldset class="form-group border p-3">
                            <legend class="w-auto px-2"></legend>
                            @else
                                    <div class="col-md-8 offset-md-4 form-1-box wow fadeInUp">
                                        Oops! No Records Found...
                                    </div>
                            @endif
                                {{$posts->links()}}
                            
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 