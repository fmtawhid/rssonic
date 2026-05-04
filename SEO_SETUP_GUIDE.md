# SEO & Performance Optimization Configuration Guide

## 🚀 Quick Start Checklist

### 1. Configure Google Analytics
In your `.env` file, add:
```
GOOGLE_ANALYTICS_ID=G-XXXXXXXX
```

Then update `resources/views/layouts/master.blade.php` (around line 60):
```blade
gtag('config', '{{ env("GOOGLE_ANALYTICS_ID") }}');
```

### 2. Update Domain in robots.txt
Edit `public/robots.txt` line 28:
```
Sitemap: https://yourdomain.com/sitemap.xml
```

### 3. Add Favicon Files
Create these in the `public/` folder:
- `favicon.ico` - 32x32 pixels (ICO format)
- `assets/apple-touch-icon.png` - 180x180 pixels (PNG format)
- `assets/og-image.jpg` - 1200x630 pixels (JPG format)

### 4. Verify Schema.org Data
Update coordinates in `resources/views/layouts/master.blade.php` (around line 87):
```blade
"latitude": "23.9000",  // Your location latitude
"longitude": "90.2000"  // Your location longitude
```

Get your coordinates from: https://www.google.com/maps

### 5. Test Your Setup
Visit these URLs:
- `https://yourdomain.com/sitemap.xml` - Should show XML sitemap
- `https://yourdomain.com/robots.txt` - Should show robots rules
- `https://yourdomain.com/invalid-url` - Should show custom 404 page

## 📋 Database Migrations (if needed)

If your Product table doesn't have these columns, run:

```sql
ALTER TABLE products ADD COLUMN meta_description VARCHAR(160) NULLABLE;
ALTER TABLE products ADD COLUMN meta_keywords VARCHAR(255) NULLABLE;
ALTER TABLE blogs ADD COLUMN meta_keywords VARCHAR(255) NULLABLE;
```

Or create a migration:
```bash
php artisan make:migration add_seo_fields_to_products_table
```

## 🔍 SEO Testing Tools

1. **Google Search Console**
   - Visit: https://search.google.com/search-console
   - Add your domain
   - Submit sitemap at: https://yourdomain.com/sitemap.xml

2. **Google Mobile-Friendly Test**
   - Visit: https://search.google.com/test/mobile-friendly
   - Test your homepage

3. **Schema Markup Validator**
   - Visit: https://schema.org/docs/extension.html
   - Or use: https://validator.schema.org/

4. **PageSpeed Insights**
   - Visit: https://pagespeed.web.dev/
   - Analyze performance

5. **GTmetrix**
   - Visit: https://gtmetrix.com/
   - Detailed performance analysis

## 🎯 Content Optimization Tips

### For Blog Posts
- Title: 50-60 characters
- Meta Description: 150-160 characters
- Include H1, H2, H3 headers
- Use keywords naturally (1-2% density)
- Add internal links to related posts
- Include images with alt text

### For Product Pages
- Name: Clear, 50-60 characters
- Description: 200+ words with keywords
- Meta description: Focus on benefits
- Include product specifications
- Add high-quality images

## 🔒 Security Best Practices

All security headers are automatically applied via the middleware:
- ✅ HTTPS forced (Strict-Transport-Security)
- ✅ MIME type protection (X-Content-Type-Options)
- ✅ Clickjacking prevention (X-Frame-Options)
- ✅ XSS protection headers set
- ✅ Content Security Policy configured

## ⚡ Performance Optimization

Already implemented:
- ✅ Browser cache headers for static assets (1 year)
- ✅ Gzip compression enabled
- ✅ Trailing slash canonicalization
- ✅ External scripts loaded async
- ✅ DNS prefetch for critical resources

Additional recommendations:
1. Optimize images (use WebP format)
2. Minify CSS/JavaScript
3. Use a CDN for static assets
4. Enable caching on database queries
5. Consider lazy loading for images

## 📝 Recommended SEO Keyword Strategies

**For Homepage:**
- "industrial materials Bangladesh"
- "printing supplies supplier"
- "industrial machinery solutions"

**For Machinery Page:**
- "industrial machinery Bangladesh"
- "production equipment supplier"

**For Materials Page:**
- "raw materials supplier"
- "printing materials Bangladesh"

**For Blog:**
- Industry-specific long-tail keywords
- How-to guides
- Product comparison posts

## 🔗 Backlink Building Strategy

1. Submit to local business directories:
   - Google My Business
   - Facebook Business
   - Industry directories

2. Create partnerships:
   - Industry associations
   - Related businesses
   - Local chambers of commerce

3. Content marketing:
   - Guest blog posts
   - Industry publications
   - Resource mentions

4. Local SEO:
   - Local citations
   - Industry reviews
   - Community involvement

## 📊 Monthly SEO Checklist

- [ ] Check Google Search Console for errors
- [ ] Monitor keyword rankings
- [ ] Review analytics for traffic sources
- [ ] Check for new backlinks
- [ ] Update content as needed
- [ ] Audit page speed metrics
- [ ] Review meta descriptions
- [ ] Check for broken links
- [ ] Update blog with new content
- [ ] Analyze competitor strategies

## 📞 Support & Resources

- Laravel Documentation: https://laravel.com/docs
- Google Search Console Help: https://support.google.com/webmasters
- Schema.org Documentation: https://schema.org/
- SEO Best Practices: https://developers.google.com/search/docs

---
**Last Updated:** 2025-05-04
**Version:** 1.0
