<?php

namespace App\Http\Controllers\Frontend;
ini_set('max_execution_time', '300');

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Research;
use App\Models\Category;
use App\Models\Media;
use App\Models\ImpactArea;
use App\Models\Analytics;
use App\Models\FeedBack;
use  Mail;
use App\Models\Coapplicant;
use App\Models\AllAchievement;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function home(){
        $valuechains=ValueChain::all();
        $partners=Partner::all();
       
        return view('frontend.index',compact('valuechains','partners'));
    }

    public function about(){
        $coapplicants=Coapplicant::all();

  return view('frontend.pages.about')->with(compact('coapplicants'));
    }

    public function contactUs(){
return view('frontend.pages.contactus');
    }
    public function blog(){
        return view('frontend.pages.blogs');
    }

    public function valuechains(){
        $valuechains=ValueChain::all();
       
        return view('frontend.pages.valuechains',compact('valuechains'));
    }

    public function valuechain($id){
        $valuechain=ValueChain::find($id);

        // dd($valuechain);
        return view('frontend.pages.valuechain_details',compact('valuechain'));
    }

    public function projectDetails($id){
      $project=Project::findOrFail($id);
        return view('frontend.pages.project_details',compact('project'));
    }
    public function Partner($id){

        $partner=Partner::findOrFail($id);
        // dd($partner->projects);
       return view('frontend.pages.partner_profile',compact('partner'));
    }
    public function CoApplicant($id){

        $coapplicant=Coapplicant::findOrFail($id);
        // dd($coapplicant);
       return view('frontend.pages.coapplicant_profile',compact('coapplicant'));
    }

    public function Media(){
      $videos=Media::where('type' ,'video')->get();
      $images=Media::where('type' ,'image')->get();
            // dd($images);
        return view('frontend.pages.media')->with(compact('videos','images'));
    }

    public function Resources(){
        $data['page_title']='Resources';
        return view('frontend.pages.resources',$data);
    }

    public function crops(){
        $data['page_title']='Value Chains';
    $valuechains=Valuechain::where('category', 'crops')->get();

    return view('frontend.pages.valuechains',$data)->with(compact('valuechains'));

    }
    public function achievements(){
        $data['page_title']='Achievements';
        $all_achievements=AllAchievement::all();
        return view('frontend.pages.achievements',$data)->with(compact('all_achievements'));
    }

    public function dashboard(){
        $data['page_title']='Dashboard';
        $adoptionData = Analytics::where('param','Technology adoption')->get();
        $directReach = Analytics::where('param','direct reach')->get();
        $financeLinkage = Analytics::where('param','Finance Linkage')->get();
        $marketLinkage = Analytics::where('param','market_linkage')->get();
        $incomeperValuechain= Analytics::where('valuechain','!=',null)->get();
        $researcandupscalling= Analytics::where('valuechain','!=',null)->get();
     
       
        return view('frontend.pages.dashboard',$data)->with(compact('adoptionData','directReach','financeLinkage','marketLinkage','incomeperValuechain'));
    }
    public function Research($id){

       $category=Category::findOrFail($id);
     
        $data['page_title']='Research Activities';
        
        return view('frontend.pages.research',$data)->with(compact('category'));
    }

    public function FarmerGroups(){
        $models = DB::select("SELECT COUNT(id) AS Totalsc, year_started  FROM dash WHERE year_started !=0000 GROUP BY year_started ;");

        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->year_started, 'y' => intval($model->Totalsc));
        }
        return $data;
    }

   

    public function FarmersCounty(){
        $models = DB::select("SELECT COUNT(id) AS Totalsc, county  FROM dash  GROUP BY county ;");
        // dd($models);

        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->county, 'y' => intval($model->Totalsc));
        }
        return $data;
    }
    public function Distance(){
        $models = DB::select(" SELECT COUNT(id) AS Totalsc, distance_to_market  FROM dash WHERE distance_to_market !=0000 GROUP BY distance_to_market ;");
        // dd($models);

        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->distance_to_market, 'y' => intval($model->Totalsc));
        }
        return $data;
    }
    public function Gender(){
        $models = DB::select("SELECT COUNT(id) AS Totalsc, adult_male FROM dash GROUP BY adult_male ORDER BY COUNT(id) DESC");
        

        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->adult_male, 'y' => intval($model->Totalsc));
        }
        return $data;
    }
    public function groupActivity(){
        $models = DB::select("SELECT COUNT(id) AS Totalsc, group_activities  FROM dash  GROUP BY group_activities ;");        
//   dd($models);
        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->group_activities, 'y' => intval($model->Totalsc));
        }
        return $data;
    }

    public function Registration(){
        $models = DB::select("SELECT COUNT(id) AS Totalsc, registration_status FROM dash GROUP BY registration_status ORDER BY COUNT(id) DESC");        
//   dd($models);
        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->registration_status, 'y' => intval($model->Totalsc));
        }
        return $data;
    }
    public function farmersByWard(){
        $models = DB::select("SELECT COUNT(id) AS Totalsc, ward  FROM dash  GROUP BY ward ;");        
 
        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->ward, 'y' => intval($model->Totalsc));
        }
        return $data;
    }
    public function farmersByValueChain(){
        $models = DB::select("SELECT COUNT(id) AS Totalsc, valuechain  FROM dash  GROUP BY valuechain ;");        

        $data = array();

        foreach ($models as $model) {
            $data[] = array('name' => $model->valuechain, 'y' => intval($model->Totalsc));
        }
        return $data;
    }

    // public function technologyAdoption (){
    //     $models = DB::table('analytics')
    // ->select('description', DB::raw('SUM(targets) as target_total'), DB::raw('SUM(achieved) as achieved_total'), DB::raw('SUM(totals) as achieved_total'))
    // ->where('param','Technology adoption')
    // ->groupBy('description');
    // $data = array();


    // $chartData = $adoptionData->map(function ($item) {
    //     return [
    //         'demographics' => $item->demographics,
    //         'target_total' => $item->target_total,
    //         'achieved_total' => $item->achieved_total,
    //     ];
    // });

    // foreach ($models as $model) {
    //     $data[] = array('name' => $model->valuechain, 'y' => intval($model->Totalsc));
    // }
    // return $data;

    // }

    public function technologyAdoption(){
        // $adoptionData = Analytics::where('param','Technology adoption')->get();
        // dd( $adoptionData);
    }

    public function projectProfile(){
        return view ("frontend.pages.project_profile");
    }
    public function projectGovernance(){
        return view ("frontend.pages.gorvanance");
    }
    public function coApplicants(){
        $coapplicants=Coapplicant::all();

        return view('frontend.pages.co-applicants')->with(compact('coapplicants'));
    }
    public function partners(){
        $partners=Partner::all();

        return view('frontend.pages.partners')->with(compact('partners'));
    
    }
    public function map(){
        return view('frontend.pages.map');
    }

    public function research_Details($id){

        $research_activity=Research::findOrFail($id);
        $achievements=$research_activity->achievements;

        $related=Research::where('category_id',$research_activity->category_id)->get();
       
     return view("frontend.pages.research_details")->with(compact('research_activity','related','achievements'));
    }

    public function technologyModel(){
        $data['page_title']='Technology Transfer and Commercialization Models';
return view('frontend.pages.technology_model',$data);
    }

    public function impactAreas(){
        $impactareas=ImpactArea::all();
        // dd($impactareas);
        $data['page_title']='Impact Stories';
        return view('frontend.pages.impact_areas',$data)->with(compact('impactareas'));
    }
 public function feedBack(Request $request){
        // $data=$request->all();
        // dd($data);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
    ]);

Mail::send('frontend.pages.email', [
    'name' => $request->get('name'),
    'email' => $request->get('email'),
    'phone' => $request->get('phone'),
    'message' => $request->get('message') ],
    function ($message) {
            $message->from('agrificsapp@kalro.org');
            $message->to('agrificsapp@kalro.org', 'Cordination Commetee')
                    ->subject('AgriFI CS UTTP');
});



     $feedback=Feedback::create($data);
     return back()->with('success','Your message was recorded successfully');
    }
}


// $adoptionData = DB::table('adoption_data')
//     ->select('gender', 'age_group', DB::raw('SUM(target) as target_total'), DB::raw('SUM(achieved) as achieved_total'))
//     ->groupBy('gender', 'age_group')
//     ->get();


//     $chartData = $adoptionData->map(function ($item) {
//         return [
//             'category' => $item->gender . ' - ' . $item->age_group,
//             'target_total' => $item->target_total,
//             'achieved_total' => $item->achieved_total,
//         ];
//     });
    // js
    // Highcharts.chart('chart-container', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         text: 'Technology Adoption Targets and Achieved Totals'
    //     },
    //     xAxis: {
    //         categories: {!! json_encode($chartData->pluck('category')) !!}
    //     },
    //     yAxis: {
    //         title: {
    //             text: 'Totals'
    //         }
    //     },
    //     series: [{
    //         name: 'Target Total',
    //         data: {!! json_encode($chartData->pluck('target_total')) !!}
    //     }, {
    //         name: 'Achieved Total',
    //         data: {!! json_encode($chartData->pluck('achieved_total')) !!}
    //     }],
    //     // Other Highcharts options...
    // });
    