<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation;

class InsertValidationRecordShippingCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Validation::create([
            'alias' => 'transportadoras',
            'module_name' => 'ValidationShippingCompany',
            'module_alias' => 'validationshippingcompany',
            'video' => 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0',
            'file' => 'transportadoras.xlsx',
            'validation' => 'shipping_companies', 
            'import' => 'Client@importShippingCompanies',
            'preference_order' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Validation::where('module_name', 'ValidationShippingCompany')->first()->delete();
    }
}
