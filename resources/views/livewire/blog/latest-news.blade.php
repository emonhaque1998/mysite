<div class="widget widget-recent-news wow fadeInUp delay-0-2s">
    <h4 class="widget-title">Latest News</h4>
    <ul>
        @isset($blogs)
            @foreach ($blogs as $blog)
                <li>
                    <div class="image">
                        <img width="65" height="65" style="object-fit: cover;" src="{{ asset("storage/$blog->banner") }}" alt="News">
                    </div>
                    <div class="content">
                        <div class="blog-meta mb-5">
                            <a class="date" href="#" wire:click.prevent><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format("M d, Y") }}</a>
                        </div>
                        <h5><a href="{{ url("/blog/$blog->slug") }}">{{ $blog->title }}</a></h5>
                    </div>
                </li>
            @endforeach
        @endisset
    </ul>
</div>