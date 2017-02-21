<?php
namespace App\Http\Controllers;
use App\ArmrestTypes;
use App\CushionDimensions;
use App\CushionTypes;
use App\Gender;
use App\InpatientDiagnosis;
use App\InpatientWcBrands;
use App\InpatientWcModels;
use App\TherapistNames;
use App\TherapistTitles;
use App\WheelchairBacks;
use App\WheelchairDimensions;
use App\WheelchairHeights;
use App\WheelchairTypes;
use Illuminate\Http\Request;
use App\PatientNames;
use App\Rooms;
use App\Units;
class TestController extends Controller {
    // TestController - API Function
    public function index() {
        // This variable controls the Units Select Field #1
        $units=Units::all();//get data from table.
        // This variable controls the Therapist Title Select Field #6
        $therapist_title=TherapistTitles::all();//get data from table.
        // This variable controls the Wheelchair Types Select Field #8
        $wc_types=WheelchairTypes::all();//get data from table.
        // This variable controls the Rooms Select Field #11
        $wc_dimensions=WheelchairDimensions::all();//get data from table.
        // This variable controls the Rooms Select Field #12
        $wc_heights=WheelchairHeights::all();//get data from table.
        // This variable controls the Rooms Select Field #13
        $wc_back_type=WheelchairBacks::all();//get data from table.
        // This variable controls the Rooms Select Field #14
        $cushion_types=CushionTypes::all();//get data from table.
        // This variable controls the Rooms Select Field #15
        $cushion_dimensions=CushionDimensions::all();//get data from table.
        // This variable controls the Rooms Select Field #16
        $armrest_types=ArmrestTypes::all();//get data from table.
        return view('testview', compact('units', 'therapist_title', 'wc_types', 'wc_dimensions', 'wc_heights',
                    'wc_back_type', 'cushion_types','cushion_dimensions', 'armrest_types' )); //sent data to view
    }
    public function findPatientName(Request $request) {
        // This variable controls the Rooms Select Field #2
        $inpatients = PatientNames::select('patient_name','id')->where('unit_id',$request->id)->take(100)->get();
        return response()->json($inpatients); // Then sent this data to ajax success.
    }
    public function findRoom(Request $request){
        // This variable controls the Rooms Select Field #3
        $rooms = Rooms::select('room','id')->where('inpatient_id',$request->id)->take(100)->get();
        return response()->json($rooms); // Then sent this data to ajax success.
    }
    public function findGender(Request $request){
        // This variable controls the Rooms Select Field #4
        $gender = Gender::select('gender','id')->where('room_id',$request->id)->take(100)->get();
        return response()->json($gender); // Then sent this data to ajax success.
    }
    public function findDiagnosis(Request $request){
        // This variable controls the Diagnosis Select Field #5
        $diagnosis = InpatientDiagnosis::select('diagnosis_abbreviation','id')->where('gender_id',$request->id)->take(100)->get();
        return response()->json($diagnosis); // Then sent this data to ajax success.
    }
    public function findTherapistNames(Request $request){
        // This variable controls the Rooms Select Field #7
        $therapist_names = TherapistNames::select('therapist_names','id')->where('title_id',$request->id)->take(100)->get();
        return response()->json($therapist_names); // Then sent this data to ajax success.
    }
    public function findInpatientWcModels(Request $request){
        // This variable controls the Rooms Select Field #9
        $wc_models = InpatientWcModels::select('inpatient_wc_model','id')->where('inpatient_wc_type_id',$request->id)->take(100)->get();
        return response()->json($wc_models); // Then sent this data to ajax success.
    }
    public function findInpatientWcBrands(Request $request){
        // This variable controls the Rooms Select Field #10
        $wc_brands = InpatientWcBrands::select('inpatient_wc_brand','id')->where('wc_model_id',$request->id)->take(100)->get();
        return response()->json($wc_brands); // Then sent this data to ajax success.
    }
}
