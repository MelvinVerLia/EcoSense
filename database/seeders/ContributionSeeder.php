<?php

namespace Database\Seeders;

use App\Models\Contribution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contribution::create([
            'name' => 'Education for All',
            'content' => 'Help underprivileged children get access to quality education and learning materials. Our mission is to bridge the gap in education by providing the necessary tools, teachers, and infrastructure to remote and underserved areas. With your contribution, we can build schools, distribute textbooks, and offer scholarships to talented students. Education is the key to breaking the cycle of poverty, and together, we can make a difference for generations to come. Join us in empowering children with knowledge and hope.',
            'goal' => 100000.00,
        ]);

        Contribution::create([
            'name' => 'Clean Water Initiative',
            'content' => 'Providing clean drinking water to remote villages in need. Millions of people around the world suffer from a lack of access to safe water, leading to diseases and poor living conditions. This initiative aims to install water purification systems, dig wells, and provide education on proper sanitation practices. By supporting this cause, you are helping to save lives, reduce illnesses, and bring hope to families struggling with water scarcity. Every drop counts, and your contribution will create a ripple effect of change.',
            'goal' => 50000.00,
        ]);

        Contribution::create([
            'name' => 'Medical Aid for Refugees',
            'content' => 'Support critical medical aid and resources for displaced families. Refugees often face dire conditions, with limited access to healthcare, medicines, and basic necessities. Your donations will help us provide emergency medical services, maternal care, and vaccinations to those in crisis. Together, we can alleviate the suffering of refugees and help them rebuild their lives with dignity and health. Your generosity ensures that no one is left behind, regardless of their circumstances.',
            'goal' => 150000.00,
        ]);

        Contribution::create([
            'name' => 'Tree Planting Campaign',
            'content' => 'Join us in planting trees to combat climate change and restore forests. Trees are vital for maintaining the Earth’s ecosystem, providing oxygen, and absorbing carbon dioxide. This campaign aims to plant thousands of trees in deforested areas, protect wildlife habitats, and promote environmental sustainability. Your support will help us achieve a greener future for the planet. Every tree planted is a step towards a healthier and more sustainable world. Let’s work together to protect our environment and ensure a legacy for future generations.',
            'goal' => 80000.00,
        ]);

        Contribution::create([
            'name' => 'Animal Shelter Support',
            'content' => 'Contribute to food, shelter, and care for rescued animals. Animal shelters play a crucial role in saving stray and abandoned animals, providing them with medical care and finding them loving homes. Your donations will ensure that these animals receive proper nutrition, vaccinations, and rehabilitation. Let’s give these voiceless creatures a second chance at life. Together, we can create a world where animals are treated with compassion and respect. Be a hero for animals in need and support this important cause.',
            'goal' => 60000.00,
        ]);

        Contribution::create([
            'name' => 'Disaster Relief Fund',
            'content' => 'Help communities recover and rebuild after natural disasters. Disasters such as earthquakes, floods, and hurricanes leave millions of people homeless and without basic necessities. This fund provides emergency aid, including food, water, shelter, and medical care, to affected communities. Your support will also help in rebuilding homes, schools, and infrastructure, ensuring that survivors can regain a sense of normalcy. Stand with us in bringing hope and relief to those who have lost everything. Together, we can rebuild lives and communities.',
            'goal' => 200000.00,
        ]);
    }
}
