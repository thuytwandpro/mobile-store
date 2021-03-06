@extends('layouts.guests')

@section('content')
    <div class="clear"></div>
    <div class="search-result">
        <h4 style="font-size: 2em; color: #575757;">Kết quả tìm kiếm :</h4>

        @if(!empty($products))
            @foreach($products as $product)
                <a href="{{route('guests.product_detail', $product->slug)}}">
                    <div class="search-content">
                        <div class="search-image">
                            <img src="{{asset($product->picture['0'])}}" width="150px" height="150px">
                        </div>
                        <div class="search-info">
                            <div class="brand-value">
                                <h3>{{$product->name}}</h3>
                                <div class="search-product-detail">
                                    <ul>
                                        <li>Giá:</li>
                                        @if(isset($product->promotion))
                                            <li><span style="text-decoration: line-through">{{number_format($product->price,0 ,',','.')}} VND</span></li>
                                            <li>
                                                <h5>{{number_format($product->price - ($product->price * $product->promotion / 100) , 0 ,',','.')}}
                                                    VND</h5></li>
                                        @else <h5>{{number_format($product->price,0 ,',','.')}} VND</h5>
                                        @endif
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </a>
            @endforeach
        @else
            <h2>Không có sản phẩm nào phù hợp</h2>
        @endif
        <div class="pagination">
            {{$products->appends(Request::except('page'))->links()}}
        </div>
    </div>

    <div class="clear"></div>
@endsection

