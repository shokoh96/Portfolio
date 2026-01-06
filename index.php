<?php get_header(); ?>

<!-- Desktop Side Nav -->
<aside class="side-nav" aria-label="セクションナビ">
    <nav class="side-nav__inner">
        <a href="#top" class="side-nav__link is-active">Top</a>
        <a href="#works" class="side-nav__link">Works</a>
        <a href="#service" class="side-nav__link">Service</a>
        <a href="#flow" class="side-nav__link">Flow</a>
        <a href="#about" class="side-nav__link">About</a>
        <a href="#contact" class="side-nav__link">Contact</a>
    </nav>
</aside>

<!-- Mobile Header -->
<header class="m-header">
    <div class="m-header__brand">
        <span class="m-header__logo">PORTFOLIO</span>
        <span class="brand__line"></span>
    </div>
    <button type="button" class="m-header__menu" id="menuBtn" aria-controls="mobileMenu" aria-expanded="false">
        ( Menu )
    </button>
</header>

<!-- Mobile Menu Overlay -->
<div class="menu-overlay" id="mobileMenu" aria-hidden="true">
    <div class="menu-overlay__backdrop" data-close="true"></div>
    <div class="menu-card" role="dialog" aria-modal="true" aria-label="メニュー">
        <nav class="menu-card__nav">
            <a href="#top" data-close="true">Top</a>
            <a href="#works" data-close="true">Works</a>
            <a href="#service" data-close="true">Service</a>
            <a href="#flow" data-close="true">Flow</a>
            <a href="#about" data-close="true">About</a>
            <a href="#contact" data-close="true">Contact</a>
        </nav>
        <button class="menu-card__close" data-close="true">( Close )</button>
    </div>
</div>

<main>
    <!-- Top -->
    <section class="top" id="top">
        <div class="container top__grid">
            <div class="top__copy">
                <div class="top__mini">
                    <span class="brand">PORTFOLIO</span>
                    <span class="brand__line"></span>
                </div>
                <h1 class="top__headline">
                    <span class="text-bg">デザインと実装で、</span><br>
                    <span class="text-bg">ビジネスにちゃんと届く</span><br>
                    <span class="pill"><span class="pill__inner">Web</span>制作</span>
                </h1>
                <p class="top__sub">
                    Design and development that delivers real value.
                </p>
            </div>
            <div class="top__media">
                <video class="top__video" autoplay muted playsinline>
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/top.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="scroll-hint" aria-hidden="true">
            <div class="scroll-hint__mouse"></div>
            <div class="scroll-hint__text">SCROLL</div>
        </div>
    </section>

    <!-- Works -->
    <section class="section section--white" id="works">
        <div class="container">
            <div class="section-head js-fade">
                <span class="section-head__label">WORKS</span>
                <h2 class="section-head__title">制作実績</h2>
            </div>
            <div class="works">
                <a href="https://introduce-kuro.netlify.app" class="work-card js-fade" target="_blank" rel="noopener">
                    <div class="work-card__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work-1.png" alt="ブランドコンセプトWebサイト">
                    </div>
                    <div class="work-card__body">
                        <h3 class="work-card__title">ブランドコンセプトWebサイト</h3>
                        <p class="work-card__meta">Web Development, Branding</p>
                        <time class="work-card__year">2022</time>
                    </div>
                </a>
                <a href="https://rika-health.com/" class="work-card js-fade" target="_blank" rel="noopener">
                    <div class="work-card__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work-2.png" alt="個人事業主向けWebサイト">
                    </div>
                    <div class="work-card__body">
                        <h3 class="work-card__title">個人事業主向けWebサイト</h3>
                        <p class="work-card__meta">UI/UX Design, Development</p>
                        <time class="work-card__year">2023</time>
                    </div>
                </a>
                <a href="#" class="work-card js-fade" target="_blank" rel="noopener">
                    <div class="work-card__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work-3.png" alt="ポートフォリオサイト">
                    </div>
                    <div class="work-card__body">
                        <h3 class="work-card__title">ポートフォリオサイト</h3>
                        <p class="work-card__meta">Design, Development</p>
                        <time class="work-card__year">2025</time>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Service -->
    <section class="section" id="service">
        <div class="container">
            <div class="section-head js-fade">
                <span class="section-head__label">SERVICE</span>
                <h2 class="section-head__title">提供サービス</h2>
            </div>
            <div class="service">
                <div class="service-card js-fade">
                    <div class="service-card__icon">
                        <i class="fa-solid fa-window-maximize"></i>
                    </div>
                    <h3 class="service-card__title">Webサイト制作</h3>
                    <p class="service-card__text">
                        目的や課題の整理から、<br>
                        デザイン・実装・公開まで一貫して対応します。<br><br>
                        「きれいなサイト」ではなく、<br>
                        ビジネスにちゃんと届くWebサイトを制作します。
                    </p>
                </div>
                <div class="service-card js-fade">
                    <div class="service-card__icon">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <h3 class="service-card__title">UI / UX設計</h3>
                    <p class="service-card__text">
                        ユーザー体験を重視した、<br>
                        分かりやすく使いやすいデザインを設計します。<br><br>
                        Webサービス・LP・コーポレートサイトなど、目的に合わせたUIをご提案します。
                    </p>
                </div>
                <div class="service-card js-fade">
                    <div class="service-card__icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="service-card__title">フロントエンド実装</h3>
                    <p class="service-card__text">
                        デザインの意図を汲み取り、<br>
                        保守性と可読性を意識した実装を行います。<br><br>
                        JavaScriptによるアニメーションやインタラクションの実装にも対応可能です。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Flow -->
    <section class="section section--white" id="flow">
        <div class="container">
            <div class="section-head js-fade">
                <span class="section-head__label">FLOW</span>
                <h2 class="section-head__title">制作の流れ</h2>
            </div>
            <div class="flow">
                <ol class="flow-list">
                    <li class="flow-item js-fade">
                        <div class="flow-item__no">01</div>
                        <div class="flow-item__body">
                            <h3>お問い合わせ</h3>
                            <p>まずはお気軽にお問い合わせください。お問い合わせフォームにてご連絡いただきます。</p>
                        </div>
                    </li>
                    <li class="flow-item js-fade">
                        <div class="flow-item__no">02</div>
                        <div class="flow-item__body">
                            <h3>ヒアリング</h3>
                            <p>お客様のご要望や目的、ターゲットなどを詳しくヒアリングし、プロジェクトの方向性を明確にします。</p>
                        </div>
                    </li>
                    <li class="flow-item js-fade">
                        <div class="flow-item__no">03</div>
                        <div class="flow-item__body">
                            <h3>お見積もり</h3>
                            <p>ヒアリング内容をもとに、お見積りをご提示いたします。ご予算に応じた最適なプランをご提案します。</p>
                        </div>
                    </li>
                    <li class="flow-item js-fade">
                        <div class="flow-item__no">04</div>
                        <div class="flow-item__body">
                            <h3>制作・開発</h3>
                            <p>デザインから開発まで、丁寧に制作を進めます。進捗状況を随時ご報告し、ご確認いただきながら進めます。</p>
                        </div>
                    </li>
                    <li class="flow-item js-fade">
                        <div class="flow-item__no">05</div>
                        <div class="flow-item__body">
                            <h3>納品・サポート</h3>
                            <p>最終確認後、納品いたします。公開後のサポートやメンテナンスにも対応しますので、安心してご利用いただけます。</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-head js-fade">
                <span class="section-head__label">ABOUT</span>
                <h2 class="section-head__title">自己紹介</h2>
            </div>
            <div class="about">
                <div class="about__grid">
                    <div class="about__photo js-fade">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/about.png" alt="SHO SUGIMOTO">
                    </div>
                    <div class="about__body js-fade">
                        <h3 class="about__name">SHO SUGIMOTO</h3>
                        <p class="about__role">Web Engineer / Designer</p>
                        <p class="about__text">
                            はじめまして、杉本 将と申します。<br><br>
                            現在はフリーランスのWebエンジニアとして、<br>
                            Webサイト・Webシステムの設計から実装までを一貫して行なっています。<br><br>
                            新卒で大手Web系企業に入社し、Web開発の実務を経験。<br>
                            その中で、デザインと実装の両方を理解したWeb制作の重要性を強く感じるようになりました。<br><br>
                            クラアント様の目的や課題を丁寧に整理し、<br>
                            ビジネスにきちんと届くWebサイトをつくることを大切にしています。
                        </p>
                        <div class="skills">
                            <div class="skills__label">SKILLS</div>
                            <div class="skills__chips">
                                <span class="chip">HTML/CSS</span>
                                <span class="chip">JavaScript</span>
                                <span class="chip">PHP</span>
                                <span class="chip">WordPress</span>
                                <span class="chip">Figma</span>
                                <span class="chip">AWS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="section section--white" id="contact">
        <div class="container">
            <div class="section-head">
                <span class="section-head__label">CONTACT</span>
                <h2 class="section-head__title">お問い合わせ</h2>
            </div>
            <div class="contact">
                <p class="contact__note">
                    ご相談・お見積りは無料です。<br>
                    内容を確認のうえ、通常24時間以内にご返信いたします。
                </p>
                <!-- <form action="#" class="contact__form" method="post">
                    <label class="c-field">
                        <span class="c-field__label">お名前</span>
                        <input type="text" class="c-field__input" name="name" placeholder="山田 太郎">
                    </label>
                    <label class="c-field">
                        <span class="c-field__label">メールアドレス</span>
                        <input type="email" class="c-field__input" name="email" placeholder="example@email.com">
                    </label>
                    <label class="c-field">
                        <span class="c-field__label">お問い合わせ内容</span>
                        <textarea name="message" class="c-field__textarea" placeholder="制作内容やご相談内容をご記入ください"></textarea>
                    </label>
                    <button class="btn" type="submit">
                        送信する <i class="fa-solid fa-paper-plane btn__icon"></i>
                    </button>
                </form> -->
                <?php echo do_shortcode('[mwform_formkey key="6"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
