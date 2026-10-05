<x-layout>
  {{-- HERO SECTION --}}
<section class="hero d-flex align-items-center text-center">
    <div class="container">
        <div class="hero-content mx-auto">
            <h1 class="hero-title">
                Tasks that flow with you
            </h1>
            <p class="hero-subtitle">
                A calm, powerful way to organize your work and actually get things done.
            </p>
            <a href="{{ route('show.register') }}" class="btn btn-hero">
                Start Organizing
            </a>
        </div>
    </div>
</section>

{{-- ABOUT SECTION --}}
<section class="about d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center gy-5">

            {{-- Left Text --}}
            <div class="col-lg-5">
                <h2 class="about-title">About TaskFlow</h2>
                <p class="about-text">
                    TaskFlow is built for people who want clarity instead of clutter. 
                    It helps you organize what matters and move through your day with less friction.
                </p>
            </div>

            {{-- Right Card --}}
            <div class="col-lg-6 offset-lg-1">
                <div class="about-card">
                    <span class="about-card-label">What you can do</span>
                    
                    <h3 class="about-card-title">Built for real work</h3>
                    
                    <p class="about-card-text">
                        Create tasks, set priorities, and keep everything in one calm place. 
                        No unnecessary features — just the tools you need to stay on track.
                    </p>

                    <ul class="about-card-list">
                        <li>Simple task creation</li>
                        <li>Clear priorities</li>
                        <li>Clean overview of your work</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- EFFECTIVENESS SECTION --}}
<section class="effectiveness d-flex align-items-center">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">How Effective</h2>
            <p class="section-subtitle">Real results after using TaskFlow</p>
        </div>

        {{-- Chart --}}
        <div class="chart-wrapper mx-auto mb-5">
            <canvas id="effectivenessChart" height="220"></canvas>
        </div>

        {{-- 3 Stats Cards --}}
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">8.5 hrs</div>
                <div class="stat-label">Saved every week</div>
            </div>

            <div class="stat-divider"></div>

            <div class="stat-card">
                <div class="stat-number">12,400+</div>
                <div class="stat-label">People using TaskFlow</div>
            </div>

            <div class="stat-divider"></div>

            <div class="stat-card">
                <div class="stat-number">94%</div>
                <div class="stat-label">More tasks completed</div>
            </div>
        </div>
    </div>
</section>
</x-layout>