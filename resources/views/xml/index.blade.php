<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Masiya</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
        <!-- bootstrap 3.0.2 -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
        <style>
            .main-table-th{
                background:#25ADC2;
                color: #FFFFFF;
                padding: 0px !important;
                text-transform: none;
            }

            .sub-table-th{
                background-color: #2EBCD2;
                border-top: 0px !important;
                color: #FFFFFF;
            }

            .font-employment{
                color : #A7A7A7;
            }
            .nav-tabs>li>a {
                margin-right : 0px !important;
                margin-bottom: 1px;
            }
            
            .nav-tabs>li {
                float: right;
            }

            .badge {
                min-width: 50px;
                min-height: 20px;
                text-align: center;
            }

            .table > thead > tr > th {
                border-bottom-color: transparent;
            }

            .label-title {
                vertical-align: middle;
                text-align:center;
                margin-top:5px;
                font-size: 25px;
                text-transform: none;
                position: relative;
            }
            
            .panel-heading .nav {
                margin-top: 20px;
            }

        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-xs-12">
                <section class="panel general">
                    <header class="panel-heading tab-bg-dark-navy-blue">
                        <!--<label class="label-title">Person</label>-->
                        <ul class="nav nav-tabs">
                            <label class="label-title">Person</label>

                            <li class="">
                                <a data-toggle="tab" href="#department">By Department</a>
                            </li>
                            <li class="active">
                                <a data-toggle="tab" href="#city">By City</a>
                            </li>

                        </ul>
                    </header>
                    <div class="panel-body" style='padding: 0px !important;'>
                        <div class="tab-content">
                            <div id="city" class="tab-pane active">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="main-table-th">
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Department</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data[0] as $key => $val)

                                        <tr class="sub-table-th">
                                            <th>{{$key}}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach ($val as $k => $v)
                                        <tr>
                                            <td>{{$v[1]}}<br><span class='font-employment'>{{$v[2]}}</span></td>
                                            <td>{{$v[3]}}</td>
                                            <td>{{$v[5]}}</td>
                                            <td>
                                                @if($v[7] == 1)

                                                <span class="badge bg-green">Masuk</span>
                                                @elseif($v[7] == 2)
                                                <span class="badge bg-red">Cuti</span>
                                                @else
                                                <span class="badge bg-gray">Libur</span>
                                                @endif
                                            </td>

                                        </tr>

                                        @endforeach

                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr><td colspan="4"></td></tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div id="department" class="tab-pane">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="main-table-th">
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Department</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php // var_dump($data[0]);?>

                                        @foreach ($data[1] as $key => $val)

                                        <tr class="sub-table-th">
                                            <th>{{$key}}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach ($val as $k => $v)
                                        <tr>
                                            <td>{{$v[1]}}<br><span class='font-employment'>{{$v[2]}}</span></td>
                                            <td>{{$v[3]}}</td>
                                            <td>{{$v[5]}}</td>
                                            <td>
                                                @if($v[7] == 1)

                                                <span class="badge bg-green">Masuk</span>
                                                @elseif($v[7] == 2)
                                                <span class="badge bg-red">Cuti</span>
                                                @else
                                                <span class="badge bg-gray">Libur</span>
                                                @endif
                                            </td>

                                        </tr>

                                        @endforeach

                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr><td colspan="4"></td></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

            </div><!-- /.box-body -->
        </div>

        <!-- jQuery 2.0.2 -->
        <script src="/assets/js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="/assets/js/Director/app.js" type="text/javascript"></script>
    </body>
</html>

