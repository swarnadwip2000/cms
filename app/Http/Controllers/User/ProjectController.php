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

        // Create a new Project instance
       $project = new Project();
        $project->user_id = Auth::user()->id;
        $project->project_id = rand(00000000000,99999999999);
        $project->TypeofApplication = $request->TypeofApplication;
        $project->FirstName = $request->FirstName;
        $project->LastName = $request->LastName;
        $project->EnterEmail = $request->EnterEmail;
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
        $this->createEducationHistories($project, $request->Level);
        $this->createTravelHistories($project, $request->SCountry);
        $this->createVisaRefusals($project, $request->Country);
        $this->createCanadianWorkExperiences($project, $request->Occupation);
        $this->createForeignWorkExperiences($project, $request->COccupation);

        // Additional code or redirect as needed
        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    protected function createEducationHistories($project, $educationHistories)
    {
        if ($educationHistories) {
            foreach ($educationHistories as $key=>$education) {
                EducationHistory::create([
                    'project_id' => $project->id,
                    'Level' => $education,
                    'Field' => $educationHistories[$key]['Field'],
                    'Duration' => $educationHistories[$key]['Duration'],
                    'Location' => $educationHistories[$key]['Location'],
                    'Completed' => $educationHistories[$key]['Completed'],
                ]);
            }
        }

    }

    protected function createTravelHistories($project, $travelHistories)
    {
        if ($travelHistories) {
            foreach ($travelHistories as $key=>$travel) {
                TravelHistory::create([
                    'project_id' => $project->id,
                    'SCountry' => $travel,
                    'SYear' => $travelHistories[$key]['SYear'],
                ]);
            }
        }

    }

    protected function createVisaRefusals($project, $visaRefusals)
    {
        if ($visaRefusals) {
            foreach ($visaRefusals as $key=>$visaRefusal) {
                VisaRefusal::create([
                    'project_id' => $project->id,
                    'Country' => $visaRefusal,
                    'Year' => $visaRefusals[$key]['Year'],
                ]);
            }
        }

    }

    protected function createCanadianWorkExperiences($project, $canadianWorkExperiences)
    {
        if ($canadianWorkExperiences) {
            foreach ($canadianWorkExperiences as $key=>$canadianWorkExperience) {
                CanadianWorkExperience::create([
                    'project_id' => $project->id,
                    'Occupation' => $canadianWorkExperience,
                    'Type' => $canadianWorkExperiences[$key]['Type'],
                    'Status' => $canadianWorkExperiences[$key]['Status'],
                    'Cwduration' => $canadianWorkExperiences[$key]['Cwduration'],
                    'Province' => $canadianWorkExperiences[$key]['Province'],
                ]);
            }
        }

    }

    protected function createForeignWorkExperiences($project, $foreignWorkExperiences)
    {
        if ($foreignWorkExperiences) {
            foreach ($foreignWorkExperiences as $key=>$foreignWorkExperience) {
                ForeignWorkExperience::create([
                    'project_id' => $project->id,
                    'COccupation' => $foreignWorkExperience,
                    'EType' => $foreignWorkExperiences[$key]['EType'],
                    'EStatus' => $foreignWorkExperiences[$key]['EStatus'],
                    'EDuration' => $foreignWorkExperiences[$key]['EDuration'],
                    'EProvince' => $foreignWorkExperiences[$key]['EProvince'],
                ]);
            }
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
