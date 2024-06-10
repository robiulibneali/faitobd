@extends('frontend.master')

@section('body')
    <section class="content-landing detail">
        <div class="head-content">
            <div class="overlay-head-content"></div>
            <div class="result-product">
                <div class="wrapper">
                    <h4>Search</h4>
                    <span class="result">Showing 1-3 of 3 Results</span>
                </div>
            </div>
            <div class="filter-result">
                <div class="wrapper">
                    <div class="left-filter">
                        <div class="box">
                            <span>Filter By</span>
                        </div>
                        <div class="select-filter">
                            <div class="list-select-filter" data-filter="brand" data-value="" data-placeholder="Brand">
                                <span class="btn-filter ">
                                      Brand
                                </span>
                                <div class="drop-filter">
                                    <div class="in-drop-filter">
                                        <h5>Brand</h5>
                                        <div class="filter-list">
                                            @if(!empty($bikeBrands))
                                                @foreach($bikeBrands as $bikeBrand)
                                                    <a href="#" data-value="{{ $bikeBrand->id }}" >
                                                        <span class="tx">{{ $bikeBrand->name }}</span>
                                                        <span class="x-tx"></span>
                                                    </a>
                                                @endforeach
                                            @endif

{{--                                            <a href="#" data-value="honda" >--}}
{{--                                                <span class="tx">Honda</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="husqvarna" >--}}
{{--                                                <span class="tx">Husqvarna</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="kawasaki" >--}}
{{--                                                <span class="tx">Kawasaki</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ktm" >--}}
{{--                                                <span class="tx">KTM</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ducati" >--}}
{{--                                                <span class="tx">Megelli</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mv-agusta" >--}}
{{--                                                <span class="tx">MV Agusta</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="piaggio" >--}}
{{--                                                <span class="tx">Piaggio</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="suzuki" >--}}
{{--                                                <span class="tx">Suzuki</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="triumph" >--}}
{{--                                                <span class="tx">Triumph</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="universal" >--}}
{{--                                                <span class="tx">Universal</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="yamaha" >--}}
{{--                                                <span class="tx">Yamaha</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-select-filter" data-filter="motortype" data-value="" data-placeholder="Motor Type">
                                  <span class="btn-filter ">
                                          Motor Type
                                  </span>
                                <div class="drop-filter">
                                    <div class="in-drop-filter">
                                        <h5>Motor Type</h5>
                                        <div class="filter-list">
                                            @if(!empty($motorTypes))
                                                @foreach($motorTypes as $motorType)
                                                    <a href="#" data-value="{{ $motorType->id }}" >
                                                        <span class="tx">{{ $motorType->name }}</span>
                                                        <span class="x-tx"></span>
                                                    </a>
                                                @endforeach
                                            @endif

{{--                                            <a href="#" data-value="cross" >--}}
{{--                                                <span class="tx">Cross</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="matic" >--}}
{{--                                                <span class="tx">Matic</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="matic-premium" >--}}
{{--                                                <span class="tx">Matic Premium</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="sport" >--}}
{{--                                                <span class="tx">Sport</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-select-filter" data-filter="motor" data-value="" data-placeholder="motorcycle">
                                  <span class="btn-filter ">
                                      motorcycle
                                  </span>
                                <div class="drop-filter">
                                    <div class="in-drop-filter">
                                        <h5>Motorcycle</h5>
                                        <div class="filter-list">
                                            @if(!empty($motorBikes))
                                                @foreach($motorBikes as $motorBike)
                                                    <a href="#" data-value="{{ $motorBike->id }}" class=selected>
                                                        <span class="tx">{{ $motorBike->model_name }}</span>
                                                        <span class="x-tx"></span>
                                                    </a>
                                                @endforeach
                                            @endif

{{--                                            <a href="#" data-value="1098" >--}}
{{--                                                <span class="tx">1098</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="1198" >--}}
{{--                                                <span class="tx">1198</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="848-evo" >--}}
{{--                                                <span class="tx">848 Evo</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="address" >--}}
{{--                                                <span class="tx">Address</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="aerox-125lc" >--}}
{{--                                                <span class="tx">Aerox 125LC</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="aerox-155vva" >--}}
{{--                                                <span class="tx">Aerox 155VVA</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="all-new-satria-fu-150-fi" >--}}
{{--                                                <span class="tx">All New Satria FU 150 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="arashi-125" >--}}
{{--                                                <span class="tx">Arashi 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="athlete" >--}}
{{--                                                <span class="tx">Athlete</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="axelo-125" >--}}
{{--                                                <span class="tx">Axelo 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="beat-esp" >--}}
{{--                                                <span class="tx">Beat eSP</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="beat-fi" >--}}
{{--                                                <span class="tx">Beat FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="beat-fi-esp" >--}}
{{--                                                <span class="tx">Beat FI eSP</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="beat-old-karburator" >--}}
{{--                                                <span class="tx">Beat Karburator</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="beat-pop-esp" >--}}
{{--                                                <span class="tx">Beat POP eSP</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="beat-street-esp" >--}}
{{--                                                <span class="tx">Beat Street eSP</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="blade-110-karburator" >--}}
{{--                                                <span class="tx">Blade 110 Karburator</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="blade-125-fi" >--}}
{{--                                                <span class="tx">Blade 125 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="blitz" >--}}
{{--                                                <span class="tx">Blitz</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="bravo" >--}}
{{--                                                <span class="tx">Bravo</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="byson" >--}}
{{--                                                <span class="tx">Byson</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="byson-fi" >--}}
{{--                                                <span class="tx">Byson FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cb-150-streetfire-new" >--}}
{{--                                                <span class="tx">CB 150 StreetFire (NEW)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cb150-verza" >--}}
{{--                                                <span class="tx">CB150 Verza</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150" >--}}
{{--                                                <span class="tx">CBR 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150-new" >--}}
{{--                                                <span class="tx">CBR 150 (NEW)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150-cbu-thailand" >--}}
{{--                                                <span class="tx">CBR 150 CBU Thailand</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150-fi" >--}}
{{--                                                <span class="tx">CBR 150 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150r-k45a" >--}}
{{--                                                <span class="tx">CBR 150R (K45A)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150r-k45g" >--}}
{{--                                                <span class="tx">CBR 150R (K45G)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150r-k45n0" >--}}
{{--                                                <span class="tx">CBR 150R (K45N)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150r-cbu-thailand" >--}}
{{--                                                <span class="tx">CBR 150R CBU Thailand</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-150r-streetfire-old" >--}}
{{--                                                <span class="tx">CBR 150R Streetfire (OLD)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-250r-cbu" >--}}
{{--                                                <span class="tx">CBR 250R CBU</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cbr-250rr" >--}}
{{--                                                <span class="tx">CBR 250RR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="crf-150l" >--}}
{{--                                                <span class="tx">CRF 150L</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="crf-250-rally" >--}}
{{--                                                <span class="tx">CRF 250 Rally</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cripton" >--}}
{{--                                                <span class="tx">Cripton</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="crystal" >--}}
{{--                                                <span class="tx">Crystal</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="d-tracker" >--}}
{{--                                                <span class="tx">D-Tracker</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="duke-640" >--}}
{{--                                                <span class="tx">Duke 640</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="duke-690" >--}}
{{--                                                <span class="tx">Duke 690</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ego-s" >--}}
{{--                                                <span class="tx">Ego S</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="f1z" >--}}
{{--                                                <span class="tx">F1Z</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="f1zr-1" >--}}
{{--                                                <span class="tx">F1ZR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="f1zr" >--}}
{{--                                                <span class="tx">F1ZR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="f3" >--}}
{{--                                                <span class="tx">F3</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="f4" >--}}
{{--                                                <span class="tx">F4</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="fino-carburator" >--}}
{{--                                                <span class="tx">Fino Carburator</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="fino-fi" >--}}
{{--                                                <span class="tx">Fino FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="force-1" >--}}
{{--                                                <span class="tx">Force 1</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="force-1-new" >--}}
{{--                                                <span class="tx">Force 1 New</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="fr-80" >--}}
{{--                                                <span class="tx">FR 80</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="free-go" >--}}
{{--                                                <span class="tx">Free Go</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="fxr150" >--}}
{{--                                                <span class="tx">FXR150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="genio-110-esp" >--}}
{{--                                                <span class="tx">Genio 110 ESP 2019</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="gl-pro" >--}}
{{--                                                <span class="tx">GL Pro</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="grom-msx-125" >--}}
{{--                                                <span class="tx">GROM (MSX 125)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="gsx-bandit-150" >--}}
{{--                                                <span class="tx">GSX Bandit 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="hayabusa" >--}}
{{--                                                <span class="tx">Hayabusa</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="hayate-125" >--}}
{{--                                                <span class="tx">Hayate 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="inazuma-250" >--}}
{{--                                                <span class="tx">Inazuma 250</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter" >--}}
{{--                                                <span class="tx">Jupiter</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-155-z-new" >--}}
{{--                                                <span class="tx">Jupiter 115 Z New</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-mx" >--}}
{{--                                                <span class="tx">Jupiter MX</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-mx-clutch-08" >--}}
{{--                                                <span class="tx">Jupiter MX (Clutch-08)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-mx-clutch-09" >--}}
{{--                                                <span class="tx">Jupiter MX (Clutch-09)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-mx-clutch-10-1" >--}}
{{--                                                <span class="tx">Jupiter MX (Clutch-10)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-mx-clutch" >--}}
{{--                                                <span class="tx">Jupiter MX (Clutch)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-mx-5-speed" >--}}
{{--                                                <span class="tx">Jupiter MX 5 Speed</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-mx-king-150" >--}}
{{--                                                <span class="tx">Jupiter MX King 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-z" >--}}
{{--                                                <span class="tx">Jupiter Z</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-z1-f-i" >--}}
{{--                                                <span class="tx">Jupiter Z1 F.I</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="karisma" >--}}
{{--                                                <span class="tx">Karisma</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="kaze" >--}}
{{--                                                <span class="tx">Kaze</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="klx-150" >--}}
{{--                                                <span class="tx">KLX 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="klx-150s" >--}}
{{--                                                <span class="tx">KLX 150S</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="klx-250" >--}}
{{--                                                <span class="tx">KLX 250</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="kr150" >--}}
{{--                                                <span class="tx">KR150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ksr-110" >--}}
{{--                                                <span class="tx">KSR 110</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="lets-115" >--}}
{{--                                                <span class="tx">Lets 115</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="lexam" >--}}
{{--                                                <span class="tx">Lexam</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="lexi-125vva" >--}}
{{--                                                <span class="tx">Lexi 125VVA</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="lx-125" >--}}
{{--                                                <span class="tx">LX-125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="megapro" >--}}
{{--                                                <span class="tx">MegaPro Primus</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="megelli-250sr" >--}}
{{--                                                <span class="tx">Megelli 250SR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio" >--}}
{{--                                                <span class="tx">Mio</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio-gt" >--}}
{{--                                                <span class="tx">Mio GT</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio-gt-fi" >--}}
{{--                                                <span class="tx">Mio GT FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio-j-fi" >--}}
{{--                                                <span class="tx">Mio J FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio-m3" >--}}
{{--                                                <span class="tx">Mio M3</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio-soul" >--}}
{{--                                                <span class="tx">Mio Soul</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio-sporty" >--}}
{{--                                                <span class="tx">Mio Sporty</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mio-z" >--}}
{{--                                                <span class="tx">Mio Z</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="monster-696" >--}}
{{--                                                <span class="tx">Monster 696</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="monster-795" >--}}
{{--                                                <span class="tx">Monster 795</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="moskito" >--}}
{{--                                                <span class="tx">Moskito</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mt-09" >--}}
{{--                                                <span class="tx">MT-09</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mt-25" >--}}
{{--                                                <span class="tx">MT-25</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-beat-street-esp-fi" >--}}
{{--                                                <span class="tx">New Beat Street eSP FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-blade-110" >--}}
{{--                                                <span class="tx">New Blade 110</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-cb150r-streetfire" >--}}
{{--                                                <span class="tx">New CB150R StreetFire</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-gsx-r150" >--}}
{{--                                                <span class="tx">New GSX R150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-gsx-s150" >--}}
{{--                                                <span class="tx">New GSX S150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-mega-pro" >--}}
{{--                                                <span class="tx">New Mega Pro</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-megapro-fi" >--}}
{{--                                                <span class="tx">New Megapro Fi</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-satria-fu-150" >--}}
{{--                                                <span class="tx">New Satria FU 150 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-shogun-125" >--}}
{{--                                                <span class="tx">New Shogun 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-shogun-125-fi" >--}}
{{--                                                <span class="tx">New Shogun 125 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-smash-110" >--}}
{{--                                                <span class="tx">New Smash 110</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-v-ixion" >--}}
{{--                                                <span class="tx">New V-Ixion</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-v-ixion-lightning" >--}}
{{--                                                <span class="tx">New V-Ixion Lightning</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-vario-125-fi" >--}}
{{--                                                <span class="tx">New Vario 125 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-vario-150-fi" >--}}
{{--                                                <span class="tx">New Vario 150 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="new-vega-r" >--}}
{{--                                                <span class="tx">New Vega R</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nex-115" >--}}
{{--                                                <span class="tx">Nex 115</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nex-115-fi" >--}}
{{--                                                <span class="tx">Nex 115 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nex-2" >--}}
{{--                                                <span class="tx">Nex 2</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ninja-150" >--}}
{{--                                                <span class="tx">Ninja 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ninja-250" >--}}
{{--                                                <span class="tx">Ninja 250</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ninja-krr" >--}}
{{--                                                <span class="tx">Ninja KRR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ninja-rr" >--}}
{{--                                                <span class="tx">Ninja RR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nmax" >--}}
{{--                                                <span class="tx">Nmax</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nouvo" >--}}
{{--                                                <span class="tx">Nouvo</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nouvo-z" >--}}
{{--                                                <span class="tx">Nouvo Z</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nova-dash" >--}}
{{--                                                <span class="tx">Nova Dash</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nova-sonic" >--}}
{{--                                                <span class="tx">Nova Sonic</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="nsr-150" >--}}
{{--                                                <span class="tx">NSR 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="panigale" >--}}
{{--                                                <span class="tx">Panigale</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="pcx-150-cbs-lokal" >--}}
{{--                                                <span class="tx">PCX 150 CBS (Lokal)</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="pcx-cbu-thailand" >--}}
{{--                                                <span class="tx">PCX CBU Thailand</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="phantom-2000" >--}}
{{--                                                <span class="tx">Phantom 2000</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="r1" >--}}
{{--                                                <span class="tx">R1</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="r15" >--}}
{{--                                                <span class="tx">R15</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="r1m" >--}}
{{--                                                <span class="tx">R1M</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="r25" >--}}
{{--                                                <span class="tx">R25</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="r3" >--}}
{{--                                                <span class="tx">R3</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="r6" >--}}
{{--                                                <span class="tx">R6</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="rc80" >--}}
{{--                                                <span class="tx">RC80</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="revo" >--}}
{{--                                                <span class="tx">Revo</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="revo-absolute" >--}}
{{--                                                <span class="tx">Revo Absolute</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="revo-fi" >--}}
{{--                                                <span class="tx">Revo FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="rgr" >--}}
{{--                                                <span class="tx">RGR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="rgr-150" >--}}
{{--                                                <span class="tx">RGR 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="rx-king" >--}}
{{--                                                <span class="tx">RX King</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="rxz" >--}}
{{--                                                <span class="tx">RXZ</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="satria" >--}}
{{--                                                <span class="tx">Satria</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="satria-f150" >--}}
{{--                                                <span class="tx">Satria F150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="satria-ru" >--}}
{{--                                                <span class="tx">Satria RU</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scoopy" >--}}
{{--                                                <span class="tx">Scoopy</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scoppy-esp" >--}}
{{--                                                <span class="tx">Scoopy eSP</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scoppy-esp-ring-12" >--}}
{{--                                                <span class="tx">Scoopy eSP Ring 12</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scoppy-fi" >--}}
{{--                                                <span class="tx">Scoopy FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scoppy-old-karburator" >--}}
{{--                                                <span class="tx">Scoopy Old Karburator</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scorpio" >--}}
{{--                                                <span class="tx">Scorpio</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scorpio-z" >--}}
{{--                                                <span class="tx">Scorpio Z</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="sf-848" >--}}
{{--                                                <span class="tx">SF 848</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="sh150i" >--}}
{{--                                                <span class="tx">SH150i</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="shogun-110" >--}}
{{--                                                <span class="tx">Shogun 110</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="shooter-115-fi" >--}}
{{--                                                <span class="tx">Shooter 115 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="skydrive-125" >--}}
{{--                                                <span class="tx">Skydrive 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="skywave-125" >--}}
{{--                                                <span class="tx">Skywave 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="smr400" >--}}
{{--                                                <span class="tx">SMR400</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="sonic-125" >--}}
{{--                                                <span class="tx">SONIC 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="sonic-150-r" >--}}
{{--                                                <span class="tx">Sonic 150 R</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="soul-gt" >--}}
{{--                                                <span class="tx">Soul GT</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="soul-gt-126" >--}}
{{--                                                <span class="tx">Soul GT</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="soul-gt-125" >--}}
{{--                                                <span class="tx">Soul GT 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="soul-gt-fi" >--}}
{{--                                                <span class="tx">Soul GT FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="spacy-fi" >--}}
{{--                                                <span class="tx">Spacy FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="spacy" >--}}
{{--                                                <span class="tx">Spacy Karbu</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="spin-125" >--}}
{{--                                                <span class="tx">Spin 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="supra-gtr-150" >--}}
{{--                                                <span class="tx">Supra GTR 150</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="supra-x" >--}}
{{--                                                <span class="tx">Supra X</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="supra-x-125" >--}}
{{--                                                <span class="tx">Supra X 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="supra-x-125-r-dd" >--}}
{{--                                                <span class="tx">Supra X 125 R DD</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="supra-x125-fi" >--}}
{{--                                                <span class="tx">Supra X125 FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="supra-x125-helm-in" >--}}
{{--                                                <span class="tx">Supra X125 Helm In</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="supra-x125-pgm-fi" >--}}
{{--                                                <span class="tx">Supra X125 PGM-FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="thunder-125" >--}}
{{--                                                <span class="tx">Thunder 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="thunder-250" >--}}
{{--                                                <span class="tx">Thunder 250</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="tiger-2000" >--}}
{{--                                                <span class="tx">Tiger 2000</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="tiger-800" >--}}
{{--                                                <span class="tx">Tiger 800</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="tiger-revo" >--}}
{{--                                                <span class="tx">Tiger Revo</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="titan-110" >--}}
{{--                                                <span class="tx">Titan 110</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="tzm" >--}}
{{--                                                <span class="tx">TZM</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="universal" >--}}
{{--                                                <span class="tx">Universal</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vario-110" >--}}
{{--                                                <span class="tx">Vario 110</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vario-110-fi-esp" >--}}
{{--                                                <span class="tx">Vario 110 eSP FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vario-125-esp" >--}}
{{--                                                <span class="tx">Vario 125 eSP FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vario-125-pgm-fi" >--}}
{{--                                                <span class="tx">Vario 125 PGM-FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vario-125-techno" >--}}
{{--                                                <span class="tx">Vario 125 Techno</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vario-150-esp-fi" >--}}
{{--                                                <span class="tx">Vario 150 eSP FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vario-techno-cbs-110" >--}}
{{--                                                <span class="tx">Vario Techno/ CBS 110</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vega" >--}}
{{--                                                <span class="tx">Vega</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vega-force" >--}}
{{--                                                <span class="tx">Vega Force</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="jupiter-1" >--}}
{{--                                                <span class="tx">Vega RR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vega-zr-fi" >--}}
{{--                                                <span class="tx">Vega ZR</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="versys-250" >--}}
{{--                                                <span class="tx">Versys 250</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="verza" >--}}
{{--                                                <span class="tx">Verza</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vespa" >--}}
{{--                                                <span class="tx">Vespa</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="vixion" >--}}
{{--                                                <span class="tx">Vixion</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="w175" >--}}
{{--                                                <span class="tx">W175</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="w250" >--}}
{{--                                                <span class="tx">W250</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="x-ride-fi" >--}}
{{--                                                <span class="tx">X-Ride FI</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="xabre" >--}}
{{--                                                <span class="tx">Xabre</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="xeon" >--}}
{{--                                                <span class="tx">Xeon</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="xeon-gt-125" >--}}
{{--                                                <span class="tx">Xeon GT 125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="xeon-rc" >--}}
{{--                                                <span class="tx">Xeon RC</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="xmax" >--}}
{{--                                                <span class="tx">XMAX</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="y125z" >--}}
{{--                                                <span class="tx">Y125Z</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="z125" >--}}
{{--                                                <span class="tx">Z125</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="zx130" >--}}
{{--                                                <span class="tx">ZX130</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-select-filter" data-filter="enginesize" data-value="" data-placeholder="Engine Size">
                                  <span class="btn-filter ">
                                      Engine Size
                                  </span>
                                <div class="drop-filter">
                                    <div class="in-drop-filter">
                                        <h5>Engine Size</h5>
                                        <div class="filter-list">
                                            @if(!empty($engineSizes))
                                                @foreach($engineSizes as $engineSize)
                                                    <a href="#" data-value="{{ $engineSize->id }}" >
                                                        <span class="tx">{{ $engineSize->name }}</span>
                                                        <span class="x-tx"></span>
                                                    </a>
                                                @endforeach
                                            @endif

{{--                                            <a href="#" data-value="400-cc-1" >--}}
{{--                                                <span class="tx">400 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="321-cc" >--}}
{{--                                                <span class="tx">321 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="690-cc" >--}}
{{--                                                <span class="tx">690 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="700-cc" >--}}
{{--                                                <span class="tx">700 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="800-cc" >--}}
{{--                                                <span class="tx">800 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="1103-cc" >--}}
{{--                                                <span class="tx">1103 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="1198-cc" >--}}
{{--                                                <span class="tx">1198 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="1099-cc" >--}}
{{--                                                <span class="tx">1099 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="849-cc" >--}}
{{--                                                <span class="tx">849 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="79-cc" >--}}
{{--                                                <span class="tx">79 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="225-cc" >--}}
{{--                                                <span class="tx">225 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="70-cc" >--}}
{{--                                                <span class="tx">70 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="" class=selected>--}}
{{--                                                <span class="tx">-</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="160-cc" >--}}
{{--                                                <span class="tx">160 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="200-cc" >--}}
{{--                                                <span class="tx">200 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="108-cc" >--}}
{{--                                                <span class="tx">108 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="223" >--}}
{{--                                                <span class="tx">223 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="universal" >--}}
{{--                                                <span class="tx">Universal</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="132-cc" >--}}
{{--                                                <span class="tx">132 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="155-cc" >--}}
{{--                                                <span class="tx">155 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="113-cc" >--}}
{{--                                                <span class="tx">113 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="115-cc" >--}}
{{--                                                <span class="tx">115 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="105-cc" >--}}
{{--                                                <span class="tx">105 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="130-cc" >--}}
{{--                                                <span class="tx">130 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="120-cc" >--}}
{{--                                                <span class="tx">120 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="135-cc" >--}}
{{--                                                <span class="tx">135 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="100-cc" >--}}
{{--                                                <span class="tx">100 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="125-cc" >--}}
{{--                                                <span class="tx">125 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="110-cc" >--}}
{{--                                                <span class="tx">110 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="500-cc" >--}}
{{--                                                <span class="tx">1000 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="400-cc" >--}}
{{--                                                <span class="tx">600 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="250-cc" >--}}
{{--                                                <span class="tx">250 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="150-cc" >--}}
{{--                                                <span class="tx">150 cc</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-select-filter" data-filter="year" data-value="" data-placeholder="Year">
                                  <span class="btn-filter ">
                                      Year
                                  </span>
                                <div class="drop-filter">
                                    <div class="in-drop-filter">
                                        <h5>Year</h5>
                                        <div class="filter-list">
                                            @if(!empty($bikeYearVersions))
                                                @foreach($bikeYearVersions as $bikeYearVersion)
                                                    <a href="#" data-value="{{ $bikeYearVersion->id }}" >
                                                        <span class="tx">{{ $bikeYearVersion->name }}</span>
                                                        <span class="x-tx"></span>
                                                    </a>
                                                @endforeach
                                            @endif

{{--                                            <a href="#" data-value="2001" >--}}
{{--                                                <span class="tx">2001</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2002" >--}}
{{--                                                <span class="tx">2002</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2003" >--}}
{{--                                                <span class="tx">2003</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2004" >--}}
{{--                                                <span class="tx">2004</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2005" >--}}
{{--                                                <span class="tx">2005</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2006" >--}}
{{--                                                <span class="tx">2006</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2007" >--}}
{{--                                                <span class="tx">2007</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2008" >--}}
{{--                                                <span class="tx">2008</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2009" >--}}
{{--                                                <span class="tx">2009</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2010" >--}}
{{--                                                <span class="tx">2010</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2011" >--}}
{{--                                                <span class="tx">2011</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2012" >--}}
{{--                                                <span class="tx">2012</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2013" >--}}
{{--                                                <span class="tx">2013</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2014" >--}}
{{--                                                <span class="tx">2014</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2015" >--}}
{{--                                                <span class="tx">2015</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2016" >--}}
{{--                                                <span class="tx">2016</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2017" >--}}
{{--                                                <span class="tx">2017</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2018" >--}}
{{--                                                <span class="tx">2018</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2019" >--}}
{{--                                                <span class="tx">2019</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2020" >--}}
{{--                                                <span class="tx">2020</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2021" >--}}
{{--                                                <span class="tx">2021</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2022" >--}}
{{--                                                <span class="tx">2022</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2023" >--}}
{{--                                                <span class="tx">2023</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="2024" >--}}
{{--                                                <span class="tx">2024</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-select-filter" data-filter="category" data-value="" data-placeholder="Category">
                                  <span class="btn-filter ">
                                      Category
                                  </span>
                                <div class="drop-filter">
                                    <div class="in-drop-filter">
                                        <h5>Engine Size</h5>
                                        <div class="filter-list">
                                            @if(!empty($partsCategories))
                                                @foreach($partsCategories as $partsCategory)
                                                    <a href="#" data-value="{{ $partsCategory->id }}" >
                                                        <span class="tx">{{ $partsCategory->name }}</span>
                                                        <span class="x-tx"></span>
                                                    </a>
                                                @endforeach
                                            @endif

{{--                                            <a href="#" data-value="racing" >--}}
{{--                                                <span class="tx">Brembo Brake Pads Racing</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="road" >--}}
{{--                                                <span class="tx">Brembo Brake Pads Road</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="scooter" >--}}
{{--                                                <span class="tx">Brembo Brake Pads Scooter</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="genuine" >--}}
{{--                                                <span class="tx">Brembo Genuine Brake Pads</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="air-filter" >--}}
{{--                                                <span class="tx">Faito Air Filter</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="brake-fluid" >--}}
{{--                                                <span class="tx">Faito Brake Fluid</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="brake-pads-street-sport" >--}}
{{--                                                <span class="tx">Faito Brake Pad</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="brake-shoe" >--}}
{{--                                                <span class="tx">Faito Brake Shoe</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cam-chain-tensioner-manual" >--}}
{{--                                                <span class="tx">Faito Cam Chain Tensioner Manual</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="camshaft" >--}}
{{--                                                <span class="tx">Faito Camshaft</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="chain-lube" >--}}
{{--                                                <span class="tx">Faito Chain Lube</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="clutch-barrier-bush" >--}}
{{--                                                <span class="tx">Faito Clutch Carrier Bush</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="clutch-plate" >--}}
{{--                                                <span class="tx">Faito Clutch Plate</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="clutch-spring" >--}}
{{--                                                <span class="tx">Faito Clutch Spring</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="connecting-rod" >--}}
{{--                                                <span class="tx">Faito Connecting Rod</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="crank-pin-bearing" >--}}
{{--                                                <span class="tx">Faito Crank Pin Bearing</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="crank-shaft-jack-rod" >--}}
{{--                                                <span class="tx">Faito Crank Shaft</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cvt-spring" >--}}
{{--                                                <span class="tx">Faito CVT Spring</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="cylinder-block-kit" >--}}
{{--                                                <span class="tx">Faito Cylinder Block Kit</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="engine-valve-set" >--}}
{{--                                                <span class="tx">Faito Engine Valve Set</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="fiberglass" >--}}
{{--                                                <span class="tx">Faito Fiberglass</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="fork-oil-1" >--}}
{{--                                                <span class="tx">Faito Fork Oil</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="gasket" >--}}
{{--                                                <span class="tx">Faito Gasket Set</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="gear-oil" >--}}
{{--                                                <span class="tx">Faito Gear Oil</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="gear-set-gear-complete-set" >--}}
{{--                                                <span class="tx">Faito Gear Set</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="headlamp" >--}}
{{--                                                <span class="tx">Faito Headlamp</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="ignition-coil" >--}}
{{--                                                <span class="tx">Faito Ignition Coil</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="lite-tech-bearing" >--}}
{{--                                                <span class="tx">Faito Lite-Tech Bearing</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="main-jet" >--}}
{{--                                                <span class="tx">Faito Main Jet</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="meter-bulb-signal-bulb" >--}}
{{--                                                <span class="tx">Faito Meter Bulb &amp; Signal Bulb</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="mini-bulb" >--}}
{{--                                                <span class="tx">Faito Mini Bulb</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="petrol-pipe-nbr-pro" >--}}
{{--                                                <span class="tx">Faito Petrol Pipe NBR Pro</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="pilot-jet" >--}}
{{--                                                <span class="tx">Faito Pilot Jet</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="pin-bearing-pin" >--}}
{{--                                                <span class="tx">Faito Pin + Pin Bearing</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="piston-set" >--}}
{{--                                                <span class="tx">Faito Piston Set</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="plug-wire" >--}}
{{--                                                <span class="tx">Faito Plug Wire &amp; Cap</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="radiator-collant" >--}}
{{--                                                <span class="tx">Faito Radiator Coolant</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="reed-valve-carbon" >--}}
{{--                                                <span class="tx">Faito Reed Valve Carbon</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="roller-weight" >--}}
{{--                                                <span class="tx">Faito Roller Bush</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="roller-chain-1" >--}}
{{--                                                <span class="tx">Faito Roller Chain</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="s270-bearing" >--}}
{{--                                                <span class="tx">Faito S720 Bearing</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="sprocket-1" >--}}
{{--                                                <span class="tx">Faito Sprocket</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="sprocket-chain-assy-415" >--}}
{{--                                                <span class="tx">Faito Sprocket Chain Assy</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="bearing-steering-cone" >--}}
{{--                                                <span class="tx">Faito Steering Cone</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
{{--                                            <a href="#" data-value="valve-spring" >--}}
{{--                                                <span class="tx">Faito Valve Spring</span>--}}
{{--                                                <span class="x-tx"></span>--}}
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-filter">
                        <span class="close-filter">Close</span>
                        <span class="reset-filter">Reset Filter</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="listing-wrap product">
                @if(count($products) > 0)
                    @forelse($products as $product)
                        <a href="{{ route('frontend.product-details', ['id' => $product->id, 'slug' => str_replace(' ', '-', $product->title)]) }}" class="list">
                            <figure>
                                <img src="{{ asset(!empty($product->main_image) ? $product->main_image : 'admin/no-img/no-image.png') }}" alt="" style="height: 245px">
                            </figure>
                            <span class="name-sparepart">{{ $product->partsBrandCategory->name ?? '' }}</span>
                            <h5 class="text-uppercase">{{ $product->title ?? '' }}</h5>
                        </a>
                    @empty
                        <p class="text-center">No Parts found</p>
                    @endforelse
{{--                @elseif(!empty($productso))--}}
{{--                    @forelse($productso as $product)--}}
{{--                        <a href="{{ route('frontend.product-details', ['id' => $product->id, 'slug' => str_replace(' ', '-', $product->title)]) }}" class="list">--}}
{{--                            <figure>--}}
{{--                                <img src="{{ asset(!empty($product->main_image) ? $product->main_image : 'admin/no-img/no-image.png') }}" alt="" style="height: 245px">--}}
{{--                            </figure>--}}
{{--                            <span class="name-sparepart">{{ $product->partsBrandCategory->name ?? '' }}</span>--}}
{{--                            <h5 class="text-uppercase">{{ $product->title ?? '' }}</h5>--}}
{{--                        </a>--}}
{{--                    @empty--}}
{{--                        <p class="text-center">No Parts found</p>--}}
{{--                    @endforelse--}}
                @endif

{{--                <a href="product-faito/detail/roller-chain/roller-chain-1/cimeti-drago-roller-chain.html" class="list">--}}
{{--                    <figure>--}}
{{--                        <img src="{{ asset('/') }}frontend/assets/contents/WPudkEpLDW.png" alt="">--}}
{{--                    </figure>--}}
{{--                    <span class="name-sparepart">Faito Roller Chain</span>--}}
{{--                    <h5>CIMETI DRAGO ROLLER CHAIN</h5>--}}
{{--                </a>--}}
{{--                <a href="product-faito/detail/braking-system/brake-pads-street-sport/brake-pad-sintered.html" class="list">--}}
{{--                    <figure>--}}
{{--                        <img src="{{ asset('/') }}frontend/assets/contents/Hv8z8W5dPT.png" alt="">--}}
{{--                    </figure>--}}
{{--                    <span class="name-sparepart">Faito Brake Pad</span>--}}
{{--                    <h5>SINTERED</h5>--}}
{{--                </a>--}}
            </div>


        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function(){
            $('.select-filter .btn-filter').on('click',function(){
                $('.select-filter .drop-filter').hide();
                $(this).next('.drop-filter').show();
                $('.head-content').addClass('overlay');
                $('.right-filter').addClass('close');
                $(this).addClass('active');
            });

            $('.filter-list a').on('click',function(e){
                e.preventDefault();
                var action = 'add';
                var th = $(this),
                    list = th.parents('.list-select-filter');
                if(th.hasClass('selected')){
                    var placeholder = list.attr('data-placeholder');
                    list.attr('data-value','');
                    list.find('.btn-filter').text(placeholder);
                    list.find('.btn-filter').removeClass('selected');

                    th.removeClass('selected');
                    action = 'remove';
                }else{
                    var text = th.find('.tx').text(),
                        val = th.attr('data-value');
                    list.attr('data-value',val);
                    list.find('.btn-filter').text(text);
                    list.find('.btn-filter').addClass('selected');

                    th.prevAll().removeClass('selected');
                    th.nextAll().removeClass('selected');
                    th.addClass('selected');
                    action = 'add';
                }

                closeFilter();
                var queryString = updateQueryStringParameter(window.location.toString(),th.parents('.list-select-filter').attr('data-filter'),th.attr('data-value'),action)

                window.location.href = queryString;

            });

            function updateQueryStringParameter(uri, key, value,action) {
                var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
                var separator = uri.indexOf('?') !== -1 ? "&" : "?";
                if (uri.match(re)) {
                    if (action == 'add'){
                        return uri.replace(re, '$1' + key + "=" + value + '$2');
                    }else{
                        var splitURI = uri.split("?")[1].split("&");
                        keyVal = key + "=" + value;
                        if (keyVal == splitURI[0])
                        {
                            if (splitURI.length == 1)
                            {
                                return uri.replace(re,'');
                            }
                            return uri.replace(re,'?');
                        }else if (keyVal == splitURI[splitURI.length-1]){
                            return uri.replace(re,'');

                        }else{
                            return uri.replace(re,'&');
                        }
                    }
                }else {
                    return uri + separator + key + "=" + value;
                }
            }

            $('.reset-filter').on('click',function(){
                var list = $('.select-filter .list-select-filter');
                list.each(function(){
                    var th = $(this);
                    th.attr('data-value','');
                    th.find('.btn-filter').text(th.attr('data-placeholder'));
                    th.find('.btn-filter').removeClass('selected');
                    th.find('.filter-list a').removeClass('selected');
                });

                // window.location.href = "https://faito.co.id/en/search";
                window.location.href = "{{ route('frontend.product-search') }}";
            });
            $('.close-filter,.overlay-head-content').on('click',function(){
                closeFilter();
            });

            if($(window).width() <= 960){
                $('.filter-result .left-filter .box').on('click',function(){
                    if($(this).hasClass('active')){
                        $('.select-filter').fadeOut(300);
                        $('.head-content').removeClass('overlay');
                        $('.right-filter').removeClass('close');
                        $(this).parents('.filter-result').removeClass('active');
                    }else{
                        $('.select-filter').fadeIn(300);
                        $('.head-content').addClass('overlay');
                        $('.right-filter').addClass('close');
                        $(this).parents('.filter-result').addClass('active');
                    }
                });
            }
        })

        function closeFilter(){
            $('.head-content').removeClass('overlay');
            $('.select-filter .drop-filter').hide();
            $('.right-filter').removeClass('close');
            if($(window).width() <= 960){
                $('.select-filter').fadeOut(300);
                $('.filter-result').removeClass('active');
            }
        }
    </script>
@endpush
