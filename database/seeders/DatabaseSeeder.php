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
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin & Demo Users
        User::updateOrCreate(
            ['email' => 'jannat@gmail.com'],
            [
                'name' => 'Jannat',
                'username' => 'jannat_admin',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'phone' => '+880 1700-123456',
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
                'phone' => '+880 1800-987654',
                'status' => 'active',
            ]
        );

        // 2. Settings
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Asia Technical Training Center (ATTC)',
                'address' => 'Plot #42, Industrial Area, Sector 7, Uttara, Dhaka-1230, Bangladesh',
                'phone' => '+880 2-8954321',
                'gmail' => 'info@attc-bd.org',
                'hotline' => '+880 1711-234567, +880 1911-765432',
                'hours' => 'Sat - Thu: 8:00 AM - 6:00 PM (Friday Closed)',
                'bteb_code' => 'BTEB-54092',
                'bmet_license' => 'BMET/TR-098/2021',
                'logo' => null,
            ]
        );

        // 3. About
        About::updateOrCreate(
            ['id' => 1],
            [
                'about_desc' => 'Asia Technical Training Center (ATTC) is an internationally accredited technical vocational education and human resource development institute. Established with a commitment to empower youth with global industrial craftsmanship, ATTC provides state-of-the-art workshop facilities, simulator-based learning, and hands-on apprenticeship matching standards required in GCC countries, Europe, Japan, and Southeast Asia.',
                'mission' => 'To deliver world-class technical skills, occupational safety education, and international certifications that bridge the gap between global industrial workforce demand and aspiring technicians.',
                'vission' => 'To be the premier benchmark training and overseas skill development academy in South Asia, enabling over 50,000 certified craftsmen to secure dignified international careers.',
                'job_placement' => 'Our dedicated Overseas Placement Cell maintains direct liaison with certified recruiting agents, multinational construction conglomerates, shipyards, oil & gas refiners in Saudi Arabia, UAE, Qatar, Kuwait, Japan, and Singapore. Over 18,500 ATTC graduates currently work abroad.',
                'image' => null,
            ]
        );

        // 4. Categories
        $catWelding = Category::updateOrCreate(['name' => 'Welding & Heavy Fabrication'], ['image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=80']);
        $catElectrical = Category::updateOrCreate(['name' => 'Electrical & Automation'], ['image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80']);
        $catMechanical = Category::updateOrCreate(['name' => 'Mechanical & Pipe Fitting'], ['image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80']);
        $catSafety = Category::updateOrCreate(['name' => 'Industrial Safety & HSE'], ['image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80']);
        $catHvac = Category::updateOrCreate(['name' => 'HVAC & Industrial Chiller'], ['image' => 'https://images.unsplash.com/photo-1632759145351-1d592919f522?auto=format&fit=crop&w=800&q=80']);
        $catIt = Category::updateOrCreate(['name' => 'Industrial IT & CNC'], ['image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80']);

        // 5. Courses
        $coursesData = [
            [
                'name' => '6G SMAW & TIG Pipe Welding (ASME IX)',
                'category' => (string) $catWelding->id,
                'duration' => '3 Months (360 Hours)',
                'Fee' => '35,000 BDT',
                'bteb_level' => 'NTVQF Level-3 & Level-4',
                'image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=80',
                'description' => 'Comprehensive masterclass on Shielded Metal Arc Welding (SMAW) and Gas Tungsten Arc Welding (GTAW) in 1G through 6G pipe positions compliant with ASME Section IX boiler and pressure vessel code.',
                'syllabus' => [
                    'Module 1: Workshop Safety, PPE & Hot Work Permits',
                    'Module 2: Metallurgy, Electrode Classification & Shielding Gases',
                    'Module 3: Joint Preparation, Beveling & Fit-up',
                    'Module 4: 1G to 4G Plate Welding Root, Hot Pass, Capping',
                    'Module 5: 5G & 6G Pipe Welding (Carbon Steel & Stainless)',
                    'Module 6: Radiographic Testing (RT) & Visual Inspection Standards'
                ],
                'careers' => 'Oil & Gas Pipelines, Offshore Platforms, Power Plants, Shipyards (GCC & Singapore)',
                'link' => '#',
                'status' => '1',
            ],
            [
                'name' => 'Industrial Automation & PLC/SCADA Programming',
                'category' => (string) $catElectrical->id,
                'duration' => '4 Months (480 Hours)',
                'Fee' => '40,000 BDT',
                'bteb_level' => 'NTVQF Level-4',
                'image' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=800&q=80',
                'description' => 'Hands-on practical engineering course training students on Siemens S7-1200, Delta, and Mitsubishi PLCs, VFD motor control, HMI design, and sensor networking.',
                'syllabus' => [
                    'Module 1: Relay Logic & Control Circuit Diagrams',
                    'Module 2: Siemens TIA Portal & Ladder Logic Architecture',
                    'Module 3: Variable Frequency Drive (VFD) Calibration & Analog I/O',
                    'Module 4: Industrial Pneumatics & Electro-Pneumatics',
                    'Module 5: SCADA & HMI Touch Panel Interface Design',
                    'Module 6: Troubleshooting Industrial Control Panels'
                ],
                'careers' => 'Automated Factory Technician, Process Control Engineer, Maintenance Specialist',
                'link' => '#',
                'status' => '1',
            ],
            [
                'name' => 'Pipe Fabricator & Industrial Fitter',
                'category' => (string) $catMechanical->id,
                'duration' => '3 Months (300 Hours)',
                'Fee' => '28,000 BDT',
                'bteb_level' => 'NTVQF Level-2 & 3',
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
                'description' => 'Teaches blueprint reading, piping isometric drawings, spool fabrication, flange alignment, pipe bending, and pressure testing methodology for refinery plants.',
                'syllabus' => [
                    'Module 1: Isometric & P&ID Drawing Interpretation',
                    'Module 2: Pipe Cutting, Beveling & Grinding Methods',
                    'Module 3: Flange & Fitting Offset Calculations',
                    'Module 4: Header, Branch & Miter Cut Fabrication',
                    'Module 5: Hydrostatic & Pneumatic Pressure Testing'
                ],
                'careers' => 'Petrochemical Plants, Ship Building, Power Station Piping',
                'link' => '#',
                'status' => '1',
            ],
            [
                'name' => 'Industrial Electrical & Substation Installation',
                'category' => (string) $catElectrical->id,
                'duration' => '3 Months (320 Hours)',
                'Fee' => '30,000 BDT',
                'bteb_level' => 'NTVQF Level-3',
                'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80',
                'description' => 'Comprehensive electrical course covering 11kV/0.4kV substation equipment, HT/LT switchgear, power transformers, cable termination, motor starters, and generator synchronizing.',
                'syllabus' => [
                    'Module 1: Electrical Safety, Earthing & Lightning Protection',
                    'Module 2: HT/LT Cable Splicing & Heat Shrink Termination',
                    'Module 3: Transformer Testing, Megger & Oil Dielectric Tests',
                    'Module 4: DOL, Star-Delta & Soft Starters wiring',
                    'Module 5: Busbar Trunking & Industrial Distribution Boards'
                ],
                'careers' => 'Substation Operator, Industrial Electrician, Construction Electrical Foreman',
                'link' => '#',
                'status' => '1',
            ],
            [
                'name' => 'Occupational Health & Safety (NEBOSH/OSHA Standards)',
                'category' => (string) $catSafety->id,
                'duration' => '2 Months (160 Hours)',
                'Fee' => '25,000 BDT',
                'bteb_level' => 'International Safety Certificate',
                'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80',
                'description' => 'Prepares safety officers and site inspectors in hazard identification, risk assessment, scaffolding safety, confined space rescue, and workplace accident prevention.',
                'syllabus' => [
                    'Module 1: Principles of Health & Safety Management',
                    'Module 2: Risk Assessment & Hazard Identification Matrix',
                    'Module 3: Working at Heights & Scaffolding Tagging',
                    'Module 4: Confined Space Entry & Gas Monitoring',
                    'Module 5: Fire Safety & Emergency Evacuation Protocols'
                ],
                'careers' => 'Safety Officer, HSE Inspector, Site Safety Supervisor',
                'link' => '#',
                'status' => '1',
            ],
            [
                'name' => 'Commercial HVAC & VRF Refrigeration System',
                'category' => (string) $catHvac->id,
                'duration' => '3 Months (300 Hours)',
                'Fee' => '32,000 BDT',
                'bteb_level' => 'NTVQF Level-3',
                'image' => 'https://images.unsplash.com/photo-1632759145351-1d592919f522?auto=format&fit=crop&w=800&q=80',
                'description' => 'Specialized training on Variable Refrigerant Flow (VRF/VRV) systems, chiller plants, duct design, copper brazing, refrigerant recovery, and electronic inverter controls.',
                'syllabus' => [
                    'Module 1: Thermodynamic Cycle & Refrigerant Chemistry',
                    'Module 2: Inverter Compressor Diagnosis & Circuitry',
                    'Module 3: Ductwork Layout, Air Balancing & CFM Calculation',
                    'Module 4: VRF Multi-Split Piping & Communication Wiring',
                    'Module 5: Vacuuming, Pressure Leak Testing & Gas Charging'
                ],
                'careers' => 'HVAC Maintenance Technician, Chiller Plant Specialist (GCC Hotels & Hospitals)',
                'link' => '#',
                'status' => '1',
            ],
        ];

        foreach ($coursesData as $c) {
            Course::updateOrCreate(['name' => $c['name']], $c);
        }

        // 6. Services
        $servicesData = [
            [
                'name' => 'Customized Corporate Trade Testing',
                'description' => 'Comprehensive skill assessment, certified trade testing, and pre-departure vetting for foreign client delegations hiring technicians.',
                'icon' => 'clipboard-check',
                'status' => 'active',
            ],
            [
                'name' => 'ASME & AWS Certified Welder Qualification',
                'description' => 'Official Welder Performance Qualification (WPQ) testing under qualified welding inspectors with ultrasonic & radiographic validation.',
                'icon' => 'flame',
                'status' => 'active',
            ],
            [
                'name' => 'Overseas Interview & Delegation Hosting',
                'description' => 'Complete logistical support including air-conditioned testing workshops, testing materials, and high-speed live broadcasting for foreign employers.',
                'icon' => 'globe-americas',
                'status' => 'active',
            ],
            [
                'name' => 'Certificate Verification & BMET Attestation',
                'description' => 'Online QR-coded diploma verification database connected to BMET database for rapid embassy visa processing.',
                'icon' => 'shield-check',
                'status' => 'active',
            ],
        ];

        foreach ($servicesData as $s) {
            Service::updateOrCreate(['name' => $s['name']], $s);
        }

        // 7. Members / Faculty
        $membersData = [
            [
                'name' => 'Engr. Md. Rafiqul Islam, PEng',
                'designation' => 'Principal & Executive Director',
                'education' => 'B.Sc. Mechanical Eng. (BUET), M.Sc. (NUS Singapore)',
                'department' => 'Administration & Technical Leadership',
                'experience' => '28+ Years in Industrial Leadership & Overseas Training',
                'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'name' => 'Engr. Kazi Shamsul Haque',
                'designation' => 'Head of Electrical & Automation Dept.',
                'education' => 'B.Sc. Electrical & Electronic Eng. (CUET)',
                'department' => 'Electrical Engineering & PLC Control',
                'experience' => '18+ Years in Substation & Industrial Automation',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'name' => 'Master Trainer David Miller',
                'designation' => 'Senior Welding Technologist & Inspector',
                'education' => 'AWS-CWI Certified Welding Inspector, TWI UK',
                'department' => 'Welding & Metallurgy Research',
                'experience' => '22+ Years in Offshore North Sea & Gulf Pipelines',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'name' => 'Engr. Nusrat Jahan',
                'designation' => 'Lead Safety Instructor (HSE)',
                'education' => 'NEBOSH Diploma (UK), IOSH Managing Safely',
                'department' => 'Occupational Health & Safety',
                'experience' => '12+ Years in Oil & Gas Construction Projects',
                'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80',
            ],
        ];

        foreach ($membersData as $m) {
            Member::updateOrCreate(['name' => $m['name']], $m);
        }

        // 8. Notices
        $noticesData = [
            [
                'title' => 'Admission Open for 45th Professional Batch (Winter 2026-2027)',
                'category' => 'Admission',
                'date' => 'October 15, 2026',
                'file' => null,
                'summary' => 'Registration is now ongoing for 6G Welding, Industrial Electrical, PLC Automation, and HVAC courses. Limited seats with 30% scholarship for top qualifying applicants.',
                'badge' => 'New Batch',
            ],
            [
                'title' => 'Saudi Aramco Project: Direct Client Interview for 120 Welders & Fitters',
                'category' => 'Overseas Job',
                'date' => 'October 28, 2026',
                'file' => null,
                'summary' => 'Delegates from Al-Khobar Contracting will conduct live trade tests at ATTC Workshop #2 on October 28th. Free visa, accommodation, and overtime benefits provided.',
                'badge' => 'Overseas Client',
            ],
            [
                'title' => 'BTEB National Technical Vocational Qualification (NTVQF) Exam Schedule',
                'category' => 'Examination',
                'date' => 'November 05, 2026',
                'file' => null,
                'summary' => 'Practical and oral assessments for Level-2 & Level-3 candidates will commence from November 5th. All trainees must carry their biometric admit cards.',
                'badge' => 'Exam Routine',
            ],
            [
                'title' => 'Special Weekend Industrial Safety (OSHA) Masterclass Workshop',
                'category' => 'Workshop',
                'date' => 'November 12, 2026',
                'file' => null,
                'summary' => 'Intensive two-day certified workshop covering Scaffolding erection inspection, confined space entry, and lockout/tagout (LOTO) protocols with live simulations.',
                'badge' => 'Certificate Event',
            ],
        ];

        foreach ($noticesData as $n) {
            Notice::updateOrCreate(['title' => $n['title']], $n);
        }

        // 9. Events
        $eventsData = [
            [
                'title' => 'Annual International Technical Career Expo & Alumni Meet 2026',
                'date' => 'November 20, 2026',
                'time' => '09:00 AM - 05:00 PM',
                'venue' => 'ATTC Main Auditorium & Demonstration Grounds',
                'description' => 'Over 30 national and multinational recruiting agencies, engineering firms, and foreign delegates meet graduating technicians for immediate job offer letters.',
                'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Hands-on Robotic Arc Welding & Cobot Simulation Workshop',
                'date' => 'December 04, 2026',
                'time' => '10:00 AM - 04:00 PM',
                'venue' => 'Automation Lab 3, ATTC Complex',
                'description' => 'Explore the next generation of automated collaborative robot welding with certified ABB robotics specialists.',
                'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&w=800&q=80',
                'status' => 'upcoming',
            ],
        ];

        foreach ($eventsData as $e) {
            Event::updateOrCreate(['title' => $e['title']], $e);
        }

        // 10. Job Categories & Circulars
        $jobCat1 = JobCategory::updateOrCreate(['category_title' => 'Welding & Heavy Piping']);
        $jobCat2 = JobCategory::updateOrCreate(['category_title' => 'Electrical & Power Systems']);
        $jobCat3 = JobCategory::updateOrCreate(['category_title' => 'HVAC & Mechanical Technicians']);

        $circularsData = [
            [
                'category' => (string) $jobCat1->id,
                'job_title' => '6G TIG & SMAW Pipe Welder (Carbon / Stainless)',
                'company' => 'Consolidated Contractors Company (CCC)',
                'country' => 'Qatar',
                'vacancies' => 45,
                'salary' => '2,800 - 3,500 QAR + Food & Accommodation',
                'deadline' => 'October 30, 2026',
                'requirements' => 'Must have 6G certification (ASME IX) with minimum 3 years fabrication or shipyard experience. Free medical and round-trip annual air ticket.',
                'status' => 'active',
            ],
            [
                'category' => (string) $jobCat2->id,
                'job_title' => 'Industrial Substation Maintenance Electrician',
                'company' => 'Alfanar Engineering Projects',
                'country' => 'Saudi Arabia (Riyadh & Dammam)',
                'vacancies' => 30,
                'salary' => '2,600 - 3,200 SAR + OT + Medical',
                'deadline' => 'November 10, 2026',
                'requirements' => 'Diploma in Electrical or BTEB Level-3 certificate. Competence in reading single-line diagrams, transformer maintenance, and cable jointing.',
                'status' => 'active',
            ],
            [
                'category' => (string) $jobCat3->id,
                'job_title' => 'Commercial Chiller & Central AC Technician',
                'company' => 'Drake & Scull Facilities Management',
                'country' => 'United Arab Emirates (Dubai)',
                'vacancies' => 25,
                'salary' => '2,500 - 3,000 AED + Free Accommodation',
                'deadline' => 'November 15, 2026',
                'requirements' => 'Experience with Daikin, Carrier, or York centrifugal chillers, VRF diagnostics, and BMS controls.',
                'status' => 'active',
            ],
        ];

        foreach ($circularsData as $c) {
            JobCircular::updateOrCreate(['job_title' => $c['job_title']], $c);
        }

        // 11. Interviews
        $interviewsData = [
            [
                'title' => 'Direct Client Interview: Al-Yamama Group (KSA)',
                'trades' => 'Pipe Fabricators, 6G Welders, Riggers',
                'date' => 'October 25, 2026 at 08:30 AM',
                'venue' => 'ATTC Testing Yard, Gate 2',
                'delegates' => 'Engr. Tariq Al-Ghamdi & Technical Team',
            ],
            [
                'title' => 'Singapore Jurong Shipyard Recruitment Assessment',
                'trades' => 'Marine Electricians & Hull Fitters',
                'date' => 'November 08, 2026 at 09:00 AM',
                'venue' => 'ATTC Marine Engineering Lab',
                'delegates' => 'Mr. Kelvin Tan & Human Resources Singapore',
            ],
        ];

        foreach ($interviewsData as $i) {
            Interview::updateOrCreate(['title' => $i['title']], $i);
        }

        // 12. Testimonials
        $testimonialsData = [
            [
                'name' => 'Md. Faruk Hossain',
                'trade' => '6G TIG & SMAW Pipe Welder',
                'country' => 'Saudi Arabia (Aramco Project)',
                'salary' => '3,600 SAR/Month',
                'batch' => '38th Batch (2024)',
                'quote' => 'Before joining ATTC, I had zero professional pipe welding knowledge. In 3 months of rigorous 6G booth training, my weld X-rays became flawless. ATTC arranged my direct client trade test, and within 30 days I flew to Dammam.',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80',
            ],
            [
                'name' => 'Shakil Ahmed',
                'trade' => 'Industrial Automation & PLC Technician',
                'country' => 'United Arab Emirates (Dubai)',
                'salary' => '3,800 AED/Month',
                'batch' => '40th Batch (2025)',
                'quote' => 'The PLC laboratory at ATTC with Siemens S7-1200 workstations gives you real industrial confidence. During the Dubai client interview, they asked me to write ladder logic on the spot, and I solved it in 5 minutes.',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80',
            ],
            [
                'name' => 'Tanvir Hasan',
                'trade' => 'HVAC & VRF System Specialist',
                'country' => 'Qatar (Hamad Int Airport Facilities)',
                'salary' => '3,200 QAR/Month',
                'batch' => '39th Batch (2024)',
                'quote' => 'The instructors at ATTC teach with genuine care. Every student gets their own manifold gauge, vacuum pump, and brazing torch. Today I am supporting my entire family thanks to ATTC.',
                'image' => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=300&q=80',
            ],
        ];

        foreach ($testimonialsData as $t) {
            Testimonial::updateOrCreate(['name' => $t['name']], $t);
        }

        // 13. Galleries
        $galleriesData = [
            ['title' => 'Modern 6G Welding Practice Booths', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Electrical Substation & Switchgear Lab', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'High-Precision Pipe Fitting Workshop', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Aramco Delegates Conducting Live Trade Test', 'category' => 'placement', 'image' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Successful Batch Receiving Visa & Air Tickets', 'category' => 'placement', 'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Alumni Working on Offshore Platform in Qatar', 'category' => 'overseas', 'image' => 'https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Technicians at Dubai Metro Central Depot', 'category' => 'overseas', 'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80'],
            ['title' => 'Industrial Safety Scaffolding Drill', 'category' => 'general', 'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80'],
        ];

        foreach ($galleriesData as $g) {
            Gallery::updateOrCreate(['title' => $g['title']], $g);
        }

        // 14. Sample Admission Applications
        AdmissionApplication::updateOrCreate(
            ['phone' => '01711998877'],
            [
                'applicant_name' => 'Kamrul Islam',
                'course_name' => '6G SMAW & TIG Pipe Welding (ASME IX)',
                'nid' => '19982692012000451',
                'shift' => 'Morning (08:30 AM - 12:30 PM)',
                'hostel' => 'Yes, Hostel Required',
                'address' => 'Vill: Joypur, P.O: Chandpur Sadar, Dist: Chandpur',
                'status' => 'approved',
            ]
        );

        AdmissionApplication::updateOrCreate(
            ['phone' => '01822334455'],
            [
                'applicant_name' => 'Mehedi Hasan Babu',
                'course_name' => 'Industrial Automation & PLC/SCADA Programming',
                'nid' => '20012693049000182',
                'shift' => 'Evening (02:00 PM - 06:00 PM)',
                'hostel' => 'No',
                'address' => 'House 14, Road 5, Mirpur-10, Dhaka',
                'status' => 'pending',
            ]
        );

        // 15. Sample Student Certificate Records
        StudentCertificate::updateOrCreate(
            ['reg_number' => 'ATTC-2025-4109'],
            [
                'student_name' => 'Md. Faruk Hossain',
                'father_name' => 'Abdul Jalil',
                'course' => '6G SMAW & TIG Pipe Welding (ASME IX)',
                'bteb_level' => 'NTVQF Level-3 Certified',
                'grade' => 'A+ (Distinction)',
                'session' => 'January - April 2025',
                'issue_date' => 'May 02, 2025',
                'status' => 'verified',
                'placement_status' => 'Placed with Aramco KSA Project',
                'certificate_id' => 'CERT-ATTC-994109',
            ]
        );
    }
}
