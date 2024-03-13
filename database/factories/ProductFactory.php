<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class hanghoa1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'tenhang' => $this ->faker->name(),
            'donvitinh' =>$this ->faker -> randomElement(['mm','kg','l','can']),
            'sl_nhap' =>$this ->faker -> randomFloat(),
            'gianhap'=>$this ->faker -> randomFloat(),
            'giaban' =>$this ->faker -> randomFloat(),
        ];
    }
}
