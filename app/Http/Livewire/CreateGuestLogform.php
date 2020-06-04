<?php

namespace App\Http\Livewire;

use App\Guest;
use Livewire\Component;

class CreateGuestLogform extends Component
{

    public $query;
    public $guests;
    public $highlightIndex;

    public function mount()
    {
        $this->query = '';
        $this->guests = [];
        $this->highlightIndex = 0;
    }

    public function resetProps()
    {
        $this->reset([$query, $guests, $highlightIndex]);
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->guests) - 1)
        {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->guests) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectGuest()
    {
        $guest = $this->guests[$this->highlightIndex] ?? null;
        if($guest)
        {
            $this->redirect(route('guest.show', $guest['booking_reference']));
        }
    }

    public function updatedQuery()
    {
        $this->guests = Guest::where('last_name', 'like', '%' . $this->query . '%')->orWhere('booking_reference', 'like', '%'
            . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.create-guest-logform');
    }
}
