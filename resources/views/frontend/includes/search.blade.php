<div class="search__area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="search__inner">
                    <form onsubmit="return setAction(this)">
                        <input class="search_all" placeholder="Search here... " type="text">
                        <div class="search_list">

                        </div>
                        <button type="submit"></button>
                    </form>
                  
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group search__inner">
                    <div class="form-outline">
                        <form action="{{ Route('filtersearch') }}" method="post">
                            @csrf
                            <select class="form-select" name="seccategory" required>
                                <option value='' selected>Select Category</option>
                                @foreach($cat as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->categories  }}</option>
                                @endforeach
                            </select>
                            <input type="number" name="pricerange">
                            <input type="submit" class="btn btn-primary" value="Search">
                        </form> 
                    </div>
                </div>
                <div class="search__close__btn">
                        <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                    </div>
            </div>
        </div>
    </div>
</div>