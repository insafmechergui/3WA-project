@extends('layout')

@section('head')
    @include('inc.head',['title'=>'accueil'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
    <div class="wrapper">
        
        <section class="main-banner-sec overlay">
            <div class="container">
                <div class="banner-details text-center">
                    <h2>Find your future home</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <form>
                        <div class="form-field back-shd">
                            <input type="text" name="search" placeholder="Enter an address, neighborhood or city">
                            <button type="submit" class="search-btn"><i class="la la-search"></i></button>
                        </div><!--form-field end-->
                    </form>
                </div><!--banner-details end-->
            </div>
        </section><!--main-banner-sec end-->

        <section class="categories-sec sec-padding">
            <div class="container">
                <div class="sec-title text-center">
                    <h3>Categories</h3>
                </div><!--sec-title end-->
                <div class="categories-sec-details">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="category-info overlay">
                                <img src="assets/images/resources/img1.jpg" alt="">
                                <a href="#" title="" class="ext-link"></a>
                                <div class="category-details">
                                    <span><i class="la la-certificate"></i></span>
                                    <div class="cat-info">
                                        <h3><a href="#" title="">Featured</a></h3>
                                        <span>12 Listings</span>
                                    </div>
                                </div><!--category-details end-->
                            </div><!--category-info end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="category-info overlay">
                                <img src="assets/images/resources/img2.jpg" alt="">
                                <a href="#" title="" class="ext-link"></a>
                                <div class="category-details">
                                    <span><i class="la la-cutlery"></i></span>
                                    <div class="cat-info">
                                        <h3><a href="#" title="">Near Restaurants</a></h3>
                                        <span>7 Listings</span>
                                    </div>
                                </div><!--category-details end-->
                            </div><!--category-info end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="category-info overlay">
                                <img src="assets/images/resources/img3.jpg" alt="">
                                <a href="#" title="" class="ext-link"></a>
                                <div class="category-details">
                                    <span><i class="la la-shopping-cart"></i></span>
                                    <div class="cat-info">
                                        <h3><a href="#" title="">Shopping</a></h3>
                                        <span>10 Listings</span>
                                    </div>
                                </div><!--category-details end-->
                            </div><!--category-info end-->
                        </div>
                    </div>
                </div><!--categories-sec-details end-->
            </div>
        </section><!--categories-sec end-->

        <section class="sale-items-sec sec-padding">
            <div class="container-fluid">
                <div class="sec-title text-center">
                    <h3>Latest For sale</h3>
                </div><!--sec-title end-->
                <div class="sales-items">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img over_lay">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img4.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img5.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img6.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img7.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img8.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img9.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img10.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img">
                                    <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                        <img src="assets/images/resources/img11.jpg" alt="">
                                    </a>
                                    <span class="item-status">For Sale</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="11_Single_Properties_Standart.html" title="">Dramatic and Unique Condo</a></h3>
                                    <span>Reno Pl, San Francisco, CA 94133</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">$499,500</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                    </div>
                </div><!--sales-items end-->
            </div>
        </section><!--sale-items-sec end-->

        <section class="testimonails-sec sec-padding">
            <div class="container">
                <div class="sec-title text-center">
                    <h3>Testimonials</h3>
                </div><!--sec-title end-->
                <div class="testimonial-sec-details">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tes-img">
                                <img src="assets/images/resources/img12.jpg" alt="">
                            </div><!--tes-img end-->
                        </div>
                        <div class="col-lg-6">
                            <ul class="test-comment-list">
                                <li>
                                    <div class="test-comment">
                                        <div class="user-img">
                                            <img src="assets/images/resources/user1.png" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <ul>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                            </ul>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisielit quat ipsum, nec sagittis sem nibh id elit. Duis sed odio sitet nibh vulputate cursus a sit amet mauris. Morbi accumsan sum velit. Nam nec tellus a odio tincidunt auctor. </p>
                                            <h4>Angelika Gladkaya</h4>
                                        </div><!--comment-text end-->
                                    </div><!--test-comment end-->
                                </li>
                                <li>
                                    <div class="test-comment">
                                        <div class="user-img">
                                            <img src="assets/images/resources/user2.png" alt="">
                                        </div>
                                        <div class="comment-text">
                                            <ul>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                                <li><span><i class="la la-star"></i></span></li>
                                            </ul>
                                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. </p>
                                            <h4>Angelika Gladkaya</h4>
                                        </div><!--comment-text end-->
                                    </div><!--test-comment end-->
                                </li>
                            </ul><!--test-comment-list end-->
                        </div>
                    </div>
                </div><!--testimonial-sec-details end-->
            </div>
        </section><!--testimonails-sec end-->

        <section class="recent-posts-sec sec-padding">
            <div class="container-fluid">
                <div class="sec-title text-center">
                    <h3>Recent Posts</h3>
                </div><!--sec-title end-->
                <div class="posts-section">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="post-img">
                                            <a href="18_Blog_Gallery.html" title="" class="ext-link">
                                                <img src="assets/images/resources/img13.jpg" alt="">
                                            </a>
                                        </div><!--post-img end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="post-info">
                                            <h3><a href="18_Blog_Gallery.html" title="">Exlusive Rentals</a></h3>
                                            <span>December 15, 2019</span>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <a href="18_Blog_Gallery.html" title=""><i class="la la-arrow-right"></i></a>
                                        </div><!--post-info end-->
                                    </div>
                                </div>
                            </div><!--post end-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="post-img">
                                            <a href="18_Blog_Gallery.html" title="" class="ext-link">
                                                <img src="assets/images/resources/img14.jpg" alt="">
                                            </a>
                                        </div><!--post-img end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="post-info">
                                            <h3><a href="18_Blog_Gallery.html" title="">Exlusive Rentals</a></h3>
                                            <span>December 15, 2019</span>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <a href="18_Blog_Gallery.html" title=""><i class="la la-arrow-right"></i></a>
                                        </div><!--post-info end-->
                                    </div>
                                </div>
                            </div><!--post end-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="post-info">
                                            <h3><a href="18_Blog_Gallery.html" title="">Exlusive Rentals</a></h3>
                                            <span>December 15, 2019</span>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <a href="18_Blog_Gallery.html" title=""><i class="la la-arrow-right"></i></a>
                                        </div><!--post-info end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="post-img">
                                            <a href="18_Blog_Gallery.html" title="" class="ext-link">
                                                <img src="assets/images/resources/img15.jpg" alt="">
                                            </a>
                                        </div><!--post-img end-->
                                    </div>
                                </div>
                            </div><!--post end-->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="post-info">
                                            <h3><a href="18_Blog_Gallery.html" title="">Exlusive Rentals</a></h3>
                                            <span>December 15, 2019</span>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                            <a href="18_Blog_Gallery.html" title=""><i class="la la-arrow-right"></i></a>
                                        </div><!--post-info end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="post-img">
                                            <a href="18_Blog_Gallery.html" title="" class="ext-link">
                                                <img src="assets/images/resources/img16.jpg" alt="">
                                            </a>
                                        </div><!--post-img end-->
                                    </div>
                                </div>
                            </div><!--post end-->
                        </div>
                    </div>
                </div><!--posts-section end-->
            </div>
        </section><!--recent-posts-sec end-->

        <section class="team-sec sec-padding">
            <div class="container">
                <div class="sec-title text-center">
                    <h3>Our Team</h3>
                </div><!--sec-title end-->
                <div class="team-sec-details">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="team">
                                <div class="member-img">
                                    <a href="agent-profile.html" title="" class="ext-link">
                                        <img src="assets/images/resources/team1.jpg" alt="">
                                    </a>
                                </div><!--member-img end-->
                                <div class="team-info">
                                    <h3><a href="agent-profile.html" title="">Oliver Fauller</a></h3>
                                    <span>Moison Director</span>
                                    <p>Aenean sollicitudine lorem quisola biben dumuctora nisi elit consuam sagittisa. </p>
                                    <a href="agent-profile.html" title="" class="lnk-default">View Profile</a>
                                </div><!--team-info end-->
                            </div><!--team end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="team">
                                <div class="member-img">
                                    <a href="agent-profile.html" title="" class="ext-link">
                                        <img src="assets/images/resources/team2.jpg" alt="">
                                    </a>
                                </div><!--member-img end-->
                                <div class="team-info">
                                    <h3><a href="agent-profile.html" title="">Oliver Fauller</a></h3>
                                    <span>Moison Director</span>
                                    <p>Aenean sollicitudine lorem quisola biben dumuctora nisi elit consuam sagittisa. </p>
                                    <a href="agent-profile.html" title="" class="lnk-default">View Profile</a>
                                </div><!--team-info end-->
                            </div><!--team end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="team">
                                <div class="member-img">
                                    <a href="agent-profile.html" title="" class="ext-link">
                                        <img src="assets/images/resources/team3.jpg" alt="">
                                    </a>
                                </div><!--member-img end-->
                                <div class="team-info">
                                    <h3><a href="agent-profile.html" title="">Oliver Fauller</a></h3>
                                    <span>Moison Director</span>
                                    <p>Aenean sollicitudine lorem quisola biben dumuctora nisi elit consuam sagittisa. </p>
                                    <a href="agent-profile.html" title="" class="lnk-default">View Profile</a>
                                </div><!--team-info end-->
                            </div><!--team end-->
                        </div>
                    </div>
                </div><!--team-sec-details end-->
            </div>
        </section><!--recent-posts-sec end-->

        <section class="subscribe-sec">
            <div class="container">
                <div class="subscribe-sec-details">
                    <h3>Find your perfect home</h3>
                    <a href="#" title="" class="lnk-default">Search NOW</a>
                </div><!--subscribe-sec-details end-->
            </div>
        </section><!--subscribe-sec end-->
       
</div>
@endsection

        @section('footer')
            @include('inc.footer')

        @endsection



