<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class Doctor extends Component
{
    public Collection $questions;

    public Collection $checked;

    public string $result;

    public int $score;

    public function mount()
    {
        $this->questions = collect(config('doctor.questions'))->shuffle();

        $this->checked = collect();
    }

    /**
     * @param  int  $index
     * @param  int  $value
     */
    public function checked(int $index, int $value)
    {
        $this->checked->put('checked'.$index, $value);

        $this->result = $this->result();
    }

    /**
     * @return string
     */
    public function result(): string
    {
        if ($this->checked->count() < count($this->questions) / 2) {
            return '';
        }

        $this->score = $this->checked->values()->sum();

        if ($this->score > config('doctor.result.good.score')) {
            return config('doctor.result.good.message');
        } elseif ($this->score < config('doctor.result.bad.score')) {
            return config('doctor.result.bad.message');
        } else {
            return config('doctor.result.normal.message');
        }
    }

    public function render()
    {
        return view('livewire.doctor');
    }
}
