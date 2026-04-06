@extends('frontoffice.layouts.dashboard')

@section('title', 'My Profile - Azubi')

@push('styles')
<style>
    .profile-card {
        border-radius: 0.75rem;
        background: white;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05), 0 4px 6px -4px rgba(0,0,0,0.05);
        border: 0;
    }
    .profile-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 1rem 0.75rem;
    }
    .profile-card-title {
        font-weight: 600;
        font-size: 1.125rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #344F1F;
    }
    .profile-card-title svg { color: hsl(var(--primary)); }
    .profile-card-body { padding: 0 1rem 1rem; }
    .edit-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 2.5rem;
        padding: 0 1.5rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 600;
        transition: all 0.2s;
        border: none;
        background: transparent;
        cursor: pointer;
        color: inherit;
    }
    .edit-btn:hover { background: rgba(52,79,31,0.05); }
    .add-btn-outline {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        height: 2.5rem;
        padding: 0 1.5rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 600;
        border: 2px solid hsl(var(--primary));
        background: transparent;
        color: hsl(var(--primary));
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
    }
    .add-btn-outline:hover {
        background: #F9F5F0;
        color: #344F1F;
        border-color: rgba(52,79,31,0.3);
        transform: translateY(-2px);
    }
    .add-btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        height: 2.5rem;
        padding: 0 1.5rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 600;
        background: hsl(var(--primary));
        color: white;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        text-decoration: none;
    }
    .add-btn-primary:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }
    .empty-state {
        padding: 2rem 0;
        text-align: center;
    }
    .empty-state svg { margin: 0 auto 0.75rem; color: rgba(52,79,31,0.15); }
    .empty-state p { font-size: 0.875rem; color: rgba(52,79,31,0.5); }
    .badge-status {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        padding: 0.25rem 0.5rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        border: 1px solid transparent;
    }
    .badge-red { background: #fef2f2; color: #991b1b; }
    .badge-green { background: #f0fdf4; color: #166534; }
    .badge-muted { background: hsl(var(--muted)); color: hsl(var(--muted-foreground)); }
    .badge-orange { background: rgba(244,153,26,0.1); color: #F4991A; }
</style>
@endpush

@section('content')
@php
    $score = 0;
    $totalItems = 15;
    $completed = 0;
    if($user->name) { $score += 5; $completed++; }
    if($user->phone) { $score += 5; $completed++; }
    if($user->date_of_birth) { $score += 5; $completed++; }
    if($user->nationality) { $score += 5; $completed++; }
    if($user->city) { $score += 5; $completed++; }
    if($user->visa_status) { $score += 5; $completed++; }
    if($user->headline) { $score += 5; $completed++; }
    if($user->bio && strlen($user->bio) >= 100) { $score += 10; $completed++; }
    if($user->german_level) { $score += 5; $completed++; }
    if($user->preferred_sectors && count($user->preferred_sectors) > 0) { $score += 10; $completed++; }
    if($user->preferred_cities && count($user->preferred_cities) > 0) { $score += 5; $completed++; }
    if($user->skills && count($user->skills) >= 3) { $score += 5; $completed++; }
    if($user->work_authorization) { $score += 5; $completed++; }
    if($user->available_from) { $score += 5; $completed++; }
    if($user->cv_path) { $score += 10; $completed++; }
    $pct = min(100, $score);
    $strengthLabel = $pct < 25 ? 'Weak' : ($pct < 50 ? 'Getting there' : ($pct < 75 ? 'Good' : 'Strong'));
    $strengthClass = $pct < 25 ? 'badge-red' : ($pct < 50 ? 'badge-orange' : 'badge-green');
    $missingItems = [];
    if(!$user->profile_photo) $missingItems[] = 'Upload a profile photo';
    if(!$user->phone) $missingItems[] = 'Add your phone number';
    if(!$user->date_of_birth) $missingItems[] = 'Add date of birth';
    if(!$user->nationality) $missingItems[] = 'Add nationality';
    if(!$user->city) $missingItems[] = 'Set current location';
    if(!$user->visa_status) $missingItems[] = 'Add visa status';
@endphp

<div class="min-h-screen">
    <div class="max-w-7xl mx-auto">

        @if(session('success'))
            <div class="mb-4 p-4 rounded-xl text-sm font-medium" style="background:rgba(22,163,74,0.1);color:#16a34a;border:1px solid rgba(22,163,74,0.2);">
                {{ session('success') }}
            </div>
        @endif

        {{-- Hero Banner --}}
        @if($pct < 100)
        <div class="mb-4 sm:mb-6">
            <div class="relative overflow-hidden rounded-xl p-4 md:p-6" style="background:linear-gradient(135deg,rgba(0,0,0,0.7),rgba(0,0,0,0.5));background-color:#344F1F;">
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/60 to-black/50"></div>
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6 pr-8 md:pr-12">
                        <div class="flex items-start gap-3 md:gap-4 flex-1">
                            <div class="flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base md:text-lg font-semibold text-white mb-1">Your profile is only {{ $pct }}% complete</h3>
                                <p class="text-xs md:text-sm text-white/90">Missing fields below. Fill them to increase profile completion.</p>
                                @if(count($missingItems) > 0)
                                <ul class="mt-2 space-y-1 text-xs md:text-sm text-white/80">
                                    @foreach(array_slice($missingItems, 0, 3) as $item)
                                        <li class="flex items-start gap-1.5"><span class="mt-0.5">⭐</span><span>{{ $item }}</span></li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                        <div class="flex-shrink-0 flex flex-col sm:flex-row gap-2 md:gap-3">
                            <button class="inline-flex items-center justify-center gap-2 px-5 md:px-6 py-2.5 md:py-3 rounded-full bg-white text-[#344F1F] font-medium text-sm md:text-base hover:bg-white/90 transition-colors shadow-lg whitespace-nowrap" onclick="document.getElementById('editContactSection').scrollIntoView({behavior:'smooth'})">
                                Update Manually
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-white/20">
                        <div class="flex items-center justify-between text-xs md:text-sm mb-2">
                            <span class="font-medium text-white">Profile Completion: {{ $pct }}%</span>
                            <span class="text-white/80">Goal: 100%</span>
                        </div>
                        <div class="h-2 bg-white/20 rounded-full overflow-hidden">
                            <div class="h-full bg-white transition-all duration-500 rounded-full" style="width:{{ $pct }}%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Stats Cards --}}
        <div class="mb-4 sm:mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                {{-- Profile Completeness --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="{{ $pct < 25 ? '#991b1b' : '#F4991A' }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                            Profile Completeness
                        </div>
                    </div>
                    <div class="profile-card-body space-y-2">
                        <div class="flex items-baseline justify-between mb-1">
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-2xl font-bold" style="color:#344F1F;">{{ $pct }}%</span>
                                <span class="text-xs text-muted-foreground">complete</span>
                            </div>
                            <span class="badge-status {{ $pct < 25 ? 'badge-red' : ($pct < 60 ? 'badge-orange' : 'badge-green') }}">{{ $pct < 25 ? 'Incomplete' : ($pct < 60 ? 'Partial' : 'Good') }}</span>
                        </div>
                        <div class="h-2 rounded-full overflow-hidden" style="background:#F2EAD3;">
                            <div class="h-full rounded-full transition-all duration-500" style="background:hsl(var(--primary));width:{{ $pct }}%;"></div>
                        </div>
                        <div class="flex items-center justify-between text-xs pt-1.5">
                            <span class="text-muted-foreground">Next Goal</span>
                            <span class="font-medium" style="color:#344F1F;">{{ $pct < 25 ? '25% - Getting there' : ($pct < 50 ? '50% - Halfway' : ($pct < 75 ? '75% - Almost there' : '100% - Complete!')) }}</span>
                        </div>
                    </div>
                </div>

                {{-- Profile Strength --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="{{ $pct < 25 ? '#991b1b' : '#F4991A' }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                            Profile Strength
                        </div>
                    </div>
                    <div class="profile-card-body space-y-2">
                        <div class="flex items-baseline justify-between mb-1">
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-2xl font-bold" style="color:#344F1F;">{{ $score }}</span>
                                <span class="text-xs text-muted-foreground">points</span>
                            </div>
                            <span class="badge-status {{ $strengthClass }}">{{ $strengthLabel }}</span>
                        </div>
                        <div class="h-2 rounded-full overflow-hidden" style="background:#F2EAD3;">
                            <div class="h-full rounded-full transition-all duration-500" style="background:hsl(var(--primary));width:{{ $pct }}%;"></div>
                        </div>
                        <div class="flex items-center justify-between text-xs pt-1.5">
                            <span class="text-muted-foreground">Tier</span>
                            <span class="font-medium capitalize" style="color:#344F1F;">{{ $strengthLabel }} Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Layout: Sidebar + Content --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6">

            {{-- LEFT: Profile Card + Info Cards --}}
            <div class="lg:col-span-1 space-y-4 sm:space-y-6">

                {{-- Avatar Card --}}
                <div class="profile-card overflow-hidden">
                    <div class="h-20 sm:h-24" style="background:linear-gradient(to bottom right,hsl(var(--primary)),hsl(var(--primary)/0.6));"></div>
                    <div class="relative px-4 sm:px-6 pb-4 sm:pb-6">
                        <div class="relative -mt-10 sm:-mt-12 mb-4">
                            <div class="relative inline-block">
                                <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-background p-1 shadow-xl">
                                    <div class="w-full h-full rounded-full overflow-hidden bg-muted flex items-center justify-center text-2xl font-bold text-white" style="background:linear-gradient(135deg,#3b82f6,#6366f1);">
                                        @if($user->profile_photo)
                                            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}" class="w-full h-full object-cover">
                                        @else
                                            {{ strtoupper(substr($user->name, 0, 2)) }}
                                        @endif
                                    </div>
                                </div>
                                <button onclick="document.getElementById('profilePicModal').classList.remove('hidden')" class="absolute bottom-0 right-0 p-1.5 rounded-full bg-primary text-primary-foreground shadow-lg hover:bg-primary/90 transition-all hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <h1 class="text-xl sm:text-2xl font-bold" style="color:#344F1F;">{{ $user->name }}</h1>
                                <p class="text-sm text-muted-foreground">{{ $user->email }}</p>
                            </div>
                            @if($user->german_level)
                            <div class="flex flex-wrap gap-1.5">
                                <span class="badge-status badge-orange">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                                    German {{ $user->german_level }}
                                </span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Contact Card --}}
                <div class="profile-card" id="editContactSection">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            Contact
                        </div>
                        <button class="edit-btn" onclick="document.getElementById('editContactModal').classList.remove('hidden')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                        </button>
                    </div>
                    <div class="profile-card-body space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            <span class="text-muted-foreground">{{ $user->email }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                        </div>
                        @if($user->phone)
                        <div class="flex items-center gap-3 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span class="text-muted-foreground">{{ $user->phone }}</span>
                        </div>
                        @endif
                    </div>
                </div>

                {{-- Professional Info --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            Professional Info
                        </div>
                    </div>
                    <div class="profile-card-body">
                        @if($user->headline || $user->bio)
                            @if($user->headline)<p class="font-medium text-sm mb-2" style="color:#344F1F;">{{ $user->headline }}</p>@endif
                            @if($user->bio)<p class="text-sm text-muted-foreground">{{ Str::limit($user->bio, 200) }}</p>@endif
                        @else
                            <div class="text-center py-4">
                                <a href="{{ route('front.dashboard.profile') }}?edit=professional" class="add-btn-outline w-full">Add Professional Info</a>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Legal & Availability --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                            Legal & Availability
                        </div>
                    </div>
                    <div class="profile-card-body">
                        @if($user->visa_status || $user->work_authorization)
                            <div class="space-y-2 text-sm">
                                @if($user->visa_status)<div class="flex justify-between"><span class="text-muted-foreground">Visa</span><span class="font-medium" style="color:#344F1F;">{{ $user->visa_status }}</span></div>@endif
                                @if($user->work_authorization)<div class="flex justify-between"><span class="text-muted-foreground">Work Auth</span><span class="font-medium" style="color:#344F1F;">{{ $user->work_authorization }}</span></div>@endif
                                @if($user->available_from)<div class="flex justify-between"><span class="text-muted-foreground">Available</span><span class="font-medium" style="color:#344F1F;">{{ $user->available_from->format('M d, Y') }}</span></div>@endif
                            </div>
                        @else
                            <div class="text-center py-4">
                                <a href="{{ route('front.dashboard.profile') }}?edit=legal" class="add-btn-outline w-full">Add Legal Information</a>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Location --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                            Location
                        </div>
                    </div>
                    <div class="profile-card-body">
                        @if($user->city || $user->country)
                            <div class="space-y-2 text-sm">
                                @if($user->current_location)<div class="flex justify-between"><span class="text-muted-foreground">Location</span><span class="font-medium" style="color:#344F1F;">{{ $user->current_location }}</span></div>@endif
                                @if($user->postal_code)<div class="flex justify-between"><span class="text-muted-foreground">Postal Code</span><span class="font-medium" style="color:#344F1F;">{{ $user->postal_code }}</span></div>@endif
                            </div>
                        @else
                            <div class="text-center py-4">
                                <a href="{{ route('front.dashboard.profile') }}?edit=location" class="add-btn-outline w-full">Add Location</a>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- German Level Verification --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
                            German Level Verification
                        </div>
                    </div>
                    <div class="profile-card-body space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium" style="color:#344F1F;">German Certificate</span>
                            <span class="badge-status badge-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                                Not Verified
                            </span>
                        </div>
                        <div class="text-xs text-muted-foreground pb-2">Verify your German language proficiency with an official certificate (Goethe, telc, TestDaF, etc.)</div>
                        <div class="pt-2 border-t space-y-2" style="border-color:rgba(52,79,31,0.08);">
                            <button class="add-btn-outline w-full">Upload Certificate</button>
                        </div>
                    </div>
                </div>

                {{-- Video Introduction --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/><rect x="2" y="6" width="14" height="12" rx="2"/></svg>
                            Video Introduction
                        </div>
                        <span class="badge-status" style="background:hsl(var(--secondary));color:hsl(var(--secondary-foreground));font-size:0.75rem;">New</span>
                    </div>
                    <div class="profile-card-body">
                        <div class="py-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:rgba(52,79,31,0.15);margin:0 auto 0.5rem;display:block;"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/><rect x="2" y="6" width="14" height="12" rx="2"/></svg>
                            <p class="text-xs text-muted-foreground mb-3">Stand out with a professional video</p>
                            <button class="add-btn-primary w-full" style="min-height:44px;">Create Video Introduction</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Education, Experience, Preferences, Languages, Skills --}}
            <div class="lg:col-span-2 space-y-4 sm:space-y-6">

                {{-- Education --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
                            Education
                        </div>
                        <button class="add-btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add</button>
                    </div>
                    <div class="profile-card-body">
                        <div class="empty-state">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
                            <p>No education added yet</p>
                            <button class="add-btn-outline mt-3">Add Education</button>
                        </div>
                    </div>
                </div>

                {{-- Experience --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            Experience
                        </div>
                        <button class="add-btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add</button>
                    </div>
                    <div class="profile-card-body">
                        <div class="empty-state">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            <p>No experience added yet</p>
                            <button class="add-btn-outline mt-3">Add Experience</button>
                        </div>
                    </div>
                </div>

                {{-- Ausbildung Preferences --}}
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            Ausbildung Preferences
                        </div>
                    </div>
                    <div class="profile-card-body">
                        @if($user->preferred_sectors && count($user->preferred_sectors) > 0)
                            <div class="flex flex-wrap gap-2">
                                @foreach($user->preferred_sectors as $sector)
                                    <span class="badge-status badge-orange">{{ $sector }}</span>
                                @endforeach
                            </div>
                        @else
                            <div class="empty-state">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                                <p>No preferences set</p>
                                <button class="add-btn-outline mt-3">Set Preferences</button>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Languages + Skills --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                    {{-- Languages --}}
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <div class="profile-card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
                                Languages
                            </div>
                            <button class="add-btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add</button>
                        </div>
                        <div class="profile-card-body">
                            @if($user->german_level)
                                <div class="flex items-center justify-between text-sm p-2 rounded-lg" style="background:#F9F5F0;">
                                    <span class="font-medium" style="color:#344F1F;">German</span>
                                    <span class="badge-status badge-orange">{{ $user->german_level }}</span>
                                </div>
                            @else
                                <div class="py-6 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:rgba(52,79,31,0.15);margin:0 auto 0.5rem;display:block;"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
                                    <p class="text-xs text-muted-foreground">No languages added</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Skills --}}
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <div class="profile-card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                                Skills
                            </div>
                        </div>
                        <div class="profile-card-body">
                            @if($user->skills && count($user->skills) > 0)
                                <div class="flex flex-wrap gap-2">
                                    @foreach($user->skills as $skill)
                                        @if($skill)
                                            <span class="badge-status badge-muted">{{ $skill }}</span>
                                        @endif
                                    @endforeach
                                </div>
                            @else
                                <div class="py-6 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:rgba(52,79,31,0.15);margin:0 auto 0.5rem;display:block;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                                    <p class="text-xs text-muted-foreground">No skills added</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Update Profile Picture Modal --}}
<div id="profilePicModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4" style="background:rgba(0,0,0,0.5);" onclick="if(event.target===this)this.classList.add('hidden')">
    <div class="bg-white rounded-2xl w-full max-w-md shadow-2xl" onclick="event.stopPropagation()">
        <div class="flex items-center justify-between p-5 pb-3">
            <h2 class="text-lg font-semibold" style="color:#344F1F;">Update Profile Picture</h2>
            <button onclick="document.getElementById('profilePicModal').classList.add('hidden')" class="p-1 rounded-full hover:bg-gray-100 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>
        <form action="{{ route('front.dashboard.profile.photo') }}" method="POST" enctype="multipart/form-data" id="photoForm">
            @csrf
            <div class="px-5 pb-5">
                {{-- Current Avatar --}}
                <div class="text-center mb-5">
                    <p class="text-sm font-medium mb-3" style="color:#344F1F;">Current</p>
                    <div class="w-20 h-20 rounded-full mx-auto overflow-hidden flex items-center justify-center text-2xl font-bold text-white" style="background:linear-gradient(135deg,#3b82f6,#6366f1);border:3px solid #344F1F;">
                        @if($user->profile_photo)
                            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}" class="w-full h-full object-cover">
                        @else
                            {{ strtoupper(substr($user->name, 0, 2)) }}
                        @endif
                    </div>
                </div>

                {{-- Upload Area --}}
                <label for="profilePhotoInput" id="dropZone" class="block cursor-pointer rounded-xl border-2 border-dashed p-6 text-center transition-colors hover:border-[#344F1F]/40 hover:bg-[#F9F5F0]/50" style="border-color:rgba(52,79,31,0.2);">
                    <input type="file" name="profile_photo" id="profilePhotoInput" accept="image/png,image/jpeg" class="hidden" onchange="handlePhotoPreview(this)">
                    <div id="uploadPlaceholder">
                        <div class="w-10 h-10 rounded-full mx-auto mb-3 flex items-center justify-center" style="background:#F9F5F0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#344F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                        </div>
                        <p class="text-sm font-medium" style="color:#344F1F;">Tap to upload or drag image</p>
                        <p class="text-xs mt-1" style="color:#344F1F;opacity:0.6;">PNG, JPG up to 5MB</p>
                    </div>
                    <div id="uploadPreview" class="hidden">
                        <img id="previewImg" src="" alt="Preview" class="w-20 h-20 rounded-full mx-auto object-cover mb-2">
                        <p id="previewName" class="text-sm font-medium" style="color:#344F1F;"></p>
                        <p class="text-xs mt-1" style="color:#344F1F;opacity:0.6;">Click to change</p>
                    </div>
                </label>

                {{-- Buttons --}}
                <div class="flex gap-3 mt-5">
                    <button type="button" onclick="document.getElementById('profilePicModal').classList.add('hidden');resetPhotoForm()" class="flex-1 h-11 rounded-full border-2 font-semibold text-sm transition-colors" style="border-color:hsl(var(--primary));color:hsl(var(--primary));">Cancel</button>
                    <button type="submit" id="photoSubmitBtn" disabled class="flex-1 h-11 rounded-full font-semibold text-sm text-white transition-colors flex items-center justify-center gap-2" style="background:hsl(var(--primary));opacity:0.5;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Edit Contact Information Modal --}}
<div id="editContactModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4" style="background:rgba(0,0,0,0.5);" onclick="if(event.target===this)this.classList.add('hidden')">
    <div class="bg-white rounded-2xl w-full max-w-md shadow-2xl" onclick="event.stopPropagation()">
        <div class="flex items-center justify-between p-5 pb-1">
            <div>
                <h2 class="text-lg font-semibold" style="color:#344F1F;">Edit Contact Information</h2>
                <p class="text-sm text-muted-foreground">Update your contact details</p>
            </div>
            <button onclick="document.getElementById('editContactModal').classList.add('hidden')" class="p-1 rounded-full hover:bg-gray-100 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>
        <form action="{{ route('front.dashboard.profile.contact') }}" method="POST">
            @csrf
            <div class="px-5 py-4 space-y-4">
                {{-- First & Last Name --}}
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="flex items-center gap-1.5 text-sm font-medium mb-1.5" style="color:#344F1F;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            First Name
                        </label>
                        <input type="text" name="first_name" value="{{ explode(' ', $user->name ?? '')[0] ?? '' }}" placeholder="First Name" required class="w-full h-10 px-3 rounded-lg border text-sm focus:outline-none focus:ring-2 focus:ring-[#344F1F]/20 focus:border-[#344F1F]" style="border-color:rgba(52,79,31,0.2);">
                    </div>
                    <div>
                        <label class="flex items-center gap-1.5 text-sm font-medium mb-1.5" style="color:#344F1F;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            Last Name
                        </label>
                        <input type="text" name="last_name" value="{{ count(explode(' ', $user->name ?? '')) > 1 ? implode(' ', array_slice(explode(' ', $user->name), 1)) : '' }}" placeholder="Last Name" required class="w-full h-10 px-3 rounded-lg border text-sm focus:outline-none focus:ring-2 focus:ring-[#344F1F]/20 focus:border-[#344F1F]" style="border-color:rgba(52,79,31,0.2);">
                    </div>
                </div>

                {{-- Phone Number --}}
                <div>
                    <label class="flex items-center gap-1.5 text-sm font-medium mb-1.5" style="color:#344F1F;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Phone Number
                        <span class="font-normal text-muted-foreground">(optional)</span>
                    </label>
                    <input type="tel" name="phone" value="{{ $user->phone ?? '' }}" placeholder="Phone number" class="w-full h-10 px-3 rounded-lg border text-sm focus:outline-none focus:ring-2 focus:ring-[#344F1F]/20 focus:border-[#344F1F]" style="border-color:rgba(52,79,31,0.2);">
                </div>

                {{-- Location --}}
                <div>
                    <label class="flex items-center gap-1.5 text-sm font-medium mb-1.5" style="color:#344F1F;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                        Location
                    </label>
                    <input type="text" name="city" value="{{ $user->city ?? '' }}" placeholder="e.g. Munich, Germany" class="w-full h-10 px-3 rounded-lg border text-sm focus:outline-none focus:ring-2 focus:ring-[#344F1F]/20 focus:border-[#344F1F]" style="border-color:rgba(52,79,31,0.2);">
                </div>

                {{-- Date of Birth --}}
                <div>
                    <label class="flex items-center gap-1.5 text-sm font-medium mb-1.5" style="color:#344F1F;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>
                        Date of Birth
                    </label>
                    <input type="date" name="date_of_birth" value="{{ $user->date_of_birth ? $user->date_of_birth->format('Y-m-d') : '' }}" class="w-full h-10 px-3 rounded-lg border text-sm focus:outline-none focus:ring-2 focus:ring-[#344F1F]/20 focus:border-[#344F1F]" style="border-color:rgba(52,79,31,0.2);">
                    <p class="text-xs mt-1" style="color:#344F1F;opacity:0.6;">Must be between 16 and 50 years old</p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex gap-3 px-5 pb-5">
                <button type="button" onclick="document.getElementById('editContactModal').classList.add('hidden')" class="flex-1 h-11 rounded-full border-2 font-semibold text-sm transition-colors" style="border-color:hsl(var(--primary));color:hsl(var(--primary));">Cancel</button>
                <button type="submit" class="flex-1 h-11 rounded-full font-semibold text-sm text-white transition-colors" style="background:hsl(var(--primary));">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
function handlePhotoPreview(input) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        if (file.size > 5 * 1024 * 1024) {
            alert('File size must be under 5MB');
            input.value = '';
            return;
        }
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('previewName').textContent = file.name;
            document.getElementById('uploadPlaceholder').classList.add('hidden');
            document.getElementById('uploadPreview').classList.remove('hidden');
            const btn = document.getElementById('photoSubmitBtn');
            btn.disabled = false;
            btn.style.opacity = '1';
        };
        reader.readAsDataURL(file);
    }
}

function resetPhotoForm() {
    document.getElementById('profilePhotoInput').value = '';
    document.getElementById('uploadPlaceholder').classList.remove('hidden');
    document.getElementById('uploadPreview').classList.add('hidden');
    const btn = document.getElementById('photoSubmitBtn');
    btn.disabled = true;
    btn.style.opacity = '0.5';
}

// Drag and drop support
const dropZone = document.getElementById('dropZone');
if (dropZone) {
    ['dragenter', 'dragover'].forEach(evt => {
        dropZone.addEventListener(evt, function(e) {
            e.preventDefault();
            dropZone.style.borderColor = '#344F1F';
            dropZone.style.background = 'rgba(52,79,31,0.03)';
        });
    });
    ['dragleave', 'drop'].forEach(evt => {
        dropZone.addEventListener(evt, function(e) {
            e.preventDefault();
            dropZone.style.borderColor = 'rgba(52,79,31,0.2)';
            dropZone.style.background = '';
        });
    });
    dropZone.addEventListener('drop', function(e) {
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            const input = document.getElementById('profilePhotoInput');
            input.files = files;
            handlePhotoPreview(input);
        }
    });
}
</script>
@endpush
