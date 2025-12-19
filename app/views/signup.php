<div class="w-full pt-[80px] min-h-[calc(100vh-70px)] flex flex-col items-center gap-8 lg:flex-row-reverse lg:justify-evenly">

  <div class="flex flex-col gap-4 items-center lg:gap-16">
    <h1 class="text-2xl">NovaCraft</h1>
    <p>Create account and discover more options</p>
  </div>

  <form method="POST" class="flex flex-col gap-8 items-center bg-[#C9C9C9] rounded-lg w-[90%] max-w-[500px] py-8">

    <!-- Email -->
    <div class="w-[90%] flex flex-col">
      <label>Email</label>
      <input type="email" name="email"
        value="<?= htmlspecialchars($old['email'] ?? '') ?>"
        class="rounded-md px-4 h-8 outline-none">
      <?php if (isset($errors['email'])): ?>
        <span class="text-red-500"><?= $errors['email'] ?></span>
      <?php endif; ?>
    </div>

    <!-- Full name -->
    <div class="w-[90%] flex flex-col">
      <label>Full name</label>
      <input type="text" name="fullname"
        value="<?= htmlspecialchars($old['fullname'] ?? '') ?>"
        class="rounded-md px-4 h-8 outline-none">
      <?php if (isset($errors['fullname'])): ?>
        <span class="text-red-500"><?= $errors['fullname'] ?></span>
      <?php endif; ?>
    </div>

    <!-- Password -->
    <div class="w-[90%] flex flex-col">
      <label>Password</label>
      <input type="password" name="password"
        class="rounded-md px-4 h-8 outline-none">
      <?php if (isset($errors['password'])): ?>
        <span class="text-red-500"><?= $errors['password'] ?></span>
      <?php endif; ?>
    </div>

    <!-- Confirm password -->
    <div class="w-[90%] flex flex-col">
      <label>Confirm password</label>
      <input type="password" name="cpassword"
        class="rounded-md px-4 h-8 outline-none">
      <?php if (isset($errors['cpassword'])): ?>
        <span class="text-red-500"><?= $errors['cpassword'] ?></span>
      <?php endif; ?>
    </div>

    <?php if (isset($errors['general'])): ?>
      <span class="text-red-500"><?= $errors['general'] ?></span>
    <?php endif; ?>

    <button class="w-[90%] h-8 bg-[#2C2C2C] text-white rounded-md">
      Sign Up
    </button>

    <a href="/signin" class="underline text-black">Log In?</a>

  </form>
</div>
