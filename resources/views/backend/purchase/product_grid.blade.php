<div class="product_grid" id="products">
    @foreach ($products as $item)
        @php
            $info = [
                'id' => $item->id,
                'quantity' => 1,
                'total_price' => $item->latest_price->purchase_price,
                'name' => $item->name,
                'available_qty' => $item->stock->available_qty,
                'purchase_price' => $item->latest_price->purchase_price,
                'image' => $item->image,
            ];
        @endphp
        <div class="item" id="{{ $item->id }}" info='@json($info)'>
            <div class="image">
                <img src="{{ asset($item->image) }}" alt="">
            </div>
            <div class="description">
                <p>{{ $item->name }}</p>
                <strong>{{ @$item->latest_price->purchase_price }}TK</strong>
            </div>
            <p class="text-center px-1">
                Stock:
                @if ($item->stock->available_qty <= 0)
                    <span class="badge bg-danger">{{ $item->stock->available_qty }}</span>
                @else
                    <span class="badge bg-primary">{{ $item->stock->available_qty }}</span>
                @endif
            </p>
        </div>
    @endforeach
</div>
<hr>
<div class="col-md-12 my-4" id="p_pagin">
    {{ $products->links('pagination::bootstrap-5') }}
</div>