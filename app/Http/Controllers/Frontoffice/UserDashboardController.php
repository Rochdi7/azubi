<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('frontoffice.pages.dashboard', compact('user'));
    }

    public function profile()
    {
        $user = auth()->user();

        return view('frontoffice.pages.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'nationality' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'visa_status' => 'nullable|string|max:50',
            'work_authorization' => 'nullable|string|max:50',
            'available_from' => 'nullable|date',
            'headline' => 'nullable|string|max:100',
            'bio' => 'nullable|string|max:2000',
            'german_level' => 'nullable|string|max:10',
            'preferred_sectors' => 'nullable|array',
            'preferred_cities' => 'nullable|array',
            'skills' => 'nullable|array',
        ]);

        $user = auth()->user();
        $user->fill($request->only([
            'name', 'phone', 'date_of_birth', 'nationality',
            'city', 'country', 'postal_code', 'visa_status', 'work_authorization',
            'available_from', 'headline', 'bio', 'german_level',
            'preferred_sectors', 'preferred_cities', 'skills',
        ]));

        $user->current_location = $request->city && $request->country
            ? $request->city . ', ' . $request->country
            : null;

        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }

    public function updateContactInfo(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:100',
            'date_of_birth' => 'nullable|date|before:-16 years|after:-50 years',
        ]);

        $user = auth()->user();
        $user->name = trim($request->first_name . ' ' . $request->last_name);
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->date_of_birth = $request->date_of_birth;

        if ($request->city) {
            $user->current_location = $request->city;
        }

        $user->save();

        return back()->with('success', 'Contact information updated successfully.');
    }

    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ]);

        $user = auth()->user();

        if ($user->profile_photo && \Storage::disk('public')->exists($user->profile_photo)) {
            \Storage::disk('public')->delete($user->profile_photo);
        }

        $path = $request->file('profile_photo')->store('profile-photos', 'public');
        $user->profile_photo = $path;
        $user->save();

        return back()->with('success', 'Profile picture updated successfully.');
    }
}
