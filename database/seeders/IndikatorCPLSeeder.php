<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndikatorCPLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("Asia/Jakarta");

        \DB::table('indikator_cpl')->insert([
            // 1
            [
                'id_cpl' => 1,
                'kode_indikator' => '1A',
                'indikator_kinerja' => 'Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 1,
                'kode_indikator' => '1B',
                'indikator_kinerja' => 'Mampu bekerja sama, dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 1,
                'kode_indikator' => '1C',
                'indikator_kinerja' => 'Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, bernegara, dan kemajuan peradaban berdasarkan Pancasila.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 1,
                'kode_indikator' => '1D',
                'indikator_kinerja' => 'Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 1,
                'kode_indikator' => '1E',
                'indikator_kinerja' => 'Memiliki nasionalisme serta rasa tanggungjawab pada bangsa dan negara.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 1,
                'kode_indikator' => '1F',
                'indikator_kinerja' => 'Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 2
            [
                'id_cpl' => 2,
                'kode_indikator' => '2A',
                'indikator_kinerja' => 'Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 2,
                'kode_indikator' => '2B',
                'indikator_kinerja' => 'Menunjukkan semangat kemandirian dan kewirausahaan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 2,
                'kode_indikator' => '2C',
                'indikator_kinerja' => 'Mampu menunjukkan pemahaman tentang tanggung jawab etika dan profesionalisme.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 3
            [
                'id_cpl' => 3,
                'kode_indikator' => '3A',
                'indikator_kinerja' => 'Mampu mengidentifikasi kebutuhan akan keluasan dan kedalaman pengetahuan untuk memajukan solusi desain.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 3,
                'kode_indikator' => '3B',
                'indikator_kinerja' => 'Mampu mengidentifikasi dan mengevaluasi sumber daya untuk tujuan memperoleh pengetahuan yang sesuai untuk solusi desain lebih lanjut.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 3,
                'kode_indikator' => '3C',
                'indikator_kinerja' => 'Mampu memperoleh pengetahuan yang sesuai untuk memajukan solusi desain.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 3,
                'kode_indikator' => '3D',
                'indikator_kinerja' => 'Mampu menerapkan pengetahuan yang diperoleh untuk solusi desain.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 3,
                'kode_indikator' => '3E',
                'indikator_kinerja' => 'Mampu mengidentifikasi pengetahuan dan teknologi kekinian di industri yang terkait secara profesional.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 4
            [
                'id_cpl' => 4,
                'kode_indikator' => '4A',
                'indikator_kinerja' => 'Mampu melaksanakan tugas individu secara tepat waktu sehubungan dengan garis waktu yang telah disepakati tim.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 4,
                'kode_indikator' => '4B',
                'indikator_kinerja' => 'Mampu berbagi dan mengartikulasikan informasi penting dan saling terikat dengan anggota tim lain untuk memajukan sebuah desain.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 4,
                'kode_indikator' => '4C',
                'indikator_kinerja' => 'Mampu berpartisipasi secara efektif dalam pertemuan tim.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 4,
                'kode_indikator' => '4D',
                'indikator_kinerja' => 'Mampu mendokumentasikan pekerjaan secara tepat waktu dan cukup detail untuk mempercepat pengerjaan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 4,
                'kode_indikator' => '4E',
                'indikator_kinerja' => 'Mampu merencanakan, menyelesaikan, dan mengevaluasi tugas-tugas yang terkait dengan kegiatan akademik.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 5
            [
                'id_cpl' => 5,
                'kode_indikator' => '5A',
                'indikator_kinerja' => 'Mampu menulis laporan teknis sebuah desain secara rinci termasuk kendala, solusi, hasil kinerja dan kesimpulan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 5,
                'kode_indikator' => '5B',
                'indikator_kinerja' => 'Mampu berkomunikasi, dalam bentuk tertulis dan/atau lisan dengan stakeholder.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 5,
                'kode_indikator' => '5C',
                'indikator_kinerja' => 'Mampu menulis dan menyampaikan presentasi teknis yang efektif.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 6
            [
                'id_cpl' => 6,
                'kode_indikator' => '6A',
                'indikator_kinerja' => 'Mampu menggambarkan suatu sistem secara matematis menggunakan prinsip-prinsip keilmuan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 6,
                'kode_indikator' => '6B',
                'indikator_kinerja' => 'Mampu membuat dan menganalisis model matematika pada suatu sistem.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 6,
                'kode_indikator' => '6C',
                'indikator_kinerja' => 'Mampu mensintesis komponen/sistem menggunakan matematika dan pengetahuan kerekayasaan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 6,
                'kode_indikator' => '6D',
                'indikator_kinerja' => 'Mampu menerapkan teknologi informasi dan kerekayasaan bidang elektro untuk memehami prinsip-prinsip kerekayasaan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 7
            [
                'id_cpl' => 7,
                'kode_indikator' => '7A',
                'indikator_kinerja' => 'Mampu memahami karakteristik dan spesifikasi komponen dan sistem.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 7,
                'kode_indikator' => '7B',
                'indikator_kinerja' => 'Mampu merancang sebuah sistem yang dapat direalisasikan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 7,
                'kode_indikator' => '7C',
                'indikator_kinerja' => 'Mampu mengimplementasikan hasil perancangan komponen dan sistem.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 7,
                'kode_indikator' => '7D',
                'indikator_kinerja' => 'Mampu memahami dampak lingkungan dan ekonomi dari desain teknik.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 8
            [
                'id_cpl' => 8,
                'kode_indikator' => '8A',
                'indikator_kinerja' => 'Mampu merencanakan proses, yang melibatkan pengumpulan dan analisis data, yang mengarah pada kesimpulan yang bermakna.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 8,
                'kode_indikator' => '8B',
                'indikator_kinerja' => 'Mampu mempersiapkan percobaan menggunakan komponen, alat, dan peralatan uji yang realistis dan tersedia.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 8,
                'kode_indikator' => '8C',
                'indikator_kinerja' => 'Mampu mengenali kecukupan data yang dikumpulkan yang diperlukan untuk menarik kesimpulan yang berarti.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 8,
                'kode_indikator' => '8D',
                'indikator_kinerja' => 'Mampu menemukan dan memperbaiki kesalahan dalam pengaturan percobaan dan data percobaan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 8,
                'kode_indikator' => '8E',
                'indikator_kinerja' => 'Mampu mengenali ketepatan dan relevansi data yang diukur.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 8,
                'kode_indikator' => '8F',
                'indikator_kinerja' => 'Mampu mengamati tren data atau fitur data untuk tujuan pemodelan, prediksi, atau menarik kesimpulan.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 9
            [
                'id_cpl' => 9,
                'kode_indikator' => '9A',
                'indikator_kinerja' => 'Mampu mengidentifikasi masalah kerekayasaan yang harus dipecahkan (berdasarkan pengamatan)',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 9,
                'kode_indikator' => '9B',
                'indikator_kinerja' => 'Mampu memformulasikan model matematik/perangkat lunak. (membuat perangkat keras/perangkat lunak/model matematika untuk masalah kerekayasaan yang akan dipecahkan.)',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 9,
                'kode_indikator' => '9C',
                'indikator_kinerja' => 'Mampu menganalisis permasalahan kerekayasaan yang kompleks. ( teknik menggunakan matematika dan/atau prinsip-prinsip teknik.)',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 9,
                'kode_indikator' => '9D',
                'indikator_kinerja' => 'Mampu menyelesaikan permasalahan kerekayasaan yang kompleks. (menilai performa solusi masalah kerekayasaan.)',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            // 10
            [
                'id_cpl' => 10,
                'kode_indikator' => '10A',
                'indikator_kinerja' => 'Mampu menggunakan peralatan uji laboratorium untuk praktik rekayasa.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 10,
                'kode_indikator' => '10B',
                'indikator_kinerja' => 'Mampu menggunakan perangkat lunak yang sesuai untuk praktik rekayasa.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id_cpl' => 10,
                'kode_indikator' => '10C',
                'indikator_kinerja' => 'Mampu menggunakan alat pengembangan yang sesuai untuk praktik rekayasa.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
