@props(['attributeContent', 'attributeName', 'fontName'])

<div class="w-full md:w-1/2 xl:w-1/3 p-3 transition-transform duration-300 hover:scale-105">
    {{-- البطاقة بتصميم عصري مع تدرج لوني خفيف --}}
    <div class="bg-white border border-gray-100 rounded-3xl shadow-xl p-6 relative overflow-hidden group">
        
        {{-- خلفية جمالية تظهر عند الحوّم (Hover) --}}
        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-blue-50 rounded-full transition-all duration-500 group-hover:scale-[3] opacity-50"></div>

        <div class="flex flex-row items-center relative z-10">
            {{-- الأيقونة بتصميم دائري متطور --}}
            <div class="flex-shrink">
                <div class="rounded-2xl p-4 bg-gradient-to-br from-blue-600 to-blue-700 shadow-lg shadow-blue-200">
                    <i class="fas fa-{{ $fontName }} fa-2x fa-inverse"></i>
                </div>
            </div>

            {{-- النصوص مع دعم كامل للغة العربية RTL --}}
            <div class="flex-1 text-right pr-5">
                <h5 class="font-black uppercase text-gray-400 text-[10px] tracking-widest mb-1">
                    {{ $attributeName }}
                </h5>
                <h3 class="font-black text-3xl text-gray-800 tracking-tight">
                    {{ $attributeContent }}
                </h3>
            </div>
        </div>

        {{-- خط سفلي جمالي بلون أزرق --}}
        <div class="absolute bottom-0 right-0 left-0 h-1.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-right"></div>
    </div>
</div>