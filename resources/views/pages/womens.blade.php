@extends('layouts.master')
@section('style')
{{ Html::style('css/myCss.css') }}
@endsection
@section('content')
<!-- banner -->
<div class="page-head">
    <div class="container">
        <h3>Women's Wear</h3>
    </div>
</div>
<!-- //banner -->
<!-- mens -->
<div class="men-wear">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="filter-price">
                <h3>Filter By Price</h3>
                <ul class="dropdown-menu6">
                    <li>
                        <div id="slider-range"></div>
                        <input type="text" id="amount"/>
                    </li>
                </ul>
                <script type="text/javascript" src="site/js/jquery-ui.js"></script>
            </div>
            <div class="css-treeview">
                <h4>Categories</h4>
                <ul class="tree-list-pad">
                    <li>
                        <input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Women's Wear</label>
                        <ul>
                            <li>
                                <input type="checkbox" id="item-0-0" /><label for="item-0-0">Ethinic Wear</label>
                                <ul>
                                    <li><a href="womens.html">Sarees</a></li>
                                    <li><a href="womens.html">Chudidars</a></li>
                                    <li><a href="womens.html">Wedges</a></li>
                                    <li><a href="womens.html">Tops</a></li>
                                    <li><a href="womens.html">Perfumes</a></li>
                                    <li><a href="womens.html">Caps</a></li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox"  id="item-0-1" /><label for="item-0-1">Party Wear</label>
                                <ul>
                                    <li><a href="womens.html">Sarees</a></li>
                                    <li><a href="womens.html">Chudidars</a></li>
                                    <li><a href="womens.html">Wedges</a></li>
                                    <li><a href="womens.html">Tops</a></li>
                                    <li><a href="womens.html">Perfumes</a></li>
                                    <li><a href="womens.html">Caps</a></li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox"  id="item-0-2" /><label for="item-0-2">Casual Wear</label>
                                <ul>
                                    <li><a href="womens.html">Sarees</a></li>
                                    <li><a href="womens.html">Chudidars</a></li>
                                    <li><a href="womens.html">Wedges</a></li>
                                    <li><a href="womens.html">Tops</a></li>
                                    <li><a href="womens.html">Perfumes</a></li>
                                    <li><a href="womens.html">Caps</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" id="item-1" checked="checked" /><label for="item-1">Best Collections</label>
                        <ul>
                            <li>
                                <input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">New Arrivals</label>
                                <ul>
                                    <li><a href="womens.html">Wedges</a></li>
                                    <li><a href="womens.html">Tops</a></li>
                                    <li><a href="womens.html">Perfumes</a></li>
                                    <li><a href="womens.html">Caps</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <input type="checkbox" checked="checked" id="item-2" /><label for="item-2">Best Offers</label>
                        <ul>
                            <li>
                                <input type="checkbox"  id="item-2-0" /><label for="item-2-0">Summer Discount Sales</label>
                                <ul>
                                    <li><a href="womens.html">Wedges</a></li>
                                    <li><a href="womens.html">Tops</a></li>
                                    <li><a href="womens.html">Perfumes</a></li>
                                    <li><a href="womens.html">Caps</a></li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" id="item-2-1" /><label for="item-2-1">Exciting Offers</label>
                                <ul>
                                    <li><a href="womens.html">Wedges</a></li>
                                    <li><a href="womens.html">Tops</a></li>
                                    <li><a href="womens.html">Perfumes</a></li>
                                    <li><a href="womens.html">Caps</a></li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" id="item-2-2" /><label for="item-2-2">Flat Discounts</label>
                                <ul>
                                    <li><a href="womens.html">Wedges</a></li>
                                    <li><a href="womens.html">Tops</a></li>
                                    <li><a href="womens.html">Perfumes</a></li>
                                    <li><a href="womens.html">Caps</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="community-poll">
                <h4>Community Poll</h4>
                <div class="swit form">
                    <form>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div>
                        </div>
                        <div class="check_box">
                            <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div>
                        </div>
                        <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 products-right">
            <h5>Product Compare(0)</h5>
            <div class="sort-grid">
                <div class="sorting">
                    <h6>Sort By</h6>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">Default</option>
                        <option value="null">Name(A - Z)</option>
                        <option value="null">Name(Z - A)</option>
                        <option value="null">Price(High - Low)</option>
                        <option value="null">Price(Low - High)</option>
                        <option value="null">Model(A - Z)</option>
                        <option value="null">Model(Z - A)</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>Showing</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">7</option>
                        <option value="null">14</option>
                        <option value="null">28</option>
                        <option value="null">35</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-top">
                <script src="site/js/responsiveslides.min.js"></script>
                <div  id="top" class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <img class="img-responsive" src="site/images/men21.jpg" alt=" "/>
                        </li>
                        <li>
                            <img class="img-responsive" src="site/images/men11.jpg" alt=" "/>
                        </li>
                        <li>
                            <img class="img-responsive" src="site/images/men21.jpg" alt=" "/>
                        </li>
                        <li>
                            <img class="img-responsive" src="site/images/men11.jpg" alt=" "/>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-bottom">
                <div class="col-sm-4 men-wear-left">
                    <img class="img-responsive" src="site/images/men31.jpg" alt=" " />
                </div>
                <div class="col-sm-8 men-wear-right">
                    <h4>Exclusive Women's Collections</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit. 
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/a1.png" alt="" class="pro-image-front">
                        <img src="site/images/a1.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">T shirt</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/w1.png" alt="" class="pro-image-front">
                        <img src="site/images/w1.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Wedges</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/w3.png" alt="" class="pro-image-front">
                        <img src="site/images/w3.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Hand Bag</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="single-pro">
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/w4.png" alt="" class="pro-image-front">
                        <img src="site/images/w4.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>                
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Hand Bag</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/w2.png" alt="" class="pro-image-front">
                        <img src="site/images/w2.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>                
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Sandals</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/ep3.png" alt="" class="pro-image-front">
                        <img src="site/images/ep3.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>                
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Watches</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/a5.png" alt="" class="pro-image-front">
                        <img src="site/images/a5.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>                
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">T shirts</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men yes-marg">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/g1.png" alt="" class="pro-image-front">
                        <img src="site/images/g1.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Dresses</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men yes-marg">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/a6.png" alt="" class="pro-image-front">
                        <img src="site/images/a6.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$129.99</span>
                            <del>$150.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men yes-marg">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/a7.png" alt="" class="pro-image-front">
                        <img src="site/images/a7.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Dresses</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$129.99</span>
                            <del>$150.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men yes-marg">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="site/images/a3.png" alt="" class="pro-image-front">
                        <img src="site/images/a3.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$119.99</span>
                            <del>$120.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="pagination-grid text-right">
            <ul class="pagination paging">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //mens -->
@endsection
@section('script')
{{ Html::script('js/mens.js')}}
@endsection
