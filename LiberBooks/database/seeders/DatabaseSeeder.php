<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Buku;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Agung Alfatah',
            'username' => 'AgungA',
            'google_id' => '',
            'facebook_id' => '',
            'email' => 'agung.alfatah43@gmail.com',
            'password' => bcrypt('12345'),
            'image' => '',
            'about' => '',
            'Type' => 'admin'
        ]);

        Buku::create([
            'judul' => 'Dilan 1 1990',
            'penulis' => 'Pidi Baiq',
            'penerbit' => 'Mizan Digital Publishing',
            'tahun_terbit' => '2014-01-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Dilan1.jpg',
            'deskripsi' => '“Dilan : Dia Adalah Dilanku Tahun 1990” bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea.',
            'file' => 'pdfs/Dilan-1-1990.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Dilan 2 1991',
            'penulis' => 'Pidi Baiq',
            'penerbit' => 'Mizan Digital Publishing',
            'tahun_terbit' => '2015-01-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Dilan2.jpg',
            'deskripsi' => 'Dilan dan Milea resmi berpacaran. Di tengah kebahagiaan mereka Dilan terancam dikeluarkan dari sekolah akibat perkelahian dengan Anhar. Dilan juga semakin sering berkelahi dan mendapatkan musuh. Milea khawatir dengan masa depan Dilan. Milea merasa berhak melarang Dilan terlibat dalam geng motor. Suatu ketika, Dilan dikeroyok oleh orang tak dikenal. Saat mengetahui siapa yang berbuat, Dilan merencanakan balas dendam. Milea akhirnya meminta Dilan berhenti dari geng motor atau hubungan mereka berakhir. Dilan, seorang panglima tempur dan ketua geng motor akan selalu terlibat masalah. Di tengah semua masalah itu, hadir Yugo, anak dari sepupu jauh ayah Milea yang baru pulang dari Belgia. Mereka sering menghabiskan waktu bersama. Yugo menyukai Milea, dan Milea hanya mencintai Dilan.',
            'file' => 'pdfs/Dilan 2 1991.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Milea',
            'penulis' => 'Pidi Baiq',
            'penerbit' => 'Mizan Digital Publishing',
            'tahun_terbit' => '2016-08-31',
            'genre' => 'Novel',
            'image' => 'buku-images/Milea.jpg',
            'deskripsi' => 'Milea Suara dari Dilan menceritakan sosok tokoh Milea menurut Dilan. Kisahnya dimulai dari kisah cinta Dilan dan Milea yang harmonis. Hubungan mereka sudah mendapatkan respon positif antarkeluarga. Konflik dalam sinopsis muncul saat adanya kejadian kematian teman Dilan yang bernama Akew, akibat dikeroyok oleh orang tidak dikenal.',
            'file' => 'pdfs/Milea.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Gerbang Dialog Danur',
            'penulis' => 'Risa Saraswati',
            'penerbit' => 'Bukune',
            'tahun_terbit' => '2015-03-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Risa Saraswati1.jpg',
            'deskripsi' => 'Buku ini menceritakan tentang persahabatan Risa dan kelima sahabatnya yang berbeda dimensi. Awal pertemanan mereka saat Risa yang saat itu masih kelas 5 SD, dia baru saja pindah dari desa ke kota Bandung. Risa tinggal bersama nenek dan sepupunya di sebuah rumah peninggalan Belanda. Di rumah inilah Risa memulai persahabatannya dengan lima anak hantu Belanda yang bernama Peter, Hans, Hendrick, William dan Janhsen. Risa mempunyai kelebihan bisa melihat makhluk ghaib. Kelima sahabatnya laki-laki semua sedangkan dia perempuan seorang diri.',
            'file' => 'pdfs/Komik Musume no Tomodachi.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Hans',
            'penulis' => 'Risa Saraswati',
            'penerbit' => 'Bukune',
            'tahun_terbit' => '2017-04-04',
            'genre' => 'Novel',
            'image' => 'buku-images/Risa Saraswati2.jpg',
            'deskripsi' => 'Masa hidup Hans Joseph Weel bisa dibilang tidak menyenangkan. Dia tidak pernah dekat dengan kedua orangtua atau saudara selayaknya anak-anak lain. Hanya Rosemary Boyld—seorang wanita tua yang menganggap Hans seperti cucunya sendiri—berada di sisinya sampai ke teror mengerikan itu…."… aku hanyalah anak kecil yang sedang menunggu Mama untuk menjemputku pulang. Jika boleh meminta, tolong jangan panggilku dengan sebutan hantu. Panggil saja namaku... Hans." Meski begitu, Hans mampu menutupi kesepiannya dengan sangat baik. Dia lebih suka menderita sendiri ketimbang membagi penderitaan dengan sahabat-sahabatnya yang lain, termasuk aku. Sikapnya yang selalu ceria, membuat siapa pun tak menyangka bahwa dia punya masa lalu yang singkat, rumit, dan berakhir mengerikan.',
            'file' => 'pdfs/Hans - Risa Saraswati.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Janshen',
            'penulis' => 'Risa Saraswati',
            'penerbit' => 'Bukune',
            'tahun_terbit' => '2017-01-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Risa Saraswati3.jpg',
            'deskripsi' => '“Risa, kau gemuk!” “Risa, aku takut hujan!”
            “Risa, aku benci disebut hantu!”
            “Risa, seandainya gigiku tak ompong!”
            “Risa, aku rindu Anna….”
            “Risa… terima kasih, biarpun kau jelek, aku menyayangimu.
            Sama seperti sayangku kepada Annabelle.
            Jangan berhenti menemuiku karena menemuimu
            membuatku merasa hidup.”
            
            —Jantje Heinrich Janshen—',
            'file' => 'pdfs/Janshen - Risa Saraswati.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Peter',
            'penulis' => 'Risa Saraswati',
            'penerbit' => 'Bukune',
            'tahun_terbit' => '2016-01-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Risa Saraswati4.jpg',
            'deskripsi' => 'Apa kau tahu kalau ada juga hantu yang menyebalkan?
            Ada, namanya Peter van Gils!
            Anak hantu keturunan bangsawan Belanda itu paling bisa membuatku gemas, kesal, marah, bahkan terkadang takut.
            
            Tidak hanya manusia, empat sahabat gaibku yang lain juga sering kewalahan menghadapi tangan jahat dan sifat ‘sok benar’-nya. Namun, suatu malam… kudapati dia murung dan sedih.
            
            “Dia rindu mamanya, Risa….” Begitulah cerita yang kudengar.
            
            Saat itu aku baru sadar, Peter sebenarnya begitu rapuh. Kehidupan di dunia dan kematian yang membuatnya seperti ini. Dibawa jauh dari negerinya, lalu kehilangan ayah yang diidolakan dan ibu yang sangat dicintainya.
            
            Kini, dia mengizinkanku membagi kisah hidupnya dan mengenal dunia Peter lebih dalam… ',
            'file' => 'pdfs/Peter - Risa Saraswati.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'William',
            'penulis' => 'Risa Saraswati',
            'penerbit' => 'Bukune',
            'tahun_terbit' => '2017-07-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Risa Saraswati5.jpg',
            'deskripsi' => 'William Van Kemmen adalah seorang anak kecil yang tampan, apalagi dengan biola yang selalu menemaninya. Namun, dalam hatinya ia merasa kesepian. Semua itu karena perpindahan keluarganya ke Hindia Belanda. Kini matanya kosong karena kesedihan, tidak ada yang mau berteman dengannya.

            Setelah kematian menyapa, barulah dia merasa bahagia. Akhirnya dia berteman dengan Peter si anak nakal, Hendrick yang congkak, Hans yang perasa, Janshen si ompong, hingga Risa si anak manusia yang bisa melihat hantu.
            
            Ini adalah kisah tentangnya, kisah yang selama ini William dekap dengan erat.',
            'file' => 'pdfs/William - Risa Saraswati.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Ivanna Van Dijk',
            'penulis' => 'Risa Saraswati',
            'penerbit' => 'Bukune',
            'tahun_terbit' => '2022-08-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Risa Saraswati6.jpg',
            'deskripsi' => 'Hantu Belanda berambut pirang itu selalu terlihat marah, gusar, dan mengusir siapa pun yang datang ke rumah. Dia benci orang-orang berwajah Melayu, dia benci perempuan-perempuan cantik, dia benci keluarga manusia yang berbahagia. Namun yang paling parah, dia sangat benci aku.

            Berulang kali kudengar dia berteriak, “Pergi kau dari sini! Kau sahabat Elizabeth! Kau jahat! Sama seperti perempuan sundal itu!”
            
            Ivanna namanya, gadis yang selalu membuat aku ketakutan. Tak ada yang berani mendekatinya karena serta-merta dia itu akan menyerang bagai bertemu musuh. Tak habis pikir bagiku, kenapa harus aku terbawa dalam luapan kemarahannya?
            
            Aku ingin mencari tahu sesuatu di masa lalunya. Sang hantu perempuan Belanda angkuh yang pernah tinggal di rumah nenekku. Menjadi kakak angkat bagi Peter, William, Janshen, Hendrick, dan Hans. Aku tahu, masa lalunya pasti mengerikan',
            'file' => 'pdfs/Ivanna Van Dijk - Risa Saraswati.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Asih',
            'penulis' => 'Risa Saraswati',
            'penerbit' => 'Bukune',
            'tahun_terbit' => '2017-09-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Risa Saraswati7.jpg',
            'deskripsi' => 'Namanya Kasih.
            Kedua orangtuanya berharap dia akan tumbuh dewasa dengan hati yang kaya kasih sayang. Bisa saja awalnya begitu, sebelum dirinya menjadi sosok yang seolah  tak punya hati.
            "Kasih" menjadi nama yang terlalu indah untuk si wajah kaku tanpa senyuman itu. Wajah yang lebih baik tak usah  tersenyum, ketimbang bermalam-malam dihantui oleh bayangan  mengerikan. Entah sejak kapan panggilan "Asih" tersemat  pada dirinya.
            Saat kali pertama bertemu, aku mengira hanya aku yang  dia temui dengan cara seperti itu. Namun, nyatanya tidak. Cerita demi cerita dari mulut orangtua dan saudara-saudaraku bergulir. Ternyata, jauh sebelum aku lahir,  dia sudah sering mencoba mendatangi banyak manusia.            
            Asih, datanglah...
            Kali ini, gerbang dialog kubuka lebar untukmu. Tapi ingat, aku tak berharap lebih dari sekadar  bicara denganmu. Aku tak ingin menjadi teman baikmu. Biarkan aku menjadi jembatan antara pikiran mereka  yang mencibir dengan kisah sesungguhnya.',
            'file' => 'pdfs/Asih - Risa Saraswati.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Si Anak Pemberani',
            'penulis' => 'Tere Liye',
            'penerbit' => 'Republika Penerbit',
            'tahun_terbit' => '2018-01-01',
            'genre' => 'Novel',
            'image' => 'buku-images/Si Anak Pemberani.jpg',
            'deskripsi' => '"Aku Eliana, si anak pemberani, anak sulung Bapak dan Mamak yang akan menjadi pembela kebnaran dan keadilan. Berdiri paling gagah, paling depan."Buku ini tentang Eliana, anak pemberani yang membela tanah, sungai, hutan, dan lemah kampungnya. Saat kerakusan dunia datang, Eliana bersama teman karibnya bahu-membahu melakukan perlawanan.Dari puluhan buku Tere Liye, serial buku ini adalah mahkotanya.',
            'file' => 'pdfs/Si Anak Pemberani - Tere Liye.pdf',
            'category_id' => 1

        ]);

        Buku::create([
            'judul' => 'Musume no Tomodachi Vol_01-02',
            'penulis' => 'Asami Hagihara',
            'penerbit' => 'PT. Gramedia Jepang',
            'tahun_terbit' => '2019-02-17',
            'genre' => 'Comic',
            'image' => 'buku-images/Komik Musume no Tomodachi Vol_01-02.png',
            'deskripsi' => 'Kosuke telah hidup untuk memainkan diri ideal sebagai ayah di rumah dan sebagai manajer di tempat kerja. Namun, hidupnya berubah 180 derajat ketika dia bertemu teman putrinya. Di depannya, Kosuke bisa menjadi dirinya yang sebenarnya dan hatinya yang lelah sembuh. Namun, Dia tahu bahwa ini adalah perasaan yang seharusnya tidak pernah ditahan. Kisah Pria Usia Menengah Bertemu Gadis, disajikan kepada orang-orang modern yang menekan diri mereka dalam masyarakat, dimulai.',
            'file' => 'pdfs/Komik Musume no Tomodachi Vol_01-02.pdf',
            'category_id' => 4

        ]);

        Buku::create([
            'judul' => 'Komik Kuro no Maou Vol_01-02',
            'penulis' => 'Dairi Hishikage & Ryou Matoba',
            'penerbit' => 'PT. Gramedia Jepang',
            'tahun_terbit' => '2015-08-01',
            'genre' => 'Comic',
            'image' => 'buku-images/Komik Kuro no Maou Vol_01-02.png',
            'deskripsi' => 'Manga Kuro no Maou bercerita tentang Kurono Maou adalah siswa sekolah menengah yang sensitif terhadap mata tajam dan ekspresi buruknya. Tidak punya pacar selain dikaruniai teman dengan caranya sendiri, ia telah menjalani kehidupan yang damai. Tapi suatu hari, tanpa alasan, Kurono diserang sakit kepala misterius saat berada di ruang klub sastra dan pingsan. Ketika dia akhirnya terbangun ....... Pedang & sihir, dipenuhi monster, pemanggilan dunia ortodoks yang berbeda.',
            'file' => 'pdfs/Komik Kuro no Maou Vol_01-02.pdf',
            'category_id' => 4

        ]);

        Buku::create([
            'judul' => 'Buku Taubat',
            'penulis' => 'Ryan Fany Fadhillah AR',
            'penerbit' => 'PT. Gramedia Pustaka Utama',
            'tahun_terbit' => '2015-08-01',
            'genre' => 'Comic',
            'image' => 'buku-images/Babayo.jpeg',
            'deskripsi' => 'Sebuah Buku Taubat hasil karya tulis Ryan Fany Fadhilah AR',
            'file' => 'pdfs/BUKU TAUBAT.pdf',
            'category_id' => 4

        ]);

        Buku::create([
            'judul' => 'Kamus Bahasa Indonesia',
            'penulis' => 'Pusat Bahasa Departemen Pendidikan Indonesia',
            'penerbit' => 'PT. Gramedia Pustaka Utama',
            'tahun_terbit' => '2008-01-01',
            'genre' => 'Comic',
            'image' => 'buku-images/Kamus Bahasa Indonesia by Pusat Bahasa Departemen Pendidikan Indonesia.png',
            'deskripsi' => 'Sebuah Buku Kamus Bahasa Indonesia',
            'file' => 'pdfs/Kamus Bahasa Indonesia by Pusat Bahasa Departemen Pendidikan Indonesia.pdf',
            'category_id' => 3

        ]);

        Buku::create([
            'judul' => 'Tesaurus Bahasa Indonesia Pusat Bahasa Indonesia',
            'penulis' => 'Tim Penyusun',
            'penerbit' => 'Balai Pustaka',
            'tahun_terbit' => '2008-08-01',
            'genre' => 'Comic',
            'image' => 'buku-images/Tesaurus Bahasa Indonesia Pusat Bahasa Indonesia.png',
            'deskripsi' => 'Sebuah Buku Tesaurus Bahasa Indonesia Pusat Bahasa Indonesia',
            'file' => 'pdfs/Tesaurus Bahasa Indonesia Pusat Bahasa Indonesia.pdf',
            'category_id' => 3

        ]);

        Category::create([
            'name' => 'Novel',
            'image' => 'img/novel.png',
        ]);
        Category::create([
            'name' => 'Magazine',
            'image' => 'img/magazine.png',
        ]);
        Category::create([
            'name' => 'Dictionary',
            'image' => 'img/dictionary.png',
        ]);
        Category::create([
            'name' => 'Comic',
            'image' => 'img/comic.png',
        ]);
        Category::create([
            'name' => 'Tale',
            'image' => 'img/tale.png',
        ]);
        Category::create([
            'name' => 'Guide',
            'image' => 'img/guide.png',
        ]);

        User::factory(3)->create();
    }
}
