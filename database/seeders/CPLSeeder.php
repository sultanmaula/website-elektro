<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CPLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("Asia/Jakarta");

        \DB::table('cpl')->insert([
            [
                'nama' => 'Mampu menunjukkan sikap religius dan ketakwaan kepada Tuhan YME, serta memegang teguh perspektif hidup Islami, nilai-nilai Kemuhammadiyahan, dan Pancasila dalam kehidupan berbangsa dan bernegara.',
                'kode' => 'CPL1',
                'kategori' => 'Sikap',
                'atribut' => 'Relegius dan Sosial Humaniora',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu bersikap akuntabel, menunjukan kemandirian, dan berpegang pada etika akademik dan profesi dalam penyelesaian permasalahan kerekayasaan.',
                'kode' => 'CPL2',
                'kategori' => 'Sikap',
                'atribut' => 'Tanggung Jawab, Kewirausahaan, dan Etika Profesi',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu menerapkan bidang pengetahuan keluasan yang mencakup sejumlah topik kerekayasaan dan bidang pengetahuan kedalaman yang relevan dengan kerekayasaan bidang elektro secara berkelanjutan.',
                'kode' => 'CPL3',
                'kategori' => 'Sikap',
                'atribut' => 'Pembelajaran berkelanjutan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu berperan secara efektif sebagai individu menjadi anggota atau pemimpin dalam tim-tim multidisipliner dan multikultural dalam merencanakan, menyelesaikan, dan mengevaluasi tugas-tugas dengan berbagai kendalanya.',
                'kode' => 'CPL4',
                'kategori' => 'Keterampilan Umum',
                'atribut' => 'Individual, Teamwork, dan Manajemen',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu mengartikulasi gagasan dan berkomunikasi secara efektif baik lisan dan tulisan.',
                'kode' => 'CPL5',
                'kategori' => 'Keterampilan Umum',
                'atribut' => 'Komunikasi',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu menerapkan pengetahuan matematika, sains dasar, teknologi informasi, dan kerekayasaan bidang elektro untuk membangun pemahaman prinsip-prinsip kerekayasaan.',
                'kode' => 'CPL6',
                'kategori' => 'Pengetahuan',
                'atribut' => 'Pengetahuan Fundamental dan Rekayasa',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu merancang komponen dan sistem untuk memenuhi kebutuhan masyarakat dan industri dengan memperhatikan dampak ekonomi dan lingkungan serta memanfaatkan potensi sumber daya lokal dan nasional dalam perspektif global dan berkelanjutan.',
                'kode' => 'CPL7',
                'kategori' => 'Keterampilan Khusus',
                'atribut' => 'Desain Teknik',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu merancang dan melaksanakan percobaan di laboratorium dan/atau lapangan, serta menganalisis dan menginterpretasikan data.',
                'kode' => 'CPL8',
                'kategori' => 'Keterampilan Khusus',
                'atribut' => 'Investigasi',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu mengidentifikasi, memformulasi, menganalisis, dan menyelesaikan permasalahan kerekayasaan yang kompleks.',
                'kode' => 'CPL9',
                'kategori' => 'Keterampilan Khusus',
                'atribut' => 'Pengembangan Solusi Teknik',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'nama' => 'Mampu menerapkan metode, kecakapan, dan peranti kerekayasaan mutakhir untuk praktik kerekayasaan.',
                'kode' => 'CPL10',
                'kategori' => 'Keterampilan Khusus',
                'atribut' => 'Pemanfaatan Alat Modern',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
