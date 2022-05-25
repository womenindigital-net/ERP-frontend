@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
  type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
  type="text/css" />
<link href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') STUDENT QAS @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"><i class="fa fa-user"></i>PROFILE</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".social-communication-view"><i class="fa fa-plus"></i>ADD</button>
          </div>
        </div>
        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
          <thead>
            <tr>
              <th>Collection Date</th>
              <th>Student Name</th>
              <th>Collected By</th>
              <th>Log</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2019-02-03</td>
              <td>Omiggg</td>
              <td>Karishma Cultural</td>
              <td>Create: Karishma Cultural @ 2019-02-17 18:32:43</td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".social-communication-view">
                <i class="mdi mdi-eye"></i>
                </button>
                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                </button>
                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i class="fas fa-check"></i>
                </button>
                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                <i class="mdi mdi-pencil"></i>
                </button>
                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                <i class="bx bx-dollar"></i>
                </button>
                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                <i class="fas fa-arrow-circle-right"></i>
                </button>
                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                <i class="fas fa-trash-alt"></i>
                </button> 
            </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->
{{-- ===================== --}}
<!--  Large modal example -->
<div class="modal fade social-communication-view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Social Communication (PA2bOT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Social Communication</h3>
          <section>
            <form>
                <div class="col-xs-12 col-md-3 input-group pull-left pb-2">
                    <label class="p-2">Collection Date:</label>
                    <input class="form-control strip-tags" id="CollectionDate" placeholder="Collection Date(YYYY-MM-DD)" required="" name="CollectionDate" type="date" value="2022-05-15">
                    <span class="help-block text-bold"></span>
                </div>

                <div class="col-xs-12 col-md-3 input-group pull-left pb-2">
                    <label class="p-2">Teacher: <span class="text-danger text-bold">*</span></label>
                    <select class="form-control strip-tags select2" id="Teacher" required="" name="TeacherID"><option value="">-- Select --</option><option value="169">abulhasnat</option><option value="173">nila01</option><option value="18">Airins</option><option value="97">AmalRozareo</option><option value="124">anasbin</option><option value="24">arupmandal</option><option value="145">asadzaman</option><option value="103">Badshah</option><option value="96">BijoyRozareo</option><option value="98">Chandan</option><option value="109">dolonbishwash</option><option value="105">golamrabbani</option><option value="144">jahinur</option><option value="104">kalonhossain</option><option value="102">ManikMiah</option><option value="125">mdmasud</option><option value="122">masudur</option><option value="99">Siddique</option><option value="121">aminul</option><option value="12">Amirhossain</option><option value="95">BillalMondal</option><option value="110">kamrul</option><option value="10">kutubuddin</option><option value="146">moniakter</option><option value="23">nupurnahar</option><option value="15">Nuramin</option><option value="9">Nurjahan</option><option value="80">nurunnahar</option><option value="13">nusrat</option><option value="147" selected="selected">ohidulhassan</option><option value="128">ozifaakter</option><option value="116">sangma</option><option value="106">moniruzzaman</option><option value="100">Sabina</option><option value="8">srdanny</option><option value="170">sarothi</option><option value="107">shahnaj</option><option value="167">shamimalovely</option><option value="149">testHRAdmin</option><option value="83">tirtha</option></select>
                    <span class="help-block text-bold"></span>
                </div>

                <div class="col-xs-12 col-md-3 input-group pull-left pb-2">
                    <label class="p-2">Candidate ID: <span class="text-danger text-bold">*</span></label>
                    <select class="form-control strip-tags select2" id="StudentID" required="" name="StudentID"><option selected="selected" value="">-- Select --</option><option value="245">Aalliyah Tehzeeb Ahmed</option><option value="4">abdullah-al-nafi antor</option><option value="91">Abdullahil Baki</option><option value="171">Abdur Rahman Sajid</option><option value="281">Abid Hossain Turjo</option><option value="272">Abid Kabir Chowdhury</option><option value="98">Abrar Ahosab Talha</option><option value="282">Abrar Jawad Siam</option><option value="148">Abu Sufiyan</option><option value="116">Adib Akbar</option><option value="48">Adiba Atiar</option><option value="215">Adil Anaf</option><option value="153">Aditya Chakraborty</option><option value="219">Adiyan Islam Danial</option><option value="118">Adkin Rozar Quiah</option><option value="203">Adnan Shahriyar</option><option value="12">Afsana sultana suma</option><option value="140">Ahnaf Abir</option><option value="155">Ahnaf Ahmed Abid</option><option value="177">Ahnaf morshed</option><option value="263">Ahnaf wasit Rahman Tabib</option><option value="143">Ahtesamul Huq Pranto</option><option value="77">Ajmain Mehtab Siam</option><option value="223">Al Amin</option><option value="72">Ali Hamza Siam</option><option value="217">Alif Hassan</option><option value="196">Alil Arysa Mariya</option><option value="226">Am Azmain Araf</option><option value="60">Amit Sujauddin Turag</option><option value="206">Amiya Deb Nath</option><option value="130">Amlan Ahmed</option><option value="268">Anas Motabsin</option><option value="167">Anindo Dey Dhrubo</option><option value="216">Annaf Mansib</option><option value="115">Arafat Hoshen Ronok</option><option value="17">Arav Arnav Hossain</option><option value="210">Arif Foysal</option><option value="239">Ariyan Arin Khan</option><option value="113">Arjun Aldrin Rozario</option><option value="238">Aruz Murshed</option><option value="178">Aryan Talukder</option><option value="278">Aryan Zaman</option><option value="114">Arzun  Aldrin Rozario</option><option value="193">Asaduzzaman Rokib</option><option value="242">Ashfaq Sadi</option><option value="291">Ashfaque Rahman Arikto</option><option value="262">asifur rahman</option><option value="159">Atif Arham</option><option value="212">Atrolita Subhan</option><option value="243">Azan Ahnaf Mogno</option><option value="104">Badsha Faisal</option><option value="5">Boni Amin</option><option value="73">Dewoan Farhat Ferdows</option><option value="75">Diponkor Dey</option><option value="147">Durjoy Kamal</option><option value="78">Ehtesamul Hoqu Yeash</option><option value="294">Fabiha Nusrat Racily</option><option value="241">Fahim Alam</option><option value="174">Fahim Alom</option><option value="123">Fahim-Ul Jaman</option><option value="202">Fahmid Iftiza Karim</option><option value="297">Fardin Mohammad Sami</option><option value="144">Farhan Amin</option><option value="131">Farhan Rahman</option><option value="121">Farish Mahir Hosan</option><option value="103">Faruk Ahmed</option><option value="164">Farzad Hussain</option><option value="176">Fatema Tuj Johra</option><option value="255">Fatin Ishrak Shayon</option><option value="51">Faysal hossen Rafi</option><option value="168">Ferdous Rahman Sifat</option><option value="157">Gourab Ghosh</option><option value="142">Gulam Nurshid Shuvo</option><option value="108">Hamim ullah mahin</option><option value="145">Hasan Mahmud Siddiq Pavel</option><option value="49">Hasibur Rahman Fahim</option><option value="47">Hisham Islam</option><option value="198">Hossain Mohammad Taveer</option><option value="252">Hossain Rafif Ahyaan</option><option value="30">Humaira Kabir Afra</option><option value="9">Humaira Sultana</option><option value="18">Iaffee Hossain Dipto</option><option value="32">Ibrahim Bepari</option><option value="183">Ibrahim Khalid</option><option value="256">Ibrahim Rashid</option><option value="25">Idham Malek</option><option value="97">Ifamul  Haque</option><option value="137">Ima islam</option><option value="158">Ipshita Jahin</option><option value="254">Irfanul Haque Sami</option><option value="79">Ishaba Hafiz Sushmi</option><option value="220">Ishmam Reza</option><option value="214">Istique Ahamed</option><option value="296">Jaed Bin Shafi</option><option value="165">Jannatun nur Anika</option><option value="11">Jarif mahadi</option><option value="211">JBL Johnny Gomes</option><option value="162">Julious Chris Gomez</option><option value="94">K.M Ishmam</option><option value="90">Kabbo roy</option><option value="20">Kaife azmee Fahim</option><option value="180">Ketoki Erum Elias</option><option value="267">khondokar ahnaf mazhab</option><option value="279">Kzi Rahmat Ullah</option><option value="35">Labib Fawaz Chowdhury</option><option value="37">Labiba Kishwar Eleena</option><option value="179">Mahadin Mahmud Mahim</option><option value="184">Mahadin Mahmud Mahim</option><option value="19">Mahfuzul Islam (Mahfuz)</option><option value="169">Mahir Abrar</option><option value="275">Mahir Muntasir</option><option value="182">Mahmud  Israq Huda Ridom</option><option value="34">Mahmudul Hasan Misu</option><option value="175">Maisha Afroz</option><option value="222">Maria Afroz</option><option value="101">Mayan Hossain</option><option value="57">Md Hosen</option><option value="253">Md Imtiaz Hossain Mahin</option><option value="287">MD Mostsfizur Rahman</option><option value="246">Md Mubtasin Kabir Tasin</option><option value="42">md samiul islam anik</option><option value="207">MD Tahsan Hossain</option><option value="172">Md. Abid Kabir Chowdhury</option><option value="132">Md. Ahtisamul Huqe (Pranto)</option><option value="290">Md. Arfanul Islam</option><option value="227">MD. Fahmid Rayeed</option><option value="197">Md. Hasibur Rahman Rifat</option><option value="66">Md. Milon Hossain</option><option value="2">Md. Moinul Islam Supta</option><option value="151">Md. Rezwan Al Safi (Rezvi)</option><option value="33">Md. Saadaman Tanvir Tikhon</option><option value="160">Md. Samiul Hasan</option><option value="88">Md. Shahidullah As-Saad Arman</option><option value="276">Md. Shahriar Ahmed sohan</option><option value="7">Md. Shakib Khan</option><option value="250">Md. Sharifin Khan (Ridaan)</option><option value="181">Md. Touhidul Islam Khan</option><option value="188">MD.Ibrahim Hassan Bhuyan</option><option value="106">Md.muhid</option><option value="71">Md.Nurur Rahaman</option><option value="65">Md.shah Rizwan Hussain Miah</option><option value="69">Md.zahid hossain</option><option value="117">Medhat Islam</option><option value="63">Meherunnesa Bristy</option><option value="15">Mekat Rahman</option><option value="38">Mhutasim Tazwar Shornil</option><option value="260">Mohammad hasan farhan</option><option value="229">Mosbitul Razin Leon</option><option value="205">Muntakaha Islam Chowdhury</option><option value="80">Musa Zaman</option><option value="295">Mustafijur Rahman Sami</option><option value="280">Mymunatul Jannat</option><option value="146">Mysha Chowdhury Diba</option><option value="120">Nabila</option><option value="259">Nafiu alom priyon</option><option value="141">Nafiz Abdullah</option><option value="199">Nahiyan Ahsan Mahabub</option><option value="74">Nakibul Islam</option><option value="22">Nasib moinuddin Ahmed</option><option value="125">Nasiba Zabir shoily</option><option value="273">Nayaz  Ibne Zakir</option><option value="201">Nayaz Ibna Zakir</option><option value="128">Nazifa Fiona</option><option value="89">Nazim hosain</option><option value="93">Nazmus Saquib</option><option value="45">Niloy paul</option><option value="173">Novera Aqlas</option><option value="224">Nusaiba Mahzabin</option><option value="251">Nusrat Amin Mayash</option><option value="83">Omiggg</option><option value="209">Pranto Ghosh</option><option value="156">Rafat Islam</option><option value="62">Raiyan</option><option value="134">Raiyana Mahzabeen Shaily</option><option value="28">Randy Francis Quiah</option><option value="191">Ratul hasan rohan</option><option value="236">Rayatul islam rayat</option><option value="111">Redwon Hassan Shanto</option><option value="221">Rfael Nadel Srabon</option><option value="265">Riasat mahbub</option><option value="264">Ridwanur Rahman Arib</option><option value="68">Rion Khan</option><option value="136">Rohima akter</option><option value="67">Rubel Laskar</option><option value="110">Rubyaet Khan Kafi</option><option value="235">Rudro Nil</option><option value="257">Ruhan Abrar Reze (Ruyali)</option><option value="3">Rumi Akhter</option><option value="274">Ruquaia Zahan</option><option value="233">Sadab subah</option><option value="27">Saddam Rahman</option><option value="152">Saddman Arif</option><option value="271">Sadman Hossain Khan</option><option value="129">Sadman sarar chowdhury</option><option value="234">Safayet khan Emon</option><option value="283">Safina Zerin Afra</option><option value="21">Safwanul Amin Safwan</option><option value="1">SAFWAT NASIF</option><option value="61">Sahriar Hassan Sabid</option><option value="135">Saif Adil Hque Rehan</option><option value="96">Sajid Tahsan Omio</option><option value="52">Sajiya Afrin Jeri</option><option value="53">Sajiya Afrin Jerin</option><option value="54">Sajiya Afrin Jerin</option><option value="119">Sakib Rahaman</option><option value="269">Sakiyan Ha irafsun</option><option value="150">Sameer Asif</option><option value="186">Samiha Bhuiya Sneha</option><option value="139">Samiha Rahman zaayn</option><option value="56">Samir Khan</option><option value="6">Samiya Ahmed</option><option value="284">Sammer Aarab Azad</option><option value="192">Samrana  Hasan</option><option value="14">Sanjida Rahman Lithi</option><option value="8">SARRAJ SARWAR</option><option value="288">Sauda Akhter</option><option value="258">Savio</option><option value="127">Sayantan Chakraborty</option><option value="112">Sayantu hoque Ohona</option><option value="270">Sayed Abyez Zoha</option><option value="194">Sayed Mohito salam</option><option value="230">Sayem Hasan</option><option value="87">Sazid Tahsan Omiyo</option><option value="204">Sazzad Hossain Jony</option><option value="138">Seeam Ul Karim</option><option value="122">Seif Adl Huq</option><option value="292">Sekh Qamer abdullah</option><option value="240">Shaed Bin Abdul Kader</option><option value="266">Shafat wasiq aman ornob</option><option value="16">Shafin Abrar</option><option value="70">Shahin Misha</option><option value="31">Shahriar Mahmud</option><option value="277">Shaiketul Islam</option><option value="55">Shaikh Sharid Reza</option><option value="261">Shamit sharbartha Shil Adi</option><option value="200">Sharaf Aimon Johef</option><option value="225">Sharaf Aiuon Zoheb</option><option value="64">Shayanta Chakraborty</option><option value="81">Shayanton chokroborty</option><option value="249">sheikh faiyaz umar wafi</option><option value="293">Sheikh Labiba AKbar</option><option value="232">Sheikh Nasif Alavi</option><option value="247">Sheikh Rafiur Rahaman</option><option value="40">Shihab Shahriar</option><option value="289">Shuaib Ahmad</option><option value="124">Sifat-ulla</option><option value="237">Sijun munira Nabiha</option><option value="154">Sishan Azad</option><option value="24">Sourav Barua</option><option value="189">studentForTest</option><option value="58">Suba jaman Jahara</option><option value="102">Suhel Ahmed Chowdhury</option><option value="218">Syed Mohammad Azaan</option><option value="149">syeda tahani</option><option value="107">Syuwot Arko</option><option value="10">Tabassum Mehejbeen Liana</option><option value="133">Tafsir Hauqe</option><option value="248">Tahrim</option><option value="82">Tahshin Shahriar Omi</option><option value="228">Tahsin Ullah</option><option value="166">TAIF ARHAM</option><option value="244">Tamzid Bin Islam Joy</option><option value="99">Tamzid Nasher (Tahim)</option><option value="43">Taneem Tanveer</option><option value="187">Tanhim Fahmid Udoy</option><option value="39">Tanvir Ahmed</option><option value="170">Tanvir Hasan</option><option value="231">Tanvir Hossain</option><option value="208">tasdeeq Sadaf</option><option value="76">Tashim Bin Mozaffar</option><option value="126">Tasin Khan Jim</option><option value="59">Tasnimul Mannan Mahin</option><option value="285">Tasniya Islam</option><option value="44">Tausif Yameen</option><option value="84">Tayeen Haque</option><option value="190">testingStudent</option><option value="109">Tohidul Islam</option><option value="163">Tonoy Das</option><option value="95">Wasi Rahman Adnan</option><option value="213">Wasif Abrar Rahman</option><option value="100">Yessir asad</option><option value="41">Zabeer Abdullah Al Kabir</option><option value="86">Zabeer Abdullah Al Kabir</option><option value="92">Zaeem Ur Rahman</option><option value="286">Zannati Tabashum Tamanna</option><option value="85">Zarin Tasnim Shayeree</option><option value="105">Zawad bin mahmud Tabib</option><option value="298">Zehran Nuraj Islam</option><option value="26">Zinia Suzana Talukder</option><option value="161">Zunaid Wasif</option></select>
                    <span class="help-block text-bold"></span>
                </div>
                

                <div class="col-xs-12 col-md-12 form-group pb-2">
                  <label class="col-md-12 p-2">Description:</label>
                  <p>Social Communication checklist</p>
                </div>
                                        
                <div class="col-xs-12 col-md-12 form-group pb-2">
                  <label class="col-md-12 p-2">Instruction:</label>
                 <p> These social communication skills develop over time. Read the behaviors below and place an X in the appropriate column that describes how your child uses words/language, no words (gestures – preverbal) or does not yet show a behavior.</p>
                </div>
              </form>
          </section>

          <!-- Company Document -->
          <h3>Pragmatic Objective</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Interaction with adults</h5>
                  <div class="row">
                    
                    <div class="form-check">

                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios" checked="">
                        <label class="form-check-label">Not Present </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Uses 1-3 Words / sentences </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">  Able to communicate/ express opinion  </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">  Uses Complex Language  </label>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5> Interaction with age-appropriate peers</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5> Interaction with younger children</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5> Waiting for a response from peers</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5> Negotiating deals</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Taking turns</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to interact with many individuals simultaneously</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to establish multiple friendships</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Knowing when to persist or let go of an idea</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>
                    Interpreting facial expressions and voices</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>
                    Understanding the rules of the game</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>
                    Expressing various appropriate expressions</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Receiving and giving gifts</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Understanding sharing and the concept of give and take</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Participation in group activities</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Passive tendencies</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Aggressive tendencies</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Responsiveness</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to handle being “left out”</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          

          <h3>PERSONAL</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Expresses feelings</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5> Identifies feelings (I’m happy.)</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5> Explains feelings (I’m happy because it’s my birthday)n</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Provides excuses or reasons</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Offers an opinion with support</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Complains</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Blames others</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>Topic Maintenance</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to establish a topic</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>


                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to maintain topic relevancy</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to change a topic using signals</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to change a topic using verbal means</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Relevancy of information</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to interrupt appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to terminate the conversation</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Conversational Structure</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to initiate a conversation</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>


                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to establish a conversation outside of the interest area</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to acknowledge others in conversation</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to delete redundant information appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to order information appropriately (new info follows old)</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Use of pedantic speech</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>         
          </section>


          <!-- Bank Details -->
          <h3>Word Structure</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use generals/specifics</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Pronoun use</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Use of word referents</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to employ Theory of Mind (presuppostion)</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>Manner/Effectiveness</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Lie, ambiguous, confusing information share</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Provides relevant information</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Truthfulness of information (grandiosity)</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to establish joint activity</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Tendency to present personal opinions as factual</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Repair Structures</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Requests clarification as needed</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>


                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Spontaneously provides additional information</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Requests repetition of information for clarification purposes</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Functional Intent > A.Responsiveness</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5> Looks at speaker when called</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Delay of response</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to label information appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to describe objects appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to describe events appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to state facts appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to provide clarification appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <h3>Functional Intent > B.INSTRUMENTAL – States needs</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Makes polite requests</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Makes choices</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Gives description of an object wanted</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Expresses a specific personal need</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Requests help</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <h3>Functional Intent > C. Requesting</h3>
          <section>
            <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Ability to request information appropriately</h5>
                    <div class="row">
                      
                    <div class="form-check">

                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios" checked="">
                        <label class="form-check-label">Not Present </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Uses 1-3 Words / sentences </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">  Able to communicate/ express opinion  </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">  Uses Complex Language  </label>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to request permission appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to request yes-no responses appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use Wh-Questions appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to request an action of another appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to request clarification appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to request attention appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to request help appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Functional Intent > D. Prosody</h3>
          <section>
            <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Ability to use appropriate rate of speech</h5>
                    <div class="row">
                      
                    <div class="form-check">

                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios" checked="">
                        <label class="form-check-label">Not Present </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Uses 1-3 Words / sentences </label>
                      </div>
                      <div class="me-5 ">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">  Able to communicate/ express opinion  </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">  Uses Complex Language  </label>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use appropriate tone of voice</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use appropriate pitch</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use appropriate loudness</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to comprehend implied meanings via tone of voice</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to comprehend implied meanings via inflectional cues</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Functional Intent > E. Protests</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to state his opinion using appropriate means</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to disagree</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3> Functional Intent > F. Style of Conversation</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to shift the style of conversation according to person</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to shift the style of conversation according to the setting</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to shift the style of conversation according to humor</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to engage a listener appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use politeness</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Appropriateness to the situation</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize other’s moods</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to differentiate requests from demands</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Functional Intent > G. Humor</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Comprehends humor</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Uses humor appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Functional Intent > H. Greetings/Acknowledgements</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Provides greetings</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Uses greetings</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to acknowledge the presence of another individual</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Functional Intent > I. Problem Solving</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to solve problems affecting himself</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to solve problems affecting others</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize problems affecting others</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize problems affecting himself</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to establish cause-effect</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use conflict-resolution</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <h3>Functional Intent > J. Deceit</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Uses language to deceive</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Lies</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Academic Communication</h3>
          <section>
            <div class="title">
              <h3><b>This section is designed to compare the individual’s ability to communicate in an academic setting with other students.</b></h3>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to respond appropriately to teacher requests</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to reorient to academic agenda appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to obtain teacher’s attention appropriately</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to request clarification from teacher</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to participate in classroom discussions</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to interact with classroom peers</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to paraphrase text</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to summarize a story providing key information</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to respond to questions requiring inferential reasoning</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <h3>Nonverbal Communication</h3>
          <section>
            <div class="title">
              <h3><b>This section is designed to compare the individual’s ability to communicate with others using non-verbal means.</b></h3>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize “personal space” boundaries</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to touch appropriately</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Comprehends facial expression</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Comprehends eye gaze</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Comprehends gestures</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Comprehends body language</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use facial expression</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use eye gaze</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use gestures</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use body language</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use eye contact</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Perspective Taking</h3>
          <section>
            <div class="title">
              <h3><b>This section is designed to compare the individual’s ability to recognize and use appropriate perspective taking.</b></h3>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize another’s viewpoints</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize another’s interests</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize another’s feelings</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to demonstrate concern for another’s problems</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3> REGULATORY - Gives commands</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Gives directions to play a game</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Gives directions to make something</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Gives directions to make something</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <h3>Social-Emotional</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize personal emotional states</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to recognize emotional states in others</h5>
                  <div class="row">
                  <div class="form-check">
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to express personal emotional state</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Perfectionist quality</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to use appropriate self-control</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Ability to lose a game graciously</h5>
                  <div class="row">
                    
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Degree of anxiety in social settings</h5>
                  <div class="row">
                  <div class="form-check">

                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios" checked="">
                      <label class="form-check-label">Not Present </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label"> Uses NO Words    (Gestures - Preverbal) </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">Uses 1-3 Words / sentences </label>
                    </div>
                    <div class="me-5 ">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Able to communicate/ express opinion  </label>
                    </div>
                    <div class="me-5">
                      <input class="form-check-input" type="radio" name="formRadios">
                      <label class="form-check-label">  Uses Complex Language  </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

{{-- Form --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

@endsection