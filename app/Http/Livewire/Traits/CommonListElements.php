<?php

namespace App\Http\Livewire\Traits;

use App\Utility\ProjectConstants;

trait CommonListElements
{
    protected string $paginationTheme = 'bootstrap';

    public string $search = '';
    public int $perPage = ProjectConstants::DATA_PER_PAGE;

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
