@extends('layouts.client')



@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="blog-left-sidebar.html">blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blog details audio post</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- blog main wrapper start -->
    <div class="blog-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2">
                    <aside class="blog-sidebar-wrapper">
                        <div class="blog-sidebar">
                            <h5 class="title">search</h5>
                            <div class="sidebar-serch-form">
                                <form action="#">
                                    <input type="text" class="search-field" placeholder="search here">
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h5 class="title">categories</h5>
                            <ul class="blog-archive blog-category">
                                <li><a href="#">Barber (10)</a></li>
                                <li><a href="#">fashion (08)</a></li>
                                <li><a href="#">handbag (07)</a></li>
                                <li><a href="#">Jewelry (14)</a></li>
                                <li><a href="#">food (10)</a></li>
                            </ul>
                        </div> <!-- single sidebar end -->
                        <div class="blog-sidebar">
                            <h5 class="title">Blog Archives</h5>
                            <ul class="blog-archive">
                                <li><a href="#">January (10)</a></li>
                                <li><a href="#">February (08)</a></li>
                                <li><a href="#">March (07)</a></li>
                                <li><a href="#">April (14)</a></li>
                                <li><a href="#">May (10)</a></li>
                            </ul>
                        </div> 
                   
                      
                    </aside>
                </div>
                <div class="col-lg-9 order-1">
                    <div class="blog-item-wrapper">
                        <!-- blog post item start -->
                        <div class="blog-post-item blog-details-post">
                            <figure class="blog-thumb ratio ratio-16x9">
                                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/501298839&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                            </figure>
                            <div class="blog-content">
                                <h3 class="blog-title">
                                    Celebrity Daughter Opens Up About Having Her Eye Color Changed
                                </h3>
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <div class="entry-summary">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis
                                        consequuntur illo aliquid nihil ad neque, debitis praesentium libero ullam
                                        asperiores exercitationem deserunt inventore facilis, officiis,</p>
                                    <blockquote>
                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur.
                                            venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed,
                                            cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin
                                            dictum
                                            tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque
                                            scelerisque.</p>
                                    </blockquote>
                                    <p>aliquam maiores asperiores recusandae commodi blanditiis ipsum tempora culpa
                                        possimus assumenda ab quidem a voluptatum quia natus? Ex neque, saepe
                                        reiciendis
                                        quasi velit perspiciatis error vel quas quibusdam autem nesciunt voluptas odit
                                        quis
                                        dignissimos eos aspernatur voluptatum est repellat. Pariatur praesentium,
                                        corrupti
                                        deserunt ducimus quo doloremque nostrum aspernatur saepe cupiditate sit autem
                                        exercitationem debitis, maiores vitae perferendis nemo? Voluptas illo, animi
                                        temporibus quod earum molestias eaque, iure rem amet autem dignissimos officia
                                        dolores numquam distinctio esse voluptates optio pariatur aspernatur omnis?
                                        Ipsam
                                        qui commodi velit natus reiciendis quod quibusdam nemo eveniet similique animi!</p>
                                    <div class="tag-line">
                                        <h6>Tag :</h6>
                                        <a href="#">Necklaces</a>,
                                        <a href="#">Earrings</a>,
                                        <a href="#">Jewellery</a>,
                                    </div>
                                    <div class="blog-share-link">
                                        <h6>Share :</h6>
                                        <div class="blog-social-icon">
                                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- comment area start -->
                        <div class="comment-section section-padding">
                            <h5>03 Comment</h5>
                            <ul>
                                <li>
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">Reply</a></span>
                                        <h5 class="comment-author">Admin</h5>
                                        <div class="comment-post-date">
                                            15 Dec, 2019 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li class="comment-children">
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">Reply</a></span>
                                        <h5 class="comment-author">Admin</h5>
                                        <div class="comment-post-date">
                                            20 Nov, 2019 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-avatar">
                                        <img src="assets/img/blog/comment-icon.png" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="#">Reply</a></span>
                                        <h5 class="comment-author">Admin</h5>
                                        <div class="comment-post-date">
                                            25 Jan, 2019 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                            adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- comment area end -->

                        <!-- start blog comment box -->
                        <div class="blog-comment-wrapper">
                            <h5>Leave a reply</h5>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="comment-post-box">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Comment</label>
                                            <textarea name="commnet" placeholder="Write a comment"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Name</label>
                                            <input type="text" class="coment-field" placeholder="Name">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Email</label>
                                            <input type="text" class="coment-field" placeholder="Email">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Website</label>
                                            <input type="text" class="coment-field" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <div class="coment-btn">
                                                <input class="btn btn-sqr" type="submit" name="submit" value="Post Comment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- start blog comment box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->
</main>
@endsection