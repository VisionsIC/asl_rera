<?php
namespace App\Http\Controllers;
use App\ArmrestTypes;
use App\CushionDimensions;
use App\CushionTypes;
use App\Diagnosis;
use App\Gender;
use App\InpatientWcBrands;
use App\InpatientWcModels;
use App\PatientNames;
use App\Rooms;
use App\TherapistNames;
use App\TherapistTitles;
use App\Units;
use App\WheelchairBacks;
use App\WheelchairDimensions;
use App\WheelchairHeights;
use App\WheelchairTypes;
use Illuminate\Http\Request;
class HomeController extends Controller {
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct(Request $request) {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    /** This function controls the Select Fields for the Dependant Dynamic Form Wizard:
     *  Select Fields 2, 3, 4, 5, 7, 9, 10 are controlled through the 'ajaxJsonResponse'
     *  Function.
     **/
    public function index() {
        // This variable controls the Units Select Field: #1
        $units = Units::all();
        // This variable controls the TherapistTitles Select Field: #6
        $therapist_titles = TherapistTitles::all();
        // This variable controls the Wheelchair Type Select Field: #8
        $wheelchair_types = WheelchairTypes::all();
        // This variable controls the Wheelchair Dimensions Select Field: #11
        $wheelchair_dimensions = WheelchairDimensions::all();
        // This variable controls the Wheelchair Height Select Field: #12
        $wheelchair_heights = WheelchairHeights::all();
        // This variable controls the Wheelchair Back Select Field: #13
        $wheelchair_backs = WheelchairBacks::all();
        // This variable controls the Cushion Type Select Field: #14
        $cushion_types = CushionTypes::all();
        // This variable controls the Cushion Dimensions Select Field: # 15
        $cushion_dimensions = CushionDimensions::all();
        // This variable controls the Armrest Type Select Field: #16
        $armrest_types = ArmrestTypes::all();
        return view('home', compact('units', 'therapist_titles', 'wheelchair_types', 'wheelchair_dimensions',
            'wheelchair_heights', 'wheelchair_backs', 'cushion_types', 'cushion_dimensions', 'armrest_types' ));
    }
    /** This function controls the Select Fields for the Dependant Dynamic Form Wizard:
     *  Select Fields 1, 6, 8, 11, 12, 13, 14, 15, 16 are controlled through the 'index'
     *  Function.
     **/
    public function ajaxJsonResponse(Request $request) {
        // This variable controls the Patient Name Select Field #2
        $inpatients = PatientNames::select('patient_name','id')->where('unit_id',$request->id)->take(100)->get();
        // This variable controls the Rooms Select Field #3
        $rooms = Rooms::select('room','id')->where('inpatient_id',$request->id)->take(100)->get();
        // This variable controls the Gender Select Field #4
        $gender = Gender::select('gender','id')->where('gender_id',$request->id)->take(100)->get();
        // This variable controls the Diagnosis Select Field #5
        $diagnosis = Diagnosis::select('diagnosis_type','id')->where('diagnosis_id',$request->id)->take(100)->get();
        // This variable controls the Therapist Name Select Field #7
        $therapist_names = TherapistNames::select('therapist_names','id')->where('title_type_id',$request->id)->take(100)->get();
        // This variable controls the Wheelchair Model Select Field #9
        $inpatient_wc_models = InpatientWcModels::select('inpatient_wc_model','id')->where('inpatient_wc_type_id',$request->id)->take(100)->get();
        // This variable controls the Wheelchair Brand Select Field #10
        $inpatient_wc_brands = InpatientWcBrands::select('inpatient_wc_brand','id')->where('inpatient_wc_brand_id',$request->id)->take(100)->get();
        return response()->json($inpatients, $rooms, $gender, $diagnosis, $therapist_names, $inpatient_wc_models,
            $inpatient_wc_brands);
    }
}