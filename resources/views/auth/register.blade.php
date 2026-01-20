<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

<div class="min-h-screen grid grid-cols-1 md:grid-cols-2">

  <!-- Left -->
  <div class="hidden md:flex flex-col justify-center px-16 bg-black text-white">
    <h1 class="text-3xl font-semibold mb-4">
      Create your account
    </h1>
    <p class="text-gray-400 max-w-sm">
      Get access to a modern dashboard built for fast-moving software teams.
    </p>
  </div>

  <!-- Right -->
  <div class="flex items-center justify-center px-6">
    <div class="w-full max-w-sm">

      <h2 class="text-2xl font-semibold mb-6">
        Sign up
      </h2>

      <form class="space-y-4">
        <div>
          <label class="text-sm text-gray-600">Name</label>
          <input
            type="text"
            class="mt-1 w-full rounded-md border-gray-300 focus:border-black focus:ring-black"
            placeholder="John Doe"
          />
        </div>

        <div>
          <label class="text-sm text-gray-600">Email</label>
          <input
            type="email"
            class="mt-1 w-full rounded-md border-gray-300 focus:border-black focus:ring-black"
            placeholder="you@company.com"
          />
        </div>

        <div>
          <label class="text-sm text-gray-600">Password</label>
          <input
            type="password"
            class="mt-1 w-full rounded-md border-gray-300 focus:border-black focus:ring-black"
          />
        </div>

        <div>
          <label class="text-sm text-gray-600">Confirm password</label>
          <input
            type="password"
            class="mt-1 w-full rounded-md border-gray-300 focus:border-black focus:ring-black"
          />
        </div>

        <button
          type="submit"
          class="w-full mt-4 bg-black text-white py-2 rounded-md hover:bg-gray-800 transition"
        >
          Create account
        </button>
      </form>

      <p class="mt-6 text-sm text-gray-600">
        Already have an account?
        <a href="login.html" class="text-black underline">
          Log in
        </a>
      </p>

    </div>
  </div>
</div>

</body>
</html>
