<div class="col-md-6 col-xl-4 col-12 pt-3  justify-content-around d-flex">
    <div class="card h-100 w-100" data-v-0529f7cc="">
        <div class="embed-responsive embed-responsive-16by9" data-v-0529f7cc="">
            <img class="card-img-top embed-responsive-item" src="{{ $product->image }}" alt="Product Image" data-v-0529f7cc="">
        </div>
        <div class="card-body" data-v-0529f7cc="">
            <a href="{{ route('product', $product->id) }}" class="" data-v-0529f7cc="">
                <h5 class="card-title" data-v-0529f7cc="">{{ $product->name }}</h5>
            </a>
            <p class="card-text" data-v-0529f7cc=""><sup data-v-0529f7cc="">$</sup>{{ $product->price }}</p>
            <p class="card-text font-italic" data-v-0529f7cc="">{{ $product->brief }}</p>
            <a href="{{ route('product', $product->id) }}" id="edit-product" class="" data-v-0529f7cc="" style="display: none;"> Edit </a>
        </div>
    </div>
</div>
