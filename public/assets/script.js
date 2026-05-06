/* ====================================
   RS EMBLEM WEBSITE - MAIN SCRIPT
   ==================================== */

/* ====================================
   NAVIGATION - Mobile Menu & Active Link
   ==================================== */

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('navLinks');
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('open');
      hamburger.classList.toggle('active');
    });
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        hamburger.classList.remove('active');
      });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('nav')) {
        navLinks.classList.remove('open');
        hamburger.classList.remove('active');
      }
    });
  }

  // Set active nav link
  const currentPage = window.location.pathname.split('/').pop();
  document.querySelectorAll('.nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });
});

/* ====================================
   PRODUCT MODALS - Product Details Display
   ==================================== */

// Product modal data
const productDetails = {
  silicone: { name: "Liquid Silicone Printing System", specs: "Mixing Ratio: 10:1 | Viscosity: 35,000-45,000 cP | Curing: 120-150°C | Hardness: 30A-70A", description: "Two-component silicone for screen printing and 3D emblem molding. Excellent adhesion to textiles, high wash fastness (ISO 4-5).", features: "High elasticity, UV resistant, custom colors." },
  tpu: { name: "TPU Heat Transfer Labels", specs: "Thickness: 0.1-0.5mm | Application: 150-160°C | Pressure: 3-5 bar", description: "Durable TPU labels with heat-activated adhesive. Ideal for garments, footwear, bags.", features: "Wash resistant, flexible, Pantone color matching." },
  pvc: { name: "PVC Rubber Patches & 3D Emblems", specs: "Thickness: 1.5-5mm | Hardness: 50-80 Shore A", description: "Custom 3D PVC patches, key fobs, emblems. UV and weather resistant.", features: "3D raised effect, any shape/color, sew-on backing." },
  machinery: { name: "Production Machinery", specs: "Dispensing accuracy: ±0.01ml | Touch screen control", description: "Automatic dispensing machines, vacuum mixers, heat presses.", features: "PLC control, stainless steel, CE certified." },
  chemicals: { name: "Printing Chemicals", specs: "Various grades available", description: "Industrial-grade catalysts, binders, release agents, pigments.", features: "Low VOC, stable shelf life, enhances adhesion." },
  accessories: { name: "Machine Accessories", specs: "OEM quality", description: "Dispensing valves, solenoids, sensors, cylinders, needles.", features: "AirTAC & MAC brands, 12-month warranty." },
  dispensing: { name: "Liquid Silicone Dispensing Machine", specs: "Accuracy: ±0.01ml | Touch Screen Control | Ratio Control", description: "Automated A+B component dispensing with precise ratio control and programmable volumes. Professional grade for production facilities.", features: "Programmable recipes, memory storage, safety interlocks, CE certified." },
  mixing: { name: "Vacuum De-bubbling Mixer", specs: "Vacuum Chamber | Stainless Steel | Variable Speed Control", description: "Industrial vacuum mixer eliminates air bubbles from silicone and epoxy compounds. Uniform mixing for consistent quality.", features: "Stainless steel chamber, safety interlocks, emergency stop, adjustable speed." },
  heating: { name: "Convection Curing Oven", specs: "Temperature Range: 50-250°C | Uniform Heat Distribution", description: "Temperature-controlled curing oven for silicone and resin products. Precise temperature maintenance.", features: "Digital display, safety interlocks, energy efficient, fast ramp-up." },
  "silicone-base": { name: "High-Grade Silicone Base Polymer", specs: "Viscosity: 5,000-50,000 cP | Package: 20kg bucket | Storage: 12 months", description: "Premium silicone base for custom formulations. Mix ratio flexibility from 10:1 to 15:1.", features: "High purity, consistent quality, bulk discounts available." },
  "silicone-catalyst": { name: "Platinum Catalyst & Cross-linker", specs: "Type: Platinum | Mixing Ratio: 10:1, 15:1 | Cure Speed: Fast", description: "High-efficiency platinum catalyst for rapid and reliable curing. Optimal for production environments.", features: "Consistent cure times, reduced pot life variability, professional grade." },
  "silicone-inhibitor": { name: "Cure Inhibitor & Accelerator Pack", specs: "Time Range: 30 minutes to 24 hours | Adjustable", description: "Fine-tune production schedules with flexible cure timing. Optimal for different manufacturing processes.", features: "Flexible scheduling, quality consistency, easy to use." },
  "pigments-silicone": { name: "Premium Silicone Pigment Paste", specs: "Colors: 30+ options | Pantone matched | Package: 500ml, 1L", description: "Professional-grade pigments for vibrant, consistent colors. Perfect for custom branding.", features: "Pantone matching, high color intensity, easy mixing." },
  "pigments-uv": { name: "UV-Reactive & Fluorescent Pigments", specs: "UV-Reactive | High Visibility | Multiple Colors", description: "High-visibility pigments for safety applications. Vibrant under UV light.", features: "Excellent light-fastness, consistent color, safety certified." },
  "pigments-metallic": { name: "Metallic & Pearlescent Pigments", specs: "Options: Gold, Silver, Copper | Premium Grade", description: "Premium metallic finishes for luxury branding. Compatible with all silicone systems.", features: "High luster, excellent adhesion, professional appearance." },
  "additives-thinner": { name: "Silicone Thinner & Viscosity Reducer", specs: "Low VOC | Adjustable viscosity | Industrial Grade", description: "Professional-grade solvent for precise viscosity adjustment. Improved flow properties.", features: "Low VOC, stable shelf life, easy to use." },
  "additives-release": { name: "Mold Release Agent", specs: "Spray Application | Long-lasting | Professional Grade", description: "Easy demolding assistance for PVC and silicone molds. Protects mold surfaces.", features: "Long-lasting protection, easy application, effective coating." },
  "additives-fillers": { name: "Reinforcement Fillers & Fibers", specs: "Glass Fiber | Mineral Fillers | Strength Enhancement", description: "Improves hardness and wear resistance. Perfect for demanding applications.", features: "Uniform distribution, consistent quality, easy mixing." },
  "tpu-base": { name: "TPU Base Compound - Flexible Grade", specs: "Flexibility: High | Package: 25kg | Heat Application: 150-160°C", description: "Flexible thermoplastic polyurethane for heat transfer. Excellent wash fastness and durability.", features: "Flexible, washable, excellent adhesion, professional grade." },
  "tpu-rigid": { name: "TPU Base Compound - Rigid Grade", specs: "Rigidity: High | Package: 25kg | Durability: Excellent", description: "Rigid TPU for premium patches and emblems. Long-lasting color retention.", features: "Durable, color-fast, excellent shape retention." },
  "tpu-adhesive": { name: "TPU Heat-Activated Adhesive", specs: "Application Temp: 150-160°C | Wash Fastness: ISO 5 | Type: Hot-melt", description: "Professional-grade adhesive for iron-on applications. Reliable bonding.", features: "Strong adhesion, excellent wash resistance, easy application." },
  "pvc-compound": { name: "PVC Plastisol Compound", specs: "Ready-to-use | UV Resistant | Easy Cleanup", description: "Professional PVC plastisol for screen printing. Excellent flow and finish.", features: "Easy cleanup, UV resistant, consistent quality." },
  "rubber-compound": { name: "Synthetic Rubber Compound", specs: "Durometer: Shore A 30-90 | Natural & Synthetic blend | Flexible", description: "Premium rubber blends for flexible patches and emblems. Superior elasticity.", features: "High flexibility, excellent durability, custom hardness options." },
  "backing-materials": { name: "Adhesive Backing & Hook/Loop Materials", specs: "Self-adhesive & Mechanical | Multiple Thicknesses | Professional Grade", description: "Complete fastening solutions for patches. Various adhesion grades available.", features: "Reliable adhesion, multiple options, professional quality." }
};


// Open product modal with details
function openProductModal(productId) {
  const data = productDetails[productId];
  if (!data) return;
  const modal = document.getElementById('productModal');
  const modalBody = document.getElementById('modalBody');
  modalBody.innerHTML = `
    <h2 style="color: var(--primary-blue); margin-bottom: 16px;">${data.name}</h2>
    <div style="background: var(--blue-light); padding: 16px; border-radius: 20px; margin-bottom: 20px;">
      <strong style="color: var(--primary-red);">Technical Specifications</strong><br>${data.specs}
    </div>
    <p style="margin-bottom: 16px;">${data.description}</p>
    <p><strong>Key Features:</strong> ${data.features}</p>
    <div style="margin-top: 24px;">
      <a href="#contact" class="btn-circle btn-primary" onclick="closeModal()">Request a Quote →</a>
    </div>
  `;
  modal.style.display = 'flex';
}

// Close product modal
function closeModal() {
  document.getElementById('productModal').style.display = 'none';
}

/* ====================================
   PRODUCT IMAGE GALLERY - Thumbnail Switcher
   ==================================== */

// Change product image on thumbnail click
function changeProductImage(thumbElement, mainImageId, imageUrl) {
  const mainImage = document.getElementById(mainImageId);
  if (mainImage) {
    mainImage.src = imageUrl;
  }
  
  // Update active thumbnail
  document.querySelectorAll('.thumb').forEach(thumb => {
    thumb.classList.remove('active');
  });
  thumbElement.classList.add('active');
}

/* ====================================
   CONTACT FORM - Form Submission & Validation
   ==================================== */

// Contact form handler
document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const successMsg = document.getElementById('contactSuccess');
      if (successMsg) {
        successMsg.style.display = 'flex';
        this.reset();
        setTimeout(() => {
          successMsg.style.display = 'none';
        }, 5000);
      }
    });
  }
});


  const btn = document.getElementById("productBtn");
  const menu = document.getElementById("productDropdown");

  btn.addEventListener("click", (e) => {
    e.stopPropagation();
    menu.classList.toggle("hidden");
    btn.classList.toggle("open");
  });

  // click outside to close
  document.addEventListener("click", () => {
    menu.classList.add("hidden");
    btn.classList.remove("open");
  });

  // prevent dropdown from closing when clicking inside it
  menu.addEventListener("click", (e) => {
    e.stopPropagation();
  });
