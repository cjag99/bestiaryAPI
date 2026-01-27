<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bestiary;
use Illuminate\Database\Seeder;

class BestiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $creatures = [
            [
                'name' => 'Void Lurker',
                'species' => 'Aberration',
                'danger_level' => 8,
                'habitat' => 'Deep caves',
                'traits' => [
                    'abilities' => ['ambush', 'fear'],
                    'armor' => 5,
                    'intelligence' => 'low',
                ],
                'is_hostile' => true,
            ],
            [
                'name' => 'Clockwork Sentinel',
                'species' => 'Construct',
                'danger_level' => 6,
                'habitat' => 'Ancient ruins',
                'traits' => [
                    'abilities' => ['laser', 'self-repair'],
                    'energy_core' => 'unstable',
                ],
                'is_hostile' => true,
            ],
            [
                'name' => 'Mist Whisperer',
                'species' => 'Spirit',
                'danger_level' => 3,
                'habitat' => 'Swamps',
                'traits' => [
                    'abilities' => ['invisibility', 'confusion'],
                    'weak_to' => 'fire',
                ],
                'is_hostile' => false,
            ],
            [
                'name' => 'Neon Ravager',
                'species' => 'Mutant',
                'danger_level' => 7,
                'habitat' => 'Abandoned cities',
                'traits' => [
                    'abilities' => ['electric dash', 'overload'],
                    'resistance' => 'electric',
                    'speed' => 'very high',
                ],
                'is_hostile' => true,
            ],
            [
                'name' => 'Gravebound Colossus',
                'species' => 'Undead',
                'danger_level' => 9,
                'habitat' => 'Battlefields',
                'traits' => [
                    'abilities' => ['ground smash', 'necrotic aura'],
                    'armor' => 8,
                    'weak_to' => 'holy',
                ],
                'is_hostile' => true,
            ],
            [
                'name' => 'Glasswing Stalker',
                'species' => 'Beast',
                'danger_level' => 4,
                'habitat' => 'Crystal forests',
                'traits' => [
                    'abilities' => ['aerial strike', 'camouflage'],
                    'wingspan' => '2.5m',
                ],
                'is_hostile' => false,
            ],
            [
                'name' => 'Ashborn Wyrmling',
                'species' => 'Dragonkin',
                'danger_level' => 6,
                'habitat' => 'Volcanic regions',
                'traits' => [
                    'abilities' => ['fire breath', 'molt'],
                    'temperature' => 'extreme',
                ],
                'is_hostile' => true,
            ],
            [
                'name' => 'Echo Mimic',
                'species' => 'Aberration',
                'danger_level' => 5,
                'habitat' => 'Ruins',
                'traits' => [
                    'abilities' => ['sound mimicry', 'disorient'],
                    'intelligence' => 'medium',
                ],
                'is_hostile' => true,
            ],
            [
                'name' => 'Tidebound Leviathan',
                'species' => 'Aquatic',
                'danger_level' => 10,
                'habitat' => 'Deep ocean',
                'traits' => [
                    'abilities' => ['tsunami', 'crush'],
                    'size' => 'colossal',
                ],
                'is_hostile' => true,
            ],
            [
                'name' => 'Lantern Wisp',
                'species' => 'Spirit',
                'danger_level' => 2,
                'habitat' => 'Foggy roads',
                'traits' => [
                    'abilities' => ['lure', 'fade'],
                    'light_color' => 'blue',
                ],
                'is_hostile' => false,
            ],

        ];
        foreach ($creatures as $creature) {
            Bestiary::create($creature);
        }
    }
}
