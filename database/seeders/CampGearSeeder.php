<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampGearSeeder extends Seeder
{
    /**
     * Seed the camp_gears table with 10 sample rental products.
     */
    public function run(): void
    {
        DB::table('camp_gears')->insert([
            [
                'name' => 'Alpine Dome Tent 4P',
                'category' => 'Tenda',
                'rent_price' => 85000,
                'stock' => 5,
                'image' => 'assets/images/alpine-dome-tent-4p.jpg',
                'description' => 'Tenda dome kapasitas 4 orang dengan bahan polyester tahan air dan rangka aluminium ringan. Dilengkapi rain fly dan ventilasi ganda untuk kenyamanan di segala cuaca. Cocok untuk camping keluarga maupun pendakian grup.',
            ],
            [
                'name' => 'Expedition Pack 50L',
                'category' => 'Tas',
                'rent_price' => 35000,
                'stock' => 8,
                'image' => 'assets/images/expedition-pack-50l.jpg',
                'description' => 'Carrier 50 liter dengan sistem back support ergonomis dan hip belt empuk. Memiliki banyak kompartemen, rain cover bawaan, serta tali pengikat untuk matras atau tenda. Ideal untuk pendakian 2–4 hari.',
            ],
            [
                'name' => 'Trail Sleeping Bag',
                'category' => 'Sleeping Bag',
                'rent_price' => 25000,
                'stock' => 10,
                'image' => 'assets/images/trail-sleeping-bag.jpg',
                'description' => 'Sleeping bag tipe mummy dengan insulasi sintetis yang hangat hingga suhu 5°C. Ringan, mudah dilipat, dan dilengkapi tudung kepala serta resleting dua arah. Nyaman untuk tidur di alam terbuka.',
            ],
            [
                'name' => 'Summit Folding Chair',
                'category' => 'Kursi',
                'rent_price' => 20000,
                'stock' => 12,
                'image' => 'assets/images/trail-sleeping-bag.jpg',
                'description' => 'Kursi lipat portable dengan rangka aluminium dan kain Oxford 600D tahan lama. Dilengkapi sandaran tangan dan tempat gelas. Ringan, mudah dibawa, dan kokoh menopang hingga 120 kg.',
            ],
            [
                'name' => 'Ultralight Cooking Set',
                'category' => 'Alat Masak',
                'rent_price' => 20000,
                'stock' => 15,
                'image' => 'assets/images/ultralight-cooking-set.jpg',
                'description' => 'Set alat masak nesting berbahan anodized aluminum anti lengket. Berisi panci utama, wajan penggorengan, mangkuk lipat, centong, dan spons cuci. Ringkas untuk 2-3 orang di alam bebas.',
            ],
            [
                'name' => 'High-Lumen Headlamp',
                'category' => 'Penerangan',
                'rent_price' => 15000,
                'stock' => 20,
                'image' => 'assets/images/high-lumen-headlamp.jpg',
                'description' => 'Senter kepala LED 450 lumens dengan 5 mode pencahayaan termasuk red light dan SOS strobe. Tahan percikan air (IPX4) dan baterai tahan hingga 18 jam penggunaan malam hari.',
            ],
            [
                'name' => 'Portable Camping Stove',
                'category' => 'Kompor',
                'rent_price' => 20000,
                'stock' => 14,
                'image' => 'assets/images/portable-camping-stove.jpg',
                'description' => 'Kompor gas mini lipat dengan pemantik otomatis piezo electric. Dilengkapi pelindung angin built-in serta kompatibel dengan tabung gas canister ulir maupun butana portable.',
            ],
            [
                'name' => 'Double Camping Hammock',
                'category' => 'Hammock',
                'rent_price' => 18000,
                'stock' => 10,
                'image' => 'assets/images/double-camping-hammock.jpg',
                'description' => 'Hammock outdoor kapasitas 2 orang berbahan 210T parachute nylon berdaya tahan tinggi. Dilengkapi carabiner baja dan tree friendly webbing straps sepanjang 3 meter.',
            ],
            [
                'name' => 'Insulated Thermal Mat',
                'category' => 'Matras',
                'rent_price' => 15000,
                'stock' => 16,
                'image' => 'assets/images/insulated-thermal-mat.jpg',
                'description' => 'Matras busa insulasi aluminium foil penahan dingin dari permukaan tanah. Sangat ringan, fleksibel digulung atau dilipat, dan membuat tidur di dalam tenda jauh lebih hangat.',
            ],
            [
                'name' => 'Compact Camping Table',
                'category' => 'Meja',
                'rent_price' => 25000,
                'stock' => 8,
                'image' => 'assets/images/compact-camping-table.jpg',
                'description' => 'Meja lipat aluminium roll-top ukuran 56x40 cm dengan kaki anti-slip. Mampu menahan beban hingga 25 kg, cocok untuk area memasak atau santai di depan tenda.',
            ],
        ]);
    }
}
