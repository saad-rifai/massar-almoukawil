<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/equipe_de_travail', function () {
    return view('pages.equipe_de_travail');
});




Route::get('/', function () {
    return view('welcome');
});
Route::get('/fr', function () {
    return view('welcome');
});
Route::get('/ar', function () {
    return view('lang.ar.welcome');
});
Route::get('/2', function () {
    return view('slide');
});

Route::get('idee/smit', function () {
    return view('pages.idee.smit');
});
Route::get('idee/mic', function () {
    return view('pages.idee.mic');
});
Route::get('idee/dar-al-moukawil', function () {
    return view('pages.idee.dar-al-moukawil');
});
Route::get('idee/fondation-cr-ation-d-entreprises', function () {
    return view('pages.idee.fondation-cr-ation-d-entreprises');
});
Route::get('idee/anapec', function () {
    return view('pages.idee.anapec');
});
Route::get('/c/auto-entrepreneur', function () {
    return view('pages.creation.auto-entrepreneur');
});

Route::get('/c/coopération', function () {
    return view('pages.creation.coopération');
});

Route::get('/c/pp', function () {
    return view('pages.creation.pp');
});
Route::get('/c/pm', function () {
    return view('pages.creation.pm');
});

Route::get('/c/pp/e1', function () {
    return view('pages.creation.pp.e1');
});

Route::get('/c/pp/e2', function () {
    return view('pages.creation.pp.e2');
});
Route::get('/c/pp/e3', function () {
    return view('pages.creation.pp.e3');
});
Route::get('/c/pp/e4', function () {
    return view('pages.creation.pp.e4');
});

Route::get('/c/pm/e1', function () {
    return view('pages.creation.pm.e1');
});

Route::get('/c/pm/e2', function () {
    return view('pages.creation.pm.e2');
});
Route::get('/c/pm/e3', function () {
    return view('pages.creation.pm.e3');
});
Route::get('/c/pm/e4', function () {
    return view('pages.creation.pm.e4');
});
Route::get('/c/pm/e5', function () {
    return view('pages.creation.pm.e5');
});
Route::get('/c/pm/e6', function () {
    return view('pages.creation.pm.e6');
});
Route::get('/c/pm/e7', function () {
    return view('pages.creation.pm.e7');
});
Route::get('/c/pm/e8', function () {
    return view('pages.creation.pm.e8');
});

Route::get('/AC/cri', function () {
    return view('pages.AC.cri');
});

Route::get('/AC/lec', function () {
    return view('pages.AC.lec');
});

Route::get('/AC/onm', function () {
    return view('pages.AC.onm');
});
Route::get('/AC/lam', function () {
    return view('pages.AC.lam');
});


/** AYA  **/
Route::get('/dom/afem', function () {
    return view('pages.domiciliation.afem');
});

Route::get('/dom/let', function () {
    return view('pages.domiciliation.let');
});

Route::get('/dom/fpl', function () {
    return view('pages.domiciliation.fpl');
});

Route::get('/dom/alpha-coworking', function () {
    return view('pages.domiciliation.alpha-coworking');
});

Route::get('/dom/badir', function () {
    return view('pages.domiciliation.badir');
});

Route::get('/hotel-dentreprise/nrea', function () {
    return view('pages.domiciliation.hotel-dentreprise.nrea');
});

Route::get('/hotel-dentreprise/regus', function () {
    return view('pages.domiciliation.hotel-dentreprise.regus');
});

Route::get('/hotel-dentreprise/technopark', function () {
    return view('pages.domiciliation.hotel-dentreprise.technopark');
});
Route::get('/hotel-dentreprise/TETOUAN-SHORE', function () {
    return view('pages.domiciliation.hotel-dentreprise.TETOUAN-SHORE');
});
Route::get('/agent-immobilier/amai', function () {
    return view('pages.agent-immobilier.amai');
});

Route::get('/zone-ind-ec/zone-auto', function () {

    return view('pages.domiciliation.zone-ind-ec.zone-auto');
});

Route::get('/zone-ind-ec/free-zone', function () {
    return view('pages.domiciliation.zone-ind-ec.free-zone');
});

Route::get('/zone-ind-ec/tanger-tech', function () {
    return view('pages.domiciliation.zone-ind-ec.tanger-tech');
});

Route::get('/zone-ind-ec/tetouan-park', function () {
    return view('pages.domiciliation.zone-ind-ec.tetouan-park');
});

Route::get('/zone-ind-ec/Azit', function () {
    return view('pages.domiciliation.zone-ind-ec.Azit');
});

Route::get('/zone-ind-ec/Aizig', function () {
    return view('pages.domiciliation.zone-ind-ec.Aizig');
});

Route::get('/zone-ind-ec/Al-Omrane', function () {
    return view('pages.domiciliation.zone-ind-ec.Al-Omrane');
});

Route::get('/zone-ind-ec/Medz', function () {
    return view('pages.domiciliation.zone-ind-ec.Medz');
});

Route::get('/zone-ind-ec/Imzouren', function () {
    return view('pages.domiciliation.zone-ind-ec.Imzouren');
});

Route::get('/zone-ind-ec/Hostal-Larache', function () {
    return view('pages.domiciliation.zone-ind-ec.Hostal-Larache');
});

Route::get('/zone-ind-ec/zone-Assilah', function () {
    return view('pages.domiciliation.zone-ind-ec.zone-Assilah');
});

Route::get('/zone-ind-ec/zone-Martil', function () {
    return view('pages.domiciliation.zone-ind-ec.zone-Martil');
});

Route::get('/zone-ind-ec/ZAE', function () {
    return view('pages.domiciliation.zone-ind-ec.ZAE');
});

Route::get('/zone-ind-ec/zone-KsarLabjir', function () {
    return view('pages.domiciliation.zone-ind-ec.zone-KsarLabjir');
});

Route::get('/accomp-entr/reseau-entr', function () {
    return view('pages.accomp-entr.reseau-entr');
});

Route::get('/accomp-entr/CEED', function () {
    return view('pages.accomp-entr.CEED');
});

Route::get('/accomp-entr/LaFactory', function () {
    return view('pages.accomp-entr.LaFactory');
});

Route::get('/accomp-entr/ClusterSolaire', function () {
    return view('pages.accomp-entr.ClusterSolaire');
});

Route::get('/accomp-entr/ImpactLab', function () {
    return view('pages.accomp-entr.ImpactLab');
});


Route::get('/accomp-entr/startup-maroc', function () {
    return view('pages.accomp-entr.startup-maroc');
});

Route::get('/accomp-entr/CE3M', function () {
    return view('pages.accomp-entr.CE3M');
});

Route::get('/accomp-entr/menara', function () {
    return view('pages.accomp-entr.menara');
});

Route::get('/accomp-entr/enactus', function () {
    return view('pages.accomp-entr.enactus');
});

Route::get('/accomp-entr/endeavor', function () {
    return view('pages.accomp-entr.endeavor');
});

Route::get('/accomp-entr/bidaya', function () {
    return view('pages.accomp-entr.bidaya');
});

Route::get('/accomp-entr/hseven', function () {
    return view('pages.accomp-entr.hseven');
});

Route::get('/accomp-entr/happyventures', function () {
    return view('pages.accomp-entr.happyventures');
});


Route::get('/accomp-entr/cfcim', function () {
    return view('pages.accomp-entr.cfcim');
});

Route::get('/accomp-entr/cise', function () {
    return view('pages.accomp-entr.cise');
});

Route::get('/accomp-entr/RD', function () {
    return view('pages.accomp-entr.RD');
});

Route::get('/accomp-entr/fintech', function () {
    return view('pages.accomp-entr.fintech');
});

Route::get('/accomp-rh/anapec', function () {
    return view('pages.accomp-rh.anapec');
});

Route::get('/accomp-rh/ofppt', function () {
    return view('pages.accomp-rh.ofppt');
});

Route::get('/accomp-rh/career', function () {
    return view('pages.accomp-rh.career');
});

Route::get('/accomp-rh/saadi', function () {
    return view('pages.accomp-rh.saadi');
});

Route::get('/accomp-rh/cnss', function () {
    return view('pages.accomp-rh.cnss');
});

Route::get('/accomp-rh/inspection', function () {
    return view('pages.accomp-rh.inspection');
});

Route::get('/accomp-rh/recrutement', function () {
    return view('pages.accomp-rh.recrutement');
});

Route::get('/aide-fin/bam', function () {
    return view('pages.aide-fin.bam');
});

Route::get('/aide-fin/cms', function () {
    return view('pages.aide-fin.cms');
});

Route::get('/aide-fin/tamwilcom', function () {
    return view('pages.aide-fin.tamwilcom');
});

Route::get('/risques/fmsar', function () {
    return view('pages.risques.fmsar');
});

Route::get('/resotage/auto', function () {
    return view('pages.resotage.auto');
});

Route::get('/resotage/cjd', function () {
    return view('pages.resotage.cjd');
});

Route::get('/resotage/cd', function () {
    return view('pages.resotage.cd');
});

Route::get('/resotage/bni', function () {
    return view('pages.resotage.bni');
});

Route::get('/resotage/aida', function () {
    return view('pages.resotage.aida');
});

Route::get('/resotage/moubadara', function () {
    return view('pages.resotage.moubadara');
});

Route::get('/resotage/minajliki', function () {
    return view('pages.resotage.minajliki');
});

Route::get('/resotage/ime', function () {
    return view('pages.resotage.ime');
});

Route::get('/resotage/cjp', function () {
    return view('pages.resotage.cjp');
});

Route::get('/resotage/ame', function () {
    return view('pages.resotage.ame');
});

Route::get('/resotage/tpe-pme', function () {
    return view('pages.resotage.tpe-pme');
});

Route::get('/resotage/afem', function () {
    return view('pages.resotage.afem');
});

Route::get('/resotage/cgem', function () {
    return view('pages.resotage.cgem');
});

Route::get('/reso-secto/amith', function () {
    return view('pages.reso-secto.amith');
});

Route::get('/reso-secto/aizig', function () {
    return view('pages.reso-secto.aizig');
});

Route::get('/reso-secto/azit', function () {
    return view('pages.reso-secto.azit');
});

Route::get('/reso-secto/artisanat', function () {
    return view('pages.reso-secto.artisanat');
});

Route::get('/reso-secto/cpmm', function () {
    return view('pages.reso-secto.cpmm');
});

Route::get('/reso-secto/agri', function () {
    return view('pages.reso-secto.agri');
});


Route::get('/reso-secto/ccis', function () {
    return view('pages.reso-secto.ccis');
});

Route::get('/reso-secto/amtri', function () {
    return view('pages.reso-secto.amtri');
});

Route::get('/reso-secto/oea', function () {
    return view('pages.reso-secto.oea');
});

Route::get('/reso-secto/cime', function () {
    return view('pages.reso-secto.cime');
});

Route::get('/reso-secto/amai', function () {
    return view('pages.reso-secto.amai');
});

Route::get('/reso-secto/alat', function () {
    return view('pages.reso-secto.alat');
});

Route::get('/reso-ordre/ona', function () {
    return view('pages.reso-ordre.ona');
});

Route::get('/reso-ordre/medecin', function () {
    return view('pages.reso-ordre.medecin');
});

Route::get('/reso-ordre/fnspm', function () {
    return view('pages.reso-ordre.fnspm');
});

Route::get('/reso-ordre/onigt', function () {
    return view('pages.reso-ordre.onigt');
});

Route::get('/reso-ordre/onmd', function () {
    return view('pages.reso-ordre.onmd');
});

Route::get('/reso-ordre/onvm', function () {
    return view('pages.reso-ordre.onvm');
});

Route::get('/reso-ordre/comptable', function () {
    return view('pages.reso-ordre.comptable');
});

Route::get('/reso-ordre/opca', function () {
    return view('pages.reso-ordre.opca');
});

Route::get('/reso-ordre/avocat', function () {
    return view('pages.reso-ordre.avocat');
});

Route::get('/reso-ordre/notaire', function () {
    return view('pages.reso-ordre.notaire');
});

Route::get('/reso-etro/cfcim', function () {
    return view('pages.reso-etro.cfcim');
});

Route::get('/reso-etro/cfcim', function () {
    return view('pages.reso-etro.cfcim');
});

Route::get('/reso-etro/ahk', function () {
    return view('pages.reso-etro.ahk');
});

Route::get('/reso-etro/camara', function () {
    return view('pages.reso-etro.camara');
});

Route::get('/reso-etro/ccispm', function () {
    return view('pages.reso-etro.ccispm');
});

Route::get('/reso-etro/ccblm', function () {
    return view('pages.reso-etro.ccblm');
});

Route::get('/reso-etro/ccimi', function () {
    return view('pages.reso-etro.ccimi');
});

Route::get('/reso-etro/britain', function () {
    return view('pages.reso-etro.britain');
});

Route::get('/reso-etro/cci', function () {
    return view('pages.reso-etro.cci');
});

Route::get('/soutien-ex/portnet', function () {
    return view('pages.soutien-ex.portnet');
});

Route::get('/soutien-ex/adii', function () {
    return view('pages.soutien-ex.adii');
});

Route::get('/soutien-ex/asmex', function () {
    return view('pages.soutien-ex.asmex');
});

Route::get('/soutien-ex/atadm', function () {
    return view('pages.soutien-ex.atadm');
});


Route::get('/soutien-ex/tangermed', function () {
    return view('pages.soutien-ex.tangermed');
});

Route::get('/soutien-ex/smaex', function () {
    return view('pages.soutien-ex.smaex');
});

Route::get('/soutien-ex/office', function () {
    return view('pages.soutien-ex.office');
});

Route::get('/soutien-ex/pcc', function () {
    return view('pages.soutien-ex.pcc');
});

Route::get('/soutien-ex/amdie', function () {
    return view('pages.soutien-ex.amdie');
});

Route::get('/aide-diff/livre-v', function () {
    return view('pages.aide-diff.livre-v');
});

Route::get('/aide-diff/tamwilcom', function () {
    return view('pages.aide-diff.tamwilcom');
});

Route::get('/aide-diff/cmmb', function () {
    return view('pages.aide-diff.cmmb');
});


Route::get('/aide-diff/avocat', function () {
    return view('pages.aide-diff.avocat');
});

Route::get('/aide-diff/invest-tta', function () {
    return view('pages.aide-diff.invest-tta');
});

Route::get('/aide-diff/comptable', function () {
    return view('pages.aide-diff.comptable');
});
/** AYA  **/

Route::get('/financement', function () {
    return view('pages.financement.financement');
});

Route::get('financement/credit-commecial/forsa', function () {
    return view('pages.financement.credit-commercial.forsa');
});

Route::get('financement/credit-commecial/indh', function () {
    return view('pages.financement.credit-commercial.indh');
});

Route::get('financement/credit-commecial/entraide-nationale', function () {
    return view('pages.financement.credit-commercial.entraide-nationale');
});

Route::get('financement/prets-dhonneur/innov-idea', function () {
    return view('pages.financement.prets-dhonneur.innov-idea');
});
Route::get('financement/prets-dhonneur/reseau-entreprendre', function () {
    return view('pages.financement.prets-dhonneur.reseau-entreprendre');
});

Route::get('financement/prets-dhonneur/tanja-moubadara', function () {
    return view('pages.financement.prets-dhonneur.prets-dhonneurs');
});


Route::get('financement/microcredit/pret-tpe', function () {
    return view('pages.financement.microcredit.pret-tpe');
});
Route::get('financement/microcredit/pret-voiture', function () {
    return view('pages.financement.microcredit.pret-voiture');
});

Route::get('financement/microcredit/pret-entreprise', function () {
    return view('pages.financement.microcredit.pret-entreprise');
});

Route::get('financement/INTELAK/INTELAK', function () {
    return view('pages.financement.INTELAK.INTELAK');
});

Route::get('financement/INTELAK/INTELAK-AL-MOSTATMIR-KARAOUI', function () {
    return view('pages.financement.INTELAK.INTELAK-AL-MOSTATMIR-KARAOUI');
});

Route::get('financement/INTELAK/START-TPE', function () {
    return view('pages.financement.INTELAK.START-TPE');
});

Route::get('financement/credit-bail-leasing/le-credit-bail-mobilier', function () {
    return view('pages.financement.credit-bail-leasing.le-credit-bail-mobilier');
});
Route::get('financement/credit-bail-leasing/le-credit-bail-mobilier/le-lease-back', function () {
    return view('pages.financement.credit-bail-leasing.le-lease-back');
});
Route::get('financement/credit-bail-leasing/le-credit-bail-mobilier/2', function () {
    return view('pages.financement.credit-bail-leasing.le-credit-bail-mobilier-2');
});
Route::get('financement/credits-bancaires/le-credit-dinvestissement-moyen-long-terme/', function () {
    return view('pages.financement.credits-bancaires.le-credit-dinvestissement-moyen-long-terme');
});


Route::get('financement/credits-bancaires/le-credit-de-fonctionnement-amortissable', function () {
    return view('pages.financement.credits-bancaires.le-credit-de-fonctionnement-amortissable');
});

Route::get('financement/credits-bancaires/le-credit-a-la-promotion-immobiliere', function () {
    return view('pages.financement.credits-bancaires.le-credit-a-la-promotion-immobiliere');
});

Route::get('financement/credits-bancaires/le-credit-de-consolidation', function () {
    return view('pages.financement.credits-bancaires.le-credit-de-consolidation');
});

Route::get('financement/credits-bancaires/FACILITE-DE-CAISSE', function () {
    return view('pages.financement.credits-bancaires.FACILITE-DE-CAISSE');
});
Route::get('financement/credits-bancaires/lescompte-commercial', function () {
    return view('pages.financement.credits-bancaires.lescompte-commercial');
});

Route::get('financement/credits-bancaires/lescompte-sans-recours', function () {
    return view('pages.financement.credits-bancaires.lescompte-sans-recours');
});

Route::get('financement/credits-bancaires/les-avances-sur-facture-ou-Factoring', function () {
    return view('pages.financement.credits-bancaires.les-avances-sur-facture-ou-Factoring');
});

Route::get('financement/credits-bancaires/le-credit-de-campagne', function () {
    return view('pages.financement.credits-bancaires.le-credit-de-campagne');
});
Route::get('financement/credits-bancaires/le-credit-spot', function () {
    return view('pages.financement.credits-bancaires.le-credit-spot');
});

Route::get('financement/credits-bancaires/caution-libre', function () {
    return view('pages.financement.credits-bancaires.caution-libre');
});

Route::get('financement/credits-bancaires/aval-deffets-fournisseurs-locaux', function () {
    return view('pages.financement.credits-bancaires.aval-deffets-fournisseurs-locaux');
});


Route::get('financement/credits-bancaires/cautionnement-des-march-s-locaux', function () {
    return view('pages.financement.credits-bancaires.cautionnement-des-march-s-locaux');
});



Route::get('financement/credits-bancaires/cautionnement-des-march-s-l-exportation', function () {
    return view('pages.financement.credits-bancaires.cautionnement-des-march-s-l-exportation');
});

Route::get('financement/credits-bancaires/avances-sur-march-s-publics-pr-financement-de-march-s', function () {
    return view('pages.financement.credits-bancaires.avances-sur-march-s-publics-pr-financement-de-march-s');
});


Route::get('financement/credits-bancaires/la-lettre-de-garantie', function () {
    return view('pages.financement.credits-bancaires.la-lettre-de-garantie');
});


Route::get('financement/credits-bancaires/les-cr-dits-documentaires', function () {
    return view('pages.financement.credits-bancaires.les-cr-dits-documentaires');
});

Route::get('financement/credits-bancaires/les-avals-trangers-en-devises', function () {
    return view('pages.financement.credits-bancaires.les-avals-trangers-en-devises');
});


Route::get('financement/credits-bancaires/les-cautions-en-devises', function () {
    return view('pages.financement.credits-bancaires.les-cautions-en-devises');
});



Route::get('financement/credits-bancaires/le-refinancement-import-en-devises', function () {
    return view('pages.financement.credits-bancaires.le-refinancement-import-en-devises');
});

Route::get('financement/credits-bancaires/les-cautions-en-douane', function () {
    return view('pages.financement.credits-bancaires.les-cautions-en-douane');
});
Route::get('financement/credits-bancaires/le-pr-financement-export-en-dirhams', function () {
    return view('pages.financement.credits-bancaires.le-pr-financement-export-en-dirhams');
});
Route::get('financement/credits-bancaires/le-pr-financement-export-en-devises', function () {
    return view('pages.financement.credits-bancaires.le-pr-financement-export-en-devises');
});
Route::get('financement/credits-bancaires/les-avances-sur-cr-ances-n-es-sur-l-tranger', function () {
    return view('pages.financement.credits-bancaires.les-avances-sur-cr-ances-n-es-sur-l-tranger');
});

Route::get('financement/credits-bancaires/les-mobilisations-des-cr-ances-n-es-en-devises', function () {
    return view('pages.financement.credits-bancaires.les-mobilisations-des-cr-ances-n-es-en-devises');
});

Route::get('financement/credits-bancaires/eco-energy-invest', function () {
    return view('pages.financement.credits-bancaires.eco-energy-invest');
});


Route::get('financement/credits-participatives/Mourabaha', function () {
    return view('pages.financement.le-financement-par-les-banques-participatives.Mourabaha');
});

Route::get('financement/credits-participatives/tamwil-chamal', function () {
    return view('pages.financement.le-financement-par-les-banques-participatives.tamwil-chamal');
});



Route::get('financement/les-organismes-publics/mdm-invest', function () {
    return view('pages.financement.les-organismes-publics.mdm-invest');
});

Route::get('financement/les-organismes-publics/green-invest', function () {
    return view('pages.financement.les-organismes-publics.green-invest');
});

Route::get('financement/les-organismes-publics/RENOVOTEL', function () {
    return view('pages.financement.les-organismes-publics.RENOVOTEL');
});

Route::get('financement/les-organismes-publics/ligne-franaise', function () {
    return view('pages.financement.les-organismes-publics.ligne-franaise');
});


Route::get('financement/les-organismes-publics/innov-idea', function () {
    return view('pages.financement.les-organismes-publics.innov-idea');
});

Route::get('financement/les-organismes-publics/innov-start', function () {
    return view('pages.financement.les-organismes-publics.innov-start');
});

Route::get('financement/les-organismes-publics/innov-risk', function () {
    return view('pages.financement.les-organismes-publics.innov-risk');
});

Route::get('financement/les-organismes-publics/innov-dev', function () {
    return view('pages.financement.les-organismes-publics.innov-dev');
});
Route::get('financement/les-organismes-publics/tatwir-croissance-verte', function () {
    return view('pages.financement.les-organismes-publics.tatwir-croissance-verte');
});
Route::get('financement/les-organismes-publics/tatwir-startup', function () {
    return view('pages.financement.les-organismes-publics.tatwir-startup');
});

Route::get('financement/les-organismes-publics/nawat-pr-investissement', function () {
    return view('pages.financement.les-organismes-publics.nawat-pr-investissement');
});

Route::get('financement/les-organismes-publics/ISTITMAR', function () {
    return view('pages.financement.les-organismes-publics.ISTITMAR');
});

Route::get('financement/les-organismes-publics/mouwakaba-conseil-et-expertise-technique', function () {
    return view('pages.financement.les-organismes-publics.mouwakaba-conseil-et-expertise-technique');
});

Route::get('financement/les-organismes-publics/cr-ativit-co-d-veloppement', function () {
    return view('pages.financement.les-organismes-publics.cr-ativit-co-d-veloppement');
});

Route::get('financement/les-organismes-publics/fin-a-avances-sur-march-s-priv-s', function () {
    return view('pages.financement.les-organismes-publics.fin-a-avances-sur-march-s-priv-s');
});
Route::get('financement/les-organismes-publics/fin-a-cautions', function () {
    return view('pages.financement.les-organismes-publics.fin-a-cautions');
});
Route::get('financement/les-organismes-publics/aides-directes-accord-es-aux-cosyst-mes-industriels', function () {
    return view('pages.financement.les-organismes-publics.aides-directes-accord-es-aux-cosyst-mes-industriels');
});
Route::get('financement/les-organismes-publics/aides-directes-accord-es-dans-le-cadre-de-la-charte-de-l-investissement', function () {
    return view('pages.financement.les-organismes-publics.aides-directes-accord-es-dans-le-cadre-de-la-charte-de-l-investissement');
});

Route::get('financement/les-organismes-publics/fonds-hassan-ii', function () {
    return view('pages.financement.les-organismes-publics.fonds-hassan-ii');
});

Route::get('financement/les-organismes-publics/fonds-de-d-veloppement-agricole-fda', function () {
    return view('pages.financement.les-organismes-publics.fonds-de-d-veloppement-agricole-fda');
});

Route::get('financement/les-organismes-publics/programme-des-contrats-de-croissance-l-export', function () {
    return view('pages.financement.les-organismes-publics.programme-des-contrats-de-croissance-l-export');
});

Route::get('financement/les-organismes-publics/les-conventions-d-investissement', function () {
    return view('pages.financement.les-organismes-publics.les-conventions-d-investissement');
});

Route::get('financement/les-organismes-publics/le-r-gime-conventionnel', function () {
    return view('pages.financement.les-organismes-publics.le-r-gime-conventionnel');
});

Route::get('financement/les-organismes-internationaux/expertise-internationale', function () {
    return view('pages.financement.les-organismes-internationaux.expertise-internationale');
});


Route::get('financement/les-organismes-internationaux/consultance-locale', function () {
    return view('pages.financement.les-organismes-internationaux.consultance-locale');
});

Route::get('financement/les-organismes-internationaux/financement-cr-ation-post-cr-ation', function () {
    return view('pages.financement.les-organismes-internationaux.financement-cr-ation-post-cr-ation');
});

Route::get('financement/les-organismes-internationaux/fonds-d-amor-age-digital-africa', function () {
    return view('pages.financement.les-organismes-internationaux.fonds-d-amor-age-digital-africa');
});



/***** */
Route::get('financement/le-financement-de-l-conomie-verte/cap-bleu', function () {
    return view('pages.financement.le-financement-de-l-conomie-verte.cap-bleu');
});


Route::get('financement/le-financement-de-l-conomie-verte/green-economy-financing-facility-geff', function () {
    return view('pages.financement.le-financement-de-l-conomie-verte.green-economy-financing-facility-geff');
});

Route::get('financement/le-financement-de-l-conomie-verte/green-value-chain-gvc', function () {
    return view('pages.financement.le-financement-de-l-conomie-verte.green-value-chain-gvc');
});

Route::get('financement/le-financement-de-l-conomie-verte/ISTIDAMA', function () {
    return view('pages.financement.le-financement-de-l-conomie-verte.ISTIDAMA');
});
Route::get('financement/le-financement-de-l-conomie-verte/bp-green-invest', function () {
    return view('pages.financement.le-financement-de-l-conomie-verte.bp-green-invest');
});

Route::get('financement/le-financement-de-l-conomie-verte/plan-green', function () {
    return view('pages.financement.le-financement-de-l-conomie-verte.plan-green');
});

Route::get('financement/le-financement-de-l-conomie-verte/saquii-saquii-solaire-saquii-optimise', function () {
    return view('pages.financement.le-financement-de-l-conomie-verte.saquii-saquii-solaire-saquii-optimise');
});
 /******* */

 Route::get('financement/linvestissement-en-capital/capital-amor-age', function () {
    return view('pages.financement.linvestissement-en-capital.capital-amor-age');
});
Route::get('financement/linvestissement-en-capital/capital-risque', function () {
    return view('pages.financement.linvestissement-en-capital.capital-risque');
});

Route::get('financement/linvestissement-en-capital/capital-d-veloppement', function () {
    return view('pages.financement.linvestissement-en-capital.capital-d-veloppement');
});
Route::get('financement/linvestissement-en-capital/capital-transmission', function () {
    return view('pages.financement.linvestissement-en-capital.capital-transmission');
});
Route::get('financement/linvestissement-en-capital/capital-retournement', function () {
    return view('pages.financement.linvestissement-en-capital.capital-retournement');
});

/********* */
Route::get('financement/le-financement-par-le-march-de-capitaux/emission-d-actions-via-appel-publique-l-pargne', function () {
    return view('pages.financement.le-financement-par-le-march-de-capitaux.emission-d-actions-via-appel-publique-l-pargne');
});
Route::get('financement/le-financement-par-le-march-de-capitaux/emission-d-action-via-march-de-d-veloppement', function () {
    return view('pages.financement.le-financement-par-le-march-de-capitaux.emission-d-action-via-march-de-d-veloppement');
});
Route::get('financement/le-financement-par-le-march-de-capitaux/emission-d-action-via-march-alternatif', function () {
    return view('pages.financement.le-financement-par-le-march-de-capitaux.emission-d-action-via-march-alternatif');
});
Route::get('financement/le-financement-par-le-march-de-capitaux/emission-par-obligations', function () {
    return view('pages.financement.le-financement-par-le-march-de-capitaux.emission-par-obligations');
});

/*** */


Route::get('financement/le-business-plan', function () {
    return view('pages.financement.le-business-plan');
});

Route::get('financement/les-garanties-du-cr-dit', function () {
    return view('pages.financement.les-garanties-du-cr-dit');
});
/*** */
Route::get('contacts/les-investisseurs-en-capital', function () {
    return view('pages.contacts.les-investisseurs-en-capital');
});
Route::get('contacts/microfinance', function () {
    return view('pages.contacts.microfinance');
});

Route::get('contacts/leasing', function () {
    return view('pages.contacts.leasing');
});

Route::get('contacts/banques-classiques', function () {
    return view('pages.contacts.banques-classiques');
});
Route::get('contacts/banques-participatives', function () {
    return view('pages.contacts.banques-participatives');
});
Route::get('contacts/organismes-public', function () {
    return view('pages.contacts.organismes-public');
});

/******** */
Route::get('preparer-sa-creation/Entreprise-individuelle-personne physique-ou-societe', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.Entreprise-individuelle-personne physique-ou-societe');
});

Route::get('preparer-sa-creation/Quelles-sont-les-etapes-cles-pour-creer-sa-societe', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.Quelles-sont-les-etapes-cles-pour-creer-sa-societe');
});

Route::get('preparer-sa-creation/quels-sont-les-crit-res-importants-pour-choisir-sa-structure-juridique-', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.quels-sont-les-crit-res-importants-pour-choisir-sa-structure-juridique-');
});

Route::get('preparer-sa-creation/quels-sont-les-diff-rents-statuts-existants', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.quels-sont-les-diff-rents-statuts-existants');
});

Route::get('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sarl-et-de-la-sa', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.quelles-sont-les-principales-caract-ristiques-de-la-sarl-et-de-la-sa');
});

Route::get('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sca-de-la-snc-et-scs', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.quelles-sont-les-principales-caract-ristiques-de-la-sca-de-la-snc-et-scs');
});

Route::get('preparer-sa-creation/dans-quels-cas-opter-pour-le-r-gime-d-auto-entrepreneur', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.dans-quels-cas-opter-pour-le-r-gime-d-auto-entrepreneur');
});

Route::get('preparer-sa-creation/conseils-pratiques-et-points-de-vigilance', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.conseils-pratiques-et-points-de-vigilance');
});

Route::get('preparer-sa-creation/pour-quelles-questions-dois-je-faire-appel-un-conseil-juridique', function () {
    return view('pages.guide-pratiques-de-situatuions.preparer-sa-creation.pour-quelles-questions-dois-je-faire-appel-un-conseil-juridique');
});


/******** */


Route::get('protger-son-idee-d-entreprise/pourquoi-et-comment-protger-son-idee', function () {
    return view('pages.guide-pratiques-de-situatuions.protger-son-idee-d-entreprise.pourquoi-et-comment-protger-son-idee');
});

Route::get('protger-son-idee-d-entreprise/comment-d-poser-un-nom-commercial', function () {
    return view('pages.guide-pratiques-de-situatuions.protger-son-idee-d-entreprise.comment-d-poser-un-nom-commercial');
});

Route::get('protger-son-idee-d-entreprise/quels-sont-les-diff-rents-titres-de-propri-t-industrielle', function () {
    return view('pages.guide-pratiques-de-situatuions.protger-son-idee-d-entreprise.quels-sont-les-diff-rents-titres-de-propri-t-industrielle');
});



/******** */

Route::get('financer-son-projet/pourquoi-laborer-des-pr-visions-financi-res', function () {
    return view('pages.guide-pratiques-de-situatuions.financer-son-projet.pourquoi-laborer-des-pr-visions-financi-res');
});

Route::get('financer-son-projet/comment-r-aliser-un-pr-visionnel-financier', function () {
    return view('pages.guide-pratiques-de-situatuions.financer-son-projet.comment-r-aliser-un-pr-visionnel-financier');
});

Route::get('financer-son-projet/quelles-m-thodes-pour-estimer-mon-chiffre-d-affaires-ca-pr-visionnel', function () {
    return view('pages.guide-pratiques-de-situatuions.financer-son-projet.quelles-m-thodes-pour-estimer-mon-chiffre-d-affaires-ca-pr-visionnel');
});

Route::get('financer-son-projet/pourquoi-recourir-la-m-thode-du-lean-startup', function () {
    return view('pages.guide-pratiques-de-situatuions.financer-son-projet.pourquoi-recourir-la-m-thode-du-lean-startup');
});

Route::get('financer-son-projet/comment-r-ussir-pr-senter-ou-pitcher-son-projet', function () {
    return view('pages.guide-pratiques-de-situatuions.financer-son-projet.comment-r-ussir-pr-senter-ou-pitcher-son-projet');
});

/******** */

Route::get('optimiser-sa-strategie-marketing/pourquoi-le-marketing-digital-est-essentiel-et-incontournable', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.pourquoi-le-marketing-digital-est-essentiel-et-incontournable');
});
Route::get('optimiser-sa-strategie-marketing/comment-acheter-un-nom-de-domaine', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.comment-acheter-un-nom-de-domaine');
});

Route::get('optimiser-sa-strategie-marketing/comment-concevoir-mon-site-web', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.comment-concevoir-mon-site-web');
});


Route::get('optimiser-sa-strategie-marketing/comment-r-aliser-un-site-de-e-commerce-ou-une-boutique-en-ligne', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.comment-r-aliser-un-site-de-e-commerce-ou-une-boutique-en-ligne');
});

Route::get('optimiser-sa-strategie-marketing/comment-optimiser-mon-site-web-ou-le-seo', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.comment-optimiser-mon-site-web-ou-le-seo');
});


Route::get('optimiser-sa-strategie-marketing/quelles-strat-gies-de-r-f-rencement-de-mon-site-web', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.quelles-strat-gies-de-r-f-rencement-de-mon-site-web');
});


Route::get('optimiser-sa-strategie-marketing/cinq-conseils-d-optimisation-pour-les-moteurs-de-recherches-seo', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.cinq-conseils-d-optimisation-pour-les-moteurs-de-recherches-seo');
});



Route::get('optimiser-sa-strategie-marketing/comment-mesurer-l-efficacit-de-votre-strat-gie-de-marketing-digital', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.comment-mesurer-l-efficacit-de-votre-strat-gie-de-marketing-digital');
});

Route::get('optimiser-sa-strategie-marketing/quels-indicateurs-suivre-et-int-grer-votre-reporting-de-marketing-digital', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.quels-indicateurs-suivre-et-int-grer-votre-reporting-de-marketing-digital');
});
Route::get('optimiser-sa-strategie-marketing/quels-sont-les-outils-marketing-disponibles-pour-m-aider-lancer-mon-activit', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.quels-sont-les-outils-marketing-disponibles-pour-m-aider-lancer-mon-activit');
});
Route::get('optimiser-sa-strategie-marketing/comment-mettre-en-place-un-syst-me-de-paiement-en-ligne', function () {
    return view('pages.guide-pratiques-de-situatuions.optimiser-sa-strategie-marketing.comment-mettre-en-place-un-syst-me-de-paiement-en-ligne');
});

/****** */

Route::get('gouverner-et-piloter-son-entreprise/etablir-un-plan-d-action-commercial', function () {
    return view('pages.guide-pratiques-de-situatuions.gouverner-et-piloter-son-entreprise/etablir-un-plan-d-action-commercial');
});
Route::get('gouverner-et-piloter-son-entreprise/etablir-une-gouvernance-efficace-et-agile', function () {
    return view('pages.guide-pratiques-de-situatuions.gouverner-et-piloter-son-entreprise.etablir-une-gouvernance-efficace-et-agile');
});
Route::get('gouverner-et-piloter-son-entreprise/louer-ou-acheter-son-local-commercial', function () {
    return view('pages.guide-pratiques-de-situatuions.gouverner-et-piloter-son-entreprise.louer-ou-acheter-son-local-commercial');
});
Route::get('gouverner-et-piloter-son-entreprise/piloter-son-activite', function () {
    return view('pages.guide-pratiques-de-situatuions.gouverner-et-piloter-son-entreprise.piloter-son-activite');
});

Route::get('gouverner-et-piloter-son-entreprise/planifier-le-volet-comptable-et-fiscal', function () {
    return view('pages.guide-pratiques-de-situatuions.gouverner-et-piloter-son-entreprise.planifier-le-volet-comptable-et-fiscal');
});
/**** */
Route::get('g-rer-ses-ressources-humaines/calculer-et-g-rer-les-salaires', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-ses-ressources-humaines.calculer-et-g-rer-les-salaires');
});

Route::get('g-rer-ses-ressources-humaines/etablir-un-contrat-de-travail', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-ses-ressources-humaines.etablir-un-contrat-de-travail');
});

Route::get('g-rer-ses-ressources-humaines/motiver-et-garder-ses-talents', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-ses-ressources-humaines.motiver-et-garder-ses-talents');
});

Route::get('g-rer-ses-ressources-humaines/quel-r-gime-de-retraite-choisir', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-ses-ressources-humaines.quel-r-gime-de-retraite-choisir');
});

Route::get('g-rer-ses-ressources-humaines/quelle-assurance-pour-mes-salaris', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-ses-ressources-humaines.quelle-assurance-pour-mes-salaris');
});

Route::get('g-rer-ses-ressources-humaines/recruter-ses-talents', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-ses-ressources-humaines.recruter-ses-talents');
});

Route::get('g-rer-ses-ressources-humaines/se-s-parer-de-ses-collaborateurs', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-ses-ressources-humaines.se-s-parer-de-ses-collaborateurs');
});

/**** */


Route::get('g-rer-sa-logistique-et-ses-fournisseurs/comment-devenir-exportateur-commerce-ext-rieur', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-sa-logistique-et-ses-fournisseurs.comment-devenir-exportateur-commerce-ext-rieur');
});
Route::get('g-rer-sa-logistique-et-ses-fournisseurs/identifier-et-g-rer-ses-fournisseurs', function () {
    return view('pages.guide-pratiques-de-situatuions.g-rer-sa-logistique-et-ses-fournisseurs.identifier-et-g-rer-ses-fournisseurs');
});
/***** */
Route::get('lever-des-fonds/comment-valuer-son-besoin-en-financement', function () {
    return view('pages.guide-pratiques-de-situatuions.lever-des-fonds.comment-valuer-son-besoin-en-financement');
});

Route::get('lever-des-fonds/quelles-sont-les-contraintes-envisager-pour-sa-lev-e-de-fonds', function () {
    return view('pages.guide-pratiques-de-situatuions.lever-des-fonds.quelles-sont-les-contraintes-envisager-pour-sa-lev-e-de-fonds');
});

Route::get('lever-des-fonds/quels-sont-les-facteurs-cl-s-de-succ-s-pour-obtenir-son-financement', function () {
    return view('pages.guide-pratiques-de-situatuions.lever-des-fonds.quels-sont-les-facteurs-cl-s-de-succ-s-pour-obtenir-son-financement');
});

Route::get('lever-des-fonds/le-financement-travers-un-fonds-d-investissement-ou-leverage-buy-out-lbo', function () {
    return view('pages.guide-pratiques-de-situatuions.lever-des-fonds.le-financement-travers-un-fonds-d-investissement-ou-leverage-buy-out-lbo');
});

Route::get('lever-des-fonds/je-veux-me-faire-financer-comment-valoriser-son-entreprise', function () {
    return view('pages.guide-pratiques-de-situatuions.lever-des-fonds.je-veux-me-faire-financer-comment-valoriser-son-entreprise');
});


/*** */
Route::get('transformer-son-entreprise/pourquoi-transformer-son-entreprise', function () {
    return view('pages.guide-pratiques-de-situatuions.transformer-son-entreprise.pourquoi-transformer-son-entreprise');
});

Route::get('transformer-son-entreprise/comment-r-organiser-une-petite-entreprise', function () {
    return view('pages.guide-pratiques-de-situatuions.transformer-son-entreprise.comment-r-organiser-une-petite-entreprise');
});
Route::get('transformer-son-entreprise/concevez-un-syst-me-de-management-efficace', function () {
    return view('pages.guide-pratiques-de-situatuions.transformer-son-entreprise.concevez-un-syst-me-de-management-efficace');
});

Route::get('transformer-son-entreprise/d-ployez-un-syst-me-d-information-en-phase-avec-votre-organisation', function () {
    return view('pages.guide-pratiques-de-situatuions.transformer-son-entreprise.d-ployez-un-syst-me-d-information-en-phase-avec-votre-organisation');
});

Route::get('transformer-son-entreprise/comment-op-rer-une-transformation-digitale', function () {
    return view('pages.guide-pratiques-de-situatuions.transformer-son-entreprise.comment-op-rer-une-transformation-digitale');
});
/***** */
Route::get('communiquer-effectivement/au-fait-pourquoi-communiquer', function () {
    return view('pages.guide-pratiques-de-situatuions.communiquer-effectivement.au-fait-pourquoi-communiquer');
});

Route::get('communiquer-effectivement/que-dois-je-savoir-avant-de-lancer-ma-communication', function () {
    return view('pages.guide-pratiques-de-situatuions.communiquer-effectivement.que-dois-je-savoir-avant-de-lancer-ma-communication');
});
Route::get('communiquer-effectivement/quels-sont-les-principaux-canaux-de-communication-et-marketing', function () {
    return view('pages.guide-pratiques-de-situatuions.communiquer-effectivement.quels-sont-les-principaux-canaux-de-communication-et-marketing');
});

Route::get('communiquer-effectivement/4-b2b-et-b2c-quelles-diff-rences-en-termes-de-marketing', function () {
    return view('pages.guide-pratiques-de-situatuions.communiquer-effectivement.4-b2b-et-b2c-quelles-diff-rences-en-termes-de-marketing');
});

Route::get('communiquer-effectivement/comment-r-aliser-une-campagne-publicitaire-dans-les-m-dias-et-qui-s-adresse', function () {
    return view('pages.guide-pratiques-de-situatuions.communiquer-effectivement.comment-r-aliser-une-campagne-publicitaire-dans-les-m-dias-et-qui-s-adresse');
});

Route::get('communiquer-effectivement/comment-se-d-roule-une-campagne-m-dias', function () {
    return view('pages.guide-pratiques-de-situatuions.communiquer-effectivement.comment-se-d-roule-une-campagne-m-dias');
});
/***** */
Route::get('trouver-et-valuer-son-id-e-d-entreprise/pourquoi-et-comment-r-aliser-votre-tude-de-march', function () {
    return view('pages.guide-pratiques-de-situatuions.trouver-et-valuer-son-id-e-d-entreprise.pourquoi-et-comment-r-aliser-votre-tude-de-march');
});
Route::get('trouver-et-valuer-son-id-e-d-entreprise/comment-trouver-son-id-e-d-entreprise', function () {
    return view('pages.guide-pratiques-de-situatuions.trouver-et-valuer-son-id-e-d-entreprise.comment-trouver-son-id-e-d-entreprise');
});
Route::get('trouver-et-valuer-son-id-e-d-entreprise/comment-d-finir-votre-business-model', function () {
    return view('pages.guide-pratiques-de-situatuions.trouver-et-valuer-son-id-e-d-entreprise.comment-d-finir-votre-business-model');
});

Route::get('trouver-et-valuer-son-id-e-d-entreprise/comment-construire-votre-business-plan', function () {
    return view('pages.guide-pratiques-de-situatuions.trouver-et-valuer-son-id-e-d-entreprise.comment-construire-votre-business-plan');
});

Route::get('trouver-et-valuer-son-id-e-d-entreprise/quels-conseils-pour-r-ussir-son-business-plan', function () {
    return view('pages.guide-pratiques-de-situatuions.trouver-et-valuer-son-id-e-d-entreprise.quels-conseils-pour-r-ussir-son-business-plan');
});
/***** */
Route::get('503', function () {
    return view('pages.errors-pages.503');
});
