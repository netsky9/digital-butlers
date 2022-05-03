<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$authors = [
			[
				'name'      => 'Stephen',
				'last_name' => 'King',
				'slug'      => 'stephen-king',
				'photo_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Stephen_King%2C_Comicon.jpg/220px-Stephen_King%2C_Comicon.jpg',
				'biography' => 'Stephen Edwin King (born September 21, 1947) is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels. Described as the "King of Horror", a play on his surname and a reference to his high standing in pop culture, his books have sold more than 350 million copies, and many have been adapted into films, television series, miniseries, and comic books. King has published 64 novels, including seven under the pen name Richard Bachman, and five non-fiction books. He has also written approximately 200 short stories, most of which have been published in book collections.',
			],
			[
				'name'      => 'Joanne',
				'last_name' => 'Rowling',
				'slug'      => 'joanne-rowling',
				'photo_url' => 'https://www.jkrowling.com/wp-content/uploads/2019/01/JKRowling_Shot_D_029_V3_lower-768x435.jpg',
				'biography' => 'Joanne Rowling was born on 31st July 1965 at Yate General Hospital near Bristol, and grew up in Gloucestershire in England and in Chepstow, Gwent, in south-east Wales. Her father, Peter, was an aircraft engineer at the Rolls Royce factory in Bristol and her mother, Anne, was a science technician in the Chemistry department at Wyedean Comprehensive, where Jo herself went to school. Anne was diagnosed with multiple sclerosis when Jo was a teenager and died in 1990, before the Harry Potter books were published.  Jo also has a younger sister, Di.'
			],
			[
				'name'      => 'George',
				'last_name' => 'Martin',
				'slug'      => 'george-martin',
				'photo_url' => 'https://fantlab.ru/images/autors/133?r=1492545966',
				'biography' => 'George R.R. Martin, in full George Raymond Richard Martin, original name George Raymond Martin, (born September 20, 1948, Bayonne, New Jersey, U.S.), American writer of fantasy, best known for his Song of Ice and Fire series (1996– ), a bloody saga about various factions vying for control of a fictional kingdom. Martin attended Northwestern University and graduated with bachelor’s (1970) and master’s (1971) degrees in journalism. He had been an aficionado of science fiction and fantasy literature since childhood, and he sold his first short story in 1971. Having received conscientious objector status during the Vietnam War, Martin fulfilled his alternative military service by volunteering for a legal assistance organization in Chicago while earning his living as an organizer of chess tournaments and writing short fiction. He also frequently attended science-fiction and fantasy conventions. He won a Hugo Award in 1974 for his sci-fi novella “A Song for Lya.” In 1976 he accepted a position teaching journalism at Clarke College in Dubuque, Iowa.'
			],
		];
		\DB::table('authors')->insert($authors);
    }
}
