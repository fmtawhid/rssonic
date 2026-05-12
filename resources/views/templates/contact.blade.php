@extends('layouts.master')

@section('content')

<!-- ================= HERO ================= -->
<div class="page-hero relative overflow-hidden py-20 text-center bg-gradient-to-br from-blue-900 to-black">

  <div class="absolute top-0 right-0 w-96 h-96 bg-red-500 opacity-10 rounded-full"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-red-400 opacity-10 rounded-full"></div>

  <div class="relative z-10 container mx-auto px-4">
    <div class="text-white/80 mb-4">
      <a href="/" class="hover:text-white">Home</a> / <span class="text-red-400">Contact</span>
    </div>

    <h1 class="text-4xl md:text-5xl font-bold text-white">
      Get In <span class="text-red-500">Touch</span>
    </h1>

    <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-transparent mx-auto my-5"></div>

    <p class="text-white/80 max-w-xl mx-auto">
      We're here to help. Reach out with any questions or inquiries.
    </p>
  </div>
</div>

<!-- ================= CONTACT SECTION ================= -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">

    <div class="text-center mb-12">
      <span class="text-sm text-gray-500 uppercase tracking-widest">
        Get In Touch
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2">
        Send us a Message
      </h2>
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

      <!-- ================= FORM ================= -->
      <div class="bg-gradient-to-br from-yellow-50 to-white border border-red-100 rounded-2xl shadow-lg p-6 md:p-10">

        <h3 class="text-2xl font-bold text-blue-900 mb-2">
          Send us a Message
        </h3>
        <p class="text-sm text-gray-500 mb-6">
          Our team will respond within 24 hours
        </p>

        <!-- SUCCESS -->
        <div id="contactSuccess" class="hidden bg-green-600 text-white p-3 rounded-lg mb-4">
          Thank you! We'll contact you soon.
        </div>

        <!-- ERROR -->
        <div id="contactError" class="hidden bg-red-600 text-white p-3 rounded-lg mb-4">
          <span id="errorMessage">Something went wrong</span>
        </div>

        <form id="contactForm" class="space-y-4">

          <input type="text" name="name" placeholder="Full Name *" required
            class="w-full p-3 border rounded-lg focus:border-red-500 outline-none">

          <input type="email" name="email" placeholder="Email Address *" required
            class="w-full p-3 border rounded-lg focus:border-red-500 outline-none">

          <input type="tel" name="phone" placeholder="Phone Number"
            class="w-full p-3 border rounded-lg focus:border-red-500 outline-none">

          <textarea name="message" rows="4" placeholder="Your message..."
            class="w-full p-3 border rounded-lg focus:border-red-500 outline-none"></textarea>

          <button type="submit"
            class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg transition">
            Send Message <i class="fas fa-paper-plane ml-2"></i>
          </button>

        </form>
      </div>

      <!-- ================= INFO ================= -->
      <div class="space-y-6">

        <div class="bg-white border-l-4 border-red-500 shadow-md rounded-xl p-6 flex gap-4">
          <i class="fas fa-map-marker-alt text-2xl text-red-600"></i>
          <div>
            <h4 class="font-bold text-blue-900">Visit Us</h4>
            <p class="text-gray-600 text-sm">
              Hazi Chan Miah Tower<br>
              Zirabo, Ashulia, Savar, Dhaka
            </p>
          </div>
        </div>

        <div class="bg-white border-l-4 border-blue-600 shadow-md rounded-xl p-6 flex gap-4">
          <i class="fas fa-phone-alt text-2xl text-blue-600"></i>
          <div>
            <h4 class="font-bold text-blue-900">Call Us</h4>
            <a href="tel:+8801931669605" class="text-red-600 font-bold">
              +8801931669605
            </a>
          </div>
        </div>

        <div class="bg-white border-l-4 border-yellow-500 shadow-md rounded-xl p-6 flex gap-4">
          <i class="fas fa-envelope text-2xl text-yellow-500"></i>
          <div>
            <h4 class="font-bold text-blue-900">Email Us</h4>
            <a href="mailto:rsemblem2022@gmail.com" class="text-red-600 font-bold">
              rsemblem2022@gmail.com
            </a>
          </div>
        </div>

        <!-- SOCIAL -->
        <div class="flex flex-wrap justify-center gap-4 pt-4">

          <a href="#" class="w-12 h-12 flex items-center justify-center border rounded-full text-red-600 hover:bg-red-600 hover:text-white transition">
            <i class="fab fa-facebook-f"></i>
          </a>

          <a href="#" class="w-12 h-12 flex items-center justify-center border rounded-full text-blue-500 hover:bg-blue-500 hover:text-white transition">
            <i class="fab fa-twitter"></i>
          </a>

          <a href="#" class="w-12 h-12 flex items-center justify-center border rounded-full text-blue-700 hover:bg-blue-700 hover:text-white transition">
            <i class="fab fa-linkedin-in"></i>
          </a>

          <a href="#" class="w-12 h-12 flex items-center justify-center border rounded-full text-pink-500 hover:bg-pink-500 hover:text-white transition">
            <i class="fab fa-instagram"></i>
          </a>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- ================= MAP ================= -->
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 text-center mb-8">
    <h2 class="text-3xl font-bold text-gray-800">Find Us On Map</h2>
  </div>

  <div class="max-w-6xl mx-auto px-4">
    <div class="rounded-2xl overflow-hidden shadow-xl h-[300px] md:h-[450px]">
      <iframe
        class="w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18..."
        loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<!-- ================= SCRIPT ================= -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const button = this.querySelector('button');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    button.disabled = true;
    button.innerHTML = 'Sending...';

    fetch('{{ route("contact.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if(data.success) {
            document.getElementById('contactSuccess').classList.remove('hidden');
            document.getElementById('contactError').classList.add('hidden');
            this.reset();
        } else {
            document.getElementById('contactError').classList.remove('hidden');
        }
    })
    .catch(() => {
        document.getElementById('contactError').classList.remove('hidden');
    })
    .finally(() => {
        button.disabled = false;
        button.innerHTML = 'Send Message';
    });
});
</script>

@endsection