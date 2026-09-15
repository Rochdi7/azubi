@extends('frontoffice.layouts.app')

@section('title', 'Privacy Policy | Azubi | Azubi')

@section('meta')
    <meta name="description" content="Learn how Azubi protects and handles your personal information." />
    <meta name="keywords" content="Azubi privacy policy,student data protection,education privacy,data handling policy" />
    <meta property="og:title" content="Privacy Policy | Azubi" />
    <meta property="og:description" content="Learn how Azubi protects and handles your personal information." />
    <meta property="og:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Privacy Policy | Azubi" />
    <meta name="twitter:description" content="Learn how Azubi protects and handles your personal information." />
    <meta name="twitter:image" content="https://images.azubi.ma/og-images/default-og.png" />
    <link rel="canonical" href="{{ url('/privacy') }}" />
@endsection

@section('content')
    <main class="min-h-screen py-16 md:py-24" style="background-color: #F7F8FA">
        <div class="mx-auto w-full px-4 sm:px-6 lg:px-8 max-w-3xl">
            <div class="mb-12 text-center space-y-4">
                <h1 class="text-4xl md:text-5xl font-semibold tracking-tight" style="color: #2C3340">
                    Privacy Policy
                </h1>
                <p class="text-lg" style="color: rgba(44, 51, 64, 0.7)">
                    Learn how we protect and handle your personal information
                </p>
            </div>
            <div class="rounded-2xl p-8 md:p-12 shadow-sm"
                style="
                background-color: #ffffff;
                box-shadow:
                  0 4px 8px rgba(44, 51, 64, 0.08),
                  0 2px 4px rgba(44, 51, 64, 0.04);
              ">
                <div class="azubi-legal-prose">
                    <p class="text-lg" style="color: rgba(44, 51, 64, 0.8)">
                        <strong>Effective Date:</strong> January 1, 2026<br /><strong>Last Updated:</strong>
                        January 1, 2026
                    </p>
                    <h2>1. Introduction</h2>
                    <p>
                        Azubi, operated by Azubi (&quot;we,&quot;
                        &quot;us,&quot; &quot;our&quot;), is committed to protecting
                        your privacy and ensuring the security of your personal
                        information. This Privacy Policy explains how we collect, use,
                        disclose, and safeguard your information when you use our
                        website, mobile application, and marketplace platform
                        (collectively, the &quot;Platform&quot;).
                    </p>
                    <p>
                        <strong>Azubi operates as a two-sided marketplace
                            platform</strong>
                        connecting international students with German employers
                        offering Ausbildung opportunities. This Privacy Policy covers
                        how we process your data both as a platform operator and how
                        your data is shared with employers when you use our
                        marketplace services.
                    </p>
                    <p>
                        By accessing or using Azubi, you acknowledge that you
                        have read, understood, and agree to be bound by this Privacy
                        Policy. If you do not agree with this policy, please
                        discontinue use of our Platform immediately.
                    </p>
                    <h2>2. Information We Collect</h2>
                    <h3>2.1 Personal Information</h3>
                    <p>
                        We collect personal information that you voluntarily provide
                        to us, including but not limited to:
                    </p>
                    <ul>
                        <li>Full name, date of birth, nationality, and gender</li>
                        <li>
                            Contact information (email address, phone number, mailing
                            address)
                        </li>
                        <li>
                            Educational background (academic qualifications,
                            transcripts, certificates)
                        </li>
                        <li>
                            Professional information (work experience, skills, career
                            goals)
                        </li>
                        <li>
                            Language proficiency levels (German language test results)
                        </li>
                        <li>
                            Identification documents (passport, visa documents, ID
                            cards)
                        </li>
                        <li>
                            Financial information (payment card details, billing
                            address)
                        </li>
                        <li>
                            Application materials (CVs, cover letters, motivation
                            letters, video introductions)
                        </li>
                        <li>Profile photo and any uploaded documents</li>
                    </ul>
                    <h3>2.2 Marketplace-Specific Information</h3>
                    <p>As a marketplace platform, we also collect:</p>
                    <ul>
                        <li>
                            <strong>Profile Data:</strong> Professional headline, bio,
                            preferred sectors, city preferences, availability dates
                        </li>
                        <li>
                            <strong>Profile Visibility Settings:</strong> Your chosen
                            privacy controls for profile sections (public/private
                            settings)
                        </li>
                        <li>
                            <strong>Profile Strength Data:</strong> Calculated score
                            (0-100) based on profile completeness across 8 categories
                        </li>
                        <li>
                            <strong>Job Application Data:</strong> Jobs you apply to,
                            application timestamps, application status, withdrawal
                            records
                        </li>
                        <li>
                            <strong>Communication Data:</strong> Messages exchanged with
                            employers through our platform
                        </li>
                        <li>
                            <strong>Employer Interaction Data:</strong> Profile views by
                            employers, application views, employer responses
                        </li>
                        <li>
                            <strong>Search and Browse History:</strong> Jobs you view,
                            search queries, filter preferences
                        </li>
                        <li>
                            <strong>Video Introductions:</strong> Recorded video
                            profiles azubi-visible to employers (if you create them)
                        </li>
                    </ul>
                    <h3>2.3 Usage Data</h3>
                    <p>
                        We automatically collect certain information when you access
                        our Platform:
                    </p>
                    <ul>
                        <li>IP address, browser type, and operating system</li>
                        <li>Device identifiers and mobile network information</li>
                        <li>
                            Pages visited, time spent on pages, and click patterns
                        </li>
                        <li>Referral sources and search queries</li>
                        <li>Application usage data and feature interactions</li>
                        <li>Performance data and error reports</li>
                        <li>Job posting views and application funnel analytics</li>
                    </ul>
                    <h3>2.4 Cookies and Tracking Technologies</h3>
                    <p>
                        We use cookies, web beacons, and similar tracking technologies
                        to enhance your experience, analyze usage patterns, and
                        deliver personalized content. For detailed information, please
                        refer to our <a href="{{ route('front.cookies') }}">Cookie Policy</a>.
                    </p>
                    <h3>2.5 Third-Party Information</h3>
                    <p>
                        We may receive information about you from third parties,
                        including:
                    </p>
                    <ul>
                        <li>Educational institutions and training providers</li>
                        <li>
                            Language assessment services (TestDaF, Goethe-Institut)
                        </li>
                        <li>German embassy and visa processing centers</li>
                        <li>Verification services for document authentication</li>
                        <li>Social media platforms (if you connect your accounts)</li>
                        <li>Payment processors and financial institutions</li>
                    </ul>
                    <h2>3. How We Use Your Information</h2>
                    <p>
                        We use your personal information for the following purposes:
                    </p>
                    <h3>3.1 Marketplace Operations</h3>
                    <ul>
                        <li>
                            <strong>Job Discovery:</strong> Showing you relevant
                            Ausbildung job postings from employers
                        </li>
                        <li>
                            <strong>Application Processing:</strong> Submitting your
                            applications to employers and tracking application status
                        </li>
                        <li>
                            <strong>Profile Management:</strong> Creating, maintaining,
                            and displaying your professional profile to employers
                        </li>
                        <li>
                            <strong>Matching and Recommendations:</strong> Recommending
                            jobs based on your profile, preferences, and qualifications
                        </li>
                        <li>
                            <strong>Employer Recommendations:</strong> Showing your
                            profile to employers based on job requirements and your
                            profile strength
                        </li>
                        <li>
                            <strong>Communication Facilitation:</strong> Enabling direct
                            messaging between you and employers
                        </li>
                        <li>
                            <strong>Profile Strength Scoring:</strong> Calculating your
                            profile completeness score (0-100) to help you optimize your
                            profile
                        </li>
                        <li>
                            <strong>Verification Status:</strong> Displaying employer
                            verification tiers to help you assess employer credibility
                        </li>
                    </ul>
                    <h3>3.2 Service Provision</h3>
                    <ul>
                        <li>Processing and managing your Ausbildung applications</li>
                        <li>
                            Matching you with suitable training programs and employers
                        </li>
                        <li>
                            Facilitating communication with training providers and
                            employers
                        </li>
                        <li>Providing personalized career guidance tools</li>
                        <li>
                            Delivering German language learning resources and
                            assessments
                        </li>
                        <li>Managing your account and user profile</li>
                        <li>Processing payments and managing subscriptions</li>
                    </ul>
                    <h3>3.3 Pro Subscription Data Processing</h3>
                    <p>
                        If you subscribe to Azubi Pro, we process additional
                        data to deliver Pro features:
                    </p>
                    <ul>
                        <li>
                            <strong>Subscription Data:</strong> Subscription plan,
                            billing cycle, renewal dates, cancellation status
                        </li>
                        <li>
                            <strong>Payment Data:</strong> Payment method (last 4 digits
                            only), billing address, transaction history (processed by
                            Stripe)
                        </li>
                        <li>
                            <strong>Usage Data:</strong> Number of AI application kits
                            generated, CV exports, cover letter exports, voice practice
                            minutes used
                        </li>
                        <li>
                            <strong>AI Interaction Data:</strong> Prompts and inputs
                            provided to AI features, generated content (cover letters,
                            application materials)
                        </li>
                        <li>
                            <strong>Assessment Data:</strong> German level test
                            responses, scores, certificates issued
                        </li>
                        <li>
                            <strong>Voice Practice Data:</strong> Audio recordings
                            during AI interview practice (used for speech analysis,
                            deleted after session)
                        </li>
                    </ul>
                    <p>
                        <strong>Legal Basis:</strong> Processing of Pro subscription
                        data is necessary for the performance of the subscription
                        contract (GDPR Art. 6(1)(b)).
                    </p>
                    <h3>3.4 Communication</h3>
                    <ul>
                        <li>Sending application updates and status notifications</li>
                        <li>
                            Alerting you when employers view your profile or respond to
                            applications
                        </li>
                        <li>
                            Providing customer support and responding to inquiries
                        </li>
                        <li>
                            Sharing important service announcements and policy updates
                        </li>
                        <li>
                            Sending job recommendations and marketplace updates (with
                            consent)
                        </li>
                        <li>Conducting surveys and collecting feedback</li>
                    </ul>
                    <h3>3.5 Legal and Compliance</h3>
                    <ul>
                        <li>Complying with visa and immigration requirements</li>
                        <li>
                            Verifying your identity and eligibility for Ausbildung
                            programs
                        </li>
                        <li>Preventing fraud and ensuring platform security</li>
                        <li>Enforcing our Terms of Service and other agreements</li>
                        <li>
                            Responding to legal requests and protecting our rights
                        </li>
                        <li>Maintaining records as azubi-required by law</li>
                    </ul>
                    <h3>3.6 Analytics and Improvement</h3>
                    <ul>
                        <li>
                            Analyzing usage patterns to improve our Platform and
                            marketplace algorithms
                        </li>
                        <li>Developing new features and services</li>
                        <li>
                            Conducting research and generating statistics (using
                            anonymized data)
                        </li>
                        <li>Personalizing your experience and job recommendations</li>
                        <li>Testing and optimizing platform performance</li>
                        <li>Improving job-student matching accuracy</li>
                    </ul>
                    <h2>4. Legal Basis for Processing (GDPR Compliance)</h2>
                    <p>
                        Under the General Data Protection Regulation (GDPR), we
                        process your personal data based on:
                    </p>
                    <ul>
                        <li>
                            <strong>Contract Performance:</strong> Processing necessary
                            to provide our marketplace services to you (job
                            applications, profile management, employer communication)
                        </li>
                        <li>
                            <strong>Legal Obligation:</strong> Compliance with visa,
                            immigration, and regulatory requirements
                        </li>
                        <li>
                            <strong>Legitimate Interest:</strong> Improving our
                            services, preventing fraud, ensuring security, and operating
                            our marketplace effectively
                        </li>
                        <li>
                            <strong>Consent:</strong> Marketing communications, optional
                            data processing, and profile visibility settings (which you
                            may withdraw at any time)
                        </li>
                    </ul>
                    <h2>5. How We Share Your Information</h2>
                    <p>
                        <strong>IMPORTANT: Please read this section carefully to understand
                            how your data is shared with employers.</strong>
                    </p>
                    <h3>5.1 Sharing with Employers (Marketplace Data Sharing)</h3>
                    <p>
                        <strong>When you apply for a job on our marketplace,</strong>
                        we share your application materials and profile information
                        with the employer for that specific job posting. The data
                        shared includes:
                    </p>
                    <ul>
                        <li>Your full name and contact information</li>
                        <li>
                            Profile information (headline, bio, photo, education,
                            experience, skills, languages)
                        </li>
                        <li>
                            Application materials (CV, cover letter, video introduction
                            if created)
                        </li>
                        <li>
                            Uploaded documents and certificates you&#x27;ve attached to
                            your application
                        </li>
                        <li>
                            German language proficiency level and assessment results
                        </li>
                        <li>Preferred cities, sectors, and availability dates</li>
                        <li>
                            Profile strength score (to indicate profile completeness)
                        </li>
                        <li>
                            Application timestamp and any messages you send to the
                            employer
                        </li>
                    </ul>
                    <p>
                        <strong>When your profile is set to &quot;Public&quot;
                            visibility,</strong>
                        verified employers can:
                    </p>
                    <ul>
                        <li>Search and browse your public profile</li>
                        <li>
                            View the profile sections you&#x27;ve chosen to make azubi-visible
                            (based on your privacy settings)
                        </li>
                        <li>
                            See your profile strength score and availability status
                        </li>
                        <li>Contact you through the Platform messaging system</li>
                    </ul>
                    <p>
                        <strong>When your profile is set to &quot;Private&quot;
                            visibility,</strong>
                        employers can only:
                    </p>
                    <ul>
                        <li>
                            View your profile after you apply to their specific job
                            postings
                        </li>
                        <li>
                            See information you explicitly include in your job
                            applications
                        </li>
                    </ul>
                    <h3>5.2 Granular Profile Visibility Controls</h3>
                    <p>
                        You have control over what employers see through our privacy
                        settings. You can individually show/hide:
                    </p>
                    <ul>
                        <li>Work experience details</li>
                        <li>Skills and proficiencies</li>
                        <li>Visa status and work authorization</li>
                        <li>Availability date</li>
                        <li>Preferred cities and locations</li>
                        <li>Professional bio</li>
                        <li>Headline and tagline</li>
                    </ul>
                    <p>
                        <strong>Important:</strong> Even with sections hidden, when
                        you apply to a job, the employer will receive your full
                        application materials (CV, cover letter, documents) as
                        submitted.
                    </p>
                    <h3>5.3 What Employers Can Do With Your Data</h3>
                    <p>Once shared with an employer, they can:</p>
                    <ul>
                        <li>
                            <strong>Review and store:</strong> Your application
                            materials for their hiring process
                        </li>
                        <li>
                            <strong>Download:</strong> CVs, cover letters, and documents
                            you submitted
                        </li>
                        <li>
                            <strong>Contact you:</strong> Through our Platform messaging
                            system or direct email (if you provided it)
                        </li>
                        <li>
                            <strong>Share internally:</strong> With their HR team and
                            hiring managers for evaluation
                        </li>
                        <li>
                            <strong>Retain:</strong> Your application for the duration
                            of their hiring process and legal retention requirements
                        </li>
                    </ul>
                    <p>
                        <strong>Important:</strong> Once employers receive your
                        application data, they become independent data controllers for
                        that information. Their use of your data is governed by their
                        own privacy policies and applicable employment laws. We are
                        not responsible for how employers use, store, or protect your
                        data after it&#x27;s been shared through the application
                        process.
                    </p>
                    <h3>5.4 Employer Data Processing Responsibilities</h3>
                    <p>Employers on our platform are azubi-required to:</p>
                    <ul>
                        <li>Comply with GDPR and applicable data protection laws</li>
                        <li>Use student data only for legitimate hiring purposes</li>
                        <li>
                            Maintain appropriate security measures for applicant data
                        </li>
                        <li>
                            Respect student data rights (access, deletion, correction)
                        </li>
                        <li>
                            Not share student data with third parties for marketing
                            purposes
                        </li>
                    </ul>
                    <p>
                        If you have concerns about how an employer is handling your
                        data, you should contact them directly. We can assist in
                        facilitating communication but cannot control employer data
                        practices.
                    </p>
                    <h3>5.5 Training Providers and Educational Partners</h3>
                    <p>
                        We may share your application materials and educational
                        background with German training providers when you apply for
                        Ausbildung positions through our platform. This is essential
                        for facilitating your application process.
                    </p>
                    <h3>5.6 Service Providers</h3>
                    <p>
                        We engage third-party service providers to support our
                        operations, including:
                    </p>
                    <ul>
                        <li>
                            Cloud hosting and data storage providers (Supabase, Google
                            Cloud Storage)
                        </li>
                        <li>Payment processors and financial services (Stripe)</li>
                        <li>Email and communication platforms (Resend)</li>
                        <li>
                            Analytics and tracking tools (Microsoft Clarity, Google
                            Analytics)
                        </li>
                        <li>
                            AI services (Google Gemini, OpenAI, OpenRouter, ElevenLabs)
                        </li>
                        <li>Document verification services</li>
                        <li>Customer support platforms</li>
                    </ul>
                    <p>
                        These service providers are contractually obligated to protect
                        your information and use it only for the purposes we specify.
                        They act as data processors on our behalf.
                    </p>
                    <h3>5.7 Government Authorities</h3>
                    <p>
                        We may share your information with German immigration
                        authorities, embassies, and visa processing centers as
                        azubi-required for visa applications and compliance with immigration
                        laws.
                    </p>
                    <h3>5.8 Legal Requirements</h3>
                    <p>We may disclose your information when azubi-required to:</p>
                    <ul>
                        <li>
                            Comply with legal obligations, court orders, or government
                            requests
                        </li>
                        <li>Enforce our Terms of Service and other agreements</li>
                        <li>
                            Protect the rights, property, or safety of Azubi, our
                            users, or the public
                        </li>
                        <li>
                            Investigate and prevent fraud, security issues, or illegal
                            activities
                        </li>
                    </ul>
                    <h3>5.9 Business Transfers</h3>
                    <p>
                        In the event of a merger, acquisition, reorganization, or sale
                        of assets, your personal information may be transferred to the
                        successor entity. We will notify you of any such change and
                        provide options regarding your information.
                    </p>
                    <h2>6. Marketplace-Specific Data Processing</h2>
                    <h3>6.1 Profile Strength Scoring System</h3>
                    <p>
                        We calculate a profile strength score (0-100) based on the
                        completeness of your profile across 8 categories:
                    </p>
                    <ul>
                        <li>Basic Information (15 points)</li>
                        <li>Legal &amp; Availability (15 points)</li>
                        <li>Professional Profile (20 points)</li>
                        <li>Education (15 points)</li>
                        <li>Languages (15 points)</li>
                        <li>Experience (10 points)</li>
                        <li>Skills (5 points)</li>
                        <li>Documents &amp; Verification (5 points)</li>
                    </ul>
                    <p>This score is used to:</p>
                    <ul>
                        <li>Help you identify areas to improve your profile</li>
                        <li>Show employers the completeness of your profile</li>
                        <li>Recommend you to employers based on profile quality</li>
                        <li>
                            Provide &quot;quick wins&quot; suggestions for profile
                            optimization
                        </li>
                    </ul>
                    <h3>6.2 Job Matching Algorithms</h3>
                    <p>
                        We use algorithms to match students with suitable job postings
                        based on:
                    </p>
                    <ul>
                        <li>
                            Your profile information (sectors, skills, education,
                            experience)
                        </li>
                        <li>German language proficiency level</li>
                        <li>Location preferences and availability dates</li>
                        <li>Profile strength score</li>
                        <li>Job posting requirements and preferences</li>
                        <li>Previous application patterns and success rates</li>
                    </ul>
                    <h3>6.3 Employer Verification Data</h3>
                    <p>
                        We process employer data to assign verification tiers
                        (Unverified, Verified, Trusted):
                    </p>
                    <ul>
                        <li>Company registration documents</li>
                        <li>Business licenses and tax information</li>
                        <li>Contact person verification</li>
                        <li>Company profile completeness</li>
                        <li>Historical hiring data and response rates</li>
                    </ul>
                    <p>
                        This information is used solely to help students assess
                        employer credibility. Verification status does not constitute
                        our endorsement.
                    </p>
                    <h3>6.4 Communication and Messaging Data</h3>
                    <p>
                        Messages sent through our Platform between students and
                        employers are:
                    </p>
                    <ul>
                        <li>
                            Stored on our servers for message delivery and history
                        </li>
                        <li>Accessible to both parties in the conversation</li>
                        <li>
                            Monitored for security, fraud prevention, and Terms of
                            Service compliance
                        </li>
                        <li>Not used for marketing purposes</li>
                        <li>
                            Retained for 3 years for dispute resolution and compliance
                        </li>
                    </ul>
                    <h3>6.5 Application Tracking and Analytics</h3>
                    <p>We track your job application journey, including:</p>
                    <ul>
                        <li>Jobs viewed vs. jobs applied to (conversion rate)</li>
                        <li>Application submission timestamps</li>
                        <li>
                            Application status updates (submitted, under review,
                            shortlisted, interview, offer, accepted/rejected)
                        </li>
                        <li>Employer response times and rates</li>
                        <li>Application withdrawal patterns</li>
                    </ul>
                    <p>This data is used to:</p>
                    <ul>
                        <li>
                            Provide you with application insights and recommendations
                        </li>
                        <li>Improve our matching algorithms</li>
                        <li>Generate anonymized marketplace statistics</li>
                        <li>Identify and address platform issues</li>
                    </ul>
                    <h3>6.6 Automated Translation Data</h3>
                    <p>
                        Job postings are automatically translated from German to
                        English using AI services (Google Gemini 2.5 Flash). We
                        process:
                    </p>
                    <ul>
                        <li>
                            Original German job posting text (created by employers)
                        </li>
                        <li>English translations (AI-generated for students)</li>
                        <li>
                            Translation metadata (timestamp, model used, accuracy
                            indicators)
                        </li>
                    </ul>
                    <p>
                        <strong>Important:</strong> Automated translations may contain
                        errors. The German version is the authoritative version. We
                        recommend verifying important details directly with employers.
                    </p>
                    <h2>7. International Data Transfers</h2>
                    <p>
                        As a global marketplace platform, your personal information
                        may be transferred to and processed in countries outside your
                        country of residence, including Morocco, Germany, and the
                        European Union.
                    </p>
                    <p>
                        We ensure that all international data transfers comply with
                        applicable data protection laws, including GDPR. We implement
                        appropriate safeguards such as:
                    </p>
                    <ul>
                        <li>
                            Standard Contractual Clauses (SCCs) approved by the European
                            Commission
                        </li>
                        <li>
                            Adequacy decisions for countries with equivalent data
                            protection standards
                        </li>
                        <li>
                            Binding Corporate Rules and Privacy Shield frameworks (where
                            applicable)
                        </li>
                        <li>
                            Appropriate technical and organizational measures to ensure
                            data security
                        </li>
                    </ul>
                    <p><strong>Specific Data Processing Locations:</strong></p>
                    <ul>
                        <li>
                            <strong>Database:</strong> Supabase (Asia-Pacific South
                            region - Singapore)
                        </li>
                        <li>
                            <strong>File Storage:</strong> Google Cloud Storage (Germany
                            and EU servers)
                        </li>
                        <li>
                            <strong>Analytics:</strong> Microsoft Clarity (Global),
                            Google Analytics (Global)
                        </li>
                        <li>
                            <strong>AI Processing:</strong> Google Gemini (Global),
                            OpenAI (US), OpenRouter (US)
                        </li>
                        <li><strong>Email Services:</strong> Resend (US/EU)</li>
                        <li>
                            <strong>Payment Processing:</strong> Stripe (Global with EU
                            data residency)
                        </li>
                    </ul>
                    <h2>8. Data Retention</h2>
                    <p>
                        We retain your personal information for as long as necessary
                        to fulfill the purposes outlined in this Privacy Policy,
                        unless a longer retention period is azubi-required or permitted by
                        law.
                    </p>
                    <p>Specific retention periods include:</p>
                    <ul>
                        <li>
                            <strong>Account Data:</strong> Retained while your account
                            is active and for 2 years after account closure
                        </li>
                        <li>
                            <strong>Profile Information:</strong> Retained while your
                            account is active; deleted upon account deletion request
                        </li>
                        <li>
                            <strong>Job Application Records:</strong> Retained for 7
                            years from application submission (for visa and legal
                            compliance purposes)
                        </li>
                        <li>
                            <strong>Application Materials (CVs, Documents):</strong>
                            Retained for 3 years or until you request deletion
                        </li>
                        <li>
                            <strong>Communication Records:</strong> Retained for 3 years
                            for quality assurance and dispute resolution
                        </li>
                        <li>
                            <strong>Payment Information:</strong> Retained for 7 years
                            as azubi-required by financial regulations
                        </li>
                        <li>
                            <strong>Marketing Data:</strong> Retained until you withdraw
                            consent or for 2 years of inactivity
                        </li>
                        <li>
                            <strong>Analytics Data:</strong> Retained for 2 years in
                            anonymized form
                        </li>
                        <li>
                            <strong>Security Logs:</strong> Retained for 1 year for
                            fraud prevention and security purposes
                        </li>
                    </ul>
                    <h3>8.1 Pro Subscription Data Retention</h3>
                    <p>For Pro subscribers, additional retention periods apply:</p>
                    <ul>
                        <li>
                            <strong>Subscription Records:</strong> Retained for 7 years
                            after subscription ends (for tax and financial compliance)
                        </li>
                        <li>
                            <strong>Payment Transaction History:</strong> Retained for 7
                            years (financial regulations)
                        </li>
                        <li>
                            <strong>AI-Generated Content:</strong> Cover letters and
                            application kits are retained for 2 years or until you
                            delete them
                        </li>
                        <li>
                            <strong>German Assessment Results:</strong> Retained for 5
                            years (certificates may be requested by
                            employers/authorities)
                        </li>
                        <li>
                            <strong>Voice Practice Recordings:</strong> Audio is
                            processed in real-time and deleted immediately after the
                            session; only transcripts and scores are retained for 90
                            days
                        </li>
                        <li>
                            <strong>Usage Metrics:</strong> Monthly usage counts (kits
                            generated, exports) retained for 2 years for billing and
                            analytics
                        </li>
                    </ul>
                    <p>
                        After your Pro subscription ends, your account reverts to Free
                        tier. AI-generated content remains accessible but new
                        generation requires resubscription.
                    </p>
                    <p>
                        <strong>Important Note on Employer Data:</strong> Data shared
                        with employers through job applications is retained by
                        employers according to their own data retention policies. We
                        cannot control or guarantee deletion of data once it has been
                        shared with employers. You must contact employers directly to
                        request deletion of data they hold.
                    </p>
                    <p>
                        After the retention period expires, we will securely delete or
                        anonymize your personal information in accordance with our
                        data retention policy and applicable laws.
                    </p>
                    <h2>9. Your Rights and Choices</h2>
                    <p>
                        Depending on your location, you may have the following rights
                        regarding your personal information:
                    </p>
                    <h3>9.1 GDPR Rights (European Union)</h3>
                    <ul>
                        <li>
                            <strong>Right to Access:</strong> Request copies of your
                            personal data we hold
                        </li>
                        <li>
                            <strong>Right to Rectification:</strong> Correct inaccurate
                            or incomplete information
                        </li>
                        <li>
                            <strong>Right to Erasure:</strong> Request deletion of your
                            personal data (&quot;right to be forgotten&quot;)
                        </li>
                        <li>
                            <strong>Right to Restriction:</strong> Limit how we use your
                            information
                        </li>
                        <li>
                            <strong>Right to Data Portability:</strong> Receive your
                            data in a structured, machine-readable format
                        </li>
                        <li>
                            <strong>Right to Object:</strong> Object to processing based
                            on legitimate interests or for direct marketing
                        </li>
                        <li>
                            <strong>Right to Withdraw Consent:</strong> Withdraw consent
                            for data processing at any time
                        </li>
                        <li>
                            <strong>Right to Lodge a Complaint:</strong> File a
                            complaint with your local data protection authority
                        </li>
                    </ul>
                    <h3>9.2 Marketplace-Specific Rights</h3>
                    <p>As a marketplace user, you also have the right to:</p>
                    <ul>
                        <li>
                            <strong>Control Profile Visibility:</strong> Set your
                            profile to public or private at any time
                        </li>
                        <li>
                            <strong>Granular Privacy Controls:</strong> Show/hide
                            individual profile sections from employer view
                        </li>
                        <li>
                            <strong>Withdraw Applications:</strong> Withdraw job
                            applications (though employers may retain previously shared
                            data)
                        </li>
                        <li>
                            <strong>Export Application Data:</strong> Download all your
                            job applications and communication history
                        </li>
                        <li>
                            <strong>Delete Account:</strong> Request complete account
                            deletion (see limitations below)
                        </li>
                    </ul>
                    <h3>9.3 Limitations on Data Deletion</h3>
                    <p><strong>Please note the following limitations:</strong></p>
                    <ul>
                        <li>
                            <strong>Employer-Held Data:</strong> We cannot delete data
                            that has been shared with employers through job
                            applications. You must contact employers directly to request
                            deletion of data they hold.
                        </li>
                        <li>
                            <strong>Legal Retention:</strong> We must retain certain
                            data for legal compliance (e.g., financial records for 7
                            years, application records for visa compliance)
                        </li>
                        <li>
                            <strong>Anonymized Data:</strong> We may retain anonymized,
                            non-identifiable data for analytics and research purposes
                        </li>
                        <li>
                            <strong>Active Applications:</strong> Applications cannot be
                            deleted while they are actively being reviewed by employers
                            (you can withdraw them first)
                        </li>
                    </ul>
                    <h3>9.4 How to Exercise Your Rights</h3>
                    <p>To exercise any of these rights, please contact us at:</p>
                    <ul>
                        <li>
                            Email:
                            <a href="cdn-cgi/l/email-protection.html#6b1b19021d0a08122b0c040a1e180902070f1e050c45080406"><span
                                    class="__cf_email__"
                                    data-cfemail="6414160d1205071d24030b051117060d0800110a034a070b09">[email&#160;protected]</span></a>
                        </li>
                        <li>Subject line: &quot;Data Privacy Request&quot;</li>
                        <li>
                            Include: Your full name, registered email address, and
                            specific request
                        </li>
                    </ul>
                    <p>
                        We will respond to your request within 30 days (or as azubi-required
                        by applicable law). We may require identity verification
                        before processing your request to protect your data security.
                    </p>
                    <h3>9.5 Profile Privacy Settings</h3>
                    <p>
                        You can manage your profile visibility settings at any time in
                        your account dashboard:
                    </p>
                    <ul>
                        <li>Navigate to Settings → Privacy</li>
                        <li>Choose between Public or Private profile visibility</li>
                        <li>
                            Toggle individual profile section visibility (10 granular
                            controls)
                        </li>
                        <li>Review what employers can see based on your settings</li>
                    </ul>
                    <h3>9.6 Marketing Communications</h3>
                    <p>You can opt out of marketing emails by:</p>
                    <ul>
                        <li>
                            Clicking the &quot;unsubscribe&quot; link in any marketing
                            email
                        </li>
                        <li>
                            Updating your communication preferences in your account
                            settings
                        </li>
                        <li>
                            Contacting us at
                            <a href="cdn-cgi/l/email-protection.html#224a474e4e4d62454d435751404b4e46574c450c414d4f"><span
                                    class="__cf_email__"
                                    data-cfemail="4129242d2d2e01262e20343223282d25342f266f222e2c">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                    <p>
                        Please note that even if you opt out of marketing
                        communications, we will still send you transactional and
                        service-related messages (application updates, employer
                        messages, account notifications, security alerts).
                    </p>
                    <h2>10. Data Security</h2>
                    <p>
                        We implement industry-standard security measures to protect
                        your personal information from unauthorized access,
                        disclosure, alteration, and destruction. Our security
                        practices include:
                    </p>
                    <ul>
                        <li>SSL/TLS encryption for all data transmission (HTTPS)</li>
                        <li>AES-256 encryption for data at rest</li>
                        <li>
                            Row-Level Security (RLS) policies on all database tables
                        </li>
                        <li>Regular security audits and vulnerability assessments</li>
                        <li>
                            Multi-factor authentication options for account protection
                        </li>
                        <li>Access controls and authentication mechanisms</li>
                        <li>
                            Employee training on data protection and confidentiality
                        </li>
                        <li>Incident response and breach notification procedures</li>
                        <li>Regular backups and disaster recovery plans</li>
                        <li>Rate limiting and DDoS protection</li>
                        <li>Automated security monitoring and alerting</li>
                    </ul>
                    <p>
                        <strong>Account Security:</strong> You are responsible for
                        maintaining the confidentiality of your account credentials.
                        We recommend:
                    </p>
                    <ul>
                        <li>Using a strong, unique password</li>
                        <li>Not sharing your account credentials with anyone</li>
                        <li>Logging out of public or shared computers</li>
                        <li>Enabling multi-factor authentication if available</li>
                        <li>Notifying us immediately of any unauthorized access</li>
                    </ul>
                    <p>
                        However, no method of transmission over the internet or
                        electronic storage is 100% secure. While we strive to protect
                        your information using commercially reasonable means, we
                        cannot guarantee absolute security.
                    </p>
                    <h2>11. Children&#x27;s Privacy</h2>
                    <p>
                        Our services are intended for users aged 18 and above. We do
                        not knowingly collect personal information from individuals
                        under 18 years of age without verifiable parental consent. If
                        you are under 18, please do not use our Platform or provide
                        any personal information without parental permission.
                    </p>
                    <p>
                        If we become aware that we have collected personal information
                        from a child under 18 without proper parental consent, we will
                        take steps to delete such information immediately. If you
                        believe we have collected information from a child, please
                        contact us at
                        <a href="cdn-cgi/l/email-protection.html#3646445f4057554f765159574345545f5a524358511855595b"><span
                                class="__cf_email__"
                                data-cfemail="413133283720223801262e20343223282d25342f266f222e2c">[email&#160;protected]</span></a>.
                    </p>
                    <h2>12. Third-Party Links and Services</h2>
                    <p>
                        Our Platform may contain links to third-party websites,
                        services, or applications that are not owned or controlled by
                        Azubi. This Privacy Policy does not apply to those
                        third-party services.
                    </p>
                    <p>Third-party services include:</p>
                    <ul>
                        <li>External job boards or recruitment platforms</li>
                        <li>Language testing services (TestDaF, Goethe-Institut)</li>
                        <li>Social media platforms</li>
                        <li>Payment processors</li>
                        <li>Educational institutions and training providers</li>
                    </ul>
                    <p>
                        We are not responsible for the privacy practices or content of
                        third-party sites. We encourage you to review the privacy
                        policies of any third-party services before providing your
                        personal information.
                    </p>
                    <h2>13. Changes to This Privacy Policy</h2>
                    <p>
                        We may update this Privacy Policy from time to time to reflect
                        changes in our practices, legal requirements, or for other
                        operational reasons. When we make material changes, we will:
                    </p>
                    <ul>
                        <li>
                            Update the &quot;Last Updated&quot; date at the top of this
                            policy
                        </li>
                        <li>Notify you via email at your registered email address</li>
                        <li>Display a prominent notice on our Platform</li>
                        <li>
                            Provide a reasonable period (at least 30 days) for you to
                            review the changes
                        </li>
                        <li>Obtain your consent if azubi-required by applicable law</li>
                        <li>Maintain an archive of previous policy versions</li>
                    </ul>
                    <p>
                        Your continued use of our Platform after the effective date of
                        the updated Privacy Policy constitutes your acceptance of the
                        changes. If you do not agree with the updated policy, you must
                        discontinue use of our services and may request account
                        deletion.
                    </p>
                    <h2>14. Contact Information</h2>
                    <p>
                        If you have any questions, concerns, or requests regarding
                        this Privacy Policy or our data practices, please contact us:
                    </p>
                    <div
                        style="
                    background-color: #EEF0F4;
                    padding: 1.5rem;
                    border-radius: 12px;
                    margin-top: 1rem;
                  ">
                        <p style="margin-bottom: 0.75rem">
                            <strong>Azubi</strong>
                        </p>
                        <p style="margin-bottom: 0.75rem">
                            <strong>Data Protection Officer:</strong><br />Email:
                            <a href="cdn-cgi/l/email-protection.html#f9898b908f989a80b99e96988c8a9b90959d8c979ed79a9694"><span
                                    class="__cf_email__"
                                    data-cfemail="7e0e0c17081f1d073e19111f0b0d1c17121a0b1019501d1113">[email&#160;protected]</span></a>
                        </p>
                        <p style="margin-bottom: 0.75rem">
                            <strong>Marrakech Office:</strong><br />Marrakech<br />Morocco
                        </p>
                        <p style="margin-bottom: 0.75rem">
                            <strong>Rabat Office:</strong><br />Rabat<br />Morocco
                        </p>
                        <p style="margin-bottom: 0">
                            <strong>General Inquiries:</strong><br />Email:
                            <a href="cdn-cgi/l/email-protection.html#19717c757576597e76786c6a7b70757d6c777e377a7674"><span
                                    class="__cf_email__"
                                    data-cfemail="325a575e5e5d72555d534741505b5e56475c551c515d5f">[email&#160;protected]</span></a>
                        </p>
                    </div>
                    <h2>15. EU Representative</h2>
                    <p>
                        For users in the European Union, we have appointed a GDPR
                        representative as azubi-required by Article 27 of the GDPR. You may
                        contact our EU representative for any data protection
                        inquiries:
                    </p>
                    <p>
                        Email:
                        <a
                            href="cdn-cgi/l/email-protection.html#4c2939613e293c3e293f2922382d38253a290c2b232d393f2e25202839222b622f2321"><span
                                class="__cf_email__"
                                data-cfemail="3a5f4f17485f4a485f495f544e5b4e534c5f7a5d555b4f495853565e4f545d14595557">[email&#160;protected]</span></a>
                    </p>
                    <h2>16. Supervisory Authority</h2>
                    <p>
                        If you are located in the European Economic Area, you have the
                        right to lodge a complaint with your local data protection
                        supervisory authority if you believe we have violated your
                        privacy rights under GDPR.
                    </p>
                    <p>
                        However, we encourage you to contact us first at
                        <a href="cdn-cgi/l/email-protection.html#d1a1a3b8a7b0b2a891b6beb0a4a2b3b8bdb5a4bfb6ffb2bebc"><span
                                class="__cf_email__"
                                data-cfemail="4232302b3423213b02252d233731202b2e26372c256c212d2f">[email&#160;protected]</span></a>
                        so we can address your concerns directly and attempt to
                        resolve any issues before you involve the supervisory
                        authority.
                    </p>
                    <div
                        style="
                    border-top: 2px solid #EEF0F4;
                    margin-top: 3rem;
                    padding-top: 2rem;
                    color: rgba(44, 51, 64, 0.7);
                    font-size: 0.875rem;
                  ">
                        <p>
                            <strong>Document Version:</strong> 3.0 (Pro Subscription
                            Update)<br /><strong>Effective Date:</strong> January 1,
                            2026<br /><strong>Last Updated:</strong> January 1, 2026<br /><strong>Language:</strong>
                            This Privacy Policy is provided in English. In case of
                            conflicts between translated versions, the English version
                            shall prevail.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
