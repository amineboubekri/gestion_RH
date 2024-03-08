<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use App\Models\Conge;
use App\Models\Personne;
use App\Models\Mutation;
use App\Models\absence;
use App\Models\Echelle;
use App\Models\Allocation_Familiale;
use App\Models\Diplome;
use App\Models\Grade;
use App\Models\Mission;
use App\Models\Motivation;
use App\Models\Notation;
use Illuminate\Http\Request;
use Illuminate\Http\CongeRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Pdf;


class HomeController extends Controller
{ 
    //
   

    public function login()
    {
        return view('auth.login');
    }
    public function showhome()
    {
        $nombreEmployes = Personne::count();
        $nombreConges = Conge::count();
        $nombreMutations = Mutation::count();
        $nombreAbsence = Absence::count();
        $nombreEchelle = Echelle::count();
        $nombreAllocation = Allocation_Familiale::count();
        $nombreDiplome = Diplome::count();
        $nombreGrade = Grade::count();
        $nombreMission = Mission::count();
        $nombreMotivation = Motivation::count();
        $nombreNotation = Notation::count();
    
        return view('acceuil', compact('nombreEmployes', 'nombreConges', 'nombreMutations', 'nombreAbsence', 'nombreEchelle',
            'nombreAllocation', 'nombreDiplome', 'nombreDiplome', 'nombreGrade', 'nombreMission', 'nombreMotivation', 'nombreNotation'));
    }

    public function index(Request $request)
    {
        $conges = Conge::latest()->paginate(6);
        $years = Conge::distinct()->pluck('AnneeConge'); 
        $selectedYear = $request->input('year-filter');
    
        if (!empty($selectedYear)) {
            $conges = $conges->where('AnneeConge', $selectedYear);
        }
    
        return view('home', compact('conges', 'years', 'selectedYear')); 
    }

    public function listempl()
    {
        $query = request()->query('query');

    if ($query) {
        $personnes = Personne::where('Nom', 'LIKE', '%' . $query . '%')->paginate(10);
    } else {
        $personnes = Personne::paginate(10);
    }
    $years = Personne::select(DB::raw('YEAR(date_recrutement) as year'))
        ->groupBy('year')
        ->pluck('year');

    return view('showempl')->with(['personnes' => $personnes, 'years' => $years]);
    }

    public function listemutation()
    {
        $mutations = Mutation::latest()->paginate(6);
        return view('listmutation')->with([
            'mutations' =>  $mutations
        ]);
    }

    public function listeabsence()
    {
        $absences = absence::latest()->paginate(6);
        return view('listeabsence')->with([
            'absences' =>  $absences
        ]);
    }

    public function listeallocation()
    {
        $allocations = Allocation_Familiale::latest()->paginate(6);
        return view('listeallocation')->with([
            'allocations' =>  $allocations
        ]);
    }

    public function listediplome()
    {
        $diplomes = Diplome::latest()->paginate(6);
        return view('listediplome')->with([
            'diplomes' =>  $diplomes
        ]);
    }

    public function listeechelle()
    {
        $echelles = Echelle::latest()->paginate(6);
        return view('listeechelle')->with([
            'echelles' =>  $echelles
        ]);
    }

    public function listegrade()
    {
        $grades = Grade::latest()->paginate(6);
        return view('listegrade')->with([
            'grades' =>  $grades
        ]);
    }

    public function listemission()
    {
        $missions = Mission::latest()->paginate(6);
        return view('listemission')->with([
            'missions' =>  $missions
        ]);
    }

    public function listemotivation()
    {
        $motivations = Motivation::latest()->paginate(6);
        return view('listemotivation')->with([
            'motivations' =>  $motivations
        ]);
    }

    public function listenotation()
    {
        $notations = Notation::latest()->paginate(6);
        return view('listenotation')->with([
            'notations' =>  $notations
        ]);
    }



    public function show($DRPP){
        $conge = Conge::where('DRPP', $DRPP)->first();
        return view('show')->with([
            'conge' =>  $conge
        ]);
    }

    public function showempl($DRPP){
        $personne = Personne::where('DRPP', $DRPP)->first();
        return view('showempl2')->with([
            'personnes' =>  $personne
        ]);
    }

    public function showmutation($Ref_Mutation){
        $mutation = Mutation::where('Ref_Mutation', $Ref_Mutation)->first();
        return view('showmutation')->with([
            'mutation' =>  $mutation
        ]);
    }

    public function showabsence($Ref_absence){
        $absence = absence::where('Ref_absence', $Ref_absence)->first();
        return view('showabsence')->with([
            'absence' =>  $absence
        ]);
    }

    public function showallocation($Ref_allocation_familiale){
        $allocations = Allocation_Familiale::where('Ref_allocation_familiale', $Ref_allocation_familiale)->first();
        return view('showallocation')->with([
            'allocations' =>  $allocations
        ]);
    }

    public function showdiplome($Ref_diplome){
        $diplomes = Diplome::where('Ref_diplome', $Ref_diplome)->first();
        return view('showdiplome')->with([
            'diplomes' =>  $diplomes
        ]);
    }

    public function showechelle($Ref_echelle){
        $echelles = Echelle::where('Ref_echelle', $Ref_echelle)->first();
        return view('showechelle')->with([
            'echelles' =>  $echelles
        ]);
    }

    public function showgrade($Ref_grade){
        $grades = Grade::where('Ref_grade', $Ref_grade)->first();
        return view('showgrade')->with([
            'grades' =>  $grades
        ]);
    }

    public function showmission($Ref_mission){
        $missions = Mission::where('Ref_mission', $Ref_mission)->first();
        return view('showmission')->with([
            'missions' =>  $missions
        ]);
    }

    public function showmotivation($Ref_motivation){
        $motivations = Motivation::where('Ref_motivation', $Ref_motivation)->first();
        return view('showmotivation')->with([
            'motivations' =>  $motivations
        ]);
    }

    public function shownotation($Ref_note){
        $notations = Notation::where('Ref_note', $Ref_note)->first();
        return view('shownotation')->with([
            'notations' =>  $notations
        ]);
    }




    public function create($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('createconge')->with([
                'personne' =>  $personne
            ]);
        }
        else return redirect()->route('login');
        
    }

    public function createconge(){
        if(auth()->check()){
            return view('createconge2');
        }
        else return redirect()->route('login');        
    }

    public function createempl(){
        if(auth()->check()){
            return view('createempl');
        }
        else return redirect()->route('login');        
    }

    public function createmutation(){
        if(auth()->check()){
        return view('createmutation');
        }
        else return redirect()->route('login');        
    }

    public function createmutation2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('createmutation2')->with([
                'personne' =>  $personne
            ]);    
        }
        else return redirect()->route('login');        
    }

    public function createabsence(){
        if(auth()->check()){
        return view('createabsence');
        }
        else return redirect()->route('login');        
    }

    public function createabsence2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('createabsence2')->with([
                'personne' =>  $personne
            ]);
        }
        else return redirect()->route('login');        
    }

    public function createallocation(){
        if(auth()->check()){
        return view('createallocation');
        }
        else return redirect()->route('login');        
    }

    public function createallocation2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('createallocation2')->with([
                'personne' =>  $personne
            ]);
        }
        else return redirect()->route('login');        
    }

    public function creatediplome(){
        if(auth()->check()){
        return view('creatediplome');
        }
        else return redirect()->route('login');        
    }

    public function creatediplome2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('creatediplome2')->with([
                'personne' =>  $personne
            ]);
        }
        else return redirect()->route('login');        
    }

    public function createechelle(){
        if(auth()->check()){
        return view('createechelle');
        }
        else return redirect()->route('login');        
    }

    public function createechelle2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
        return view('createechelle2')->with([
            'personne' =>  $personne
        ]);
        }
        else return redirect()->route('login');        
    }

    public function creategrade(){
        if(auth()->check()){
        return view('creategrade');
        }
        else return redirect()->route('login');        
    }

    public function createmission(){
        if(auth()->check()){
        return view('createmission');
        }
        else return redirect()->route('login');        
    }

    public function createmission2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('createmission2')->with([
                'personne' =>  $personne
            ]);
        }
        else return redirect()->route('login');        
    }

    public function createmotivation(){
        if(auth()->check()){
        return view('createmotivation');
        }
        else return redirect()->route('login');        
    }

    public function createmotivation2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('createmotivation2')->with([
                'personne' =>  $personne
            ]);
        }
        else return redirect()->route('login');        
    }

    public function createnotation(){
        if(auth()->check()){
        return view('createnotation');
        }
        else return redirect()->route('login');        
    }

    public function createnotation2($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
            return view('createnotation2')->with([
                'personne' =>  $personne
            ]);
        }
        else return redirect()->route('login');        
    }

    public function store(Request $request)
    {
        
        $this->validate($request,[
            'type_conge' => 'required|min:5|max:100',
            'nbj' => 'required',
            'AnneeConge' => 'required',
            'date_debut' => 'required',
            'date_retour' => 'required',
            'DRPP' => 'required',
            'Motif' => 'required'
        ]);
        $conge = Conge::create([
            'type_conge' => $request->type_conge,
            'NomRemplacent' => $request->NomRemplacent,
            'nbj' => $request->nbj,
            'AnneeConge' => $request->AnneeConge,
            'date_debut' => $request->date_debut,
            'date_retour' => $request->date_retour,
            'DRPP' => $request->DRPP,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'Motif' => $request->Motif,
        ]);
        
        $nbJours = $conge->nbj;
        $personne = Personne::find($conge->DRPP);
        $personne->status = "en conge de $nbJours jours";
        $personne->save();
        return redirect()->route('conge.list')->with([
            'success' => 'article ajouté'
        ]); 
    }

    public function storeempl(Request $request)
    {
        $this->validate($request,[
            'DRPP' => 'required',
            'Num_poste' => 'required',
            'Affiliation_Financiere' => 'required',
            'Nom' => 'required',
            'Prenom' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'CIN' => 'required',
            'date_naissance' => 'required',
            'Lieu_Naissance' => 'required',
            'Adresse' => 'required',
            'Telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Situation_Familiale' => 'required',
            'Nombre_enfant' => 'required',
            'Lieu_Travail' => 'required',
            'date_emboche' => 'required',
            'Situation_Administrative' => 'required',
            'date_recrutement' => 'required',
            'image' => 'required|mimes:jpg,bmp,png',
        ]);
        if($request->has('image')){ 
            $file = $request->image;
            $image_name = time() .'_'. $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);

        }
        Personne::create([
            'DRPP' => $request->DRPP,
            'Num_poste' => $request->Num_poste,
            'Affiliation_Financiere' => $request->Affiliation_Financiere,
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'CIN' => $request->CIN,
            'date_naissance' => $request->date_naissance,
            'Lieu_Naissance' => $request->Lieu_Naissance,
            'Adresse' => $request->Adresse,
            'Telephone' => $request->Telephone,
            'Situation_Familiale' => $request->Situation_Familiale,
            'Nombre_enfant' => $request->Nombre_enfant,
            'Lieu_Travail' => $request->Lieu_Travail,
            'date_emboche' => $request->date_emboche,
            'Situation_Administrative' => $request->Situation_Administrative,
            'date_recrutement' => $request->date_recrutement,
            'image'=>$image_name,
        ]);
        return redirect()->route('empl.list')->with([
            'success' => 'Employé ajouté'
        ]); 
    }

    public function storemutation(Request $request)
    {
        $this->validate($request,[
            'date_mutation' => 'required',
            'DRPP' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'lieu_Travail' => 'required',
            'ville_Mutation' => 'required',
        ]);
        Mutation::create([
            'date_mutation' => $request->date_mutation,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'lieu_Travail' => $request->lieu_Travail,
            'ville_Mutation' => $request->ville_Mutation,
            'DRPP' => $request->DRPP,
            $DRPP = $request->input('DRPP'),
    
            
            $personne = Personne::find($DRPP),
            $personne->status = 'En mutation',
            $personne->save(),
        ]);
        return redirect()->route('mutation.list')->with([
            'success' => 'mutation ajoutée'
        ]); 
    }

    public function storeabsence(Request $request)
    {
        $this->validate($request,[
            'date_absence' => 'required',
            'date_retour' => 'required',
            'DRPP' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'justification' => 'required',
            'cause' => 'required',
            'commentaire' => 'required'
        ]);
        absence::create([
            'date_absence' => $request->date_absence,
            'date_retour' => $request->date_retour,
            'DRPP' => $request->DRPP,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'justification' => $request->justification,
            'cause' => $request->cause,
            'commentaire' => $request->commentaire,
        ]);
        return redirect()->route('absence.list')->with([
            'success' => 'absence ajoutée'
        ]);
    }

    public function storeallocation(Request $request)
    {
        $this->validate($request,[
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'Type_allocation_familiale' => 'required',
            'Valeur_allocation_familiale' => 'required',
            'date_allocation' => 'required',
            'DRPP' => 'required',
        ]);
        Allocation_Familiale::create([
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'Type_allocation_familiale' => $request->Type_allocation_familiale,
            'Valeur_allocation_familiale' => $request->Valeur_allocation_familiale,
            'date_allocation' => $request->date_allocation,
            'DRPP' => $request->DRPP,
        ]);
        return redirect()->route('allocation.list')->with([
            'success' => 'allocation ajoutée'
        ]); 
    }

    public function storediplome(Request $request)
    {
        $this->validate($request,[
            'Nom_diplome' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'Specialite' => 'required',
            'Date_obtention' => 'required',
            'Ecole' => 'required',
            'Ville_diplome' => 'required',
            'DRPP' => 'required',
        ]);
        Diplome::create([
            'Nom_diplome' => $request->Nom_diplome,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'Specialite' => $request->Specialite,
            'Date_obtention' => $request->Date_obtention,
            'Ecole' => $request->Ecole,
            'Ville_diplome' => $request->Ville_diplome,
            'DRPP' => $request->DRPP,
        ]);
        return redirect()->route('diplome.list')->with([
            'success' => 'diplome ajouté'
        ]); 
    }

    public function storeechelle(Request $request)
    {
        $this->validate($request,[
            'DRPP' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'Designation_echelle' => 'required',
            'echellon' => 'required',
            'Date_echelle' => 'required',
        ]);
        Echelle::create([
            'DRPP' => $request->DRPP,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'Designation_echelle' => $request->Designation_echelle,
            'echellon' => $request->echellon,
            'Date_echelle' => $request->Date_echelle,

            $DRPP = $request->input('DRPP'),
            $echelle = $request->input('Designation_echelle'),
            $echellon = $request->input('echellon'),
            
            $personne = Personne::find($DRPP),
            $personne->Echelle = $echelle,
            $personne->echellon = $echellon,
            $personne->save(),
        ]);
        return redirect()->route('echelle.list')->with([
            'success' => 'echelle ajouté'
        ]); 
    }

    public function storegrade(Request $request)
    {
        $this->validate($request,[
            'DRPP' => 'required',
            'Designation_grade' => 'required',
            'Enum_grade' => 'required',
            'Date_grade' => 'required',
           
        ]);
        Grade::create([
            'DRPP' => $request->DRPP,
            'Designation_grade' => $request->Designation_grade,
            'Enum_grade' => $request->Enum_grade,
            'Date_grade' => $request->Date_grade,
           
        ]);
        return redirect()->route('grade.list')->with([
            'success' => 'grade ajouté'
        ]); 
    }

    public function storemission(Request $request)
    {
        $this->validate($request,[
            'DRPP' => 'required',
            
            'Objet_mission' => 'required',
            'Ville_mission' => 'required',
            'Date_debut' => 'required',
            'Date_retour' => 'required',
        ]);
        Mission::create([
            'DRPP' => $request->DRPP,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'Objet_mission' => $request->Objet_mission,
            'Ville_mission' => $request->Ville_mission,
            'Date_debut' => $request->Date_debut,
            'Date_retour' => $request->Date_retour,
           
        ]);
        return redirect()->route('mission.list')->with([
            'success' => 'mission ajouté'
        ]); 
    }

    public function storemotivation(Request $request)
    {
        $this->validate($request,[
            'DRPP' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'Type_motivation' => 'required',
            'Occasion' => 'required',
            'Date_motivation' => 'required',
            'Commentaire' => 'required',
        ]);
        Motivation::create([
            'DRPP' => $request->DRPP,
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'Type_motivation' => $request->Type_motivation,
            'Occasion' => $request->Occasion,
            'Date_motivation' => $request->Date_motivation,
            'Commentaire' => $request->Commentaire,
           
        ]);
        return redirect()->route('motivation.list')->with([
            'success' => 'motivation ajouté'
        ]); 
    }

    public function storenotation(Request $request)
    {
        $this->validate($request,[
            'Note_appliquee' => 'required',
            'Note_rentabilite' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'Note_capacite' => 'required',
            'Note_comportement_professionnel' => 'required',
            'Note_recherche' => 'required',
            'Mention' => "required",
            'Annee' => 'required',
            'DRPP' => 'required',
        ]);
        Notation::create([
            'Nom_Français' => $request->Nom_Français,
            'Prenom_Français' => $request->Prenom_Français,
            'Note_appliquee' => $request->Note_appliquee,
            'Note_rentabilite' => $request->Note_rentabilite,
            'Note_capacite' => $request->Note_capacite,
            'Note_comportement_professionnel' => $request->Note_comportement_professionnel,
            'Note_recherche' => $request->Note_recherche,
            'Mention' => $request->Mention,
            'Annee' => $request->Annee,
            'Commentaire' => $request->Commentaire,
            'DRPP' => $request->DRPP,
        ]);
        return redirect()->route('notation.list')->with([
            'success' => 'notation ajouté'
        ]); 
    }

    public function edit($type_conge){
        if(auth()->check()){
            $conge = Conge::where('type_conge', $type_conge)->first();
        return view('edit')->with([
            'conge' =>  $conge
        ]);
        }
        else
         return redirect()->route('login');
        
    }

    public function editempl($DRPP){
        if(auth()->check()){
            $personne = personne::where('DRPP', $DRPP)->first();
        return view('editempl')->with([
            'personne' =>  $personne
        ]);
        }
        else return redirect()->route('login');
    }

    public function editemutation($Ref_mutation){
        if(auth()->check()){
            $mutation = mutation::where('Ref_Mutation', $Ref_mutation)->firstOrFail();
        return view('editemutation')->with([
            'mutation' =>  $mutation
        ]);
        }
        else return redirect()->route('login');
    }

    public function editeabsence($Ref_absence){
        if(auth()->check()){
            $absence = absence::where('Ref_absence', $Ref_absence)->firstOrFail();
        return view('editeabsence')->with([
            'absence' =>  $absence
        ]);
        }
        else return redirect()->route('login');
    }

    public function editeallocation($Ref_allocation_familiale){
        if(auth()->check()){
            $allocations = Allocation_Familiale::where('Ref_allocation_familiale', $Ref_allocation_familiale)->firstOrFail();
        return view('editeallocation')->with([
            'allocations' =>  $allocations
        ]);
        }
        else return redirect()->route('login');
    }

    public function editediplome($Ref_diplome){
        if(auth()->check()){
            $diplomes = Diplome::where('Ref_diplome', $Ref_diplome)->firstOrFail();
        return view('editediplome')->with([
            'diplomes' =>  $diplomes
        ]);
        }
        else return redirect()->route('login');
    }

    public function editeechelle($Ref_echelle){
        if(auth()->check()){
            $echelles = Echelle::where('Ref_echelle', $Ref_echelle)->firstOrFail();
        return view('editeechelle')->with([
            'echelles' =>  $echelles
        ]);
        }
        else return redirect()->route('login');
    }

    public function editegrade($Ref_grade){
        if(auth()->check()){
            $grades = Grade::where('Ref_grade', $Ref_grade)->firstOrFail();
        return view('editegrade')->with([
            'grades' =>  $grades
        ]);
        }
        else return redirect()->route('login');
    }

    public function editemission($Ref_mission){
        if(auth()->check()){
            $missions = Mission::where('Ref_mission', $Ref_mission)->firstOrFail();
        return view('editemission')->with([
            'missions' =>  $missions
        ]);
        }
        else return redirect()->route('login');
    }

    public function editemotivation($Ref_motivation){
        if(auth()->check()){
            $motivations = Motivation::where('Ref_motivation', $Ref_motivation)->firstOrFail();
        return view('editemotivation')->with([
            'motivations' =>  $motivations
        ]);
        }
        else return redirect()->route('login');
    }

    public function editenotation($Ref_note){
        if(auth()->check()){
            $notations = Notation::where('Ref_note', $Ref_note)->firstOrFail();
        return view('editenotation')->with([
            'notations' =>  $notations
        ]);
        }
        else return redirect()->route('login');
    }



    public function update(Request $request ,$type_conge){
        $conge = Conge::where('type_conge', $type_conge)->first();
        $this->validate($request,[
            'type_conge' => 'required|min:5|max:100',
            'nbj' => 'required',
            'AnneeConge' => 'required',
            'date_debut' => 'required',
            'date_retour' => 'required'
        ]);
        $conge->update([
            'type_conge' => $request->type_conge,
            'NomRemplacent' => $request->NomRemplacent,
            'nbj' => $request->nbj,
            'AnneeConge' => $request->AnneeConge,
            'date_debut' => $request->date_debut,
            'date_retour' => $request->date_retour,
        ]);
        return redirect()->route('conge.list')->with([
            'success' => 'article modifié'
        ]); 
    }

    public function updateempl(Request $request, $DRPP)
{
    $personne = Personne::where('DRPP', $DRPP)->first();

    if ($personne->image) {
        $oldImagePath = public_path('uploads/' . $personne->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $image_name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $image_name);
        $personne->image = $image_name;
    }

    $this->validate($request, [
        'DRPP' => 'required',
        'Num_poste' => 'required',
        'Affiliation_Financiere' => 'required',
        'Nom' => 'required',
        'Prenom' => 'required',
        'Nom_Français' => 'required',
        'Prenom_Français' => 'required',
        'CIN' => 'required',
        'date_naissance' => 'required',
        'Lieu_Naissance' => 'required',
        'Adresse' => 'required',
        'Telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'Situation_Familiale' => 'required',
        'Nombre_enfant' => 'required',
        'Lieu_Travail' => 'required',
        'date_emboche' => 'required',
        'Situation_Administrative' => 'required',
        'date_recrutement' => 'required',
    ]);

        $personne->update($request->except('image'));

        return redirect()->route('empl.list')->with([
            'success' => 'Employé modifié'
        ]);
    }


    public function updatemutation(Request $request ,$Ref_Mutation){
        $mutation = mutation::where('Ref_mutation', $Ref_Mutation)->first();
        $this->validate($request,[
            
            'date_mutation' => 'required',
            'lieu_Travail' => 'required',
            'ville_Mutation' => 'required',
            'DRPP' => 'required'
        ]);
        $mutation->update([
            
            'date_mutation' => $request->date_mutation,
            'lieu_Travail' => $request->lieu_Travail,
            'ville_Mutation' => $request->ville_Mutation,
            'DRPP' => $request->DRPP,
        ]);
        return redirect()->route('mutation.list')->with([
            'success' => 'article modifié'
        ]); 
    }

    public function updateabsence(Request $request ,$Ref_absence){
        $absence = absence::where('Ref_absence', $Ref_absence)->first();
        $this->validate($request,[
            'date_absence' => 'required',
            'date_retour' => 'required',
            'DRPP' => 'required',
            'justification' => 'required',
            'cause' => 'required',
            'commentaire' => 'required'
        ]);
        $absence->update([
            'date_absence' => $request->date_absence,
            'date_retour' => $request->date_retour,
            'DRPP' => $request->DRPP,
            'justification' => $request->justification,
            'cause' => $request->cause,
            'commentaire' => $request->commentaire,
        ]);
        return redirect()->route('absence.list')->with([
            'success' => 'absence modifiée'
        ]); 
    }

    public function updateallocation(Request $request ,$Ref_allocation_familiale){
        $allocation = Allocation_Familiale::where('Ref_allocation_familiale', $Ref_allocation_familiale)->first();
        $this->validate($request,[
            'Type_allocation_familiale' => 'required',
            'Valeur_allocation_familiale' => 'required',
            'date_allocation' => 'required',
            'DRPP' => 'required',
        ]);
        $allocation->update([
            'Type_allocation_familiale' => $request->Type_allocation_familiale,
            'Valeur_allocation_familiale' => $request->Valeur_allocation_familiale,
            'date_allocation' => $request->date_allocation,
            'DRPP' => $request->DRPP,
        ]);
        return redirect()->route('allocation.list')->with([
            'success' => 'allocation modifiée'
        ]); 
    }

    public function updatediplome(Request $request ,$Ref_diplome){
        $diplomes = Diplome::where('Ref_diplome', $Ref_diplome)->first();
        $this->validate($request,[
            'Nom_diplome' => 'required',
            'Specialite' => 'required',
            'Date_obtention' => 'required',
            'Ecole' => 'required',
            'Ville_diplome' => 'required',
            'DRPP' => 'required',
        ]);
        $diplomes->update([
            'Nom_diplome' => $request->Nom_diplome,
            'Specialite' => $request->Specialite,
            'Date_obtention' => $request->Date_obtention,
            'Ecole' => $request->Ecole,
            'Ville_diplome' => $request->Ville_diplome,
            'DRPP' => $request->DRPP,
        ]);
        return redirect()->route('diplome.list')->with([
            'success' => 'diplome modifié'
        ]); 
    }

    public function updateechelle(Request $request ,$Ref_echelle){
        $echelles = Echelle::where('Ref_echelle', $Ref_echelle)->first();
        $this->validate($request,[
            'DRPP' => 'required',
            'echellon' => 'required',
            'Designation_echelle' => 'required',
            'Date_echelle' => 'required',
        ]);
        $echelles->update([
            'DRPP' => $request->DRPP,
            'Designation_echelle' => $request->Designation_echelle,
            'echellon' => $request->echellon,
            'Date_echelle' => $request->Date_echelle,

        ]);
        return redirect()->route('echelle.list')->with([
            'success' => 'echelle modifié'
        ]); 
    }

    public function updategrade(Request $request ,$Ref_grade){
        $grades = Grade::where('Ref_grade', $Ref_grade)->first();
        $this->validate($request,[
            'DRPP' => 'required',
            'Designation_grade' => 'required',
            'Enum_grade' => 'required',
            'Date_echelle' => 'required',
        ]);
        $grades->update([
            'DRPP' => $request->DRPP,
            'Designation_grade' => $request->Designation_grade,
            'Enum_grade' => $request->Enum_grade,
            'Date_echelle' => $request->Date_echelle,

        ]);
        return redirect()->route('grade.list')->with([
            'success' => 'grade modifié'
        ]); 
    }
    
    public function updatemission(Request $request ,$Ref_mission){
        $missions = Mission::where('Ref_mission', $Ref_mission)->first();
        $this->validate($request,[
            'DRPP' => 'required',
            'Objet_mission' => 'required',
            'Ville_mission' => 'required',
            'Date_debut' => 'required',
            'Date_retour' => 'required',
        ]);
        $missions->update([
            'DRPP' => $request->DRPP,
            'Ojet_mission' => $request->Objet_mission,
            'Ville_mission' => $request->Ville_mission,
            'Date_debut' => $request->Date_debut,
            'Date_retour' => $request->Date_retour,

        ]);
        return redirect()->route('mission.list')->with([
            'success' => 'mission modifiée'
        ]); 
    }

    public function updatemotivation(Request $request ,$Ref_motivation){
        $motivations = Motivation::where('Ref_motivation', $Ref_motivation)->first();
        $this->validate($request,[
            'DRPP' => 'required',
            'Type_motivation' => 'required',
            'Occasion' => 'required',
            'Date_motivation' => 'required',
            'Commentaire' => 'required',
        ]);
        $motivations->update([ 
            'DRPP' => $request->DRPP,
            'Type_motivation' => $request->Type_motivation,
            'Occasion' => $request->Occasion,
            'Date_motivation' => $request->Date_motivation,
            'Commentaire' => $request->Commentaire,

        ]);
        return redirect()->route('motivation.list')->with([
            'success' => 'motivation modifiée'
        ]); 
    }

    public function updatenotation(Request $request ,$Ref_note){
        $notations = Notation::where('Ref_note', $Ref_note)->first();
        $this->validate($request,[
            'Note_appliquee' => 'required',
            'Note_rentabilite' => 'required',
            'Note_capacite' => 'required',
            'Note_comportement_professionnel' => 'required',
            'Note_recherche' => 'required',
            'Mention' => "required",
            'Annee' => 'required',
            'DRPP' => 'required'
        ]);
        $notations->update([
            'Note_appliquee' => $request->Note_appliquee,
            'Note_rentabilite' => $request->Note_rentabilite,
            'Note_capacite' => $request->Note_capacite,
            'Note_comportement_professionnel' => $request->Note_comportement_professionnel,
            'Note_recherche' => $request->Note_recherche,
            'Mention' => $request->Mention,
            'Commentaire' => $request->Commentaire,
            'Annee' => $request->Annee,
            'DRPP' => $request->DRPP,
        ]);
        return redirect()->route('notation.list')->with([
            'success' => 'notation modifiée'
        ]); 
    }
    


    public function delete($type_conge){
        if(auth()->check()){
            $conge = Conge::where('type_conge',$type_conge)->first();
            if ($conge) {
                $personne = Personne::find($conge->DRPP);
                if ($personne) {
                    $personne->status = 'Actif';
                    $personne->save();
                }
                $conge->delete();
                return redirect()->route('conge.list')->with([
                    'success' => 'Congé supprimé'
                ]);
            }
            else {
                return redirect()->route('conge.list')->with([
                    'error' => 'Congé non trouvé'
                ]);
            }
        }
        else {
            return redirect()->route('login');
        }
    }

    public function deleteempl($DRPP)
    {
        $personne = Personne::where('DRPP', $DRPP)->first();

        if ($personne->image) {
            $imagePath = public_path('uploads/' . $personne->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $personne->delete();
        return redirect()->route('empl.list')->with([
            'success' => 'Employé supprimé'
        ]);
    }

    public function deletemutation($Ref_Mutation) {
        $mutation = Mutation::findOrFail($Ref_Mutation);
        $personne = Personne::findOrFail($mutation->DRPP);
        
        if ($personne) {
                $personne->status = 'Actif';
                $personne->save();
        }
        $mutation->delete();
        return redirect()->route('mutation.list')->with([
                'success', 'Mutation supprimée'
            ]);
    }
    
    public function deleteabsence($Ref_absence){
        $absence = absence::where('Ref_absence',$Ref_absence)->first();
        $absence->delete();
        return redirect()->route('absence.list')->with([
            'success' => 'absence supprimée'
        ]);
    }
    
    public function deleteallocation($Ref_allocation_familiale){
        $allocations = Allocation_Familiale::where('Ref_allocation_familiale',$Ref_allocation_familiale)->first();
        $allocations->delete();
        return redirect()->route('allocation.list')->with([
            'success' => 'allocation supprimée'
        ]);
    }

    public function deletediplome($Ref_diplome){
        $diplomes = Diplome::where('Ref_diplome',$Ref_diplome)->first();
        $diplomes->delete();
        return redirect()->route('diplome.list')->with([
            'success' => 'diplome supprimé'
        ]);
    }

    public function deleteechelle($Ref_echelle){
        $echelles = Echelle::where('Ref_echelle',$Ref_echelle)->first();
        $echelles->delete();
        return redirect()->route('echelle.list')->with([
            'success' => 'echelle supprimé'
        ]);
    }

    public function deletegrade($Ref_grade){
        $grades = Grade::where('Ref_grade',$Ref_grade)->first();
        $grades->delete();
        return redirect()->route('grade.list')->with([
            'success' => 'grade supprimé'
        ]);
    }

    public function deletemission($Ref_mission){
        $missions = Mission::where('Ref_mission',$Ref_mission)->first();
        $missions->delete();
        return redirect()->route('mission.list')->with([
            'success' => 'mission supprimée'
        ]);
    }

    public function deletemotivation($Ref_motivation){
        $motivations = Motivation::where('Ref_motivation',$Ref_motivation)->first();
        $motivations->delete();
        return redirect()->route('motivation.list')->with([
            'success' => 'motivation supprimée'
        ]);
    }

    public function deletenotation($Ref_note){
        $notations = Notation::where('Ref_note',$Ref_note)->first();
        $notations->delete();
        return redirect()->route('notation.list')->with([
            'success' => 'notation supprimée'
        ]);
    }

    public function imprimerempl(){
        $employes = Personne::latest()->get();
        $pdf = Pdf::loadView('pdf.employespdf',[
            'employes' => $employes
        ]);
        return $pdf->download('employespdf.pdf');
    }

    
    public function imprimerempl2($DRPP){
        
        $personnes = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.employespdf2',[
            'personnes' => $personnes
        ]);
        return $pdf->download('employepdf.pdf', compact('personnes'));
    }
     
    public function imprimerconge(){
        $conges = Conge::latest()->get();
        $pdf = Pdf::loadView('pdf.congepdf',[
            'conges' => $conges
        ]);
        return $pdf->download('congepdf.pdf');
    }

    public function imprimerconge2($DRPP){
        $conge = Conge::where('DRPP', $DRPP)->first();
        $personne = personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.congepdf2',[
            'conge' => $conge,
            'personne' => $personne
        ]);
        return $pdf->download('congepdf.pdf', compact('conge','personne'));
    }

    public function imprimermutation(){
        $mutations = Mutation::latest()->get();
        $pdf = Pdf::loadView('pdf.mutationspdf',[
            'mutations' => $mutations
        ]);
        return $pdf->download('mutationspdf.pdf');
    }

    public function imprimermutation2($DRPP){
        $personne = Personne::where('DRPP', $DRPP)->first();
        $mutation = Mutation::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.mutationspdf2',[
            'personne' => $personne,
            'mutation' => $mutation
        ]);
        return $pdf->download('mutationpdf.pdf');
    }

    public function imprimerallocation(){
        $allocations = Allocation_Familiale::latest()->get();
        $pdf = Pdf::loadView('pdf.allocationpdf',[
            'allocations' => $allocations
        ]);
        return $pdf->download('allocationspdf.pdf');
    }

    public function imprimerallocation2($DRPP){
        $allocations = Allocation_Familiale::where('DRPP', $DRPP)->first();
        $personne = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.allocationpdf2',[
            'personne' => $personne,
            'allocations' => $allocations
        ]);
        return $pdf->download('allocationpdf.pdf');
    }

    public function imprimerdiplome(){
        $diplomes = Diplome::latest()->get();
        $pdf = Pdf::loadView('pdf.diplomepdf',[
            'diplomes' => $diplomes
        ]);
        return $pdf->download('diplomespdf.pdf');
    }

    public function imprimerdiplome2($DRPP){
        $diplomes = Diplome::where('DRPP', $DRPP)->first();
        $personne = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.diplomepdf2',[
            'diplomes' => $diplomes,
            'personne' => $personne
        ]);
        return $pdf->download('diplomepdf.pdf');
    }

    public function imprimerechelle(){
        $echelles = Echelle::latest()->get();
        $pdf = Pdf::loadView('pdf.echellepdf',[
            'echelles' => $echelles
        ]);
        return $pdf->download('echellespdf.pdf');
    }

    public function imprimerechelle2($DRPP){
        $echelles = Echelle::where('DRPP', $DRPP)->first();
        $personne = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.echellepdf2',[
            'personne' => $personne,
            'echelles' => $echelles
        ]);
        return $pdf->download('echellepdf.pdf');
    }
    
    public function imprimermission(){
        $missions = Mission::latest()->get();
        $pdf = Pdf::loadView('pdf.missionpdf',[
            'missions' => $missions
        ]);
        return $pdf->download('missions.pdf');
    }

    public function imprimermission2($DRPP){
        $missions = Mission::where('DRPP', $DRPP)->first();
        $personne = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.missionpdf2',[
            'missions' => $missions,
            'personne' => $personne
        ]);
        return $pdf->download('mission.pdf');
    }

    public function imprimerabsence(){
        $absences = Absence::latest()->get();
        $pdf = Pdf::loadView('pdf.absencepdf',[
            'absences' => $absences
        ]);
        return $pdf->download('absences.pdf');
    }

    public function imprimerabsence2($DRPP){
        $absences = Absence::where('DRPP', $DRPP)->first();
        $personne = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.absencepdf2',[
            'absences' => $absences,
            'personne' => $personne
        ]);
        return $pdf->download('absence.pdf');
    }

    public function imprimernotation(){
        $notations = Notation::latest()->get();
        $pdf = Pdf::loadView('pdf.notationpdf',[
            'notations' => $notations
        ]);
        return $pdf->download('notations.pdf');
    }

    public function imprimernotation2($DRPP){
        $notations = Notation::where('DRPP', $DRPP)->first();
        $personne = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.notationpdf2',[
            'notations' => $notations,
            'personne' => $personne
        ]);
        return $pdf->download('notations.pdf');
    }

    public function imprimermotivation(){
        $motivations = Motivation::latest()->get();
        $pdf = Pdf::loadView('pdf.motivationpdf',[
            'motivations' => $motivations
        ]);
        return $pdf->download('motivations.pdf');
    }

    public function imprimermotivation2($DRPP){
        $motivations = Motivation::where('DRPP', $DRPP)->first();
        $personne = Personne::where('DRPP', $DRPP)->first();
        $pdf = Pdf::loadView('pdf.motivationpdf2',[
            'motivations' => $motivations,
            'personne' => $personne
        ]);
        return $pdf->download('motivation.pdf');
    }

     public function search(Request $request){
        $query = request()->query('query');

        if ($query) {
            $personnes = Personne::where('Nom', 'LIKE', '%' . $query . '%')->paginate(10);
        } else {
            $personnes = Personne::paginate(10);
        }
        $years = Personne::pluck('date_recrutement')->map(function ($date) {
            return Carbon::parse($date)->format('Y');
        })->unique();
        return view('showempl', compact('personnes'));
    }

    public function filter(Request $request)
    {
        $year = $request->input('year');

        if ($year) {
            $personnes = Personne::whereYear('date_recrutement', $year)->paginate(10);
        } else {
            $personnes = Personne::paginate(10);
        }

        $years = Personne::pluck('date_recrutement')->map(function ($date) {
            return Carbon::parse($date)->format('Y');
        })->unique();

        return view('showempl', compact('personnes', 'years'));
    }

    public function calendrier()
    {
        return view('calendrier');
    }
    public function storecalendrier(Request $request)
    {
        // Validate the request data
        $request->validate([
            'date' => 'required|date',
            'employee_id' => 'required|exists:employees,id'
        ]);

        $absence = new Absence();
        $absence->date = $request->date;
        $absence->employee_id = $request->employee_id;
        $absence->save();

        return response()->json(['message' => 'Absence stored successfully']);
    }
    public function generateReport(Request $request)
    {
        $selectedDates = $request->selectedDates;

        $absences = Absence::whereIn('date', $selectedDates)
            ->with('employee')
            ->get();

        // Format the data for the report (CSV example)
        $csvData = "Employee Name, Date\n";
        foreach ($absences as $absence) {
            $csvData .= "{$absence->employee->name}, {$absence->date}\n";
        }

        // Generate a downloadable report
        $filename = 'absence_report.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        return response()->stream(
            fn () => print($csvData),
            200,
            $headers
        );
    }
}
     /*public function generatePDF($DRPP)
    {
        $personnes = Personne::find($DRPP);

        $pdf = PDF::loadView('employespdf2', compact('personnes'));

        return $pdf->download('employe.pdf');
    }*/
    
    
    /*$commande = new Conge();
        $commande->type_conge = $request->type_conge;
        $commande->NomRemplacent = $request->NomRemplacent;
        $commande->nbj = $request->nbj;
        $commande->AnneeConge = $request->AnneeConge;
        $commande->date_debut = $request->date_debut;
        $commande->date_retour = $request->date_retour;
        $commande->save();
    }
    */
    /*public function showcongepdf($DRPP){
        $conge = Conge::where('DRPP', $DRPP)->first();
        return view('pdf.congepdf2')->with([
            'conge' =>  $conge
        ]);
    }*/