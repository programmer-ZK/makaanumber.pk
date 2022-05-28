@php
    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Location\Repositories\Interfaces\CityInterface;

    $cities = collect([]);
    if (is_plugin_active('location')) {
        $cities = app(CityInterface::class)->advancedGet([
            'condition' => [
                'cities.is_featured' => true,
                'cities.status'      => BaseStatusEnum::PUBLISHED,
            ],
            'take'      => (int)theme_option('number_of_featured_cities', 10),
            'select'    => ['cities.id', 'cities.name', 'cities.image', 'cities.slug']
        ]);
    }
@endphp

@if ($cities->count())
{{-- <div class="conatiner features mt-5 pb-5" style="background-color:#f9f9f9 !important; margin-right:-15px !important;">
  <div class="text-center mb-5 ">
    <h2 style="color:#000000 !important;">Discover o<span class="b-top">ur Featu</span>red Listenings</h2>
  </div>

  <div class="items">

          <div style="position:relative;">
                    <div class="owl-carousel" id="cityslide">
                        @foreach($cities as $city)
                        <div class="item">
                            <div class=" itemarea">
                                <a href="{{ route('public.properties-by-city', $city->slug) }}">
                                    <img src="{{ RvMedia::getImageUrl($city->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $city->name }}">
                                    <h4>{{ $city->name }}</h4>
                                </a>
                                 <div class="row pl-3 pt-2">
      <div class="col-sm-7">
        <p>2545 Meldow eye</p>
      </div>
      <div class="col-sm-4">
        <p class="descrip">PKR 300,000</p>
      </div>
    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <i class="am-next"><img src="{{ Theme::asset()->url('images/aleft.png') }}" alt="pre"></i>
                    <i class="am-prev"><img src="{{ Theme::asset()->url('images/aright.png') }}" alt="next"></i>
                </div>
            </div>
















 </div> --}}
 {{--   <div class="container-fluid w90">

        <div class="padtop70">
            <div class="areahome">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ __('Properties by locations') }}</h2>
                        <p>{{ theme_option('home_description_for_properties_by_locations') }}</p>
                    </div>
                </div>
                <div style="position:relative;">
                    <div class="owl-carousel" id="cityslide">
                        @foreach($cities as $city)
                            <div class="item itemarea">
                                <a href="{{ route('public.properties-by-city', $city->slug) }}">
                                    <img src="{{ RvMedia::getImageUrl($city->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $city->name }}">
                                    <h4>{{ $city->name }}</h4>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <i class="am-next"><img src="{{ Theme::asset()->url('images/aleft.png') }}" alt="pre"></i>
                    <i class="am-prev"><img src="{{ Theme::asset()->url('images/aright.png') }}" alt="next"></i>
                </div>
            </div>

        </div>
    </div>  --}}
@endif
