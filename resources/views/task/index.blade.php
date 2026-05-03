<x-layout>
    <div dir="rtl" class="min-h-screen bg-[#f8fafc] p-4 md:p-8 font-sans">

        {{-- رأس الصفحة مع خانة بحث احترافية --}}
        <div class="mb-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 bg-white p-8 rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-white">
                <div class="text-right">
                    <h1 class="text-4xl font-black bg-gradient-to-l from-indigo-900 to-blue-600 bg-clip-text text-transparent">
                        المهام الجارية
                    </h1>
                    <p class="text-slate-400 font-bold mt-1">تتبع وإدارة إنجازات الفريق بدقة</p>
                </div>

                {{-- خانة البحث المطورة --}}
                <div class="relative w-full md:w-1/2 group">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-6 pointer-events-none">
                        <i class="fas fa-search text-blue-500 transition-transform group-focus-within:scale-125"></i>
                    </div>
                    <input type="text" 
                           class="w-full py-5 pr-14 pl-6 bg-slate-50 border-none rounded-[2rem] text-sm font-bold shadow-inner focus:ring-4 focus:ring-blue-100 transition-all placeholder:text-slate-400" 
                           placeholder="ابحث عن مهمة، موظف، أو حالة معينة...">
                    <button class="absolute left-3 top-2 bottom-2 px-6 bg-indigo-600 text-white rounded-2xl text-xs font-black hover:bg-indigo-700 transition-all">
                        تصفية
                    </button>
                </div>
            </div>
        </div>

        {{-- شبكة المهام (Task Grid) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- مثال لبطاقة مهمة احترافية --}}
            {{-- ملاحظة: هذا الجزء سيتم وضعه داخل @foreach($tasks as $task) --}}
            <div class="bg-white rounded-[3rem] p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all group">
                <div class="flex justify-between items-start mb-6">
                    {{-- صورة صاحب المهمة مع رابط لصفحته --}}
                    <a href="#" class="flex items-center gap-3 group/user">
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name=Ali&background=4f46e5&color=fff" 
                                 class="w-12 h-12 rounded-2xl shadow-lg shadow-indigo-100 border-2 border-white transition-transform group-hover/user:scale-110" alt="صورة المستخدم">
                            <span class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></span>
                        </div>
                        <div>
                            <h4 class="text-sm font-black text-slate-800 group-hover/user:text-indigo-600">علي البورقي</h4>
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">صاحب المهمة</p>
                        </div>
                    </a>
                    <span class="px-4 py-1.5 bg-blue-50 text-blue-600 rounded-full text-[10px] font-black uppercase">برمجة</span>
                </div>

                {{-- تفاصيل المهمة --}}
                <div class="mb-8">
                    <h3 class="text-xl font-black text-slate-800 mb-3 group-hover:text-indigo-600 transition-colors">
                        تطوير الواجهة الأمامية
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2">
                        تحويل تصاميم Figma إلى واجهات تفاعلية باستخدام Tailwind CSS و Laravel Blade مع مراعاة تجربة المستخدم.
                    </p>
                </div>

                {{-- شريط الإنجاز (Progress Bar) --}}
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-xs font-black text-slate-400 uppercase">نسبة الإكتمال</span>
                        <span class="text-xs font-black text-indigo-600 bg-indigo-50 px-2 py-1 rounded-md">75%</span>
                    </div>
                    <div class="w-full h-3 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full shadow-lg" style="width: 75%"></div>
                    </div>
                </div>

                {{-- معلومات إضافية وأزرار التحكم --}}
                <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                    <div class="flex items-center gap-4 text-slate-400 text-xs font-bold">
                        <span class="flex items-center gap-1.5"><i class="far fa-calendar-alt text-blue-500"></i> 02 مايو</span>
                        <span class="flex items-center gap-1.5"><i class="far fa-comment-dots text-indigo-500"></i> 4 تعليقات</span>
                    </div>
                    
                    <div class="flex gap-2">
                        <button class="w-10 h-10 flex items-center justify-center bg-slate-50 text-slate-400 rounded-xl hover:bg-blue-600 hover:text-white transition-all">
                            <i class="fas fa-external-link-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- نهاية التكرار --}}

        </div>

        {{-- تذييل إبداعي --}}
        <div class="mt-16 py-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.3em]">
                نظام إدارة المهام الذكي &copy; 2026
            </p>
            <div class="flex gap-4">
                <span class="w-3 h-3 bg-green-500 rounded-full shadow-[0_0_10px_rgba(34,197,94,0.5)]"></span>
                <span class="w-3 h-3 bg-blue-500 rounded-full opacity-30"></span>
                <span class="w-3 h-3 bg-indigo-500 rounded-full opacity-30"></span>
            </div>
        </div>
    </div>
</x-layout>
