<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>chance Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body
    class="font-inter antialiased bg-slate-100 text-slate-600"
    :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ page: 'dashboard-main', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
>

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex h-screen overflow-hidden">
        <h1>holaa</h1>
        <!-- Sidebar -->
        @include('partials/sidebar')

        <!-- Content area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">

            <!-- Site header -->
            @include('partials/header')
            
            <main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                     @include('partials/welcome-banner')
                     @include('partials/dashboard-actions')

                    <!-- Cards -->
                    <div class="grid grid-cols-12 gap-6">

                        <!-- Line chart (Acme Plus) -->
                        @include('partials/dashboard-card-01')
                        <!-- Line chart (Acme Advanced) -->
                        @include('partials/dashboard-card-02')
                        <!-- Line chart (Acme Professional) -->
                        @include('partials/dashboard-card-03')
                        <!-- Bar chart (Direct vs Indirect) -->
                        @include('partials/dashboard-card-04')
                        <!-- Line chart (Real Time Value) -->
                        @include('partials/dashboard-card-05')
                        <!-- Doughnut chart (Top Countries) -->
                        @include('partials/dashboard-card-06')
                        <!-- Table (Top Channels) -->
                        @include('partials/dashboard-card-07')
                        <!-- Line chart (Sales Over Time) -->
                        @include('partials/dashboard-card-08')
                        <!-- Stacked bar chart (Sales VS Refunds) -->
                        @include('partials/dashboard-card-09')
                        <!-- Card (Recent Activity) -->
                        @include('partials/dashboard-card-10')
                        <!-- Card (Income/Expenses) -->
                        @include('partials/dashboard-card-11')

                    </div>

                </div>
            </main>

        </div>

    </div>

</body>

</html>