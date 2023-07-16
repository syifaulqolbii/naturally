<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Event::factory()->create(
            [
                'name' => 'Membersihkan Taman Kota',
                'date' => '2023-08-15',
                'quota' => 50,
                'location' => 'Taman Kota ABC',
                'description' => 'Kegiatan Membersihkan Taman Kota adalah sebuah kegiatan yang bertujuan untuk membersihkan taman kota dari sampah dan menjaga kebersihannya. Kegiatan ini dijadwalkan akan dilaksanakan pada tanggal 15 Agustus 2023 di Taman Kota ABC. Para peserta akan berkumpul di lokasi tersebut untuk bekerja sama membersihkan taman, mengumpulkan sampah, dan merapikan area sekitar. Selain itu, kegiatan ini juga akan menyampaikan edukasi kepada peserta mengenai pentingnya menjaga kebersihan lingkungan dan mengurangi sampah plastik. Peserta diharapkan membawa peralatan pembersih seperti sarung tangan, kantong sampah, dan alat kebersihan lainnya. Kegiatan ini merupakan kesempatan bagi masyarakat untuk berkontribusi dalam menjaga keindahan dan kebersihan taman kota, serta meningkatkan kesadaran akan pentingnya menjaga kebersihan lingkungan secara keseluruhan. Mari kita bergabung dan berkontribusi dalam menciptakan lingkungan yang lebih baik untuk kita semua!',
            ]
        );
        Event::factory()->create(
            [
                'name' => 'Membersihkan Taman Raya',
                'date' => '2023-08-24',
                'quota' => 100,
                'location' => 'Taman Raya Kota',
                'description' => 'Kegiatan Membersihkan Taman Kota adalah sebuah kegiatan yang bertujuan untuk membersihkan taman kota dari sampah dan menjaga kebersihannya. Kegiatan ini dijadwalkan akan dilaksanakan pada tanggal 15 Agustus 2023 di Taman Kota ABC. Para peserta akan berkumpul di lokasi tersebut untuk bekerja sama membersihkan taman, mengumpulkan sampah, dan merapikan area sekitar. Selain itu, kegiatan ini juga akan menyampaikan edukasi kepada peserta mengenai pentingnya menjaga kebersihan lingkungan dan mengurangi sampah plastik. Peserta diharapkan membawa peralatan pembersih seperti sarung tangan, kantong sampah, dan alat kebersihan lainnya. Kegiatan ini merupakan kesempatan bagi masyarakat untuk berkontribusi dalam menjaga keindahan dan kebersihan taman kota, serta meningkatkan kesadaran akan pentingnya menjaga kebersihan lingkungan secara keseluruhan. Mari kita bergabung dan berkontribusi dalam menciptakan lingkungan yang lebih baik untuk kita semua!',
            ]
        );
        Event::factory()->create(
            [
                'name' => 'Pembersihan Pantai',
                'date' => '2023-09-10',
                'quota' => 30,
                'location' => 'Pantai XYZ',
                'description' => 'Kegiatan Pembersihan Pantai adalah kegiatan yang bertujuan untuk membersihkan pantai dari sampah plastik dan mempromosikan kesadaran lingkungan. Kegiatan ini akan dilaksanakan pada tanggal 10 September 2023 di Pantai XYZ. Para peserta akan bekerja sama untuk membersihkan pantai, mengumpulkan sampah plastik, dan memastikan bahwa pantai kembali bersih dan bebas dari polusi sampah. Selain membersihkan pantai, kegiatan ini juga akan memberikan edukasi kepada peserta mengenai dampak buruk sampah plastik bagi laut dan makhluk hidup di dalamnya. Peserta diharapkan membawa peralatan pembersih seperti sarung tangan, kantong sampah, dan perlengkapan lainnya yang diperlukan. Mari bergabung dalam kegiatan ini dan jaga kebersihan pantai untuk generasi mendatang. Bersama-sama, kita dapat membuat perubahan positif dan meningkatkan kesadaran akan pentingnya menjaga kebersihan pantai dan menjaga kelestarian ekosistem laut.',
            ]
        );
        Event::factory()->create(
            [
                'name' => 'Penanaman Pohon',
                'date' => '2023-10-05',
                'quota' => 20,
                'location' => 'Taman Hijau CDE',
                'description' => 'Kegiatan Penanaman Pohon adalah kegiatan yang bertujuan untuk menanam pohon dengan tujuan menjaga kelestarian lingkungan dan meningkatkan kualitas udara. Kegiatan ini direncanakan akan dilaksanakan pada tanggal 5 Oktober 2023 di Taman Hijau CDE. Para peserta akan berpartisipasi dalam menanam pohon di area taman. Kita akan menyediakan bibit pohon dan perlengkapan yang diperlukan seperti cangkul dan sarung tangan. Selain menanam pohon, kegiatan ini juga akan memberikan informasi kepada peserta mengenai manfaat penting dari pohon dalam menjaga ekosistem dan melawan perubahan iklim. Kegiatan ini adalah kesempatan bagi masyarakat untuk berkontribusi dalam menjaga kelestarian alam dan menciptakan lingkungan yang lebih sehat. Mari ikut serta dalam kegiatan penanaman pohon ini dan berikan kontribusi positif bagi lingkungan kita. Bersama, kita dapat menciptakan perubahan yang berarti dan menjaga keberlanjutan lingkungan.',
            ]
        );

        Blog::factory()->create(
            [
                'title' => 'Mengurangi Penggunaan Plastik',
                'tag' => 'Trash',
                'article' => 'Mengurangi penggunaan plastik adalah langkah penting dalam menjaga lingkungan. Gantilah penggunaan kantong plastik dengan kantong kain atau tas belanja yang dapat digunakan berulang kali. Hindari penggunaan botol plastik sekali pakai dengan menggunakan botol minum tahan lama. Selain itu, hindari penggunaan sedotan plastik dan beralihlah ke sedotan logam atau kaca. Dengan mengurangi penggunaan plastik, kita dapat mengurangi sampah plastik yang mencemari lingkungan.',
                'readers' => 5000,
            ]
        );

        Blog::factory()->create(
            [
                'title' => 'Mendaur Ulang Sampah',
                'tag' => 'Trash',
                'article' => 'Mendaur ulang sampah adalah upaya penting dalam menjaga lingkungan. Pisahkan sampah organik dan non-organik, serta kumpulkan sampah non-organik yang dapat didaur ulang seperti kertas, plastik, dan logam. Tempatkan tempat daur ulang di rumah atau di tempat umum agar orang lebih mudah memilah sampah. Dengan mendaur ulang sampah, kita dapat mengurangi penggunaan sumber daya alam dan volume sampah yang masuk ke tempat pembuangan akhir.',
                'readers' => 4000,
            ],
        );
        Blog::factory()->create(
            [
                'title' => 'Menghemat Energi Listrik',
                'tag' => 'Popular',
                'article' => 'Menghemat energi listrik adalah cara efektif dalam menjaga lingkungan. Matikan lampu dan perangkat elektronik yang tidak digunakan, serta manfaatkan cahaya alami sebanyak mungkin. Gunakan peralatan listrik yang efisien energi dan pastikan agar rumah atau gedung terisolasi dengan baik agar tidak membuang energi secara percuma. Dengan menghemat energi listrik, kita dapat mengurangi emisi gas rumah kaca yang berkontribusi pada perubahan iklim.',
                'readers' => 3000,
            ],
        );

        DB::table('tags')->insert([
            'tag' => 'Popular',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Climates',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Animal',
        ]);
        DB::table('tags')->insert([
            'tag' => 'Trash',
        ]);
        User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin'),
                'role' => 1,
            ]
        );
        User::factory()->create(
            [
                'name' => 'User',
                'email' => 'user@mail.com',
                'password' => bcrypt('user'),
                'role' => 0,
            ]
        );
    }
}
