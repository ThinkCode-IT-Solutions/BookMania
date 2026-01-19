<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>
</head>

<body>
    <!-- Minimalistic, whitespace-forward SaaS-like Books Catalog UI (static, dummy data) -->
    <style>
        :root {
            --bg: #f7f8fa;
            --card: #ffffff;
            --muted: #6b7280;
            --accent: #0ea5a2;
            --glass: rgba(255, 255, 255, 0.6);
            --radius: 14px;
            --shadow: 0 8px 24px rgba(16, 24, 40, 0.06);
            --shadow-sm: 0 4px 12px rgba(16, 24, 40, 0.04);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        /* Layout */
        body {
            margin: 0;
            background: var(--bg);
            color: #0f172a;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container {
            max-width: 1200px;
            margin: 48px auto;
            padding: 0 28px;
        }

        /* Navbar */
        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 28px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: linear-gradient(135deg, #06b6d4 0%, #06b6d4 40%, #7c3aed 100%);
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 18px;
        }

        .brand h1 {
            margin: 0;
            font-size: 16px;
            letter-spacing: 0.2px;
        }

        .brand p {
            margin: 0;
            font-size: 12px;
            color: var(--muted);
        }

        .nav-actions {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .btn {
            background: var(--card);
            border: 1px solid rgba(15, 23, 42, 0.06);
            padding: 9px 14px;
            border-radius: 10px;
            box-shadow: var(--shadow-sm);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-weight: 600;
            color: #07313f;
        }

        .btn.primary {
            background: linear-gradient(90deg, #06b6d4, #7c3aed);
            color: #fff;
            border: none;
            box-shadow: 0 10px 30px rgba(124, 58, 237, 0.12);
        }

        /* Hero */
        .hero {
            display: flex;
            gap: 28px;
            align-items: center;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6));
            padding: 28px;
            border-radius: 16px;
            box-shadow: var(--shadow);
        }

        .hero-left {
            flex: 1;
            min-width: 0;
        }

        .hero h2 {
            margin: 0 0 8px 0;
            font-size: 20px;
            letter-spacing: -0.2px;
        }

        .hero p {
            margin: 0 0 16px 0;
            color: var(--muted);
            line-height: 1.5;
        }

        .search {
            display: flex;
            gap: 12px;
            align-items: center;
            background: var(--card);
            padding: 8px;
            border-radius: 12px;
            border: 1px solid rgba(15, 23, 42, 0.04);
        }

        .search input {
            border: 0;
            outline: none;
            background: transparent;
            padding: 10px;
            font-size: 14px;
            color: inherit;
            width: 100%;
        }

        .chips {
            display: flex;
            gap: 8px;
            margin-top: 12px;
            flex-wrap: wrap;
        }

        .chip {
            padding: 6px 10px;
            background: rgba(14, 165, 162, 0.08);
            color: var(--accent);
            border-radius: 999px;
            font-weight: 600;
            font-size: 13px;
            border: 1px solid rgba(14, 165, 162, 0.12);
        }

        /* Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 22px;
        }

        @media (max-width:980px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .container {
                padding: 0 20px;
            }
        }

        @media (max-width:640px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .hero {
                flex-direction: column;
            }
        }

        /* Card */
        .card {
            background: var(--card);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--shadow);
            display: flex;
            gap: 14px;
            transition: transform .18s ease, box-shadow .18s ease;
            border: 1px solid rgba(15, 23, 42, 0.03);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(16, 24, 40, 0.08);
        }

        .cover {
            width: 136px;
            height: 196px;
            flex-shrink: 0;
            object-fit: cover;
            background: #eef2ff;
        }

        .card-body {
            padding: 18px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        .meta {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px;
        }

        .title {
            font-weight: 700;
            font-size: 16px;
            line-height: 1.1;
            margin: 0;
        }

        .author {
            color: var(--muted);
            font-size: 13px;
            margin: 0;
        }

        .details {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: center;
            color: var(--muted);
            font-size: 13px;
        }

        .tag {
            background: #f1f5f9;
            color: #0f172a;
            padding: 6px 8px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 12px;
        }

        .price {
            margin-left: auto;
            font-weight: 700;
            color: #0b5;
        }

        /* accent price color */

        .actions {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-top: auto;
        }

        .icon-btn {
            padding: 8px 12px;
            border-radius: 10px;
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.03);
            cursor: pointer;
            font-weight: 600;
            color: #0f172a;
        }

        /* Footer small */
        .count {
            color: var(--muted);
            font-size: 13px;
            margin-top: 10px;
        }
    </style>

    <div class="container">
        <nav class="nav" aria-label="main navigation">
            <div class="brand">
                <div class="logo">BM</div>
                <div>
                    <h1>BookMania</h1>
                    <p>Minimal catalogue for modern reading teams</p>
                </div>
            </div>

            <div class="nav-actions">
                <div class="btn" title="Filter">Filters</div>
                <div class="btn">Import</div>
                <div class="btn primary">Add Book</div>
            </div>
        </nav>

        <header class="hero" role="banner">
            <div class="hero-left">
                <h2>Explore curated books for teams & creators</h2>
                <p>Clean, distraction-free catalogue with cover previews, metadata and subtle interactions—designed for
                    fast browsing and discovery.</p>

                <div class="search" aria-hidden="false">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="opacity:.7">
                        <path d="M21 21l-4.35-4.35" stroke="#0f172a" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <circle cx="11" cy="11" r="6" stroke="#0f172a" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input placeholder="Search by title, author, ISBN, or tag" aria-label="Search books">
                    <div style="min-width:86px; text-align:right; color:var(--muted); font-weight:600; font-size:13px;">
                        400+ items</div>
                </div>

                <div class="chips">
                    <div class="chip">Trending</div>
                    <div class="chip">Fiction</div>
                    <div class="chip">Design</div>
                    <div class="chip">Productivity</div>
                    <div class="chip">New Releases</div>
                </div>
            </div>

            <div style="width:320px; text-align:right;">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=760&auto=format&fit=crop&ixlib=rb-4.0.3&s=0b9b8ed2a0a5e5b3d6c12a5a2bb1a2f5"
                    alt="Reading banner" style="width:100%; border-radius:12px; box-shadow: var(--shadow-sm);">
            </div>
        </header>

        <div style="display:flex; align-items:center; justify-content:space-between; margin-top:22px;">
            <h3 style="margin:0; font-size:15px;">All Books</h3>
            <div style="color:var(--muted); font-size:13px;">Sort by <strong
                    style="color:#0f172a; margin-left:8px;">Recently added</strong></div>
        </div>

        <section class="grid" aria-label="books grid" style="margin-top:12px;">
            {{-- checking if data exists or not --}}
            @if ($books->isNotEmpty())

                {{-- iterate over data to show all books --}}

                @foreach($books as $item)
                <article class="card" role="article" style="flex-direction:column; gap:0; overflow:hidden;">
                    <img src="https://picsum.photos/seed/400/400?random={{ $loop->iteration }}"
                        alt="Cover — {{ $item->name }}"
                        style="width:100%; height:220px; object-fit:cover; display:block; border-bottom:1px solid rgba(15,23,42,0.03);">

                    <div class="card-body" style="padding:16px;">
                        <div style="display:flex; align-items:flex-start; gap:12px; width:100%;">
                            <div style="flex:1; min-width:0;">
                                <p class="title" style="font-size:15px; margin:0 0 4px;">{{ $item->name }}</p>
                                <p class="author" style="margin:0; font-size:13px; color:var(--muted);">by {{ $item->aurthor_name }}</p>
                            </div>
                        </div>

                        <div class="details" style="margin-top:10px; gap:8px; align-items:center; color:var(--muted); font-size:13px;">
                            <span class="tag" style="background:transparent; border:1px solid rgba(15,23,42,0.05); color:var(--muted); padding:6px 8px; border-radius:8px; font-weight:600;">
                                {{ $item->pages }} pages
                            </span>
                            <span>{{ $item->created_at->format('Y') }}</span>
                            <span>ISBN {{ $item->id }}</span>
                        </div>
                        <div style="text-align:left; margin-left:8px;">
                            <div class="price" style="color:var(--accent); font-weight:700;">${{ $item->price }}</div>
                        </div>

                        <p style="padding: .5rem; color:var(--muted); font-size:13px; line-height:1.4; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden;">
                            {{ $item->description }}
                        </p>

                        <div class="actions" style="margin-top:14px; display:flex; gap:8px;">

                            <a href="{{ route("books.detail",$item->slug) }}" style="display: block;">
                                <button class="btn primary" style="padding:8px 12px; border-radius:10px;">
                                Buy Now
                            </button>
                            </a>
                        </div>
                    </div>
                </article>

                @endforeach
            @else
                <center>no books to show</center>
            @endif


        </section>

        <div class="count">Showing 6 of 420 books</div>
    </div>
</body>

</html>
