<?php
/**
 * Created by PhpStorm.
 * User: Ayomide
 * Date: 9/16/2018
 * Time: 2:07 AM
 */
?>
@extends('layouts.slave')

@section('title')
    Home | View All Category
@endsection

@section('content')

    <div id="main">


        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">View All Category</li>
        </ol>
        <!-- //breadcrumb-->

        <div id="content">

            <div class="row">

                <div class="col-lg-12">

                    <section class="panel">
                        <header class="panel-heading">
                            <h2><strong>Category</strong></h2>
                            @if(Session::has('categorydelsuccess'))
                                <div class="alert-box">
                                    <h4 style="color: green;">{!! Session::get('categorydelsuccess') !!}</h4>
                                </div>
                            @endif
                        </header>
                        <div class="panel-tools fully color" align="right"  data-toolscolor="#6CC3A0">
                            <ul class="tooltip-area">
                                <li><a href="javascript:void(0)" class="btn btn-collapse" title="Collapse"><i class="fa fa-sort-amount-asc"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-reload"  title="Reload"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-close" title="Close"><i class="fa fa-times"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th width="30%">Action</th>
                                        <th width="30%">View</th>
                                    </tr>
                                    </thead>
                                    <tbody align="center">
                                    @forelse($categories as $cat)
                                        <tr>
                                            <td>{{ $cat->id }}</td>
                                            <td valign="middle">{{ $cat->name }}</td>
                                            <td>
                                            <span class="tooltip-area">
                                                <a href="{{ url('deletecategory',['id' => $cat->id ]) }}"
                                                   class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            </span>
                                            </td>
                                            <td>
                                            <span class="tooltip-area">
                                                <a href="{{ url('editcategory',['id' => $cat->id]) }}"
                                                   class="" title="Edit"><i class="fa fa-eye-o"></i>Edit category</a>
                                            </span>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <!-- //content > row-->

        </div>
        <!-- //content-->


    </div>

@endsection
