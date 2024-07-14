<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminLainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('adminlain')->insert([
            [
                'id' => 1,
                'judul' => 'User Manual Book',
                'subjudul' => 'Provides guidance how to use',
                // 'keterangan' => 'ini keterangan.',
                'keterangan' => 'The Proferan manual aims to provide users with an understanding of how to use financial reports to make better business decisions. With clear and practical explanations, users are given insight into how to analyze the financial information available in the report, such as whether they should still take on additional debt or not. This helps users make smarter, fact-based financial decisions, thereby increasing the likelihood of their business success. In this way, the user manual serves not only as a technical guide, but also as a valuable source of knowledge to support users in managing their business more effectively.',
                'file' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'judul' => 'Simple & Easy to Use',
                'subjudul' => 'Friendly User Interface',
                // 'keterangan' => 'ini keterangan.',
                'keterangan' => 'Proferan is an accounting application designed with a focus on simplicity and ease of use. With a simple and intuitive interface, Proferan allows users without a strong accounting background to quickly and easily manage their business finances. The applications ability to present financial information in an easy-to-understand manner helps users better understand the financial condition of their business. In this way, Proferan is not only a tool for recording financial transactions but also a trustworthy partner for entrepreneurs in managing their finances effectively.',
                'file' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'judul' => 'Awesome Support',
                'subjudul' => 'For Micro and Small Enterpries',
                // 'keterangan' => 'ini keterangan.',
                'keterangan' => 'Proferan provides targeted financial reporting solutions for micro and small businesses, enabling users to carefully track and understand their finances better. With reports tailored to the scale and needs of their business, users can easily monitor cash flow, evaluate performance, and make more informed decisions based on accurate and relevant information. It helps users in managing their finances with efficiency and increases the chances of success of their business.With Proferan, users can have the right tools to better manage their finances, without having to worry about the complexity or mismatch of financial reports with their business needs.',
                'file' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
