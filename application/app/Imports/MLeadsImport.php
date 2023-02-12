<?php

namespace App\Imports;

use App\Models\LeadsForMarket;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToModel;

class MLeadsImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $country = ($row[0] != ''? $row[0] : "N/A");
        $industry = ($row[1] != ''? $row[1] : "N/A");
        $niche = ($row[2] != ''? $row[2] : "N/A");
        $city = ($row[3] != ''? $row[3] : "N/A");
        $state = ($row[4] != ''? $row[4] : "N/A");
        $company_name = ($row[5] != ''? $row[5] : "N/A");
        $website = ($row[6] != ''? $row[6] : "N/A");
        $company_address = ($row[7] != ''? $row[7] : "N/A");
        $revenue = ($row[8] != ''? $row[8] : "N/A");
        $company_size = ($row[9] != ''? $row[9] : "N/A");
        $person_fname = ($row[10] != ''? $row[10] : "N/A");
        $person_lname = ($row[11] != ''? $row[11] : "N/A");
        $title = ($row[12] != ''? $row[12] : "N/A");
        $p_email = ($row[13] != ''? $row[13] : "N/A");
        $company_email = ($row[14] != ''? $row[14] : "N/A");
        $phone_one = ($row[15] != ''? $row[15] : "N/A");
        $phone_two = ($row[16] != ''? $row[16] : "N/A");
        $linkedin = ($row[17] != ''? $row[17] : "N/A");
        $instagram = ($row[18] != ''? $row[18] : "N/A");
        $facebook = ($row[19] != ''? $row[19] : "N/A");
        $source_link = ($row[20] != ''? $row[20] : "N/A");
        $other_info = ($row[21] != ''? $row[21] : "N/A");

        $leads = new LeadsForMarket([
            'country' => $country,
            'industry' => $industry,
            'niche' => $niche,
            'city' => $city,
            'state' => $state,
            'company_name' => $company_name,
            'website' => $website,
            'company_address' => $company_address,
            'revenue' => $revenue,
            'company_size' => $company_size,
            'person_fname' => $person_fname,
            'person_lname' => $person_lname,
            'title' => $title,
            'p_email' => $p_email,
            'company_email' => $company_email,
            'phone_one' => $phone_one,
            'phone_two' => $phone_two,
            'linkedin' => $linkedin,
            'instagram' => $instagram,
            'facebook' => $facebook,
            'source_link' => $source_link,
            'other_info' => $other_info,
            'created_at'=>Carbon::now(),
        ]);
        return $leads;
    }

    public function startRow(): int
    {
        return 2;
    }
}
