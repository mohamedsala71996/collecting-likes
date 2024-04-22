@extends('layouts.dashboard.app')

@section('content')

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 text-center">عدد الإعلانات</h5>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center"> {{ \App\Models\Addlink::count() }}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 text-center">عدد المستخدمين</h5>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">{{ \App\Models\User::count() }}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 text-center">عدد الطلبات</h5>
                        </div>
                        <div class="card-body">
                            <h1 class="text-center">{{ \App\Models\Subscription::count() }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

