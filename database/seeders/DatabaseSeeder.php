<?php

namespace Database\Seeders;

use App\Actions\ArrangePositions;
use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // fabricar 200 usuários
        User::factory(200)->create();

        // fabricar projetos e propostas
        User::query()->inRandomOrder()->limit(10)->get()
            ->each(function (User $u) {

                // fabricar 10 projetos
                // armazena em $project cada projeto criado
                // envia o id do usuário, recebido no "each", para a criação da fk
                $project = Project::factory()->create(['created_by' => $u->id]);

                // fabricar de 2 a 15 propostas para cada projeto
                // envia o id do projeto, armazenado acima, para a criação da fk
                Proposal::factory()->count(random_int(2,15))->create(['project_id' => $project->id]);

                // ajusta posicoes e status (up or down) na lista
                ArrangePositions::run($project->id);
            });
    }
}
