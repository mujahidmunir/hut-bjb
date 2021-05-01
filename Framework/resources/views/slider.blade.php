@extends('master.master')
@section('content')
    <section class="featured-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">Featured Products</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
						'dots': false,
						'nav': true
					}">
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-10.jpg" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">20% Off</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-3.jpg" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">30% Off</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-13.jpg" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-2.jpg" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">40% Off</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-8.jpg" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">15% Off</div>
                        </div>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-1.jpg" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal">ADD TO CART</button>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div><!-- End .product-details -->
                </div>
            </div><!-- End .featured-proucts -->
        </div>
    </section>
@endsection
