<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'The Meaning of Lent in the Catholic Church',
                'category' => 'Liturgy',
                'excerpt' => 'A deep dive into the 40-day season of Lent, a time for penance, prayer, and preparation for Easter.',
                'content' => '<h2>Introduction</h2>
                <p>Lent is a solemn season in the liturgical calendar, lasting 40 days and culminating in Holy Week. It is a time for spiritual renewal through prayer, fasting, and almsgiving.</p>
                <h2>Origins and Significance</h2>
                <p>Lent is rooted in the early Church, reflecting Jesus\' 40 days of fasting in the desert. It prepares the faithful to celebrate the Paschal Mystery of Christ\'s death and resurrection...</p>'
            ],
            [
                'title' => 'Exploring the Role of Saints in Catholicism',
                'category' => 'Saints',
                'excerpt' => 'How saints serve as intercessors, role models, and symbols of faith in the Catholic tradition.',
                'content' => '<h2>Introduction</h2>
                <p>The Catholic Church venerates saints as holy men and women who lived extraordinary lives of faith and virtue. Saints are seen as intercessors and models of holiness for the faithful.</p>
                <h2>What Makes a Saint?</h2>
                <p>Sainthood is achieved through heroic virtue and often involves miracles attributed to their intercession...</p>'
            ],
            [
                'title' => 'The Significance of the Rosary in Catholic Prayer',
                'category' => 'Liturgy',
                'excerpt' => 'Discover the history and spiritual richness of the Rosary, a beloved Catholic devotion.',
                'content' => '<h2>Introduction</h2>
                <p>The Rosary is a cherished devotion in Catholic life, combining vocal and meditative prayer to focus on the life of Christ and the Virgin Mary.</p>
                <h2>History of the Rosary</h2>
                <p>The Rosary traces its roots to the early Church, but its current form was popularized by St. Dominic in the 13th century...</p>'
            ],
            [
                'title' => 'The Theology of the Holy Trinity',
                'category' => 'Doctrine',
                'excerpt' => 'An explanation of the Catholic doctrine of the Holy Trinity: Father, Son, and Holy Spirit.',
                'content' => '<h2>Introduction</h2>
                <p>The mystery of the Holy Trinity is central to Catholic faith, revealing one God in three divine persons: Father, Son, and Holy Spirit.</p>
                <h2>Scriptural Foundations</h2>
                <p>The Trinity is revealed in the Bible, from the creation narrative in Genesis to Jesus\' baptism and the Great Commission...</p>'
            ],
            [
                'title' => 'The Importance of Sacred Scripture in Catholic Life',
                'category' => 'Scripture',
                'excerpt' => 'Understanding the role of the Bible in Catholic worship, teaching, and daily living.',
                'content' => '<h2>Introduction</h2>
                <p>Sacred Scripture is the inspired Word of God, serving as the foundation of Catholic teaching and worship. It reveals God\'s plan of salvation and guides the faithful in their spiritual journey.</p>
                <h2>The Role of the Bible in Worship</h2>
                <p>The Bible is integral to Catholic worship, particularly in the Liturgy of the Word during Mass...</p>'
            ],
            [
                'title' => 'Papal Authority in the Catholic Church',
                'category' => 'Church History',
                'excerpt' => 'Examining the role of the Pope as the spiritual leader of the Catholic Church.',
                'content' => '<h2>Introduction</h2>
                <p>Papal authority is a cornerstone of Catholic teaching, grounded in Christ\'s commission to St. Peter: "You are Peter, and on this rock, I will build my Church."</p>
                <h2>The Pope as Successor of St. Peter</h2>
                <p>The Pope is the Bishop of Rome and spiritual leader of the worldwide Catholic Church...</p>'
            ],
            [
                'title' => 'The History and Significance of Vatican II',
                'category' => 'Church History',
                'excerpt' => 'A look at the transformative Second Vatican Council and its lasting impact on the Church.',
                'content' => '<h2>Introduction</h2>
                <p>Vatican II was a pivotal moment in modern Catholic history, convened by Pope John XXIII to address the Church\'s role in a rapidly changing world.</p>
                <h2>Key Reforms and Teachings</h2>
                <p>The Council introduced significant reforms, including the use of vernacular languages in the Mass and greater engagement with other Christian denominations...</p>'
            ],
        ];

        foreach ($articles as $article) {
            $category = Category::where('name', $article['category'])->first();

            Article::create([
                'title' => $article['title'],
                'slug' => Str::slug($article['title']),
                'excerpt' => $article['excerpt'],
                'content' => $article['content'],
                'category_id' => $category->id,
                'is_published' => true,
                'published_at' => now(),
            ]);
        }
    }
}
