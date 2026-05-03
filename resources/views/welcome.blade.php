<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASAR | القوة في الإدارة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&display=swap');
        body { font-family: 'Cairo', sans-serif; background-color: #020617; }
        .glass-card { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.08); }
        .text-gradient { background: linear-gradient(to bottom right, #fff 30%, #94a3b8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body x-data="{ privacyModal: false, termsModal: false }" class="text-slate-300 antialiased min-h-screen flex flex-col">

    <!-- خلفية مضيئة هادئة -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none z-0">
        <div class="absolute top-[-10%] right-[-10%] w-[600px] h-[600px] bg-blue-600/5 rounded-full blur-[130px]"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[400px] h-[400px] bg-indigo-600/5 rounded-full blur-[130px]"></div>
    </div>

    <!-- Navigation -->
    <nav class="relative z-50 h-24 flex items-center">
        <div class="max-w-7xl mx-auto w-full px-8 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-4 group">
                <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-blue-600/40">
                    <i class="fas fa-layer-group text-2xl"></i>
                </div>
                <span class="text-2xl font-black text-white tracking-tighter uppercase">Masar<span class="text-blue-500">.</span></span>
            </a>
            
            <div class="flex items-center gap-8">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-sm font-bold text-white bg-blue-600 px-8 py-3 rounded-2xl hover:bg-blue-700 transition-all">لوحة التحكم</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-bold text-slate-400 hover:text-white transition-colors">دخول</a>
                    <a href="{{ route('register') }}" class="text-sm font-bold text-white border border-white/10 bg-white/5 px-8 py-3 rounded-2xl hover:bg-white/10 transition-all">ابدأ الآن</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Hero Content -->
    <main class="relative z-10 flex-grow flex items-center justify-center py-20">
        <div class="max-w-4xl mx-auto px-8 text-center">
            <div class="inline-flex items-center gap-3 px-5 py-2 glass-card rounded-full mb-10 border-white/10">
                <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                <span class="text-[10px] font-black text-blue-400 uppercase tracking-[0.3em]">نظام الإدارة المتكامل 2026</span>
            </div>

            <h1 class="text-6xl md:text-8xl font-black mb-10 leading-[1.1] tracking-tight">
                <span class="text-gradient">تحكم في مسار</span> <br>
                <span class="text-blue-500">عملك بقوة أكبر</span>
            </h1>

            <p class="max-w-2xl mx-auto text-lg md:text-xl text-slate-400 font-medium mb-16 leading-relaxed">
                بيئة عمل ذكية وآمنة مصممة لتبسيط المهام الإدارية والعمليات الميدانية لرفع كفاءة الإنجاز.
            </p>

            <div class="flex justify-center">
                <a href="{{ route('register') }}" class="px-16 py-6 bg-blue-600 text-white rounded-[2rem] font-black text-xl hover:scale-105 transition-all shadow-2xl shadow-blue-600/40 flex items-center gap-4 group">
                    ابدأ تجربتك الآن
                    <i class="fas fa-arrow-left transition-transform group-hover:translate-x-[-5px]"></i>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="relative z-10 py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-slate-500 text-xs font-bold tracking-[0.2em]">علي | ADII MOROCCO 2026</p>
            <div class="flex gap-8">
                <button @click="privacyModal = true" class="text-slate-500 hover:text-white text-xs font-bold transition-colors">سياسة الخصوصية</button>
                <button @click="termsModal = true" class="text-slate-500 hover:text-white text-xs font-bold transition-colors">شروط الخدمة</button>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <div x-show="privacyModal" x-transition.opacity class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-black/80 backdrop-blur-sm">
        <div @click.away="privacyModal = false" class="glass-card max-w-lg w-full p-10 rounded-[3rem] relative border-white/10">
            <h3 class="text-xl font-black text-white mb-4">سياسة الخصوصية</h3>
            <p class="text-slate-400 text-sm">نحن نلتزم بحماية بياناتك بأعلى معايير التشفير لضمان سرية العمليات الإدارية.</p>
            <button @click="privacyModal = false" class="mt-8 text-blue-500 font-bold text-sm">إغلاق</button>
        </div>
    </div>

    <div x-show="termsModal" x-transition.opacity class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-black/80 backdrop-blur-sm">
        <div @click.away="termsModal = false" class="glass-card max-w-lg w-full p-10 rounded-[3rem] relative border-white/10">
            <h3 class="text-xl font-black text-white mb-4">شروط الخدمة</h3>
            <p class="text-slate-400 text-sm">استخدام المنصة مخصص حصرياً لتنظيم وإدارة المهام الرسمية وتسهيل سير العمل.</p>
            <button @click="termsModal = false" class="mt-8 text-blue-500 font-bold text-sm">إغلاق</button>
        </div>
    </div>

</body>
</html>
