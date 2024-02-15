<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vegetableCategories = array(
            "Cardiovascular Medications" => array("Lisinopril", "Atorvastatin", "Metoprolol", "Amlodipine", "Warfarin"),
            "Antibiotics" => array("Amoxicillin", "Azithromycin", "Ciprofloxacin", "Penicillin"),
            "Pain Relievers" => array("Ibuprofen", "Acetaminophen", "Naproxen", "Aspirin"),
            "Antidepressants" => array("Sertraline", "Fluoxetine", "Escitalopram", "Citalopram"),
            "Antidiabetic Drugs" => array("Metformin", "Insulin", "Gliclazide", "Sitagliptin"),
            "Antianxiety Medications" => array("Alprazolam", "Clonazepam", "Lorazepam", "Diazepam"),
            "Antihistamines" => array("Cetirizine", "Loratadine", "Diphenhydramine", "Fexofenadine"),
            "Antipsychotics" => array("Quetiapine", "Risperidone", "Olanzapine", "Aripiprazole"),
            "Antiviral Drugs" => array("Acyclovir", "Oseltamivir", "Valacyclovir", "Lamivudine"),
            "Miscellaneous Medications" => array("Omeprazole", "Dexamethasone", "Tramadol", "Bupropion"),
        );

        foreach ($vegetableCategories as $categoryName => $vegetables) {
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($vegetables as $vegetableName) {
                \App\Models\ProductCategory::create([
                    'name' => $vegetableName,
                    'slug' => \Illuminate\Support\Str::slug($vegetableName),
                    'parent_id' => $category->id,
                ]);
            }
        }

    }
}
