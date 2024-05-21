<section class="blog-area rel z-1">
    <div class="for-bgc-black pt-130 pb-100 rpt-100 rpb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">News & Blog</span>
                        <h2>Latest News & <span>Blog</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @isset($blogs)
                    @foreach ($blogs as $blog)
                        <div class="col-lg-6">
                            <div class="blog-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img width="290" height="330" style="object-fit: cover;" src="{{ asset("storage/$blog->banner") }}" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta mb-35">
                                        <a class="tag" href="{{ url("/blogs/category/" . $blog->blogCategory->slug) }}" wire:navigate>{{ $blog->blogCategory->category_name }}</a>
                                    </div>
                                    <h5><a href="{{ url("/blog/$blog->slug") }}" wire:navigate>{{ $blog->title }}</a></h5>
                                    <hr>
                                    <div class="blog-meta mt-35">
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
    <div class="bg-lines">
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
    </div>
</section>