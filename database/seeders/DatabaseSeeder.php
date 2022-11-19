<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'sdnsidodadi01@alp2022.id',
            'sdnsidodadi02@alp2022.id',
            'sdnsidodadi03@alp2022.id',
            'misunangirisidodadi@alp2022.id',
            'mihidayatulmubtadiinsidodadi@alp2022.id',

            'sdnjatimulyo01@alp2022.id',
            'sdnjatimulyo02@alp2022.id',
            'sdnjatisari01@alp2022.id',
            'sdnjatisari02@alp2022.id',
            'sdnjatisari03@alp2022.id',
            'mitahfidzjalaludinarrumijatisari@alp2022.id',

            'sdnkemuningsarikidul01@alp2022.id',
            'sdnkemuningsarikidul02@alp2022.id',
            'minurululumkemuningsarikidul@alp2022.id',

            'sdnandongsari02@alp2022.id',
            'mimuhammadiyahwatukebo@alp2022.id',
            'mimaarif35nurululumwatukebo@alp2022.id',

            'sdnambulu01@alp2022.id',
            'sdnambulu03@alp2022.id',
            'sdnambulu04@alp2022.id',
            'sdmuhammadiyah01ambulu@alp2022.id',
            'sdkatolikyossudarso@alp2022.id',
            'mialhikamambulu@alp2022.id',


            'sdnlojejer01@alp2022.id',
            'sdnlojejer02@alp2022.id',
            'sdnlojejer03@alp2022.id',
            'sdnlojejer05@alp2022.id',
            'sdnlojejer06@alp2022.id',
            'mihidayatulmubtadiinlojejer@alp2022.id',
            'minurulislamsulakdoro@alp2022.id',

            'mitarbiyatulislamiyah41tamansari@alp2022.id',
            'sdntamansari01@alp2022.id',
            'sdntamansari03@alp2022.id',

            'sdnsabrang03@alp2022.id',
            'sdnsabrang04@alp2022.id',
            'misunanampelsabrang@alp2022.id',

            'sdnbalunglor01@alp2022.id',
            'sdnbalunglor02@alp2022.id',
            'sdnbalunglor03@alp2022.id',
            'sdnbalunglor04@alp2022.id',

            'sdnbagon01@alp2022.id',
            'sdnbagon02@alp2022.id',
            'sdnbagon03@alp2022.id',
            'midarussallam02@alp2022.id',

            'sdnlembengan01@alp2022.id',
            'sdnlembengan02@alp2022.id',
            'sdnlembengan03@alp2022.id',

            'sdnkesilir01@alp2022.id',
            'sdnkesilir02@alp2022.id',
            'sdnkesilir03@alp2022.id',
        ];

        $userName = [
            'SDN Sidodadi 01',
            'SDN Sidodadi 02',
            'SDN Sidodadi 03',
            'MI Sunan Giri Sidodadi ',
            'MI Hidayatul Mubtadiin Sidodadi',

            'SDN Jatimulyo 01',
            'SDN Jatimulyo 02',
            'SDN Jatisari 01',
            'SDN Jatisari 02',
            'SDN Jatisari 03',
            'MI Tahfidz Jalaludin Ar-Rumi Jatisari',

            'SDN Kemuning Sari Kidul 01',
            'SDN Kemuning Sari Kidul 02',
            'MI Nurul Ulum Kemuning Sari Kidul',

            'SDN Andongsari 02',
            'MI Muhammadiyah Watukebo',
            'MI Maarif 35 Nurul Ulum Watukebo',

            'SDN Ambulu 01',
            'SDN Ambulu 03',
            'SDN Ambulu 04',
            'SD Muhammadiyah 01 Ambulu',
            'SD Katolik Yos Sudarso',
            'MI Al Hikam Ambulu',

            'SDN Lojejer 01',
            'SDN Lojejer 02',
            'SDN Lojejer 03',
            'SDN Lojejer 05',
            'SDN Lojejer 06',
            'MI Hidayatul Mubtadiin Lojejer',
            'MI Nurul Islam Sulakdoro',

            'MI Tarbiyatul Islamiyah 41 Tamansari',
            'SDN Tamansari 01',
            'SDN Tamansari 03',

            'SDN Sabrang 03',
            'SDN Sabrang 04',
            'MI Sunan Ampel Sabrang',

            'SDN Balung Lor 01',
            'SDN Balung Lor 02',
            'SDN Balung Lor 03',
            'SDN Balung Lor 04',

            'SDN Bagon 01',
            'SDN Bagon 02',
            'SDN Bagon 03',
            'MI Darussallam 02',

            'SDN Lembengan 01',
            'SDN Lembengan 02',
            'SDN Lembengan 03',

            'SDN Kesilir 01',
            'SDN Kesilir 02',
            'SDN Kesilir 03',
        ];

        $userVillage = [
            'Sidodadi',
            'Sidodadi',
            'Sidodadi',
            'Sidodadi',
            'Sidodadi',

            'Jatimulyo',
            'Jatimulyo',
            'Jatisari',
            'Jatisari',
            'Jatisari',
            'Jatisari',

            'Kemuning Sari Kidul',
            'Kemuning Sari Kidul',
            'Kemuning Sari Kidul',

            'Andongsari',
            'Andongsari',
            'Andongsari',

            'Ambulu',
            'Ambulu',
            'Ambulu',
            'Ambulu',
            'Ambulu',
            'Ambulu',


            'Lojejer',
            'Lojejer',
            'Lojejer',
            'Lojejer',
            'Lojejer',
            'Lojejer',
            'Lojejer',


            'Tamansari',
            'Tamansari',
            'Tamansari',

            'Sabrang',
            'Sabrang',
            'Sabrang',

            'Balung Lor',
            'Balung Lor',
            'Balung Lor',
            'Balung Lor',

            'Bagon',
            'Bagon',
            'Bagon',
            'Bagon',

            'Lembengan',
            'Lembengan',
            'Lembengan',

            'Kesilir',
            'Kesilir',
            'Kesilir',
        ];

        for ($i = 0 ; $i<count($users); $i++){
            $school=School::create([
                'name' => $userName[$i],
                'village'=>$userVillage[$i],
            ]);

            User::create([
                'name' => $userName[$i],
                'email' => $users[$i],
                'password' => bcrypt('alpleague2022'),
                'school_id'=>$school->id
            ]);
        }


    }
}
