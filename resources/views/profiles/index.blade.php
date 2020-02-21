@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="https://cdn.iconscout.com/icon/free/png-256/league-of-legends-4-599442.png" width="90%"
        class="rounded-circle" alt="logo">
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>
        <a href="#">Add New Post</a>
      </div>
      <div class="d-flex">
        <div class="pr-5"><strong>37k</strong> followers</div>
        <div class="pr-5"><strong>245</strong> posts</div>
        <div class="pr-5"><strong>164</strong> following</div>
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
  </div>
  <div class="row pt-4">
    <div class="col-4">
      <img
        src="https://instagram.fyyc4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=instagram.fyyc4-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=Z0xswacDMToAX-hdNOw&oh=c91c1218d1deda6c57d2104d6f50b7f1&oe=5EFC0CA4"
        class="w-100" alt="">
    </div>
    <div class="col-4">
      <img
        src="https://instagram.fyyc4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.106.921.921a/s640x640/84770545_2609265086061431_6387769783591162166_n.jpg?_nc_ht=instagram.fyyc4-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=wzD-rtA33d0AX8ceSAi&oh=e26c7aa180fd62799732cbd4bc26e09b&oe=5EC4FDED"
        class="w-100" alt="">
    </div>
    <div class="col-4">
      <img
        src="https://instagram.fyyc4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.111.928.928a/s640x640/82967728_222124025469517_5532436576170466152_n.jpg?_nc_ht=instagram.fyyc4-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=LwggUpUFA3AAX9Ze19a&oh=998a39832893409eba26e1d96d653792&oe=5EC3C23B"
        class="w-100" alt="">
    </div>
  </div>

</div>
@endsection
