<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateLeaveStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-leave-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = now()->toDateString();
        $conges = Conge::where('date_retour', '<=', $today)->get();

        foreach ($conges as $conge) {
            $personne = Personne::find($conge->DRPP);
            $personne->status = 'Actif';
            $personne->save();
        }
    }
}