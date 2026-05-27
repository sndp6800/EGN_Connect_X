<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGN Education Awards – EGN Connect X Mumbai 2026</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://egnindia.com/images/EGN.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ─── Global design system ─── -->
    <link rel="stylesheet" href="css/EGN_ConnectX.css">

    <!-- ─── Awards page–specific styles ONLY ─── -->
    <style>
        /* ═══════════════════════════════════════════════════════
           NOMINATION MODAL
        ═══════════════════════════════════════════════════════ */
        .modal-overlay {
            opacity: 0; pointer-events: none;
            transition: opacity var(--trans-slow);
            position: fixed; inset: 0; z-index: 9999;
            background: rgba(0,0,0,0.65); backdrop-filter: blur(6px);
            display: flex; justify-content: center; align-items: center; padding: 20px;
        }
        .modal-overlay.active { opacity: 1; pointer-events: auto; }

        .modal-content {
            background: var(--bg); border-radius: 20px; padding: 36px;
            width: 100%; max-width: 680px; max-height: 90vh; overflow-y: auto;
            position: relative; box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            transform: translateY(20px) scale(0.98);
            transition: transform 0.35s cubic-bezier(0.2,0.8,0.2,1);
            scrollbar-width: thin; scrollbar-color: var(--brand-light) transparent;
        }
        .modal-overlay.active .modal-content { transform: translateY(0) scale(1); }
        .modal-content::-webkit-scrollbar { width: 6px; }
        .modal-content::-webkit-scrollbar-thumb { background: var(--brand-mid); border-radius: 6px; }

        .modal-close {
            position: absolute; top: 16px; right: 20px; width: 36px; height: 36px;
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%; background: #f0f0f0; color: #5a5a5a;
            font-size: 24px; border: none; cursor: pointer;
            transition: var(--trans-fast); line-height: 1; z-index: 10;
        }
        .modal-close:hover {
            background: rgba(189,22,22,0.15); color: var(--brand); transform: scale(1.05);
        }

        /* ── Form layout ── */
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .form-col-full { grid-column: span 2; }

        .nom-form-control { display: flex; flex-direction: column; gap: 8px; text-align: left; }
        .nom-form-control label.field-title {
            font-size: 0.85rem; font-weight: 600; color: var(--text-dark); margin-bottom: 2px;
        }

        .nom-input, .nom-textarea {
            width: 100%; padding: 12px 14px;
            border: 1.5px solid rgba(0,0,0,0.12); border-radius: var(--radius-sm);
            font-family: "Poppins", sans-serif; font-size: 0.9rem;
            outline: none; transition: all var(--trans-base);
            background: #fafafa; color: var(--text-dark);
        }
        .nom-input:focus, .nom-textarea:focus {
            border-color: var(--brand); background: #fff;
            box-shadow: 0 0 0 3px var(--brand-light);
        }

        /* ── Radio cards ── */
        .modern-radio-group {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
            gap: 12px; margin-top: 2px;
        }
        .modern-radio { position: relative; }
        .modern-radio input { display: none; }
        .radio-card {
            display: flex; align-items: center; justify-content: center; text-align: center;
            padding: 14px 12px; border: 1.5px solid rgba(0,0,0,0.12);
            border-radius: var(--radius-md); font-size: 0.82rem; font-weight: 600;
            color: var(--text-gray); cursor: pointer; background: #fafafa;
            transition: all var(--trans-base); user-select: none;
            height: 100%; line-height: 1.3;
        }
        .radio-card:hover {
            border-color: rgba(189,22,22,0.4); background: #fff; transform: translateY(-1px);
        }
        .modern-radio input:checked + .radio-card {
            border-color: var(--brand); background: var(--brand-light);
            color: var(--brand); box-shadow: 0 4px 14px rgba(189,22,22,0.14);
            transform: translateY(-2px);
        }

        .cat-rule-box {
            display: none; background: rgba(189,22,22,0.05); padding: 10px 16px;
            border-left: 3px solid var(--brand); margin-bottom: 12px;
            font-size: 0.88rem; color: var(--brand); font-weight: 600; border-radius: 4px;
        }

        /* ── Checkbox chips ── */
        .modern-checkbox-group { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 2px; }
        .modern-checkbox { position: relative; }
        .modern-checkbox input { display: none; }
        .checkbox-chip {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 8px 16px 8px 12px; border: 1.5px solid rgba(0,0,0,0.12);
            border-radius: var(--radius-pill); font-size: 0.82rem; font-weight: 500;
            color: var(--text-gray); cursor: pointer; background: #fff;
            transition: all var(--trans-base); user-select: none;
        }
        .checkbox-icon {
            width: 18px; height: 18px; border-radius: 5px; border: 1.5px solid #ccc;
            display: flex; align-items: center; justify-content: center;
            transition: all 0.2s ease; background: #fff; flex-shrink: 0;
        }
        .checkbox-icon::after {
            content: ''; width: 4px; height: 9px; border: solid white;
            border-width: 0 2px 2px 0; transform: rotate(45deg) scale(0);
            transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-top: -2px;
        }
        .checkbox-chip:hover {
            border-color: rgba(189,22,22,0.4); box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transform: translateY(-1px);
        }
        .modern-checkbox input:checked + .checkbox-chip {
            background: #fff; border-color: var(--brand); color: var(--text-dark);
            box-shadow: 0 4px 12px rgba(189,22,22,0.08); transform: translateY(-1px);
        }
        .modern-checkbox input:checked + .checkbox-chip .checkbox-icon {
            background: var(--brand); border-color: var(--brand);
        }
        .modern-checkbox input:checked + .checkbox-chip .checkbox-icon::after {
            transform: rotate(45deg) scale(1);
        }

        #subcatWrap {
            max-height: 0; opacity: 0; overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.4s ease, margin 0.3s ease;
            margin: 0; padding: 0;
        }
        #subcatWrap.visible {
            max-height: 2500px; opacity: 1; overflow: visible;
            margin-top: 6px; padding-bottom: 6px;
        }

        /* ── File upload ── */
        .file-upload-wrap {
            position: relative; overflow: hidden; cursor: pointer; width: 100%;
            border: 2px dashed rgba(189,22,22,0.3); border-radius: var(--radius-sm);
            text-align: center; transition: all var(--trans-base);
            background: var(--brand-light); padding: 24px;
        }
        .file-upload-wrap:hover { border-color: var(--brand); background: rgba(189,22,22,0.12); }
        .nom-file {
            position: absolute; left: 0; top: 0; width: 100%; height: 100%;
            opacity: 0; cursor: pointer; z-index: 10;
        }
        .file-dummy {
            display: flex; flex-direction: column; align-items: center; gap: 8px;
            pointer-events: none; color: var(--brand);
        }
        .file-dummy svg { width: 26px; height: 26px; fill: currentColor; }
        .file-dummy span { font-size: 0.85rem; font-weight: 500; }
        .file-dummy .file-names-label {
            font-size: 0.75rem; color: #5a5a5a; word-break: break-all; margin-top: 4px;
        }

        /* ── Modal buttons ── */
        .modal-submit-btn {
            margin-top: 30px; width: 100%; background: var(--brand); color: #fff;
            padding: 14px; font-family: "Poppins", sans-serif;
            font-size: 1rem; font-weight: 700; border-radius: var(--radius-pill);
            border: none; cursor: pointer; transition: var(--trans-base);
            box-shadow: 0 4px 16px rgba(189,22,22,0.28);
        }
        .modal-submit-btn:hover {
            background: var(--brand-dark); box-shadow: 0 8px 24px rgba(189,22,22,0.40);
            transform: translateY(-2px);
        }
        .modal-action-btn-outline {
            display: inline-flex; justify-content: center; align-items: center;
            height: 48px; padding: 0 28px; border-radius: var(--radius-pill);
            font-family: "Poppins", sans-serif; font-size: 0.9rem; font-weight: 600;
            cursor: pointer; text-decoration: none;
            color: var(--brand); border: 2px solid var(--brand); background: transparent;
            transition: all var(--trans-base);
        }
        .modal-action-btn-outline:hover { background: var(--brand-light); transform: translateY(-2px); }

        #closeSuccessBtn {
            margin-top: 0; width: auto; height: 48px; padding: 0 40px;
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: var(--radius-pill); font-family: "Poppins", sans-serif;
        }

        #modalSuccessWrap, #modalFormWrap { transition: opacity var(--trans-slow); }
        .hide-section { display: none !important; }

        .success-details-card {
            background: #fafafa; border: 1.5px solid rgba(189,22,22,0.15);
            border-radius: var(--radius-md); padding: 24px;
            margin: 0 auto 36px; max-width: 440px; color: var(--text-dark);
        }

        /* ═══════════════════════════════════════════════════════
           PRICING TABLE
        ═══════════════════════════════════════════════════════ */
        .pricing-block {
            max-width: 800px; margin: 70px auto 0;
            position: relative; z-index: 1; padding: 0 20px;
        }
        .pricing-block__header { text-align: center; margin-bottom: 30px; }
        .pricing-block__header h3 {
            font-size: clamp(1.8rem, 3vw, 2.4rem); font-weight: 800;
            color: var(--text-dark); margin: 0;
        }
        .pricing-block__card {
            background: #fff; border-radius: var(--radius-md);
            padding: 24px 32px; box-shadow: var(--shadow-md);
            border: 1px solid rgba(0,0,0,0.06); overflow-x: auto;
        }
        .pricing-table {
            width: 100%; border-collapse: collapse; min-width: 480px; text-align: center;
        }
        .pricing-table th {
            padding: 16px 12px; font-size: 0.85rem; font-weight: 700;
            color: var(--text-gray); text-transform: uppercase; letter-spacing: 1px;
            border-bottom: 2px solid var(--brand-light);
        }
        .pricing-table td {
            padding: 18px 12px; font-size: 1rem; color: var(--text-dark);
            font-weight: 600; border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .pricing-table tr:last-child td { border-bottom: none; }
        .pricing-table--main td:nth-last-child(2) { font-weight: 500; color: var(--text-gray); }
        .pricing-table--main td:last-child { font-weight: 700; color: var(--brand); font-size: 1.05rem; }
        .pricing-table--pass { margin-top: 32px; }
        .pricing-table--pass th:last-child { color: var(--brand); }

        .pricing-note {
            text-align: center; margin-top: 24px;
            font-size: 0.9rem; font-weight: 600; color: var(--brand);
        }

        .page-content {
            padding-top: var(--nav-height);
            background: #f7f7f7;
        }
        .section--white { background: #ffffff; }
        .section { position: relative; overflow: hidden; }
        .section__inner {
            width: min(1200px, calc(100% - 40px));
            margin: 0 auto;
            padding: 0 0 60px;
            position: relative;
        }
        .split-intro {
            display: grid;
            grid-template-columns: minmax(280px, 1fr) minmax(320px, 1.1fr);
            gap: 32px;
            align-items: center;
            margin-bottom: 42px;
        }
        .split-intro__media { aspect-ratio: 9 / 16; max-width: 340px; width: 100%; position: relative; overflow: hidden; border-radius: 28px; }
        .split-intro__media video {
            width: 100%; height: 100%; object-fit: cover;
            border-radius: 28px;
            display: block;
        }
        .split-intro__text { max-width: 700px; }
        .eyebrow-tag {
            display: inline-flex;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            color: var(--brand);
            margin-bottom: 18px;
        }
        .split-intro__title {
            font-size: clamp(2.6rem, 4vw, 4rem);
            margin: 0 0 18px;
            line-height: 1.02;
            color: var(--text-dark);
        }
        .split-intro__body {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--text-gray);
            margin: 0;
        }
        .stats-row {
            display: flex;
            flex-wrap: wrap;
            gap: 18px 28px;
            align-items: center;
            margin-top: 28px;
        }
        .stat-item {
            display: flex;
            flex-direction: column;
            gap: 6px;
            min-width: 130px;
        }
        .stat-item__num {
            font-size: clamp(2rem, 3vw, 2.6rem);
            font-weight: 800;
            color: var(--brand);
            line-height: 1;
        }
        .stat-item__label {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-dark);
        }
        .stat-divider {
            width: 1px;
            min-height: 42px;
            background: rgba(0,0,0,0.08);
            margin: 0 6px;
        }
        .section-header { margin-bottom: 46px; }
        .section-header__eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 0.82rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--brand);
            margin-bottom: 16px;
        }
        .section-header__eyebrow span {
            display: block;
            width: 28px;
            height: 1px;
            background: currentColor;
        }
        .section-header__title {
            font-size: clamp(2.2rem, 3.5vw, 3.3rem);
            margin: 0 0 12px;
            color: var(--text-dark);
            line-height: 1.05;
        }
        .section-header__sub {
            max-width: 760px;
            margin: 0 auto;
            color: var(--text-gray);
            font-size: 1rem;
            line-height: 1.75;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
            margin-top: 34px;
        }
        .award-card {
            position: relative;
            background: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 580px;
            box-shadow: 0 24px 80px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.06);
        }
        .card-img-wrap { min-height: 280px; overflow: hidden; }
        .award-card-img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .award-card-body {
            padding: 28px 28px 32px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            justify-content: space-between;
        }
        .award-card-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin: 0;
        }
        .award-card-desc {
            color: var(--text-gray);
            line-height: 1.8;
            margin: 0;
        }
        .card-rule {
            border: 0;
            border-top: 1px solid rgba(0,0,0,0.08);
            margin: 0;
        }
        .card-cta { display: flex; justify-content: flex-start; }
        .btn-nominate {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 22px;
            border-radius: 999px;
            background: var(--brand);
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .btn-nominate:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 40px rgba(213,16,36,0.18);
        }
        .nom-arrow { display:inline-flex; align-items:center; justify-content:center; width:24px; height:24px; }
        .highlight { color: var(--brand); }
        .bg-tri { position: absolute; pointer-events: none; opacity: 0.16; }
        .bg-tri-1 { top: -40px; left: -20px; width: 340px; height: 340px; }
        .bg-tri-2 { top: 90px; right: -10px; width: 240px; height: 240px; }
        .bg-tri-3 { bottom: 40px; left: 50%; transform: translateX(-50%); width: 200px; height: 200px; }

        /* ═══════════════════════════════════════════════════════
           ANIMATED TRIANGLES ON AWARD CARDS
        ═══════════════════════════════════════════════════════ */
        .card-double-triangle {
            position: absolute; top: calc(240px - 70px + 1px); right: -12px;
            width: 140px; height: 140px; z-index: 20; pointer-events: none;
        }
        .card-double-triangle svg { width: 100%; height: 100%; display: block; overflow: visible; }

        .tri-back  { animation: triIdle 3.8s ease-in-out infinite; }
        .tri-front { animation: triIdleFront 3.8s ease-in-out 0.55s infinite; }

        @keyframes triIdle {
            0%,100% { transform: translate(32px,34px) rotate(-9deg) translateY(0px); }
            50%      { transform: translate(32px,34px) rotate(-9deg) translateY(-7px); }
        }
        @keyframes triIdleFront {
            0%,100% { transform: translate(1px,1px) rotate(-8deg) translateY(0px); }
            50%      { transform: translate(1px,1px) rotate(-8deg) translateY(-5px); }
        }

        .award-card:hover .tri-back  { animation: triHoverBack  0.65s ease-in-out infinite alternate; }
        .award-card:hover .tri-front { animation: triHoverFront 0.65s ease-in-out 0.18s infinite alternate; }

        @keyframes triHoverBack {
            from { transform: translate(32px,34px) rotate(-9deg) scale(1); filter: none; }
            to   { transform: translate(32px,28px) rotate(-9deg) scale(1.12); filter: drop-shadow(0 8px 18px rgba(189,22,22,0.60)); }
        }
        @keyframes triHoverFront {
            from { transform: translate(1px,1px) rotate(-8deg) scale(1); filter: none; }
            to   { transform: translate(1px,-5px) rotate(-8deg) scale(1.12); filter: drop-shadow(0 8px 22px rgba(255,74,26,0.55)); }
        }

        /* ═══════════════════════════════════════════════════════
           RESPONSIVE — awards-page overrides only
        ═══════════════════════════════════════════════ */
        @media (max-width: 640px) {
            .pricing-block__card   { padding: 18px; border-radius: var(--radius-md); }
            .pricing-table th,
            .pricing-table td      { padding: 12px 10px; font-size: 0.82rem; }
            .pricing-block__header h3 { font-size: 1.6rem; }

            .modal-content         { padding: 32px 20px 24px; }
            .modal-close           { top: 12px; right: 14px; width: 32px; height: 32px; font-size: 20px; }
            .form-grid             { grid-template-columns: 1fr; gap: 16px; }
            .form-col-full         { grid-column: span 1; }
            .modern-radio-group    { grid-template-columns: repeat(2, 1fr); gap: 10px; }
            .checkbox-chip         { font-size: 0.78rem; padding: 8px 12px 8px 10px; }
            .modal-action-buttons  { flex-direction: column; }
            .modal-action-buttons button { width: 100% !important; margin: 0 !important; }
            #closeSuccessBtn       { margin-top: 10px !important; }
        }
    </style>
</head>
<body>

    <!-- ============================= -->
    <!-- HEADER INCLUDE                -->
    <!-- ============================= -->
    <?php include 'EGN_ConnectX_header.php'; ?>

    <main class="page-content">

        <!-- ═══════════════════════ AWARDS SECTION ═══════════════════════ -->
        <section class="section section--white" id="parallel-events">

            <!-- Decorative BG triangles — global .bg-tri classes from stylesheet -->
            <div class="bg-tri bg-tri-1"><svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg"><polygon points="200,0 400,400 0,400" fill="#BD1616"/></svg></div>
            <div class="bg-tri bg-tri-2"><svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg"><polygon points="150,0 300,300 0,300" fill="#BD1616"/></svg></div>
            <div class="bg-tri bg-tri-3"><svg viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg"><polygon points="80,0 160,160 0,160" fill="#BD1616"/></svg></div>

            <div class="section__inner">

                <!-- ─── Split intro ─── -->
                <div class="split-intro">

                    <div class="split-intro__media reveal">
                        <video autoplay muted loop playsinline>
                            <source src="Videos/Awards.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="split-intro__text reveal" style="transition-delay:0.18s;">
                        <span class="eyebrow-tag">EGN Connect X · Mumbai 2026</span>
                        <h2 class="split-intro__title"><span class="highlight">EGN</span> Education Awards</h2>
                        <p class="split-intro__body">The EGN Connect X Expo – EGN Awards honor educators, institutions, and organizations making a remarkable impact in the education ecosystem. These awards recognize <strong>excellence, innovation, leadership, and dedication</strong> across multiple education sectors.</p>

                        <div class="stats-row">
                            <div class="stat-item">
                                <span class="stat-item__num" data-count="8" data-suffix="+">8+</span>
                                <span class="stat-item__label">Award Categories</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <span class="stat-item__num" data-count="500" data-suffix="+">500+</span>
                                <span class="stat-item__label">Nominees</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <span class="stat-item__num">2026</span>
                                <span class="stat-item__label">Mumbai Edition</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ─── Section header ─── -->
                <div class="section-header reveal">
                    <div class="section-header__eyebrow">
                        <span></span><em>Award Categories</em><span></span>
                    </div>
                    <h3 class="section-header__title">Celebrating <span style="color:var(--brand);">Excellence</span> Across Education</h3>
                    <p class="section-header__sub">The EGN Awards honors Education Institutions and Edtech Brands making a remarkable impact in the education ecosystem.</p>
                </div>

                <!-- ─── Award cards ─── -->
                <div class="card-grid">

                    <!-- Card: Education Awards -->
                    <div class="award-card">
                        <div class="card-img-wrap">
                            <img class="award-card-img" src="Images/Educational_Award.jpg" alt="Education Awards">
                        </div>
                        <!-- Triangle — DO NOT MODIFY -->
                        <div class="card-double-triangle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140" overflow="visible">
                                <polygon class="tri-back"  points="5,5 94,5 50,78"     fill="#C82200" opacity="0.60"/>
                                <polygon class="tri-front" points="38,55 127,55 82,128" fill="#FF4A1A" opacity="0.70"/>
                            </svg>
                        </div>
                        <div class="award-card-body">
                            <h3 class="award-card-title">Education Awards</h3>
                            <p class="award-card-desc">Recognizing excellence across schools, institutions, and educators driving innovation and impact in the education ecosystem.</p>
                            <hr class="card-rule">
                            <div class="card-cta">
                                <a href="#" class="btn-nominate" data-type="education">
                                    Nominate Now
                                    <span class="nom-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Card: Corporate Awards -->
                    <div class="award-card">
                        <div class="card-img-wrap">
                            <img class="award-card-img" src="Images/Corporate_Awards.jpg" alt="Corporate Awards">
                        </div>
                        <!-- Triangle — DO NOT MODIFY -->
                        <div class="card-double-triangle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140" overflow="visible">
                                <polygon class="tri-back"  points="5,5 94,5 50,78"     fill="#C82200" opacity="0.60"/>
                                <polygon class="tri-front" points="38,55 127,55 82,128" fill="#FF4A1A" opacity="0.70"/>
                            </svg>
                        </div>
                        <div class="award-card-body">
                            <h3 class="award-card-title">Corporate Awards</h3>
                            <p class="award-card-desc">Honoring organizations, solution providers, and innovators transforming education through technology, and services.</p>
                            <hr class="card-rule">
                            <div class="card-cta">
                                <a href="#" class="btn-nominate" data-type="corporate">
                                    Nominate Now
                                    <span class="nom-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div><!-- /.card-grid -->

                <!-- ─── Pricing block ─── -->
                <div class="pricing-block reveal">
                    <div class="pricing-block__header">
                        <h3>Awards Nomination Fees</h3>
                    </div>
                    <div class="pricing-block__card">

                        <!-- Main pricing table -->
                        <table class="pricing-table pricing-table--main">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No. of Nominations</th>
                                    <th>*</th>
                                    <th>Price per Category (₹)</th>
                                    <th>Total Price (₹)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="4" style="text-align:left;vertical-align:middle;border-right:1px solid rgba(0,0,0,0.05);padding-right:15px;font-weight:600;color:var(--text-gray);line-height:1.4;max-width:160px;">Max Categories can be applied is 4</td>
                                    <td>1</td><td>*</td><td>10,000</td><td>10,000</td>
                                </tr>
                                <tr><td>2</td><td>*</td><td>10,000</td><td>18,000</td></tr>
                                <tr><td>3</td><td>*</td><td>10,000</td><td>27,000</td></tr>
                                <tr><td>4</td><td>*</td><td>10,000</td><td>36,000</td></tr>
                            </tbody>
                        </table>

                        <!-- Pass pricing table -->
                        <table class="pricing-table pricing-table--pass">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Includes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Additional Per Person Pass</td>
                                    <td>₹5,000 + Taxes</td>
                                    <td>Dinner + Cocktails + Event Access</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="pricing-note" style="margin-bottom:8px;">Note: Only 1 official is allowed per nomination</p>
                    <p class="pricing-note" style="margin-top:0;">Note: 18% GST will be charged extra.</p>
                </div><!-- /.pricing-block -->

            </div><!-- /.section__inner -->
        </section>

    </main>


    <!-- ═══════════════════════ NOMINATION MODAL ═══════════════════════ -->
    <div class="modal-overlay" id="nominationModal">
        <div class="modal-content">
            <button id="closeModalBtn" class="modal-close">&times;</button>

            <!-- Form view -->
            <div id="modalFormWrap">
                <h3 id="modalTitle" style="font-size:1.8rem;font-weight:800;color:var(--text-dark);margin:0 0 4px 0;">Nominate for Education Awards</h3>
                <p style="font-size:0.9rem;color:var(--text-gray);margin:0 0 28px 0;">Submit the required details for the selected category.</p>

                <form id="nominationForm">
                    <div class="form-grid">

                        <div class="nom-form-control form-col-full">
                            <label class="field-title">Awards Category (Select One) *</label>
                            <div class="modern-radio-group" id="primaryCategoryContainer"></div>
                        </div>

                        <div class="nom-form-control form-col-full" id="subcatWrap">
                            <label class="field-title">Select Award Type(s) *</label>
                            <div class="cat-rule-box" id="categoryRuleMsg"></div>
                            <div class="modern-checkbox-group" id="subCategoryContainer"></div>
                        </div>

                        <div class="nom-form-control">
                            <label class="field-title">Full Name *</label>
                            <input type="text" class="nom-input" required placeholder="Enter full name">
                        </div>
                        <div class="nom-form-control">
                            <label class="field-title">Designation *</label>
                            <input type="text" class="nom-input" required placeholder="Enter your designation">
                        </div>
                        <div class="nom-form-control">
                            <label class="field-title">Phone Number *</label>
                            <input type="tel" class="nom-input" required placeholder="Mobile/Phone Number">
                        </div>
                        <div class="nom-form-control">
                            <label class="field-title">Email Address *</label>
                            <input type="email" class="nom-input" required placeholder="example@mail.com">
                        </div>
                        <div class="nom-form-control form-col-full">
                            <label class="field-title">Institute/Organization Name *</label>
                            <input type="text" class="nom-input" required placeholder="Name of school or organization">
                        </div>
                        <div class="nom-form-control">
                            <label class="field-title">City *</label>
                            <input type="text" class="nom-input" required placeholder="Enter city name">
                        </div>
                        <div class="nom-form-control">
                            <label class="field-title">State *</label>
                            <input type="text" class="nom-input" required placeholder="Enter state name">
                        </div>
                        <div class="nom-form-control form-col-full">
                            <label class="field-title">School Board/Affiliation <span style="font-size:0.78rem;font-weight:400;color:#888;">(skip if not applicable)</span></label>
                            <input type="text" class="nom-input" placeholder="CBSE, ICSE, IB, State Board, State University etc.">
                        </div>
                        <div class="nom-form-control">
                            <label class="field-title">LinkedIn Profile URL</label>
                            <input type="url" class="nom-input" placeholder="https://linkedin.com/in/...">
                        </div>
                        <div class="nom-form-control">
                            <label class="field-title">Instagram / FB Profile URL</label>
                            <input type="url" class="nom-input" placeholder="https://instagram.com/...">
                        </div>
                        <div class="nom-form-control form-col-full">
                            <label class="field-title">Upload Documents</label>
                            <div class="file-upload-wrap">
                                <input type="file" id="nomFile" class="nom-file" multiple required>
                                <div class="file-dummy">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64z"/></svg>
                                    <span id="uploadStatusText">Click or drag files here to upload</span>
                                    <span class="file-names-label" id="fileNamesDisplay"></span>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.form-grid -->
                    <button type="submit" class="modal-submit-btn" id="finalSubmitBtn">Submit Nomination</button>
                </form>
            </div><!-- /#modalFormWrap -->

            <!-- Success view -->
            <div id="modalSuccessWrap" class="hide-section" style="text-align:center;padding:30px 10px;">
                <img src="images/EGN/EGN_main.jpg" alt="EGN Connect X" style="height:75px;margin-bottom:24px;object-fit:contain;">
                <h3 style="font-size:1.6rem;font-weight:800;color:var(--text-dark);margin:0 0 16px 0;">Review Selection Details</h3>
                <div id="successSummaryContent" class="success-details-card"></div>
                <div class="modal-action-buttons" style="display:flex;gap:16px;justify-content:center;align-items:center;">
                    <button type="button" id="submitAnotherBtn" class="modal-action-btn-outline">Edit or Re-Submit Response</button>
                    <button type="button" id="closeSuccessBtn" class="modal-submit-btn">Done</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-overlay -->

    <!-- ============================= -->
    <!-- FOOTER INCLUDE                -->
    <!-- ============================= -->
    <?php include 'EGN_ConnectX_footer.php'; ?>

    <!-- ============================= -->
    <!-- SCRIPTS                       -->
    <!-- ============================= -->
    <script>
    /* ── Nav utilities ── */
    document.getElementById('menuToggle')?.addEventListener('click', () => {
        document.getElementById('navLinks')?.classList.toggle('active');
    });
    window.addEventListener('scroll', () => {
        document.getElementById('navbar')?.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });

    /* ── Scroll reveal (shared logic) ── */
    const revObs = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.13 });
    document.querySelectorAll('.reveal').forEach(el => revObs.observe(el));

    /* ── Card entrance ── */
    const cardObs = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.10, rootMargin: '0px 0px -30px 0px' });
    document.querySelectorAll('.award-card').forEach(el => cardObs.observe(el));

    /* ── Modal ── */
    document.addEventListener("DOMContentLoaded", () => {
        const modal                = document.getElementById('nominationModal');
        const nominateButtons      = document.querySelectorAll('.btn-nominate');
        const form                 = document.getElementById('nominationForm');
        const primaryContainer     = document.getElementById('primaryCategoryContainer');
        const subCategoryContainer = document.getElementById('subCategoryContainer');
        const subcatWrap           = document.getElementById('subcatWrap');
        const categoryRuleMsg      = document.getElementById('categoryRuleMsg');
        const modalFormWrap        = document.getElementById('modalFormWrap');
        const modalSuccessWrap     = document.getElementById('modalSuccessWrap');
        const modalTitle           = document.getElementById('modalTitle');
        const fileInput            = document.getElementById('nomFile');
        const closeModalBtn        = document.getElementById('closeModalBtn');
        const closeSuccessBtn      = document.getElementById('closeSuccessBtn');
        const submitAnotherBtn     = document.getElementById('submitAnotherBtn');

        const restrictedCategoriesLimit = ["Early Learning", "K12", "Higher Education"];

        const rootCategoriesData = {
            education: ["Early Learning", "K12", "Higher Education"],
            corporate: ["Education Suppliers", "Education Architects & Consultants"]
        };

        const dependentSubcategoriesMap = {
            "Early Learning":["Preschool of the Year","Emerging Preschool of the Year","Excellence in Early Childhood Education","Early Learning Pedagogy Innovation Award","Child-Centric Teaching Practice Award","Inclusive Early Learning Award","Early Learning Tools & Methods Innovation Award","School Readiness & Transition Program Award","Regional Impact in Early Education Award"],
            "K12":["School of the Year","Emerging School of the Year","Best Future Ready School","Best Global Education School","Excellence in STEM Education","Best Infrastructure Award","AI Integration in School Award","Excellence in Student Wellbeing","Excellence in Sports Development","Best NEP Aligned Schooling","Excellence in Transformational Learning","Premier Standalone School","Excellence in Chain of Schools"],
            "Higher Education":["Higher Education Institute of the Year","Emerging Higher Education Institute of the Year","Excellence in Research and Innovation","Industry–Academia Collaboration Award","Excellence in Internationalisation & Global Engagement","Skill Development & Employability Award","Interdisciplinary Research Impact Award","Best Infrastructure Award","Alumni Relations and Engagement Award","NEP Implementation Leadership Award","Student Innovation and Project-Based Learning Award","Campus Safety and Regulatory Compliance Award","Library Digital Transformation and Knowledge System Award"],
            "Education Architects & Consultants":["K12 Campus Design of the Year","Higher Education Campus Design of the Year","Innovative Learning Space Design Award","Sustainable Campus Architecture Award","Classroom Design Innovation Award","Future-Ready Campus Design Award","Excellence in EdTech-Enabled Infrastructure","Student Housing & Hostel Design Award","Architectural Firm of the Year in Education Space","Emerging Architectural Firm of the Year","Sports Infrastructure Design Award","Institutional Interior Design Award"],
            "Education Suppliers":["Professional Development Programs for Teachers and Schools","Innovation in Education Award","Excellence in Education Technology Award","Best Education Service Provider Award","Best Product to Promote STEM / Robotics / Coding Award","Primary Resource / Equipment Supplier of the Year Award","Best Education Hardware Solution Award","Best Product/Services to Support Education Infrastructure Award","Best Product to Boost Extracurricular in Education Award","Best Special Education Solution Award","Best Education Software Solution Award","Best Education Consulting Firm Award","Best Product for Cognitive Skills Award","Education Platform of the Year Award","Best Education Content Provider Award","Education Entrepreneur of the Year Award","Education Industry Leader of the Year Award","Best Product for Recreation in Education Award","Best Skilling Company of the Year Award","Best Use of Digital Learning in the Classroom Award","Best Product to Promote Arts, Music and Drama in the Classroom Award"]
        };

        function calculatePrice(count) {
            const prices = [0, 10000, 18000, 27000, 36000];
            if (count > 4) return 36000 + ((count - 4) * 9000);
            return prices[count] || 0;
        }
        function getSelectedCategories() {
            return Array.from(subCategoryContainer.querySelectorAll('input[name="awardSubtype"]:checked')).map(el => el.value);
        }

        const resetModalFormUI = () => {
            form.reset();
            fileInput.dispatchEvent(new Event('change'));
            subCategoryContainer.innerHTML = "";
            categoryRuleMsg.style.display = 'none';
            subcatWrap.classList.remove('visible');
        };

        const displayFormView = () => {
            modalSuccessWrap.classList.add('hide-section');
            modalFormWrap.classList.remove('hide-section');
        };

        const renderPrimaryCategories = (awardContext) => {
            const list = rootCategoriesData[awardContext] || rootCategoriesData.education;
            primaryContainer.innerHTML = list.map(cat => `
                <label class="modern-radio">
                    <input type="radio" name="primaryCat" value="${cat}" required>
                    <div class="radio-card">${cat}</div>
                </label>`).join('');
        };

        primaryContainer.addEventListener('change', (e) => {
            if (e.target?.name !== 'primaryCat') return;
            const sel = e.target.value;
            categoryRuleMsg.style.display = restrictedCategoriesLimit.includes(sel) ? 'block' : 'none';
            if (restrictedCategoriesLimit.includes(sel)) categoryRuleMsg.innerHTML = "You must select minimum 1 and maximum 4 categories.";

            const subs = dependentSubcategoriesMap[sel] || [];
            if (subs.length) {
                subCategoryContainer.innerHTML = subs.map(s => `
                    <label class="modern-checkbox">
                        <input type="checkbox" name="awardSubtype" value="${s}">
                        <div class="checkbox-chip"><span class="checkbox-icon"></span>${s}</div>
                    </label>`).join('');
                subcatWrap.classList.add('visible');
            } else {
                subcatWrap.classList.remove('visible');
                subCategoryContainer.innerHTML = "";
            }
        });

        subCategoryContainer.addEventListener('change', (e) => {
            if (e.target?.type !== 'checkbox') return;
            const primaryEl = document.querySelector('input[name="primaryCat"]:checked');
            if (restrictedCategoriesLimit.includes(primaryEl?.value) && getSelectedCategories().length > 4) {
                e.target.checked = false;
                alert("Maximum 4 nominations allowed");
            }
        });

        const openModal = (e, btn) => {
            e.preventDefault();
            displayFormView();
            resetModalFormUI();
            const ctx = btn.getAttribute('data-type') || 'education';
            modalTitle.textContent = ctx === 'corporate' ? "Nominate for Corporate Awards" : "Nominate for Education Awards";
            renderPrimaryCategories(ctx);
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        };
        const closeModal = () => {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        };

        nominateButtons.forEach(btn => btn.addEventListener('click', (e) => openModal(e, btn)));
        closeModalBtn.addEventListener('click', closeModal);
        closeSuccessBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
        submitAnotherBtn.addEventListener('click', displayFormView);

        const statusText       = document.getElementById('uploadStatusText');
        const fileNamesDisplay = document.getElementById('fileNamesDisplay');
        fileInput.addEventListener('change', function() {
            const files = Array.from(this.files);
            statusText.textContent = files.length ? files.length + " file(s) selected" : "Click or drag files here to upload";
            fileNamesDisplay.textContent = files.map(f => f.name).join(', ');
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const selected = getSelectedCategories();
            if (!selected.length) { alert("Please select at least one Award Type subcategory to proceed."); return; }
            const primaryEl  = document.querySelector('input[name="primaryCat"]:checked');
            const primaryCat = primaryEl?.value || '';
            if (restrictedCategoriesLimit.includes(primaryCat) && selected.length > 4) { alert("Maximum 4 nominations allowed"); return; }
            const fee = calculatePrice(selected.length);

            document.getElementById('successSummaryContent').innerHTML = `
                <div style="font-size:1.02rem;margin-bottom:20px;">
                    You have selected <strong>${selected.length}</strong> nomination${selected.length > 1 ? 's' : ''} under <strong>${primaryCat}</strong>.
                </div>
                <div style="text-align:left;background:#fff;padding:18px 24px;border-radius:12px;margin-bottom:24px;border:1.5px solid rgba(0,0,0,0.06);box-shadow:0 4px 14px rgba(0,0,0,0.02);">
                    <strong style="color:var(--text-dark);display:block;margin-bottom:12px;font-size:0.95rem;">Selected Categories:</strong>
                    <ul style="margin:0;padding:0;list-style:none;">
                        ${selected.map(name => `<li style="position:relative;padding-left:20px;color:var(--text-gray);font-size:0.9rem;margin-bottom:8px;line-height:1.4;"><span style="position:absolute;left:0;top:0;color:var(--brand);font-weight:bold;font-size:1.1rem;line-height:1;">&bull;</span>${name}</li>`).join('')}
                    </ul>
                </div>
                <div style="font-size:1.15rem;color:var(--text-gray);border-top:1.5px solid rgba(0,0,0,0.06);padding-top:24px;margin-bottom:8px;">Total Payable Amount:</div>
                <div style="font-size:2.1rem;font-weight:800;color:var(--brand);line-height:1;letter-spacing:-0.5px;">₹${fee.toLocaleString('en-IN')}</div>`;

            modalFormWrap.classList.add('hide-section');
            modalSuccessWrap.classList.remove('hide-section');
        });
    });
    </script>

</body>
</html>