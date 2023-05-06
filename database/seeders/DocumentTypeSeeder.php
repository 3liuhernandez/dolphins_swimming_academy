<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{

    protected $docs_type = [
        'cédula',
        'pasaporte',
        'carnet',
        'otro',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $code = 10;

        foreach ($this->docs_type as $type) {
            $type = strtoupper(trim($type));

            DB::table('document_types')->insert([
                "code" => $code,
                "title" => $type,
            ]);

            $code += 10;
        }
    }
}
