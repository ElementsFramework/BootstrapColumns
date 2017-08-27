<div class="row">
    <div class="col-md-{{ $options["column_1_width"] }}">
        @foreach($col1 as $item)
            @include($item->getViewName(), ['element' => $item])
        @endforeach
    </div>
    <div class="col-md-{{ $options["column_2_width"] }}">
        @foreach($col2 as $item)
            @include($item->getViewName(), ['element' => $item])
        @endforeach
    </div>
</div>