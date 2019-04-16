<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clinic_uuid',38)->nullable();
            $table->string('hn',9)->nullable()->unique()->index();
            $table->string('pname',15)->nullable()->index();
            $table->string('fname',30)->nullable()->index();
            $table->string('lname',30)->nullable()->index();
            $table->string('career',4)->nullable();
            $table->char('nationallity',3)->nullable();
            $table->date('birthday')->nullable();
            $table->string('addrpart',50)->nullable();
            $table->char('moopart',3)->nullable();
            $table->char('tmbpart',2)->nullable()->index();
            $table->char('amppart',2)->nullable()->index();
            $table->char('chwpart',2)->nullable()->index();
            $table->string('bloodgrp',20)->nullable();
            $table->date('deathday')->nullable();
            $table->string('drugallergy')->nullable();
            $table->integer('familyno')->nullable();
            $table->string('fathername',50)->nullable();
            $table->date('firstday')->nullable();
            $table->string('hometel',20)->nullable();
            $table->string('informaddr')->nullable();
            $table->string('informname',50)->nullable();
            $table->string('informrelation',50)->nullable();
            $table->string('informtel',20)->nullable();
            $table->char('marrystatus',1)->nullable();
            $table->string('mathername',50)->nullable();
            $table->integer('hn_int')->nullable();
            $table->char('nationality',3)->nullable();
            $table->string('opdlocation',50)->nullable();
            $table->char('pttype',2)->nullable()->index();
            $table->char('religion',2)->nullable();
            $table->char('sex',1)->nullable();
            $table->string('spsname',50)->nullable();
            $table->char('truebirthday',1)->nullable();
            $table->string('workaddr',50)->nullable();
            $table->string('worktel',20)->nullable();
            $table->string('hcode',5)->nullable()->index();
            $table->string('cid',13)->nullable()->index();
            $table->integer('hid')->nullable();
            $table->char('educate',1)->nullable();
            $table->char('family_status',1)->nullable();
            $table->char('labor_type',1)->nullable();
            $table->datetime('last_update')->nullable();
            $table->char('type_area',1)->nullable();
            $table->string('road',50)->nullable();
            $table->string('father_cid',13)->nullable();
            $table->string('mother_cid',13)->nullable();
            $table->string('couple_cid',13)->nullable();
            $table->char('person_type',2)->nullable();
            $table->string('private_doctor_name',75)->nullable();
            $table->char('legal_action',1)->nullable();
            $table->char('death_code504',2)->nullable();
            $table->string('death_diag',6)->nullable();
            $table->char('node_id',1)->nullable();
            $table->char('admit',1)->nullable();
            $table->string('midname',25)->nullable();
            $table->string('po_code',5)->nullable();
            $table->string('fatherlname',30)->nullable();
            $table->string('motherlname',30)->nullable();
            $table->string('spslname',30)->nullable();
            $table->char('country',2)->nullable();
            $table->string('email',50)->nullable();
            $table->timestamp('birthtime')->nullable();
            $table->string('mother_hn',9)->nullable();
            $table->date('last_visit')->nullable();
            $table->char('death',1)->nullable()->index();
            $table->integer('height')->nullable();
            $table->char('inregion',1)->nullable();
            $table->timestamp('reg_time')->nullable();
            $table->string('oldcode',15)->nullable()->index();
            $table->char('lang',2)->nullable();
            $table->string('gov_chronic_id',10)->nullable();
            $table->char('in_cups',1)->nullable();
            $table->string('addr_soi',100)->nullable();
            $table->string('work_addr')->nullable();
            $table->string('father_hn',9)->nullable();
            $table->string('alias_name',100)->nullable();
            $table->char('destroyed',1)->nullable();
            $table->string('old_addr')->nullable();
            $table->string('fname_soundex',50)->nullable()->index();
            $table->string('lname_soundex',50)->nullable()->index();
            $table->string('bloodgroup_rh',5)->nullable();
            $table->string('passport_no',25)->nullable();
            $table->string('addressid',6)->nullable();
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
        Schema::dropIfExists('patients');
    }
}
