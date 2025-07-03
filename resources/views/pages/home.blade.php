@extends('layouts.generic')

@section('page_description', getSetting('site.description'))
@section('share_url', route('home'))
@section('share_title', getSetting('site.name') . ' - ' . getSetting('site.slogan'))
@section('share_description', getSetting('site.description'))
@section('share_type', 'article')
@section('share_img', GenericHelper::getOGMetaImage())

@section('scripts')
    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "{{getSetting('site.name')}}",
    "url": "{{getSetting('site.app_url')}}",
    "address": ""
  }
</script>
@stop

@section('styles')
    {!!
        Minify::stylesheet([
            '/css/pages/home.css',
            '/css/pages/search.css',
         ])->withFullUrl()
    !!}
@stop

@section('content')
    <div class="home-header min-vh-75 position-relative  overflow-hidden">
        <div class="container h-100">
            <div class="row d-flex align-items-center h-100">
                <!-- Left column (text) -->
                <div class="col-12 col-md-6 mt-6 mt-md-0 ">
                    <h6 class="font-weight-bold text-gradient bg-white text-center">{{__('Billion sub')}},</h6>
                    <h1 class="font-weight-bold text-gradient bg-white text-center">{{__('Empowering Creators to Earn Big.')}}.</h1>
                    <div class="mt-4 text-center">
                        <a href="{{route('login')}}" class="btn btn-grow bg-gradient-primary btn-round mb-0 me-1 mt-2 mt-md-0">
                            {{__('Try for free')}}
                        </a>
                        <a href="{{route('search.get')}}" class="btn btn-grow btn-link btn-round mb-0 me-1 mt-2 mt-md-0">
                            @include('elements.icon',['icon'=>'search-outline','centered'=>false])
                            {{__('Explore')}}
                        </a>
                    </div>
{{--                    <div class="d-flex col-12 col-5 ">--}}
{{--                        <img src="{{asset('/img/homePic2.jpg')}}" class="" style="width: 250px; height: 250px; object-fit: cover" alt="">--}}
{{--                        <h6>Experience the Pulse of Exclusive Content</h6>--}}
{{--                    </div>--}}
                </div>

                <!-- Right column (image fills column entirely) -->
                <div class="col-6 col-md-6 d-none d-md-flex justify-content-center align-items-center h-100 p-0">
                    <img src="{{asset('/img/homePic1.jpg')}}" class="w-100 h-100" style="object-fit: cover;" />
                </div>
            </div>
        </div>
    </div>



    <div class="my-5 py-5 home-bg-section">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center">
                     <!--   <img src="{{asset('/img/home-scene-1.svg')}}" class="img-fluid home-box-img" alt="{{__('Premium & Private content')}}"> -->
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="col-12 col-md-10 text-center">
                            <h5 class="text-bold">{{__('We accept crypto currency ')}}</h5>
                            <span>{{__('pay with crypto with safe and trustable gatewaz.')}} </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center">
                    <!--    <img src="{{asset('/img/home-scene-2.svg')}}" class="img-fluid home-box-img" alt="{{__('Private chat & Tips')}}"> -->
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="col-12 col-md-10 text-center">
                            <h5 class="text-bold">{{__('Private chat & Tips')}}</h5>
                            <span>{{__('Enjoy private conversations and get tipped for your content.')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center">
                    <!--    <img src="{{asset('/img/home-scene-3.svg')}}" class="img-fluid home-box-img" alt="{{__('Secured assets & Privacy focus')}}"> -->
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="col-12 col-md-10 text-center">
                            <h5 class="text-bold">{{__('Secured assets & Privacy focus')}}</h5>
                            <span>{{__("Your content get's safely upload in the cloud and full controll to your account.")}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <!--  <div class="mt-5 pb-3 pt-5 home-bg-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold">{{__('Main features')}}</h2>
                <p>{{__("Here's a glimpse at the main features our script offers")}}</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-5 btn-grow px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row-reverse">
                        @include('elements.icon',['icon'=>'phone-portrait-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("Mobile Ready")}}</h5>
                    <p class="mb-0">{{__("Cross compatible & mobile first design.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row-reverse">
                        @include('elements.icon',['icon'=>'cog-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("Advanced Admin panel")}}</h5>
                    <p class="mb-0">{{__("Easy to use, fully featured admin panel.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row-reverse">
                        @include('elements.icon',['icon'=>'people-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("User subscriptions")}}</h5>
                    <p class="mb-0">{{__("Easy to use and reliable subscriptions system.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row-reverse">
                        @include('elements.icon',['icon'=>'list-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("User feed & Locked posts")}}</h5>
                    <p class="mb-0">{{__("Advanced feed system, pay to unlock posts.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow text-left px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row">
                        @include('elements.icon',['icon'=>'moon-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("Light & Dark themes")}}</h5>
                    <p class="mb-0">{{__("Eazy to customize themes, dark & light mode.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow text-left px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row">
                        @include('elements.icon',['icon'=>'language-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("RTL & Locales")}}</h5>
                    <p class="mb-0">{{__("Fully localize your site with languages & RTL.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow text-left px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row">
                        @include('elements.icon',['icon'=>'chatbubbles-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("Live chat & Notifications")}}</h5>
                    <p class="mb-0">{{__("Live user messenger & User notifications.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow text-left px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row">
                        @include('elements.icon',['icon'=>'bookmarks-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("Post Bookmarks & User lists")}}</h5>
                    <p class="mb-0">{{__("Stay updated with list users and bookmarks.")}}</p>
                </div>

                <div class="col-12 col-md-4 mb-5 btn-grow text-left px-4 py-3 rounded my-2 w-100">
                    <div class="flex-row">
                        @include('elements.icon',['icon'=>'flag-outline','variant'=>'large','centered'=>false,'classes'=>''])
                    </div>
                    <h5 class="text-bold">{{__("Content flagging and User reports")}}</h5>
                    <p class="mb-0">{{__("Stay safe with user and content reporting.")}}</p>
                </div>

            </div>
        </div>
    </div> -->

  <!--  <div class="my-5 py-2">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold">{{__("Technologies used")}}</h2>
                <p>{{__("Built on secure, scalable and reliable techs")}}</p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="d-flex justify-content-center align-items-center row col">
                    <img src="{{asset('/img/logos/laravel.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("laravel"))}}" alt="{{__("laravel")}}"/>
                    <img src="{{asset('/img/logos/bootstrap.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("bootstrap"))}}" alt="{{__("bootstrap")}}"/>
                    <img src="{{asset('/img/logos/jquery.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("jquery"))}}" alt="{{__("jquery")}}"/>
                    <img src="{{asset('/img/logos/aws.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("aws"))}}" alt="{{__("aws")}}"/>
                    <img src="{{asset('/img/logos/pusher.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("pusher"))}}" alt="{{__("pusher")}}"/>
                    <img src="{{asset('/img/logos/stripe.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("stripe"))}}" alt="{{__("stripe")}}"/>
                    <img src="{{asset('/img/logos/paypal.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("paypal"))}}" alt="{{__("paypal")}}"/>
                    <img src="{{asset('/img/logos/coinbase.svg')}}" class="mx-3 mb-2 grayscale coinbasae-logo" title="{{ucfirst(__("coinbase"))}}" alt="{{__("coinbase")}}"/>
                    <img src="{{asset('/img/logos/wasabi.svg')}}" class="mx-3 mb-2 grayscale" title="{{ucfirst(__("wasabi"))}}" alt="{{__("wasabi")}}"/>
                </div>
            </div>
        </div>
    </div> -->

  <!--  <div class="my-5 py-5 home-bg-section">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="font-weight-bold">{{__("Featured creators")}}</h2>
                <p>{{__("Here's list of currated content creators to start exploring now!")}}</p>
            </div>

            <div class="creators-wrapper">
                <div class="row px-3">
                    @if(count($featuredMembers))
                        @foreach($featuredMembers as $member)
                            <div class="col-12 col-md-4 p-1">
                                <div class="p-2">
                                    @include('elements.vertical-member-card',['profile' => $member])
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div> -->

    <div class="py-4 my-4 white-section ">
        <div class="container">
            <div class="text-center">
                <h3 class="font-weight-bold">{{__("Got questions?")}}</h3>
                <p>{{__("Don't hesitate to send us a message at")}} - <a href="{{route('contact')}}">{{__("Contact")}}</a> </p>
            </div>
        </div>
    </div>
@stop
