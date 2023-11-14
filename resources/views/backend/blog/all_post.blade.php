@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.post') }}" class="btn btn-inverse-info"> Make New Post </a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <!-- <h6 class="card-title">Post Data Table</h6> -->
                    <!-- <div class="table-responsive">
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
                            @foreach($posts as $key => $item)
                            <tr>
                                <td class="sorting_1">{{ $item->id }}</td>
                                <td>{{ $item->post_name }}</td>
                                <td>{{ $item->post_type }}</td>
                                <td>
                                    <a href="{{ route('edit.post', $item->id) }}" class="btn btn-inverse-secondary"> Edit </a>
                                    <a href="{{ route('delete.post', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> -->

                    <div class="card">
                    @foreach($posts as $key => $item)
                        @if (filter_var($item->photo, FILTER_VALIDATE_URL))
                        <img src="{{ $item->photo }}" class="card-img-top" alt="...">
                        @else
                        <img src="{{ url('upload/post_images/'.$item->photo) }}" class="card-img-top" alt="...">
                        @endif

                        <div class="card-body">
                        <h5 class="card-title">{{ $item->post_name }}</h5>
                        @if(is_null($item->created_at) || !is_null($item->updated_at))
                            <p>Last updated at {{ $item->updated_at }}</p>
                            @else <p>Last updated at {{ $item->created_at }}</p>
                        @endif


                        <p class="card-text mb-3">{{ $item->post_type }}</p>

                        <a href="{{ route('edit.post', $item->id) }}" class="btn btn-inverse-secondary"> Edit </a>
                        <a href="{{ route('delete.post', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
                        </div>
                    @endforeach
                    </div>
                    <!-- Pagination Links -->
                    <ul class="pagination justify-content-center">
                            {{ $posts->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection