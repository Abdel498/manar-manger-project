<x-layout>
    <div dir="rtl" class="min-h-screen bg-[#f8fafc] p-6 font-sans">
        
        {{-- شريط علوي بتصميم زجاجي (Glassmorphism) --}}
        <div class="mb-10 flex flex-col md:flex-row items-center justify-between bg-white/80 backdrop-blur-md p-8 rounded-[2rem] shadow-xl shadow-blue-900/5 border border-white">
            <div class="mb-4 md:mb-0 text-right">
                <h1 class="text-3xl font-black bg-gradient-to-l from-blue-800 to-indigo-600 bg-clip-text text-transparent">
                    لوحة التحكم الذكية
                </h1>
                <p class="text-slate-500 font-medium mt-2 flex items-center gap-2">
    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
    مرحباً بك مجدداً، 
    <a href="{{ route('profile.show') }}" class="text-blue-600 font-black hover:text-blue-700 transition-all cursor-pointer relative z-50">
        {{ $user->name }}
    </a>
</p>
            </div>
            
            <div class="flex items-center gap-4">
                <a href="{{ route('task.create') }}" class="group relative px-8 py-3 bg-indigo-600 text-white rounded-2xl font-bold transition-all hover:bg-indigo-700 hover:shadow-2xl hover:shadow-indigo-200 overflow-hidden">
                    <span class="relative z-10 flex items-center gap-2">
                        <i class="fas fa-plus-circle transition-transform group-hover:rotate-90"></i>
                        إضافة مهمة جديدة
                    </span>
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="p-3 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-2xl transition-all tooltip" title="تسجيل الخروج">
                        <i class="fas fa-power-off text-xl"></i>
                    </button>
                </form>
            </div>
        </div>

        {{-- بطاقات الإحصائيات بتصميم "نيومورفيزم" ناعم --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            {{-- بطاقة 1 --}}
            <div class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm transition-all hover:shadow-2xl group">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-green-50 rounded-full transition-transform group-hover:scale-150"></div>
                <div class="relative">
                    <div class="w-12 h-12 bg-green-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-green-200">
                        <i class="fas fa-check-double text-xl"></i>
                    </div>
                    <p class="text-slate-400 font-bold text-xs uppercase tracking-widest">المهام المكتملة</p>
                    <h3 class="text-4xl font-black text-slate-800 mt-2">12</h3>
                </div>
            </div>

            {{-- بطاقة 2 --}}
            <div class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm transition-all hover:shadow-2xl group">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-blue-50 rounded-full transition-transform group-hover:scale-150"></div>
                <div class="relative">
                    <div class="w-12 h-12 bg-blue-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-200">
                        <i class="fas fa-spinner text-xl"></i>
                    </div>
                    <p class="text-slate-400 font-bold text-xs uppercase tracking-widest">قيد الإنجاز</p>
                    <h3 class="text-4xl font-black text-slate-800 mt-2">05</h3>
                </div>
            </div>

            {{-- بطاقة 3 --}}
            <div class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm transition-all hover:shadow-2xl group">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-purple-50 rounded-full transition-transform group-hover:scale-150"></div>
                <div class="relative">
                    <div class="w-12 h-12 bg-purple-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-purple-200">
                        <i class="fas fa-tasks text-xl"></i>
                    </div>
                    <p class="text-slate-400 font-bold text-xs uppercase tracking-widest">إجمالي المهام</p>
                    <h3 class="text-4xl font-black text-slate-800 mt-2">17</h3>
                </div>
            </div>

            {{-- بطاقة 4 --}}
            <div class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm transition-all hover:shadow-2xl group">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-amber-50 rounded-full transition-transform group-hover:scale-150"></div>
                <div class="relative">
                    <div class="w-12 h-12 bg-amber-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-amber-200">
                        <i class="fas fa-clock text-xl"></i>
                    </div>
                    <p class="text-slate-400 font-bold text-xs uppercase tracking-widest">مهام عاجلة</p>
                    <h3 class="text-4xl font-black text-slate-800 mt-2">02</h3>
                </div>
            </div>
        </div>

        {{-- منطقة الجدول --}}
        <div class="bg-white rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-white overflow-hidden">
            <div class="p-10 border-b border-slate-50 flex items-center justify-between bg-gradient-to-r from-slate-50/50 to-transparent">
                <h2 class="text-xl font-black text-slate-800 flex items-center gap-3">
                    <span class="w-10 h-10 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-stream"></i>
                    </span>
                    قائمة المهام التفصيلية
                </h2>
                <div class="flex gap-2">
                    <span class="px-4 py-1 bg-indigo-50 text-indigo-600 rounded-full text-xs font-bold">تحديث تلقائي</span>
                </div>
            </div>
            
            <div class="overflow-x-auto p-4">
                <table class="w-full text-right border-separate border-spacing-y-3">
                    <thead>
                        <tr class="text-slate-400 text-xs font-black uppercase tracking-[0.2em]">
                            <th class="px-6 py-4">المهمة</th>
                            <th class="px-6 py-4">تاريخ الإنشاء</th>
                            <th class="px-6 py-4">الحالة</th>
                            <th class="px-6 py-4 text-left">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- مثال لشكل المهمة (سيتم تكراره برمجياً) --}}
                        <tr class="group bg-white hover:bg-indigo-50/30 transition-all">
                            <td class="px-6 py-6 rounded-r-[2rem] border-y border-r border-slate-50 group-hover:border-indigo-100">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-500">1</div>
                                    <span class="font-bold text-slate-700">تطوير واجهة لوحة التحكم</span>
                                </div>
                            </td>
                            <td class="px-6 py-6 border-y border-slate-50 group-hover:border-indigo-100">
                                <span class="text-slate-500 font-medium">03 مايو 2026</span>
                            </td>
                            <td class="px-6 py-6 border-y border-slate-50 group-hover:border-indigo-100">
                                <span class="px-4 py-1 bg-green-100 text-green-600 rounded-lg text-xs font-black">مكتملة</span>
                            </td>
                            <td class="px-6 py-6 rounded-l-[2rem] border-y border-l border-slate-50 group-hover:border-indigo-100 text-left">
                                <button class="text-slate-300 hover:text-indigo-600 transition-colors"><i class="fas fa-ellipsis-h"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- تذييل الصفحة --}}
        <div class="mt-12 text-center">
            <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.4em]">
                نظام إدارة المهام | النسخة الاحترافية 2.0
            </p>
        </div>
    </div>
</x-layout>
