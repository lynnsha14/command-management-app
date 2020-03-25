

@if(Session::has('success'))
    <div class="container-fluid alert alert-success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">{{Session::get('success')}}</div>
            </div>
        </div>
    </div>
@endif

@if(Session::has('danger'))
    <div class="container-fluid alert alert-danger">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">{{ Session::get('danger')  }}</div>
            </div>
        </div>
    </div>
@endif

@if($errors->any())
    <div class="container-fluid alert alert-danger">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <p>Erreur(s) rencontrer : </p>
                    <ul>
                        @foreach($errors->all() as $error) <li> {{$error}} </li> @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

