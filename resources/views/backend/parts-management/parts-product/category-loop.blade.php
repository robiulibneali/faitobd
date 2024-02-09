@foreach($partsBrandCategory->partsBrandCategories as $index => $subCategory)

    <option value="{{ $subCategory->id }}" {{ isset($partsProduct) && $partsProduct->parts_brand_category_id == $subCategory->id ? 'selected' : '' }} >
        @for($i = 0; $i <= $child; $i++)
            {{ '>' }}
        @endfor
        {{ $subCategory->name }}
    </option>
    @if(!empty($subCategory))
        @if(count($partsBrandCategory->partsBrandCategories) > 0)
            @include('backend.parts-management.parts-product.category-loop', ['partsBrandCategory' => $subCategory, 'child' => $child + $child])
        @endif
    @endif
@endforeach
