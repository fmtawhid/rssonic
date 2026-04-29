<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // ==================== MACHINES (10) ====================
            [
                'name' => 'CE Certificated Liquid PVC 3D Toys Making Machine',
                'slug' => 'ce-certificated-liquid-pvc-3d-toys-making-machine',
                'product_type' => 'machine',
                'description' => 'Efficient CE Certified Liquid PVC 3D Toys Making Machines. In the competitive rubber and silicone manufacturing sector, efficiency defines profitability. Our PVC Toy Making Machine is engineered for modern factories producing high-quality 3D soft toys and products.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Silicone Heat Transfer Label Making Machine',
                'slug' => 'silicone-heat-transfer-label-making-machine',
                'product_type' => 'machine',
                'description' => 'The All-in-One Liquid Silicone Label Making Machine. In the competitive manufacturing landscape for garments and electronics, efficiency is key. For producers of high-quality silicone labels, patches, and badges.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Rubber Soft 3D Silicone Mobile Phone Cover Machine',
                'slug' => 'rubber-soft-3d-silicone-mobile-phone-cover-machine',
                'product_type' => 'machine',
                'description' => 'Next-Gen Phone Case Customization. Our advanced 3D silicone embossing machine revolutionizes phone case production, creating ultra-premium textured covers with stunning dimensional effects.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Automatic Logo Maker Silicone Vacuum Vulcanizing Machine',
                'slug' => 'automatic-logo-maker-silicone-vacuum-vulcanizing-machine',
                'product_type' => 'machine',
                'description' => 'State-of-the-art industrial solution designed for high-efficiency production of premium silicone labels, logos, and heat-pressed emblems with vacuum vulcanizing technology.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Food Safety Solid Silicone Tableware Making Machine',
                'slug' => 'food-safety-solid-silicone-tableware-making-machine',
                'product_type' => 'machine',
                'description' => 'Modern manufacturing machinery for producing protective cases for 3C electronics, 3D silicone toys, and essential kitchen tools. Precision manufacturing for food-grade kitchenware.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Food Safety Level Silicone Tableware Production Line',
                'slug' => 'food-safety-level-silicone-tableware-production-line',
                'product_type' => 'machine',
                'description' => 'Complete production line for solid silicone kitchenware manufacturing. Guarantees safety, precision, and efficiency for high-volume production of food-grade culinary tools.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'PVC 3D Molding Machine Production Keychain',
                'slug' => 'pvc-3d-molding-machine-production-keychain',
                'product_type' => 'machine',
                'description' => 'Specialized manufacturing system designed to produce high-quality PVC doll keychains with intricate 3D designs, vibrant colors, and durable finishes for mass production.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Automatic 3D Dolls PVC Keychain Making Dispenser',
                'slug' => 'automatic-3d-dolls-pvc-keychain-making-dispenser',
                'product_type' => 'machine',
                'description' => 'Next generation toy manufacturing technology. Fully integrated system combining precision 3D molding with automatic dispensing for high-efficiency keychain production.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Cool Heat Press Machine Keychains Mold Closing',
                'slug' => 'cool-heat-press-machine-keychains-mold-closing',
                'product_type' => 'machine',
                'description' => 'Dual-temperature molding solution specializing in high-quality PVC keychains, doll parts, and toy components through precision thermal pressing technology.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Silicone Labels Vacuuming Forming Machines',
                'slug' => 'silicone-labels-vacuuming-forming-machines',
                'product_type' => 'machine',
                'description' => 'High-efficiency silicone label making machinery with vacuum forming technology. Perfect for phone cases, 3D figurines, and wearable bands manufacturing.',
                'image' => null,
                'is_active' => true,
            ],

            // ==================== RAW MATERIALS (10) ====================
            [
                'name' => 'Liquid PVC Material Grade A',
                'slug' => 'liquid-pvc-material-grade-a',
                'product_type' => 'raw_material',
                'description' => 'High-quality liquid PVC for toy manufacturing, keychains, and 3D products. Food-safe and durable material suitable for all types of plastic products manufacturing.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Food-Grade Silicone Raw Material Premium',
                'slug' => 'food-grade-silicone-raw-material-premium',
                'product_type' => 'raw_material',
                'description' => 'Premium food-grade silicone for kitchenware, tableware, and food contact applications. Meets international food safety standards and FDA & EU certifications.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Liquid Silicone Rubber LSR Base Material',
                'slug' => 'liquid-silicone-rubber-lsr-base-material',
                'product_type' => 'raw_material',
                'description' => 'Two-component liquid silicone rubber system for injection molding and casting applications. Excellent for high-volume production with superior elasticity and durability.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'PVC Compound Material Standard Grade',
                'slug' => 'pvc-compound-material-standard-grade',
                'product_type' => 'raw_material',
                'description' => 'Versatile PVC compound material for various industrial applications. Suitable for phone cases, labels, patches, and rubber products manufacturing with multiple color options.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'TPU Heat Transfer Film Material',
                'slug' => 'tpu-heat-transfer-film-material',
                'product_type' => 'raw_material',
                'description' => 'Precision TPU films for 3D heat transfer emblems on garments and footwear. Premium quality with excellent adhesion and durability for apparel branding applications.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Industrial Printing Chemicals & Inks',
                'slug' => 'industrial-printing-chemicals-inks',
                'product_type' => 'raw_material',
                'description' => 'Industrial-grade catalysts, auxiliaries, and ink formulations for consistent high-quality output. Designed for textile screen printing and silicone label applications.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Color Pigments & Dyes Master Batch',
                'slug' => 'color-pigments-dyes-master-batch',
                'product_type' => 'raw_material',
                'description' => 'Premium color pigments and dyes master batch for silicone and PVC materials. Available in standard colors or custom formulations for specialized applications.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Silicone Hardener & Catalyst Pack',
                'slug' => 'silicone-hardener-catalyst-pack',
                'product_type' => 'raw_material',
                'description' => 'Professional-grade hardeners and catalyst systems for liquid silicone vulcanization. Optimized mixing ratios for fast curing without compromise on quality.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Release Agent & Mold Release Compound',
                'slug' => 'release-agent-mold-release-compound',
                'product_type' => 'raw_material',
                'description' => 'High-performance mold release agents and anti-adhesive compounds. Ideal for PVC and silicone molding to ensure perfect product separation and extended mold life.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Resin & Epoxy Base Materials',
                'slug' => 'resin-epoxy-base-materials',
                'product_type' => 'raw_material',
                'description' => 'Premium epoxy resins and polyester base materials for specialized applications. Chemical resistant formulations for durability in extreme conditions.',
                'image' => null,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            $createdProduct = Product::firstOrCreate(
                ['slug' => $product['slug']],
                $product
            );
        }
    }
}

