@extends('layouts.master')
@section('content')
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.html">Home</a> / Contact</div>
    <h1>Get In <span>Touch</span></h1>
    <div class="hero-line"></div>
  </div>
</div>

<section>
  <div class="container">
    <div class="contact-grid">
      <div>
        <div class="contact-detail-item"><div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div><div><h3>Visit Us</h3><p>Hazi Chan Miah Tower, Zirabo, Ashulia, Savar, Dhaka-1341, Bangladesh</p></div></div>
        <div class="contact-detail-item"><div class="contact-icon"><i class="fas fa-phone-alt"></i></div><div><h3>Call Us</h3><p><a href="tel:+8801931669605">+8801931669605</a><br>Mon–Sat, 9AM – 6PM (BST)</p></div></div>
        <div class="contact-detail-item"><div class="contact-icon"><i class="fas fa-envelope"></i></div><div><h3>Email Us</h3><p><a href="mailto:rsemblem2022@gmail.com">rsemblem2022@gmail.com</a><br>For quotes, samples, and technical support</p></div></div>
      </div>
      <div>
        <div class="form-card">
          <h3>Send us a message</h3>
          <p>Fill out the form and our team will get back to you shortly.</p>
          <div id="contactSuccess" class="success-msg"><i class="fas fa-check-circle"></i> Thank you! We'll contact you soon.</div>
          <form id="contactForm">
            <div class="form-group"><input type="text" name="name" placeholder="Full Name *" required></div>
            <div class="form-group"><input type="email" name="email" placeholder="Email Address *" required></div>
            <div class="form-group"><input type="tel" name="phone" placeholder="Phone Number"></div>
            <div class="form-group"><select name="subject"><option>Product Quote</option><option>Request Sample</option><option>Technical Support</option><option>Partnership</option></select></div>
            <div class="form-group"><textarea name="message" rows="4" placeholder="Your message..."></textarea></div>
            <button type="submit" class="btn-circle btn-primary" style="width: 100%;">Send Message <i class="fas fa-paper-plane"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection