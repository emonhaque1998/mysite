<div class="content">
    <div class="next-prev-post pt-50 pb-20 wow fadeInUp delay-0-2s">
        @isset($blogs)
            @foreach ($blogs as $blog)
                <div class="post-item">
                    <div class="image">
                        <img width="60" height="60" style="object-fit: cover;" src="{{ asset("storage/$blog->banner") }}" alt="Post">
                    </div>
                    <div class="post-content">
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            <a href="#" wire:click.prevent>{{ $blog->created_at->format("M d, Y") }}</a>
                        </span>
                        <h6><a href="{{ url("/blog/$blog->slug") }}">{{ $blog->title }}</a></h6>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</div>
