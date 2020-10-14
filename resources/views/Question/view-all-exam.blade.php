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
            <li><a href="#">Exam Question</a></li>
            <li class="active">View All Question</li>
        </ol>
        <!-- //breadcrumb-->

        <div id="content">

            <div class="row">

                <div class="col-lg-12">

                    <section class="panel">
                        <header class="panel-heading">
                            <h2><strong>Exam Question</strong></h2>
                        </header>
                        <div class="panel-tools fully color" align="right"  data-toolscolor="#6CC3A0">
                            <ul class="tooltip-area">
                                <li><a href="javascript:void(0)" class="btn btn-collapse" title="Collapse"><i class="fa fa-sort-amount-asc"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-reload"  title="Reload"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="javascript:void(0)" class="btn btn-close" title="Close"><i class="fa fa-times"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                            <?php $i = 1; ?>
                               @foreach($exams as $exam)
                                    <div class="col-lg-3">
                                            <h4>{{ $i }}. {{ $exam->question }} <a href="{{ url('editquestion', ['id' => $exam->id]) }}"><i class="fa fa-edit"></i></a><a href="{{ url('deletequestion', ['id' => $exam->id]) }}"><i class="fa fa-trash-o"></i></a></h4><br>
                                            @foreach($exam->answers as $ans)
                                            <li>{{ $ans->answer }} <a href="{{ url('editanswer', ['id' => $ans->id]) }}"><i class="fa fa-edit"></i></a><a href="{{ url('deleteanswer', ['id' => $exam->id]) }}"><i class="fa fa-trash-o"></i></a></li>
                                            @endforeach
                                    </div>
                                    <?php $i++ ?>
                               @endforeach
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <!-- //content > row-->

        </div>
        <!-- //content-->


    </div>

    <script type="text/javascript">
            $.ajax({
            type: "POST",
            url: '/orderdata', // This is what I have updated
            data: { id: 7 }
        }).done(function( msg ) {
            alert( msg );
        });
    </script>

@endsection
