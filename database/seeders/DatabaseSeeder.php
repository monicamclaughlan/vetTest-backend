<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Test::create(["sample" => "1mL serum, pre and post", "tube" => "red top", "protocol" => "Collect 3ml blood, centrifuge and separate 1ml serum for resting cortisol.  Label pre sample. Administer Cosyntropin.  Collect 1ml serum 1 or 2 hours post injection.", "code" => "XXXX", "amount" => 00.00, "frequency" => "Daily", "favorite" => false, "title" => "ACTH Stimulation (One Pre, One Post)", "species" => "Canine"]);
        Test::create(["sample" => "1mL serum, pre and post", "tube" => "red top", "protocol" => "Collect 3ml blood, centrifuge and separate 1ml serum for resting cortisol.  Label pre sample. Administer Cosyntropin.  Collect 1ml serum 1 or 2 hours post injection.", "code" => "XXXX", "amount" => 00.00, "frequency" => "Daily", "favorite" => false, "title" => "ACTH Stimulation (One Pre, One Post)", "species" => "Feline"]);
        Test::create(["sample" => "1mL serum", "tube" => "red top", "protocol" => "Consider free T4 by equilibruym dialysis or preferably a thyroid confirmation panel in a sick dog.", "code" => "XXXX", "amount" => 00.00, "frequency" => "1-2 days", "favorite" => false, "title" => "Free T4", "species" => "Canine"]);
        Test::create(["sample" => "1mL serum", "tube" => "red top", "protocol" => "Consider free T4 by equilibruym dialysis or preferably a thyroid confirmation panel in a sick dog.", "code" => "XXXX", "amount" => 00.00, "frequency" => "1-2 days", "favorite" => false, "title" => "Free T4", "species" => "Feline"]);
        Test::create(["sample" => "1mL serum. 2mL EDTA blood", "tube" => "red top, LTT", "protocol" => "Canine heartworm antigen by ELISA, microfilariae by filter", "code" => "XXXX", "amount" => 00.00, "frequency" => "Daily", "favorite" => false, "title" => "Heartworm Panel", "species" => "Canine"]);
        Test::create(["sample" => "1mL serum", "tube" => "red top", "protocol" => "Feline heartworm antigen by ELISA", "code" => "XXXX", "amount" => 00.00, "frequency" => "1-2 days", "favorite" => false, "title" => "Heartworm Antigen by ELISA", "species" => "Feline"]);
        Test::create(["sample" => "1mL serum, label pre and post", "tube" => "red top", "protocol" => "Fast 12 hours, obtain 1mL serum fasting sample.  Feed, and 2 hours after feeding obtain post sample, 1ml serum.", "code" => "XXXX", "amount" => 00.00, "frequency" => "Daily", "favorite" => false, "title" => "Bile Acids Panel - Pre and Postprandial", "species" => "Canine"]);
        Test::create(["sample" => "1mL serum, label pre and post", "tube" => "red top", "protocol" => "Fast 12 hours, obtain 1mL serum fasting sample.  Feed, and 2 hours after feeding obtain post sample, 1ml serum.", "code" => "XXXX", "amount" => 00.00, "frequency" => "Daily", "favorite" => false, "title" => "Bile Acids Panel - Pre and Postprandial", "species" => "Feline"]);
        Test::create(["sample" => "1mL serum, label pre and post 4hrs, post 8hrs", "tube" => "red top", "protocol" => "Collect 1mL serum for baseline cortisol.  Administer Dexamethasone, 0.1 mg/kg IV or IM.  Collect second serum sample 4 hours post and third sample 8 hours post", "code" => "XXXX", "amount" => 00.00, "frequency" => "1-2 days", "favorite" => false, "title" => "Dexamethasone Suppression, Low Dose(One Pre, Two Posts)", "species" => "Canine"]);
        Test::create(["sample" => "2mL pleural or abdominal effusion, tissue aspirates or fresh tissue in empty, sterile container, or 1mL EDTA whole blood", "tube" => "sterile tube (LTT, RTT, or plastic tube), swab for tissue aspirates, or LTT for EDTA", "protocol" => "For fluids, 0.1mL minimum, do not centrifuge.  Submit swab in a RTT or empty, sterile tube, keep refrigerated.  Freezing of tissue biopsies is not recommended.", "code" => "XXXX", "amount" => 00.00, "frequency" => "1-4 days", "favorite" => false, "title" => "FIP Virus RealPCR Test", "species" => "Feline"]);
        Test::create(["sample" => "1mL serum, fasting preferred", "tube" => "red top", "protocol" => "Fasted sample is preferred, not essential for accurate diagnosis in acutely sick animals.", "code" => "XXXX", "amount" => 00.00, "frequency" => "1-2 days", "favorite" => false, "title" => "Spec fPL Test", "species" => "Feline"]);
        Test::create(["sample" => "1mL serum, fasting preferred", "tube" => "red top", "protocol" => "Fasted sample is preferred, not essential for accurate diagnosis in acutely sick animals.", "code" => "XXXX", "amount" => 00.00, "frequency" => "1-2 days", "favorite" => false, "title" => "Spec cPL Test", "species" => "Canine"]);
        Test::create(["sample" => "2mL serum, 1mL LTT, 5mL urine", "tube" => "red top, LTT, steile container for urine", "protocol" => "Total health screen", "code" => "XXXX", "amount" => 00.00, "frequency" => "2-3 days", "favorite" => false, "title" => "Total Health with Free T4, cTSH, Urinalysis", "species" => "Canine"]);
        echo("Tests Created!");
    }
}
