<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign In - GoAusbildung</title>
    <meta name="description" content="Sign in or create an account to access GoAusbildung tools and services.">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/081a0afca5a9bd20.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/d9109d77acd75b7b.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/e2c84361ea1dce8b.css') }}">
    <style>
        :root {
            --font-inter: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
        }

        .auth-bg {
            background: hsl(var(--background));
        }

        .auth-grid {
            background-image: linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .auth-glow {
            width: 600px;
            height: 600px;
            background: hsl(var(--primary) / 0.3);
            border-radius: 9999px;
            filter: blur(128px);
            opacity: 0.20;
            animation: pulse-glow 3s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0%, 100% { opacity: 0.15; transform: scale(1); }
            50% { opacity: 0.25; transform: scale(1.05); }
        }

        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .auth-card-animate {
            animation: fade-in-up 0.5s ease-out forwards;
        }

        .auth-input {
            width: 100%;
            height: 2.75rem;
            padding: 0 0.875rem;
            border-radius: 0.75rem;
            border: 1px solid hsl(var(--border));
            background: hsl(var(--background));
            color: hsl(var(--foreground));
            font-size: 0.875rem;
            line-height: 1.25rem;
            transition: all 0.2s;
            outline: none;
            font-family: var(--font-inter);
        }

        .auth-input::placeholder {
            color: hsl(var(--muted-foreground));
        }

        .auth-input:focus {
            border-color: hsl(var(--primary));
            box-shadow: 0 0 0 3px hsl(var(--ring));
        }

        .auth-btn-primary {
            width: 100%;
            height: 2.75rem;
            border-radius: 0.75rem;
            background: hsl(var(--primary));
            color: hsl(var(--primary-foreground));
            font-weight: 600;
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            font-family: var(--font-inter);
        }

        .auth-btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .auth-btn-primary:active {
            transform: translateY(0);
        }

        .auth-btn-primary:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .auth-btn-social {
            width: 100%;
            height: 2.75rem;
            border-radius: 0.75rem;
            border: 1px solid hsl(var(--border));
            background: hsl(var(--card));
            color: hsl(var(--foreground));
            font-weight: 500;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-family: var(--font-inter);
        }

        .auth-btn-social:hover {
            background: hsl(var(--muted));
            border-color: hsl(var(--muted-foreground) / 0.3);
        }

        .auth-tabs {
            display: flex;
            background: hsl(var(--muted));
            border-radius: 0.75rem;
            padding: 0.25rem;
            position: relative;
        }

        .auth-tab {
            flex: 1;
            padding: 0.5rem 1rem;
            text-align: center;
            font-size: 0.875rem;
            font-weight: 500;
            color: hsl(var(--muted-foreground));
            cursor: pointer;
            border-radius: 0.625rem;
            transition: all 0.2s;
            border: none;
            background: transparent;
            font-family: var(--font-inter);
            position: relative;
            z-index: 1;
        }

        .auth-tab.active {
            background: hsl(var(--card));
            color: hsl(var(--foreground));
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .auth-divider {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: hsl(var(--muted-foreground));
            font-size: 0.75rem;
        }

        .auth-divider::before,
        .auth-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: hsl(var(--border));
        }

        .auth-link {
            color: hsl(var(--primary));
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.2s;
        }

        .auth-link:hover {
            opacity: 0.8;
        }

        .auth-error {
            background: hsl(0 84% 60% / 0.1);
            border: 1px solid hsl(0 84% 60% / 0.3);
            color: hsl(0 84% 60%);
            padding: 0.75rem;
            border-radius: 0.75rem;
            font-size: 0.8125rem;
            line-height: 1.4;
        }

        .auth-label {
            display: block;
            font-size: 0.8125rem;
            font-weight: 500;
            color: hsl(var(--foreground));
            margin-bottom: 0.375rem;
            font-family: var(--font-inter);
        }

        .password-toggle {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: hsl(var(--muted-foreground));
            cursor: pointer;
            padding: 0.25rem;
            display: flex;
            align-items: center;
        }

        .password-toggle:hover {
            color: hsl(var(--foreground));
        }

        .auth-checkbox {
            width: 1rem;
            height: 1rem;
            border-radius: 0.25rem;
            border: 1px solid hsl(var(--border));
            accent-color: hsl(var(--primary));
            cursor: pointer;
        }

        .form-panel {
            display: none;
        }

        .form-panel.active {
            display: block;
            animation: fade-in-up 0.3s ease-out forwards;
        }

        .spinner {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border: 2px solid hsl(var(--primary-foreground) / 0.3);
            border-top-color: hsl(var(--primary-foreground));
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>

<body class="min-h-screen bg-background font-sans antialiased overflow-x-hidden __variable_f367f3">
    <div class="relative min-h-screen w-full auth-bg overflow-hidden">
        {{-- Grid background --}}
        <div class="absolute inset-0 w-full h-full">
            <div class="absolute inset-0 auth-grid"></div>
        </div>

        {{-- Glowing orb --}}
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="absolute auth-glow"></div>
        </div>

        {{-- Main content --}}
        <div class="relative z-10 min-h-screen flex items-center justify-center">
            <div class="w-full auth-card-animate">
                <div class="flex min-h-screen flex-col items-center justify-center p-4">

                    {{-- Logo --}}
                    <a href="{{ url('/') }}" class="mb-8 flex items-center gap-2">
                        <img src="{{ asset('assets/_next/logo-icone6f8.jpeg') }}"
                             alt="GoAusbildung"
                             class="h-16 w-auto rounded-xl"
                             style="color: transparent;">
                    </a>

                    {{-- Auth Card --}}
                    <div class="w-full max-w-sm rounded-2xl border bg-card p-8 backdrop-blur-sm"
                         style="border-color: hsl(var(--border));">

                        {{-- Tabs --}}
                        <div class="auth-tabs mb-6">
                            <button type="button" class="auth-tab active" data-tab="login">Sign In</button>
                            <button type="button" class="auth-tab" data-tab="register">Sign Up</button>
                        </div>

                        {{-- Error messages --}}
                        @if ($errors->any())
                            <div class="auth-error mb-4">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="mb-4 p-3 rounded-xl text-sm" style="background: hsl(142 71% 45% / 0.1); border: 1px solid hsl(142 71% 45% / 0.3); color: hsl(142 71% 45%);">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Login Form --}}
                        <div class="form-panel active" id="login-panel">
                            <form method="POST" action="{{ route('front.auth.login') }}" id="login-form">
                                @csrf
                                <div class="space-y-4">
                                    <div>
                                        <label class="auth-label" for="login-email">Email</label>
                                        <input type="email"
                                               id="login-email"
                                               name="email"
                                               class="auth-input"
                                               placeholder="Enter your email"
                                               value="{{ old('email') }}"
                                               required
                                               autocomplete="email">
                                    </div>

                                    <div>
                                        <label class="auth-label" for="login-password">Password</label>
                                        <div style="position: relative;">
                                            <input type="password"
                                                   id="login-password"
                                                   name="password"
                                                   class="auth-input"
                                                   placeholder="Enter your password"
                                                   required
                                                   autocomplete="current-password">
                                            <button type="button" class="password-toggle" onclick="togglePassword('login-password', this)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                    <circle cx="12" cy="12" r="3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div style="display: flex; align-items: center; justify-content: space-between;">
                                        <label style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.8125rem; color: hsl(var(--muted-foreground)); cursor: pointer;">
                                            <input type="checkbox" name="remember" class="auth-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                            Remember me
                                        </label>
                                        <a href="#" class="auth-link" style="font-size: 0.8125rem;">Forgot password?</a>
                                    </div>

                                    <button type="submit" class="auth-btn-primary" id="login-btn">
                                        <span class="btn-text">Sign In</span>
                                    </button>
                                </div>
                            </form>

                            <div class="auth-divider" style="margin: 1.25rem 0;">or continue with</div>

                            <button type="button" class="auth-btn-social">
                                <svg width="18" height="18" viewBox="0 0 24 24">
                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/>
                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                </svg>
                                Continue with Google
                            </button>
                        </div>

                        {{-- Register Form --}}
                        <div class="form-panel" id="register-panel">
                            <form method="POST" action="{{ route('front.auth.register') }}" id="register-form">
                                @csrf
                                <div class="space-y-4">
                                    <div>
                                        <label class="auth-label" for="register-name">Full Name</label>
                                        <input type="text"
                                               id="register-name"
                                               name="name"
                                               class="auth-input"
                                               placeholder="Enter your full name"
                                               value="{{ old('name') }}"
                                               required
                                               autocomplete="name">
                                    </div>

                                    <div>
                                        <label class="auth-label" for="register-email">Email</label>
                                        <input type="email"
                                               id="register-email"
                                               name="email"
                                               class="auth-input"
                                               placeholder="Enter your email"
                                               value="{{ old('email') }}"
                                               required
                                               autocomplete="email">
                                    </div>

                                    <div>
                                        <label class="auth-label" for="register-password">Password</label>
                                        <div style="position: relative;">
                                            <input type="password"
                                                   id="register-password"
                                                   name="password"
                                                   class="auth-input"
                                                   placeholder="Create a password"
                                                   required
                                                   minlength="8"
                                                   autocomplete="new-password">
                                            <button type="button" class="password-toggle" onclick="togglePassword('register-password', this)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                    <circle cx="12" cy="12" r="3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="auth-label" for="register-password-confirm">Confirm Password</label>
                                        <div style="position: relative;">
                                            <input type="password"
                                                   id="register-password-confirm"
                                                   name="password_confirmation"
                                                   class="auth-input"
                                                   placeholder="Confirm your password"
                                                   required
                                                   minlength="8"
                                                   autocomplete="new-password">
                                            <button type="button" class="password-toggle" onclick="togglePassword('register-password-confirm', this)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                    <circle cx="12" cy="12" r="3"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <button type="submit" class="auth-btn-primary" id="register-btn">
                                        <span class="btn-text">Create Account</span>
                                    </button>
                                </div>
                            </form>

                            <div class="auth-divider" style="margin: 1.25rem 0;">or continue with</div>

                            <button type="button" class="auth-btn-social">
                                <svg width="18" height="18" viewBox="0 0 24 24">
                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/>
                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                </svg>
                                Continue with Google
                            </button>

                            <p style="text-align: center; font-size: 0.75rem; color: hsl(var(--muted-foreground)); margin-top: 1rem; line-height: 1.5;">
                                By creating an account, you agree to our
                                <a href="{{ route('front.privacy') }}" class="auth-link">Privacy Policy</a>
                                and
                                <a href="{{ route('front.cookies') }}" class="auth-link">Terms of Service</a>.
                            </p>
                        </div>

                    </div>

                    {{-- Bottom link --}}
                    <p style="margin-top: 1.5rem; font-size: 0.8125rem; color: hsl(var(--muted-foreground));">
                        <a href="{{ url('/') }}" class="auth-link" style="display: inline-flex; align-items: center; gap: 0.375rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m12 19-7-7 7-7"/><path d="M19 12H5"/>
                            </svg>
                            Back to GoAusbildung
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching
        document.querySelectorAll('.auth-tab').forEach(function(tab) {
            tab.addEventListener('click', function() {
                var target = this.getAttribute('data-tab');

                document.querySelectorAll('.auth-tab').forEach(function(t) { t.classList.remove('active'); });
                this.classList.add('active');

                document.querySelectorAll('.form-panel').forEach(function(p) { p.classList.remove('active'); });
                document.getElementById(target + '-panel').classList.add('active');
            });
        });

        // Password visibility toggle
        function togglePassword(inputId, btn) {
            var input = document.getElementById(inputId);
            var isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';

            btn.innerHTML = isPassword
                ? '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"/><path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"/><path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"/><path d="m2 2 20 20"/></svg>'
                : '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>';
        }

        // Form submit with loading state
        ['login-form', 'register-form'].forEach(function(formId) {
            var form = document.getElementById(formId);
            if (form) {
                form.addEventListener('submit', function() {
                    var btn = form.querySelector('.auth-btn-primary');
                    var text = btn.querySelector('.btn-text');
                    btn.disabled = true;
                    text.innerHTML = '<span class="spinner"></span>';
                });
            }
        });

        // Auto-switch to register tab if registration errors exist
        @if ($errors->has('name') || $errors->has('password_confirmation'))
            document.querySelector('[data-tab="register"]').click();
        @endif
    </script>
</body>

</html>
