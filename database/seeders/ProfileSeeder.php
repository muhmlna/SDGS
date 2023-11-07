<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'id' => 1,
                'isi' => 'Berawal dari kebijakan rektor ITERA pada 27 Maret 2021 yang memberikan arahan agar ITERA berperan aktif dalam merespon konsensus Indonesia di forum PBB terkait kesepakatan para pemimpin dunia atas rencana aksi global yang disebut Sustainable Development Goals (SDGs) pada 25 September 2015 di Markas Besar PBB di New York.
                SDGs berisi 17 tujuan, 169 target, dan 244 indikator yang ditargetkan untuk dicapai hingga 2030. Dengan prinsip no one left behind, SDGs dirancang dengan melibatkan seluruh pemangku kepentingan sebagai aktor pembangunan, baik itu pemerintah, organisasi masyarakat sipil, sektor industri dan filantropi, termasuk akademisi. Lembaga pendidikan dengan keunggulan dan kewenangannya yang paling baik dalam penciptaan dan penyebaran ilmu pengetahuan, teknologi, dan inovasi merupakan posisi yang unik dan memiliki peran yang sangat penting dalam pencapaian SDGs.
                Landasan hukum pelaksanaan SDGs di Indonesia tertuang dalam Peraturan Presiden (Perpres) Republik Indonesia No. 59/2017 tentang Pelaksanaan Pencapaian Tujuan Pembangunan Berkelanjutan (TPB), yang antara lain menyatakan bahwa Kementerian Perencanaan Pembangunan Nasional (PPN)/Badan Perencanaan Pembangunan Nasional (Bappenas) sebagai Pusat Koordinasi Nasional SDGs di Indonesia dan Menteri selaku Koordinator Pelaksananya.
                ITERA sebagai salah satu lembaga pendidikan tinggi terkemuka di Indonesia, sudah saatnya terlibat aktif dalam pembangunan berkelanjutan, terutama dalam kaitannya dengan akselerasi pencapaian SDGs.Melalui Tim Perintis, telah disusun naskah akademik pendirian Pusat Studi Pembangunan Berkelanjutan (SDGs Center) ITERA.',
            ]
        ];
        Profile::query()->insert($profiles);
    }
}
