<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Pizza;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    public function run(): void
    {
        // Helper per ottenere o creare un ingrediente
        $ing = fn(string $name) => Ingredient::firstOrCreate(['name' => $name]);

        // ── PIZZE ──────────────────────────────────────────────────────────

        $pizze = [
            [
                'pizza' => ['name' => 'Marinara', 'description' => 'Pomodoro, aglio, olio, origano', 'price_baby' => 4.50, 'price_normale' => 4.50, 'price_media' => 7.00, 'price_maxi' => 11.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Aglio', 'Olio', 'Origano'],
            ],
            [
                'pizza' => ['name' => 'Margherita', 'description' => 'Pomodoro, mozzarella, origano', 'price_baby' => 4.00, 'price_normale' => 5.00, 'price_media' => 9.00, 'price_maxi' => 13.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Origano'],
            ],
            [
                'pizza' => ['name' => 'Romana', 'description' => 'Pomodoro, mozzarella, acciughe', 'price_baby' => 5.50, 'price_normale' => 6.50, 'price_media' => 10.00, 'price_maxi' => 15.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Acciughe'],
            ],
            [
                'pizza' => ['name' => 'Siciliana', 'description' => 'Pomodoro, mozzarella, acciughe, capperi, olive', 'price_baby' => 6.00, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Acciughe', 'Capperi', 'Olive'],
            ],
            [
                'pizza' => ['name' => 'Pugliese', 'description' => 'Pomodoro, mozzarella, cipolla', 'price_baby' => 5.50, 'price_normale' => 6.00, 'price_media' => 10.00, 'price_maxi' => 14.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Cipolla'],
            ],
            [
                'pizza' => ['name' => 'Prosciutto', 'description' => 'Pomodoro, mozzarella, prosciutto cotto', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 10.00, 'price_maxi' => 15.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Prosciutto Cotto'],
            ],
            [
                'pizza' => ['name' => 'Funghi', 'description' => 'Pomodoro, mozzarella, funghi', 'price_baby' => 6.00, 'price_normale' => 6.00, 'price_media' => 10.00, 'price_maxi' => 14.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Funghi'],
            ],
            [
                'pizza' => ['name' => 'Tris di Funghi', 'description' => 'Pomodoro, mozzarella, chiodini, porcini, trifolati', 'price_baby' => 5.50, 'price_normale' => 7.50, 'price_media' => 11.00, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Chiodini', 'Porcini', 'Trifolati'],
            ],
            [
                'pizza' => ['name' => 'Asparagi', 'description' => 'Pomodoro, mozzarella, asparagi', 'price_baby' => 6.50, 'price_normale' => 6.00, 'price_media' => 10.00, 'price_maxi' => 14.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Asparagi'],
            ],
            [
                'pizza' => ['name' => 'Prosciutto e Funghi', 'description' => 'Pomodoro, mozzarella, prosciutto cotto, funghi', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 10.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Prosciutto Cotto', 'Funghi'],
            ],
            [
                'pizza' => ['name' => 'Capricciosa', 'description' => 'Pomodoro, mozzarella, prosciutto cotto, funghi, carciofi', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Prosciutto Cotto', 'Funghi', 'Carciofi'],
            ],
            [
                'pizza' => ['name' => '4 Stagioni', 'description' => 'Pomodoro, mozzarella, prosciutto cotto, funghi, carciofi, olive', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Prosciutto Cotto', 'Funghi', 'Carciofi', 'Olive'],
            ],
            [
                'pizza' => ['name' => 'Viennese', 'description' => 'Pomodoro, mozzarella, würstel', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 10.50, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Würstel'],
            ],
            [
                'pizza' => ['name' => 'Diavola', 'description' => 'Pomodoro, mozzarella, salamino piccante', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salamino Piccante'],
            ],
            [
                'pizza' => ['name' => 'Chiodini', 'description' => 'Pomodoro, mozzarella, chiodini', 'price_baby' => 6.50, 'price_normale' => 6.00, 'price_media' => 10.00, 'price_maxi' => 15.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Chiodini'],
            ],
            [
                'pizza' => ['name' => 'Porcini', 'description' => 'Pomodoro, mozzarella, porcini', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 10.50, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Porcini'],
            ],
            [
                'pizza' => ['name' => '4 Formaggi', 'description' => 'Pomodoro, mozzarella, gorgonzola, brie, provola, grana', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Gorgonzola', 'Brie', 'Provola', 'Grana'],
            ],
            [
                'pizza' => ['name' => 'Calzone', 'description' => 'Pomodoro, mozzarella, salame, bacon, cipolla, peperoni', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 6.50, 'price_maxi' => 6.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salame', 'Bacon', 'Cipolla', 'Peperoni'],
            ],
            [
                'pizza' => ['name' => 'Calzone Vegetale', 'description' => 'Pomodoro, mozzarella, verdure miste', 'price_baby' => 7.00, 'price_normale' => 7.00, 'price_media' => 7.00, 'price_maxi' => 7.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Peperoni', 'Zucchine', 'Melanzane'],
            ],
            [
                'pizza' => ['name' => 'Tonno', 'description' => 'Pomodoro, mozzarella, tonno', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 10.00, 'price_maxi' => 15.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Tonno'],
            ],
            [
                'pizza' => ['name' => 'Tonno e Cipolla', 'description' => 'Pomodoro, mozzarella, tonno, cipolla', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Tonno', 'Cipolla'],
            ],
            [
                'pizza' => ['name' => 'Delicata', 'description' => 'Pomodoro, mozzarella, stracchino, arrosto di tacchino', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 10.50, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Stracchino', 'Arrosto di Tacchino'],
            ],
            [
                'pizza' => ['name' => 'Tartufo e Speck', 'description' => 'Pomodoro, mozzarella, tartufo, speck', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Tartufo', 'Speck'],
            ],
            [
                'pizza' => ['name' => 'Tartufo e Culatello', 'description' => 'Pomodoro, mozzarella, tartufo, culatello', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 10.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Tartufo', 'Culatello'],
            ],
            [
                'pizza' => ['name' => 'Tartufo e Pancetta', 'description' => 'Pomodoro, mozzarella, tartufo, pancetta', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 10.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Tartufo', 'Pancetta'],
            ],
            [
                'pizza' => ['name' => 'Tartufo e Arrosto di Tacchino', 'description' => 'Pomodoro, mozzarella, tartufo, arrosto di tacchino', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Tartufo', 'Arrosto di Tacchino'],
            ],
            [
                'pizza' => ['name' => 'Piccante', 'description' => 'Pomodoro, mozzarella, salsiccia, salamino piccante, pancetta', 'price_baby' => 6.50, 'price_normale' => 8.50, 'price_media' => 12.00, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salsiccia', 'Salamino Piccante', 'Pancetta'],
            ],
            [
                'pizza' => ['name' => 'Carciofona', 'description' => 'Crema di carciofi, mozzarella, tartufo, culatello, carciofi', 'price_baby' => 6.50, 'price_normale' => 8.50, 'price_media' => 12.00, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Crema di Carciofi', 'Mozzarella', 'Tartufo', 'Culatello', 'Carciofi'],
            ],
            [
                'pizza' => ['name' => 'Asparagiona', 'description' => 'Crema di asparagi, mozzarella, tartufo, speck cotto al forno, asparagi', 'price_baby' => 8.50, 'price_normale' => 8.50, 'price_media' => 12.00, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Crema di Asparagi', 'Mozzarella', 'Tartufo', 'Speck Cotto al Forno', 'Asparagi'],
            ],
            [
                'pizza' => ['name' => 'Montanara', 'description' => 'Pomodoro, mozzarella, tartufo, pancetta, porcini', 'price_baby' => 6.50, 'price_normale' => 8.50, 'price_media' => 12.00, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Tartufo', 'Pancetta', 'Porcini'],
            ],
            [
                'pizza' => ['name' => 'Treviso', 'description' => 'Crema di radicchio, mozzarella, tartufo, arrosto di tacchino, radicchio di Treviso (in stagione)', 'price_baby' => 6.50, 'price_normale' => 9.50, 'price_media' => 12.00, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Crema di Radicchio', 'Mozzarella', 'Tartufo', 'Arrosto di Tacchino', 'Radicchio di Treviso'],
            ],
            [
                'pizza' => ['name' => 'Crema di Asparagi', 'description' => 'Crema di asparagi, asparagi, mozzarella', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 10.50, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Crema di Asparagi', 'Asparagi', 'Mozzarella'],
            ],
            [
                'pizza' => ['name' => 'Crema di Carciofi', 'description' => 'Crema di carciofi, carciofi, mozzarella', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 10.50, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Crema di Carciofi', 'Carciofi', 'Mozzarella'],
            ],
            [
                'pizza' => ['name' => 'Crema di Porcini', 'description' => 'Crema di porcini, porcini, mozzarella', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 10.50, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Crema di Porcini', 'Porcini', 'Mozzarella'],
            ],
            [
                'pizza' => ['name' => 'Crema di Radicchio', 'description' => 'Crema di radicchio, radicchio, mozzarella (in stagione)', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 10.50, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Crema di Radicchio', 'Radicchio', 'Mozzarella'],
            ],
            [
                'pizza' => ['name' => 'Rustica', 'description' => 'Pomodoro, mozzarella, salamino, porcini', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 12.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salamino', 'Porcini'],
            ],
            [
                'pizza' => ['name' => 'Sfiziosa', 'description' => 'Pomodoro, mozzarella, panna, speck', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 10.50, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Panna', 'Speck'],
            ],
            [
                'pizza' => ['name' => 'Amatriciana', 'description' => 'Pomodoro, mozzarella, pancetta, cipolla, peperoncino', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 10.50, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Pancetta', 'Cipolla', 'Peperoncino'],
            ],
            [
                'pizza' => ['name' => 'Fresca', 'description' => 'Pomodoro, mozzarella, bresaola, rucola, grana a scaglie', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 11.50, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Bresaola', 'Rucola', 'Grana a Scaglie'],
            ],
            [
                'pizza' => ['name' => 'Gustosa', 'description' => 'Pomodoro, mozzarella, sfilacci di cavallo, pomodorini, rucola', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Sfilacci di Cavallo', 'Pomodorini', 'Rucola'],
            ],
            [
                'pizza' => ['name' => 'Patapizza', 'description' => 'Pomodoro, mozzarella, patate fritte', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 10.50, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Patate Fritte'],
            ],
            [
                'pizza' => ['name' => 'Caprese', 'description' => 'Pomodoro, mozzarella, pomodorini, mozzarella di bufala', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Pomodorini', 'Mozzarella di Bufala'],
            ],
            [
                'pizza' => ['name' => 'Girasole', 'description' => 'Pomodoro, mozzarella, peperoni, zucchine, mais', 'price_baby' => 6.50, 'price_normale' => 6.50, 'price_media' => 9.50, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Peperoni', 'Zucchine', 'Mais'],
            ],
            [
                'pizza' => ['name' => 'Norvegese', 'description' => 'Pomodoro, mozzarella, spinaci, salmone affumicato', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 10.50, 'price_maxi' => 16.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Spinaci', 'Salmone Affumicato'],
            ],
            [
                'pizza' => ['name' => 'Trevigiana', 'description' => 'Pomodoro, mozzarella, radicchio, salame dolce (in stagione)', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Radicchio', 'Salame Dolce'],
            ],
            [
                'pizza' => ['name' => 'Verdure', 'description' => 'Pomodoro, mozzarella, peperoni, melanzane, zucchine', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Peperoni', 'Melanzane', 'Zucchine'],
            ],
            [
                'pizza' => ['name' => 'El Rapido', 'description' => 'Pomodoro, mozzarella, peperoni, ricotta, salsiccia', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Peperoni', 'Ricotta', 'Salsiccia'],
            ],
            [
                'pizza' => ['name' => 'Hawaii', 'description' => 'Pomodoro, mozzarella, prosciutto cotto, ananas', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 10.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Prosciutto Cotto', 'Ananas'],
            ],
            [
                'pizza' => ['name' => 'Mari e Monti', 'description' => 'Pomodoro, mozzarella, porcini, gamberetti', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Porcini', 'Gamberetti'],
            ],
            [
                'pizza' => ['name' => 'Frutti di Mare', 'description' => 'Pomodoro, mozzarella, gamberetti, granchio, aglio, salmone, frutti di mare', 'price_baby' => 6.50, 'price_normale' => 7.50, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Gamberetti', 'Granchio', 'Aglio', 'Salmone', 'Frutti di Mare'],
            ],
            [
                'pizza' => ['name' => 'Contadina', 'description' => 'Pomodoro, mozzarella, sopressa, chiodini', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 12.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Sopressa', 'Chiodini'],
            ],
            [
                'pizza' => ['name' => 'Re Sole', 'description' => 'Pomodoro, mozzarella, uova, asparagi, salamino piccante', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 12.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Uova', 'Asparagi', 'Salamino Piccante'],
            ],
            [
                'pizza' => ['name' => 'Fiera', 'description' => 'Pomodoro, mozzarella, salsiccia, peperoni, cipolla', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 12.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salsiccia', 'Peperoni', 'Cipolla'],
            ],
            [
                'pizza' => ['name' => 'Würstel e Patate', 'description' => 'Pomodoro, mozzarella, würstel, patate', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 12.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Würstel', 'Patate'],
            ],
            [
                'pizza' => ['name' => 'Mexico', 'description' => 'Pomodoro, mozzarella, patate mexico', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Patate Mexico'],
            ],
            [
                'pizza' => ['name' => 'Porkis', 'description' => 'Pomodoro, mozzarella, porchetta, patate fritte', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 12.00, 'price_maxi' => 18.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Porchetta', 'Patate Fritte'],
            ],
            [
                'pizza' => ['name' => 'Jesolana', 'description' => 'Pomodoro, mozzarella, mais, zucchine, gamberetti', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 10.50, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Mais', 'Zucchine', 'Gamberetti'],
            ],
            [
                'pizza' => ['name' => 'Heidi', 'description' => 'Pomodoro, mozzarella, chiodini, trifolati, mozzarella di bufala', 'price_baby' => 6.50, 'price_normale' => 9.00, 'price_media' => 12.00, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Chiodini', 'Trifolati', 'Mozzarella di Bufala'],
            ],
            [
                'pizza' => ['name' => 'Tirolese', 'description' => 'Pomodoro, mozzarella, porcini, panna, speck', 'price_baby' => 7.00, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 17.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Porcini', 'Panna', 'Speck'],
            ],
            [
                'pizza' => ['name' => 'Viziosa', 'description' => 'Pomodoro, mozzarella, olive, capperi, acciughe, mozzarella di bufala, pomodori secchi', 'price_baby' => 6.50, 'price_normale' => 9.00, 'price_media' => 13.00, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Olive', 'Capperi', 'Acciughe', 'Mozzarella di Bufala', 'Pomodori Secchi'],
            ],
            [
                'pizza' => ['name' => 'Blanca', 'description' => 'Mozzarella, stracchino, noci, melanzane', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Mozzarella', 'Stracchino', 'Noci', 'Melanzane'],
            ],
            [
                'pizza' => ['name' => 'Italia', 'description' => 'Pomodoro, mozzarella, pomodorini, ricotta, spinaci', 'price_baby' => 6.50, 'price_normale' => 7.00, 'price_media' => 11.00, 'price_maxi' => 16.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Pomodorini', 'Ricotta', 'Spinaci'],
            ],
            [
                'pizza' => ['name' => 'Golosona', 'description' => 'Pomodoro, mozzarella, salsiccia, gorgonzola, pomodorini, rucola', 'price_baby' => 6.50, 'price_normale' => 8.50, 'price_media' => 12.00, 'price_maxi' => 18.00, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salsiccia', 'Gorgonzola', 'Pomodorini', 'Rucola'],
            ],
            [
                'pizza' => ['name' => 'G.P.', 'description' => 'Pomodoro, mozzarella, prosciutto crudo, mozzarella di bufala, ricotta affumicata', 'price_baby' => 6.50, 'price_normale' => 9.00, 'price_media' => 12.50, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Prosciutto Crudo', 'Mozzarella di Bufala', 'Ricotta Affumicata'],
            ],
            [
                'pizza' => ['name' => 'Roger', 'description' => 'Pomodoro, mozzarella, salsiccia, tartufo, radicchio di Treviso (in stagione)', 'price_baby' => 6.50, 'price_normale' => 9.00, 'price_media' => 12.50, 'price_maxi' => 18.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salsiccia', 'Tartufo', 'Radicchio di Treviso'],
            ],
            [
                'pizza' => ['name' => 'Carbonara', 'description' => 'Pomodoro, mozzarella, pancetta, uovo, grana', 'price_baby' => 6.50, 'price_normale' => 8.00, 'price_media' => 11.00, 'price_maxi' => 17.50, 'is_visible' => true],
                'ingredienti' => ['Pomodoro', 'Mozzarella', 'Pancetta', 'Uovo', 'Grana'],
            ],
        ];

        foreach ($pizze as $item) {
            // 1. Cerca la pizza per nome, o creala se non esiste
            $nuovaPizza = Pizza::firstOrCreate(
                ['name' => $item['pizza']['name']],
                $item['pizza']
            );
    
            // 2. Trasforma i nomi degli ingredienti in ID
            $ids = collect($item['ingredienti'])->map(function($nomeIngrediente) use ($ing) {
                return $ing($nomeIngrediente)->id;
            });
    
            // 3. Collega gli ID alla pizza nella tabella pivot usando sync (evita duplicati)
            $nuovaPizza->ingredients()->sync($ids);
        }
    }
}