@extends('layouts.main_user')

@section('title', 'classes')
@section('content')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid" style="width: 75%">
        <!-- Content Row -->
        <div class="line" style="width: 100%; height: 1px; border-bottom: 1px dashed #ddd; margin: 15px 0;"></div>
        <!-- Content Row -->
        <div style="justify-content: center" class="row">
            <!-- Content Column -->
            <div class="col-lg-6 mb-4" style="width:75%; ">

                <!-- Teacher -->
                <div class="card shadow mb-3">
                    <div class="card-header py-2">
                        <h3 class="m-0 text-primary">Pengajar</h3>
                    </div>
                    <div class="card-body row">
                        <div class="float-left col-1" style="display: block">
                            <img class="" style="width: 35px;"
                                src="https://static.vecteezy.com/system/resources/previews/000/566/937/large_2x/vector-person-icon.jpg"
                                alt="...">
                        </div>
                        <div class="col">
                            <p style="margin-right: 20px; margin-top: 5px; font-size:1.2rem">Bagus Sadewo</p>
                        </div>
                    </div>
                </div>

                <!-- Approach -->
                <div class="card shadow mb-3">
                    <div class="card-header py-2">
                        <h3 class="m-0 text-primary">Teman Sekelas</h3>
                    </div>
                    <div class="card-body row">
                        <div class="float-left col-1" style="display: block">
                            <img class="" style="width: 35px;"
                                src="https://static.vecteezy.com/system/resources/previews/000/566/937/large_2x/vector-person-icon.jpg"
                                alt="...">
                        </div>
                        <div class="col">
                            <p style="margin-right: 20px; margin-top: 5px; font-size:1.2rem">Gery Buyung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


@endsection
