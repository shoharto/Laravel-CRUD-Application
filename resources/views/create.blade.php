@include('include.header')
<div class="container-fluid">
    <div class="jumbotron">
        <h2>Laravel CRUD Application</h2>
        <p>Development By Bayes Ahmed Shoharto</p>
        <form method="POST" action="{{url('/insert')}}">
            {{csrf_field()}}
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="{{url('/')}}" class="btn btn-default">Back</a>
        </form>
    </div>

</div>

@include('include.footer')