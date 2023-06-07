
@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center dada">
      {{-- <h1>About AgrFi CS APP</h1> --}}
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('project_governance')}}">Project Governance</a></li>
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section id="resources" class="services">
    <div class="container">

      <div class="section-title">
        <h2>AgriFI CS APP Management Structure</h2>
      </div>

      <div class="container margin_60_35 add_bottom_30">
      
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt;padding-top:10px">
            <div class="col-lg-7">
                <div class="box_about" style="text-align: justify;">
                    {{-- <h5>The project implementation is steered at the following levels:</h5> --}}
                    <p class="lead"> <b> <strong> a.	AgriFI Program Steering Committee </strong> </b></p>
                    <p>The CS APP reports to the overall Kenya AgriFI Steering Committee (AKSC). AKSC is chaired by the Cabinet Secretary Ministry of Agriculture and Livestock Development (MoALF) with membership drawn from MoALF, 
                        Kenya Plant Health Inspectorate Service (KEPHIS), Kenya Private Sector Alliance (KEPSA); Ministry of Forestry and Environment; Kenya National Farmers Federation (KENAFF) and Ministry of Industry and Trade. </p>
                        <p> All the four AgriFI components implementing organizations (Danish Embassy, Self Help Africa, KALRO and German Corporation for International Cooperation (GIZ)). The Delegation of the European Union to Kenya has observer status to the AKSC.
                     AKSC provide oversight and guidance to the AgriFI implementing partners and meets biannually. KALRO Director-General and the Coordinator attend on behalf of the CS APP. </p>
                    <img src="" alt="" h  class="">
                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/meme.jpg')}}" alt="" class="img-fluid" width="400" height="350" style="border-radius:14px">
                   <div> <span ><i>members of Program Steering Committee</i> </span></div>
            </div>
        </div>
        <br>
        <!-- /row -->
        <div class="row justify-content-center ">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/20221206_093848.jpg')}}" alt="" class="img-fluid" width="380" height="100"  style="border-radius:14px; margin-left:0">
                    <div> <span ><i>members of Program Steering Committee</i> </span></div>
                    
            </div>
            <div class="col-lg-7">
                <div class="box_about" style="text-align: justify;">
                    <p class="lead"> <b> <strong>b.	Project Implementation Committee (PIC)</strong></b></p>
                    <p>A PIC chaired by the Director- General KALRO is made up of the PCU, one Deputy Director General, a representative of implementing partners (on rotating basis), 
                        representative of relevant local University, MoALF, AgriFI Focal Point (Coordinator), 
                        and Private sector representative.  The EC Delegation and the National Treasury have representative(s) as observers.
                         PIC provide oversight and guidance to the PCU in implementing the project. PIC meet once a year. </p>
                    <img src="" alt="" class="arrow_2">
                </div>
            </div>
        </div>
        <br>
        <!-- /row -->
        <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt;padding-top:10px">
          <br>
            <div class="col-lg-7">
                <div class="box_about" style="text-align: justify;">
                    <p class="lead"><b><strong>c.Project Coordination Unit</strong></b></p>
                    <p>CS APP has a project coordination unit, which is responsible for the day to day operation of the project. The unit is lean with the following full time dedicated staff; 
                        i.	National Project Coordinator
                        ii.	Agribusiness Officer
                        iii.	M & E Officer 
                        iv.	Programme Accounts Manager
                        v.	Office manager/secretary
                        vi.	Driver 
                        At the institutional level, the National Project Coordinator reports to the KALRO Director General. The project draws support from the technical domain managers at KALRO. CS APP has hired officers with agribusiness and M
                         & E expertise to support the project.

                    </p>
                </div>

            </div>
            <br>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('frontend/img/20230316_125323.jpg')}}" alt="" class="img-fluid" width="380" height="300" style="border-radius:14px">
                    <div> <span ><i>Members of Project Coordination Unit (PCU)</i> </span></div>
                   
            </div>
        </div>
              <!-- /row -->
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                        <img src="{{asset('frontend/img/mne.png')}}" alt="" class="img-fluid" width="400" height="350" style="border-radius:14px;padding-top:10px">
                        <div> <span ><i>Monetary & Evaluation Flow-chart</i> </span></div>
                </div>
                <div class="col-lg-7">
                    <div class="box_about" style="text-align: justify;padding-top:10px">
                        <br>
                        <h5><b><strong>Oversight, Monitoring, Management Information and Reporting</strong></b></h5>
                        <p><b>Implementation:</b> All project activities are planned, coordinated, overseen and monitored by the Project Coordination Unit (PCU) under Director-General KALRO
                             and the guidance of the Steering committee. A detailed work plan, is prepared by the PCU and updated annually and follow the time 
                             frame outlined in the Project Work plan and Budget.</p> <p>
                            Up-scaling and out-scaling activities are implemented by partners through competitive Subgrantees contracts with KALRO.
                             The partners include private sector, NGOs, CBOs, pastoralist and farmer organizations, and other value chain organizations in the project area.
                             </p>
                        <img src="" alt="" class="arrow_2">
                    </div>
                </div>
            </div>
            <!-- /row -->
            <div class="row justify-content-center align-items-center" style="background-color: #f1f7fd;border-radius:14pt;text-align:justify;padding-top:10px">
                <p><b>Monitoring and knowledge sharing:</b> Monitoring of project progress is carried out by the PCU and the KALRO management teams against indicators identified in the project logical framework.</p> 
                   <p> An Annual Project Planning and Review (APR) Meeting is held each year where work plans are agreed upon among project implementers and partners.
                     All implementing teams and partners submit quarterly progress reports to the PCU. The report includes a summary financial report. 
                      The EU Delegation staff in Kenya responsible for this project ensure adequate monitoring on the basis of key indicators established in the Logical Framework, 
                     annual work plans and progress reports and by participation in relevant meetings/committees. EU may mount special M&E field evaluations. </p>
                    {{-- <p><b>Audits and reviews</b></p> --}}
                    <p><b> Financial Verification:</b> Is carried out by the identified audit firm according to EU Financial Regulations, Rules and Directives and Grant Contract Guidelines. </p>
                    <p><b> Mid-term Review: </b>A mid-term review of the CS APP was undertaken after 2 years of implementation. </p>
                    <p><b>Final Project Review:</b> Will be carried out by an external review team after completion of the CS APP. </p>
                    <p><b> Reportig schedule:</b> The Project Coordinator prepares narrative progress reports every six months, and at an end of project. These are submitted to the 
                        EU by the Director General, KALRO. Each of the report consist 
                        of a narrative section and a financial section and conforms to the format for reporting on grants from the EU. Each report provides a full account of all aspects of 
                        implementation for the period.</p>
            </div>
            <br>
            
    </div>

    </div>
  </section><!-- End Services Section -->



</main><!-- End #main -->
@endsection