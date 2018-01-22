@include('include.header')
<div class="container-fluid">
    <div class="jumbotron">
        <h2>Laravel CRUD Application</h2>
        <p>Development By Bayes Ahmed Shoharto</p>
        <p>Read Article</p>
        <hr>
        <div>
            <p class="lead">{{$articles->title}}</p>
            <p>{{$articles->description}}</p>
        </div>

    </div>
</div>
@include('include.footer')
