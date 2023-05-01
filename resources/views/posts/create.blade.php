@extends('layouts.app')

@section('content')


{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}     
    <!-- Form 1 -->
    <div class="form-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col form-1 section-description wow fadeIn">
                    <h2>Register Baptismal Candidate</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>Fill The Candidate Information As Applicable.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-0 form-1-box wow fadeInUp">
                        <!-- User's Credentials  -->
                        <fieldset class="form-group border p-3">
                            <legend class="w-auto px-2">BAPTISM</legend>
                            <div class="form-group">
                                {{Form::label('title', 'No. LB:')}}
                                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Baptismal Number', 'readonly' => ''])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Date of Bapt.:')}}
                                {{Form::date('baptDate', '', ['class' => 'form-control', 'placeholder' => ''])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Place of Bapt.:')}}
                                {{Form::text('baptPlace', '', ['class' => 'form-control', 'placeholder' => 'Place of Baptism'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Bapt. Name:')}}
                                {{Form::text('baptName', '', ['class' => 'form-control', 'placeholder' => 'Baptismal Name'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Family Name:')}}
                                {{Form::text('famName', '', ['class' => 'form-control', 'placeholder' => 'Family Name'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Date of Birth:')}}
                                {{Form::date('dateBirth', '', ['class' => 'form-control', 'placeholder' => ''])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', 'Place of Birth:')}}
                                {{Form::text('placeBirth', '', ['class' => 'form-control', 'placeholder' => 'Where was the candidate born?'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', 'LGA/Native Of:')}}
                                {{Form::text('native', '', ['class' => 'form-control', 'placeholder' => 'Where is the candidate from?'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', "Ministeration By:")}}
                                {{Form::text('minister', '', ['class' => 'form-control', 'placeholder' => "Who ministered during the baptism"])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', "Signed By:")}}
                                {{Form::text('signatory', $get_admin_name, ['class' => 'form-control', 'placeholder' => '', 'readonly' => ''])}}
                            </div>


                            </fieldset>
                            <!-- Submit Button  -->
                            <div class="form-group row text-right">
                                <div class="col">
                                    {{Form::submit('Submit', ['class' => 'btn btn-primary btn-customized'])}}
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
                                            {{Form::text('dadName', '', ['class' => 'form-control', 'placeholder' => "What is the candidate's father's Name?"])}}
                                        </div>

                                        <div class="form-group">
                                            {{Form::label('title', "Mother's Name:")}}
                                            {{Form::text('momName', '', ['class' => 'form-control', 'placeholder' => "What is the candidate's mother's Name?"])}}
                                        </div>

                                        <div class="form-group">
                                            {{Form::label('title', "Grand father's Name:")}}
                                            {{Form::text('grandDad', '', ['class' => 'form-control', 'placeholder' => "What is the candidate's grand father's Name?"])}}
                                        </div>

                                        <div class="form-group">
                                            {{Form::label('title', "Grand mother's Name:")}}
                                            {{Form::text('grandMom', '', ['class' => 'form-control', 'placeholder' => "What is the candidate's grand mother's Name?"])}}
                                        </div>
                                </fieldset>


                        <!-- Holy Communion  -->
                            <fieldset class="form-group border p-3">
                                <legend class="w-auto px-2">FIRST HOLY COMMUNION</legend>
                                <div class="form-group">
                                    {{Form::label('title', 'Date:')}}
                                    {{Form::date('commDate', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', 'Place/Parish:')}}
                                    {{Form::text('commPlace', '', ['class' => 'form-control', 'placeholder' => 'Parish where communion took place'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', 'Minister:')}}
                                    {{Form::text('commMinister', '', ['class' => 'form-control', 'placeholder' => 'Who ministered during the communion service'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', "Signed By:")}}
                                    {{Form::text('commSignatory', $get_admin_name, ['class' => 'form-control', 'placeholder' => "", 'readonly' => ''])}}
                                </div>
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

    
@endsection