<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب جديد | Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap');
        body { font-family: 'Cairo', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] min-h-screen flex items-center justify-center p-4">

    <div class="max-w-[1000px] w-full bg-white rounded-[3rem] shadow-2xl overflow-hidden flex flex-col md:flex-row min-h-[600px] border border-white">
        
        <!-- الجزء الأيمن: جمالي ومعلوماتي -->
        <div class="md:w-5/12 bg-gradient-to-br from-blue-700 to-indigo-900 p-12 text-white flex flex-col justify-between relative overflow-hidden">
            <!-- ديكور خلفية -->
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-48 h-48 bg-blue-400/20 rounded-full blur-3xl"></div>

            <div class="relative z-10">

            <a href="/" class="w-16 h-16 bg-white/10 backdrop-blur-lg rounded-2xl flex items-center justify-center mb-8 shadow-xl border border-white/10 hover:bg-white/20 transition-all">
    <i class="fas fa-layer-group text-3xl text-blue-400"></i>
</a>
                <h1 class="text-4xl font-black mb-4 leading-tight">انضم إلى نظام إدارة المهام</h1>
                <p class="text-blue-100 font-medium">ابدأ بتنظيم مهامك الاحترافية مع واجهة متطورة مصممة لرفع الإنتاجية.</p>
            </div>

            <div class="relative z-10">
                <div class="flex items-center gap-4 text-sm font-bold text-blue-200 uppercase tracking-widest">
                    <span>ADII MOROCCO</span>
                    <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                    <span>2026</span>
                </div>
            </div>
        </div>

        <!-- الجزء الأيسر: نموذج التسجيل -->
        <div class="md:w-7/12 p-12 flex flex-col justify-center bg-white">
            <div class="mb-10 text-right">
                <h2 class="text-3xl font-black text-slate-800">إنشاء حساب جديد</h2>
                <p class="text-slate-400 font-bold text-sm mt-2">لديك حساب بالفعل؟ <a href="/login" class="text-blue-600 hover:underline">تسجيل الدخول</a></p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf
                
                <!-- الاسم الكامل -->
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-400 uppercase mr-2 tracking-widest">الاسم الكامل</label>
                    <div class="relative group">
                        <i class="fas fa-user absolute right-4 top-4 text-slate-300 group-focus-within:text-blue-500 transition-colors"></i>
                        <input type="text" name="name" required placeholder="أدخل اسمك الكامل" 
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 pr-12 pl-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                    </div>
                </div>

                <!-- البريد الإلكتروني -->
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-400 uppercase mr-2 tracking-widest">البريد الإلكتروني</label>
                    <div class="relative group">
                        <i class="fas fa-envelope absolute right-4 top-4 text-slate-300 group-focus-within:text-blue-500 transition-colors"></i>
                        <input type="email" name="email" required placeholder="example@mail.com" 
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 pr-12 pl-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                    </div>
                </div>

                <!-- كلمة المرور -->
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-400 uppercase mr-2 tracking-widest">كلمة المرور</label>
                    <div class="relative group">
                        <i class="fas fa-lock absolute right-4 top-4 text-slate-300 group-focus-within:text-blue-500 transition-colors"></i>
                        <input type="password" name="password" required placeholder="••••••••" 
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 pr-12 pl-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                    </div>
                </div>

                <!-- زر الإرسال -->
                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-black py-5 rounded-2xl shadow-xl shadow-blue-200 transition-all flex items-center justify-center gap-3">
                        <span>إنشاء الحساب الآن</span>
                        <i class="fas fa-arrow-left"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
