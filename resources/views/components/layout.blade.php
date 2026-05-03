<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager | Pro Edition</title>
    
    <!-- الخطوط والأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap');
        
        body { 
            font-family: 'Cairo', sans-serif; 
            background-color: #f8fafc;
        }

        /* تخصيص شريط التمرير */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

        .sidebar-item-active {
            background: rgba(37, 99, 235, 0.1);
            color: #2563eb;
            border-left: 4px solid #2563eb;
        }
        
        /* في حالة RTL نقلب اتجاه الحدود */
        [dir="rtl"] .sidebar-item-active {
            border-left: none;
            border-right: 4px solid #2563eb;
        }
    </style>
</head>

<body class="bg-[#f8fafc] text-slate-800 antialiased h-screen overflow-hidden">
    
    <div class="flex h-full p-4 gap-4">
        
        <!-- Sidebar: الشريط الجانبي العائم (Dark Mode Style) -->
        <aside class="w-72 hidden lg:flex flex-col shrink-0">
            <div class="h-full bg-slate-900 rounded-[2.5rem] shadow-2xl flex flex-col p-8 relative overflow-hidden">
                <!-- تأثير ضوئي خلفي في الـ Sidebar -->
                <div class="absolute -top-24 -left-24 w-48 h-48 bg-blue-500/10 rounded-full blur-3xl"></div>
                
                <!-- الشعار (Logo) -->
                <div class="relative z-10 flex items-center gap-3 mb-10 px-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-500/30">
                        <i class="fas fa-cubes-stacked text-xl"></i>
                    </div>
                    <span class="text-white font-black text-xl tracking-tight">نظام المهام</span>
                </div>

                <!-- زر مهمة جديدة (تصميم مميز) -->
                <div class="px-2 mb-8">
                    <a href="{{ route('task.create') }}" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold shadow-lg shadow-blue-500/20 transition-all flex items-center justify-center gap-3 group">
                        <i class="fas fa-plus-circle transition-transform group-hover:rotate-90"></i>
                        {{ __('New Task') }}
                    </a>
                </div>

                <!-- القائمة (Navigation) -->
                <nav class="relative z-10 flex-1 space-y-2 overflow-y-auto px-1">
                    @auth
                        @if(Auth::user()->admin)
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 p-4 text-slate-400 hover:text-white hover:bg-white/5 rounded-2xl transition-all font-bold group">
                            <i class="fas fa-chart-line text-lg group-hover:scale-110"></i>
                            {{ __('Admin Dashboard') }}
                        </a>
                        @endif

                        <a href="/user/{{ auth()->id() }}/dashboard" class="flex items-center gap-4 p-4 text-slate-400 hover:text-white hover:bg-white/5 rounded-2xl transition-all font-bold group">
                            <i class="fas fa-house-user text-lg group-hover:scale-110"></i>
                            {{ __('My Dashboard') }}
                        </a>
                    @endauth

                    <a href="{{ route('task.index') }}" class="flex items-center gap-4 p-4 {{ request()->routeIs('task.index') ? 'bg-white/10 text-white shadow-sm' : 'text-slate-400' }} hover:text-white hover:bg-white/5 rounded-2xl transition-all font-bold group">
                        <i class="fas fa-list-check text-lg group-hover:scale-110"></i>
                        {{ __('Tasks') }}
                    </a>
                </nav>

                <!-- قسم تسجيل الخروج (مدمج في الأسفل) -->
                <div class="relative z-10 mt-auto pt-6 border-t border-white/5 px-2">
                    @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button class="w-full flex items-center gap-4 p-4 text-red-400 hover:bg-red-500/10 rounded-2xl transition-all font-bold">
                            <i class="fas fa-arrow-right-from-bracket text-lg"></i>
                            {{ __('Logout') }}
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
        </aside>

        <!-- المحتوى الرئيسي (Main Content) -->
        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
            
            <!-- الرأس (Header: Glassmorphism Style) -->
            <header class="h-20 bg-white/60 backdrop-blur-md rounded-[2rem] border border-white shadow-sm flex items-center justify-between px-8 mb-4 shrink-0">
                <div class="flex items-center gap-2 text-slate-400">
                    <i class="fas fa-calendar-day text-xs"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">{{ now()->format('D, d M Y') }}</span>
                </div>

                <div class="flex items-center gap-6">
                    @guest
                        <div class="flex gap-2">
                            <a href="/login" class="text-slate-600 font-bold text-sm hover:text-blue-600">{{ __('Login') }}</a>
                            <span class="text-slate-300">|</span>
                            <a href="/register" class="text-slate-600 font-bold text-sm hover:text-blue-600">{{ __('Register') }}</a>
                        </div>
                    @endguest

                    @auth
                        <div class="flex items-center gap-4 pr-4 border-r border-slate-100">
                            <div class="text-right hidden sm:block">
                                <h4 class="text-sm font-black text-slate-800 leading-none mb-1">{{ auth()->user()->name }}</h4>
                                <span class="text-[10px] font-bold text-blue-600 uppercase tracking-tighter">مسؤول الجمارك</span>
                            </div>
                            <div class="w-11 h-11 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center text-white font-black shadow-lg shadow-blue-500/20">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                        </div>
                    @endauth
                </div>
            </header>

            <!-- منطقة العرض الرئيسية (Main View) -->
            <div class="flex-1 overflow-y-auto rounded-[2.5rem] bg-transparent">
                {{ $slot }}
                
                <!-- Footer مدمج داخل منطقة التمرير -->
                <footer class="p-8 text-center">
                    <div class="inline-block py-2 px-6 bg-white/50 backdrop-blur-sm rounded-full border border-white shadow-sm">
                        <p class="text-slate-400 text-[10px] font-bold tracking-[0.3em] uppercase">
                            {{ __('Built by') }} علي | <span class="text-blue-600">ADII MOROCCO 2026</span>
                        </p>
                    </div>
                </footer>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.0/cdn.min.js" defer></script>
</body>
</html>
