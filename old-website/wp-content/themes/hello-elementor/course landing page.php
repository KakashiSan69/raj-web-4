<?php
/*
Template Name: Course Landing Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Safalta Google Ads Course 2026</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Tailwind Configuration -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            red: {
              DEFAULT: '#E11D48', // rose-600
              dark: '#BE123C' // rose-700
            },
            gold: {
              DEFAULT: '#F59E0B' // amber-500
            },
            green: {
              DEFAULT: '#10B981' // emerald-500
            },
            dark: {
              DEFAULT: '#09090b', // zinc-950
              card: '#18181b', // zinc-900
              card2: '#27272a' // zinc-800
            },
            muted: '#a1a1aa', // zinc-400
          },
          fontFamily: {
            montserrat: ['Montserrat', 'sans-serif'],
            inter: ['Inter', 'sans-serif'],
          },
          animation: {
            'ticker': 'ticker 22s linear infinite',
            'blink': 'blink 1.2s infinite',
            'shine': 'shine 2.8s infinite 1.2s',
            'float': 'float 6s ease-in-out infinite',
          },
          keyframes: {
            ticker: {
              '0%': { transform: 'translateX(100vw)' },
              '100%': { transform: 'translateX(-100%)' },
            },
            blink: {
              '0%, 100%': { opacity: 1 },
              '50%': { opacity: 0.3 },
            },
            shine: {
              '0%': { left: '-100%' },
              '35%, 100%': { left: '130%' },
            },
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-10px)' },
            }
          }
        }
      }
    }
  </script>
  
  <style>
    /* Custom utility classes that are easier to write in standard CSS or needed for pseudo-elements */
    .hero-glow::after {
      content: '';
      position: absolute;
      top: -150px;
      right: -100px;
      width: 500px;
      height: 500px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(225,29,72,0.15), transparent 70%);
      pointer-events: none;
      z-index: 0;
    }
    .offer-glow::before {
      content: '\f06d'; /* FontAwesome fire */
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      position: absolute;
      right: -20px;
      top: -20px;
      font-size: 140px;
      opacity: 0.03;
      color: #F59E0B;
      pointer-events: none;
    }
    .shine-effect::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 55%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent);
      transform: skewX(-20deg);
      animation: shine 3s infinite 1s;
    }
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), padding 0.4s ease;
    }
    .faq-item.open .faq-answer {
        max-height: 500px;
        padding-bottom: 16px;
    }
    .faq-item.open .faq-icon {
        transform: rotate(180deg);
        color: #E11D48;
    }
    .price-glow::before {
      content: '';
      position: absolute;
      top: -100px;
      right: -100px;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(225,29,72,0.1), transparent 70%);
      pointer-events: none;
    }
    
    /* Glassmorphism utilities */
    .glass {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }
    .glass-card {
      background: linear-gradient(145deg, rgba(24, 24, 27, 0.8) 0%, rgba(9, 9, 11, 0.9) 100%);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
    }
  </style>
</head>
<body class="bg-dark text-white font-inter text-sm antialiased selection:bg-red selection:text-white pb-[60px]">

  <!-- SEO H2 -->
  <h2 class="sr-only absolute w-px h-px overflow-hidden" style="clip: rect(0, 0, 0, 0);">Safalta Google Ads Course 2026 — Only ₹499, Basic to Advanced</h2>

  <!-- Urgency Ticker -->
  <div class="bg-red py-2 overflow-hidden whitespace-nowrap">
    <div class="inline-block animate-ticker text-xs font-semibold tracking-wide">
      🔥 LIMITED OFFER — Google Ads Course for Just ₹499! <span class="text-gold mx-4">|</span> Original Price ₹4,999 <span class="text-gold mx-4">|</span> 90% OFF — Enroll Today <span class="text-gold mx-4">|</span> Basic to Advanced — Everything Covered <span class="text-gold mx-4">|</span> Updated 2026 Content <span class="text-gold mx-4">|</span> Lifetime Access Included <span class="text-gold mx-4">|</span> 🔥 Offer Ending Soon — Don't Miss It!
    </div>
  </div>

  <div class="max-w-5xl mx-auto relative bg-dark shadow-2xl md:my-8 md:rounded-2xl md:overflow-hidden md:border md:border-white/5">
      <!-- Hero Section -->
      <div class="hero-glow relative overflow-hidden px-5 md:px-10 pt-10 md:pt-16 pb-8 md:pb-16 border-b border-white/10 bg-[radial-gradient(ellipse_at_top_left,rgba(225,29,72,0.15)_0%,rgba(9,9,11,1)_65%)]">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center relative z-10">
          
          <!-- Left Column: Copy -->
          <div class="lg:col-span-7 flex flex-col items-start">
            <div class="flex items-center gap-3 mb-6 animate__animated animate__fadeInDown">
              <div class="bg-gradient-to-r from-red to-red-dark text-white font-montserrat font-black text-xs px-3.5 py-1.5 rounded-full tracking-widest shadow-[0_0_15px_rgba(225,29,72,0.4)]">SAFALTA</div>
              <div class="text-xs text-muted font-medium tracking-wide uppercase">Certified Digital Learning</div>
            </div>
            
            <div class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-xs font-semibold text-green mb-5 animate__animated animate__fadeIn">
              <div class="w-2 h-2 rounded-full bg-green animate-blink shadow-[0_0_8px_rgba(16,185,129,0.8)]"></div>
              1,200+ people viewing right now
            </div>
            
            <h1 class="font-montserrat text-4xl md:text-5xl lg:text-6xl md:leading-[1.1] font-black leading-[1.1] mb-5 tracking-tighter animate__animated animate__fadeInLeft">
              Master <span class="text-transparent bg-clip-text bg-gradient-to-r from-red to-rose-400">Google Ads</span> <br class="hidden lg:block"/><span class="text-transparent bg-clip-text bg-gradient-to-r from-gold to-yellow-200">Basic to Advanced</span> <br class="lg:hidden"/>Every Single Thing Explained in Video!
            </h1>
            
            <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-8 border-l-2 border-red/50 pl-4 animate__animated animate__fadeInLeft animate__delay-1s">
              We've built an all-new Updated 2026 Google Ads Course — starting from absolute basics and going all the way to advanced level. Every concept, every strategy, every tool — explained step by step in HD videos. Whether you're a complete beginner or want to upgrade your skills, this course is made for YOU.
            </p>

            <!-- Trust Chips -->
            <div class="flex flex-wrap justify-start gap-x-5 gap-y-3 mt-2 mb-6 lg:mb-0">
              <div class="text-xs text-gray-400 flex items-center gap-2 font-medium"><i class="fa-solid fa-check-circle text-green"></i> Lifetime Access</div>
              <div class="text-xs text-gray-400 flex items-center gap-2 font-medium"><i class="fa-solid fa-check-circle text-green"></i> Free Certificate</div>
              <div class="text-xs text-gray-400 flex items-center gap-2 font-medium"><i class="fa-solid fa-check-circle text-green"></i> Updated 2026</div>
              <div class="text-xs text-gray-400 flex items-center gap-2 font-medium"><i class="fa-solid fa-check-circle text-green"></i> Job Support</div>
              <div class="text-xs text-gray-400 flex items-center gap-2 font-medium"><i class="fa-solid fa-check-circle text-green"></i> Hindi + English</div>
            </div>
          </div>
          
          <!-- Right Column: Offer Box & CTA -->
          <div class="lg:col-span-5 w-full">
            <!-- Offer Box -->
            <div class="offer-glow relative overflow-hidden rounded-[24px] p-6 mb-6 text-center glass-card animate__animated animate__zoomIn animate__delay-1s animate-float">
              <div class="text-[11px] md:text-xs font-bold text-gold tracking-widest uppercase mb-4 opacity-90">🎯 Limited Time Offer — Grab It Now!</div>
              <div class="flex items-center justify-center gap-4 mb-4 flex-wrap">
                <div class="font-montserrat text-3xl font-extrabold text-muted/50 line-through">₹4,999</div>
                <div class="text-red text-2xl font-black"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="font-montserrat text-[64px] font-black text-white leading-none drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]"><sup class="text-gold text-3xl align-super opacity-90">₹</sup>499</div>
              </div>
              <div class="bg-gradient-to-r from-red to-red-dark text-white text-xs md:text-sm font-bold px-6 py-2 rounded-full inline-block mb-4 shadow-[0_0_15px_rgba(225,29,72,0.4)]">You Save ₹4,500 — 90% OFF!</div>
              <div class="text-xs text-muted font-medium opacity-80">One-time payment · Lifetime Access · Zero Hidden Charges</div>
            </div>

            <!-- Countdown -->
            <div class="flex justify-center items-center gap-3 mb-8 animate__animated animate__fadeInUp animate__delay-1s">
              <div class="bg-dark-card border border-white/5 rounded-xl px-4 py-3 md:py-4 text-center min-w-[75px] shadow-[inset_0_2px_4px_rgba(255,255,255,0.05)]">
                <div class="font-montserrat text-4xl font-black text-transparent bg-clip-text bg-gradient-to-b from-gold to-amber-700 leading-none" id="cdh">11</div>
                <div class="text-[10px] text-muted uppercase tracking-widest mt-2 font-bold">Hours</div>
              </div>
              <div class="font-montserrat text-3xl font-black text-red/60 mb-5 animate-pulse">:</div>
              <div class="bg-dark-card border border-white/5 rounded-xl px-4 py-3 md:py-4 text-center min-w-[75px] shadow-[inset_0_2px_4px_rgba(255,255,255,0.05)]">
                <div class="font-montserrat text-4xl font-black text-transparent bg-clip-text bg-gradient-to-b from-gold to-amber-700 leading-none" id="cdm">42</div>
                <div class="text-[10px] text-muted uppercase tracking-widest mt-2 font-bold">Mins</div>
              </div>
              <div class="font-montserrat text-3xl font-black text-red/60 mb-5 animate-pulse">:</div>
              <div class="bg-dark-card border border-white/5 rounded-xl px-4 py-3 md:py-4 text-center min-w-[75px] shadow-[inset_0_2px_4px_rgba(255,255,255,0.05)]">
                <div class="font-montserrat text-4xl font-black text-transparent bg-clip-text bg-gradient-to-b from-gold to-amber-700 leading-none" id="cds">30</div>
                <div class="text-[10px] text-muted uppercase tracking-widest mt-2 font-bold">Secs</div>
              </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col gap-4">
              <a href="tel:+916388910079" class="shine-effect group relative overflow-hidden block w-full bg-gradient-to-r from-red to-red-dark hover:from-red-dark hover:to-red transition-all duration-300 text-white text-center p-5 rounded-2xl font-montserrat text-xl font-black tracking-wide shadow-[0_8px_25px_-5px_rgba(225,29,72,0.5)] hover:shadow-[0_12px_35px_-5px_rgba(225,29,72,0.7)] hover:-translate-y-1">
                <span class="relative z-10 flex flex-col items-center justify-center">
                    <span class="flex items-center"><i class="fa-solid fa-rocket mr-2 group-hover:scale-110 transition-transform"></i> BUY NOW — Only ₹499</span>
                    <span class="text-sm font-medium text-white/80 mt-1 uppercase tracking-widest">Offer Ending Soon!</span>
                </span>
              </a>
              <a href="tel:+916388910079" class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-red to-red-dark hover:from-red-dark hover:to-red transition-all duration-300 text-white p-4 rounded-xl text-base font-bold font-montserrat hover:-translate-y-0.5 shadow-[0_8px_25px_-5px_rgba(225,29,72,0.5)]">
                <i class="fa-brands fa-whatsapp text-2xl"></i> WhatsApp Us — Get Free Demo
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Stats Row -->
      <div class="grid grid-cols-3 gap-2 md:gap-8 px-5 md:px-10 py-6 md:py-10 bg-gradient-to-b from-dark-card to-dark border-t border-white/5 relative z-20">
        <div class="text-center group hover:-translate-y-1 transition-transform duration-300">
          <div class="font-montserrat text-3xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-gold to-amber-200 drop-shadow-lg">50K+</div>
          <div class="text-[11px] md:text-sm text-zinc-400 mt-2 leading-tight font-semibold tracking-wide uppercase">Students<br class="md:hidden"/> Trained</div>
        </div>
        <div class="text-center group hover:-translate-y-1 transition-transform duration-300">
          <div class="font-montserrat text-3xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-gold to-amber-200 drop-shadow-lg flex items-center justify-center gap-1">4.9<i class="fa-solid fa-star text-base md:text-2xl text-gold drop-shadow-[0_0_8px_rgba(245,158,11,0.5)]"></i></div>
          <div class="text-[11px] md:text-sm text-zinc-400 mt-2 leading-tight font-semibold tracking-wide uppercase">Average<br class="md:hidden"/> Rating</div>
        </div>
        <div class="text-center group hover:-translate-y-1 transition-transform duration-300">
          <div class="font-montserrat text-3xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-gold to-amber-200 drop-shadow-lg">93%</div>
          <div class="text-[11px] md:text-sm text-zinc-400 mt-2 leading-tight font-semibold tracking-wide uppercase">Placement<br class="md:hidden"/> Rate</div>
        </div>
      </div>

      <hr class="border-t border-white/5 mx-5 my-0">

      <!-- What's Inside Section -->
      <div class="px-5 md:px-10 py-7 md:py-12">
        <h2 class="font-montserrat text-[22px] md:text-3xl font-black mb-1 md:mb-2 tracking-tight">What's Inside the <span class="text-red">Course?</span></h2>
        <p class="text-xs md:text-sm text-muted mb-5 md:mb-8 font-medium">25+ structured HD lessons — Basic to Advanced, everything in one place</p>
        
        <div class="bg-gradient-to-br from-red/10 to-gold/5 border border-gold/20 rounded-xl p-4 md:p-6 mb-5 md:mb-8 flex items-center gap-3.5 md:gap-5 shadow-sm">
          <div class="font-montserrat text-5xl md:text-6xl font-black text-gold leading-none shrink-0">25+</div>
          <div>
            <div class="text-sm md:text-lg font-bold text-white mb-1">HD Video Lessons — Taught in Simple English</div>
            <div class="text-[11px] md:text-sm text-muted leading-relaxed font-medium">Search · Display · Shopping · YouTube Ads · Performance Max · GA4 Analytics · Google Certification Prep</div>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-5">
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-rocket"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">What is Google Ads? Account Setup</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Understand the platform, dashboard, billing & campaign structure</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-flex items-center gap-1 bg-emerald-500/10 text-emerald-500 border border-emerald-500/20 uppercase tracking-widest"><div class="w-1.5 h-1.5 rounded-full bg-emerald-500"></div> FREE Preview</div>
            </div>
          </div>
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-magnifying-glass"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">Keyword Research Deep-Dive</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Match types, negative keywords, Keyword Planner tool deep-dive</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-flex items-center gap-1 bg-emerald-500/10 text-emerald-500 border border-emerald-500/20 uppercase tracking-widest"><div class="w-1.5 h-1.5 rounded-full bg-emerald-500"></div> FREE Preview</div>
            </div>
          </div>
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-bullhorn"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">Search Campaigns — Full Setup</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Ad groups, headlines, descriptions, sitelinks & call extensions</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-block bg-red/10 text-red border border-red/20 uppercase tracking-widest">Advanced</div>
            </div>
          </div>
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-image"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">Display & Remarketing Ads</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Audience targeting, banner creation, retargeting strategy</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-block bg-red/10 text-red border border-red/20 uppercase tracking-widest">Advanced</div>
            </div>
          </div>
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-cart-shopping"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">Shopping Ads & Merchant Center</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Product feed setup, PLA ads, e-commerce optimization</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-block bg-red/10 text-red border border-red/20 uppercase tracking-widest">Advanced</div>
            </div>
          </div>
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-bolt"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">Performance Max 2026</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Asset groups, audience signals, AI-driven campaigns</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-block bg-red/10 text-red border border-red/20 uppercase tracking-widest">Advanced</div>
            </div>
          </div>
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-coins"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">Smart Bidding — Master tCPA & tROAS</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Maximize Conversions, Target ROAS, Manual CPC — when to use what</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-block bg-red/10 text-red border border-red/20 uppercase tracking-widest">Advanced</div>
            </div>
          </div>
          <!-- Module Item -->
          <div class="group flex items-start gap-4 bg-dark-card/50 hover:bg-dark-card border border-white/5 hover:border-white/10 rounded-2xl p-4 transition-all duration-300 cursor-pointer hover:-translate-y-1 hover:shadow-xl">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red/20 to-red-dark/10 border border-red/20 flex items-center justify-center text-red shrink-0 text-lg group-hover:scale-110 transition-transform"><i class="fa-solid fa-chart-line"></i></div>
            <div>
              <div class="text-sm font-bold text-white mb-1 group-hover:text-red transition-colors">GA4 Analytics & Conversions</div>
              <div class="text-[11px] text-zinc-400 leading-relaxed">Connect GA4, set up conversions, build client reports</div>
              <div class="text-[9px] font-bold px-2.5 py-0.5 rounded-full mt-2 inline-block bg-red/10 text-red border border-red/20 uppercase tracking-widest">Advanced</div>
            </div>
          </div>
        </div>
      </div>

      <hr class="border-t border-white/5 mx-5 my-0">

      <!-- Mid CTA -->
      <div class="px-5 md:px-10 py-8 md:py-16 pb-0 md:pb-0">
        <div class="glass-card relative overflow-hidden rounded-[24px] p-8 md:p-12 text-center max-w-3xl mx-auto border-t border-white/10 shadow-[0_20px_50px_rgba(225,29,72,0.1)]">
          <div class="absolute -top-32 -left-32 w-64 h-64 bg-red rounded-full mix-blend-screen filter blur-[80px] opacity-20"></div>
          <div class="absolute -bottom-32 -right-32 w-64 h-64 bg-gold rounded-full mix-blend-screen filter blur-[80px] opacity-10"></div>
          
          <div class="relative z-10">
            <div class="text-sm md:text-base text-zinc-300 mb-2 md:mb-3 font-semibold tracking-wide uppercase">Everything above — all 25+ videos — for just</div>
            <div class="font-montserrat text-4xl md:text-5xl font-black text-white mb-6 md:mb-8 tracking-tighter">Only <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold to-yellow-200">₹499</span> One-Time</div>
            <a href="tel:+916388910079" class="shine-effect inline-flex items-center justify-center relative overflow-hidden w-full md:w-2/3 mx-auto bg-gradient-to-r from-red to-red-dark hover:from-red-dark hover:to-red transition-all duration-300 hover:-translate-y-1 text-white text-center p-5 rounded-2xl font-montserrat text-lg md:text-xl font-black tracking-wide shadow-[0_8px_25px_-5px_rgba(225,29,72,0.5)]">
              <i class="fa-solid fa-cart-shopping mr-2"></i> BUY NOW — Get Access!
            </a>
          </div>
        </div>
      </div>

      <div class="px-5 md:px-10 py-8 md:py-16">
        <!-- Update Box -->
        <div class="bg-gradient-to-br from-emerald-950/40 to-zinc-950 border border-emerald-500/20 rounded-2xl p-6 md:p-10 shadow-[0_10px_30px_rgba(16,185,129,0.05)] max-w-4xl mx-auto relative overflow-hidden">
          <div class="absolute top-0 right-0 p-4 opacity-5"><i class="fa-solid fa-rotate text-9xl text-emerald-500"></i></div>
          
          <div class="relative z-10">
            <div class="flex flex-wrap items-center gap-3 mb-6 md:mb-8">
              <div class="bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 text-xs font-black px-3 py-1.5 rounded-full tracking-widest"><i class="fa-solid fa-check mr-1.5"></i>UPDATED 2026</div>
              <div class="text-lg md:text-2xl font-bold text-white tracking-tight">Freshest Content Guaranteed</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
              <div class="flex items-start gap-3 text-sm text-zinc-300 font-medium leading-relaxed hover:text-white transition-colors">
                <div class="bg-emerald-500/10 rounded-full p-1 mt-0.5"><i class="fa-solid fa-arrow-right text-emerald-500 text-xs"></i></div> Google Ads New Interface 2026 — Complete New Dashboard
              </div>
              <div class="flex items-start gap-3 text-sm text-zinc-300 font-medium leading-relaxed hover:text-white transition-colors">
                <div class="bg-emerald-500/10 rounded-full p-1 mt-0.5"><i class="fa-solid fa-arrow-right text-emerald-500 text-xs"></i></div> Performance Max 2026 — All New AI-Powered Updates
              </div>
              <div class="flex items-start gap-3 text-sm text-zinc-300 font-medium leading-relaxed hover:text-white transition-colors">
                <div class="bg-emerald-500/10 rounded-full p-1 mt-0.5"><i class="fa-solid fa-arrow-right text-emerald-500 text-xs"></i></div> Demand Gen Campaigns — Brand New Campaign Type
              </div>
              <div class="flex items-start gap-3 text-sm text-zinc-300 font-medium leading-relaxed hover:text-white transition-colors">
                <div class="bg-emerald-500/10 rounded-full p-1 mt-0.5"><i class="fa-solid fa-arrow-right text-emerald-500 text-xs"></i></div> Google Analytics 4 — Full Integration & Reporting
              </div>
              <div class="flex items-start gap-3 text-sm text-zinc-300 font-medium leading-relaxed hover:text-white transition-colors">
                <div class="bg-emerald-500/10 rounded-full p-1 mt-0.5"><i class="fa-solid fa-arrow-right text-emerald-500 text-xs"></i></div> AI-Based Smart Bidding Strategies 2026
              </div>
              <div class="flex items-start gap-3 text-sm text-zinc-300 font-medium leading-relaxed hover:text-white transition-colors">
                <div class="bg-emerald-500/10 rounded-full p-1 mt-0.5"><i class="fa-solid fa-arrow-right text-emerald-500 text-xs"></i></div> YouTube Video Ads — Updated Formats & Targeting
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="border-t border-white/5 mx-5 my-0">

      <!-- Why Choose Section -->
      <div class="px-5 md:px-10 py-10 md:py-16">
        <h2 class="font-montserrat text-3xl md:text-4xl font-black mb-2 tracking-tight">Why Choose <span class="text-transparent bg-clip-text bg-gradient-to-r from-red to-rose-400">This Course?</span></h2>
        <p class="text-sm text-zinc-400 mb-8 md:mb-12 font-medium">Thousands of Indian students have already enrolled</p>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
          <div class="group bg-dark-card/30 rounded-2xl p-5 md:p-6 text-center border border-white/5 hover:border-red/30 hover:bg-dark-card transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(225,29,72,0.1)]">
            <div class="text-3xl mb-4 text-red group-hover:scale-110 transition-transform"><i class="fa-solid fa-video drop-shadow-lg"></i></div>
            <div class="text-sm font-bold text-white mb-2">Everything in Video</div>
            <div class="text-[11px] text-zinc-400 leading-relaxed font-medium">Every topic explained practically — no boring theory</div>
          </div>
          <div class="group bg-dark-card/30 rounded-2xl p-5 md:p-6 text-center border border-white/5 hover:border-gold/30 hover:bg-dark-card transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(245,158,11,0.1)]">
            <div class="text-3xl mb-4 text-gold group-hover:scale-110 transition-transform"><i class="fa-solid fa-comments drop-shadow-lg"></i></div>
            <div class="text-sm font-bold text-white mb-2">Easy Language</div>
            <div class="text-[11px] text-zinc-400 leading-relaxed font-medium">Taught in simple Hindi+English — no confusing jargon</div>
          </div>
          <div class="group bg-dark-card/30 rounded-2xl p-5 md:p-6 text-center border border-white/5 hover:border-emerald-500/30 hover:bg-dark-card transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(16,185,129,0.1)]">
            <div class="text-3xl mb-4 text-emerald-500 group-hover:scale-110 transition-transform"><i class="fa-solid fa-hourglass-half drop-shadow-lg"></i></div>
            <div class="text-sm font-bold text-white mb-2">Lifetime Access</div>
            <div class="text-[11px] text-zinc-400 leading-relaxed font-medium">Buy once, watch anytime — no expiry ever</div>
          </div>
          <div class="group bg-dark-card/30 rounded-2xl p-5 md:p-6 text-center border border-white/5 hover:border-blue-400/30 hover:bg-dark-card transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(96,165,250,0.1)]">
            <div class="text-3xl mb-4 text-blue-400 group-hover:scale-110 transition-transform"><i class="fa-solid fa-certificate drop-shadow-lg"></i></div>
            <div class="text-sm font-bold text-white mb-2">Get Certified</div>
            <div class="text-[11px] text-zinc-400 leading-relaxed font-medium">Completion certificate — valuable for your resume</div>
          </div>
          <div class="group bg-dark-card/30 rounded-2xl p-5 md:p-6 text-center border border-white/5 hover:border-purple-400/30 hover:bg-dark-card transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(192,132,252,0.1)]">
            <div class="text-3xl mb-4 text-purple-400 group-hover:scale-110 transition-transform"><i class="fa-solid fa-briefcase drop-shadow-lg"></i></div>
            <div class="text-sm font-bold text-white mb-2">Job Assistance</div>
            <div class="text-[11px] text-zinc-400 leading-relaxed font-medium">Resume help, mock interviews, 200+ partners</div>
          </div>
          <div class="group bg-dark-card/30 rounded-2xl p-5 md:p-6 text-center border border-white/5 hover:border-orange-400/30 hover:bg-dark-card transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(251,146,60,0.1)]">
            <div class="text-3xl mb-4 text-orange-400 group-hover:scale-110 transition-transform"><i class="fa-solid fa-rotate drop-shadow-lg"></i></div>
            <div class="text-sm font-bold text-white mb-2">Free Updates</div>
            <div class="text-[11px] text-zinc-400 leading-relaxed font-medium">Whenever Google Ads changes, new content added</div>
          </div>
        </div>
      </div>

      <hr class="border-t border-white/5 mx-5 my-0">

      <!-- Testimonials -->
      <div class="px-5 md:px-10 py-10 md:py-16 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red/5 rounded-full filter blur-[100px] pointer-events-none"></div>
        
        <h2 class="font-montserrat text-3xl md:text-4xl font-black mb-8 md:mb-12 tracking-tight">What Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-red to-rose-400">Students Say</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative z-10">
          <!-- Review 1 -->
          <div class="group bg-dark-card/80 backdrop-blur-sm rounded-3xl p-6 relative border border-white/5 hover:border-gold/30 shadow-xl transition-all duration-300 hover:-translate-y-2">
            <div class="absolute -top-3 right-6 bg-gradient-to-r from-emerald-500 to-emerald-400 rounded-full px-3 py-1 text-[10px] font-black text-emerald-950 tracking-widest shadow-lg">₹32,000/MONTH</div>
            <div class="text-gold text-sm mb-4 flex gap-1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <div class="text-sm text-zinc-300 italic leading-relaxed mb-6 font-medium">"I had zero knowledge about Google Ads. Safalta's course taught me everything step by step. Today I'm working full-time at a Gurgaon agency — best ₹499 I ever spent!"</div>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-gradient-to-br from-red to-red-dark flex items-center justify-center font-montserrat text-sm font-bold shrink-0 shadow-lg">AV</div>
              <div>
                <div class="text-sm font-bold text-white">Aman Verma</div>
                <div class="text-[11px] text-zinc-400 font-medium">PPC Executive · Gurgaon</div>
              </div>
            </div>
          </div>

          <!-- Review 2 -->
          <div class="group bg-dark-card/80 backdrop-blur-sm rounded-3xl p-6 relative border border-white/5 hover:border-gold/30 shadow-xl transition-all duration-300 hover:-translate-y-2">
            <div class="absolute -top-3 right-6 bg-gradient-to-r from-emerald-500 to-emerald-400 rounded-full px-3 py-1 text-[10px] font-black text-emerald-950 tracking-widest shadow-lg">₹40K FREELANCE</div>
            <div class="text-gold text-sm mb-4 flex gap-1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <div class="text-sm text-zinc-300 italic leading-relaxed mb-6 font-medium">"Honestly didn't expect this much for ₹499. The Shopping Ads module alone helped me land my first freelance client worth ₹15,000/month. Incredible value!"</div>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-600 to-emerald-800 flex items-center justify-center font-montserrat text-sm font-bold shrink-0 shadow-lg">SG</div>
              <div>
                <div class="text-sm font-bold text-white">Sneha Gupta</div>
                <div class="text-[11px] text-zinc-400 font-medium">Freelance Consultant · Noida</div>
              </div>
            </div>
          </div>

          <!-- Review 3 -->
          <div class="group bg-dark-card/80 backdrop-blur-sm rounded-3xl p-6 relative border border-white/5 hover:border-gold/30 shadow-xl transition-all duration-300 hover:-translate-y-2">
            <div class="absolute -top-3 right-6 bg-gradient-to-r from-emerald-500 to-emerald-400 rounded-full px-3 py-1 text-[10px] font-black text-emerald-950 tracking-widest shadow-lg">JOB CONFIRMED ✓</div>
            <div class="text-gold text-sm mb-4 flex gap-1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <div class="text-sm text-zinc-300 italic leading-relaxed mb-6 font-medium">"I was skeptical about a ₹499 course — but every video has real practical examples. Passed my Google Ads exam and got placed within 45 days of finishing!"</div>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center font-montserrat text-sm font-bold shrink-0 shadow-lg">RK</div>
              <div>
                <div class="text-sm font-bold text-white">Rahul Kumar</div>
                <div class="text-[11px] text-zinc-400 font-medium">Digital Marketer · Delhi</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="border-t border-white/5 mx-5 my-0">

      <!-- Final Price Card Section -->
      <div class="px-5 md:px-10 py-10 md:py-16">
        <h2 class="font-montserrat text-3xl md:text-4xl text-center font-black mb-8 md:mb-12 tracking-tight">Get Everything for Just <span class="text-transparent bg-clip-text bg-gradient-to-r from-red to-rose-400">₹499</span></h2>
        
        <div class="price-glow relative overflow-hidden bg-dark-card/80 backdrop-blur-md border border-red/40 rounded-[32px] p-8 md:p-12 shadow-[0_0_40px_rgba(225,29,72,0.15)] text-center max-w-2xl mx-auto group hover:border-red/60 transition-colors duration-500">
          <div class="absolute top-0 left-1/2 -translate-x-1/2 bg-gradient-to-r from-red to-red-dark text-white text-[11px] font-black px-6 py-2 rounded-b-xl tracking-widest w-max shadow-lg">🔥 BEST VALUE — OFFER ENDING TODAY!</div>
          
          <div class="text-sm text-gold font-bold mt-6 mb-4">Original Price ₹4,999 — Now Only ₹499!</div>
          
          <div class="flex items-baseline justify-center gap-4 mb-4 flex-wrap">
            <div class="font-montserrat text-3xl font-black text-zinc-600 line-through decoration-red/50">₹4,999</div>
            <div class="font-montserrat text-6xl font-black text-white leading-none drop-shadow-lg"><sup class="text-2xl text-gold">₹</sup>499</div>
            <div class="bg-red/20 border border-red/30 text-red text-xs font-black px-3 py-1.5 rounded-lg">90% OFF</div>
          </div>
          
          <div class="text-[12px] text-zinc-400 mb-6 font-medium">One-time payment · GST included · Zero hidden charges</div>
          
          <div class="flex flex-col gap-3.5 mb-8 text-left max-w-sm mx-auto">
            <div class="flex items-center gap-3 text-sm text-zinc-200 font-medium"><div class="w-5 h-5 rounded-full bg-emerald-500/10 border border-emerald-500/25 flex items-center justify-center text-[10px] text-emerald-500 shrink-0"><i class="fa-solid fa-check"></i></div> 25+ HD Video Lessons — Lifetime Access</div>
            <div class="flex items-center gap-3 text-sm text-zinc-200 font-medium"><div class="w-5 h-5 rounded-full bg-emerald-500/10 border border-emerald-500/25 flex items-center justify-center text-[10px] text-emerald-500 shrink-0"><i class="fa-solid fa-check"></i></div> Updated 2026 Content — Everything New</div>
            <div class="flex items-center gap-3 text-sm text-zinc-200 font-medium"><div class="w-5 h-5 rounded-full bg-emerald-500/10 border border-emerald-500/25 flex items-center justify-center text-[10px] text-emerald-500 shrink-0"><i class="fa-solid fa-check"></i></div> Basic to Advanced — Nothing Skipped</div>
            <div class="flex items-center gap-3 text-sm text-zinc-200 font-medium"><div class="w-5 h-5 rounded-full bg-emerald-500/10 border border-emerald-500/25 flex items-center justify-center text-[10px] text-emerald-500 shrink-0"><i class="fa-solid fa-check"></i></div> Google Ads Certification Prep Included</div>
            <div class="flex items-center gap-3 text-sm text-zinc-200 font-medium"><div class="w-5 h-5 rounded-full bg-emerald-500/10 border border-emerald-500/25 flex items-center justify-center text-[10px] text-emerald-500 shrink-0"><i class="fa-solid fa-check"></i></div> Job Placement Assistance — 200+ Partners</div>
            <div class="flex items-center gap-3 text-sm text-zinc-200 font-medium"><div class="w-5 h-5 rounded-full bg-emerald-500/10 border border-emerald-500/25 flex items-center justify-center text-[10px] text-emerald-500 shrink-0"><i class="fa-solid fa-check"></i></div> Free Updates — Forever</div>
          </div>
          
          <a href="tel:+916388910079" class="shine-effect relative overflow-hidden block w-full bg-gradient-to-r from-red to-red-dark hover:from-red-dark hover:to-red transition-all duration-300 text-white text-center p-5 rounded-2xl font-montserrat text-lg font-black tracking-wide shadow-[0_10px_30px_rgba(225,29,72,0.4)] hover:-translate-y-1">
            <i class="fa-solid fa-cart-shopping mr-2"></i> BUY NOW — Get Instant Access!
          </a>
        </div>
      </div>

      <hr class="border-t border-white/5 mx-5 my-0">

      <!-- Guarantee -->
      <div class="px-5 md:px-10 py-10 md:py-16">
        <div class="bg-gradient-to-br from-blue-950/20 to-zinc-950 border border-blue-500/20 rounded-3xl p-6 md:p-10 flex flex-col md:flex-row gap-6 items-center md:items-start shadow-2xl max-w-4xl mx-auto text-center md:text-left relative overflow-hidden">
          <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/5 rounded-full filter blur-[50px] pointer-events-none"></div>
          <div class="text-5xl md:text-6xl shrink-0 drop-shadow-[0_0_15px_rgba(59,130,246,0.3)] text-blue-400 group-hover:scale-110 transition-transform"><i class="fa-solid fa-shield-halved"></i></div>
          <div class="relative z-10">
            <div class="text-lg md:text-2xl font-bold text-white mb-2 tracking-tight">7-Day Money Back Guarantee</div>
            <div class="text-sm text-zinc-400 leading-relaxed font-medium">Not satisfied within 7 days of purchase? We'll refund 100% of your money — no questions asked, no hassle. Zero risk on your end.</div>
          </div>
        </div>
      </div>

      <hr class="border-t border-white/5 mx-5 my-0">

      <!-- FAQs -->
      <div class="px-5 md:px-10 py-10 md:py-16 pb-28 md:pb-32">
        <h2 class="font-montserrat text-3xl md:text-4xl font-black mb-8 md:mb-12 tracking-tight text-center">Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-red to-rose-400">Questions</span></h2>
        
        <div class="flex flex-col gap-3 max-w-3xl mx-auto">
          <!-- FAQ 1 -->
          <div class="faq-item bg-dark-card/50 hover:bg-dark-card transition-colors rounded-2xl overflow-hidden border border-white/5 hover:border-white/10">
            <button class="w-full px-6 py-5 text-left flex justify-between items-center text-sm md:text-base font-bold text-white focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
              Do I need prior experience to join? <i class="faq-icon fa-solid fa-chevron-down text-zinc-500 text-sm transition-transform duration-300"></i>
            </button>
            <div class="faq-answer px-6 text-sm text-zinc-400 leading-relaxed font-medium">
              None at all! This course starts from absolute zero. Even if you've never heard of Google Ads before, you'll be fully equipped to run professional campaigns by the end.
            </div>
          </div>
          <!-- FAQ 2 -->
          <div class="faq-item bg-dark-card/50 hover:bg-dark-card transition-colors rounded-2xl overflow-hidden border border-white/5 hover:border-white/10">
            <button class="w-full px-6 py-5 text-left flex justify-between items-center text-sm md:text-base font-bold text-white focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
              How long is the course? <i class="faq-icon fa-solid fa-chevron-down text-zinc-500 text-sm transition-transform duration-300"></i>
            </button>
            <div class="faq-answer px-6 text-sm text-zinc-400 leading-relaxed font-medium">
              25+ HD video lessons that you can watch at your own pace. Most students finish in 30–45 days. You have lifetime access so there's no pressure to rush.
            </div>
          </div>
          <!-- FAQ 3 -->
          <div class="faq-item bg-dark-card/50 hover:bg-dark-card transition-colors rounded-2xl overflow-hidden border border-white/5 hover:border-white/10">
            <button class="w-full px-6 py-5 text-left flex justify-between items-center text-sm md:text-base font-bold text-white focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
              Is ₹499 really the full price? <i class="faq-icon fa-solid fa-chevron-down text-zinc-500 text-sm transition-transform duration-300"></i>
            </button>
            <div class="faq-answer px-6 text-sm text-zinc-400 leading-relaxed font-medium">
              Absolutely. ₹499 is a one-time payment — GST included, no subscriptions, no hidden fees. This is a limited-time offer on our ₹4,999 course. It can go back to full price anytime.
            </div>
          </div>
          <!-- FAQ 4 -->
          <div class="faq-item bg-dark-card/50 hover:bg-dark-card transition-colors rounded-2xl overflow-hidden border border-white/5 hover:border-white/10">
            <button class="w-full px-6 py-5 text-left flex justify-between items-center text-sm md:text-base font-bold text-white focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
              Will I get a certificate? <i class="faq-icon fa-solid fa-chevron-down text-zinc-500 text-sm transition-transform duration-300"></i>
            </button>
            <div class="faq-answer px-6 text-sm text-zinc-400 leading-relaxed font-medium">
              Yes! On completing the course you receive a Safalta completion certificate. You can add it to your resume and LinkedIn profile to boost your credibility with employers.
            </div>
          </div>
          <!-- FAQ 5 -->
          <div class="faq-item bg-dark-card/50 hover:bg-dark-card transition-colors rounded-2xl overflow-hidden border border-white/5 hover:border-white/10">
            <button class="w-full px-6 py-5 text-left flex justify-between items-center text-sm md:text-base font-bold text-white focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
              When do I get access after payment? <i class="faq-icon fa-solid fa-chevron-down text-zinc-500 text-sm transition-transform duration-300"></i>
            </button>
            <div class="faq-answer px-6 text-sm text-zinc-400 leading-relaxed font-medium">
              Instantly! The moment payment is confirmed, your login credentials are sent to your email. Start watching all 25+ videos right away — no waiting period.
            </div>
          </div>
        </div>
      </div>

      <!-- Floating Call Button -->
      <a href="tel:+916388910079" class="fixed bottom-[88px] md:bottom-24 right-5 md:right-10 z-[60] bg-gradient-to-r from-red to-red-dark text-white rounded-full p-4 md:px-6 shadow-[0_10px_25px_rgba(225,29,72,0.5)] hover:scale-105 transition-transform flex items-center justify-center gap-3 hover:shadow-[0_15px_35px_rgba(225,29,72,0.7)] group">
        <i class="fa-solid fa-phone-volume text-xl animate-bounce"></i>
        <span class="hidden md:block font-montserrat font-bold tracking-wide">+91 63889 10079</span>
      </a>

      <!-- Sticky Footer -->
      <div class="fixed bottom-0 left-0 right-0 w-full max-w-5xl mx-auto bg-dark/80 backdrop-blur-xl border-t border-white/10 md:border-x px-5 md:px-10 py-4 flex items-center justify-between gap-4 z-50 md:rounded-t-2xl shadow-[0_-10px_40px_rgba(0,0,0,0.5)]">
        <div class="flex-1">
          <div class="text-xs md:text-sm font-bold text-white mb-0.5 tracking-wide">Google Ads Course 2026</div>
          <div class="text-[10px] md:text-xs text-zinc-400 font-medium"><b class="text-gold font-bold text-xs">₹499 Only</b> <span class="hidden md:inline">· Was <span class="line-through">₹4,999</span></span></div>
        </div>
        <a href="tel:+916388910079" class="bg-gradient-to-r from-red to-red-dark hover:from-red-dark hover:to-red transition-all duration-300 text-white rounded-xl px-6 py-3 md:px-8 md:py-3 font-montserrat text-sm md:text-base font-black tracking-wider whitespace-nowrap shadow-[0_5px_15px_rgba(225,29,72,0.4)] hover:shadow-[0_8px_25px_rgba(225,29,72,0.6)] hover:-translate-y-0.5">
          BUY NOW 🔥
        </a>
      </div>

  </div> <!-- End max-w-md container -->

  <!-- Timer Script -->
  <script>
    var t = 11 * 3600 + 42 * 60 + 30;
    function tick() {
      if (t < 0) t = 0;
      var h = Math.floor(t / 3600), m = Math.floor((t % 3600) / 60), s = t % 60;
      document.getElementById('cdh').textContent = String(h).padStart(2, '0');
      document.getElementById('cdm').textContent = String(m).padStart(2, '0');
      document.getElementById('cds').textContent = String(s).padStart(2, '0');
      if (t > 0) {
        t--;
        setTimeout(tick, 1000);
      }
    }
    tick();
  </script>
</body>
</html>

