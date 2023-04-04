<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Watch',
            'price' => 250,
            'description' => 'Good watch',
            'image' => 'https://staticimg.titan.co.in/Titan/Catalog/90148KD03_1.jpg?impolicy=pqmed&imwidth=640'
        ]);
        Product::create([
            'name' => 'Bag',
            'price' => 350,
            'description' => 'Good Bag',
            'image' => 'https://www.bagsonly.com.au/wp-content/uploads/2022/08/TCA795-WHEEL-BAG-BEIGE-ANGLE.jpg'
        ]);
        Product::create([
            'name' => 'Google Pixel Watch',
            'price' => 100,
            'description' => 'Good perfume',
            'image' => 'https://hips.hearstapps.com/hmg-prod/images/coco-mademoiselle-perfume-chanel-1675113242.png?crop=1.00xw:0.803xh;0,0.100xh&resize=1200:*'
        ]);
        Product::create([
            'name' => 'perfume',
            'price' => 350,
            'description' => 'Google Pixel Watch: Technical Specifications
            Price: $350 |Case size: 41 millimeters | Processor: Exynos 911010nm | Display: 450 x 450-pixel OLED, always-on screen, 1,000-nit maximum brightness | Connectivity: GPS, Wi-Fi, Bluetooth 5.3, 4G LTE cellular | Storage: 32GB | Battery: 24 hours in normal use | Weight: 1.3 ounces',
            'image' => 'https://imageio.forbes.com/specials-images/imageserve/63501eaa27028f2147c9a291/Google-Pixel-Watch-in-silver-charcoal-/0x0.jpg?format=jpg&crop=3390,2543,x0,y0,safe&width=960'
        ]);

    }
}