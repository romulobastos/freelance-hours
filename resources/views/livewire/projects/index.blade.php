<div>
    <h1>Comp Livewire projects.index</h1>
    <hr>

    @foreach($this->projects as $project)
    <li>
        <a href="{{ route('projects.show', $project) }}">
            {{ $project->id }}. {{ $project->title }}
        </a>
    </li>
    @endforeach
</div>
