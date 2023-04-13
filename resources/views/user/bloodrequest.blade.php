@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Blood Request') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{route('user.postBloodRequest')}}" method="POST">
                                @csrf()
                                <div class="row">
                                    <h6>Patient Information</h6>
                                    <hr>
                                    <div class="col-sm-12 form-group">
                                        <label>Full name </label>   
                                        <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fName" name="pname" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <br />
                                        <label> Gender * </label><br />
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pgender" value="Male">
                                            <span class="form-check-label"> Male </span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pgender" value="Female">
                                        <span class="form-check-label"> Female</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pgender" value="Other">
                                        <span class="form-check-label"> Other</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <br />
                                        <label>Age </label>   
                                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="page" required>
                                    </div>
                                </div>
                                    <div class="row">
                                      <div class="form-group col-md-4">
                                        <br />
                                          <label>Province *</label> 
                                          <select id="provinceSel" name="province" class="form-control" size="1" required>
                                            <option selected=""> Choose Province</option>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-4">
                                        <br />
                                          <label>District *</label> 
                                          <select id="destrictsSel" name="district" class="form-control" size="1" required>
                                            <option selected=""> Choose District</option>
                                          </select>
                                      </div>
                                      <div class="form-group col-md-4">
                                        <br />
                                          <label>Municipality *</label> 
                                          <select id="municipalitySel" name="minicipality" class="form-control" size="1" required>
                                            <option selected=""> Choose Municipality</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <br />
                                            <label>Word No *</label> 
                                            <select id="wordno" name="pwordno" class="form-control" size="1" required>
                                                <option selected=""> Choose word</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <br />
                                        <label>City *</label>
                                        <input type="text" id="city" name="pcity" class="form-control" required>
                                        </div> 
                                        <div class="form-group col-md-4">
                                            <br />
                                        <label>Tole *</label>
                                        <input type="text" id="tole" name="ptole" class="form-control" required>
                                        </div>
                                    </div> 
                                    <br />
                                    <div class="row">
                                        <h6>Admit Hospital Information</h6>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label>Hospital Name *</label>
                                            <input type="text" id="hospitalname" name="hospitalname" class="form-control" required>
                                            @error('hospitalname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Hospital Address *</label>
                                        <input type="text" id="hospitaladdress" name="hospitaladdress" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <br />
                                            <label>Request Blood Group *</label>
                                            <select id="blood_group" class="form-control" name="bloodgroup"  required>
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="A-">A-</option>
                                                <option value="B-">B-</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <br />
                                            <label for="">Request Unit</label>
                                            <input type="number" class="form-control" name="unit" required>
                                        </div>
                                        <div class="col-md-3">
                                            <br />
                                            <label for="">Request Date & Time</label>
                                            <input type="datetime-local" class="form-control" name="requesteddatetime" required>
                                        </div>
                                        <div class="col-md-3">
                                            <br />
                                            <label for="">Hopital request letter No.</label>
                                            <input type="text" class="form-control" name="refno">
                                        </div>
                                    </div>
                                    
                                   
                                   
                                    <div class="form-group">
                                        <br />
                                        <button type="submit" class="btn btn-primary btn-block" onClick="signup()"> Request  </button>
                                    </div> <!-- form-group// -->      
                                    <small class="text-muted">If requested blood group is found in blood bank, We will notify.</small>                                          
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@stop
@section('js')
<script>
    var stateObject = {
    "Province 1": {
    "Bhojpur": ["Bhojpur","Shadanand","Hatuwagadhi","Ramprasad Rai","Aamchok","Tyamke Maiyunm","Arun Gaunpalika","Pauwadungma","Salpasilichho"],
    "Khotang": ["Katari municipality","Chaudandigadhi municipality","Triyuga municipality","Belaka municipality","Udayapurgadhi gaunpalika","Tapli gaunpalika","Rautamai gaunpalika","Limchungbung"],
    "Dhankuta": ["Dhankuta Municipality ","Pakhribas Municipality","Mahalaxmi Municipality","Sangurigadhi Rural Municipality","Chaubise Rural Municipality ","Khalsa Chhintang Sahidbhumi Rural Municipality ","Chhathar Jorpati  Rural Municipality"],
    
    "Ilam": ["Ilam Municipality","Deumai Municipality","Mai Municipality","Suryodaya Municipality","Phakphokthum Rural Municipality","Mai Jogmai Rural Municipality","Chulachuli Rural Municipality","  Rong Rural Municipality","Mangsebung Rural Municipality","Sandakpur Rural Municipality"],

    "Jhapa": ["Mechinagar Municipality","Bhadrapur Municipality","Birtamod Municipality","Arjundhara Municipality","Kankai Municipality","Shivasatakshi Municiplity","Gauradaha Municipality","Damak Municipality","Buddhashanti Rural Municipality","Haldibari Rural Municipality","Kachankawal Rural Municipality","Barhadashi Rural Municipality","Jhapa Rural Municipality","","Gauriganj Rural Municipality","Kamal Rural Municipality"],

    "Morang": ["Biratnagar Metropolitan City","SundarHaraicha Municipality","Belbari Municipality","Pathari-Sanischare Municipality","Urlabari Municipality","Rangeli Municipality","Letang Bhogateni Municipality","Ratuwamai Municipality","Sunawarshi Municipality"],

    "Okhaldhunga": ["Siddhicharan ","Manebhanjyang Rural Municipality","Champadevi Rural Municipality ","Sunkoshi Rural Municipality","Molung Rural Municipality","Chisankhugadhi Rural Municipality","Khiji Demba Rural Municipality","Likhu Rural Municipality"],

    "Panchthar": ["Phidim Municipality","Hilihang Rural Municipality","Kummayak Rural Municipality","Miklajung Rural Municipality","Phalelung Rural Municipality","Phalgunanda Rural Municipality","Tumbewa Rural Municipality ","Yangawarak Rural Municipality"],

    "Sankhuwasabha": ["Bhotkhola Rural Municipality ","Chainpur Municipality","Chichila Rural Municipality","Dharmadevi Municipality","Khandbari Municipality","Madi Municipality","Makalu Rural Municipality","Panchakhapan Municipality","Sabhapokhari Rural Municipality","Silichong Municipality"],
    
    "Solukhumbu": ["Solududhkunda urban","Dudhakaushika Rural","Necha Salyan Rural","Dudhkoshi Rural","Maha Kulung Rural","Sotang Rural","Likhu Pike Rural","Khumbu Pasanglhamu Rural"],

    "Sunsari": ["Itahari Sub Metropolitan City",
"Dharan Sub Metropolitan City",
"Inaruwa Municipality",
"Duhabi Municipality",
"Ramdhuni Municipality",
"Barahachhetra Municipality",
"Koshi Rural Municipality",
"Gadhi Rural Municipality",
"Barju Rural Municipality",
"Bhokraha Narashingh Rural Municipality",
"Harinagara Rural Municipality",
"Dewanganj Rural Municipality"],

    "Taplejung": ["Phungling","Aathrai Tribeni","Sidingwa","Phaktanglung","Mikkwakhola","Meringden","Maiwakhola","Pathibhara Yangwarak","Sirijangha"],

    "Terhathum": ["Aathrai Rural Municipality ","Chhathar Rural Municipality","Laliguras Municipality","Menchayam Rural Municipality ","Myanglung Rural Municipality","Phedap Rural Municipality"],
    
    "Udayapur": ["Triyuga Municipality","Katari Municipality","Chaudandigadhi Municipality","Belaka Municipality","Udayapurgadhi Rural Municipality","Rautamai Rural Municipality","Tapli","Limchungbung Rural Municipality"],
    },

    "Madesh Province": {
        "Parsa": ["Birgunj Metropolitan","Bahudarmai Municipality","Parsagadhi Municipality","Pokhariya Municipality","Bindabasini Rural Municipality","Dhobini Rural Municipality","Chhipaharmai Rural Municipality","Jagarnathpur Rural Municipality","Jirabhawani Rural Municipality","Kalikamai Rural Municipality","Pakaha Mainpur Rural Municipality","Paterwa Sugauli Rural Municipality","Sakhuwa Prasauni Rural Municipality","Thori Rural Municipality"],
        "Bara": ["Kalaiya Sub-Metropolitan City",
"Jeetpur Simara Sub-Metropolitan City",
"Kolhabi Municipality",
"Nijgadh Municipality",
"Mahagadhimai Municipality",
"Simraungadh Municipality",
"Pacharauta Municipality",
"Pheta Rural Municipality",
"Bishrampur Rural Municipality",
"Prasauni Rural Municipality",
"Adarsh Kotwal Rural Municipality",
"Karaiyamai Rural Municipality",
"Devtal Rural Municipality",
"Parwanipur Rural Municipality",
"Baragadhi Rural Municipality",
"Suwarna Rural Municipality"
],
        "Rautahat": [ "Baudhimai Municipality","Brindaban Municipality","Chandrapur Municipality","Dewahi Gonahi Municipality","Gadhimai Municipality", "Garuda Municipality","Gaur Municipality","Gujara Municipality","Ishanath Municipality","Katahariya Municipality","Madhav Narayan Municipality","Maulapur Municipality","Paroha Municipality","Phatuwa Bijayapur Municipality","Rajdevi Municipality","Rajpur Municipality","Durga Bhagwati Rural Municipality","Yamunamai Rural Municipality"],
        "Sarlahi": ["Bagmati Municipality",
                    "Balara Municipality",
                    "Barahathwa Municipality",
                    "Godaita Municipality",
                    "Harion Municipality",
                    "Haripur Municipality",
                    "Haripurwa Municipality",
                    "Ishworpur Municipality",
                    "Kabilasi Municipality",
                    "Lalbandi Municipality",
                    "Malangwa Municipality",
                    "Basbariya Rural Municipality",
                    "Bishnu Rural Municipality",
                    "Brahampuri Rural Municipality",
                    "Chakraghatta Rural Municipality",
                    "Chandranagar Rural Municipality",
                    "Dhankaul Rural Municipality",
                    "Kaudena Rural Municipality",
                    "Parsa Rural Municipality",
                    "Ramnagar Rural Municipality"],
        "Siraha": ["Lahan Municipality",
"Dhangadhimai Municipality",
"Siraha Municipality",
"Golbazar Municipality",
"Mirchaiya Municipality",
"Kalyanpur Municipality",
"Karjanha Municipality",
"Sukhipur Municipality",
"Bhagwanpur Rural Municipality",
"Aurahi Rural Municipality",
"Bishnupur Rural Municipality",
"Bariyarpatti Rural Municipality",
"Lakshmipur Patari Rural Municipality",
"Naraha Rural Municipality",
"Sakhuwanankar Katti Rural Municipality",
"Arnama Rural Municipality",
"Navarajpur Rural Municipality"],
        "Dhanusha": ["Janakpur Sub Metropolitan City",
"Chhireshwarnath Municipality",
"Ganeshman Charanath",
"Dhanusadham Municipality",
"Nagarain Municipality",
"Bideha Municipality",
"Mithila Municipality",
"Sahidnagar Municipality",
"Sabaila Municipality",
"Kamala Municipality",
"Mithila Bihari Municipality",
"Hansapur Municipality",
"Janaknandani Rural Municipality",
"Bateshwar Rural Municipality",
"Mukhiyapatti Musharniya Rural Municipality",
"Lakshminya Rural Municipality",
"Aurahi Rural Municipality",
"Dhanauji Rural Municipality"],
        "Saptari": ["Bodebarsain Municipality",
"Dakneshwori Municipality",
"Hanumannagar Kankalini Municipality",
"Kanchanrup Municipality",
"Khadak Municipality",
"Sambhunath Municipality",
"Saptakoshi Municipality",
"Surunga Municipality",
"Rajbiraj Municipality",
"Agnisaira Krishnasavaran Rural Municipality",
"Balan-Bihul Rural Municipality",
"Rajgadh Rural Municipality",
"Bishnupur Rural Municipality",
"Chhinnamasta Rural Municipality",
"Mahadeva Rural Municipality",
"Rupani Rural Municipality",
"Tilathi Koiladi Rural Municipality",
"Tirhut Rural Municipality"],
        "Mahottari": ["Aurahi Municipality",
"Balawa Municipality",
"Bardibas Municipality",
"Bhangaha Municipality",
"Gaushala Municipality",
"Jaleshwor Municipality",
"Loharpatti Municipality",
"ManaraShiswa Municipality",
"Matihani Municipality",
"Ramgopalpur Municipality",
"Ekdara Rural Municipality",
"Mahottari Rural Municipality",
"Pipara Rural Municipality",
"Samsi Rural Municipality",
"Sonama Rural Municipality"],

},

    "Bagmati Province":{
        "Bhaktapur District":["Bhaktapur",
"Changunarayan",
"Madhyapur Thimi",
"Suryabinayak Municipality",
],
        "Chitwan District":["Bharatpur Metropolitan City",
"Kalika Municipality",
"Khairahani Municipality",
"Madi Municipality",
"Ratnanagar municipality",
"Rapti Municipality",
"Ichchhakamana Rural Municipality"],

        "Dhading District":["Dhunibeshi Municipality",
"Nilkantha Municipality",
"Khaniyabas Rural Municipality",
"Gajuri Rural Municipality",
"Galchhi Rural Municipality",
"Gangajamuna Rural Municipality",
"Jwalamukhi Rural Municipality",
"Thakre Rural Municipality",
"Netrawati Dabjong Rural Municipality",
"Benighat Rorang Rural Municipality",
"Rubi Valley Rural Municipality",
"Siddhalek Rural Municipality",
"Tripurasundari Rural Municipality"],

        "Dolakha District":["Bhimeswor Municipality",
"Jiri Municipality",
"Kalinchok Rural Municipality",
"Melung Rural Municipality",
"Bigu Rural Municipality",
"Gaurishankar Rural Municipality",
"Baiteshwor Rural Municipality",
"Sailung Rural Municipality",
"Tamakoshi Rural Municipality"],

        "Kathmandu District":["Budanilkantha Municipilaty",
"Chandragiri Municipilaty ",
"Dakshinkali Municipilaty",
"Gokarneshwar Municipilaty",
"Kageshwari Manohara Municipilaty",
"Kathmandu Municipilaty", 
"Kirtipur Municipilaty",
"Nagarjun Municipilaty",
"Shankharapur Municipilaty",
"Tarakeshwar Municipilaty",
"Tokha Municipilaty"],

        "Kavrepalanchok District":["Dhulikhel Municipality",
"Banepa Municipality",
"Panauti Municipality",
"Panchkhal Municipality",
"Namobuddha Municipality",
"Mandandeupur Municipality",
"Khani Khola Rural Municipality",
"Chauri Deurali Rural Municipality",
"Temal Rural Municipality",
"Bethanchok Rural Municipality",
"Bhumlu Rural Municipality",
"Mahabharat Rural Municipality",
"Roshi Rural Municipality"],

        "Lalitpur District":["Lalitpur Metropolitan City",
"Mahalaxmi Municipality",
"Godawari Municipality",
"Konjyoson Rural Municipality",
"Bagmati Rural Municipality",
"Mahankal Rural Municipality"],

        "Makwanpur District":["Hetauda Sub-Metropolitan City",
"Thaha Municipality",
"Bhimphedi Rural Municipality",
"Makawanpurgadhi Rural Municipality",
"Manahari Rural Municipality",
"Raksirang Rural Municipality",
"Bakaiya Rural Municipality",
"Bagmati Rural Municipality",
"Kailash Rural Municipality",
"Indrasarowar Rural Municipality"],

        "Nuwakot District":["Bidur Municipality",
"Belkotgadhi Municipality",
"Kakani Rural Municipality",
"Panchakanya Rural Municipality",
"Likhu Rural Municipality",
"Dupcheshwar Rural Municipality",
"Shivapuri Rural Municipality",
"Tadi Rural Municipality",
"Suryagadhi Rural Municipality",
"Tarkeshwar Rural Municipality",
"Kispang Rural Municipality",
"Myagang Rural Municipality"],

        "Ramechhap District":["Manthali Municipality",      
"Ramechhap Municipality ",  
"Umakunda Rural Municipality",      
"Khandadevi Rural Municipality",        
"Doramba Rural Municipality",       
"Gokulganga Rural Municipality",        
"Likhu Tamakoshi Rural Municipality ",
"Sunapati Rural Municipality"],

        "Rasuwa District":["Kalika Rural Municipality",
"Gosaikunda Municipality",
"Naukunda Rural Municipality",
"Parbatikunda (Aama Chhodingmo) Rural Municipality",
"Uttargaya Municipality"],

        "Sindhuli District":["Kamalamai Municipality",
"Dudhauli Municipality",
"Sunkoshi Rural Municipality",
"Hariharpur Gadhi Rural Municipality",
"Tinpatan Rural Municipality",
"Marin Rural Municipality",
"Golanjor Rural Municipality",
"Phikkal Rural Municipality",
"Ghyanglekh Rural Municipality"],

        "Sindhupalchok District":["Chautara Sangachowkgadi",
"Bahrabise",
"Melamchi",
"Balephi Rural Municipality",
"Sunkoshi Rural Municipality",
"Indrawati Rural Municipality",
"Jugal Rural Municipality",
"Panchpokhari Thangpal Rural Municipality",
"Bhotekoshi Rural Municipality",
"Lisankhu Pakhar Rural Municipality",
"Helambu Rural Municipality",
"Tripurasundari Rural Municipality"],
    },


    "Gandaki Province": {
    "Baglung": ["Baglung Municipality",
"Dhorpatan Municipality",
"Galkot Municipality",
"Jaimuni Municipality",
"Bareng Rural Municipality",
"Khathekhola Rural Municipality",
"Taman Khola Rural Municipality",
"Tara Khola Rural Municipality",
"Nisikhola Rural Municipality",
"Badigad Rural Municipality"],

    "Gorkha": [
    "Gorkha Municipality",
    "Palungtar Municipality",
    "Sulikot Rural Municipality",
    "Siranchowk Rural Municipality",
    "Ajirkot Rural Municipality",
    "Tsum Nubri Rural Municipality",
    "Dharche Rural Municipality",
    "Bhimsen Thapa Rural Municipality",
    "Sahid Lakhan Rural Municipality",
    "Aarughat Rural Municipality",
    "Gandaki Rural Municipality"
    ],

    "Kaski": ["Pokhara Metropolitan City", "Annapurna Rural Municipality", "Machhapuchchhre Rural Municipality", "Madi Rural Municipality", "Rupa Rural Municipality"],

    "Lumjung": ["Besisahar Municipality",
"Dordi Rural Municipality",
"Dudhpokhari Rural Municipality",
"Kwhlosothar Rural Municipality",
"Madhya Nepal Municipality",
"Marsyandi Rural Municipality",
"Rainas Municipality",
"Sundarbazar Municipality"],

    "Manang": ["Chame Municipality",
"Nason Rural Municipality",
"Narpa Bhumi Rural Municipality",
"Manang Ngisyang Rural Municipality"],

    "Musthang": ["Gharpajhong",
"Thasang",
"Barhagaun Muktichhetra",
"Lomanthang",
"Dalome"],

    "Magadi": ["Beni Municipality",
"Annapurna Rural Municipality",
"Dhaulagiri Rural Municipality",
"Mangala Rural Municipality",
"Malika Rural Municipality",
"Raghuganga Rural Municipality"],

    "Nawalpur": ["Kawasoti municipality (Headquarter)",
"Gaindakot municipality",
"Devachuli municipality",
"Madhyabindu municipality",
"Baudikali Rural municipality",
"Bulingtar Rural municipality",
"Binayi Tribeni Rural municipality",
"Hupsekot Rural municipality"],

    "Parbat": ["Kushma Municipality",
"Phalewas Municipality",
"Jaljala rural municipality ",
"Paiyun Rural Municipality",
"Mahashila Rural Municipality",
"Modi Rural Municipality",
"Bihadi Rural Municipality"],

    "Syangja": ["Galyang Municipality",
"Chapakot Municipality",
"Putalibazar Municipality",
"Bheerkot Municipality",
"Waling Municipality",
"Arjun Chaupari Rural Municipality",
"Aandhikhola Rural Municipality",
"Kaligandaki Rural Municipality",
"Phedikhola Rural Municipality",
"Harinas Rural Municipality",
"Biruwa Rural Municipality"],

    "Tanahun": ["Bhanu Municipality",
"Bhimad Municipality",
"Byas Municipality",
"Shuklagandaki Municipality",
"Anbu Khaireni Rural Municipality",
"Devghat Rural Municipality",
"Bandipur Rural Municipality",
"Rishing Rural Municipality",
"Ghiring Rural Municipality",
"Myagde Rural Municipality"],
    },

    " Lumbeni Province ":{
        "Kapilvastu": ["Kapilvastu Municipality",
                        "Banganga Municipality",
                        "Buddhabhumi Municipality",
                        "Shivaraj Municipality",
                        "Krishnanagar Municipality",
                        "Maharajgunj Municipality",
                        "Mayadevi Rural Municipality",
                        "Yashodhara Rural Municipality",
                        "Suddhodhan Rural Municipality",
                        "Bijaynagar Rural Municipality"],

    "Parasi": ["Bardghat urabn",
                "Ramgram urban",
                "Sunwal urban",
                "Susta rural",
                "Palhi Nandan rural",
                "Pratappur rural",
                "Sarawal rural"],

    "Rupandehi": ["Butwal Sub-Metropolitan Municipality",
"Devdaha    Municipality",  
"Lumbini Sanskritik Municipality",
"Sainamaina Municipality",
"Siddharthanagar Municipality", 
"Tilottama Municipality ",
"Gaidahawa Rural Municipality", 
"Kanchan    Rural Municipality",
"Kotahimai Rural Municipality", 
"Marchawari Rural Municipality",
"Mayadevi Rural Municipality",
"Omsatiya Rural Municipality",
"Rohini Rural Municipality",
"Sammarimai Rural Municipality",
"Siyari Rural Municipality",    
"Suddodhan Rural Municipality"],

    "Arghakhanchi ": ["Sandhikharka Municipality",
"Sitganga Municipality",
"Bhumikasthan Municipality",
"Chhatradev Rural Municipality",
"Panini Rural Municipality",
"Malarani Rural Municipality"],

    "Gulmi": ["Kaligandaki Rural Municipality",
"Satyawati Rural Municipality",
"Ruru Rural Municipality",
"Dhurkot Rural Municipality",
"Chhatrakot Rural Municipality",
"Musikot Urban Municipality",
"Resunga Urban Municipality",
"Gulmidarbar Rural Municipality",
"Chandrakot Rural Municipality",
"Isma Rural Municipality",
"Madane Rural Municipality",
"Malika Rural Municipality"],

    "Palpa": ["Tansen Municipality",
"Rampur Palpa",
"Rainadevi Chhahara Rural Municipality",
"Ripdikot Rural Municipality",
"Bagnaskali Rural Municipality",
"Rambha Rural Municipality",
"Purbakhola Rural Municipality",
"Nisdi Rural Municipality",
"Mathagadi Rural Municipality",
"Tinahu Rural Municipality"],

    "Dang": ["Ghorahi Sub-Metropolitan City",
"Tulsipur Sub-Metropolitan City",
"Lamahi Municipality",
"Gadhawa Rural Municipality",
"Rajpur Rural Municipality",
"Shantinagar Rural Municipality",
"Rapti Rural Municipality",
"Banglachuli Rural Municipality",
"Dangisharan Rural Municipality",
"Babai Rural Municipality"],

    "Pyuthan": ["NO"],

    "Rolpa": ["Rolpa Municipality",
"Runtigadi Rural Municipality",
"Triveni Rural Municipality",
"Sunil Smiriti Rural Municipality",
"Lungri Rural Municipality",
"Sunchhari Rural Municipality",
"Thawang Rural Municipality",
"Madi Rural Municipality",
"Ganga Dev Rural Municipality",
"Pariwartan Rural Municipality"],

    "Eastern Rukum ": ["Bhume rural",
"Putha rural",
"Uttarganga rural", 
"Sisne rural"],

    "Banke": ["Nepalgunj Sub-Metropolitan City",
"Kohalpur Municipality",
"Rapti-Sonari Rural Municipality",
"Narainapur Rural Municipality",
"Duduwa Rural Municipality",
"Janaki Rural Municipality",
"Khajura Rural Municipality",
"Baijanath Rural Municipality"],

    "Bardiya": ["Gulariya municipality",
"Rajapur municipality",
"Madhuwan municipality",
"Thakurbaba municipality",
"Basgadhi municipality",
"Barbardiya municipality",
"Badhaiyatal rural municipality",
"Geruwa rural municipality"],
    },

    " Karnali Province":{
        "Dailekh District":["Narayan Urban Municipilaty",   
"Dullu  Urban Municipilaty",
"Aathbis    Urban Municipilaty",
"Chamunda Bindrasaini Municipilaty",    
"Thantikandh Rural Municipilaty",   
"Bhairabi Rural Municipilaty",  
"Mahabu Rural Municipilaty" ,
"Naumule    Rural Municipilaty" ,
"Dungeshwar Rural Municipilaty",    
"Gurans Rural Municipilaty" ,
"Bhagawatimai Rural Municipilaty"],

        "Dolpa District":["Thuli Bheri Municipality",
"Tripurasundari Municipality",
"Dolpo Buddha Rural Municipality",
"She Phoksundo Rural Municipality",
"Jagadulla Rural Municipality",
"Mudkechula Rural Municipality",
"Kaike Rural Municipality",
"Chharka Tangsong Rural Municipality"],

        "Humla District":["Simkot Rural Municipality",
"Namkha Rural Municipality",
"Kharpunath Rural Municipality",
"Sarkegad Rural Municipality",
"Chankheli Rural Municipality",
"Adanchuli Rural Municipality",
"Tajakot Rural Municipality"],

        "Jajarkot District":["Bheri municipilaty",
"Chhedagad municipilaty",
"Nalgad municipalaty" ,
"Junichande Rural municipalaty",
"Kushe Rural municipalaty",
"Barekot Rural municipalaty",
"Shivalaya Rural municipalaty"],

        "Jumla District":["Chandannath", 
"Kankasundari ",
"Sinja ",
"Hima" ,
"Tila ",
"Guthichaur",
"Tatopani" ,
"Patarasi" ],

        "Kalikot District":["Khandachakra Municipality",
"Raskot Municipality",
"Tilagufa Municipality",
"Pachaljharana Rural Municipality",
"Sanni Triveni Rural Municipality",
"Narharinath Rural Municipality",
"Shubha Kalika Rural Municipality",
"Mahawai Rural Municipality",
"Palata Rural Municipality"],

        "Mugu District":["Chhayanath Rara Municipality",
"Mugum Karmarong Rural Municipality",
"Soru Rural Municipality",
"Khatyad Rural Municipality"],

"Salyan District":["Shaarda Municipality",
"Bagchaur Municipality",
"Bangad Kupinde Municipality",
"Kalimati Rural Municipality",
"Tribeni Rural Municipality",
"Kapurkot Rural Municipality",
"Chatreshwari Rural Municipality",
"Kumakh Rural Municipality",
"Siddha Kumakh Rural Municipality",
"Darma Rural Municipality"],

"Surkhet District":["Birendranagar Municipality",       
"Bheriganga Municipality",  
"Gurbha Kot Municipality",      
"Panchapuri Municipality",      
"Lekbesi Municipality",
"Chaukune Rural Municipality",
"Barahatal Rural Municipality",
"Chingad Rural Municipality",
"Simta Rural Municipality"],

"Western Rukum District":["Musikot municipality",
"Chaurjahari municipality",
"Aathbiskot municipality",
"Banphikot Rural municipality",
"Tribeni  Rural municipality",
"Sani Bheri  Rural municipality"],
    },

" Sudurpashchim Province ":{
"Achham  ": ["Mangalsen municipality",
"Kamalbazar कमलबजार municipality",
"Sanfebagar साँफेबगर municipality", 
"Panchadewal Binayak पञ्चदेवल municipality",
"Ramaroshan रामारोशन rural",
"Chaurpati चौरपाटी rural",  
"Turmakhand तुर्माखाँद  rural", 
"Mellekh    मेल्लेख rural", 
"Dhakari    ढँकारी rural    ",
"Bannigadi Jayagad बान्नीगडीजैगड rural"],

    "Baitadi ": ["Dasharathchand Municipality",
    "Patan Municipality",
    "Melauli Municipality",
    "Purchaudi Municipality",
    "Surma Rural Municipality",
    "Sigas Rural Municipality",
    "Shivanath Rural Municipality",
    "Pancheshwor Rural Municipality",
    "Dogdakedar Rural Municipality",
    "Dilasaini Rural Municipality"],

    "Bajhang ": ["Jaya Prithvi Municipality",
"Bungal Municipality",
"Talkot Rural Municipality",
"Masta Rural Municipality",
"Khaptadchhanna Rural Municipality",
"Thalara Rural Municipality",
"Bitthadchir Rural Municipality",
"Surma Rural Municipality",
"Chhabis Pathibhera Rural Municipality",
"Durgathali Rural Municipality",
"Kedarsyu Rural Municipality",
"Saipal Rural Municipality",],

    "Bajura  ": ["Badimalika Municipality",
"Triveni Municipality",
"Budhiganga Municipality",
"Budhinanda Municipality",
"Gaumul Rural Municipality",
"Jagnnath Rural Municipality",
"Swamikartik Khapar Rural Municipality",
"Chhededaha Rural Municipality",
"Himali Rural Municipality"],

    "Dadeldhura ": ["Amargadhi municipality",
"Parshuram municipality",
"Aalitaal Rural Municipality",
"Bhageshwar Rural Municipality",
"Navadurga Rural Municipality",
"Ajaymeru Rural Municipality",
"Ganyapadhura Rural Municipality"],

    "Darchula ": [  "Mahakali   Urban", 
"Shailyasikhar  Urban", 
"Malikarjun Rural", 
"ApihimalRural",    
"Duhun  Rura",  
"Naugad Rural",
"Marma  Rural",     
"Lekam  Rural",
"Vyans  Rural"],

    "Doti ": ["Dipayal Silgadhi Municipality",
"Shikhar Municipality",
"Purbichauki Rural Municipality",
"Badikedar Rural Municipality",
"Jorayal Rural Municipality",
"Sayal Rural Municipality",
"Aadarsha Rural Municipality",
"Dr. K. I. Singh Rural Municipality",
"Bogatan Rural Municipality"],

    "Kailali ": ["Dhangadhi Sub-Metropolitan City",
"Lamki Chuha Municipality",
"Tikapur Municipality",
"Ghodaghodi Municipality",
"Bhajani Municipality",
"Godawari Municipality",
"Gauriganga Municipality",
"Janaki Rural Municipality",
"Bardagoriya Rural Municipality",
"Mohanyal Rural Municipality",
"Kailari Rural Municipality",
"Joshipur Rural Municipality",
"Chure Rural Municipality"],

    "Kanchanpur ": ["Bedkot municipality",
"Belauri municipality",
"Bhimdatta municipality",
"Mahakali municipality",
"Shuklaphanta municipality",
"Krishnapur municipality",
"Punarbas municipality",
"Laljhadi rural municipality",
"Beldandi rural municipality"],
    }
    }
    window.onload = function () {
    var provinceSel = document.getElementById("provinceSel"),
    destrictsSel = document.getElementById("destrictsSel"),
    municipalitySel = document.getElementById("municipalitySel");
    for (var province in stateObject) {
    provinceSel.options[provinceSel.options.length] = new Option(province, province);
    }
    provinceSel.onchange = function () {
    destrictsSel.length = 1; // remove all options bar first
    municipalitySel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) return; // done
    for (var districts in stateObject[this.value]) {
    destrictsSel.options[destrictsSel.options.length] = new Option(districts, districts);
    }
    }
    provinceSel.onchange(); // reset in case page is reloaded
    destrictsSel.onchange = function () {
    municipalitySel.length = 1; // remove all options bar first
    if (this.selectedIndex < 1) return; // done
    var district = stateObject[provinceSel.value][this.value];
    for (var i = 0; i < district.length; i++) {
    municipalitySel.options[municipalitySel.options.length] = new Option(district[i], district[i]);
    }
    }
    }
</script>
@stop