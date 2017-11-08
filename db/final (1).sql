-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2017 at 10:02 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`) VALUES
(1),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `advertisment`
--

DROP TABLE IF EXISTS `advertisment`;
CREATE TABLE IF NOT EXISTS `advertisment` (
  `advert_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'at least 100',
  `image` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'filepath',
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`advert_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisment`
--

INSERT INTO `advertisment` (`advert_id`, `title`, `description`, `image`, `start_time`, `end_time`) VALUES
(1, 'oglas_1 . De illis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Frater et T. De illis, cum volemus. Haec dicuntur inconstantissime. ', 'https://dummyimage.com/658x831.jpg/5521aa/5114f8', '12:06:47', '19:06:47'),
(2, 'oglas_2 dem, inqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tuo vero id quidem, inquam, arbitratu. Quid igitur, inquit, eos responsuros putas? Sed quot homines, tot sententiae; Honesta oratio, Socratica, Platonis etiam. Simus igitur contenti his. Si longus, levis; ', 'https://dummyimage.com/635x801.jpg/1272d8/72e712', '12:06:47', '19:06:47'),
(3, 'oglas_3 ant? Duo R', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Idem adhuc; Ut pulsi recurrant? Duo Reges: constructio interrete. ', 'https://dummyimage.com/473x813.jpg/cdf1ea/69918d', '12:06:48', '15:06:48'),
(4, 'oglas_4 ci scilice', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Stoici scilicet. Recte, inquit, intellegis. Neutrum vero, inquit ille. Duo Reges: constructio interrete. ', 'https://dummyimage.com/747x342.jpg/627154/fb5ac4', '12:06:48', '16:06:48'),
(5, 'oglas_5 nsectetur ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid sequatur, quid repugnet, vident. Omnis enim est natura diligens sui. ', 'https://dummyimage.com/832x864.jpg/b4f513/e3812e', '12:06:48', '19:06:48'),
(6, 'oglas_6 ontenti hi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venit ad extremum; Quis enim redargueret? Simus igitur contenti his. Idem adhuc; Reguli reiciendam; ', 'https://dummyimage.com/503x251.jpg/c9dba1/0b7926', '12:06:48', '16:06:48'),
(7, 'oglas_7 Reges: co', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pauca mutat vel plura sane; In schola desinis. Frater et T. Quis enim redargueret? Facillimum id quidem est, inquam. Duo Reges: constructio interrete. ', 'https://dummyimage.com/735x783.jpg/f070f5/28f644', '12:06:48', '13:06:48'),
(8, 'oglas_8 sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Cur, nisi quod turpis oratio est? Ut pulsi recurrant? Quis negat? Cur id non ita fit? ', 'https://dummyimage.com/503x330.jpg/da0070/09e27b', '12:06:48', '18:06:48'),
(9, 'oglas_9 Archytam? ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Istic sum, inquit. Cur post Tarentum ad Archytam? Duo Reges: constructio interrete. Aliter homines, aliter philosophos loqui putas oportere? Numquam facies. Sed in rebus apertissimis nimium longi sumus. ', 'https://dummyimage.com/782x370.jpg/8b411a/c7a027', '12:06:48', '20:06:48'),
(10, 'oglas_10 adipiscin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praeclarae mortes sunt imperatoriae; Contineo me ab exemplis. Pauca mutat vel plura sane; Quis istud, quaeso, nesciebat? Quippe: habes enim a rhetoribus; ', 'https://dummyimage.com/546x378.jpg/6d5cdf/8e77be', '12:06:48', '19:06:48'),
(11, 'oglas_11 Vestri hae', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Primum divisit ineleganter; Nihil ad rem! Ne sit sane; Duo Reges: constructio interrete. Vestri haec verecundius, illi fortasse constantius. Praeteritis, inquit, gaudeo. Addidisti ad extremum etiam indoctum fuisse. Contineo me ab exemplis. ', 'https://dummyimage.com/772x227.jpg/c03ff3/95053a', '12:06:49', '21:06:49'),
(12, 'oglas_12 udicium pu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis negat? Si quae forte-possumus. Bestiarum vero nullum iudicium puto. Ostendit pedes et pectus. ', 'https://dummyimage.com/434x995.jpg/8495ee/b08e93', '12:06:49', '17:06:49'),
(13, 'oglas_13 it, modo? ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Que Manilium, ab iisque M. Sed virtutem ipsam inchoavit, nihil amplius. Pugnant Stoici cum Peripateticis. Et quidem, inquit, vehementer errat; Explanetur igitur. Duo Reges: constructio interrete. Quonam, inquit, modo? ', 'https://dummyimage.com/506x954.jpg/5ba5e1/d45220', '12:06:49', '13:06:49'),
(14, 'oglas_14 tu dicis b', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tamen intellego quid velit. Primum quid tu dicis breve? Duo Reges: constructio interrete. Quis enim redargueret? ', 'https://dummyimage.com/765x379.jpg/1e2736/07b9e7', '12:06:49', '18:06:49'),
(15, 'oglas_15 io interre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid de Pythagora? Recte, inquit, intellegis. Duo Reges: constructio interrete. A mene tu? Honesta oratio, Socratica, Platonis etiam. Sit sane ista voluptas. ', 'https://dummyimage.com/584x748.jpg/096d55/db4113', '12:06:49', '21:06:49'),
(16, 'oglas_16 m? Et non ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fortemne possumus dicere eundem illum Torquatum? Et non ex maxima parte de tota iudicabis? In schola desinis. Murenam te accusante defenderem. Vide, quaeso, rectumne sit. Quae sequuntur igitur? ', 'https://dummyimage.com/540x733.jpg/07f353/825a74', '12:06:49', '21:06:49'),
(17, 'oglas_17 dolor sit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Memini me adesse P. Sed tamen intellego quid velit. Tibi hoc incredibile, quod beatissimum. Nihil opus est exemplis hoc facere longius. ', 'https://dummyimage.com/806x210.jpg/c06cfe/fdee7b', '12:06:49', '15:06:49'),
(18, 'oglas_18 gestiant?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae diligentissime contra Aristonem dicuntur a Chryippo. Nam quid possumus facere melius? Nihilo magis. Maximus dolor, inquit, brevis est. Non semper, inquam; Ut id aliis narrare gestiant? ', 'https://dummyimage.com/358x255.jpg/13e08c/49e901', '12:06:49', '14:06:49'),
(19, 'oglas_19 onsectetur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid vero? Negare non possum. Confecta res esset. Iam in altera philosophiae parte. Duo Reges: constructio interrete. Si quae forte-possumus. ', 'https://dummyimage.com/972x743.jpg/a5027e/06567e', '12:06:50', '22:06:50'),
(20, 'oglas_20 ipsum dol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Immo videri fortasse. A mene tu? Tum Torquatus: Prorsus, inquit, assentior; Prave, nequiter, turpiter cenabat; ', 'https://dummyimage.com/821x346.jpg/0a5c3f/444196', '12:06:50', '21:06:50'),
(21, 'oglas_21 : construc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pollicetur certe. Dat enim intervalla et relaxat. Duo Reges: constructio interrete. Quid est igitur, inquit, quod requiras? Si longus, levis; ', 'https://dummyimage.com/881x543.jpg/036a81/6acf31', '12:06:50', '19:06:50'),
(22, 'oglas_22 s loquitur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo modo autem philosophus loquitur? Vide, quaeso, rectumne sit. Quae cum dixisset, finem ille. Duo Reges: constructio interrete. Erat enim Polemonis. Quis istud possit, inquit, negare? Recte dicis; ', 'https://dummyimage.com/927x807.jpg/15095f/20499c', '12:06:50', '15:06:50'),
(23, 'oglas_23 ectetur ad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Iam in altera philosophiae parte. Cur deinde Metrodori liberos commendas? Duo Reges: constructio interrete. Quid nunc honeste dicit? ', 'https://dummyimage.com/333x212.jpg/6f12f2/9bcb52', '12:06:50', '14:06:50'),
(24, 'oglas_24 Reges: co', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urgent tamen et nihil remittunt. Primum quid tu dicis breve? Tum mihi Piso: Quid ergo? Duo Reges: constructio interrete. Sed residamus, inquit, si placet. Confecta res esset. Easdemne res? ', 'https://dummyimage.com/476x635.jpg/32fc8d/63bf52', '12:06:50', '18:06:50'),
(25, 'oglas_25 multa. Qui', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Sed nimis multa. Quid censes in Latino fore? Rationis enim perfectio est virtus; ', 'https://dummyimage.com/730x350.jpg/591ec0/897f4d', '12:06:50', '14:06:50'),
(26, 'oglas_26 terrete. E', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velut ego nunc moveor. Restinguet citius, si ardentem acceperit. Eaedem res maneant alio modo. Duo Reges: constructio interrete. Eadem nunc mea adversum te oratio est. At enim hic etiam dolore. Quaerimus enim finem bonorum. ', 'https://dummyimage.com/870x433.jpg/ad7f48/f02034', '12:06:50', '21:06:50'),
(27, 'oglas_27 errete. Re', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ostendit pedes et pectus. Certe non potest. Quis enim redargueret? Non igitur bene. Duo Reges: constructio interrete. Respondeat totidem verbis. Facile est hoc cernere in primis puerorum aetatulis. ', 'https://dummyimage.com/270x757.jpg/db753a/f04671', '12:06:51', '17:06:51'),
(28, 'oglas_28 tur adipis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis est tam dissimile homini. Tubulo putas dicere? Nihil opus est exemplis hoc facere longius. Hoc mihi cum tuo fratre convenit. Sed nimis multa. Efficiens dici potest. ', 'https://dummyimage.com/307x799.jpg/3ce70f/f71994', '12:06:51', '20:06:51'),
(29, 'oglas_29 r sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Audeo dicere, inquit. Poterat autem inpune; Nunc vides, quid faciat. Quae cum dixisset paulumque institisset, Quid est? ', 'https://dummyimage.com/354x433.jpg/d41193/cebb9f', '12:06:51', '19:06:51'),
(30, 'oglas_30 adesse po', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Apud ceteros autem philosophos, qui quaesivit aliquid, tacet; Iam enim adesse poterit. ', 'https://dummyimage.com/989x734.jpg/686320/6b67e9', '12:06:51', '14:06:51'),
(31, 'oglas_31 id ergo? H', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hunc vos beatum; Tum mihi Piso: Quid ergo? Hunc vos beatum; Zenonis est, inquam, hoc Stoici. ', 'https://dummyimage.com/783x777.jpg/de345b/46aae4', '12:06:51', '20:06:51'),
(32, 'oglas_32 inquit, o', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Memini vero, inquam; Quid est igitur, inquit, quod requiras? Cave putes quicquam esse verius. Inde igitur, inquit, ordiendum est. Duo Reges: constructio interrete. Nihil enim hoc differt. ', 'https://dummyimage.com/313x838.jpg/89fd48/6d79f0', '12:06:51', '19:06:51'),
(33, 'oglas_33 sum dolor ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quippe: habes enim a rhetoribus; Non semper, inquam; Quis Aristidem non mortuum diligit? Quid ergo hoc loco intellegit honestum? ', 'https://dummyimage.com/554x790.jpg/82cb19/06769c', '12:06:51', '16:06:51'),
(34, 'oglas_34 scing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Recte, inquit, intellegis. Haec para/doca illi, nos admirabilia dicamus. Certe, nisi voluptatem tanti aestimaretis. Ratio enim nostra consentit, pugnat oratio. Si longus, levis; Sed haec in pueris; ', 'https://dummyimage.com/481x910.jpg/c64920/be9780', '12:06:52', '13:06:52'),
(35, 'oglas_35 met, conse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praeteritis, inquit, gaudeo. Quare ad ea primum, si videtur; Dicimus aliquem hilare vivere; Huius, Lyco, oratione locuples, rebus ipsis ielunior. Omnis enim est natura diligens sui. Bonum integritas corporis: misera debilitas. An potest cupiditas finiri? Ubi ut eam caperet aut quando? ', 'https://dummyimage.com/269x272.jpg/5fb239/914621', '12:06:52', '15:06:52'),
(36, 'oglas_36 ipiscing e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid de Pythagora? Quare conare, quaeso. Quid sequatur, quid repugnet, vident. Duo Reges: constructio interrete. Odium autem et invidiam facile vitabis. Tanta vis admonitionis inest in locis; ', 'https://dummyimage.com/494x751.jpg/694d15/a52668', '12:06:52', '13:06:52'),
(37, 'oglas_37 Duo Reges', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Istic sum, inquit. Duo Reges: constructio interrete. Eadem fortitudinis ratio reperietur. Ergo, inquit, tibi Q. ', 'https://dummyimage.com/529x623.jpg/f92a0b/5b33bd', '12:06:52', '14:06:52'),
(38, 'oglas_38 m, inquam,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. At multis se probavit. Cui Tubuli nomen odio non est? Scrupulum, inquam, abeunti; Hoc Hieronymus summum bonum esse dixit. Sin aliud quid voles, postea. Hoc Hieronymus summum bonum esse dixit. Age sane, inquam. Duo Reges: constructio interrete. ', 'https://dummyimage.com/950x962.jpg/99ab53/4f3dba', '12:06:52', '17:06:52'),
(39, 'oglas_39 interrete', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Haec para/doca illi, nos admirabilia dicamus. Quod totum contra est. Si longus, levis. Duo Reges: constructio interrete. ', 'https://dummyimage.com/332x842.jpg/cbac87/d085dd', '12:06:52', '20:06:52'),
(40, 'oglas_40 , quo modo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tenent mordicus. Si longus, levis; Quae similitudo in genere etiam humano apparet. Refert tamen, quo modo. Tubulo putas dicere? Duo Reges: constructio interrete. Laboro autem non sine causa; ', 'https://dummyimage.com/850x540.jpg/46f5c5/569036', '12:06:52', '14:06:52'),
(41, 'oglas_41 ges: const', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Iam in altera philosophiae parte. Duo Reges: constructio interrete. Bonum patria: miserum exilium. Sedulo, inquam, faciam. Prioris generis est docilitas, memoria; Quae sequuntur igitur? Non semper, inquam; Est, ut dicis, inquam. ', 'https://dummyimage.com/278x730.jpg/6e1aba/d70f71', '12:06:53', '22:06:53'),
(42, 'oglas_42 t. Si long', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si longus, levis. Quod totum contra est. ', 'https://dummyimage.com/794x888.jpg/88a41e/9ee951', '12:06:53', '18:06:53'),
(43, 'oglas_43 tur adipis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quae tandem ista ratio est? Si quae forte-possumus. ', 'https://dummyimage.com/969x887.jpg/7b4c37/17e1f3', '12:06:53', '17:06:53'),
(44, 'oglas_44 olor sit a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo tandem modo? Rationis enim perfectio est virtus; Quid de Pythagora? Qui-vere falsone, quaerere mittimus-dicitur oculis se privasse; Quid ad utilitatem tantae pecuniae? In schola desinis. ', 'https://dummyimage.com/581x203.jpg/c0976c/338cfa', '12:06:53', '19:06:53'),
(45, 'oglas_45 pedes et ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae cum dixisset paulumque institisset, Quid est? Age, inquies, ista parva sunt. Duo Reges: constructio interrete. Immo alio genere; Ostendit pedes et pectus. Quonam, inquit, modo? Quid de Pythagora? Dat enim intervalla et relaxat. ', 'https://dummyimage.com/603x312.jpg/ead355/1288b8', '12:06:53', '21:06:53'),
(46, 'oglas_46 ti; Vestri', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rationis enim perfectio est virtus; Urgent tamen et nihil remittunt. Scrupulum, inquam, abeunti; Vestri haec verecundius, illi fortasse constantius. ', 'https://dummyimage.com/812x689.jpg/779b7e/ab95ad', '12:06:53', '15:06:53'),
(47, 'oglas_47 r adipisci', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hos contra singulos dici est melius. At enim hic etiam dolore. Tum ille: Ain tandem? Duo Reges: constructio interrete. Neutrum vero, inquit ille. An tu me de L. ', 'https://dummyimage.com/581x407.jpg/32ceca/1458a7', '12:06:53', '14:06:53'),
(48, 'oglas_48 us. De ill', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ego vero isti, inquam, permitto. Cave putes quicquam esse verius. De illis, cum volemus. Nulla erit controversia. Duo Reges: constructio interrete. Tum mihi Piso: Quid ergo? Aperiendum est igitur, quid sit voluptas; ', 'https://dummyimage.com/486x542.jpg/e5d859/ba1d25', '12:06:53', '21:06:53'),
(49, 'oglas_49 Efficiens ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Efficiens dici potest. Omnis enim est natura diligens sui. ', 'https://dummyimage.com/703x970.jpg/e9c0ff/239a9c', '12:06:54', '21:06:54'),
(50, 'oglas_50 Reges: co', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi enim erit isdem istis fortasse iam utendum. Optime, inquam. Sic consequentibus vestris sublatis prima tolluntur. Duo Reges: constructio interrete. ', 'https://dummyimage.com/205x364.jpg/6f1e74/345234', '12:06:54', '17:06:54'),
(51, 'oglas_51 construct', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis est tam dissimile homini. Duo Reges: constructio interrete. Bestiarum vero nullum iudicium puto. Omnia contraria, quos etiam insanos esse vultis. ', 'https://dummyimage.com/768x201.jpg/334214/052676', '12:06:54', '13:06:54'),
(52, 'oglas_52 do conveni', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hic ambiguo ludimur. Urgent tamen et nihil remittunt. Haec quo modo conveniant, non sane intellego. ', 'https://dummyimage.com/567x756.jpg/e1f4dd/91d45a', '12:06:54', '19:06:54'),
(53, 'oglas_53 egis. Quod', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quare attende, quaeso. Idem iste, inquam, de voluptate quid sentit? Recte, inquit, intellegis. Quod cum dixissent, ille contra. ', 'https://dummyimage.com/577x302.jpg/d2c195/982a05', '12:06:54', '14:06:54'),
(54, 'oglas_54 reiectus;', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suo genere perveniant ad extremum; Quid nunc honeste dicit? Quo modo autem philosophus loquitur? Venit ad extremum; Itaque hic ipse iam pridem est reiectus; ', 'https://dummyimage.com/573x716.jpg/c8ef48/e8d090', '12:06:54', '16:06:54'),
(55, 'oglas_55 mortuum d', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis Aristidem non mortuum diligit? Ita nemo beato beatior. Minime vero istorum quidem, inquit. Si longus, levis; Moriatur, inquit. Ut aliquid scire se gaudeant? Graece donan, Latine voluptatem vocant. Hoc tu nunc in illo probas. ', 'https://dummyimage.com/731x271.jpg/6503d0/72131f', '12:06:54', '21:06:54'),
(56, 'oglas_56 consectetu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Iam in altera philosophiae parte. Quid me istud rogas? Ut aliquid scire se gaudeant? Quis hoc dicit? Si quae forte-possumus. Tria genera bonorum; ', 'https://dummyimage.com/823x845.jpg/2811b3/745ef0', '12:06:54', '13:06:54'),
(57, 'oglas_57 me adesse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum incolumis acies: misera caecitas. Quid adiuvas? Memini me adesse P. Numquam facies. Ne discipulum abducam, times. Cur post Tarentum ad Archytam? ', 'https://dummyimage.com/227x710.jpg/8def5e/e59373', '12:06:54', '16:06:54'),
(58, 'oglas_58 psum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Iam contemni non poteris. Quae sequuntur igitur? Nescio quo modo praetervolavit oratio. Ita prorsus, inquam; ', 'https://dummyimage.com/316x943.jpg/bc20f6/a52ad6', '12:06:56', '19:06:56'),
(59, 'oglas_59 inpune; Qu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Poterat autem inpune; Quod cum dixissent, ille contra. Duo Reges: constructio interrete. ', 'https://dummyimage.com/467x617.jpg/545316/36455c', '12:06:56', '21:06:56'),
(60, 'oglas_60 ui. Neutru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnis enim est natura diligens sui. Neutrum vero, inquit ille. Quid enim? Sint ista Graecorum; Sint ista Graecorum; Sed residamus, inquit, si placet. ', 'https://dummyimage.com/454x809.jpg/577900/9cc3c8', '12:06:56', '13:06:56'),
(61, 'oglas_61 e hoc meli', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Equidem e Cn. Ita prorsus, inquam; At ille pellit, qui permulcet sensum voluptate. Falli igitur possumus. Duo Reges: constructio interrete. Nihil sane. Multoque hoc melius nos veriusque quam Stoici. Age sane, inquam. ', 'https://dummyimage.com/451x592.jpg/1b2f8d/3da991', '12:06:57', '18:06:57'),
(62, 'oglas_62 dolor sit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Negare non possum. Cur id non ita fit? Duo Reges: constructio interrete. Optime, inquam. ', 'https://dummyimage.com/235x243.jpg/5757c6/6c143d', '12:06:57', '20:06:57'),
(63, 'oglas_63 ng elit. R', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Recte dicis; Idemne, quod iucunde? At iam decimum annum in spelunca iacet. Duo Reges: constructio interrete. Quibus ego vehementer assentior. Memini vero, inquam; ', 'https://dummyimage.com/780x436.jpg/2b5cb4/ffbb80', '12:06:57', '13:06:57'),
(64, 'oglas_64 ime, inqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi enim satis est, ipsis non satis. Optime, inquam. Duo Reges: constructio interrete. ', 'https://dummyimage.com/260x647.jpg/297260/e37f8b', '12:06:58', '18:06:58'),
(65, 'oglas_65 o Reges: c', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud possit, inquit, negare? Quippe: habes enim a rhetoribus; Duo Reges: constructio interrete. Res enim concurrent contrariae. Sed tamen intellego quid velit. Sed fac ista esse non inportuna; ', 'https://dummyimage.com/451x750.jpg/482e1a/05f6fa', '12:06:58', '13:06:58'),
(66, 'oglas_66 met, conse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Haec dicuntur inconstantissime. Age sane, inquam. Iam in altera philosophiae parte. Quid ait Aristoteles reliquique Platonis alumni? Erat enim res aperta. Duo Reges: constructio interrete. Pugnant Stoici cum Peripateticis. ', 'https://dummyimage.com/328x219.jpg/a47ad0/1b6770', '12:06:58', '16:06:58'),
(67, 'oglas_67 raeclarae ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praeclarae mortes sunt imperatoriae; Nullus est igitur cuiusquam dies natalis. Easdemne res? ', 'https://dummyimage.com/867x531.jpg/967e92/006ec2', '12:06:58', '15:06:58'),
(68, 'oglas_68 Etiam bea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Collatio igitur ista te nihil iuvat. Sed plane dicit quod intellegit. Sed hoc sane concedamus. Duo Reges: constructio interrete. Et quidem, inquit, vehementer errat; Sullae consulatum? Etiam beatissimum? ', 'https://dummyimage.com/240x360.jpg/f016dc/cedc15', '12:06:58', '20:06:58'),
(69, 'oglas_69 oniam, si ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quippe: habes enim a rhetoribus; Duo Reges: constructio interrete. Quoniam, si dis placet, ab Epicuro loqui discimus. Istic sum, inquit. ', 'https://dummyimage.com/225x382.jpg/508ac2/528e84', '12:06:58', '18:06:58'),
(70, 'oglas_70 olor sit a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed plane dicit quod intellegit. Bonum incolumis acies: misera caecitas. Quae cum dixisset paulumque institisset, Quid est? Ne discipulum abducam, times. Nemo igitur esse beatus potest. ', 'https://dummyimage.com/597x871.jpg/1070a5/4cbe9a', '12:06:58', '18:06:58'),
(71, 'oglas_71 m dolor si', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed videbimus. Non est igitur voluptas bonum. Bonum incolumis acies: misera caecitas. Ita nemo beato beatior. ', 'https://dummyimage.com/729x902.jpg/24d7f5/991dcf', '12:06:59', '18:06:59'),
(72, 'oglas_72 consectet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Primum quid tu dicis breve? Bonum integritas corporis: misera debilitas. Quamquam te quidem video minime esse deterritum. ', 'https://dummyimage.com/396x750.jpg/3dab6f/15446a', '12:06:59', '18:06:59'),
(73, 'oglas_73 atica, Pla', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Honesta oratio, Socratica, Platonis etiam. Sint ista Graecorum; Quis Aristidem non mortuum diligit? Duo Reges: constructio interrete. Bonum integritas corporis: misera debilitas. Si longus, levis; ', 'https://dummyimage.com/575x289.jpg/dc17bb/049529', '12:06:59', '14:06:59'),
(74, 'oglas_74 Lorem ipsu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. At enim hic etiam dolore. Confecta res esset. Memini vero, inquam; An potest cupiditas finiri? Primum in nostrane potestate est, quid meminerimus? Duo Reges: constructio interrete. Quis enim redargueret? Ita prorsus, inquam; ', 'https://dummyimage.com/240x597.jpg/91807b/7407d5', '12:06:59', '17:06:59'),
(75, 'oglas_75 t. Verum h', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Verum hoc idem saepe faciamus. Simus igitur contenti his. Duo Reges: constructio interrete. Inde igitur, inquit, ordiendum est. Aliter autem vobis placet. Istic sum, inquit. Primum quid tu dicis breve? Si quidem, inquit, tollerem, sed relinquo. ', 'https://dummyimage.com/366x746.jpg/f24c41/2508fa', '12:06:59', '13:06:59'),
(76, 'oglas_76 etur adipi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Minime vero, inquit ille, consentit. Non semper, inquam; ', 'https://dummyimage.com/728x213.jpg/d1fca6/ddedaf', '12:06:59', '21:06:59'),
(77, 'oglas_77 t, me dixi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Putabam equidem satis, inquit, me dixisse. Sullae consulatum? Equidem e Cn. Sint modo partes vitae beatae. Duo Reges: constructio interrete. Nihil sane. ', 'https://dummyimage.com/700x472.jpg/14c0bf/20c2f5', '12:06:59', '20:06:59'),
(78, 'oglas_78 e. Cur ius', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tenent mordicus. Negare non possum. Ut aliquid scire se gaudeant? Sed ille, ut dixi, vitiose. Duo Reges: constructio interrete. Cur iustitia laudatur? ', 'https://dummyimage.com/859x998.jpg/984c7d/f68e70', '12:06:00', '20:06:00'),
(79, 'oglas_79 Reges: co', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quoniam, si dis placet, ab Epicuro loqui discimus. Paria sunt igitur. Si enim ad populum me vocas, eum. Si quae forte-possumus. Duo Reges: constructio interrete. Paria sunt igitur. Perge porro; ', 'https://dummyimage.com/578x867.jpg/868ff0/1098b3', '12:06:00', '17:06:00'),
(80, 'oglas_80 longus, l', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Numquam facies. Duo Reges: constructio interrete. Ostendit pedes et pectus. Si longus, levis dictata sunt. In schola desinis. Si enim ad populum me vocas, eum. Cur, nisi quod turpis oratio est? Eadem nunc mea adversum te oratio est. ', 'https://dummyimage.com/433x351.jpg/889343/72803e', '12:06:00', '21:06:00'),
(81, 'oglas_81 l iuvat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Immo alio genere; Quonam modo? Videsne, ut haec concinant? Duo Reges: constructio interrete. Ille enim occurrentia nescio quae comminiscebatur; Quonam modo? Collatio igitur ista te nihil iuvat. ', 'https://dummyimage.com/600x930.jpg/dbfb41/e48fb9', '12:06:00', '18:06:00'),
(82, 'oglas_82 . Deprehen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rationis enim perfectio est virtus; At iam decimum annum in spelunca iacet. Non potes, nisi retexueris illa. Duo Reges: constructio interrete. Deprehensus omnem poenam contemnet. Quae sequuntur igitur? ', 'https://dummyimage.com/852x474.jpg/04a256/1f6dda', '12:06:00', '20:06:00'),
(83, 'oglas_83 hil sane. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam de isto magna dissensio est. Num quid tale Democritus? Hic nihil fuit, quod quaereremus. Eaedem res maneant alio modo. Nihil sane. Duo Reges: constructio interrete. ', 'https://dummyimage.com/565x461.jpg/cf2ae2/ec0d97', '12:06:00', '13:06:00'),
(84, 'oglas_84 s, inquam;', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Illa tamen simplicia, vestra versuta. Ille incendat? Ita prorsus, inquam; Easdemne res? Duo Reges: constructio interrete. Haec dicuntur inconstantissime. ', 'https://dummyimage.com/314x365.jpg/839750/74ed5d', '12:06:00', '17:06:00'),
(85, 'oglas_85 sum dolor ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Immo videri fortasse. Suo genere perveniant ad extremum; Nos cum te, M. Duo Reges: constructio interrete. Proclivi currit oratio. Haec para/doca illi, nos admirabilia dicamus. ', 'https://dummyimage.com/274x862.jpg/e5de66/0cb6f0', '12:06:00', '17:06:00'),
(86, 'oglas_86 olere. An ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zenonis est, inquam, hoc Stoici. Ac tamen hic mallet non dolere. An tu me de L. Pollicetur certe. Duo Reges: constructio interrete. ', 'https://dummyimage.com/220x625.jpg/da9cc6/b74921', '12:06:00', '17:06:00'),
(87, 'oglas_87 nquam; Vid', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Memini vero, inquam; Vide, quantum, inquam, fallare, Torquate. Tubulo putas dicere? Sed haec in pueris; Bonum integritas corporis: misera debilitas. ', 'https://dummyimage.com/327x331.jpg/b23b76/257c3b', '12:06:01', '19:06:01'),
(88, 'oglas_88 ristidem n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hic ambiguo ludimur. Duo Reges: constructio interrete. Esse enim, nisi eris, non potes. Quis Aristidem non mortuum diligit? Id Sextilius factum negabat. Falli igitur possumus. ', 'https://dummyimage.com/370x254.jpg/0bf24f/100a19', '12:06:01', '18:06:01'),
(89, 'oglas_89 uam Regulu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nihilo beatiorem esse Metellum quam Regulum. Inquit, dasne adolescenti veniam? Sed videbimus. In schola desinis. ', 'https://dummyimage.com/524x269.jpg/f2314d/4ac042', '12:06:01', '17:06:01'),
(90, 'oglas_90 onare, qua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praeclare hoc quidem. Quare conare, quaeso. Restatis igitur vos; Occultum facinus esse potuerit, gaudebit; Cur, nisi quod turpis oratio est? ', 'https://dummyimage.com/564x652.jpg/b9dab4/b54211', '12:06:01', '18:06:01'),
(91, 'oglas_91 adipiscin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tanta vis admonitionis inest in locis; An nisi populari fama? ', 'https://dummyimage.com/664x476.jpg/e85409/5b0421', '12:06:01', '17:06:01'),
(92, 'oglas_92 on igitur ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nihil illinc huc pervenit. Quid censes in Latino fore? Non igitur bene. Suo genere perveniant ad extremum; ', 'https://dummyimage.com/601x818.jpg/24ad92/c89575', '12:06:01', '15:06:01'),
(93, 'oglas_93 et T. Nob', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hoc sane concedamus. Ut id aliis narrare gestiant? Frater et T. Nobis aliter videtur, recte secusne, postea; Duo Reges: constructio interrete. Respondeat totidem verbis. ', 'https://dummyimage.com/548x752.jpg/78c96a/9b16e5', '12:06:02', '18:06:02'),
(94, 'oglas_94 ur adipisc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scaevolam M. Non laboro, inquit, de nomine. Facete M. Istic sum, inquit. Duo Reges: constructio interrete. ', 'https://dummyimage.com/282x553.jpg/9e96b1/3b1765', '12:06:02', '16:06:02'),
(95, 'oglas_95 his ordia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Tubulo putas dicere? Itaque ab his ordiamur. Ut pulsi recurrant? ', 'https://dummyimage.com/777x896.jpg/5c90e8/b94e15', '12:06:02', '16:06:02'),
(96, 'oglas_96 et relaxa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quamquam tu hanc copiosiorem etiam soles dicere. Satis est ad hoc responsum. Dat enim intervalla et relaxat. Quis istud, quaeso, nesciebat? Hunc vos beatum; ', 'https://dummyimage.com/206x456.jpg/15a2ad/0cfa02', '12:06:02', '18:06:02'),
(97, 'oglas_97 uem maximu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Comprehensum, quod cognitum non habet? Quibusnam praeteritis? Duo Reges: constructio interrete. Sed nimis multa. Quae sequuntur igitur? Deinde dolorem quem maximum? ', 'https://dummyimage.com/348x709.jpg/c27a8f/f39cb0', '12:06:02', '19:06:02'),
(98, 'oglas_98 er loquare', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Itaque hic ipse iam pridem est reiectus; Quod quidem iam fit etiam in Academia. Quod ea non occurrentia fingunt, vincunt Aristonem; Duo Reges: constructio interrete. Immo videri fortasse. Quis istud possit, inquit, negare? Ut pulsi recurrant? Dici enim nihil potest verius. Quid ergo attinet gloriose loqui, nisi constanter loquare? ', 'https://dummyimage.com/976x328.jpg/da6f75/e138cf', '12:06:02', '20:06:02'),
(99, 'oglas_99 m. Duo Reg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si longus, levis dictata sunt. Si longus, levis dictata sunt. Tibi hoc incredibile, quod beatissimum. Si enim ad populum me vocas, eum. Duo Reges: constructio interrete. Nam de isto magna dissensio est. ', 'https://dummyimage.com/664x791.jpg/2bbf77/ec567d', '12:06:02', '16:06:02'),
(100, 'oglas_100 est, inqua', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit enim idem caecus, debilis. De hominibus dici non necesse est. Quorum altera prosunt, nocent altera. Inquit, dasne adolescenti veniam? Facillimum id quidem est, inquam. Duo Reges: constructio interrete. Tollenda est atque extrahenda radicitus. ', 'https://dummyimage.com/788x770.jpg/2f2503/c509cc', '12:06:02', '18:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `advert_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `time` timestamp NOT NULL,
  `rating` float DEFAULT NULL,
  PRIMARY KEY (`advert_id`,`customer_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assigned`
--

DROP TABLE IF EXISTS `assigned`;
CREATE TABLE IF NOT EXISTS `assigned` (
  `moderator_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`moderator_id`,`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assigned`
--

INSERT INTO `assigned` (`moderator_id`, `category_id`) VALUES
(4, 1),
(4, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(4, 8),
(3, 9),
(3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `belongs_to`
--

DROP TABLE IF EXISTS `belongs_to`;
CREATE TABLE IF NOT EXISTS `belongs_to` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `advert_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`category_id`,`advert_id`),
  KEY `advert_id` (`advert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `belongs_to`
--

INSERT INTO `belongs_to` (`category_id`, `advert_id`) VALUES
(10, 1),
(3, 2),
(1, 3),
(2, 4),
(6, 5),
(6, 6),
(2, 7),
(6, 8),
(5, 9),
(4, 10),
(5, 11),
(5, 12),
(6, 13),
(5, 14),
(4, 15),
(6, 16),
(2, 17),
(4, 18),
(10, 19),
(1, 20),
(2, 21),
(2, 22),
(10, 23),
(6, 24),
(8, 25),
(2, 26),
(5, 27),
(5, 28),
(1, 29),
(5, 30),
(10, 31),
(5, 32),
(2, 33),
(5, 34),
(6, 35),
(7, 36),
(1, 37),
(2, 38),
(9, 39),
(8, 40),
(10, 41),
(1, 42),
(1, 43),
(2, 44),
(9, 45),
(10, 46),
(6, 47),
(5, 48),
(1, 49),
(6, 50),
(7, 51),
(10, 52),
(3, 53),
(7, 54),
(9, 55),
(3, 56),
(1, 57),
(9, 58),
(2, 59),
(6, 60),
(1, 61),
(10, 62),
(4, 63),
(8, 64),
(8, 65),
(7, 66),
(4, 67),
(10, 68),
(9, 69),
(7, 70),
(9, 71),
(9, 72),
(9, 73),
(7, 74),
(10, 75),
(8, 76),
(6, 77),
(5, 78),
(3, 79),
(3, 80),
(3, 81),
(7, 82),
(8, 83),
(8, 84),
(9, 85),
(2, 86),
(1, 87),
(8, 88),
(7, 89),
(4, 90),
(4, 91),
(6, 92),
(5, 93),
(4, 94),
(2, 95),
(1, 96),
(7, 97),
(7, 98),
(7, 99),
(2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'C'),
(5, 'C#'),
(4, 'C++'),
(3, 'Java'),
(2, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'from users',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` float DEFAULT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `rating`, `image`, `description`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'Milos', NULL, NULL, NULL),
(3, 'ADMINISTRATOR', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `firme`
--

DROP TABLE IF EXISTS `firme`;
CREATE TABLE IF NOT EXISTS `firme` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `telefon` varchar(200) NOT NULL DEFAULT '+381123456',
  `adresa` varchar(200) NOT NULL DEFAULT 'Ulica i broj',
  `gps` varchar(200) NOT NULL DEFAULT '00.00,00.00',
  `logo` varchar(500) NOT NULL DEFAULT 'http://via.placeholder.com/150x150?text=Logo+Firme',
  `onama` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firme`
--

INSERT INTO `firme` (`id`, `name`, `telefon`, `adresa`, `gps`, `logo`, `onama`) VALUES
(25, 'test3', '+381123456', 'Ulica i broj', '00.00,00.00', 'http://via.placeholder.com/150x150?text=Logo+Firme', NULL),
(4, 'Nordeus', '+381123456', 'Ulica i broj', '00.00,00.00', 'http://via.placeholder.com/150x150?text=Logo+Firme', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

DROP TABLE IF EXISTS `moderator`;
CREATE TABLE IF NOT EXISTS `moderator` (
  `id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`) VALUES
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pitanja`
--

DROP TABLE IF EXISTS `pitanja`;
CREATE TABLE IF NOT EXISTS `pitanja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` int(20) NOT NULL,
  `pitanje` varchar(200) DEFAULT NULL,
  `odgovor1` varchar(200) NOT NULL,
  `odgovor2` varchar(200) NOT NULL,
  `odgovor3` varchar(200) NOT NULL,
  `odgovor4` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pitanja`
--

INSERT INTO `pitanja` (`id`, `test`, `pitanje`, `odgovor1`, `odgovor2`, `odgovor3`, `odgovor4`) VALUES
(1, 8, 'Izbaci uljeza', 'new()', 'main()', 'void', 'int'),
(2, 8, 'Koja od navedenih je logicka operacija?', 'Svi ponudjeni', '&&', '||', '!'),
(3, 8, 'Koja funkcija sluzi za oslobadjanje memorijskog prostora?', 'free();', 'printf();', 'main();', 'dealloc();'),
(4, 8, 'Koja od navedenih je NOT operacija?', '!', '+', '~', '!='),
(5, 9, 'Koja od navedenih je logicka operacija?', 'Svi ponudjeni', '&&', '!', '||'),
(6, 9, 'Koja funkcija sluzi za oslobadjanje memorijskog prostora?', 'free();', 'printf();', 'main();', 'dealloc();'),
(7, 9, 'Koja od navedenih je NOT operacija?', '!', '+', '~', '!='),
(8, 9, 'Izbaci uljeza', 'new();', 'int a;', 'main();', 'void');

-- --------------------------------------------------------

--
-- Table structure for table `pitanja2`
--

DROP TABLE IF EXISTS `pitanja2`;
CREATE TABLE IF NOT EXISTS `pitanja2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` int(20) NOT NULL,
  `pitanje1` varchar(200) NOT NULL,
  `odgovor11` varchar(200) NOT NULL,
  `odgovor12` varchar(200) NOT NULL,
  `odgovor13` varchar(200) NOT NULL,
  `odgovor14` varchar(200) NOT NULL,
  `pitanje2` varchar(200) NOT NULL,
  `odgovor21` varchar(200) NOT NULL,
  `odgovor22` varchar(200) NOT NULL,
  `odgovor23` varchar(200) NOT NULL,
  `odgovor24` varchar(200) NOT NULL,
  `pitanje3` varchar(200) NOT NULL,
  `odgovor31` varchar(200) NOT NULL,
  `odgovor32` varchar(200) NOT NULL,
  `odgovor33` varchar(200) NOT NULL,
  `odgovor34` varchar(200) NOT NULL,
  `pitanje4` varchar(200) NOT NULL,
  `odgovor41` varchar(200) NOT NULL,
  `odgovor42` varchar(200) NOT NULL,
  `odgovor43` varchar(200) NOT NULL,
  `odgovor44` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pitanja2`
--

INSERT INTO `pitanja2` (`id`, `test`, `pitanje1`, `odgovor11`, `odgovor12`, `odgovor13`, `odgovor14`, `pitanje2`, `odgovor21`, `odgovor22`, `odgovor23`, `odgovor24`, `pitanje3`, `odgovor31`, `odgovor32`, `odgovor33`, `odgovor34`, `pitanje4`, `odgovor41`, `odgovor42`, `odgovor43`, `odgovor44`) VALUES
(1, 6, 'Pitanje 1', 'Tacan11', 'N11', 'n12', 'n13', 'Pitanje 2', 'tacan22', 'n21', 'n222', 'n2222', 'Pitanje 3', 'Tacan 3', 'Netacan 31', 'Netacan 32', 'Netacan 33', 'Pitanje 4', 'asjdnaskjdn', 'n', 'jnk', 'jnj');

-- --------------------------------------------------------

--
-- Table structure for table `polozene_vestine`
--

DROP TABLE IF EXISTS `polozene_vestine`;
CREATE TABLE IF NOT EXISTS `polozene_vestine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `score` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polozene_vestine`
--

INSERT INTO `polozene_vestine` (`id`, `test_id`, `user_id`, `score`) VALUES
(1, 8, 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `posao`
--

DROP TABLE IF EXISTS `posao`;
CREATE TABLE IF NOT EXISTS `posao` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firma` int(20) NOT NULL,
  `pozicija` varchar(100) NOT NULL,
  `opis` text NOT NULL,
  `istice` varchar(50) NOT NULL,
  `naziv` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posao`
--

INSERT INTO `posao` (`ID`, `firma`, `pozicija`, `opis`, `istice`, `naziv`) VALUES
(1, 4, 'Junior', 'Razvoj aplikacija u C programskom jeziku', '2017-11-24', 'C Developer');

-- --------------------------------------------------------

--
-- Table structure for table `posao_test`
--

DROP TABLE IF EXISTS `posao_test`;
CREATE TABLE IF NOT EXISTS `posao_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posao` int(20) NOT NULL,
  `test` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posao_test`
--

INSERT INTO `posao_test` (`id`, `posao`, `test`) VALUES
(1, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `posao_vestine`
--

DROP TABLE IF EXISTS `posao_vestine`;
CREATE TABLE IF NOT EXISTS `posao_vestine` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `posao` int(20) NOT NULL,
  `kategorija` int(5) NOT NULL,
  `tip` int(2) NOT NULL DEFAULT '0',
  `granica` int(5) NOT NULL,
  `koeficijent` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posao_vestine`
--

INSERT INTO `posao_vestine` (`ID`, `posao`, `kategorija`, `tip`, `granica`, `koeficijent`) VALUES
(1, 1, 1, 0, 60, 100);

-- --------------------------------------------------------

--
-- Table structure for table `prijavljen`
--

DROP TABLE IF EXISTS `prijavljen`;
CREATE TABLE IF NOT EXISTS `prijavljen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_posla` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `score` int(20) NOT NULL,
  `iskustvo` int(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promene`
--

DROP TABLE IF EXISTS `promene`;
CREATE TABLE IF NOT EXISTS `promene` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sajt` varchar(100) NOT NULL,
  `url` varchar(250) NOT NULL,
  `stanje` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `promena` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promene`
--

INSERT INTO `promene` (`id`, `sajt`, `url`, `stanje`, `datum`, `promena`) VALUES
(1, 'Nordeus', 'http://www.nordeus.com/careers.htm', 'Nordeus - Careers Nordeus Menu About us Games Careers Life in Belgrade News Contactada Blog Hackathon We are hiring Benefits Relocation FAQ All categories Art Engineering Community Marketing Business Game Design Human Resources All offices Belgrade Dublin Go Senior AnimatorArt Belgrade Want to make out-of-this-world characters come to life? Apply for this job Senior Technical ArtistArt Belgrade Love being a bridge between code and art? Apply for this job Senior UI Artist Art Belgrade SHAPE THE LOOK OF OUR GAMES! Apply for this job Technical Art DirectorArt Belgrade Are you a technical virtuoso? Apply for this job UI Artist Art Belgrade Nordeus is looking for a talented UI Artist to join our team in Belgrade. Apply for this job Junior Test Automation EngineerEngineering Belgrade Are you a brainy go-getter with a passion for excellence? Apply for this job Senior Rendering EngineerEngineering Belgrade You will be part of our Core Tech team developing tools, pipelines and frameworks for our mobile-AAA game authoring toolchain. Apply for this job Creative DirectorGame Design Belgrade Creative Director, Nordeus Apply for this job Lead Game DesignerGame Design Belgrade We believe great game design is a craft that requires the ability to quickly and visually communicate ideas as sketches and other very quick forms of rough prototypes. Apply for this job Lead Interaction DesignerGame Design Belgrade As a Lead Interaction Designer in Nordeus, you will be responsible for the quality bar related to Interaction Design across the studio. Apply for this job Senior System DesignerGame Design Belgrade As a Senior Systems Designer at Nordeus, you are a leader for the craft of systems design ensuring our games are designed to deliver a unique experience for our first, and every subsequent player. Apply for this job HR Manager / PartnerHuman Resources Belgrade HR Manager / Partner @ Nordeus Apply for this job Haven\'t found your happiness? Send us your CV Load more jobs ArtStation Facebook Glassdoor Instagram Linkedin Twitter YouTube twitter feed Meet Riley, a San Francisco-born football geek who happens to be our @topeleven Community Manager. How can Research Sprint help #gamedev teams? Contact Press Support Nordeus Hackathon © 2017 Nordeus. All rights Reserved var device = \'desktop\'; var officesJson = \'files/templates/nordeus/public/assets/json/offices.json\'; // (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\'); ga(\'create\', \'UA-32571766-1\', \'nordeus.com\'); ga(\'require\', \'linkid\', \'linkid.js\'); ga(\'send\', \'pageview\'); (function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = \"//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=512584348877631&version=v2.0\"; fjs.parentNode.insertBefore(js, fjs); }(document, \'script\', \'facebook-jssdk\')); ', '2017-11-05 08:58:11', 0),
(2, 'Riot Games', 'https://www.riotgames.com/careers', 'window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if(\"function\"==typeof __nr_require)return __nr_require;for(var o=0;o (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\': new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src= \'//www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f); })(window,document,\'script\',\'dataLayer\',\'GTM-KWJH\'); Skip to main content About Careers Home Games News Rioters Wanted We’re looking for humble but ambitious, razor-sharp professionals who can teach us a thing or two. We promise to return the favor. These individuals will become part of entrepreneurial teams who prefer action (kicking ass) over process and bureaucracy (taking names). We embrace those who see things differently, who aren\'t afraid to experiment, and who have a healthy disregard for the rules. Applicants should first learn about Riot and play League of Legends because we\'re looking for people who, like us, take play seriously and for whom it\'s never \"just a game.\" We play lots of games, especially our own, because hands-on gaming experience is our ultimate guiding compass. We\'re hiring for multiple levels, from associate to lead, so don\'t get hung up on the title; it\'s all about the team. For the roles below that are listed by team name, we\'re hiring for varying levels of XP. Working at Riot Riot unlocks Play Fund Queue Dodge Period Extended Our awards Search open jobs Please select an office or a department to refine your search. Loading... Active Filters: Company Manifesto News Legal jibber jabber Security Contact infos Awards Careers Riot with us Search open jobs Internship infos Games League of Legends Read About Riot Games In: English Brazilian Portuguese Spanish Simplified Chinese Korean Japanese Russian Traditional Chinese Turkish Follow Us: Twitter Facebook Linked In YouTube RSS Glassdoor ©2015 Riot Games, Inc. All rights reserved. League of Legends and Riot Games are trademarks, service marks, or registered trademarks of Riot Games, Inc. window.NREUM||(NREUM={});NREUM.info={\"beacon\":\"bam.nr-data.net\",\"licenseKey\":\"a24d38a665\",\"applicationID\":\"6988133\",\"transactionName\":\"blFTY0BWV0ZWURYLW1cbcFRGXlZbGEALDUBmV1BFV1JLRmheAwxQUFpW\",\"queueTime\":0,\"applicationTime\":520,\"atts\":\"QhZQFQhMREg=\",\"errorBeacon\":\"bam.nr-data.net\",\"agent\":\"\"} ', '2017-11-05 09:53:03', 1),
(3, 'Product Hive', 'http://producthive.io/careers', 'Product Hive - Digital Product Development Agency HOME OUR WORK CAREERS CONTACT NEWS & BLOG Join our Team Join producthive team to develop your talent, improve new skills, work smarter and enjoy your life! Web Developer Intern Belgrade, Serbia Niš, Serbia View Job Description --> A: Ruzveltova 1a, Belgrade P: + 381 60 6544564 Product Hive Facebook Page Product Hive LinkedIn Page Product Hive Twitter Account Product Hive Instagram Account © Producthive 2017 ', '2017-11-05 09:00:46', 0),
(4, 'LocalHost', 'http://localhost/rti/test.html', 'nesto', '2017-11-05 09:10:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `published`
--

DROP TABLE IF EXISTS `published`;
CREATE TABLE IF NOT EXISTS `published` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `advert_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`customer_id`,`advert_id`),
  KEY `advert_id` (`advert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `published`
--

INSERT INTO `published` (`customer_id`, `advert_id`) VALUES
(14, 1),
(16, 2),
(8, 3),
(19, 4),
(18, 5),
(13, 6),
(7, 7),
(10, 8),
(16, 9),
(11, 10),
(14, 11),
(6, 12),
(13, 13),
(16, 14),
(18, 15),
(12, 16),
(8, 17),
(14, 18),
(10, 19),
(6, 20),
(19, 21),
(12, 22),
(8, 23),
(8, 24),
(16, 25),
(9, 26),
(6, 27),
(14, 28),
(17, 29),
(11, 30),
(5, 31),
(12, 32),
(6, 33),
(5, 34),
(14, 35),
(12, 36),
(18, 37),
(10, 38),
(19, 39),
(18, 40),
(5, 41),
(13, 42),
(14, 43),
(10, 44),
(18, 45),
(6, 46),
(16, 47),
(8, 48),
(10, 49),
(17, 50),
(19, 51),
(6, 52),
(15, 53),
(8, 54),
(8, 55),
(8, 56),
(15, 57),
(10, 58),
(9, 59),
(10, 60),
(18, 61),
(15, 62),
(6, 63),
(15, 64),
(19, 65),
(6, 66),
(10, 67),
(18, 68),
(9, 69),
(6, 70),
(7, 71),
(9, 72),
(16, 73),
(14, 74),
(19, 75),
(12, 76),
(14, 77),
(8, 78),
(5, 79),
(17, 80),
(18, 81),
(17, 82),
(18, 83),
(19, 84),
(16, 85),
(18, 86),
(14, 87),
(6, 88),
(6, 89),
(10, 90),
(17, 91),
(18, 92),
(9, 93),
(16, 94),
(13, 95),
(15, 96),
(7, 97),
(5, 98),
(12, 99),
(3, 100),
(8, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `rater` int(10) UNSIGNED NOT NULL,
  `rated` int(10) UNSIGNED NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`rater`,`rated`),
  KEY `rated` (`rated`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firma` int(20) NOT NULL,
  `naziv` varchar(250) NOT NULL,
  `kategorija` int(20) NOT NULL,
  `trajanje` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `firma`, `naziv`, `kategorija`, `trajanje`) VALUES
(9, 4, 'Test iz C programskog jezika', 1, 600),
(8, 0, 'Test C', 1, 600);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `email_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `starost` int(5) NOT NULL DEFAULT '25',
  `obrazovanje` int(5) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `verified`, `banned`, `email_token`, `remember_token`, `created_at`, `updated_at`, `starost`, `obrazovanje`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$0h5B49PaCBCRiPY/bOumWuIH.ZmGKu1GlYq2vsCbF.ylscouS5Q7G', 0, 0, 'a99945b3a76e4739b22687cc3c1a1af4c02f83de67f86a666500e7a1e3b5cfa930e4be8e818875e6936633db8d1ddb8e2ac0e4d712af7d758f45ddf6c8c2d0f6', 'IY4hqu3tRy3AH9jJd8mz9UCQb8wTwPHqE13d3LhPqsDpJnW2sIVjffGlZd2m', '2017-11-05 07:42:00', '2017-11-05 07:42:00', 25, 1),
(2, 'Jankovic', 'asd@c.com', '$2y$10$wpG.YAulIQ6oIuLseQQYMu9Mra6v35jmr.7rUmJSwtDOFYmlHCI/O', 0, 0, '5a216f06b36358bef7cf942373a74830d5b687cf3e93dc7a0a30c50c7e39bfc2028093530afd23f9152bfd7a82de183dad4f4565868b5fdc150c8a69da47bfad', 'S5BJX6kOMGtdhifkyoyEgBf5jExWxBTPJWNp2d7KRVVz5CTF0phyf9pZj9YA', '2017-11-05 07:44:08', '2017-11-05 07:44:08', 25, 1),
(3, 'ADMINI', 'admini@admin.com', '$2y$10$edmG6Ffvt9lgX0fdUrIS4.AQYM0feb6erVMbAo35cjalQ0pl9Vzri', 0, 0, '6cdc4aa08e4d36ceee2a2c2adb4cd00e77b3944d403184a653e0bd7c9b99fa04b39162a9723ddf708ad656e0caf8d5ca895e05366a9ad7d26fb561c6661645f6', 'TyQsKNvlA6vWi2w89T4yaOskq0Il6f3xQaABAVVlZ1wXJjzOhSxituchX4Oq', '2017-11-05 07:45:17', '2017-11-05 07:45:17', 25, 1),
(4, 'Nord', 'nor@nor.com', '$2y$10$jV1ryFi8I.Dk9OW3BxOHz.JQqPXx7wELWrP1JunMVd79z0omqlyki', 0, 0, 'dd62aaac3724ab59d7e42b075a609f5d5280495e3d21a8f349297d707c0e97e5f3e2d356f73a5bdf3de5b43f3c5fd7d0e8403672645239f066fc24b65037a373', 'BdlR2oyc1zlaQUwlNZmAowZVKd8DQ8BEmW8dTXNe75XqvTHt9A5Ne1O2IRfC', '2017-11-05 08:01:10', '2017-11-05 08:01:10', 25, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`advert_id`) REFERENCES `advertisment` (`advert_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `assigned`
--
ALTER TABLE `assigned`
  ADD CONSTRAINT `assigned_ibfk_1` FOREIGN KEY (`moderator_id`) REFERENCES `moderator` (`id`),
  ADD CONSTRAINT `assigned_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `belongs_to`
--
ALTER TABLE `belongs_to`
  ADD CONSTRAINT `belongs_to_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `belongs_to_ibfk_2` FOREIGN KEY (`advert_id`) REFERENCES `advertisment` (`advert_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `moderator`
--
ALTER TABLE `moderator`
  ADD CONSTRAINT `moderator_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `published`
--
ALTER TABLE `published`
  ADD CONSTRAINT `published_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `published_ibfk_2` FOREIGN KEY (`advert_id`) REFERENCES `advertisment` (`advert_id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`rater`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`rated`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
