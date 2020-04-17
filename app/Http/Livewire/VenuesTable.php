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
            'rooms' => \App\Room::search($this->search)
                ->join('fleets', 'fleets.id', '=', 'rooms.ship_id')
                ->join('users', 'users.id', '=', 'rooms.user_id')
                ->select(
                    'rooms.short_name as short_name',
                    'rooms.name as name',
                    'rooms.capacity as capacity',
                    'rooms.category as category',
                    'fleets.ship_name as ship_name',
                    'users.name as user_name'
                )
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
