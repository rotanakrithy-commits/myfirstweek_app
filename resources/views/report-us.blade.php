<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Report Us – TechNews</title>
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

        .contact{display:grid;grid-template-columns:1.2fr .8fr;gap:48px;padding-bottom:72px;align-items:start}
        .card{border:1px solid var(--line);border-radius:16px;padding:32px;background:var(--bg)}
        .field{margin-bottom:20px}
        .field label{display:block;font-weight:600;font-size:15px;margin-bottom:6px}
        .field input,.field select,.field textarea{width:100%;font:400 16px var(--body);padding:12px 14px;border:1px solid var(--line);border-radius:10px;background:var(--bg);color:var(--ink)}
        .field textarea{min-height:140px;resize:vertical}
        .field.bad input,.field.bad select,.field.bad textarea{border-color:#c23a3a}
        .hint{display:block;min-height:1.4em;font-size:13px;color:#c23a3a;margin-top:4px}
        .two{display:grid;grid-template-columns:1fr 1fr;gap:16px}
        .info{display:grid;gap:16px}
        .info .item{border:1px solid var(--line);border-radius:14px;padding:20px;background:var(--surface)}
        .info small{display:block;color:var(--muted);font-size:13px;font-weight:600;margin-bottom:4px}
        .info b{font:700 18px var(--head);word-break:break-word}
        .info p{margin:4px 0 0;color:var(--muted);font-size:14px}
        .note{font-size:14px;color:var(--muted);margin-top:10px}
        .note.ok{color:var(--ok)} .note.err{color:#c23a3a}

        footer{border-top:1px solid var(--line);padding:32px 0;font-size:14px;color:var(--muted)}
        footer .wrap{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}
        footer nav{gap:20px;font-size:14px}

        @media (max-width:860px){
            .contact{grid-template-columns:1fr}
            .two{grid-template-columns:1fr}
            .page-hero{padding-top:56px}
            .card{padding:22px}
        }
    </style>
</head>
<body>

<x-header />

<main>
    <div class="wrap page-hero">
        <p class="eyebrow">Support & Compliance</p>
        <h1>Report Us</h1>
        <p>Found a factual error, broken link, copyright issue, or security vulnerability? Let our editorial and engineering team know immediately.</p>
    </div>

    <div class="wrap contact">
        <div class="card">
            <form id="reportForm" novalidate>
                <div class="two">
                    <div class="field"><label for="name">Your name</label><input id="name" name="name" autocomplete="name"><span class="hint"></span></div>
                    <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com"><span class="hint"></span></div>
                </div>
                <div class="field">
                    <label for="issueType">Issue type</label>
                    <select id="issueType" name="issueType">
                        <option>Factual error in article</option>
                        <option>Broken link or website bug</option>
                        <option>Copyright or attribution concern</option>
                        <option>Security vulnerability / Disclosure</option>
                        <option>Other grievance</option>
                    </select>
                    <span class="hint"></span>
                </div>
                <div class="field"><label for="url">Relevant URL (optional)</label><input id="url" name="url" placeholder="https://technews.com/..."><span class="hint"></span></div>
                <div class="field"><label for="message">Detailed description</label><textarea id="message" name="message" placeholder="Please describe what needs correction or investigation..."></textarea><span class="hint"></span></div>
                <button class="btn" type="submit">Submit report</button>
                <p class="note" id="formNote" aria-live="polite"></p>
            </form>
        </div>

        <aside class="info" aria-label="Reporting details">
            <div class="item"><small>Security Reports</small><b>security@technews.com</b><p>PGP key available upon request</p></div>
            <div class="item"><small>Corrections Desk</small><b>editors@technews.com</b><p>Reviewed within 24 hours</p></div>
            <div class="item"><small>Response SLA</small><b>24 - 48 Hours</b><p>We take accuracy and safety seriously</p></div>
        </aside>
    </div>
</main>

<x-footer />

<script>
var form = document.getElementById("reportForm"), note = document.getElementById("formNote");
function check(id, ok, msg) {
  var f = document.getElementById(id), box = f.closest(".field");
  box.classList.toggle("bad", !ok);
  box.querySelector(".hint").textContent = ok ? "" : msg;
  return ok;
}
form.addEventListener("submit", function(e){
  e.preventDefault();
  var r = [
    check("name", form.name.value.trim().length >= 2, "Please enter your name."),
    check("email", /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email.value.trim()), "Enter a valid email, like you@example.com."),
    check("message", form.message.value.trim().length >= 15, "Please provide at least 15 characters of detail.")
  ];
  if(r.indexOf(false) !== -1){ note.className = "note err"; note.textContent = "Please fix the fields marked above."; return; }
  note.className = "note ok"; note.textContent = "Thank you. Your report has been submitted for review.";
  form.reset();
});
document.getElementById("yr").textContent = new Date().getFullYear();
</script>
</body>
</html>
