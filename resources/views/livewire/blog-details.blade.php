<div>
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h3 class="page-title wow fadeInUp delay-0-2s"> {{ $blog->title }}</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}" wire:navigate>Home</a></li>
                        <li class="breadcrumb-item active"> {{ $blog->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="bg-lines">
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
        </div>
    </section>
    <!-- Page Banner End -->


    <!-- Blog Details Area start -->
    <section class="blog-details-area pb-70 rpb-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="content mt-35">
                            <div class="blog-meta mb-30 wow fadeInUp delay-0-2s">
                                <a class="tag" href="{{ url("/blogs/category/" . $blog->blogCategory->slug) }}">{{ $blog->blogCategory->category_name }}</a>
                            </div>
                            <div class="author-date-share mb-40 wow fadeInUp delay-0-4s">
                                @isset($blog->user->avater)
                                    <div class="author">
                                        <img width="60" height="60" src="{{ asset("storage/" . $blog->user->avater ) }}" alt="Author">
                                    </div>
                                @endisset
                                <div class="text">
                                    <span>Post By</span>
                                    <h5>{{ $blog->user->name }}</h5>
                                </div>
                                <div class="text">
                                    <span>Published</span>
                                    <h5>{{ $blog->created_at->format("M d, Y") }}</h5>
                                </div>
                                <a href="#" wire:click.prevent class="details-btn"><i class="far fa-share-alt"></i></a>
                            </div>
                        </div>
                        <div class="image mb-35 wow fadeInUp delay-0-5s">
                            <img src="{{ asset("storage/$blog->banner") }}" alt="Blog Details">
                        </div>
                        <div class="content wow fadeInUp delay-0-2s">
                            <p class="big-letter">{{ $blog->description }}</p>
                            <blockquote>
                                {{ $blog->qutation_title }}
                                <span class="blockquote-footer">{{ $blog->user->name }}</span>
                            </blockquote>
                        </div>
                        <div class="row gap-20">
                            @foreach ($blog->images as $image)
                                <div class="col-md-6">
                                    <div class="image mb-20 wow fadeInUp delay-0-2s">
                                        <img src="{{ asset("storage/$image") }}" alt="Blog Middle">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="content mt-30 wow fadeInUp delay-0-2s">
                            <h4>{{ $blog->last_title }}</h4>
                            <p>{{ $blog->last_description }}</p>
                            <div class="tag-share mt-45 py-30 wow fadeInUp delay-0-2s">
                                <div class="item">
                                    <b>Category</b>
                                    <div class="tag-coulds">
                                        <a href="{{ url("/blogs/category/" . $blog->blogCategory->slug ) }}">{{ $blog->blogCategory->category_name }}</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <b>Share</b>
                                    <div class="social-style-one">
                                        <a href="{{ $facebookShare }}"
                                        target="_blank"
                                        rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $twiterShare }}" target="_blank"
                                        rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-comment mt-50 wow fadeInUp delay-0-2s">
                            <div class="comment-body">
                                @isset($blog->user->avater)
                                    <div class="author-thumb">
                                        <img src="{{ asset("storage/" . $blog->user->avater) }}" alt="Author">
                                    </div>
                                @endisset
                                <div class="content">
                                    <h5>{{ $blog->user->name }}</h5>
                                    <p>{{ $blog->user->bio }}</p>
                                    @isset($contact)
                                        <div class="social-style-two mt-5">
                                            <a href="{{ $contact->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ $contact->twiter }}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{ $contact->linkdin }}"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="{{ $contact->instragram }}"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    @endisset
                                </div>
                            </div>
                        </div>
                        <livewire:blog.last-two-blogs >
                        <div class="content mt-65">
                            <h3 class="comment-title">Comments</h3>
                            @isset($blog->comment)
                                @foreach ($blog->comment as $comment)
                                    <div class="comment-body wow fadeInUp delay-0-2s">
                                        <div class="author-thumb">
                                            <img width="50" src="{{ asset("assets/images/favicon.png") }}" alt="Author">
                                        </div>
                                        <div class="content">
                                            <ul class="blog-meta">
                                                <li>
                                                    <h6>{{ $comment->name }}</h6>
                                                </li>
                                                <li>
                                                    <a href="#" wire:click.prevent>{{ $comment->created_at->format("M d, Y") }}</a>
                                                </li>
                                            </ul>
                                            <p>{{ $comment->text }}</p>
                                            {{-- <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a> --}}
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                            {{-- <div class="comment-body comment-child wow fadeInUp delay-0-2s">
                                <div class="author-thumb">
                                    <img src="assets/images/blog/comment-author2.jpg" alt="Author">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li>
                                            <h6>James M. Stovall</h6>
                                        </li>
                                        <li>
                                            <a href="#">May 25, 2023</a>
                                        </li>
                                    </ul>
                                    <p>At vero eoset accusamus dignissimos ducimus blanditiis sapiente praesentium voluptatum deleniti atque</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="content">
                            <form id="comment-form" class="comment-form form-style-one pt-65 pb-55 mt-55 wow fadeInUp delay-0-2s" name="comment-form" wire:submit="save">
                                <h5>Leave a Reply</h5>
                                <div class="row mt-30">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="full-name" wire:model.live="name" class="form-control" value="" placeholder="Full Name" required="">
                                            <label for="full-name" class="for-icon"><i class="far fa-user"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email-address" wire:model.live="email" class="form-control" value="" placeholder="Email Address" required="">
                                            <label for="email-address" class="for-icon"><i class="far fa-envelope"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea wire:model.live="text" id="message" class="form-control" rows="4" placeholder="write message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Leave A Reply <i class="far fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar rmt-65">
                        <div class="widget widget-search wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Search</h4>
                            <form action="#" wire:click.prevent class="default-search-form">
                                <input type="text" placeholder="Keywords" required>
                                <button type="submit" class="searchbutton far fa-search"></button>
                            </form>
                        </div>
                        <livewire:blog.category />

                        <livewire:blog.latest-news />
                        <div class="widget widget-cta wow fadeInUp delay-0-2s">
                            @isset($blogDetails->background_quete)
                            <div class="cta-widget" style="background-image: url({{ asset("storage/$blogDetails->background_quete") }});">
                                <span class="sub-title">Get A Quote</span>
                                <h4>{{ $blogDetails->title }}</h4>
                                <a href="{{ route("contact") }}" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                            </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
        </div>
    </section>
    <!-- Blog Details Area end -->
</div>
