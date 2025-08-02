<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'DM Sans', sans-serif;
    }
    h1, h2 {
      font-family: 'Libre Baskerville', serif;
    }

    #wpforms-11-field_1-container{
      padding:0
    }
  </style>
    <!-- Google Fonts (can be moved to header.php or enqueued later) -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Libre+Baskerville:wght@400;700&display=swap"
  rel="stylesheet"
/>
<style>
  body {
    font-family: 'DM Sans', sans-serif;
  }
  h1, h2 {
    font-family: 'Libre Baskerville', serif;
  }
 .wpforms-submit{
    width:100% !important
 }
 input{
  background:#1A1A1A !important;
  border:1px solid #333333 !important
 }
</style>

</head>
<body <?php body_class(); ?>>
<!-- Logo & Tagline -->
<section class="flex flex-col items-center text-center px-6 py-12 bg-black text-white">
  <img
    src="https://legacyfit.com/wp-content/uploads/2022/03/Legacy-Logo.png"
    alt="Legacy Logo"
    class="w-64 mb-6"
  />
  <h1 class="sr-only">LEGACY</h1>
  <p class="mt-2 text-lg text-white">
    Train smarter. Push harder. Grow stronger. Together.
  </p>
</section>

<!-- WIP Message -->
<section class="text-center px-6 pb-10 bg-black">
  <div
    class="bg-[#1A1A1A] border border-[#333333] text-neutral-300 rounded-xl py-3 px-4 inline-block"
  >
    We're currently building a new digital experience. This is a temporary
    page – but we're fully operational.
  </div>
</section>

<!-- Locations -->
<section class="mx-auto px-6 py-8 bg-black">
  <h2 class="text-2xl font-semibold mb-6 text-center text-white">
    Clubs locations
  </h2>
  <div
    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 text-sm text-neutral-300"
  >
    <!-- Repeatable location blocks -->
    <!-- You can also make this dynamic with ACF later -->
    <div class="text-center">
      <h3 class="font-semibold text-white text-lg">Wynwood</h3>
      <p>2243 N Miami Ave. Suite 110<br />Miami, FL 33127<br />📞 <a href="tel:+13057990850" class="hover:text-white transition-colors">(305) 799-0850</a></p>
    </div>

    <div class="text-center">
      <h3 class="font-semibold text-white text-lg">Coral Gables</h3>
      <p>22 Merrick Way<br />Coral Gables, FL 33134<br />📞 <a href="tel:+13052401096" class="hover:text-white transition-colors">(305) 240-1096</a></p>
    </div>

    <div class="text-center">
      <h3 class="font-semibold text-white text-lg">Doral</h3>
      <p>3470 NW 82nd Ave<br />Doral, FL 33122<br />📞 <a href="tel:+13054694797" class="hover:text-white transition-colors">(305) 469-4797</a></p>
    </div>

    <div class="text-center">
      <h3 class="font-semibold text-white text-lg">Kendall</h3>
      <p>8405 Mills Drive, Suite 204<br />Miami, FL 33183<br />📞 <a href="tel:+13057941551" class="hover:text-white transition-colors">(305) 794-1551</a></p>
    </div>

    <div class="text-center">
      <h3 class="font-semibold text-white text-lg">Pembroke Pines</h3>
      <p>10720 Pines Blvd. H101–H102<br />Pembroke Pines, FL 33026<br />📞 <a href="tel:+17866435155" class="hover:text-white transition-colors">(786) 643-5155</a></p>
    </div>

    <div class="text-center">
      <h3 class="font-semibold text-white text-lg">Ft. Lauderdale</h3>
      <p>500 South Andrews Ave. Unit 120<br />Ft. Lauderdale, FL 33301<br />📞 <a href="tel:+13053024502" class="hover:text-white transition-colors">(305) 302-4502</a></p>
    </div>

    <div class="text-center">
      <h3 class="font-semibold text-white text-lg">Little River</h3>
      <p>7400 NW Miami Court<br />Miami, FL 33150<br />📞 <a href="tel:+13057990850" class="hover:text-white transition-colors">(305) 799-0850</a></p>
    </div>
  </div>
</section>

<!-- Email Collection -->
<section class="py-10 px-6 text-center bg-black">
  <h2 class="text-2xl font-semibold mb-2 text-white">Stay in the loop</h2>
  <p class="text-neutral-400 mb-4">Be the first to know when our new site goes live.</p>
  <div class="max-w-md mx-auto" id="email-form-container">
    <form 
      id="email-form"
      action="https://formspree.io/f/mpwljrye"
      method="POST"
      class="bg-black border border-[#333333] rounded-xl p-6 shadow-lg"
    >
      <input 
        type="email" 
        name="email"
        placeholder="Enter your email" 
        required 
        class="w-full px-4 py-3 mb-4 bg-[#1A1A1A] border border-[#333333] rounded-lg text-white placeholder-neutral-500 focus:outline-none focus:border-neutral-500 transition-colors"
      >
      <button 
        type="submit" 
        class="w-full px-4 py-3 bg-white text-black font-semibold rounded-lg hover:bg-neutral-200 transition-colors"
      >
        Subscribe
      </button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="py-10 text-center text-sm text-neutral-500 bg-black">
  <p class="text-white">
    For inquiries, contact us at
    <a
      href="mailto:info@legacyfit.com"
      class="text-neutral-400 hover:text-white transition-colors"
    >info@legacyfit.com</a>
  </p>
  <div class="flex justify-center gap-4 mt-4 text-neutral-400">
    <a
      href="https://www.facebook.com/LegacyFit/"
      target="_blank"
      class="hover:text-white transition-colors"
    >Facebook</a>
    <a
      href="https://x.com/nodaysoff"
      target="_blank"
      class="hover:text-white transition-colors"
    >X</a>
    <a
      href="https://www.instagram.com/nodaysoff/"
      target="_blank"
      class="hover:text-white transition-colors"
    >Instagram</a>
  </div>
</footer>
  <?php /* End of your content */ ?>
  <?php wp_footer(); ?>
</body>
</html>
