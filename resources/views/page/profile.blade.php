@props([
    'campas' => 'life University',
    'classrom' => 'BO4',
])
@extends('layouts.app')

@section('content')

    <main>
        <div class="wrap page-hero">
            <p class="eyebrow">User Profile</p>
            <h2>{{ $campas }}</h2>
            <h2>classrom:{{ $classrom }}</h2>
            <h1>{{ $fullname }}</h1>
            <p>Academic profile and course information for {{ $fullname }}.</p>
        </div>

        <div class="wrap profile-container">
            <div class="profile-card">
                <div class="profile-header">
                    <div class="avatar" style="background: var(--accent); color: var(--accent-ink);">
                        {{ strtoupper(substr($firstname, 0, 1) . substr($lastname, 0, 1)) }}
                    </div>
                    <div>
                        <h2>{{ $fullname }}</h2>
                        <p class="badge-major">{{ $mayjor }}</p>
                    </div>
                </div>

                <div class="profile-details">
                    <div class="detail-item">
                        <small>First Name</small>
                        <b>{{ $firstname }}</b>
                    </div>
                    <div class="detail-item">
                        <small>Last Name</small>
                        <b>{{ $lastname }}</b>
                    </div>
                    <div class="detail-item">
                        <small>Major / Field</small>
                        <b>{{ $mayjor }}</b>
                    </div>
                    <div class="detail-item">
                        <small>Current Subject</small>
                        <b>{{ $subject }}</b>
                    </div>
                </div>

                <div class="profile-actions">
                    <a href="/contact" class="btn">Contact Student</a>
                    <a href="/" class="btn ghost">Back to Home</a>
                </div>
            </div>

            <aside class="profile-sidebar" aria-label="Academic Summary">
                <div class="item">
                    <small>Status</small>
                    <b>Active Student</b>
                    <p>Enrolled in current semester courses.</p>
                </div>
                <div class="item">
                    <small>Focus Area</small>
                    <b>Web Development & Frameworks</b>
                    <p>Building modern, responsive web applications with PHP, Laravel, and JavaScript.</p>
                </div>
            </aside>
        </div>

        <section class="why">
            <div class="wrap">
                <div class="head">
                    <h2>Academic Overview</h2>
                </div>
                <div class="cols">
                    <div>
                        <h3>Major Focus</h3>
                        <p>Specializing in {{ $mayjor }} with hands-on projects and practical software engineering workflows.</p>
                    </div>
                    <div>
                        <h3>Current Coursework</h3>
                        <p>Studying {{ $subject }}, focusing on database design, MVC architecture, and frontend integration.</p>
                    </div>
                    <div>
                        <h3>Future Goals</h3>
                        <p>Building robust web systems and exploring full-stack development best practices.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <style>
        :root {
            --bg: #ffffff;
            --surface: #f5f7fb;
            --ink: #131a2b;
            --muted: #5b6479;
            --line: #e3e7ef;
            --accent: #2347ff;
            --accent-ink: #ffffff;
            --ok: #0a7a4b;
            color-scheme: light;
            --head: "Bricolage Grotesque", "Segoe UI", system-ui, sans-serif;
            --body: "Public Sans", "Segoe UI", system-ui, sans-serif;
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font: 400 17px/1.65 var(--body)
        }

        a {
            color: inherit;
            text-decoration: none
        }

        :focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 3px;
            border-radius: 6px
        }

        .wrap {
            max-width: 1080px;
            margin: 0 auto;
            padding: 0 24px
        }

        h1,
        h2,
        h3 {
            font-family: var(--head);
            line-height: 1.1;
            margin: 0;
            letter-spacing: -.02em
        }

        /* Header */
        header {
            position: sticky;
            top: env(safe-area-inset-top, 0px);
            z-index: 5;
            background: var(--bg);
            border-bottom: 1px solid var(--line)
        }

        .bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px
        }

        .logo {
            font: 800 22px var(--head);
            letter-spacing: -.03em
        }

        .logo span {
            color: var(--accent)
        }

        nav {
            display: flex;
            align-items: center;
            gap: 28px;
            font-size: 15px;
            color: var(--muted)
        }

        nav a:hover {
            color: var(--ink)
        }

        .btn {
            display: inline-block;
            border: 0;
            cursor: pointer;
            font: 600 15px var(--body);
            padding: 12px 20px;
            border-radius: 10px;
            background: var(--accent);
            color: var(--accent-ink)
        }

        .btn:hover {
            filter: brightness(1.08)
        }

        .btn.ghost {
            background: transparent;
            color: var(--ink);
            border: 1px solid var(--line)
        }

        .btn.ghost:hover {
            background: var(--surface)
        }

        nav .btn {
            padding: 9px 16px
        }

        /* Page Hero */
        .page-hero {
            padding: 88px 0 48px;
            max-width: 760px
        }

        .page-hero h1 {
            font-size: clamp(40px, 6vw, 64px);
            font-weight: 800
        }

        .page-hero p {
            font-size: 19px;
            color: var(--muted);
            margin: 22px 0 0
        }

        .eyebrow {
            font-size: 14px;
            font-weight: 600;
            color: var(--accent);
            margin: 0 0 14px
        }

        /* Profile Layout */
        .profile-container {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 48px;
            padding-bottom: 72px;
            align-items: start
        }

        .profile-card {
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 32px;
            background: var(--bg)
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--line)
        }

        .avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font: 700 24px var(--head);
            flex-shrink: 0;
        }

        .profile-header h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .badge-major {
            font-size: 14px;
            font-weight: 600;
            color: var(--accent);
            margin: 0;
        }

        .profile-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 32px;
        }

        .detail-item {
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 16px;
            background: var(--surface);
        }

        .detail-item small {
            display: block;
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .detail-item b {
            font: 700 16px var(--head);
            color: var(--ink);
            word-break: break-word;
        }

        .profile-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .profile-sidebar {
            display: grid;
            gap: 16px;
        }

        .profile-sidebar .item {
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 20px;
            background: var(--surface)
        }

        .profile-sidebar small {
            display: block;
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 4px
        }

        .profile-sidebar b {
            font: 700 18px var(--head);
            word-break: break-word
        }

        .profile-sidebar p {
            margin: 4px 0 0;
            color: var(--muted);
            font-size: 14px
        }

        /* Why / Overview Section */
        .why {
            background: var(--surface);
            border-block: 1px solid var(--line);
            padding: 72px 0;
        }

        .why .cols {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px
        }

        .why h3 {
            font-size: 21px;
            margin-bottom: 8px
        }

        .why p {
            margin: 0;
            color: var(--muted);
            font-size: 16px
        }

        .head {
            margin-bottom: 32px;
        }

        .head h2 {
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 700;
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 32px 0;
            font-size: 14px;
            color: var(--muted)
        }

        footer .wrap {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap
        }

        footer nav {
            gap: 20px;
            font-size: 14px
        }

        @media (max-width: 860px) {
            .profile-container,
            .why .cols,
            .profile-details {
                grid-template-columns: 1fr;
            }

            .page-hero {
                padding-top: 56px;
            }

            .profile-card {
                padding: 22px;
            }
        }
    </style>
@endsection
