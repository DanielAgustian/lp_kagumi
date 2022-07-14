<div class="col-lg-3 col-md-4 col-6 {{$order}} mb-lg-0 mb-3 ">
    @if ($color == 'red')
        <div class="layanan homepage red card " style="cursor: pointer" data-id="{{$id}}">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h5 class="title-layanan text-center">{{ $title }}</h5>
                    <img src="{{ $url }}" alt="" class="img-layanan">
                </div>

            </div>
        </div>
    @else
        <div class="layanan homepage white card shadow " style="cursor:pointer" data-id="{{$id}}">
            
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center h-100">
                    <img src="{{ $url }}" alt="" class="img-layanan">
                    <h5 class="title-layanan text-center">{{ $title }}</h5>
                </div>
                
            </div>
        </div>
    @endif
</div>
