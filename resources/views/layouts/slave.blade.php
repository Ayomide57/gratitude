<?php
/**
 * Created by PhpStorm.
 * User: ayomide
 * Date: 12/16/2017
 * Time: 9:50 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Title-->
    <title>@yield('title')</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/admin/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/admin/assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/admin/assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('/admin/assets/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('/admin/assets/ico/favicon.ico') }}">

    <!-- CSS Stylesheet-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/admin/assets/css/bootstrap/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/admin/assets/css/bootstrap/bootstrap-themes.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}" />

    <!-- Styleswitch if  you don't chang theme , you can delete -->
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="{{ asset('/admin/assets/css/styleTheme1.css') }}" />
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="{{ asset('/admin/assets/css/styleTheme2.css') }}" />
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="{{ asset('/admin/assets/css/styleTheme3.css') }}" />
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="{{ asset('/admin/assets/css/styleTheme4.css') }}" />

    <link rel="stylesheet" href="{{ asset('/frequest/md/css/mdb.min.css') }}">
    <!-- Plugin file -->
    <link rel="stylesheet" href="{{ asset('/frequest/md/css/addons/datatables.min.css') }}">
    <script type="text/javascript" src="{{ asset('frequest/js/jquery-3.3.1.min.js') }}"></script>
    <style>
        #validate-wizard{
            width:330px;
            margin:auto;
        }
    </style>

</head>
<body class="leftMenu nav-collapse">
<div id="wrapper">

    @include('includes.admin.slaveheader')
            <!-- MAIN -->

    <!-- FOOTER -->

    <!--
    /////////////////////////////////////////////////////////////////////////
    //////////     MAIN SHOW CONTENT     //////////
    //////////////////////////////////////////////////////////////////////
    -->

    @yield('content')
            <!-- //main-->


    @include('includes.admin.slaveright')



            <!--
    //////////////////////////////////////////////////////////////
    //////////     LEFT NAV MENU     //////////
    ///////////////////////////////////////////////////////////
    -->


    @include('includes.admin.slaveleft')
            <!-- //nav left menu-->


    <!--
/////////////////////////////////////////////////////////////////
//////////     RIGHT NAV MENU     //////////
/////////////////////////////////////////////////////////////
-->

    @include('includes.admin.slaveright')
            <!-- //nav right menu-->


</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->

<!-- Jquery Library -->
<script type="text/javascript" src="{{ asset('/admin/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin/assets/js/jquery.ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->


<script type="text/javascript" src="{{ asset('/admin/assets/js/modernizr/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/mmenu/jquery.mmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin/assets/js/styleswitch.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin/assets/js/myscript.js') }}"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/form/form.js') }}"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/datetime/datetime.js') }}"></script>
<!-- Library Chart-->
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/chart/chart.js') }}"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/pluginsForBS/pluginsForBS.js') }}"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/miscellaneous/miscellaneous.js') }}"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="{{ asset('/admin/assets/js/caplet.custom.js') }}"></script>
<!-- Library jqvmap -->
<script src="{{ asset('/admin/assets/plugins/vmap/jquery.vmap.js') }}" type="text/javascript"></script>
<script src="{{ asset('/admin/assets/plugins/vmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
<script src="{{ asset('/admin/assets/plugins/vmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
<!-- Library Owl Carousel  -->
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
<link href="{{ asset('/admin/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('/admin/assets/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">
<link href="{{ asset('/admin/assets/plugins/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
<!-- Library datable -->
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/datable/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin/assets/plugins/datable/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frequest/md/js/mdb.min.js') }}"></script>
<!-- Plugin file -->
<script src="{{ asset('/frequest/md/js/addons/datatables.min.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: '#736086',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ["#0aa699", "#0bbeaf"],
            normalizeFunction: 'polynomial'
        });
        $("#owl-demo").owlCarousel({
            autoPlay : 5000,
            stopOnHover : true,
            paginationSpeed : 5000,
            goToFirstSpeed : 3000,
            singleItem : true,
            autoHeight : true,
            transitionStyle:"fade"
        });
        $('table[data-provide="data-table"]').dataTable({
            "iDisplayLength": 5
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        //Login animation to center
        function toCenter(){
            var mainH=$("#main").outerHeight();
            var accountH=$(".account-wall").outerHeight();
            var marginT=(mainH-accountH)/2;
            if(marginT>30){
                $(".account-wall").css("margin-top",marginT-15);
            }else{
                $(".account-wall").css("margin-top",30);
            }
        }
        var toResize;
        $(window).resize(function(e) {
            clearTimeout(toResize);
            toResize = setTimeout(toCenter(), 500);
        });

        //Canvas Loading
        var throbber = new Throbber({  size: 32, padding: 17,  strokewidth: 2.8,  lines: 12, rotationspeed: 0, fps: 15 });
        throbber.appendTo(document.getElementById('canvas_loading'));
        throbber.start();

        $('#validate-wizard').bootstrapWizard({
            tabClass:"nav-wizard",
            onNext: function(tab, navigation, index) {
                var content=$('#step'+index);
                if(typeof  content.attr("parsley-validate") != 'undefined'){
                    var $valid = content.parsley( 'validate' );
                    if(!$valid){
                        return false;
                    }
                };

                // Set the name for the next tab
                $('#step3 h3').find("span").html($('#fullname').val());
            },
            onTabClick: function(tab, navigation, index) {
                $.notific8('Please click <strong>next button</strong> to wizard next step!! ',{ life:5000, theme:"danger" ,heading:" Wizard Tip :); "});
                return false;
            },
            onTabShow: function(tab, navigation, index) {
                tab.prevAll().addClass('completed');
                tab.nextAll().removeClass('completed');
                if(tab.hasClass("active")){
                    tab.removeClass('completed');
                }
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#validate-wizard').find('.progress-bar').css({width:$percent+'%'});
                $('#validate-wizard').find('.wizard-status span').html($current+" / "+$total);

                toCenter();

                var main=$("#main");
                //scroll to top
                main.animate({
                    scrollTop: 0
                }, 500);
                if($percent==100){
                    setTimeout(function () { main.addClass("slideDown") }, 100);
                    setTimeout(function () { main.removeClass("slideDown") }, 3000);
                    setTimeout( "window.location.href='login.html'", 3500 );
                }

            }
        });


    });
</script>
<script>

    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>


</body>
</html>
