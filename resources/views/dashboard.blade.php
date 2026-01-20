<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Book Mania – Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

  <!-- Sidebar -->
  <aside class="w-64 bg-black text-white hidden md:flex flex-col">
    <div class="px-6 py-5 text-lg font-semibold">
      Book Mania
    </div>

    <nav class="flex-1 px-4 space-y-1 text-sm">
      <a class="block px-4 py-2 rounded bg-gray-800">Dashboard</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Orders</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Books</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Categories</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Customers</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Inventory</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Promotions</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Reports</a>
      <a class="block px-4 py-2 rounded hover:bg-gray-800">Settings</a>
    </nav>
  </aside>

  <!-- Main -->
  <div class="flex-1 flex flex-col">

    <!-- Header -->
    <header class="bg-white border-b px-6 py-4 flex justify-between items-center">
      <input
        type="text"
        placeholder="Search books, orders, customers..."
        class="w-72 rounded-md border-gray-300 focus:border-black focus:ring-black text-sm"
      />

      <div class="flex items-center gap-3">
        <span class="text-sm text-gray-700">Admin</span>
        <img src="https://i.pravatar.cc/40" class="h-8 w-8 rounded-full" />
      </div>
    </header>

    <!-- Content -->
    <main class="p-6 space-y-6">

      <!-- KPIs -->
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="bg-white p-5 rounded-lg">
          <p class="text-sm text-gray-500">Today’s Orders</p>
          <p class="mt-2 text-3xl font-semibold">42</p>
        </div>
        <div class="bg-white p-5 rounded-lg">
          <p class="text-sm text-gray-500">Today’s Revenue</p>
          <p class="mt-2 text-3xl font-semibold">$3,120</p>
        </div>
        <div class="bg-white p-5 rounded-lg">
          <p class="text-sm text-gray-500">Books in Stock</p>
          <p class="mt-2 text-3xl font-semibold">8,450</p>
        </div>
        <div class="bg-white p-5 rounded-lg">
          <p class="text-sm text-gray-500">Low Stock Alerts</p>
          <p class="mt-2 text-3xl font-semibold text-red-600">12</p>
        </div>
      </div>

      <!-- Panels -->
      <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        <!-- Recent Orders -->
        <div class="xl:col-span-2 bg-white p-6 rounded-lg">
          <h2 class="font-semibold mb-4">Recent Orders</h2>
          <table class="w-full text-sm">
            <thead class="text-gray-500 border-b">
              <tr>
                <th class="pb-2 text-left">Order #</th>
                <th class="pb-2 text-left">Customer</th>
                <th class="pb-2 text-left">Items</th>
                <th class="pb-2 text-left">Total</th>
                <th class="pb-2 text-left">Status</th>
              </tr>
            </thead>
            <tbody class="divide-y">
              <tr>
                <td class="py-3">BM-10241</td>
                <td>Sarah Khan</td>
                <td>3</td>
                <td>$68.00</td>
                <td class="text-green-600">Paid</td>
              </tr>
              <tr>
                <td class="py-3">BM-10240</td>
                <td>Ali Raza</td>
                <td>1</td>
                <td>$14.99</td>
                <td class="text-yellow-600">Pending</td>
              </tr>
              <tr>
                <td class="py-3">BM-10239</td>
                <td>Ayesha Noor</td>
                <td>5</td>
                <td>$112.50</td>
                <td class="text-green-600">Paid</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Inventory Alerts -->
        <div class="bg-white p-6 rounded-lg">
          <h2 class="font-semibold mb-4">Inventory Alerts</h2>
          <ul class="text-sm space-y-3">
            <li class="flex justify-between">
              <span>The Psychology of Money</span>
              <span class="text-red-600">3 left</span>
            </li>
            <li class="flex justify-between">
              <span>Atomic Habits</span>
              <span class="text-red-600">5 left</span>
            </li>
            <li class="flex justify-between">
              <span>Clean Code</span>
              <span class="text-red-600">2 left</span>
            </li>
          </ul>
        </div>

      </div>

      <!-- Secondary Panels -->
      <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        <!-- Top Books -->
        <div class="bg-white p-6 rounded-lg">
          <h2 class="font-semibold mb-4">Top Selling Books</h2>
          <ul class="text-sm space-y-2">
            <li class="flex justify-between">
              <span>Atomic Habits</span>
              <span>214 sold</span>
            </li>
            <li class="flex justify-between">
              <span>Rich Dad Poor Dad</span>
              <span>187 sold</span>
            </li>
            <li class="flex justify-between">
              <span>Deep Work</span>
              <span>162 sold</span>
            </li>
          </ul>
        </div>

        <!-- Pending Fulfillment -->
        <div class="bg-white p-6 rounded-lg">
          <h2 class="font-semibold mb-4">Pending Fulfillment</h2>
          <p class="text-3xl font-semibold">18</p>
          <p class="text-sm text-gray-500 mt-1">
            Orders awaiting packing or shipment
          </p>
        </div>

        <!-- System Status -->
        <div class="bg-white p-6 rounded-lg">
          <h2 class="font-semibold mb-4">System Status</h2>
          <ul class="text-sm space-y-2">
            <li class="flex justify-between">
              <span>Payments</span>
              <span class="text-green-600">Operational</span>
            </li>
            <li class="flex justify-between">
              <span>Inventory Sync</span>
              <span class="text-green-600">Operational</span>
            </li>
            <li class="flex justify-between">
              <span>Shipping</span>
              <span class="text-green-600">Operational</span>
            </li>
          </ul>
        </div>

      </div>

    </main>
  </div>
</div>

</body>
</html>
