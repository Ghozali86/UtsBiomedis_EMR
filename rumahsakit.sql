-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2024 pada 08.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('1', 'Dr. Andi Susanto, Sp.JP', 'Kardiologi', 'Jl. Merdeka No. 10, Jakarta', '081234567890'),
('10', 'Dr. Citra Dewi, Sp.KJ', 'Psikiatri', 'Jl. Lotus No. 11, Palembang', '081234567899'),
('11', 'Dr. Arif Rachman, Sp.PA', 'Patologi', 'Jl. Cemara No. 21, Makassar', '081234567900'),
('12', 'Dr. Melati Puspita, Sp.Rad', 'Radiologi', 'Jl. Sakura No. 33, Bogor', '081234567901'),
('13', 'Dr. Farhan Akbar, Sp.B', 'Bedah Umum', 'Jl. Durian No. 99, Denpasar', '081234567902'),
('14', 'Dr. Maya Sari, Sp.An', 'Anestesiologi', 'Jl. Mangga No. 15, Lombok', '081234567903'),
('15', 'Dr. Putri Ayu, Sp.U', 'Urologi', 'Jl. Jeruk No. 3, Balikpapan', '081234567904'),
('16', 'Dr. Wisnu Nugroho, Sp.BTKV', 'Kardiotorasik', 'Jl. Pandan No. 5, Banda Aceh', '081234567905'),
('17', 'Dr. Alvin Setiawan, Sp.PD-KGEH', 'Gastroenterologi', 'Jl. Salak No. 7, Malang', '081234567906'),
('18', 'Dr. Nita Pramesti, Sp.Onk', 'Onkologi', 'Jl. Angsana No. 8, Manado', '081234567907'),
('19', 'Dr. Hendra Saputra, Sp.H', 'Hematologi', 'Jl. Tanjung No. 19, Makassar', '081234567908'),
('2', 'Dr. Siti Aminah, Sp.A', 'Pediatri', 'Jl. Mawar No. 15, Bandung', '081234567891'),
('20', 'Dr. Rika Kartini, Sp.Im', 'Imunologi', 'Jl. Mawar No. 23, Surabaya', '081234567909'),
('21', 'Dr. Fajar Rinaldi, Sp.KK', 'Kulit dan Kelamin', 'Jl. Sawo No. 1, Medan', '081234567910'),
('22', 'Dr. Intan Pramudya, Sp.OT', 'Ortopedi', 'Jl. Cempaka No. 88, Bandung', '081234567911'),
('23', 'Dr. Reza Putra, Sp.JP', 'Kardiologi', 'Jl. Anggrek No. 11, Jakarta', '081234567912'),
('24', 'Dr. Sarah Wijaya, Sp.GK', 'Gizi Klinik', 'Jl. Melur No. 77, Palu', '081234567913'),
('25', 'Dr. Ahmad Fauzi, Sp.B', 'Bedah Umum', 'Jl. Rambutan No. 56, Jambi', '081234567914'),
('26', 'Dr. Elvira Kartika, Sp.A', 'Pediatri', 'Jl. Belimbing No. 33, Surabaya', '081234567915'),
('27', 'Drg. Dian Yuliana, Sp.KG', 'Kedokteran Gigi', 'Jl. Durian No. 12, Bali', '081234567916'),
('28', 'Dr. Tommy Lesmana, Sp.N', 'Neurologi', 'Jl. Bambu No. 22, Tangerang', '081234567917'),
('29', 'Dr. Novia Setyaningrum, Sp.PD', 'Penyakit Dalam', 'Jl. Waru No. 19, Lampung', '081234567918'),
('3', 'Dr. Budi Prasetyo, Sp.OT', 'Ortopedi', 'Jl. Kebangsaan No. 23, Surabaya', '081234567892'),
('30', 'Dr. Rahma Azzahra, Sp.OG', 'Ginekologi', 'Jl. Melati No. 65, Medan', '081234567919'),
('4', 'Dr. Lestari Wijaya, Sp.DV', 'Dermatologi', 'Jl. Melati No. 45, Yogyakarta', '081234567893'),
('5', 'Dr. Surya Aditya, Sp.M', 'Oftalmologi', 'Jl. Bunga No. 32, Medan', '081234567894'),
('537c0123-93e0-4ff2-999e-5dd277876c2e', 'Fifa Luthfiana Maydita, S.Psi,.M.Psi.,Psikolog', 'Psikolog Umum', 'Jl. Padi XV No. 309', '082298769967'),
('6', 'Dr. Hana Kartika, Sp.N', 'Neurologi', 'Jl. Mawar No. 55, Semarang', '081234567895'),
('7', 'Drg. Rian Haryanto, Sp.Pros', 'Gigi dan Mulut', 'Jl. Mawar No. 67, Bali', '081234567896'),
('8', 'Dr. Suryo Utomo, Sp.OG', 'Ginekologi', 'Jl. Kenanga No. 78, Malang', '081234567897'),
('9', 'Dr. Dinda Permata, Sp.PD', 'Endokrinologi', 'Jl. Anggrek No. 12, Solo', '081234567898');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('1', 'Paracetamol', 'Obat penurun demam dan pereda nyeri ringan hingga sedang'),
('10', 'Omeprazole', 'Penghambat pompa proton untuk mengatasi asam lambung dan GERD'),
('11', 'Losartan', 'Obat untuk mengobati tekanan darah tinggi'),
('12', 'Captopril', 'Obat antihipertensi untuk pasien dengan hipertensi dan gagal jantung'),
('13', 'Salbutamol', 'Bronkodilator untuk meredakan asma dan masalah pernapasan lainnya'),
('14', 'Clindamycin', 'Antibiotik untuk infeksi bakteri kulit dan jaringan lunak'),
('15', 'Ranitidine', 'Obat pengurang asam lambung untuk masalah lambung dan tukak'),
('16', 'Azithromycin', 'Antibiotik makrolida untuk berbagai infeksi bakteri'),
('17', 'Doxycycline', 'Antibiotik untuk infeksi kulit dan saluran pernapasan'),
('18', 'Hydrochlorothiazide', 'Diuretik untuk mengurangi tekanan darah tinggi dan edema'),
('19', 'Ketoprofen', 'Obat pereda nyeri antiinflamasi non-steroid'),
('2', 'Amoxicillin', 'Antibiotik untuk mengobati berbagai infeksi bakteri'),
('20', 'Miconazole', 'Antijamur untuk infeksi kulit dan selaput lendir'),
('21', 'Fluoxetine', 'Antidepresan untuk gangguan depresi dan kecemasan'),
('22', 'Tamsulosin', 'Obat untuk mengatasi pembesaran prostat jinak'),
('23', 'Diazepam', 'Obat penenang untuk mengatasi kecemasan dan kejang'),
('24', 'Aspirin', 'Obat antiinflamasi non-steroid dan antiplatelet'),
('25', 'Naproxen', 'Obat pereda nyeri dan anti-inflamasi'),
('26', 'Clotrimazole', 'Antijamur untuk infeksi kulit seperti panu dan kurap'),
('27', 'Metronidazole', 'Antibiotik untuk infeksi bakteri dan parasit'),
('28', 'Loperamide', 'Obat untuk mengatasi diare'),
('29', 'Chlorpheniramine', 'Antihistamin untuk mengobati alergi'),
('3', 'Ibuprofen', 'Pereda nyeri dan anti-inflamasi untuk nyeri otot dan radang'),
('30', 'Prednisone', 'Kortikosteroid untuk mengobati peradangan'),
('31', 'Mefenamic Acid', 'Obat pereda nyeri untuk nyeri ringan hingga sedang'),
('32', 'Warfarin', 'Antikoagulan untuk mencegah penggumpalan darah'),
('33', 'Furosemide', 'Diuretik untuk mengobati tekanan darah tinggi dan edema'),
('34', 'Allopurinol', 'Obat untuk mengobati asam urat tinggi'),
('35', 'Clozapine', 'Antipsikotik untuk skizofrenia'),
('36', 'Atorvastatin', 'Obat penurun kolesterol darah'),
('37', 'Bisoprolol', 'Beta-blocker untuk mengatasi hipertensi'),
('38', 'Dexamethasone', 'Kortikosteroid untuk mengobati peradangan'),
('39', 'Famotidine', 'Antasida untuk mengobati asam lambung tinggi'),
('4', 'Ciprofloxacin', 'Antibiotik untuk infeksi bakteri saluran kemih dan pernapasan'),
('40', 'Gabapentin', 'Obat antikonvulsan untuk nyeri saraf dan kejang'),
('41', 'Hydrocortisone', 'Kortikosteroid untuk mengurangi peradangan pada kulit'),
('42', 'Levofloxacin', 'Antibiotik untuk infeksi bakteri pada paru-paru dan saluran kemih'),
('43', 'Methotrexate', 'Obat untuk mengobati kanker dan gangguan autoimun'),
('44', 'Montelukast', 'Obat untuk mengontrol gejala asma dan alergi'),
('45', 'Propranolol', 'Beta-blocker untuk mengobati hipertensi dan gangguan jantung'),
('46', 'Sertraline', 'Antidepresan untuk mengobati gangguan depresi mayor dan kecemasan'),
('47', 'Spironolactone', 'Diuretik untuk mengobati edema dan hipertensi'),
('48', 'Tramadol', 'Obat pereda nyeri untuk nyeri sedang hingga berat'),
('49', 'Valacyclovir', 'Antivirus untuk mengobati infeksi herpes'),
('5', 'Cetirizine', 'Antihistamin untuk meredakan gejala alergi'),
('50', 'Zolpidem', 'Obat untuk mengobati insomnia'),
('51', 'Betamethasone', 'Kortikosteroid untuk mengurangi peradangan pada kulit'),
('52', 'Risperidone', 'Antipsikotik untuk mengobati skizofrenia dan gangguan bipolar'),
('53', 'Topiramate', 'Obat antiepilepsi untuk mengobati kejang dan migrain'),
('54', 'Esomeprazole', 'Inhibitor pompa proton untuk GERD dan tukak lambung'),
('55', 'Diclofenac', 'Obat antiinflamasi untuk nyeri sendi dan otot'),
('56', 'Finasteride', 'Obat untuk mengatasi pembesaran prostat dan kebotakan'),
('57', 'Levothyroxine', 'Hormon tiroid untuk mengatasi hipotiroidisme'),
('58', 'Olanzapine', 'Antipsikotik untuk mengobati gangguan mental seperti skizofrenia'),
('59', 'Sildenafil', 'Obat untuk mengatasi disfungsi ereksi'),
('6', 'Loratadine', 'Antihistamin untuk mengurangi gejala alergi seperti hidung tersumbat'),
('60', 'Lisinopril', 'Obat antihipertensi untuk tekanan darah tinggi dan gagal jantung'),
('61', 'Hydralazine', 'Obat vasodilator untuk mengatasi hipertensi'),
('62', 'Alprazolam', 'Obat untuk mengatasi gangguan kecemasan dan panik'),
('63', 'Carbamazepine', 'Antikonvulsan untuk mengobati epilepsi dan gangguan bipolar'),
('64', 'Meloxicam', 'Obat antiinflamasi untuk nyeri dan radang sendi'),
('65', 'Tetracycline', 'Antibiotik untuk berbagai infeksi bakteri'),
('66', 'Rivastigmine', 'Obat untuk pengobatan demensia terkait Alzheimer'),
('67', 'Mirtazapine', 'Antidepresan untuk mengobati depresi'),
('68', 'Clopidogrel', 'Obat antiplatelet untuk mencegah pembekuan darah'),
('69', 'Ondansetron', 'Obat antiemetik untuk mencegah mual dan muntah'),
('7', 'Simvastatin', 'Obat penurun kolesterol'),
('70', 'Quetiapine', 'Antipsikotik untuk gangguan bipolar dan skizofrenia'),
('8', 'Amlodipine', 'Antihipertensi untuk mengontrol tekanan darah tinggi'),
('9', 'Metformin', 'Obat untuk mengontrol kadar gula darah pada pasien diabetes tipe 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('1', 'ID123456001', 'Ahmad Surya', 'L', 'Jl. Merdeka No. 10, Jakarta', '081234567890'),
('10', 'ID123456010', 'Mira Putri', 'P', 'Jl. Dahlia No. 25, Tangerang', '081345678912'),
('11', 'ID123456011', 'Joko Widodo', 'L', 'Jl. Ahmad Yani No. 14, Medan', '081456789023'),
('12', 'ID123456012', 'Lisa Handayani', 'P', 'Jl. Gatot Subroto No. 9, Padang', '081567890134'),
('13', 'ID123456013', 'Reza Ramadhan', 'L', 'Jl. Imam Bonjol No. 21, Makassar', '081678901245'),
('14', 'ID123456014', 'Indah Permatasari', 'P', 'Jl. Cut Nyak Dien No. 7, Banda Aceh', '081789012356'),
('15', 'ID123456015', 'Deni Saputra', 'L', 'Jl. Slamet Riyadi No. 11, Surakarta', '081890123467'),
('16', 'ID123456016', 'Ayu Melati', 'P', 'Jl. Letjen S. Parman No. 5, Denpasar', '081901234578'),
('17', 'ID123456017', 'Rian Pratama', 'L', 'Jl. Cendana No. 18, Pontianak', '081234567892'),
('18', 'ID123456018', 'Sari Amelia', 'P', 'Jl. Jendral Sudirman No. 30, Samarinda', '081345678923'),
('19', 'ID123456019', 'Tommy Setiawan', 'L', 'Jl. Merapi No. 2, Manado', '081456789034'),
('2', 'ID123456002', 'Siti Aisyah', 'P', 'Jl. Bunga Mawar No. 5, Bandung', '081345678901'),
('20', 'ID123456020', 'Tina Anggraini', 'P', 'Jl. Antasari No. 22, Pekanbaru', '081567890145'),
('21', 'ID123456021', 'Aditya Nugraha', 'L', 'Jl. Jendral Ahmad Yani No. 15, Malang', '082123456789'),
('22', 'ID123456022', 'Rina Wulandari', 'P', 'Jl. Panglima Polim No. 45, Surabaya', '082234567890'),
('23', 'ID123456023', 'Dodi Wahyudi', 'L', 'Jl. Letjen S. Parman No. 19, Jakarta', '082345678901'),
('24', 'ID123456024', 'Putri Mawar', 'P', 'Jl. Melati No. 8, Bandung', '082456789012'),
('25', 'ID123456025', 'Eko Susanto', 'L', 'Jl. Cempaka No. 24, Yogyakarta', '082567890123'),
('26', 'ID123456026', 'Lina Astuti', 'P', 'Jl. Anggrek No. 3, Medan', '082678901234'),
('27', 'ID123456027', 'Bayu Prasetyo', 'L', 'Jl. Cendrawasih No. 16, Semarang', '082789012345'),
('28', 'ID123456028', 'Mega Sari', 'P', 'Jl. Diponegoro No. 7, Bogor', '082890123456'),
('29', 'ID123456029', 'Andi Saputra', 'L', 'Jl. Tanjung Duren No. 9, Bekasi', '082901234567'),
('3', 'ID123456003', 'Budi Santoso', 'L', 'Jl. Pahlawan No. 23, Surabaya', '081456789012'),
('30', 'ID123456030', 'Siti Nurhaliza', 'P', 'Jl. Merak No. 10, Tangerang', '083012345678'),
('31', 'ID123456031', 'Hendra Putra', 'L', 'Jl. Mawar No. 22, Solo', '083123456789'),
('32', 'ID123456032', 'Dewi Lestari', 'P', 'Jl. Dahlia No. 1, Padang', '083234567890'),
('33', 'ID123456033', 'Rizki Fauzan', 'L', 'Jl. Semangka No. 5, Bogor', '083345678901'),
('34', 'ID123456034', 'Laila Rahmawati', 'P', 'Jl. Kenanga No. 14, Tangerang', '083456789012'),
('35', 'ID123456035', 'Adi Wijaya', 'L', 'Jl. Pinang No. 4, Bandung', '083567890123'),
('36', 'ID123456036', 'Tina Arumsari', 'P', 'Jl. Melinjo No. 6, Malang', '083678901234'),
('37', 'ID123456037', 'Fajar Nugroho', 'L', 'Jl. Sultan Agung No. 12, Jakarta', '083789012345'),
('38', 'ID123456038', 'Sarah Amelia', 'P', 'Jl. Veteran No. 11, Surabaya', '083890123456'),
('39', 'ID123456039', 'Roni Saputra', 'L', 'Jl. Kapten Tendean No. 8, Palembang', '083901234567'),
('4', 'ID123456004', 'Dewi Kartika', 'P', 'Jl. Kenanga No. 17, Semarang', '081567890123'),
('40', 'ID123456040', 'Wulan Sari', 'P', 'Jl. Diponegoro No. 22, Denpasar', '084012345678'),
('5', 'ID123456005', 'Fahmi Hakim', 'L', 'Jl. Melati No. 8, Yogyakarta', '081678901234'),
('6', 'ID123456006', 'Ratna Sari', 'P', 'Jl. Anggrek No. 12, Malang', '081789012345'),
('7', 'ID123456007', 'Hari Setiawan', 'L', 'Jl. Raya Sudirman No. 15, Jakarta', '081890123456'),
('8', 'ID123456008', 'Nina Kusuma', 'P', 'Jl. Diponegoro No. 3, Bogor', '081901234567'),
('9', 'ID123456009', 'Arif Budiman', 'L', 'Jl. Pandan No. 20, Solo', '081234567891');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `lokasi`) VALUES
('1', 'Poliklinik Umum', 'Lantai 1 - Sayap Barat'),
('10', 'Poliklinik Rehabilitasi Medis', 'Lantai 3 - Sayap Tengah'),
('11', 'Poliklinik Gizi', 'Lantai 1 - Sayap Tengah'),
('12', 'Poliklinik Orthopedi', 'Lantai 4 - Sayap Timur'),
('13', 'Poliklinik Penyakit Dalam', 'Lantai 2 - Sayap Barat'),
('14', 'Poliklinik Psikiatri', 'Lantai 5 - Sayap Tengah'),
('15', 'Poliklinik Paru', 'Lantai 3 - Sayap Barat'),
('16', 'Poliklinik Onkologi', 'Lantai 4 - Sayap Timur'),
('17', 'Poliklinik Geriatri', 'Lantai 5 - Sayap Timur'),
('18', 'Poliklinik Kandungan dan Kebidanan', 'Lantai 1 - Sayap Timur'),
('19', 'Poliklinik Endokrinologi', 'Lantai 2 - Sayap Tengah'),
('2', 'Poliklinik Gigi', 'Lantai 2 - Sayap Timur'),
('20', 'Poliklinik Hematologi', 'Lantai 3 - Sayap Timur'),
('21', 'Poliklinik Infeksi', 'Lantai 2 - Sayap Timur'),
('22', 'Poliklinik Hepatologi', 'Lantai 3 - Sayap Tengah'),
('23', 'Poliklinik Neurologi', 'Lantai 4 - Sayap Tengah'),
('24', 'Poliklinik Kardiologi', 'Lantai 3 - Sayap Barat'),
('25', 'Poliklinik Urologi', 'Lantai 2 - Sayap Barat'),
('26', 'Poliklinik Gawat Darurat', 'Lantai 1 - Sayap Barat'),
('27', 'Poliklinik Kesehatan Anak', 'Lantai 1 - Sayap Timur'),
('28', 'Poliklinik Penyakit Infeksi', 'Lantai 4 - Sayap Barat'),
('29', 'Poliklinik Kesehatan Kerja', 'Lantai 2 - Sayap Tengah'),
('3', 'Poliklinik Anak', 'Lantai 1 - Sayap Timur'),
('30', 'Poliklinik Kesehatan Jiwa', 'Lantai 5 - Sayap Tengah'),
('4', 'Poliklinik Jantung', 'Lantai 3 - Sayap Barat'),
('6', 'Poliklinik Kulit dan Kelamin', 'Lantai 3 - Sayap Timur'),
('7', 'Poliklinik THT', 'Lantai 1 - Sayap Tengah'),
('8', 'Poliklinik Mata', 'Lantai 2 - Sayap Tengah'),
('9', 'Poliklinik Bedah Umum', 'Lantai 4 - Sayap Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `tgl_periksa`, `id_poli`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`) VALUES
('a8c1bb1d-d542-40bf-b4cd-038b9c5946ae', '2024-11-06', '4', '20', '<p>kepala pusing</p>\r\n', '10', 'hshsh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(10) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(18, 'a8c1bb1d-d542-40bf-b4cd-038b9c5946ae', '14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','dokter','pasien') NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`, `status`, `created_at`) VALUES
(1, 'udin', '1', 'admin', 'active', '2024-11-12 07:13:17'),
(2, 'gho', '2', 'dokter', 'active', '2024-11-12 07:13:17'),
(3, 'pasien', '3', 'pasien', 'active', '2024-11-12 07:13:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `tb_rekammedis_ibfk_1` (`id_pasien`),
  ADD KEY `tb_rekammedis_ibfk_2` (`id_dokter`),
  ADD KEY `tb_rekammedis_ibfk_3` (`id_poli`);

--
-- Indeks untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`);

--
-- Ketidakleluasaan untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
