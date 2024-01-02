<div class="col-md-6 col-xl-4 col-12 pt-3  justify-content-around d-flex">
    <div class="card h-100 w-100" data-v-4774726c=""><div class="embed-responsive embed-responsive-16by9" data-v-4774726c="">
            <img class="card-img-top embed-responsive-item" src="{{ $category->image }}" alt="Category Image" data-v-4774726c="">
        </div>
        <div class="card-body" data-v-4774726c="">
            <form method="GET" action="{{ route('category', $category->id) }}">
                @csrf
                <input type="hidden" name="category_id" value="{{ $category->id }}">
                <input type="submit" style="cursor: pointer; background: none; border: none; margin-bottom: 20px; font-size: 20px;"  data-v-4774726c="" value="{{ $category->name }}">
            </form>
            <p class="card-text font-italic" data-v-4774726c="">{{ $category->description }}</p>
            <a href="{{ route('category', $category->id) }}" id="edit-category" class="" data-v-4774726c="" style="display: none;"> Edit </a>
        </div>
    </div>
</div>
