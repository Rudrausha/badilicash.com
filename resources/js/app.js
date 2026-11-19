import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
import {
    createIcons,
    AppWindow,
    ArrowRight,
    Blocks,
    Briefcase,
    Building2,
    Check,
    ChevronDown,
    Code,
    CodeXml,
    CreditCard,
    Globe,
    Layers,
    Link,
    ListChecks,
    QrCode,
    Radio,
    RefreshCw,
    Repeat,
    ScanLine,
    Shield,
    ShoppingBag,
    Smartphone,
    Sparkles,
    Share2,
    Timer,
    Wallet,
} from 'lucide';

window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    Alpine.data('faqAccordion', (openIndex = null) => ({
        open: openIndex,
        toggle(index) {
            this.open = this.open === index ? null : index;
        },
    }));

    Alpine.data('contactForm', () => ({
        submitted: false,
        errors: {},
        form: {
            name: '',
            email: '',
            phone: '',
            company: '',
            subject: new URLSearchParams(window.location.search).get('intent') === 'login'
                ? 'Login / account enquiry'
                : new URLSearchParams(window.location.search).get('intent') === 'start'
                    ? 'Get started with BadiliCash'
                    : new URLSearchParams(window.location.search).get('intent') === 'order'
                        ? 'Order a QR Sound Box'
                        : '',
            message: new URLSearchParams(window.location.search).get('intent') === 'order' && new URLSearchParams(window.location.search).get('product')
                ? `I would like to order the ${new URLSearchParams(window.location.search).get('product')}.`
                : '',
        },
        validate() {
            this.errors = {};
            if (!this.form.name.trim()) this.errors.name = 'Please enter your name.';
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.form.email)) this.errors.email = 'Enter a valid business email.';
            if (this.form.phone && !/^[0-9+\-\s()]{8,20}$/.test(this.form.phone)) this.errors.phone = 'Enter a valid phone number.';
            if (!this.form.subject.trim()) this.errors.subject = 'Please choose a subject.';
            if (this.form.message.trim().length < 12) this.errors.message = 'Please share a little more detail.';
            return Object.keys(this.errors).length === 0;
        },
        submit() {
            this.submitted = false;
            if (!this.validate()) return;
            this.submitted = true;
        },
    }));

    Alpine.data('dynamicQrDemo', () => ({
        step: 'form',
        amount: '1250.00',
        reference: 'ORD-4821',
        note: 'Invoice payment',
        requestId: '',
        countdown: 180,
        timer: null,
        start() {
            if (!this.amount || Number(this.amount) <= 0) return;
            this.requestId = 'sim_' + Math.random().toString(36).slice(2, 10);
            this.step = 'qr';
            this.countdown = 180;
            this.clearTimer();
            this.timer = setInterval(() => {
                this.countdown -= 1;
                if (this.countdown <= 0) {
                    this.step = 'expired';
                    this.clearTimer();
                }
            }, 1000);
        },
        simulatePay() {
            this.step = 'processing';
            setTimeout(() => {
                this.step = 'success';
                this.clearTimer();
            }, 1200);
        },
        reset() {
            this.clearTimer();
            this.step = 'form';
            this.requestId = '';
            this.countdown = 180;
        },
        clearTimer() {
            if (this.timer) clearInterval(this.timer);
            this.timer = null;
        },
        get mmss() {
            const m = String(Math.floor(this.countdown / 60)).padStart(2, '0');
            const s = String(this.countdown % 60).padStart(2, '0');
            return `${m}:${s}`;
        },
    }));

    Alpine.data('codeCopy', (code) => ({
        copied: false,
        code,
        async copy() {
            try {
                await navigator.clipboard.writeText(this.code);
                this.copied = true;
                setTimeout(() => (this.copied = false), 1600);
            } catch (e) {
                this.copied = false;
            }
        },
    }));
});

Alpine.start();

const lucideIcons = {
    AppWindow,
    ArrowRight,
    Blocks,
    Briefcase,
    Building2,
    Check,
    ChevronDown,
    Code,
    CodeXml,
    CreditCard,
    Globe,
    Layers,
    Link,
    ListChecks,
    QrCode,
    Radio,
    RefreshCw,
    Repeat,
    ScanLine,
    Shield,
    ShoppingBag,
    Smartphone,
    Sparkles,
    Share2,
    Timer,
    Wallet,
};

function refreshIcons() {
    createIcons({ icons: lucideIcons });
}

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 700,
        easing: 'ease-out-cubic',
        once: true,
        offset: 48,
    });
    refreshIcons();
});

document.addEventListener('alpine:initialized', refreshIcons);
document.addEventListener('aos:in', refreshIcons);
