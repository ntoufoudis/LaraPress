<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GeneralSettings extends Component
{
    public function render()
    {
        $continents = DB::table('timezones')->pluck('continent')->toArray();

        return view('livewire.admin.general-settings', [
            'timezones' => DB::table('timezones')->get(),
            'continents' => array_unique($continents),
            'languages' => DB::table('languages')->get(),
        ]);
    }
}
