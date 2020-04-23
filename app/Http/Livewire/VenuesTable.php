<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class VenuesTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = 'short_name';
    public $sortAsc = true;
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.venues-table', [
            'rooms' => \App\Room::Venues()
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }
}
