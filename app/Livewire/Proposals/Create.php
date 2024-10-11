<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public bool $modal = false;
    public string $email = '';
    public int $hours = 0;

    protected $rules = [
        'email' => 'required|email',
        'hours' => 'required|numeric|min:1|max:600',
    ];

    public bool $agree = false;

    public function save()
    {
        $this->validate();

        if(!$this->agree) {
            $this->addError('agree', 'Você precisa concordar com os termos de uso');
            return;
        }

        $this->project->proposals()->updateOrCreate(
            ['email' => $this->email],
            ['hours' => $this->hours]
        );

        $this->modal = false;
    }

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
