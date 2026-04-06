<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Dashboard - Azubi')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/081a0afca5a9bd20.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/d9109d77acd75b7b.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/e2c84361ea1dce8b.css') }}">
    <style>
        :root {
            --font-inter: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
            --green: #344F1F;
            --orange: #F4991A;
            --orange-hover: #E5890F;
            --beige: #F2EAD3;
            --cream: #F9F5F0;
        }
        .bg-beige { background-color: var(--beige); }
        .bg-cream { background-color: var(--cream); }
        .text-green { color: var(--green); }
        .text-orange { color: var(--orange); }

        /* Sidebar */
        .dashboard-sidebar {
            width: 240px;
            background: var(--beige);
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 10;
            display: flex;
            flex-direction: column;
            transition: all 0.3s;
        }
        .dashboard-sidebar.collapsed {
            width: 0;
            overflow: hidden;
        }
        .sidebar-nav-item {
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s;
            color: var(--green);
            text-decoration: none;
        }
        .sidebar-nav-item:hover { background: rgba(244,153,26,0.08); }
        .sidebar-nav-item.active {
            background: rgba(244,153,26,0.1);
            color: var(--orange);
            border: 1px solid rgba(244,153,26,0.2);
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
        }
        .sidebar-nav-item svg { flex-shrink: 0; margin-right: 0.5rem; color: rgba(52,79,31,0.5); }
        .sidebar-nav-item:hover svg,
        .sidebar-nav-item.active svg { color: var(--orange); }
        .sidebar-section-label {
            padding: 0.125rem 0.5rem;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: rgba(52,79,31,0.5);
            margin-bottom: 0.125rem;
        }
        .sidebar-divider {
            height: 1px;
            background: rgba(52,79,31,0.1);
            margin: 0.5rem 0.75rem;
        }
        .locked-item {
            opacity: 0.7;
            cursor: not-allowed;
        }
        .locked-item svg.lock-icon { margin-left: auto; color: rgba(52,79,31,0.4); }

        /* Main content */
        .dashboard-main {
            margin-left: 250px;
            margin-top: 0.625rem;
            margin-right: 0.625rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: all 0.3s;
        }
        .dashboard-main.expanded { margin-left: 0.625rem; }
        .dashboard-main-inner {
            background: white;
            border-radius: 1.5rem 1.5rem 0 0;
            flex: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 20;
        }

        /* Top bar */
        .dashboard-topbar {
            flex-shrink: 0;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(12px);
            border-radius: 1.5rem 1.5rem 0 0;
            border-bottom: 1px solid rgba(52,79,31,0.1);
            position: relative;
            z-index: 30;
        }
        .topbar-btn {
            position: relative;
            min-width: 40px;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            border: 1px solid rgba(52,79,31,0.15);
            transition: all 0.2s;
            background: none;
            cursor: pointer;
            color: var(--green);
        }
        .topbar-btn:hover { background: var(--beige); }

        /* Profile ring */
        .profile-ring-btn {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            width: 100%;
            padding: 0.625rem 0.75rem;
            border-radius: 0.5rem;
            background: rgba(249,245,240,0.5);
            border: 1px solid rgba(52,79,31,0.1);
            transition: all 0.2s;
            cursor: pointer;
            text-align: left;
        }
        .profile-ring-btn:hover { background: var(--cream); }

        /* Language toggle */
        .lang-toggle {
            position: relative;
            display: inline-flex;
            align-items: center;
            border-radius: 9999px;
            border: 1px solid rgba(52,79,31,0.15);
            height: 2rem;
            padding: 0.25rem;
            gap: 0.125rem;
        }
        .lang-toggle-indicator {
            position: absolute;
            border-radius: 9999px;
            background: var(--orange);
            height: 1.5rem;
            transition: all 0.2s;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        .lang-toggle-btn {
            position: relative;
            z-index: 10;
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.75rem;
            height: 1.5rem;
            padding: 0 0.75rem;
            border: none;
            background: none;
            cursor: pointer;
            transition: all 0.2s;
        }
        .lang-toggle-btn.active { color: white; }
        .lang-toggle-btn:not(.active) { color: var(--green); }

        /* Mobile sidebar overlay */
        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 9;
        }
        .sidebar-overlay.show { display: block; }

        /* Mobile hamburger */
        .mobile-menu-btn {
            display: none;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 0.5rem;
            border: 1px solid rgba(52,79,31,0.15);
            background: none;
            cursor: pointer;
            color: var(--green);
        }

        @media (max-width: 767px) {
            .dashboard-sidebar { display: none; }
            .dashboard-sidebar.mobile-open {
                display: flex;
                z-index: 50;
            }
            .dashboard-main { margin-left: 0; margin-right: 0; margin-top: 0; }
            .dashboard-main-inner { border-radius: 0; }
            .dashboard-topbar { border-radius: 0; }
            .mobile-menu-btn { display: flex; }
        }
    </style>
    @stack('styles')
</head>

<body class="min-h-screen bg-background font-sans antialiased overflow-x-hidden __variable_f367f3">
    <div class="relative min-h-screen bg-beige overflow-x-hidden">

        {{-- Mobile sidebar overlay --}}
        <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeMobileSidebar()"></div>

        {{-- Sidebar --}}
        <aside class="dashboard-sidebar" id="dashboardSidebar">
            <div class="flex-shrink-0">
                {{-- Logo --}}
                <div class="flex items-center h-[75px] px-4 justify-between">
                    <a class="inline-flex items-center select-none gap-[2px]" href="{{ route('front.index') }}">
                        <img alt="Azubi Oak Leaf Logo" loading="eager" width="56" height="56"
                             class="object-contain flex-shrink-0 mt-[2px] h-8 w-8"
                             src="{{ asset('assets/_next/logo-icone6f8.jpeg') }}" style="color: transparent;">
                        <span class="font-bold text-green text-base" style="letter-spacing: -0.02em;">Azubi</span>
                    </a>
                    <button class="transition-colors hidden md:block" title="Collapse sidebar" onclick="toggleSidebar()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground hover:text-foreground"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 3v18"/><path d="m16 15-3-3 3-3"/></svg>
                    </button>
                    <button class="transition-colors md:hidden" onclick="closeMobileSidebar()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground hover:text-foreground"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                </div>

                <div class="mx-3 mb-3"><div class="h-px bg-secondary/30"></div></div>

                {{-- Profile ring --}}
                <div class="px-3 pb-3">
                    <a href="{{ route('front.dashboard.profile') }}" class="profile-ring-btn" style="text-decoration:none;">
                        <div class="relative inline-flex items-center justify-center" style="width:44px;height:44px;">
                            <svg width="44" height="44" viewBox="0 0 44 44" class="transform -rotate-90">
                                <circle cx="22" cy="22" r="20.25" fill="none" stroke="#F2EAD3" stroke-width="3.5"/>
                                <circle cx="22" cy="22" r="20.25" fill="none" stroke="#F4991A" stroke-width="3.5"
                                        stroke-linecap="round" stroke-dasharray="127.23" stroke-dashoffset="127.23"/>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="font-semibold text-foreground" style="font-size:9.68px;">0%</span>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground flex-shrink-0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                <span class="font-medium text-sm text-foreground truncate">My Profile</span>
                            </div>
                            <p class="text-xs text-muted-foreground truncate mt-0.5">Tap to complete</p>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Navigation --}}
            <div class="flex-1 flex flex-col min-h-0">
                <nav class="flex-1 py-2 space-y-0.5 px-3 overflow-y-auto">
                    {{-- Marketplace --}}
                    <div class="mb-1">
                        <p class="sidebar-section-label">Marketplace</p>
                        <a class="sidebar-nav-item" href="{{ route('front.jobs') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            <span class="text-sm">Browse Jobs</span>
                        </a>
                        <a class="sidebar-nav-item" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"/></svg>
                            <span class="text-sm">Saved Jobs</span>
                        </a>
                        <a class="sidebar-nav-item" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                            <span class="text-sm">Applications</span>
                        </a>
                        <a class="sidebar-nav-item" href="{{ route('front.consultation') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#F4991A"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/><path d="M20 3v4"/><path d="M22 5h-4"/><path d="M4 17v2"/><path d="M5 18H3"/></svg>
                            <span class="text-sm">Apply For Me</span>
                            <span class="ml-2 inline-flex items-center px-1.5 py-0.5 text-[10px] font-semibold text-secondary-foreground bg-secondary rounded-full shadow-sm h-4">New</span>
                        </a>
                    </div>

                    <div class="sidebar-divider"></div>

                    {{-- Preparation --}}
                    <div class="mb-1">
                        <p class="sidebar-section-label">Preparation</p>
                        <a class="sidebar-nav-item @yield('sidebar-active-dashboard', '')" href="{{ route('front.dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>
                            <span class="text-sm">Dashboard</span>
                        </a>
                        <span class="sidebar-nav-item locked-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
                            <span class="text-sm">German Learning</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lock-icon"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </span>
                        <span class="sidebar-nav-item locked-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" x2="12" y1="19" y2="22"/></svg>
                            <span class="text-sm">Interview Prep</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lock-icon"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </span>
                        <span class="sidebar-nav-item locked-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/><rect x="2" y="6" width="14" height="12" rx="2"/></svg>
                            <span class="text-sm">Video Studio</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lock-icon"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </span>
                    </div>

                    <div class="sidebar-divider"></div>

                    {{-- Tools --}}
                    <div class="mb-1">
                        <p class="sidebar-section-label">Tools</p>
                        <a class="sidebar-nav-item" href="{{ route('front.tools.eligibility-checker') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="m9 14 2 2 4-4"/></svg>
                            <span class="text-sm">Eligibility</span>
                        </a>
                        <a class="sidebar-nav-item" href="{{ route('front.tools.application-timeline') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                            <span class="text-sm">Timeline</span>
                        </a>
                        <a class="sidebar-nav-item" href="{{ route('front.tools.cover-letter') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z"/><path d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18"/><path d="m2.3 2.3 7.286 7.286"/><circle cx="11" cy="11" r="2"/></svg>
                            <span class="text-sm">Cover Letter</span>
                        </a>
                    </div>
                </nav>

                {{-- Bottom section --}}
                <div class="bg-beige pt-2">
                    <div class="mx-3 mb-2"><div class="h-px bg-secondary/30"></div></div>
                    <div class="px-3 pb-2 space-y-0.5">
                        <a class="sidebar-nav-item text-muted-foreground hover:text-foreground" href="{{ route('front.consultation') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                            <span class="text-sm">Services</span>
                        </a>
                        <a class="sidebar-nav-item text-muted-foreground hover:text-foreground" href="{{ route('front.faq') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                            <span class="text-sm">Help & Docs</span>
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        {{-- Main Content --}}
        <main class="dashboard-main" id="dashboardMain">
            <div class="dashboard-main-inner">
                {{-- Top Bar --}}
                <div class="dashboard-topbar">
                    <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                        {{-- Mobile menu button --}}
                        <button class="mobile-menu-btn" onclick="openMobileSidebar()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                        </button>

                        <div class="flex-1"></div>

                        <div class="flex items-center gap-3">
                            {{-- Language toggle --}}
                            <div class="lang-toggle">
                                <div class="lang-toggle-indicator" style="left:4px;width:calc(50% - 6px);"></div>
                                <button class="lang-toggle-btn active">EN</button>
                                <button class="lang-toggle-btn">DE</button>
                            </div>

                            {{-- Help --}}
                            <a class="topbar-btn" href="{{ route('front.faq') }}" title="Help & Documentation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                            </a>

                            {{-- WhatsApp --}}
                            <a class="topbar-btn" href="https://wa.me/971522884118?text=Hi%20Azubi!%20I'm%20interested%20in%20learning%20more%20about%20Ausbildung%20opportunities." target="_blank" rel="noopener noreferrer" title="WhatsApp Support" style="color:#075E54;">
                                <svg viewBox="0 0 24 24" class="h-5 w-5 fill-current"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>

                            {{-- Notifications --}}
                            <button class="topbar-btn" aria-label="Notifications">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.268 21a2 2 0 0 0 3.464 0"/><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"/></svg>
                            </button>

                            {{-- User avatar --}}
                            <div class="relative">
                                <button class="group relative min-w-[40px] min-h-[40px] rounded-full hover:bg-beige transition-all duration-200 focus:outline-none flex items-center justify-center border border-border" onclick="toggleUserMenu(event)" type="button">
                                    <div class="relative h-10 w-10">
                                        <div class="h-full w-full overflow-hidden rounded-full ring-2 ring-primary/20 shadow-sm group-hover:shadow-md group-hover:ring-primary/40 transition-all duration-200">
                                            <div class="w-full h-full flex items-center justify-center text-sm font-bold text-white" style="background:linear-gradient(135deg,#3b82f6,#6366f1);">
                                                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                            </div>
                                        </div>
                                        <div class="absolute -bottom-0.5 -right-0.5 h-2.5 w-2.5 rounded-full bg-secondary border-2 border-background animate-pulse"></div>
                                    </div>
                                </button>
                                <div class="absolute top-full right-0 mt-2 w-72 bg-white border border-border/50 rounded-2xl shadow-2xl p-4 z-50 hidden" id="userMenu" style="min-width:280px;">
                                    {{-- User info header --}}
                                    <div class="flex items-center gap-3 pb-4 mb-3 border-b border-border/30">
                                        <div class="h-12 w-12 flex-shrink-0 overflow-hidden rounded-xl flex items-center justify-center text-base font-bold text-white" style="background:linear-gradient(135deg,#3b82f6,#6366f1);">
                                            {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                                        </div>
                                        <div class="min-w-0">
                                            <p class="text-sm font-bold text-foreground truncate">{{ auth()->user()->name }}</p>
                                            <p class="text-xs text-muted-foreground truncate">{{ auth()->user()->email }}</p>
                                        </div>
                                    </div>
                                    {{-- Menu items --}}
                                    <div class="space-y-1 mb-3">
                                        <a href="{{ route('front.dashboard.profile') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-foreground/80 hover:text-primary hover:bg-primary/5 rounded-xl transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                            Profile
                                        </a>
                                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-foreground/80 hover:text-primary hover:bg-primary/5 rounded-xl transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                                            Documents
                                        </a>
                                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-foreground/80 hover:text-primary hover:bg-primary/5 rounded-xl transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                                            Settings
                                        </a>
                                    </div>
                                    {{-- Sign out --}}
                                    <div class="border-t border-border/30 pt-2">
                                        <form method="POST" action="{{ route('front.auth.logout') }}">
                                            @csrf
                                            <button type="submit" class="flex items-center gap-3 w-full px-3 py-2.5 text-sm font-medium text-red-500 hover:bg-red-50 rounded-xl transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                                                Sign Out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Page Content --}}
                <div class="flex-1 overflow-y-auto">
                    <div class="p-4 sm:p-6 md:p-8">
                        <div class="max-w-7xl mx-auto w-full">
                            @yield('content')
                        </div>
                    </div>

                    {{-- Footer --}}
                    <footer class="text-center py-6 mt-12 border-t border-border/20 text-xs text-muted-foreground">
                        <div class="mb-2 flex items-center justify-center gap-4">
                            <a href="{{ route('front.privacy') }}" class="hover:text-primary transition-colors">Privacy</a>
                            <a href="{{ route('front.cookies') }}" class="hover:text-primary transition-colors">Terms</a>
                            <a href="{{ route('front.contact') }}" class="hover:text-primary transition-colors">Support</a>
                        </div>
                        <p>&copy; {{ date('Y') }} Azubi. All rights reserved.</p>
                    </footer>
                </div>
            </div>
        </main>

    </div>

    {{-- Profile Completion Modal (shows for new users) --}}
    @php
        $authUser = auth()->user();
        $profileComplete = 0;
        if($authUser->phone) $profileComplete++;
        if($authUser->date_of_birth) $profileComplete++;
        if($authUser->nationality) $profileComplete++;
        if($authUser->city) $profileComplete++;
        if($authUser->visa_status) $profileComplete++;
        if($authUser->headline) $profileComplete++;
        if($authUser->bio && strlen($authUser->bio) >= 100) $profileComplete++;
        if($authUser->german_level) $profileComplete++;
        if($authUser->preferred_sectors && count($authUser->preferred_sectors) > 0) $profileComplete++;
        if($authUser->skills && count($authUser->skills) >= 3) $profileComplete++;
        $profilePct = round(($profileComplete / 10) * 100);
        $showModal = $profilePct < 20;
    @endphp

    @if($showModal)
    <div class="fixed inset-0 z-[60] bg-[#344F1F]/20 backdrop-blur-sm" id="profileModalOverlay" style="pointer-events:auto;"></div>
    <div class="fixed left-[50%] top-[50%] z-[60] translate-x-[-50%] translate-y-[-50%] border border-border bg-white shadow-xl w-[calc(100%-32px)] sm:w-full sm:max-w-lg max-h-[85vh] sm:max-h-[80vh] rounded-xl sm:rounded-lg overflow-hidden flex flex-col" id="profileModal" style="pointer-events:auto;">

        {{-- Close button --}}
        <button type="button" onclick="closeProfileModal()" class="absolute right-4 top-4 sm:right-6 sm:top-6 rounded-full p-2.5 opacity-70 hover:opacity-100 hover:bg-muted transition-all duration-200 min-w-[44px] min-h-[44px] flex items-center justify-center z-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>

        {{-- Header --}}
        <div class="flex flex-col space-y-1.5 text-center sm:text-left px-4 sm:px-6 pt-5 sm:pt-6 pb-3 sm:pb-4">
            <div class="flex items-center gap-2 sm:gap-3 mb-2 pr-8">
                <div class="p-1.5 sm:p-2 rounded-lg bg-[#F4991A]/10 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F4991A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/><path d="M20 3v4"/><path d="M22 5h-4"/><path d="M4 17v2"/><path d="M5 18H3"/></svg>
                </div>
                <div class="min-w-0">
                    <h2 class="font-semibold tracking-tight text-base sm:text-lg">Complete Your Profile</h2>
                    <p class="text-muted-foreground text-xs sm:text-sm">{{ $profilePct }}% complete - unlock all features</p>
                </div>
            </div>
            <div class="mt-2">
                <div class="relative w-full overflow-hidden rounded-full h-1.5 sm:h-2" style="background:#F2EAD3;">
                    <div class="h-full flex-1 transition-all duration-300 ease-in-out rounded-full" style="background:#F4991A;width:{{ $profilePct }}%;"></div>
                </div>
            </div>
        </div>

        {{-- Steps content --}}
        <div class="px-4 sm:px-6 pb-3 sm:pb-4 min-h-[250px] sm:min-h-[300px] overflow-y-auto flex-1">
            @php
                $steps = [
                    [
                        'title' => 'Basic Information',
                        'desc' => 'Help employers understand who you are',
                        'icon' => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
                        'items' => [
                            ['label' => 'Add profile photo', 'pts' => 5, 'done' => (bool)$authUser->profile_photo],
                            ['label' => 'Add phone number', 'pts' => 5, 'done' => (bool)$authUser->phone],
                            ['label' => 'Add date of birth', 'pts' => 5, 'done' => (bool)$authUser->date_of_birth],
                            ['label' => 'Add nationality', 'pts' => 5, 'done' => (bool)$authUser->nationality],
                            ['label' => 'Set current location', 'pts' => 5, 'done' => (bool)$authUser->city],
                            ['label' => 'Add visa status', 'pts' => 5, 'done' => (bool)$authUser->visa_status],
                        ],
                    ],
                    [
                        'title' => 'Professional Profile',
                        'desc' => 'Stand out to employers',
                        'icon' => '<path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/>',
                        'items' => [
                            ['label' => 'Add professional headline', 'pts' => 5, 'done' => (bool)$authUser->headline],
                            ['label' => 'Write bio (min 100 chars)', 'pts' => 10, 'done' => $authUser->bio && strlen($authUser->bio) >= 100],
                            ['label' => 'Select preferred sectors', 'pts' => 10, 'done' => $authUser->preferred_sectors && count($authUser->preferred_sectors) > 0],
                        ],
                    ],
                    [
                        'title' => 'Languages',
                        'desc' => 'German level is critical for Ausbildung',
                        'icon' => '<path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/>',
                        'items' => [
                            ['label' => 'Set German language level', 'pts' => 5, 'done' => (bool)$authUser->german_level],
                        ],
                    ],
                    [
                        'title' => 'Skills & Experience',
                        'desc' => 'Show what you can do',
                        'icon' => '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>',
                        'items' => [
                            ['label' => 'Add relevant skills (min 3)', 'pts' => 5, 'done' => $authUser->skills && count($authUser->skills) >= 3],
                            ['label' => 'Add work authorization', 'pts' => 5, 'done' => (bool)$authUser->work_authorization],
                        ],
                    ],
                    [
                        'title' => 'Documents',
                        'desc' => 'Boost your credibility',
                        'icon' => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/>',
                        'items' => [
                            ['label' => 'Upload CV/Resume', 'pts' => 10, 'done' => (bool)$authUser->cv_path],
                            ['label' => 'Set availability date', 'pts' => 5, 'done' => (bool)$authUser->available_from],
                        ],
                    ],
                ];
            @endphp

            {{-- Step panels --}}
            @foreach($steps as $si => $step)
            @php
                $stepDone = collect($step['items'])->where('done', true)->count();
                $stepTotal = count($step['items']);
                $stepPct = $stepTotal > 0 ? round(($stepDone / $stepTotal) * 100) : 0;
            @endphp
            <div class="flex flex-col modal-step" data-step="{{ $si }}" style="{{ $si > 0 ? 'display:none;' : '' }}">
                <div class="flex items-center gap-2.5 sm:gap-4 mb-4 sm:mb-6">
                    <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-primary/10 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 sm:w-6 sm:h-6 text-primary">{!! $step['icon'] !!}</svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="text-base sm:text-lg font-semibold text-foreground truncate">{{ $step['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-muted-foreground line-clamp-1">{{ $step['desc'] }}</p>
                    </div>
                    <div class="relative items-center justify-center flex-shrink-0 hidden sm:flex" style="width:40px;height:40px;">
                        <svg width="40" height="40" viewBox="0 0 40 40" class="transform -rotate-90">
                            <circle cx="20" cy="20" r="18.5" fill="none" stroke="#F2EAD3" stroke-width="3"/>
                            <circle cx="20" cy="20" r="18.5" fill="none" stroke="#F4991A" stroke-width="3" stroke-linecap="round" stroke-dasharray="116.24" stroke-dashoffset="{{ 116.24 * (1 - $stepPct/100) }}"/>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="font-semibold text-foreground" style="font-size:9px;">{{ $stepPct }}%</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-1.5 sm:space-y-2">
                    @foreach($step['items'] as $item)
                    <a href="{{ route('front.dashboard.profile') }}" class="w-full flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 rounded-lg text-left transition-all border hover:bg-muted/50 hover:border-primary/30 cursor-pointer active:scale-[0.98]" style="text-decoration:none;border-color:{{ $item['done'] ? 'rgba(22,163,74,0.3)' : 'rgba(52,79,31,0.1)' }};background:{{ $item['done'] ? 'rgba(22,163,74,0.05)' : 'white' }};">
                        <div class="flex-shrink-0 w-5 h-5 sm:w-6 sm:h-6 rounded-full flex items-center justify-center border-2" style="border-color:{{ $item['done'] ? '#16a34a' : 'rgba(52,79,31,0.2)' }};background:{{ $item['done'] ? '#16a34a' : 'transparent' }};">
                            @if($item['done'])
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            @endif
                        </div>
                        <span class="flex-1 text-xs sm:text-sm font-medium truncate" style="color:{{ $item['done'] ? 'rgba(52,79,31,0.5)' : '#344F1F' }};{{ $item['done'] ? 'text-decoration:line-through;' : '' }}">{{ $item['label'] }}</span>
                        @if(!$item['done'])
                            <span class="text-[10px] sm:text-xs font-medium px-1.5 sm:px-2 py-0.5 rounded-full flex-shrink-0 bg-[#F4991A]/10 text-[#F4991A]">+{{ $item['pts'] }}</span>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground flex-shrink-0"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        {{-- Footer with step dots and navigation --}}
        <div class="px-4 sm:px-6 py-3 sm:py-4 border-t bg-muted/30">
            {{-- Step dots --}}
            <div class="flex items-center justify-center gap-1 sm:gap-2 mb-3 sm:mb-4">
                @for($i = 0; $i < count($steps); $i++)
                    <button onclick="goToStep({{ $i }})" class="relative flex items-center justify-center transition-all duration-200 min-w-[32px] min-h-[32px] sm:min-w-0 sm:min-h-0 focus:outline-none" aria-label="Step {{ $i + 1 }}">
                        <div class="rounded-full transition-all duration-200 modal-dot" data-dot="{{ $i }}" style="{{ $i === 0 ? 'width:2rem;height:0.625rem;background:hsl(var(--primary));' : 'width:0.625rem;height:0.625rem;background:rgba(52,79,31,0.2);' }}"></div>
                    </button>
                @endfor
            </div>
            {{-- Nav buttons --}}
            <div class="flex items-center justify-between gap-2 sm:gap-3">
                <button onclick="closeProfileModal()" class="inline-flex items-center justify-center rounded-full font-semibold transition-all duration-200 h-10 text-muted-foreground hover:text-foreground text-xs sm:text-sm px-2 sm:px-3 hover:bg-muted/50">
                    Skip for now
                </button>
                <div class="flex items-center gap-1.5 sm:gap-2">
                    <button onclick="prevStep()" id="modalPrevBtn" class="inline-flex items-center justify-center rounded-full font-semibold transition-all duration-200 h-10 px-4 gap-1 text-xs sm:text-sm border border-border hover:bg-muted/50" style="display:none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                        Back
                    </button>
                    <button onclick="nextStep()" id="modalNextBtn" class="inline-flex items-center justify-center rounded-full font-semibold transition-all duration-200 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 gap-0.5 sm:gap-1 min-w-[80px] sm:min-w-[100px] text-xs sm:text-sm text-white" style="background:#F4991A;">
                        Next
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- Floating Profile Completion Widget --}}
    <div class="fixed bottom-4 right-4 md:bottom-6 md:right-6 z-50 flex flex-col items-end gap-2">
        {{-- Expanded panel --}}
        <div class="bg-background border shadow-2xl rounded-2xl w-[calc(100vw-2rem)] max-w-[360px] max-h-[70vh] md:max-h-[580px] flex-col overflow-hidden hidden" id="profilePanel" style="display:none;">
            {{-- Header --}}
            <div class="flex-shrink-0 p-3 md:p-4 border-b bg-muted/30">
                <div class="flex items-center justify-between gap-2">
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-sm md:text-base">Profile Completion</h3>
                        <p class="text-xs text-muted-foreground mt-0.5 line-clamp-1">Complete these items to be visible to employers</p>
                    </div>
                    <button class="p-2 hover:bg-muted rounded-full transition-colors min-w-[44px] min-h-[44px] flex items-center justify-center" aria-label="Close" onclick="toggleProfilePanel()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                </div>
                <div class="mt-3">
                    <div class="flex items-center justify-between text-xs mb-1.5">
                        <span class="font-medium">0% Complete</span>
                        <span class="text-muted-foreground">0/15 items</span>
                    </div>
                    <div class="h-1.5 bg-muted rounded-full overflow-hidden">
                        <div class="h-full bg-primary rounded-full" style="width: 0%;"></div>
                    </div>
                </div>
                <div class="mt-3 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                    <span class="text-xs text-muted-foreground">Completeness:</span>
                    <span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-red-100 text-red-700">Just Started</span>
                </div>
            </div>
            {{-- Checklist items --}}
            <div class="flex-1 overflow-y-auto" style="max-height:380px;">
                <div class="p-2">
                    @php
                        $profileItems = [
                            ['icon' => 'user', 'label' => 'Add profile photo', 'points' => 5, 'svg' => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>'],
                            ['icon' => 'phone', 'label' => 'Add phone number', 'points' => 5, 'svg' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>'],
                            ['icon' => 'calendar', 'label' => 'Add date of birth', 'points' => 5, 'svg' => '<path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/>'],
                            ['icon' => 'globe', 'label' => 'Add nationality', 'points' => 5, 'svg' => '<circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/>'],
                            ['icon' => 'map-pin', 'label' => 'Set current location', 'points' => 5, 'svg' => '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/>'],
                            ['icon' => 'file', 'label' => 'Add visa status', 'points' => 5, 'svg' => '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/>'],
                            ['icon' => 'briefcase', 'label' => 'Add professional headline', 'points' => 5, 'svg' => '<path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/>'],
                            ['icon' => 'bio', 'label' => 'Write bio (min 100 characters)', 'points' => 10, 'svg' => '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/>'],
                            ['icon' => 'sectors', 'label' => 'Select preferred sectors (min 1)', 'points' => 10, 'svg' => '<path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/>'],
                            ['icon' => 'cities', 'label' => 'Add preferred cities (min 1)', 'points' => 5, 'svg' => '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/>'],
                            ['icon' => 'education', 'label' => 'Add education background', 'points' => 10, 'svg' => '<path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/>'],
                            ['icon' => 'experience', 'label' => 'Add work experience', 'points' => 10, 'svg' => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>'],
                            ['icon' => 'german', 'label' => 'Set German language level', 'points' => 5, 'svg' => '<path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/>'],
                            ['icon' => 'skills', 'label' => 'Add relevant skills', 'points' => 5, 'svg' => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>'],
                            ['icon' => 'cv', 'label' => 'Upload CV/Resume', 'points' => 10, 'svg' => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/>'],
                        ];
                    @endphp
                    @foreach($profileItems as $item)
                    <button class="w-full flex items-center gap-3 p-3 rounded-lg transition-all min-h-[56px] hover:bg-muted/50 active:scale-[0.98] cursor-pointer hover:shadow-sm">
                        <div class="flex-shrink-0 w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all border-muted-foreground/30 hover:border-primary"></div>
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg flex items-center justify-center bg-primary/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">{!! $item['svg'] !!}</svg>
                        </div>
                        <span class="flex-1 text-left text-sm font-medium">{{ $item['label'] }}</span>
                        <span class="flex-shrink-0 text-xs px-2 py-0.5 rounded-full bg-primary/10 text-primary font-medium">+{{ $item['points'] }}</span>
                    </button>
                    @endforeach
                </div>
            </div>
            {{-- Footer CTA --}}
            <button class="flex-shrink-0 w-full bg-primary text-primary-foreground hover:bg-primary/90 py-4 text-sm md:text-base font-medium transition-colors border-t min-h-[56px]">
                Complete next item (+5 points)
            </button>
        </div>

        {{-- Collapsed toggle button --}}
        <button class="flex items-center gap-2 md:gap-3 px-3 md:px-4 py-2 md:py-3 bg-background border shadow-lg rounded-full transition-all hover:shadow-xl hover:border-primary/50 min-h-[52px]" aria-label="Toggle profile completion" onclick="toggleProfilePanel()">
            <div class="relative w-10 h-10">
                <svg class="w-10 h-10 -rotate-90" viewBox="0 0 40 40">
                    <circle cx="20" cy="20" r="17" stroke="currentColor" stroke-width="3" fill="none" class="text-muted"></circle>
                    <circle cx="20" cy="20" r="17" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="106.81" stroke-dashoffset="106.81" stroke-linecap="round" class="text-primary transition-all duration-500"></circle>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-[10px] md:text-[11px] font-bold">0%</span>
                </div>
            </div>
            <div class="flex items-center gap-1.5 md:gap-2">
                <span class="text-xs md:text-sm font-medium whitespace-nowrap">Profile</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground" id="profileChevron"><path d="m18 15-6-6-6 6"/></svg>
            </div>
        </button>
    </div>

    <script>
        // Profile completion modal
        var modalCurrentStep = 0;
        var modalTotalSteps = document.querySelectorAll('.modal-step').length;

        function goToStep(step) {
            modalCurrentStep = step;
            document.querySelectorAll('.modal-step').forEach(function(el, i) {
                el.style.display = i === step ? '' : 'none';
            });
            document.querySelectorAll('.modal-dot').forEach(function(el, i) {
                if (i === step) {
                    el.style.width = '2rem'; el.style.height = '0.625rem';
                    el.style.background = 'hsl(var(--primary))';
                } else {
                    el.style.width = '0.625rem'; el.style.height = '0.625rem';
                    el.style.background = 'rgba(52,79,31,0.2)';
                }
            });
            var prev = document.getElementById('modalPrevBtn');
            var next = document.getElementById('modalNextBtn');
            if (prev) prev.style.display = step === 0 ? 'none' : '';
            if (next) {
                if (step === modalTotalSteps - 1) {
                    next.innerHTML = 'Go to Profile <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>';
                } else {
                    next.innerHTML = 'Next <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>';
                }
            }
        }

        function nextStep() {
            if (modalCurrentStep >= modalTotalSteps - 1) {
                window.location.href = '{{ route("front.dashboard.profile") }}';
                return;
            }
            goToStep(modalCurrentStep + 1);
        }

        function prevStep() {
            if (modalCurrentStep > 0) goToStep(modalCurrentStep - 1);
        }

        function closeProfileModal() {
            var overlay = document.getElementById('profileModalOverlay');
            var modal = document.getElementById('profileModal');
            if (overlay) overlay.style.display = 'none';
            if (modal) modal.style.display = 'none';
        }

        function toggleProfilePanel() {
            var panel = document.getElementById('profilePanel');
            var chevron = document.getElementById('profileChevron');
            var isHidden = panel.style.display === 'none' || panel.style.display === '';
            panel.style.display = isHidden ? 'flex' : 'none';
            if (chevron) {
                chevron.style.transform = isHidden ? 'rotate(180deg)' : '';
            }
        }
        function toggleSidebar() {
            document.getElementById('dashboardSidebar').classList.toggle('collapsed');
            document.getElementById('dashboardMain').classList.toggle('expanded');
        }
        function openMobileSidebar() {
            document.getElementById('dashboardSidebar').classList.add('mobile-open');
            document.getElementById('sidebarOverlay').classList.add('show');
        }
        function closeMobileSidebar() {
            document.getElementById('dashboardSidebar').classList.remove('mobile-open');
            document.getElementById('sidebarOverlay').classList.remove('show');
        }
        function toggleUserMenu(e) {
            if (e) e.stopPropagation();
            var menu = document.getElementById('userMenu');
            menu.classList.toggle('hidden');
        }
        document.addEventListener('click', function(e) {
            var menu = document.getElementById('userMenu');
            var avatarBtn = menu ? menu.parentElement : null;
            if (menu && avatarBtn && !avatarBtn.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
