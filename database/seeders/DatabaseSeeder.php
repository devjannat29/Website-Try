<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AdmissionApplication;
use App\Models\Category;
use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Interview;
use App\Models\JobCategory;
use App\Models\JobCircular;
use App\Models\Member;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Setting;
use App\Models\StudentCertificate;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database based on the authentic asiattcbd.com site.
     */
    public function run(): void
    {
        // 1. Admin Users
        User::updateOrCreate(
            ['email' => 'jannat@gmail.com'],
            [
                'name' => 'Nur Jannat',
                'username' => 'jannat_admin',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'phone' => '+880 1681769149',
                'status' => 'active',
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@attc.edu'],
            [
                'name' => 'ATTC Super Admin',
                'username' => 'superadmin',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'phone' => '+880 1735066260',
                'status' => 'active',
            ]
        );

        // 2. Settings (Exact from asiattcbd.com)
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Asia Technical Training Center',
                'address' => '149/9-C, Shah Alibag, Mirpur-1, Dhaka- 1216',
                'phone' => '+880 1681769149',
                'gmail' => 'asiatechnicalbd@gmail.com',
                'hotline' => '+880 1681769149, +880 1735066260',
                'hours' => 'Sunday - Saturday: 09:00 AM - 07:00 PM',
                'bteb_code' => '50821',
                'bmet_license' => 'BTEB Registered RTO',
                'logo' => '/upload/logo.png',
            ]
        );

        // 3. About
        About::updateOrCreate(
            ['id' => 1],
            [
                'about_desc' => "ASIA TECHNICAL TRAINING CENTRE (ATTC) is a training organization registered from Bangladesh Technical Education Board (BTEB) and registered address is 149/9-C Sha Alibagh, Mirpur-1, Dhaka, Bangladesh. ATTC was founded in 1985 and Mr. Md. Abdul Malek was the founder member & owner of this organization. The organization was founded with a view to provide training to unemployed peoples to get the employment.\n\nATTC has continuing to conduct vast activities in the Education, Training, and Health & Social sectors and has been offering various training courses and always been associated with skills development for local and overseas job seekers. Its principal mission is to make a substantial contribution to socio-economical development of the country and helps to make skill manpower for overseas job markets. Along with the skills training program, ATTC is expanding their courses number and strengthening day by day.",
                'mission' => "ASIA TECHNICAL TRAINING CENTRE (ATTC) is a training organization registered from Bangladesh Technical Education Board (BTEB) and registered address is 149/9-C Sha Alibagh, Mirpur-1, Dhaka, Bangladesh. ATTC was founded in 1985 and Mr. Md. Abdul Malek was the founder member & owner of this organization. The organization was founded with a view to provide training to unemployed peoples to get the employment.\n\nবাংলাদেশের সাধারণ উচ্চমানবের জন্য কর্মসংস্থানের সুযোগ সৃষ্টিতে গুরুত্বপূর্ণ অবদান রাখে বৈদেশিক কর্মসংস্থান। এই বৈদেশিক মুদ্রা অর্জনে গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে এশিয়া টেকনিক্যাল ট্রেনিং সেন্টার। দেশের সামগ্রিক অর্থনৈতিক সমৃদ্ধি অর্জনে সহায়ক ভূমিকা পালন করতে পারে বৈদেশিক মুদ্রা অর্জনে সহায়ক মানবসম্পদ গড়ে তোলার জন্য এই প্রতিষ্ঠান।",
                'vission' => "To be the premier benchmark training and overseas skill development center in Bangladesh, empowering youth with certified technical excellence for international career opportunities.",
                'job_placement' => "ATTC has continuing to conduct vast activities in the Education, Training, and Health & Social sectors and has been offering various training courses and always been associated with skills development for local and overseas job seekers. Its principal mission is to make a substantial contribution to socio-economical development of the country and helps to make skill manpower for overseas job markets. Along with the skills training program, ATTC is expanding their courses number and strengthening day by day.",
                'image' => '/upload/hero_bg.jpg',
            ]
        );

        // 4. Categories
        $catCivil = Category::updateOrCreate(['id' => 1], ['name' => 'Civil Construction', 'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb1862448?auto=format&fit=crop&w=800&q=80']);
        $catPlumbing = Category::updateOrCreate(['id' => 2], ['name' => 'Plumbing & Pipe Fitting', 'image' => 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?auto=format&fit=crop&w=800&q=80']);
        $catElectrical = Category::updateOrCreate(['id' => 3], ['name' => 'Electrical & Electronics', 'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80']);
        $catEnglish = Category::updateOrCreate(['id' => 4], ['name' => 'English Language & Communication', 'image' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=80']);
        $catSafety = Category::updateOrCreate(['id' => 5], ['name' => 'Industrial Safety & HSE', 'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80']);
        $catHvac = Category::updateOrCreate(['id' => 6], ['name' => 'HVAC & Refrigeration', 'image' => 'https://images.unsplash.com/photo-1632759145351-1d592919f522?auto=format&fit=crop&w=800&q=80']);

        // 5. Courses (Short Courses, RPL, Free & Paid Types)
        Course::truncate();
        
        // --- 1. Short Courses (Paid) ---
        Course::create([
            'name' => 'Rod Binder',
            'category' => (string) $catCivil->id,
            'duration' => '6 month',
            'Fee' => '20000',
            'bteb_level' => 'NTVQF Level-2',
            'course_type' => 'short_course',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=80',
            'description' => 'Comprehensive practical course on bar bending, rebar fixing, steel reinforcement for civil construction projects.',
            'syllabus' => "1. Basic Civil Construction Safety\n2. Rebar Bending & Cutting Techniques\n3. Beam, Column & Slab Reinforcement\n4. Drawing & Bar Bending Schedule (BBS)",
            'careers' => 'Steel Fixer, Rebar Worker, Construction Foreman',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'Plumbing & Pipe Fitting',
            'category' => (string) $catPlumbing->id,
            'duration' => '6 month',
            'Fee' => '35000',
            'bteb_level' => 'NTVQF Level-2',
            'course_type' => 'short_course',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?auto=format&fit=crop&w=800&q=80',
            'description' => 'Modern sanitary, piping and drainage installation training for domestic and commercial infrastructure.',
            'syllabus' => "1. Plumbing Tools & Safety\n2. PPR, PVC & CPVC Pipe Joining\n3. Sanitary Fitting & Fixture Installation\n4. Water Line Pressure Testing & Drainage Layout",
            'careers' => 'Pipe Fitter, Sanitary Technician, Overseas Plumber',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'Basic Electrical',
            'category' => (string) $catElectrical->id,
            'duration' => '4 month',
            'Fee' => '18000',
            'bteb_level' => 'NTVQF Level-2',
            'course_type' => 'short_course',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80',
            'description' => 'Fundamental electrical training covering house wiring, circuit breakers, and single-phase electrical maintenance.',
            'syllabus' => "1st Month: Basic Knowledge\n2nd Month: House Wiring\n3rd Month: Circuit Breakers & DB Dressing\n4th Month: Domestic Load Distribution & Testing",
            'careers' => 'Electrician, Wireman, Maintenance Technician',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'Electrical & Electronics',
            'category' => (string) $catElectrical->id,
            'duration' => '6 month',
            'Fee' => '22000',
            'bteb_level' => 'NTVQF Level-3',
            'course_type' => 'short_course',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
            'description' => 'Advanced industrial electrical systems, motor rewinding, magnetic contactor wiring, and industrial safety controls.',
            'syllabus' => "1st Month: Basic Knowledge\n2nd Month: House Wiring\n3rd Month: Motor Rewinding\n4th-6th Month: Industrial Wiring & Motor Starter Controlling Circuit",
            'careers' => 'Industrial Electrician, Substation Operator, Motor Technician',
            'status' => 'active',
        ]);

        // --- 2. RPL (Recognition of Prior Learning) Courses ---
        Course::create([
            'name' => 'RPL Electrical Installation & Maintenance',
            'category' => (string) $catElectrical->id,
            'duration' => '1-2 Weeks Assessment',
            'Fee' => '8000',
            'bteb_level' => 'NTVQF Level-2 RPL',
            'course_type' => 'rpl',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80',
            'description' => 'Government certified RPL assessment for experienced electricians seeking formal BTEB NTVQF Level-2 trade certificate for overseas visas.',
            'syllabus' => "1. Portfolio Assessment & Prior Experience Evaluation\n2. Direct Practical Competency Testing\n3. Oral & Safety Knowledge Assessment\n4. BTEB Official National Certificate Issuance",
            'careers' => 'Certified Master Electrician, Overseas Technical Specialist',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'RPL Plumbing & Sanitary Assessment',
            'category' => (string) $catPlumbing->id,
            'duration' => '1-2 Weeks Assessment',
            'Fee' => '8000',
            'bteb_level' => 'NTVQF Level-2 RPL',
            'course_type' => 'rpl',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?auto=format&fit=crop&w=800&q=80',
            'description' => 'Direct BTEB recognition of prior learning for working plumbers. Get certified without full-length classes.',
            'syllabus' => "1. Trade Verification & Tool Handling Test\n2. Pressure Testing and Piping Standards\n3. Occupational Health and Safety Protocols\n4. Final National Competency Certification",
            'careers' => 'Licensed Plumber, Plumbing Contractor, Overseas MEP Technician',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'RPL Steel Fixing & Bar Bending',
            'category' => (string) $catCivil->id,
            'duration' => '1-2 Weeks Assessment',
            'Fee' => '7500',
            'bteb_level' => 'NTVQF Level-2 RPL',
            'course_type' => 'rpl',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb1862448?auto=format&fit=crop&w=800&q=80',
            'description' => 'RPL certification for existing construction site rebar workers seeking national credential for Gulf recruitment.',
            'syllabus' => "1. BBS Drawing Interpretation Assessment\n2. Rebar Bending & Tying Competency Demonstration\n3. Scaffold & High-Altitude Safety Verification\n4. BTEB Government Certificate Endorsement",
            'careers' => 'Certified Steel Fixer, Construction Foreman, Site Supervisor',
            'status' => 'active',
        ]);

        // --- 3. Free Courses (Govt. Subsidized / ASSET Project) ---
        Course::create([
            'name' => 'Free Electrical Trade (Govt. ASSET Project)',
            'category' => (string) $catElectrical->id,
            'duration' => '3 month',
            'Fee' => '0',
            'bteb_level' => 'NTVQF Level-2 (Free)',
            'course_type' => 'short_course',
            'pricing_type' => 'free',
            'image' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=800&q=80',
            'description' => '100% Government funded skill training under the World Bank & ASSET Project with free hostel, uniforms, and monthly allowance.',
            'syllabus' => "1. Full Electrical Safety & Basic Electronics\n2. Domestic and Commercial Wiring Mastery\n3. Motor Controls & Industrial Starters\n4. Free Assessment and Guaranteed Placement Assistance",
            'careers' => 'Certified Electrician, Govt Project Technician',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'Free Plumbing & Sanitation (NSDA Funded)',
            'category' => (string) $catPlumbing->id,
            'duration' => '3 month',
            'Fee' => '0',
            'bteb_level' => 'NTVQF Level-2 (Free)',
            'course_type' => 'short_course',
            'pricing_type' => 'free',
            'image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=80',
            'description' => 'Fully subsidized technical training supported by National Skills Development Authority (NSDA) for eligible youth with job guarantee.',
            'syllabus' => "1. Complete Modern Sanitary Installation\n2. Industrial Piping and Jointing\n3. Water Supply and Firefighting Plumbing\n4. Free Trade Test and Certificate",
            'careers' => 'Certified Pipe Fitter, Plumbing Technician',
            'status' => 'active',
        ]);

        // --- English Courses ---
        Course::create([
            'name' => 'Spoken English & Workplace Communication',
            'category' => (string) $catEnglish->id,
            'duration' => '3 month',
            'Fee' => '12000',
            'bteb_level' => 'Vocational Language Level-1',
            'course_type' => 'short_course',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=80',
            'description' => 'Specialized English language course for technical workers, foreign job interviews, overseas workplace communication, and site safety commands.',
            'syllabus' => "1. Everyday English & Self Introduction\n2. Job Interview Speaking & Mock Client Sessions\n3. Workshop Safety Commands & Technical Vocabulary\n4. Listening Comprehension & Workplace Communication",
            'careers' => 'Overseas Technical Specialist, Bilingual Site Supervisor, Global Technician',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'Free Pre-departure English & Etiquette (Govt. Subsidized)',
            'category' => (string) $catEnglish->id,
            'duration' => '1 month',
            'Fee' => '0',
            'bteb_level' => 'Govt. Subsidized',
            'course_type' => 'short_course',
            'pricing_type' => 'free',
            'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80',
            'description' => '100% Free pre-departure English training and international workplace etiquette for migrant workers traveling abroad for employment.',
            'syllabus' => "1. Pre-departure Orientation & Cultural Etiquette\n2. Basic English Speaking for Workplace\n3. Airport, Immigration & Healthcare Communication\n4. Emergency Signs & Safety Protocols",
            'careers' => 'Certified Overseas Worker',
            'status' => 'active',
        ]);

        Course::create([
            'name' => 'RPL English Communication Assessment',
            'category' => (string) $catEnglish->id,
            'duration' => '1 Week Assessment',
            'Fee' => '6000',
            'bteb_level' => 'RPL Certification',
            'course_type' => 'rpl',
            'pricing_type' => 'paid',
            'image' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80',
            'description' => 'Direct evaluation of spoken and functional English skills for candidates seeking language proficiency certificates for overseas work visas.',
            'syllabus' => "1. Speaking Fluency Assessment\n2. Listening & Understanding Test\n3. Technical Reading & Comprehension\n4. Formal BTEB/Institutional Language Certificate",
            'careers' => 'Certified English Communicator',
            'status' => 'active',
        ]);

        // 6. Services (from video)
        Service::truncate();
        Service::create([
            'id' => 1,
            'name' => 'Career Counseling',
            'description' => "At Asia Technical Training Center (A.T.T.C), we provide career counseling services to ensure our students are well-prepared for their professional journeys. Career counseling plays a vital role in shaping students' careers by guiding them toward the right path based on their skills, interests, and aspirations.",
            'icon' => 'fa-solid fa-compass-drafting',
            'status' => 'active',
        ]);

        Service::create([
            'id' => 2,
            'name' => 'Hostel',
            'description' => "Hostel Facility at Asia Technical Training Center (A.T.T.C). Asia Technical Training Center offers accommodation for students coming from distant areas. Our hostel facility is safe, clean, and provides a supportive environment with 24/7 security and dining.",
            'icon' => 'fa-solid fa-hotel',
            'status' => 'active',
        ]);

        Service::create([
            'id' => 3,
            'name' => 'Job Placement',
            'description' => "At Asia Technical Training Center (A.T.T.C), we are dedicated to supporting our students' career aspirations through a comprehensive Job Placement program connecting students with top overseas and domestic employers in the Gulf, Japan, and Europe.",
            'icon' => 'fa-solid fa-briefcase',
            'status' => 'active',
        ]);

        // 7. Members (Faculties & Management from video)
        Member::truncate();
        Member::create([
            'name' => 'MD.Abdul Malek',
            'designation' => 'CEO',
            'education' => 'Diploma in Engineering',
            'department' => 'Principle',
            'image' => '/upload/member/member_1.jpg',
        ]);

        Member::create([
            'name' => 'Delowar Hossain (Emon)',
            'designation' => 'Senior Instructor & Manager',
            'education' => 'B.Sc in Engineering',
            'department' => 'Senior Instructor & Manager',
            'image' => '/upload/member/member_2.jpg',
        ]);

        Member::create([
            'name' => 'Jakir Hossain',
            'designation' => 'Senior Instructor & Manager',
            'education' => 'B.Sc in Engineering',
            'department' => 'Senior Instructor & Manager',
            'image' => '/upload/member/member_3.jpg',
        ]);

        // 8. Testimonials (from video)
        Testimonial::truncate();
        Testimonial::create([
            'name' => 'Omor Faruk',
            'trade' => 'Electrical Student',
            'batch' => 'Reg. 3406 Batch No. 275 (2018)',
            'quote' => 'I am Omor Faruk, I Am Student from Asia Technical Training Center. Reg. 3406 Batch No. 275 (2018). I Got a Advanced Course From Electrical, I learnt about Basic Knowledge, House Wiring, Motor Re-winding, Industrial Wiring & Motor Controlling etc.',
        ]);

        Testimonial::create([
            'name' => 'Md.Raju',
            'trade' => 'Electrical Student',
            'batch' => 'Reg. 3406 Batch No. 275 (2018)',
            'quote' => 'I am Md.Raju, I Am Student from Asia Technical Training Center. Reg. 3406 Batch No. 275 (2018). I Got a Advanced Course From Electrical, I learnt about Basic Knowledge, House Wiring, Motor Re-winding, Industrial Wiring & Motor Controlling etc.',
        ]);

        Testimonial::create([
            'name' => 'Md.Nishad',
            'trade' => 'Plumbing & Pipe Fittings',
            'batch' => 'Batch No. 280 (2019)',
            'quote' => 'I am Md.Nishad, I Am Student from Asia Technical Training Center. Reg. 3406 Batch No. 275 (2018). I Got a Advanced Course From Plumbing & Pipe Fittings. The practical hand-on training helped me land a certified job in the UAE.',
        ]);

        // 9. Events (from video)
        Event::truncate();
        Event::create([
            'title' => 'বিদায় সংবর্ধনা: UAE-তে কর্মসংস্থানের সুযোগ',
            'date' => 'August 26, 2024',
            'description' => 'Asia Technical Training Center এর পক্ষ থেকে সংযুক্ত আরব আমিরাতের (UAE) বিখ্যাত কোম্পানিতে দক্ষ ট্রেড কর্মী হিসেবে সফল শিক্ষার্থীদের বিদায় সংবর্ধনা জানানো হয়। প্রতিষ্ঠানটির প্রতিষ্ঠাতা ও প্রিন্সিপাল মহোদয় শিক্ষার্থীদের উজ্জ্বল ভবিষ্যৎ কামনা করেন এবং বিদেশে সুনামের সাথে কাজ করার দিকনির্দেশনা প্রদান করেন।',
            'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80',
        ]);

        Event::create([
            'title' => 'NSDA Senior Assistant Secretary Visits Asia TTC for ASSET Project Assessment',
            'date' => 'September 15, 2024',
            'description' => 'Senior Assistant Secretary from National Skills Development Authority (NSDA) conducted a comprehensive assessment of training infrastructure and student workshops at Asia Technical Training Center under the ASSET project.',
            'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80',
        ]);

        Event::create([
            'title' => 'Honorable DG and NSDA Officials Visit ASSET Project Assessment at Asia TTC',
            'date' => 'October 10, 2024',
            'description' => 'Honorable Director General and distinguished officials visited ATTC to review competency-based assessments and trade testing facilities for overseas employment.',
            'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        ]);

        // 10. Notices (from video)
        Notice::truncate();
        Notice::create([
            'title' => '৩টি ট্রেডে বিদেশগামী সকল চাকরি-প্রার্থীদের জন্য ০৭ ডিসেম্বর ২০২৩ ইং তারিখে নতুন ব্যাচ শুরু হতে যাচ্ছে। ট্রেডের নাম: ইলেকট্রিক্যাল',
            'category' => 'Admission',
            'date' => '07 Dec 2023',
            'badge' => 'New Batch',
            'file' => null,
            'summary' => 'ইলেকট্রিক্যাল ট্রেডে বিদেশে চাকরির জন্য জরুরি ভিত্তিতে নতুন প্রশিক্ষণার্থী ভর্তি চলছে।',
        ]);

        Notice::create([
            'title' => 'প্লাম্বিং অ্যান্ড পাইপ ফিটিংস এবং রড বাইন্ডিং ট্রেডে নতুন ব্যাচে ভর্তি চলছে',
            'category' => 'Admission',
            'date' => '15 Jan 2024',
            'badge' => 'Admission',
            'file' => null,
            'summary' => '৬ মাস মেয়াদি সরকারি সনদপ্রাপ্ত কোর্সে দ্রুত যোগাযোগ করে আসন নিশ্চিত করুন।',
        ]);

        Notice::create([
            'title' => 'BTEB জাতীয় দক্ষতা মান সনদ বিতরণ অনুষ্ঠান ২০২৪ সংক্রান্ত বিজ্ঞপ্তি',
            'category' => 'Certification',
            'date' => '20 Feb 2024',
            'badge' => 'Notice',
            'file' => null,
            'summary' => 'সফলভাবে কোর্স সম্পন্নকারী সকল শিক্ষার্থীদের সনদপত্র বিতরণ করা হবে।',
        ]);

        // 11. Galleries
        Gallery::truncate();
        $galleryImages = [
            ['title' => 'Classroom Theory Session', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Practical Workshop Training', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'MoU Signing Ceremony', 'category' => 'placement', 'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Overseas Job Placement Briefing', 'category' => 'placement', 'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Safety Helmet Ceremony', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Foreign Delegate Assessment', 'category' => 'overseas', 'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Graduation & Certificate Award', 'category' => 'placement', 'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Center Lab Assessment', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=800&q=80'],
        ];
        foreach ($galleryImages as $g) {
            Gallery::create($g);
        }

        // 12. Job Categories & Circulars
        JobCategory::truncate();
        $jc = JobCategory::create(['category_title' => 'Middle East Employment']);
        JobCircular::truncate();
        JobCircular::create([
            'category' => 'Middle East Employment',
            'job_title' => 'Skilled Electrician & Pipe Fitter Recruitment for UAE',
            'company' => 'Reputed Gulf Engineering LLC',
            'country' => 'UAE',
            'vacancies' => 25,
            'salary' => '1,800 - 2,500 AED',
            'deadline' => '30 December 2026',
            'requirements' => 'Minimum 2 years experience with BTEB / ATTC vocational trade certificate.',
            'status' => 'active',
        ]);

        // 13. Interviews
        Interview::truncate();
        Interview::create([
            'title' => 'Direct Client Interview for UAE Construction Project',
            'trades' => 'Electrician, Plumber, Rod Binder',
            'date' => 'Every Saturday & Tuesday',
            'venue' => 'ATTC Main Campus, Mirpur-1, Dhaka',
            'delegates' => 'Overseas Delegate Team',
        ]);

        // 14. Demo Student Certificates
        StudentCertificate::truncate();
        StudentCertificate::create([
            'reg_number' => '3406',
            'student_name' => 'Omor Faruk',
            'father_name' => 'Abdul Karim',
            'course' => 'Basic Electrical & Industrial Wiring',
            'bteb_level' => 'NTVQF Level-2',
            'grade' => 'A+',
            'session' => '2018 (Batch 275)',
            'issue_date' => '2018-11-20',
            'status' => 'verified',
            'placement_status' => 'Employed in UAE',
            'certificate_id' => 'ATTC-2018-3406',
        ]);
    }
}
