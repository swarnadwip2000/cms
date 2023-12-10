<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('stuff_id')->nullable();
            $table->string('project_id')->unique();
            $table->string('TypeofApplication')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('EnterEmail')->nullable();
            $table->string('EnterNumber')->nullable();
            
            $table->string('CountryofResidence')->nullable();
            $table->string('EnterState')->nullable();
            $table->string('EnterCity')->nullable();
            $table->string('preferred_destination')->nullable();
            $table->string('preexisting')->nullable();

            $table->string('DateOfCreation')->nullable();
            $table->string('CRSScore')->nullable();
            $table->string('Category')->nullable();
            $table->string('AnyVisaRefusal')->nullable();
            $table->string('AnyPreviousTravelHistory')->nullable();
            $table->string('HaveYouEverOwnedOrOperatedYourOwnBusiness')->nullable();
            $table->string('YourCurrentNetWorthBankDepositsPropertyandOtherAssets')->nullable();
            $table->string('EnglishExam')->nullable();
            $table->string('Listening')->nullable();
            $table->string('Reading')->nullable();

            $table->string('Writing')->nullable();
            $table->string('Speaking')->nullable();
            $table->string('Overall')->nullable();
            $table->string('frenchExam')->nullable();
            $table->string('FListening')->nullable();
            $table->string('FReading')->nullable();
            $table->string('FWriting')->nullable();
            $table->string('FSpeaking')->nullable();
            $table->string('FOverall')->nullable();
            $table->string('OtherInformation')->nullable();

            $table->string('Canadianworkexperience')->nullable();
            $table->text('Foreignworkexperience')->nullable();
            $table->text('MaritalStatus')->nullable();
            $table->text('DateOfMarriage')->nullable();
            $table->text('DateOfDivorce')->nullable();
            $table->text('DateOfSepration')->nullable();
            $table->text('DependentChildren')->nullable();
            $table->text('Eyearsoryounger')->nullable();
            $table->text('twnniyears')->nullable();

            $table->string('FamilyandFriendsinCanada')->nullable();
            $table->text('selName')->nullable();
            $table->text('selPhone')->nullable();
            $table->text('selEmail')->nullable();
            $table->text('selRelationships')->nullable();
            $table->text('ResidencyStatus')->nullable();
            $table->text('eeProvince')->nullable();
            $table->text('Note')->nullable();
            $table->enum('status',['Pending','Accept','Delivered'])->default('Pending');
            $table->text('type')->comment('1=project, 2=lead');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
