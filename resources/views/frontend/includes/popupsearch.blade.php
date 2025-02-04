<div class="popup-search" id="popupsearch">
    <div class="close-popup-search">
        <span></span><span></span>
    </div>
    <div class="box-inner-search normal-search active">
        <form action="{{ route('frontend.product-search') }}">
            <input type="text" name="title" placeholder="Search Our Product">
            <a class="link-yellow btn-adv-search">Advance Search</a>
        </form>
    </div>
    <div class="box-inner-search advance-search">
        <h3>Advance Search</h3>
        <div class="form">
            <form action="{{ route('frontend.product-search') }}">
                <div class="row">
                    <div class="col half">
                        <div class="row">
                            <div class="col half">
                                <select name="brand" id="brand">
                                    <option value="">Brand</option>
                                    <option value="ducati-1">Ducati</option>
                                    <option value="honda">Honda</option>
                                    <option value="husqvarna">Husqvarna</option>
                                    <option value="kawasaki">Kawasaki</option>
                                    <option value="ktm">KTM</option>
                                    <option value="ducati">Megelli</option>
                                    <option value="mv-agusta">MV Agusta</option>
                                    <option value="piaggio">Piaggio</option>
                                    <option value="suzuki">Suzuki</option>
                                    <option value="triumph">Triumph</option>
                                    <option value="universal">Universal</option>
                                    <option value="yamaha">Yamaha</option>
                                </select>
                            </div>
                            <div class="col half">
                                <select name="motortype" id="motortype">
                                    <option value="">Motor Type</option>
                                    <option value="bebek">Bebek</option>
                                    <option value="matic">Matic</option>
                                    <option value="sport">Sport</option>
                                    <option value="cross">Cross</option>
                                    <option value="matic-premium">Matic Premium</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col half">
                        <div class="row">
                            <div class="col half">
                                <select name="enginesize" id="enginesize">
                                    <option value="">Engine Size</option>
                                    <option value="625-cc">625 cc</option>
                                    <option value="400-cc-1">400 cc</option>
                                    <option value="321-cc">321 cc</option>
                                    <option value="690-cc">690 cc</option>
                                    <option value="700-cc">700 cc</option>
                                    <option value="800-cc">800 cc</option>
                                    <option value="1103-cc">1103 cc</option>
                                    <option value="1198-cc">1198 cc</option>
                                    <option value="1099-cc">1099 cc</option>
                                    <option value="849-cc">849 cc</option>
                                    <option value="79-cc">79 cc</option>
                                    <option value="225-cc">225 cc</option>
                                    <option value="70-cc">70 cc</option>
                                    <option value="">-</option>
                                    <option value="160-cc">160 cc</option>
                                    <option value="200-cc">200 cc</option>
                                    <option value="108-cc">108 cc</option>
                                    <option value="223">223 cc</option>
                                    <option value="universal">Universal</option>
                                    <option value="132-cc">132 cc</option>
                                    <option value="155-cc">155 cc</option>
                                    <option value="113-cc">113 cc</option>
                                    <option value="115-cc">115 cc</option>
                                    <option value="105-cc">105 cc</option>
                                    <option value="130-cc">130 cc</option>
                                    <option value="120-cc">120 cc</option>
                                    <option value="135-cc">135 cc</option>
                                    <option value="100-cc">100 cc</option>
                                    <option value="125-cc">125 cc</option>
                                    <option value="110-cc">110 cc</option>
                                    <option value="500-cc">1000 cc</option>
                                    <option value="400-cc">600 cc</option>
                                    <option value="250-cc">250 cc</option>
                                    <option value="150-cc">150 cc</option>
                                </select>
                            </div>
                            <div class="col half">
                                <select name="year" id="year">
                                    <option value="">Year</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col half">
                        <select name="motor" id="motor">
                            <option value="">Motorcycle</option>
                            <option value="">-</option>
                            <option value="1098">1098</option>
                            <option value="1198">1198</option>
                            <option value="848-evo">848 Evo</option>
                            <option value="address">Address</option>
                            <option value="aerox-125lc">Aerox 125LC</option>
                            <option value="aerox-155vva">Aerox 155VVA</option>
                            <option value="all-new-satria-fu-150-fi">All New Satria FU 150 FI</option>
                            <option value="arashi-125">Arashi 125</option>
                            <option value="athlete">Athlete</option>
                            <option value="axelo-125">Axelo 125</option>
                            <option value="beat-esp">Beat eSP</option>
                            <option value="beat-fi">Beat FI</option>
                            <option value="beat-fi-esp">Beat FI eSP</option>
                            <option value="beat-old-karburator">Beat Karburator</option>
                            <option value="beat-pop-esp">Beat POP eSP</option>
                            <option value="beat-street-esp">Beat Street eSP</option>
                            <option value="blade-110-karburator">Blade 110 Karburator</option>
                            <option value="blade-125-fi">Blade 125 FI</option>
                            <option value="blitz">Blitz</option>
                            <option value="bravo">Bravo</option>
                            <option value="byson">Byson</option>
                            <option value="byson-fi">Byson FI</option>
                            <option value="cb-150-streetfire-new">CB 150 StreetFire (NEW)</option>
                            <option value="cb150-verza">CB150 Verza</option>
                            <option value="cbr-150">CBR 150</option>
                            <option value="cbr-150-new">CBR 150 (NEW)</option>
                            <option value="cbr-150-cbu-thailand">CBR 150 CBU Thailand</option>
                            <option value="cbr-150-fi">CBR 150 FI</option>
                            <option value="cbr-150r-k45a">CBR 150R (K45A)</option>
                            <option value="cbr-150r-k45g">CBR 150R (K45G)</option>
                            <option value="cbr-150r-k45n0">CBR 150R (K45N)</option>
                            <option value="cbr-150r-cbu-thailand">CBR 150R CBU Thailand</option>
                            <option value="cbr-150r-streetfire-old">CBR 150R Streetfire (OLD)</option>
                            <option value="cbr-250r-cbu">CBR 250R CBU</option>
                            <option value="cbr-250rr">CBR 250RR</option>
                            <option value="crf-150l">CRF 150L</option>
                            <option value="crf-250-rally">CRF 250 Rally</option>
                            <option value="cripton">Cripton</option>
                            <option value="crystal">Crystal</option>
                            <option value="d-tracker">D-Tracker</option>
                            <option value="duke-640">Duke 640</option>
                            <option value="duke-690">Duke 690</option>
                            <option value="ego-s">Ego S</option>
                            <option value="f1z">F1Z</option>
                            <option value="f1zr-1">F1ZR</option>
                            <option value="f1zr">F1ZR</option>
                            <option value="f3">F3</option>
                            <option value="f4">F4</option>
                            <option value="fino-carburator">Fino Carburator</option>
                            <option value="fino-fi">Fino FI</option>
                            <option value="force-1">Force 1</option>
                            <option value="force-1-new">Force 1 New</option>
                            <option value="fr-80">FR 80</option>
                            <option value="free-go">Free Go</option>
                            <option value="fxr150">FXR150</option>
                            <option value="genio-110-esp">Genio 110 ESP 2019</option>
                            <option value="gl-pro">GL Pro</option>
                            <option value="grom-msx-125">GROM (MSX 125)</option>
                            <option value="gsx-bandit-150">GSX Bandit 150</option>
                            <option value="hayabusa">Hayabusa</option>
                            <option value="hayate-125">Hayate 125</option>
                            <option value="inazuma-250">Inazuma 250</option>
                            <option value="jupiter">Jupiter</option>
                            <option value="jupiter-155-z-new">Jupiter 115 Z New</option>
                            <option value="jupiter-mx">Jupiter MX</option>
                            <option value="jupiter-mx-clutch-08">Jupiter MX (Clutch-08)</option>
                            <option value="jupiter-mx-clutch-09">Jupiter MX (Clutch-09)</option>
                            <option value="jupiter-mx-clutch-10-1">Jupiter MX (Clutch-10)</option>
                            <option value="jupiter-mx-clutch">Jupiter MX (Clutch)</option>
                            <option value="jupiter-mx-5-speed">Jupiter MX 5 Speed</option>
                            <option value="jupiter-mx-king-150">Jupiter MX King 150</option>
                            <option value="jupiter-z">Jupiter Z</option>
                            <option value="jupiter-z1-f-i">Jupiter Z1 F.I</option>
                            <option value="karisma">Karisma</option>
                            <option value="kaze">Kaze</option>
                            <option value="klx-150">KLX 150</option>
                            <option value="klx-150s">KLX 150S</option>
                            <option value="klx-250">KLX 250</option>
                            <option value="kr150">KR150</option>
                            <option value="ksr-110">KSR 110</option>
                            <option value="lets-115">Lets 115</option>
                            <option value="lexam">Lexam</option>
                            <option value="lexi-125vva">Lexi 125VVA</option>
                            <option value="lx-125">LX-125</option>
                            <option value="megapro">MegaPro Primus</option>
                            <option value="megelli-250sr">Megelli 250SR</option>
                            <option value="mio">Mio</option>
                            <option value="mio-gt">Mio GT</option>
                            <option value="mio-gt-fi">Mio GT FI</option>
                            <option value="mio-j-fi">Mio J FI</option>
                            <option value="mio-m3">Mio M3</option>
                            <option value="mio-soul">Mio Soul</option>
                            <option value="mio-sporty">Mio Sporty</option>
                            <option value="mio-z">Mio Z</option>
                            <option value="monster-696">Monster 696</option>
                            <option value="monster-795">Monster 795</option>
                            <option value="moskito">Moskito</option>
                            <option value="mt-09">MT-09</option>
                            <option value="mt-25">MT-25</option>
                            <option value="new-beat-street-esp-fi">New Beat Street eSP FI</option>
                            <option value="new-blade-110">New Blade 110</option>
                            <option value="new-cb150r-streetfire">New CB150R StreetFire</option>
                            <option value="new-gsx-r150">New GSX R150</option>
                            <option value="new-gsx-s150">New GSX S150</option>
                            <option value="new-mega-pro">New Mega Pro</option>
                            <option value="new-megapro-fi">New Megapro Fi</option>
                            <option value="new-satria-fu-150">New Satria FU 150 FI</option>
                            <option value="new-shogun-125">New Shogun 125</option>
                            <option value="new-shogun-125-fi">New Shogun 125 FI</option>
                            <option value="new-smash-110">New Smash 110</option>
                            <option value="new-v-ixion">New V-Ixion</option>
                            <option value="new-v-ixion-lightning">New V-Ixion Lightning</option>
                            <option value="new-vario-125-fi">New Vario 125 FI</option>
                            <option value="new-vario-150-fi">New Vario 150 FI</option>
                            <option value="new-vega-r">New Vega R</option>
                            <option value="nex-115">Nex 115</option>
                            <option value="nex-115-fi">Nex 115 FI</option>
                            <option value="nex-2">Nex 2</option>
                            <option value="ninja-150">Ninja 150</option>
                            <option value="ninja-250">Ninja 250</option>
                            <option value="ninja-krr">Ninja KRR</option>
                            <option value="ninja-rr">Ninja RR</option>
                            <option value="nmax">Nmax</option>
                            <option value="nouvo">Nouvo</option>
                            <option value="nouvo-z">Nouvo Z</option>
                            <option value="nova-dash">Nova Dash</option>
                            <option value="nova-sonic">Nova Sonic</option>
                            <option value="nsr-150">NSR 150</option>
                            <option value="panigale">Panigale</option>
                            <option value="pcx-150-cbs-lokal">PCX 150 CBS (Lokal)</option>
                            <option value="pcx-cbu-thailand">PCX CBU Thailand</option>
                            <option value="phantom-2000">Phantom 2000</option>
                            <option value="r1">R1</option>
                            <option value="r15">R15</option>
                            <option value="r1m">R1M</option>
                            <option value="r25">R25</option>
                            <option value="r3">R3</option>
                            <option value="r6">R6</option>
                            <option value="rc80">RC80</option>
                            <option value="revo">Revo</option>
                            <option value="revo-absolute">Revo Absolute</option>
                            <option value="revo-fi">Revo FI</option>
                            <option value="rgr">RGR</option>
                            <option value="rgr-150">RGR 150</option>
                            <option value="rx-king">RX King</option>
                            <option value="rxz">RXZ</option>
                            <option value="satria">Satria</option>
                            <option value="satria-f150">Satria F150</option>
                            <option value="satria-ru">Satria RU</option>
                            <option value="scoopy">Scoopy</option>
                            <option value="scoppy-esp">Scoopy eSP</option>
                            <option value="scoppy-esp-ring-12">Scoopy eSP Ring 12</option>
                            <option value="scoppy-fi">Scoopy FI</option>
                            <option value="scoppy-old-karburator">Scoopy Old Karburator</option>
                            <option value="scorpio">Scorpio</option>
                            <option value="scorpio-z">Scorpio Z</option>
                            <option value="sf-848">SF 848</option>
                            <option value="sh150i">SH150i</option>
                            <option value="shogun-110">Shogun 110</option>
                            <option value="shooter-115-fi">Shooter 115 FI</option>
                            <option value="skydrive-125">Skydrive 125</option>
                            <option value="skywave-125">Skywave 125</option>
                            <option value="smr400">SMR400</option>
                            <option value="sonic-125">SONIC 125</option>
                            <option value="sonic-150-r">Sonic 150 R</option>
                            <option value="soul-gt">Soul GT</option>
                            <option value="soul-gt-126">Soul GT</option>
                            <option value="soul-gt-125">Soul GT 125</option>
                            <option value="soul-gt-fi">Soul GT FI</option>
                            <option value="spacy-fi">Spacy FI</option>
                            <option value="spacy">Spacy Karbu</option>
                            <option value="spin-125">Spin 125</option>
                            <option value="supra-gtr-150">Supra GTR 150</option>
                            <option value="supra-x">Supra X</option>
                            <option value="supra-x-125">Supra X 125</option>
                            <option value="supra-x-125-r-dd">Supra X 125 R DD</option>
                            <option value="supra-x125-fi">Supra X125 FI</option>
                            <option value="supra-x125-helm-in">Supra X125 Helm In</option>
                            <option value="supra-x125-pgm-fi">Supra X125 PGM-FI</option>
                            <option value="thunder-125">Thunder 125</option>
                            <option value="thunder-250">Thunder 250</option>
                            <option value="tiger-2000">Tiger 2000</option>
                            <option value="tiger-800">Tiger 800</option>
                            <option value="tiger-revo">Tiger Revo</option>
                            <option value="titan-110">Titan 110</option>
                            <option value="tzm">TZM</option>
                            <option value="universal">Universal</option>
                            <option value="vario-110">Vario 110</option>
                            <option value="vario-110-fi-esp">Vario 110 eSP FI</option>
                            <option value="vario-125-esp">Vario 125 eSP FI</option>
                            <option value="vario-125-pgm-fi">Vario 125 PGM-FI</option>
                            <option value="vario-125-techno">Vario 125 Techno</option>
                            <option value="vario-150-esp-fi">Vario 150 eSP FI</option>
                            <option value="vario-techno-cbs-110">Vario Techno/ CBS 110</option>
                            <option value="vega">Vega</option>
                            <option value="vega-force">Vega Force</option>
                            <option value="jupiter-1">Vega RR</option>
                            <option value="vega-zr-fi">Vega ZR</option>
                            <option value="versys-250">Versys 250</option>
                            <option value="verza">Verza</option>
                            <option value="vespa">Vespa</option>
                            <option value="vixion">Vixion</option>
                            <option value="w175">W175</option>
                            <option value="w250">W250</option>
                            <option value="x-ride-fi">X-Ride FI</option>
                            <option value="xabre">Xabre</option>
                            <option value="xeon">Xeon</option>
                            <option value="xeon-gt-125">Xeon GT 125</option>
                            <option value="xeon-rc">Xeon RC</option>
                            <option value="xmax">XMAX</option>
                            <option value="y125z">Y125Z</option>
                            <option value="z125">Z125</option>
                            <option value="zx130">ZX130</option>
                        </select>
                    </div>
                    <div class="col half">
                        <select name="category" id="category">
                            <option value="">Category</option>
                            <option value="clutch-plate">Faito Clutch Plate</option>
                            <option value="clutch-spring">Faito Clutch Spring</option>
                            <option value="clutch-barrier-bush">Faito Clutch Carrier Bush</option>
                            <option value="roller-weight">Faito Roller Bush</option>
                            <option value="cvt-spring">Faito CVT Spring</option>
                            <option value="lite-tech-bearing">Faito Lite-Tech Bearing</option>
                            <option value="s270-bearing">Faito S720 Bearing</option>
                            <option value="bearing-steering-cone">Faito Steering Cone</option>
                            <option value="pin-bearing-pin">Faito Pin + Pin Bearing</option>
                            <option value="crank-pin-bearing">Faito Crank Pin Bearing</option>
                            <option value="brake-pads-street-sport">Faito Brake Pad</option>
                            <option value="brake-shoe">Faito Brake Shoe</option>
                            <option value="ignition-coil">Faito Ignition Coil</option>
                            <option value="plug-wire">Faito Plug Wire &amp; Cap</option>
                            <option value="roller-chain-1">Faito Roller Chain</option>
                            <option value="chain-lube">Faito Chain Lube</option>
                            <option value="gear-oil">Faito Gear Oil</option>
                            <option value="fork-oil-1">Faito Fork Oil</option>
                            <option value="brake-fluid">Faito Brake Fluid</option>
                            <option value="radiator-collant">Faito Radiator Coolant</option>
                            <option value="engine-valve-set">Faito Engine Valve Set</option>
                            <option value="valve-spring">Faito Valve Spring</option>
                            <option value="piston-set">Faito Piston Set</option>
                            <option value="camshaft">Faito Camshaft</option>
                            <option value="crank-shaft-jack-rod">Faito Crank Shaft</option>
                            <option value="connecting-rod">Faito Connecting Rod</option>
                            <option value="cam-chain-tensioner-manual">Faito Cam Chain Tensioner Manual</option>
                            <option value="gear-set-gear-complete-set">Faito Gear Set</option>
                            <option value="headlamp">Faito Headlamp</option>
                            <option value="mini-bulb">Faito Mini Bulb</option>
                            <option value="meter-bulb-signal-bulb">Faito Meter Bulb &amp; Signal Bulb</option>
                            <option value="air-filter">Faito Air Filter</option>
                            <option value="reed-valve-carbon">Faito Reed Valve Carbon</option>
                            <option value="main-jet">Faito Main Jet</option>
                            <option value="pilot-jet">Faito Pilot Jet</option>
                            <option value="sprocket-1">Faito Sprocket</option>
                            <option value="sprocket-chain-assy-415">Faito Sprocket Chain Assy</option>
                            <option value="fiberglass">Faito Fiberglass</option>
                            <option value="gasket">Faito Gasket Set</option>
                            <option value="genuine">Brembo Genuine Brake Pads</option>
                            <option value="racing">Brembo Brake Pads Racing</option>
                            <option value="off-road">Brembo Brake Pads Off Road</option>
                            <option value="scooter">Brembo Brake Pads Scooter</option>
                            <option value="road">Brembo Brake Pads Road</option>
                            <option value="petrol-pipe-nbr-pro">Faito Petrol Pipe NBR Pro</option>
                            <option value="cylinder-block-kit">Faito Cylinder Block Kit</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <br><br>
                        <input type="submit" value="Search Now" class="btn-yellow">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
