@extends('backend.layouts.app')

@section('content')
<h1 class="content_header">Dashboard</h1>
<div class="row">
    <!-- ------------------------ -->
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="deshboard_items default">
            <div class="deshboard_icon"><i class="fa fa-ambulance"></i></div>
            <div class="deshboard_content">
                <h3>lorem ipsum</h3>
                <p>0</p>
            </div>
        </div>
    </div>
    <!-- ------------------------ -->
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="deshboard_items secondary">
            <div class="deshboard_icon"><i class="fab fa-dropbox"></i></div>
            <div class="deshboard_content">
                <h3>lorem ipsum</h3>
                <p>0</p>
            </div>
        </div>
    </div>
    <!-- ------------------------ -->
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="deshboard_items warning">
            <div class="deshboard_icon"><i class="fa fa-bullseye"></i></div>
            <div class="deshboard_content">
                <h3>lorem ipsum</h3>
                <p>0</p>
            </div>
        </div>
    </div>
    <!-- ------------------------ -->
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="deshboard_items primary">
            <div class="deshboard_icon"><i class="fa fa-cubes"></i></div>
            <div class="deshboard_content">
                <h3>lorem ipsum</h3>
                <p>0</p>
            </div>
        </div>
    </div>
    <!-- ------------------------ -->
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="deshboard_items success">
            <div class="deshboard_icon"><i class="fab fa-joomla"></i></div>
            <div class="deshboard_content">
                <h3>lorem ipsum</h3>
                <p>0</p>
            </div>
        </div>
    </div>
    <!-- ------------------------ -->
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="deshboard_items info">
            <div class="deshboard_icon"><i class="fa fa-filter"></i></div>
            <div class="deshboard_content">
                <h3>lorem ipsum</h3>
                <p>0</p>
            </div>
        </div>
    </div>
    <!-- ------------------------ -->
</div>
<div class="panel">
    <div class="header">
        <h3 class="card-title">Bordered Table</h3>
    </div>

    <div class="body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger"
                                style="width: 55%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-danger">55%</span></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning">70%</span></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-primary">30%</span></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-success">90%</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer d-flex">
        <ul class="pagination pagination m-0 float-right">
            <li class="page-item">
                <a class="page-link" href="#">«</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">»</a>
            </li>
        </ul>
        <button class="btn btn-primary ml-auto">Click</button>
    </div>
</div>
@endsection