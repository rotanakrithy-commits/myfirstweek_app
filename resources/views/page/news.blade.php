@extends('layouts.app')

@section('content')

    <main>
        <div class="wrap page-hero">
            <p class="eyebrow">Blog & Archives</p>
            <h1>All News</h1>
            <p>Explore our complete archive of tech summaries, open-source releases, web standards, and security
                advisories.</p>
        </div>

        <section class="wrap">
            <div class="head">
                <h2>All published stories</h2>
                <div class="chips" role="group" aria-label="Filter by topic" id="chips"></div>
            </div>
            <div class="grid" id="grid"></div>
        </section>
    </main>

    <style>
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

        section {
            padding: 56px 0 88px
        }

        @media (max-width:860px) {
            .page-hero {
                padding-top: 56px
            }
        }
    </style>

    <script>
        var POSTS = [{
                t: "AI",
                h: "Open-source models are catching up fast",
                p: "Free models now handle many tasks that needed paid tools a year ago.",
                m: "4 min read",
                c: "#dbe4ff"
            },
            {
                t: "Web",
                h: "Browsers get smarter about tracking",
                p: "New built-in controls make it easier to keep your browsing private.",
                m: "3 min read",
                c: "#d9f2e6"
            },
            {
                t: "Security",
                h: "Password managers explained simply",
                p: "What they do, why they are safer, and how to switch in ten minutes.",
                m: "5 min read",
                c: "#ffe3dc"
            },
            {
                t: "Gadgets",
                h: "Choosing a laptop for coding in 2026",
                p: "RAM, battery life, and screen: the three specs that matter most.",
                m: "6 min read",
                c: "#fff1cc"
            },
            {
                t: "AI",
                h: "How to use AI tools without losing your skills",
                p: "Practical habits for students and developers who use AI every day.",
                m: "4 min read",
                c: "#e6dcff"
            },
            {
                t: "Web",
                h: "Why fast websites win more readers",
                p: "A few small changes to images and fonts can cut load time in half.",
                m: "3 min read",
                c: "#d6f0f7"
            },
            {
                t: "Security",
                h: "Quantum-resistant cryptography standards update",
                p: "What developers and IT administrators need to know about upcoming algorithm migrations.",
                m: "7 min read",
                c: "#ffe3dc"
            },
            {
                t: "Gadgets",
                h: "The rise of e-ink monitors for deep work",
                p: "Reducing eye strain and distractions with monochrome displays.",
                m: "5 min read",
                c: "#fff1cc"
            },
            {
                t: "AI",
                h: "Local LLM inference on consumer hardware",
                p: "Running 7B and 14B parameter models locally with near-instant responses.",
                m: "6 min read",
                c: "#dbe4ff"
            }
        ];
        var TOPICS = ["All", "AI", "Web", "Security", "Gadgets"];
        var grid = document.getElementById("grid"),
            chips = document.getElementById("chips");

        function render(topic) {
            var list = POSTS.filter(function(p) {
                return topic === "All" || p.t === topic;
            });
            grid.innerHTML = list.length ? list.map(function(p) {
                return '<article class="post"><div class="thumb" style="background:' + p.c +
                    '"></div><div class="in">' +
                    '<span class="tag">' + p.t + '</span><h3>' + p.h + '</h3><p>' + p.p +
                    '</p><span class="meta">' + p.m + '</span></div></article>';
            }).join("") : '<p class="empty">No stories in this topic yet.</p>';
        }
        TOPICS.forEach(function(t, i) {
            var b = document.createElement("button");
            b.className = "chip";
            b.textContent = t;
            b.setAttribute("aria-pressed", i === 0);
            b.addEventListener("click", function() {
                chips.querySelectorAll(".chip").forEach(function(c) {
                    c.setAttribute("aria-pressed", c === b);
                });
                render(t);
            });
            chips.appendChild(b);
        });
        render("All");
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>

@endsection
