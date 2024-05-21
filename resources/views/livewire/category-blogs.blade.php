<div>

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s"> Blogs - {{ $slug }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}" wire:navigate>Home</a></li>
                        <li class="breadcrumb-item"> <a href="{{ route("blogs") }}" wire:navigate>Blogs</a></li>
                        <li class="breadcrumb-item active"> {{ $slug }}</li>
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


    <!-- Blog Standard Area start -->
    <section class="blog-standard-area pb-70 rpb-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-standard-wrap">
                        <div class="row">
                            @isset($blogs)
                                @foreach ($blogs as $blog)
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img width="380" height="270" style="object-fit: cover;" src="{{ asset("storage/$blog->banner") }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ url("/blogs/category/" . $blog->blogCategory->slug) }}">{{ $blog->blogCategory->category_name }}</a>
                                            </div>
                                            <h5><a href="{{ url("/blog/$blog->slug") }}" wire:navigate>{{ $blog->title }}</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#" wire:click.prevent><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format("M d, Y") }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar rmt-65">
                        <div class="widget widget-search wow fadeInUp delay-0-2s">
                            <h4 class="widget-title">Search</h4>
                            <form class="default-search-form">
                                <input type="text" wire:keyup="searchBlog" wire:model="searchValue" placeholder="Keywords" required>
                                <button type="submit" class="searchbutton far fa-search"></button>
                            </form>
                        </div>

                        <livewire:blog.category />

                        <livewire:blog.latest-news lazy />

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
    <!-- Blog Standard Area end -->

</div>
