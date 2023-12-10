<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CanadianWorkExperience;
use App\Models\EducationHistory;
use App\Models\ForeignWorkExperience;
use App\Models\Project;
use App\Models\TravelHistory;
use App\Models\VisaRefusal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();
        return view('user.projects.list', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Assuming you have validated the incoming request data
        $count = Project::where('TypeofApplication', $request->TypeofApplication)->count();
        if ($count > 0) {
            return redirect()->back()->with('error', 'You are already submitted same type of application ');
        }

        // Create a new Project instance
       $project = new Project();
        $project->user_id = Auth::user()->id;
        $project->project_id = rand(00000000000,99999999999);
        $project->TypeofApplication = $request->TypeofApplication;
        $project->FirstName = $request->FirstName;
        $project->LastName = $request->LastName;
        $project->EnterEmail = $request->EnterEmail;
        $project->EnterNumber = $request->EnterNumber;
        $project->CountryofResidence = $request->CountryofResidence;
        $project->EnterState = $request->EnterState;
        $project->EnterCity = $request->EnterCity;
        $project->preferred_destination = $request->preferred_destination;
        $project->preexisting = $request->preexisting;
        $project->DateOfCreation = $request->DateOfCreation;
        $project->CRSScore = $request->CRSScore;
        $project->Category = $request->Category;
        $project->AnyVisaRefusal = $request->AnyVisaRefusal;
        $project->AnyPreviousTravelHistory = $request->AnyPreviousTravelHistory;
        $project->HaveYouEverOwnedOrOperatedYourOwnBusiness = $request->HaveYouEverOwnedOrOperatedYourOwnBusiness;
        $project->YourCurrentNetWorthBankDepositsPropertyandOtherAssets = $request->YourCurrentNetWorthBankDepositsPropertyandOtherAssets;
        $project->EnglishExam = $request->EnglishExam;
        $project->Listening = $request->Listening;
        $project->Reading = $request->Reading;
        $project->Writing = $request->Writing;
        $project->Speaking = $request->Speaking;
        $project->Overall = $request->Overall;
        $project->frenchExam = $request->frenchExam;
        $project->FListening = $request->FListening;
        $project->FReading = $request->FReading;
        $project->FWriting = $request->FWriting;
        $project->FSpeaking = $request->FSpeaking;
        $project->FOverall = $request->FOverall;
        $project->OtherInformation = $request->OtherInformation;
        $project->Canadianworkexperience = $request->Canadianworkexperience;
        $project->Foreignworkexperience = $request->Foreignworkexperience;
        $project->MaritalStatus = $request->MaritalStatus;
        $project->DateOfMarriage = $request->DateOfMarriage;
        $project->DateOfDivorce = $request->DateOfDivorce;
        $project->DateOfSepration = $request->DateOfSepration;
        $project->DependentChildren = $request->DependentChildren;
        $project->Eyearsoryounger = $request->Eyearsoryounger;
        $project->twnniyears = $request->twnniyears;
        $project->FamilyandFriendsinCanada = $request->FamilyandFriendsinCanada;
        $project->selName = $request->selName;
        $project->selPhone = $request->selPhone;
        $project->selEmail = $request->selEmail;
        $project->selRelationships = $request->selRelationships;
        $project->ResidencyStatus = $request->ResidencyStatus;
        $project->eeProvince = $request->eeProvince;
        $project->Note = $request->Note;
        $project->status = 'Pending';
        $project->type = 2;

        // Save the Project instance
        $project->save();

        // Create associated records in other tables
        // $this->createEducationHistories($project, $request->Level);
        // $this->createTravelHistories($project, $request->SCountry);
        // $this->createVisaRefusals($project, $request->Country);
        // $this->createCanadianWorkExperiences($project, $request->Occupation);
        // $this->createForeignWorkExperiences($project, $request->COccupation);

        if ($request->Level) {
            foreach ($request->Level as $key=>$education) {
                $educationHistory = new EducationHistory();
                $educationHistory->project_id = $project->id;
                $educationHistory->Level = $education;
                $educationHistory->Field = $request->Field[$key] ?? '';
                $educationHistory->Duration = $request->Duration[$key] ?? '';
                $educationHistory->Location = $request->Location[$key] ?? '';
                $educationHistory->Completed = $request->Completed[$key] ?? '';
                $educationHistory->save();
            }
        }

        if ($request->SCountry) {
            foreach ($request->SCountry as $key=>$travelHistory) {
                $travelHistoryEdu = new TravelHistory();
                $travelHistoryEdu->project_id = $project->id;
                $travelHistoryEdu->SCountry = $travelHistory;
                $travelHistoryEdu->SYear = $request->SYear[$key] ?? '';
                $travelHistoryEdu->save();
            }
        }

        if ($request->Country) {
            foreach ($request->Country as $key=>$visaRefusal) {
                $visaRefusals = new VisaRefusal();
                $visaRefusals->project_id = $project->id;
                $visaRefusals->Country = $visaRefusal;
                $visaRefusals->Year = $request->Year[$key] ?? '';
                $visaRefusals->save();
            }
        }

        if ($request->Occupation) {
            foreach ($request->Occupation as $key=>$canadianWorkExperience) {
                $canadianWorkExperiences = new CanadianWorkExperience();
                $canadianWorkExperiences->project_id = $project->id;
                $canadianWorkExperiences->Occupation = $canadianWorkExperience;
                $canadianWorkExperiences->Cwduration = $request->Cwduration[$key] ?? '';
                $canadianWorkExperiences->Province = $request->Province[$key] ?? '';
                $canadianWorkExperiences->Type = $request->Type[$key] ?? '';
                $canadianWorkExperiences->Status = $request->Status[$key] ?? '';
                $canadianWorkExperiences->save();
            }
        }

        if ($request->COccupation) {
            foreach ($request->COccupation as $key=>$foreignWorkExperience) {
                $foreignWorkExperiences = new ForeignWorkExperience();
                $foreignWorkExperiences->project_id = $project->id;
                $foreignWorkExperiences->COccupation = $foreignWorkExperience;
                $foreignWorkExperiences->EDuration = $request->EDuration[$key] ?? '';
                $foreignWorkExperiences->EProvince = $request->EProvince[$key] ?? '';
                $foreignWorkExperiences->EType = $request->EType[$key] ?? '';
                $foreignWorkExperiences->EStatus = $request->EStatus[$key] ?? '';
                $foreignWorkExperiences->save();
            }
        }
        // Additional code or redirect as needed
        return redirect()->back()->with('message', 'Your information submitted successfully.');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = base64_decode($id);
        $project = Project::findOrFail($id);
        return view('user.projects.view')->with(compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
