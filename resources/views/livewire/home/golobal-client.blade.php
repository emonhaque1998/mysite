<div class="client-logo-area rel z-1 pt-130 rpt-100 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-title text-center pt-5 mb-65 wow fadeInUp delay-0-2s">
                    <h6>{!! $title->title ?? "I’ve <span>1253+ Global Clients</span> & lot’s of Project Complete" !!}</h6>
                </div>
            </div>
        </div>
        <div class="client-logo-wrap">
            @isset($clients)
                @foreach ($clients as $client)
                <a class="client-logo-item wow fadeInUp delay-0-2s" target="_blank" href="{{ $client->website }}">
                    <img src="{{ asset("storage/$client->logo") }}" alt="Client Logo">
                </a>
                @endforeach
            @endisset
        </div>
    </div>
    <div class="bg-lines">
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
    </div>
</div>
