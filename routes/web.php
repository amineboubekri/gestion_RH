<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
}); 

Route::get('/', [HomeController::class,'showhome'])->name('acceuil');

/*conges*/

Route::get('/conge/list', [HomeController::class,'index'])->name('conge.list');
Route::get('/conge/{DRPP}', [HomeController::class,'show'])->name('conge.show');
Route::get('/create/conge/{DRPP}', [HomeController::class,'create'])->name('conge.create');
Route::get('/create/conge2/', [HomeController::class,'createconge'])->name('conge.create2');
Route::post('/ajouter/conge/', [HomeController::class,'store'])->name('conge.store');
Route::get('/edit/conge/{type_conge}', [HomeController::class,'edit'])->name('conge.edit');
Route::put('/update/conge/{type_conge}', [HomeController::class,'update'])->name('conge.update');
Route::delete('/delete/conge/{type_conge}', [HomeController::class,'delete'])->name('conge.delete');

/*employes*/

Route::get('/create/empl', [HomeController::class,'createempl'])->name('empl.create');
Route::get('/empl/show/', [HomeController::class,'listempl'])->name('empl.list');
Route::get('/personne/{DRPP}', [HomeController::class,'showempl'])->name('empl.show');
Route::get('/create/employe', [HomeController::class,'createempl'])->name('empl.create');
Route::post('/ajouter/employe', [HomeController::class,'storeempl'])->name('empl.store');
Route::get('/edit/empl/{DRPP}', [HomeController::class,'editempl'])->name('empl.edit');
Route::put('/update/employe/{DRPP}', [HomeController::class,'updateempl'])->name('empl.update');
Route::delete('/delete/employe/{DRPP}', [HomeController::class,'deleteempl'])->name('empl.delete');
Route::get('/empl/search', [HomeController::class, 'search'])->name('empl.search');
Route::get('/empl/filter', [HomeController::class, 'filter'])->name('empl.filter'); 

/*mutations*/

Route::get('/mutation/list', [HomeController::class,'listemutation'])->name('mutation.list');
Route::get('/mutation/{Ref_Mutation}', [HomeController::class,'showmutation'])->name('mutation.show');
Route::get('/create/mutation', [HomeController::class,'createmutation'])->name('mutation.create');
Route::get('/create/mutation/{DRPP}', [HomeController::class,'createmutation2'])->name('mutation.create2');
Route::post('/ajouter/mutation', [HomeController::class,'storemutation'])->name('mutation.store');
Route::get('/edit/mutation/{Ref_mutation}', [HomeController::class,'editemutation'])->name('mutation.edit');
Route::put('/update/mutation/{Ref_mutation}', [HomeController::class,'updatemutation'])->name('mutation.update');
Route::delete('/delete/mutation/{Ref_mutation}', [HomeController::class,'deletemutation'])->name('mutation.delete');

/*absences*/

Route::get('/absence/show/', [HomeController::class,'listeabsence'])->name('absence.list');
Route::get('/absence/{Ref_absence}', [HomeController::class,'showabsence'])->name('absence.show');
Route::get('/create/absence', [HomeController::class,'createabsence'])->name('absence.create');
Route::get('/create/absence2/{DRPP}', [HomeController::class,'createabsence2'])->name('absence.create2');
Route::post('/ajouter/absence', [HomeController::class,'storeabsence'])->name('absence.store');
Route::get('/edit/absence/{Ref_absence}', [HomeController::class,'editeabsence'])->name('absence.edit');
Route::put('/update/absence/{Ref_absence}', [HomeController::class,'updateabsence'])->name('absence.update');
Route::delete('/delete/absence/{Ref_absence}', [HomeController::class,'deleteabsence'])->name('absence.delete');

/*allocations*/

Route::get('/allocation/list', [HomeController::class,'listeallocation'])->name('allocation.list');
Route::get('/allocation/{Ref_allocation_familiale}', [HomeController::class,'showallocation'])->name('allocation.show');
Route::get('/create/allocation', [HomeController::class,'createallocation'])->name('allocation.create');
Route::get('/create/allocation/{DRPP}', [HomeController::class,'createallocation2'])->name('allocation.create2');
Route::post('/ajouter/allocation', [HomeController::class,'storeallocation'])->name('allocation.store');
Route::get('/edit/allocation/{Ref_allocation_familiale}', [HomeController::class,'editeallocation'])->name('allocation.edit');
Route::put('/update/allocation/{Ref_allocation_familiale}', [HomeController::class,'updateallocation'])->name('allocation.update');
Route::delete('/delete/allocation/{Ref_allocation_familiale}', [HomeController::class,'deleteallocation'])->name('allocation.delete');

/*diplomes*/

Route::get('/diplome/list', [HomeController::class,'listediplome'])->name('diplome.list');
Route::get('/diplome/{Ref_diplome}', [HomeController::class,'showdiplome'])->name('diplome.show');
Route::get('/create/diplome', [HomeController::class,'creatediplome'])->name('diplome.create');
Route::get('/create/diplome2/{DRPP}', [HomeController::class,'creatediplome2'])->name('diplome.create2');
Route::post('/ajouter/diplome', [HomeController::class,'storediplome'])->name('diplome.store');
Route::get('/edit/diplome/{Ref_diplome}', [HomeController::class,'editediplome'])->name('diplome.edit');
Route::put('/update/diplome/{Ref_diplome}', [HomeController::class,'updatediplome'])->name('diplome.update');
Route::delete('/delete/diplome/{Ref_diplome}', [HomeController::class,'deletediplome'])->name('diplome.delete');

/*echelle*/

Route::get('/echelle/list', [HomeController::class,'listeechelle'])->name('echelle.list');
Route::get('/echelle/{Ref_echelle}', [HomeController::class,'showechelle'])->name('echelle.show');
Route::get('/create/echelle', [HomeController::class,'createechelle'])->name('echelle.create');
Route::get('/create/echelle/{DRPP}', [HomeController::class,'createechelle2'])->name('echelle.create2');
Route::post('/ajouter/echelle', [HomeController::class,'storeechelle'])->name('echelle.store');
Route::get('/edit/echelle/{Ref_echelle}', [HomeController::class,'editeechelle'])->name('echelle.edit');
Route::put('/update/echelle/{Ref_echelle}', [HomeController::class,'updateechelle'])->name('echelle.update');
Route::delete('/delete/echelle/{Ref_echelle}', [HomeController::class,'deleteechelle'])->name('echelle.delete');

/*grade*/

Route::get('/grade/list', [HomeController::class,'listegrade'])->name('grade.list');
Route::get('/grade/{Ref_grade}', [HomeController::class,'showgrade'])->name('grade.show');
Route::get('/create/grade', [HomeController::class,'creategrade'])->name('grade.create');
Route::post('/ajouter/grade', [HomeController::class,'storegrade'])->name('grade.store');
Route::get('/edit/grade/{Ref_grade}', [HomeController::class,'editegrade'])->name('grade.edit');
Route::put('/update/grade/{Ref_grade}', [HomeController::class,'updategrade'])->name('grade.update');
Route::delete('/delete/grade/{Ref_grade}', [HomeController::class,'deletegrade'])->name('grade.delete');

/*mission*/

Route::get('/mission/list', [HomeController::class,'listemission'])->name('mission.list');
Route::get('/mission/{Ref_mission}', [HomeController::class,'showmission'])->name('mission.show');
Route::get('/create/mission', [HomeController::class,'createmission'])->name('mission.create');
Route::get('/create/mission/{DRPP}', [HomeController::class,'createmission2'])->name('mission.create2');
Route::post('/ajouter/mission', [HomeController::class,'storemission'])->name('mission.store');
Route::get('/edit/mission/{Ref_mission}', [HomeController::class,'editemission'])->name('mission.edit');
Route::put('/update/mission/{Ref_mission}', [HomeController::class,'updatemission'])->name('mission.update');
Route::delete('/delete/mission/{Ref_mission}', [HomeController::class,'deletemission'])->name('mission.delete');

/*Motivation*/

Route::get('/motivation/list', [HomeController::class,'listemotivation'])->name('motivation.list');
Route::get('/motivation/{Ref_motivation}', [HomeController::class,'showmotivation'])->name('motivation.show');
Route::get('/create/motivation', [HomeController::class,'createmotivation'])->name('motivation.create');
Route::get('/create/motivation/{DRPP}', [HomeController::class,'createmotivation2'])->name('motivation.create2');
Route::post('/ajouter/motivation', [HomeController::class,'storemotivation'])->name('motivation.store');
Route::get('/edit/motivation/{Ref_motivation}', [HomeController::class,'editemotivation'])->name('motivation.edit');
Route::put('/update/motivation/{Ref_motivation}', [HomeController::class,'updatemotivation'])->name('motivation.update');
Route::delete('/delete/motivation/{Ref_motivation}', [HomeController::class,'deletemotivation'])->name('motivation.delete');

/*notations*/

Route::get('/notation/list', [HomeController::class,'listenotation'])->name('notation.list');
Route::get('/notation/{Ref_note}', [HomeController::class,'shownotation'])->name('notation.show');
Route::get('/create/notation', [HomeController::class,'createnotation'])->name('notation.create');
Route::get('/create/notation/{DRPP}', [HomeController::class,'createnotation2'])->name('notation.create2');
Route::post('/ajouter/notation', [HomeController::class,'storenotation'])->name('notation.store');
Route::get('/edit/notation/{Ref_note}', [HomeController::class,'editenotation'])->name('notation.edit');
Route::put('/update/notation/{Ref_note}', [HomeController::class,'updatenotation'])->name('notation.update');
Route::delete('/delete/notation/{Ref_notation}', [HomeController::class,'deletenotation'])->name('notation.delete');

/*PDF*/

Route::get('/imprimer_employe',[HomeController::class,'imprimerempl'])->name('imprimer.empl');
Route::get('/imprimer_conge',[HomeController::class,'imprimerconge'])->name('imprimer.conge');
Route::get('/imprimer_employe/{DRPP}',[HomeController::class,'imprimerempl2'])->name('imprimer.empl2');
Route::get('/imprimer_conge/{DRPP}',[HomeController::class,'imprimerconge2'])->name('imprimer.conge2');
Route::get('/generate-pdf/{DRPP}', [HomeController::class,'showcongepdf'])->name('generate.pdf');
Route::get('/imprimer_mutation',[HomeController::class,'imprimermutation'])->name('imprimer.muta');
Route::get('/imprimer_mutation/{DRPP}',[HomeController::class,'imprimermutation2'])->name('imprimer.mutation2');
Route::get('/imprimer_allocation',[HomeController::class,'imprimerallocation'])->name('imprimer.allo');
Route::get('/imprimer_allocation/{DRPP}',[HomeController::class,'imprimerallocation2'])->name('imprimer.allo2');
Route::get('/imrimer_diplome',[HomeController::class,'imprimerdiplome'])->name('imprimer.diplome');
Route::get('/imrimer_diplome/{DRPP}',[HomeController::class,'imprimerdiplome2'])->name('imprimer.diplome2');
Route::get('/imprimer_echelle',[HomeController::class,'imprimerechelle'])->name('imprimer.echelle');
Route::get('/imprimer_echelle/{DRPP}',[HomeController::class,'imprimerechelle2'])->name('imprimer.echelle2');
Route::get('/imprimer_mission',[HomeController::class,'imprimermission'])->name('imprimer.mission');
Route::get('/imprimer_mission/{DRPP}',[HomeController::class,'imprimermission2'])->name('imprimer.mission2');
Route::get('/imprimer_absence',[HomeController::class,'imprimerabsence'])->name('imprimer.absence');
Route::get('/imprimer_absence/{DRPP}',[HomeController::class,'imprimerabsence2'])->name('imprimer.absence2');
Route::get('/imprimer_notation',[HomeController::class,'imprimernotation'])->name('imprimer.notation');
Route::get('/imprimer_notation/{DRPP}',[HomeController::class,'imprimernotation2'])->name('imprimer.notation2');
Route::get('/imprimer_motivations',[HomeController::class,'imprimermotivation'])->name('imprimer.motivation');
Route::get('/imprimer_motivation/{DRPP}',[HomeController::class,'imprimermotivation2'])->name('imprimer.motivation2');



/*calendrier*/

Route::resource('absences', HomeController::class);
Route::get('/calendrier',[HomeController::class,'calendrier'])->name('absence.calendrier');
Route::post('absences/generate-report', [HomeController::class, 'generateReport'])->name('absences.generate-report');
