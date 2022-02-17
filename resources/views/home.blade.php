@extends('guest.layout.base')

@section('documentTitle')
    Home
@endsection
    
@section('content')
    <main>
        <h1>Pagina principale</h1>
      {{-- <div class="top">
          <div class="jumbotron">
              <div class="container relative">
                  <div class="title">
                    <h2>Current Series</h2>
                  </div>
              </div>
          </div>
          
          <div class="top-b">
              <div class="container">
              <div class="products">
                  <Product
                  v-for="(product, index) in products" :key="index"
                  :src="product.thumb"
                  :alt="product.series"
                  :series="product.series"
                  />
              </div>
          </div>
          </div>
      </div>
      <div class="bottom">
          <div class="container">
              <ul>
                  <li>
                      <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="Digital comics">
                      <span>Digital comics</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="Digital comics">
                      <span>dc merchandise</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="Digital comics">
                      <span>subscription</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Digital comics">
                      <span>comic shop locator</span>
                  </li>
                  <li>
                      <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="Digital comics">
                      <span>dc power visa</span>
                  </li>
              </ul>
          </div>
      </div> --}}
  </main>

</body>
</html>
@endsection