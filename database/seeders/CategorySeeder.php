<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = 
		[
				['id' => 1, 'parent_id' => NULL, 'name' => 'Analytical Equipments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 2, 'parent_id' => NULL, 'name' => 'Autoclave', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 3, 'parent_id' => NULL, 'name' => 'Blood Collection Tube', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 4, 'parent_id' => 3, 'name' => 'Micro Tube', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 5, 'parent_id' => 3, 'name' => 'Non Vacuum Blood Tube', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 6, 'parent_id' => 3, 'name' => 'Vacuum Blood Tube', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 7, 'parent_id' => NULL, 'name' => 'Blood Gas Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 8, 'parent_id' => NULL, 'name' => 'Cell Counter', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 9, 'parent_id' => NULL, 'name' => 'Chemistry Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 10, 'parent_id' => NULL, 'name' => 'Coagulation Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 11, 'parent_id' => NULL, 'name' => 'Critical Care Instruments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 12, 'parent_id' => NULL, 'name' => 'Diagnostic Equipments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 13, 'parent_id' => 12, 'name' => 'Biochemistry Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 14, 'parent_id' => 12, 'name' => 'CLIA Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 15, 'parent_id' => 12, 'name' => 'Coagulation Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 16, 'parent_id' => 12, 'name' => 'Electrolyte Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 17, 'parent_id' => 12, 'name' => 'Hematology Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 18, 'parent_id' => 12, 'name' => 'Immuno Assay Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 19, 'parent_id' => 12, 'name' => 'Other Equipments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 20, 'parent_id' => 12, 'name' => 'PCR devices', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 21, 'parent_id' => 12, 'name' => 'Point of Care Devices', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 22, 'parent_id' => 12, 'name' => 'Urine Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 23, 'parent_id' => NULL, 'name' => 'Diagnostics', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 24, 'parent_id' => NULL, 'name' => 'Diagnostics Analyzer', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 25, 'parent_id' => NULL, 'name' => 'Electrolyte Analyzer-s', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 26, 'parent_id' => NULL, 'name' => 'Flask and Beaker', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 27, 'parent_id' => NULL, 'name' => 'General Lab Supplies', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 28, 'parent_id' => 27, 'name' => 'Borosilicate Glass wares', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 29, 'parent_id' => 27, 'name' => 'Bottles- Plastic', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 30, 'parent_id' => 27, 'name' => 'Bottles- Soda Glass', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 31, 'parent_id' => 27, 'name' => 'Bottles-Borosilicate Glass', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 32, 'parent_id' => 27, 'name' => 'Burette Stand Clamp Holder', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 33, 'parent_id' => 27, 'name' => 'Burettes- Borosilicate Glass', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 34, 'parent_id' => NULL, 'name' => 'Haematology Analyzer-s', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 35, 'parent_id' => NULL, 'name' => 'HEAVY DUTY VACUUM BOTTLE', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 36, 'parent_id' => NULL, 'name' => 'Lab Chemicals', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 37, 'parent_id' => NULL, 'name' => 'Lab Consumables', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 38, 'parent_id' => NULL, 'name' => 'Laboratory Glassware', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 39, 'parent_id' => NULL, 'name' => 'Laboratory instruments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 40, 'parent_id' => NULL, 'name' => 'Liquid Handling System', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 41, 'parent_id' => 40, 'name' => 'Electronic Pipette', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 42, 'parent_id' => 40, 'name' => 'Micropipette', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 43, 'parent_id' => 40, 'name' => 'Fixed Pipette', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 44, 'parent_id' => 40, 'name' => 'Manual Pipette', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 45, 'parent_id' => 40, 'name' => 'Multi Channel Pipette', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 46, 'parent_id' => 40, 'name' => 'Tips', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 47, 'parent_id' => 40, 'name' => 'Variable Pipette', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 48, 'parent_id' => NULL, 'name' => 'Medical Equipments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 49, 'parent_id' => NULL, 'name' => 'Microscopes', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 50, 'parent_id' => NULL, 'name' => 'NARROW MOUTH BOTTLE', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 51, 'parent_id' => NULL, 'name' => 'Point of Care Instruments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 52, 'parent_id' => NULL, 'name' => 'Rapid Cards', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 53, 'parent_id' => NULL, 'name' => 'Rapid Tests', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 54, 'parent_id' => 53, 'name' => 'Biomarkers Tests', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 55, 'parent_id' => 53, 'name' => 'Blood Borne', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 56, 'parent_id' => 53, 'name' => 'Gastrointestional Tests', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 57, 'parent_id' => NULL, 'name' => 'Hepatitis Tests', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 58, 'parent_id' => NULL, 'name' => 'Hormone/ Neonatal Tests', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 59, 'parent_id' => NULL, 'name' => 'Respiratory Tests', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 60, 'parent_id' => NULL, 'name' => 'Tropical/ Parasitic', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 61, 'parent_id' => NULL, 'name' => 'Reagents', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 62, 'parent_id' => NULL, 'name' => 'ABG Reagents', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 63, 'parent_id' => NULL, 'name' => 'Biochemistry Reagents', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 64, 'parent_id' => NULL, 'name' => 'Blood Grouping Kits', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 65, 'parent_id' => NULL, 'name' => 'Coagulation Test Kits', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 66, 'parent_id' => NULL, 'name' => 'Widal Test Kits', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 67, 'parent_id' => NULL, 'name' => 'Electrolyte Reagents', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 68, 'parent_id' => NULL, 'name' => 'Hematology Reagents', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 69, 'parent_id' => NULL, 'name' => 'Immunoassay Catridges', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 70, 'parent_id' => NULL, 'name' => 'i Chroma Kits', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 71, 'parent_id' => NULL, 'name' => 'Urine Strips', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 72, 'parent_id' => NULL, 'name' => 'Sample Collection Tube', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 73, 'parent_id' => NULL, 'name' => 'Scientific Equipment-s', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 74, 'parent_id' => NULL, 'name' => 'Surgical Instruments', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 75, 'parent_id' => NULL, 'name' => 'Ultrasound', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 76, 'parent_id' => NULL, 'name' => 'Urine Analyzer-s', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 77, 'parent_id' => NULL, 'name' => 'Veterinary Analyzer-s', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 78, 'parent_id' => NULL, 'name' => 'WASH DROPPING BOTTLES', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
				['id' => 79, 'parent_id' => NULL, 'name' => 'WIDE MOUTH BOTTLE', 'status' => '1', 'created_at' => '2022-09-19 11:50:51',	'updated_at' => '2022-09-19 11:51:09'],
		
		];

        DB::table('categories')->insert($records);
    }
}
