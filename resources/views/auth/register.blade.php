<x-layout>
    {{-- Intro --}}
    <section class="form-intro">
        <div class="container text-center">
            <h1 class="form-intro-title">Create your account</h1>
            <p class="form-intro-text">
                Join TaskFlow and start organizing with clarity.
            </p>
        </div>
    </section>

{{-- ERROR SECTION--}}
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
    {{-- Form --}}
    <section class="form-section">
        <div class="container">
            <div class="form-card mx-auto">
                <form method="POST" action="{{ route('register.form') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" 
                            name="name" 
                            id="name" 
                            class="form-control" 
                            value="{{ old('name') }}"
                            placeholder="Enter your name" 
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            value="{{ old('email') }}"
                            placeholder="Enter your email" 
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" 
                            name="password" 
                            id="password" 
                            class="form-control" 
                            placeholder="Enter your password" 
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Confirm Password:</label>
                        <input type="password" 
                            name="password_confirmation" 
                            id="password_confirmation" 
                            class="form-control" 
                            placeholder="Confirm your password" 
                            required>
                    </div>

                    <button type="submit" class="btn btn-submit w-100">
                        Create Account
                    </button>

                    <p class="form-footer-text text-center mt-4 mb-0">
                        Already have an account? 
                        <a href="{{ route('show.login') }}" class="form-link">Login</a>
                    </p>
                </form>
            </div>
        </div>

       
    </section>
</x-layout>