@extends('layout.app')
@section('content')
<section class="home-section">
    <div class="home-kiri">
      <img src="{{ Vite::asset('/resources/image/kiri.jpg') }}" width="600" height="400" alt="">
      <p>Official pre-release event by 99clover on 2 DEC 2023.
      You all have been asking for it for forever and after 2 years
      the iconic CLOVER VISION hoodie is remade with the new
      upgraded quality & sizing. Hoodies and tee's will be
      released online with a official pre-release event
      at star's.wardrobe</p>
      </div>
      <div class="home-kanan">
          <img src="{{ Vite::asset('/resources/image/kanan.jpg') }}" width="600" height="400">
          <div class="button-container"></div>
          <button><a href="barangs">SHOP NOW</a></button>
      </div>
  </section>
@endsection
