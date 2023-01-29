<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            [
                'name' => 'M. Chasrun H., ST., MT.',
                'email' => 'chasrun@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Ir. Nur Alif Mardiyah, MT.',
                'email' => 'nuralif@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Ir. Nur Kasan, MT.',
                'email' => 'kasan@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Dr. Zulfatman ST, M.Eng.',
                'email' => 'zulfatman@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Ir. M. Irfan, MT.',
                'email' => 'irfan@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Machmud Effendy, ST, M.Eng.',
                'email' => 'machmud@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Dr. Ir. Lailis Syafa’ah, MT.',
                'email' => 'lailis@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Drs. Budhi Priyanto, M.Si.',
                'email' => 'budhi@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Ir. Diding Suhardi, MT.',
                'email' => 'diding@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Dr. Ir. Ermanu A. H., MT.',
                'email' => 'ermanu@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Khusnul Hidayat, ST., MT.',
                'email' => 'khusnulhidayat@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'M. Nasar, ST, MS',
                'email' => 'nasar@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Widianto, ST., MT.',
                'email' => 'widianto@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Novendra, ST, MT',
                'email' => 'novendra@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Merinda Lestandy, S.Kom, MT',
                'email' => 'merindalestandy@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Inda Rusdia Sofiani, ST., M.Sc.',
                'email' => 'indarusdias05@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Amrul Faruq, S.T., M.Eng.',
                'email' => 'faruq@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'La Febry Andira Rose Cynthia, S.T., M.T.',
                'email' => 'lafebryarc@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Basri Noor Cahyadi, S.T., M.Sc',
                'email' => 'basrinoorc@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Drs. Imam Khambali, M.Si',
                'email' => 'imamkhambali@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Ilham Pakaya, ST., M.Tr.T.',
                'email' => 'ilham@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
            [
                'name' => 'Khaeruddin, ST., MT.',
                'email' => 'lamone@umm.ac.id',
                'email_verified_at' => now(),
                'password' => \Hash::make('Dosenelektro')
            ],
        ];

        foreach ($dosen as $v) {
            $dosen = User::create($v);
            $dosen->syncRoles('dosen');
        }
    }
}
