<?php

namespace App\Http\Controllers;

use App\Areeza;
use App\Confirm;
use App\EjrayaSader;
use App\KarshenasiResponse;
use App\Ministry;
use App\ShekayatForm;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;


class PageController extends Controller
{
    public function download($file)
    {

        $file_path = public_path('photos/' . $file);
        $areeza = Areeza::findOrFail($_GET['areeza_id']);
        $areeza->downloaded = 1;
        $areeza->save();
        return response()->download($file_path);
    }
    
    public function getDownload($file)
    {

        $file_path = public_path('photos/' . $file);

        $shekayat = ShekayatForm::findOrFail($_GET['shekayatform_id']);

        $shekayat->save();
        return response()->Download($file_path);
    }

    public function shekayat_PDF()
    {

        $data = Areeza::select('id', 'first_name', 'last_name', 'father_name','downloaded')->where('id', $_GET['areeza_id'])->get();
        $data[0]->downloaded = 2;
        $data[0]->save();
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('PDF.shekayatPDF', compact('data'));
        // If you want to store the generated pdf to the server then you can use the store function
//        $pdf->save(storage_path() . time().'_shekayat.pdf');
        // Finally, you can download the file using download function
        return $pdf->download(time().'_shekayat.pdf');

    }

    public function karshenas_response_PDF()
    {
        // Fetch specific comment from database
        $data = KarshenasiResponse::select('id','description')->where('id', $_GET['id'])->get();
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('PDF.KarshenasResponsePDF', compact('data'));
        // If you want to store the generated pdf to the server then you can use the store function
//        $pdf->save(storage_path() . time().'_shekayat.pdf');
        // Finally, you can download the file using download function
        return $pdf->download(time().'_response.pdf');

    }

    public function downloadIdentityFromKarshenasi($file)
    {
        $file_path = public_path('photos/' . $file);
        $areeza = Areeza::findOrFail($_GET['areeza_id']);
        $areeza->downloaded = 2;
        $areeza->save();
        return response()->download($file_path);
    }

    public function ejraya_lists(){
        $areezas = Areeza::select('id','first_name', 'last_name',
            'subject_id', 'description', 'form_random_number', 'date', 'phone_number')->where('downloaded', '2')->orderBy('created_at','DESC')->get();
        $ministries = Ministry::select('id', 'name')->get();
        return  view('areeza.ejrayaAreezasList', compact('areezas', 'ministries'));
    }

    public function completed_list(){
        $completeds = EjrayaSader::select('id', 'areeza_id', 'date', 'ministry_id', 'reference_ministries_copy',
            'sader_number', 'end_date', 'accept_status')->where([['response', 0], ['accept_status', 1]])->
        orwhere('response', 1)
            ->orderBy('created_at', 'DESC')->get();
        return view('areeza.CompletedAreezasList', compact('completeds'));
    }

    public function followed_list(){
        $followeds = EjrayaSader::select('id', 'areeza_id', 'date', 'ministry_id', 'reference_ministries_copy',
            'sader_number', 'end_date', 'accept_status')->where([['response', 0], ['accept_status', 0]])
            ->orderBy('created_at', 'DESC')->get();
        return view('areeza.FollowedAreezasList', compact('followeds'));
    }

    public function update_sadera_list_response(Request $request){
     $sadera = EjrayaSader::findorFail($request->id);
     $sadera->accept_status = 1;
     $sadera->response = 1;
     $sadera->save();
     return json_encode("updated");
    }
    public function getform(Request $request){
        $form = ShekayatForm::where('id', $request->id)->get();

        return $form;
    }

    public  function shekayat_form_update (Request $request){
        if ($request->hasFile('identity_photo')) {

            $file = $request->file('identity_photo');
            $arezaPhoto = time() . '_' . $file->getClientOriginalName();
            $path = public_path() . '/photos';
            $file->move($path, $arezaPhoto);

        }
        if ($request->hasFile('complain_photo')){
            $file = $request->file('complain_photo');
            $passportPhoto = time().'_'. $file->getClientOriginalName();
            $path = public_path().'/photos';
            $file->move($path,$passportPhoto);
        }



        if ($request->hasFile('complainer_photo')){

            $file = $request->file('complainer_photo');
            $compliantPerson = time().'_'. $file->getClientOriginalName();
            $path = public_path().'/photos';
            $file->move($path,$compliantPerson);
        }


        $shekayat=ShekayatForm::findOrFail($request->shekayat_id);
        $shekayat->identity_photo=$arezaPhoto;
        $shekayat->complain_photo=$passportPhoto;
        $shekayat->complainer_photo=$compliantPerson;
        $shekayat->save();
        return redirect()->back();


    }
    public function preservation(){
        $confirms = Confirm::where([['status_id', '=', 4]])->with('Shekayatform')->get();

        return view('callcenter.preservation',compact('confirms'));


    }

    public function give(){
        $confirms = Confirm::where([['status_id', '=', 3]])->with('Shekayatform')->get();

        return view('callcenter.give_up_call',compact('confirms'));


    }
    public function complete(){
        $confirms = Confirm::where([['status_id', '=', 2]])->with('Shekayatform')->get();

        return view('callcenter.complete',compact('confirms'));


    }
    public function reject(){
        $confirms = Confirm::where([['status_id', '=', 5]])->with('Shekayatform')->get();

        return view('callcenter.reject',compact('confirms'));


    }




    public  function shekayat_form (Request $request){


      // ShekayatForm::where('id',1)->get();

        $sql="  SELECT
                 shekayatforms.*, shekayat_guides.description,shekayat_guides.title,shekayat_guides.des_date, confirm.description, statuses.status_name
                 FROM
                 shekayatforms
                 INNER JOIN shekayat_guides on shekayat_guides.shekayatform_id=shekayatforms.id
                 INNER JOIN confirm on confirm.shekayatform_id=shekayatforms.id
                 INNER JOIN statuses on statuses.id=confirm.status_id
                 WHERE shekayatforms.id=$ GROUP by shekayatforms.id
                ";
    }


    public function formget(Request $request){
        $form = ShekayatForm::where('id', $request->id)->get();

        return $form;
    }

public function dashboard(){



    $stat = KarshenasiResponse::all()->count();
    $kar = KarshenasiResponse::all()->count();
    $shk=Areeza::where('gender',0)->count();
   /* $sta = Status::where('id','=', 2)->count();
    $status = Status::where('id','=', 3)->count();*/
    return view('areeza.areeza_dashboard',compact('stat','kar','shk'));
}




}
