@extends('layouts.slave')

@section('title')
    Frequest |  Add Answer
@endsection

@section('content')
    <style type="text/css">
        .help-block strong {
            color: red;
        }
    </style>
    <div id="main">

        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Add Answer</li>
        </ol>
        <!-- //breadcrumb-->

        <div class="real-border">
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-1"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-lg-offset-2">

                    <section class="panel corner-flip">
                        <header class="panel-heading sm" data-color="theme-inverse">
                            <h2><strong>Add</strong> Answer </h2>
                            @if(Session::has('answersuccess'))
                                <div class="alert-box">
                                    <h4 style="color: green;">{!! Session::get('answersuccess') !!}</h4>
                                </div>
                            @endif
                            @if(Session::has('answerfailed'))
                                <div class="alert-box">
                                    <h4 style="color: green;">{!! Session::get('answerfailed') !!}</h4>
                                </div>
                            @endif
                        </header>
                        <div class="panel-tools color" align="right" data-toolscolor="#4EA582">
                            <ul class="tooltip-area">
                                <li><a href="javascript:void(0)" class="btn btn-collapse" title="Collapse"><i class="fa fa-sort-amount-asc"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-reload"  title="Reload"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-close" title="Close"><i class="fa fa-times"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{ url('/saveanswer') }}" enctype="multipart/form-data">
                             {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label">Choose Exam</label>
                                    <div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <select  class="selectpicker form-control" name="exam_id" data-size="10" data-live-search="true">
                                                    <option value="">Live search </option>
                                                    @foreach($exams as $exam)
                                                        <option {{ $exam->id == $answer->exam_id ? 'selected' : '' }} value="{{ $exam->id }}">{{ $exam->question }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                @if ($errors->has('exam_id'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('exam_id') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- //form-group-->
                                <div class="form-group">
                                    <label class="control-label">Enter Options</label>
                                    <div>
                                        <input class="form-control " name="answer" type="text" placeholder="Enter category E.g Event & Conferences" value="{{ $answer->answer }}">
                                        @if ($errors->has('answer'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('answer') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group offset">
                                    <div>
                                        <button type="submit" class="btn btn-theme">Submit</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- //account-wall-->

                </div>
                <!-- //col-sm-6 col-md-4 col-md-offset-4-->
            </div>
            <!-- //row-->
        </div>
        <!-- //content-->

    </div>
@endsection
