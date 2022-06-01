{{-- products --}}

<div class="product_grid" id="products">
    @foreach ($products as $item)
        @php
            $info = [
                'name' => $item->name,
                'sell_price' => $item->latest_price->sell_price,
                'image' => $item->image,
            ];
        @endphp
        <div class="item" info='@json($info)'>
            <div class="image">
                <img src="{{ asset($item->image) }}" alt="">
            </div>
            <div class="description">
                <p>{{ $item->name }}</p>
                <strong>{{ @$item->latest_price->sell_price }}</strong>
            </div>
        </div>
    @endforeach
</div>

<script>
$('.item').click(function() {
    let info = $(this).attr('info');
    add_item(JSON.parse(info));
});
</script>