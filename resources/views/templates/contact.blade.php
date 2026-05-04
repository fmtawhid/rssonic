@extends('layouts.master')
@section('content')

<!-- ✨ PREMIUM HERO SECTION -->
<div class="page-hero" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #1E2D5A 100%); position: relative; overflow: hidden; padding: 80px 0;">
  <!-- Decorative circles -->
  <div style="position: absolute; top: 0; right: 0; width: 400px; height: 300px; background: rgba(217, 42, 44, 0.1); border-radius: 50%; transform: translate(100px, -100px);"></div>
  <div style="position: absolute; bottom: 0; left: 0; width: 300px; height: 300px; background: rgba(217, 42, 44, 0.08); border-radius: 50%; transform: translate(-100px, 100px);"></div>
  
  <div class="container" style="position: relative; z-index: 2; text-align: center;">
    <div class="breadcrumb" style="color: rgba(255,255,255,0.8); margin-bottom: 20px;"><a href="/" style="color: rgba(255,255,255,0.9);">Home</a> / <span style="color: var(--primary-red);">Contact</span></div>
    <h1 style="font-size: 48px; color: white; margin-bottom: 10px;">Get In <span style="color: var(--primary-red);">Touch</span></h1>
    <div class="hero-line" style="background: linear-gradient(90deg, var(--primary-red) 0%, transparent 100%); margin: 20px auto;"></div>
    <p style="font-size: 16px; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">We're here to help. Reach out with any questions or inquiries.</p>
  </div>
</div>

<!-- � FORM & CONTACT INFO SECTION (Row 1) -->
<section style="padding: 80px 0; background: white;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;">
      <div class="section-label">Get In Touch</div>
      <h2 class="section-title">Send us a Message & Contact Info</h2>
    </div>

    <!-- Grid: Form + Info Cards -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
      
      <!-- LEFT: CONTACT FORM -->
      <div>
        <div style="background: linear-gradient(135deg, #FEFCF7 0%, #FFF9EF 100%); border-radius: 20px; padding: 50px 40px; border: 2px solid rgba(217, 42, 44, 0.1); box-shadow: 0 15px 40px rgba(0,0,0,0.1);">
          <h3 style="font-size: 28px; font-weight: 800; color: var(--primary-blue); margin-bottom: 8px;">Send us a Message</h3>
          <p style="color: var(--text-muted); margin-bottom: 30px; font-size: 14px;">Our team will respond within 24 hours</p>
          
          <div id="contactSuccess" class="success-msg" style="background: linear-gradient(135deg, #10b981, #059669); color: white; padding: 15px 18px; border-radius: 12px; margin-bottom: 20px; display: none; align-items: center; gap: 10px; font-size: 14px;"><i class="fas fa-check-circle"></i> <span>Thank you! We'll contact you soon.</span></div>
          
          <div id="contactError" class="error-msg" style="background: linear-gradient(135deg, #ef4444, #dc2626); color: white; padding: 15px 18px; border-radius: 12px; margin-bottom: 20px; display: none; align-items: center; gap: 10px; font-size: 14px;"><i class="fas fa-exclamation-circle"></i> <span id="errorMessage">An error occurred</span></div>
          
          <form id="contactForm">
            <div class="form-group" style="margin-bottom: 18px;">
              <input type="text" name="name" placeholder="Full Name *" required style="width: 100%; padding: 13px 15px; border: 2px solid #e5e7eb; border-radius: 10px; font-family: 'Roboto', sans-serif; font-size: 14px; transition: all 0.3s ease;" onfocus="this.style.borderColor='var(--primary-red)'" onblur="this.style.borderColor='#e5e7eb'">
            </div>
            <div class="form-group" style="margin-bottom: 18px;">
              <input type="email" name="email" placeholder="Email Address *" required style="width: 100%; padding: 13px 15px; border: 2px solid #e5e7eb; border-radius: 10px; font-family: 'Roboto', sans-serif; font-size: 14px; transition: all 0.3s ease;" onfocus="this.style.borderColor='var(--primary-red)'" onblur="this.style.borderColor='#e5e7eb'">
            </div>
            <div class="form-group" style="margin-bottom: 18px;">
              <input type="tel" name="phone" placeholder="Phone Number" style="width: 100%; padding: 13px 15px; border: 2px solid #e5e7eb; border-radius: 10px; font-family: 'Roboto', sans-serif; font-size: 14px; transition: all 0.3s ease;" onfocus="this.style.borderColor='var(--primary-red)'" onblur="this.style.borderColor='#e5e7eb'">
            </div>
          
            <div class="form-group" style="margin-bottom: 25px;">
              <textarea name="message" rows="4" placeholder="Your message..." required style="width: 100%; padding: 13px 15px; border: 2px solid #e5e7eb; border-radius: 10px; font-family: 'Roboto', sans-serif; font-size: 14px; resize: none; transition: all 0.3s ease;" onfocus="this.style.borderColor='var(--primary-red)'" onblur="this.style.borderColor='#e5e7eb'"></textarea>
            </div>
            <button type="submit" class="btn-circle btn-primary" style="width: 100%; padding: 14px 20px; font-size: 16px; font-weight: 700;">Send Message <i class="fas fa-paper-plane" style="margin-left: 10px;"></i></button>
          </form>
        </div>
      </div>

      <!-- RIGHT: CONTACT INFO CARDS -->
      <div>
        <div style="display: flex; flex-direction: column; gap: 25px;">
          
          <!-- 📍 Visit Us Card -->
          <div class="product-card" style="background: white; border-left: 5px solid var(--primary-red); position: relative; overflow: hidden; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(0,0,0,0.08);">
            <div style="padding: 30px; display: flex; align-items: flex-start; gap: 20px;">
              <div style="background: linear-gradient(135deg, var(--primary-red), #c01d1f); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 6px 16px rgba(217, 42, 44, 0.2);">
                <i class="fas fa-map-marker-alt" style="font-size: 26px; color: white;"></i>
              </div>
              <div>
                <h4 style="font-size: 18px; font-weight: 700; color: var(--primary-blue); margin-bottom: 10px; margin-top: 0;">Visit Us</h4>
                <p style="color: var(--text-muted); line-height: 1.7; margin: 0; font-size: 14px;">
                  Hazi Chan Miah Tower<br>
                  Zirabo, Ashulia<br>
                  Savar, Dhaka-1341<br>
                  Bangladesh
                </p>
              </div>
            </div>
          </div>

          <!-- 📞 Call Us Card -->
          <div class="product-card" style="background: white; border-left: 5px solid var(--primary-blue); position: relative; overflow: hidden; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(0,0,0,0.08);">
            <div style="padding: 30px; display: flex; align-items: flex-start; gap: 20px;">
              <div style="background: linear-gradient(135deg, var(--primary-blue), #1E2D5A); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 6px 16px rgba(43, 58, 127, 0.2);">
                <i class="fas fa-phone-alt" style="font-size: 26px; color: white;"></i>
              </div>
              <div>
                <h4 style="font-size: 18px; font-weight: 700; color: var(--primary-blue); margin-bottom: 10px; margin-top: 0;">Call Us</h4>
                <p style="color: var(--text-muted); line-height: 1.7; margin: 0; font-size: 14px;">
                  <a href="tel:+8801931669605" style="color: var(--primary-red); font-weight: 700; text-decoration: none;">+8801931669605</a><br>
                  <span style="font-size: 13px;">Mon–Sat, 9AM – 6PM (BST)</span>
                </p>
              </div>
            </div>
          </div>

          <!-- 📧 Email Us Card -->
          <div class="product-card" style="background: white; border-left: 5px solid #f59e0b; position: relative; overflow: hidden; transition: all 0.3s ease; box-shadow: 0 8px 24px rgba(0,0,0,0.08);">
            <div style="padding: 30px; display: flex; align-items: flex-start; gap: 20px;">
              <div style="background: linear-gradient(135deg, #f59e0b, #d97706); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 6px 16px rgba(245, 158, 11, 0.2);">
                <i class="fas fa-envelope" style="font-size: 26px; color: white;"></i>
              </div>
              <div>
                <h4 style="font-size: 18px; font-weight: 700; color: var(--primary-blue); margin-bottom: 10px; margin-top: 0;">Email Us</h4>
                <p style="color: var(--text-muted); line-height: 1.7; margin: 0; font-size: 14px;">
                  <a href="mailto:rsemblem2022@gmail.com" style="color: var(--primary-red); font-weight: 700; text-decoration: none;">rsemblem2022@gmail.com</a><br>
                  <span style="font-size: 13px;">Quotes, samples & support</span>
                </p>
              </div>
            </div>
          </div>
          
<div style="display: flex; justify-content: center; gap: 25px; flex-wrap: wrap;">
      
      <a href="https://facebook.com" target="_blank" style="width: 55px; height: 55px; background: rgba(255,255,255,0.1); border: 2px solid var(--primary-red); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-red); font-size: 22px; transition: all 0.3s ease;" onmouseover="this.style.background='var(--primary-red)'; this.style.color='white'" onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.color='var(--primary-red)'">
        <i class="fab fa-facebook-f"></i>
      </a>

      <a href="https://twitter.com" target="_blank" style="width: 55px; height: 55px; background: rgba(255,255,255,0.1); border: 2px solid #1DA1F2; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #1DA1F2; font-size: 22px; transition: all 0.3s ease;" onmouseover="this.style.background='#1DA1F2'; this.style.color='white'" onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.color='#1DA1F2'">
        <i class="fab fa-twitter"></i>
      </a>

      <a href="https://linkedin.com" target="_blank" style="width: 55px; height: 55px; background: rgba(255,255,255,0.1); border: 2px solid #0A66C2; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0A66C2; font-size: 22px; transition: all 0.3s ease;" onmouseover="this.style.background='#0A66C2'; this.style.color='white'" onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.color='#0A66C2'">
        <i class="fab fa-linkedin-in"></i>
      </a>

      <a href="https://instagram.com" target="_blank" style="width: 55px; height: 55px; background: rgba(255,255,255,0.1); border: 2px solid #E4405F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #E4405F; font-size: 22px; transition: all 0.3s ease;" onmouseover="this.style.background='#E4405F'; this.style.color='white'" onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.color='#E4405F'">
        <i class="fab fa-instagram"></i>
      </a>

      <a href="https://youtube.com" target="_blank" style="width: 55px; height: 55px; background: rgba(255,255,255,0.1); border: 2px solid #FF0000; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #FF0000; font-size: 22px; transition: all 0.3s ease;" onmouseover="this.style.background='#FF0000'; this.style.color='white'" onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.color='#FF0000'">
        <i class="fab fa-youtube"></i>
      </a>

    </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- 🗺️ MAP SECTION (Row 2) -->
<section style="padding: 80px 0; background: linear-gradient(135deg, #f9fafe 0%, white 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 50px;">
      <div class="section-label">Our Location</div>
      <h2 class="section-title">Find Us On Map</h2>
      <p style="color: var(--text-muted); font-size: 16px; max-width: 600px; margin: 15px auto 0;">Visit us at our office in Ashulia, Savar, Dhaka for meetings and inquiries</p>
    </div>

    <!-- Full Width Map -->
    <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.12); height: 450px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8467329156906!2d90.20661631531556!3d23.84537499154558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb8b8b8b8b%3A0x0!2sRS%20Emblem%20And%20New%20Materials%20Technology!5e0!3m2!1sen!2sbd!4v1234567890" 
              width="100%" 
              height="100%" 
              style="border: none;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const button = this.querySelector('button[type="submit"]');
    const originalText = button.innerHTML;
    
    // Get CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    // Disable button and show loading state
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    
    console.log('Form data:', {
        name: formData.get('name'),
        email: formData.get('email'),
        phone: formData.get('phone'),
        message: formData.get('message')
    });
    
    fetch('{{ route("contact.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(response => {
        console.log('Response status:', response.status);
        if (!response.ok) {
            return response.json().then(data => {
                throw new Error(JSON.stringify(data));
            });
        }
        return response.json();
    })
    .then(data => {
        console.log('Success response:', data);
        if(data.success) {
            // Show success message
            document.getElementById('contactSuccess').style.display = 'flex';
            document.getElementById('contactError').style.display = 'none';
            
            // Reset form
            document.getElementById('contactForm').reset();
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                document.getElementById('contactSuccess').style.display = 'none';
            }, 5000);
        } else {
            document.getElementById('errorMessage').textContent = data.message || 'Something went wrong';
            document.getElementById('contactError').style.display = 'flex';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('errorMessage').textContent = error.message;
        document.getElementById('contactError').style.display = 'flex';
    })
    .finally(() => {
        // Re-enable button
        button.disabled = false;
        button.innerHTML = originalText;
    });
});
</script>

@endsection