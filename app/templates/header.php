<header class="bg-white shadow-md">
  <nav class="container mx-auto flex justify-between items-center py-4">
    <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
    <?php $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if($current === '/signin' ||  $current === '/signup')
      $show = 'hidden';
    else
      $show = 'inline';
    ?>
    <ul class="flex space-x-6">
      <li>
        <a href="/" class="<?php echo $current === '/' ? 'text-blue-600 font-medium ' : 'hover:text-blue-600 '; echo $show ?>">Home</a>
      </li>

      <li>
        <a href="/services" class="<?php echo $current === '/services' ? 'text-blue-600 font-medium ' : 'hover:text-blue-600 '; echo $show ?>">Services</a>
      </li>

      <li>
        <a href="/about" class="<?php echo $current === '/about' ? 'text-blue-600 font-medium ' : 'hover:text-blue-600 '; echo $show ?>">About us</a>
      </li>

      <li>
        <a href="/contact" class="<?php echo $current === '/contact' ? 'text-blue-600 font-medium ' : 'hover:text-blue-600 '; echo $show ?>">Contact Us</a>
      </li>
      <li>
        <a href="/admin" class="<?php echo $current === '/admin' ? 'text-blue-600 font-medium ' : 'hover:text-blue-600 '; echo isset($_SESSION['role']) && $_SESSION['role'] === 'admin' ? 'inline':'hidden' ?>">Dashboard</a>
      </li>
      <li>
        <a href="/profile" class="border border-black rounded-full p-1  flex justify-center align-center <?php echo $current === '/profile' ? 'text-blue-600 font-medium ' : 'hover:text-blue-600 '; echo $show ?>"><i class="fa-solid fa-user"></i></a>
      </li>
      <li>
        <a class="px-8  border border-gray-600 rounded-md hover:bg-neutral-100 <?php echo $show ?>" href = "/logout">Sign Out</a>
      </li>
    </ul>
  </nav>
</header>
