@extends('dashboard.master')



@section('title')
    Articles
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Articles Index</h1>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>User</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></td>
                                <td>{{ $article->status ? 'Active' : 'Inactive' }}</td>
                                <td><span class="tag tag-success"></span>{{ $article->user_id }}</td>
                                <td>{{ $article->created_at }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Articles added to the site</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
