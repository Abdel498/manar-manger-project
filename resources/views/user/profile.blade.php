<x-layout>
    <div dir="rtl" class="min-h-screen bg-[#f8fafc] p-6 font-sans">
        <div class="max-w-3xl mx-auto bg-white rounded-[2rem] shadow-xl border border-slate-100 overflow-hidden">
            
            <div class="bg-indigo-600 p-10 text-center text-white">
                <div class="w-24 h-24 bg-white/20 rounded-3xl mx-auto flex items-center justify-center text-3xl font-black mb-4">
                    {{ substr($user->name, 0, 1) }}
                </div>
                <h2 class="text-2xl font-black">{{ $user->name }}</h2>
                <p class="text-indigo-100 opacity-80">{{ $user->job ?? 'لم يتم تحديد الوظيفة بعد' }}</p>
            </div>

            <div class="p-10 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1">
                    <span class="text-slate-400 text-xs font-bold uppercase">السن</span>
                    <p class="text-slate-700 font-bold text-lg">{{ $user->age ?? '---' }} سنة</p>
                </div>
                
                <div class="space-y-1">
                    <span class="text-slate-400 text-xs font-bold uppercase">المستوى الدراسي</span>
                    <p class="text-slate-700 font-bold text-lg">{{ $user->education_level ?? '---' }}</p>
                </div>

                <div class="space-y-1">
                    <span class="text-slate-400 text-xs font-bold uppercase">الجنس</span>
                    <p class="text-slate-700 font-bold text-lg">{{ $user->gender ?? '---' }}</p>
                </div>

                <div class="space-y-1">
                    <span class="text-slate-400 text-xs font-bold uppercase">الحالة العائلية</span>
                    <p class="text-slate-700 font-bold text-lg">{{ $user->marital_status ?? '---' }}</p>
                </div>
            </div>

            <div class="p-6 bg-slate-50 border-t border-slate-100 text-center">
                <a href="{{ route('dashboard') }}" class="text-indigo-600 font-bold hover:underline">
                    العودة إلى لوحة التحكم
                </a>
            </div>
        </div>
    </div>