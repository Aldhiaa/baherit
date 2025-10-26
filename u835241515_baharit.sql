-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2025 at 01:18 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u835241515_baharit`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `icon`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\" Vision\",\"ar\":\"الرؤية Vision\"}', '{\"en\":\"<p><br>&nbsp;To become the leading technology partner in Saudi Arabia and the region by delivering integrated and innovative digital solutions that support digital transformation and contribute to building a prosperous technological future.&nbsp;</p>\",\"ar\":\"<p dir=\\\"rtl\\\">&nbsp;أن نصبح الشريك التقني الرائد في المملكة العربية السعودية والمنطقة، من خلال تقديم حلول رقمية متكاملة ومبتكرة تدعم التحول الرقمي وتسهم في بناء مستقبل تقني مزدهر.&nbsp;</p>\"}', 'about-icons/01JTAKBXJZ9D2FVT58HSK61HSD.png', 1, 1, '2025-04-08 17:52:26', '2025-05-03 08:14:23'),
(2, '{\"en\":\"Mission\",\"ar\":\"الرسالة Mission\"}', '{\"en\":\"<p>&nbsp;To provide advanced technology services including website and application development, digital marketing, cybersecurity, and network management with high quality and competitive pricing—while remaining committed to innovation, exceptional customer service, and delivering tangible results that support our c&nbsp;</p>\",\"ar\":\"<p dir=\\\"rtl\\\">&nbsp;تقديم خدمات تقنية متطورة تشمل تصميم المواقع والتطبيقات، التسويق الرقمي، الأمن السيبراني، وإدارة الشبكات بجودة عالية وأسعار تنافسية، مع الالتزام بالابتكار، خدمة العملاء المتميزة، وتحقيق نتائج ملموسة تدعم نمو أعمال عملائنا.&nbsp;</p>\"}', NULL, 2, 1, '2025-04-08 17:55:37', '2025-05-03 08:16:50'),
(3, '{\"en\":\"Goals\",\"ar\":\" أهداف\"}', '{\"en\":\"<p>Deliver comprehensive and innovative digital solutions for businesses and individuals.</p><ul><li>Enhance cybersecurity levels for organizations and clients.</li><li>Improve user experience through smart designs and high technical performance.</li><li>Empower startups and SMEs to expand digitally through professional marketing services.</li><li>Achieve sustainable financial growth by providing value-added services.</li><li>Contribute to achieving the goals of Saudi Vision 2030 in digital transformation.</li></ul>\",\"ar\":\"<p dir=\\\"rtl\\\">&nbsp;تقديم حلول رقمية شاملة ومبتكرة للشركات والأفراد. تعزيز مستوى الأمان السيبراني لدى المؤسسات والعملاء. تحسين تجربة المستخدم عبر تقديم تصميمات ذكية وأداء تقني عالٍ. تمكين الشركات الناشئة والمتوسطة من التوسع الرقمي عبر خدمات تسويق احترافية. تحقيق نمو مالي مستدام عبر تقديم خدمات ذات قيمة مضافة. المساهمة في تحقيق أهداف التحول الرقمي.&nbsp;</p>\"}', NULL, 3, 1, '2025-04-08 17:58:17', '2025-05-03 08:19:04'),
(4, '{\"en\":\"Values\",\"ar\":\" القيم Values\"}', '{\"en\":\"<p><br></p><ul><li><strong>Innovation</strong>: Developing advanced technological solutions that align with the latest global trends.</li><li><strong>Quality</strong>: Providing high-quality services that ensure customer satisfaction and exceed expectations.</li><li><strong>Transparency</strong>: Committing to clarity and credibility in dealings with clients and partners.</li><li><strong>Flexibility</strong>: Offering diverse solutions and plans tailored to the needs of different clients.</li><li><strong>Security</strong>: Protecting client data and information through advanced security systems.</li><li><strong>Professionalism</strong>: A highly skilled and experienced team committed to the highest professional standards.</li><li><strong>Customer Service</strong>: Providing continuous technical support to build long-term relationships with clients.</li></ul>\",\"ar\":\"<p dir=\\\"rtl\\\">&nbsp;الابتكار: تطوير حلول تقنية متقدمة تواكب أحدث الاتجاهات العالمية.&nbsp;</p><p dir=\\\"rtl\\\">الجودة: تقديم خدمات عالية الجودة تضمن رضا العملاء وتفوق توقعاتهم.&nbsp;</p><p dir=\\\"rtl\\\">الشفافية: الالتزام بالوضوح والمصداقية في التعامل مع العملاء والشركاء.</p><p dir=\\\"rtl\\\">&nbsp;المرونة: تقديم حلول وخطط متنوعة تناسب احتياجات مختلف العملاء.</p><p dir=\\\"rtl\\\">&nbsp;الأمان: حماية بيانات ومعلومات العملاء عبر أنظمة أمنية متطورة.&nbsp;</p><p dir=\\\"rtl\\\">الاحترافية: فريق عمل متميز ذو خبرة يلتزم بأعلى المعايير المهنية</p><p dir=\\\"rtl\\\">&nbsp;خدمة العملاء: تقديم دعم فني متواصل لبناء علاقات طويلة الأمد مع العملاء.&nbsp;</p>\"}', NULL, 4, 1, '2025-05-04 05:50:10', '2025-05-04 05:50:10'),
(5, '{\"en\":\"Bahr Technology \",\"ar\":\"بحر التكنولوجيا\"}', '{\"en\":\"<p><strong>Bahr Technology&nbsp;</strong>is a Yemeni company specialized in providing comprehensive digital and technological solutions. Our mission is to empower businesses and organizations to achieve digital transformation and excel in today’s dynamic business landscape.</p><p>We offer a wide range of services, including website design and development, mobile application development, digital marketing, cybersecurity solutions, network management, and technical support.</p><p>With a passionate and professional team, we are committed to delivering innovative, high-quality services at competitive prices that meet and exceed our clients\' expectations.</p>\",\"ar\":\"<p dir=\\\"rtl\\\">&nbsp;هي شركة يمنية متخصصة في تقديم حلول تقنية ورقمية متكاملة، تهدف إلى تمكين الشركات والمؤسسات من تحقيق التحول الرقمي والتميز في عالم الأعمال المتغير. نقدم مجموعة واسعة من الخدمات تشمل: تصميم وتطوير المواقع الإلكترونية، تطوير تطبيقات الهواتف الذكية، التسويق الرقمي، حلول الأمن السيبراني، إدارة الشبكات، والدعم التقني. نعمل بفريق محترف وشغوف بالتقنية لنقدم خدمات مبتكرة ذات جودة عالية وأسعار تنافسية تلبي تطلعات عملائنا.&nbsp;</p>\"}', 'about-icons/01JTF6396P24DCBD1JK27C6WVK.jpg', 0, 1, '2025-05-05 02:58:41', '2025-05-05 02:58:41');

-- --------------------------------------------------------
CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_category_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) NOT NULL,
  `answer` text NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_category_id`, `question`, `answer`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"en\":\"What services does Baher  Technology offer?\",\"ar\":\"ما هي الخدمات التي تقدمها شركة بحر التكنولوجيا؟\"}', '<p>any thing&nbsp;</p>', 1, 1, '2025-04-11 11:33:25', '2025-05-04 06:13:09'),
(2, 1, 'any thing ', '<p>any thing&nbsp;</p>', 2, 1, '2025-04-11 11:34:23', '2025-04-11 11:34:23'),
(3, 1, 'any thing ', '<p>any thing&nbsp;</p>', 0, 1, '2025-04-11 11:34:34', '2025-04-11 11:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `slug` varchar(191) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `name`, `slug`, `order`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"gen\"}', 'gen', 0, '2025-05-04 05:55:33', '2025-05-04 05:55:33');

-- --------------------------------------------------------


CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `locale` varchar(191) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `locale`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 1, '2025-04-11 15:26:06', '2025-04-11 15:26:06'),
(2, 'اللغة العربية', 'ar', 1, '2025-04-11 15:26:35', '2025-04-11 15:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--


-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`title`)),
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`description`)),
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`features`)),
  `client_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`client_name`)),
  `completion_date` date DEFAULT NULL,
  `featured_image` varchar(191) NOT NULL,
  `github_url` varchar(191) DEFAULT NULL,
  `demo_url` varchar(191) DEFAULT NULL,
  `video_url` varchar(191) DEFAULT NULL,
  `client_logo` varchar(191) DEFAULT NULL,
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery`)),
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `slug`, `title`, `description`, `features`, `client_name`, `completion_date`, `featured_image`, `github_url`, `demo_url`, `video_url`, `client_logo`, `gallery`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'riomarket', '{\"en\":\"RioMarket  Smart E Commerce Platform\",\"ar\":\"ريوماركت\"}', '{\"en\":\"<p>In response to the rapid digital transformation, <em>Bahr Al-Taqnologia</em> developed <strong>RioMarket</strong>, a fully integrated e-commerce platform that represents an advanced model of smart commerce. Designed with the latest web technologies, RioMarket prioritizes security, flexibility, and ease of use to empower businesses in managing modern sales and marketing operations effectively.</p><p><strong>RioMarket</strong> is more than just an online store — it’s a <strong>comprehensive digital ecosystem</strong> featuring an integrated Point of Sale (POS) system, an interactive dashboard, intelligent order management, and advanced reporting tools to help decision-makers optimize performance and make data-driven decisions.</p>\",\"ar\":\"<p dir=\\\"rtl\\\">في ظل التحول الرقمي المتسارع وسعي الجهات والمؤسسات لمواكبة أحدث التقنيات، قمنا&nbsp; بتطوير ريوماركت، وهو متجر إلكتروني متكامل يمثل نموذجًا فعّالًا للتجارة الذكية. تم تصميم هذا المشروع باستخدام أحدث تقنيات الويب، مع مراعاة أعلى معايير الأمان وسهولة الاستخدام، ليكون أداة موثوقة وشاملة لإدارة عمليات البيع والتسويق الحديثة.</p><p dir=\\\"rtl\\\">يمتاز ريوماركت بدمجه بين التفاعل الرقمي والواقعي من خلال نظام نقاط بيع (POS) متكامل، مع لوحة تحكم ديناميكية توفّر رؤية فورية وشاملة لأداء المتجر. كما يعتمد على نظام إدارة طلبات ذكي، وتقارير وتحليلات متقدمة تساعد أصحاب القرار على تحسين الأداء واتخاذ قرارات مدروسة.</p><p dir=\\\"rtl\\\">اعتمدنا في تنفيذ المتجر على بنية تقنية مرنة وقابلة للتوسع، واستخدمنا أحدث الأطر البرمجية وتقنيات الأمان، لضمان الأداء العالي والتوافق مع مختلف الأجهزة.</p><p dir=\\\"rtl\\\">باختصار، ريوماركت ليس مجرد متجر إلكتروني، بل منظومة رقمية متقدمة تجمع بين الكفاءة التشغيلية والأدوات التسويقية الذكية والتجربة المثالية للمستخدم&nbsp; وسوف نعرض اهم المميزات وهي كالاتي:</p><p dir=\\\"rtl\\\">1.&nbsp; &nbsp; &nbsp;<strong>لوحة تحكم رئيسية شاملة</strong>عرض مباشر لأهم <strong>مؤشرات الأداء :</strong>إجمالي الطلبات، الأرباح، عدد العملاء، والمنتجات وتحليلات مالية دقيقة .</p><p dir=\\\"rtl\\\"><strong>2.نظام نقاط البيع (POS) متكامل</strong> <strong>بيع سريع</strong> من المتجر الفعلي أو الإلكتروني ومتابعة <strong>المعاملات المالية</strong> لحظيًا.</p><p dir=\\\"rtl\\\"><strong>3.إدارة الطلبات باحترافية</strong></p><p dir=\\\"rtl\\\">تتبع كل حالة: <strong>قيد الانتظار، مؤكد، في التوصيل، مكتمل، مرتجع</strong> وتحديث أوتوماتيكي للإشعارات مع العملاء.</p><p dir=\\\"rtl\\\"><strong>4.إدارة المنتجات والعروض</strong></p><p dir=\\\"rtl\\\">تصنيف المنتجات (فئات، علامات تجارية، خصائص).</p><p dir=\\\"rtl\\\"><strong>نظام العروض الترويجية</strong>: خصومات، لافتات إعلانية، وإشعارات تلقائية.</p><p dir=\\\"rtl\\\"><strong>5. تقارير وتحليلات متقدمة</strong></p><p dir=\\\"rtl\\\">تقارير مخصصة حسب <strong>المنتج، الطلب، الفترة الزمنية</strong>.</p><p dir=\\\"rtl\\\">تحليل <strong>الأرباح والمبيعات</strong> شهريًا وسنويًا.</p><p dir=\\\"rtl\\\"><strong>6. دعم فني مدمج وتواصل مع العملاء</strong></p><p dir=\\\"rtl\\\"><strong>نظام التذاكر</strong> لسرعة حل المشكلات.</p><p dir=\\\"rtl\\\"><strong>دردشة مباشرة</strong> لخدمة عملاء فورية.</p><p dir=\\\"rtl\\\"><strong>7.محفظة مالية متكاملة</strong></p><p dir=\\\"rtl\\\">تتبع <strong>العمولات، الأرباح، الضرائب</strong> ودعم <strong>وسائل دفع متعددة</strong>&nbsp;</p><p dir=\\\"rtl\\\"><strong>8. أدوات تسويقية ذكية</strong></p><p dir=\\\"rtl\\\"><strong>إشعارات العروض</strong> عبر البريد والنصوص.</p><p dir=\\\"rtl\\\">نظام <strong>التقييمات والمراجعات</strong> لتعزيز ثقة العملاء.</p><p dir=\\\"rtl\\\">خدمة العملاء عبر التذاكر والدردشة.</p>\"}', '{\"en\":\"Key Features:\\nComprehensive Dashboard: Real-time overview of key performance indicators — total orders, profits, customer count, and detailed financial analytics.\\n\\nIntegrated POS System: Enables seamless sales from both physical stores and online, with live transaction tracking.\\n\\nSmart Order Management: Tracks all order statuses (pending, confirmed, shipping, completed, returned) with automated customer notifications.\\n\\nProduct & Promotion Management: Categorization by brand, features; promotional campaigns with discounts, banners, and automated alerts.\\n\\nAdvanced Reports & Analytics: Custom reports by product, order, or date range; monthly and yearly profit and sales analysis.\\n\\nBuilt-in Technical Support & Customer Interaction: Ticket system for quick issue resolution and live chat for instant customer service.\\n\\nIntegrated Wallet & Finance Management: Tracks commissions, taxes, profits; supports multiple payment gateways.\\n\\nIntelligent Marketing Tools: Automated offer notifications via email and SMS; customer ratings and reviews to build trust and engagement.\",\"ar\":\"أهم المميزات:\\nلوحة تحكم شاملة: تعرض مؤشرات الأداء مثل إجمالي الطلبات، الأرباح، عدد العملاء، وتحليلات مالية دقيقة.\\n\\nنظام نقاط بيع (POS): لربط المتجر الإلكتروني والفروع الفعلية ومتابعة العمليات لحظيًا.\\n\\nإدارة الطلبات الذكية: تتبع آلي لحالات الطلبات مع إشعارات فورية للعملاء.\\n\\nإدارة المنتجات والعروض: تصنيف احترافي، خصومات، حملات ترويجية، ولافتات إعلانية.\\n\\nتحليلات وتقارير متقدمة: حسب المنتج أو الفترة الزمنية، مع تحليل شامل للأرباح والمبيعات.\\n\\nدعم فني وتواصل مباشر: نظام تذاكر ودردشة فورية لخدمة العملاء.\\n\\nمحفظة مالية مدمجة: تتبع العمولات، الضرائب، والأرباح، مع دعم وسائل دفع متنوعة.\\n\\nأدوات تسويقية ذكية: إشعارات، تقييمات، مراجعات، وتسويق عبر البريد والنصوص.\"}', '{\"en\":\"RioMarket\",\"ar\":\"ريوماركت\"}', '2024-06-05', 'projects/01JTH29RJHC9CJN01BNA64TKYC.jpg', NULL, 'https://www.reiomarket.com/', NULL, 'projects/01K2B1NH8HWDFVVQF8RA4DRJQZ.jpg', '[\"project-galleries\\/01K2B1DHYSHXK5Z0Q1FYDRCN65.jpg\",\"project-galleries\\/01K2B1DHYX40RV7HND62ZEC8G6.png\",\"project-galleries\\/01K2B1DHYYAZC99F8PF9VM0HFW.png\",\"project-galleries\\/01K2B1DHYZZ110XB64K5PHFEZ2.png\",\"project-galleries\\/01K2B1DHZ0MTH9H7P6EGWBBZ24.png\"]', 0, 1, '2025-05-05 20:30:48', '2025-08-10 22:31:37'),
(2, 1, 'intelligents-erp', '{\"en\":\"Intelligents ERP  \",\"ar\":\"Intelligents ERP  \"}', '{\"en\":\"<p dir=\\\"rtl\\\"><strong>في عالم الأعمال المعجزة اليوم، من الضروري إدارة عملياتك الرائعة وتميز سير العمل في جميع الأقسام والروعة. السبب، هو السبب وراء تصميمنا لنظام Intelligents ERP، الذي يجمع بين قوة السحابة والمرونة الشاملة، لنوفر لك أداة شاملة لأعمالك.</strong></p><p dir=\\\"rtl\\\">🌐 <strong>الوصول من أي مكان:</strong><br> يتيح لك النظام الوصول إلى بياناتك من أي جهاز وفي أي وقت - دون الحاجة إلى التواجد في المكتب أو استخدام أجهزة خاصة. كل ما تحتاجه هو جهاز إلكتروني متعدد غير متصل بالانترنت، والذي يبدأ العمل بعده أو ابتكار مواقع عمل.</p><p dir=\\\"rtl\\\">🧩 <strong>لا حاجة للتثبيت.</strong><br> وداعاً للبرامج المعقدة الخاصة. لا تحتاج إلى أي شيء - ما عليك سوى الوصول إلى النظام. سهل!</p>\",\"ar\":\"<p dir=\\\"rtl\\\">في عالم الأعمال سريع التطور، أصبح من الضروري أن تتمكن من إدارة أعمالك بكفاءة، وتضمن سير العمليات بسلاسة عبر جميع الأقسام والفروع. ولهذا السبب، صمّمنا نظام <strong>Intelligents ERP</strong>&nbsp; ليجمع بين قوة السحابة والمرونة التامة، ويوفر لك أداة شاملة لإدارة العمل بكفاءة.</p><p dir=\\\"rtl\\\"><strong>🌐الوصول من أي مكان</strong></p><p dir=\\\"rtl\\\">نظام&nbsp; يتيح لك الوصول إلى بياناتك من أي جهاز وفي أي وقت، دون الحاجة إلى تواجد في المكتب أو استخدام أجهزة خاصة. كل ما تحتاجه هو جهاز متصل بالإنترنت، مما يجعل النظام مثاليًا للعمل عن بُعد أو إدارة الأعمال في مواقع متعددة.</p><p dir=\\\"rtl\\\"><strong>🧩لا تثبيت</strong></p><p dir=\\\"rtl\\\">وداعًا للبرمجيات المعقدة والأجهزة المتخصصة. لا تحتاج إلى تثبيت أي شيء، فقط استخدم متصفح الإنترنت الخاص بك للوصول إلى النظام مباشرة. سهل وبسيط!</p><p><br></p>\"}', '{\"en\":\"\\n🏪 Multi-Branch & Multi-Warehouse Support\\nIf you manage multiple branches or warehouses, the system helps you monitor inventory across all locations in real time. You can check stock levels, transfer products between branches, and manage warehouse operations—all from one platform.\\n\\n🛡️ User Access Permissions\\nAn integrated role and permission management system allows you to control who can access what. This ensures data security and allows flexible permission settings tailored to your business structure.\\n\\n📦 Inventory Management\\nEasily manage inventory across multiple locations. Track expiry dates, batch numbers, and stock movements. The system also provides automatic alerts when it\'s time to reorder products.\\n\\n🛠️ Service Management\\nThe system offers flexibility in managing customer services like maintenance or repairs. You can schedule tasks, generate client invoices, and ensure timely service delivery.\\n\\n👥 Human Resources Management (HRM)\\nIncludes a suite of tools for managing employee affairs, such as:\\n\\nTracking attendance and check-ins.\\nManaging shifts, leaves, payroll, and holidays.\\nOrganizing departments and job titles, with the ability to generate employee-related reports.\\n💼 Customer Relationship Management (CRM)\\nThe CRM module is a powerful tool to manage customer relationships, featuring:\\n\\nFull customer lifecycle tracking.\\nManaging leads and converting them into loyal customers.\\nRunning marketing campaigns and offering promotions.\\nGenerating analytical reports on customer behavior and sales performance.\\n📈 Reports and Analytics\\nThe system provides comprehensive reports across all business aspects, such as:\\n\\nSales and inventory.\\nExpenses and revenues.\\nEmployee performance and time analysis.\\nWorkflow and project tracking reports.\\n🧑‍💻 User-Friendly Interface\\nIntelligents ERP is designed with a simple, intuitive interface that boosts productivity and saves time. No extensive training is required – your team can get started right away.\\n\\n🛍️ Tailored Solutions for Your Business Type\\n\\nMulti-department store: Ideal for businesses selling various product types like clothing, shoes, and bags.\\nRetail & Wholesale: A complete solution for managing retail and wholesale operations simultaneously.\\n🌟 Continuous Support\\nIf you’re looking for an all-in-one solution to manage your business with ease, Intelligents ERP is your ideal choice. It offers an advanced, fully customizable system tailored to your business needs—helping you manage operations efficiently and giving you complete confidence in every aspect of your business.\\n🎛️ Main Interface & Dashboard\\n\\nPersonalized greeting for each user.\\n\\nReal-time display of financial statistics such as sales, purchases, and invoices.\\n\\nInstant alerts on performance and inventory status.\\n\\n👨‍💼 User Management\\n\\nManage permissions for admins and users.\\n\\nControl login accounts and assign roles.\\n\\nManage customer and supplier data.\\n\\nLink users with invoices and transactions.\\n\\n📦 Products & Inventory\\n\\nAccurate tracking of inventory movements.\\n\\nAutomatic alerts when stock levels drop.\\n\\n💰 Accounting & Finance\\n\\nSmart financial reports for performance monitoring.\\n\\n🛒 Purchases & Sales\\n\\nIntegrated purchasing cycle with shipment tracking.\\n\\n📊 Reports\\n\\nDetailed reports on sales, purchases, and profits.\\n\\n⚙️ Settings & Backup\\n\\nManage data backups for easy protection and recovery.\\n\\n💬 Notification Templates\\n\\nCustomize email and SMS messages for transactions.\\n\\n\",\"ar\":\"\\n🏪متعدد الفروع والمستودعات\\n\\nإذا كنت تدير عدة فروع أو مستودعات، سيساعدك على مراقبة المخزون في كل مكان في الوقت الفعلي. ستتمكن من التحقق من المخزون، تحويل المنتجات بين الفروع، وتنظيم عمل المستودعات عبر منصة واحدة.\\n\\n🛡️صلاحيات الوصول للمستخدمين\\n\\nنظام متكامل لإدارة الأدوار والصلاحيات يتيح لك تحديد من يمكنه الوصول إلى ماذا داخل النظام. بذلك، يمكنك حماية بيانات العمل وتنظيم الصلاحيات بطريقة مرنة تضمن أمان المعلومات.\\n\\n📦إدارة المخزون\\n\\nيتيح لك النظام إدارة المخزون عبر مواقع متعددة بكل سهولة. بالإضافة إلى ذلك، يمكنك متابعة تواريخ انتهاء الصلاحية، وأرقام الدُفعات، والاطلاع على سجلات حركة المخزون. يقدم لك النظام أيضًا إنذارات تلقائية عند الحاجة لإعادة طلب المنتجات.\\n\\n🛠️إدارة الخدمات\\n\\nيتميز النظام بمرونة في إدارة الخدمات المقدمة للعملاء، سواء كانت صيانة أو إصلاحات. يساعدك النظام في جدولة المهام، إصدار الفواتير للعملاء، وضمان تسليم الخدمات في الوقت المحدد.\\n\\n👥إدارة الموارد البشرية (HRM)\\n\\nيتضمن النظام مجموعة من الأدوات المخصصة لإدارة شؤون الموظفين، مثل:\\n\\nتتبع الحضور والانصراف.\\nإدارة الورديات، الإجازات، الرواتب، والعطلات.\\nتنظيم الأقسام والمسميات الوظيفية، مع القدرة على إعداد التقارير المتعلقة بالموظفين.\\n💼إدارة علاقات العملاء (CRM)\\n\\nتوفر وحدة CRM أداة قوية لإدارة علاقاتك مع العملاء. تشمل الميزات:\\n\\nمتابعة دورة حياة العميل بالكامل.\\nإدارة العملاء المحتملين وتحويلهم إلى عملاء دائمين.\\nإدارة الحملات التسويقية وتقديم العروض الخاصة.\\nإنشاء تقارير تحليلية حول سلوك العملاء وأداء المبيعات.\\n📈التقارير والتحليلات\\n\\nيوفر النظام تقارير شاملة حول جميع جوانب العمل، مثل:\\n\\nمبيعات العملاء والمخزون.\\nالمصاريف والإيرادات.\\nتقارير أداء الموظفين وتحليل الوقت.\\nتقارير تدفق العمل والمشاريع.\\n🧑‍💻سهولة الاستخدام\\n\\nتم تصميم Intelligents ERP  بواجهة بسيطة وسهلة الاستخدام، مما يعزز الإنتاجية ويوفر الوقت لفريق العمل. ليس هناك حاجة لتدريب طويل، ويمكن لفريقك البدء في استخدام النظام فورًا.\\n\\n🛍️حلول مخصصة حسب نوع النشاط التجاري\\n\\nمتجر متعدد الأقسام: حل مثالي للمتاجر التي تدير عدة أنواع من المنتجات مثل الملابس، الأحذية، والحقائب.\\nالتجزئة والجملة: حل شامل لإدارة عمليات البيع بالتجزئة والجملة في وقت واحد.\\n🌟دعم مستمر\\n\\nإذا كنت تبحث عن برنامج متكامل يدير أعمالك بكل سهولة، فإن Intelligents ERP هو خيارك الأمثل. يوفر لك نظامًا متقدمًا، مُصمّم خصيصًا لاحتياجات عملك المتنوعة، مما يتيح لك تنظيم جميع العمليات بكفاءة، ويمنحك الثقة التامة في إدارة كل جزء من أعمالك.\\n\\n🎛️الواجهة الرئيسية ولوحة التحكم\\n\\nترحيب مخصص لكل مستخدم.\\nعرض لحظي للإحصائيات المالية مثل المبيعات، المشتريات، والفواتير.\\nتنبيهات فورية لأداء العمل والمخزون.\\n👨‍💼إدارة المستخدمين\\n\\nإدارة صلاحيات المشرفين والمستخدمين.\\nالتحكم في حسابات الدخول وتعيين الأدوار.\\nإدارة بيانات العملاء والموردين.\\nالربط مع الفواتير والمعاملات.\\n📦المنتجات والمخزون\\n\\nمتابعة دقيقة لحركة المخزون.\\nإشعارات تلقائية عند انخفاض الكميات.\\n💰المحاسبة والمالية\\n\\nتقارير مالية ذكية لمراقبة الأداء المالي.\\n🛒المشتريات والمبيعات\\n\\nدورة مشتريات متكاملة مع تتبع الشحنات.\\n📊التقارير\\n\\nتقارير مفصلة عن المبيعات والمشتريات والأرباح.\\n⚙️الإعدادات والنسخ الاحتياطي\\n\\nإدارة النسخ الاحتياطي لحماية واسترجاع البيانات بسهولة.\\n💬قوالب الإشعارات\\n\\nتخصيص رسائل البريد الإلكتروني والرسائل النصية للمعاملات.\\n \"}', '{\"en\":\"Baher Technology\",\"ar\":null}', NULL, 'projects/01JV0ADBP773JVMAHB8C0MA7SK.png', NULL, NULL, NULL, 'projects/01JV0ADBP9A66RWVP3CFXR7DZ0.png', '[\"project-galleries\\/01JV0ADBPANS46G0S79NTRAC1F.png\",\"project-galleries\\/01JV0ADBPBBTG2XN7J871905EC.png\",\"project-galleries\\/01JV0ADBPEYST1Q6M4N5MDQ36F.png\"]', 1, 1, '2025-05-11 18:41:11', '2025-08-11 22:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"dev\"}', 'dev', '2025-05-05 07:07:57', '2025-05-05 07:07:57'),
(2, '{\"ar\":\"my\"}', 'my', '2025-08-14 19:24:26', '2025-08-14 19:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `short_description`, `description`, `icon`, `image`, `order`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"Mobile App Development\",\"ar\":\" تطوير التطبيقات \"}', 'mobile-app-development', '{\"en\":\"<p>📱 <strong>Design and development</strong> of mobile applications for iOS and Android.<br> ⚡ Utilization of cutting-edge technologies like <strong>Flutter</strong> and <strong>React Native</strong> for high performance.<br> 🔗 <strong>Integration with websites</strong> for a seamless cross-platform experience.<br> 🛠️ <strong>App maintenance and updates</strong> to ensure continuity and improved performance</p><p><br></p>\",\"ar\":\"<p dir=\\\"rtl\\\">📱 تصميم وتطوير تطبيقات الهواتف الذكية لأنظمة iOS و Android.</p><p dir=\\\"rtl\\\">&nbsp;⚡ استخدام أحدث التقنيات مثل Flutter و React Native لضمان أداء عالي.&nbsp;</p><p dir=\\\"rtl\\\">🔗 ربط التطبيقات بالمواقع الإلكترونية للحصول على تجربة سلسة.&nbsp;</p><p dir=\\\"rtl\\\">🛠️ تحديث وصيانة التطبيقات لضمان استمرارية العمل وتحسين الأداء.&nbsp;</p>\"}', '{\"en\":\"📱 Design and development of mobile applications for iOS and Android.\\n⚡ Utilization of cutting-edge technologies like Flutter and React Native for high performance.\\n🔗 Integration with websites for a seamless cross-platform experience.\\n🛠️ App maintenance and updates to ensure continuity and improved performance\\n\\n\",\"ar\":\"📱 تصميم وتطوير تطبيقات الهواتف الذكية لأنظمة iOS و Android.\\n\\n ⚡ استخدام أحدث التقنيات مثل Flutter و React Native لضمان أداء عالي. \\n\\n🔗 ربط التطبيقات بالمواقع الإلكترونية للحصول على تجربة سلسة. \\n\\n🛠️ تحديث وصيانة التطبيقات لضمان استمرارية العمل وتحسين الأداء. \"}', 'service-icons/01JTAMYB56M1T9QDPM5NPQBNAD.png', NULL, 2, 0, 1, '2025-04-09 11:47:30', '2025-05-03 08:41:56'),
(3, '{\"en\":\" Website Design & Development\",\"ar\":\" تصميم وتطوير المواقع الإلكترونية\"}', 'tsmym-ottoyr-almoakaa-alalktrony', '{\"en\":\"<p>&nbsp;🖥️ <strong>Professional UI/UX Design</strong> to ensure a seamless user experience.<br> 💻 <strong>Website development</strong> using the latest technologies (HTML, CSS, JS, Laravel, WordPress).<br> 📱 <strong>Responsive design</strong> for compatibility across all devices to ensure optimal performance.<br> 🛒 <strong>E-commerce development</strong> with enhanced user experience and speed.&nbsp;</p>\",\"ar\":\"<p dir=\\\"rtl\\\">&nbsp;💻تصميم واجهات مستخدم احترافية (UI/UX) لضمان تجربة سلسة.</p><p dir=\\\"rtl\\\">&nbsp;💻 تطوير المواقع باستخدام أحدث التقنيات (HTML, CSS, JS, Laravel, WordPress).&nbsp;</p><p dir=\\\"rtl\\\">📱 تصميم مواقع متجاوبة مع جميع الأجهزة لضمان أفضل أداء.&nbsp;</p><p dir=\\\"rtl\\\">🛒 تطوير المتاجر الإلكترونية وتحسين تجربة المستخدم والسرعة.&nbsp;</p>\"}', '{\"en\":\" 🖥️ Professional UI/UX Design to ensure a seamless user experience.\\n💻 Website development using the latest technologies (HTML, CSS, JS, Laravel, WordPress).\\n📱 Responsive design for compatibility across all devices to ensure optimal performance.\\n🛒 E-commerce development with enhanced user experience and speed. \",\"ar\":\" 💻تصميم واجهات مستخدم احترافية (UI/UX) لضمان تجربة سلسة.\\n\\n 💻 تطوير المواقع باستخدام أحدث التقنيات (HTML, CSS, JS, Laravel, WordPress). \\n\\n📱 تصميم مواقع متجاوبة مع جميع الأجهزة لضمان أفضل أداء. \\n\\n🛒 تطوير المتاجر الإلكترونية وتحسين تجربة المستخدم والسرعة. \"}', 'service-icons/01JTAMK4PFNSSRJ9F55STTMR59.png', NULL, 1, 0, 1, '2025-05-03 08:35:49', '2025-05-03 08:35:49'),
(4, '{\"en\":\"Domain Registration & Email Hosting\",\"ar\":\" حجز النطاقات واستضافة البريد الإلكتروني\"}', 'Hosting', '{\"en\":\"<p>🌍 <strong>Domain registration</strong> with premium names tailored to your brand.<br> 💾 <strong>Hosting plans</strong> that cater to diverse needs.<br> 📧 <strong>Professional email setup</strong> using the domain name.<br> 🔒 <strong>SSL certificate management</strong> for secure data protection.<br> 📞 24/7 <strong>technical support</strong> to ensure uninterrupted service.</p><p><br></p>\",\"ar\":\"<p dir=\\\"rtl\\\">🌍 تسجيل وحجز النطاقات بأسماء مميزة لعلامتك التجارية.</p><p dir=\\\"rtl\\\">&nbsp;💾 تقديم خطط استضافة متنوعة تلبي جميع الاحتياجات.</p><p dir=\\\"rtl\\\">&nbsp;📧 إعداد بريد إلكتروني احترافي باسم النطاق.&nbsp;</p><p dir=\\\"rtl\\\">🔒 إدارة شهادات الأمان (SSL) لحماية البيانات.&nbsp;</p><p dir=\\\"rtl\\\">📞 دعم فني على مدار الساعة لضمان استمرارية العمل.&nbsp;</p>\"}', '{\"en\":\"🌍 Domain registration with premium names tailored to your brand.\\n💾 Hosting plans that cater to diverse needs.\\n📧 Professional email setup using the domain name.\\n🔒 SSL certificate management for secure data protection.\\n📞 24/7 technical support to ensure uninterrupted service.\",\"ar\":\"🌍 تسجيل وحجز النطاقات بأسماء مميزة لعلامتك التجارية.\\n\\n 💾 تقديم خطط استضافة متنوعة تلبي جميع الاحتياجات.\\n\\n 📧 إعداد بريد إلكتروني احترافي باسم النطاق. \\n\\n🔒 إدارة شهادات الأمان (SSL) لحماية البيانات. \\n\\n📞 دعم فني على مدار الساعة لضمان استمرارية العمل. \"}', 'service-icons/01JTANA4ZZ2ZM9RYQH0PW4ZHCR.jpg', NULL, 3, 0, 1, '2025-05-03 08:48:23', '2025-05-03 08:48:23'),
(5, '{\"en\":\"Network Management & Cybersecurity\",\"ar\":\"إدارة الشبكات والأمن السيبراني\"}', 'network', '{\"en\":\"<p>🖧 <strong>Design and implementation</strong> of network infrastructure for efficient connectivity.<br> 🛠️ <strong>Network performance monitoring</strong> and quick, professional troubleshooting.<br> 🛡️ <strong>System protection against cyberattacks</strong> to secure sensitive data.<br> 🚧 <strong>Firewall and protection system updates</strong> against emerging threats.<br> 🔎 <strong>Comprehensive security audits and vulnerability assessments</strong> for system protection.</p><p><br></p>\",\"ar\":\"<p dir=\\\"rtl\\\">🖧 تصميم وتنفيذ البنية التحتية للشبكات لضمان كفاءة الاتصال.&nbsp;</p><p dir=\\\"rtl\\\">🛠️ مراقبة أداء الشبكة وحل الأعطال بسرعة واحترافية.</p><p dir=\\\"rtl\\\">&nbsp;🛡️ تأمين الأنظمة ضد الهجمات السيبرانية لحماية البيانات الحساسة.&nbsp;</p><p dir=\\\"rtl\\\">🚧 تحديث الجدران النارية وأنظمة الحماية ضد التهديدات الجديدة.</p><p dir=\\\"rtl\\\">&nbsp;🔎 إجراء تدقيق أمني شامل وفحص الثغرات لتأمين الأنظمة.&nbsp;</p>\"}', '{\"en\":\"🖧 Design and implementation of network infrastructure for efficient connectivity.\\n🛠️ Network performance monitoring and quick, professional troubleshooting.\\n🛡️ System protection against cyberattacks to secure sensitive data.\\n🚧 Firewall and protection system updates against emerging threats.\\n🔎 Comprehensive security audits and vulnerability assessments for system protection.\\n\\n\",\"ar\":\"🖧 تصميم وتنفيذ البنية التحتية للشبكات لضمان كفاءة الاتصال. \\n\\n🛠️ مراقبة أداء الشبكة وحل الأعطال بسرعة واحترافية.\\n\\n 🛡️ تأمين الأنظمة ضد الهجمات السيبرانية لحماية البيانات الحساسة. \\n\\n🚧 تحديث الجدران النارية وأنظمة الحماية ضد التهديدات الجديدة.\\n\\n 🔎 إجراء تدقيق أمني شامل وفحص الثغرات لتأمين الأنظمة. \"}', 'service-icons/01JTANHJH1ZN5ER5WR0NQYR23Z.jpg', NULL, 4, 0, 1, '2025-05-03 08:52:26', '2025-05-03 08:52:26'),
(6, '{\"en\":\"IT Support & Technology Solutions\",\"ar\":\"الدعم التقني وحلول تكنولوجيا المعلومات\"}', 'it-support', '{\"en\":\"<p><strong>IT Support &amp; Technology Solutions</strong></p><p>🔧 <strong>Troubleshooting and immediate support</strong> to maintain operations.<br> 🖥️ <strong>Software and app maintenance</strong> for enhanced performance.<br> 📡 <strong>Device and network setup</strong> using the latest technologies.<br> 🔐 <strong>Data protection and system security</strong> against breaches.<br> 🎓 <strong>Staff training</strong> on modern tools and technologies to boost productivity.</p><p><br></p>\",\"ar\":\"<p dir=\\\"rtl\\\">🔧 حل المشكلات التقنية وتقديم الدعم الفوري لضمان سير العمل.</p><p dir=\\\"rtl\\\">🖥️ تحديث وصيانة البرامج والتطبيقات لتحسين الأداء.&nbsp;</p><p dir=\\\"rtl\\\">📡 إعداد الأجهزة والشبكات وفق أحدث التقنيات.&nbsp;</p><p dir=\\\"rtl\\\">🔐 حماية البيانات وتأمين الأنظمة ضد الاختراقات.&nbsp;</p><p dir=\\\"rtl\\\">🎓 تدريب الفرق على الأدوات والتقنيات الحديثة لتعزيز الإنتاجية.&nbsp;</p>\"}', '{\"en\":\"IT Support & Technology Solutions\\n\\n🔧 Troubleshooting and immediate support to maintain operations.\\n🖥️ Software and app maintenance for enhanced performance.\\n📡 Device and network setup using the latest technologies.\\n🔐 Data protection and system security against breaches.\\n🎓 Staff training on modern tools and technologies to boost productivity.\\n\\n\",\"ar\":\"🔧 حل المشكلات التقنية وتقديم الدعم الفوري لضمان سير العمل.\\n\\n🖥️ تحديث وصيانة البرامج والتطبيقات لتحسين الأداء. \\n\\n📡 إعداد الأجهزة والشبكات وفق أحدث التقنيات. \\n\\n🔐 حماية البيانات وتأمين الأنظمة ضد الاختراقات. \\n\\n🎓 تدريب الفرق على الأدوات والتقنيات الحديثة لتعزيز الإنتاجية. \"}', 'service-icons/01JTAQENM1RVRE24GR3D31VX3E.jpg', NULL, 4, 0, 1, '2025-05-03 09:25:48', '2025-05-03 09:36:58'),
(7, '{\"en\":\"Security & Smart Home Systems\",\"ar\":\" أنظمة الأمن والمنازل الذكية \"}', 'Surveillance ', '{\"en\":\"<p>🔹 <strong>Smart doors</strong>: Installation of fingerprint, passcode, or app-controlled doors integrated with smart home systems.<br> 🔹 <strong>Intercom systems</strong>: Advanced intercoms with display screens connected to cameras and smart apps.<br> 🔹 <strong>Surveillance cameras</strong>: High-definition (HD, 4K) cameras with night vision and online monitoring, supported by DVR/NVR recording systems.<br> 🔹 <strong>Alarm systems</strong>: Theft and fire alarm systems with instant notifications via smart applications.<br> 🔹 <strong>Smart home integration</strong>: Control security, lighting, heating, and cooling via mobile for full smart home management.</p><p><br></p>\",\"ar\":\"<p dir=\\\"rtl\\\">🔹 كاميرات المراقبة: تركيب كاميرات عالية الدقة (HD، 4K) تدعم الرؤية الليلية والمراقبة عبر الإنترنت مع أنظمة تسجيل متقدمة (DVR، NVR).&nbsp;</p><p dir=\\\"rtl\\\">🔹 الأبواب الذكية: تركيب أنظمة أبواب تعمل بالبصمة، الكود السري، أو التطبيقات الذكية مع دمجها بأنظمة المنازل الذكية.&nbsp;</p><p dir=\\\"rtl\\\">🔹 أنظمة الإنتركوم: تركيب إنتركوم متطور مع شاشات عرض وربطه بالكاميرات والتطبيقات الذكية.&nbsp;</p><p dir=\\\"rtl\\\">🔹 أنظمة الإنذار: تركيب أنظمة إنذار ضد السرقة والحرائق مع إشعارات فورية عبر التطبيقات الذكية.</p><p dir=\\\"rtl\\\">&nbsp;🔹 التحكم الذكي في المنزل: دمج أنظمة الأمن مع الإضاءة، التدفئة، والتبريد الذكي لإدارة متكاملة عبر الهاتف.&nbsp;</p>\"}', '{\"en\":\"🔹 Smart doors: Installation of fingerprint, passcode, or app-controlled doors integrated with smart home systems.\\n🔹 Intercom systems: Advanced intercoms with display screens connected to cameras and smart apps.\\n🔹 Surveillance cameras: High-definition (HD, 4K) cameras with night vision and online monitoring, supported by DVR/NVR recording systems.\\n🔹 Alarm systems: Theft and fire alarm systems with instant notifications via smart applications.\\n🔹 Smart home integration: Control security, lighting, heating, and cooling via mobile for full smart home management.\\n\\n\",\"ar\":\"🔹 كاميرات المراقبة: تركيب كاميرات عالية الدقة (HD، 4K) تدعم الرؤية الليلية والمراقبة عبر الإنترنت مع أنظمة تسجيل متقدمة (DVR، NVR). \\n\\n🔹 الأبواب الذكية: تركيب أنظمة أبواب تعمل بالبصمة، الكود السري، أو التطبيقات الذكية مع دمجها بأنظمة المنازل الذكية. \\n\\n🔹 أنظمة الإنتركوم: تركيب إنتركوم متطور مع شاشات عرض وربطه بالكاميرات والتطبيقات الذكية. \\n\\n🔹 أنظمة الإنذار: تركيب أنظمة إنذار ضد السرقة والحرائق مع إشعارات فورية عبر التطبيقات الذكية.\\n\\n 🔹 التحكم الذكي في المنزل: دمج أنظمة الأمن مع الإضاءة، التدفئة، والتبريد الذكي لإدارة متكاملة عبر الهاتف. \"}', 'service-icons/01JTAQQXA8M71DF4R6G485MFGF.png', NULL, 5, 0, 1, '2025-05-03 09:30:51', '2025-05-03 09:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--



CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`value`)),
  `logo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'site_logo', '{\"en\":\"Baher Technology\",\"ar\":\"بحر التكنولوجيا\"}', 'settings/01JTCWHMH1J3RXA30A2HFK7HBC.png', '2025-05-04 05:32:41', '2025-05-04 05:33:17'),
(2, 'site_email', '{\"en\":\"info@baherit.com\",\"ar\":\"info@baherit.com\"}', NULL, '2025-05-04 05:33:45', '2025-05-04 05:33:45'),
(3, 'ouT_baher_technology', '{\"en\":\"\\\"Tech baher is a Yemeni company specialized in providing comprehensive technological and digital solutions. It aims to empower businesses and organizations to achieve digital transformation and excel in an ever-changing business environment. We rely on a professional team passionate about technology to deliver innovative, high-quality services at competitive prices that meet customer expectations.\\\"\",\"ar\":\"بحر التكنولوجيا هي شركة يمنية متخصصة في تقديم حلول تقنية ورقمية متكاملة، تهدف إلى تمكين الشركات والمؤسسات من تحقيق التحول الرقمي والتميز في بيئة الأعمال المتغيرة. نعتمد على فريق عمل محترف وشغوف بالتقنية، لتقديم خدمات مبتكرة بجودة عالية وأسعار تنافسية تلبي تطلعات العملاء.\"}', NULL, '2025-05-04 05:36:42', '2025-05-04 05:36:42'),
(4, 'facebook', '{\"en\":\"https://www.facebook.com/BaherITS/\",\"ar\":\"https://www.facebook.com/BaherITS/\"}', NULL, '2025-05-04 05:41:27', '2025-05-04 05:41:27'),
(5, 'youtube', '{\"en\":\"https://www.youtube.com/@BaherITS\",\"ar\":\"https://www.youtube.com/@BaherITS\"}', NULL, '2025-05-04 05:41:52', '2025-05-04 05:41:52'),
(6, 'instagram', '{\"en\":\"https://www.instagram.com/baherits/\",\"ar\":\"https://www.instagram.com/baherits/\"}', NULL, '2025-05-04 05:42:14', '2025-05-04 05:42:14'),
(7, 'banner_title', '{\"en\":\"Baher Technology\",\"ar\":\"بحر التكنولوجيا\"}', NULL, '2025-05-05 07:05:06', '2025-05-05 07:07:32'),
(8, 'browse_project', '{\"en\":\"projects\",\"ar\":\"تصفح مشاريعنا \"}', NULL, '2025-08-11 22:03:52', '2025-08-11 22:03:52');


