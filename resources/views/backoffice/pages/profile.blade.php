@extends('backoffice.layouts.dashboard')

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
                                <button onclick="openModal('profilePicModal')" class="absolute bottom-0 right-0 p-1.5 rounded-full bg-primary text-primary-foreground shadow-lg hover:bg-primary/90 transition-all hover:scale-110">
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
                        <button class="edit-btn" onclick="openModal('editContactModal')">
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
                                <button onclick="openModal('professionalModal')" class="add-btn-outline w-full">Add Professional Info</button>
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
                                <button onclick="openModal('legalModal')" class="add-btn-outline w-full">Add Legal Information</button>
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
                                <button onclick="openModal('locationModal')" class="add-btn-outline w-full">Add Location</button>
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
                            <button onclick="openModal('certificateModal')" class="add-btn-outline w-full">Upload Certificate</button>
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
                        <button onclick="openModal('educationModal')" class="add-btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add</button>
                    </div>
                    <div class="profile-card-body">
                        <div class="empty-state">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
                            <p>No education added yet</p>
                            <button onclick="openModal('educationModal')" class="add-btn-outline mt-3">Add Education</button>
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
                        <button onclick="openModal('experienceModal')" class="add-btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add</button>
                    </div>
                    <div class="profile-card-body">
                        <div class="empty-state">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                            <p>No experience added yet</p>
                            <button onclick="openModal('experienceModal')" class="add-btn-outline mt-3">Add Experience</button>
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
                                <button onclick="openModal('preferencesModal')" class="add-btn-outline mt-3">Set Preferences</button>
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
                            <button onclick="openModal('languageModal')" class="add-btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> Add</button>
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
                            <button onclick="openModal('skillsModal')" class="edit-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                            </button>
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

@php $modalDialog = 'fixed left-[50%] top-[50%] z-50 w-full translate-x-[-50%] translate-y-[-50%] border border-border bg-white shadow-xl rounded-2xl max-w-[calc(100vw-2rem)] max-h-[calc(100vh-2rem)] sm:max-w-md sm:max-h-[90vh] p-6 sm:p-8 overflow-y-auto overflow-x-hidden'; @endphp
@php $modalClose = 'absolute right-4 top-4 sm:right-6 sm:top-6 rounded-full p-2.5 opacity-70 ring-offset-background transition-all duration-200 hover:opacity-100 hover:bg-[#F9F5F0] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 min-w-[44px] min-h-[44px] flex items-center justify-center'; @endphp
@php $modalInput = 'flex h-10 w-full border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring rounded-full'; @endphp
@php $btnCancel = 'inline-flex items-center justify-center gap-2 text-sm font-semibold transition-all duration-200 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex-1 rounded-full'; @endphp
@php $btnSave = 'inline-flex items-center justify-center gap-2 text-sm font-semibold transition-all duration-200 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 px-8 py-3 flex-1 rounded-full'; @endphp
@php $closeSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-foreground"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>'; @endphp

{{-- ============================================================ --}}
{{-- PROFESSIONAL INFO MODAL --}}
{{-- ============================================================ --}}
<div id="professionalModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('professionalModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('professionalModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Edit Professional Info</h2>
            <p class="text-sm text-muted-foreground">Add your professional headline and bio</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="headline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>Headline
                    </label>
                    <input class="{{ $modalInput }}" id="headline" name="headline" placeholder="e.g., Aspiring IT Specialist" value="{{ $user->headline ?? '' }}">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="bio">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>Bio / About Me
                    </label>
                    <textarea class="flex w-full border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring rounded-xl min-h-[120px]" id="bio" name="bio" placeholder="Tell employers about yourself, your goals, and what motivates you...">{{ $user->bio ?? '' }}</textarea>
                    <p class="text-xs text-muted-foreground">Minimum 100 characters recommended for a strong profile.</p>
                </div>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('professionalModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Save</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- LEGAL & AVAILABILITY MODAL --}}
{{-- ============================================================ --}}
<div id="legalModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('legalModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('legalModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Legal & Availability</h2>
            <p class="text-sm text-muted-foreground">Update your visa status and availability</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="visa_status">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>Visa Status
                    </label>
                    <select name="visa_status" class="{{ $modalInput }}">
                        <option value="">Select your visa status</option>
                        @foreach(['EU/EEA Citizen','Student Visa','Work Visa','Job Seeker Visa','Permanent Resident','Refugee Status','Need Visa Sponsorship','Other'] as $vs)
                            <option value="{{ $vs }}" {{ ($user->visa_status ?? '') === $vs ? 'selected' : '' }}>{{ $vs }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="work_authorization">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>Work Authorization
                    </label>
                    <select name="work_authorization" class="{{ $modalInput }}">
                        <option value="">Select authorization</option>
                        @foreach(['Authorized to work','Need sponsorship','Pending authorization','Not applicable'] as $wa)
                            <option value="{{ $wa }}" {{ ($user->work_authorization ?? '') === $wa ? 'selected' : '' }}>{{ $wa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="available_from">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>Available From
                    </label>
                    <input type="date" name="available_from" class="{{ $modalInput }}" value="{{ $user->available_from ? $user->available_from->format('Y-m-d') : '' }}">
                    <p class="text-xs text-muted-foreground">When can you begin your Ausbildung?</p>
                </div>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('legalModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Save</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- LOCATION MODAL (matches original site) --}}
{{-- ============================================================ --}}
<div id="locationModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('locationModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('locationModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Edit Location</h2>
            <p class="text-sm text-muted-foreground">Update your current location</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="loc_country">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>Country *
                    </label>
                    <select name="country" class="{{ $modalInput }}" required>
                        <option value="">Select your country</option>
                        @foreach(['Germany','India','Morocco','Turkey','Tunisia','Egypt','Pakistan','Bangladesh','Vietnam','Philippines','Indonesia','Nigeria','Ghana','Kenya','Brazil','Mexico','Colombia','Other'] as $c)
                            <option value="{{ $c }}" {{ ($user->country ?? '') === $c ? 'selected' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>
                    <p class="text-xs text-muted-foreground">Where are you currently living?</p>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="loc_city">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>City *
                    </label>
                    <input class="{{ $modalInput }}" id="loc_city" name="city" placeholder="e.g., Berlin, Munich, Hamburg" required value="{{ $user->city ?? '' }}">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="loc_postal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 inline mr-1"><line x1="4" x2="20" y1="9" y2="9"/><line x1="4" x2="20" y1="15" y2="15"/><line x1="10" x2="8" y1="3" y2="21"/><line x1="16" x2="14" y1="3" y2="21"/></svg>Postal Code
                    </label>
                    <input class="{{ $modalInput }}" id="loc_postal" name="postal_code" placeholder="e.g., 10115" maxlength="20" value="{{ $user->postal_code ?? '' }}">
                    <p class="text-xs text-muted-foreground">Optional</p>
                </div>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('locationModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Save</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- EDUCATION MODAL --}}
{{-- ============================================================ --}}
<div id="educationModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('educationModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('educationModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Add Education</h2>
            <p class="text-sm text-muted-foreground">Add your educational background and qualifications</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Education Level *</label>
                    <select name="education_level" class="{{ $modalInput }}" required>
                        <option value="">Select education level</option>
                        <option value="Secondary School">Secondary School</option>
                        <option value="High School">High School (12th Grade)</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Vocational Training">Vocational Training</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Degree/Certificate</label>
                    <input class="{{ $modalInput }}" name="degree" placeholder="e.g., Bachelor of Science">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Field of Study</label>
                    <input class="{{ $modalInput }}" name="field_of_study" placeholder="e.g., Computer Science">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Institution *</label>
                    <input class="{{ $modalInput }}" name="institution" placeholder="e.g., University of Mumbai" required>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-2">
                        <label class="text-sm font-medium leading-none">Start Date</label>
                        <input type="date" name="edu_start_date" class="{{ $modalInput }}">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium leading-none">End Date</label>
                        <input type="date" name="edu_end_date" class="{{ $modalInput }}">
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Grade/Percentage</label>
                    <input class="{{ $modalInput }}" name="grade" placeholder="e.g., 85%">
                    <p class="text-xs text-muted-foreground">Your overall grade (important for Ausbildung applications)</p>
                </div>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('educationModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Add Education</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- EXPERIENCE MODAL --}}
{{-- ============================================================ --}}
<div id="experienceModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('experienceModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('experienceModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Add Experience</h2>
            <p class="text-sm text-muted-foreground">Add your work experience and achievements</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Position/Title *</label>
                    <input class="{{ $modalInput }}" name="position" placeholder="e.g., Software Developer" required>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Company *</label>
                    <input class="{{ $modalInput }}" name="company" placeholder="e.g., Tech Corp" required>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Location</label>
                    <input class="{{ $modalInput }}" name="exp_location" placeholder="e.g., Berlin, Germany">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-2">
                        <label class="text-sm font-medium leading-none">Start Date</label>
                        <input type="date" name="exp_start_date" class="{{ $modalInput }}">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium leading-none">End Date</label>
                        <input type="date" name="exp_end_date" class="{{ $modalInput }}">
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Description</label>
                    <textarea class="flex w-full border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring rounded-xl min-h-[100px]" name="exp_description" placeholder="Describe your responsibilities and achievements..."></textarea>
                    <p class="text-xs text-muted-foreground">Include key responsibilities, technologies used, and achievements</p>
                </div>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('experienceModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Add Experience</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- PREFERENCES MODAL --}}
{{-- ============================================================ --}}
<div id="preferencesModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('preferencesModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('preferencesModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Ausbildung Preferences</h2>
            <p class="text-sm text-muted-foreground">Set your preferred sectors and cities for Ausbildung</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Preferred Sectors</label>
                    <p class="text-xs text-muted-foreground mb-2">Select up to 3 sectors</p>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach(['IT & Technology','Healthcare','Engineering','Hospitality','Automotive','Retail & Commerce','Finance','Logistics','Construction','Education'] as $sector)
                            <label class="flex items-center gap-2 p-2 rounded-lg border border-input hover:bg-[#F9F5F0] cursor-pointer text-sm transition-colors">
                                <input type="checkbox" name="preferred_sectors[]" value="{{ $sector }}" {{ $user->preferred_sectors && in_array($sector, $user->preferred_sectors) ? 'checked' : '' }} class="rounded border-input">
                                {{ $sector }}
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Preferred Cities</label>
                    <p class="text-xs text-muted-foreground mb-2">Select up to 5 cities</p>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach(['Berlin','Munich','Hamburg','Frankfurt','Cologne','Stuttgart','Düsseldorf','Leipzig','Dresden','Hannover'] as $city)
                            <label class="flex items-center gap-2 p-2 rounded-lg border border-input hover:bg-[#F9F5F0] cursor-pointer text-sm transition-colors">
                                <input type="checkbox" name="preferred_cities[]" value="{{ $city }}" {{ $user->preferred_cities && in_array($city, $user->preferred_cities) ? 'checked' : '' }} class="rounded border-input">
                                {{ $city }}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('preferencesModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Save</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- LANGUAGE MODAL --}}
{{-- ============================================================ --}}
<div id="languageModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('languageModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('languageModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Add Language</h2>
            <p class="text-sm text-muted-foreground">Add your language skills</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">German Level *</label>
                    <select name="german_level" class="{{ $modalInput }}" required>
                        <option value="">Select your German level</option>
                        @foreach(['A1','A2','B1','B2','C1','C2','Native'] as $lvl)
                            <option value="{{ $lvl }}" {{ ($user->german_level ?? '') === $lvl ? 'selected' : '' }}>{{ $lvl }}</option>
                        @endforeach
                    </select>
                    <p class="text-xs text-muted-foreground">Most Ausbildung programs require at least B1 German proficiency.</p>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Certificate Type</label>
                    <select name="certificate_type" class="{{ $modalInput }}">
                        <option value="">Select certificate type (optional)</option>
                        <option value="Goethe">Goethe-Zertifikat</option>
                        <option value="telc">telc Deutsch</option>
                        <option value="TestDaF">TestDaF</option>
                        <option value="DSH">DSH</option>
                        <option value="ÖSD">ÖSD</option>
                        <option value="Other">Other</option>
                    </select>
                    <p class="text-xs text-muted-foreground">Tip: Use your official CEFR level from a language certificate if you have one.</p>
                </div>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('languageModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Add Language</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- CERTIFICATE UPLOAD MODAL --}}
{{-- ============================================================ --}}
<div id="certificateModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('certificateModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }}" onclick="event.stopPropagation()">
        <button onclick="closeModal('certificateModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight">Upload German Certificate</h2>
            <p class="text-sm text-muted-foreground">Verify your German language proficiency</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Certificate Type *</label>
                    <select name="german_cert_type" class="{{ $modalInput }}" required>
                        <option value="">Select certificate type</option>
                        <option value="Goethe">Goethe-Zertifikat</option>
                        <option value="telc">telc Deutsch</option>
                        <option value="TestDaF">TestDaF</option>
                        <option value="DSH">DSH</option>
                        <option value="ÖSD">ÖSD</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none">Certificate Level *</label>
                    <select name="german_level" class="{{ $modalInput }}" required>
                        <option value="">Select level</option>
                        @foreach(['A1','A2','B1','B2','C1','C2'] as $lvl)
                            <option value="{{ $lvl }}" {{ ($user->german_level ?? '') === $lvl ? 'selected' : '' }}>{{ $lvl }}</option>
                        @endforeach
                    </select>
                </div>
                <label class="block cursor-pointer rounded-xl border-2 border-dashed p-6 text-center transition-all duration-200 hover:border-[#344F1F]/40 hover:bg-[#F9F5F0]/30" style="border-color:rgba(52,79,31,0.2);">
                    <input type="file" name="certificate" accept=".pdf,.jpg,.jpeg,.png" class="hidden">
                    <div class="w-12 h-12 rounded-full mx-auto mb-3 flex items-center justify-center" style="background:#F2EAD3;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#344F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                    </div>
                    <p class="text-sm font-medium" style="color:#344F1F;">Click to upload or drag and drop</p>
                    <p class="text-xs mt-1.5" style="color:#344F1F;opacity:0.5;">PDF, JPG, PNG up to 10MB</p>
                </label>
            </div>
            <div class="flex gap-2 pt-4 border-t mt-6">
                <button type="button" onclick="closeModal('certificateModal')" class="{{ $btnCancel }}">Cancel</button>
                <button type="submit" class="{{ $btnSave }}">Upload</button>
            </div>
        </form>
    </div>
</div>

{{-- ============================================================ --}}
{{-- SKILLS MODAL (matches original site exactly) --}}
{{-- ============================================================ --}}
<div id="skillsModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('skillsModal')">
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    <div class="{{ $modalDialog }} sm:max-w-lg max-h-[80vh]" onclick="event.stopPropagation()">
        <button onclick="closeModal('skillsModal')" class="{{ $modalClose }}">{!! $closeSvg !!}</button>
        <div class="flex flex-col space-y-1.5 text-center sm:text-left">
            <h2 class="text-lg font-semibold leading-none tracking-tight break-words">Edit Skills</h2>
            <p class="text-sm text-muted-foreground break-words">Add your professional skills</p>
        </div>
        <form action="{{ route('front.dashboard.profile.update') }}" method="POST" id="skillsForm">
            @csrf
            <input type="hidden" name="name" value="{{ $user->name }}">
            <div id="skillsHiddenInputs">
                @if($user->skills)
                    @foreach($user->skills as $s)
                        @if($s)<input type="hidden" name="skills[]" value="{{ $s }}">@endif
                    @endforeach
                @endif
            </div>
            <div class="space-y-4 mt-4">
                {{-- Add Skill Input --}}
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="skill-input">Add Skill</label>
                    <div class="flex gap-2">
                        <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring" id="skill-input" placeholder="Enter a skill" value="">
                        <button class="inline-flex items-center justify-center rounded-full text-sm font-semibold transition-all duration-200 bg-primary text-primary-foreground shadow-md hover:bg-orange-hover hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 h-12 w-12 disabled:opacity-50 disabled:pointer-events-none" type="button" id="addSkillBtn" disabled onclick="addSkillFromInput()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                        </button>
                    </div>
                </div>

                {{-- Current Skills --}}
                <div id="currentSkillsWrap" class="{{ $user->skills && count($user->skills) > 0 ? '' : 'hidden' }} space-y-2">
                    <label class="text-sm font-medium leading-none">Your Skills</label>
                    <div id="currentSkillsList" class="flex flex-wrap gap-2"></div>
                </div>

                {{-- Suggested Skills with Category Tabs --}}
                <div class="space-y-3">
                    <label class="text-sm font-medium leading-none">Suggested Skills</label>
                    <div class="flex flex-wrap gap-1" id="skillCategoryTabs">
                        @foreach(['General' => true, 'IT & Software' => false, 'Healthcare' => false, 'Engineering' => false, 'Business' => false] as $cat => $active)
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 h-10 px-6 text-xs {{ $active ? 'bg-primary text-primary-foreground shadow-md' : 'border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30' }} hover:-translate-y-0.5 active:translate-y-0" type="button" onclick="switchSkillCategory(this, '{{ $cat }}')">{{ $cat }}</button>
                        @endforeach
                    </div>
                    <div id="suggestedSkillsList" class="flex flex-wrap gap-2 p-3 bg-muted/50 rounded-lg">
                    </div>
                </div>

                {{-- Tip --}}
                <div class="bg-beige p-3 rounded-lg">
                    <p class="text-xs text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3 inline mr-1"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                        Tip: Add skills that match the requirements of your target Ausbildung programs.
                    </p>
                </div>

                <div class="flex gap-2 pt-4 border-t">
                    <button type="button" onclick="closeModal('skillsModal')" class="{{ $btnCancel }}">Cancel</button>
                    <button type="submit" id="skillsSaveBtn" class="{{ $btnSave }}">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Update Profile Picture Modal --}}
<div id="profilePicModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('profilePicModal')">
    {{-- Backdrop --}}
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    {{-- Dialog --}}
    <div class="fixed left-[50%] top-[50%] z-50 w-full translate-x-[-50%] translate-y-[-50%] border border-border bg-white shadow-xl rounded-2xl max-w-[calc(100vw-2rem)] max-h-[calc(100vh-2rem)] sm:max-w-lg sm:max-h-[90vh] p-6 sm:p-8 overflow-y-auto" onclick="event.stopPropagation()">
        {{-- Close Button --}}
        <button onclick="closeModal('profilePicModal');resetPhotoForm()" class="absolute right-4 top-4 sm:right-6 sm:top-6 rounded-full p-2.5 opacity-70 ring-offset-background transition-all duration-200 hover:opacity-100 hover:bg-[#F9F5F0] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 min-w-[44px] min-h-[44px] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>

        {{-- Header --}}
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight" style="color:#344F1F;">Update Profile Picture</h2>
        </div>

        <form action="{{ route('front.dashboard.profile.photo') }}" method="POST" enctype="multipart/form-data" id="photoForm">
            @csrf
            {{-- Current Avatar --}}
            <div class="text-center mb-6">
                <p class="text-sm font-medium mb-3 text-muted-foreground">Current</p>
                <div class="w-24 h-24 rounded-full mx-auto overflow-hidden flex items-center justify-center text-2xl font-bold text-white" style="background:linear-gradient(135deg,#3b82f6,#6366f1);border:3px solid #344F1F;">
                    @if($user->profile_photo)
                        <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}" class="w-full h-full object-cover">
                    @else
                        {{ strtoupper(substr($user->name, 0, 2)) }}
                    @endif
                </div>
            </div>

            {{-- Upload Area --}}
            <label for="profilePhotoInput" id="dropZone" class="block cursor-pointer rounded-xl border-2 border-dashed p-8 sm:p-10 text-center transition-all duration-200 hover:border-[#344F1F]/40 hover:bg-[#F9F5F0]/30" style="border-color:rgba(52,79,31,0.2);">
                <input type="file" name="profile_photo" id="profilePhotoInput" accept="image/png,image/jpeg" class="hidden" onchange="handlePhotoPreview(this)">
                <div id="uploadPlaceholder">
                    <div class="w-12 h-12 rounded-full mx-auto mb-3 flex items-center justify-center" style="background:#F2EAD3;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#344F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                    </div>
                    <p class="text-sm font-medium" style="color:#344F1F;">Tap to upload or drag image</p>
                    <p class="text-xs mt-1.5" style="color:#344F1F;opacity:0.5;">PNG, JPG up to 5MB</p>
                </div>
                <div id="uploadPreview" class="hidden">
                    <img id="previewImg" src="" alt="Preview" class="w-24 h-24 rounded-full mx-auto object-cover mb-3 border-3" style="border:3px solid #344F1F;">
                    <p id="previewName" class="text-sm font-medium" style="color:#344F1F;"></p>
                    <p class="text-xs mt-1" style="color:#344F1F;opacity:0.5;">Click to change</p>
                </div>
            </label>

            {{-- Tip --}}
            <p class="text-xs text-muted-foreground mt-3 text-center">Use a clear, professional photo for best results.</p>

            {{-- Buttons --}}
            <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-3 mt-6">
                <button type="button" onclick="closeModal('profilePicModal');resetPhotoForm()" class="h-12 px-8 rounded-full border-2 font-semibold text-sm transition-all duration-200 mt-2 sm:mt-0" style="border-color:hsl(var(--primary));color:hsl(var(--primary));">Cancel</button>
                <button type="submit" id="photoSubmitBtn" disabled class="h-12 px-8 rounded-full font-semibold text-sm text-white transition-all duration-200 flex items-center justify-center gap-2" style="background:hsl(var(--primary));opacity:0.5;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Edit Contact Information Modal --}}
<div id="editContactModal" class="hidden fixed inset-0 z-50" onclick="if(event.target===this)closeModal('editContactModal')">
    {{-- Backdrop --}}
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>
    {{-- Dialog --}}
    <div class="fixed left-[50%] top-[50%] z-50 w-full translate-x-[-50%] translate-y-[-50%] border border-border bg-white shadow-xl rounded-2xl max-w-[calc(100vw-2rem)] max-h-[calc(100vh-2rem)] sm:max-w-lg sm:max-h-[90vh] p-6 sm:p-8 overflow-y-auto" onclick="event.stopPropagation()">
        {{-- Close Button --}}
        <button onclick="closeModal('editContactModal')" class="absolute right-4 top-4 sm:right-6 sm:top-6 rounded-full p-2.5 opacity-70 ring-offset-background transition-all duration-200 hover:opacity-100 hover:bg-[#F9F5F0] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 min-w-[44px] min-h-[44px] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>

        {{-- Header --}}
        <div class="flex flex-col space-y-1.5 text-center sm:text-left mb-6">
            <h2 class="text-lg font-semibold leading-none tracking-tight" style="color:#344F1F;">Edit Contact Information</h2>
            <p class="text-sm text-muted-foreground">Update your contact details</p>
        </div>

        <form action="{{ route('front.dashboard.profile.contact') }}" method="POST">
            @csrf
            <div class="space-y-5">
                {{-- First & Last Name --}}
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="flex items-center gap-1.5 text-sm font-medium mb-2" style="color:#344F1F;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            First Name
                        </label>
                        <input type="text" name="first_name" value="{{ explode(' ', $user->name ?? '')[0] ?? '' }}" placeholder="First Name" required class="w-full h-12 px-4 py-2 rounded-lg border bg-white text-sm ring-offset-background transition-all duration-200 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none" style="border-color:rgba(52,79,31,0.2);">
                    </div>
                    <div>
                        <label class="flex items-center gap-1.5 text-sm font-medium mb-2" style="color:#344F1F;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            Last Name
                        </label>
                        <input type="text" name="last_name" value="{{ count(explode(' ', $user->name ?? '')) > 1 ? implode(' ', array_slice(explode(' ', $user->name), 1)) : '' }}" placeholder="Last Name" required class="w-full h-12 px-4 py-2 rounded-lg border bg-white text-sm ring-offset-background transition-all duration-200 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none" style="border-color:rgba(52,79,31,0.2);">
                    </div>
                </div>

                {{-- Phone Number --}}
                <div>
                    <label class="flex items-center gap-1.5 text-sm font-medium mb-2" style="color:#344F1F;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Phone Number
                        <span class="font-normal text-muted-foreground">(optional)</span>
                    </label>
                    <input type="tel" name="phone" value="{{ $user->phone ?? '' }}" placeholder="+49 123 456789" class="w-full h-12 px-4 py-2 rounded-lg border bg-white text-sm ring-offset-background transition-all duration-200 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none" style="border-color:rgba(52,79,31,0.2);">
                </div>

                {{-- Location --}}
                <div>
                    <label class="flex items-center gap-1.5 text-sm font-medium mb-2" style="color:#344F1F;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                        Location
                    </label>
                    <input type="text" name="city" value="{{ $user->city ?? '' }}" placeholder="e.g. Munich, Germany" class="w-full h-12 px-4 py-2 rounded-lg border bg-white text-sm ring-offset-background transition-all duration-200 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none" style="border-color:rgba(52,79,31,0.2);">
                </div>

                {{-- Date of Birth --}}
                <div>
                    <label class="flex items-center gap-1.5 text-sm font-medium mb-2" style="color:#344F1F;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/></svg>
                        Date of Birth
                    </label>
                    <input type="date" name="date_of_birth" value="{{ $user->date_of_birth ? $user->date_of_birth->format('Y-m-d') : '' }}" class="w-full h-12 px-4 py-2 rounded-lg border bg-white text-sm ring-offset-background transition-all duration-200 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none" style="border-color:rgba(52,79,31,0.2);">
                    <p class="text-xs mt-1.5 text-muted-foreground">Must be between 16 and 50 years old</p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-3 mt-6">
                <button type="button" onclick="closeModal('editContactModal')" class="h-12 px-8 rounded-full border-2 font-semibold text-sm transition-all duration-200 mt-2 sm:mt-0" style="border-color:hsl(var(--primary));color:hsl(var(--primary));">Cancel</button>
                <button type="submit" class="h-12 px-8 rounded-full font-semibold text-sm text-white transition-all duration-200" style="background:hsl(var(--primary));">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
function openModal(id) {
    const modal = document.getElementById(id);
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal(id) {
    const modal = document.getElementById(id);
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

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
            dropZone.style.background = 'rgba(52,79,31,0.05)';
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

// ===================== SKILLS MODAL LOGIC =====================
const skillCategories = {
    'General': ['Teamwork','Communication','Time Management','Adaptability','Leadership','Critical Thinking','Creativity','Attention to Detail','Reliability'],
    'IT & Software': ['Python','JavaScript','Java','SQL','HTML/CSS','React','Node.js','Git','Linux','Cloud Computing'],
    'Healthcare': ['Patient Care','First Aid','Medical Terminology','Hygiene Standards','Documentation','Empathy','Anatomy','Vital Signs'],
    'Engineering': ['CAD','Technical Drawing','Mathematics','Physics','Problem Solving','Quality Control','CNC','Welding'],
    'Business': ['Microsoft Office','Accounting','Customer Service','Marketing','Data Analysis','Project Management','Sales','Negotiation']
};
let currentSkills = @json($user->skills ?? []).filter(Boolean);

function renderCurrentSkills() {
    const list = document.getElementById('currentSkillsList');
    const wrap = document.getElementById('currentSkillsWrap');
    const hidden = document.getElementById('skillsHiddenInputs');
    list.innerHTML = '';
    hidden.innerHTML = '<input type="hidden" name="name" value="{{ $user->name }}">';
    currentSkills.forEach(skill => {
        hidden.innerHTML += '<input type="hidden" name="skills[]" value="'+skill+'">';
        const tag = document.createElement('span');
        tag.className = 'inline-flex items-center gap-1 rounded-full bg-primary/10 text-primary text-xs font-semibold px-3 py-1.5';
        tag.innerHTML = skill + ' <button type="button" onclick="removeSkill(\''+skill.replace(/'/g,"\\'")+'\')" class="ml-1 hover:text-red-500">&times;</button>';
        list.appendChild(tag);
    });
    wrap.classList.toggle('hidden', currentSkills.length === 0);
    renderSuggested();
}

function addSkill(skill) {
    if (!skill || currentSkills.includes(skill)) return;
    currentSkills.push(skill);
    renderCurrentSkills();
}

function removeSkill(skill) {
    currentSkills = currentSkills.filter(s => s !== skill);
    renderCurrentSkills();
}

function addSkillFromInput() {
    const input = document.getElementById('skill-input');
    const val = input.value.trim();
    if (val) { addSkill(val); input.value = ''; updateAddBtn(); }
}

function updateAddBtn() {
    document.getElementById('addSkillBtn').disabled = !document.getElementById('skill-input').value.trim();
}

document.addEventListener('DOMContentLoaded', function() {
    const inp = document.getElementById('skill-input');
    if (inp) {
        inp.addEventListener('input', updateAddBtn);
        inp.addEventListener('keydown', function(e) { if (e.key === 'Enter') { e.preventDefault(); addSkillFromInput(); } });
    }
    renderCurrentSkills();
    switchSkillCategory(document.querySelector('#skillCategoryTabs button'), 'General');
});

let activeCategory = 'General';
function switchSkillCategory(btn, cat) {
    activeCategory = cat;
    document.querySelectorAll('#skillCategoryTabs button').forEach(b => {
        b.className = b === btn
            ? 'inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 h-10 px-6 text-xs bg-primary text-primary-foreground shadow-md hover:-translate-y-0.5 active:translate-y-0'
            : 'inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 h-10 px-6 text-xs border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0';
    });
    renderSuggested();
}

function renderSuggested() {
    const list = document.getElementById('suggestedSkillsList');
    if (!list) return;
    const skills = skillCategories[activeCategory] || [];
    list.innerHTML = '';
    skills.forEach(skill => {
        if (currentSkills.includes(skill)) return;
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'inline-flex items-center justify-center whitespace-nowrap rounded-full font-semibold transition-all duration-200 border-2 border-primary bg-transparent text-primary shadow-sm hover:bg-[#F9F5F0] hover:text-[#344F1F] hover:border-[#344F1F]/30 hover:-translate-y-0.5 active:translate-y-0 h-10 px-6 text-xs';
        btn.textContent = skill;
        btn.onclick = function() { addSkill(skill); };
        list.appendChild(btn);
    });
    if (list.children.length === 0) list.innerHTML = '<p class="text-xs text-muted-foreground py-2">All skills from this category are already added.</p>';
}

// Close on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        ['profilePicModal','editContactModal','professionalModal','legalModal','locationModal','educationModal','experienceModal','preferencesModal','languageModal','certificateModal','skillsModal'].forEach(id => closeModal(id));
        resetPhotoForm();
    }
});
</script>
@endpush
