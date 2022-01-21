@if ($side == 'front')
    <div class="row mb-5">
        <div class="col-3 my-auto">
            <img src="{{ $url }}" alt="" class="img-komunitas">
        </div>
        <div class="col-9 my-auto">
            <div class="item-kom">
               <h4 class="mb-0 my-title">{{ $title }}</h4> 
            </div>

        </div>

    </div>
@else
    <div class="row mb-5">
        <div class="col-9 my-auto">
            <div class="item-kom">
                <h4 class="mb-0 my-title">{{ $title }}</h4> 
            </div>

        </div>
        <div class="col-3 my-auto">
            <img src="{{ $url }}" alt="" class="img-komunitas">
        </div>
    </div>
@endif
