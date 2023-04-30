<x-app-layout>
    <x-slot name="header">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>User Management</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">User Management</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right" type="button"><i
                            class="zmdi zmdi-plus"></i></button>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>User Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user_data as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>
                                                    @if ($data->user_type == 0)
                                                        <span class="badge badge-success">Admin</span>
                                                    @elseif ($data->user_type == 1)
                                                        <span class="badge badge-info">Cashier</span>
                                                    @else
                                                        <span class="badge badge-warning">Customer</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
