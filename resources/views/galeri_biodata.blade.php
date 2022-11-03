@extends('template.main_film')
@section('content')

<div class="container container_film mt-4 mb-5">
<?php

    $dataPeople = [
        [
            'id'=>1,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/1.jpg',
        ],
        [
            'id'=>2,
            'nama'=>"Noto Adi",
            "umur"=>25,
            "tinggi"=>175,
            "berat"=>56,
            "alamat"=>"Bogor, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/2.jpg',
        ],
        [
            'id'=>3,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/3.jpg',
        ],
        [
            'id'=>4,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/5.jpg',
        ],
        [
            'id'=>6,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/6.jpg',
        ],
        [
            'id'=>7,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/7.jpg',
        ],
        [
            'id'=>8,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/8.jpg',
        ],
        [
            'id'=>5,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/5.jpg',
        ],
        [
            'id'=>9,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/9.jpg',
        ],
        [
            'id'=>10,
            'nama'=>"Agus Susan",
            "umur"=>24,
            "tinggi"=>168,
            "berat"=>54,
            "alamat"=>"Malang, Kec Lowokwaru",
            'image'=>'https://randomuser.me/api/portraits/men/10.jpg',
        ],
    ];

?>
    <div class="row">
        @foreach($dataPeople as $pl)
        <div class="col-md-6 mt-3">
            <div class="card card-film-list border border-dark border-opacity-75 shadow rounded-2">
                <div class="card-header bg-dark text-light  rounded-0">
                    <h3 class="card-title mb-0 ">{{$pl["nama"]}}</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-auto" style="border-right: 1px solid #dfdfdf">
                            <img class="image-poster" src="{{$pl["image"]}}" alt="">
                        </div>
                        <div class="col-md film-mini-detail d-flex flex-column">
                            <p><b>Umur</b> : {{$pl["umur"]}}</p>
                          
                            <p><b>Berat Badan</b> : {{$pl["berat"]}}</p>
                            <p><b>Tinggi</b> : {{$pl["tinggi"]}}</p>
                            <p><b>Alamat</b> : {{$pl["alamat"]}}</p>
                            <p><b>Pengalaman</b> : <br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, delectus? Qui aut quia voluptate beatae fugiat voluptas assumenda nemo animi odio culpa molestiae corrupti quis, ipsa, amet harum tenetur saepe.</p>
                        
                            <a href="{{url('')}}/biodata" class="btn btn-dark btn-sm mt-auto text-white rounded-5">DETAIL MODEL</a>
                        </div>  

                    </div>

                </div>
            </div>
            
        </div>
        @endforeach
    </div>

</div>



@endsection
