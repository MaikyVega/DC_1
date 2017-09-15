@extends ('master.panel')

@section('content')

<div class="col-sm-8 blog-main">

    <div class="blog-post">
            <h2 class="blog-post-title">{{$daycare->name}}</h2>
            <hr>


            <p> Address: </p>
            <p>{{$daycare->address1}}</p>
            <p>{{$daycare->address2}}</p>


            <hr>

    </div>


</div><!-- /.container -->

@endsection
