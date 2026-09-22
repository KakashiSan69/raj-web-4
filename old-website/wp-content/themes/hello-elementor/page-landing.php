<?php

/**
 * Template Name: MS Travel Landing Page
 */
?>
<?php get_header(); ?>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&family=Hind:wght@400;500;600;700&display=swap" rel="stylesheet">
<!-- FontAwesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --gold: #F5A623;
            --gold-dark: #D4880A;
            --navy: #0A1628;
            --navy2: #112040;
            --blue: #1565C0;
            --blue-light: #1E88E5;
            --red: #E53935;
            --green: #2E7D32;
            --green-light: #43A047;
            --white: #FFFFFF;
            --off-white: #FFF8EE;
            --gray: #F4F6FA;
            --text: #1A1A2E;
            --muted: #5A6A8A;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Hind', sans-serif;
            background: var(--white);
            color: var(--text);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Baloo 2', cursive;
        }

        /* TOP RIBBON */
        .ribbon {
            background: var(--red);
            color: #fff;
            text-align: center;
            padding: 10px 16px;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.5px;
            animation: pulse-bg 2s infinite alternate;
        }

        @keyframes pulse-bg {
            from {
                background: #E53935;
            }

            to {
                background: #C62828;
            }
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, var(--navy) 0%, var(--navy2) 60%, #1a3a6e 100%);
            color: #fff;
            text-align: center;
            padding: 60px 20px 50px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .hero-badge {
            display: inline-block;
            background: var(--gold);
            color: var(--navy);
            font-weight: 800;
            font-size: 13px;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .hero h1 {
            font-size: clamp(26px, 5vw, 48px);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 16px;
            color: #fff;
            position: relative;
        }

        .hero h1 span {
            color: var(--gold);
        }

        .hero .sub {
            font-size: clamp(16px, 3vw, 22px);
            color: #B8D4FF;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .hero .proof-bar {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 28px 0 36px;
        }

        .proof-item {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            padding: 12px 20px;
            text-align: center;
            min-width: 110px;
        }

        .proof-item .num {
            font-size: 28px;
            font-weight: 800;
            color: var(--gold);
            font-family: 'Baloo 2', cursive;
        }

        .proof-item .lbl {
            font-size: 12px;
            color: #9bb8e0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* CTA BUTTON */
        .cta-btn {
            display: inline-block;
            background: linear-gradient(135deg, #FF3B30, #D70015);
            color: #fff;
            font-family: 'Baloo 2', cursive;
            font-weight: 800;
            font-size: clamp(16px, 3vw, 22px);
            padding: 18px 44px;
            border-radius: 50px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 30px rgba(245, 166, 35, 0.5);
            transition: transform 0.2s, box-shadow 0.2s;
            animation: bounce-cta 1.5s infinite alternate;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 40px rgba(245, 166, 35, 0.65);
        }

        @keyframes bounce-cta {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-6px);
            }
        }

        .cta-sub {
            font-size: 13px;
            color: #7fa8d8;
            margin-top: 12px;
        }

        /* SECTION WRAPPER */
        .section {
            padding: 60px 20px;
            max-width: 860px;
            margin: 0 auto;
        }

        .section-center {
            text-align: center;
        }

        /* PAIN SECTION */
        .pain-section {
            background: var(--off-white);
            padding: 60px 20px;
        }

        .pain-section .inner {
            max-width: 860px;
            margin: 0 auto;
        }

        .section-tag {
            display: inline-block;
            background: var(--navy);
            color: var(--gold);
            font-weight: 700;
            font-size: 12px;
            padding: 4px 14px;
            border-radius: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .section-tag i {
            margin-right: 4px;
        }

        .section-title {
            font-size: clamp(22px, 4vw, 36px);
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .section-title .hl {
            color: var(--red);
        }

        .section-desc {
            font-size: 17px;
            color: var(--muted);
            margin-bottom: 32px;
            line-height: 1.7;
        }

        .pain-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .pain-list li {
            background: #fff;
            border-left: 5px solid var(--red);
            border-radius: 10px;
            padding: 18px 20px;
            font-size: 16px;
            font-weight: 600;
            color: var(--navy);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .pain-list li .icon {
            font-size: 22px;
            flex-shrink: 0;
            color: var(--red);
        }

        /* SOLUTION */
        .solution-section {
            background: var(--navy);
            padding: 60px 20px;
            color: #fff;
        }

        .solution-section .inner {
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .solution-section .section-title {
            color: #fff;
        }

        .solution-section .section-title .hl {
            color: var(--gold);
        }

        .solution-section .section-desc {
            color: #9bb8e0;
        }

        /* CARDS */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-top: 32px;
        }

        .card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 28px 22px;
            text-align: left;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .card .card-icon {
            font-size: 36px;
            margin-bottom: 14px;
            color: var(--gold);
        }

        .card h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--gold);
            margin-bottom: 8px;
        }

        .card p {
            font-size: 14px;
            color: #9bb8e0;
            line-height: 1.6;
        }

        /* HOW IT WORKS */
        .steps-section {
            background: var(--gray);
            padding: 60px 20px;
        }

        .steps-section .inner {
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin-top: 36px;
            position: relative;
        }

        .step-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.07);
            position: relative;
        }

        .step-num {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--gold), var(--gold-dark));
            color: var(--navy);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Baloo 2', cursive;
            font-weight: 800;
            font-size: 20px;
            margin: 0 auto 16px;
        }

        .step-card h3 {
            font-size: 17px;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 8px;
        }

        .step-card p {
            font-size: 14px;
            color: var(--muted);
            line-height: 1.6;
        }

        /* PROOF SECTION */
        .proof-section {
            padding: 60px 20px;
            background: #fff;
        }

        .proof-section .inner {
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .results-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 36px;
        }

        .result-card {
            background: linear-gradient(135deg, var(--navy), #1a3a6e);
            border-radius: 16px;
            padding: 28px 16px;
            text-align: center;
            color: #fff;
        }

        .result-card .big {
            font-family: 'Baloo 2', cursive;
            font-size: 40px;
            font-weight: 800;
            color: var(--gold);
        }

        .result-card .lbl {
            font-size: 14px;
            color: #9bb8e0;
            margin-top: 4px;
            line-height: 1.4;
        }

        /* ADS RESULTS SECTION */
        .ads-results-wrapper {
            margin-top: 50px;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
        }

        .ads-results-header {
            background: linear-gradient(135deg, var(--navy), #1a3a6e);
            color: var(--gold);
            padding: 18px 20px;
            text-align: center;
            font-size: clamp(16px, 3vw, 22px);
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-bottom: 3px solid var(--gold);
        }

        .ads-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 24px;
            background: #f8fafc;
        }

        .ads-card-img {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background: #fff;
            border: 1px solid #e2e8f0;
            transition: transform 0.2s;
        }

        .ads-card-img:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .ads-card-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* TESTIMONIALS */
        .testi-section {
            background: var(--off-white);
            padding: 60px 20px;
        }

        .testi-section .inner {
            max-width: 860px;
            margin: 0 auto;
            text-align: center;
        }

        .media-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            margin-top: 32px;
        }

        .media-card {
            background: #111;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            height: 340px;
            cursor: pointer;
            transition: transform 0.2s;
            text-decoration: none;
            display: block;
        }

        .media-card:hover {
            transform: translateY(-4px);
        }

        .media-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            transition: opacity 0.3s;
            display: block;
        }

        .media-card:hover img {
            opacity: 0.75;
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ff0000;
            font-size: 56px;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.5));
            pointer-events: none;
        }

        .yt-label {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.9);
            color: #000;
            padding: 8px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            white-space: nowrap;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            font-family: 'Hind', sans-serif;
            pointer-events: none;
        }

        /* OFFER BOX */
        .offer-section {
            background: linear-gradient(135deg, var(--navy), #1a3a6e);
            padding: 60px 20px;
            color: #fff;
        }

        .offer-section .inner {
            max-width: 760px;
            margin: 0 auto;
            text-align: center;
        }

        .offer-box {
            background: rgba(255, 255, 255, 0.06);
            border: 2px solid var(--gold);
            border-radius: 20px;
            padding: 40px 32px;
            margin-top: 32px;
        }

        .offer-box .offer-title {
            font-size: clamp(20px, 4vw, 32px);
            font-weight: 800;
            color: var(--gold);
            margin-bottom: 20px;
        }

        .offer-list {
            list-style: none;
            text-align: left;
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 28px;
        }

        .offer-list li {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            font-size: 15px;
            color: #cde;
            line-height: 1.5;
        }

        .offer-list li .tick {
            color: var(--gold);
            font-size: 18px;
            flex-shrink: 0;
        }

        .price-line {
            margin: 24px 0 8px;
        }

        .original-price {
            text-decoration: line-through;
            color: #7fa8d8;
            font-size: 18px;
        }

        .current-price {
            font-family: 'Baloo 2', cursive;
            font-size: clamp(40px, 8vw, 64px);
            font-weight: 800;
            color: var(--gold);
        }

        .price-note {
            font-size: 14px;
            color: #9bb8e0;
            margin-bottom: 28px;
        }

        .guarantee {
            display: flex;
            align-items: center;
            gap: 14px;
            background: rgba(46, 125, 50, 0.15);
            border: 1px solid rgba(46, 125, 50, 0.4);
            border-radius: 12px;
            padding: 16px 20px;
            margin-top: 24px;
            text-align: left;
        }

        .guarantee .g-icon {
            font-size: 36px;
            flex-shrink: 0;
            color: #9be0a0;
        }

        .guarantee p {
            font-size: 14px;
            color: #9be0a0;
            line-height: 1.6;
        }

        /* FAQ */
        .faq-section {
            padding: 60px 20px;
            background: #fff;
        }

        .faq-section .inner {
            max-width: 720px;
            margin: 0 auto;
            text-align: center;
        }

        .faq-list {
            margin-top: 32px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            text-align: left;
        }

        .faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
        }

        .faq-q {
            background: var(--gray);
            padding: 16px 20px;
            font-weight: 700;
            font-size: 15px;
            color: var(--navy);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .faq-q::after {
            content: '+';
            font-size: 22px;
            color: var(--gold);
            flex-shrink: 0;
        }

        .faq-a {
            padding: 16px 20px;
            font-size: 14px;
            color: var(--muted);
            line-height: 1.7;
            border-top: 1px solid #e2e8f0;
        }

        /* FINAL CTA */
        .final-cta {
            background: linear-gradient(135deg, var(--gold-dark), var(--gold));
            padding: 60px 20px;
            text-align: center;
        }

        .final-cta h2 {
            font-size: clamp(22px, 4vw, 36px);
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 12px;
        }

        .final-cta p {
            font-size: 17px;
            color: var(--navy);
            margin-bottom: 30px;
            opacity: 0.85;
        }

        .cta-btn-dark {
            display: inline-block;
            background: linear-gradient(135deg, #C62828, #8E0000);
            color: #fff;
            font-family: 'Baloo 2', cursive;
            font-weight: 800;
            font-size: clamp(16px, 3vw, 22px);
            padding: 18px 44px;
            border-radius: 50px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 30px rgba(10, 22, 40, 0.3);
            transition: transform 0.2s;
        }

        .cta-btn-dark:hover {
            transform: translateY(-3px);
        }

        /* FOOTER */
        footer {
            background: var(--navy);
            color: #5a7aaa;
            text-align: center;
            padding: 28px 20px;
            font-size: 13px;
            line-height: 1.8;
        }

        footer span {
            color: var(--gold);
        }

        /* STICKY BOTTOM CTA */
        .sticky-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(90deg, #E53935, #C62828);
            padding: 14px 20px;
            text-align: center;
            z-index: 999;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .sticky-cta p {
            font-weight: 700;
            font-size: 15px;
            color: #fff;
        }

        .sticky-cta a {
            background: #fff;
            color: #E53935;
            font-weight: 800;
            font-size: 14px;
            padding: 10px 24px;
            border-radius: 30px;
            text-decoration: none;
            white-space: nowrap;
        }

        /* FLOATING CALL BUTTON */
        .floating-call-btn {
            position: fixed;
            bottom: 80px;
            right: 20px;
            background: linear-gradient(135deg, #FF3B30, #D70015);
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 4px 15px rgba(229, 57, 53, 0.5);
            z-index: 1000;
            text-decoration: none;
            animation: pulse-ring 2s infinite;
        }

        .floating-call-btn:hover {
            transform: scale(1.05);
            color: #fff;
        }

        @keyframes pulse-ring {
            0% {
                box-shadow: 0 0 0 0 rgba(229, 57, 53, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(229, 57, 53, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(229, 57, 53, 0);
            }
        }

        /* FORM CUSTOMIZATION FOR CF7 */
        .form-section {
            background: var(--gray);
            padding: 60px 20px;
        }

        .form-section .inner {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-form {
            background: #fff;
            border-radius: 20px;
            padding: 36px 32px;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
            margin-top: 28px;
            text-align: left;
        }

        .contact-form p {
            margin-bottom: 18px;
        }

        .contact-form label,
        .wpcf7-form label {
            display: block;
            font-weight: 600;
            font-size: 14px;
            color: var(--navy);
            margin-bottom: 6px;
        }

        .contact-form input:not([type="submit"]),
        .contact-form select,
        .contact-form textarea,
        .wpcf7-form-control.wpcf7-text,
        .wpcf7-form-control.wpcf7-tel,
        .wpcf7-form-control.wpcf7-select,
        .wpcf7-form-control.wpcf7-textarea {
            width: 100% !important;
            padding: 12px 16px !important;
            border: 2px solid #e2e8f0 !important;
            border-radius: 10px !important;
            font-family: 'Hind', sans-serif !important;
            font-size: 15px !important;
            color: var(--text) !important;
            transition: border-color 0.2s !important;
            outline: none !important;
            box-sizing: border-box !important;
            background-color: #fff !important;
        }

        .contact-form input:not([type="submit"]):focus,
        .contact-form select:focus,
        .contact-form textarea:focus,
        .wpcf7-form-control:focus {
            border-color: var(--gold) !important;
        }

        .contact-form textarea,
        .wpcf7-form-control.wpcf7-textarea {
            resize: vertical !important;
            min-height: 90px !important;
        }

        .contact-form input[type="submit"],
        .wpcf7-submit {
            width: 100% !important;
            background: linear-gradient(135deg, var(--gold), var(--gold-dark)) !important;
            color: var(--navy) !important;
            font-family: 'Baloo 2', cursive !important;
            font-weight: 800 !important;
            font-size: 18px !important;
            padding: 16px !important;
            border: none !important;
            border-radius: 50px !important;
            cursor: pointer !important;
            box-shadow: 0 6px 24px rgba(245, 166, 35, 0.4) !important;
            transition: transform 0.2s !important;
            margin-top: 6px !important;
        }

        .contact-form input[type="submit"]:hover,
        .wpcf7-submit:hover {
            transform: translateY(-2px) !important;
        }

        /* Adjust CF7 spinner spacing */
        .wpcf7-spinner {
            margin-top: 15px !important;
        }

        @media (max-width: 600px) {
            .offer-box {
                padding: 28px 18px;
            }

            .contact-form {
                padding: 28px 18px;
            }

            .hero {
                padding: 44px 16px 40px;
            }
        }
</style>

    <!-- TOP RIBBON -->
    <div class="ribbon">
        <i class="fa-solid fa-taxi"></i> सीमित समय के लिए ऑफर! अभी Free Consultation Book करें — आज ही अपने Taxi & Tour Business की Google Ads शुरू
        करें!
    </div>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-badge"><i class="fa-solid fa-trophy"></i> #1 Travel Marketing Agency India</div>
        <h1>
            क्या आपके <span>Taxi या Tour Package Business</span> में<br>
            पर्याप्त Bookings नहीं आ रहीं?
        </h1>
        <p class="sub">MS Travel Marketing आपके Business को Google पर #1 पर लाएगी — और हर दिन नई Bookings दिलाएगी</p>
        <p style="font-size:18px; color:#B8D4FF; margin-bottom:8px; font-weight:600;">
            वही <strong style="color:var(--gold);">Proven Google Ads System</strong> जिससे हमारे Clients को मिलीं
        </p>

        <div class="proof-bar">
            <div class="proof-item">
                <div class="num">500+</div>
                <div class="lbl">Happy Clients</div>
            </div>
            <div class="proof-item">
                <div class="num">3x</div>
                <div class="lbl">Average ROI</div>
            </div>
            <div class="proof-item">
                <div class="num">₹2L+</div>
                <div class="lbl">Monthly Revenue<br>Generate</div>
            </div>
            <div class="proof-item">
                <div class="num">48hrs</div>
                <div class="lbl">Ads Live होती हैं</div>
            </div>
        </div>

        <a href="tel:+916388910079" class="cta-btn"><i class="fa-solid fa-rocket"></i> हाँ! मुझे भी Bookings चाहिए — Free Consult करें</a>
        <p class="cta-sub"><i class="fa-solid fa-lock"></i> 100% Free Consultation | No Hidden Charges | आज ही Book करें</p>
    </section>

    <!-- PAIN SECTION -->
    <section class="pain-section" id="pain">
        <div class="inner">
            <span class="section-tag"><i class="fa-solid fa-face-frown-open"></i> क्या आपके साथ भी यही हो रहा है?</span>
            <h2 class="section-title">यही <span class="hl">सच्चाई</span> है जो कोई नहीं बताता...</h2>
            <p class="section-desc">हर दिन आपके competitor की Taxi और Tour Packages की Bookings Google पर आ रही हैं — और
                आप अभी भी इंतज़ार कर रहे हैं。</p>
            <ul class="pain-list">
                <li><span class="icon"><i class="fa-solid fa-xmark"></i></span> आपने Justdial, OLX, या Facebook Ads पर पैसे बर्बाद किए — लेकिन सच्ची
                    Bookings नहीं आईं।</li>
                <li><span class="icon"><i class="fa-solid fa-xmark"></i></span> आपके पास अच्छी Taxi Service या Tour Package है, फिर भी Phone नहीं बजता।
                </li>
                <li><span class="icon"><i class="fa-solid fa-xmark"></i></span> किसी Agency को ₹15,000–₹30,000/month दिया पर Results Zero — सिर्फ
                    reports मिली।</li>
                <li><span class="icon"><i class="fa-solid fa-xmark"></i></span> आपके City का competitor जो आपसे छोटा है — वो Google पर ऊपर है और रोज़
                    10–20 Bookings ले रहा है।</li>
                <li><span class="icon"><i class="fa-solid fa-xmark"></i></span> Tourist Season आता है और जाता है — आपकी Seats खाली रह जाती हैं।</li>
            </ul>
        </div>
    </section>

    <!-- SOLUTION -->
    <section class="solution-section">
        <div class="inner">
            <span class="section-tag" style="background:var(--gold);color:var(--navy);"><i class="fa-solid fa-check"></i> हमारा Solution</span>
            <h2 class="section-title">MS Travel Marketing का <span class="hl">Google Ads System™</span></h2>
            <p class="section-desc">
                हम सिर्फ Ads नहीं चलाते — हम आपके Business के लिए एक पूरी <strong style="color:var(--gold);">Booking
                    Machine</strong> बनाते हैं। जो 24×7 काम करे।
            </p>
            <div class="cards-grid">
                <div class="card">
                    <div class="card-icon"><i class="fa-solid fa-bullseye"></i></div>
                    <h3>Hyper-Local Targeting</h3>
                    <p>आपके City, Airport, Railway Station के आस-पास के Customers को specifically Target करें — पैसा
                        waste ना हो।</p>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                    <h3>Call & Booking Ads</h3>
                    <p>Google पर "Taxi near me" या "Tour Package Delhi" search करते ही — सबसे पहले आपका नाम दिखे।</p>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fa-solid fa-chart-column"></i></div>
                    <h3>Real-Time Reporting</h3>
                    <p>हर रुपए का हिसाब — कितने Clicks, कितने Calls, कितनी Bookings। Daily Report आपके WhatsApp पर।</p>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fa-solid fa-trophy"></i></div>
                    <h3>ROI Guarantee</h3>
                    <p>हम 3x ROI की गारंटी देते हैं — अगर Result नहीं मिला तो अगले Month की Service Free।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ADDITIONAL CTA SECTION 1 -->
    <section class="section section-center" style="padding: 40px 20px; background: var(--off-white);">
        <h2 class="section-title" style="font-size: clamp(20px, 3vw, 28px); margin-bottom: 20px;">क्या आप भी अपनी Bookings बढ़ाना चाहते हैं?</h2>
        <a href="tel:+916388910079" class="cta-btn"><i class="fa-solid fa-rocket"></i> हाँ! मुझे भी Bookings चाहिए — Free Consult करें</a>
    </section>

    <!-- HOW IT WORKS -->
    <section class="steps-section">
        <div class="inner">
            <span class="section-tag"><i class="fa-solid fa-bolt"></i> इतना आसान है</span>
            <h2 class="section-title">सिर्फ 3 Steps में शुरू हो जाएगा आपका Google Ads</h2>
            <p class="section-desc">पहले दिन से ही Results देखना शुरू करें।</p>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-num">1</div>
                    <h3>Free Consultation</h3>
                    <p>हम आपके Business, City, और Competition को समझेंगे — बिल्कुल Free में 30-min Call पर।</p>
                </div>
                <div class="step-card">
                    <div class="step-num">2</div>
                    <h3>Custom Campaign Setup</h3>
                    <p>आपके Taxi / Tour Package के लिए Customized Google Ads Campaign 48 घंटे में Live।</p>
                </div>
                <div class="step-card">
                    <div class="step-num">3</div>
                    <h3>Bookings आना शुरू!</h3>
                    <p>Phone बजने लगेगा, WhatsApp पर Enquiries आने लगेंगी — और आप Bookings Confirm करते रहेंगे।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- RESULTS / PROOF -->
    <section class="proof-section">
        <div class="inner">
            <span class="section-tag"><i class="fa-solid fa-chart-line"></i> Real Results</span>
            <h2 class="section-title">हमारे Clients के <span style="color:var(--blue);">Actual Results</span></h2>
            <p class="section-desc">ये कोई झूठे वादे नहीं — ये हमारे Clients की Real Success Stories हैं।</p>
            <div class="results-grid">
                <div class="result-card">
                    <div class="big">₹4.2L</div>
                    <div class="lbl">Monthly Revenue<br>₹18,000 Ads Spend में</div>
                </div>
                <div class="result-card">
                    <div class="big">340%</div>
                    <div class="lbl">ROI — Rajasthan Tour<br>Package Client</div>
                </div>
                <div class="result-card">
                    <div class="big">85+</div>
                    <div class="lbl">Bookings/Month<br>Airport Taxi Client</div>
                </div>
                <div class="result-card">
                    <div class="big">48hr</div>
                    <div class="lbl">में Ads Live<br>और Calls शुरू</div>
                </div>
            </div>

            <!-- Google Ads Screenshots -->
            <div class="ads-results-wrapper">
                <div class="ads-results-header">
                    GOOGLE ADS RESULTS FOR TAXI & TOUR BUSINESS
                </div>
                <div class="ads-grid">
                    <div class="ads-card-img">
                        <img src="https://mstravelmarketing.in/wp-content/uploads/2026/04/aaaa.jpeg" alt="Google Ads Result 1">
                    </div>
                    <div class="ads-card-img">
                        <img src="https://mstravelmarketing.in/wp-content/uploads/2026/04/aaaaa.jpeg" alt="Google Ads Result 2">
                    </div>
                    <div class="ads-card-img">
                        <img src="https://mstravelmarketing.in/wp-content/uploads/2026/04/aaa.jpeg" alt="Google Ads Result 3">
                    </div>
                    <div class="ads-card-img">
                        <img src="https://mstravelmarketing.in/wp-content/uploads/2026/04/a.jpeg" alt="Google Ads Result 4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ADDITIONAL CTA SECTION 2 -->
    <section class="section section-center" style="padding: 40px 20px; background: var(--gray);">
        <h2 class="section-title" style="font-size: clamp(20px, 3vw, 28px); margin-bottom: 20px;">हमारे Clients की तरह आप भी Grow करें</h2>
        <a href="tel:+916388910079" class="cta-btn"><i class="fa-solid fa-phone"></i> अभी Free Consultation Book करें →</a>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testi-section">
        <div class="inner">
            <span class="section-tag"><i class="fa-solid fa-star"></i> Client Reviews</span>
            <h2 class="section-title">हमारे Clients क्या कहते हैं?</h2>
            <p class="section-desc">500+ Taxi और Tour Operators हमारे साथ Grow कर रहे हैं।</p>
            <div class="media-grid">
                <!-- YouTube Video 1 -->
                <a href="https://youtu.be/PSGgJ5CtZbk?si=ekkfZY7QhZ7QwOXr" class="media-card" target="_blank" title="Client Video Review">
                    <!-- YouTube Thumbnail -->
                    <img src="https://img.youtube.com/vi/PSGgJ5CtZbk/hqdefault.jpg" alt="Client Review Video">
                    <div class="play-btn"><i class="fa-brands fa-youtube"></i></div>
                    <div class="yt-label">Watch on <i class="fa-brands fa-youtube" style="color: #ff0000; font-size: 16px;"></i> YouTube</div>
                </a>

                <!-- YouTube Video 2 -->
                <a href="https://youtu.be/GSc4_ysC94Y?si=c0zjgezRjN-vNOuT" class="media-card" target="_blank" title="Client Video Review">
                    <!-- YouTube Thumbnail -->
                    <img src="https://img.youtube.com/vi/GSc4_ysC94Y/hqdefault.jpg" alt="Client Review Video">
                    <div class="play-btn"><i class="fa-brands fa-youtube"></i></div>
                    <div class="yt-label">Watch on <i class="fa-brands fa-youtube" style="color: #ff0000; font-size: 16px;"></i> YouTube</div>
                </a>

                <!-- WhatsApp Screenshot 1 -->
                <div class="media-card">
                    <img src="https://mstravelmarketing.in/wp-content/uploads/2026/02/c852383c-1210-4bd6-b005-63df7e7e7962.jpg" alt="Client WhatsApp Review">
                </div>

                <!-- WhatsApp Screenshot 2 -->
                <div class="media-card">
                    <img src="https://mstravelmarketing.in/wp-content/uploads/2026/02/42fb2c05-2d10-4bf0-92bf-6ba215ba566b.jpg" alt="Client WhatsApp Review">
                </div>

                <!-- WhatsApp Screenshot 3 -->
                <div class="media-card">
                    <img src="https://mstravelmarketing.in/wp-content/uploads/2026/02/515180f9-8af0-4640-af5a-e7e92f39c58f.jpg" alt="Client WhatsApp Review">
                </div>
            </div>
        </div>
    </section>

    <!-- OFFER BOX -->
    <section class="offer-section">
        <div class="inner">
            <span class="section-tag" style="background:var(--gold); color:var(--navy);"><i class="fa-solid fa-gift"></i> हमारा Package</span>
            <h2 class="section-title" style="color:#fff;">MS Travel Marketing का <span
                    style="color:var(--gold);">Complete Google Ads Package</span></h2>
            <p style="color:#9bb8e0; font-size:17px;">एक ही Package में सब कुछ — कोई Hidden Charge नहीं</p>
            <div class="offer-box">
                <div class="offer-title"><i class="fa-solid fa-rocket"></i> Travel Business Growth Package™</div>
                <ul class="offer-list">
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> Google Search Ads Setup — आपका Business "Taxi near me" search पर
                        दिखे</li>
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> Google Maps Optimization — Local searchers को सीधे आप तक लाएं</li>
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> Call & WhatsApp Extension Ads — एक Click में Customer Call करे</li>
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> Competitor Analysis & Keyword Research — आपके Competitors से आगे
                        रहें</li>
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> Monthly Performance Report — हर रुपए का हिसाब</li>
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> Dedicated Account Manager — WhatsApp पर 24/7 Support</li>
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> Landing Page Consultation — ज़्यादा Conversions के लिए</li>
                    <li><span class="tick"><i class="fa-solid fa-check"></i></span> 30-Day Free Optimization — पहले Month Ads Optimize करें बिना Extra
                        Cost</li>
                </ul>
                <div class="price-line">
                    <div class="original-price">Original Value: ₹25,000/month</div>
                    <div class="current-price">Free Consultation</div>
                </div>
                <p class="price-note">आज ही Book करें — हमारी Team 24 घंटे के अंदर Call करेगी</p>
                <a href="tel:+916388910079" class="cta-btn" style="display:inline-block;"><i class="fa-solid fa-phone"></i> हाँ! Free Consultation चाहिए</a>
                <div class="guarantee">
                    <div class="g-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <p><strong>Results Guarantee:</strong> अगर पहले 30 दिनों में आपको Qualified Leads नहीं मिलीं — तो हम
                        पूरा Refund देंगे। Zero Risk!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="form-section" id="form">
        <div class="inner">
            <span class="section-tag"><i class="fa-solid fa-phone"></i> अभी Contact करें</span>
            <h2 class="section-title">Free Consultation Book करें</h2>
            <p class="section-desc">अपनी Details भरें — हमारी Team 24 घंटे में आपको Call करेगी</p>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="d4643a3" title="ms trevel new form hindi"]'); ?>
                <p style="text-align:center; font-size:12px; color:var(--muted); margin-top:12px;"><i class="fa-solid fa-lock"></i> आपकी Information
                    100% Safe & Secure रहेगी। No Spam.</p>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <div class="inner">
            <span class="section-tag"><i class="fa-solid fa-circle-question"></i> अक्सर पूछे जाते सवाल</span>
            <h2 class="section-title">आपके मन में जो सवाल हैं...</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-q">Google Ads शुरू होने में कितना समय लगता है?</div>
                    <div class="faq-a">Consultation के बाद 48 घंटे के अंदर आपके Ads Live हो जाते हैं। कुछ मामलों में उसी
                        दिन भी शुरू हो जाते हैं।</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">Minimum Budget कितना होना चाहिए?</div>
                    <div class="faq-a">₹10,000/month से भी शुरू हो सकता है। लेकिन ज़्यादा Budget = ज़्यादा Reach =
                        ज़्यादा Bookings। हम आपके Budget के हिसाब से Best Strategy बनाते हैं।</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">क्या हम किसी भी City में काम कर सकते हैं?</div>
                    <div class="faq-a">हाँ! MS Travel Marketing पूरे India में काम करती है — Delhi, Mumbai, Jaipur,
                        Manali, Goa, Shimla — कहीं भी।</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">मुझे Technical Knowledge नहीं है — क्या Problem होगी?</div>
                    <div class="faq-a">बिल्कुल नहीं! हमारी पूरी Team आपके लिए सब कुछ Manage करती है। आपको सिर्फ Calls
                        Receive करनी हैं और Bookings Confirm करनी हैं।</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">Results की Guarantee है?</div>
                    <div class="faq-a">हाँ! अगर पहले 30 दिनों में Qualified Leads नहीं मिलीं — तो हम 100% Refund देते
                        हैं। Zero Risk।</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="final-cta">
        <h2>अभी और इंतज़ार मत करिए!</h2>
        <p>हर दिन जो आप रुकते हैं — आपका Competitor आगे बढ़ता है। आज ही First Step लें।</p>
        <a href="tel:+916388910079" class="cta-btn-dark"><i class="fa-solid fa-phone"></i> अभी Free Consultation Book करें →</a>
    </section>

    <!-- FOOTER -->
    <footer>
        <p><span>MS Travel Marketing</span> — Google Ads Specialists for Taxi & Tour Businesses</p>
        <p style="margin-top:6px;"><i class="fa-solid fa-envelope"></i> info@mstravelmarketing.com &nbsp;|&nbsp; <i class="fa-solid fa-location-dot"></i> India
        </p>
        <p style="margin-top:10px; font-size:12px;">© 2025 MS Travel Marketing. All Rights Reserved. | Privacy Policy |
            Terms of Service</p>
    </footer>

    <!-- STICKY BOTTOM CTA -->
    <div class="sticky-cta">
        <p><i class="fa-solid fa-rocket"></i> Free Consultation — आज ही Book करें!</p>
        <a href="tel:+916388910079">अभी Apply करें →</a>
    </div>

    <!-- FLOATING CALL BUTTON -->
    <a href="tel:+916388910079" class="floating-call-btn" aria-label="Call us">
        <i class="fa-solid fa-phone"></i>
    </a>



    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // FAQ toggle
        document.querySelectorAll('.faq-q').forEach(q => {
            const a = q.nextElementSibling;
            a.style.display = 'none';
            q.addEventListener('click', () => {
                const open = a.style.display === 'block';
                document.querySelectorAll('.faq-a').forEach(el => el.style.display = 'none');
                document.querySelectorAll('.faq-q').forEach(el => el.style.removeProperty('background'));
                if (!open) {
                    a.style.display = 'block';
                    q.style.background = '#e8f0fe';
                }
            });
        });

        // Scroll animation
        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.style.opacity = 1;
            });
        }, {
            threshold: 0.1
        });
        document.querySelectorAll('.card, .step-card, .result-card, .ads-results-wrapper, .media-card').forEach(el => {
            el.style.opacity = 0;
            el.style.transition = 'opacity 0.6s ease';
            observer.observe(el);
        });

        // Hide sticky when near footer
        const stickyCta = document.querySelector('.sticky-cta');
        window.addEventListener('scroll', () => {
            const footer = document.querySelector('footer');
            const footerTop = footer.getBoundingClientRect().top;
            stickyCta.style.display = footerTop < window.innerHeight ? 'none' : 'flex';
        });
    </script>
<?php get_footer(); ?>