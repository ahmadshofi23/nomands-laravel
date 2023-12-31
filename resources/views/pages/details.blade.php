@extends('layouts.app')
@section('title', 'Detail Travel')
    

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>

                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Nusa Peninda</h1>
              <p>Republic of Indonesia Raya</p>
              <div class="gallery">
                  <div class="xzoom-container">
                    <img src="frontend/images/details-1.jpg" alt="Nusa Peninda" class="xzoom" id="xzoom-default" xoriginal="frontend/images/details-1.jpg">
                  </div>
                  <div class="xzoom-thumbs">
                    <a href="frontend/images/details-1.jpg">
                      <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                    </a>

                    <a href="frontend/images/details-1.jpg">
                      <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                    </a>

                    <a href="frontend/images/details-1.jpg">
                      <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                    </a>

                    <a href="frontend/images/details-1.jpg">
                      <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                    </a>

                    <a href="frontend/images/details-1.jpg">
                      <img src="frontend/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/details-1.jpg">
                    </a>
                  </div>
              </div>

              <h2>Tentang Wisata</h2>
              <p>
                Nusa Peninda is an island of indonesia`s island Bali and a
                district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Peninda is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.
              </p>
              <p>
                Bali and distinct from the mainland of Bali. The Badung Strait separates the island and Bali. The interior of Nusa Peninda is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali. There is very little tourist infrastructure.
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <img src="frontend/images/ic_event.png" alt="" class="features-image">
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Tari kecak</p>
                  </div>
                </div>
                
                <div class="col-md-4 border-left">
                  <img src="frontend/images/ic_bahasa.png" alt="" class="features-image">
                  <div class="description">
                    <h3>Language</h3>
                    <p>Bahasa Indonesia</p>
                  </div>
                </div>

                <div class="col-md-4 border-left">
                  <img src="frontend/images/ic_foods.png" alt="" class="features-image">
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Local Foods</p>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img src="frontend/images/members.png" alt=""  class="member-image">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%" >Date of Defarture</th>
                  <td width ="50%" class="text-right">
                    22 Agust 2019
                  </td>
                </tr>

                <tr>
                  <th width="50%" >Duration</th>
                  <td width ="50%" class="text-right">
                    4D 3N
                  </td>
                </tr>

                <tr>
                  <th width="50%" >Type</th>
                  <td width ="50%" class="text-right">
                    Open Trip
                  </td>
                </tr>

                <tr>
                  <th width="50%" >Price</th>
                  <td width ="50%" class="text-right">
                    $80,00 / person
                  </td>
                </tr>
              </table>
            </div>

            <div class="join-container">
              <a href=" {{ route('checkout') }} " class="btn btn-block btn-join-now mt-3 py-2">
                Join Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
<link
rel="stylesheet" href=" {{ url('frontend/libraries/xzoom/xzoom.css') }}"/>
@endpush

@push('addon-script')
<script src=" {{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }} "></script>
<script>
  $(document).ready(function(){
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        xoffset: 15
      });
  });
</script>
@endpush
