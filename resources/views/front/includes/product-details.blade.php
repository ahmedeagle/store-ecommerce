<div id="" class="modal fade quickview in quickview-modal-product-details-{{$product -> id}}" tabindex="-1" role="dialog" style="display: hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  data-product-id="{{$product -> id}}" data-dismiss="modal" aria-label="Close"><i class="material-icons close">close</i></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-md-5 col-sm-5 divide-right">
                        <div class="images-container bottom_thumb">
                            <div class="product-cover">
                                <img class="js-qv-product-cover img-fluid" src="{{$product -> images[0] -> photo ?? ''}}" alt="" title="" style="width:100%;" itemprop="image">
                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                    <i class="fa fa-expand"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <h1 class="product-name">{{$product ->  name}}</h1>

                        <div class="product-prices">
                            <div class="product-price " itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                                <div class="current-price">
                                     <span itemprop="price"
                                          class="price">{{$product -> special_price ?? $product -> price }}</span>
                                    @if($product -> special_price)
                                        <span
                                            class="regular-price">{{$product -> price}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="tax-shipping-delivery-label">
                                Tax included
                            </div>
                        </div>

                        <div id="product-description-short" itemprop="description"><p> {!!  $product -> description !!}</p></div>
                        <div class="product-actions">
                            <form action="" method="post" id="add-to-cart-or-refresh">
                               @csrf
                                <input type="hidden" name="id_product" value="{{$product -> id }}" id="product_page_product_id">
                                 <div class="product-add-to-cart in_border">
                                    <div class="add">
                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
                                            <div class="icon-cart">
                                                <i class="shopping-cart"></i>
                                            </div>
                                            <span>Add to cart</span>
                                        </button>
                                    </div>

                                     <a class="addToWishlist  wishlistProd_22" href="#"
                                        data-product-id="{{$product -> id}}"
                                     >
                                         <i class="fa fa-heart"></i>
                                         <span>Add to Wishlist</span>
                                     </a>

                                    <div class="clearfix"></div>

                                    <div id="product-availability" class="info-stock mt-20">
                                        <label class="control-label">Availability:</label>
                                        {{$product -> in_stock ? 'in stock' : 'out of stock'}}
                                     </div>
                                    <p class="product-minimal-quantity mt-20">
                                    </p>
                                </div>

                            </form>
                        </div>

                        <div class="tabs">

                            <div class="seller_info">

                                <div class="average_rating">
                                    <a href="http://demo.bestprestashoptheme.com/savemart/en/jmarketplace/2_taylor-jonson/comments" title="View comments about Taylor Jonson">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        (0)
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="dropdown social-sharing">
                            <button class="btn btn-link" type="button" id="social-sharingButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share With :</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                                <a class="dropdown-item" href="http://www.facebook.com/sharer.php?u=http://demo.bestprestashoptheme.com/savemart/en/home-appliance/6-nullam-tempor-orci-eu-pretium.html" title="Share" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Nullam tempor orci eu pretium http://demo.bestprestashoptheme.com/savemart/en/home-appliance/6-nullam-tempor-orci-eu-pretium.html" title="Tweet" target="_blank"><i class="fa fa-twitter"></i>Tweet</a>
                                <a class="dropdown-item" href="https://plus.google.com/share?url=http://demo.bestprestashoptheme.com/savemart/en/home-appliance/6-nullam-tempor-orci-eu-pretium.html" title="Google+" target="_blank"><i class="fa fa-google-plus"></i>Google+</a>
                                <a class="dropdown-item" href="http://www.pinterest.com/pin/create/button/?media=http://demo.bestprestashoptheme.com/savemart/49/nullam-tempor-orci-eu-pretium.jpg&amp;url=http://demo.bestprestashoptheme.com/savemart/en/home-appliance/6-nullam-tempor-orci-eu-pretium.html" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i>Pinterest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
