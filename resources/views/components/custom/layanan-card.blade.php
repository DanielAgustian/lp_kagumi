<div class="col-lg-2 col-md-3 col-6">
    @if ($color == 'red')
        <div class="layanan red card">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h5 class="title-layanan text-center">{{ $title }}</h5>
                    <img src="{{ $url }}" alt="" class="img-layanan">
                </div>

            </div>
        </div>
    @else
        <div class="layanan white card">
            
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center h-100">
                    <img src="{{ $url }}" alt="" class="img-layanan">
                    <h6 class="title-layanan text-center">{{ $title }}</h6>
                </div>
                
            </div>
        </div>
    @endif
</div>
