<div class="row">
    <div class="col-md-6">
        @foreach($col1 as $item)
            @include($item->getViewName(), ['element' => $item])
        @endforeach
    </div>
    <div class="col-md-6">
        @foreach($col2 as $item)
            @include($item->getViewName(), ['element' => $item])
        @endforeach
    </div>
</div>