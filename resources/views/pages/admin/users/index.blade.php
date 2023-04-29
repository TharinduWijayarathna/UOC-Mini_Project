<x-app-layout>
    <x-slot name="header">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>User Management</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i
                                    class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">User Management</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row clearfix">

            </div>
        </div>
    </x-slot>
</x-app-layout>
