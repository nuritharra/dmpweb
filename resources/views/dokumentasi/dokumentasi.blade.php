@extends('template')

@section('content')

<div class="container" style="margin-bottom:40px;">
  <div class="row">
    <div class="container">

      @foreach($dokumentasi as $dokumentasi_list)
      <div class="container mySlides col-md-12 col-lg-12" >
        <div class="col-md-3 col-lg-3">
          <div class="info-box bg-orange" style="height:500px; font-family:Hind; margin-top:20px;">
            <div class="info-box-content" style="margin-left:10px; margin-right:10px;">
              <span><h5 style="margin-top:20px;"><b>{{ $dokumentasi_list->judul_foto }} </b></h5></span><br>
              <div class="container" style="height:300px; width:220px; font-family:Hind">
                <p>{{ $dokumentasi_list->keterangan_foto }}</p><br>
                <p>{{ $dokumentasi_list->tanggal }}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-9" style="margin-top:20px;">
          <img src="{{ $dokumentasi_list->foto }}" style="height:500px; width:850px;">
          <div class="row">
            <div class="container">
              <a class="w3-btn-floating w3-display-left w3-opacity-off" onclick="plusDivs(-1)" style="margin-left:20px; opacity: 0.2;">&#10094;</a>
              <a class="w3-btn-floating w3-display-right w3-opacity-off" onclick="plusDivs(1)" style="margin-right:20px; opacity: 0.2;">&#10095;</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <script>
      var myIndex = 0;
      carousel();

      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 10000); // Change image every 10 seconds
      }

      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
      }
      </script>
    </div>
  </div>
</div>
<div class="row" style="font-family:Montserrat; font-size:20px;">
  <div class="container">
    @foreach ($quotes as $quote_list)
    <marquee behavior="scroll" direction="left" style="text-transform:uppercase; color:#FF851B"><b>{{ $quote_list->quote }}</b></marquee>
    @endforeach
  </div>
</div>
@endsection
