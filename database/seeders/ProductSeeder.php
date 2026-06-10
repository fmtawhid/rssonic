<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Feature;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create category (assuming category_id 3 for machinery)
        $category = Category::firstOrCreate(
            ['id' => 3],
            ['name' => 'Machinery', 'slug' => 'machinery']
        );

        $products = [
            // ==================== COMPLETE PRODUCT LIST WITH DETAILS (20) ====================
            
            // Product 1: LED Ceramic Spraying Machine
            [
                'name' => 'LED Ceramic Spraying Machine',
                'category_id' => 3,
                'image' => 'led_ceramic_spraying.jpg',
                'description' => 'Advanced machine suitable for processing LED ceramic lamp bead spraying across various industries with precision and efficiency.',
                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Model', 'CCPTJ'],
                    ['Maximum Power', '5.5kw'],
                    ['Input Voltage', '220V'],
                    ['Weight', '451kg'],
                ],
                'features' => [
                    'Multi-stage trajectory teach-in programming, intelligent control',
                    'Self-cleaning system for nozzle and liquid pipeline',
                ],
            ],
            
            // Product 2: Fully Automatic Visual Food Decorating Machine
            [
                'name' => 'Fully Automatic Visual Food Decorating Machine',
                'category_id' => 3,
                'image' => 'visual_food_decorating.jpg',
                'description' => 'High-tech machine for decorating food with liquid substances like adhesive, paint, chocolate and jam with precision and visual positioning.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Power System', 'AC220V, 2100W (Max 5400W)'],
                    ['Visual Positioning', '12 million pixel high-precision camera'],
                    ['Weight', '980kg'],
                ],
                'features' => [
                    '360-degree panoramic vision can position and identify the system',
                    'Win7 (10) 64-bit Chinese/English operating system',
                ],
            ],
            
            // Product 3: 12 Color Dispensing Machine
            [
                'name' => '12 Color Dispensing Machine',
                'category_id' => 3,
                'image' => '12_color_dispensing.jpg',
                'description' => 'Versatile 12-color dispensing system used for manufacturing soft PVC and silicone products including keychains, souvenirs and shoe soles.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Model', 'CCDS-12C'],
                    ['Power', '1.6kw'],
                    ['Weight', '260kg'],
                ],
                'features' => [
                    '12 PCS short-cut key for different Programs',
                    'Chencai Programmable system, friendly interface & easy to use',
                ],
            ],
            
            // Product 4: Visual Button Gluing Machine
            [
                'name' => 'Visual Button Gluing Machine',
                'category_id' => 3,
                'image' => 'visual_button_gluing.jpg',
                'description' => 'Designed for precise adhesive application on all types of LED products, apparel accessories and PVC trademarks with CCD vision system.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Model', 'CCDS-S2'],
                    ['Power', '2.2kw'],
                    ['Weight', '800kg'],
                ],
                'features' => [
                    'Self-developed fully automatic CCD vision system',
                    'Maximum of more than 3,000 products can be dispensed per hour',
                ],
            ],
            
            // Product 5: Tunnel Production Line
            [
                'name' => 'Tunnel Production Line',
                'category_id' => 3,
                'image' => 'tunnel_production_line.jpg',
                'description' => 'Integrated system for baking and cooling liquid plastic products with enhanced production capacity and stable temperature control.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Total Loading Power', '40kw'],
                    ['Line Speed', '1-4cm/s'],
                    ['Weight', '1500kg'],
                ],
                'features' => [
                    'Integrate Baking & Cooling Function (Water cooling)',
                    'Stable & Even heating temperature control system',
                ],
            ],
            
            // Product 6: Small PVC Hot Press Molding Machine
            [
                'name' => 'Small PVC Hot Press Molding Machine',
                'category_id' => 3,
                'image' => 'small_pvc_hot_press.jpg',
                'description' => 'Suitable for molding processes to create PVC promotional items including bar mats and 2D/3D keychains with dual heat-cold stations.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Maximum Power', '9740W'],
                    ['Pressure', '0.8T'],
                    ['Weight', '164kg'],
                ],
                'features' => [
                    'Heat & Cold double mold stations for high production capacity',
                    'Chencai optimized Precise Temperature heating system',
                ],
            ],
            
            // Product 7: 35T/50T Vacuum Vulcanizing Machine
            [
                'name' => '35T/50T Vacuum Vulcanizing Machine',
                'category_id' => 3,
                'image' => 'vacuum_vulcanizing.jpg',
                'description' => 'Used for hot-press manufacturing of silicone rubber products including trademarks, iPad cases and wristbands with vacuum bubble reduction.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Work Pressure', '35T / 50T'],
                    ['Total Power', '6.6kw / 13.2kw'],
                    ['Weight', '1167kg / 1584kg'],
                ],
                'features' => [
                    'Vacuum system able to reduce the air bubbles',
                    'Optimized hydraulic circuit system, stable performance guaranteed',
                ],
            ],
            
            // Product 8: PVC Intelligent Oven
            [
                'name' => 'PVC Intelligent Oven',
                'category_id' => 3,
                'image' => 'pvc_intelligent_oven.jpg',
                'description' => 'Used for heating various PVC products with integrated 2-in-1 heating and cooling system and automatic mold ejection capability.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Power', '8.2kw / 9.6kw'],
                    ['Input Voltage', '380V/3P/50hz'],
                    ['Weight', '182kg / 204kg'],
                ],
                'features' => [
                    'Heating & cooling 2 in 1 system, Compact structure',
                    'Auto mold push out system, Smart & Flexible',
                ],
            ],
            
            // Product 9: Sandblast Machine
            [
                'name' => 'Sandblast Machine',
                'category_id' => 3,
                'image' => 'sandblast_machine.jpg',
                'description' => 'Used for rust removal and surface polishing of metal molds and machine components with automatic sand and dust separation.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Motor Power', '300w'],
                    ['Air Pressure', '0-10kg/cm²'],
                    ['Weight', '113kg'],
                ],
                'features' => [
                    'Automatic Sand return system & Automatic dust & sand separating system',
                    'Simple Structure, easy operation, Super Low Repair Rate',
                ],
            ],
            
            // Product 10: Silicone Cutting Machine
            [
                'name' => 'Silicone Cutting Machine',
                'category_id' => 3,
                'image' => 'silicone_cutting.jpg',
                'description' => 'Designed for precise cutting of solid silicone rubber with 4-section loop cutting system and adjustable cutting length.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Model', 'CC-QL'],
                    ['Cutter Speed', '4000-7000freq/h'],
                    ['Weight', '153kg'],
                ],
                'features' => [
                    '4 Sections loop cutting system, adjustable cutting length',
                    'High cutting precision ensures high production capacity',
                ],
            ],
            
            // Product 11: Silicone Rubber Heat Transfer Machine
            [
                'name' => 'Silicone Rubber Heat Transfer Machine',
                'category_id' => 3,
                'image' => 'silicone_heat_transfer.jpg',
                'description' => 'Used in apparel industry for silicone printing and 2D/3D patch heat transfer with milled steel and smart PID output system.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Heating Power', '15.2KW'],
                    ['Pressure', '4T'],
                    ['Weight', '632kg'],
                ],
                'features' => [
                    '#45 Milled & Electro plated steel, not easy to get rust',
                    'Smart PID output system, less temperature tolerance',
                ],
            ],
            
            // Product 12: Cooling Mold Machine
            [
                'name' => 'Cooling Mold Machine',
                'category_id' => 3,
                'image' => 'cooling_mold.jpg',
                'description' => 'Used across industries for rapid cooling of steel or aluminum molds with Mitsubishi PLC system and compact design.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Maximum Power', '3kw'],
                    ['Minimum Temperature', '0°C'],
                    ['Weight', '64kg'],
                ],
                'features' => [
                    'Mitsubishi PLC system, stable performance',
                    'Compact machine body, easy to operate',
                ],
            ],
            
            // Product 13: UV Curing Light
            [
                'name' => 'UV Curing Light',
                'category_id' => 3,
                'image' => 'uv_curing_light.jpg',
                'description' => 'Used for rapid drying and curing of various liquid plastic materials with imported lamp beads and strong heat dissipation.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Heating Power', '400W'],
                    ['Wavelength', '365'],
                    ['Weight', '1.1KG'],
                ],
                'features' => [
                    'Using imported lamp beads to create, strong heat dissipation',
                    'Can be fixed on the drip molding machine to improve efficiency',
                ],
            ],
            
            // Product 14: Pressure Barrel
            [
                'name' => 'Pressure Barrel',
                'category_id' => 3,
                'image' => 'pressure_barrel.jpg',
                'description' => 'Used for storage of liquid plastic or adhesive and works with dispensing machines with stainless steel construction and excellent sealing.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Volume', '15L / 30L'],
                    ['Working Pressure', '3-4Bar'],
                    ['Weight', '8kg / 22kg'],
                ],
                'features' => [
                    'Made by Stainless steel, Anti-rust',
                    'Excellent sealing to store liquid plastic/glue',
                ],
            ],
            
            // Product 15: 7 Inch Rubber Refining Machine
            [
                'name' => '7 Inch Rubber Refining Machine',
                'category_id' => 3,
                'image' => '7_inch_refining.jpg',
                'description' => 'Used for color mixing and milling of solid silicone rubber with adjustable drum rolling speed and emergency stop buttons.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Motor Power', '3.75KW'],
                    ['Roller Speed', '15-20r/min'],
                    ['Weight', '565kg'],
                ],
                'features' => [
                    'Adjustable drum rolling speed with emergency stop buttons',
                    'Drum: smooth surface & Non-deformation',
                ],
            ],
            
            // Product 16: 9 Inch Rubber Refining Machine
            [
                'name' => '9 Inch Rubber Refining Machine',
                'category_id' => 3,
                'image' => '9_inch_refining.jpg',
                'description' => 'Used for large-scale color mixing of solid silicone rubber with simple structure and multiple emergency safety stop buttons.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Motor Power', '5.5KW'],
                    ['Roller Speed', '20r/min'],
                    ['Weight', '986kg'],
                ],
                'features' => [
                    'Simple Structure & easy operation',
                    'Several Emergency stop buttons for more safety',
                ],
            ],
            
            // Product 17: Mixing Machine
            [
                'name' => 'Mixing Machine',
                'category_id' => 3,
                'image' => 'mixing_machine.jpg',
                'description' => 'Used for effectively mixing liquid PVC, silicone or color paste with high-speed motor and stainless steel mixing blade.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Stirring motor power', '3KW'],
                    ['Stirring motor speed', '1430r/min'],
                    ['Weight', '217kg'],
                ],
                'features' => [
                    'With High speed mixing motor & speed Converter',
                    'Stainless steel Mixing blade, more durable & easy to clean',
                ],
            ],
            
            // Product 18: Silicone Vacuum Degassing Combination
            [
                'name' => 'Silicone Vacuum Degassing Combination',
                'category_id' => 3,
                'image' => 'silicone_vacuum.jpg',
                'description' => 'Used for bubble removal from silicone raw materials with international standard carbon steel and quality sealing glue.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Power', '200w/220v'],
                    ['Dimensions', '800 × 0.84m × 1600mm'],
                    ['Weight', '65kg'],
                ],
                'features' => [
                    'Adopted international standard Carbon steel, durable & no deformation',
                    'Applied good quality sealing glue for better sealing',
                ],
            ],
            
            // Product 19: PVC Vacuum Degassing Combination
            [
                'name' => 'PVC Vacuum Degassing Combination',
                'category_id' => 3,
                'image' => 'pvc_vacuum.jpg',
                'description' => 'Used for removing bubbles generated during liquid PVC raw material mixing with high efficiency and simple operation.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Power', '200w/220v'],
                    ['Vacuum pump power', '1500w/380v'],
                    ['Weight', '50kg'],
                ],
                'features' => [
                    'Reasonable design, high mixing efficiency and simpler operation',
                    'Suitable for Liquid PVC raw material mixing',
                ],
            ],
            
            // Product 20: Large Capacity PVC Mixer
            [
                'name' => 'Large Capacity PVC Mixer',
                'category_id' => 3,
                'image' => 'large_pvc_mixer.jpg',
                'description' => 'Customized machine for large-scale PVC liquid mixing with 1.65T tank capacity and adjustable stirring speed.',

                'product_type' => 'machine',
                'is_active' => true,
                'attributes' => [
                    ['Motor Power', '4KW'],
                    ['Mixing Tank Volume', '1.65T'],
                    ['Weight', '214kg+115kg'],
                ],
                'features' => [
                    'Customized for 1.65T PVC liquid Mixing, adjustable Stirring speed',
                    'Compact edge welding technique, ensure no air/liquid leaking',
                ],
            ],
        ];

        // Create products with attributes and features
        foreach ($products as $productData) {
            $attributes = $productData['attributes'] ?? [];
            $features = $productData['features'] ?? [];
            unset($productData['attributes']);
            unset($productData['features']);
            
            $product = Product::firstOrCreate(
                ['name' => $productData['name']],
                $productData
            );
            
            // Attach attributes
            foreach ($attributes as [$attrName, $value]) {
                $attribute = Attribute::firstOrCreate(['name' => $attrName]);
                $product->attributes()->syncWithoutDetaching([$attribute->id => ['value' => $value]]);
            }
            
            // Attach features
            foreach ($features as $featureName) {
                $feature = Feature::firstOrCreate(['name' => $featureName]);
                $product->features()->syncWithoutDetaching([$feature->id]);
            }
        }
    }
}

