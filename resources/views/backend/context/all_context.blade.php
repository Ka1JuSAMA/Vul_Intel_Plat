@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.context') }}" class="btn btn-inverse-info"> Add New Business Context </a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Context Data Table</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($contexts as $key => $item)
                            <tr>
                                <td class="sorting_1">{{ $item->id }}</td>
                                <td>{{ $item->context_name }}</td>
                                <td>{{ $item->context_type }}</td>
                                <td>
                                    <a href="{{ route('edit.context', $item->id) }}" class="btn btn-inverse-secondary"> Edit </a>
                                    <a href="{{ route('delete.context', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
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