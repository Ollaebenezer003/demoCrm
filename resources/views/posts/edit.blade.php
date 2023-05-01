@extends('layouts.app')

@section('content')

{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}     
    <!-- Form 1 -->
    <div class="form-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col form-1 section-description wow fadeIn">
                    <h2>EDIT Candidate's Information</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>Update The Candidate Information As Applicable.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-0 form-1-box wow fadeInUp">
                        <!-- User's Credentials  -->
                        <fieldset class="form-group border p-3">
                            <legend class="w-auto px-2">BAPTISM</legend>
                            <div class="form-group">
                                {{Form::label('title', 'No. LB:')}}
                                {{Form::text('title', "PAR/2023/000$post->id", ['class' => 'form-control', 'placeholder' => 'Title', 'readonly' => ''])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Date of Bapt.:')}}
                                {{Form::date('baptDate', $post->baptDate, ['class' => 'form-control', 'placeholder' => '', 'readonly' => ''])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Place of Bapt.:')}}
                                {{Form::text('baptPlace', $post->placeBapt, ['class' => 'form-control', 'placeholder' => '', 'readonly' => ''])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Bapt. Name:')}}
                                {{Form::text('baptName', $post->baptName, ['class' => 'form-control', 'placeholder' => '', 'readonly' => ''])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Family Name:')}}
                                {{Form::text('famName', $post->famName, ['class' => 'form-control', 'placeholder' => ''])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Date of Birth:')}}
                                {{Form::date('dateBirth', $post->dateBirth, ['class' => 'form-control', 'placeholder' => '', 'readonly' => ''])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', 'Place of Birth:')}}
                                {{Form::text('placeBirth', $post->placeBirth, ['class' => 'form-control', 'placeholder' => ''])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', 'LGA/Native Of:')}}
                                {{Form::text('native', $post->LGA, ['class' => 'form-control', 'placeholder' => ''])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', "Ministeration By:")}}
                                {{Form::text('minister', $post->minister, ['class' => 'form-control', 'placeholder' => "", 'readonly' => ''])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('title', "Signed By:")}}
                                {{Form::text('signatory', $post->signedBy, ['class' => 'form-control', 'placeholder' => "", 'readonly' => ''])}}
                            </div>


                            </fieldset>
                            <!-- Submit Button  -->
                            <div class="form-group row text-right">
                                <div class="col">
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('Update Records', ['class' => 'btn btn-primary btn-customized'])}}
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
                                            {{Form::text('dadName', $post->dadName, ['class' => 'form-control', 'placeholder' => ""])}}
                                        </div>

                                        <div class="form-group">
                                            {{Form::label('title', "Mother's Name:")}}
                                            {{Form::text('momName', $post->momName, ['class' => 'form-control', 'placeholder' => ""])}}
                                        </div>

                                        <div class="form-group">
                                            {{Form::label('title', "Grand father's Name:")}}
                                            {{Form::text('grandDad', $post->grandDad, ['class' => 'form-control', 'placeholder' => ""])}}
                                        </div>

                                        <div class="form-group">
                                            {{Form::label('title', "Grand mother's Name:")}}
                                            {{Form::text('grandMom', $post->grandMom, ['class' => 'form-control', 'placeholder' => ""])}}
                                        </div>
                                </fieldset>


                        <!-- Holy Communion  -->
                            <fieldset class="form-group border p-3">
                                <legend class="w-auto px-2">FIRST HOLY COMMUNION</legend>
                                <div class="form-group">
                                    {{Form::label('title', 'Date:')}}
                                    {{Form::date('commDate', '', ['class' => 'form-control', 'placeholder' => '', 'readonly' => ''])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', 'Place/Parish:')}}
                                    {{Form::text('commPlace', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', 'Minister:')}}
                                    {{Form::text('commMinister', '', ['class' => 'form-control', 'placeholder' => '', 'readonly' => ''])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('title', "Signed By:")}}
                                    {{Form::text('commSignatory', '', ['class' => 'form-control', 'placeholder' => "", 'readonly' => ''])}}
                                </div>
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

    
@endsection