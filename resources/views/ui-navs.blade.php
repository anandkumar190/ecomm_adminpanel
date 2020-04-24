@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<h3 class="page-title">Navs</h1>
@endsection

@section('content')
        <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Base nav</h4>
                                            <p class="text-muted m-b-30 font-14">Add class <code>.nav</code>:</p>

                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Horizontal alignment</h4>
                                            <p class="text-muted m-b-30 font-14">Centered with <code class="highlighter-rouge">.justify-content-center</code>:</p>

                                            <ul class="nav justify-content-center">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Right alignment</h4>
                                            <p class="text-muted m-b-30 font-14">Right-aligned with <code class="highlighter-rouge">.justify-content-end</code>:</p>

                                            <ul class="nav justify-content-end">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Vertical</h4>
                                            <p class="text-muted m-b-30 font-14">Centered with <code class="highlighter-rouge">.justify-content-center</code>:</p>

                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Tabs</h4>
                                            <p class="text-muted m-b-30 font-14">Takes the basic nav from above and adds the <code class="highlighter-rouge">.nav-tabs</code> class to generate a tabbed interface.</p>

                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Pills</h4>
                                            <p class="text-muted m-b-30 font-14">Take that same HTML, but use <code class="highlighter-rouge">.nav-pills</code> instead:</p>

                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div><!-- container -->
                    </div> <!-- Page content Wrapper -->
@endsection

@section('script')
@endsection

