@extends('layouts.user')

@section('header')
    <style>
        #hero{
            background: url('{{asset('user/images/tentang.jpg')}}') top center;
            background-repeat: no-repeat;
            width:100%;
            background-size:cover;
            margin:5px;
        }
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }
        .content{
          line-height: 1.6;
          font-size: 15px;
        } 
    </style>    
@endsection

@section('hero')
    <h1>Tenang Kami</h1>
    <h2>Cek detail tentang kami disini</h2>
@endsection
 {{--
@section('content')

    <section id="contact">
      <div class="row justify-content-center">
        <div class="col-sm-10">
          <div class="row container">
            <div class="col-sm-9">

              {{-- <div class=" wow fadeInUp">
                <div class="section-header">
                  <h3 class="section-title">Daftar Destinasi</h3>
                  <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
              </div>
              <div class=" wow fadeInUp">
                <div class="row justify-content-left">
                  @foreach ($destinations as $destination)
                    <div class="col-lg-4 col-md-6">
                      <a href="{{route('destination.show', $destination->slug)}}" class="decoration-none">
                          <div class="row">
                            <div class="col-11 full-img" style="background-image: url({{asset('destinations_image/'.$destination->image)}})"></div>
                          </div>
                          <div class="row">
                            <div class="col px-0 pt-2">
                              <h4 style="color: #666666 !important;">{{$destination->title}}</h4>
                            </div>
                          </div>
                        </a>
                      </div> 
                  @endforeach
                </div>
              </div> --}}
{{-- 
              @if (empty(request()->segment(2)) )
                @component('user.component.all_destination', ['destinations'=> $destinations])
                @endcomponent
              @else
                @component('user.component.single_destination', ['destination'=> $destinations])
                @endcomponent
              @endif


            </div>
            <div class="col-sm-3 mt-5">
              <form action="{{route('destination')}}" class="mt-5">
                <div class="input-group mb-4 border rounded-pill shadow-lg" style="border-radius:10px; box-shadow: 3px 3px 8px grey;">
                  <input type="text" name="s" value="{{Request::get('s')}}" placeholder="Destinasi lain?" class="form-control bg-none border-0" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                  <div class="input-group-append border-0">
                    <button type="submit" class="btn text-success"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
              <div class="mb-3 font-weight-bold">Other Posts</div>
              @foreach ($other as $item)
                <div>
                    <a href="{{route('destination.show', [$item->slug])}}"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i> 
                      {{$item->title}}
                    </a>
                    <hr >
                </div>
              @endforeach
            </div>
            
          </div>
        </div>

      </div>
    </section>
       --}}
      {{-- @if (empty(request()->segment(2)) )
        @component('user.component.all_destination', ['destinations'=> $destinations])
        @endcomponent
      @else
        @component('user.component.single_destination', ['destination'=> $destinations])
        @endcomponent
      @endif --}}

      @section('content')
      <div class="container mt-4">
          {{-- <h1 class="text-center">Tentang Kami</h1> --}}
          <div class="row">
              <div class="col-md-6 text-primary">
                  <h3>Visi dan Misi</h3>
                  
                  <p style="color: #666666">
                      Kami adalah kelompok UMKM yang bergerak dalam bidang makanan dengan tujuan untuk memperkenalkan cita rasa khas nusantara kepada dunia. Visi kami adalah menjadi pelopor makanan ringan berkualitas dengan harga yang terjangkau. Misi kami adalah menyediakan makanan yang sehat, lezat, dan mudah diakses oleh berbagai kalangan.
                  </p>
              </div>
              <div class="col-md-6 text-primary">
                  <h3>Sejarah Kami</h3>
                  <p style="color: #666666">
                      Kelompok UMKM ini didirikan pada tahun 2020 oleh sekumpulan pengusaha muda yang ingin membuat perubahan dalam dunia kuliner Indonesia. Berawal dari sebuah ide sederhana untuk menciptakan makanan ringan yang tidak hanya enak tetapi juga berkualitas, kami terus berkembang dan berkomitmen untuk memberikan produk terbaik bagi pelanggan kami.
                  </p>
              </div>
          </div>
          
          <h3 class="mt-4 text-primary">Tim Kami</h3>
          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <img src="{{ asset('user/images/member1.png') }}" class="card-img-top" alt="Tim 1">
                      <div class="card-body">
                          <h5 class="card-title">Aliza</h5>
                          <p class="card-text">CEO dan Pendiri Kelompok UMKM.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="{{ asset('user/images/member2.png') }}" class="card-img-top" alt="Tim 2">
                      <div class="card-body">
                          <h5 class="card-title">Nama Anggota 2</h5>
                          <p class="card-text">Manajer Operasional dan Pemasaran.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="{{ asset('user/images/member3.png') }}" class="card-img-top" alt="Tim 3">
                      <div class="card-body">
                          <h5 class="card-title">Nama Anggota 3</h5>
                          <p class="card-text">Chef Utama dan Pengembangan Produk.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection 