@extends('master')

@section('navbar')


@section('content')

<!-- Baris pertama -->
<div class="container overflow-hidden">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">
         <p class="text-center fw-bold fs-1">All the Laptop you want</p>
         <p class="text-center fw-bold fs-1">Are here</p>
         <p class="text-center fs-3">Looking for a cheap but great laptop? Everything is here</p>
         <div class="d-grid gap-2 col-3 mx-auto">
             <button type="button" class="btn btn-dark btn-lg">Buy</button>
         </div>

         <p class="text-center fw-bold fs-3">Or</p>

         <div class="d-grid gap-2 col-3 mx-auto">
             <button type="button" class="btn btn-secondary btn-lg">Learn More</button>
         </div>

     </div>
    </div>
    <div class="col">
      <div class="p-3">
          <img class="rounded" style="width: 500px; height: 350px;" src="https://cdn.discordapp.com/attachments/832894458440843294/923205553277255710/jaycee-mariano--bh5joV8-GI-unsplash_1.jpg" alt="">
      </div>
    </div>
  </div>
</div> <br>

<!-- Baris ke dua -->
<div class="container overflow-hidden">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">
         <img class="d-grid gap-2 col-3 mx-auto" style="width: 75px; height: 75px;" src="https://cdn.discordapp.com/attachments/832894458440843294/923213246209613824/unknown.png" alt="">
         <p class="text-center fs-4">Easy for Work</p>
         <p class="text-center fs-5">Doing your work with multitasking</p>
     </div>
    </div>

    <div class="col">
      <div class="p-3">
      <img class="d-grid gap-2 col-3 mx-auto" style="width: 75px; height: 75px;" src="https://cdn.discordapp.com/attachments/832894458440843294/923213329982423090/unknown.png" alt="">
         <p class="text-center fs-4">Fast Storage Memory</p>
         <p class="text-center fs-5">Use of SSD with a very fast storage memory speed</p>
      </div>
    </div>
  </div>
</div> <br>

<!-- baris ke tiga -->
<div class="container overflow-hidden">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">
         <img class="d-grid gap-2 col-3 mx-auto rounded" style="width: 500px; height: 300px;" src="https://cdn.discordapp.com/attachments/832894458440843294/923216549328875560/image.png" alt="">
     </div>
    </div>

    <div class="col">
      <div class="p-3">
         <p class="text-start fw-bold fs-2">Laptop with a Wide Display</p> <br>
         <p class="text-start fs-5">Laptop with two screen display that can satisfy you.</p>
      </div>
    </div>
  </div>
</div>


@endsection


@section('footer')
