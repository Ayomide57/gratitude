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
    Home | View All Exams
@endsection

@section('content')

    <div id="main">


        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Exams</a></li>
            <li class="active">View All Exams</li>
        </ol>
        <!-- //breadcrumb-->

        <div id="content">

            <div class="row">

                <div class="col-lg-12">

                    <section class="panel">
                        <header class="panel-heading">
                            <h2><strong>Category</strong></h2>
                        </header>
                        <div class="panel-tools fully color" align="right"  data-toolscolor="#6CC3A0">
                            <ul class="tooltip-area">
                                <li><a href="javascript:void(0)" class="btn btn-collapse" title="Collapse"><i class="fa fa-sort-amount-asc"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-reload"  title="Reload"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-close" title="Close"><i class="fa fa-times"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                               
                        </div>
                    </section>
                </div>

            </div>
            <!-- //content > row-->

        </div>
        <!-- //content-->


    </div>

@endsection
