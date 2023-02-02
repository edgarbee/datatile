@foreach($category_tree as $category)
    @php $trans =  $category->categoryTranslations->where('lang_id',$lang_id)->first();@endphp
    @if($trans != null)
        <li class="category-item-wrapper list-item-menu">
            @php $nameChain = $nameChain .'/'. $trans->slug @endphp

            <a href="{{route("binshopsblog.view_category",[$locale, $nameChain ])}}"> {{$trans->category_name}} </a>
                @if( count($category->siblings) > 0)
                <ul class="submenu">
                    @include("partials._category_partial", [
                    'category_tree' => $category->siblings,
                    'name_chain' => $nameChain
                    ])
                 </ul>
                     @endif
                 </span>
            
        </li>
    @endif
@endforeach
