<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول | Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap');
        body { font-family: 'Cairo', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] min-h-screen flex items-center justify-center p-4">

    <div class="max-w-[1000px] w-full bg-white rounded-[3rem] shadow-2xl overflow-hidden flex flex-col md:flex-row min-h-[600px] border border-white">
        
        <!-- الجزء الأيمن: ترحيبي (نفس نمط التسجيل لضمان الهوية البصرية) -->
        <div class="md:w-5/12 bg-gradient-to-br from-slate-800 to-slate-900 p-12 text-white flex flex-col justify-between relative overflow-hidden">
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>
            
            <div class="relative z-10">

            <a href="/" class="w-16 h-16 bg-white/10 backdrop-blur-lg rounded-2xl flex items-center justify-center mb-8 shadow-xl border border-white/10 hover:bg-white/20 transition-all">
    <i class="fas fa-layer-group text-3xl text-blue-400"></i>
</a>
                <h1 class="text-4xl font-black mb-4 leading-tight">مرحباً بك مجدداً</h1>
                <p class="text-slate-400 font-medium">قم بتسجيل الدخول للوصول إلى لوحة التحكم ومتابعة مهامك الجارية.</p>
            </div>

            <div class="relative z-10">
                <div class="flex items-center gap-4 text-sm font-bold text-slate-500 uppercase tracking-widest">
                    <span>نظام الإدارة الآمن</span>
                </div>
            </div>
        </div>

        <!-- الجزء الأيسر: نموذج تسجيل الدخول -->
        <div class="md:w-7/12 p-12 flex flex-col justify-center bg-white">
            <div class="mb-10 text-right">
                <h2 class="text-3xl font-black text-slate-800">تسجيل الدخول</h2>
                <p class="text-slate-400 font-bold text-sm mt-2">ليس لديك حساب؟ <a href="{{ route('register') }}" class="text-blue-600 hover:underline">إنشاء حساب جديد</a></p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                
                <!-- البريد الإلكتروني -->
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-400 uppercase mr-2 tracking-widest">البريد الإلكتروني</label>
                    <div class="relative group">
                        <i class="fas fa-at absolute right-4 top-4 text-slate-300 group-focus-within:text-blue-500 transition-colors"></i>
                        <input type="email" name="email" required placeholder="example@mail.com" 
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 pr-12 pl-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                    </div>
                </div>

                <!-- كلمة المرور -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center px-2">
                        <label class="text-xs font-black text-slate-400 uppercase tracking-widest">كلمة المرور</label>
                        <a href="#" class="text-[10px] font-bold text-blue-500 hover:underline">نسيت كلمة المرور؟</a>
                    </div>
                    <div class="relative group">
                        <i class="fas fa-key absolute right-4 top-4 text-slate-300 group-focus-within:text-blue-500 transition-colors"></i>
                        <input type="password" name="password" required placeholder="••••••••" 
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 pr-12 pl-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500 transition-all outline-none">
                    </div>
                </div>

                <!-- تذكرني -->
                <div class="flex items-center gap-2 px-2">
                    <input type="checkbox" name="remember" id="remember" class="rounded text-blue-600 focus:ring-blue-500">
                    <label for="remember" class="text-xs font-bold text-slate-500">تذكرني على هذا الجهاز</label>
                </div>

                <!-- زر الدخول -->
                <div class="pt-4">
                    <button type="submit" class="w-full bg-slate-900 hover:bg-black text-white font-black py-5 rounded-2xl shadow-xl shadow-slate-200 transition-all flex items-center justify-center gap-3">
                        <span>دخول للنظام</span>
                        <i class="fas fa-right-to-bracket"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

