<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$books = [
			[
				'author_id'     => 1,
				'slug' 			=> 'it',
				'title'      	=> 'It',
				'annotation' 	=> 'It is a 1986 horror novel by American author Stephen King. It was his 22nd book and his 17th novel written under his own name. The story follows the experiences of seven children as they are terrorized by an evil entity that exploits the fears of its victims to disguise itself while hunting its prey. "It" primarily appears in the form of Pennywise the Dancing Clown to attract its preferred prey of young children.',
				'cover_url' 	=> 'https://upload.wikimedia.org/wikipedia/en/7/78/It_%28Stephen_King_novel_-_cover_art%29.jpg',
				'release_date' 	=> Carbon::createFromDate(1986, 9, 15),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 1,
				'slug' 			=> 'carrie',
				'title'      	=> 'Carrie',
				'annotation' 	=> 'Carrie is a gothic horror novel by American author Stephen King. It was his first published novel, released on April 5, 1974, with a first print-run of 30,000 copies.[1] Set primarily in the then-future year of 1979, it revolves around the eponymous Carrie White, a friendless, bullied high-school girl from an abusive religious household who uses her newly discovered telekinetic powers to exact revenge on those who torment her. In the process, she causes one of the worst local disasters the town has ever had.',
				'cover_url' 	=> 'https://upload.wikimedia.org/wikipedia/en/3/31/Carrienovel.jpg',
				'release_date' 	=> Carbon::createFromDate(1974, 4, 5),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 1,
				'slug' 			=> 'the-green-mile',
				'title'      	=> 'The Green Mile',
				'annotation' 	=> 'The Green Mile is a 1996 serial novel by American writer Stephen King. It tells the story of death row supervisor Paul Edgecombe\'s encounter with John Coffey, an unusual inmate who displays inexplicable healing and empathetic abilities. The serial novel was originally released in six volumes before being republished as a single-volume work. The book is an example of magical realism.',
				'cover_url' 	=> 'https://upload.wikimedia.org/wikipedia/en/f/f7/Greenmilepart1.jpg',
				'release_date' 	=> Carbon::createFromDate(1996, 3, 28),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 2,
				'slug' 			=> 'harry-potter-and-the-philosophers-stone',
				'title'      	=> 'Harry Potter and the Philosopher\'s Stone',
				'annotation' 	=> 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school and with the help of his friends, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry\'s parents, but failed to kill Harry when he was just 15 months old.',
				'cover_url' 	=> 'https://static.wikia.nocookie.net/harrypotter/images/7/7a/Harry_Potter_and_the_Philosopher%27s_Stone_%E2%80%93_Bloomsbury_2014_Children%27s_Edition_%28Paperback_and_Hardcover%29.jpg/revision/latest?cb=20170109041611',
				'release_date' 	=> Carbon::createFromDate(1997, 6, 26),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 2,
				'slug' 			=> 'harry-potter-and-the-chamber-of-secrets',
				'title'      	=> 'Harry Potter and the Chamber of Secrets',
				'annotation' 	=> 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry\'s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school\'s corridors warn that the "Chamber of Secrets" has been opened and that the "heir of Slytherin" would kill all pupils who do not come from all-magical families. These threats are found after attacks that leave residents of the school petrified. Throughout the year, Harry and his friends Ron and Hermione investigate the attacks.',
				'cover_url' 	=> 'https://images-na.ssl-images-amazon.com/images/I/91OINeHnJGL.jpg',
				'release_date' 	=> Carbon::createFromDate(1998, 7, 2),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 2,
				'slug' 			=> 'harry-potter-and-the-prisoner-of-azkaban',
				'title'      	=> 'Harry Potter and the Prisoner of Azkaban',
				'annotation' 	=> 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, the wizard prison, believed to be one of Lord Voldemort\'s old allies.',
				'cover_url' 	=> 'https://images-na.ssl-images-amazon.com/images/I/81EbEWM54ML.jpg',
				'release_date' 	=> Carbon::createFromDate(1999, 7, 8),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 2,
				'slug' 			=> 'harry-potter-and-the-goblet-of-fire',
				'title'      	=> 'Harry Potter and the Goblet of Fire',
				'annotation' 	=> 'Harry Potter and the Goblet of Fire is a fantasy novel written by British author J. K. Rowling and the fourth novel in the Harry Potter series. It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry, and the mystery surrounding the entry of Harry\'s name into the Triwizard Tournament, in which he is forced to compete.',
				'cover_url' 	=> 'https://target.scene7.com/is/image/Target/GUEST_968ff622-d81c-4d6c-ae4a-ed353beba6d2?wid=488&hei=488&fmt=pjpeg',
				'release_date' 	=> Carbon::createFromDate(2000, 7, 8),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 2,
				'slug' 			=> 'harry-potter-and-the-order-of-the-phoenix',
				'title'      	=> 'Harry Potter and the Order of the Phoenix',
				'annotation' 	=> 'Harry Potter and the Order of the Phoenix is a fantasy novel written by British author J. K. Rowling and the fifth novel in the Harry Potter series. It follows Harry Potter\'s struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort, O.W.L. exams, and an obstructive Ministry of Magic. The novel was published on 21 June 2003 by Bloomsbury in the United Kingdom, Scholastic in the United States, and Raincoast in Canada. It sold five million copies in the first 24 hours of publication. It is the longest book of the series.',
				'cover_url' 	=> 'https://upload.wikimedia.org/wikipedia/en/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg',
				'release_date' 	=> Carbon::createFromDate(2003, 7, 27),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 2,
				'slug' 			=> 'harry-potter-and-the-half-blood-prince',
				'title'      	=> 'Harry Potter and the Half-Blood Prince',
				'annotation' 	=> 'Harry Potter and the Half-Blood Prince is a fantasy novel written by British author J.K. Rowling and the sixth and penultimate novel in the Harry Potter series. Set during Harry Potter\'s sixth year at Hogwarts, the novel explores the past of the boy wizard\'s nemesis, Lord Voldemort, and Harry\'s preparations for the final battle against Voldemort alongside his headmaster and mentor Albus Dumbledore.',
				'cover_url' 	=> 'https://images-na.ssl-images-amazon.com/images/I/71HAU27ETJL.jpg',
				'release_date' 	=> Carbon::createFromDate(2005, 7, 16),
				'is_published' 	=> true,
			],
			[
				'author_id'     => 2,
				'slug' 			=> 'harry-potter-and-the-deathly-hallows',
				'title'      	=> 'Harry Potter and the Deathly Hallows',
				'annotation' 	=> 'Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the main Harry Potter series. It was released on 14 July 2007 in the United Kingdom by Bloomsbury Publishing, in the United States by Scholastic, and in Canada by Raincoast Books. The novel chronicles the events directly following Harry Potter and the Half-Blood Prince (2005) and the final confrontation between the wizards Harry Potter and Lord Voldemort.',
				'cover_url' 	=> 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1474171184i/136251._UY735_SS735_.jpg',
				'release_date' 	=> Carbon::createFromDate(2007, 7, 14),
				'is_published' 	=> true,
			],

		];
		\DB::table('books')->insert($books);
    }
}
