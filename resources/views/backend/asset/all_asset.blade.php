@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.asset') }}" class="btn btn-inverse-info"> Add New Asset </a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Asset Data Table</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Brand</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($assets as $key => $item)
                            <tr>
                                <td class="sorting_1">{{ $item->id }}</td>
                                <td>{{ $item->asset_name }}</td>
                                <td>{{ $item->asset_type }}</td>
                                <td>{{ $item->asset_brand }}</td>
                                <td>{{ $item->asset_status }}</td>
                                <td>
                                    <a href="{{ route('edit.asset', $item->id) }}" class="btn btn-inverse-secondary"> Edit </a>
                                    <a href="{{ route('delete.asset', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
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




@endsection