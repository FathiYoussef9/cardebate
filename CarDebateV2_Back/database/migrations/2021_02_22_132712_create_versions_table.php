<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idmodel');
            $table->string('name'); 
            $table->foreign('idmodel')->references('id')->on('modeles');
            $table->unsignedBigInteger('idcarburant');
            $table->foreign('idcarburant')->references('id')->on('carburants');
            $table->unsignedBigInteger('idtransmission');
            $table->foreign('idtransmission')->references('id')->on('transmissions');
            $table->unsignedBigInteger('idcarousserie');
            $table->foreign('idcarousserie')->references('id')->on('carousseries');
            $table->integer('annee');
            $table->double('prix');
           //moteur et trasmission
           $table->string('moteur');
           $table->double('architecture');
           $table->double('cylindree');
           $table->integer('puissancefiscale');
           $table->integer('Puissancemaxi');
           $table->integer('coupleMaxi');
           $table->string('boiteAvitesse');
                   // a reverfier le type
           $table->boolean('palettesAuvolant');
           $table->double('consVille');
           $table->double('consRoute');
           $table->double('consMixte');
           $table->double('emissionCO2');
           $table->integer('vitessemaxi');
           $table->double('acceleration');  
   // Dimension et volumes
   
           $table->string('categorie');
           $table->integer('nbPlace');
           $table->double('poidsaVide');
           $table->double('longueur');
           $table->double('largeur');
           $table->double('hauteur');
           $table->double('empattement');
           $table->integer('volumedureservoir');
           $table->double('volumedecoffre');
           // sécurité
           $table->integer('airbag');
                   // a reverifier le type
           $table->boolean('aBS');
           $table->boolean('eSP');
           $table->boolean('antipatinage');
           $table->boolean('aideFreinageUrgence');
           $table->boolean('antiDemarrageElectronique');
           $table->boolean('aideDemarragEnCote');
           $table->boolean('selecteurdemodedeconduite');
           $table->boolean('detectionFatigue');
           $table->boolean('systemeAlerteFranchissementLigne');
           $table->boolean('detecteurAngleMort');
           $table->boolean('detecteurSousGonflage');
           $table->boolean('fermeturePortesEnRoulant');
           $table->boolean('systemeAlarme');
           $table->boolean('pharesAntibrouillard');  
           $table->boolean('preparationISOFIX');
           //Confort
           $table->string('climatisation');
           $table->string('systemeaudio');
         $table->boolean('ordinateurBord');
         $table->boolean('startStop');
          $table->boolean('regulateurVitesse');
           $table->boolean('regulateurVitesseAdaptatif');
         $table->boolean('detecteurPluie');
         $table->boolean('allumageAutoFeux');
          $table->boolean('freinMainElectrique');
           $table->boolean('ecranTactile');
         $table->boolean('instrumentationBordDigitale');
         $table->boolean('reconnaissancePanneaux');
          $table->boolean('affichageTeteHaute');
           $table->string('aideStationnement');
         $table->boolean('cameraRecul');
         $table->boolean('parkAssistAuto');
          $table->boolean('commandesVolant');
           $table->string('volantReglable');
         $table->string('vitresEblectriques');
         $table->boolean('retroviseursElectriques');
   
         $table->boolean('retroviseursRabattablesElectriquement');
           $table->boolean('ouvertureAutoCoffre');
         $table->boolean('demarrageMainslibres');
         $table->string('siegesElectriques');
         $table->boolean('banquetteArriereRabattable');
           $table->boolean('gPS');
         $table->boolean('connexionInternet');
         $table->boolean('bluetooth');
   
         $table->boolean('followmehome');
         //Decor
           $table->string('Jantes');
         $table->boolean('volantCuir');
         $table->boolean('feuxJourLED');
         $table->boolean('pharesLED');
           $table->boolean('pharesXenon');
         $table->boolean('vitresTeintee');
         $table->string('sellerie');
         $table->boolean('toit');
         $table->boolean('barresToit');
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
        Schema::dropIfExists('versions');
    }
}
