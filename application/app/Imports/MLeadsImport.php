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
        $combinedleads = ($row[0] != ''? $row[0] : "N/A");
        $lead_code = ($row[1] != ''? $row[1] : "N/A");
        $country = ($row[2] != ''? $row[2] : "N/A");
        $industry = ($row[3] != ''? $row[3] : "N/A");
        $niche = ($row[4] != ''? $row[4] : "N/A");
        $city = ($row[5] != ''? $row[5] : "N/A");
        $state = ($row[6] != ''? $row[6] : "N/A");
        $company_name = ($row[7] != ''? $row[7] : "N/A");
        $website = ($row[8] != ''? $row[8] : "N/A");
        $company_address = ($row[9] != ''? $row[9] : "N/A");
        $revenue = ($row[10] != ''? $row[10] : "N/A");
        $company_size = ($row[11] != ''? $row[11] : "N/A");
        $person_fname = ($row[12] != ''? $row[12] : "N/A");
        $person_lname = ($row[13] != ''? $row[13] : "N/A");
        $title = ($row[14] != ''? $row[14] : "N/A");
        $p_email = ($row[15] != ''? $row[15] : "N/A");
        $company_email = ($row[16] != ''? $row[16] : "N/A");
        $phone_one = ($row[17] != ''? $row[17] : "N/A");
        $phone_two = ($row[18] != ''? $row[18] : "N/A");
        $linkedin = ($row[19] != ''? $row[19] : "N/A");
        $instagram = ($row[20] != ''? $row[20] : "N/A");
        $facebook = ($row[21] != ''? $row[21] : "N/A");
        $source_link = ($row[22] != ''? $row[22] : "N/A");
        $other_info = ($row[23] != ''? $row[23] : "N/A");

        $leads = new LeadsForMarket([
            'lead_code' => $lead_code,
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
            'combinedleads' => $combinedleads,
            'created_at'=>Carbon::now(),
        ]);
        return $leads;
    }

    public function startRow(): int
    {
        return 2;
    }
}
