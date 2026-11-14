@props(['items', 'open' => null])

<div class="space-y-3" x-data="faqAccordion({{ $open === null ? 'null' : (int) $open }})">
    @foreach ($items as $index => $item)
        <div class="overflow-hidden rounded-2xl border border-slate-200/80 bg-white/90 shadow-sm">
            <button
                type="button"
                class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left"
                @click="toggle({{ $index }})"
                :aria-expanded="(open === {{ $index }}).toString()"
            >
                <span class="text-sm font-semibold text-navy-dark sm:text-base">{{ $item['q'] }}</span>
                <i data-lucide="chevron-down" class="h-4 w-4 shrink-0 text-navy transition" :class="open === {{ $index }} ? 'rotate-180' : ''"></i>
            </button>
            <div x-show="open === {{ $index }}" x-transition class="px-5 pb-5 text-sm leading-relaxed text-muted" style="display: none;">
                {{ $item['a'] }}
            </div>
        </div>
    @endforeach
</div>
