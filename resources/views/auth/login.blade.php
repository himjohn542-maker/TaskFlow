
<x-layout>
    <section class="form-intro">
        <div class="container text-center">
            <h1 class="form-intro-title">Welcome back</h1>
            <p class="form-intro-text">
                Log in to continue with your tasks.
            </p>
        </div>
    </section>
    
    
{{-- ERROR SECTION --}}
        @if ($errors->any())
    <div class="container mt-3">
        <div class="alert alert-danger shadow-sm border-0 rounded-3" role="alert">
            
            <h5 class="alert-heading mb-2">
                Please fix the following errors:
            </h5>

            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    </div>
@endif

{{-- FORM SECTION --}}
    <section class="form-section">
        <div class="container">
            <div class="form-card mx-auto">
                <form method="POST" action="{{ route('login.form') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            value="{{ old('email') }}"
                            placeholder="Enter your email" 
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" 
                            name="password" 
                            id="password" 
                            class="form-control" 
                            placeholder="Enter your password" 
                            required>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" 
                            name="remember" 
                            id="remember" 
                            class="form-check-input">
                        <label for="remember" class="form-check-label">
                            Remember me
                        </label>
                    </div>

                    <button type="submit" class="btn btn-submit w-100">
                        Login
                    </button>

                    <p class="form-footer-text text-center mt-4 mb-0">
                        Don’t have an account? 
                        <a href="{{ route('show.register') }}" class="form-link">Create Account</a>
                    </p>
                </form>
            </div>
        </div>


    </section>
</x-layout>

