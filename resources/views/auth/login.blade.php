<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

<div class="min-h-screen grid grid-cols-1 md:grid-cols-2">

  <!-- Left -->
  <div class="hidden md:flex flex-col justify-center px-16 bg-gray-900 text-white">
    <h1 class="text-3xl font-semibold mb-4">
      Welcome back
    </h1>
    <p class="text-gray-400 max-w-sm">
      Log in to manage your product, users, and revenue from a single dashboard.
    </p>
  </div>

  <!-- Right -->
  <div class="flex items-center justify-center px-6">
    <div class="w-full max-w-sm">

      <h2 class="text-2xl font-semibold mb-6">
        Sign in
      </h2>

      <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <label class="text-sm text-gray-600">Email</label>
          <input
          name="email"
            type="email"
            class="mt-1 w-full rounded-md border-gray-300 focus:border-black focus:ring-black"
            placeholder="you@company.com"
          />
        </div>

        <div>
          <label class="text-sm text-gray-600">Password</label>
          <input
            name="password"
            type="password"
            class="mt-1 w-full rounded-md border-gray-300 focus:border-black focus:ring-black"
            placeholder="••••••••"
          />
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center gap-2">
            <input type="checkbox" class="rounded border-gray-300">
            Remember me
          </label>
          <a href="#" class="text-gray-600 hover:text-black">
            Forgot password?
          </a>
        </div>

        <button
          type="submit"
          class="w-full mt-4 bg-black text-white py-2 rounded-md hover:bg-gray-800 transition"
        >
          Log in
        </button>
      </form>

      <p class="mt-6 text-sm text-gray-600">
        Don’t have an account?
        <a href="register.html" class="text-black underline">
          Sign up
        </a>
      </p>

    </div>
  </div>
</div>

</body>
</html>
