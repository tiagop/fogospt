@extends('app')

@push('head')
    <link rel="stylesheet" href="/css/vendor/leaflet-openweathermap.css">
@endpush

@section('content')
    <main role="main" class="mb-auto">
        @include('includes.sidebar')
        <div id="map">
            <a href="http://mapbox.com/about/maps" class='mapbox-wordmark' target="_blank">Mapbox</a>
        </div>
    </main>

    <div id="warning-site" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aviso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/2.4.1/mapbox-gl.js" integrity="sha512-sbT60T8AS2DW+q6hiN+PM/389c9ZYGd1gZ7TvF7mhKsypzZLQ6E81lC6eB/ZQ30LnBdxB0uodYfuOsaFoZixEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/2.4.1/mapbox-gl.min.js" integrity="sha512-NTZ4yfDV+hnycF2x28e43icmAkkDWZ6b+RXZQJkyUGKA78WQb0gIuv7RKF8W+5XAKunxzzJq4i8FD2L04h9O1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>

    <script src="https://unpkg.com/mapbox-gl-leaflet/leaflet-mapbox-gl.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="/js/concelhos.js"></script>
    <script src="/js/portugal.js"></script>
    <script src="/js/vendor/leaflet-openweathermap.js"></script>
    <script src="/js/vendor/store2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="/js/main-other.js"></script>

@endpush
