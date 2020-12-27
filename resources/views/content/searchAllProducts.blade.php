@extends('master')
@section('main-content')
<div class="row mb-5">
    <div class="col-md-12 mb-3">
        <h1 class="display-4">Explorer our newst products.</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="{{route('search')}}" method="GET" autocomplete="off">
            {{csrf_field()}}
            <label class="form-label" for="searchField">Search for products:</label><br>
            <div class="form-group d-flex">
                <input class="form-control" size="40" type="text" name="search" class="search" id="searchField">
                <div id="products"></div>
                <input class="submit-btn btn btn-primary" type="submit" name="submit" value="Search">
            </div>
        </form>
    </div>
</div>
<div class="row">
    @if($products->count() == 0)
        <div class="col-md-12">
            <p><i>There is no results for <ins>{{request()->input('search')}}</ins> ... </i></p>
            <p><i>Please try to search something else!</i></p>
        </div>
    @endif
    @foreach($products as $product)
        <div class="col-lg-4 p-3">
            <div class="card p-2">
                <img class="card-img-top products-img" width="100%" height="350" src="{{asset('../resources/images/' . $product->image)}}" loading="lazy" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{!! Str::limit($product->article, 110, ' ...') !!}... <a href="{{url('shop/products/'.$product->url)}}" class="pl-2">Read More</a></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('specielScripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $('#searchField').keyup(function(){
        let query = $(this).val();
        if(query != ''){
            let _token =$('input[name="_token"]').val();
            $.ajax({
                url: "all-products/fetch",
                type: "post",
                data: { search: query,_token:_token },
                success: function (response) {
                    if (response) {
                        var availableTags = [];
                        $.each(JSON.parse(response), function (key, value) {
                            availableTags.push(value.title);
                        });
                        $('#searchField').autocomplete({
                            source: availableTags,
                            select: function (event, ui) {
                                $('.submit-btn').click();
                            }
                        });
                    }
                }
            });
        }
    });
</script>
@endsection
