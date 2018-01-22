@include('include.header')
<div class="container-fluid">
    <div class="jumbotron">
        <h2>Laravel CRUD Application</h2>
        <p>Development By Bayes Ahmed Shoharto</p>
        @if(session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @if(count($articles)>0)
                @foreach($articles->all() as $article)

                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->description}}</td>
                        <td class="col-md-2">
                            <a href='{{url("/read/{$article->id}")}}' class=" label label-primary">Read</a>
                            <a href='{{url("/update/{$article->id}")}}' class=" label label-success">update</a>
                            <a href='{{url("/delete/{$article->id}")}}' class=" label label-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
@include('include.footer')
