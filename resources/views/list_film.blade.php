@extends('template.main_film')
@section('content')
<div class="container container_film mt-4 mb-5">

    <div class="row">

        @foreach($list_film as $lf)
        <div class="col-md-6 mt-4">
            <div class="card card-film-list">
                <div class="card-header">
                    <h3 class="card-title mb-0">{{$lf['title']}}</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-auto mt-2 mb-2">
                            <img class="image-poster" src="{{$lf['img-cover']}}" alt="">
                        </div>
                        <div class="col-md film-mini-detail d-flex flex-column mt-2 mb-2" style="font-size: 15px">
                            <p><b>Tahun</b> : {{$lf['year']}}</p>
                            <p><b>Genre</b> : {{$lf['genre']}}</p>
                            <p><b>Tanggal Rilis</b> : {{$lf['date']}}</p>
                            <p><b>Sutradara</b> : {{$lf['director']}}</p>
                            <p class="mb-3"><b>Aktor Utama</b> : 
                                <br> {{$lf['actor']}}</p>
                            <a href="detail_film" class="btn btn-warning mt-auto btn-sm mt-2 text-white rounded-pill ">DETAIL FILM</a>
                        </div>  

                    </div>

                </div>
            </div>
            
        </div>
        @endforeach

    </div>

</div>
@endsection