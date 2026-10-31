<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>All News – TechNews</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root{
          --bg:#ffffff; --surface:#f5f7fb; --ink:#131a2b; --muted:#5b6479; --line:#e3e7ef;
          --accent:#2347ff; --accent-ink:#ffffff; --ok:#0a7a4b;
          color-scheme:light;
          --head:"Bricolage Grotesque","Segoe UI",system-ui,sans-serif;
          --body:"Public Sans","Segoe UI",system-ui,sans-serif;
          box-sizing:border-box; padding-top:env(safe-area-inset-top,0px); padding-bottom:env(safe-area-inset-bottom,0px);
        }
        *,*::before,*::after{box-sizing:border-box}
        html{scroll-behavior:smooth;scroll-padding-top:80px}
        body{margin:0;background:var(--bg);color:var(--ink);font:400 17px/1.65 var(--body)}
        a{color:inherit;text-decoration:none}
        :focus-visible{outline:3px solid var(--accent);outline-offset:3px;border-radius:6px}
        .wrap{max-width:1080px;margin:0 auto;padding:0 24px}
        h1,h2,h3{font-family:var(--head);line-height:1.1;margin:0;letter-spacing:-.02em}

        /* Header */
        header{position:sticky;top:env(safe-area-inset-top,0px);z-index:5;background:var(--bg);border-bottom:1px solid var(--line)}
        .bar{display:flex;align-items:center;justify-content:space-between;height:64px}
        .logo{font:800 22px var(--head);letter-spacing:-.03em}
        .logo span{color:var(--accent)}
        nav{display:flex;align-items:center;gap:28px;font-size:15px;color:var(--muted)}
        nav a:hover{color:var(--ink)}
        .btn{display:inline-block;border:0;cursor:pointer;font:600 15px var(--body);padding:12px 20px;border-radius:10px;background:var(--accent);color:var(--accent-ink)}
        .btn:hover{filter:brightness(1.08)}
        .btn.ghost{background:transparent;color:var(--ink);border:1px solid var(--line)}
        .btn.ghost:hover{background:var(--surface)}
        nav .btn{padding:9px 16px}

        /* Page Hero */
        .page-hero{padding:88px 0 48px;max-width:760px}
        .page-hero h1{font-size:clamp(40px,6vw,64px);font-weight:800}
        .page-hero p{font-size:19px;color:var(--muted);margin:22px 0 0}
        .eyebrow{font-size:14px;font-weight:600;color:var(--accent);margin:0 0 14px}

        /* Sections */
        section{padding:56px 0 88px}
        .head{display:flex;justify-content:space-between;align-items:end;gap:24px;flex-wrap:wrap;margin-bottom:32px}
        .head h2{font-size:clamp(28px,4vw,40px);font-weight:700}
        .chips{display:flex;gap:8px;flex-wrap:wrap}
        .chip{font:500 14px var(--body);padding:8px 16px;border-radius:999px;border:1px solid var(--line);background:var(--bg);color:var(--muted);cursor:pointer}
        .chip:hover{color:var(--ink)}
        .chip[aria-pressed="true"]{background:var(--ink);border-color:var(--ink);color:var(--bg)}
        .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
        .post{display:flex;flex-direction:column;border:1px solid var(--line);border-radius:14px;overflow:hidden;background:var(--bg)}
        .post:hover{border-color:var(--accent)}
        .thumb{height:140px}
        .post .in{padding:20px;display:flex;flex-direction:column;gap:10px;flex:1}
        .tag{font-size:13px;font-weight:600;color:var(--accent)}
        .post h3{font-size:20px;font-weight:700;line-height:1.25}
        .post p{margin:0;font-size:15px;color:var(--muted)}
        .meta{margin-top:auto;font-size:13px;color:var(--muted)}
        .empty{grid-column:1/-1;color:var(--muted)}

        footer{border-top:1px solid var(--line);padding:32px 0;font-size:14px;color:var(--muted)}
        footer .wrap{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}
        footer nav{gap:20px;font-size:14px}

        @media (max-width:860px){
            .grid{grid-template-columns:1fr}
            .page-hero{padding-top:56px}
        }
    </style>
</head>
<body>

<x-header />

<main>
    <div class="wrap page-hero">
        <p class="eyebrow">Blog & Archives</p>
        <h1>All News</h1>
        <p>Explore our complete archive of tech summaries, open-source releases, web standards, and security advisories.</p>
    </div>

    <section class="wrap">
        <div class="head">
            <h2>All published stories</h2>
            <div class="chips" role="group" aria-label="Filter by topic" id="chips"></div>
        </div>
        <div class="grid" id="grid"></div>
    </section>
</main>

<x-footer />

<script>
var POSTS = [
  {t:"AI",  h:"Open-source models are catching up fast", p:"Free models now handle many tasks that needed paid tools a year ago.", m:"4 min read", c:"#dbe4ff"},
  {t:"Web", h:"Browsers get smarter about tracking", p:"New built-in controls make it easier to keep your browsing private.", m:"3 min read", c:"#d9f2e6"},
  {t:"Security", h:"Password managers explained simply", p:"What they do, why they are safer, and how to switch in ten minutes.", m:"5 min read", c:"#ffe3dc"},
  {t:"Gadgets", h:"Choosing a laptop for coding in 2026", p:"RAM, battery life, and screen: the three specs that matter most.", m:"6 min read", c:"#fff1cc"},
  {t:"AI", h:"How to use AI tools without losing your skills", p:"Practical habits for students and developers who use AI every day.", m:"4 min read", c:"#e6dcff"},
  {t:"Web", h:"Why fast websites win more readers", p:"A few small changes to images and fonts can cut load time in half.", m:"3 min read", c:"#d6f0f7"},
  {t:"Security", h:"Quantum-resistant cryptography standards update", p:"What developers and IT administrators need to know about upcoming algorithm migrations.", m:"7 min read", c:"#ffe3dc"},
  {t:"Gadgets", h:"The rise of e-ink monitors for deep work", p:"Reducing eye strain and distractions with monochrome displays.", m:"5 min read", c:"#fff1cc"},
  {t:"AI", h:"Local LLM inference on consumer hardware", p:"Running 7B and 14B parameter models locally with near-instant responses.", m:"6 min read", c:"#dbe4ff"}
];
var TOPICS = ["All","AI","Web","Security","Gadgets"];
var grid = document.getElementById("grid"), chips = document.getElementById("chips");

function render(topic){
  var list = POSTS.filter(function(p){ return topic === "All" || p.t === topic; });
  grid.innerHTML = list.length ? list.map(function(p){
    return '<article class="post"><div class="thumb" style="background:'+p.c+'"></div><div class="in">'+
      '<span class="tag">'+p.t+'</span><h3>'+p.h+'</h3><p>'+p.p+'</p><span class="meta">'+p.m+'</span></div></article>';
  }).join("") : '<p class="empty">No stories in this topic yet.</p>';
}
TOPICS.forEach(function(t, i){
  var b = document.createElement("button");
  b.className = "chip"; b.textContent = t; b.setAttribute("aria-pressed", i === 0);
  b.addEventListener("click", function(){
    chips.querySelectorAll(".chip").forEach(function(c){ c.setAttribute("aria-pressed", c === b); });
    render(t);
  });
  chips.appendChild(b);
});
render("All");
document.getElementById("yr").textContent = new Date().getFullYear();
</script>
</body>
</html>
