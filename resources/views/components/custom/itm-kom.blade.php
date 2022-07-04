@if ($side == 'front')
    <div class="row mb-sm-3 mb-4 mx-md-3 mx-4 shadow-mobile rounded ">
        <div class="col-sm-3 my-auto">
            <img src="{{ $url }}" alt="" class="img-komunitas rounded">
        </div>
        <div class="col-sm-9 my-auto h-100">
            <div class="item-kom shadow-desktop">
               <h5 class="mb-0 my-title">{{ $title }}</h5> 
            </div>

        </div>

    </div>
@else
    <div class="row mb-3 mx-md-3 mx-4 shadow-mobile rounded">
        <div class="col-sm-9 my-auto order-sm-1 order-2 h-100">
            <div class="item-kom shadow-desktop">
                <h5 class="mb-0 my-title">{{ $title }}</h5> 
            </div>

        </div>
        <div class="col-sm-3 my-auto order-sm-2 order-1">
            <img src="{{ $url }}" alt="" class="img-komunitas rounded">
        </div>
    </div>
@endif
