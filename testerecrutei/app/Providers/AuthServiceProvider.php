<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
        
        Passport::tokensCan([
            "brand-list" => "List all Brands",
            "brand-show" => "Show a specific Brand",
            "brand-store" => "Add new Brands",
            "brand-update" => "Update Brands",
            "brand-destroy" => "Delete Brands",

            "vehicle-list" => "List all Vehicles",
            "vehicle-show" => "Show a specific Vehicle",
            "vehicle-store" => "Add new Vehicles",
            "vehicle-update" => "Update Vehicles",
            "vehicle-destroy" => "Delete Vehicles",

            "vehiclemodel-list" => "List all Models",
            "vehiclemodel-show" => "Show a specific Model",
            "vehiclemodel-store" => "Add new Models",
            "vehiclemodel-update" => "Update Models",
            "vehiclemodel-destroy" => "Delete Models",

            //"user-list" => "List all Brands",
            "user-show" => "Show a specific User",
            //"user-store" => "Add new Brands",
            "user-update" => "Update Brands",
            //"user-destroy" => "Destroy Brands",
        ]);
    }
}
