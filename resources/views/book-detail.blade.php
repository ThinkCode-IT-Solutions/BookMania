
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Detail — BookMania</title>
</head>

<body>
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

		body {
			margin: 0;
			background: var(--bg);
			color: #0f172a;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		.container {
			max-width: 1100px;
			margin: 48px auto;
			padding: 0 28px;
		}

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
			text-decoration: none;
		}

		.btn.primary {
			background: linear-gradient(90deg, #06b6d4, #7c3aed);
			color: #fff;
			border: none;
			box-shadow: 0 10px 30px rgba(124, 58, 237, 0.12);
		}

		.hero {
			display: flex;
			gap: 28px;
			align-items: center;
			background: linear-gradient(180deg, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6));
			padding: 20px;
			border-radius: 16px;
			box-shadow: var(--shadow);
		}

		.detail-grid {
			display: grid;
			grid-template-columns: 360px 1fr;
			gap: 28px;
			margin-top: 22px;
			align-items: start;
		}

		@media (max-width:980px) {
			.detail-grid {
				grid-template-columns: 1fr;
			}
			.container { padding: 0 20px; }
		}

		.cover-large {
			width: 100%;
			border-radius: 12px;
			box-shadow: var(--shadow-sm);
			display: block;
			object-fit: cover;
		}

		.card {
			background: var(--card);
			border-radius: 14px;
			overflow: hidden;
			box-shadow: var(--shadow);
			border: 1px solid rgba(15, 23, 42, 0.03);
			padding: 18px;
		}

		.meta { color: var(--muted); font-size: 14px; }

		.title { font-size: 22px; margin: 0 0 6px; font-weight: 800; }
		.author { margin: 0; color: var(--muted); font-weight:600; }

		.price { font-size: 20px; font-weight:800; color:var(--accent); }

		.specs { display:flex; gap:10px; flex-wrap:wrap; margin-top:12px; }
		.spec { background:#f1f5f9; padding:8px 10px; border-radius:8px; font-weight:700; font-size:13px; }

		.actions { display:flex; gap:12px; margin-top:18px; }

		.desc { color:var(--muted); line-height:1.6; margin-top:14px; }

		.related-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:12px; margin-top:18px; }
		@media (max-width:640px) { .related-grid { grid-template-columns:repeat(2,1fr);} }

	</style>

	<div class="container">
        {{-- @dd($kitab) --}}
		<nav class="nav" aria-label="main navigation">
			<div class="brand">
				<div class="logo">BM</div>
				<div>
					<h1 style="margin:0; font-size:16px;">BookMania</h1>
					<p style="margin:0; font-size:12px; color:var(--muted);">Minimal catalogue for modern reading teams</p>
				</div>
			</div>

			<div class="nav-actions">
				<a class="btn" href="#">Back to catalogue</a>
				<a class="btn primary" href="#">Share</a>
			</div>
		</nav>

		<header class="hero" role="banner">
			<div style="flex:1;">
				<h2 style="margin:0 0 6px; font-size:18px;">Book detail</h2>
				<p style="margin:0; color:var(--muted);">Deep dive view with purchase options, metadata and related books.</p>
			</div>
			<div style="width:160px; text-align:right;">
				<img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=760&auto=format&fit=crop&ixlib=rb-4.0.3&s=0b9b8ed2a0a5e5b3d6c12a5a2bb1a2f5" alt="Reading banner" style="width:100%; border-radius:12px; box-shadow: var(--shadow-sm);">
			</div>
		</header>

		<main class="detail-grid">
			<aside>
				<div class="card">
					<img class="cover-large" src="https://picsum.photos/seed/book/800/1200" alt="Atomic Habits — cover">
					<div style="margin-top:12px; display:flex; gap:8px;">
						<img src="https://picsum.photos/seed/1/120/180" style="width:72px; height:100px; object-fit:cover; border-radius:8px;" alt="thumb">
						<img src="https://picsum.photos/seed/2/120/180" style="width:72px; height:100px; object-fit:cover; border-radius:8px;" alt="thumb">
						<img src="https://picsum.photos/seed/3/120/180" style="width:72px; height:100px; object-fit:cover; border-radius:8px;" alt="thumb">
					</div>
				</div>
			</aside>

			<section>
				<div class="card">
					<div style="display:flex; justify-content:space-between; gap:18px; align-items:flex-start;">
						<div style="flex:1; min-width:0;">
							<h1 class="title">{{ $kitab->name }}</h1>
							<p class="author">by {{ $kitab->aurthor_name }}</p>
							<div class="meta" style="margin-top:8px;">Publisher: Avery • Language: English • Format: Paperback</div>
						</div>

						<div style="text-align:right;">
							<div class="price">${{ $kitab->price }}</div>
							<div style="color:var(--muted); font-size:13px; margin-top:6px;">In stock</div>
						</div>
					</div>

					<div class="specs">
						<div class="spec">{{ $kitab->pages }} pages</div>
						<div class="spec">ISBN {{ $kitab->id }}</div>
						<div class="spec">Published {{ $kitab->created_at->format("Y") }}</div>
					</div>

					<div class="actions">
						<a class="btn primary" href="#">Add to cart</a>
						<a class="btn" href="#">Buy now</a>
						<a class="btn" href="#">Wishlist</a>
					</div>

					<p class="desc">{{ $kitab->description }}</p>

					<div style="margin-top:18px;">
						<h4 style="margin:0 0 8px;">Details</h4>
						<ul style="margin:0; color:var(--muted);">
							<li>Dimensions: 5.5 x 0.8 x 8 inches</li>
							<li>Weight: 12.8 ounces</li>
							<li>Language: English</li>
							<li>Rating: ★★★★☆ (4.7/5)</li>
						</ul>
					</div>

					<div style="margin-top:18px;">
						<h4 style="margin:0 0 10px;">Related books</h4>
						<div class="related-grid">
							<div style="background:var(--card); padding:10px; border-radius:10px; text-align:center; box-shadow:var(--shadow-sm);">
								<img src="https://picsum.photos/seed/r1/200/280" style="width:100%; height:140px; object-fit:cover; border-radius:8px;">
								<div style="margin-top:8px; font-weight:700; font-size:13px;">Deep Work</div>
								<div style="color:var(--muted); font-size:12px;">Cal Newport</div>
							</div>
							<div style="background:var(--card); padding:10px; border-radius:10px; text-align:center; box-shadow:var(--shadow-sm);">
								<img src="https://picsum.photos/seed/r2/200/280" style="width:100%; height:140px; object-fit:cover; border-radius:8px;">
								<div style="margin-top:8px; font-weight:700; font-size:13px;">The Power of Habit</div>
								<div style="color:var(--muted); font-size:12px;">Charles Duhigg</div>
							</div>
							<div style="background:var(--card); padding:10px; border-radius:10px; text-align:center; box-shadow:var(--shadow-sm);">
								<img src="https://picsum.photos/seed/r3/200/280" style="width:100%; height:140px; object-fit:cover; border-radius:8px;">
								<div style="margin-top:8px; font-weight:700; font-size:13px;">Mindset</div>
								<div style="color:var(--muted); font-size:12px;">Carol S. Dweck</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<div style="color:var(--muted); font-size:13px; margin-top:18px;">You may also like these curated recommendations.</div>
	</div>
</body>

</html>
