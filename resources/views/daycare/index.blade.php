@extends ('master.panel')

@section('content')

    <div class="col-sm-8 blog-main">

      <div class="mx-auto">

        <h1> Daycare Information </h1>



        <ul>

          @foreach($daycares as $daycare)

          <li>
              <a href="/daycares/{{ $daycare->id }}">
              {{$daycare->name}}
              </a>
          </li>


          @endforeach


        </ul>

      </div>

    </div><!-- /.container -->

@endsection
