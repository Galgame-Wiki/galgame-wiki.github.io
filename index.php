<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galgame 百科项目 · 主页</title>
    <style>
        /* ===== 全局重置 ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "PingFang SC", "Microsoft YaHei", sans-serif;
            background: #0a0a0f;
            color: #eaeaea;
            line-height: 1.7;
            min-height: 100vh;
        }

        a {
            color: #7c9cff;
            text-decoration: none;
            transition: color 0.25s;
        }

        a:hover {
            color: #a8bcff;
        }

        .container {
            max-width: 1120px;
            margin: 0 auto;
            padding: 2.5rem 1.8rem;
        }

        /* ===== 背景光晕 ===== */
        .bg-glow {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .bg-glow .glow {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.30;
        }

        .bg-glow .glow:nth-child(1) {
            width: 600px;
            height: 600px;
            top: -200px;
            right: -100px;
            background: #4c3c8c;
        }

        .bg-glow .glow:nth-child(2) {
            width: 500px;
            height: 500px;
            bottom: -150px;
            left: -100px;
            background: #1a4c7c;
        }

        .bg-glow .glow:nth-child(3) {
            width: 400px;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #3c2c6c;
            opacity: 0.15;
        }

        /* ===== 主内容 ===== */
        .content {
            position: relative;
            z-index: 1;
        }

        /* ===== 头部 ===== */
        .header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            margin-bottom: 3rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #5b7cfa, #8b6cf0);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            font-weight: 700;
            color: #fff;
            flex-shrink: 0;
        }

        .logo-text {
            font-size: 1.3rem;
            font-weight: 600;
            letter-spacing: -0.3px;
            background: linear-gradient(135deg, #ffffff 50%, #9aaeff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo-sub {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.3);
            letter-spacing: 1.5px;
            font-weight: 400;
            -webkit-text-fill-color: rgba(255, 255, 255, 0.3);
        }

        .nav-links {
            display: flex;
            gap: 1.8rem;
            font-size: 0.9rem;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.5);
            transition: color 0.25s;
            font-weight: 400;
        }

        .nav-links a:hover {
            color: rgba(255, 255, 255, 0.85);
        }

        /* ===== 英雄区 ===== */
        .hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 4rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 2.8rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            line-height: 1.12;
            margin-bottom: 1rem;
        }

        .hero-text h1 .highlight {
            background: linear-gradient(135deg, #7c9cff, #b08cff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-text .sub {
            font-size: 1.05rem;
            color: rgba(255, 255, 255, 0.5);
            max-width: 520px;
            margin-bottom: 1.8rem;
            line-height: 1.8;
        }

        .hero-text .sub strong {
            color: rgba(255, 255, 255, 0.75);
            font-weight: 500;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.7rem 1.6rem;
            border-radius: 40px;
            font-size: 0.9rem;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: inherit;
            background: rgba(255, 255, 255, 0.06);
            color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .btn-primary {
            background: linear-gradient(135deg, #5b7cfa, #8b6cf0);
            color: #fff;
            border: none;
            box-shadow: 0 4px 24px rgba(90, 120, 255, 0.20);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(90, 120, 255, 0.30);
        }

        .btn-ghost:hover {
            background: rgba(255, 255, 255, 0.10);
            border-color: rgba(255, 255, 255, 0.18);
            transform: translateY(-2px);
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 16px;
            padding: 1.8rem 2rem;
            backdrop-filter: blur(8px);
        }

        .hero-stats .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
        }

        .hero-stats .stat-label {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.35);
            letter-spacing: 0.3px;
        }

        /* ===== 板块卡片 ===== */
        .section-title {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            letter-spacing: -0.3px;
        }

        .section-title .accent {
            color: rgba(255, 255, 255, 0.3);
            font-weight: 400;
            font-size: 1rem;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.2rem;
            margin-bottom: 3rem;
        }

        .card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 14px;
            padding: 1.4rem 1.6rem;
            transition: all 0.3s ease;
        }

        .card:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.12);
            transform: translateY(-4px);
        }

        .card .emoji {
            font-size: 1.6rem;
            display: block;
            margin-bottom: 0.4rem;
        }

        .card h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
            color: #fff;
        }

        .card p {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.45);
            line-height: 1.6;
            margin: 0;
        }

        /* ===== 发起人 ===== */
        .founder-section {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 16px;
            padding: 2rem 2.2rem;
            margin-bottom: 3rem;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            align-items: start;
        }

        .founder-section .label {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.25);
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 0.3rem;
        }

        .founder-section h2 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
        }

        .founder-section .handle {
            color: rgba(255, 255, 255, 0.3);
            font-size: 0.9rem;
        }

        .founder-section .bio {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.95rem;
            line-height: 1.8;
            margin: 0;
        }

        .founder-section .bio strong {
            color: rgba(255, 255, 255, 0.75);
            font-weight: 500;
        }

        .founder-section .quote {
            margin-top: 0.8rem;
            padding: 0.8rem 1.2rem;
            border-left: 3px solid #5b7cfa;
            background: rgba(90, 120, 255, 0.06);
            border-radius: 0 8px 8px 0;
            font-style: italic;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.95rem;
        }

        /* ===== 期刊 ===== */
        .journal-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 16px;
            padding: 1.8rem 2.2rem;
            margin-bottom: 3rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .journal-card .info h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .journal-card .info p {
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.9rem;
            margin: 0;
        }

        .journal-card .papers {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem 1rem;
            margin-top: 0.6rem;
        }

        .journal-card .papers span {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.35);
            background: rgba(255, 255, 255, 0.04);
            padding: 0.1rem 0.8rem;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.04);
        }

        /* ===== 页脚 ===== */
        .footer {
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            padding-top: 2rem;
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.2);
        }

        .footer-links {
            display: flex;
            gap: 1.5rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.2);
        }

        .footer-links a:hover {
            color: rgba(255, 255, 255, 0.5);
        }

        /* ===== 响应式 ===== */
        @media (max-width: 900px) {
            .hero {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .hero-stats {
                grid-template-columns: repeat(3, 1fr);
            }

            .grid-3 {
                grid-template-columns: 1fr 1fr;
            }

            .founder-section {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .journal-card {
                flex-direction: column;
                align-items: stretch;
                gap: 1rem;
            }
        }

        @media (max-width: 600px) {
            .container {
                padding: 1.5rem 1rem;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .nav-links {
                flex-wrap: wrap;
                gap: 1rem;
                font-size: 0.8rem;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .hero-stats {
                grid-template-columns: 1fr 1fr;
                gap: 0.8rem;
                padding: 1.2rem;
            }

            .hero-stats .stat-number {
                font-size: 1.4rem;
            }

            .grid-3 {
                grid-template-columns: 1fr;
            }

            .footer {
                flex-direction: column;
                gap: 0.8rem;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- ===== 背景光晕 ===== -->
    <div class="bg-glow">
        <div class="glow"></div>
        <div class="glow"></div>
        <div class="glow"></div>
    </div>

    <!-- ===== 主容器 ===== -->
    <div class="container content">

        <!-- ===== 头部 ===== -->
        <header class="header">
            <div class="logo">
                <div class="logo-icon">G</div>
                <div>
                    <div class="logo-text">Galgame百科</div>
                    <div class="logo-sub">知识库 · 学术 · 开源</div>
                </div>
            </div>
            <nav class="nav-links">
                <a href="https://www.galgame.it/wiki">百科</a>
                <a href="https://journal.galgame.it">期刊</a>
                <a href="https://github.com/sombermengling/galgamewiki">GitHub</a>
            </nav>
        </header>

        <!-- ===== 英雄区 ===== -->
        <section class="hero">
            <div class="hero-text">
                <h1>
                    为 Galgame 与<br />
                    <span class="highlight">视觉小说</span> 存档
                </h1>
                <p class="sub">
                    <strong>Galgame百科项目</strong> 是一个由爱好者发起的非营利性开放知识库，
                    专注于 Galgame 与视觉小说领域的知识整理、学术研究与文化传承。
                    完全免费 · 开放编辑 · 无广告
                </p>
                <div class="hero-buttons">
                    <a href="https://www.galgame.it/wiki" class="btn btn-primary">进入百科 →</a>
                    <a href="https://github.com/sombermengling/galgamewiki" class="btn btn-ghost">GitHub 仓库</a>
                </div>
            </div>
            <div class="hero-stats">
                <div>
                    <div class="stat-number">4</div>
                    <div class="stat-label">年运营</div>
                </div>
                <div>
                    <div class="stat-number">102+</div>
                    <div class="stat-label">条目</div>
                </div>
                <div>
                    <div class="stat-number">8万+</div>
                    <div class="stat-label">注册用户</div>
                </div>
            </div>
        </section>

        <!-- ===== 核心板块 ===== -->
        <h2 class="section-title">
            内容板块 <span class="accent">· 六大方向</span>
        </h2>
        <div class="grid-3">
            <div class="card">
                <span class="emoji">📖</span>
                <h3>核心概念</h3>
                <p>Galgame 术语、理论框架与风格分类，新人入坑的必备指南</p>
            </div>
            <div class="card">
                <span class="emoji">🔧</span>
                <h3>工具引擎</h3>
                <p>收录 200+ 种引擎、模拟器、翻译工具，一站式解决技术问题</p>
            </div>
            <div class="card">
                <span class="emoji">🏢</span>
                <h3>游戏资料库</h3>
                <p>按会社分类的作品档案，涵盖 Key、Nitro+、Type-Moon 等数十个品牌</p>
            </div>
            <div class="card">
                <span class="emoji">🌟</span>
                <h3>亚文化现象</h3>
                <p>圣地巡礼、同人生态、声优偶像化、汉化社区发展史</p>
            </div>
            <div class="card">
                <span class="emoji">⚖️</span>
                <h3>争议话题</h3>
                <p>以中立视角记录行业内的不同声音，摆事实不讲立场</p>
            </div>
            <div class="card">
                <span class="emoji">🗺️</span>
                <h3>作品原型地</h3>
                <p>游戏中的现实场景坐标与交通方式，方便规划圣地巡礼</p>
            </div>
        </div>

        <!-- ===== 发起人 ===== -->
        <div class="founder-section">
            <div>
                <div class="label">发起人</div>
                <h2>忧郁的Dt君</h2>
                <div class="handle">@sombermengling</div>
            </div>
            <div>
                <p class="bio">
                    <strong>忧郁的Dt君</strong> 是 Galgame 圈子里一位活跃了十多年的老玩家。
                    早年做资源分享，后来参与汉化，再后来自己建站、担任制作组组长。
                    从资源分享者到知识库建设者，身份在变，内核从未改变。
                </p>
                <div class="quote">
                    “正因为热爱，所以坚信。”
                </div>
            </div>
        </div>

        <!-- ===== 期刊 ===== -->
        <div class="journal-card">
            <div class="info">
                <h3>📄 《Galgame研究》期刊</h3>
                <p>在线学术期刊 · 开放获取 · 长期征稿</p>
                <div class="papers">
                    <span>素晴日玩家画像</span>
                    <span>机器学习评分预测</span>
                    <span>Muv-Luv 叙事</span>
                    <span>星之梦 末世诗学</span>
                </div>
            </div>
            <div>
                <a href="https://journal.galgame.it" class="btn btn-ghost" style="white-space:nowrap;">阅读期刊 →</a>
            </div>
        </div>

        <!-- ===== 页脚 ===== -->
        <footer class="footer">
            <span>© 2026 Galgame百科项目 · 开源共建</span>
            <div class="footer-links">
                <a href="https://www.galgame.it/wiki">主站</a>
                <a href="https://journal.galgame.it">期刊</a>
                <a href="https://github.com/sombermengling/galgamewiki">GitHub</a>
            </div>
        </footer>

    </div>

</body>
</html>
