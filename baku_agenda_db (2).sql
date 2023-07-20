-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 09:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baku_agenda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_email`, `a_status`, `a_img`) VALUES
(1, 'Azima Malikzada', 'Panda', '202cb962ac59075b964b07152d234b70', 'azima@gmail.com', 'Active', 'panda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_name_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name_az`, `c_name_en`, `c_name_ru`) VALUES
(1, 'İdman', 'Sport', 'Cпорт'),
(2, 'Mədəniyyət', 'Culture', 'Культура'),
(3, 'Biznes', 'Business', 'Бизнес'),
(4, 'Texnologiya', 'Technology', 'Технологии'),
(7, 'İncəsənət', 'Art', 'Искусство'),
(8, 'Sosial', 'Social', 'Социальное');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_file_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creator_id` int(11) NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title_az`, `n_title_en`, `n_title_ru`, `n_description_az`, `n_description_en`, `n_description_ru`, `n_date`, `n_category`, `n_status`, `n_file`, `n_file_ext`, `n_creator_id`, `n_create_date`, `n_updater_id`, `n_update_date`) VALUES
(19, '“Simpsonlar”ın itkin düşən batiskafla bağlı illər əvvəl verdiyi proqnoz üzə çıxdı - FOTO', '', '', '“Simpsonlar”ın 2006-cı ildə nümayiş olunan seriyasında “Titanik” gəmisinin yaxınlığında sualtı qurğunun batmasıyla bağlı proqnoza rast gəlinib.\r\n\r\nHekayəyə görə, Homer Simpsonun atası oğlunu özü ilə batan gəminin qalıqlarından xəzinə axtarmaq üçün dərin dəniz ekspedisiyasına aparır.\r\n\r\nOğul və ata batiskafla suyun altına dalırlar və gəmidə iki xəzinə sandığı tapırlar.\r\n\r\nLakin Homer sualtı qayıqda ilişib qalır, oksigen tükəndiyi üçün huşunu itirir və yalnız üç gün xəstəxanada qaldıqdan sonra komadan ayılır.\r\n\r\nXatırladaq ki, turistləri “Titanik” sərnişin laynerinin batdığı yerə aparmaq üçün istifadə edilən “Titan” sualtı eniş aparatı iyunun 18-də, dalma başlayandan təxminən 1 saat 45 dəqiqə sonra Atlantik okeanında itib. \r\nQeyd edək ki, bundan əvvəl ABŞ-də 33 il yayımlanan cizgi serialı daha bir proqnozla gündəm olmuşdu. Belə ki, illər əvvəl yayımlanan serialda ABŞ-nin keçmiş prezidenti Donald Trampla bağlı maraqlı detal ortaya çıxmışdı.\r\n\r\n', '', '', '2023-07-07T00:10', '4', 'Active', '2.jpg', '.jpg', 1, '2023-06-30 18:10:44', '', ''),
(20, 'Azərbaycanın qadın güləşçiləri Avropa Çempionatında bürünc medal qazandılar - FOTO', '', '', 'İspaniyanın Santyaqo de Kompostela şəhərində güləş üzrə U-20 Avropa çempionatında (AÇ) bürünc medal qazanan qadın idmançılarımızın adı açıqlanıb.\r\n\r\nAzərbaycan Güləş Federasiyasının yaydığı məlumata görə, 55 kq çəki üzrə yarışan güləşçimiz Ruzanna Məmmədova norveçli Felisitas Domayevaya 9:4 hesabıyla qalib gələrək Avropa çempionatında bürünc medal qazanıb.\r\n\r\nHəmçinin, 50 kq çəki üzrə yarışan digər qadın güləşçimiz Əsmər Cankurtaran isveçrəli Svenya Junqoya 9:6 hesabıyla qalib gələrək Avropa çempionatında bürünc medal qazanıb.\r\n', '', '', '2023-06-30T23:13', '1', 'Active', 'FotoJet_-_2023-06-30T005457_671.jpg', '.jpg', 1, '2023-06-30 18:13:34', '', ''),
(31, 'Zaporojye AES partladılarsa, hansı fəsadları olacaq?', '', '', 'Rusiya və Ukrayna arasında müharibənin davam etdiyi bir zamanda Ukrayna müdafiə nazirinin müavini Anna Malyar Zaporojye Atom Elektrik Stansiyasını (AES) partladılma təhlükəsi ilə əlaqədar həyacanlı açıqlama verib. Nazir müavini paylaşımında Rusiyanın AES-i partladıb, məsuliyyəti Ukraynanın üzərinə atmaqla hədələdiyini qeyd edib. Anna Malyar onu da bildirib ki, ruslar bu vəziyyətdən hərbi məqsədlər üçün istifadə etməyə çalışırlar.\r\n\r\nRusiya prezidentinin mətbuat katibi Dmitri Peskov isə Zaporojye AES-də vəziyyətin kifayət qədər gərgin olduğunu vurğulayıb. Rusiya rəsmisi söyləyib ki, Kiyev tərəfindən fəlakətli nəticələrə səbəb ola biləcək böyük təxribat təhlükəsi var.', '', '', '2023-07-28T00:45', '2', 'Active', 'zap.jpg', '.jpg', 1, '2023-07-06 00:46:19', '', ''),
(32, 'Rusiya mətbuatında Azərbaycan Prezidentinin Qoşulmama Hərəkatındakı çıxışı geniş işıqlandırılıb', '', '', 'Rusiya KİV-ləri Azərbaycan Prezidenti İlham Əliyevin Qoşulmama Hərəkatının Əlaqələndirmə Bürosunun “Qoşulmama Hərəkatı: meydana çıxan çağırışlarla mübarizədə birgə və qətiyyətli” mövzusunda nazirlər görüşündə çıxışını geniş işıqlandırıb.\r\n\r\n“Report”un məlumatına görə, “Kommersant” qəzetində qeyd olunub ki, Azərbaycan Prezidenti Fransanı erməni separatizmini dəstəkləməkdə təqsirləndirib, eyni zamanda, Fransada irqçilik meyillərinin, milli azlıqlara qarşı təzyiqlərin artdığını deyib.', '', '', '2023-07-28T00:48', '3', 'Active', '3bf8797d-b1f6-31c7-83fb-4a46bc71ab68_850.jpg', '.jpg', 1, '2023-07-06 00:48:47', '', ''),
(33, 'Azərbaycan millisi Bakıda keçirilən seçmə mərhələyə məğlubiyyətlə başladı', '', '', 'Çimərlik futbolu üzrə Azərbaycan millisi Bakıda təşkil olunan dünya çempionatının seçmə mərhələsində ilk oyununu keçirib.\r\n\r\n“Report”un məlumatına görə, komanda Moldova yığması ilə üz-üzə gəlib. “Su İdman Sarayı”nın ərazisindəki çimərlik futbolu meydançasında təşkil olunan matç rəqibin 3:2 hesablı qələbəsi ilə başa çatıb.\r\n\r\nAzərbaycan yığmasından qolları 7-ci dəqiqədə Elçin Qasımov və 33-cü dəqiqədə Tural Qürbətov vurublar.\r\nA qrupunun digər görüşündə İtaliya Estoniyanı məğlub edib - 3:1.', '', '', '2023-07-29T00:51', '1', 'Active', '2cf275e9-6205-3e7d-8025-d45697223902_850.jpg', '.jpg', 1, '2023-07-06 00:51:55', '', ''),
(36, 'Türkiyə millisinin futbolçusu “Atletiko”ya keçib', '', '', 'Türkiyə millisinin futbolçusu Çağlar Söyüncü İspaniyanın “Atletiko” komandasına keçib.\r\n\r\n27 yaşlı müdafiəçi Madrid təmsilçisi ilə 4 illik müqavilə imzalayıb.\r\n\r\nSon klubu İngiltərə “Lester”i olan təcrübəli oyunçu La Liqa təmsilçisinə azad agent kimi transfer olunub.\r\nQeyd edək ki, Çağlar Söyüncü Türkiyədə “Altınordu” və Almaniyada “Frayburq”un da formasını geyinib.', '', '', '2023-07-09T04:00', '1', 'Active', 'f28e4dda-f220-3e65-b92c-1aa0075ca258_850.jpg', '.jpg', 1, '2023-07-06 00:57:58', '', ''),
(38, '“Formula-1”: Növbəti Azərbaycan Qran-prisinin vaxtı açıqlandı', '', '', '“Formula-1” üzrə 2024-cü il Azərbaycan Qran-prisinin vaxtı açıqlanıb.\r\n\r\nYarışın rəsmi saytının yaydığı məlumata görə, Bakının ev sahibliyi edəcəyi Qran-pri 13-15 sentyabrda təşkil olunacaq.\r\nQeyd edək ki, Azərbaycan Qran-prisi ilk dəfə sentyabra təsadüf edəcək.', '', '', '2023-07-13T04:59', '1', 'Active', 'f1.jpg', '.jpg', 1, '2023-07-06 01:00:24', '', ''),
(39, 'Azərbaycan millisinin üzvü Türkiyə klubu ilə müqavilə imzaladı', '', '', 'Azərbaycan millisinin futbolçusu Coşqun Diniyevin Türkiyənin “Ümraniyespor” klubuna keçidi rəsmiləşib.\r\n\r\nI Liqa təmsilçisinin Mətbuat Xidmətinin yaydığı məlumata görə, 28 yaşlı yarımmüdafiəçi ilə müqavilə imzalanıb. Anlaşmanın detalları açıqlanmayıb.\r\nQeyd edək ki, Coşqun Diniyev “Səbail”dən “Ümraniyespor”a transfer olunub.', '', '', '2023-07-19T04:04', '1', 'Active', 'cos.jpg', '.jpg', 1, '2023-07-06 01:02:27', '', ''),
(40, 'İran Beynəlxalq Məhkəməyə verildi', '', '', 'Kanada, İsveç, Ukrayna və Böyük Britaniya Haaqadakı Beynəlxalq Ədalət Məhkəməsində İrana qarşı iddia qaldırıb.\r\n\r\nMəlumata görə, bu yolla İranın 2020-ci ildə Ukrayna Beynəlxalq Hava Yollarına məxsus PS752 reysinin qanunsuz vurulmasına görə məsuliyyət daşımasının təmin edilməsi planlaşdırılır.\r\n\r\nBu barədə Ukrayna Xarici İşlər Nazirliyinin mətbuat xidməti bildirib.\r\n\r\nQeyd olunub ki, İran 28 dekabr 2022-ci ildə qaldırılan bu mübahisənin həlli üçün arbitraj tələbinə cavab verməyib. Buna görə də, İrana qarşı Mülki Aviasiyanın Təhlükəsizliyinə dair Qanunsuz Hərəkətlərə Qarşı Mübarizə üzrə 1971-ci il Konvensiyasını pozduğuna görə iş başlanacaq.', '', '', '2023-07-29T05:04', '3', 'Active', '52ce41b010464246ba7802304594ec0d.jpg', '.jpg', 1, '2023-07-06 01:05:14', '', ''),
(41, 'Azərbaycan OPEK-ə üzv olur?', '', '', 'Azərbaycan OPEK-ə üzv olmaq məsələsini nəzərdən keçirmir.\r\n\r\nBu barədə jurnalistlərə ölkənin energetika naziri Pərviz Şahbazov məlumat verib.\r\n\r\n“Prinsipcə, bu, yeni xəbər deyil, belə suallar qaldırılmalıdır. Amma hazırda biz bunu nəzərdən keçirmirik”, - o bildirib.\r\n\r\nQeyd edək ki, çərşənbə günü OPEC Azərbaycana təşkilata üzv olmağı təklif edib. Bu, Azərbaycanın energetika naziri Pərviz Şahbazovun Vyanada OPEC-in baş katibi Haysam Əl Qays ilə görüşündə baş verib.\r\nMəlumata görə, OPEK-in baş katibi ilə müzakirələr zamanı dünya neft bazarının tarazlaşdırılması istiqamətində atılan addımlar və neft sənayesinin inkişafı ilə bağlı məsələlər müzakirə olunub. Həmçinin, gələcəkdə enerji təhlükəsizliyinin təmin edilməsi məqsədilə bütün tərəflərin iştirakı ilə dialoq və əməkdaşlıq mühitinin yaradılmasının zəruriliyi qeyd edilib.', '', '', '2023-08-05T06:06', '2', 'Active', '357632961_2248373115352470_2562999247708234816_n.jpg', '.jpg', 1, '2023-07-06 01:07:03', '1', '2023-07-17 01:34:52'),
(42, 'Azərbaycanda ortalama balı ən yüksək olan tələbə Almaniyaya niyə gedir?', '', '', 'S.Feyzullayeva tibb təhsilini Almaniyada davam etdirməyi düşündüyünü qeyd edib:\r\n\r\n“Müalicə işi üzrə təhsil almışam. Altı il ərzində çox əziyyət çəkdim. Çox çətin və ağır oldu. Fənlər çox, vaxt az idi. Universiteti mənimlə birlikdə bitirənlərin hər biri mənim qədər çalışıblar. Ali məktəbi Prezident təqaüdü ilə bitirdim.\r\n\r\nTibb təhsilimi Almaniyada davam etdirməyi düşünürəm. İnişil bir ay, keçən il iki ay Almaniyada xəstəxanalarda təcrübə keçdim, vəziyyəti gördüm. Qərarım daha da qətiləşdi. Almaniyada təhsili əvvəldən düşünürdüm”.\r\n\r\nSəbinə Feyzullayeva deyir ki, xaricdə təhsil 10 il davam edəcək:\r\n\r\n“Bizi Azərbaycan yetişdirib. İstədiyim ixtisasa tam yiyələndikdən sonra ölkəmizə qayıdacağam. Üstümüzdə müəllimlərin əməyi var.', '', '', '2023-07-16T05:09', '2', 'Active', 'azzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz.jpg', '.jpg', 1, '2023-07-06 01:09:16', '', ''),
(43, 'Şotlandiyada Kral III Çarlzın tacqoyma mərasimi başlayıb', '', '', 'Edinburqda Böyük Britaniya kralı III Çarlzın və onun həyat yoldaşı Kraliça Kamillanın tacqoyma mərasimi münasibətilə ayrıca bayram mərasimi başlayıb.\r\n\r\nMəlumata görə, tədbir may ayında Londondakı Vestminster abbatlığında tacqoyma mərasimindən sonra monarxın Şotlandiyaya ilk səfəri ilə eyni vaxta təsadüf edir və Britaniya adət-ənənələrinin toxunulmazlığını vurğulamaq məqsədi daşıyır.\r\n\r\nEdinburq qəsrindən Edinburq və Leitin yüksək rütbəli konstabllarının müşayiəti ilə Sankt-Peterburqda 100-ə yaxın müxtəlif peşə sahiblərindən ibarət xalq yürüşü başlayıb. Yürüş Şotlandiya Atlı Polisinin, hərbi orkestrin və Şotlandiya Kral Alayının maskotu - Kruahan IV adlı kapral rütbəli qara Şetland ponisinin iştirakı ilə keçirilir.\r\n', '', '', '2023-07-18T01:14', '2', 'Active', 'FotoJet_(15).jpg', '.jpg', 1, '2023-07-06 01:11:00', '', ''),
(44, 'Lahıc haqqında sənədli film çəkildi', '', '', 'Baku TV-də “Vəhdət” adlı sənədli film efirə gedib.\r\n\r\nEkran işi Azərbaycanın ən qədim yaşayış məntəqələrindən biri olan Lahıc qəsəbəsinə həsr olunub.\r\n\r\nFilmdə müxtəlif mədəniyyətləri özündə birləşdirən Lahıcın tarixindən, qədim sənətkarlıq nümunələrindən, adət-ənənələrindən bəhs olunur.', '', '', '2023-07-22T03:12', '2', 'Active', 'Screenshot_2023-07-05_204134.jpg', '.jpg', 1, '2023-07-06 01:12:54', '', ''),
(45, 'İyulun 7-də Yer Günəşdən ən uzaq məsafədən keçəcək', '', '', 'İyulun 7-də Yer Günəşdən ən uzaq məsafədən keçəcək.\r\n\r\nBakı Dövlət Universitetinin (BDU) Fizika fakültəsinin Astrofizika kafedrasından verilən məlumata görə, yaxın günlərdə Yer kürəsinin sakinləri maraqlı astronomik hadisəni müşahidə edə biləcəklər. Belə ki, planetimiz öz orbitinin Günəşdən ən uzaq nöqtəsi olan afelidən keçir. Bu, yay fəslinin başlanmasından təqribən 2 həftə sonra baş verir.\r\n\r\n2023-cü ildə Yer iyulun 7-si Bakı vaxtı ilə saat 00:06-da afelidən keçəcək. Həmin an Günəşə qədər məsafə 152 093 251 km olacaq. Afelidə Yer Günəşdən ən yaxın nöqtəsi olan perihelidə olduğundan təqribən 5 milyon km uzaqda olur. Afelidə Günəş diskinin görünən bucaq ölçüsü perihelidə olduğundan kiçikdir. Yer afelidə olduqda Günəşin bucaq diametri minimal - 31\'28”, perihelidə isə maksimal - 32\'32” olur. Günəş diskinin ölçüsündə olan bu fərq gözlə hiss olunmur və təxminən 3% təşkil edir.', '', '', '2023-07-21T05:14', '4', 'Active', 'a556fa5f-d584-3d4c-adf2-f0cfd2565a27_850.jpg', '.jpg', 1, '2023-07-06 01:14:51', '', ''),
(46, 'Zəlzələ zamanı gələn SOS siqnalı niyə yalnız bəzi smartfonlara ötürülüb?', '', '', 'Ötən gün gecə saatlarında qeydə alınan zəlzələ insanlarda müəyyən mənada narahatlıq yaradıb. Bəziləri təkanların təkrarlanacağını düşünərək gecəboyu evlərinə getməyiblər.\r\n\r\nSosial şəbəkələrdə müxtəlif başlıqlarla paylaşılan qeyri-dəqiq informasiyalar isə əhali arasındakı narahatlığı bir qədər də artırıb. Bəziləri zəlzələdən öncə ev heyvanlarının narahatlığından, bəziləri isə smartfonlarına gələn SOS bildirişindən zəlzələdən xəbər tutduqlarını deyirlər.', '', '', '2023-07-15T04:15', '4', 'Active', 'telefon_banco_azz_.jpg', '.jpg', 1, '2023-07-06 01:16:04', '', ''),
(47, 'Azərbaycan “Azersky”a görə 15-dən artıq sığorta şirkətindən ödəniş alacaq', '', '', 'Rəqəmsal İnkişaf və Nəqliyyat Nazirliyi yanında Kosmik Agentlik (“Azərkosmos”) missiyasını vaxtından 1 il əvvəl başa çatdırmış ”Azersky” peykinə görə 15-dən çox sığorta şirkətindən ödəniş alacaq.\r\n\r\nBunu “Report”a açıqlamasında “Azərkosmos”un İdarə Heyətinin sədri Saməddin Əsədov bildirib.\r\n“Yerin məsafədən müşahidə peyki olan “Azersky”la bağlı sığorta ödənişlərinin alınması üçün biz artıq fəaliyyətə başlamışıq, proses ilin sonuna qədər yekunlaşacaq. Nəzərə almaq lazımdır ki, sığortalama prosesində 15-dən artıq sığorta şirkəti iştirak edir. Biz peyki “PAŞA Sığorta” ASC vasitəsi ilə beynəlxalq bazara çıxarmışdıq. Müştərilərimiz dünyanın ən böyük təkrarsığorta şirkətləri olub. Onların hər biri A+ kateqoriyalı beynəlxalq reytinqə malikdir. Prosesin uzun çəkməsinin səbəbi budur ki, şirkətlərin çoxsaylı sualları olur və onların hamısı cavablandırılır. Cavablar onları qane etdikdən sonra sığorta ödənişi “PAŞA Sığorta” vasitəsi ilə “Azərkosmos”a ödəniləcəkdir”, - deyə o qeyd edib.', '', '', '2023-07-12T06:17', '4', 'Active', '8f437ea5-dd89-35a6-9851-53a0548857d1_850.jpg', '.jpg', 1, '2023-07-06 01:17:48', '', ''),
(48, '“BakıKart” mobil tətbiqi bu gündən fəaliyyətə başlayır', '', '', '“BakıKart” mobil tətbiqi bu gündən ölkə ərazisində rəsmi olaraq fəaliyyətə başlayacaq.\r\n\r\nOxu.Az xəbər verir ki, artıq tətbiq üzərindən səfərləri planlaşdırmaq, gediş üçün kart balansını artırmaq mümkün olacaq.\r\n\r\nBelə ki, tətbiqdə qeydiyyatdan keçmək üçün mobil telefon nömrəsini və şifrəni yazmaq kifayətdir.\r\n\r\nTətbiq üzərindən həmçinin asanlıqla marşrutları axtarmaq, təyinat yerinə ən yaxın dayanacaqları tapmaq və real vaxt rejimində avtobusları izləmək mümkündür.\r\n', '', '', '2023-07-08T03:18', '4', 'Active', '_ROM7702.jpg', '.jpg', 1, '2023-07-06 01:19:13', '', ''),
(49, '“İrAero” bu gündən Azərbaycana yeni reyslərə başlayır', '', '', '“Sukhoi Superjet” 100 təyyarəsi ilə həyata keçiriləcək.\r\n\r\nBakıdan uçuş çərşənbə axşamı yerli vaxtla saat 16:55-ə, Saratov şəhərinə eniş isə 19:05-ə təyin olunub. Dönüş reysi yerli vaxtla saat 20:20, Azərbaycanın paytaxtına eniş 22:55-ə nəzərdə tutulub. Birtərəfli biletin qiyməti 15 000 rubldan (təxminən 303 manat) başlayır.\r\nQeyd edək ki, “İrAero” aviaşirkəti Novosibirsk, Kazan, Yekaterinburq, Samara, Sankt-Peterburq və s. şəhərlərdən Azərbaycana müntəzəm reyslər həyata keçirir.', '', '', '2023-07-22T01:28', '3', 'Active', 'WhatsApp_Image_2023-07-04_at_09_29_12.jpg', '.jpg', 1, '2023-07-06 01:22:15', '', ''),
(50, '“Ferrari” 50 ildən sonra yarışa qayıdaraq Le Manda qalib gəldi', '', '', 'Britaniyalı Ceyms Kalado və italiyalılar Antonio Covinazi və Alessandro Pyer Qvididən ibarət İtaliyanın “Ferrari” komandasının heyəti bazar günü “Hiperkarlar”ın əsas sinfi üzrə “24 saat Le Man” yarış marafonunun qalibi olub.\r\n\r\nİkinci yeri “Toyota”, üçüncü yeri isə “Cadillac”ın ekipajı tutub.\r\n\r\nQeyd edək ki, “Ferrari” 1973-cü ildən bəri ilk dəfə əsas marafon sinfində iştirak edib.\r\n\r\n“24 saat Le Man” marafonu bu il 91-ci dəfə keçirilib. İlk yarış isə 100 il öncə - 1923-cü ildə baş tutub.\r\nMarafon dünyanın ən məşhur və populyar yarışlarından biridir. Onun əsasında onlarla film çəkilib. Yarışda qalib olmaq istənilən avtomobil istehsalçısı üçün çox prestijli sayılır. “Porsche” komandası marafonda 19 dəfə qalib gələrək yarışın tarixində ən uğurlu komanda olub.', '', '', '2023-07-30T03:24', '3', 'Active', '6482180f25245.jpg', '.jpg', 1, '2023-07-06 01:24:34', '', ''),
(51, 'Azərbaycanda utilizasiyaya veriləcək maşınlara görə birdəfəlik ödəniş məbləğləri nə qədər olacaq?', '', '', 'Azərbaycanda utilizasiyaya verilən nəqliyyat vasitələri üzrə birdəfəlik ödəniş məbləğləri nəqliyyat vasitələrinin kateqoriyası üzrə dəyişəcək.\r\n\r\n“Report” xəbər verir ki, bunu Milli Məclisin Təbii ehtiyatlar, energetika və ekologiya, İqtisadi siyasət, sənaye və sahibkarlıq komitələrinin birgə iclasında “Təmiz Şəhər” ASC-nin Hüquq şöbəsinin müdir müavini Mirzə Laçınov bildirib.\r\n\r\n“Burada beynəlxalq kateqoriyaları nəzərə almışıq. Məsələn, M-1 və başqa kənd təsərrüfatı üzrə istifadə olunan nəqliyyat vasitələri və digər texnoloji nəqliyyat vasitələri kateqoriyalar üzrə fərqləndirilir. Burada məbləğlər ən aşağı A və A-1 kateqoriyaları üzrə 200 manatdan, ümumi minik avtomobilləri üçün 1 500 manatdan, digər həcmi böyük yük avtomobilləri və digərləri üçün isə maksimum 3 min manatdan nəzərdə tutulur.', '', '', '2023-07-16T07:25', '3', 'Active', '_ROM1164.jpg', '.jpg', 1, '2023-07-06 01:25:58', '', ''),
(54, 'nnnnnnnn', 'nnnnnnnn', 'ZUUZUZUZUZUZU', 'nnnnnnnn', '', 'nnnnnnnn', '2023-07-22T01:39', '3', 'Active', 'FotoJet_-_2023-06-30T005457_6713.jpg', '.jpg', 1, '2023-07-20 01:40:05', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_email_list`
--

CREATE TABLE `user_email_list` (
  `u_e_id` int(11) NOT NULL,
  `u_e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_email_list`
--

INSERT INTO `user_email_list` (`u_e_id`, `u_e_mail`) VALUES
(1, 'ezimemelikzade@gmail.com'),
(2, 'melikzadeazima@gmail.com'),
(3, '        $id = $this->security->xss_clean($id);'),
(4, '<script>alert(\"You are hacked by Azima ;)\")</script>'),
(5, '[removed]alert&#40;\"You are hacked by Azima ;&#41;\")[removed]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `user_email_list`
--
ALTER TABLE `user_email_list`
  ADD PRIMARY KEY (`u_e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_email_list`
--
ALTER TABLE `user_email_list`
  MODIFY `u_e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
