<?php


namespace App\Services;


use App\Models\admin;
use Exception;
use Illuminate\Support\Facades\Log;

class AdminService
{
    public function __construct(admin $admin)
    {
        $this->admin = $admin;
    }

    function getList()
    {
        $admin = $this->admin->get();

        return $admin;
    }
}