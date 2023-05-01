@extends ('layouts.app')

@section('content')
    <div class="form-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col form-1 section-description wow fadeIn">
                    <h2>{{$post -> baptName }}, {{$post -> famName }}</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>These are the information regarding {{$post -> baptName }}'s Baptism.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-0 form-1-box wow fadeInUp">
                        <!-- User's Credentials  -->
                        <fieldset class="form-group border p-3">
                            <legend class="w-auto px-2">BAPTISM</legend>
                            <div class="form-group">
                                {{Form::label('title', 'No. LB:')}}
                                <b>{{Form::label('title', "PAR/2023/000$post->id")}}</b>
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Date of Bapt.:')}}
                                <b>{{Form::label('title', $post->baptDate)}}</b>
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Place of Bapt.:')}}
                                <b>{{Form::label('title', $post->placeBapt)}}</b>
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Bapt. Name:')}}
                                <b>{{Form::label('title', $post->baptName)}}</b>
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Family Name:')}}
                                <b>{{Form::label('title', $post->famName)}}</b>
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Date of Birth:')}}
                                <b>{{Form::label('title', $post->dateBirth)}}</b>
                            </div>

                            <div class="form-group">
                                {{Form::label('title', 'Place of Birth:')}}
                                <b>{{Form::label('title', $post->placeBirth)}}</b>
                            </div>

                            <div class="form-group">
                                {{Form::label('title', 'LGA/Native Of:')}}
                                <b>{{Form::label('title', $post->LGA)}}</b>
                            </div>

                            <div class="form-group">
                                {{Form::label('title', "Ministeration By:")}}
                                <b>{{Form::label('title', $post->minister)}}</b>
                            </div>

                            <div class="form-group">
                                {{Form::label('title', "Signed By:")}}
                                <b>{{Form::label('title', $post->signedBy)}}</b>
                            </div>
                            </fieldset>


                            <!-- Submit Button  -->
                                <div class="row">
                                    <div class="col-md-3 offset-md-0 form-1-box wow fadeInUp">
                                        <a href="/posts" class="btn btn-primary">All Candidates</a>
                                    </div>
                                    <div class="col-md-1 offset-md-0 form-1-box wow fadeInUp">
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
                                    </div>
                                    <div class="col-md-2 offset-md-1 form-1-box wow fadeInUp">
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </div>
                                    <div class="col-md-3 offset-md-1 form-1-box wow fadeInUp">
                                        <a href="/export_pdf" class="btn btn-dark">Print to PDF</a>
                                    </div>
                                </div>
                    </div>

                    <div class="col-md-6">
                            <fieldset class="form-group border p-3">
                                <legend class="w-auto px-2">FAMILIAL INFO</legend>
                                    {{-- ***************************************************************************** --}}
                                    {{-- CONTINUATION OF FORMS TO BREAK..... --}}
                                    {{-- ***************************************************************************** --}}
                                    <div class="form-group">
                                        {{Form::label('title', "Father's Name:")}}
                                        <b>{{Form::label('title', $post->dadName)}}</b>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('title', "Mother's Name:")}}
                                        <b>{{Form::label('title', $post->momName)}}</b>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('title', "Grand father's Name:")}}
                                        <b>{{Form::label('title', $post->grandDad)}}</b>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('title', "Grand mother's Name:")}}
                                        <b>{{Form::label('title', $post->grandMom)}}</b>
                                    </div>
                            </fieldset>

                                <!-- Holy Communion  -->
                            <fieldset class="form-group border p-3">
                                <legend class="w-auto px-2">FIRST HOLY COMMUNION</legend>
                                <div class="form-group">
                                    {{Form::label('title', 'Date:')}}
                                    <b>{{Form::label('title', 'N/A')}}</b>
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', 'Place/Parish:')}}
                                    <b>{{Form::label('title', 'N/A')}}</b>
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', 'Minister:')}}
                                    <b>{{Form::label('title', 'N/A')}}</b>
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', "Signed By:")}}
                                    <b>{{Form::label('title', 'N/A')}}</b>
                                </div>
                            </fieldset>
                    </div>
            </div>
        </div>
    </div>
    
    
@endsection 