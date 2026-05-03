<x-layout>
    <div dir="rtl" class="min-h-screen bg-[#f8fafc] p-4 md:p-10 font-sans">
        
        {{-- شريط العودة --}}
        <div class="max-w-3xl mx-auto mb-8">
            <a href="{{ route('task.index') }}" class="inline-flex items-center gap-2 text-slate-400 hover:text-blue-600 transition-all font-bold text-sm group">
                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                العودة إلى قائمة المهام
            </a>
        </div>

        {{-- حاوية النموذج --}}
        <div class="max-w-3xl mx-auto bg-white rounded-[3rem] shadow-2xl shadow-blue-900/5 border border-white overflow-hidden">
            
            {{-- رأس النموذج --}}
            <div class="p-10 bg-gradient-to-r from-blue-600 to-indigo-700 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-3xl font-black mb-2">إضافة مهمة جديدة</h1>
                    <p class="text-blue-100 font-medium text-sm">قم بتعبئة التفاصيل أدناه لتعيين مهمة جديدة للنظام.</p>
                </div>
                {{-- ديكور خلفية --}}
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
            </div>

            {{-- جسم النموذج --}}
            <form method="POST" action="{{ route('task.store') }}" class="p-10 space-y-8">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- عنوان المهمة --}}
                    <div class="md:col-span-2 space-y-3">
                        <label class="text-sm font-black text-slate-700 mr-2 flex items-center gap-2">
                            <i class="fas fa-edit text-blue-500"></i> عنوان المهمة
                        </label>
                        <input type="text" name="title" required placeholder="مثلاً: تطوير واجهة المستخدم..." 
                            class="w-full bg-slate-50 border-none rounded-2xl p-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500 transition-all">
                    </div>

                    {{-- المسؤول عن المهمة --}}
                    <div class="space-y-3">
                        <label class="text-sm font-black text-slate-700 mr-2 flex items-center gap-2">
                            <i class="fas fa-user-check text-blue-500"></i> إسناد إلى
                        </label>
                        <select name="assigneduser_id" class="w-full bg-slate-50 border-none rounded-2xl p-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500">
                            <option value="">اختر المستخدم...</option>
                            {{-- هنا سيتم تحميل المستخدمين برمجياً --}}
                        </select>
                    </div>

                    {{-- الموعد النهائي --}}
                    <div class="space-y-3">
                        <label class="text-sm font-black text-slate-700 mr-2 flex items-center gap-2">
                            <i class="fas fa-calendar-alt text-blue-500"></i> الموعد النهائي
                        </label>
                        <input type="date" name="due" class="w-full bg-slate-50 border-none rounded-2xl p-4 shadow-inner text-sm focus:ring-2 focus:ring-blue-500">
                    </div>

                    {{-- وصف المهمة --}}
                    <div class="md:col-span-2 space-y-3">
                        <label class="text-sm font-black text-slate-700 mr-2 flex items-center gap-2">
                            <i class="fas fa-align-right text-blue-500"></i> وصف المهمة بالتفصيل
                        </label>
                        <textarea name="description" rows="5" placeholder="اكتب هنا تفاصيل المهمة والمتطلبات..." 
                            class="w-full bg-slate-50 border-none rounded-2xl p-5 shadow-inner text-sm focus:ring-2 focus:ring-blue-500 transition-all"></textarea>
                    </div>
                </div>

                {{-- أزرار التحكم --}}
                <div class="pt-6 flex flex-col md:flex-row gap-4">
                    <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-black py-4 rounded-2xl shadow-xl shadow-blue-200 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-save"></i> حفظ ونشر المهمة
                    </button>
                    <button type="reset" class="px-8 bg-slate-100 text-slate-500 font-bold py-4 rounded-2xl hover:bg-slate-200 transition-all">
                        إعادة تعيين
                    </button>
                </div>
            </form>
        </div>

        {{-- تذييل --}}
        <p class="mt-10 text-center text-[10px] text-slate-400 font-bold uppercase tracking-[0.4em]">
            نظام إدارة المهام المتطور | 2026
        </p>
    </div>
</x-layout>



