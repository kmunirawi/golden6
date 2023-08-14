<h1>Articles Index</h1>
{{-- @dd($articles) --}}
{{-- @if (count($articles) > 0)

@foreach ($articles as $article)

<h2>{{ $article->title}}</h2>
<p>{{ $article->content}}</p>
<p>{{ $article->created_at ?? '-'}}</p>
<p>{{ $article->status ? 'Active' : 'Inactive'}}</p>
<p>{{ $article->user_id}}</p>
@endforeach
@endif --}}
{{-- 
@forelse ($articles as $article)
    <h2>{{ $loop->iteration }} - {{ $article->id }} - {{ $article->title }}</h2>

    <p>{{ $article->content }}</p>
    <p>{{ $article->created_at ?? '-' }}</p>
    <p>{{ $article->status ? 'Active' : 'Inactive' }}</p>
    <p>{{ $article->user_id }}</p>
@empty
    <h2>No Articles Found</h2>
@endforelse --}}


<table border="1">
    <tr>
        <th>#</th>
        <th>Title</th>
        {{-- <th>Content</th> --}}
        <th>Status</th>
        <th>User</th>
        <th>Date</th>
    </tr>
    @forelse ($articles as $article)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="{{route('articles.show', $article->id)}}">{{$article->title}}</a></td>
            {{-- <td>{{$article->content}}</td> --}}
            <td>{{$article->status ? 'Active' : 'Inactive'}}</td>
            <td>{{$article->user_id}}</td>
            <td>{{$article->created_at}}</td>
        </tr>
    @empty
        <tr><td colspan="5">No Articles added to the site</td></tr>
    @endforelse
</table>
