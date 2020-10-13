@extends('layouts.slave')

@section('title')
    Frequest |  Add Category
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
            <li class="active">Add Category</li>
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
                            <h2><strong>Add</strong> Category </h2>
                            @if(Session::has('categorysuccess'))
                                <div class="alert-box">
                                    <h4 style="color: green;">{!! Session::get('categorysuccess') !!}</h4>
                                </div>
                            @endif
                            @if(Session::has('categoryfailed'))
                                <div class="alert-box">
                                    <h4 style="color: green;">{!! Session::get('categoryfailed') !!}</h4>
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
                            <form class="form-horizontal" data-collabel="3" data-alignlabel="left" method="post" action="{{ url('/savecategory') }}" enctype="multipart/form-data">
                             {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label">Category</label>
                                    <div>
                                        <input class="form-control " name="name" type="text" placeholder="Enter category E.g Event & Conferences" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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
